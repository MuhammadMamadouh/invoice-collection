<div class="content-text-2">
    <ul class="d-flex">
        <span>@</span>
        <li><a href="#"
            wire:click="$dispatch('showEditActionForm', { actionId: {{ $actionScenario->id }} })">{{ $actionScenario->action_name }}</a>
        </li>
        <span>{{ $actionScenario->no_of_days }} day(s)
            {{-- <img src="img/france.png"alt=""> --}}
        </span>
    </ul>
</div>
