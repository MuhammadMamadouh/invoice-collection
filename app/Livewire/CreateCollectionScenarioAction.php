<?php

namespace App\Livewire;

use App\Models\Action;
use App\Models\ActionType;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateCollectionScenarioAction extends Component
{
    public $isVisible = false;
    public $collection_scenario_id;
    public $collection;
    public $collectionId; 
    public $action_name;
    public $action_date;
    public $action_type;
    public $actionTypes;
    public $created_by = 1;
    public $selectedActionType = null;
    public $automatic_action = false;
    public $automatic_action_to_be_confirmed = false;
    public $internal_interactive_emailLink = false;


    

    #[On('showAddActionForm')]
    public function showForm($collectionId)
    {
        $this->collectionId = $collectionId;
        $this->collection_scenario_id = $this->collectionId;
        $this->isVisible = true;
    }


    public function mount()
    {
        $this->actionTypes = ActionType::all();
    }


    public function hideForm()
    {
        $this->isVisible = false;
    }

    public function updatedselectedActionType($value)
    {
        $this->action_type = $value;
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
    public function submit()
    {
        $this->validate([
            'action_name' => 'required',
            'action_date' => 'required|date',
            'action_type' => 'required',
        ]);
        Action::create([
            'action_name' => $this->action_name,
            'action_type' => $this->action_type,
            'action_date' => $this->action_date,
            'created_by' => $this->created_by,
            'collection_scenario_id' => $this->collection_scenario_id,
            'automatic_action' => $this->automatic_action,
            'automatic_action_to_be_confirmed' => $this->automatic_action_to_be_confirmed,
            'internal_interactive_emailLink' => $this->internal_interactive_emailLink,
        ]);
        $this->reset(['action_name', 'action_date', 'action_type']);
        $this->hideForm();
        return to_route('collection_scenarios.index')->with(['message' => __('created successfully')]);
    }

    public function render()
    {
        return view('livewire.create-collection-scenario-action');
    }
}
