@extends('layouts.dashboard.app')
@section('content')
    <section class="mt-5">
        <div class="container-fluid">
            <div class="row">
                {{-- ------------------------------------------------------------------------------- --}}
                @include('collection.actions_navigation_buttons')
                {{-- ------------------------------------------------------------------------------- --}}
            </div>
            <hr />
            {{-- ------------------------------------------------------------------------------- --}}
            @include('collection.actions_filters')
            {{-- ------------------------------------------------------------------------------- --}}
            {{-- ------------------------------------------------------------------------------- --}}
            @include('collection.actions_charts')
            {{-- ------------------------------------------------------------------------------- --}}
        </div>
    </section>
    <section class="mt-2">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
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
            <div class="row mt-2 px-4 text-center table-alerts-container">
                <div class="col-1">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input mb-3" id="exampleCheck1" />
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                        <p class="fw-bold">Action date</p>
                    </div>

                </div>
                <div class="col-md-2 col-5">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                        <p class="fw-bold">Action type</p>
                    </div>

                </div>
                <div class="col-2 hide">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                        <p class="fw-bold">Trans No.</p>
                    </div>

                </div>
                <div class="col-2 hide">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                        <p class="fw-bold">Action amount</p>
                    </div>

                </div>
                <div class="col-1 hide">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                        <p class="fw-bold">Flag</p>
                    </div>

                </div>
                <div class="col hide">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                        <p class="fw-bold">Company code</p>
                    </div>

                </div>
                <div class="col">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                        <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                        <p class="fw-bold">Business name</p>
                    </div>

                </div>
                <div class="col tavle-dropdown-icon"></div>
            </div>
            <div class="text-center mb-3 table-container p-2 p-md-4">
                @forelse($actionHistories as $key => $actionHistory)
                    <div class="row align-items-center pt-3"
                        style="background-color: {{ $key % 2 == 0 ? '#006bff14' : '#ffffff' }}">
                        <div class="col-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input mb-3" id="exampleCheck1" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mouse-hovers d-flex justify-content-center">
                                <p class="fw-bold">{{ $actionHistory->action->action_date }}</p>
                                <span class="onmouse">?</span>
                                <span class="conttt">due date: sunday, may 2022 <br> / action 4 days after due date
                                    of <br>
                                    oldest
                                    invoice
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 col-5">
                            <button type="button" class="btn openModalBtn btn-info text-white w-100 mb-3">
                                <i class="fa-solid {{ $actionHistory->action->actionTypes->icon }}"></i>
                                {{ $actionHistory->action->actionTypes->en_name }}
                            </button>
                        </div>
                        <div class="col-2 hide">
                            <p><a href="#" class="openModalBtn">
                                    {{ $actionHistory->item->trans_no }}
                                </a>
                            </p>
                        </div>
                        <div class="col-2 hide">
                            <p>{{ $actionHistory->item->remaining_amount_inc_tax }}</p>
                        </div>
                        <div class="col-1 hide">
                            <span class="onmouse-2"><i class="fa-solid fa-flag mb-2 text-secondary"></i></span>
                            <span class="conttt-2">payment profile < payeur correct / average payeur> <br> average days
                                    beyond items +28days (< 10days) </span>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">{{ $actionHistory->item->client->company_code }}</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold"><a href=""
                                    target="_blanck">{{ $actionHistory->item->client->company_name }}</a></p>
                        </div>
                        <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="hidden ms-2 d-none">
                            <div class="d-flex bg-white">
                                <p class="fw-bold">Action:</p>
                                <p class="openModalBtn">Relance par email n°1</p>
                            </div>
                            <div class="d-flex bg-white">
                                <p class="fw-bold">Action amount:</p>
                                <p>{{ $actionHistory->remaining_amount_inc_tax }}</p>
                            </div>
                            <div class="d-flex bg-white">
                                <p class="fw-bold">Flag:</p>
                                <span class="onmouse-2 "><i class="fa-solid fa-flag text-secondary"></i></span>
                                <span class="conttt-2">payment profile < payeur correct / average payeur> <br>
                                        average days
                                        beyond
                                        items
                                        +28days (< 10days) </span>
                            </div>
                            <div class="d-flex bg-white">
                                <p class="fw-bold">Company code:</p>
                                <p class="fw-bold">1230504</p>
                            </div>
                        </div>
                    </div>
                @empty
                    No Actions Yet....
                @endforelse
                <div class="d-flex justify-content-center gap-5">
                    <p class="fw-bold">Total:</p>
                    <p>12,916.00 €</p>
                </div>
                <div class="arrow-bottom"></div>
            </div>
            <div class="text-md-start mx-md-5 text-center px-4 mb-2">
                <div class="thebtn-1 btn btn-secondary px-2 m-1">
                    <i class="fa-solid fa-calendar"></i>&ensp;Update the action date
                </div>
                <div class=" thebtn-2 btn text-light btn-danger px-2 m-1">
                    <i class="fa-solid fa-trash"></i>&ensp;Delete
                </div>
                <div class=" thebtn-3 btn  btn-secondary text-light px-2 m-1">
                    <i class=" fa-solid fa-download"></i>&ensp;Download + Complete the action
                </div>
                <div class="thebtn-3 btn btn-secondary px-2 m-1">
                    <i class="fa-solid fa-download"></i>&ensp;Download all the mails into a single PDF
                </div>
            </div>
            <div class="justify-content-end gap-1 d-flex mb-2">
                <div class="btn btn-outline-secondary">Previus</div>
                <div class="btn btn-secondary">1</div>
                <div class="btn btn-outline-secondary">2</div>
                <div class="btn btn-outline-secondary">3</div>
                <div class="btn btn-outline-secondary">4</div>
                <div class="btn btn-outline-secondary">5</div>
                <div class="btn btn-outline-secondary">6</div>
                <div class="btn btn-outline-secondary">Next</div>
            </div>
            <div class="text-center mb-4">
                <a href="searchForAnItem.html" class="btn text-white"
                    style="border-radius: 20px;background-color: #0d6efd;">Number of open items : 4505</a>
            </div>
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
                                <li class="mt-3 "><button type="button" class="btn" style="width: 100%;">
                                        <span><i class="fa-solid fa-download"></i>&ensp;</span>download</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ------------------------------------------------------------------------------- --}}
        <livewire:ActionDetails>
            {{-- ------------------------------------------------------------------------------- --}}
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('js/collection.js') }}"></script>
    <script src="{{ asset('js/risk.js') }}"></script>
    <script src="{{ asset('js/mange.js') }}"></script>
    <script src="{{ asset('js/email.js') }}"></script>
@endpush
