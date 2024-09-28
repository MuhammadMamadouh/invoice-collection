@extends('layouts.dashboard.app')
@section('content')

    <div class="our-titles mt-3 mb-0 text-capitalize text-center">
        <div class="container">
            <h4>{{ __('mange collection scenarios') }}</h4>
        </div>
    </div>
    <div class="scenarios-and-setting-buttons d-flex">
        <div class="container-fluid">
            <div class="col-6">
                <button id="btnone" onclick="secOneOpeen()"
                    class="scenarios-active m-3"style="padding: 5px 10px ;">{{ __('collection scenarios') }}</button>
                <button id="btntwo" onclick="secTwoOpeen()" style="padding: 5px 10px";>{{ __('setting') }}</button>
                <button id="btnthree" onclick="secThreeOpeen()"
                    style="padding: 5px 10px";>{{ __('pre-defined collection scenarios') }}</button>
            </div>
        </div>
    </div>
    <hr class="container-fluid">
    {{-- ------------------------------------------------------------------------------- --}}
    @include('collection_scenarios.predefined_collection_scenarios')
    {{-- ------------------------------------------------------------------------------- --}}
    <section class="sections-1" id="sec-1">
        <div class="flag-dropdown  mt-3 mb-3">
            <div class="container-fluid d-flex justify-content-end ">
                <button type="button" class="btn btn-secondary " onclick="showCreateGroupDiv()"><i
                        class="fa-solid fa-plus"></i> {{ __('New collection scenario') }}</button>

                {{-- ------------------------------------------------------------------------------- --}}
                @include('collection_scenarios.create_collection_scenarios')
                {{-- ------------------------------------------------------------------------------- --}}

                <div class="dropdown">
                    <button class="btn btn-secondary  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span><i class="fa-solid fa-plus"></i></span> {{ __('Add a pre-defined scenario') }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light">
                        @foreach ($preCollections as $collection)
                            <li class="d-flex">
                                <form action="{{ route('collection.add_pre_defined_collection') }}" method="POST"
                                    class="d-flex w-100">
                                    @csrf
                                    <input type="hidden" name="created_by" value="1">
                                    <input type="hidden" name="predefined_scenario_id" value="{{ $collection->id }}">
                                    <button type="submit"
                                        class="dropdown-item d-flex w-100 justify-content-between align-items-center">
                                        {{ $collection->en_name }}
                                        <img src="img/united-states.png" class="img-fluid" alt="">
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="two-contents mt-2 mb-4">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-2 col-3 text-center d-flex">
                        <h6>{{ __('collection scenarios') }}</h6>
                    </div>
                    <div class="col-md-8 col-6 text-center">
                        <h6>{{ __('action of collection scenarios') }}</h6>
                    </div>
                </div>
                <div class="">
                    @forelse ($collections as $key => $collection)
                        <div class="row"
                            style=" {{ $key % 2 == 0 ? 'background-color:#f2f2f2; border: 1px solid #cfcbcb;' : 'background-color:#ffffff' }}">
                            <div class="col-lg-4">
                                <div class="content-2-desc">
                                    <h6 class="mt-3 mb-3">{{ $collection->en_name }}</h6>
                                    <h6 class="txt-2-p mt-3 mb-3 text-black-50 text">
                                        <span class="text-black-50"><i class="fa-solid fa-star"></i></span>
                                        {{ __('Default collection scenario') }}
                                    </h6>
                                    <div class="open-serch">
                                        <a href="" class="text-black-50 text-center">
                                            {{ $collection->client->count() }} {{ __('clients use this collection') }}
                                            {{ __('scenarioLink') }}
                                            <span><i class="fa-regular fa-share-from-square"></i></span>
                                        </a>
                                    </div>
                                    <div class="three-icons-in-action mt-3 mb-3" style="display: inline-flex;">
                                        <button class="text-black-50" onclick="showEditGroupDiv({{ $collection->id }})">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>

                                        {{-- ------------------------------------------------------------------------------- --}}
                                        @include('collection_scenarios.edit_collection_scenarios')
                                        {{-- ------------------------------------------------------------------------------- --}}

                                        <form action="{{ route('collection_scenarios.destroy', $collection->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="text-danger"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                        <form action="{{ route('collection.duplicateScenario', $collection->id) }}"
                                            method="POST">
                                            @csrf
                                            <button class="text-success"><i class="fa-solid fa-copy"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12 col-md-12">
                                <div class="end-buttons text-end container">
                                    <button class="btn btn-secondary text-capitalize mt-2"
                                        onclick="showAddActionDiv({{ $collection->id }})">
                                        <span><i class="fa-solid fa-plus"></i></span>{{ __('Add An Action') }}
                                    </button>
                                </div>
                                {{-- <div class="overlay d-none"
                                    style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;">
                                </div> --}}

                                {{-- ------------------------------------------------------------------------------- --}}
                                @include('collection_scenarios.create_collection_scenarios_actions')
                                {{-- ------------------------------------------------------------------------------- --}}

                                {{-- <form class="d-flex align-items-center mb-3" action="#" method="POST">
                                    <div id="create-group-div-{{ $collection->id }}"
                                        class="position-fixed create-group-div d-none createAction"
                                        style="top:10%; left: 50%; transform: translate(-50%); z-index: 10;">
                                        <div class="bg-white m-auto p-3 shadow-sm position-relative"
                                            style="border-radius: 10px;">
                                            <span class="btn btn-secondary position-absolute"
                                                onclick="hideCreateAction({{ $collection->id }})"
                                                style="border-radius:50%; top: -20px; right: -20px;">
                                                <i class="fa-solid fa-close"></i>
                                            </span>
                                            @csrf
                                            <input type="hidden" name="collection_io_id" class="form-control"
                                                style="width: 355px;" value="{{ $collection->id }}">
                                            <div class="my-2">
                                                <h3 class="text-center mb-3">{{ __('Create An Action') }}</h3>
                                                <div class="col-2">
                                                    <label for="inputname18"
                                                        style="width: 120px;">{{ __('Action Name') }}* :</label>
                                                </div>
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <input type="text" name="action_n" class="form-control"
                                                            id="inputname18" style="width: 355px;">

                                                    </div>
                                                </div>
                                                <div class="col-2" style="margin-top: 15px;">
                                                    <label for="inputname18"
                                                        style="width: 120px;">{{ __('No. of days') }}* :</label>
                                                </div>
                                                <div class="col-10">

                                                </div>
                                                <div class="col-2" style="margin-top: 15px;">
                                                    <label for="inputname18" style="width: 120px;"> :</label>
                                                </div>
                                                <div class="col-10">
                                                    <div class="input-group">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5">
                                                <button class="btn btn-success"><i
                                                        class="fa-solid fa-plus"></i>{{ __('Add') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form> --}}

                                @foreach ($collection->actionScenarios as $ActionScenario)
                                    <div class="content-text-2">
                                        <ul class="d-flex">
                                            <span>@</span>
                                            <li><a href="#"
                                                    onclick="showEditActionDiv({{ $ActionScenario->id }})">{{ $ActionScenario->action_name }}</a>
                                            </li>
                                            <span>{{ $ActionScenario->number_of_days }} day(s)
                                                {{-- <img src="img/france.png"alt=""> --}}
                                            </span>
                                        </ul>
                                    </div>
                                    {{-- ------------------------------------------------------------------------------- --}}
                                    @include('collection_scenarios.edit_collection_scenarios_actions')
                                    {{-- ------------------------------------------------------------------------------- --}}
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <p>No scenarios Yet....</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    {{-- ------------------------------------------------------------------------------- --}}
    @include('collection_scenarios.collection_scenarios_settings')
    {{-- ------------------------------------------------------------------------------- --}}
@endsection
@push('scripts')
    <script>
        var sub = null;

        function getValue() {
            // Get the hidden input element by its ID
            var inputElement = document.getElementById("subject_t");
            // Retrieve the value from the input element
            var value = inputElement.value;
            sub = value;
            // Display the value (for example, using an alert)
            //alert("The value of the hidden input is: " + value);
        }
        getValue();
        //   var body =  $("#mail_content .clear-2").val();
        function actionTypeDropdownChange(selectElementOne) {
            //const dunningLetter1 = document.getElementById('dunning-letter');
            var actionId = document.getElementById('action_id').value;
            console.log(sub);
            const value1 = selectElementOne.value;
            // Show the relevant section based on the selected option
            if (value1 == 2 || value1 == 3 || value1 == 4 || value1 == 5 || value1 == 6) {
                console.log(actionId);
                if (value1 == actionId) {
                    //var body =  document.getElementById("mail_content").value;
                    $('.clear-1').removeClass("d-none");
                    $("#mail_subject .clear-1").val(sub);
                    //document.getElementById("mail_content").value = body;
                    $('.clearr').removeClass("d-none");
                } else {
                    //console.log(value1);
                    $('.clear-1').val("");
                    $('.clear-2').val("");
                    $('.clearr').removeClass("d-none");
                    $('.clear-1').removeClass("d-none");
                }
            }
            if (value1 == 1 || value1 == 8) {
                if (value1 == actionId) {
                    var form = document.getElementById("myForm");
                    form.reset();
                    $('.clearr').removeClass("d-none");
                } else {
                    $('.clearr').addClass("d-none");
                    $('.clear-1').val("");
                    $('.clear-2').val("");
                    $('.clear-1').removeClass("d-none");
                }
            }
            if (value1 == 7) {
                if (value1 == actionId) {
                    var sub = document.getElementById("myForm").value;
                    var body = document.getElementById("myForm").value;
                    $('.clear-1').addClass("d-none");
                    $('.clearr').removeClass("d-none");
                } else {
                    $('.clear-1').val("");
                    $('.clear-2').val("");
                    $('.clear-1').addClass("d-none");
                    $('.clearr').removeClass("d-none");
                }
            }
            // }


            //     else if (value1 == 4) {
            //     dunningLetter1.classList.remove("d-none")
            //  //   mail_subject.style.display="none"; 
            //     } else if (value1 == 5) { 
            //         dunningLetter1.classList.remove("d-none");
            //     document.getElementById('is_automatic_action_check').style.display="block";
            //     } else if (value1 == 7) {
            //         dunningLetter1.classList.remove("d-none"); 
            //     document.getElementById('sub_lb').style.display="none";
            //     document.getElementById('mail_subject').style.display="none";
            //     document.getElementById('is_automatic_action_check').style.display="block";  
            //     }
            // });
        }
        //});
    </script>
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="/js/add-scenario-dropdown.js"></script>
    <script src="/js/collection.js"></script>
    <script src="/js/risk.js"></script>
    <script src="/js/mange.js"></script>
    <script src="/js/email.js"></script>
    <script>
        function showAddActionDiv(collectionId) {
            document.getElementById(`add-action-div-${collectionId}`).classList.remove("d-none")
            document.querySelector(".overlay").classList.remove("d-none")
        }

        function showEditActionDiv(collectionId) {
            document.querySelector(`.edit-action-div-${collectionId}`).classList.remove("d-none");
            document.querySelector(".overlay").classList.remove("d-none");
        }

        function hideAddActionDiv(collectionId) {
            document.getElementById(`add-action-div-${collectionId}`).classList.add("d-none")
            document.querySelector(".overlay").classList.add("d-none")
            document.querySelector(".new-collection-scenario").classList.add("d-none")
        }

        function hideEditActionDiv(collectionId) {
            document.querySelector(`.edit-action-div-${collectionId}`).classList.add("d-none")
            document.querySelector(".overlay").classList.add("d-none")
            document.querySelector(".new-collection-scenario").classList.add("d-none")
        }
    </script>
@endpush
