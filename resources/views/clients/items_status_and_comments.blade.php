    <div class="sec-1 pb-5 bg-white text-capitalize d-none " id="statusDiv-{{ $item->id }}">
        <div class="table-responsive pt-3" id="table-scroll">
            <table class="table px-2 mb-0">
                <thead>
                    <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                        <th>
                            <p>{{ __('Date') }}</p>
                        </th>
                        <th>
                            <p>{{ __('Comments') }}</p>
                        </th>
                        <th>
                            <p>{{ __('Author') }}</p>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session('message') }}</strong>
                    </div>
                @endif
                <tbody>
                    @php($newStatusItems = App\Models\ItemsChangeStatus::where('item_id', $item->id)->get())
                    @forelse($newStatusItems as $newStatusItem)
                        <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                            <td>
                                <p>{{ $newStatusItem->create_at }}</p>
                            </td>
                            <td>
                                <p>{{ Str::limit($newStatusItem->comments, 70) }}</p>
                                <div class="edit-auther d-none" id="edit-auther-{{ $newStatusItem->id }}">
                                    <form action="{{ route('items_change_status.update', $newStatusItem->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="d-flex align-items-center gap-3">
                                            <i class="fa-solid fa-user mb-2" style="font-size: 20px;"></i>
                                            <select name="resolver" class="form-select mb-2 w-100"
                                                aria-label="Default select example">
                                                <option value='{{ $newStatusItem->resolver }}' selected>
                                                    {{ __('Resolver') }} :
                                                    {{ $newStatusItem->statusResolver->first_name }}
                                                    {{ $newStatusItem->statusResolver->last_name }}({{ $newStatusItem->statusResolver->role->name }})
                                                </option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->first_name }}
                                                        {{ $user->last_name }}({{ $user->role->name }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <textarea name="comments" class="form-control" rows="4">{{ old('comments', $newStatusItem->comments) }}</textarea>
                                        <div class="text-start mb-2"><small
                                                class="text-black-50">{{ __('Comments should be factual, objective and non offensive') }}</small>
                                            @error('comments')
                                                <div class="alert text-danger" style="font-weight: bold;">
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="item_id" value="{{ $newStatusItem->item_id }}">
                                        <input type="hidden" name="status_id" value="{{ $newStatusItem->status_id }}">
                                        <input type="hidden" name="status_action_id"
                                            value="{{ $newStatusItem->status_action_id }}">
                                        <input type="hidden" name="created_by"
                                            value="{{ $newStatusItem->created_by }}">
                                        <input type="hidden" name="create_at" value="{{ $newStatusItem->create_at }}">
                                        <input type="hidden" name="visible_in"
                                            value="{{ $newStatusItem->visible_in }}">
                                        <input type="hidden" name="file" value="{{ $newStatusItem->file }}">
                                        <input type="hidden" name="desc" value="{{ $newStatusItem->desc }}">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button type="submit" class="btn px-4 text-light p-1 btn-success"
                                                onclick="closeEditAuther({{ $newStatusItem->id }})"><i
                                                    class="fa-solid fa-floppy-disk" style="  font-size: 15px;"></i>
                                                {{ __('Save') }}</button>
                                            <span class="btn px-4 text-light p-1 btn-warning"
                                                onclick="closeEditAuther({{ $newStatusItem->id }})"><i
                                                    class="fa-solid fa-reply" style="  font-size: 15px;"></i>
                                                {{ __('Cancel') }}</span>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <div class="mb-2 d-flex align-items-center gap-2 justify-content-center">
                                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;"
                                        alt="">
                                    <p class="fw-bold"><a
                                            href="#">{{ $newStatusItem->statusResolver->first_name }}</a>
                                        ({{ $newStatusItem->statusResolver->role->name }})
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <span class="btn text-light p-1 px-2 btn-success"
                                        onclick="editAuther({{ $newStatusItem->id }})"><i class="fa-solid fa-pen"
                                            style="  font-size: 15px;"></i></span>
                                    <span class="btn text-light p-1 px-2 btn-danger"><i class="fa-solid fa-trash"
                                            style="  font-size: 15px;"></i></span>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <td colspan=4>
                            <p>{{ __('No status were found for this item') }}</p>
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
