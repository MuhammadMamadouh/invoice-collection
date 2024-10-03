<div>
    <div>
        @if ($isVisible == true)
            <div class="position-fixed add-action-div pop-up w-75 pt-4 pe-4"
                style="position: fixed; top: 0; left: 50%; transform: translateX(-50%); z-index: 99999; width: 100%; height: 100%; overflow: auto;">
                <form wire:submit.prevent="submit">
                    <input type="hidden" wire:model="collection_scenario_id" class="form-control">
                    <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
                        <button type="button" class="btn btn-secondary position-absolute" wire:click="$dispatch('closeForm')"
                            style="border-radius:50%;top: -20px;right: -20px;">
                            X
                        </button>

                        <div class="my-1">
                            <div class="col-12">
                                <div class="input-group">
                                    <label for="action_name">Action name:</label>
                                </div>
                                <div class="mt-2">
                                    <input type="text" wire:model.defer="action_name" class="form-control"
                                        id="action_name" placeholder="Action Name">
                                </div>
                                @error('action_name')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="my-1">
                            <div class="col-12">
                                <div class="input-group mt-1">
                                    <label for="action_date">Action Date:</label>
                                </div>
                                <div class="mt-2">
                                    <input type="date" wire:model.defer="action_date" class="form-control"
                                        id="action_date">
                                </div>
                                @error('action_date')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="my-1">
                            <div class="col-12">
                                <div class="input-group mt-1">
                                    <label for="action_type">Action Type:</label>
                                </div>
                                <div class="mt-2">
                                    <select wire:model.live='action_type' class="form-select" id="action_type">
                                        <option value="" selected>Select One</option>
                                        @foreach ($actionTypes as $actionType)
                                            <option value="{{ $actionType->id }}"
                                                {{ $selectedActionType == $actionType->id ? 'selected' : '' }}>
                                                {{ $actionType->en_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('action_type')
                                    <div class="alert text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
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

                        <div class="text-center mt-1">
                            <button type="submit" class="btn btn-success">
                                Add Action
                                <div wire:loading>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><path fill="none" d="M0 0h200v200H0z"></path><path fill="none" stroke-linecap="round" stroke="#2F6579" stroke-width="15" transform-origin="center" d="M70 95.5V112m0-84v16.5m0 0a25.5 25.5 0 1 0 0 51 25.5 25.5 0 0 0 0-51Zm36.4 4.5L92 57.3M33.6 91 48 82.7m0-25.5L33.6 49m58.5 33.8 14.3 8.2"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="0;-120" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></path><path fill="none" stroke-linecap="round" stroke="#2F6579" stroke-width="15" transform-origin="center" d="M130 155.5V172m0-84v16.5m0 0a25.5 25.5 0 1 0 0 51 25.5 25.5 0 0 0 0-51Zm36.4 4.5-14.3 8.3M93.6 151l14.3-8.3m0-25.4L93.6 109m58.5 33.8 14.3 8.2"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="0;120" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></path></svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @endif
    </div>
</div>
