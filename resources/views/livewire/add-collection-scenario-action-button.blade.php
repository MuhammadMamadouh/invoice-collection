<div>
    <button class="btn btn-secondary text-capitalize mt-2"
    wire:click="$dispatch('showAddActionForm', { collectionId: {{ $collection->id }} })">
        <span><i class="fa-solid fa-plus"></i></span> Add An Action
    </button>
</div>
