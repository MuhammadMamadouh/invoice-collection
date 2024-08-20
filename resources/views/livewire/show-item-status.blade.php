<div>
    <div class="px-5 mb-5">
        <select class="form-select" name="status_id" id="inputname205" wire:model.live='selectedStatus'>
            <option selected>{{ __('Select One') }}</option>
            @foreach ($itemTypesStatus as $itemTypeStatue)
                <option value="{{ $itemTypeStatue->id }}">{{ $itemTypeStatue->en_name }}</option>
            @endforeach
        </select>
    </div>
    @if ($itemStatusActions)
        <div class="px-5 mb-5">
            <select class="form-select" name="status_action_id" id="inputname205" aria-label="Default select example">
                <option value="" selected disabled>{{ __('Select One') }}</option>
                @foreach ($itemStatusActions as $itemStatusAction)
                    <option value="{{ $itemStatusAction->id }}">{{ $itemStatusAction->status }}</option>
                @endforeach
            </select>
        </div>
        <div class="px-5 mb-5">
            <select class="form-select" name="resolver" id="inputname205" aria-label="Default select example">
                <option value="" selected disabled>{{ __('Select One') }}</option>
                @foreach ($resolvers as $resolvers)
                    <option value="{{ $resolvers->id }}">{{ $resolvers->first_name }}{{ $resolvers->last_name }}
                        ({{ $resolvers->role->name }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="px-5 mb-5">
            <textarea name="comments" class="form-control" rows="4" id="inputname2" placeholder="Write A Commnet"></textarea>
            @error('comments')
                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
            @enderror
        </div>
        <div class="px-5 mb-5">
            <input type='datetime-local' name="create_at" class="form-control" rows="4" id="inputname2">
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
                <input requiered name="file" type="file" id="upload-image-input2" multiple />
                <input name="desc" type="text" class="form-control w-auto">
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="internal" name="visible_in" value="1">
                    <label class="form-check-label" for="internal">{{ __('Visible in internal emails') }}</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="external" name="visible_in" value="0">
                    <label class="form-check-label" for="external">{{ __('Visible in external emails') }} </label>
                </div>
                @error('visible_in')
                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary px-5 mx-5">{{ __('save') }} <i
                    class="fa-solid fa-chevron-right ps-2"></i></button>
        </div>
    @endif
</div>
