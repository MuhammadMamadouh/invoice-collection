@extends('layouts.app')
@section('content')

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
        <li class="nav-item active dropdown">
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
         <li class="nav-item dropdown">
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


   <!--scirpt Files-->

   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/searchBar.js"></script>
   <script src="js/wow.min.js"></script>
   <script>new WOW().init();</script>
   <script src="js/all.min.js"></script>
   <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
   <!-- <script src="js/main.js" ></script> -->
   <!--scirpt Files-->
</body>
</html>