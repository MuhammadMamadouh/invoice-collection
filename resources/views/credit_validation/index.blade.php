@extends('layouts.dashboard.app')
@section('content')
    @include('credit_validation.create')
    <div class="our-tiles mt-5">
        <div class="container">
            <h4 class="text-capitalize text-center onmouse-6">{{ __('Manage Credit limits validation') }}</h4>
            {{-- <span class="conttt-6">payment profile < payeur correct / <br> average payeur > <br> average days beyond <br>
                    items +28days (< 10days) </span> --}}
        </div>
    </div>

    <div class="change-sec-with-button d-flex mb-2">
        <div class="container">
            <button class="scenarios-active p-2" onclick="tableOne()" id="activeOne"><span><i
                        class="fa-solid fa-flag"></i></span> {{ __('Validation levels') }}</button>
            <button onclick="tableTwo()" class="p-2" id="activeTwo"><span><i class="fa-solid fa-building"></i></span>
                {{ __('Requests history') }}</button>
            <button onclick="tableThree()" class="p-2" id="activeThree"><span><i class="fa-solid fa-gear"></i></span>
                {{ __('Settings') }}</button>
        </div>
    </div>

    <!--three-buttons-->
    <!-- <div class="four-buttons text-capitalize mb-2">
        <div class="container">
            <a href="" class="text-capitalize validation">validation level</a>
            <a href="#" class="request-history">Request history</a>
            <a href="#"><span><i class="fa-solid fa-gear"></i></span>settings</a>
        </div>
        </div> -->
    <!--three-buttons-->
    <!--the-table-->

    <!--table-Two-->
    <section class="removtabels" id="tabOne">
        <div class="removetabelstwo container-fluid mt-2">
            <div class="end-button text-end">
                <div class="container mt-3 mb-3">
                    <div class="text-capitalize btn btn-secondary" onclick="showAddLevelDiv()"><i
                            class="fa-solid fa-plus px-1"></i></span> {{ __('Add A Validation Level') }}</button>
                    </div>
                </div>
                <div class="the-table-title text-capitalize">
                    <div class="row mb-2">
                        <div class="col-md-2 col-4 text-center">
                            <h6>{{ __('credit limit') }}</h6>
                        </div>
                        <div class="col-md-8 col-6 text-center">
                            <h6>{{ __('validation by') }}</h6>
                        </div>
                    </div>
                    <div class="the-table text-capitalize ">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    @forelse($limitsValidations as $key => $limitsValidation)
                                        <div class="units mt-2 mb-2">
                                            <p class="mt-2 mb-2  text-light">1 until <span
                                                    class="dark"><strong>{{ $limitsValidation->credit_limit }}€</strong></span>
                                            </p>
                                            <div class="desc-units mt-2 mb-2">
                                                <span class="fw-bold "><img src="images/per.png" class="img-fluid"
                                                        alt="">
                                                    {{ $limitsValidation->user->first_name }}
                                                    {{ $limitsValidation->user->last_name }}
                                                    ({{ $limitsValidation->user->role->name }})
                                                </span>
                                                <a href="#" class="">{{ $limitsValidation->user->email }}</a>
                                            </div>
                                            <div class="delete-and-edit mt-2 mb-2 ">
                                                <div class="btn btn-secondary" onclick="showEditLevelDiv({{$limitsValidation->id}})"><span><i
                                                            class="fa-solid fa-pen"></i></span></div>
                                                <form action="{{route('credit-managment.destroy', $limitsValidation->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                    <button type="submit" class="btn btn-danger"><span><i class="fa-solid fa-trash"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <hr>
                                        @include('credit_validation.edit', [$limitsValidation->id])
                                    @empty
                                        {{ __('No Data Yet ...') }}
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--the-table-->
    <div class="tables-two-validations d-none " id="tabTwo">
        <div class="d-flex justify-content-end container-fluid">
            <div class="form-group col-md-4 col-sm-6">
                <select class="form-select m-2" aria-label="Default select example">
                    <option value="" selected disabled>
                        Credit limit validation request :
                    </option>
                    <option value="1">Validated</option>
                    <option value="2">Refused / the credit limit is not validated</option>
                    <option value="3">Waiting for validation</option>
                </select>
            </div>
        </div>
        <div class="two-sec-start-and-end mt-3 mb-3 d-flex justify-content-between container">
            <div class="form-group d-flex align-items-center">
                <select class="form-select w-auto m-2" aria-label="Default select example">
                    <option selected value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="134">134</option>
                </select>
                <div>actions display on 134</div>
            </div>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" aria-describedby="emailHelp"
                        placeholder="Multi-columns search" />
                </div>
            </form>
        </div>
        <div class="table-responsive" id="table-scroll">
            <table class="table  px-2">
                <thead>
                    <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                        <th>
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <h6>Request date</h6>
                            </div>

                        </th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <h6>request status</h6>
                            </div>

                        </th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <h6>credit limit</h6>
                            </div>

                        </th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <h6>Request Made By</h6>
                            </div>

                        </th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <h6>validators</h6>
                            </div>

                        </th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <h6>company code</h6>
                            </div>

                        </th>
                        <th>
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                <h6>company / Business name</h6>
                            </div>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center gray-colors-validations">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span> Canceled</p>
                        </td>
                        <td>
                            <p> 100,000 €</p>
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a></p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>
                    </tr>

                    <tr class="text-center ">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span> Canceled</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>
                    <tr class="text-center gray-colors-validations">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span>Canceled</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a></p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>
                    <tr class="text-center">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span> Canceled</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a></p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>
                    <tr class="text-center green-colors-red">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p class="text-danger"><span><i class="fa-solid fa-x"></i></span> Refused</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p class=""><i class="fa-solid fa-x text-danger"></i> Mike Anderson</p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>
                    <tr class="text-center green-colors-validations">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a></p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>
                    <tr class="text-center green-colors-validations">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a></p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>
                    <tr class="text-center green-colors-validations">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a></p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>
                    <tr class="text-center green-colors-validations">

                        <td>
                            <p>2024-06-07</p>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
                        </td>
                        <td>
                            <p> 100,000 €
                        </td>
                        <td class="d-flex">
                            <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
                        </td>
                        <td>
                            <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">Asimal
                                    Manager</a></p>
                        </td>
                        <td><a href="#">360108</a></td>
                        <td><a href="#">Dsmstlouis</a></td>


                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="settings-tables-show d-none" id="tabThree">
        <div class="container-fluid">
            <div class="setingone mt-3 mb-3 d-flex justify-content-between">
                <h6>If no validation took place </h6>
                <div class="col-lg-6" style="font-size: 13.7px;">If no validation took place
                    <select name="nbJoursExpiration">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </select>
                    days after the request then <select name="actionExpiration">
                        <option value="cancel" selected="selected">Cancel</option>
                        <option value="valid">Validate</option>
                    </select> it
                </div>
            </div>
            <div class="setingone mt-3 mb-3 d-flex justify-content-between">
                <p>Request validation of lower levels?</p>
                <div class="col-lg-6">
                    <div class=" checks-bx d-flex ">
                        <input type="radio" name="yes" id="yes">
                        <label for="yes">yes</label>
                        <input type="radio" name="yes" id="no">
                        <label for="no">no</label>
                    </div>
                </div>
            </div>
            <div class="valid-buttons text-center mt-3 mb-3">
                <a href="#" class="btn btn-secondary  "><span><i class="fa-solid fa-check"></i></span> submit</a>
            </div>
        </div>
    </div>
@endsection
