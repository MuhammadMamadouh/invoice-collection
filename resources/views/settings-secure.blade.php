@extends('app')
@section('content')
  <!--navbar-site-->

<!--navbar-site-->
<div class="navbar-all-site cairo-uniquifier">
  <div class="top-navbar ">
   <div class="container">
       <span class="inputicons"><i class="fa-solid fa-book"></i></span><input type="text" class="mt-2 mb-2" placeholder="Contact Us For Personalized Demo">
       <a href="settings.html" class="mt-4 mb-4"> <i class="fa-solid fa-house"></i><a href="settings.html"> My account</a></a>
       <a href="settings.html"><img src="img/person2.jpg" class="img-fluid" alt=""></a>
      <span class="mt-4 mb-3"><i class="fa-solid fa-power-off"></i><a href="#"> sign out</a></span>
   
  </div>
 </div>
<nav class="navbar navbar-expand-lg">
   <div class="container">
     <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt=""></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon">
       <span class="text-light"><i class="fa-solid fa-bars p-1"></i></span>
       </span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="globalView.html"><span><i class="fa-solid fa-eye"></i></span> global view</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="collection.html"><span><i class="fa-solid fa-clock"></i></span> collection</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="actionsToDo.html" >
            <span><i class="fa-solid fa-bolt "></i></span>risk
          </a>
        </li>
       
         <li class="nav-item">
           <a class="nav-link" href="allClients.html"><span><i class="fa-solid fa-globe"></i></span> clients</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="searchForAClient.html"><span><i class="fa-solid fa-magnifying-glass"></i></span> search</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" id="reportsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><span><i class="fa-solid fa-chart-simple"></i></span> reports</a>
           <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
            <li><a class="dropdown-item text-primary" href="reportsAgingBalance.html"><i class="fa-solid fa-chart-simple "></i> Aging balance</a></li>
            <li><a class="dropdown-item text-primary" href="reportsOverdueTrend.html"><i class="fa-solid fa-clock-rotate-left"></i> Overdue trend</a></li>
            <li><a class="dropdown-item text-primary" href="reportsDSO.html"><i class="fa-solid fa-chart-line"></i> DSO</a></li>
            <li><a class="dropdown-item text-primary" href="reportsItemsStatus.html"><i class="fa-solid fa-chart-pie"></i> Items status</a></li>
            <li><a class="dropdown-item text-primary" href="reportsDisputes.html"><i class="fa-solid fa-handshake-simple"></i> Disputes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="reportsSales.html"><i class="fa-solid fa-signal"></i> Sales</a></li>
            <li><a class="dropdown-item text-primary" href="reportsCashReciepts.html"><i class="fa-solid fa-money-bill-1-wave"></i> Cash receipts</a></li>
            <li><a class="dropdown-item text-primary" href="reportsCashForecast.html"><i class="fa-solid fa-wand-magic-sparkles"></i> Cash Forecast</a></li>
            <li><a class="dropdown-item text-primary" href="reportsPaymentSchedule.html"><i class="fa-solid fa-table-cells"></i> Payment Schedule</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="reportsRisk.html"><i class="fa-solid fa-bolt me-2"></i>Risk</a></li>
            <li><a class="dropdown-item text-primary" href="reportsPaymentProfile.html"><i class="fa-solid fa-flag me-2"></i>Payment profile</a></li>
          </ul>
         </li>
         <li class="nav-item dropdown active">
           <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fa-solid fa-gear"></i></span> setting
           </a>
           <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
            <li><a class="dropdown-item text-primary" href="settings-manage-users-account.html"><i class="fa-solid fa-users"></i> Manage users account</a></li>
            <li><a class="dropdown-item text-primary" href="settings-secure.html"><i class="fa-solid fa-lock"></i> Secure my account and user accounts</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="settings-import-export-data.html"><i class="fa-solid fa-rotate"></i> Import / Export your data</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-search.html"><i class="fa-solid fa-robot"></i> Manage search assign</a></li>
            <li><a class="dropdown-item text-primary" href="settings-create-client.html"><i class="fa-solid fa-plus"></i> Create a client</a></li>
            <li><a class="dropdown-item text-primary" href="settings-create-item.html"><i class="fa-solid fa-plus"></i> Create an item(invoice, credit note,...)</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-clients-group.html"><i class="fa-regular fa-folder-open"></i> Manage clients group</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-collection-scenario.html"><i class="fa-regular fa-clock"></i> Manage collection scenario</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-item-status.html"><i class="fa-regular fa-square-check"></i> Manage item status</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-payment-profile.html"><i class="fa-regular fa-flag"></i> Manage payment profiles</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-risk-settings.html"><i class="fa-solid fa-bolt"></i> Manage risk</a></li>
            <li><a class="dropdown-item text-primary" href="settings-manage-validation.html"><i class="fa-solid fa-computer"></i>Manage credit limits validation</a></li>
          </ul>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="help.html"><span><i class="fa-solid fa-circle-info"></i></span> helps</a>
         </li>
         <div class="icons-nav">
           <a href="insights.html"><i class="fa-solid fa-book"></i></a>
           <a class="position-relative" href="#" id="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
           <div class="search-container px-4 py-2 rounded" id="search-container">
            <p>Quick search :</p>
            <div class="input-group w-100 ">
                <input type="text" class="search-input form-control" placeholder="Search for a client / Search for an item (invoice, credit note, ...)...">
                <span class="input-group-text bg-primary"><a href="#"><i class="fa-solid fa-search text-white"></i></a></span>
              </div>
              <div class="d-flex "><input type="checkbox" class="mb-3 me-1 chec bg-body-tertiary">
                <p class="name-d">Include cleared items</p></div>
          </div>
         </div>
         </ul>
     </div>
   </div>
 </nav>
</div>
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