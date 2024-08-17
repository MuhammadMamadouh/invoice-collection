<form action="{{ route('scoreCriteria.store') }}" method="POST">
    @csrf
    <div class="position-fixed add-criterion-div d-none w-75 " id="add-criterion-div-{{$score->id}}"
        style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
        <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideAddScoringDiv({{$score->id}})"
                style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
            <div class="my-2">
                <input type="hidden" name="score_id" value="{{$score->id}}" class="form-control"
                            id="inputname18">
                <div class="col-4 ">
                    <label for="inputname18"> {{ __('Title') }}:</label>
                </div>
                <div class="col-8">
                    <div class="input-group">
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                            id="inputname18">
                    </div>
                    @error('title')
                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                    @enderror
                </div>
            </div><!--24-->
            <div class="my-2">
                <div class="col-4 ">
                    <label for="inputname28"> {{ __('Description') }}:</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}"
                        id="inputname28">
                </div>
                @error('description')
                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                @enderror
            </div><!--24-->
            <div class="my-2">
                <div class="col-4 ">
                    <label for="inputname38"> {{ __('Weight') }}:</label>
                </div>
                <div class="col-8">
                    <select name="weight" class="form-select" id="inputname38">
                        <option value="" selected disabled>{{ __('Select One') }}</option>
                        @foreach ($numbers as $number)
                            <option value="{{ $number }}">{{ $number }}</option>
                        @endforeach
                    </select>
                </div>
                @error('weight')
                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                @enderror
            </div><!--24-->
            <div class="my-2">
                <div class="col-4 ">
                    <label for="inputname38"> {{ __('Answers') }}</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" name="answer" value="{{ old('answer') }}"
                        id="inputname28">
                    {{-- <div class="table-responsive" id="table-scroll">
                            <table class="table px-2 mb-0">
                                <thead>
                                    <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                                        <th>
                                            <p>Position</p>
                                        </th>
                                        <th>
                                            <p>Title</p>
                                        </th>
                                        <th>
                                            <p>Points</p>
                                        </th>
                                        <th>
                                            <p>Penalty</p>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="bg-info text-center w-100 p-3 mt-0">No answers for this criterion</div>
                        </div> --}}
                    {{-- <div class="text-center mt-4">
                            <div class="btn btn-primary"><i class="fa-solid fa-plus"></i> {{__("Add An Answer")}}</div>
                        </div> --}}
                </div>
                @error('answer')
                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                @enderror
            </div><!--24-->
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk me-2"></i> {{ __('Save') }}</button>
            </div>
        </div>
    </div>
</form>
