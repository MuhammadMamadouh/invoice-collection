<?php

namespace App\Livewire;

use App\Models\ActionType;
use App\Models\Email;
use App\Models\EmailType;
use App\Models\File;
use App\Models\ItemsChangeStatus;
use App\Models\ItemStatus;
use App\Models\ItemStatusType;
use App\Models\SmsMessage;
use App\Models\TempAction;
use App\Models\TypeTo;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class ItemChangeStatusSteps extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $totalSteps = 3;
    public $itemTypesStatus;
    public $selectedStatus = null;
    public $itemStatusActions;
    public $resolvers;
    public $actionTypes;
    public $days = [];
    public $editorContent;
    // public $showActionForm = false;
    public $selectedAction = 'follow_the_collection_scenario';
    public $selectedEmailType = null;
    public $emailTypes;
    public $typesTo;
    public $selectedActionType = null;
    public $automatic_action = false;
    public $automatic_action_to_be_confirmed = false;
    public $internal_interactive_emailLink = false;

    //---------------------status table data--------------------
    public $resolver;
    public $item;
    public $client;
    public $created_by = 1;
    public $status_id;
    public $status_action_id;
    public $comments;
    public $create_at;
    public $email_type;
    public $from;
    public $type_to;
    public $subject;
    public $message;
    public $get_a_copy;
    public $request_an_acknowledgment;
    public $resolverData;
    protected $casts = [
        'resolver' => 'integer',
    ];

    //---------------------files table data--------------------
    public $file_name;
    public $desc;
    public $visiable_in_internal;
    public $visiable_in_external;
    // public $items_change_status_id;


    //------------------action collection scenario---------

    public $action_name;
    public $action_date;
    public $action_type;
    public $collection_scenario_id;
    public $item_change_status_id;

    //------------------sms messages table---------


    public function mount($item, $client)
    {
        $this->itemTypesStatus = ItemStatusType::all();
        $this->resolvers = User::with('role')->get();
        $this->item = $item;
        $this->client = $client;
        $this->subject = $client->company_code . ' / ' . $client->company_name;
        $this->actionTypes = ActionType::all();
        $this->emailTypes = EmailType::all();
        $this->typesTo = TypeTo::all();
        for ($i = -90; $i <= 365; $i++) {
            $this->days[] = $i;
        }
    }

    public function updatedselectedStatus($id)
    {
        $this->itemStatusActions = ItemStatus::where('type_of_status', $id)->get();
    }

    public function updatedselectedEmailType($value)
    {
        $this->email_type = $value;

    }

    public function updatedresolverData($value)
    {
        $this->resolverData = $value;
    }

    public function updatedSelectedAction($value)
    {
        if ($value === 'follow_the_collection_scenario') {
            $this->action_name = null;
            $this->selectedActionType = null;
        }
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

    public function incrementSteps()
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function decrementSteps()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function save()
    {
        DB::beginTransaction();
        $changedStatus = ItemsChangeStatus::create([
            'item_id' => $this->item->id,
            'status_id' => $this->selectedStatus,
            'status_action_id' => $this->status_action_id,
            'resolver' => $this->resolver,
            'created_by' => $this->created_by,
            'comments' => $this->comments,
            'create_at' => $this->create_at,
            'follow_the_collection_scenario' => $this->selectedAction === 'follow_the_collection_scenario' ? 1 : 0,
            'create_a_specific_action' => $this->selectedAction === 'create_a_specific_action' ? 1 : 0,
        ]);
        if ($this->email_type) {
            $newStatus = ItemsChangeStatus::findOrFail($changedStatus->id);
            $newEmail = new Email([
                'created_by' => $this->created_by,
                'resolver' => $this->resolver,
                'subject' => $this->client->id,
                'message' => $this->editorContent,
                'get_a_copy' => $this->get_a_copy,
                'request_an_acknowledgment' => $this->request_an_acknowledgment,
                'email_type' => $this->email_type,
                'type_to' => $this->type_to,
            ]);
            $newStatus->emails()->save($newEmail);
        }
        if ($this->file_name) {
            foreach ($this->file_name as $file) {
                $filePath = $file->store('items_files', 'public');
                $newStatus = ItemsChangeStatus::findOrFail($changedStatus->id);
                $newStatusFiles = new File([
                    'file_name' => $filePath,
                    'file_size' => $file->getSize(),
                    'desc' => $this->desc,
                    'visiable_in_internal' => $this->visiable_in_internal,
                    'visiable_in_external' => $this->visiable_in_external,
                    // 'items_change_status_id' => $changedStatus->id,
                ]);
                $newStatus->files()->save($newStatusFiles);
            }
        }
        if ($this->action_name) {
            $tempAction = TempAction::create([
                'action_name' => $this->action_name,
                'action_date' => $this->action_date,
                'action_type' => $this->action_type,
                'collection_scenario_id' => $this->client->collectionScenarios->id,
                'client_id' => $this->client->id,
                'item_id' => $this->item->id,
                'created_by' => $this->created_by,
                'item_change_status_id' => $changedStatus->id,
            ]);
            if($this->action_type == 5){
                $newEmail = new Email([
                    'created_by' => $this->created_by,
                    'resolver' => $this->resolver,
                    'subject' => $this->client->id,
                    'message' => $this->editorContent,
                    'automatic_action' => $this->automatic_action,
                    'automatic_action_to_be_confirmed' => $this->automatic_action_to_be_confirmed,
                    'internal_interactive_emailLink' => $this->internal_interactive_emailLink,
                ]);
                $tempAction->emails()->save($newEmail);
            }
            if($this->action_type == 7){
                $newSms = new SmsMessage([
                    'created_by' => $this->created_by,
                    'message' => $this->editorContent,
                    'automatic_action' => $this->automatic_action,
                    'automatic_action_to_be_confirmed' => $this->automatic_action_to_be_confirmed,                
                ]);
                $tempAction->smsMessages()->save($newSms);
            }
        }
        DB::commit();
        return to_route('clients.index');
    }

    public function render()
    {
        return view('livewire.item-change-status-steps');
    }
}
