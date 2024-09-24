<div class="position-fixed add-action-div pop-up d-none w-75 pt-4 pe-4" id="add-action-div2-{{ $collection->id }}"
    style="position: fixed; top: 0; left: 50%; transform: translateX(-50%);z-index: 99999; width: 100%;height: 100%; overflow: auto;">
    <form action="{{ route('pre-defined_collection_scenarios_actions.store') }}" method="POST">
        @csrf
        <input type="hidden" id="collection_scenario_id" name="collection_scenario_id"value="{{ $collection->id }}"
            class="form-control" style="width: 355px;">
        <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideAddActionDiv2({{ $collection->id }})"
                style="border-radius:50%;top: -20px;right: -20px;"><svg class="svg-inline--fa fa-xmark"
                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z">
                    </path>
                </svg><!-- <i class="fa-solid fa-close"></i> Font Awesome fontawesome.com --></span>
            <div class="my-1">
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname18"> Action name:</label>
                        <input type="text" name="action_name" class="form-control " id="inputname18"
                            placeholder="Action Name">
                        @error('action_name')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div class="my-1">
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname20">No. Of Days Follow-Up Action <a href="#"><svg
                                    class="svg-inline--fa fa-question bg-primary text-light p-1"
                                    style="border-radius: 50%;width: 18px;height: 22px;" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="question" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M204.3 32.01H96c-52.94 0-96 43.06-96 96c0 17.67 14.31 31.1 32 31.1s32-14.32 32-31.1c0-17.64 14.34-32 32-32h108.3C232.8 96.01 256 119.2 256 147.8c0 19.72-10.97 37.47-30.5 47.33L127.8 252.4C117.1 258.2 112 268.7 112 280v40c0 17.67 14.31 31.99 32 31.99s32-14.32 32-31.99V298.3L256 251.3c39.47-19.75 64-59.42 64-103.5C320 83.95 268.1 32.01 204.3 32.01zM144 400c-22.09 0-40 17.91-40 40s17.91 39.1 40 39.1s40-17.9 40-39.1S166.1 400 144 400z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;width: 18px;height: 22px;"></i> Font Awesome fontawesome.com --></a>:</label>
                        <select name="number_of_days" class="form-select" id="inputname19">
                            <option value="" selected disabled>
                                {{ __('select one') }}</option>
                            @foreach ($days as $day)
                                <option value="{{ $day }}">{{ $day }}
                                    days</option>
                            @endforeach
                        </select>
                        @error('number_of_days')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div class="my-1">
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname205"> {{ __('Action Type') }}*:</label>
                        <select name="action_type" class="form-select" id="inputname205">
                            <option value="" selected>
                                {{ __('Select One') }}</option>
                            @foreach ($actionTypes as $actionType)
                                <option value="{{ $actionType->id }}">
                                    {{ $actionType->en_name }}</option>
                            @endforeach
                        </select>
                        @error('action_type')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
        <div class="text-center mt-5">
            <button class="btn btn-success"><i class="fa-solid fa-plus"></i>{{ __('Add') }}</button>
        </div>
        </div>
    </form>
</div>
