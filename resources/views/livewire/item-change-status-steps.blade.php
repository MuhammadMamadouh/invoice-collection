<div>
    <form wire:submit>
        <div class="step-1">
            @csrf
            <input type="hidden" wire:model="item_id" value="{{ $item->id }}">
            <input type="hidden" wire:model="created_by" value="1">
            <div class="mt-3 px-5 d-flex gap-3">
                <h5 class="text-black-50">{{ __('Step 1/3') }}</h5>
                <h5>{{ __('New status') }} :</h5>
            </div>
            <div>
                <div class="px-5 mb-5">
                    <select class="form-select" id="inputname205" wire:model.live='selectedStatus'>
                        <option selected>{{ __('Select One') }}</option>
                        @foreach ($itemTypesStatus as $itemTypeStatue)
                            <option value="{{ $itemTypeStatue->id }}">{{ $itemTypeStatue->en_name }}</option>
                        @endforeach
                    </select>
                </div>
                @if ($itemStatusActions)
                    <div class="px-5 mb-5">
                        <select class="form-select" wire:model="status_action_id" id="inputname205"
                            aria-label="Default select example">
                            <option value="" selected disabled>{{ __('Select One') }}</option>
                            @foreach ($itemStatusActions as $itemStatusAction)
                                <option value="{{ $itemStatusAction->id }}">{{ $itemStatusAction->status }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="px-5 mb-5">
                        <select class="form-select" wire:model="resolver" id="inputname205"
                            aria-label="Default select example">
                            <option value="" selected disabled>{{ __('Select One') }}</option>
                            @foreach ($resolvers as $resolvers)
                                <option value="{{ $resolvers->id }}">
                                    {{ $resolvers->first_name }}{{ $resolvers->last_name }}
                                    ({{ $resolvers->role->name }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="px-5 mb-5">
                        <textarea wire:model="comments" class="form-control" rows="4" id="inputname2" placeholder="Write A Commnet"></textarea>
                        @error('comments')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="px-5 mb-5">
                        <input type='datetime-local' wire:model="create_at" class="form-control" rows="4"
                            id="inputname2">
                        @error('create_at')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <p>{{ __('Associate files to items') }}</p>
                        <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1"
                                style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
                    </div>
                    <div class="addFileDiv-2">
                        <div class="d-flex justify-content-between flex-wrap align-items-center mb-3">
                            <input requiered wire:model="file_name" type="file" id="upload-image-input2" multiple />
                            <input wire:model="desc" type="text" class="form-control w-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="internal" wire:model="visible_in"
                                    value="1">
                                <label class="form-check-label"
                                    for="internal">{{ __('Visible in internal emails') }}</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="external" wire:model="visible_in"
                                    value="0">
                                <label class="form-check-label" for="external">{{ __('Visible in external emails') }}
                                </label>
                            </div>
                            @error('visible_in')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                @endif
            </div>
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
            {{-- <div class="position-fixed w-75 d-none associate-files "
                style="top:10% ;left: 50%;transform: translate(-50%);z-index: 12;">
                <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
                    <span class="btn btn-secondary position-absolute" onclick="hideAssociateFiles()"
                        style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
                    <div class="p-4">
                        <div class=" d-flex text-start">
                            <h4>Associate files to items</h4>
                            <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1"
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
            </div> --}}

        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-5 mx-5" onclick="showStepTwo()">{{ __('Next') }} <i
                    class="fa-solid fa-chevron-right ps-2"></i></button>
        </div>
    </form>
    {{-- ------------------------------STEP2----------------------------------- --}}
    <div class="step-2 d-none">
        <div class="mt-3 px-5 d-flex gap-3">
            <h5 class="text-black-50">{{ __('Step 2/3') }}</h5>
            <h5>{{ __('Do you want to send an email to that client or to your colleagues?') }}</h5>
        </div>
        <div class="px-5 mb-5">
            <livewire:EmailForm>
        </div>
        <div class="d-flex justify-content-end">
            <div class="btn btn-danger px-5 mx-5" onclick="showStepOne()"><i class="fa-solid fa-chevron-left pe-2"></i>
                {{ __('Previus') }}</div>
            <div class="btn btn-primary px-5 mx-5" onclick="showStepThree()">{{ __('Next') }} <i
                    class="fa-solid fa-chevron-right ps-2"></i></div>
        </div>
    </div>
    {{-- ------------------------------STEP3----------------------------------- --}}
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
