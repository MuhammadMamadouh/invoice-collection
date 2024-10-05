<?php

namespace App\Livewire;

use App\Models\Action;
use App\Models\ActionType;
use App\Models\Email;
use App\Models\SmsMessage;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateCollectionScenarioAction extends Component
{
    public $isVisible = false;
    public $collection_scenario_id;
    public $collection;
    public $collectionId;
    public $actionId;


    //------------------Action Table -----------
    public $action_name;
    public $action_date;
    public $no_of_days;
    public $action_type_id;
    public $actionTypes;
    public $created_by = 1;
    public $selectedActionType = null;
    public $automatic_action = false;
    public $automatic_action_to_be_confirmed = false;
    public $internal_interactive_emailLink = false;


    //------------------Email / SMS Table -----------

    public $subject;
    public $editorContent;




    #[On('showAddActionForm')]
    public function showForm($collectionId)
    {
        $this->collectionId = $collectionId;
        $this->collection_scenario_id = $this->collectionId;
        $this->isVisible = true;
    }



    #[On('showEditActionForm')]
    public function editForm($actionId)
    {
        $action = Action::findOrFail($actionId);
        $this->actionId                          = $action->id;
        $this->action_name                       = $action->action_name;
        $this->no_of_days                        = $action->no_of_days;
        $this->action_date                       = $action->action_date;
        $this->action_type_id                    = $action->action_type_id;
        $this->collection_scenario_id            = $action->collection_scenario_id;
        $this->automatic_action                  = $action->automatic_action;
        $this->automatic_action_to_be_confirmed  = $action->automatic_action_to_be_confirmed;
        $this->internal_interactive_emailLink    = $action->internal_interactive_emailLink;
        // Load email data if it exists
        if ($action->emails()->exists()) {
            $email = $action->emails()->first();
            $this->editorContent = $email->message;
            $this->subject = $email->subject;
        }

        // Load SMS data if it exists
        if ($action->smsMessages()->exists()) {
            $sms = $action->smsMessages()->first();
            $this->editorContent = $sms->message;
        }

        // Show the form
        $this->isVisible = true;
    }

    #[On('closeForm')]
    public function hideForm()
    {
        $this->isVisible = false;
    }


    public function mount()
    {
        $this->actionTypes = ActionType::all();
    }



    public function updatedselectedActionType($value)
    {
        $this->action_type_id = $value;
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
            // 'action_date' => 'required|date',
            'no_of_days' => 'required|numeric',
            'action_type_id' => 'required',
        ]);
        // dd($this->action_date);
        DB::beginTransaction();
        $action = Action::updateOrCreate(
            ['id' => $this->actionId],
            [
                'action_name' => $this->action_name,
                'action_date' => $this->action_date,
                'no_of_days' => $this->no_of_days ?? '',
                'action_type_id' => $this->action_type_id,
                'created_by' => $this->created_by,
                'collection_scenario_id' => $this->collection_scenario_id,
                'automatic_action' => $this->automatic_action,
                'automatic_action_to_be_confirmed' => $this->automatic_action_to_be_confirmed,
                'internal_interactive_emailLink' => $this->internal_interactive_emailLink,
            ]
        );
        if ($this->action_type_id == 5) {
            $newEmail = new Email([
                'created_by' => $this->created_by,
                // 'subject' => $this->subject,
                'message' => $this->editorContent,
            ]);
            $action->emails()->save($newEmail);
        }
        if ($this->action_type_id == 7) {
            $newSms = new SmsMessage([
                'created_by' => $this->created_by,
                // 'subject' => $this->subject,
                'message' => $this->editorContent,
            ]);
            $action->smsMessages()->save($newSms);
        }
        DB::commit();
        $this->reset(['action_name', 'action_date', 'action_type_id']);
        $this->hideForm();
        return to_route('collection_scenarios.index')->with(['message' => __('created successfully')]);
    }

    public function render()
    {
        return view('livewire.create-collection-scenario-action');
    }
}
