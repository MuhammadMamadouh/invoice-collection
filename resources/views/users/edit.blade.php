<div class="position-fixed edit-user-div w-75 pop-up d-none pt-4 pe-4"
style="top:5% ;left: 50%;transform: translate(-50%);z-index: 10;height: 90vh; overflow-y: scroll;overflow-x: hidden;">
<div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
    <span class="btn btn-secondary position-absolute" onclick="hideEditUserDiv()"
        style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
    <form id="editUserForm" action="{{ route('users.update','test') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="edit_id" value="">
        <div class="row align-items-center">
            <div class="col-md-3 mb-3">
                <small class="">{{ __('First name *:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <input required type="text" name="first_name" class="form-control" id="edit_first_name" value="" />
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('Last Name *:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <input required type="text" name="last_name" class="form-control" id="edit_last_name" value="" />
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('E-Mail *:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <input required type="email" name="email" class="form-control" id="edit_email" value="" />
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('Image Of Account:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <div class="change-img text-center">
                    <img src="" id="edit_changeimg" class="img-fluid" style="width: 300px;height:200px" alt="">
                    <div class="upload" id="edit_uploads">
                        <label for="edit_upload" class="text-center">{{ __('Upload') }}</label>
                        <input type="file" id="edit_upload" name="picture">
                    </div>
                </div>
                @error('picture')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('Phone:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="phone" class="form-control" id="edit_phone" value="" />
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('Fax:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="fax" class="form-control" id="edit_fax" value="" />
                @error('fax')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('Function:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="function" class="form-control" id="edit_function" value="" />
                @error('function')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('ID number:') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="id_number" class="form-control" id="edit_id_number" value="" />
                @error('id_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('Active account :') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <div class="checks-bx d-flex gap-3">
                    <div>
                        <input type="radio" name="active" value="1" id="edit_yes" />
                        <label for="edit_yes">{{ __('Yes') }}</label>
                    </div>
                    <div>
                        <input type="radio" name="active" value="0" id="edit_no" />
                        <label for="edit_no">{{ __('No') }}</label>
                    </div>
                </div>
                @error('active')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">{{ __('Role :') }}</small>
            </div>
            <div class="col-md-9 mb-3">
                <select class="form-select" name="role_id" id="edit_role_id" aria-label="Default select example">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i> {{ __('Modify') }}</button>
        </div>
    </form>
</div>
</div>