<?php

namespace App\Livewire;

use App\Models\Action;
use App\Models\ActionHistory;
use App\Models\Client;
use App\Models\Email;
use App\Models\SmsMessage;
use App\Models\TypeTo;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class ActionDetails extends Component
{
    public $isVisible = false;
    public $collection_scenario_id;
    public $collection;
    public $manualAction;
    public $clientId;
    public $clientName;
    public $clientCode;
    public $actionId;
    public $clientContacts;
    public $client;

    public $itemId;

    //------------------Action Table -----------
    public $action_name;
    public $action_date;
    public $no_of_days;
    public $action_type_id;
    public $actionTypes;
    public $created_by = 1;
    public $selectedActionType = null;


    //------------------Email / SMS Table -----------

    public $subject;
    public $editorContent;
    public $get_a_copy;
    public $request_an_acknowledgment;
    public $resolvers;
    public $typesTo;
    public $recipients;



    #[On('showActionDetails')]
    public function showForm($manualAction, $clientName, $clientCode, $clientId, $itemId)
    {
        $this->manualAction = $manualAction;
        $this->itemId = $itemId;
        $action = Action::with('emails')->findOrFail($manualAction);

        $this->client = Client::with('contacts', 'collector')->find($clientId);
        if ($this->client) {
            $this->clientContacts = $this->client->contacts;

            // Add collector's email if exists
            if ($this->client->collector) {
                $this->recipients = [
                    'resolverData' => $this->client->collector->email,
                    'display' => $this->client->collector->first_name . ' ' . $this->client->collector->last_name . ' (Collector)',
                ];
            }
            // Add client's contact emails
            foreach ($this->clientContacts as $contact) {
                $this->recipients = [
                    'resolverData' => $contact->email,
                    'display' => $contact->name . ' (' . $contact->email . ')',
                ];
            }
            // Add all users' emails
            foreach ($this->resolvers as $resolver) {
                $this->recipients = [
                    'resolverData' => $resolver->email,
                    'display' => $resolver->first_name . ' ' . $resolver->last_name . ' (' . $resolver->role->name . ')',
                ];
            }
            if ($action->emails()->exists()) {
                $email = $action->emails()->first();
                $this->subject = $this->clientName = $clientName . " / " . $this->clientCode = $clientCode;
                $this->editorContent = $email->message;
            }
        } else {
            session()->flash('error', 'Client not found.');
            $this->isVisible = false;
            return;
        }

        $this->isVisible = true;
    }



    public function updatedselectedActionType($value)
    {
        $this->action_type_id = $value;
    }


    public function addRecipient()
    {
        $this->recipients[] = [
            'type_to' => '',
            'resolverData' => '',
            'display' => '',
        ];
    }


    public function mount()
    {
        $this->resolvers = User::with('role')->get();
        $this->typesTo = TypeTo::all();
    }


    #[On('closeForm')]
    public function hideForm()
    {
        $this->isVisible = false;
    }

    public function submit()
    {
        DB::beginTransaction();
        $actionHistory = ActionHistory::create(
            [
                'action_id' => $this->manualAction,
                'item_id' => $this->itemId,
                'client_id' => $this->client->id,
                'item_change_status_id' => $this->selectedActionType,
            ]
        );
        if ($this->action_type_id == 5) {
            foreach ($this->recipients as $recipient) {
                $typeTo = $recipient['type_to'] ?? null;
                $resolverData = $recipient['resolverData'] ?? null;
                $newEmail = new Email([
                    'created_by' => $this->created_by,
                    'resolver' => $resolverData,
                    'subject' => $this->client->id,
                    'message' => $this->editorContent,
                    'get_a_copy' => $this->get_a_copy,
                    'request_an_acknowledgment' => $this->request_an_acknowledgment,
                    'email_type' => $this->email_type,
                    'type_to' => $typeTo,
                ]);
            }
            $actionHistory->emails()->save($newEmail);
        }
        // if ($this->action_type_id == 7) {
        //     $newSms = new SmsMessage([
        //         'created_by' => $this->created_by,
        //         // 'subject' => $this->subject,
        //         'message' => $this->editorContent,
        //     ]);
        //     $action->smsMessages()->save($newSms);
        // }
        DB::commit();
        $this->hideForm();
        return to_route('collection.manual.actions')->with(['message' => __('created successfully')]);
    }


    public function render()
    {
        return view('livewire.action-details');
    }
}
