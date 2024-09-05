<div class="position-fixed edit-group-div d-none" id="edit-group-div-{{ $clientsGroup->id }}"
    style="top:10%; left: 50%; transform: translate(-50%); z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
        <span class="btn btn-secondary position-absolute" onclick="hideEditGroupDiv()"
            style="border-radius:50%; top: -20px; right: -20px;"><i class="fa-solid fa-close"></i></span>
        <div class="my-2">
            <form id="editGroupForm" class="d-flex flex-column" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" id="editGroupId" name="id">
                <input type="hidden" name="_method" value="PATCH"> 
                <div class="mb-3">
                    <label for="name">{{ _('Name:') }}</label>
                    <input type="text" class="form-control" id="name" name="en_name"
                        value="{{ old('en_name', $clientsGroup->en_name) }}">
                </div>
                <div class="d-flex gap-3">
                    <div class="flex-grow-1">
                        <label>{{ _('Clients:') }}</label>
                        <select multiple="" name="clients1[]" id="edit-clients-select" class="form-control">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">
                                    {{ $client->company_code . ' / ' . $client->company_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center m-auto">
                        <i class="fa-solid fa-circle-arrow-right text-primary"
                            style="font-size:40px; cursor: pointer;"></i>
                        <i class="fa-solid fa-circle-arrow-left text-primary mt-3"
                            style="font-size:40px; cursor: pointer;"></i>
                    </div>
                    <div class="flex-grow-1">
                        <label>{{ _('Associated with the group:') }}</label>
                        <select multiple id="edit-group-clients-select" class="form-control" name="group_clients[]">
                            @foreach ($clientsGroup->clients as $groupClient)
                                <option value="{{ $groupClient->id }}" selected>
                                    {{ $groupClient->company_code . ' / ' . $groupClient->company_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i>
                        {{ _('Modify') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
