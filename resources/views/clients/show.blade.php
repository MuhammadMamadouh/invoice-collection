@extends('layouts.dashboard.app')
@section('content')
    {{-- <div id="company-details-{{ $client->id }}"> --}}
    {{-- <div class="company-details" id="company-detail-{{ $client->id }}"> --}}
    @include('clients.client_data_model')
    {{-- ------------------- End Items Table------------------------------------------------ --}}
    {{-- </div> --}}
    <div class="row px-4 align-items-center m-0">
        <div class="col-lg-4 col-sm-6 col-12 mb-2">
            <div class="btn text-light btn-secondary px-2" onclick="showInvioce2()">
                <i
                    class="fa-solid fa-pen-to-square"></i>&ensp;{{ __("Change status >Add comment >Set next action") }}
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
                                    class="fa-solid fa-download"></i>&ensp;</span>{{ __('Export excel') }}</button>
                        <button type="button" class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">{{ __('Toggle Dropdown') }}</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <p>{{ __('file fromat') }}:</p>
                            </li>
                            <div class="radios-inp d-flex  justify-content-around">
                                <li class="dropdown-item d-flex"><input type="radio" name="fils" id="csv"><label
                                        for="fils">{{ __('csv') }}</label></li>
                                <li class="dropdown-item d-flex"><input type="radio" name="fils" id="xls"><label
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
                            <li class="mt-3 "><button type="button" class="btn" style="width: 100%;"><span><i
                                            class="fa-solid a-download"></i>&ensp;</span>{{ __('download') }}</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
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
