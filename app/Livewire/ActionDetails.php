<?php

namespace App\Livewire;

use App\Models\Action;
use App\Models\Client;
use App\Models\TypeTo;
use App\Models\User;
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

    //------------------Action Table -----------
    public $action_name;
    public $action_date;
    public $no_of_days;
    public $action_type_id;
    public $actionTypes;
    public $created_by = 1;
    public $selectedActionType = null;
    public $automatic_action = false;
    public $automatic_action_to_be_confirmed = false;
    public $internal_interactive_emailLink = false;


    //------------------Email / SMS Table -----------

    public $subject;
    public $editorContent;
    public $get_a_copy;
    public $request_an_acknowledgment;

    public $resolvers;
    public $typesTo;
    public $recipients;


    #[On('showActionDetails')]
    public function showForm($manualAction, $clientName, $clientCode, $clientId)
    {
        $this->manualAction = $manualAction;
        $action = Action::with('emails')->findOrFail($manualAction);

        // Fetch the client and store it, handle the case where the client might not be found
        $this->client = Client::with('contacts', 'collector')->find($clientId); // Use find instead of findOrFail

        if ($this->client) {
            $this->clientContacts = $this->client->contacts;

            // Add collector's email if exists
            if ($this->client->collector) {
                $this->recipients[] = [
                    'type_to' => 'collector',
                    'resolverData' => $this->client->collector->email,
                    'display' => $this->client->collector->first_name . ' ' . $this->client->collector->last_name . ' (Collector)',
                ];
            }

            // Add client's contact emails
            foreach ($this->clientContacts as $contact) {
                $this->recipients[] = [
                    'type_to' => 'contact',
                    'resolverData' => $contact->email,
                    'display' => $contact->name . ' (' . $contact->email . ')',
                ];
            }

            // Add all users' emails
            foreach ($this->resolvers as $resolver) {
                $this->recipients[] = [
                    'type_to' => 'resolver',
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
            // Handle the case where the client is not found
            // You can choose to throw an exception or set a flash message
            session()->flash('error', 'Client not found.');
            $this->isVisible = false; // Optionally hide the form if the client is not found
            return; // Exit early if no client
        }

        $this->isVisible = true;
    }
    
    
    
    // public function showForm($manualAction, $clientName, $clientCode, $clientId)
    // {
    //     $this->manualAction = $manualAction;
    //     $action = Action::with('emails')->findOrFail($manualAction);

    //     $clientContact = Client::with('contacts', 'collector')->findOrFail($clientId);
    //     $this->resolvers = $clientContact->contacts->email;

    //     if ($action->emails()->exists()) {
    //         $email = $action->emails()->first();
    //         $this->subject = $this->clientName = $clientName . " / " . $this->clientCode = $clientCode;
    //         $this->editorContent = $email->message;
    //     }
        

    //     $this->isVisible = true;
    // }



    public function updatedselectedActionType($value)
    {
        $this->action_type_id = $value;
    }


    public function updatedAutomaticAction($value)
    {
        if ($value) {
            $this->automatic_action_to_be_confirmed = true;
            $this->internal_interactive_emailLink = false;
        }
    }


    public function updatedInternalInteractiveEmailLink($value)
    {
        if ($value) {
            $this->automatic_action = false;
            $this->automatic_action_to_be_confirmed = false;
        }
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
        // $this->clientContacts = [];
        // $this->recipients = [];
    }


    #[On('closeForm')]
    public function hideForm()
    {
        $this->isVisible = false;
    }




    public function render()
    {
        return view('livewire.action-details');
    }
}
