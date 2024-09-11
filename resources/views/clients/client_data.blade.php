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
            @foreach ($client->clientGroup as $group)
                <p class=""><a href="">{{ $group->en_name }}</a></p>
            @endforeach
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
    <livewire:ShowContacts :client="$client">
</div>
