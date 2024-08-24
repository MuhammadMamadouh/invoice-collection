<?php

namespace App\Livewire;

use App\Models\ItemStatus;
use App\Models\ItemStatusType;
use App\Models\User;
use Livewire\Component;

class ShowItemStatus extends Component
{
    public $itemTypesStatus;

    public $itemStatusActions;

    public $selectedStatus = null;

    public $resolvers;
    public function mount()
    {
        $this->itemTypesStatus = ItemStatusType::all();
        $this->resolvers = User::with('role')->get();
    }

    public function updatedSelectedStatus($id)
    {
        $this->itemStatusActions = ItemStatus::where('type_of_status', $id)->get();
    }
    public function render()
    {
        return view('livewire.show-item-status');
    }
}
