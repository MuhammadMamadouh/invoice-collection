<?php

namespace App\Livewire;

use App\Models\ActionsCollectionScenario;
use App\Models\ActionType;
use App\Models\ItemsChangeStatus;
use App\Models\ItemsChangeStatusFiles;
use App\Models\ItemStatus;
use App\Models\ItemStatusType;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Reactive;
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
    public $visible_in;
    public $items_change_status_id = 1;

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
        for ($i = -90; $i <= 365; $i++) {
            $this->days[] = $i;
        }
    }

    public function updatedselectedStatus($id)
    {
        $this->itemStatusActions = ItemStatus::where('type_of_status', $id)->get();
    }

    public function updated_email_type($value)
    {
        $this->email_type = $value;
    }

    public function updatedresolverData($value)
    {
        $this->resolverData = $value;
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
        if ($this->action_name) {
            ActionsCollectionScenario::create([
                'action_name' => $this->action_name,
                'number_of_days' => $this->number_of_days,
                'action_type' => $this->action_type,
                'collection_scenario_id' => 1,
            ]);
        } else {
            ItemsChangeStatus::create([
                'item_id' => $this->item->id,
                'status_id' => $this->selectedStatus,
                'status_action_id' => $this->status_action_id,
                'resolver' => $this->resolver,
                'created_by' => $this->created_by,
                'comments' => $this->comments,
                'create_at' => $this->create_at,
                'subject' => $this->client->id,
                'type_to' => $this->type_to,
                'message' => $this->message,
                'get_a_copy' => $this->get_a_copy,
                'request_an_acknowledgment' => $this->request_an_acknowledgment,
                'email_type' => $this->email_type,
            ]);
            foreach ($this->file_name as $file) {
                $filePath = $file->store('items_files', 'public');
                ItemsChangeStatusFiles::create([
                    'file_name' => $filePath,
                    'desc' => $this->desc,
                    'visiable_in' => $this->visible_in,
                    'items_change_status_id' => $this->items_change_status_id,
                    // 'items_change_status_id' => $itemChangeStatus->id,
                ]);
            }
            DB::commit();
        }
    }

    public function render()
    {
        return view('livewire.item-change-status-steps');
    }
}
