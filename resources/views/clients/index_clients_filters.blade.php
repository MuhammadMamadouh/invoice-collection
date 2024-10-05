<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ route('clients.index') }}" class="m-1 w-100 btn btn-secondary p-3">
                    <i class="fa-solid fa-earth-asia"></i> &ensp; {{ __('All clients') }} &ensp;
                    <span class="badge bg-white text-secondary">{{ $client_count }}</span>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" class="m-1 w-100 btn btn-outline-secondary text-dark p-3 text-secondary" id="actionButton">
                    <i class="fa-solid fa-building text-primary"></i> &ensp; {{ __('My clients') }} &ensp;
                    <span class="badge bg-white text-secondary">4</span>
                </a>
            </div>
            <a href="#" class="col-lg-3 col-md-4 col-sm-6">
                <div class="m-1 w-100 btn btn-light text-secondary p-3">
                    <i class="fa-solid fa-magnifying-glass"></i> &ensp; {{ __('Search for client') }}
                </div>
            </a>
        </div>
        <hr />
        <div>
            <form class="row mt-1">
                <div class="form-group col-md-4 col-sm-6">
                    <select class="form-select m-2" onfocus="this.size=9;" onblur="this.size=1;"
                        onchange="this.size=1; this.blur();" aria-label=" Default select example">
                        <option value="" selected disabled>{{ __('Clients Group') }} :</option>
                        @foreach ($clientGroups as $client_group)
                        <option value="{{ $client_group->id }}">{{ $client_group->en_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    <select name="collection_scenario_id" class="m-2 form-select"
                        data-placeholder="Collection scenario:" title="Collection scenario">
                        <option selected disabled>{{ __('Collection Scenarios') }}</option>
                        @foreach ($collectionsScenario as $collection)
                        <option value="{{ $collection->id }}">{{ $collection->en_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    <select name='collector_id' class="form-select m-2" aria-label="Default select example">
                        <option selected disabled>{{ __('collectors') }}</option>
                        @foreach ($collectors as $collector)
                        <option value="{{ $collector->id }}">{{ $collector->first_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    <select class="form-select m-2" aria-label="Default select example">
                        <option selected disabled>{{ __('Associated With Client') }} :</option>
                        @foreach ($users as $user)
                        <option value="1">{{ $user->first_name . ' ' . $user->last_name }}(Sales Manager)
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    <select name="onlyCountry" class="m-2 form-select" data-placeholder="Country:" title="Country">
                        <option value="0" selected disabled>Country :</option>
                        <option value="1">Afghanistan</option>
                        <option value="2">Albania</option>
                        <option value="243">Zimbabwe</option>
                    </select>
                </div>
            </form>
            <hr />
        </div>
    </div>
</section>
