<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ShowContacts extends Component
{
    public $client;
    public $selectedContactsId;
    public $selectedContact;

    public function mount()
    {
        $this->selectedContact = null ;
    }

    public function updatedSelectedContactsId($value)
    {
        $this->selectedContact = collect($this->client->contacts)->where('id', $value)->first();
    }
    
    public function render()
    {
        return view('livewire.show-contacts');
    }
}
