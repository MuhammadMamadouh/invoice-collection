@extends('app')
@section('content')
  <!--navbar-site-->

<!--navbar-site-->
@include('layouts.navbar')
<!--navbar-site-->

<style>
  .secure-info h4 {
    font-size: 1px !important;
  }
</style>

  <section class="m-groups mt-5">
    <div class="container-fluid">
      <div class=" text-center text-capitalize">
        <p><i class="fa-solid fa-lock "></i> Secure My Acount And User ACCOUNTS</p>
      </div><!--t-manage-->
      <section class=" secure-info my-5">
        <h3>For MY DSO MANAGER, the security of your data is a priority.</h3>
        <p>Besides our secured infrastructure, we offer several solutions to maximize the security of your connections:
        </p>
        <div class="secure-allow">
          <p><input type="checkbox" class="che bg-body-tertiary ">  Allow only some IP addresses to connect</p>
          <h5>     when you connect with a new ip address, a sms with a veriviction code will be sent</h5>
          <p><input type="checkbox" class="che bg-body-tertiary">  Force password change every  
            <select class="form-selec rounded" id="inputname10">
              <option value="" selected disabled>1 </option>
              <option value="">1</option>
              <option value="">2</option>
              <option value="">4</option>
              <option value="">5</option>
              <option value="">6</option>
              <option value="">7</option>
              <option value="">8</option>
              <option value="">9</option>
              <option value="">10</option>
              <option value="">11</option>
              <option value="">12</option>
            </select>  Month
          </p>
        </div><!--secure-allow-->
        <h4>Access restriction for some roles:</h4>
        <div class="secure-allo">
          <h5><input type="checkbox" class="che bg-body-tertiary ">   Role<span> « Collector » </span> can only access
            to accounts he is assigned to</h5>
          <h5><input type="checkbox" class="che bg-body-tertiary ">   Role<span> « Sales manager » </span> can only
            access to accounts he is assigned to</h5>
          <h5><input type="checkbox" class="che bg-body-tertiary ">   Role<span> « Sales administration » </span> can
            only access to accounts he is assigned to</h5>
          <h5><input type="checkbox" class="che bg-body-tertiary ">   Role<span> « Guest » </span> can only access to
            accounts he is assigned to</h5>

        </div><!--secure-allow-->
      </section><!--secure-info-->
      <section class="expiration">
        <div class="row my-5">
          <div class="col-md-6">
            <p>Expiration of links in the interactive emails :</p>
          </div><!--la1-->
          <div class="col-md-6">
            <select class="form-select" id="inputname10">
              <option value="" selected disabled>    month </option>
              <option value="1">1 day</option>
              <option value="7">1 week</option>
              <option value="14">2 weeks</option>
              <option value="21">3 weeks</option>
              <option value="30" selected="">1 month</option>
              <option value="60">2 months</option>
              <option value="90">3 months</option>
              <option value="120">4 months</option>
              <option value="150">5 months</option>
              <option value="180">6 months</option>
            </select>

          </div><!--ch1-->
        </div><!--row-->
        <div class="row my-5">
          <div class="col-md-6">
            <p>Expiration of links to your EDM (Electronic Document Management) :</p>
          </div><!--la1-->
          <div class="col-md-6">
            <select class="form-select" id="inputname10">
              <option value="" selected disabled>   month </option>
              <option value="7">1 week</option>
              <option value="14">2 weeks</option>
              <option value="21">3 weeks</option>
              <option value="30" selected="">1 month</option>
              <option value="60">2 months</option>
              <option value="90">3 months</option>
              <option value="120">4 months</option>
              <option value="150">5 months</option>
              <option value="180">6 months</option>
            </select>
          </div><!--ch1-->
        </div><!--row-->
        <div class="container  d-flex justify-content-center align-items-center mb-5">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Your account password * : 
                 
              </label>
            </div>
            <div class="col-auto">
              <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
                Must be 8-20 characters long.
              </span>
            </div>
          </div>
        </div>
        <div class="container text-center mb-5">
          <button class="btn btn-primary my-1 btn-add-i"><i class="fa-solid fa-check "></i>  Submit</button>
        </div>
      </section><!--expiration-->
    </div><!--container-->
  </section><!--m-groups-->
  @endsection