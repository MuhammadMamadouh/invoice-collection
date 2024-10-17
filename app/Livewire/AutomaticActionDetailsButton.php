<?php

namespace App\Livewire;

use Livewire\Component;

class AutomaticActionDetailsButton extends Component
{

    public $automaticAction;
    
    public function render()
    {
        return view('livewire.automatic-action-details-button');
    }
}
