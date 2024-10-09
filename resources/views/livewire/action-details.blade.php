<div>
    @if ($isVisible)
        <div class="position-fixed add-action-div pop-up w-50 pt-4 pe-4"
            style="position: fixed; top: 0; left: 50%; transform: translateX(-50%); z-index: 99999; width: 100%; height: 100%; overflow: auto;">
            <form wire:submit.prevent="submit">
                {{-- <input type="hidden" wire:model="collection_scenario_id" class="form-control"> --}}
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
                            {{-- @foreach ($recipients as $index => $recipient)
                                <div class="row">
                                    <!-- First column for type_to -->
                                    <div class="col-md-2 mt-2">
                                        <select class="form-select" wire:model="recipients.{{ $index }}.type_to">
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
                                    </div><!--r-2-->
                                </div><!--end-row-->
                            @endforeach --}}

                            @foreach ($recipients as $index => $recipient)
                                <div class="row">
                                    <!-- First column for type_to -->
                                    <div class="col-md-2 mt-2">
                                        <select class="form-select" wire:model="recipients.{{ $index }}.type_to">
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

                                            {{-- Display Client's Email --}}
                                            @foreach ($clientContacts as $clientContact)
                                                <option value="client:{{ $clientContact->email }}">
                                                    Client Email: {{ $clientContact->email }}
                                                </option>
                                            @endforeach

                                            {{-- Display Collector's Email if it exists --}}
                                            @if ($client && $client->collector)
                                                <option value="collector:{{ $client->collector->email }}">
                                                    Collector: {{ $client->collector->first_name }}
                                                    {{ $client->collector->last_name }}
                                                    ({{ $client->collector->email }})
                                                </option>
                                            @endif

                                            {{-- Display Other Resolvers --}}
                                            @foreach ($resolvers as $resolver)
                                                <option value="resolver:{{ $resolver->id }}">
                                                    {{ $resolver->first_name }} {{ $resolver->last_name }}
                                                    ({{ $resolver->role->name }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div><!--r-2-->
                                </div><!--end-row-->
                            @endforeach







                            <!-- Add another recipient button -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="#" class="text-primary mx-3" style="text-decoration: none;"
                                        wire:click.prevent="addRecipient">
                                        <span class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add
                                        another recipient
                                    </a>
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
                                    </div>
                                </div>
                            </div><!--r-5-->
                        </div>
                    </div> --}}
                    <div class="text-center mt-1">
                        <button type="submit" class="btn btn-success">
                            Add Action
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endif
</div>
