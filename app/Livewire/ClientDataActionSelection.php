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
            $this->dispatch('loadSendEmailComponent');
        } elseif ($value === 'send-internal-email') {
            $this->dispatch('loadSendInternalEmailComponent');
        } elseif ($value === 'send-sms') {
            $this->dispatch('loadSendSmsComponent');
        } elseif ($value === 'dunning-letter') {
            $this->dispatch('loadDunningLetterComponent');
        } elseif ($value === 'specific-action') {
            $this->dispatch('loadSpecificActionComponent');
        }
    }


    public function render()
    {
        return view('livewire.client-data-action-selection');
    }
}
