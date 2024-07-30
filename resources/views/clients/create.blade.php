@extends('layouts.dashboard.app')
@section('content')
    <section class="ring-info">
        <button class=" btn my-4 px-5 ">Use rather the import module to create your customers and invoices</button>
    </section><!--reing-info-->
    <section class="m-groups my-2">
        <div class="container-fluid">
            <div class="t-manage text-center text-capitalize">
                <h4 class="mt-3 mb-3">Create a client</h4>
            </div><!--t-manage-->
        </div><!--container-->
        <form class="d-flex" action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="create-c-i my-2">
                <div class="row">
                    <div class="col-md-4  my-2">
                        <div class="col-5 ">
                            <label for="inputname0">Company / Business name * : </label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname0" name='company_name'>
                            @error('company_name')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--1-->
                    <div div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname2">Address :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname2" name='address'>
                            @error('address')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--2-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname1">Payment term :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname1" name="payment_term">
                            @error('payment_term')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--3-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname4">Trading name :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname4" name="trading_name">
                            @error('trading_name')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--4-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname5"> ZIP (or Postal) Code :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname5" name="postal_code">
                            @error('postal_code')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--5-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname6"> Payment mean :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname6" name='payment_mean'>
                            @error('payment_mean')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--6-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname7"> Company code * :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname7" name='company_code'>
                            @error('company_code')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--7-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname8"> Post Office Box :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname8" name='post_office_box'>
                            @error('post_office_box')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--8-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname9"> Insurer guarantee :</label>
                        </div>
                        <div class="col-7">
                            <div class="input-group">
                                <input type="number" class="form-control" id="inputname9" name="insurer_guarantee">
                                <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                                @error('insurer_guarantee')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div><!--9-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname10"> Legal ID :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname10" name='legal_id'>
                            @error('legal_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--10-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname11"> City :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname11" name="city">
                            @error('city')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--11-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname12"> Other guarantees :</label>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" id="inputname12" name='other_guarantees'>
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                            @error('other_guarantees')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--12-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname13"> VAT Number :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname13" name='vat_number'>
                            @error('vat_number')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--13-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname14"> State / Province :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname14" name='state'>
                            @error('state')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--14-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname15">
                                Credit Limit :</label>
                        </div>
                        <div class="input-group">
                            <input type="number" class="form-control" id="inputname15" name='credit_limit'>
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                            @error('credit_limit')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--15-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname16"> Business line :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname16" name='business_line'>
                            @error('business_line')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--16-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname17"> Country :  </label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname17" name='country'>
                            @error('country')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--17-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname18"> Late payment penalties?</label>
                        </div>
                        <div class="col-7 d-flex justify-content-between align-items-center ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="exampleCheckbox1">
                                <label class="form-check-label" for="exampleCheckbox1" name="late_payment_penalties"
                                    value='1'>Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                                <label class="form-check-label" for="exampleCheckbox2" name="late_payment_penalties"
                                    value='0'>No</label>
                            </div>
                        </div>
                    </div><!--18-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname19"> Collector :</label>
                        </div>
                        <div class="col-7 ">
                            <select name="collector_id" class="form-select" id="inputname19">
                                <option value="1" selected disabled>Nicolas Grayson (collestor)</option>
                                <option value="2">Mike Anderson (Collector)</option>
                                <option value="3">Nicolas Grayson (Collector)</option>
                                <option value="4">Paul Mayer (Administrator)</option>
                                <option value=5>Véronique Miguet (Credit Manager)</option>
                            </select>
                            @error('collector_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--19-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname20"> Website :</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname20" name='website'>
                            @error('website')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--20-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname21"> Recovery cost?</label>
                        </div>
                        <div class="col-7 d-flex justify-content-between ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="exampleCheckbox1">
                                <label class="form-check-label" for="exampleCheckbox1" name="recovery_cost"
                                    value='1'>Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                                <label class="form-check-label" for="exampleCheckbox2" name="recovery_cost"
                                    value='0'>No</label>
                            </div>
                        </div>
                    </div><!--21-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname22"> Collection scenario :</label>
                        </div>
                        <div class="col-7 ">
                            <select name='collection_scenario_id' class="form-select" id="inputname19">
                                <option value="1" selected disabled>scenario do relance standare</option>
                                <option value="2">Clients publics (FR)</option>
                                <option value="3">Clients risqués (FR)</option>
                                <option value="4">Key accounts scenario (EN)</option>
                                <option value="5">Modèles actions spécifiques</option>
                                <option value="6">Risky clients (EN)</option>
                                <option value="7">Scénario de relance standard (by default)</option>
                                <option value="8">Standard Collection Scenario</option>
                                <option value="9">Templates specific actions</option>
                            </select>
                            @error('collection_scenario_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div><!--22-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname23"></label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control visually-hidden" id="inputname23">
                        </div>
                    </div><!--23-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname24">Interactive emails?</label>
                        </div>
                        <div class="col-7 d-flex justify-content-between  ">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" id="exampleCheckbox1">
                                <label class="form-check-label" for="exampleCheckbox1" name="interactive_emails" value="1">Yes</label>
                            </div>
                            <div class="form-check d-flex">
                                <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                                <label class="form-check-label " for="exampleCheckbox2" name="interactive_emails" value="0">No</label>
                            </div>
                        </div>
                    </div><!--24-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname25"> </label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control visually-hidden" id="inputname25">
                        </div>
                    </div><!--25-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname25"> </label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control visually-hidden" id="inputname25">
                        </div>
                    </div><!--26-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname27">Customer custom field #1:</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname27">
                        </div>
                    </div><!--27-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname25"> </label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control visually-hidden" id="inputname25">
                        </div>
                    </div><!--25-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname25"> </label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control visually-hidden" id="inputname25">
                        </div>
                    </div><!--26-->
                    <div class="col-md-4 my-2">
                        <div class="col-5 ">
                            <label for="inputname30">Customer custom field #2:</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" class="form-control" id="inputname30">
                        </div>
                    </div><!--30-->
                </div>
            </div>

            </div><!--row-->
            <div class="container text-center">
                <button type="submit" class="btn btn-primary my-5 btn-add-i">+ ADD</button>
            </div>
            </div>
        </form><!--create-c-i-->
    </section><!--m-groups-->
@endsection
@push('scripts')
    <script>
        new WOW().init();
    </script>
@endpush
