<?php

namespace App\Livewire;

use App\Models\ActionType;
use App\Models\Email;
use App\Models\EmailType;
use App\Models\File;
use App\Models\ItemsChangeStatus;
use App\Models\ItemStatus;
use App\Models\ItemStatusType;
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
    public $selectedAction = 'go'; 
    public $selectedEmailType = null;
    public $emailTypes;
    public $typesTo;

    //---------------------email table data--------------------
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
    public $number_of_days;
    public $action_type;
    public $collection_scenario_id;


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

    public function toggleActionForm($action)
    {
        $this->selectedAction = $action ? 'create' : 'go';
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
        if ($this->action_name != null && $this->selectedStatus == null) {
            TempAction::create([
                'action_name' => $this->action_name,
                'number_of_days' => $this->number_of_days,
                'action_type' => $this->action_type,
                'collection_scenario_id' => $this->client->collectionScenarios->id,
            ]);
            DB::commit();
        } else {
            $changedStatus = ItemsChangeStatus::create([
                'item_id' => $this->item->id,
                'status_id' => $this->selectedStatus,
                'status_action_id' => $this->status_action_id,
                'resolver' => $this->resolver,
                'created_by' => $this->created_by,
                'comments' => $this->comments,
                'create_at' => $this->create_at,
            ]);
            if($this->email_type){
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
            if($this->file_name){
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
            DB::commit();
        }
    }

    public function render()
    {
        return view('livewire.item-change-status-steps');
    }
}
