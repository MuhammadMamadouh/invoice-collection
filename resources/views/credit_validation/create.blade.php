<form action="{{route('credit-managment.store')}}" method="POST">
@csrf
    <div class="overlay d-none"
        style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;">
    </div>
    <div class="position-fixed add-level-div d-none" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
        <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideAddLevelDiv()"
                style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
            <div class="my-2">
                <div class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname18"> {{__("Credit Limit")}}:</label>
                    </div>
                    <div class="col-8">
                        <div class="input-group">
                            <span class="input-group-text ">{{__("Until")}}</span>
                            <input type="number" name="credit_limit" value="{{old('credit_limit')}}" class="form-control " id="inputname18">
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div><!--24-->

            <div class="my-2">
                <div class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname20"> {{__("Validated By")}}:</label>
                    </div>
                    <div class="col-8">
                        <select name="user_id" class="form-select" id="inputname20" aria-label="Default select example">
                            <option value="" selected disabled>{{__("Select One")}}</option>
                            @foreach($users as $user)

                                <option value="{{$user->id}}">{{$user->first_name}}{{$user->last_name}} ({{$user->role->name}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div><!--24-->
            <div class="text-center mt-3">
                <button  type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> {{__("Add")}}</button>
            </div>
        </div>
    </div>
</form>
