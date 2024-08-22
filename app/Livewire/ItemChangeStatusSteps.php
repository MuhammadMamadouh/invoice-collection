<?php

namespace App\Livewire;

use App\Models\ItemStatus;
use App\Models\ItemStatusType;
use App\Models\User;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ItemChangeStatusSteps extends Component
{
    public $item;
    public $client;

    public $email_type;
    
    // public $status_action_id;
    public $itemTypesStatus;

    public $itemStatusActions;

    public $selectedStatus = null;

    public $resolver;
    public $resolvers;

    public $nums = 1;

    
    public function updated_email_type($value)
    {

        $this->email_type = $value;
    }

    public function mount($item, $client)
    {
        $this->itemTypesStatus = ItemStatusType::all();
        $this->resolvers = User::with('role')->get();
        $this->item = $item;
        $this->client = $client;
    }

    public function updatedSelectedStatus($id)
    {
        $this->itemStatusActions = ItemStatus::where('type_of_status', $id)->get();
    }

    public function submit()
    {
        dd($this->nums);
        $this->dispatch('updateEmail', [
            'resolver' => $this->resolver,
            'itemStatusActions' => $this->itemStatusActions,
            'nums' => $this->nums,
        ]);
    }


    public function render()
    {
        return view('livewire.item-change-status-steps');
    }
}
