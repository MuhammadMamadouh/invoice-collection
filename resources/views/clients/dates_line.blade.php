{{-- {{dd($client->colloectionScenarios)}} --}}

<div class="bg-white" id="disputeDiv">
    <div class="bg-white position-relative">
        <div class="d-flex small-icons-big-container justify-content-between p-4 px-5 m-0">
            <div class="text-center my-auto small-icons-container">
                {{ __('Key accounts scenario') }} (EN) :
            </div>
            {{dd($client)}}
            @foreach ($client->collectionScenarios->scenariosActions as $action)

            <div class="text-center small-icons-container" style="z-index: 2">
                <span>-10d</span>
                <div class="btn-warning small-icons text-light px-2 py-1">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            @endforeach
            {{-- <div class="text-center small-icons-container" style="z-index: 2">
                <span>+5d</span>
                <div class="btn-success small-icons text-light px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
                <span>+12d</span>
                <div class="btn-success small-icons text-light px-2 py-1">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
                <span>+20d</span>
                <div class="btn-secondary small-icons text-light px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
                <span>+28d</span>
                <div class="btn-light small-icons text-dark px-2 py-1">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
                <span>+38d</span>
                <div class="btn-light small-icons text-dark px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
                <span>+45d</span>
                <div class="btn-light small-icons text-dark px-2 py-1">
                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
                <span>+60d</span>
                <div class="btn-light small-icons text-dark px-2 py-1">
                    <i class="fa-solid fa-envelope"></i>
                </div>
            </div> --}}
        </div>
        <div class="arrow-right"></div>
        <div class="line-through-icons"></div>
    </div>
