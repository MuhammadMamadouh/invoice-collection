@extends('layouts.dashboard.app')
@section('content')
    <div class="overlay d-none"
        style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;">
    </div>
    <div class="position-fixed new-status-div d-none w-75" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
        <div class="p-3 m-auto bg-white shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideNewStatusDiv()"
                style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
            <div class="my-2">
                <form action="{{ route('item-status.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex align-items-center">
                        <div class="col-4 ">
                            <label for="inputname205">{{ __('Type Of Status') }} :</label>
                        </div>
                        <div class="col-8">
                            <select class="form-select" id="inputname205" name="type_of_status"
                                aria-label="Default select example">
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->en_name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
            </div>
            <!--24-->
            <div class="my-2">
                <div class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname18"> {{ __('Status') }}:</label>
                    </div>
                    <div class="col-8">
                        <div class="input-group">
                            <input type="text" class="form-control " name="status" id="inputname18">
                        </div>
                    </div>
                </div>
            </div>
            <!--24-->

            <div class="my-2">
                <div class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname20">{{ __('No. Of Days Follow-Up Action') }} <a href="DSOInformation.html"><i
                                    class="p-1 fa-solid fa-question bg-primary text-light"
                                    style="border-radius: 50%;width: 18px;height: 22px;"></i></a>:</label>
                    </div>
                    <div class="col-8">
                        <select id="inputname20" class="form-select" name="follow_up_days">
                            @for ($i = 1; $i <= 365; $i++)
                                <option value="{{ $i }}">+ {{ $i }} days</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            <!--24-->
            <div class="mt-3 text-center">
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> {{ __('Add') }}</button>
            </div>
        </div>
        </form>
    </div>
    <div class="position-fixed edit-status-div d-none w-75"
        style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
        <div class="p-3 m-auto bg-white shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideNewStatusDiv()"
                style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
            <div class="my-2">
                <form class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname205"> Type Of Status:</label>
                    </div>
                    <div class="col-8">
                        <select class="form-select" id="inputname205" aria-label="Default select example">
                            <option value="1" selected></option>
                            <option value="1">Dispute</option>
                            <option value="1">Dispute Resolved</option>
                            <option value="1">Litigation</option>
                            <option value="1">On Going</option>
                            <option value="1">Promise To Pay</option>
                        </select>
                    </div>
                </form>
            </div>
            <!--24-->
            <div class="my-2">
                <form class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname18"> {{ __('Status:') }}</label>
                    </div>
                    <div class="col-8">
                        <div class="input-group">
                            <input type="text" class="form-control " id="inputname18">
                        </div>
                    </div>
                </form>
            </div>
            <!--24-->

            <div class="my-2">
                <form class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname20">{{ __('No. Of Days Follow-Up Action') }}<a href="DSOInformation.html"><i
                                    class="p-1 fa-solid fa-question bg-primary text-light"
                                    style="border-radius: 50%;width: 18px;height: 22px;"></i></a>:</label>
                    </div>
                    <div class="col-8">
                        <select id="inputname20" class="form-select">
                            @for ($i = 1; $i <= 365; $i++)
                                <option value="{{ $i }}">+ {{ $i }} days</option>
                            @endfor
                        </select>
                    </div>
                </form>
            </div>
            <!--24-->
            <div class="my-2">
                <form class="d-flex align-items-center">
                    <div class="col-4 ">
                        <label for="inputname20">{{ __('Active:') }}</label>
                    </div>
                    <div class="col-8">
                        <div class=" checks-bx d-flex">
                            <input type="radio" name="active" id="yes">
                            <label for="yes">{{ __('yes') }}</label>
                            <input type="radio" name="active" id="no">
                            <label for="no">{{ __('no') }}</label>
                        </div>
                    </div>
                </form>
            </div>
            <!--24-->

            <div class="mt-3 text-center">
                <div class="btn btn-success"><i class="fa-solid fa-check"></i>{{ __(' Modify') }}</div>
            </div>
        </div>
    </div>



    <div class="mt-3 mb-3 text-center our-titles text-capitalize">
        <div class="container">
            <h4>{{ __('Manage Item Status (Dispute,...)') }}</h4>
        </div>
    </div>

    <div class="mt-3 mb-3 plus-button text-end">
        <div class="container-fluid">
            <div class="btn btn-secondary" onclick="showNewStatusDiv()"><span><i class="fa-solid fa-plus"></i></span>
                {{ __('New Status') }}</div>
        </div>
    </div>
    <!--start-desc-->
    <!-- <div class="mt-2 mb-4 two-contents">
        <div class="container-fluid">
          <div class="mb-2 row">
            <div class="text-center col-md-2 col-3">
              <h6>Type of status</h6>
            </div>
            <div class="text-center col-md-8 col-6">
              <h6>Status</h6>
            </div>
        </div>
          <div class="backg-content">
          <div class="row ">
            <div class="col-lg-4">
              <p class="mt-3 mb-3 ">Dispute</p>
            </div>
            <div class="py-3 col-lg-8 col-sm-12 col-md-12 ">
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Litige administratif</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Litige administratif France</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Litige livraison</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Litige matériel manquant</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Litige prix</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Litige qualité</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Missing PO</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
            <div class="content-text">
              <ul class="d-flex">
                <li class=""><a href="#" onclick="showEditStatusDiv()">Price dispute</a></li>
                <span>(follow-up action +7 days)</span>
              </ul>
            </div>
          </div>
          </div>
        </div>
      </div> -->
    <!-- </div>

    <div class="mt-2 mb-3 two-contents">
        <div class="container-fluid">
        <div class="row ">
          <div class="col-lg-4">
            <p class="mt-3 mb-3 ">Dispute resolved</p>
          </div>
          <div class="py-3 col-lg-8 col-sm-12 col-md-12">
          <div class="content-text">
            <ul class="d-flex">
              <li class=""><a href="#" onclick="showEditStatusDiv()">Facture contestée à tort</a></li>
              <span>(follow-up action +7 days)</span>
            </ul>
          </div>
          <div class="content-text">
            <ul class="d-flex">
              <li class=""><a href="#" onclick="showEditStatusDiv()">Litige résolu</a></li>
              <span>(follow-up action +7 days)</span>
            </ul>
          </div>

        </div>
        </div>
      </div>
    </div> -->


    <!-- <div class="mt-2 mb-5 two-contents">
      <div class="container-fluid">
        <div class="backg-content">
        <div class="row ">
          <div class="col-lg-4">
            <p class="mt-3 mb-3 ">Litigation</p>
          </div>
          <div class="py-3 col-lg-8 col-sm-12 col-md-12">
          <div class="content-text">
            <ul class="d-flex">
              <li class=""><a href="#" onclick="showEditStatusDiv()">A passer en pertes et profits</a></li>
              <span>(follow-up action +7 days)</span>
            </ul>
          </div>
          <div class="content-text">
            <ul class="d-flex">
              <li class=""><a href="#" onclick="showEditStatusDiv()">Créance contentieuse</a></li>
              <span>(follow-up action +7 days)</span>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div> -->

    <!--
    <div class="mt-2 mb-3 two-contents text-capitalize">
      <div class="container-fluid">
        <div class="dirc">
      <div class="row ">
        <div class="col-lg-4">
          <p class="mt-3 mb-3 ">on going</p>
        </div>
        <div class="py-3 col-lg-8 col-sm-12 col-md-12">
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Avoir emis</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Eganfes client</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Enovi de duplicate de facture</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Mise en demeure envoyee</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Prorogation d'echeance</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
      </div>
      </div>
    </div>
    </div>
    </div> -->




    <!-- <div class="mt-2 two-contents mb- text-capitalize">
      <div class="container-fluid">
        <div class="backg-content">
      <div class="row ">
        <div class="col-lg-4">
          <p class="mt-3 mb-3 ">Promise to pay</p>
        </div>
        <div class="py-3 col-lg-8 col-sm-12 col-md-12">
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Echéancier de paiement validé</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Payment received</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Promesse de règlement</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
        <div class="content-text">
          <ul class="d-flex">
            <li class=""><a href="#" onclick="showEditStatusDiv()">Promise to pay</a></li>
            <span>(follow-up action +7 days)</span>
          </ul>
        </div>
      </div>
      </div>
    </div> -->
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <p>{{ __('Type of status') }} </p>
            </div>

            <div class="col-6">
                <p>{{ __('Status') }}</p>
            </div>
        </div>
        @php $count = 0; @endphp
        @foreach ($groupedStatusItems as $typeOfStatus => $items)
            @if ($count % 2 == 0)
                <div class="backg-content">
                    <div class="row">
                    @else
                        <div style="padding: 10px 10px;">
                            <div class="row">
            @endif
            <div class="col-4">
                <p>{{ $typeOfStatus ? \App\Models\ItemStatusType::where('id', $typeOfStatus)->first()->en_name : 'N/A' }}</p>
            </div>

            <div class="col-8">
                @foreach ($items as $item)
                    <li>{{ $item->status }} (follow-up action +{{ $item->follow_up_days }} days)</li>
                @endforeach

            </div>
    </div>
    </div> <br /><br />
    @php $count++; @endphp
    @endforeach
    </div>
    </div>
@endsection
