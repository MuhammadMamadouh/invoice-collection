<div class="position-fixed create-group-div2 d-none" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
        <span class="btn btn-secondary position-absolute" onclick="hideCreateGroupDiv2()"
            style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
        <form class="d-flex align-items-center mb-3" action="{{ route('pre-defined_collection_scenarios.store') }}"
            method="POST">
            @csrf
            <div class="my-2">
                <h3 class="text-center mb-3">{{ __('Create A Collection Scenario') }}</h3>
                <div class="col-2 ">
                    <label for="inputname18"> {{ __('Name') }}* :</label>
                </div>
                <div class="col-10">
                    <div class="input-group">
                        <input type="text" name="en_name" class="form-control " id="inputname18"
                            style="width: 355px;">
                        @error('en_name')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div class="text-center mt-5">
                <button class="btn btn-success"><i class="fa-solid fa-plus"></i>{{ __('Add') }}</button>
            </div>
        </form>
    </div>
</div>
