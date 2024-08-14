<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="create-c-i invoice-second bg-light d-none" id="show-edit-invoice-{{ $item->id }}">
        <div class="d-flex gap-3 justify-content-end text-center m-0 mb-3 p-3 w-100" style="background-color: #006bff">
            <span class="btn text-light p-1 px-2 btn-danger" onclick="closeInvoice({{ $item->id }})"><i
                    class="fa-solid fa-trash" style="  font-size: 15px;"></i></span>
            <button type="submit" class="btn px-4 text-light p-1 btn-success"
                onclick="closeEditInvoice({{ $item->id }})"><i class="fa-solid fa-floppy-disk"
                    style="  font-size: 15px;"></i> {{ __('Save') }}</button>
            <span class="btn px-4 text-light p-1 btn-warning" onclick="closeEditInvoice({{ $item->id }})"><i
                    class="fa-solid fa-reply" style="  font-size: 15px;"></i> {{ __('Cancel') }}</span>
            <a href="editInvoice.html" class="btn px-2 text-primary p-1 btn-light" target="_blank"><i
                    class="fa-solid fa-maximize "style="  font-size: 15px;"></i></a>
        </div>
        <div class="row container-fluid">
            <div class="col-md-6  my-2">
                <input type="hidden" name='id' value='{{ $item->id }}' class="form-control" id="inputname1">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname0">{{ __('ltem Type') }} * :</label>
                    </div>
                    <div class="col-7 ">
                        <select name="item_type_id" class="form-select" id="inputname0">
                            <option value="{{ $item->itemType->id ?? 4 }}" selected disabled>
                                {{ $item->itemType->en_name ?? 'a' }}</option>
                            @foreach ($itemTypes as $itemType)
                                <option value="{{ $itemType->id }}">{{ $itemType->en_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div><!--1-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5">
                        <label for="inputname2">{{ __('Order date') }} :</label>

                    </div>
                    <div class="input-group">
                        <input type="date" name="order_date" value="{{ old('order_date', $item->order_date) }}"
                            class="form-control" id="inputname2">
                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        @error('order_date')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--2-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname1">{{ __('Trans NO') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" name='trans_no' value='{{ old('trans_no', $item->trans_no) }}'
                            class="form-control" id="inputname1">
                        @error('trans_no')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--3-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname4">{{ __('Issue date') }} * :</label>

                    </div>
                    <div class="input-group">
                        <input type="date" name='issue_date' value='{{ old('issue_date', $item->issue_date) }}'
                            class="form-control" id="inputname4">
                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        @error('issue_date')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>pany_id

            </div><!--4-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname5">{{ __('Company code / company') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <select name="company_id" class="form-select" id="inputname5">
                            <option value="{{ $item->client->id }}" selected disabled>
                                {{ $item->client->company_code }} / {{ $item->client->company_name }} </option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->company_code }} /
                                    {{ $client->company_name }}</option>
                            @endforeach
                            @error('company_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>
                </div>

            </div><!--5-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname6">{{ __('Due date') }} * :</label>

                    </div>
                    <div class="input-group">
                        <input type="date" name="due_date" value="{{ old('due_date', $item->due_date) }}"
                            class="form-control" id="inputname6">
                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                    @error('due_date')
                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                    @enderror
                </div>

            </div><!--6-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname7"> {{ __('PO NO') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" name="po_no" value="{{ old('po_no', $item->po_no) }}"
                            class="form-control" id="inputname7">
                    </div>
                    @error('po_no')
                        <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                    @enderror
                </div>

            </div><!--7-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname8"> {{ __('Payment date') }} :</label>

                    </div>
                    <div class="input-group">
                        <input type="date" name="payment_date"
                            value="{{ old('payment_date', $item->payment_date) }}" class="form-control"
                            id="inputname8">
                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        @error('payment_date')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--8-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname9"> {{ __('File NO') }} :</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="file_no" value="{{ old('file_no', $item->file_no) }}"
                            class="form-control" id="inputname9">
                        @error('file_no')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--9-->

            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname10">{{ __('Currency') }} * :</label>

                    </div>
                    <div class="col-7 ">
                        <select name='currency_id' class="form-select" id="inputname10">
                            <option value="{{ $item->currency->id ?? 1 }}" selected disabled>
                                {{ $item->currency->en_name ?? 'Eur' }}€ </option>
                            @foreach ($currencies as $currency)
                                <option value="{{ $currency->id }}">{{ $currency->en_name }} €</option>
                            @endforeach
                            @error('currency_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </select>
                    </div>
                </div>

            </div><!--10-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname11">
                            {{ __('ERP item type') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <input name="erp_item_type" value="{{ old('erp_item_type', $item->erp_item_type) }}"
                            type="text" class="form-control" id="inputname11">
                        @error('erp_item_type')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--11-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname12"> {{ __('Initial amount exc. Tax') }} :</label>
                    </div>
                    <div class="input-group">
                        <input type="number" name="initial_amount_exc_tax"
                            value="{{ old('initial_amount_exc_tax', $item->initial_amount_exc_tax) }}"
                            class="form-control" id="inputname12">
                        <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        @error('initial_amount_exc_tax')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--12-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname13">{{ __('Business case') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" name="business_case"
                            value="{{ old('business_case', $item->business_case) }}" class="form-control"
                            id="inputname13">
                        @error('business_case')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--13-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname14"> {{ __('Initial amount inc. Tax') }} * :</label>

                    </div>
                    <div class="input-group">
                        <input type="number" name="initial_amount_inc_tax"
                            value="{{ old('initial_amount_inc_tax', $item->initial_amount_inc_tax) }}"
                            class="form-control" id="inputname14">
                        <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        @error('initial_amount_inc_tax')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--14-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname15">
                            {{ __('Sales manager') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" name="sales_manager"
                            value="{{ old('sales_manager', $item->sales_manager) }}" class="form-control"
                            id="inputname15">
                        @error('sales_manager')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--15-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname16">{{ __('Remaining amount exc. Tax') }} :</label>

                    </div>
                    <div class="input-group">
                        <input type="number" name="remaining_amount_exc_tax"
                            value="{{ old('remaining_amount_exc_tax', $item->remaining_amount_exc_tax) }}"
                            class="form-control" id="inputname16">
                        <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        @error('remaining_amount_exc_tax')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--16-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname17"> {{ __('Sales adrninistative') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" name='sales_administrative'
                            value="{{ old('sales_administrative', $item->sales_administrative) }}"
                            class="form-control" id="inputname17">
                        @error('sales_administrative')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--17-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname18">{{ __('Remaining amount inc. Tax') }} :</label>

                    </div>
                    <div class="input-group">
                        <input type="number" name='remaining_amount_inc_tax'
                            value="{{ old('remaining_amount_inc_tax', $item->remaining_amount_inc_tax) }}"
                            class="form-control" id="inputname18">
                        <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        @error('remaining_amount_inc_tax')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--18-->

            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname27">{{ __('Customer custom field #1') }}:</label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" name="customer_custom_field_1"
                            value="{{ old('customer_custom_field_1', $item->customer_custom_field_1) }}"
                            class="form-control" id="inputname27">
                        {{-- <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span> --}}
                        @error('customer_custom_field_1')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div><!--27-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname17"></label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" class="form-control visually-hidden" id="inputname17">
                    </div>
                </div>

            </div><!--17-->
            <div class="col-md-6 my-2">
                <div class="d-flex">
                    <div class="col-5 ">
                        <label for="inputname30">{{ __('Customer custom field #2') }} :</label>

                    </div>
                    <div class="col-7 ">
                        <input type="text" name="customer_custom_field_2"
                            value="{{ old('customer_custom_field_2', $item->customer_custom_field_2) }}"
                            class="form-control" id="inputname30">
                        @error('customer_custom_field_2')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname17"></label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control visually-hidden" id="inputname17">
                        </div>
                    </div>

                </div><!--17-->


            </div><!--30-->
            <div class="mt-4 d-flex justify-content-center gap-3">
                <p class="text-black-50">{{ __('Creation date in MY DSO MANAGER') }} : {{ $item->created_at }}
                    (G.M.T. +1)</p>
                <p class="text-black-50">• {{ __('Modification date') }} : {{ $item->updated_at }} (G.M.T. +1)</p>
            </div>
            <div class="d-flex justify-content-center gap-3 mb-4">
                <div class="btn btn-outline-success"><i
                        class="fa-solid fa-check"></i>{{ __(' Clear this transaction') }}
                </div>
                <div class="btn btn-outline-success">{{ __('Ignore this transaction in the collection') }}</div>
            </div>
        </div><!--row-->
        <div class="row p-4 m-0">
            <div class="col-1"></div>
            <div class="col-lg-4 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-primary statusButton" onclick="statusFun()">
                    <i class="fa-solid fa-check"></i> {{ __('Status history and Comments') }}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-primary actionsButton" onclick="actionsFun()">
                    <i class="fa-solid fa-list"></i> {{ __('Actions history') }}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-primary associatedButton" onclick="associatedFun()">
                    <i class="fa-solid fa-link"></i> {{ __('Associated files') }} <span class="badge bg-danger ms-1"
                        style="border-radius: 50%;">1</span>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</form>
