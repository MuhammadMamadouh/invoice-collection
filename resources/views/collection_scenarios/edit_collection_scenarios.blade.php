<div id="edit-group-div-{{ $collection->id }}" class="position-fixed edit-group-div d-none"
    style="top:10%; left: 50%; transform: translate(-50%); z-index: 10;">
    <form class="d-flex align-items-center mb-3" action="{{ route('collection_scenarios.update', $collection->id) }}"
        method="POST">
        @csrf
        @method('patch')
        <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideCreateAction({{ $collection->id }})"
                style="border-radius:50%; top: -20px; right: -20px;">
                <i class="fa-solid fa-close"></i>
            </span>
            <div class="my-2">
                <div class="col-2">
                    <label for="inputname18">{{ __('Name') }} *:</label>
                </div>
                <div class="col-10">
                    <div class="input-group">
                        <input type="text" name="en_name" class="form-control" id="inputname18" style="width: 355px;"
                            value="{{ old('en_name', $collection->en_name) }}">
                        @error('en_name')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success" style="background: green !important;">
                    <i class="fa-solid fa-check"></i>{{ __('Modify') }}
                </button>
            </div>
        </div>
    </form>
</div>
