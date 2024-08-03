@extends('layouts.dashboard.app')
@section('content')
<!--navbar-site-->

<!--navbar-site-->
</section>
<section class="ring-info">
    <button class=" btn my-4 px-5 ">Use rather the import module to create your customers and invoices</button>
</section>
<!--reing-info-->
<section class="m-groups my-2">
    <div class="container-fluid">
        <div class=" text-center text-capitalize">
            <h4 class="hfour-clients">Create an item (invoice, credit note, ...)</h4>
        </div>
        <!--t-manage-->
    </div>
    <!--container-->
    <div class="create-c-i my-2">
        <div class="row">
            <form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6  my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="item_type_id">{{__("ltem type")}}* :</label>
                        </div>
                        <div class="col-7 ">
                            <select class="form-select" id="item_type_id" name="item_type_id">
                                @foreach($item_types as $item_types)
                                    <option value="{{ $item_types->id }}">{{ $item_types->en_name }}</option>
                                @endforeach
                            </select>
                            @error('item_type')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <!--1-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname2">{{__("Order date")}} :</label>

                        </div>
                        <div class="input-group">
                            <input type="date" class="form-control" id="inputname2" name="order_date">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        </div>
                    </div>
                    @error('order_date')
                    {{ $message }}
                    @enderror

                </div>
                <!--2-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname1">{{__("Trans NO")}} :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname1" name="trans_no">
                        </div>
                        @error('trans_no')
                        {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname4">{{__("Issue date")}} *:</label>
                        </div>
                        <div class="input-group">
                            <input type="date" class="form-control" id="inputname4" name="issue_date">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        </div>
                        @error('issue_date')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <!--4-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname5">{{__("Company code / company")}} :</label>

                        </div>
                        <div class="col-7 ">
                            <select class="form-select" id="company_id" name="company_id">
                                <option value="" selected disabled></option>
                                @foreach ($companies as $company)
                                    <option value="{{$company->id}}">{{$company->company_code . ' / ' . $company->company_name}} </option>
                                @endforeach
                            </select>
                            @error('client_id') {{ $message }}  @enderror
                        </div>
                    </div>
                </div>
                <!--5-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="due_date">{{__("Due date")}} * :</label>
                        </div>
                        <div class="input-group">
                            <input type="date" class="form-control" id="due_date" name="due_date">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        </div>
                    </div>
                    @error('due_date')
                    {{ $message }}
                    @enderror
                </div>
                <!--6-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="po_no">{{__(" PO NO")}} :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="po_no" name="po_no">
                        </div>
                    </div>
                    @error('po_no')
                    {{ $message }}
                    @enderror
                </div>
                <!--7-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="payment_date">{{__(" Payment date")}} :</label>
                        </div>
                        <div class="input-group">
                            <input type="date" class="form-control" id="payment_date" name="payment_date">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        </div>
                        @error('payment_date') {{ $message }}  @enderror
                    </div>

                </div>
                <!--8-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="file_no">{{__(" File NO ")}}":</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" id="file_no" name="file_no">
                        </div>
                    </div>
                    @error('file_no') {{ $message }}  @enderror
                </div>
                <!--9-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname10">{{__("Currency ")}}* :</label>
                        </div>
                        <div class="col-7 ">
                            <select class="form-select" id="currency_id" name="currency_id">
                                @foreach($currencies as $currency)
                                <option value="{{ $currency->id }}">{{ $currency->en_name }}</option>
                                @endforeach
                            </select>
                            @error('currency_id') {{ $message }}  @enderror
                        </div>
                    </div>
                </div>
                <!--10-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="erp_item_type">
                                {{__(" ERP item type ")}}":</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="erp_item_type" name="erp_item_type">
                        </div>
                    </div>
                    @error('erp_item_type') {{ $message }}  @enderror

                </div>
                <!--11-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="Initial_amount_exc_tax"> {{__("Initial amount exc. tax")}} :</label>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" id="Initial_amount_exc_tax" name="initial_amount_exc_tax">
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        </div>
                    </div>
                    @error('Initial_amount_exc_tax') {{ $message }}  @enderror

                </div>
                <!--12-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="business_case">{{__("Business case")}} :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname13" name="business_case">
                        </div>
                    </div>
                    @error('business_case') {{ $message }}  @enderror
                </div>
                <!--13-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname14">{{__(" Initial amount inc. Tax ")}} * :</label>

                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" id="inputname14" name="initial_amount_inc_tax">
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        </div>
                    </div>
                    @error('initial_amount_inc_tax') {{ $message }}  @enderror
                </div>
                <!--14-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="sales_manager">
                                {{__("Sales manager")}} :
                            </label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="sales_manager" name="sales_manager">
                        </div>
                    </div>
                    @error('sales_manager') {{ $message }}  @enderror
                </div>
                <!--15-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="remaining_amount_exc_tax">{{__("Remaining amount exc. tax")}} :</label>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" id="remaining_amount_exc_tax" name="remaining_amount_exc_tax">
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        </div>
                    </div>
                    @error('remaining_amount_exc_tax') {{ $message }}  @enderror
                </div>
                <!--16-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="sales_administrative">{{__(" Sales administrative")}} :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="sales_administrative" name="sales_administrative">
                        </div>
                    </div>
                    @error('sales_administrative') {{ $message }}  @enderror
                </div>
                <!--17-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="remaining_amount_inc_tax">{{__("Remaining amount inc. tax")}} :</label>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" id="remaining_amount_inc_tax" name="remaining_amount_inc_tax">
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="text-danger pull-right"> @error('remaining_amount_inc_tax') {{ $message }}  @enderror </span>
                    </div>
                </div>

                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="customer_custom_field_1">{{__("Customer custom field #1")}}:</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="customer_custom_field_1" name="customer_custom_field_1">
                        </div>
                    </div>
                    @error('customer_custom_field_1') {{ $message }}  @enderror
                </div>
                <!--17-->
                <div class="col-md-6 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="customer_custom_field_2">{{__("Customer custom field #2")}}:</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="customer_custom_field_2" name="customer_custom_field_2">
                        </div>
                    </div>
                    @error('customer_custom_field_2') {{ $message }}  @enderror
                </div>
                <!--30-->
                <div class="container text-center">
                    <button class="btn btn-primary my-1 btn-add-i" type="submit">{{__("create")}}</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
