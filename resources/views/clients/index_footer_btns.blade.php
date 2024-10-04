<div class="row mb-3">
    <div class="col-md-2 col-4"></div>
    <div class="form-group col-md-4 col-8">
        <select class="form-select m-2" onfocus="this.size=9;" onblur="this.size=1;"
            onchange="this.size=1; this.blur();" aria-label=" Default select example">
            <option value="" selected disabled>Add To Group :</option>
            <option value="1">ATLANTIQue</option>
            <option value="2">Central</option>
            <option value="3">Clients douteux</option>
            <option value="3">Clients France</option>
            <option value="3">Clients Grands Comptes</option>
            <option value="3">Test 2</option>
            <option value="3">US Clients</option>
        </select>
    </div>
    <div class="form-group col-md-4 col-6">
        <select name="collection_scenario_id" class="m-2 form-select" data-placeholder="Collection scenario:"
            title="Collection scenario">
            <option value="" selected disabled>{{ __('Collection Scenarios') }}</option>
            @foreach ($collectionsScenario as $collection)
            <option value="{{ $collection->id }}">{{ $collection->en_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4 col-6">
        <select class="form-select m-2" aria-label="Default select example">
            <option selected disabled>{{ __('Collectors') }}</option>
            @foreach ($collectors as $collector)
            <option value="{{ $collector->id }}">{{ $collector->first_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4 col-6">
        <select class="form-select m-2" aria-label="Default select example">
            <option selected disabled>Associated a colleague :</option>
            <option value="1">Brad Jackson(Sales Manager)</option>
            <option value="1">Juse Durant(Sales Manager)</option>
            <option value="1">Paul Mayer(Sales Manager)</option>
            <option value="1">Thomas Smith(Executive Officer)</option>
            <option value="1">
                Vironica Campbell(Sales Administration)
            </option>
        </select>
    </div>
    <div class="form-group col-md-4 col-6">
        <select class="form-select m-2" aria-label="Default select example">
            <option selected disabled>Interactive emails :</option>
            <option value="1">Yes</option>
            <option value="1">No</option>
            <option value="1" class="text-primary"><a href="#"> Read more</a>
            </option>
        </select>
    </div>
    <div class="form-group col-md-4 col-5">
        <select class="form-select m-2" aria-label="Default select example">
            <option selected disabled>Late payment penalties :</option>
            <option value="1">Yes</option>
            <option value="1">No</option>
            <option value="1" class="text-primary"><a href="#"> Read more</a>
            </option>
        </select>
    </div>
    <div class="form-group col-md-4 col-5">
        <select class="form-select m-2" aria-label="Default select example">
            <option selected disabled>Recovery cost :</option>
            <option value="1">Yes</option>
            <option value="1">No</option>
            <option value="1" class="text-primary"><a href="#"> Read more</a>
            </option>
        </select>
    </div>
    <div class="col-2  ">
        <div class=" text-center m-auto align-items-center"><i class="fa-solid fa-trash btn-danger mt-2 p-1 text-light"
                style="font-size: 25px;cursor: pointer;border-radius: 5px;"></i></div>
    </div>
</div>
<div class="justify-content-end gap-1 d-flex mb-2">
    {{-- <div class="btn btn-outline-primary">Previus</div>
    <div class="btn btn-primary">1</div>
    <div class="btn btn-outline-primary">2</div>
    <div class="btn btn-outline-primary">3</div>
    <div class="btn btn-outline-primary">4</div>
    <div class="btn btn-outline-primary">5</div>
    <div class="btn btn-outline-primary">6</div>
    <div class="btn btn-outline-primary">Next</div> --}}
</div>
{{-- {{ $clientResource->links('pagination::bootstrap-5') }} --}}

{{-- ------------------- Excel button ------------------------------------------------ --}}

<div class="text-center mb-2">
    <div class="this-buttons">
        <div class="">
            <div class="btn-group">
                <button type="button" class="btn text-light"><span><i
                            class="fa-solid fa-download"></i>&ensp;</span>Export
                    this data to excel</button>
                <button type="button" class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <p>file fromat:</p>
                    </li>
                    <div class="radios-inp d-flex  justify-content-around">
                        <li class="dropdown-item d-flex"><input type="radio" name="fils" id="csv"><label
                                for="fils">csv</label></li>
                        <li class="dropdown-item d-flex"><input type="radio" name="fils" id="xls"><label
                                for="fils">xls</label>
                        </li>
                    </div>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <p>encoding:</p>
                    </li>
                    <select name="" style="width: 100%; font-size: 12px;">
                        <option value="" selected>UTF-8 (Unicode / US format)</option>
                        <option value="ISO-8859-1">ISO-8859-1 (Western European format)</option>
                        <option value="ISO-8859-2">ISO-8859-2 (Central European format)</option>
                        <option value="ISO-8859-3">ISO-8859-3 (South European format)</option>
                        <option value="ISO-8859-4">ISO-8859-4 (North European format)</option>
                        <option value="ISO-8859-16">ISO-8859-16 (Romanian format)</option>
                        <option value="ISO-2022-JP">ISO-2022-JP</option>
                        <option value="UTF-7">UTF-7</option>
                        <option value="BIG-5">BIG-5</option>
                        <option value="KOI8-R">KOI8-R</option>
                    </select>
                    </li>
                    <li class="mt-3 "><button type="button" class="btn" style="width: 100%;"><span><i
                                    class="fa-solidfa-download"></i>&ensp;</span>download</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
