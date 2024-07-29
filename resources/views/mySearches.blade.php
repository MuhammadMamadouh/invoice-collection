@extends('app')
@section('content')
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
             <li class="nav-item active">
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
    <section class="container-fluid">
        <div class="s-c-notation  my-5" style="border-bottom:solid 1px #ada9a9">
            <div class="row gajj text-center ">
              <div class="col-md-4 my-3">
                <a href="searchForAClient.html" class=" text-decoration-none d-btm text-dark"><i class="fa-solid fa-search px-1"></i>search for a client</a>
              </div>
              <div class="col-md-5 my-3">
                <a href="searchForAnItem.html" class="text-dark text-decoration-none  d-btm " style="color: #6b6565;"><i class="fa-solid fa-search px-1"></i>search for an item(invoice,credit note,...)</a>
              </div>
              <div class="col-md-3 my-3">
                <a href="#" class="text-primary text-decoration-none b-btm "><i class="fa-solid fa-star px-1"></i>My Searches
                </a>
              </div>
            </div>
          </div><!--s-c-notation-->
    </section>
    <div class="mt-3 my-search container-fluid">
        <div class="container-fluid text-dark">
              <div class="row text-center">
                <div class="col"><p class="fw-bold">Sequence</p></div>
                <div class="col-2"><p class="fw-bold">Name of your search</p></div>
                <div class="col"><p class="fw-bold">Selection criteria</p></div>
                <div class="col"><p class="fw-bold">View</p></div>
                <div class="col"><p class="fw-bold">Edit</p></div>
                <div class="col"><p class="fw-bold">Delete</p></div>
            </div>
            <div class="row align-items-center pt-1 text-center ">
                <div class="col"><i class="fa-solid fa-bars" style="font-size: 22px;"></i> 1</div>
                <div class="col-2"><p class="fw-bold">Clients France</p></div>
                <div class="col">
                  <p class="fw-bold">Country, Associated with client</p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </p>
                </div>
            </div>
            <div class="row align-items-center pt-1 text-center">
                <div class="col"><i class="fa-solid fa-bars" style="font-size: 22px;"></i> 1</div>
                <div class="col-2"><p class="fw-bold">Clients France</p></div>
                <div class="col">
                  <p class="fw-bold">Country, Associated with client</p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </p>
                </div>
            </div>
            <div class="row align-items-center pt-1 text-center">
                <div class="col"><i class="fa-solid fa-bars" style="font-size: 22px;"></i> 1</div>
                <div class="col-2"><p class="fw-bold">Clients France</p></div>
                <div class="col">
                  <p class="fw-bold">Country, Associated with client</p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </p>
                </div>
            </div>
            <div class="row align-items-center pt-1 text-center">
                <div class="col"><i class="fa-solid fa-bars" style="font-size: 22px;"></i> 1</div>
                <div class="col-2"><p class="fw-bold">Clients France</p></div>
                <div class="col">
                  <p class="fw-bold">Country, Associated with client</p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </p>
                </div>
            </div>
            <div class="row align-items-center pt-1 text-center">
                <div class="col"><i class="fa-solid fa-bars" style="font-size: 22px;"></i> 1</div>
                <div class="col-2"><p class="fw-bold">Clients France</p></div>
                <div class="col">
                  <p class="fw-bold">Country, Associated with client</p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
                  </p>
                </div>
                <div class="col">
                  <p class="fw-bold">
                      <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                  </p>
                </div>
            </div>
        </div>
    </div>

    <!--scirpt Files-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="js/all.min.js"></script>
    <script src="./js/risk.js"></script>
    <script src="js/searchBar.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="./js/chart-10.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
    <!-- <script src="js/main.js" ></script> -->
    <!--scirpt Files-->
  </body>
</html>
