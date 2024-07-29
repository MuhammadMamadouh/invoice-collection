@extends('app')
@section('content')

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
            <a class="nav-link active" aria-current="page" href="globalView.html"><span><i class="fa-solid fa-eye"></i></span> global view</a>
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

<!-- <div class="message mt-5 mb-5" id="meesage">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span id="close" class="text-end"><i class="fa-solid fa-xmark"></i></span>
        <p class="text-dark text-center mt-5 mb-5">Would You Like To Learn Morre About My DSO Manager And <br> Have A Personalized Demo?
        </p>
      </div>
      <div class="button-click d-flex justify-content-around text-dark">
        <button><i class="fa-solid fa-check"></i> YES</button>
        <button> no,thank you</button>
      </div>
    </div>
  </div>
</div> -->

<!--start-2two-inputs-->
<div class="titles-ourchange text-center mt-5 mb-5 text-capitalize">
  <div class="container">
    <h3>change email address </h3>
  </div>
</div>
<form>
<div class="three-inputs">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> E-mail: <span>*</span></p>
        <input type="password" id="password-1" class="mt-3 mb-3" required>
      <span class="s-passwword" id="togglepassword-1" ><i class="fa-regular fa-eye"></i></span>
      </div>
      
      <div class="change change-2 text-capitalize d-flex">
        <p class="mt-3 mb-3">your account password: <span>*</span></p>
        <input type="password" id="password-2" class="mt-3 mb-3" required>
       <span class="s-passwword" id="togglepassword-2"><i class="fa-regular fa-eye"></i></span>
      </div>
    </div>
  </div>
  <div class="modify text-center mt-5 mb-5 ">
   <button value="submit"><span> <i class="fa-solid fa-check"></i></span> modify</button>
  </div>
  </div>
</div>
</form>

<!--start-3three-inputs-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/searchBar.js"></script>
    <script src="js/script-2.js"></script>
  </body>
</html>
