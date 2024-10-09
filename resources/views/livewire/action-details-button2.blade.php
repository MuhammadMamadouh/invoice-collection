<div class="col-2 hide">
    <p><a href="#" class="openModalBtn"
            wire:click="$dispatch('showActionDetails', { 
            manualAction: {{ $manualAction->action_id }}, 
            clientId: {{ $manualAction->client_id }}, 
            clientName: '{{ $manualAction->client_name }}',
            clientCode: '{{ $manualAction->client_code }}',
            })">
            {{ $manualAction->action_type_name }}
        </a></p>
</div>
