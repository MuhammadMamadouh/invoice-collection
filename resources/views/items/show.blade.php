@extends('layouts.dashboard.app')
@section('content')
<div class="invoice" >
    <div class="bg-light invoice-first-{{$item->id}}">

        <div class="p-3 text-center"
            style="{{ $item->overdue >= 0 ? 'background-color: #e6d3d3' : 'background-color: #0dcaf0' }}">
            {{$item->order_date >= 0 ? __("Overdue") : __("Not due")}}</div>
        <div class="row m-0 p-3">
            <div class="col-lg-5 col-sm-6 text-start">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("PO No.")}}</p>
                    <p class="">{{ $item->po_no ?? '0' }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("File No")}}. :</p>
                    <p class="">{{ $item->file_no ?? '0' }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("ERP item type")}} :</p>
                    <p class="">{{$item->erp_item_type}}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Business case")}} :</p>
                    <p class="">{{$item->business_case}}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Sales manager")}} :</p>
                    <p class="">{{$item->sales_manager}}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Sales administrative")}} :</p>
                    <p class="">{{$item->sales_administrative }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Custom field")}} #1 :</p>
                    <p class="">{{$item->customer_custom_field_1 }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Custom field")}} #2 :</p>
                    <p class="">{{$item->customer_custom_field_2 }}</p>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-lg-5 col-sm-6 text-start">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Order date")}}:</p>
                    <p class="">{{$item->order_date }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("issue date")}} :</p>
                    <p class="">{{$item->issue_date }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Due date")}} :</p>
                    <p class="">{{$item->due_date }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Overdue")}} :</p>
                    <p class="">{{ $item->overdue ?? 0 }} {{__("days")}}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Remaining amount")}} :</p>
                    <p class="">{{ $item->remaining_amount_inc_tax }}</p>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="fw-bold">{{__("Initial amount")}} :</p>
                    <p class="">{{ $item->initial_amount_inc_tax }} € ({{$item->initial_amount_exc_tax}} € exc. Tax)</p>
                </div>
            </div>
            <div class="btn text-light btn-secondary px-2 w-auto m-auto" onclick="showInvioce2()">
                <i class="fa-solid fa-pen-to-square"></i>&ensp;{{__("Change status")}} > {{__("Add
                comment")}} > {{__("Set next action")}}
            </div>
        </div>
        <div class="row p-4 m-0">
            <div class="col-1"></div>
            <div class="col-lg-4 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-primary statusButton" onclick="statusFun()">
                    <i class="fa-solid fa-check"></i> {{__("Status history and Comments")}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-primary actionsButton" onclick="actionsFun()">
                    <i class="fa-solid fa-list"></i> {{__("Actions history")}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="m-1 w-100 btn btn-outline-primary associatedButton" onclick="associatedFun()">
                    <i class="fa-solid fa-link"></i> {{__("Associated files")}} <span class="badge bg-danger ms-1"
                        style="border-radius: 50%;">1</span>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    @include('clients.edit_items_data')
    <!--sec-1-->
    <div class="sec-1 pb-5 bg-white text-capitalize d-none " id="statusDiv">
        <div class="table-responsive pt-3" id="table-scroll">
            <table class="table px-2 mb-0">
                <thead>
                    <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                        <th>
                            <p>Date</p>
                        </th>
                        <th>
                            <p>Comments</p>
                        </th>
                        <th>
                            <p>Author</p>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                        <td>
                            <p>2024-06-04 11:00</p>
                        </td>
                        <td>
                            <p>Dispute resolved : Facture contestée à tort
                                Les factures sont dues, le contrat a bien été signé par le client et les PV de
                                réception transmits</p>
                            <div class="edit-auther d-none">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-user mb-2" style="font-size: 20px;"></i>
                                    <select class="form-select mb-2 w-100" aria-label="Default select example">
                                        <option selected disabled>Resolver :</option>
                                        <option value="1">Mike Anderson(Collector)</option>
                                        <option value="1">Nicolas Grayson(Collector)</option>
                                        <option value="1">Paul Mayer(Administrator)</option>
                                        <option value="1">Veronique Miguet(Credit Manager)</option>
                                        <option value="1">[None]</option>
                                    </select>
                                </div>
                                <textarea class="form-control"
                                    rows="4">Les factures sont dues, le contrat a bien été signé par le client et les PV de réception transmits</textarea>
                                <div class="text-start mb-2"><small class="text-black-50">Comments should be
                                        factual, objective and non offensive</small></div>
                                <div class="d-flex gap-2 justify-content-end">
                                    <span class="btn px-4 text-light p-1 btn-success" onclick="closeEditAuther()"><i
                                            class="fa-solid fa-floppy-disk" style="  font-size: 15px;"></i>
                                        Save</span>
                                    <span class="btn px-4 text-light p-1 btn-warning" onclick="closeEditAuther()"><i
                                            class="fa-solid fa-reply" style="  font-size: 15px;"></i> Cancel</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="mb-2 d-flex align-items-center gap-2 justify-content-center">
                                <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                                <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <span class="btn text-light p-1 px-2 btn-success" onclick="editAuther()"><i
                                        class="fa-solid fa-pen" style="  font-size: 15px;"></i></span>
                                <span class="btn text-light p-1 px-2 btn-danger"><i class="fa-solid fa-trash"
                                        style="  font-size: 15px;"></i></span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--sec-1-->


    <div class="bg-white p-4 " id="actionsDiv">
        <div class="row mt-2 px-4 text-center table-alerts-container">
            <div class=" col-md-2">
                <p class="fw-bold">Action date</p>
            </div>
            <div class=" col-md-2">
                <p class="fw-bold">Action type</p>
            </div>
            <div class="col-md-5 d-none d-md-block"></div>
            <div class="col-md-3">
                <p class="fw-bold">Action done by</p>
            </div>
        </div>
        <div class="text-center mb-3  p-2 p-md-4">
            <div class="row align-items-center" style="background-color: #006bff14">
                <div class="col-md-2 pt-2">
                    <div class="mouse-hovers d-flex justify-content-center">
                        <p class="fw-bold">13-5-2022 17:18</p>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex">
                        <div class="btn openModalBtn btn-primary w-100" style="border-radius:5px 0 0 5px ">
                            @ E-mail
                        </div>
                        <div class="btn btn-success" style="border-radius:0 5px 5px 0">
                            <i class="fa-solid fa-download"></i>
                        </div>
                    </div>
                    <p><a href="#">Relance par email n°1</a></p>
                </div>
                <div class="col-5"></div>
                <div class="col-md-3 mb-2 d-flex align-items-center gap-2 justify-content-center">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 pt-2">
                    <div class="mouse-hovers d-flex justify-content-center">
                        <p class="fw-bold">13-5-2022 17:18</p>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            phone
                        </div>
                    </div>
                    <p><a href="#">Relance par email n°1</a></p>
                </div>
                <div class="col-5"></div>
                <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center" style="background-color: #006bff14">
                <div class="col-md-2 pt-2">
                    <div class="mouse-hovers d-flex justify-content-center">
                        <p class="fw-bold">13-5-2022 17:18</p>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex">
                        <div class="btn openModalBtn btn-primary w-100" style="border-radius:5px 0 0 5px ">
                            @ E-mail
                        </div>
                        <div class="btn btn-success" style="border-radius:0 5px 5px 0">
                            <i class="fa-solid fa-download"></i>
                        </div>
                    </div>
                    <p><a href="#">Relance par email n°1</a></p>
                </div>
                <div class="col-5"></div>
                <div class="col-md-3 mb-2 d-flex align-items-center gap-2 justify-content-center">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 pt-2">
                    <div>
                        <p class="fw-bold mb-2">13-5-2022 17:18</p>
                        <div class="badge bg-light text-dark">COMPLETED ACTION</div>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div class="btn btn-light w-100" style="cursor:no-drop ;">
                            @ E-mail
                        </div>
                    </div>
                    <p class="text-black-50" style="font-size:12px !important; ">Dispute follow-up</p>
                </div>
                <div class="col-5"></div>
                <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center" style="background-color: #006bff14">
                <div class="col-md-2 pt-2">
                    <div>
                        <p class="fw-bold mb-2 text-decoration-line-through">13-5-2022 17:18</p>
                        <div class="badge bg-light text-dark">DELETED ACTION</div>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div class="btn btn-light w-100" style="cursor:no-drop ;">
                            @ E-mail
                        </div>
                    </div>
                    <p class="text-black-50 text-decoration-line-through" style="font-size:12px !important; ">
                        Promise to pay follow up</p>
                </div>
                <div class="col-5"></div>
                <div
                    class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center text-decoration-line-through">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 pt-2">
                    <div>
                        <p class="fw-bold mb-2 text-decoration-line-through">13-5-2022 17:18</p>
                        <div class="badge bg-light text-dark">DELETED ACTION</div>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div class="btn btn-light w-100" style="cursor:no-drop ;">
                            @ E-mail
                        </div>
                    </div>
                    <p class="text-black-50 text-decoration-line-through" style="font-size:12px !important; ">
                        Reminder by e-mail No. 1</p>
                </div>
                <div class="col-5"></div>
                <div
                    class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center text-decoration-line-through">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>

        </div>
    </div>



    <!--sec-2-->

    <div class="bg-white d-none " id="associatedDiv">
        <div class="table-responsive pt-3" id="table-scroll">
            <table class="table px-2 mb-0">
                <thead>
                    <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
                        <th>
                            <p>Associate file </p>
                        </th>
                        <th>
                            <p>Description</p>
                        </th>
                        <th>
                            <p>Size</p>
                        </th>
                        <th>
                            <p>Modification date </p>
                        </th>
                        <th>
                            <p>Author</p>
                        </th>
                    </tr>
                </thead>
            </table>
            <div class="bg-light text-center w-100 p-3 mt-0">{{__("No associated files")}}</div>
        </div>
        <div class="p-4">
            <div class="d-flex">
                <p>{{__("Associate files to items")}}</p>
                <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1"
                        style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
            </div>
            <div class="addFileDiv">

            </div>
            <div class="btn text-primary" onclick="addFileFunction()"><i
                    class="fa-solid fa-link"></i>&ensp;{{__("Add")}}
                {{__("File")}}</div><br>
            <div class="text-center myBtn d-none">
                <div class="btn btn-primary"><i class="fa-solid fa-check"></i> {{__("Submit")}}</div>
            </div>
        </div>
    </div>
    <!--sec-2-->
</div>
@endsection
