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

                <button id="btnone" onclick="secOneOpeen()" class="scenarios-active m-3"
                    style="padding: 5px 10px ;">{{ __('collection scenarios') }}</button>
                <button id="btntwo" onclick="secTwoOpeen()" style="padding: 5px 10px";>{{ __('setting') }}</button>
            </div>
        </div>
    </div>
    <hr class="container-fluid">
    <!--start-desc-->
    <section class="sections-1 " id="sec-1">
        <div class="flag-dropdown  mt-3 mb-3">
            <div class="container-fluid d-flex justify-content-end ">
                <button type="button" class="btn btn-primary" onclick="showCreateGroupDiv()"><i
                        class="fa-solid fa-plus"></i> {{ __('New collection scenario') }}</button>
                <div class="position-fixed create-group-div d-none"
                    style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
                    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
                        <span class="btn btn-secondary position-absolute" onclick="hideCreateGroupDiv()"
                            style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
                        <form class="d-flex align-items-center mb-3" action="{{ route('collection_scenarios.store') }}"
                            method="POST">
                            @csrf
                            <div class="my-2">
                                <h3 class="text-center mb-3">{{ __('Create A Collection Scenario') }}</h3>
                                <div class="col-2 ">
                                    <label for="inputname18"> {{ __('Name') }}* :</label>
                                </div>
                                <div class="col-10">
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control " id="inputname18"
                                            style="width: 355px;">
                                        @error('name')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div><!--24-->
                            <div class="text-center mt-5">
                                <button class="btn btn-success"><i class="fa-solid fa-plus"></i>{{ __('Add') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span><i class="fa-solid fa-plus"></i></span> {{ __('Add a pre-defined scenario') }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light">
                        @foreach ($collections as $collection)
                            <li class="d-flex"><a class="dropdown-item" href="#">{{ $collection->name }}<img
                                        src="img/united-states.png" class="img-fluid" alt=""> </a></li>
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
                        <div class="row" style=" {{$key % 2 == 0 ? 'background-color:#f2f2f2; border: 1px solid #cfcbcb;' : 'background-color:#ffffff'}}">
                            <div class="col-lg-4">
                                <div class="content-2-desc">
                                    <h6 class="mt-3 mb-3">{{ $collection->name }}</h6>
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
                                        <div id="edit-group-div-{{ $collection->id }}"
                                            class="position-fixed edit-group-div d-none"
                                            style="top:10%; left: 50%; transform: translate(-50%); z-index: 10;">
                                            <form class="d-flex align-items-center mb-3"
                                                action="{{ route('collection_scenarios.update', $collection->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('patch')
                                                <div class="bg-white m-auto p-3 shadow-sm position-relative"
                                                    style="border-radius: 10px;">
                                                    <span class="btn btn-secondary position-absolute"
                                                        onclick="hideCreateAction({{ $collection->id }})"
                                                        style="border-radius:50%; top: -20px; right: -20px;">
                                                        <i class="fa-solid fa-close"></i>
                                                    </span>
                                                    <div class="my-2">
                                                        <div class="col-2">
                                                            <label for="inputname18">{{ __('Name') }} *:</label>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="input-group">
                                                                <input type="text" name="name" class="form-control"
                                                                    id="inputname18" style="width: 355px;"
                                                                    value="{{ old('name', $collection->name) }}">
                                                                @error('name')
                                                                    <div class="alert text-danger" style="font-weight: bold;">
                                                                        {{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <button class="btn btn-success"
                                                            style="background: green !important;">
                                                            <i class="fa-solid fa-check"></i>{{ __('Modify') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <form action="{{ route('collection_scenarios.destroy', $collection->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="text-black-50"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                        <form action="{{ route('collection.duplicateScenario', $collection->id) }}"
                                            method="POST">
                                            @csrf
                                            <button class="text-black-50"><i class="fa-solid fa-copy"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-12 col-md-12">
                                <div class="end-buttons text-end container">
                                    <button class="btn btn-primary text-capitalize mt-2"
                                        onclick="showCreateAction({{ $collection->id }})">
                                        <span><i class="fa-solid fa-plus"></i></span>{{ __('Add An Action') }}
                                    </button>
                                </div>
                                <form class="d-flex align-items-center mb-3"
                                    action="{{ route('collection.storeAction') }}" method="POST">
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
                                            <input type="hidden" name="collection_scenarios_id" class="form-control"
                                                style="width: 355px;" value="{{ $collection->id }}">
                                            <div class="my-2">
                                                <h3 class="text-center mb-3">{{ __('Create An Action') }}</h3>
                                                <div class="col-2">
                                                    <label for="inputname18"
                                                        style="width: 120px;">{{ __('Action Name') }}* :</label>
                                                </div>
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <input type="text" name="action_name" class="form-control"
                                                            id="inputname18" style="width: 355px;">
                                                        @error('action_name')
                                                            <div class="alert text-danger" style="font-weight: bold;">
                                                                {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-2" style="margin-top: 15px;">
                                                    <label for="inputname18"
                                                        style="width: 120px;">{{ __('No. of days') }}* :</label>
                                                </div>
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <select name="number_of_days" class="form-select"
                                                            id="inputname19">
                                                            <option value="" selected disabled>
                                                                {{ __('select one') }}</option>
                                                            @foreach ($days as $day)
                                                                <option value="{{ $day }}">{{ $day }}
                                                                    days</option>
                                                            @endforeach
                                                        </select>
                                                        @error('number_of_days')
                                                            <div class="alert text-danger" style="font-weight: bold;">
                                                                {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-2" style="margin-top: 15px;">
                                                    <label for="inputname18"
                                                        style="width: 120px;">{{ __('Action Type') }}* :</label>
                                                </div>
                                                <div class="col-10">
                                                    <div class="input-group">
                                                        <select name="action_type" class="form-select" id="inputname19">
                                                            <option value="" selected disabled>
                                                                {{ __('Select One') }}</option>
                                                            @foreach ($actionTypes as $actionType)
                                                                <option value="{{ $actionType->id }}">
                                                                    {{ $actionType->en_name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('action_type')
                                                            <div class="alert text-danger" style="font-weight: bold;">
                                                                {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5">
                                                <button class="btn btn-success"><i
                                                        class="fa-solid fa-plus"></i>{{ __('Add') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @foreach ($collection->ActionScenarios as $ActionScenario)
                                    <div class="content-text-2">
                                        <ul class="d-flex">
                                            <span>@</span>
                                            <li><a href="">{{ $ActionScenario->action_name }}</a></li>
                                            <span>{{ $ActionScenario->number_of_days }} <img src="img/france.png"
                                                    alt=""></span>
                                        </ul>
                                    </div>
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
    {{-- <section class="sections-2 d-none" id="sec-2">
        <div class="four-inputs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="firt d-flex justify-content-around mt-3 mb-3">
                            <label>Minimum amount for collection :</label>
                            <input type="text" placeholder="50">
                            <span>€</span>
                        </div>
                        <div class="firt d-flex justify-content-around mt-3 mb-3">
                            <label>Ignore transactions whose amount is less than :</label>
                            <input type="text" placeholder="50">
                            <span>€</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-3 mb-3">
                            <div class="automatic-between d-flex align-items-center">
                                <h6>Automatic action between </h6>
                                <select name="relance_auto_horaire_min" style="font-size: 12px;" class="">
                                    <option value="1">1:00</option>
                                    <option value="2">2:00</option>
                                    <option value="3">3:00</option>
                                    <option value="4">4:00</option>
                                    <option value="5">5:00</option>
                                    <option value="6">6:00</option>
                                    <option value="7">7:00</option>
                                    <option value="8" selected>8:00</option>
                                    <option value="9">9:00</option>
                                    <option value="10">10:00</option>
                                    <option value="11">11:00</option>
                                    <option value="12">12:00</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                    <option value="18">18:00</option>
                                    <option value="19">19:00</option>
                                    <option value="20">20:00</option>
                                    <option value="21">21:00</option>
                                    <option value="22">22:00</option>
                                    <option value="23">23:00</option>
                                    <option value="24">24:00</option>
                                </select>
                                <h6 style="margin: 5px;">and</h6>
                                <select name="relance_auto_horaire_min" style="font-size: 12px;" class="">
                                    <option value="1">1:00</option>
                                    <option value="2">2:00</option>
                                    <option value="3">3:00</option>
                                    <option value="4">4:00</option>
                                    <option value="5">5:00</option>
                                    <option value="6">6:00</option>
                                    <option value="7">7:00</option>
                                    <option value="8" selected>8:00</option>
                                    <option value="9">9:00</option>
                                    <option value="10">10:00</option>
                                    <option value="11">11:00</option>
                                    <option value="12">12:00</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                    <option value="18">18:00</option>
                                    <option value="19">19:00</option>
                                    <option value="20">20:00</option>
                                    <option value="21">21:00</option>
                                    <option value="22">22:00</option>
                                    <option value="23">23:00</option>
                                    <option value="24">24:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6   mt-3 mb-3 d-flex align-items-center justify-content-center">
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Sun">
                                <label for="Sun">Sun</label>
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Mon">
                                <label for="Mon">Mon</label>
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Tue">
                                <label for="Tue">Tue</label>
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Wed">
                                <label for="Wed">Wed</label>
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Thu">
                                <label for="Thu">Thu</label>
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Fri">
                                <label for="Fri">Fri</label>
                            </div>
                            <div class="radi-inputs d-flex">
                                <input type="checkbox" name="inputs-group" id="Sat">
                                <label for="Sat">Sat</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class="editor mt-3 mb-3 ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="my-3">Common signature ( #my_company_signature ):</p>
                        <a href="#" class="mt-3 mb-2">Incorporate dynamic content in your emails with
                            #Hashtag</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="editor-container mb-1">
                            <div class="toolbar">
                                <button onclick="execCmd('bold')"><i class="fas fa-bold"></i></button>
                                <button onclick="execCmd('italic')"><i class="fas fa-italic"></i></button>
                                <button onclick="execCmd('underline')"><i class="fas fa-underline"></i></button>
                                <button onclick="execCmd('strikeThrough')"><i class="fas fa-strikethrough"></i></button>
                                <button onclick="execCmd('justifyLeft')"><i class="fas fa-align-left"></i></button>
                                <button onclick="execCmd('justifyCenter')"><i class="fas fa-align-center"></i></button>
                                <button onclick="execCmd('justifyRight')"><i class="fas fa-align-right"></i></button>
                                <button onclick="execCmd('justifyFull')"><i class="fas fa-align-justify"></i></button>
                                <button onclick="execCmd('insertUnorderedList')"><i class="fas fa-list-ul"></i></button>
                                <button onclick="execCmd('insertOrderedList')"><i class="fas fa-list-ol"></i></button>
                                <button onclick="execCmd('createLink', prompt('Enter the URL:', 'http://'))"><i
                                        class="fas fa-link"></i></button>
                                <button onclick="execCmd('unlink')"><i class="fas fa-unlink"></i></button>
                                <button onclick="insertImage()"><i class="fas fa-image"></i></button>
                                <button onclick="insertTable()"><i class="fas fa-table"></i></button>
                                <button onclick="toggleHTML()">Toggle HTML</button>
                            </div>
                            <div id="editor" style="height:150px ;" class="form-control" contenteditable="true">
                                Start typing here...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
@push('scripts')
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{asset('js/risk.js')}}"></script>
    <script src="{{asset('js/mange.js')}}"></script>
    <script src="{{asset('js/email.js')}}"></script>
@endpush
