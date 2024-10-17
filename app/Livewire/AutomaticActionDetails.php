<?php

namespace App\Livewire;

use App\Models\Action;
use App\Models\Client;
use Livewire\Attributes\On;
use Livewire\Component;

class AutomaticActionDetails extends Component
{
    public $isVisible = false;
    public $automaticActionId;

    public $subject;
    public $editorContent;

    public $clientId;
    public $actionTypeId;
    public $itemId;
    public $clientName;
    public $clientCode;
    public $clientContacts;
    public $clientItems;

    // -------------------------------collector data---------------------------
    public $colletorFirstName;
    public $colletorLastName;
    public $colletorEmail;
    public $colletorRole;


    #[On('showActionDetails')]
    public function showForm($automaticActionId, $clientId, $actionTypeId, $itemId, $clientName, $clientCode)
    {
        $this->automaticActionId = $automaticActionId;
        $this->itemId = $itemId;
        $this->actionTypeId = $actionTypeId;


        $action = Action::with('emails')->findOrFail($automaticActionId);
        $client = Client::with('contacts', 'collector.role', 'items')->findOrFail($clientId);

        $this->clientContacts = $client->contacts;
        // -------------------------------collector data---------------------------

        $this->colletorEmail =  $client->collector->email;
        $this->colletorRole =  $client->collector->role->name;
        $this->colletorFirstName = $client->collector->first_name;
        $this->colletorLastName = $client->collector->last_name;

        $this->clientItems = $client;

        $this->subject = $this->clientName = $clientName . " / " . $this->clientCode = $clientCode;

        if ($action->emails()->exists()) {
            $email = $action->emails()->first();
            $this->editorContent = $email->message;
        }


        $this->isVisible = true;
    }


    #[On('closeForm')]
    public function hideForm()
    {
        $this->isVisible = false;
    }

    public function render()
    {
        return view('livewire.automatic-action-details');
    }
}
