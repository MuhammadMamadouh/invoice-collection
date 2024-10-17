<div class="col-2 hide">
    <p>
        <a href="#" class="openModalBtn" 
            wire:click="$dispatch('showActionDetails', {
                automaticActionId: {{ $automaticAction->action_id }},
                clientId: {{ $automaticAction->client_id }}, 
                actionTypeId:{{ $automaticAction->action_type_id }}, 
                itemId: {{ $automaticAction->item_id }}, 
                clientName: '{{ $automaticAction->client_name }}',
                clientCode: '{{ $automaticAction->client_code }}',
            })">
            {{ $automaticAction->action_type_name }}
        </a>
    </p>
</div>
