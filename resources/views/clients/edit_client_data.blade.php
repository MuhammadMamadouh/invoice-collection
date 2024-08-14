<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="create-c-i holap-second bg-light d-none" id="edit-client-data-{{ $client->id }}">
        <div class="d-flex gap-3 justify-content-end text-center m-0 mb-3 p-3 w-100" style="background-color: #006bff">
            <span class="btn text-light p-1 px-2 btn-danger" onclick="closeHolap()"><i class="fa-solid fa-trash"
                    style="  font-size: 15px;"></i></span>
            <button type="submit"><span class="btn px-4 text-light p-1 btn-success"
                    onclick="closeEditHolap({{ $client->id }})"><i class="fa-solid fa-floppy-disk"
                        style="  font-size: 15px;"></i>
                    {{ __('Save') }}</span></button>
            <span class="btn px-4 text-light p-1 btn-warning" onclick="closeEditHolap({{ $client->id }})"><i
                    class="fa-solid fa-reply" style="  font-size: 15px;"></i>
                {{ __('Cancel') }}</span>
            <a href="editHolapDetails.html" class="btn px-2 text-primary p-1 btn-light" target="_blank"><i
                    class="fa-solid fa-maximize "style="  font-size: 15px;"></i></a>
        </div>
        <input type='hidden' name="id" value="{{ $client->id }}" class="form-control" id="inputname0">
        <div id="edit-client-data-{{ $client->id }}">
            <div class="row container-fluid">
                <div class="col-md-4  my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname0">{{ __('Company / Business name') }}
                                * :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="company_name"
                                value="{{ old('company_name', $client->company_name) }}" class="form-control"
                                id="inputname0">
                            @error('company_name')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--1-->
                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname1">{{ __('Payment term') }}:</label>
                        </div>
                        <div class="col-7 ">
                            <input type="text" name="payment_term"
                                value="{{ old('payment_term', $client->payment_term) }}" class="form-control"
                                id="inputname1">
                            @error('payment_term')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--3-->
                <div class="col-md-4 my-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <select class="form-select m-auto w-75" aria-label="Default select example">
                            <option selected disabled>Contact:</option>
                            <option value="1">Clients risqués (FR)</option>
                            <option value="1">Key accounts scenario (EN)
                            </option>
                            <option value="1">Modeles actions specifiques
                            </option>
                            <option value="1">Risky clients (En)</option>
                            <option value="1">
                                Scenario de relance standard (by default)
                            </option>
                            <option value="1">Standard collection scenario
                            </option>
                            <option value="1">Templates specific actions
                            </option>
                        </select>
                    </div>
                </div><!--2-->
                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname4">{{ __('Trading name') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name='trading_name'
                                value="{{ old('trading_name', $client->trading_name) }}" class="form-control"
                                id="inputname4">
                            @error('trading_name')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--4-->
                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname6"> {{ __('Payment mean') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="payment_mean"
                                value="{{ old('payment_mean', $client->payment_mean) }}" class="form-control"
                                id="inputname6">
                            @error('payment_mean')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--6-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname60"> {{ __('Role') }} *
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <select class="form-select w-100" id="inputname60" aria-label="Default select example">
                                <option value="1">Accountant</option>
                                <option value="1">Client</option>
                                <option value="1">Company</option>
                                <option value="1">Executive Officer</option>
                                <option selected>Other</option>
                            </select>
                        </div>
                    </div>
                </div><!--6-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname7"> {{ __('Company code') }} *
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="company_code"
                                value="{{ old('company_code', $client->company_code) }}" class="form-control"
                                id="inputname7">
                            @error('company_code')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--7-->
                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname50">
                                {{ __('Insurer reference') }}
                                :</label>

                        </div>
                        <div class="col-7">
                            <div class="input-group">
                                <input type="text" name="insurer_reference"
                                    value="{{ old('insurer_reference', $client->insurer_reference) }}"
                                    class="form-control" id="inputname50">
                                @error('insurer_reference')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div><!--9-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname9"> {{ __('Title') }} <span
                                    class="text-black-50">{{ __('(Mr, Mrs ...)') }}</span>
                                :</label>

                        </div>
                        <div class="col-7">
                            <div class="input-group">
                                <input type="text" name="title" value="{{old('title', $client->contacts->title)}}" class="form-control" id="inputname9">
                            </div>
                        </div>
                    </div>
                </div><!--9-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname5">
                                {{ __('Ultimate Parent Code') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="ultimate_parent_code"
                                value="{{ old('ultimate_parent_code', $client->ultimate_parent_code) }}"
                                class="form-control" id="inputname5">
                            @error('ultimate_parent_code')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--5-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname9"> {{ __('Insurer guarantee') }}
                                :</label>

                        </div>
                        <div class="col-7">
                            <div class="input-group">
                                <input type="number" name="insurer_guarantee"
                                    value="{{ old('insurer_guarantee', $client->insurer_guarantee) }}"
                                    class="form-control" id="inputname9">
                                @error('insurer_guarantee')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                                <span class="input-group-text">
                                    <i class="fa-solid fa-euro-sign"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!--9-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname100"> {{ __('Last Name') }} *
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="last_name" value="{{old('last_name', $client->contacts->last_name)}}" class="form-control" id="inputname100">
                        </div>
                    </div>
                </div><!--10-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname10"> {{ __('Legal ID') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="legal_id" value="{{ old('legal_id', $client->legal_id) }}"
                                class="form-control" id="inputname10">
                            @error('legal_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--10-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname91">
                                {{ __('Temporary guarantee') }}
                                :</label>

                        </div>
                        <div class="col-7">
                            <div class="input-group">
                                <input type="number" name="temporary_guarantee"
                                    value="{{ old('temporary_guarantee', $client->temporary_guarantee) }}"
                                    class="form-control" id="inputname91">
                                @error('temporary_guarantee')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                                <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div><!--9-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname101"> {{ __('First Name') }} *
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="first_name" value="{{old('first_name', $client->contacts->first_name)}}" class="form-control" id="inputname101">
                        </div>
                    </div>
                </div><!--10-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname13"> {{ __('VAT Number') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="vat_number"
                                value="{{ old('vat_number', $client->vat_number) }}" class="form-control"
                                id="inputname13">
                            @error('vat_number')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--13-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname222">{{ __('Start date') }}
                                :</label>

                        </div>
                        <div class="input-group">
                            <input type="date" name="start_date"
                                value="{{ old('start_date', $client->start_date) }}" class="form-control"
                                id="inputname222">
                            @error('start_date')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        </div>
                    </div>
                </div><!--2-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname555"> {{ __('Email') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="email" name="email" value="{{old('email', $client->contacts->email)}}" class="form-control" id="inputname555">
                        </div>
                    </div>

                </div><!--5-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname2">{{ __('Address') }} :</label>

                        </div>
                        <div class="col-7 ">
                            <textarea name="address" class="form-control" rows="3" id="inputname2">{{ old('address', $client->address) }}</textarea>
                            @error('address')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--2-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname2222">{{ __('End date') }}
                                :</label>

                        </div>
                        <div class="input-group">
                            <input type="date" name="end_date" value="{{ old('end_date', $client->end_date) }}"
                                class="form-control" id="inputname2222">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                            @error('end_date')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-5 ">
                                <label for="inputname12">
                                    {{ __('Other guarantees') }} :</label>

                            </div>
                            <div class="input-group">
                                <input type="number" name="other_guarantees"
                                    value="{{ old('other_guarantees', $client->other_guarantees) }}"
                                    class="form-control" id="inputname12">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-euro-sign"></i>
                                </span>
                                @error('other_guarantees')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div><!--12-->
                </div><!--2-->



                <div class="col-md-4 my-2">
                    <div class="d-flex justify-content-center my-2">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="email" name="copy_in_the_automatic_email"
                                value="0" {{old('copy_in_the_automatic_email', $client->contactDate->copy_in_the_automatic_email) == 1 ? 'checked' : ''}}>
                                <label class="form-check-label"
                                    for="email">{{ __('Email in copy in the automatic  emails') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-5 ">
                                <label for="inputname502"> {{ __('Phone') }}
                                    :</label>

                            </div>
                            <div class="col-7 ">
                                <input type="text" name="phone" value="{{old('phone', $client->contactDate->phone)}}" class="form-control" id="inputname502">
                            </div>
                        </div>
                    </div><!--5-->
                </div><!--5-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname8"> {{ __('Post Office Box') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="post_office_box"
                                value="{{ old('post_office_box', $client->post_office_box) }}" class="form-control"
                                id="inputname8">
                            @error('post_office_box')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--8-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname15">
                                {{ __('Credit Limit') }} :</label>

                        </div>
                        <div class="input-group">
                            <input type="number" name="credit_limit"
                                value="{{ old('credit_limit', $client->credit_limit) }}" class="form-control"
                                id="inputname15">
                            <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                            @error('credit_limit')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--15-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname504">{{ __('Mobile Phone') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text"  name="mobile_phone" value="{{old('mobile_phone', $client->contactDate->mobile_phone)}}"class="form-control" id="inputname504">
                        </div>
                    </div>
                </div><!--5-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname5">
                                {{ __('ZIP (or Postal) Code') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="postal_code"
                                value="{{ old('postal_code', $client->postal_code) }}" class="form-control"
                                id="inputname5">
                            @error('postal_code')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--5-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname505"> {{ __('Score') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="score" value='{{ old('score', $client->score) }}'
                                class="form-control" id="inputname505">
                            @error('score')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--5-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname506"> {{ __('Fax') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="fax" value='{{ old('fax', $client->fax) }}' class="form-control" id="inputname506">
                            @error('fax')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--5-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname11"> {{ __('City') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name='city' value="{{ old('city', $client->city) }}"
                                class="form-control" id="inputname11">
                            @error('city')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-5 ">
                                <label for="inputname14">
                                    {{ __('State / Province') }} :</label>

                            </div>
                            <div class="col-7 ">
                                <input type="text" name="state" value="{{ old('state', $client->state) }}"
                                    class="form-control" id="inputname14">
                                @error('state')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div><!--14-->
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-5 ">
                                <label for="inputname17"> {{ __('Country') }} :
                                </label>

                            </div>
                            <div class="col-7 ">
                                <input type="text" name="country" value="{{ old('country', $client->country) }}"
                                    class="form-control" id="inputname17">
                                @error('country')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div><!--17-->
                </div><!--11-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname18"> <a
                                    href="">{{ __('Late payment penalties?') }}</a></label>

                        </div>
                        <div class="col-7 d-flex justify-content-between align-items-center ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="late_payment_penalties"
                                    value='1'
                                    {{ old('late_payment_penalties', $client->late_payment_penalties) == 1 ? 'checked' : '' }}
                                    id="exampleCheckbox1">
                                <label class="form-check-label" for="exampleCheckbox1">{{ __('Yes') }}</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="late_payment_penalties"
                                    value='0'
                                    {{ old('late_payment_penalties', $client->late_payment_penalties) == 0 ? 'checked' : '' }}
                                    id="exampleCheckbox2">
                                <label class="form-check-label" for="exampleCheckbox2">{{ __('No') }}</label>
                            </div>
                            @error('late_payment_penalties')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-5 ">
                                <label for="inputname21"> <a href="">{{ __('Recovery cost?') }}</a></label>

                            </div>
                            <div class="col-7 d-flex justify-content-between ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="recovery_cost"
                                        value='1'
                                        {{ old('recovery_cost', $client->recovery_cost) == 1 ? 'checked' : '' }}
                                        id="exampleCheckbox1">
                                    <label class="form-check-label"
                                        for="exampleCheckbox1">{{ __('Yes') }}</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="recovery_cost"
                                        value='0'
                                        {{ old('recovery_cost', $client->recovery_cost) == 0 ? 'checked' : '' }}
                                        id="exampleCheckbox2">
                                    <label class="form-check-label"
                                        for="exampleCheckbox2">{{ __('No') }}</label>
                                </div>
                                @error('recovery_cost')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div><!--21-->
                    <div class=" my-2">
                        <div class="d-flex">
                            <div class="col-5 ">
                                <label for="inputname24"><a
                                        href="">{{ __('Interactive emails') }}?</a></label>

                            </div>
                            <div class="col-7 d-flex justify-content-between  ">
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="interactive_emails"
                                        value='1'
                                        {{ old('interactive_emails', $client->interactive_emails) == 1 ? 'checked' : '' }}
                                        id="exampleCheckbox1">
                                    <label class="form-check-label"
                                        for="exampleCheckbox1">{{ __('Yes') }}</label>
                                </div>
                                <div class="form-check d-flex">
                                    <input class="form-check-input" type="radio" name="interactive_emails"
                                        value='0'
                                        {{ old('interactive_emails', $client->interactive_emails) == 0 ? 'checked' : '' }}
                                        id="exampleCheckbox2">
                                    <label class="form-check-label "
                                        for="exampleCheckbox2">{{ __('No') }}</label>
                                </div>
                                @error('interactive_emails')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div><!--24-->
                </div><!--18-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 mt-2">
                            <label for="inputname2">{{ __('Comments') }} :</label>

                        </div>
                        <div class="col-7 ">
                            <textarea name="comments" class="form-control" rows="3" id="inputname2">{{ $client->contacts->comments }}</textarea>
                            <p class="text-black-50 m-0">
                                {{ __('Comments should be factual, objective and non offensive') }}
                            </p>
                            @error('comments')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--2-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname20"> {{ __('Website') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="website" value="{{ old('website', $client->website) }}"
                                class="form-control" id="inputname20">
                            @error('website')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--20-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname27">{{ __('Customer custom field #1') }}:</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="customer_custom_field_1"
                                value="{{ old('customer_custom_field_1', $client->customer_custom_field_1) }}"
                                class="form-control" id="inputname27">
                            @error('customer_custom_field_1')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--27-->


                <div class="col-md-4 my-2">
                    <div class="d-flex justify-content-center my-2">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="contact_for_collection"
                                    value="0"
                                    {{ old('contact_for_collection', $client->contacts->contact_for_collection) == 1 ? 'checked' : '' }}
                                    id="contact">
                                <label class="form-check-label"
                                    for="contact">{{ __('Contact for collection?') }}</label>
                                @error('contact_for_collection')
                                    <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div><!--5-->


                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname16"> {{ __('Business line') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="business_line"
                                value="{{ old('business_line', $client->business_line) }}" class="form-control"
                                id="inputname16">
                        </div>
                    </div>
                </div><!--16-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname30">{{ __('Customer custom field #2') }}:</label>

                        </div>
                        <div class="col-7 ">
                            <input type="text" name="customer_custom_field_2"
                                value="{{ old('customer_custom_field_2', $client->customer_custom_field_2) }}"
                                class="form-control" id="inputname30">
                            @error('customer_custom_field_2')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--30-->

                <div class="col-md-4 my-2">
                    <div class="d-flex justify-content-center">
                        <div>
                            <div class="btn btn-danger"><i class="fa-solid fa-trash"></i>
                                {{ __('Delete this contact') }}
                            </div>
                        </div>
                    </div>
                </div><!--5-->



                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname19">
                                {{ __('Collector') }} :</label>

                        </div>
                        <div class="col-7 ">
                            <select name="collector_id" class="form-select" id="inputname19">
                                <option selected disabled value="{{ $client->collector->id }}">
                                    {{ $client->collector->first_name }}</option>
                                @foreach ($collectors as $collector)
                                    <option value={{ $collector->id }}>
                                        {{ $collector->first_name }}</option>
                                @endforeach
                            </select>
                            @error('collector_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div><!--19-->
                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname22">
                                {{ __('Collection scenario') }}
                                :</label>

                        </div>
                        <div class="col-7 ">
                            <select name='collection_scenario_id' class="form-select" id="inputname19">
                                <option selected disabled value="{{ $client->collectionScenarios->id }}">
                                    {{ $client->collectionScenarios->en_name ?? '' }}
                                </option>
                                @foreach ($collectionsScenario as $collection)
                                    <option value={{ $collection->id }}>
                                        {{ $collection->en_name }}</option>
                                @endforeach
                            </select>
                            @error('collection_scenario_id')
                                <div class="alert text-danger" style="font-weight: bold;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div><!--22-->

                <div class="col-md-4 my-2">
                    <div class="d-flex">
                        <div class="col-5 ">
                            <label for="inputname24">{{ __('Block this account') }}?</label>
                        </div>
                        <div class="col-7 d-flex justify-content-between">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="block_this_account"
                                    id="block" value="1"
                                    {{ old('block_this_account', $client->block_this_account) == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="block">{{ __('Yes') }}</label>
                            </div>
                            <div class="form-check d-flex">
                                <input class="form-check-input" type="radio" name="block_this_account"
                                    id="block" value="0"
                                    {{ old('block_this_account', $client->block_this_account) == 0 ? 'checked' : '' }}>
                                <label class="form-check-label " for="block">{{ __('No') }}</label>
                            </div>
                        </div>
                    </div>
                </div><!--24-->

                <div class="my-4 d-flex justify-content-center gap-3">
                    <p class="text-black-50">
                        {{ __('Creation date in MY DSO MANAGER') }} :
                        {{-- {{ $client->created_at }} (G.M.T. +1) --}}
                    </p>
                    <p class="text-black-50">• {{ __('Modification date') }} :
                        {{-- {{ $client->updated_at }} --}}
                        (G.M.T. +1)</p>
                </div>

            </div><!--row-->
            <div class="row p-4 m-0 container-fluid">
                <div class="col-lg-4 col-sm-6">
                    <div class="m-1 w-100 btn btn-primary disputeButton" onclick="disputeFun()">
                        <i class="fa-solid fa-clock"></i>
                        {{ __('collection& dispute management') }}
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="m-1 w-100 btn btn-outline-primary riskButton" onclick="riskFun()">
                        <i class="fa-solid fa-bolt"></i> {{ __('Risk Report') }}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="m-1 w-100 btn btn-outline-primary indicatorsButton" onclick="indicatorsFun()">
                        <i class="fa-solid fa-chart-simple"></i>
                        {{ __('Reports & Indicators') }}
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="m-1 w-100 btn scenariosActionsmary historyButton" onclick="historyFun()">
                        <i class="fa-solid fa-bars-staggered"></i>
                        {{ __('History') }}
                    </div>
                </div>
            </div>
        </div>
    </div><!--create-c-i-->
</form>
