@extends('layouts.dashboard.app')
@section('content')
    <section class="m-groups mt-3">
        <div class="container-fluid">
            <div class="t-manage text-center text-capitalize">
                <h4 class="">{{ __('Manage Risk') }}</h4>
            </div><!--t-manage-->
            <div class="s-c-notation d-flex ">
                <a href="#" class="border-primary border text-decoration-none m-3"
                    style="border-width:2px !important; padding: 5px 10px;"><i
                        class="fa-solid fa-gear"></i>{{ __('Setting') }}</a>
                <a href="{{ route('manage_risk.index') }}" class="text-dark text-decoration-none  m-3"
                    style="padding: 5px 10px;">{{ __('Manage Credit Notation') }}</a>
            </div><!--s-c-notation-->
        </div><!--container-->
    </section><!--manage-i-info-->
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    <section class="pay-info mt-3 mb-3">
        <form action="{{ route('settings.store') }}" method="POST">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 labl">
                        <label for="inputname1">{{ __('Credit insurance') }} :</label>
                    </div><!--left-->
                    <div class="col-md-7 inpoot my-2">
                        <input type="text" name='credit_insurance' value="{{ old('credit_insurance') }}"
                            class="form-control" id="inputname1" placeholder="World Insurer">
                        @error('credit_insurance')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div><!--right-->
                    <div class="col-md-5 labl my-2">
                        <label for="inputname2">{{ __('Credit limits validity duration') }} :</label>
                    </div><!--left-->
                    <div class="col-md-7 inpoot my-2">
                        <div class="input-group">
                            <select name="credit_limits_validity_duration" class="form-select" id="inputname2">
                                <option value="" selected disabled>{{ __('Select One') }}</option>
                                @foreach ($numberOfDays as $numbersOfDay)
                                    <option value="{{ $numbersOfDay }}">{{ $numbersOfDay }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text">{{ __('days') }}</span>
                        </div>
                        @error('credit_limits_validity_duration')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div><!--right-->
                    <div class="col-md-5 labl my-2">
                        <label for="inputname3">{{ __('Alert when the total receivable reaches') }} :</label>
                    </div><!--left-->
                    <div class="col-md-7 inpoot my-2">
                        <div class="input-group">
                            <select name="alert_when_the_total_receivable_reaches" class="form-select" id="inputname3">
                                <option value="" selected disabled>{{ __('Select One') }}</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="">--</option>
                                @foreach ($numbers as $numberReceivableReaches)
                                    <option value="{{ $numberReceivableReaches }}">{{ $numberReceivableReaches }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text">% {{ __('of the credit limit') }}</span>
                        </div>
                        @error('alert_when_the_total_receivable_reaches')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div><!--right-->
                    <div class="col-md-5 labl my-2">
                        <label for="inputname4">{{ __('Grace period') }} :</label>
                    </div><!--left-->
                    <div class="col-md-7 inpoot my-2">
                        <div class="input-group">
                            <select name="grace_period" class="form-select" id="inputname4">
                                <option value="" selected disabled>{{ __('Select One') }}</option>
                                @foreach ($numberOfDays as $numbersGracePeriod)
                                    <option value="{{ $numbersGracePeriod }}">{{ $numbersGracePeriod }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text">{{ __('days') }}</span>
                        </div>
                        @error('grace_period')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div><!--right-->
                    <div class="col-md-5 labl my-2">
                        <label for="inputname5">{{ __('Time limit for declaring a claim to the insurer') }} :</label>
                    </div><!--left-->
                    <div class="col-md-7 inpoot my-2">
                        <div class="input-group">
                            <select name='time_limit_for_declaring' class="form-select" id="inputname">
                                <option value="" selected disabled>{{ __('Select One') }}</option>
                                @foreach ($numberOfDays as $numbersLimitForDeclaring)
                                    <option value="{{ $numbersLimitForDeclaring }}">{{ $numbersLimitForDeclaring }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="input-group-text">{{ __('days compared to') }}</span>
                            <span class="input-group-text">
                                <select name='days_compared' class="form-select px-2 mx-3" id="inputname">
                                    <option value="" selected disabled></option>
                                    <option value="{{ 'due_date' }}">{{ __('Due Date') }}</option>
                                    <option value="{{ 'issued_date' }}">{{ __('Issued Date') }}</option>
                                </select>{{ __('of the invoice') }}
                            </span>
                        </div>
                        @error('days_compared')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-5 labl my-2">
                        <label for="inputname12"> {{ __('Amount Of Discretionary Limit') }} :</label>
                    </div>
                    <div class="col-md-7 inpoot my-2">
                        <div class="input-group">
                            <input type="number" class="form-control" id="inputname12"
                                name='amount_of_discretionary_limit'>
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                        </div>
                        @error('amount_of_discretionary_limit')
                            <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                </div><!--row-->
            </div><!--container-->
            <div class="container text-center my-5 ">
                <button class="btn btn-secondary my-1 btn-add-i"><i
                        class="fa-solid fa-check "></i>{{ __('Submit') }}</button>
            </div>
        </form>
    </section><!--pay-info-->
@endsection
