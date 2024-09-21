<div>
    <form wire:submit="save">
        @if ($currentStep === 1)
            <div class="step-1">
                @csrf
                <input type="hidden" wire:model="item_id" value="{{ $item->id }}">
                <input type="hidden" wire:model="created_by">
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
                        @error('status_id')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                    @if ($itemStatusActions)
                        <div class="px-5 mb-5">
                            <select class="form-select" wire:model="status_action_id" id="inputname205"
                                aria-label="Default select example">
                                <option value="" selected>{{ __('Select One') }}</option>
                                @foreach ($itemStatusActions as $itemStatusAction)
                                    <option value="{{ $itemStatusAction->id }}">{{ $itemStatusAction->status }}</option>
                                @endforeach
                            </select>
                            @error('status_action_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="px-5 mb-5">
                            <select class="form-select" wire:model.live="resolver" id="inputname205"
                                aria-label="Default select example">
                                <option value="" selected>{{ __('Select One') }}</option>
                                @foreach ($resolvers as $resolverss)
                                    <option value="{{ $resolverss->id }}">
                                        {{ $resolverss->first_name }}{{ $resolverss->last_name }}
                                        ({{ $resolverss->role->name }})
                                    </option>
                                @endforeach
                            </select>
                            @error('resolver')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
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
                            <p style="margin-left: 95px;">{{ __('Associate files to items') }}</p>
                            <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1"
                                    style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
                        </div>
                        <div class="addFileDiv-2">
                            <div class="d-flex justify-content-around flex-wrap align-items-center mb-3">
                                <input wire:model="file_name" type="file" id="upload-image-input2" multiple />
                                @error('file_name')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                                <input wire:model="desc" type="text" class="form-control w-auto" placeholder="Description...">
                                @error('desc')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="internal"
                                        wire:model="visiable_in_internal">
                                    <label class="form-check-label"
                                        for="internal">{{ __('Visible in internal emails') }}</label>
                                </div>
                                @error('visiable_in_internal')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="external"
                                        wire:model="visiable_in_external">
                                    <label class="form-check-label"
                                        for="external">{{ __('Visible in external emails') }}
                                    </label>
                                </div>
                                @error('visiable_in_external')
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
        @endif
        {{-- ------------------------------STEP2----------------------------------- --}}
        @if ($currentStep === 2)
            <div class="mt-3 px-5 d-flex gap-3">
                <h5 class="text-black-50">{{ __('Step 2/3') }}</h5>
                <h5>{{ __('Do you want to send an email to that client or to your colleagues?') }}</h5>
            </div>
            <div class="px-5 mb-5">
                <select class="form-select" id="inputname205" wire:model.live="selectedEmailType"
                    aria-label="Default select example">
                    <option value="" selected>{{ __('No') }}</option>
                    @foreach ($emailTypes as $emailType)
                        <option value="{{ $emailType->id }}">{{ $emailType->name }}</option>
                    @endforeach
                    </option>
                </select>
                @if ($email_type == 1)
                    <div class="new-holab-1" id="hide-hoalp-1">
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <h4>From :</h4>
                            </div><!--l-1-->
                            <div class="col-md-10">
                                <a href="#" style="text-decoration: none; font-weight: bold;"
                                    class="text-primary">
                                    created_by name < mohamed@gmail.com>
                                </a>
                                <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                                    <p> <input type="checkbox" wire:model="get_a_copy" class="form-check-input mx-2"
                                            id="exampleChe">
                                        Get a copy of this email.
                                    </p>
                                    <p> <input type="checkbox" wire:model="request_an_acknowledgment"
                                            class="form-check-input mx-2" id="exampleChe">
                                        Request an acknowledgment of receipt.
                                    </p>
                                </div>
                            </div><!--r-1-->
                            <div>
                                @foreach ($recipients as $index => $recipient)
                                    <div class="row">
                                        <!-- First column for type_to -->
                                        <div class="col-md-2 mt-2">
                                            <select class="form-select"
                                                wire:model="recipients.{{ $index }}.type_to">
                                                <option value="" selected>Select One</option>
                                                @foreach ($typesTo as $typeTo)
                                                    <option value="{{ $typeTo->id }}">{{ $typeTo->name }}</option>
                                                @endforeach
                                            </select>
                                        </div><!--l-2-->

                                        <!-- Second column for resolver -->
                                        <div class="col-md-10 mt-2">
                                            <select class="form-select"
                                                wire:model="recipients.{{ $index }}.resolverData">
                                                <option value="" selected>Select Resolver</option>
                                                @foreach ($resolvers as $resolver)
                                                    <option value="{{ $resolver->id }}">
                                                        {{ $resolver->first_name }} {{ $resolver->last_name }}
                                                        ({{ $resolver->role->name }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                @endforeach
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <!-- Add another recipient button -->
                                        <a href="#" class="text-primary mx-3" style="text-decoration: none;"
                                            wire:click.prevent="addRecipient">
                                            <span class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add
                                            another recipient
                                        </a>
                                        <!-- Add external recipient button -->
                                        <a href="#" class="text-primary mx-3" style="text-decoration: none;">
                                            <span class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add
                                            an external recipient
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                <div class="col-md-10">
                                    <div class="editor-container">
                                        <textarea id="editor" wire:model.defer="editorContent" class="form-control clear-2" contenteditable="true"></textarea>
                                    </div>
                                </div>
                                <a href="#" style="text-decoration: none; color: rgb(155, 152, 152);"><span
                                        class="mx-1"><i class="fa-solid fa-plus"></i></span>Add an item</a>
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
                                                {{ __('Email preview') }}</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-success w-100 mt-3"><i
                                                    class="fa-solid fa-check"></i> {{ __('Send the email') }} <i
                                                    class="fa-solid fa-plus"></i>
                                                {{ __('complete the action') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--r-5-->
                        </div>
                    </div>
                @endif
                @if ($email_type == 2)
                    <div class="new-holab-1" id="hide-hoalp-1">
                        <div class="col-md-12 mt-2">
                            <p style="background-color: #dff0d8; padding: 10px;">Internal interactive email →
                                Interactive email intended for the internal actors of your
                                company
                                allowing them to interact in MY DSO MANAGER about actions requests or disputes follow-up
                            </p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2">
                                <h4>From :</h4>
                            </div><!--l-1-->
                            <div class="col-md-10">
                                <a href="#" style="text-decoration: none; font-weight: bold;"
                                    class="text-primary">
                                    created_by name < mohamed@gmail.com>
                                </a>
                                <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                                    <p> <input type="checkbox" wire:model="get_a_copy" class="form-check-input mx-2"
                                            id="exampleChe">
                                        Get a copy of this email.
                                    </p>
                                    <p> <input type="checkbox" wire:model="request_an_acknowledgment"
                                            class="form-check-input mx-2" id="exampleChe">
                                        Request an acknowledgment of receipt.
                                    </p>
                                </div>
                            </div><!--r-1-->
                            <div>
                                @foreach ($recipients as $index => $recipient)
                                    <div class="form-group">
                                        <select class="form-select"
                                            wire:model="recipients.{{ $index }}.type_to">
                                            <option value="" selected>Select One</option>
                                            @foreach ($typesTo as $typeTo)
                                                <option value="{{ $typeTo->id }}">{{ $typeTo->name }}</option>
                                            @endforeach
                                        </select>
                                        <select class="form-select"
                                            wire:model="recipients.{{ $index }}.resolverData">
                                            <option value="" selected>Select Resolver</option>
                                            @foreach ($resolvers as $resolver)
                                                <option value="{{ $resolver->id }}">
                                                    {{ $resolver->first_name }} {{ $resolver->last_name }}
                                                    ({{ $resolver->role->name }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endforeach
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <!-- Add another recipient button -->
                                        <a href="#" class="text-primary mx-3" style="text-decoration: none;"
                                            wire:click.prevent="addRecipient">
                                            <span class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add
                                            another recipient
                                        </a>
                                        <!-- Add external recipient button -->
                                        <a href="#" class="text-primary mx-3" style="text-decoration: none;">
                                            <span class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add
                                            an external recipient
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                    <textarea id="editor" class="form-control" wire:model.defer="editorContent"></textarea>
                                </div>
                                <a href="#" style="text-decoration: none; color: rgb(155, 152, 152);"><span
                                        class="mx-1"><i class="fa-solid fa-plus"></i></span>Add an item</a>
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
                                                {{ __('Email preview') }}</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-success w-100 mt-3"><i
                                                    class="fa-solid fa-check"></i> {{ __('Send the email') }} <i
                                                    class="fa-solid fa-plus"></i>
                                                {{ __('complete the action') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--r-5-->
                        </div>
                    </div>
                @endif
            </div>
        @endif
        {{-- ------------------------------STEP3----------------------------------- --}}
        @if ($currentStep === 3)
            <div class="mt-3 px-5 d-flex gap-3">
                <h5 class="text-black-50">{{ __('Step 3/3') }}</h5>
                <h5>{{ __('Next action') }} :</h5>
            </div>
            <div class="px-5">
                <input type="radio" id="follow_the_collection_scenario" name="actionType"
                    wire:model.live="selectedAction" value="follow_the_collection_scenario">
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
                    <div class="col fw-bold">{{ __('Action date') }}</div>
                    <div class="col fw-bold">{{ __('Action type') }}</div>
                    <div class="col fw-bold">{{ __('Action') }}</div>
                    <div class="col fw-bold">{{ __('Action amount inc. Tax') }}</div>
                </div>
                <div class="row mt-2 text-center">
                    @php($firstDueItem = $client->firstDueItem)
                    <div class="col fw-bold">{{ $firstDueItem->due_date ?? '-' }}</div>
                    <div class="col fw-bold">
                        <div class="btn openModalBtn btn-secondary">{{-- $firstDueItem->toTakeAction->action_type ?? 'email' --}}E-mail</div>
                    </div>
                    <div class="col fw-bold">{{-- optional($firstDueItem)->toTakeAction()->action_name ?? 'contact by email' --}}
                        {{-- optional($firstDueItem)->toTakeAction()->number_of_days ?? '2' --}}</div>
                    <div class="col fw-bold">100,000.00 €</div>
                </div>
            </div>
            <div class="px-5 mt-3">
                <input type="radio" id="create_a_specific_action" name="actionType"
                    wire:model.live="selectedAction" value="create_a_specific_action">
                {{ __('Create a specific action for selected items') }}</label>
                @if ($selectedAction === 'create_a_specific_action')
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-3 ">
                                <label for="inputname13"> {{ __('Action name') }} :</label>
                            </div>
                            <div class="col-9 ">
                                <input type="text" wire:model='action_name' class="form-control"
                                    placeholder="Name" id="inputname13">
                            </div>
                        </div>
                    </div><!--13-->
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-3 ">
                                <label for="inputname222">{{ __('Action date') }} :</label>
                            </div>
                            <div class="input-group">
                                <input type='date' wire:model="action_date" class="form-select" id="inputname19">
                            </div>
                        </div>
                    </div><!--2-->
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-3 ">
                                <label for="inputname222">{{ __('Action Type') }} :</label>
                            </div>
                            <div class="input-group">
                                <select class="form-select" wire:model.live='selectedActionType'
                                    aria-label="Default select example">
                                    <option value="" selected>{{ __('Select One') }}</option>
                                    @foreach ($actionTypes as $actionType)
                                        <option value="{{ $actionType->id }}">
                                            {{ $actionType->en_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div><!--2-->
                    {{-- ---------------------------------------Send Email ---------------------------- --}}
                    @if ($action_type == 5)
                        <div class="new-holab-1" id="hide-hoalp-1">
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
                                            <p> <input type="checkbox"
                                                    wire:model.live='automatic_action_to_be_confirmed'
                                                    class="form-check-input mx-2" id="exampleChe">
                                                Automatic action to be confirmed
                                            </p>
                                        @endif
                                    </div>
                                    <div class="col-4">
                                        <p> <input type="checkbox" wire:model.live='internal_interactive_emailLink'
                                                class="form-check-input mx-2" id="exampleChe"
                                                @if ($automatic_action) disabled @endif>
                                            Internal interactive emailLink
                                        </p>
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
                                                    {{ __('Email preview') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--r-5-->
                            </div>
                        </div>
                    @endif
                    {{-- ---------------------------------------Send SMS ---------------------------- --}}
                    @if ($action_type == 7)
                        <div class="new-holab-1" id="hide-hoalp-1">
                            <div class="row mt-5">
                                <div class="col-md-2 mt-2">
                                    <h4 class="mb-5">Message :</h4>
                                    <p style="color: rgb(172, 169, 169); text-align: center;"><i
                                            class="fa-solid fa-hashtag hash mb-5"></i><br>
                                        Lorem ipsum dolor sit amet.</p>
                                </div><!--l-4-->
                                <div class="col-md-10 mt-2">
                                    <div class="editor-container mb-1">
                                        <textarea id="text_editor" class="form-control" wire:model.defer="editorContent"></textarea>
                                    </div>
                                    <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                                        <p> <input type="checkbox" wire:model.live='automatic_action'
                                                class="form-check-input mx-2" id="exampleChe">
                                            Automatic action
                                        </p>
                                        @if ($automatic_action)
                                            <p> <input type="checkbox"
                                                    wire:model.live='automatic_action_to_be_confirmed'
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
                                        </div>
                                    </div>
                                </div><!--r-5-->
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        @endif
        <div class="d-flex justify-content-end my-5">
            @if ($currentStep > 1)
                <button type="button" wire:click='decrementSteps' class="btn btn-danger px-5 mx-5"><i
                        class="fa-solid fa-chevron-left pe-2"></i>{{ __('Previus') }}</button>
            @endif
            @if ($currentStep < $totalSteps)
                <button type="button" wire:click='incrementSteps'
                    class="btn btn-secondary px-5 mx-5">{{ __('Next') }} <i
                        class="fa-solid fa-chevron-right ps-2"></i></button>
            @endif
            @if ($currentStep === $totalSteps)
                <button type="submit" class="btn btn-success px-5 mx-5"> <i class="fa-solid fa-check pe-2"></i>
                    {{ __('Submit') }}</button>
            @endif
        </div>
    </form>
    {{-- <script>
        document.addEventListener('livewire:load', () => {
            ClassicEditor
                .create(document.querySelector('#text_editor'))
                .then(editor => {
                    // Sync CKEditor data to Livewire's content property
                    editor.model.document.on('change:data', () => {
                        @this.set('editorContent', editor.getData());
                    });
                    // Set the initial CKEditor content from Livewire
                    editor.setData(@this.get('editorContent'));
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script> --}}
        {{-- <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}
</div>
