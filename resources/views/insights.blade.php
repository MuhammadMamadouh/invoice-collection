@extends('app')
@section('content')
    <div class="overlay d-none"></div>
    <div class="contact-details d-none">
      <div class="row w-100" style="height: 100%">
        <div class="col-md-4 p-0 contact-responsive">
          <img
            src="./img/coding-1.jpg"
            style="height: 100%"
            class="img-fluid"
            alt="" />
        </div>
        <div class="col-md-8 p-3">
          <div class="d-flex justify-content-end">
            <i
              class="fa-solid fa-close text-light p-2 bg-danger"
              onclick="closeContact()"
              style="font-size: 15px; cursor: pointer; border-radius: 5px"></i>
          </div>
          <h2 class="text-center">Contact us</h2>
          <div class="row p-3">
            <div class="col-md-6">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Name *" />
            </div>
            <div class="col-md-6">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Company *" />
            </div>
            <div class="col-12">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="E-mail *" />
            </div>
            <div class="col-12">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Phone *" />
            </div>
            <div class="col-12">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Subject *" />
            </div>
            <div class="col-12">
              <textarea
                class="form-control mt-3 mb-3"
                placeholder="Message *"
                id="exampleFormControlTextarea1"
                rows="3"></textarea>
            </div>
            <div class="col-12 text-center">
              <div class="btn btn-primary">Send</div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <section class="p-4">
      <div class="container-fluid">
        <div
          class="d-flex flex-wrap justify-content-between align-items-center">
          <div></div>
          <div class="d-flex gap-1">
            <h5>Insights <i class="fa-solid fa-play"></i></h5>
            <p>Improve your data</p>
          </div>
          <div>
            <div class="d-flex gap-2">
              <p class="mt-1">Show definition</p>
              <label class="switch">
                <input type="checkbox" id="toggle" />
                <span class="slider round"></span>
              </label>
            </div>
            <div class="d-flex gap-2">
              <p class="mt-1">Number</p>
              <label class="switch">
                <input type="checkbox" id="toggle" />
                <span class="slider round"></span>
              </label>
              <p class="mt-1">amount</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="p-3 shadow-sm h-100">
              <div class="d-flex">
                <div>
                  <h5 class="fw-bold">Issue date > Due date</h5>
                  <p>Items <a href="">type</a> "invoice" whose issue date is subsequent to the due date</p>
                  <div class="btn btn-success"><i class="fa-solid fa-check"></i> no anomalies</div>
                </div>
                <div class="progress-circle" id="progress-circle-1">
                  <svg viewBox="0 0 100 100">
                    <circle class="circle-bg" cx="50" cy="50" r="40" />
                    <circle class="circle" cx="50" cy="50" r="40" />
                  </svg>
                  <div class="progress-value" id="progress-value-1">0%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="p-3 shadow-sm h-100">
              <div class="d-flex">
                <div>
                  <h5 class="fw-bold">Item type not associated</h5>
                  <p><a href="">Item types</a> from your ERP not associated to My DSO Manager's item types</p>
                  <div class="btn btn-warning text-white">1 item</div>
                </div>
                <div class="progress-circle" id="progress-circle-2">
                  <svg viewBox="0 0 100 100">
                          <circle class="circle-bg" cx="50" cy="50" r="40" />
      <circle class="circle" cx="50" cy="50" r="40" />
                  </svg>
                  <div class="progress-value" id="progress-value-2">7%</div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="p-3 shadow-sm h-100">
              <div class="d-flex">
                <div>
                  <h5 class="fw-bold">Ignored item without statuses</h5>
                  <p><a href="">Items ignored from the collection</a> process without any status applied</p>
                  <div class="btn btn-success">1 item</div>
                </div>
                <div class="progress-circle" id="progress-circle-3">
                  <svg viewBox="0 0 100 100">
                          <circle class="circle-bg" cx="50" cy="50" r="40" />
      <circle class="circle" cx="50" cy="50" r="40" />
                  </svg>
                  <div class="progress-value" id="progress-value-3"> 1%</div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="p-3 shadow-sm h-100">
              <div class="d-flex">
                <div>
                  <h5 class="fw-bold">Login > 17d (entity)</h5>
                  <p><a href="">Active users of the entity</a> whom haven't logged-in for more than 17 days</p>
                  <div class="btn btn-danger">6 users</div>
                </div>
                <div class="progress-circle" id="progress-circle-4">
                  <svg viewBox="0 0 100 100">
                          <circle class="circle-bg" cx="50" cy="50" r="40" />
      <circle class="circle" cx="50" cy="50" r="40" />
                  </svg>
                  <div class="progress-value" id="progress-value-4">86%</div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div
            class="col-12 d-flex justify-content-between flex-wrap align-items-center p-2 shadow-sm">
            <div>
              <p>Non-validated email (multi-entities)</p>
              <p>
                <a href="#">Active users of the multi-entities </a>whose email
                adress is not validated
              </p>
            </div>
            <div
              class="border m-auto m-md-0 d-flex justify-content-center align-items-center"
              style="
                width: 100px !important;
                height: 100px;
                border-radius: 50%;
              ">
              <div
                class="border"
                style="
                  width: 70px !important;
                  height: 70px;
                  border-radius: 50%;
                "></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 mt-4">
            <div class="shadow-sm d-flex justify-content-between">
              <i
                class="fa-solid fa-earth-oceania p-1 text-primary"
                style="font-size: 35px"></i>
              <h4 class="p-1">Clients</h4>
              <div></div>
            </div>
            <ul class="list-group mt-5">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Cras justo odio</h6>
                    <div class="w-25 text-center">
                        <i class="fa-solid fa-check text-success"></i>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>No contact</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Contact for collection not defined</h6>
                    <div class="w-25 text-center">
                        <i class="fa-solid fa-check text-success"></i>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Incorrect contact for collection</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>No collector</h6>
                    <div class="w-25 text-center">
                        <i class="fa-solid fa-check text-success"></i>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Balance = 0 but with open items</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Identical Legal Entity Indentifier</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Leader item not dunned (> 17d)</h6>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Creditor client with a debit position item</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
              </ul>
          </div>
          <div class="col-md-4 mt-4">
            <div class="shadow-sm d-flex justify-content-between">
              <i
                class="fa-solid fa-file p-1 text-primary"
                style="font-size: 35px"></i>
              <h4 class="p-1 ">Items</h4>
              <div></div>
            </div>
            <ul class="list-group mt-5">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Issue date > Due date</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Item type not associated</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-warning">1</div>
                        <div class="badge bg-warning">7%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Negative invoice</h6>
                    <div class="w-25 text-center">
                        <i class="fa-solid fa-check text-success"></i>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Positive Credit Note</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Inconsistent remaining amount</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Payment term > 17d</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-danger">500</div>
                        <div class="badge bg-danger">50%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Ignored item without statuses</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Items in dispute > 17d</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Promise to pay > 17d</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-success">20</div>
                        <div class="badge bg-success">3%</div>
                    </div>
                </li>
              </ul>
          </div>
          <div class="col-md-4 mt-4">
            <div class="shadow-sm d-flex justify-content-between">
              <i
                class="fa-solid fa-user p-1 text-primary"
                style="font-size: 35px"></i>
              <h4 class="p-1">Users</h4>
              <div></div>
            </div>
            <ul class="list-group mt-5">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Login > 17d (multi-entities)</h6>
                    <div class="w-25 text-center">
                        <i class="fa-solid fa-check text-success"></i>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Non-validated email (multi-entities)</h6>
                    <div class="w-25 text-center">
                        <i class="fa-solid fa-check text-success"></i>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Login > 17d (entity)</h6>
                    <div class="w-25 text-center">
                        <div class="badge bg-danger">500</div>
                        <div class="badge bg-danger">50%</div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <h6>Non-validated email (entity)</h6>
                    <div class="w-25 text-center">
                        <i class="fa-solid fa-check text-success"></i>
                    </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <!--scirpt Files-->
@endsection