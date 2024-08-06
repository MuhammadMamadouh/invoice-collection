@extends('layouts.dashboard.app')
@section('content')

    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ route('clients.index') }}" class="m-1 w-100 btn btn-primary p-3">
                        <i class="fa-solid fa-earth-asia"></i> &ensp; {{ __('All clients') }} &ensp;
                        <span class="badge bg-white text-primary">{{ \App\Models\Client::count() }}</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="#" class="m-1 w-100 btn btn-outline-primary text-secondary p-3" id="actionButton">
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
                                <option value="{{ $collection->id }}">{{ $collection->en_name }}</option>
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
                                            <option selected disabled>{{ $client->collectionScenarios->en_name }}</option>
                                            @foreach ($collectionsScenario as $collection)
                                                <option value="{{ $collection->id }}">{{ $collection->en_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2 hide">
                                    <p class="fw-bold">{{ __('Group Industrie') }}</p>
                                    @foreach ($client->clientsGroups as $group)
                                        <p class=""><a href="#">{{ $group->en_name }}</a></p>
                                    @endforeach
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
                                        <p class="fw-bold">{{__("Collection scenario")}}:</p>
                                        <div class="">
                                            <select name="collection_scenario_id" class="form-select" id="inputname19">
                                                <option value="" selected disabled>{{ __('Collection Scenarios') }}
                                                </option>
                                                @foreach ($collectionsScenario as $collection)
                                                    <option value="{{ $collection->id }}">{{ $collection->en_name }}
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
                            <div id="company-details-{{ $client->id }}">
                                <div class="company-details d-none" id="company-detail-{{ $client->id }}">
                                    <div class="bg-light holap-first" id="company-details-{{ $client->id }}">
                                        <div class="row text-center m-0 p-3 w-100"
                                            id="company-details-{{ $client->id }}" style="background-color: #006bff">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex w-25 gap-3" id="company-details-{{ $client->id }}">
                                                    <i class="fa-solid fa-flag text-warning" style="font-size: 25px"></i>
                                                    <p class="text-light">{{ __('Payeurs correct / Average payer') }}</p>
                                                    <div class="mb-3 alert-icon-container">
                                                        <i class="fa-solid fa-bell text-danger"
                                                            style="font-size: 25px"></i>
                                                        <span class="alert-counter">5</span>
                                                        <div class="alert-list">
                                                            <!-- List of alerts -->
                                                            <div class="alert-item">
                                                                <a href="#">{{ __('Alert') }}:</a> Customer
                                                                receivable above
                                                                cridit
                                                                limit
                                                            </div>
                                                            <div class="alert-item">
                                                                <a href="#">Alert:</a> Customer receivable above
                                                                cridit
                                                                limit
                                                            </div>
                                                            <div class="alert-item">
                                                                <a href="#">Alert:</a> Customer receivable above
                                                                cridit
                                                                limit
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="text-light w-50">{{ $client->company_name }}</h2>
                                                <div class="d-flex justify-content-end gap-3 w-25">
                                                    <div class="icon-holab  ">
                                                        <i class="fa-solid fa-pen text-primary p-2 bg-light"
                                                            onclick="EditHolap()"
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
                                                        <a href="">{{ $client->address }}</a>
                                                    </p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold">{{ __('Group') }}:</p>
                                                    @foreach ($client->clientsGroups as $group)
                                                        <p class=""><a href="">{{ $group->en_name }}</a></p>
                                                    @endforeach
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold">{{ __('Collector') }}:</p>
                                                    <p class=""><a
                                                            href="">{{ $client->collector->first_name }}</a></p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold">{{ __('Collection senario') }}:</p>
                                                    <select class="form-select m-2 w-100"
                                                        aria-label="Default select example">
                                                        <option selected disabled>
                                                            {{ $client->collectionScenarios->en_name }}
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
                                                        <input type="text" value="{{ $client->credit_limit }}"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold"><a
                                                            href="">{{ __('Late payment penalties') }}</a>:
                                                    </p>
                                                    <p class="">
                                                        {{ $client->late_payment_penalties == 1 ? 'Yes' : 'No' }}</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold"><a href="">{{ __('Recovery cost') }}</a>:
                                                    </p>
                                                    <p class="">
                                                        {{ $client->recovery_cost == 1 ? 'Yes' : 'No' }}</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="fw-bold"><a
                                                            href="">{{ __('Interactive emails') }}</a>:</p>
                                                    <p class="">
                                                        {{ $client->interactive_emails == 1 ? 'Yes' : 'No' }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-start">
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
                                                    <p class="">Accountant name</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    @<a href="">training@mydsomanager.com</a>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-phone"></i> &nbsp; &nbsp;
                                                    <a href=""> +33 01 01 01 01 01</a> &nbsp; (Phone)
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <i class="fa-solid fa-star"></i> &nbsp; Contact for collection
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-4 m-0">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="m-1 w-100 btn btn-primary disputeButton"
                                                    onclick="disputeFun()">
                                                    <i class="fa-solid fa-clock"></i> collection& dispute management
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <div class="m-1 w-100 btn btn-outline-primary riskButton"
                                                    onclick="riskFun()">
                                                    <i class="fa-solid fa-bolt"></i> Risk Report
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="m-1 w-100 btn btn-outline-primary indicatorsButton"
                                                    onclick="indicatorsFun()">
                                                    <i class="fa-solid fa-chart-simple"></i> Reports & Indicators
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="m-1 w-100 btn btn-outline-primary historyButton"
                                                    onclick="historyFun()">
                                                    <i class="fa-solid fa-bars-staggered"></i> History
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="create-c-i holap-second bg-light d-none">
                                        <div class="d-flex gap-3 justify-content-end text-center m-0 mb-3 p-3 w-100"
                                            style="background-color: #006bff">
                                            <span class="btn text-light p-1 px-2 btn-danger" onclick="closeHolap()"><i
                                                    class="fa-solid fa-trash" style="  font-size: 15px;"></i></span>
                                            <span class="btn px-4 text-light p-1 btn-success"
                                                onclick="closeEditHolap()"><i class="fa-solid fa-floppy-disk"
                                                    style="  font-size: 15px;"></i> Save</span>
                                            <span class="btn px-4 text-light p-1 btn-warning"
                                                onclick="closeEditHolap()"><i class="fa-solid fa-reply"
                                                    style="  font-size: 15px;"></i> Cancel</span>
                                            <a href="editHolapDetails.html" class="btn px-2 text-primary p-1 btn-light"
                                                target="_blank"><i
                                                    class="fa-solid fa-maximize "style="  font-size: 15px;"></i></a>
                                        </div>
                                        <div class="row container-fluid">
                                            <div class="col-md-4  my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname0">Company / Business
                                                            name * : </label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname0">
                                                    </div>
                                                </form>

                                            </div><!--1-->
                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname1">Payment term :</label>
                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname1">
                                                    </div>
                                                </form>

                                            </div><!--3-->
                                            <div class="col-md-4 my-2">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <select class="form-select m-auto w-75"
                                                        aria-label="Default select example">
                                                        <option selected disabled>Contact:</option>
                                                        <option value="1">Clients risqués (FR)</option>
                                                        <option value="1">Key accounts scenario (EN)</option>
                                                        <option value="1">Modeles actions specifiques</option>
                                                        <option value="1">Risky clients (En)</option>
                                                        <option value="1">
                                                            Scenario de relance standard (by default)
                                                        </option>
                                                        <option value="1">Standard collection scenario</option>
                                                        <option value="1">Templates specific actions</option>
                                                    </select>
                                                </div>
                                            </div><!--2-->
                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname4">Trading name :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname4">
                                                    </div>
                                                </form>

                                            </div><!--4-->
                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname6"> Payment mean :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname6">
                                                    </div>
                                                </form>
                                            </div><!--6-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname60"> Role * :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <select class="form-select w-100" id="inputname60"
                                                            aria-label="Default select example">
                                                            <option value="1">Accountant</option>
                                                            <option value="1">Client</option>
                                                            <option value="1">Company</option>
                                                            <option value="1">Executive Officer</option>
                                                            <option selected>Other</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div><!--6-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname7"> Company code * :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname7">
                                                    </div>
                                                </form>

                                            </div><!--7-->
                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname50"> Insurer reference :</label>

                                                    </div>
                                                    <div class="col-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inputname50">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--9-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname9"> Title <span class="text-black-50">(Mr,
                                                                Mrs ...)</span>
                                                            :</label>

                                                    </div>
                                                    <div class="col-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inputname9">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--9-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname5"> Ultimate Parent Code :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname5">
                                                    </div>
                                                </form>

                                            </div><!--5-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname9"> Insurer guarantee :</label>

                                                    </div>
                                                    <div class="col-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inputname9">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--9-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname100"> Last Name * :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname100">
                                                    </div>
                                                </form>
                                            </div><!--10-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname10"> Legal ID :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname10">
                                                    </div>
                                                </form>
                                            </div><!--10-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname91"> Temporary guarantee :</label>

                                                    </div>
                                                    <div class="col-7">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inputname91">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--9-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname101"> First Name * :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname101">
                                                    </div>
                                                </form>
                                            </div><!--10-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname13"> VAT Number :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname13">
                                                    </div>
                                                </form>
                                            </div><!--13-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname222">Start date :</label>

                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inputname222">
                                                        <span class="input-group-text"><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                    </div>
                                                </form>
                                            </div><!--2-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname555"> Email :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname555">
                                                    </div>
                                                </form>

                                            </div><!--5-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname2">Address :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <textarea class="form-control" rows="3" id="inputname2"></textarea>
                                                    </div>
                                                </form>
                                            </div><!--2-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname2222">End date :</label>

                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inputname2222">
                                                        <span class="input-group-text"><i
                                                                class="fa-solid fa-calendar-days"></i></span>
                                                    </div>
                                                </form>
                                                <div class=" my-2">
                                                    <form class="d-flex">
                                                        <div class="col-5 ">
                                                            <label for="inputname12"> Other guarantees :</label>

                                                        </div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="inputname12">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-euro-sign"></i></span>
                                                        </div>
                                                    </form>
                                                </div><!--12-->
                                            </div><!--2-->



                                            <div class="col-md-4 my-2">
                                                <form class="d-flex justify-content-center my-2">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="email">
                                                            <label class="form-check-label" for="email">Email in
                                                                copy in the automatic
                                                                emails</label>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class=" my-2">
                                                    <form class="d-flex">
                                                        <div class="col-5 ">
                                                            <label for="inputname502"> Phone :</label>

                                                        </div>
                                                        <div class="col-7 ">
                                                            <input type="text" class="form-control" id="inputname502">
                                                        </div>
                                                    </form>
                                                </div><!--5-->
                                            </div><!--5-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname8"> Post Office Box :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname8">
                                                    </div>
                                                </form>

                                            </div><!--8-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname15">
                                                            Credit Limit :</label>

                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inputname15">
                                                        <span class="input-group-text"><i
                                                                class="fa-solid fa-euro-sign"></i></span>
                                                    </div>
                                                </form>
                                            </div><!--15-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname504">Mobile Phone :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname504">
                                                    </div>
                                                </form>
                                            </div><!--5-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname5"> ZIP (or Postal) Code :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname5">
                                                    </div>
                                                </form>

                                            </div><!--5-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname505"> Score :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname505">
                                                    </div>
                                                </form>

                                            </div><!--5-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname506"> Fax :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname506">
                                                    </div>
                                                </form>

                                            </div><!--5-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname11"> City :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname11">
                                                    </div>
                                                </form>
                                                <div class=" my-2">
                                                    <form class="d-flex">
                                                        <div class="col-5 ">
                                                            <label for="inputname14"> State / Province :</label>

                                                        </div>
                                                        <div class="col-7 ">
                                                            <input type="text" class="form-control" id="inputname14">
                                                        </div>
                                                    </form>
                                                </div><!--14-->
                                                <div class=" my-2">
                                                    <form class="d-flex">
                                                        <div class="col-5 ">
                                                            <label for="inputname17"> Country :  </label>

                                                        </div>
                                                        <div class="col-7 ">
                                                            <input type="text" class="form-control" id="inputname17">
                                                        </div>
                                                    </form>
                                                </div><!--17-->
                                            </div><!--11-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname18"> <a href="">Late payment
                                                                penalties?</a></label>

                                                    </div>
                                                    <div class="col-7 d-flex justify-content-between align-items-center ">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                id="exampleCheckbox1">
                                                            <label class="form-check-label"
                                                                for="exampleCheckbox1">Yes</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                id="exampleCheckbox2">
                                                            <label class="form-check-label"
                                                                for="exampleCheckbox2">No</label>
                                                        </div>
                                                    </div>

                                                </form>
                                                <div class=" my-2">
                                                    <form class="d-flex">
                                                        <div class="col-5 ">
                                                            <label for="inputname21"> <a href="">Recovery
                                                                    cost?</a></label>

                                                        </div>
                                                        <div class="col-7 d-flex justify-content-between ">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    id="exampleCheckbox1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheckbox1">Yes</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    id="exampleCheckbox2">
                                                                <label class="form-check-label"
                                                                    for="exampleCheckbox2">No</label>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div><!--21-->
                                                <div class=" my-2">
                                                    <form class="d-flex">
                                                        <div class="col-5 ">
                                                            <label for="inputname24"><a href="">Interactive
                                                                    emails?</a></label>

                                                        </div>
                                                        <div class="col-7 d-flex justify-content-between  ">
                                                            <div class="form-check ">
                                                                <input class="form-check-input" type="radio"
                                                                    id="exampleCheckbox1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheckbox1">Yes</label>
                                                            </div>
                                                            <div class="form-check d-flex">
                                                                <input class="form-check-input" type="radio"
                                                                    id="exampleCheckbox2">
                                                                <label class="form-check-label "
                                                                    for="exampleCheckbox2">No</label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!--24-->
                                            </div><!--18-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 mt-2">
                                                        <label for="inputname2">Comments :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <textarea class="form-control" rows="3" id="inputname2"></textarea>
                                                        <p class="text-black-50 m-0">Comments should be factual,
                                                            objective and non
                                                            offensive
                                                        </p>
                                                    </div>
                                                </form>
                                            </div><!--2-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname20"> Website :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname20">
                                                    </div>
                                                </form>

                                            </div><!--20-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname27">Customer custom field #1:</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname27">
                                                    </div>
                                                </form>

                                            </div><!--27-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex justify-content-center my-2">
                                                    <div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="contact">
                                                            <label class="form-check-label" for="contact">Contact for
                                                                collection?</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--5-->


                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname16"> Business line :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname16">
                                                    </div>
                                                </form>
                                            </div><!--16-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname30">Customer custom field #2:</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <input type="text" class="form-control" id="inputname30">
                                                    </div>
                                                </form>
                                            </div><!--30-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex justify-content-center">
                                                    <div>
                                                        <div class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                                            Delete this contact
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--5-->



                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname19"> Collector :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <select class="form-select" id="inputname19">
                                                            <option value="" selected disabled>Nicolas Grayson
                                                                (collestor)
                                                            </option>
                                                            <option value="option1">Mike Anderson (Collector)</option>
                                                            <option value="option1">Nicolas Grayson (Collector)
                                                            </option>
                                                            <option value="option1">Paul Mayer (Administrator)</option>
                                                            <option value="">Véronique Miguet (Credit Manager)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </form>

                                            </div><!--19-->
                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname22"> Collection scenario :</label>

                                                    </div>
                                                    <div class="col-7 ">
                                                        <select class="form-select" id="inputname19">
                                                            <option value="" selected disabled>scenario do
                                                                relance standare</option>
                                                            <option value="">Clients publics (FR)</option>
                                                            <option value="">Clients risqués (FR)</option>
                                                            <option value="">Key accounts scenario (EN)</option>
                                                            <option value="">Modèles actions spécifiques</option>
                                                            <option value="">Risky clients (EN)</option>
                                                            <option value="">Scénario de relance standard (by
                                                                default)</option>
                                                            <option value="">Standard Collection Scenario
                                                            </option>
                                                            <option value="">Templates specific actions</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div><!--22-->

                                            <div class="col-md-4 my-2">
                                                <form class="d-flex">
                                                    <div class="col-5 ">
                                                        <label for="inputname24">Block this account?</label>
                                                    </div>
                                                    <div class="col-7 d-flex justify-content-between  ">
                                                        <div class="form-check ">
                                                            <input class="form-check-input" type="radio"
                                                                id="block">
                                                            <label class="form-check-label" for="block">Yes</label>
                                                        </div>
                                                        <div class="form-check d-flex">
                                                            <input class="form-check-input" type="radio"
                                                                id="block">
                                                            <label class="form-check-label " for="block">No</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!--24-->

                                            <div class="my-4 d-flex justify-content-center gap-3">
                                                <p class="text-black-50">Creation date in MY DSO MANAGER : 2020-03-02
                                                    11:00:15 (G.M.T. +1)
                                                </p>
                                                <p class="text-black-50">• Modification date : 2020-03-11 16:59:24
                                                    (G.M.T. +1)</p>
                                            </div>

                                        </div><!--row-->
                                        <div class="row p-4 m-0 container-fluid">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="m-1 w-100 btn btn-primary disputeButton"
                                                    onclick="disputeFun()">
                                                    <i class="fa-solid fa-clock"></i> collection& dispute management
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <div class="m-1 w-100 btn btn-outline-primary riskButton"
                                                    onclick="riskFun()">
                                                    <i class="fa-solid fa-bolt"></i> Risk Report
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="m-1 w-100 btn btn-outline-primary indicatorsButton"
                                                    onclick="indicatorsFun()">
                                                    <i class="fa-solid fa-chart-simple"></i> Reports & Indicators
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="m-1 w-100 btn btn-outline-primary historyButton"
                                                    onclick="historyFun()">
                                                    <i class="fa-solid fa-bars-staggered"></i> History
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--create-c-i-->

                                    <div class="bg-white" id="disputeDiv">
                                        <div class="bg-white position-relative">
                                            <div
                                                class="d-flex small-icons-big-container justify-content-between p-4 px-5 m-0">
                                                <div class="text-center my-auto small-icons-container">
                                                    Key accounts scenario (EN) :
                                                </div>
                                                <div class="text-center small-icons-container" style="z-index: 2">
                                                    <span>-10d</span>
                                                    <div class="btn-warning small-icons text-light px-2 py-1">
                                                        <i class="fa-solid fa-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="text-center small-icons-container" style="z-index: 2">
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
                                                </div>
                                            </div>
                                            <div class="arrow-right"></div>
                                            <div class="line-through-icons"></div>
                                        </div>
                                        <div class="d-flex justify-content-between flex-wrap p-4 m-0">
                                            <h3>Action to do:</h3>
                                            <select class="form-select w-auto" aria-label="Default select example">
                                                <option selected disabled>New action:</option>
                                                <option value="1">Send email</option>
                                                <option value="1">Send internal interactive email</option>
                                                <option value="1">Send a SMS</option>
                                                <option value="1">Write a dunning letter</option>
                                                <option value="1">Create a specific action</option>
                                            </select>
                                        </div>
                                        <div class="p-4 m-0 actions-row">
                                            <div class="row align-items-center text-center">
                                                <div class="col fw-bold">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Action date</p>
                                                    </div>
                                                </div>
                                                <div class="col fw-bold">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Action type</p>
                                                    </div>
                                                </div>
                                                <div class="col fw-bold">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Action</p>
                                                    </div>
                                                </div>
                                                <div class="col fw-bold">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Action amount inc. Tax</p>
                                                    </div>
                                                </div>
                                                <div class="col"></div>
                                            </div>
                                            <div class="row mt-2 text-center p-2 align-items-center"
                                                style="background-color: #006bff14;">
                                                <div class="col fw-bold">13 - 5 - 2022</div>
                                                <div class="col fw-bold">
                                                    <div class="btn openModalBtn btn-primary">@ Email</div>
                                                </div>
                                                <div class="col fw-bold">Reminder by email No .2</div>
                                                <div class="col fw-bold">100,000.00 €</div>
                                                <div class="col">
                                                    <div class="btn btn-primary">
                                                        <i class="fa-solid fa-check"></i>
                                                    </div>
                                                    <div class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-calendar"></i>
                                                    </div>
                                                    <div class="btn btn-outline-primary">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row bg-light p-2 mt-3">
                                                <div class="col-sm-4">
                                                    Total Receivable:<span class="fw-bold">100,000.00 €</span>
                                                </div>
                                                <div class="col-sm-4">
                                                    Overdue:<span class="fw-bold">100,000.00 €</span>
                                                </div>
                                                <div class="col-sm-4">
                                                    Current Receivable:<span class="fw-bold">100,000.00 €</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between mt-3">
                                                <div class="d-flex">
                                                    <h4>Statement of account of open items</h4>
                                                    <div class="btn bg-light ms-2">No .of items: 4</div>
                                                </div>
                                                <div class="form-group position-relative">
                                                    <input type="text" class="form-control border-primary ps-5"
                                                        aria-describedby="emailHelp" placeholder="Search" />
                                                    <i class="fa-solid fa-search text-secondary position-absolute"
                                                        style="top: 50%; transform: translateY(-50%); left: 10px"></i>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="form-group d-flex justify-content-end">
                                                    <input type="text" class="form-control w-auto p-3"
                                                        aria-describedby="emailHelp"
                                                        placeholder="Multi-columns search" />
                                                </div>
                                            </div>
                                            <!--start-->
                                            <div class="row mt-3 p-2 px-md-4 align-items-center text-center">
                                                <div class="col-1" style="z-index: 999;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="exampleCheck1" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Trans.no</p>
                                                    </div>

                                                </div>
                                                <div class="col hide">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Issue date</p>
                                                    </div>

                                                </div>
                                                <div class="col">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Due date</p>
                                                    </div>

                                                </div>
                                                <div class="col-1 hide">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Overdue</p>
                                                    </div>

                                                </div>
                                                <div class="col hide">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Intial amount inc. Tax</p>
                                                    </div>

                                                </div>
                                                <div class="col">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Remaining amount inc. Tax</p>
                                                    </div>

                                                </div>
                                                <div class="col-3 hide">
                                                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                                                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                                        <p class="fw-bold">Status</p>
                                                    </div>

                                                </div>
                                                <div class="col-3 tavle-dropdown-icon"></div>
                                            </div>
                                            <div class="text-center mb-3 table-container-2 p-2 px-md-4  ">
                                                <div class="row align-items-center pt-3"
                                                    style="background-color: #006bff14">
                                                    <div class="col-1" style="z-index: 999;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold"><a href=''
                                                                onclick="showInvoice()"><img src="./img/pdficons.gif"
                                                                    class="mb-1" alt="">
                                                                2401356</a></p>

                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col-1 hide">
                                                        <div class="badge bg-danger mb-2">46d</div>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col-3 hide">
                                                        Envoi de duplicata de facture 2-12-2023
                                                    </div>
                                                    <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                    </div>
                                                    <div class="hidden ms-2 d-none">
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Issue date:</p>
                                                            <p>13-5-2022</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Overdue:</p>
                                                            <div class="badge bg-danger mb-2">46d</div>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Intial amount inc. Tax:</p>
                                                            <p class="fw-bold">11,187.32 €</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Status:</p>
                                                            <p>Envoi de duplicata de facture 2-12-2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-3">
                                                    <div class="col-1" style="z-index: 999;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold"><a href="#"
                                                                onclick="showInvoice()"><img src="./img/pdficons.gif"
                                                                    class="mb-1" alt="">
                                                                2401356</a></p>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col-1 hide">
                                                        <div class="badge bg-danger mb-2">46d</div>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col-3 hide">
                                                        Envoi de duplicata de facture 2-12-2023
                                                    </div>
                                                    <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                    </div>
                                                    <div class="hidden ms-2 d-none">
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Issue date:</p>
                                                            <p>13-5-2022</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Overdue:</p>
                                                            <div class="badge bg-danger mb-2">46d</div>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Intial amount inc. Tax:</p>
                                                            <p class="fw-bold">11,187.32 €</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Status:</p>
                                                            <p>Envoi de duplicata de facture 2-12-2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-3"
                                                    style="background-color: #006bff14">
                                                    <div class="col-1" style="z-index: 999;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold"><a href="#"
                                                                onclick="showInvoice()"><img src="./img/pdficons.gif"
                                                                    class="mb-1" alt="">
                                                                2401356</a></p>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col-1 hide">
                                                        <div class="badge bg-danger mb-2">46d</div>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col-3 hide">
                                                        Envoi de duplicata de facture 2-12-2023
                                                    </div>
                                                    <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                    </div>
                                                    <div class="hidden ms-2 d-none">
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Issue date:</p>
                                                            <p>13-5-2022</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Overdue:</p>
                                                            <div class="badge bg-danger mb-2">46d</div>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Intial amount inc. Tax:</p>
                                                            <p class="fw-bold">11,187.32 €</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Status:</p>
                                                            <p>Envoi de duplicata de facture 2-12-2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-3">

                                                    <div class="col-1" style="z-index: 999;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold"><a href="#"
                                                                onclick="showInvoice()"><img src="./img/pdficons.gif"
                                                                    class="mb-1" alt="">
                                                                2401356</a></p>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col-1 hide">
                                                        <div class="badge bg-danger mb-2">46d</div>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col-3 hide">
                                                        Envoi de duplicata de facture 2-12-2023
                                                    </div>
                                                    <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                    </div>
                                                    <div class="hidden ms-2 d-none">
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Issue date:</p>
                                                            <p>13-5-2022</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Overdue:</p>
                                                            <div class="badge bg-danger mb-2">46d</div>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Intial amount inc. Tax:</p>
                                                            <p class="fw-bold">11,187.32 €</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Status:</p>
                                                            <p>Envoi de duplicata de facture 2-12-2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-3"
                                                    style="background-color: #006bff14">
                                                    <div class="col-1" style="z-index: 999;">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="exampleCheck1" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold"><a href="#"
                                                                onclick="showInvoice()"><img src="./img/pdficons.gif"
                                                                    class="mb-1" alt="">
                                                                2401356</a></p>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">13-5-2022</p>
                                                    </div>
                                                    <div class="col-1 hide">
                                                        <div class="badge bg-danger mb-2">46d</div>
                                                    </div>
                                                    <div class="col hide">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="fw-bold">11,187.32 €</p>
                                                    </div>
                                                    <div class="col-3 hide">
                                                        Envoi de duplicata de facture 2-12-2023
                                                    </div>
                                                    <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                                                        <i class="fa-solid fa-chevron-down"></i>
                                                    </div>
                                                    <div class="hidden ms-2 d-none">
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Issue date:</p>
                                                            <p>13-5-2022</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Overdue:</p>
                                                            <div class="badge bg-danger mb-2">46d</div>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Intial amount inc. Tax:</p>
                                                            <p class="fw-bold">11,187.32 €</p>
                                                        </div>
                                                        <div class="d-flex bg-white">
                                                            <p class="fw-bold">Status:</p>
                                                            <p>Envoi de duplicata de facture 2-12-2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="arrow-bottom-2"></div>

                                            </div>
                                            <div class="d-flex justify-content-center gap-5">
                                                <p class="fw-bold">Total:</p>
                                                <p class="fw-bold">45,342.75 €</p>
                                                <p class="fw-bold">45,342.75 €</p>
                                            </div>
                                        </div>
                                        <div class="row px-4 align-items-center m-0">
                                            <div class="col-lg-4 col-sm-6 col-12 mb-2">
                                                <div class="btn text-light btn-secondary px-2" onclick="showInvioce2()">
                                                    <i class="fa-solid fa-pen-to-square"></i>&ensp;Change status >Add
                                                    comment >Set next action
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-3 col-6 mb-2">
                                                <div class="btn text-light btn-primary px-2" onclick="associateFiles()">
                                                    <i class="fa-solid fa-link"></i>&ensp;Associate File
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-3 col-6 mb-2" onclick="payViaDirectLink()">
                                                <div class="btn text-light btn-primary px-2">
                                                    Pay via direct link
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-3 col-6 mb-2">
                                                <div class="btn text-dark btn-light px-2">
                                                    Clear the transaction
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-3 col-6 mb-2">
                                                <select class="form-select bg-light"
                                                    aria-label="Default select example">
                                                    <option selected disabled>Ignore the transaction :</option>
                                                    <option value="1">Yes</option>
                                                    <option value="1">No</option>
                                                    <option value="1" class="text-primary">
                                                        <a href="#"> Read more</a>
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="text-center mb-2 mt-2">
                                                <div class="this-buttons">
                                                    <div class="">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn text-light"><span><i
                                                                        class="fa-solid fa-download"></i>&ensp;</span>Export
                                                                this data to
                                                                excel</button>
                                                            <button type="button"
                                                                class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span class="visually-hidden">Toggle Dropdown</span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <p>file fromat:</p>
                                                                </li>
                                                                <div class="radios-inp d-flex  justify-content-around">
                                                                    <li class="dropdown-item d-flex"><input
                                                                            type="radio" name="fils"
                                                                            id="csv"><label
                                                                            for="fils">csv</label></li>
                                                                    <li class="dropdown-item d-flex"><input
                                                                            type="radio" name="fils"
                                                                            id="xls"><label
                                                                            for="fils">xls</label>
                                                                    </li>
                                                                </div>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <p>encoding:</p>
                                                                </li>
                                                                <select name=""
                                                                    style="width: 100%; font-size: 12px;">
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
                                                                <li class="mt-3 "><button type="button"
                                                                        class="btn"
                                                                        style="width: 100%;"><span><iclass="fa-solid
                                                                                fa-download"></i>&ensp;</span>download</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--sec-1-->
                                    <div class="sec-1 pb-5 bg-white text-capitalize d-none " id="riskDiv">
                                        <div class="container">
                                            <div class="row">
                                                <div class="end-con d-flex justify-content-between">
                                                    <h4 class="mt-2 mb-2"><span><i
                                                                class="fa-regular fa-hand-point-right"></i></span>
                                                        Actions to
                                                        do: <span>?
                                                            readmore</span> </h4>
                                                    <div class="">
                                                        <select class="form-select m-2 text-capitalize "
                                                            aria-label="Default select example">
                                                            <option selected>New action</option>
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
                                                                <div class="show-items  d-block bg-light"
                                                                    style="font-size: 6px;">
                                                                    <div id="item-contents">
                                                                        <div class="addimg">
                                                                            <img src="" alt=""
                                                                                id="changeimgs">
                                                                        </div>
                                                                        <input id="inpchange" class="mt-3"
                                                                            type="file" />
                                                                        <p class=" mb-2" style="font-size: 14px;">
                                                                            (.pdf or .docx or
                                                                            .xlsx
                                                                            or
                                                                            .txt or .jpg or .png ...)•Max
                                                                            size: 15 MB</p>
                                                                        <textarea
                                                                            style="width:100%; outline: none; padding: 5px; border: 2px solid #efefef; border-radius: 5px; resize: both;"></textarea>
                                                                        <button class=""><i
                                                                                class="fa-solid fa-plus"></i>
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
                                                                <div
                                                                    class="three-cont mt-2 mb-2 d-flex justify-content-between">
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
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Total collectable
                                                                        May 2024</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Remains to collect
                                                                        May 2024</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Collection efficiency
                                                                        May 2024</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Total receivable</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Overdue
                                                                    </p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Current month
                                                                        May 2024</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Month M+1
                                                                        June 2024</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Month M+2
                                                                        July 2024</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Month M+3
                                                                        August 2024</p>
                                                                </div>

                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
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
                                                    <button id="score-button"><span><i
                                                                class="fa-solid fa-plus"></i></span>new
                                                        score</button>
                                                </div>
                                                <div class="show-credit text-capitalize" id="show-score">
                                                    <div class="container">
                                                        <div class="d-flex justify-content-center gap-2">
                                                            <div class="btn btn-success">Notation crédit</div>
                                                            <div class="btn btn-outline-success">Scoring</div>
                                                        </div>
                                                        <div
                                                            class="two-content-show mt-2 mb-2 d-flex justify-content-between">
                                                            <h4>Notation crédit</h4>
                                                            <a href="settings-manage-risk.html"
                                                                class="text-black-50"><span><i
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
                                                                    <span class="conttt"
                                                                        style="display: none;">title="Risk category D
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
                                                                <div class="btn btn-success"><i
                                                                        class="fa-solid fa-floppy-disk"
                                                                        style="  font-size: 15px;"></i> Save these
                                                                    results</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="credit-limit-btn mt-3 ">
                                                    <h5 class="text-capitalize mt-2 mb-2">credit limit</h5>
                                                    <button id="score-button-2"><span><i
                                                                class="fa-solid fa-plus"></i></span>new
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
                                                        <button class="mt-3 mb-3"
                                                            onclick="showFirstCreditLimit()"><span><i
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
                                    <!--sec-1-->

                                    <!--sec-2-->

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
                                                            <span class="text-black-50"><i
                                                                    class="fa-solid fa-flag"></i></span>
                                                            <span class=" text-black-50 "><i
                                                                    class="fa-solid fa-flag"></i></span>
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
                                    <div class="three-button-collections pb-5 bg-white d-none" id="historyDiv">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div
                                                        class="three-button align-items-center gap-2 mt-3 d-flex text-center justify-content-around">
                                                        <div class="btn btn-primary w-100" id="show-table-one"
                                                            onclick="fun1()">
                                                            collection
                                                            history</div>
                                                        <div class="btn btn-outline-primary w-100" id="show-table-one-2"
                                                            onclick="fun2()">
                                                            Actions history (Risk)</div>
                                                        <div class="btn btn-outline-primary w-100" id="show-history"
                                                            onclick="fun3()">
                                                            Items
                                                            history</div>

                                                    </div>
                                                    <div class="search mt-3 mb-3 justify-content-end d-flex">
                                                        <form action="">
                                                            <div class="form-group col-12">

                                                                <input type="text" class="form-control"
                                                                    id="formGroupExampleInput"
                                                                    placeholder="Multi-columns search">
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="collection-table ">
                                                    <div class="container">
                                                        <div class="row mt-3 px-4 align-items-center text-center">
                                                            <div class="col ">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Action date</p>
                                                                </div>
                                                            </div>
                                                            <div class="col ">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">Action type</p>
                                                                </div>
                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">trans no.</p>
                                                                </div>
                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">action amount inc. tax</p>
                                                                </div>
                                                            </div>
                                                            <div class="col hide">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center gap-1 ">
                                                                    <i class="fa-solid fa-sort mb-3"
                                                                        style="cursor:pointer"></i>
                                                                    <p class="fw-bold">action done by</p>
                                                                </div>
                                                            </div>
                                                            <div class="col  tavle-dropdown-icon"></div>
                                                        </div>
                                                        <div>
                                                            <div class="row pt-3 px-4 align-items-center text-center"
                                                                style="background-color:#006BFF14;">
                                                                <div class="col">
                                                                    <p class="fw-bold">2024-05-08 15:55</p>
                                                                </div>
                                                                <div class="col ">
                                                                    <p class="fw-bold"><i class="fa-solid fa-phone"
                                                                            style="font-size: 10px; margin-right: 5px;"></i>phone
                                                                    </p>
                                                                    <p class="fw-bold">Telephone reminder No. 1</p>
                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                                                        310636, ... [8]</p>

                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">24,775.96 €</p>
                                                                </div>
                                                                <div class="col hide">

                                                                    <div class="img-s-2 d-flex">
                                                                        <img src="img/person2.jpg" class="img-fluid"
                                                                            style="width: 30px; height: 30px; border-radius: 50%;"
                                                                            alt=""><span> Paul Mayer
                                                                            (Administrator)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col tavle-dropdown-icon mb-3"
                                                                    onclick="toggleFunction(this)"><i
                                                                        class="fa-solid fa-chevron-down"></i></div>
                                                                <div class="hidden d-none bg-light">
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">trans no:</p>
                                                                        <p class="fw-bold">?, 310510, 310511, 310572,
                                                                            310636, ... [8]</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action amount inc. tax:</p>
                                                                        <p class="fw-bold">24,775.96 €</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action done by:</p>
                                                                        <div
                                                                            class="img-s-2 d-flex justify-content-between">
                                                                            <img src="img/person2.jpg" class="img-fluid"
                                                                                style="width: 30px; height: 30px; border-radius: 50%; margin: -3px auto -2px;"
                                                                                alt=""><span> Paul Mayer
                                                                                (Administrator)</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="row pt-3 px-4 align-items-center text-center">
                                                                <div class="col">
                                                                    <p class="fw-bold">2024-05-08 15:55</p>
                                                                </div>
                                                                <div class="col ">
                                                                    <span class="btn btn btn-primary">@Email</span>
                                                                    <p class="fw-bold">eminder by e-mail No. 1</p>
                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                                                        310636,</p>

                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">24,775.96 €</p>
                                                                </div>
                                                                <div class="col hide">

                                                                    <div class="img-s-2 d-flex">
                                                                        <img src="img/person2.jpg" class="img-fluid"
                                                                            style="width: 30px; height: 30px; border-radius: 50%;"
                                                                            alt=""><span> Paul Mayer
                                                                            (Administrator)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col tavle-dropdown-icon mb-3"
                                                                    onclick="toggleFunction(this)"><i
                                                                        class="fa-solid fa-chevron-down"></i></div>
                                                                <div class="hidden d-none bg-light">
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">trans no:</p>
                                                                        <p class="fw-bold">?, 310510, 310511, 310572,
                                                                            310636,</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action amount inc. tax:</p>
                                                                        <p class="fw-bold">24,775.96 €</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action done by:</p>
                                                                        <div class="img-s-2 d-flex">
                                                                            <img src="img/person2.jpg" class="img-fluid"
                                                                                style="width: 30px; height: 30px; border-radius: 50%; margin: -2px auto 2px; "
                                                                                alt=""><span> Paul Mayer
                                                                                (Administrator)</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="row pt-3 px-4 align-items-center text-center"
                                                                style="background-color:#006BFF14;">
                                                                <div class="col">
                                                                    <p class="fw-bold">2024-05-08 15:55</p>
                                                                </div>
                                                                <div class="col ">
                                                                    <p class="fw-bold"><i class="fa-solid fa-phone"
                                                                            style="font-size: 10px; margin-right: 5px;"></i>phone
                                                                    </p>
                                                                    <p class="fw-bold">Telephone reminder No. 1</p>
                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                                                        310636, ... [8]</p>

                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">24,775.96 €</p>
                                                                </div>
                                                                <div class="col hide">

                                                                    <div class="img-s-2 d-flex">
                                                                        <img src="img/person2.jpg" class="img-fluid"
                                                                            style="width: 30px; height: 30px; border-radius: 50%;"
                                                                            alt=""><span> Paul Mayer
                                                                            (Administrator)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col tavle-dropdown-icon mb-3"
                                                                    onclick="toggleFunction(this)"><i
                                                                        class="fa-solid fa-chevron-down"></i></div>
                                                                <div class="hidden d-none bg-light">
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">trans no:</p>
                                                                        <p class="fw-bold">?, 310510, 310511, 310572,
                                                                            310636, ... [8]</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action amount inc. tax:</p>
                                                                        <p class="fw-bold">24,775.96 €</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action done by:</p>
                                                                        <div
                                                                            class="img-s-2 d-flex justify-content-between">
                                                                            <img src="img/person2.jpg" class="img-fluid"
                                                                                style="width: 30px; height: 30px; border-radius: 50%; margin: -3px auto -2px;"
                                                                                alt=""><span> Paul Mayer
                                                                                (Administrator)</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="row pt-3 px-4 align-items-center text-center">
                                                                <div class="col">
                                                                    <p class="fw-bold">2024-05-08 15:55</p>
                                                                </div>
                                                                <div class="col ">
                                                                    <span class="btn btn btn-primary">@Email</span>
                                                                    <p class="fw-bold">eminder by e-mail No. 1</p>
                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                                                        310636,</p>

                                                                </div>
                                                                <div class="col hide">
                                                                    <p class="fw-bold">24,775.96 €</p>
                                                                </div>
                                                                <div class="col hide">

                                                                    <div class="img-s-2 d-flex">
                                                                        <img src="img/person2.jpg" class="img-fluid"
                                                                            style="width: 30px; height: 30px; border-radius: 50%;"
                                                                            alt=""><span> Paul Mayer
                                                                            (Administrator)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col tavle-dropdown-icon mb-3"
                                                                    onclick="toggleFunction(this)"><i
                                                                        class="fa-solid fa-chevron-down"></i></div>
                                                                <div class="hidden d-none bg-light">
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">trans no:</p>
                                                                        <p class="fw-bold">?, 310510, 310511, 310572,
                                                                            310636,</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action amount inc. tax:</p>
                                                                        <p class="fw-bold">24,775.96 €</p>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <p class="fw-bold">action done by:</p>
                                                                        <div class="img-s-2 d-flex">
                                                                            <img src="img/person2.jpg" class="img-fluid"
                                                                                style="width: 30px; height: 30px; border-radius: 50%; margin: -2px auto 2px; "
                                                                                alt=""><span> Paul Mayer
                                                                                (Administrator)</span>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="page-not-found mt-3 mb-3 d-none" id="page-not-found">
                                                    <h5 class="text-center mt-3 mb-3 p-4">No history found</h5>
                                                </div>

                                                <div class="tale-2 mt-3 border-none d-none" id="history-table">
                                                    <div class="row mt-3 px-4 align-items-center text-center">
                                                        <div class="col ">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Trans No</p>
                                                            </div>
                                                        </div>
                                                        <div class="col ">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Po No.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col ">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Issue date</p>
                                                            </div>
                                                        </div>
                                                        <div class="col hide">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Due data</p>
                                                            </div>
                                                        </div>
                                                        <div class="col hide">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Payment date</p>
                                                            </div>
                                                        </div>
                                                        <div class="col hide">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Overdue</p>
                                                            </div>
                                                        </div>
                                                        <div class="col hide">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Amountexc. Tax</p>
                                                            </div>
                                                        </div>
                                                        <div class="col hide">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center gap-1 ">
                                                                <i class="fa-solid fa-sort mb-3"
                                                                    style="cursor:pointer"></i>
                                                                <p class="fw-bold">Amountexc. Tax</p>
                                                            </div>
                                                        </div>
                                                        <div class="col  tavle-dropdown-icon"></div>
                                                    </div>
                                                    <div class="tables-backg ">
                                                        <div class="row pt-3 px-4 align-items-center text-center"
                                                            style="background: #006BFF14;">
                                                            <div class="col">
                                                                <p class="fw-bold">310712</p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"></p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">
                                                                    2024-05-22
                                                                </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">7 d</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col tavle-dropdown-icon mb-3"
                                                                onclick="toggleFunction(this)"><i
                                                                    class="fa-solid fa-chevron-down"></i></div>


                                                            <div class="hidden d-none bg-light">
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Due data:</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Payment date :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Overdue :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold">5,141.14 € </p>

                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold"> 5,141.14 € </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row pt-3 px-4 align-items-center text-center">
                                                            <div class="col">
                                                                <p class="fw-bold">310712</p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"></p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">
                                                                    2024-05-22
                                                                </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">7 d</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col tavle-dropdown-icon mb-3"
                                                                onclick="toggleFunction(this)"><i
                                                                    class="fa-solid fa-chevron-down"></i></div>
                                                            <div class="hidden d-none bg-light">
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Due data:</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Payment date :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Overdue :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold">5,141.14 € </p>

                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold"> 5,141.14 € </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row pt-3 px-4 align-items-center text-center"
                                                            style="background: #006BFF14;">
                                                            <div class="col">
                                                                <p class="fw-bold">310712</p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"></p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">
                                                                    2024-05-22
                                                                </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">7 d</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col tavle-dropdown-icon mb-3"
                                                                onclick="toggleFunction(this)"><i
                                                                    class="fa-solid fa-chevron-down"></i></div>
                                                            <div class="hidden d-none bg-light">
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Due data:</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Payment date :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Overdue :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold">5,141.14 € </p>

                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold"> 5,141.14 € </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row pt-3 px-4 align-items-center text-center">
                                                            <div class="col">
                                                                <p class="fw-bold">310712</p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"></p>
                                                            </div>
                                                            <div class="col ">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold"> 2024-05-15</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">
                                                                    2024-05-22
                                                                </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">7 d</p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col hide">
                                                                <p class="fw-bold">5,141.14 € </p>
                                                            </div>
                                                            <div class="col tavle-dropdown-icon mb-3"
                                                                onclick="toggleFunction(this)"><i
                                                                    class="fa-solid fa-chevron-down"></i></div>
                                                            <div class="hidden d-none bg-light">
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Due data:</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Payment date :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Overdue :</p>
                                                                    <p class="fw-bold"> 2024-05-15</p>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold">5,141.14 € </p>

                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="fw-bold">Amountexc. Tax :</p>
                                                                    <p class="fw-bold"> 5,141.14 € </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
            {{ $clients->links('pagination::bootstrap-5') }}
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
                                        style="width: 100%;"><span><i
                                                class="fa-solidfa-download"></i>&ensp;</span>download</button>
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
