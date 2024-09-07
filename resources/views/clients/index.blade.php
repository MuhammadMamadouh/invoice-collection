@extends('layouts.dashboard.app')
@section('content')
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ route('clients.index') }}" class="m-1 w-100 btn btn-secondary p-3">
                        <i class="fa-solid fa-earth-asia"></i> &ensp; {{ __('All clients') }} &ensp;
                        <span class="badge bg-white text-secondary">{{ $client_count }}</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="#" class="m-1 w-100 btn btn-outline-secondary text-dark p-3 text-secondary"
                        id="actionButton">
                        <i class="fa-solid fa-building text-primary"></i> &ensp; {{ __('My clients') }} &ensp;
                        <span class="badge bg-white text-secondary">4</span>
                    </a>
                </div>
                <a href="#" class="col-lg-3 col-md-4 col-sm-6">
                    <div class="m-1 w-100 btn btn-light text-secondary p-3">
                        <i class="fa-solid fa-magnifying-glass"></i> &ensp; {{ __('Search for client') }}
                    </div>
                </a>
            </div>
            <hr />
            <div>
                <form class="row mt-1">
                    <div class="form-group col-md-4 col-sm-6">
                        <select class="form-select m-2" onfocus="this.size=9;" onblur="this.size=1;"
                            onchange="this.size=1; this.blur();" aria-label=" Default select example">
                            <option value="" selected disabled>{{ __('Clients Group') }} :</option>
                            @foreach ($clientGroups as $client_group)
                                <option value="{{ $client_group->id }}">{{ $client_group->en_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select name="collection_scenario_id" class="m-2 form-select"
                            data-placeholder="Collection scenario:" title="Collection scenario">
                            <option selected disabled>{{ __('Collection Scenarios') }}</option>
                            @foreach ($collectionsScenario as $collection)
                                <option value="{{ $collection->id }}">{{ $collection->en_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select name='collector_id' class="form-select m-2" aria-label="Default select example">
                            <option selected disabled>{{ __('collectors') }}</option>
                            @foreach ($collectors as $collector)
                                <option value="{{ $collector->id }}">{{ $collector->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select class="form-select m-2" aria-label="Default select example">
                            <option selected disabled>{{ __('Associated With Client') }} :</option>
                            @foreach ($users as $user)
                                <option value="1">{{ $user->first_name . ' ' . $user->last_name }}(Sales Manager)
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select name="onlyCountry" class="m-2 form-select" data-placeholder="Country:" title="Country">
                            <option value="0" selected disabled>Country :</option>
                            <option value="1">Afghanistan</option>
                            <option value="2">Albania</option>
                            <option value="243">Zimbabwe</option>
                        </select>
                    </div>
                </form>
                <hr />
            </div>
        </div>
    </section>
    <section class="mt-2">
        <div class="container-fluid">
            <div class="row table-alerts-container">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-group d-flex align-items-center">
                            <select class="form-select w-auto m-2" aria-label="Default select example">
                                <option selected value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="134">134</option>
                            </select>
                            <div>actions display on 134</div>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                <strong>{{ session('message') }}</strong>
                            </div>
                        @endif
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                    placeholder="Multi-columns search" />
                            </div>
                        </form>
                    </div>
                    <div id="selectedAlert" class="d-flex d-none justify-content-between align-items-center mb-4">
                        <p class="mt-1"></p>
                        <a href="editAlert.html" class="btn btn-primary"><i class="fa-solid fa-pen"></i>
                            {{ __('Edit') }}</a>
                    </div>
                    <div class="row mt-2 align-items-center px-4 text-center">
                        <div class="col-1 col-md-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                            </div>
                        </div>
                        <div class="col-4 col-md-1">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">{{ __('Flag') }}</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-1">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">{{ __('Company code') }}</p>
                            </div>
                        </div>
                        <div class="col-1 hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">{{ __('Business name') }}</p>
                            </div>
                        </div>
                        <div class="col-3 hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="onmouse-3 fw-bold">{{ __('Collection scenario') }}</p>
                                {{-- <span class="conttt-3">
                                    payment profile < payeur correct / 
                                    <br>
                                        average payeur > 
                                    <br>
                                        average days beyond
                                    <br>
                                        items +28days (< 10days) 
                                </span> --}}
                            </div>
                        </div>
                        <div class="col-2 hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">{{ __('Group') }}</p>
                            </div>
                        </div>
                        <div class="col-1 hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">{{ __('Receivable') }}</p>
                            </div>
                        </div>
                        <div class="col-1 hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">{{ __('Overdue') }}</p>
                            </div>
                        </div>
                        <div class="col-1 hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">{{ __('Overdue +60d') }}</p>
                            </div>
                        </div>
                        <div class="col-3 tavle-dropdown-icon"></div>
                    </div>
                    <div class="text-center mb-3 p-2 p-md-4 table-container">
                        @forelse($clientResource as $key => $client)
                            <div class="row align-items-center pt-3"
                                style="background-color: {{ $key % 2 == 0 ? '#006bff14' : '#ffffff' }}">
                                <div class="col-1">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                    </div>
                                </div>
                                <div class="col-4 col-md-1 mb-3 position-relative">
                                    <span class="onmouse-2"><i class="fa-solid fa-flag text-danger"
                                            style="font-size: 25px;"></i></span>
                                    <span class="conttt-2">payment profile < payeur correct / average payeur> <br> average
                                            days beyond items
                                            +28days (< 10days) </span>
                                </div>
                                <div class="col-4 col-md-1">
                                    <p class="fw-bold">{{ $client->company_code }}</p>
                                </div>
                                <div class="col-1 hide">
                                    <p class="fw-bold"><a href="#"
                                            onclick="showHolap({{ $client->id }})">{{ $client->company_name }}</a></p>
                                </div>
                                <div class="col-md-3 hide">
                                    <div class=" w-100 mb-3">
                                        <select class="form-select" id="inputname19">
                                            <option value="{{ $client->collectionScenarios->id ?? '' }}" selected
                                                disabled>{{ $client->collectionScenarios->en_name ?? '' }}</option>
                                            @foreach ($collectionsScenario as $collection)
                                                <option value="{{ $collection->id }}">{{ $collection->en_name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2 hide">
                                    @forelse ($client->clientGroup as $group)
                                        <p class=""><a href="#">{{ $group->en_name }}</a></p>
                                    @empty
                                        <p class=""><a href="#">-</a></p>
                                    @endforelse
                                </div>
                                <div class="col-1 hide">
                                    <p class="fw-bold">{{ $client->total_recievables }}</p>
                                </div>
                                <div class="col-1 hide">
                                    <p class="fw-bold">{{ $client->total_overdue }}</p>
                                </div>
                                <div class="col-1 hide">
                                    <p class="fw-bold">{{ $client->total_overdue_60 }}</p>
                                </div>
                                <div class="col-3 mb-3 tavle-dropdown-icon" onclick="toggleFunction(this)">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                                {{-- <div class="hidden ms-2 d-none">
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">Business name:</p>
                                        <p class="fw-bold">4Front</p>
                                    </div>
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">{{ __('Collection scenario') }}:</p>
                                        <div class="">
                                            <select name="collection_scenario_id" class="form-select" id="inputname19">
                                                <option value="" selected disabled>{{ __('Collection Scenarios') }}
                                                </option>
                                                @foreach ($collectionsScenario as $collection)
                                                    <option value="{{ $collection->id }}">
                                                        {{ $collection->en_name ?? '' }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">Group:</p>
                                        <p class="fw-bold">Group Industrie</p>
                                    </div>
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">Receivable:</p>
                                        <p class="fw-bold">39.6 k€</p>
                                    </div>
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">Overdue:</p>
                                        <p class="fw-bold">39.6 k€</p>
                                    </div>
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">Overdue +60d:</p>
                                        <p class="fw-bold">39.6 k€</p>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="arrow-bottom"></div>
                            <div id="company-details-{{ $client->id }}">
                                <div class="company-details d-none"
                                    id="company-detail-{{ $client->id }}"style="overflow-x: hidden;">
                                    @include('clients.client_data_model')
                                </div>
                                <div class="row px-4 align-items-center m-0" style="background-color: white;">
                                    <div class="col-lg-4 col-sm-6 col-12 mb-2">
                                        <div class="btn text-light btn-secondary px-2" onclick="showInvioce2()">
                                            <i class="fa-solid fa-pen-to-square"></i>&ensp;{{ __("Change status >Add comment >Set next action") }}
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
                                                                class="fa-solid fa-download"></i>&ensp;</span>{{ __('Export this data to excel') }}</button>
                                                    <button type="button"
                                                        class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="visually-hidden">{{ __('Toggle Dropdown') }}</span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <p>{{ __('file fromat') }}:</p>
                                                        </li>
                                                        <div class="radios-inp d-flex  justify-content-around">
                                                            <li class="dropdown-item d-flex"><input type="radio"
                                                                    name="fils" id="csv"><label
                                                                    for="fils">{{ __('csv') }}</label></li>
                                                            <li class="dropdown-item d-flex"><input type="radio"
                                                                    name="fils" id="xls"><label
                                                                    for="fils">{{ __('xls') }}</label>
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
                                                        <li class="mt-3 "><button type="button" class="btn"
                                                                style="width: 100%;"><span><i
                                                                        class="fa-solid
                                                                                fa-download"></i>&ensp;</span>{{ __('download') }}</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sec-1 pb-5 bg-white text-capitalize d-none " id="riskDiv">
                                <div class="container">
                                    <div class="row">
                                        <div class="end-con d-flex justify-content-between">
                                            <h4 class="mt-2 mb-2"><span><i
                                                        class="fa-regular fa-hand-point-right"></i></span>
                                                {{ __('Actions to do') }}:
                                                <span>?
                                                    {{ __('read more') }}</span>
                                            </h4>
                                            <div class="">
                                                <select class="form-select m-2 text-capitalize "
                                                    aria-label="Default select example">
                                                    <option selected>{{ __('New action') }}</option>
                                                    <option value="1">send email</option>
                                                    <option value="1">send international interactive
                                                        email </option>
                                                    <option value="1"> manul action</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="actions-row">
                                            <div class="row text-center p-2 align-items-center mt-2 mb-1">
                                                <div class="col-2">
                                                    <h6>action to do</h6>
                                                </div>
                                                <div class="col-4">
                                                    <h6>action type</h6>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="text-center">Description</h6>
                                                </div>
                                                <div class="col-2"></div>
                                            </div>
                                            <div class="row mt-2 text-center p-2 align-items-center"
                                                style="background-color: #006bff14;">
                                                <div class="col-2 fw-bold">13 - 5 - 2022</div>
                                                <div class="col-4 fw-bold">
                                                    <div><i class="fa-solid fa-clock"></i> Credit limit review
                                                    </div>
                                                    <p class="text-black-50 m-0">Ignore this action until
                                                        2022-08-15</p>
                                                </div>
                                                <div class="col-4 fw-bold">
                                                    <p class="m-0">Credit Limit : 10 k€</p>
                                                    <small class=" text-black-50">(Last modification of the
                                                        credit limit :
                                                        2016-02-02)</small>
                                                </div>
                                                <div class="col-2">
                                                    <div class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-1 text-center p-2 align-items-center"
                                                style="background-color: #006bff14;">
                                                <div class="col-2 fw-bold">13 - 5 - 2022</div>
                                                <div class="col-4 fw-bold">
                                                    <div><i class="fa-solid fa-building"></i> Customer
                                                        exceeding</div>
                                                </div>
                                                <div class="col-4 fw-bold">
                                                    <p class="m-0">Total receivable (19.5 k€) >= 100 % of
                                                        the credit limit (10
                                                        k€)
                                                    </p>
                                                </div>
                                                <div class="col-2">
                                                    <div class="btn btn-primary">
                                                        <i class="fa-solid fa-check"></i>
                                                    </div>
                                                    <div class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-calendar"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <h6 class="mt-2"><i class="fa-solid fa-comments"
                                                    style="margin-right: 10px;"></i>Credit
                                                analysis :</h6>
                                            <div class="container">
                                                <div class="col-12">
                                                    <textarea
                                                        style="width:100%; outline: none; padding: 5px; border: 2px solid #efefef; border-radius: 5px; resize: both;"></textarea>
                                                </div>
                                                <div class="save-end">
                                                    <button class=""><span><i
                                                                class="fa-regular fa-floppy-disk"></i></span>save</button>
                                                    <p class="bg-light">Comments should be factual, objective
                                                        and non offensive
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="add-itemes mt-3 mb-3">
                                                <div class="container">
                                                    <div class="col-12">
                                                        <button class="mt-3" id="show-items-button"><span
                                                                class="text-black-50"><i
                                                                    class="fa-solid fa-pen"></i></span> add
                                                            an
                                                            item</button>
                                                        <div class="show-items  d-block bg-light" style="font-size: 6px;">
                                                            <div id="item-contents">
                                                                <div class="addimg">
                                                                    <img src="" alt="" id="changeimgs">
                                                                </div>
                                                                <input id="inpchange" class="mt-3" type="file" />
                                                                <p class=" mb-2" style="font-size: 14px;">
                                                                    (.pdf or .docx or
                                                                    .xlsx
                                                                    or
                                                                    .txt or .jpg or .png ...)
                                                                    •Max
                                                                    size: 15 MB</p>
                                                                <textarea
                                                                    style="width:100%; outline: none; padding: 5px; border: 2px solid #efefef; border-radius: 5px; resize: both;"></textarea>
                                                                <button class=""><i class="fa-solid fa-plus"></i>
                                                                    add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="left-sec mt-2 mb-2">
                                                <div class="container">
                                                    <div class="col-6">
                                                        <h5>Credit insurance <span class="text-dark">World
                                                                Insurer</span>:</h5>
                                                        <div class="three-cont mt-2 mb-2 d-flex justify-content-between">
                                                            <span>Insurer guarantee :</span>
                                                            <span>10 k€</span>
                                                            <span>Modification date : 2020-03-02</span>
                                                        </div>
                                                        <div class="two-cont mt-2 mb-2 d-flex">
                                                            <span class="">Temporary guarantee :</span>
                                                            <span class="col-3 text-center">10 k€</span>
                                                        </div>
                                                        <div class="three-cont mt-2 mb-2 d-flex">
                                                            <span class="">Guarantee World Insurer :
                                                            </span>
                                                            <span class=" col-2 text-center">10 k€</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-con mt-3 ">
                                                    <h6 class="container mt-2 mb-2">risk = <span>11.1k€</span>
                                                    </h6>
                                                    <h6 class="container mt-2 mb-2">Credit available = <span>0
                                                            €</span></h6>
                                                </div>
                                            </div>
                                            <div class="schedule-of-payment mt-2 mb-2">
                                                <h5 class="text-capitalize container mt-4 mb-2 "><span
                                                        class="text-black-50"><i
                                                            class="fa-solid fa-calendar-days"></i></span>
                                                    Schedule of payment:
                                                </h5>
                                            </div>
                                            <div class="tabels-of-payment" style="font-size: 12px;">
                                                <div class="row mt-3 px-4 align-items-center text-center">
                                                    <div class="col-2 hide"></div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Total collectable
                                                                May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Remains to collect
                                                                May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Collection efficiency
                                                                May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Total receivable</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Overdue
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Current month
                                                                May 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Month M+1
                                                                June 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Month M+2
                                                                July 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Month M+3
                                                                August 2024</p>
                                                        </div>
                                                    </div>
                                                    <div class="col hide">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center gap-1 ">
                                                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                            <p class="fw-bold">Month M>3
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col col-1 tavle-dropdown-icon"></div>
                                                </div>
                                                <div class="pt-1">
                                                    <div class="row pt-3 px-4 align-items-center text-center"
                                                        style="background-color:#006BFF14;">
                                                        <div class="col-6 col-md-2">
                                                            <p class="fw-bold">Receviable</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">25 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">6.3 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">74.8 %</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">21.1 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">6.3 k€ </p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">14.8 k€ </p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col-6 tavle-dropdown-icon mb-3"
                                                            onclick="toggleFunction(this)">
                                                            <i class="fa-solid fa-chevron-down"></i>
                                                        </div>
                                                        <div class="hidden d-none bg-light">
                                                            <div class="d-flex">
                                                                <p class="fw-bold">
                                                                    Total collectable
                                                                    May 2024:</p>
                                                                <p class="fw-bold">25 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Remains to collect
                                                                    May 2024:</p>
                                                                <p class="fw-bold">6.3 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Collection efficiency
                                                                    May 2024:</p>
                                                                <p class="fw-bold">74.8 %</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Total receviable:</p>
                                                                <p class="fw-bold">21.1 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Overdue:</p>
                                                                <p class="fw-bold">6.3 k€ </p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Current month
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+1
                                                                    June 2024:</p>
                                                                <p class="fw-bold">14.8 k€ </p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+2
                                                                    July 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+3
                                                                    August 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M>3
                                                                </p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3 px-4 align-items-center text-center">
                                                        <div class="col-6 col-md-2">
                                                            <p class="fw-bold">Unallocated payments</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-0.01 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-0.01 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">0 %</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-0.01 k€ </p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-0.01 k€ </p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col-6 tavle-dropdown-icon mb-3"
                                                            onclick="toggleFunction(this)">
                                                            <i class="fa-solid fa-chevron-down"></i>
                                                        </div>
                                                        <div class="hidden d-none bg-light">
                                                            <div class="d-flex">
                                                                <p class="fw-bold">
                                                                    Total collectable
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-0.01 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Remains to collect
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-0.01 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Collection efficiency
                                                                    May 2024:</p>
                                                                <p class="fw-bold">0 %</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Total receviable:</p>
                                                                <p class="fw-bold">-0.01 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Overdue:</p>
                                                                <p class="fw-bold">-0.01 k€ </p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Current month
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+1
                                                                    June 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+2
                                                                    July 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+3
                                                                    August 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M>3
                                                                </p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3 px-4 align-items-center text-center"
                                                        style="background-color:#006BFF14;">
                                                        <div class="col-6 col-md-2">
                                                            <p class="fw-bold">Items in transit (drafts)</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">0€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col-6 tavle-dropdown-icon mb-3"
                                                            onclick="toggleFunction(this)">
                                                            <i class="fa-solid fa-chevron-down"></i>
                                                        </div>
                                                        <div class="hidden d-none bg-light">
                                                            <div class="d-flex">
                                                                <p class="fw-bold">
                                                                    Total collectable
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Remains to collect
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Collection efficiency
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Total receviable:</p>
                                                                <p class="fw-bold">-0€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Overdue:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Current month
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+1
                                                                    June 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+2
                                                                    July 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+3
                                                                    August 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M>3
                                                                </p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3 px-4 align-items-center text-center">
                                                        <div class="col-6 col-md-2">
                                                            <p class="fw-bold">Order backlog
                                                            <p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">0€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col-6 tavle-dropdown-icon mb-3"
                                                            onclick="toggleFunction(this)">
                                                            <i class="fa-solid fa-chevron-down"></i>
                                                        </div>
                                                        <div class="hidden d-none bg-light">
                                                            <div class="d-flex">
                                                                <p class="fw-bold">
                                                                    Total collectable
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Remains to collect
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Collection efficiency
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Total receviable:</p>
                                                                <p class="fw-bold">-0€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Overdue:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Current month
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+1
                                                                    June 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+2
                                                                    July 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+3
                                                                    August 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M>3
                                                                </p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3 px-4 align-items-center text-center"
                                                        style="background-color:#006BFF14;">
                                                        <div class="col-6 col-md-2">
                                                            <p class="fw-bold">Total:</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">25 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">6.3 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">74.8 %</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">21.1 k€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">6.3 k€ </p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">14.8 k€ </p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col-6 tavle-dropdown-icon mb-3"
                                                            onclick="toggleFunction(this)">
                                                            <i class="fa-solid fa-chevron-down"></i>
                                                        </div>
                                                        <div class="hidden d-none bg-light">
                                                            <div class="d-flex">
                                                                <p class="fw-bold">
                                                                    Total collectable
                                                                    May 2024:</p>
                                                                <p class="fw-bold">25 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Remains to collect
                                                                    May 2024:</p>
                                                                <p class="fw-bold">6.3 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Collection efficiency
                                                                    May 2024:</p>
                                                                <p class="fw-bold">74.8 %</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Total receviable:</p>
                                                                <p class="fw-bold">21.1 k€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Overdue:</p>
                                                                <p class="fw-bold">6.3 k€ </p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Current month
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+1
                                                                    June 2024:</p>
                                                                <p class="fw-bold">14.8 k€ </p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+2
                                                                    July 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+3
                                                                    August 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M>3
                                                                </p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-3 px-4 align-items-center text-center">
                                                        <div class="col-6 col-md-2">
                                                            <p class="fw-bold">Promise to pay
                                                            <p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">0€</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col hide">
                                                            <p class="fw-bold">-</p>
                                                        </div>
                                                        <div class="col-6 tavle-dropdown-icon mb-3"
                                                            onclick="toggleFunction(this)">
                                                            <i class="fa-solid fa-chevron-down"></i>
                                                        </div>
                                                        <div class="hidden d-none bg-light">
                                                            <div class="d-flex">
                                                                <p class="fw-bold">
                                                                    Total collectable
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Remains to collect
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Collection efficiency
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Total receviable:</p>
                                                                <p class="fw-bold">-0€</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Overdue:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Current month
                                                                    May 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+1
                                                                    June 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+2
                                                                    July 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M+3
                                                                    August 2024:</p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                            <div class="d-flex">
                                                                <p class="fw-bold">Month M>3
                                                                </p>
                                                                <p class="fw-bold">-</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-score mt-3 mb-3 container">
                                            <h6>Credit notation:</h6>
                                            <button id="score-button"><span><i class="fa-solid fa-plus"></i></span>new
                                                score</button>
                                        </div>
                                        <div class="show-credit text-capitalize" id="show-score">
                                            <div class="container">
                                                <div class="d-flex justify-content-center gap-2">
                                                    <div class="btn btn-success">Notation crédit</div>
                                                    <div class="btn btn-outline-success">Scoring</div>
                                                </div>
                                                <div class="two-content-show mt-2 mb-2 d-flex justify-content-between">
                                                    <h4>Notation crédit</h4>
                                                    <a href="settings-manage-risk.html" class="text-black-50"><span><i
                                                                class="fa-solid fa-gear"></i></span>Custom
                                                        scoring models</a>
                                                </div>
                                                <span class="text-black-50">Scoring par défaut</span>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Forme juridique
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">Nouvelle entreprise /
                                                                pas d'infos <br>
                                                                Société Anonyme et associées <br>
                                                                Propriétaire individuel (EURL) <br>
                                                                Coopérative <br>
                                                                Entreprise publique et affiliées
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">Age
                                                            de l'entreprise
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class=" text-capitalize">Nouvelle entreprise
                                                                <br>
                                                                <= 2 ans <br>
                                                                    2 - 4 ans <br>
                                                                    5 - 6 ans <br>
                                                                    7 - 8 ans <br>
                                                                    9 - 10 ans <br>
                                                                    > 10 ans
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Comportement de paiement
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">> 30 jours de retard /
                                                                nouveau client <br>
                                                                20 - 30 jours de retard <br>
                                                                10 - 20 jours de retard <br>
                                                                7 - 10 jours de retard <br>
                                                                < 7 jours de retard <br>
                                                                    Paiement à l'échéance <br>
                                                                    Paie avant l'échéance
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Délai de paiement
                                                            accordé
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">> 120 jours <br>
                                                                91 - 120 jours <br>
                                                                61 - 90 jours <br>
                                                                31 - 60 jours <br>
                                                                10 - 30 jours <br>
                                                                < 10 jours <br>
                                                                    Paiement à la commande
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">Avis
                                                            du Commercial
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">Négatif <br>
                                                                Moyen <br>
                                                                Bon <br>
                                                                Très bon
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Evolution des commandes
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class=" text-capitalize">Décline >50% ou
                                                                nouveau client <br>
                                                                Décline 20% - 50% <br>
                                                                Décline 0% - 20% <br>
                                                                Stagnant <br>
                                                                Augmente 0% - 20% <br>
                                                                Augmente 20% - 50% <br>
                                                                Augmente > 50%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Résultat d'exploitation
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">Négatif<br>
                                                                0% - 3% <br>
                                                                3% - 6% <br>
                                                                6% - 10% <br>
                                                                10% - 15% <br>
                                                                15% - 20% <br>
                                                                > 20%
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Evolution du chiffre
                                                            d'affaires
                                                            / n-1<span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class=" text-capitalize">Baisse > 20% <br>
                                                                Baisse 10% - 20% <br>
                                                                Baisse 2% - 10% <br>
                                                                Stagne entre -2% et +2% <br>
                                                                Croissance 2% - 10% <br>
                                                                Croissance 10% - 20% <br>
                                                                Croissance > 20% <br>

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Fonds propres / Total
                                                            bilan<span>?</span></h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">0% - 10% <br>
                                                                10% - 15% <br>
                                                                15% - 20% <br>
                                                                20% - 25% <br>
                                                                25% - 30% <br>
                                                                > 30% <br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Endettement MLT / Fonds
                                                            propres
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">> 1,5 <br>
                                                                1 - 1,5 <br>
                                                                0,8 - 1 <br>
                                                                0,6 - 0,8 <br>
                                                                0,4 - 0,6 <br>
                                                                0,2 - 0,4 <br>
                                                                < 0,2 <br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Fonds de roulement
                                                            (FR)
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">Négatif <br>
                                                                Positif
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">

                                                        <h6 class="text-capitalize mt-2 mb-2 text-center">
                                                            Trésorerie (FR - BFR)
                                                            <span>?</span>
                                                        </h6>
                                                        <div class="scroll-bars">
                                                            <p class="text-capitalize">Négatif <br>
                                                                Positif
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="calc-score text-center mt-3 mb-3">
                                                        <button
                                                            onclick="document.querySelector('.credit-notation-calc').classList.remove('d-none')"><span
                                                                class="fa-solid fa-check"></span> calc
                                                            score</button>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center d-none credit-notation-calc">
                                                    <div class="col-lg-3 bg-light py-2 p-1">
                                                        <div class="d-flex flex-column">
                                                            <label class="text-center">Model :</label>
                                                            <h4 class="text-dark text-center bg-white py-3">
                                                                Notation crédit</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 bg-light py-2 p-1">
                                                        <div class="d-flex flex-column">
                                                            <label class="text-center">Score out of 10
                                                                :</label>
                                                            <h4 class="text-dark text-center bg-info py-3">0.2
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 bg-light py-2 p-1">
                                                        <div class="d-flex flex-column">
                                                            <label class="text-center">Risk category :</label>
                                                            <h4 class="text-dark text-center bg-danger py-3">D
                                                            </h4>
                                                            <span class="onmouse position-absolute px-1"
                                                                style="z-index: 10;transform: translate(160px,40px);">?</span>
                                                            <span class="conttt" style="display: none;">title="Risk
                                                                category D
                                                                →
                                                                Defaulted account or default imminent: company
                                                                whose financial
                                                                situation
                                                                is
                                                                very deteriorated which cannot meet its
                                                                commitments. The risk of
                                                                default
                                                                is
                                                                very high. Require payment guarantees if you
                                                                grant a credit or
                                                                request a
                                                                payment in advance (before the
                                                                delivery)."</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 text-center py-2 p-1">
                                                        <div class="btn btn-success"><i class="fa-solid fa-floppy-disk"
                                                                style="  font-size: 15px;"></i> Save these
                                                            results</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="credit-limit-btn mt-3 ">
                                            <h5 class="text-capitalize mt-2 mb-2">credit limit</h5>
                                            <button id="score-button-2"><span><i class="fa-solid fa-plus"></i></span>new
                                                score</button>
                                        </div>
                                        <div class="container credit-limit-first-section">
                                            <div class="credit-limit mt-3 mb-2" id="show-score-2">
                                                <div class="container">
                                                    <div
                                                        class="two-content-show mt-2 mb-2 d-flex align-items-center justify-content-between">
                                                        <p>Risk category ( A, B, C or D - View <span>Credit
                                                                notation</span> ) :</p>
                                                        <a href="#" class="text-black-50"
                                                            onclick="showSecondCreditLimit()"><span><i
                                                                    class="fa-solid fa-gear"></i></span>Custom
                                                            scoring
                                                            models</a>
                                                    </div>
                                                    <div class="opis-limits col-2">
                                                        <select class="form-select m-2"
                                                            aria-label="Default select example">
                                                            <option value="1" selected>A</option>
                                                            <option value="1">B</option>
                                                            <option value="1">C</option>
                                                            <option value="1">D</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <h6 class="mt-3">Commercial information :</h6>
                                                        <div class="col-lg-3 col-md-7 text-center">
                                                            <div class="input-titles">
                                                                <p class="text-center mb-0">Sales forecast
                                                                    <span>?</span>
                                                                </p>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-7 text-center">
                                                            <div class="input-titles">
                                                                <p class="text-center mb-0">Duration in months
                                                                    of the period
                                                                    <span>?</span>
                                                                </p>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-7 text-center">
                                                            <div class="input-titles">
                                                                <p class="text-center mb-0">Payment term
                                                                    <span>?</span>
                                                                </p>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-7 text-center">
                                                            <div class="input-titles">
                                                                <p class="text-center mb-0">Tax rate
                                                                    <span>?</span>
                                                                </p>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                        <span class="mt-2">Financial informations :</span>
                                                        <div class="col-lg-3 col-md-7 text-center mt-3">
                                                            <div class="input-titles">
                                                                <p class="text-center mb-0">Tangible Net Worth
                                                                    <span>?</span>
                                                                </p>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-7 text-center mt-3">
                                                            <div class="input-titles">
                                                                <p class="text-center mb-0">Sales
                                                                    <span>?</span>
                                                                </p>
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                        <div class="clac-button-score mt-4 mb-4 text-center">
                                                            <button
                                                                onclick="document.querySelector('.credit-lemit-calc').classList.remove('d-none')"><span><i
                                                                        class="fa-solid fa-check"></i></span>
                                                                calculate</button>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center d-none credit-lemit-calc">
                                                        <div class="col-lg-4">
                                                            <div class="d-flex flex-column gap-2">
                                                                <label class="text-center">Need of credit
                                                                    limit (Calculation of
                                                                    need )
                                                                    :</label>
                                                                <h4 class="text-dark text-center bg-info py-2">
                                                                    2.10 €</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="d-flex flex-column gap-2">
                                                                <label class="text-center">Acceptable credit
                                                                    limit :</label>
                                                                <h4 class="text-dark text-center bg-info py-2">
                                                                    2.10 €</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            <div class="d-flex flex-column gap-4">
                                                                <label class="text-center"></label>
                                                                <div class="btn btn-success "><i
                                                                        class="fa-solid fa-floppy-disk"
                                                                        style="  font-size: 15px;"></i> Save
                                                                    these results</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--this click to show hide-scetions-->
                                        <section
                                            class="button-to-back credit-limit-second-section credit-limit mt-2 d-none"
                                            id="showTwo">
                                            <div class="back-button container">
                                                <button class="mt-3 mb-3" onclick="showFirstCreditLimit()"><span><i
                                                            class="fa-solid fa-arrow-left"></i></span>
                                                    back</button>
                                            </div>
                                            <div class="three-cont-section  mt-2  ">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-4">
                                                            <div class="content-section-select">
                                                                <p class="text-center m-0">Criterion n°1</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="content-section-select">
                                                                <p class="text-center m-0">Criterion n°2</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row px-3 space-back">
                                                        <div class="col-md-4 m-0 p-0">
                                                            <p class="m-0 mt-2">Description</p>
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input type="text" class="form-control my-1"
                                                                value="Tangible Net Worth">
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input type="text" class="form-control my-1"
                                                                value="Sales">
                                                        </div>
                                                    </div>
                                                    <div class="row px-3 space-pading">
                                                        <div class="col-md-4 m-0 p-0">
                                                            <p class="m-0 mt-2">Detalied description</p>
                                                        </div>
                                                        <div class="col-md-4 m-0 pb-0 px-2">
                                                            <textarea class="form-control mt-1 mb-1" name="" id=""
                                                                placeholder="The TNW is calculated with balance sheet information: equity - untangible assets"></textarea>
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <textarea class="form-control mt-1 mb-1" name="" id=""
                                                                placeholder="The TNW is calculated with balance sheet information: equity - untangible assets"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row px-3 space-back">
                                                        <div class="col-md-4 m-0 p-0">
                                                            <p class="m-0 mt-2">max 5% if credit notatins
                                                                reuslt A</p>
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="50">
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="50">
                                                        </div>
                                                    </div>
                                                    <div class="row px-3 space-pading">
                                                        <div class="col-md-4 m-0 p-0">
                                                            <p class="m-0 mt-2">max 5% if credit notatins
                                                                reuslt B</p>
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="37.5">
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="37.5">
                                                        </div>
                                                    </div>
                                                    <div class="row px-3 space-back">
                                                        <div class="col-md-4 m-0 p-0">
                                                            <p class="m-0 mt-2">max 5% if credit notatins
                                                                reuslt C</p>
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="50">
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="50">
                                                        </div>
                                                    </div>
                                                    <div class="row px-3 space-pading">
                                                        <div class="col-md-4 m-0 p-0">
                                                            <p class="m-0 mt-2">max 5% if credit notatins
                                                                reuslt D</p>
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="37.5">
                                                        </div>
                                                        <div class="col-md-4 m-0 px-2">
                                                            <input class="form-control my-1" type="text"
                                                                value="37.5">
                                                        </div>
                                                    </div>
                                                    <div class="clac-button-score mt-4 mb-4 text-center">
                                                        <button onclick="showFirstCreditLimit()"><span><i
                                                                    class="fa-solid fa-check"></i></span>
                                                            Modify</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--this click to show hide-scetions-->
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none" id="indicatorsDiv">
                                <div class="sec-2 bg-white">
                                    <div class="container">
                                        <div class="row align-items-center pb-5">
                                            <div class="col-lg-6" style="height:300px ;">
                                                <div class="pay-totals mt-3 mb-3 fw-bold">
                                                    <p>Total receivable :<span>21.1 k€</span></p>
                                                    <p>Overdue: <span>6.3 k€</span></p>
                                                    <p>Overdue % :<span>30 %</span></p>
                                                    <p>Current receivable :<span>14.8 k€</span></p>
                                                    <p>Promise to pay :<span>0 €</span></p>
                                                </div>
                                                <hr>
                                                <div class="table-and-txt">
                                                    <p>Average time of payment :<span>+8 </span>days</p>
                                                    <p>Average days beyond terms <span> +7 </span>days</p>
                                                </div>
                                                <div
                                                    class="three-titels d-flex text-center justify-content-between align-items-center">
                                                    <span></span>
                                                    <span>Today</span>
                                                    <span>April 2024</span>
                                                    <span>March 2024</span>
                                                </div>
                                                <div class="four-cont-sec-2 d-flex justify-content-around  mt-3">
                                                    <span>?</span>
                                                    <span>+7d. <i class="fa-solid fa-flag"
                                                            style="color: green;"></i></span>
                                                    <span class="text-black-50"><i class="fa-solid fa-flag"></i></span>
                                                    <span class=" text-black-50 "><i class="fa-solid fa-flag"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6" style="height:300px ;">
                                                <h6 class="text-center text-black-50"> Aging balance</h6>
                                                <canvas id="myChart-5" width="200" height="200"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="two-charts bg-white">
                                    <div class="container">
                                        <div class="row pb-3">
                                            <div class="col-lg-6" style="height:300px ;">
                                                <h6 class="text-black-50 text-center mt-3"> DSO trend</h6>
                                                <canvas id="myChart-8" width="200" height="200"></canvas>
                                            </div>
                                            <div class="col-lg-6" style="height:300px ;">
                                                <h6 class="text-black-50 text-center mt-3">Overdue trend</h6>
                                                <canvas id="myChart-6" width="200" height="200"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="two-desc bg-white">
                                    <div class="container">
                                        <div class="row pb-5 align-items-center">
                                            <div class="col-lg-6 pt-5" style="height:500px ;">
                                                <div class="desc-and-cric mt-3 mb-3 text-center">
                                                    <h5 class="text-capitalize mt-3 mb-3"> Pending disputes
                                                    </h5>
                                                    <p>No. of items in dispute:<span>0</span></p>
                                                    <p>Disputed receivables amount :<span> 0 €</span></p>
                                                    <p>Average time for dispute resolution : <span> ?</span></p>
                                                </div>
                                                <div class="circ">
                                                    <span class="text-center text-capitalize"
                                                        style="width: 100%; color: green;">nodata-update</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 m-auto pt-5" style="height:500px ;">
                                                <h5 class="mt-5 mb-3 text-center">Disputes / Trend</h5>
                                                <div class="display-data">
                                                    <h6 class="text-center">No data to display</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="two-charts-sales bg-white">
                                    <div class="container">
                                        <div class="row pb-5">
                                            <div class="col-lg-6" style="height:300px ;">
                                                <h6 class="text-black-50 text-center mt-3">Sales history</h6>
                                                <canvas id="myChart-1" width="350" height="200"></canvas>
                                            </div>
                                            <div class="col-lg-6" style="height:300px ;">
                                                <h6 class="text-black-50 text-center mt-3">Cash receipts
                                                    history</h6>
                                                <canvas id="myChart-2" width="200" height="200"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="one-charts  bg-white">
                                    <div class="container">
                                        <div class="row pb-5 align-items-center" style="height:500px ;">
                                            <div class="col-lg-12">
                                                <div class="head-titels pt-3 text-black-50 mt-3 mb-3">
                                                    <p class="">total sales<span>39.8 k€</span></p>
                                                    <p>total cash receipts<span>18.7 k€</span></p>
                                                    <p>total forecast<span>0€</span>+ amount off forecast</p>
                                                </div>
                                            </div>
                                            <h5 class="text-dark text-center">Cash forecast</h5>
                                            <div style="height:300px ;">
                                                <canvas id="myChart-3" width="100" height="100"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--sec-2-->
                            <!--sec-3-->
                        @include('clients.client_history')
                        @empty
                            <div class="row d-none text-center">
                                <p class="p-1 mt-3">
                                    {{ __('No clients has been found') }}
                                </p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            {{-- @include('clients.client_data_model', [$client]) --}}
            <div class="row mb-3">
                <div class="col-md-2 col-4"></div>
                <div class="form-group col-md-4 col-8">
                    <select class="form-select m-2" onfocus="this.size=9;" onblur="this.size=1;"
                        onchange="this.size=1; this.blur();" aria-label=" Default select example">
                        <option value="" selected disabled>Add To Group :</option>
                        <option value="1">ATLANTIQue</option>
                        <option value="2">Central</option>
                        <option value="3">Clients douteux</option>
                        <option value="3">Clients France</option>
                        <option value="3">Clients Grands Comptes</option>
                        <option value="3">Test 2</option>
                        <option value="3">US Clients</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-6">
                    <select name="collection_scenario_id" class="m-2 form-select"
                        data-placeholder="Collection scenario:" title="Collection scenario">
                        <option value="" selected disabled>{{ __('Collection Scenarios') }}</option>
                        @foreach ($collectionsScenario as $collection)
                            <option value="{{ $collection->id }}">{{ $collection->en_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 col-6">
                    <select class="form-select m-2" aria-label="Default select example">
                        <option selected disabled>{{ __('Collectors') }}</option>
                        @foreach ($collectors as $collector)
                            <option value="{{ $collector->id }}">{{ $collector->first_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 col-6">
                    <select class="form-select m-2" aria-label="Default select example">
                        <option selected disabled>Associated a colleague :</option>
                        <option value="1">Brad Jackson(Sales Manager)</option>
                        <option value="1">Juse Durant(Sales Manager)</option>
                        <option value="1">Paul Mayer(Sales Manager)</option>
                        <option value="1">Thomas Smith(Executive Officer)</option>
                        <option value="1">
                            Vironica Campbell(Sales Administration)
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-6">
                    <select class="form-select m-2" aria-label="Default select example">
                        <option selected disabled>Interactive emails :</option>
                        <option value="1">Yes</option>
                        <option value="1">No</option>
                        <option value="1" class="text-primary"><a href="#"> Read more</a>
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-5">
                    <select class="form-select m-2" aria-label="Default select example">
                        <option selected disabled>Late payment penalties :</option>
                        <option value="1">Yes</option>
                        <option value="1">No</option>
                        <option value="1" class="text-primary"><a href="#"> Read more</a>
                        </option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-5">
                    <select class="form-select m-2" aria-label="Default select example">
                        <option selected disabled>Recovery cost :</option>
                        <option value="1">Yes</option>
                        <option value="1">No</option>
                        <option value="1" class="text-primary"><a href="#"> Read more</a>
                        </option>
                    </select>
                </div>
                <div class="col-2  ">
                    <div class=" text-center m-auto align-items-center"><i
                            class="fa-solid fa-trash btn-danger mt-2 p-1 text-light"
                            style="font-size: 25px;cursor: pointer;border-radius: 5px;"></i></div>
                </div>
            </div>
        </div>
        </div>
        <div class="justify-content-end gap-1 d-flex mb-2">
            {{-- <div class="btn btn-outline-primary">Previus</div>
                <div class="btn btn-primary">1</div>
                <div class="btn btn-outline-primary">2</div>
                <div class="btn btn-outline-primary">3</div>
                <div class="btn btn-outline-primary">4</div>
                <div class="btn btn-outline-primary">5</div>
                <div class="btn btn-outline-primary">6</div>
                <div class="btn btn-outline-primary">Next</div> --}}
        </div>
        {{-- {{ $clientResource->links('pagination::bootstrap-5') }} --}}

        {{-- ------------------- Excel button ------------------------------------------------ --}}

        <div class="text-center mb-2">
            <div class="this-buttons">
                <div class="">
                    <div class="btn-group">
                        <button type="button" class="btn text-light"><span><i
                                    class="fa-solid fa-download"></i>&ensp;</span>Export
                            this data to excel</button>
                        <button type="button" class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <p>file fromat:</p>
                            </li>
                            <div class="radios-inp d-flex  justify-content-around">
                                <li class="dropdown-item d-flex"><input type="radio" name="fils"
                                        id="csv"><label for="fils">csv</label></li>
                                <li class="dropdown-item d-flex"><input type="radio" name="fils"
                                        id="xls"><label for="fils">xls</label>
                                </li>
                            </div>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <p>encoding:</p>
                            </li>
                            <select name="" style="width: 100%; font-size: 12px;">
                                <option value="" selected>UTF-8 (Unicode / US format)</option>
                                <option value="ISO-8859-1">ISO-8859-1 (Western European format)</option>
                                <option value="ISO-8859-2">ISO-8859-2 (Central European format)</option>
                                <option value="ISO-8859-3">ISO-8859-3 (South European format)</option>
                                <option value="ISO-8859-4">ISO-8859-4 (North European format)</option>
                                <option value="ISO-8859-16">ISO-8859-16 (Romanian format)</option>
                                <option value="ISO-2022-JP">ISO-2022-JP</option>
                                <option value="UTF-7">UTF-7</option>
                                <option value="BIG-5">BIG-5</option>
                                <option value="KOI8-R">KOI8-R</option>
                            </select>
                            </li>
                            <li class="mt-3 "><button type="button" class="btn" style="width: 100%;"><span><i
                                            class="fa-solidfa-download"></i>&ensp;</span>download</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- ------------------- End Excel button ------------------------------------------------ --}}
        </div>
    </section>
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
