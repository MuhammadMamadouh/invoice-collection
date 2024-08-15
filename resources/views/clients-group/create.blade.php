<div class="position-fixed create-group-div d-none" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
        <span class="btn btn-secondary position-absolute" onclick="hideCreateGroupDiv()"
            style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
        <div class="my-2">
            <h3 class="text-center mb-3">{{_("Create a group")}}</h3>
            <form class="d-flex flex-column align-items-start mb-3" method="post"
                action="{{ route('clients-group.store') }}" id="create-group-form">
                @csrf
                <div class="col-12 mb-3">
                    <label for="inputname18">{{_(" Name:")}}</label>
                    <div class="input-group">
                    </div>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-3 mb-3">
                    <div>
                        <label>{{_("Clients:")}}</label>
                        <select multiple="" name="clients1[]" id="clients-select" class="form-control">
                            @foreach ($clients as $client )
                            <option value="{{$client->id}}">{{$client->company_code . ' / ' . $client->company_name}}
                            </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="text-center m-auto">
                        <i class="fa-solid fa-circle-arrow-right text-primary"
                            style="font-size:40px ;cursor: pointer;"></i>
                        <i class="fa-solid fa-circle-arrow-left text-primary mt-3"
                            style="font-size:40px ;cursor: pointer;"></i>
                    </div>
                    <div>
                        <label>{{_("Associated with the group :")}}</label>
                        <select multiple id="group-clients-select" class="form-control" name="group_clients[]">
                        </select>
                    </div>
                </div>
            </form>
            {{-- <div class="row formGroup_clients">

                <div class="col-xs-2 col2" style="padding:0px 10px 0px 10px">
                    <a href="javascript:addClient()" class="btn btn-default form-control"
                        style="height:108px;padding-top:40px"><span class="glyphicon glyphicon-chevron-right"
                            aria-hidden="true"></span></a>
                    <a href="javascript:removeClient()" class="btn btn-default form-control"
                        style="height:108px;padding-top:40px;margin-top:4px"><span
                            class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                </div>
                <div class="col-xs-6 col2">
                    <input type="hidden" name="clients2" value="">
                    <select multiple="" id="select2" class="form-control" style="height:220px">
                    </select>
                </div>
            </div> --}}
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success" form="create-group-form"><i class="fa-solid fa-plus"></i>
                {{_("Add")}}</button>
        </div>
    </div>
</div>

