@extends('layouts.dashboard.app')
@section('content')
    <div id="company-details-{{ $client->id }}">
        <div class="company-details" id="company-detail-{{ $client->id }}">
            <div class="bg-light holap-first-{{ $client->id }}" id="company-details-{{ $client->id }}">
                <div class="row text-center m-0 p-3 w-100" id="company-details-{{ $client->id }}"
                    style="background-color: #006bff">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex w-25 gap-3" id="company-details-{{ $client->id }}">
                            <i class="fa-solid fa-flag text-warning" style="font-size: 25px"></i>
                            <p class="text-light">{{ __('Payeurs correct / Average payer') }}</p>

                            {{-- ------------------- Client's Data Noftications------------------------------------------------ --}}
                            @include('clients.data_notifactions')

                            {{-- ------------------- End Client's Data Noftications------------------------------------------------ --}}

                        </div>
                        <h2 class="text-light w-50">{{ $client->company_name }}</h2>
                        <div class="d-flex justify-content-end gap-3 w-25">
                            <div class="icon-holab  ">
                                <i class="fa-solid fa-pen text-primary p-2 bg-light"
                                    onclick="EditHolap({{ $client->id }})"
                                    style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
                                <a href="holapDetails.html" target="_blank"><i
                                        class="fa-solid fa-maximize text-primary p-2 bg-light"style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i></a>
                                <i class="fa-solid fa-close text-light p-2 bg-danger"
                                    onclick="closeHolap({{ $client->id }})"
                                    style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ------------------- Client's Data ------------------------------------------------ --}}
                <div class="row m-0 p-3">
                    <div class="col-lg-4 col-sm-6 text-start">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Copmany code') }}:</p>
                            <p class="">{{ $client->company_code }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Legal ID') }}:</p>
                            <p class="">{{ $client->legal_id }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('VAT Number') }}:</p>
                            <p class="">{{ $client->vat_number }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Address') }}:</p>
                            <p class="">
                                <a href="">{{ $client->address }}, {{ $client->city }},
                                    {{ $client->state }}, {{ $client->country }}</a>
                            </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Group') }}:</p>
                            {{-- @foreach ($client->clientsGroups as $group)
                                                        <p class=""><a href="">{{ $group->en_name }}</a></p>
                                                    @endforeach --}}
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Collector') }}:</p>
                            <p class=""><a href="">{{ $client->collector->first_name ?? '' }}</a>
                            </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Collection senario') }}:</p>
                            <select class="form-select m-2 w-100" aria-label="Default select example">
                                <option selected disabled>
                                    {{ $client->collectionScenarios->en_name ?? '' }}
                                </option>
                                @foreach ($collectionsScenario as $collection)
                                    <option value="{{ $collection->id }}">
                                        {{ $collection->en_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-start">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Payment term') }}:</p>
                            <p class="">{{ $client->payment_term }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Payment mean') }}:</p>
                            <p class="">{{ $client->payment_mean }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Guarantee World Insurer') }}:</p>
                            <p class="">{{ $client->insurer_guarantee }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Other guarantees') }}:</p>
                            <p class="">{{ $client->other_guarantees }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">{{ __('Credit Limit') }}:</p>
                            <div class="form-group">
                                <input type="text" value="{{ $client->credit_limit }}" class="form-control" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold"><a href="">{{ __('Late payment penalties') }}</a>:
                            </p>
                            <p class="">
                                {{ $client->late_payment_penalties == true ? 'Yes' : 'No' }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold"><a href="">{{ __('Recovery cost') }}</a>:
                            </p>
                            <p class="">
                                {{ $client->recovery_cost == 1 ? 'Yes' : 'No' }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold"><a href="">{{ __('Interactive emails') }}</a>:</p>
                            <p class="">
                                {{ $client->interactive_emails == 1 ? 'Yes' : 'No' }}</p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 text-start">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <select class="form-select m-auto w-50"
                                                        aria-label="Default select example">
                                                        <option selected disabled>Contact:</option>
                                                        <option value="1">Clients risqués (FR)</option>
                                                        <option value="1">Key accounts scenario (EN)</option>
                                                        <option value="1">Modeles actions specifiques</option>
                                                        <option value="1">Risky clients (En)</option>
                                                        <option value="1">Scenario de relance standard (by default)
                                                        </option>
                                                        <option value="1">Standard collection scenario</option>
                                                        <option value="1">Templates specific actions</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold">Role:</p>
                                                    <p class="">Other</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold">Last name:</p>
                                                    <p class="">{{ $client->collector['last_name'] ?? ''}}</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    @<a href="">{{ $client->collector['email']?? '' }}</a>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-phone"></i> &nbsp; &nbsp;
                                                    <a href=""> {{ $client->collector['mobile_phone']?? '' }}</a> &nbsp;
                                                    (Phone)
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-star"></i> &nbsp; {{__("Contact for collection")}}
                                                </div>
                                            </div> --}}
                </div>

                {{-- -------------------End Client's Data ------------------------------------------------ --}}

                {{-- ------------------- Client's Data Buttons------------------------------------------------ --}}
                <div class="row p-4 m-0">
                    <div class="col-lg-4 col-sm-6">
                        <div class="m-1 w-100 btn btn-primary disputeButton" onclick="disputeFun()">
                            <i class="fa-solid fa-clock"></i>
                            {{ __('collection& dispute management') }}
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="m-1 w-100 btn btn-outline-primary riskButton" onclick="riskFun()">
                            <i class="fa-solid fa-bolt"></i> {{ __('Risk Report') }}
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="m-1 w-100 btn btn-outline-primary indicatorsButton" onclick="indicatorsFun()">
                            <i class="fa-solid fa-chart-simple"></i>
                            {{ __('Reports & Indicators') }}
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="m-1 w-100 btn btn-outline-primary historyButton" onclick="historyFun()">
                            <i class="fa-solid fa-bars-staggered"></i> {{ __('History') }}
                        </div>
                    </div>
                </div>

                {{-- ------------------- End Client's Data Buttons------------------------------------------------ --}}
            </div>
            {{-- ------------------- Edit Client Data------------------------------------------------ --}}
            {{-- @include('clients.edit_client_data') --}}

            {{-- -------------------  End Edit Client Data------------------------------------------------ --}}

            {{-- ------------------- Dates Line ------------------------------------------------ --}}
            @include('clients.dates_line')
            {{-- ------------------- End Dates Line ------------------------------------------------ --}}

            {{-- ------------------- Actions Table ------------------------------------------------ --}}
            @include('clients.items_actions_table')
            {{-- ------------------- End Actions Table ------------------------------------------------ --}}

            {{-- ------------------- Items Table------------------------------------------------ --}}
            @include('clients.items_table')
            {{-- ------------------- End Items Table------------------------------------------------ --}}
        </div>
        <div class="row px-4 align-items-center m-0">
            <div class="col-lg-4 col-sm-6 col-12 mb-2">
                <div class="btn text-light btn-secondary px-2" onclick="showInvioce2()">
                    <i
                        class="fa-solid fa-pen-to-square"></i>&ensp;{{ __("Change status >Add
                                                                                                                comment >Set next action") }}
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 col-6 mb-2">
                <div class="btn text-light btn-primary px-2" onclick="associateFiles()">
                    <i class="fa-solid fa-link"></i>&ensp;{{ __('Associate File') }}
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 col-6 mb-2" onclick="payViaDirectLink()">
                <div class="btn text-light btn-primary px-2">
                    {{ __('Pay via direct link') }}
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 col-6 mb-2">
                <div class="btn text-dark btn-light px-2">
                    {{ __('Clear the transaction') }}
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 col-6 mb-2">
                <select class="form-select bg-light" aria-label="Default select example">
                    <option selected disabled>{{ __('Ignore the transaction') }} :</option>
                    <option value="1">Yes</option>
                    <option value="1">No</option>
                    <option value="1" class="text-primary">
                        <a href="#"> {{ __('Read more') }}</a>
                    </option>
                </select>
            </div>
            <div class="text-center mb-2 mt-2">
                <div class="this-buttons">
                    <div class="">
                        <div class="btn-group">
                            <button type="button" class="btn text-light"><span><i
                                        class="fa-solid fa-download"></i>&ensp;</span>{{ __("Export
                                                                                                                                                                            this data to
                                                                                                                                                                            excel") }}</button>
                            <button type="button" class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">{{ __('Toggle Dropdown') }}</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <p>{{ __('file fromat') }}:</p>
                                </li>
                                <div class="radios-inp d-flex  justify-content-around">
                                    <li class="dropdown-item d-flex"><input type="radio" name="fils"
                                            id="csv"><label for="fils">{{ __('csv') }}</label></li>
                                    <li class="dropdown-item d-flex"><input type="radio" name="fils"
                                            id="xls"><label for="fils">{{ __('xls') }}</label>
                                    </li>
                                </div>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <p>{{ __('encoding') }}:</p>
                                </li>
                                <select name="" style="width: 100%; font-size: 12px;">
                                    <option value="" selected>UTF-8 (Unicode /
                                        US format)</option>
                                    <option value="ISO-8859-1">ISO-8859-1 (Western
                                        European format)
                                    </option>
                                    <option value="ISO-8859-2">ISO-8859-2 (Central
                                        European format)
                                    </option>
                                    <option value="ISO-8859-3">ISO-8859-3 (South
                                        European format)</option>
                                    <option value="ISO-8859-4">ISO-8859-4 (North
                                        European format)</option>
                                    <option value="ISO-8859-5">ISO-8859-5 (Cyrillic
                                        format)</option>
                                    <option value="ISO-8859-6">ISO-8859-6 (Arabic
                                        format)</option>
                                    <option value="ISO-8859-7">ISO-8859-7 (Greek
                                        format)</option>
                                    <option value="ISO-8859-8">ISO-8859-8 (Hebrew
                                        format)</option>
                                    <option value="ISO-8859-9">ISO-8859-9 (Turkish
                                        format)</option>
                                    <option value="ISO-8859-10">ISO-8859-10 (Nordic
                                        format)</option>
                                    <option value="ISO-8859-13">ISO-8859-13 (Baltic
                                        format)</option>
                                    <option value="ISO-8859-14">ISO-8859-14 (Celtic
                                        format)</option>
                                    <option value="ISO-8859-15">ISO-8859-15 (NEW
                                        Western European format)
                                    </option>
                                    <option value="ISO-8859-16">ISO-8859-16 (Romanian
                                        format)</option>
                                    <option value="ISO-2022-JP">ISO-2022-JP</option>
                                    <option value="UTF-7">UTF-7</option>
                                    <option value="ASCII">ASCII</option>
                                    <option value="EUC-JP">EUC-JP</option>
                                    <option value="EUC-KR">EUC-KR</option>
                                    <option value="SJIS">SJIS</option>
                                    <option value="EUCJP-WIN">EUCJP-WIN</option>
                                    <option value="SJIS-WIN">SJIS-WIN</option>
                                    <option value="JIS">JIS</option>
                                    <option value="WINDOWS-1252">WINDOWS-1252</option>
                                    <option value="WINDOWS-1251">WINDOWS-1251</option>
                                    <option value="BIG-5">BIG-5</option>
                                    <option value="KOI8-R">KOI8-R</option>
                                </select>
                                </li>
                                <li class="mt-3 "><button type="button" class="btn" style="width: 100%;"><span><i
                                                class="fa-solid a-download"></i>&ensp;</span>{{ __('download') }}</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('js/risk.js') }}"></script>
    <script src="{{ asset('js/email.js') }}"></script>
    <script src="{{ asset('js/hovers.js') }}"></script>
    <script src="{{ asset('js/collection.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/chart-2.js') }}"></script>
    <script src="{{ asset('js/chart-10.js') }}"></script>
@endpush
