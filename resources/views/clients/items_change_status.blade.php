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
    <div class="step-1">
        <form action="{{ route('items_change_status.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="item_id" value="{{ $item->id }}">
            <input type="hidden" name="created_by" value="1">
            <div class="mt-3 px-5 d-flex gap-3">
                <h5 class="text-black-50">{{ __('Step 1/3') }}</h5>
                <h5>{{ __('New status') }} :</h5>
            </div>
            <livewire:ShowItemStatus>
                <div class="px-5">
                    {{-- <div class="d-flex">
                    <p>{{ __('Associate files to items') }}</p>
                    <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1"
                            style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
                </div> --}}
                    {{-- <div class="addFileDiv-2">
                </div>
                <div class="btn text-primary" onclick="addFileFunction2()"><i
                        class="fa-solid fa-link"></i>&ensp;{{ __('Add File') }}
                </div><br> --}}
                </div>
                <div class="position-fixed w-75 d-none associate-files "
                    style="top:10% ;left: 50%;transform: translate(-50%);z-index: 12;">
                    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
                        <span class="btn btn-secondary position-absolute" onclick="hideAssociateFiles()"
                            style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
                        <div class="p-4">
                            <div class=" d-flex text-start">
                                <h4>Associate files to items</h4>
                                <a href="DSOInformation.html"><i
                                        class="fa-solid fa-question bg-primary text-light p-1 ms-1"
                                        style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
                            </div><!--24-->
                            <p class=" mb-2" style="font-size: 14px;">(.pdf or .docx or .xlsx or .txt or .jpg or .png
                                ...)
                                <span style="font-size: 10px;">•Maxsize: 15 MB</span>
                            </p>
                            <div class="addFileDiv">

                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="email"
                                            name="copy_in_the_automatic_email" value="1">
                                        <label class="form-check-label"
                                            for="email">{{ __('Email in copy in the automatic  emails') }}</label>
                                        @error('copy_in_the_automatic_email')
                                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="btn text-primary" onclick="addFileFunction()"><i
                                    class="fa-solid fa-link"></i>&ensp;Add
                                File</div><br>
                            <div class="text-center myBtn d-none">
                                <div class="btn btn-primary"><i class="fa-solid fa-check"></i> Submit</div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <div class="d-flex justify-content-end">
        <div class="btn btn-primary px-5 mx-5" onclick=" showStepTwo()">{{ __('Next') }} <i
                class="fa-solid fa-chevron-right ps-2"></i></div>
    </div>
    <div class="step-2 d-none">
        <div class="mt-3 px-5 d-flex gap-3">
            <h5 class="text-black-50">{{ __('Step 2/3') }}</h5>
            <h5>{{__("Do you want to send an email to that client or to your colleagues?")}}</h5>
        </div>
        <div class="px-5 mb-5">
        <livewire:EmailForm>
        </div>
        <div class="d-flex justify-content-end">
            <div class="btn btn-danger px-5 mx-5" onclick=" showStepOne()"><i
                    class="fa-solid fa-chevron-left pe-2"></i>
                {{ __('Previus') }}</div>
            <div class="btn btn-primary px-5 mx-5" onclick=" showStepThree()">{{ __('Next') }} <i
                    class="fa-solid fa-chevron-right ps-2"></i></div>
        </div>
    </div>
    <div class="step-3 d-none">
        <div class="mt-3 px-5 d-flex gap-3">
            <h5 class="text-black-50">{{ __('Step 3/3') }}</h5>
            <h5>{{ __('Next action') }} :</h5>
        </div>
        <div class="px-5">
            <input type="radio" id="go" checked name="checkbox">
            <label for="go"
                class="mb-3">{{ __('Follow the collection scenario and the actions in progress') }}
                :</label>
            <div class="bg-white position-relative">
                <div class="d-flex small-icons-big-container justify-content-between p-4 px-5 m-0">
                    <div class="text-center my-auto small-icons-container">
                        {{ __('Key accounts scenario') }} (EN) :
                    </div>
                    @foreach ($client->collectionScenarios->scenariosActions as $action)
                        <div class="text-center small-icons-container" style="z-index: 2">
                            <span>{{ $action->number_of_days }}d</span>
                            <div class="btn-warning small-icons text-light px-2 py-1">
                                {{-- {{dd($action)}} --}}
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                    @endforeach
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
                    <div class="btn openModalBtn btn-primary">@ Email</div>
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
            </div><!--13-->

            <div class=" my-2">
                <form class="d-flex">
                    <div class="col-3 ">
                        <label for="inputname222">Action date :</label>

                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputname222">
                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </form>
            </div><!--2-->
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
            </div><!--2-->
        </div>
        <div class="d-flex justify-content-end my-5">
            <div class="btn btn-danger px-5 mx-5" onclick="showStepTwo()"><i
                    class="fa-solid fa-chevron-left pe-2"></i> Previus</div>
            <div class="btn btn-success px-5 mx-5"> <i class="fa-solid fa-check pe-2"></i> Submit</div>
        </div>
    </div>
</div>
<div class="overlay-2 d-none"
    style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 11;">
</div>
