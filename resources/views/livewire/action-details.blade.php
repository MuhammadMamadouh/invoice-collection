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
                                <div class="d-flex flex-wrap my-2">
                                    <p class="me-3">
                                        <input type="checkbox" wire:model="get_a_copy" class="form-check-input mx-2"
                                            id="exampleChe">
                                        Get a copy of this email.
                                    </p>
                                    <p>
                                        <input type="checkbox" wire:model="request_an_acknowledgment"
                                            class="form-check-input mx-2" id="exampleChe">
                                        Request an acknowledgment of receipt.
                                    </p>
                                </div>
                            </div><!--r-1-->
                            <!-- Recipients Section -->
                                <div class="row">
                                    <!-- First column for type_to -->
                                    <div class="col-md-2 mt-2">
                                        <select class="form-select" wire:model="type_To">
                                            <option value="" selected>Select</option>
                                            @foreach ($typesTo as $typeTo)
                                                <option value="{{ $typeTo->id }}">{{ $typeTo->name }}</option>
                                            @endforeach
                                        </select>
                                    </div><!--l-2-->
                                    <!-- Second column for resolver -->
                                    <div class="col-md-10 mt-2">
                                        <select class="form-select"  wire:model="resolver">
                                            <option value="" selected>Select Resolver</option>
                                            {{-- Display Client's Email --}}
                                            <option value="" disabled>External Contacts «
                                                {{$client->company_name }} »:</option>
                                            @foreach($clientContacts as $clientContact)
                                                <option value="{{ $clientContact->id }}">
                                                    Client Email: {{ $clientContact->email }}
                                                </option>
                                            @endforeach
                                            {{-- Display Collector's Email if it exists --}}
                                            <option disabled></option>
                                            <option value="" disabled>Internal contacts « Business Solutions » :
                                                «{{-- $client->company_name --}}»</option>

                                                <option value="{{ $client->collector->id }}">
                                                    Collector: {{ $client->collector->first_name }}
                                                    {{ $client->collector->last_name }}
                                                    ({{ $client->collector->email }})
                                                </option>

                                            {{-- Display Other Resolvers --}}
                                            <option disabled></option>
                                            <option value="" disabled>Internal Contacts « Business Solutions » :
                                            </option>
                                                @foreach($resolvers as $resolver)
                                                    <option value="{{ $resolver->id }}">
                                                        {{ $resolver->first_name }} {{ $resolver->last_name }}
                                                        ({{ $resolver->role->name }})
                                                    </option>
                                                @endforeach
                                        </select>
                                    </div><!--r-2-->
                                </div><!--end-row-->
                            <!-- Add another recipient button -->
                            {{-- <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="#" class="text-primary mx-3" style="text-decoration: none;"
                                        wire:click.prevent="addRecipient">
                                        <span class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add
                                        another recipient
                                    </a>
                                </div>
                            </div> --}}
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
                            <div class="d-flex">
                                <p style="margin-left: 95px;">{{ __('+ Add An Item') }}</p>
                                <a href="DSOInformation.html"><i
                                        class="fa-solid fa-question bg-primary text-light p-1 ms-1"
                                        style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
                            </div>
                            <div class="addFileDiv-2">
                                <div class="d-flex justify-content-around flex-wrap align-items-center mb-3">
                                    <input wire:model="file_name" type="file" id="upload-image-input2" multiple />
                                    @error('file_name')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                    <input wire:model="desc" type="text" class="form-control w-auto"
                                        placeholder="Description...">
                                    @error('desc')
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-around flex-wrap align-items-center mb-3">
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
                                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                            </div><!--l-5-->
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
