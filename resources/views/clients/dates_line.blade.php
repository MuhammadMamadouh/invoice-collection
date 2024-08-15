<div class="bg-white" id="disputeDiv">
    <div class="bg-white position-relative">
        <div class="d-flex small-icons-big-container justify-content-between p-4 px-5 m-0">
            <div class="text-center my-auto small-icons-container">
                {{ __('Key accounts scenario') }} (EN) :
            </div>
            @foreach ($client->collectionScenarios->scenariosActions as $action)
            <div class="text-center small-icons-container" style="z-index: 2">
                <span>{{$action->number_of_days }}d</span>
                <div class="btn-warning small-icons text-light px-2 py-1">
                {{-- {{dd($action)}} --}}
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            @endforeach
        </div>
        <div class="arrow-right"></div>
        <div class="line-through-icons"></div>
    </div>