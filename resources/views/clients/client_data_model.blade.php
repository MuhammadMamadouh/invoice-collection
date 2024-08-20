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

            @include('clients.edit_close_btns')
        </div>
    </div>

    {{-- ------------------- Client's Data ------------------------------------------------ --}}
    @include('clients.client_data')
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
@include('clients.edit_client_data')
{{-- -------------------  End Edit Client Data------------------------------------------------ --}}

{{-- ------------------- Dates Line ------------------------------------------------ --}}
@include('clients.dates_line')
{{-- ------------------- End Dates Line ------------------------------------------------ --}}

{{-- ------------------- Actions Table ------------------------------------------------ --}}
@include('clients.items_actions_table')
{{-- ------------------- End Actions Table ------------------------------------------------ --}}

{{-- ------------------- Items Table------------------------------------------------ --}}
@include('clients.items_table',[$users])
