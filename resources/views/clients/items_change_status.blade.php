<div class="invoice-2 d-none bg-white px-3" id='invoice-2-{{ $item->id }}'>
    <div class=" py-2">
        <div class="d-flex justify-content-between">
            <div class="text-start">
            </div>
            <div class="d-flex justify-content-end gap-3 mt-2">
                <div class="icon-holab  ">
                    <a href="invoice-2.html" target="_blank"><i
                            class="fa-solid fa-maximize text-primary p-2 bg-light"style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i></a>
                    <i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeInvoice2({{ $item->id }})"
                        style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
                </div>
            </div>
        </div>
        <div class="row p-2 align-items-center text-center">
            <div class="col">
                <p class="fw-bold">{{ __('Trans.no') }}</p>
            </div>
            <div class="col hide">
                <p class="fw-bold">{{ __('Issue date') }}</p>
            </div>
            <div class="col">
                <p class="fw-bold">{{ __('Due date') }}</p>
            </div>
            <div class="col-1 hide">
                <p class="fw-bold">{{ __('Overdue') }}</p>
            </div>
            <div class="col hide">
                <p class="fw-bold">{{ __('Intial amount inc. Tax') }}</p>
            </div>
            <div class="col">
                <p class="fw-bold">{{ __('Remaining amount inc. Tax') }}</p>
            </div>
            <div class="col-3 hide">
                <p class="fw-bold">{{ __('Status') }}</p>
            </div>
            <div class="col-3 tavle-dropdown-icon"></div>
        </div>
        <div class="row align-items-center text-center p-2 pt-3"
            style="{{ $item->overdue >= 0 ? 'background-color: #e6d3d3' : 'background-color: #d9edf7' }}">
            <div class="col">
                <p class="fw-bold">{{ $item->trans_no ?? '-' }}</p>
            </div>
            <div class="col hide">
                <p class="fw-bold">{{ $item->issue_date ?? '-' }}</p>
            </div>
            <div class="col">
                <p class="fw-bold">{{ $item->due_date ?? '-' }}</p>
            </div>
            <div class="col-1 hide">
                <div class="badge mb-2"
                    style="{{ $item->overdue >= 0 ? 'background-color: #d07471;' : 'background-color: gray' }}">
                    {{ $item->overdue ?? 0 }}d
                </div>
            </div>
            <div class="col hide">
                <p class="fw-bold">{{ $item->total_InitialAmount ?? '0' }}€</p>
            </div>
            <div class="col">
                <p class="fw-bold">{{ $item->total_RemainingAmount ?? '0' }}€</p>
            </div>
            <div class="col-3 hide">
                {{ $client->items->status ?? 'action1' }}
            </div>
            <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                <i class="fa-solid fa-chevron-down"></i>
            </div>
            {{-- <div class="hidden ms-2 d-none">
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
            </div> --}}
        </div>
    </div>
    <livewire:item-change-status-steps :item="$item" :client="$client" />
</div>
<div class="overlay-2 d-none"
    style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 11;">
</div>
