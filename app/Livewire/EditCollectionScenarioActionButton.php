<?php

namespace App\Livewire;

use Livewire\Component;

class EditCollectionScenarioActionButton extends Component
{
    public $actionScenario;

    public function mount($actionScenario = null)
    {
        $this->actionScenario = $actionScenario;
    }


    public function render()
    {
        return view('livewire.edit-collection-scenario-action-button');
    }
}
