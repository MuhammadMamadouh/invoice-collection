<div class="col-md-2 col-5">
    <div class="btn openModalBtn btn-info text-white w-100 mb-3"
        wire:click="$dispatch('showActionDetails', { 
            automaticActionId: {{ $automaticAction->action_id }},
            clientId: {{ $automaticAction->client_id }}, 
            actionTypeId:{{ $automaticAction->action_type_id }}, 
            itemId: {{ $automaticAction->item_id }}, 
            clientName: '{{ $automaticAction->client_name }}',
            clientCode: '{{ $automaticAction->client_code }}',
            })">
        <i class="fa-solid {{ $automaticAction->action_type_icon }}"></i>
        {{ $automaticAction->action_type_name }}
    </div>
</div>
