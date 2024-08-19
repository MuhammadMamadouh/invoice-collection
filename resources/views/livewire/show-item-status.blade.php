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
            @error('address')
                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
            @enderror
        </div>
        <div class="px-5 mb-5">
            <input type='datetime-local' name="create_at" class="form-control" rows="4" id="inputname2">
            @error('address')
                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
            @enderror
        </div>
    @endif
</div>
