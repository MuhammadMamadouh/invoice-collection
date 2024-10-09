<div class="invoice d-none" id="show-invoice-{{ $item->id }}" style="z-index: 11;">
    <div class="bg-light invoice-first-{{ $item->id }}">
        <div class="row text-center m-0 p-1 w-100" style="background-color: #006bff">
            <div class="d-flex justify-content-between ">
                <div class="text-start">
                    <h2 class="text-light">{{ __('Invoice') }} <span
                            class="fw-bold ps-2">{{ $item->trans_no ?? '-' }}</span></h2>
                    <p><i class="fa-solid fa-building text-light"></i><a href="#"
                            class="text-light ps-2">{{ $client->address }}</a></p>
                </div>
                <div class="d-flex justify-content-end gap-3 mt-2">
                    <div class="icon-holab  ">
                        <i class="fa-solid fa-pen text-secondary p-2 bg-light" onclick="EditInvoice({{ $item->id }})"
                            style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
                        <a href="#" target="_blank"><i class="fa-solid fa-maximize text-secondary p-2 bg-light"
                                style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i></a>
                        <i class="fa-solid fa-close text-light p-2 bg-danger"
                            onclick="closeInvoice({{ $item->id }})"
                            style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
                    </div>
                </div>
            </div>
        </div>
        @include('clients.items_change_status', [$item->id])
        <div class="p-3 text-center"
            style="{{ $item->overdue >= 0 ? 'background-color: #e6d3d3' : 'background-color: #0dcaf0' }}">
            {{ $item->order_date >= 0 ? __('Overdue') : __('Not due') }}</div>
        <div class="row m-0 p-3">
            <div class="col-lg-5 col-sm-6 text-start">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('PO No.') }}</p>
                    <p class="">{{ $item->po_no ?? '0' }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('File No') }}. :</p>
                    <p class="">{{ $item->file_no ?? '0' }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('ERP item type') }} :</p>
                    <p class="">{{ $item->erp_item_type }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Business case') }} :</p>
                    <p class="">{{ $item->business_case }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Sales manager') }} :</p>
                    <p class="">{{ $item->sales_manager }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Sales administrative') }} :</p>
                    <p class="">{{ $item->sales_administrative }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Custom field') }} #1 :</p>
                    <p class="">{{ $item->customer_custom_field_1 }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Custom field') }} #2 :</p>
                    <p class="">{{ $item->customer_custom_field_2 }}</p>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-lg-5 col-sm-6 text-start">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Order date') }}:</p>
                    <p class="">{{ $item->order_date }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('issue date') }} :</p>
                    <p class="">{{ $item->issue_date }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Due date') }} :</p>
                    <p class="">{{ $item->due_date }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Overdue') }} :</p>
                    <p class="">{{ $item->overdue ?? 0 }} {{ __('days') }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Remaining amount') }} :</p>
                    <p class="">{{ $item->remaining_amount_inc_tax }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{ __('Initial amount') }} :</p>
                    <p class="">{{ $item->initial_amount_inc_tax }} € ({{ $item->initial_amount_exc_tax }} €
                        exc. Tax)</p>
                </div>
            </div>
            <div class="btn text-light btn-secondary px-2 w-auto m-auto" onclick="showInvioce2({{ $item->id }})">
                <i class="fa-solid fa-pen-to-square"></i>&ensp;{{ __('Change status') }} >
                {{ __("Add comment") }} > {{ __('Set next action') }}
            </div>
        </div>
        <div class="row p-4 m-0">
            <div class="col-1"></div>
            <div class="col-lg-4 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-secondary  statusButton" onclick="statusFun({{ $item->id }})">
                    <i class="fa-solid fa-check"></i> {{ __('Status history and Comments') }}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-secondary  actionsButton" onclick="actionsFun({{ $item->id }})">
                    <i class="fa-solid fa-list"></i> {{ __('Actions history') }}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-secondary  associatedButton"
                    onclick="associatedFun({{ $item->id }})">
                    <i class="fa-solid fa-link"></i> {{ __('Associated files') }}
                            <span class="badge bg-danger ms-1"style="border-radius: 50%;">{{--$item->itemsFileCount--}}</span>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    @include('clients.edit_items_data')

    @include('clients.items_status_and_comments', [$users])

    @include('clients.items_action_history')

    @include('clients.items_associate_files')

    <div class="invoice-2 bg-white px-3 d-none">
        <div class=" py-2">
            <div class="d-flex justify-content-between">
                <div class="text-start">
                </div>
                <div class="d-flex justify-content-end gap-3 mt-2">
                    <div class="icon-holab">
                        <a href="invoice-2.html" target="_blank"><i class="fa-solid fa-maximize text-secondary p-2 bg-light" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i> </a>
                        <i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeInvoice2()" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i> 
                    </div>
                </div>
            </div>
            <div class="row p-2 align-items-center text-center">
                <div class="col">
                    <p class="fw-bold">Trans.no</p>
                </div>
                <div class="col hide">
                    <p class="fw-bold">Issue date</p>
                </div>
                <div class="col">
                    <p class="fw-bold">Due date</p>
                </div>
                <div class="col-1 hide">
                    <p class="fw-bold">Overdue</p>
                </div>
                <div class="col hide">
                    <p class="fw-bold">Intial amount inc. Tax</p>
                </div>
                <div class="col">
                    <p class="fw-bold">Remaining amount inc. Tax</p>
                </div>
                <div class="col-3 hide">
                    <p class="fw-bold">Status</p>
                </div>
                <div class="col-3 tavle-dropdown-icon"></div>
            </div>
            <div class="row align-items-center text-center p-2 pt-3" style="background-color: #006bff14">
                <div class="col">
                    <p class="fw-bold">2401356</p>
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
        </div>
        <div class="step-1">
            <div class="mt-3 px-5 d-flex gap-3">
                <h5 class="text-black-50">Step 1/3</h5>
                <h5>New status :</h5>
            </div>
            <div class="px-5 mb-5">
                <select class="form-select" id="inputname205" aria-label="Default select example">
                    <option value="1" selected=""></option>
                    <option value="1">Dispute</option>
                    <option value="1">Dispute Resolved</option>
                    <option value="1">Litigation</option>
                    <option value="1">On Going</option>
                    <option value="1">Promise To Pay</option>
                </select>
            </div>
            <div class="px-5">
                <div class="d-flex">
                    <p>Associate files to items</p>
                    <a href="DSOInformation.html"><i class="fa-solid fa-question bg-secondary text-light p-1 ms-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i> </a>
                </div>
                <div class="addFileDiv-2">
                </div>
                <div class="btn text-secondary" onclick="addFileFunction2()"><i class="fa-solid fa-link"></i>  Add File</div><br>
            </div>
            <div class="d-flex justify-content-end">
                <div class="btn btn-secondary px-5 mx-5" onclick=" showStepTwo()">Next <i class="fa-solid fa-chevron-right ps-2"></i> 
                </div>
            </div>
        </div>
        <div class="step-2 d-none">
            <div class="mt-3 px-5 d-flex gap-3">
                <h5 class="text-black-50">Step 2/3</h5>
                <h5>Do you want to send an email to that client or to your colleagues?</h5>
            </div>
            <div class="px-5 mb-5">
                <select class="form-select" id="inputname205" aria-label="Default select example">
                    <option value="1" selected="">No</option>
                    <option value="1">Yes, simple e-mail</option>
                    <option value="1">Yes, internal interactive e-mail</option>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <div class="btn btn-danger px-5 mx-5" onclick=" showStepOne()"><i class="fa-solid fa-chevron-left pe-2"></i>  Previus
                </div>
                <div class="btn btn-secondary px-5 mx-5" onclick=" showStepThree()">Next  <i class="fa-solid fa-chevron-right ps-2"></i> 
                </div>
            </div>
        </div>
        <div class="step-3 d-none">
            <div class="mt-3 px-5 d-flex gap-3">
                <h5 class="text-black-50">Step 3/3</h5>
                <h5>Next action :</h5>
            </div>
            <div class="px-5">
                <input type="radio" id="go" checked="" name="checkbox">
                <label for="go" class="mb-3">Follow the collection scenario and the actions in progress
                    :</label>
                <div class="bg-white position-relative">
                    <div class="d-flex small-icons-big-container justify-content-between p-4 px-5 m-0">
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
                <div class="row align-items-center text-center">
                    <div class="col fw-bold">Action date</div>
                    <div class="col fw-bold">Action type</div>
                    <div class="col fw-bold">Action</div>
                    <div class="col fw-bold">Action amount inc. Tax</div>
                </div>
                <div class="row mt-2 text-center">
                    <div class="col fw-bold">13 - 5 - 2022</div>
                    <div class="col fw-bold">
                        <div class="btn openModalBtn btn-secondary">@ Email</div>
                    </div>
                    <div class="col fw-bold">Reminder by email No .2</div>
                    <div class="col fw-bold">100,000.00 €</div>
                </div>
            </div>
            <div class="px-5 mt-3">
                <input type="radio" id="Create" name="Create">
                <label for="Create" class="mb-3">Create a specific action for selected items</label>
                <div class=" my-2">
                    <form class="d-flex">
                        <div class="col-3 ">
                            <label for="inputname13"> Action name :</label>
                        </div>
                        <div class="col-9 ">
                            <input type="text" class="form-control" placeholder="Name" id="inputname13">
                        </div>
                    </form>
                </div>
                <!--13-->
                <div class=" my-2">
                    <form class="d-flex">
                        <div class="col-3 ">
                            <label for="inputname222">Action date :</label>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputname222">
                            <span class="input-group-text"> <i class="fa-solid fa-calendar-days"></i> </span>
                        </div>
                    </form>
                </div>
                <!--2-->
                <div class=" my-2">
                    <form class="d-flex">
                        <div class="col-3 ">
                            <label for="inputname222">Action Type :</label>
                        </div>
                        <div class="input-group">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">Litigation</option>
                                <option value="2">Dunning letter</option>
                                <option value="3">E-mail</option>
                                <option value="3">SMS</option>
                                <option value="3">Phone</option>
                            </select>
                        </div>
                    </form>
                </div>
                <!--2-->
            </div>
            <div class="d-flex justify-content-end my-5">
                <div class="btn btn-danger px-5 mx-5" onclick="showStepTwo()"> <i class="fa-solid fa-chevron-left pe-2"></i>  Previus
                </div>
                <div class="btn btn-success px-5 mx-5"> <i class="fa-solid fa-check pe-2"></i>  Submit</div>
            </div>
        </div>
    </div>
</div>
