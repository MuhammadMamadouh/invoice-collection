<?php

namespace App\Livewire;

use App\Models\Action;
use App\Models\ActionHistory;
use App\Models\Client;
use App\Models\Email;
use App\Models\File;
use App\Models\SmsMessage;
use App\Models\TypeTo;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;


class ActionDetails extends Component
{
    use WithFileUploads;


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
    public $actionTypeId;
    public $actionType;
    public $created_by = 1;
    public $selectedActionType = null;


    //------------------Email / SMS Table -----------

    public $subject;
    public $editorContent;
    public $get_a_copy = 0;
    public $request_an_acknowledgment = 0;
    public $resolvers;
    public $typesTo;
    public $type_To;
    public $resolver;
    public $recipients = [];



    //---------------------files table data--------------------
    public $file_name;
    public $desc;
    public $visiable_in_internal;
    public $visiable_in_external;




    #[On('showActionDetails')]
    public function showForm($manualAction, $clientName, $clientCode, $clientId, $itemId, $actionTypeId)
    {
        $this->manualAction = $manualAction;
        $this->itemId = $itemId;
        $this->actionTypeId = $actionTypeId;

        $action = Action::with('emails')->findOrFail($manualAction);

        $this->resolvers = User::with('role')->get();

        $this->client = Client::with('contacts', 'collector')->findOrFail($clientId);

        if ($this->client) {
            $this->clientContacts = $this->client->contacts;

            $this->subject = $this->clientName = $clientName . " / " . $this->clientCode = $clientCode;

            if ($action->emails()->exists()) {
                $email = $action->emails()->first();
                $this->editorContent = $email->message;
            }

        } else {
            session()->flash('error', 'Client not found.');
            $this->isVisible = false;
            return;
        }

        $this->isVisible = true;
    }



    // public function updatedselectedActionType($value)
    // {
    //     $this->action_type_id = $value;
    // }


    // public function addRecipient()
    // {
    //     $this->recipients[] = [
    //         'type_to' => '',
    //         'resolverId' => '',
    //         'resolverData' => '',
    //         'display' => '',
    //     ];
    // }


    public function mount()
    {
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
        if ($this->actionTypeId == 5) {
            $newEmail = new Email([
                'created_by' => $this->created_by,
                'resolver' => $this->resolver,
                'subject' => $this->client->id,
                'message' => $this->editorContent,
                'get_a_copy' => $this->get_a_copy,
                'request_an_acknowledgment' => $this->request_an_acknowledgment,
                'type_to' => $this->type_To,
            ]);
            $actionHistory->emails()->save($newEmail);
            if ($this->file_name) {
                foreach ($this->file_name as $file) {
                    $filePath = $file->store('items_files', 'public');
                    $newEmail = Email::findOrFail($newEmail->id);
                    $newEmailFiles = new File([
                        'file_name' => $filePath,
                        'file_size' => $file->getSize(),
                        'desc' => $this->desc,
                        'visiable_in_internal' => $this->visiable_in_internal,
                        'visiable_in_external' => $this->visiable_in_external,
                    ]);
                    $newEmail->files()->save($newEmailFiles);
                }
            }
        }
        // if ($this->actionTypeId == 7) {
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
