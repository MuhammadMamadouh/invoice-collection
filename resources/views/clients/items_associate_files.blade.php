    <div class="bg-white d-none " id="associatedDiv-{{ $item->id }}">
        <div class="table-responsive pt-3" id="table-scroll">
            <table class="table px-2 mb-0">
                <thead>
                    <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                        <th>
                            <p>{{ __('Associate file') }} </p>
                        </th>
                        <th>
                            <p>{{ __('Description') }}</p>
                        </th>
                        <th>
                            <p>{{ __('Size') }}</p>
                        </th>
                        <th>
                            <p>{{ __('Modification date') }} </p>
                        </th>
                        <th>
                            <p>{{ __('Author') }}</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($item->itemChangeStatus as $itemChange)
                        @foreach($itemChange->statusFiles as $statusFile)
                            <tr>
                                <td>
                                    <p>{{$statusFile->file_name}}</p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                            </tr>
                        @endforeach
                    @empty
                        <div class="bg-light text-center w-100 p-3 mt-0">{{ __('No associated files') }}</div>
                    @endforelse --}}
                </tbody>
            </table>
        </div>
        <div class="p-4">
            <div class="d-flex">
                <p>{{ __('Associate files to items') }}</p>
                <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1"
                        style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
            </div>
            <div class="addFileDiv">

            </div>
            <div class="btn text-primary" onclick="addFileFunction()"><i
                    class="fa-solid fa-link"></i>&ensp;{{ __('Add') }}
                {{ __('File') }}</div><br>
            <div class="text-center myBtn d-none">
                <div class="btn btn-primary"><i class="fa-solid fa-check"></i> {{ __('Submit') }}</div>
            </div>
        </div>
    </div>
