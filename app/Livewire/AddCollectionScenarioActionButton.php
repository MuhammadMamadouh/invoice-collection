<?php

namespace App\Livewire;

use Livewire\Component;

class AddCollectionScenarioActionButton extends Component
{
    public $collection;

    public function mount($collection)
    {
        $this->collection = $collection;
    }


    public function render()
    { 
        return view('livewire.add-collection-scenario-action-button');
    }
}
