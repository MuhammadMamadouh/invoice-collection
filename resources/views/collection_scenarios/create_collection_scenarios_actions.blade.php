<div class="position-fixed add-action-div pop-up d-none w-75 pt-4 pe-4" id="add-action-div-{{ $collection->id }}"
    style="position: fixed; top: 0; left: 50%; transform: translateX(-50%);z-index: 99999;
    width: 100%;height: 100%; overflow: auto;">
    <form action="{{ route('collection.storeAction') }}" method="POST">
        @csrf
        <input type="hidden" id="collection_scenario_id" name="collection_scenario_id"value="{{ $collection->id }}"
            class="form-control" style="width: 355px;">
        <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideAddActionDiv({{ $collection->id }})"
                style="border-radius:50%;top: -20px;right: -20px;"> <i class="fa-solid fa-close"></i> </span>
            <div class="my-1">
                <input type="hidden" name="created_by" value='1'>
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
                        <label for="inputname20">No. Of Days Follow-Up Action <a href="#"><i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;width: 18px;height: 22px;"></i> </a>:</label>
                        {{-- <select name="action_date" class="form-select" id="inputname19">
                            <option value="" selected disabled>
                                {{ __('select one') }}</option>
                            @foreach ($days as $day)
                                <option value="{{ $day }}">{{ $day }}
                                    days</option>
                            @endforeach
                        </select> --}}
                        <input type="date" name="action_date" class="form-control " id="inputname18"
                            placeholder="Action Date">
                        @error('action_date')
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

            <div class="text-center mt-1">
                <button type="submit" class="btn btn-success"> <i class="fa-solid fa-plus"></i> 
                    {{__("Add")}}
                </button>
            </div>
        </div>
    </form>
</div>
