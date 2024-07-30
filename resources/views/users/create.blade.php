<div class="position-fixed add-user-div w-75 pop-up d-none pt-4 pe-4"
style="top:5% ;left: 50%;transform: translate(-50%);z-index: 10;height: 90vh; overflow-y: scroll;overflow-x: hidden;">
<div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
    <span class="btn btn-secondary position-absolute" onclick="hideAddUserDiv()"
        style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
    <h3 class="text-center mb-4">Add a user</h3>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row align-items-center">
            <div class="col-md-3 mb-3">
                <small class="">E-Mail *:</small>
            </div>
            <div class="col-md-9 mb-3">
                <input required type="email" name="email" class="form-control" value="{{ old('email') }}" />
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">First name *:</small>
            </div>
            <div class="col-md-9 mb-3">
                <input required type="text" name="first_name" class="form-control"
                    value="{{ old('first_name') }}" />
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">Last Name *:</small>
            </div>
            <div class="col-md-9 mb-3">
                <input required type="text" name="last_name" class="form-control"
                    value="{{ old('last_name') }}" />
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">Image Of Account:</small>
            </div>
            <div class="col-md-9 mb-3">
                <div class="change-img text-center">
                    <img src="img/download.png" id="changeimg" class="img-fluid" alt="">
                    <div class="upload" id="uploads">
                        <label for="upload" class="text-center">Upload</label>
                        <input type="file" id="upload" name="picture">
                    </div>
                </div>
                @error('picture')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">Phone:</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" />
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">Fax:</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="fax" class="form-control" value="{{ old('fax') }}" />
                @error('fax')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">Function:</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="function" class="form-control" value="{{ old('function') }}" />
                @error('function')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">ID number:</small>
            </div>
            <div class="col-md-9 mb-3">
                <input type="text" name="id_number" class="form-control" value="{{ old('id_number') }}" />
                @error('id_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-3 mb-3">
                <small class="">Active account :</small>
            </div>
            <div class="col-md-9 mb-3">
                <div class="checks-bx d-flex gap-3">
                    <div>
                        <input type="radio" name="active" value="1" id="yes"
                            {{ old('active') == '1' ? 'checked' : '' }}>
                        <label for="yes">Yes</label>
                    </div>
                    <div>
                        <input type="radio" name="active" value="0" id="no"
                            {{ old('active') == '0' ? 'checked' : '' }}>
                        <label for="no">No</label>
                    </div>
                </div>
                @error('active')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="col-md-3 mb-3">
      <small class="">Role :</small>
  </div>
  <div class="col-md-9 mb-3">
      <select class="form-select" name="role" aria-label="Default select example">
          @foreach ($roles as $role)
              <option value="{{ $role->name }}" {{ old('role') == $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
          @endforeach
      </select>
      @error('role')
          <div class="text-danger">{{ $message }}</div>
      @enderror
  </div> --}}
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</button>
        </div>
    </form>
</div>
</div>