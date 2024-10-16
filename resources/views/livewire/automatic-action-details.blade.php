<div>
    @if ($isVisible)
        <div class="position-fixed add-action-div pop-up w-50 pt-4 pe-4"
            style="position: fixed; top: 0; left: 50%; transform: translateX(-50%); z-index: 99999; width: 100%; height: 100%; overflow: auto;">
            <form wire:submit.prevent="submit">
                <input type="hidden" wire:model="collection_scenario_id" class="form-control">
                <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
                    <button type="button" class="btn btn-secondary position-absolute" wire:click="$dispatch('closeForm')"
                        style="border-radius:50%;top: -20px;right: -20px;">
                        X
                    </button>
                    <div class="new-holab-1" id="hide-hoalp-1">
                        <div class="row mt-5">
                            <div class="col-md-2">
                                <h4>From :</h4>
                            </div><!--l-1-->
                            <div class="col-md-10">
                                <a href="#" style="text-decoration: none; font-weight: bold;"
                                    class="text-primary">
                                    created_by name < mohamed@gmail.com>
                                </a>
                            </div><!--r-1-->
                            <!-- Recipients Section -->
                            <div class="row">
                                <!-- First column for type_to -->
                                <div class="col-md-2 mt-2">
                                    <h4>To :</h4>
                                </div><!--l-2-->
                                <!-- Second column for resolver -->
                                <div class="col-md-10 mt-2">
                                    <p>{{$colletorFirstName}} {{$colletorLastName}} {{$colletorEmail}} (Role: {{$colletorRole}})</p>
                                </div><!--r-2-->
                            </div><!--end-row-->
                            <div class="col-md-2 mt-2">
                                <h4 for="">Subject :</h4>
                            </div><!--l-3-->
                            <div class="col-md-10 mt-2">
                                <input type="text" class="form-control" wire:model="subject" id="">
                            </div><!--r-3-->
                            <div class="col-md-2 mt-2">
                                <h4 class="mb-5">Message :</h4>
                                <p style="color: rgb(172, 169, 169); text-align: center;"><i
                                        class="fa-solid fa-hashtag hash mb-5"></i><br>
                                    Lorem ipsum dolor sit amet.</p>
                            </div><!--l-4-->
                            <div class="col-md-10 mt-2">
                                <div class="editor-container mb-1">
                                    <textarea id="editor" class="form-control" wire:model.lazy="editorContent"></textarea>
                                </div>
                            </div><!--r-4-->
                            <div class="col-md-4 mt-2">
                            </div><!--l-5-->
                            <div class="row mt-3 p-2 px-md-4 align-items-center text-center">
                                <div class="col-1" style="z-index:10 !important;">
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

                            <div class="text-center mb-3 table-container-2 p-2 px-md-4  ">
                                <div class="row align-items-center pt-3"
                                    style="{{ 0 ? 'background-color: #e6d3d3' : 'background-color: #d9edf7' }}">
                                    <div class="col-1" style="z-index:10 !important;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="fw-bold"><a href='#'
                                                style="text-decoration: none !important;"><img src="./img/pdficons.gif"
                                                    class="mb-1" alt="">
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col hide">
                                        <p class="fw-bold">
                                            
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="fw-bold">

                                        </p>
                                    </div>
                                    <div class="col-1 hide">
                                        <div class="badge mb-2"
                                            style="{{ 0 ? 'background-color: #d07471;' : 'background-color: gray' }}">

                                        </div>
                                    </div>
                                    <div class="col hide">
                                        <p class="fw-bold">
                                            <a href='#' style="text-decoration: none !important;">
                                                0€</a>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p class="fw-bold">
                                            <a href='#' style="text-decoration: none !important;">
                                                €</a>
                                        </p>
                                    </div>
                                    <div class="col-3 hide">
                                        <a href='#' style="text-decoration: none !important;">
                                        </a>
                                    </div>
                                    <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
 
                            <div class="tw-btn-holab d-flex" style="justify-content: center;">
                                <div class="col-md-8 mt-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="button" class="btn btn-secondary w-100 mt-3"
                                                id="hollabTwoShow" onclick="showHollabTwo()"><i
                                                    class="fa-solid fa-eye"></i>
                                                {{ __('Email preview') }}</button>
                                        </div>
                                        <div class="col-lg-6" style="padding-right: 0 !important;">
                                            <button type="submit" class="btn btn-success w-100 mt-3">
                                                <i class="fa-solid fa-check"></i> {{ __('Send the email') }} <i
                                                    class="fa-solid fa-plus"></i> {{ __('complete the action') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--r-5-->
                        </div>
                    </div>
                    {{-- ---------------------------------------Send SMS ---------------------------- --}}
                    {{-- <div class="new-holab-1" id="hide-hoalp-1">
                        <div class="row mt-5">
                            <div class="col-md-2 mt-2">
                                <h4 for="">Subject :</h4>
                            </div><!--l-3-->
                            <div class="col-md-10 mt-2">
                                <input type="text" class="form-control" wire:model="subject" id="">
                            </div><!--r-3-->
                            <div class="col-md-2 mt-2">
                                <h4 class="mb-5">Message :</h4>
                                <p style="color: rgb(172, 169, 169); text-align: center;"><i
                                        class="fa-solid fa-hashtag hash mb-5"></i><br>
                                    Lorem ipsum dolor sit amet.</p>
                            </div><!--l-4-->
                            <div class="col-md-10 mt-2">
                                <div class="editor-container mb-1">
                                    <textarea id="editor" class="form-control" wire:model.lazy="editorContent"></textarea>
                                </div>
                                <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                                    <p> <input type="checkbox" wire:model.live='automatic_action'
                                            class="form-check-input mx-2" id="exampleChe">
                                        Automatic action
                                    </p>
                                    @if ($automatic_action)
                                        <p> <input type="checkbox" wire:model.live='automatic_action_to_be_confirmed'
                                                class="form-check-input mx-2" id="exampleChe">
                                            Automatic action to be confirmed
                                        </p>
                                    @endif
                                </div>
                            </div><!--r-4-->
                            <div class="col-md-4 mt-2">
                            </div><!--l-5-->
                            <div class="tw-btn-holab d-flex justify-content-end">
                                <div class="col-md-8 mt-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="button" class="btn btn-secondary w-100 mt-3"
                                                id="hollabTwoShow" onclick="showHollabTwo()"><i
                                                    class="fa-solid fa-eye"></i>
                                                {{ __('SMS preview') }}</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-success w-100 mt-3">
                                                <i class="fa-solid fa-check"></i> {{ __('Send the email') }} <i
                                                    class="fa-solid fa-plus"></i> {{ __('complete the action') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--r-5-->
                        </div>
                    </div> --}}
                </div>
            </form>
        </div>
    @endif
</div>
