<div class="d-flex justify-content-between flex-wrap p-4 m-0">
    <h3>{{ __('Action to do') }}:</h3>
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
                <p class="fw-bold">{{ __('Action date') }}</p>
            </div>
        </div>
        <div class="col fw-bold">
            <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">{{ __('Action type') }}</p>
            </div>
        </div>
        <div class="col fw-bold">
            <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">{{ __('Action') }}</p>
            </div>
        </div>
        <div class="col fw-bold">
            <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">{{ __('Action amount inc. Tax') }}</p>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mt-2 text-center p-2 align-items-center"style="background-color: #006bff14;">
        @php($firstDueItem = $client->firstDueItem)
        <div class="col fw-bold">{{ $firstDueItem->due_date ?? '-' }}</div>
        <div class="col fw-bold">
            <div class="btn openModalBtn btn-primary">
                {{ $firstDueItem->toTakeAction->action_type ?? 'email' }}</div>
        </div>
        <div class="col fw-bold">{{-- optional($firstDueItem)->toTakeAction()->action_name ?? 'contact by email' }}
        {{ optional($firstDueItem)->toTakeAction()->number_of_days ?? '2' --}}</div>
        <div class="col fw-bold">0000</div>
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
            {{ __(' Total Receivable') }}:<span class="fw-bold">100,000.00
                €</span>
        </div>
        <div class="col-sm-4">
            {{ __('Overdue') }}:<span class="fw-bold">100,000.00 €</span>
        </div>
        <div class="col-sm-4">
            {{ __('Current Receivable') }}:<span class="fw-bold">100,000.00
                €</span>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-between mt-3">
        <div class="d-flex">
            <h4>{{ __('Statement of account of open items') }}</h4>
            <div class="btn bg-light ms-2">{{ __('No .of items') }}:
                2000</div>
        </div>
        <div class="form-group position-relative">
            <input type="text" class="form-control border-primary ps-5" aria-describedby="emailHelp"
                placeholder="Search" />
            <i class="fa-solid fa-search text-secondary position-absolute"
                style="top: 50%; transform: translateY(-50%); left: 10px"></i>
        </div>
    </div>
    <div class="row mt-3">
        <div class="form-group d-flex justify-content-end">
            <input type="text" class="form-control w-auto p-3" aria-describedby="emailHelp"
                placeholder="Multi-columns search" />
        </div>
    </div>
