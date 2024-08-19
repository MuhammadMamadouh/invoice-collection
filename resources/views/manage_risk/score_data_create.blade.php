<form action="{{ route('manage_risk.store') }}" method="POST">
    @csrf
    <div class="position-fixed new-scoring-div d-none w-75"
        style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
        <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideNewScoringDiv()"
                style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
            <div class="my-2">
                <form class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname18"> {{ __('Title') }}:</label>
                    </div>
                    <div class="col-8">
                        <div class="input-group">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control "
                                id="inputname18">
                        </div>
                        @error('title')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </form>
            </div><!--24-->
            <div class="my-2">
                <div class="col-4 ">
                    <label for="inputname28"> {{ __('Description') }}:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="description" value="{{ old('description') }}" class="form-control"
                        id="inputname28">
                </div>
                @error('description')
                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                @enderror
            </div><!--24-->
            <div class="text-center mt-3">
                <button class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i>
                    {{ __('Save') }}</button>
            </div>
        </div>
    </div>
</form>
