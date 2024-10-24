<?php

namespace App\Livewire;

use Livewire\Component;

class ClientDataActionSelection extends Component
{
    public $selectedAction = null;


    public function updatedSelectedAction($value)
    {
        $this->selectedAction = $value;

        if ($value === 'send-email') {
            $this->dispatch('loadSendEmail');

        } elseif ($value === 'send-internal-interactive-email') {
            $this->dispatch('loadSendInternalEmail');

        } elseif ($value === 'send-a-SMS') {
            $this->dispatch('loadSendSms');

        } elseif ($value === 'write-a-dunning-letter') {
            $this->dispatch('loadDunningLetter');

        } elseif ($value === 'create-a-specific-action') {
            $this->dispatch('loadSpecificAction');
        }
    }


    public function render()
    {
        return view('livewire.client-data-action-selection');
    }
}
