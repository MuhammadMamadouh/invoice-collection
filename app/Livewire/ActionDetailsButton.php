<?php

namespace App\Livewire;

use Livewire\Component;

class ActionDetailsButton extends Component
{
    public $manualAction;

    public function render()
    {
        return view('livewire.action-details-button');
    }
}
