<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ClientDataActionHandler extends Component
{
    public $currentComponent = null;

    public $clientData;


    #[On('loadSendEmailComponent')]
    public function loadSendEmail()
    {
        $this->currentComponent = 'send-email';
    }
    

    #[On('loadSendInternalEmailComponent')]
    public function loadSendInternalEmail()
    {
        $this->currentComponent = 'send-internal-email';
    }


    #[On('loadSendSmsComponent')]
    public function loadSendSms()
    {
        $this->currentComponent = 'send-sms';
    }


    #[On('loadDunningLetterComponent')]
    public function loadDunningLetter()
    {
        $this->currentComponent = 'dunning-letter';
    }


    #[On('loadSpecificActionComponent')]
    public function loadSpecificAction()
    {
        $this->currentComponent = 'specific-action';
    }


    public function render()
    {
        return view('livewire.client-data-action-handler');
    }
}
