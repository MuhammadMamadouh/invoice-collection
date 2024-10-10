<div class="col-md-2 col-5">
    <button type="button" class="btn openModalBtn btn-info text-white w-100 mb-3"
        wire:click="$dispatch('showActionDetails', { 
            manualAction: {{ $manualAction->action_id }}, 
            clientId: {{ $manualAction->client_id }}, 
            itemId: {{ $manualAction->item_type_id }}, 
            clientName: '{{ $manualAction->client_name }}',
            clientCode: '{{ $manualAction->client_code }}',
            })">
        <i class="fa-solid {{ $manualAction->action_type_icon }}"></i>
        {{ $manualAction->action_type_name }}
    </button>
</div>
