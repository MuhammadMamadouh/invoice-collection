<div class="row mt-3 p-2 px-md-4 align-items-center text-center">
    <div class="col-1" style="z-index: 999;">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        </div>
    </div>
    <div class="col">
        <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">{{ __('Trans.no') }}</p>
        </div>

    </div>
    <div class="col hide">
        <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">{{ __('Issue date') }}</p>
        </div>

    </div>
    <div class="col">
        <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">{{ __('Due date') }}</p>
        </div>

    </div>
    <div class="col-1 hide">
        <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">{{ __('Overdue') }}</p>
        </div>

    </div>
    <div class="col hide">
        <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">{{ __('Intial amount inc. Tax') }}</p>
        </div>

    </div>
    <div class="col">
        <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">{{ __('Remaining amount inc. Tax') }}</p>
        </div>

    </div>
    <div class="col-3 hide">
        <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">{{ __('Status') }}</p>
        </div>
    </div>
    <div class="col-3 tavle-dropdown-icon"></div>
</div>
@forelse ($client->items as $item)
{{-- -------------------------------------------invoice data-------------------------------------- --}}
@include('clients.items_data', [$users])
{{-- -------------------------------------------end invoice data-------------------------------------- --}}
    <div class="text-center mb-3 table-container-2 p-2 px-md-4  ">
        <div class="row align-items-center pt-3"
            style="{{ $item->overdue >= 0 ? 'background-color: #e6d3d3' : 'background-color: #d9edf7' }}">
            <div class="col-1" style="z-index: 999;">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                </div>
            </div>
            <div class="col">
                <p class="fw-bold"><a href='#' onclick="showInvoice({{ $item->id }})"
                        style="text-decoration: none !important;"><img src="./img/pdficons.gif" class="mb-1"
                            alt="">
                        {{ $item->trans_no ?? '-' }}</a>
                </p>
            </div>
            <div class="col hide">
                <p class="fw-bold">
                    {{ $item->issue_date ?? '-' }}</p>
            </div>
            <div class="col">
                <p class="fw-bold">
                    {{ $item->due_date ?? '-' }}</p>
            </div>
            <div class="col-1 hide">
                <div class="badge mb-2"
                    style="{{ $item->overdue >= 0 ? 'background-color: #d07471;' : 'background-color: gray' }}">
                    {{ $item->overdue ?? 0 }}d
                </div>
            </div>
            <div class="col hide">
                <p class="fw-bold">
                    <a href='#' onclick="showInvoice({{ $item->id }})"
                        style="text-decoration: none !important;">
                        {{ $item->total_InitialAmount ?? '0' }}€</a>
                </p>
            </div>
            <div class="col">
                <p class="fw-bold">
                    <a href='#'
                        onclick="showInvoice({{ $item->id }})"style="text-decoration: none !important;">{{ $item->total_RemainingAmount ?? '0' }}
                        €</a>
                </p>
            </div>
            <div class="col-3 hide">
                <a href='#'
                    onclick="showInvoice({{ $item->id }})"style="text-decoration: none !important;">{{ $client->items->status ?? 'action1' }},
                    {{ $client->items->follow_up_days ?? 1 }}</a>
            </div>
            <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
        </div>
    </div>
@empty
    {{ __('No Data yet') }}
@endforelse
<div class="d-flex justify-content-center gap-5">
    <p class="fw-bold">{{ __('Total') }}:</p>
    {{-- <p class="fw-bold">{{ $total_InitialAmount = null ?? 55955 }} €</p>
    <p class="fw-bold">{{ $total_RemainingAmount = null ?? 5555 }} €</p> --}}
</div>
