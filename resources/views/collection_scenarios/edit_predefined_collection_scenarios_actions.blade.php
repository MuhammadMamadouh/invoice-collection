<div class="position-fixed edit-action-div2-{{ $ActionScenario->id }} pop-up d-none w-75 pt-4 pe-4"
    style="position: fixed; top: 0; left: 50%; transform: translateX(-50%);z-index: 99999; height: 100vh;  width: 65% !important; overflow-y: scroll; overflow-x: hidden;">
    <form id="myForm" action="{{ route('pre-defined_collection_scenarios_actions.update', $ActionScenario->id) }}"
        method="POST">
        @csrf
        @method('PATCH')
        <input type="hidden" id="collection_scenario_id" name="predefined_collection_scenario_id" class="form-control"
            style="width: 355px;" value="{{ old('predefined_collection_scenario_id', $ActionScenario->predefined_collection_scenario_id) }}">
        <input type="hidden" name="created_by" value='{{ old('created_by', $ActionScenario->created_by) }}'>
        <input type="hidden" name='is_pre_defined' value='1'>
        <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideEditActionDiv2({{ $ActionScenario->id }})"
                style="border-radius:50%;top: -20px;right: -20px;"><svg class="svg-inline--fa fa-xmark"
                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z">
                    </path>
                </svg><!-- <i class="fa-solid fa-close"></i> Font Awesome fontawesome.com --></span>
            <div>
                <input type="hidden" id="action_id" name="action_id" value="{{ $ActionScenario->action_type }}" />
                <input type="text" id="subject_t" name="subject_t" value="{{ $ActionScenario->mail_subject }}" style="display:none;">
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname18"> {{__("Action name")}}:</label>
                        <input type="text" name="action_name" class="form-control " id="inputname18"
                            value="{{ old('action_name', $ActionScenario->action_name) }}">
                        @error('action_name')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--24-->
            <div>

                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname20">{{__("No. Of Days Follow-Up Action")}} <a href="#"><svg
                                    class="svg-inline--fa fa-question bg-primary text-light p-1"
                                    style="border-radius: 50%;width: 18px;height: 22px;" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="question" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M204.3 32.01H96c-52.94 0-96 43.06-96 96c0 17.67 14.31 31.1 32 31.1s32-14.32 32-31.1c0-17.64 14.34-32 32-32h108.3C232.8 96.01 256 119.2 256 147.8c0 19.72-10.97 37.47-30.5 47.33L127.8 252.4C117.1 258.2 112 268.7 112 280v40c0 17.67 14.31 31.99 32 31.99s32-14.32 32-31.99V298.3L256 251.3c39.47-19.75 64-59.42 64-103.5C320 83.95 268.1 32.01 204.3 32.01zM144 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S166.1 400 144 400z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;width: 18px;height: 22px;"></i> Font Awesome fontawesome.com --></a>:</label>
                        {{-- <select name="number_of_days" class="form-select" id="inputname19">
                            <option value="" selected disabled>
                                {{ __('select one') }}</option>
                            @foreach ($days as $day)
                                @if ($ActionScenario->number_of_days == $day)
                                    <option value="{{ $day }}" selected>
                                        {{ $day }}
                                        days</option>
                                @else
                                    <option value="{{ $day }}">
                                        {{ $day }}
                                        days</option>
                                @endif
                            @endforeach
                        </select>
                        @error('number_of_days')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror --}}
                        <input type="date" name="action_date" class="form-control " id="inputname18"
                            placeholder="Action Date" value="{{ old('action_date', $ActionScenario->action_date) }}">
                        @error('action_date')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div>
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname266"> {{ __('Action Type') }}*:</label>
                        <select name="action_type" class="form-select" id="inputname266"
                            onchange="actionTypeDropdownChange(this)">
                            <option value="" selected disabled>
                                {{ __('Select One') }}</option>
                            @foreach ($actionTypes as $actionType)
                                @if ($actionType->id == $ActionScenario->action_type)
                                    <option value="{{ $actionType->id }}" selected>
                                        {{ $actionType->en_name }}</option>
                                @else
                                    <option value="{{ $actionType->id }}">
                                        {{ $actionType->en_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('action_type')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-success"> <i
                        class="fa-solid fa-check"></i>{{ __('Modify') }}</button>
            </div>
        </div>
    </form>
</div>
