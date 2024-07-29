@extends('app')
@section('content')
@include('layouts.navbar')
<!--navbar-site-->

<!--navbar-site-->
<section class="mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6"><a href="reportsRisk.html" class="m-1 w-100 btn btn-outline-primary p-3"><i class="fa-solid fa-chart-simple "></i> Report Risk</a></div>
      <div class="col-lg-3 col-md-4 col-sm-6"><a href="actionsToDo.html" class="m-1 w-100 btn btn-outline-primary p-3" id="actionButton"><i class="fa-solid fa-hand-point-right"></i> Action to do <span class="badge bg-danger">184</span></a></div>
      <div class="col-lg-3 col-md-4 col-sm-6"><a href="actionsHistory.html" class="m-1 w-100 btn btn-primary p-3"><i class="fa-solid fa-bars-staggered"></i> Actions history</a></div>
      <div class="col-lg-3 col-md-4 col-sm-6"><a href="alerts.html" class="m-1 w-100 btn btn-outline-primary p-3"><i class="fa-solid fa-bell"></i> My Alerts <span class="badge bg-danger">200</span></a></div>
    </div>
    <hr>
    <div>
      <form class="row justify-content-center">
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
          <select class="form-select m-2" aria-label="Default select example">
            <option selected disabled>Action Type :</option>
            <option value="1">Credit Limit Review</option>
            <option value="2">Customer Exceeding -> Total Receivable > 100% Credit Limit</option>
            <option value="3">Manual Action</option>
          </select>
        </div>
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2" onfocus='this.size=9;' onblur='this.size=1;' onchange='this.size=1; this.blur();' aria-label=" Default select example">
              <option value="" selected disabled>Clients Group :</option>
              <option value="1">ATLANTIQue</option>
              <option value="2">Central</option>
              <option value="3">Clients douteux</option>
              <option value="3">Clients France</option>
              <option value="3">Clients Grands Comptes</option>
              <option value="3">Clients Mass market</option>
              <option value="3">Clients OSP</option>
              <option value="3">Clients PME</option>
              <option value="3">Clients Publics</option>
              <option value="3">Clients Risques</option>
              <option value="3">Clients Speciaux</option>
              <option value="3">Clients VIP</option>
              <option value="3">ClIENT_MEDIPREMA</option>
              <option value="3">France Contentieux</option>
              <option value="3">Group Alias</option>
              <option value="3">Group Elec</option>
              <option value="3">Group Imprimeurs</option>
              <option value="3">Group Industrie</option>
              <option value="3">Magasins de villa</option>
              <option value="3">Market Place</option>
              <option value="3">Public</option>
              <option value="3">Relance team back office</option>
              <option value="3">Retail</option>
              <option value="3">Salomon</option>
              <option value="3">Test 2</option>
              <option value="3">US Clients</option>
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6">
            <select class="form-select m-2 w-100" aria-label="Default select example">
              <option selected disabled>Collector :</option>
              <option value="1">Mike Anderson(Collector)</option>
              <option value="1">Nicolas Grayson(Collector)</option>
              <option value="1">Paul Mayer(Administrator)</option>
              <option value="1">Veronique Miguet(Credit Manager)</option>
              <option value="1">[None]</option>
            </select>
          </div>
        <div class=" col-lg-3 col-md-4 col-sm-6 text-center ">
          <button type="button" class="btn btn-primary m-2" onclick="toggleRows(this)"><i class="fa-solid fa-chevron-down" id="toggleIconDown" style="transition:all 0.6s ;"></i></button>
        </div>
      </form>
      <form class="row d-none toggle-row">
        <div class="form-group col-lg-3 col-md-4 col-sm-6">
          <select class="form-select m-2" aria-label="Default select example">
            <option selected disabled>Associated With Client :</option>
            <option value="1">Brad Jackson(Sales Manager)</option>
            <option value="1">Juse Durant(Sales Manager)</option>
            <option value="1">Paul Mayer(Sales Manager)</option>
            <option value="1">Thomas Smith(Executive Officer)</option>
            <option value="1">Vironica Campbell(Sales Administration)</option>
          </select>
        </div>
        <div class="form-group col-md-4 col-sm-6">
            <select class="form-select m-2" aria-label="Default select example">
              <option value="" selected disabled>Customers Custom Field #1 :</option>
              <option value="1">01</option>
              <option value="2">02</option>
              <option value="3">[None]</option>
              <option value="3">[Not Empty]</option>
            </select>
          </div>
          <div class="form-group col-md-4 col-sm-6">
            <select class="form-select m-2 w-100" aria-label="Default select example">
              <option selected disabled>Customers Custom Field #2 :</option>
              <option value="1">AZ</option>
              <option value="2">BI</option>
              <option value="3">[None]</option>
              <option value="3">[Not Empty]</option>
            </select>
          </div>
      </form>
    </div>
    <div class="row text-center" style="background-color: #006bff14">
        <p class="p-1 mt-3">
            No history found
        </p>
      </div>
  </div>
</section>

@endsection