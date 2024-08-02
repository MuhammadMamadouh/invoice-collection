@extends('layouts.dashboard.app')
@section('content')
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="allClients.html" class="m-1 w-100 btn btn-primary p-3">
                        <i class="fa-solid fa-earth-asia"></i> &ensp; {{ __('All clients') }} &ensp;
                        <span class="badge bg-white text-primary">184</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="myClients.html" class="m-1 w-100 btn btn-outline-primary text-secondary p-3" id="actionButton">
                        <i class="fa-solid fa-building text-primary"></i> &ensp; {{ __('My clients') }} &ensp;
                        <span class="badge bg-primary">4</span>
                    </a>
                </div>
                <a href="searchForAClient.html" class="col-lg-3 col-md-4 col-sm-6">
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
                            <option value="" selected disabled>Clients Group :</option>
                            <option value="1">ATLANTIQue</option>
                            <option value="2">Central</option>
                            <option value="3">Clients douteux</option>
                            <option value="3">Clients France</option>
                            <option value="3">Clients Grands Comptes</option>
                            <option value="3">Clients Mass market</option>
                            <option value="3">Clients OSP</option>
                            <option value="3">Clients PME</option>
                            <option value="3">Clients Publics</option>
                            <option value="3">Clients Risques</option>
                            <option value="3">Clients Speciaux</option>
                            <option value="3">Clients VIP</option>
                            <option value="3">ClIENT_MEDIPREMA</option>
                            <option value="3">France Contentieux</option>
                            <option value="3">Group Alias</option>
                            <option value="3">Group Elec</option>
                            <option value="3">Group Imprimeurs</option>
                            <option value="3">Group Industrie</option>
                            <option value="3">Magasins de villa</option>
                            <option value="3">Market Place</option>
                            <option value="3">Public</option>
                            <option value="3">Relance team back office</option>
                            <option value="3">Retail</option>
                            <option value="3">Salomon</option>
                            <option value="3">Test 2</option>
                            <option value="3">US Clients</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select name="collection_scenario_id" class="m-2 form-select"
                            data-placeholder="Collection scenario:" title="Collection scenario">
                            <option selected disabled>{{ __('Collection Scenarios') }}</option>
                            @foreach ($collectionsScenario as $collection)
                                <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select name='collector_id' class="form-select m-2" aria-label="Default select example">
                            <option selected disabled>collectors</option>
                            @foreach ($collectors as $collector)
                                <option value="{{ $collector->id }}">{{ $collector->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select class="form-select m-2" aria-label="Default select example">
                            <option selected disabled>Associated With Client :</option>
                            <option value="1">Brad Jackson(Sales Manager)</option>
                            <option value="1">Juse Durant(Sales Manager)</option>
                            <option value="1">Paul Mayer(Sales Manager)</option>
                            <option value="1">Thomas Smith(Executive Officer)</option>
                            <option value="1">
                                Vironica Campbell(Sales Administration)
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6">
                        <select name="onlyCountry" class="m-2 form-select" data-placeholder="Country:" title="Country">
                            <option value="0" selected disabled>Country :</option>
                            <option value="1">Afghanistan</option>
                            <option value="2">Albania</option>
                            <option value="3">Algeria</option>
                            <option value="6">Angola</option>
                            <option value="11">Armenia</option>
                            <option value="13">Australia</option>
                            <option value="14">Austria</option>
                            <option value="15">Azerbaijan</option>
                            <option value="20">Belarus</option>
                            <option value="21">Belgium</option>
                            <option value="23">Benin</option>
                            <option value="27">Bosnia and Herzegovina</option>
                            <option value="30">Brazil</option>
                            <option value="33">Bulgaria</option>
                            <option value="34">Burkina Faso</option>
                            <option value="37">Cameroon</option>
                            <option value="38">Canada</option>
                            <option value="56">Ceska Republika</option>
                            <option value="44">China</option>
                            <option value="49">Congo</option>
                            <option value="52">Costa Rica</option>
                            <option value="53">Croatia (Hrvatska)</option>
                            <option value="55">Cyprus</option>
                            <option value="57">Denmark</option>
                            <option value="63">Egypt</option>
                            <option value="67">Estonia</option>
                            <option value="72">Finland</option>
                            <option value="73">France</option>
                            <option value="80">Georgia</option>
                            <option value="81">Germany</option>
                            <option value="82">Ghana</option>
                            <option value="83">Gibraltar</option>
                            <option value="85">Greece</option>
                            <option value="86">Greenland</option>
                            <option value="88">Guadeloupe</option>
                            <option value="90">Guatemala</option>
                            <option value="98">Hungary</option>
                            <option value="99">Iceland</option>
                            <option value="100">India</option>
                            <option value="104">Ireland</option>
                            <option value="105">Israel</option>
                            <option value="106">Italy</option>
                            <option value="108">Japan</option>
                            <option value="109">Jordan</option>
                            <option value="110">Kazakhstan</option>
                            <option value="111">Kenya</option>
                            <option value="246">Kosovo</option>
                            <option value="118">Latvia</option>
                            <option value="119">Lebanon</option>
                            <option value="122">Libya</option>
                            <option value="124">Lithuania</option>
                            <option value="125">Luxembourg</option>
                            <option value="127">Macedonia</option>
                            <option value="128">Madagascar</option>
                            <option value="132">Mali</option>
                            <option value="133">Malta</option>
                            <option value="137">Mauritius</option>
                            <option value="138">Mayotte</option>
                            <option value="139">Mexico</option>
                            <option value="141">Moldova</option>
                            <option value="245">Montenegro</option>
                            <option value="145">Morocco</option>
                            <option value="151">Netherlands</option>
                            <option value="157">Niger</option>
                            <option value="158">Nigeria</option>
                            <option value="162">Norway</option>
                            <option value="167">Panama</option>
                            <option value="171">Philippines</option>
                            <option value="173">Poland</option>
                            <option value="174">Portugal</option>
                            <option value="175">Puerto Rico</option>
                            <option value="176">Qatar</option>
                            <option value="177">Reunion</option>
                            <option value="178">Romania</option>
                            <option value="179">Russian Federation</option>
                            <option value="186">San Marino</option>
                            <option value="188">Saudi Arabia</option>
                            <option value="189">Senegal</option>
                            <option value="190">Serbia</option>
                            <option value="193">Singapore</option>
                            <option value="194">Slovak Republic</option>
                            <option value="195">Slovenia</option>
                            <option value="198">South Africa</option>
                            <option value="199">Spain</option>
                            <option value="207">Sweden</option>
                            <option value="208">Switzerland</option>
                            <option value="211">Tajikistan</option>
                            <option value="212">Tanzania</option>
                            <option value="213">Thailand</option>
                            <option value="214">Togo</option>
                            <option value="218">Tunisia</option>
                            <option value="219">Turkey</option>
                            <option value="220">Turkmenistan</option>
                            <option value="223">Uganda</option>
                            <option value="224">Ukraine</option>
                            <option value="225">United Arab Emirates</option>
                            <option value="226">United Kingdom</option>
                            <option value="227">United States</option>
                            <option value="228">Uruguay</option>
                            <option value="230">Uzbekistan</option>
                            <option value="234">Viet Nam</option>
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
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" aria-describedby="emailHelp"
                                    placeholder="Multi-columns search" />
                            </div>
                        </form>
                    </div>
                    <div id="selectedAlert" class="d-flex d-none justify-content-between align-items-center mb-4">
                        <p class="mt-1"></p>
                        <a href="editAlert.html" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit</a>
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
                                <p class="fw-bold">{{ __('Collection scenario') }}</p>
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
                        @forelse($clients as $key => $client)
                            <div class="row align-items-center pt-3" style="background-color: {{$key % 2 == 0 ? '#006bff14' : '#ffffff'  }}">
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
                                            onclick="showHolap()">{{ $client->company_name }}</a></p>
                                </div>
                                <div class="col-md-3 hide">
                                    <div class=" w-100 mb-3">
                                        <select class="form-select" id="inputname19">
                                            <option selected disabled>{{ $client->collectionScenarios->name }}</option>
                                            @foreach ($collectionsScenario as $collection)
                                                <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2 hide">
                                    <p class="fw-bold">Group Industrie</p>
                                </div>
                                <div class="col-1 hide">
                                    <p class="fw-bold">4Front</p>
                                </div>
                                <div class="col-1 hide">
                                    <p class="fw-bold">39.6 k€</p>
                                </div>
                                <div class="col-1 hide">
                                    <p class="fw-bold">39.6 k€</p>
                                </div>
                                <div class="col-3 mb-3 tavle-dropdown-icon" onclick="toggleFunction(this)">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                                <div class="hidden ms-2 d-none">
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">Business name:</p>
                                        <p class="fw-bold">4Front</p>
                                    </div>
                                    <div class="d-flex bg-light">
                                        <p class="fw-bold">Collection scenario:</p>
                                        <div class="">
                                            <select name="collection_scenario_id" class="form-select" id="inputname19">
                                                <option value="" selected disabled>{{ __('Collection Scenarios') }}
                                                </option>
                                                @foreach ($collectionsScenario as $collection)
                                                    <option value="{{ $collection->id }}">{{ $collection->name }}
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
                                </div>
                            </div>
                            <div class="arrow-bottom"></div>
                        @empty
                            <div class="row d-none text-center">
                                <p class="p-1 mt-3">
                                    {{ __('No clients has been found') }}
                                </p>
                            </div>
                        @endforelse
                    </div>
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
                                <option value="3">Clients Mass market</option>
                                <option value="3">Clients OSP</option>
                                <option value="3">Clients PME</option>
                                <option value="3">Clients Publics</option>
                                <option value="3">Clients Risques</option>
                                <option value="3">Clients Speciaux</option>
                                <option value="3">Clients VIP</option>
                                <option value="3">ClIENT_MEDIPREMA</option>
                                <option value="3">France Contentieux</option>
                                <option value="3">Group Alias</option>
                                <option value="3">Group Elec</option>
                                <option value="3">Group Imprimeurs</option>
                                <option value="3">Group Industrie</option>
                                <option value="3">Magasins de villa</option>
                                <option value="3">Market Place</option>
                                <option value="3">Public</option>
                                <option value="3">Relance team back office</option>
                                <option value="3">Retail</option>
                                <option value="3">Salomon</option>
                                <option value="3">Test 2</option>
                                <option value="3">US Clients</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-6">
                            <select name="collection_scenario_id" class="m-2 form-select"
                                data-placeholder="Collection scenario:" title="Collection scenario">
                                <option value="" selected disabled>{{ __('Collection Scenarios') }}</option>
                                @foreach ($collectionsScenario as $collection)
                                    <option value="{{ $collection->id }}">{{ $collection->name }}</option>
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
                {{$clients->links('pagination::bootstrap-5')}}
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
                                    <option value="ISO-8859-5">ISO-8859-5 (Cyrillic format)</option>
                                    <option value="ISO-8859-6">ISO-8859-6 (Arabic format)</option>
                                    <option value="ISO-8859-7">ISO-8859-7 (Greek format)</option>
                                    <option value="ISO-8859-8">ISO-8859-8 (Hebrew format)</option>
                                    <option value="ISO-8859-9">ISO-8859-9 (Turkish format)</option>
                                    <option value="ISO-8859-10">ISO-8859-10 (Nordic format)</option>
                                    <option value="ISO-8859-13">ISO-8859-13 (Baltic format)</option>
                                    <option value="ISO-8859-14">ISO-8859-14 (Celtic format)</option>
                                    <option value="ISO-8859-15">ISO-8859-15 (NEW Western European format)</option>
                                    <option value="ISO-8859-16">ISO-8859-16 (Romanian format)</option>
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
                                        style="width: 100%;"><span><iclass="fa-solidfa-download"></i>&ensp;</span>download</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="js/wow.min.js"></script>
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
