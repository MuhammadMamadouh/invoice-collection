<div class="invoice d-none" id="show-invoice-{{ $item->id }}">
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
                        <i class="fa-solid fa-pen text-primary p-2 bg-light" onclick="EditInvoice({{ $item->id }})"
                            style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
                        <a href="invoice.html" target="_blank"><i class="fa-solid fa-maximize text-primary p-2 bg-light"
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
                {{ __("Add
                                comment") }} > {{ __('Set next action') }}
            </div>
        </div>
        <div class="row p-4 m-0">
            <div class="col-1"></div>
            <div class="col-lg-4 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-primary statusButton" onclick="statusFun({{ $item->id }})">
                    <i class="fa-solid fa-check"></i> {{ __('Status history and Comments') }}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-primary actionsButton" onclick="actionsFun({{ $item->id }})">
                    <i class="fa-solid fa-list"></i> {{ __('Actions history') }}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-primary associatedButton"
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
    <!--sec-1-->

    @include('clients.items_action_history')


    @include('clients.items_associate_files')



    <div class="invoice-2 bg-white px-3 d-none">
        <div class=" py-2">
            <div class="d-flex justify-content-between">
                <div class="text-start">
                </div>
                <div class="d-flex justify-content-end gap-3 mt-2">
                    <div class="icon-holab  ">
                        <a href="invoice-2.html" target="_blank"><svg
                                class="svg-inline--fa fa-maximize text-secondary p-2 bg-light"
                                style="  font-size: 15px; cursor: pointer; border-radius: 5px;" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="maximize" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M447.1 319.1v135.1c0 13.26-10.75 23.1-23.1 23.1h-135.1c-12.94 0-24.61-7.781-29.56-19.75c-4.906-11.1-2.203-25.72 6.937-34.87l30.06-30.06L224 323.9l-71.43 71.44l30.06 30.06c9.156 9.156 11.91 22.91 6.937 34.87C184.6 472.2 172.9 479.1 160 479.1H24c-13.25 0-23.1-10.74-23.1-23.1v-135.1c0-12.94 7.781-24.61 19.75-29.56C23.72 288.8 27.88 288 32 288c8.312 0 16.5 3.242 22.63 9.367l30.06 30.06l71.44-71.44L84.69 184.6L54.63 214.6c-9.156 9.156-22.91 11.91-34.87 6.937C7.798 216.6 .0013 204.9 .0013 191.1v-135.1c0-13.26 10.75-23.1 23.1-23.1h135.1c12.94 0 24.61 7.781 29.56 19.75C191.2 55.72 191.1 59.87 191.1 63.1c0 8.312-3.237 16.5-9.362 22.63L152.6 116.7l71.44 71.44l71.43-71.44l-30.06-30.06c-9.156-9.156-11.91-22.91-6.937-34.87c4.937-11.95 16.62-19.75 29.56-19.75h135.1c13.26 0 23.1 10.75 23.1 23.1v135.1c0 12.94-7.781 24.61-19.75 29.56c-11.1 4.906-25.72 2.203-34.87-6.937l-30.06-30.06l-71.43 71.43l71.44 71.44l30.06-30.06c9.156-9.156 22.91-11.91 34.87-6.937C440.2 295.4 447.1 307.1 447.1 319.1z">
                                </path>
                            </svg>
                            <!-- <i class="fa-solid fa-maximize text-secondary p-2 bg-light" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i> Font Awesome fontawesome.com --></a>
                        <svg class="svg-inline--fa fa-xmark text-light p-2 bg-danger" onclick="closeInvoice2()"
                            style="  font-size: 15px; cursor: pointer; border-radius: 5px;" aria-hidden="true"
                            focusable="false" data-prefix="fas" data-icon="xmark" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z">
                            </path>
                        </svg>
                        <!-- <i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeInvoice2()" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i> Font Awesome fontawesome.com -->
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
                    <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com -->
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
                    <a href="DSOInformation.html"><svg
                            class="svg-inline--fa fa-question bg-secondary text-light p-1 ms-1"
                            style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"
                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M204.3 32.01H96c-52.94 0-96 43.06-96 96c0 17.67 14.31 31.1 32 31.1s32-14.32 32-31.1c0-17.64 14.34-32 32-32h108.3C232.8 96.01 256 119.2 256 147.8c0 19.72-10.97 37.47-30.5 47.33L127.8 252.4C117.1 258.2 112 268.7 112 280v40c0 17.67 14.31 31.99 32 31.99s32-14.32 32-31.99V298.3L256 251.3c39.47-19.75 64-59.42 64-103.5C320 83.95 268.1 32.01 204.3 32.01zM144 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S166.1 400 144 400z">
                            </path>
                        </svg>
                        <!-- <i class="fa-solid fa-question bg-secondary text-light p-1 ms-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i> Font Awesome fontawesome.com --></a>
                </div>
                <div class="addFileDiv-2">

                </div>
                <div class="btn text-secondary" onclick="addFileFunction2()"><svg class="svg-inline--fa fa-link"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-link"></i> Font Awesome fontawesome.com --> Add File</div><br>
            </div>
            <div class="d-flex justify-content-end">
                <div class="btn btn-secondary px-5 mx-5" onclick=" showStepTwo()">Next <svg
                        class="svg-inline--fa fa-chevron-right ps-2" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="chevron-right" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-chevron-right ps-2"></i> Font Awesome fontawesome.com -->
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
                <div class="btn btn-danger px-5 mx-5" onclick=" showStepOne()"><svg
                        class="svg-inline--fa fa-chevron-left pe-2" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-chevron-left pe-2"></i> Font Awesome fontawesome.com --> Previus
                </div>
                <div class="btn btn-secondary px-5 mx-5" onclick=" showStepThree()">Next <svg
                        class="svg-inline--fa fa-chevron-right ps-2" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="chevron-right" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-chevron-right ps-2"></i> Font Awesome fontawesome.com -->
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
                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="phone" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-phone"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>+5d</span>
                            <div class="btn-success small-icons text-light px-2 py-1">@</div>
                        </div>
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>+12d</span>
                            <div class="btn-success small-icons text-light px-2 py-1">
                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="phone" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-phone"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>+20d</span>
                            <div class="btn-secondary small-icons text-light px-2 py-1">@</div>
                        </div>
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>+28d</span>
                            <div class="btn-light small-icons text-dark px-2 py-1">
                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="phone" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-phone"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>+38d</span>
                            <div class="btn-light small-icons text-dark px-2 py-1">@</div>
                        </div>
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>+45d</span>
                            <div class="btn-light small-icons text-dark px-2 py-1">
                                <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="phone" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-phone"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>+60d</span>
                            <div class="btn-light small-icons text-dark px-2 py-1">
                                <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="envelope" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-envelope"></i> Font Awesome fontawesome.com -->
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
                            <span class="input-group-text"><svg class="svg-inline--fa fa-calendar-days"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-days"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-calendar-days"></i> Font Awesome fontawesome.com --></span>
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
                <div class="btn btn-danger px-5 mx-5" onclick="showStepTwo()"><svg
                        class="svg-inline--fa fa-chevron-left pe-2" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-chevron-left pe-2"></i> Font Awesome fontawesome.com --> Previus
                </div>
                <div class="btn btn-success px-5 mx-5"> <svg class="svg-inline--fa fa-check pe-2" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="check" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-check pe-2"></i> Font Awesome fontawesome.com --> Submit</div>
            </div>
        </div>
    </div>


</div>
