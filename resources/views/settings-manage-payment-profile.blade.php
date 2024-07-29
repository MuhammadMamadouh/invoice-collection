@extends('app')
@section('content')
  <div class="overlay d-none" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;"></div>
  <div class="position-fixed payment-profile d-none w-75" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
      <span class="btn btn-secondary position-absolute" onclick="hidePaymentProfile()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname20"> Name :</label>
          </div>
          <div class="col-8">
              <input type="text" class="form-control" >
          </div>
        </form>
      </div><!--24-->
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname18"> Average days beyond terms :</label>
          </div>
          <div class="col-8">
            <div class="input-group">
              <select class="px-2" id="inputname20" aria-label="Default select example">
                <option value="1">>=</option>
                <option value="1">></option>
                <option value="1">=</option>
                <option value="1"><</option>
                <option value="1"><=</option>
              </select>
              <input type="text" class="form-control " id="inputname18">
              <span class="input-group-text">days</span>
            </div>
          </div>
        </form>
      </div><!--24-->
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname20"> Comments :</label>
          </div>
          <div class="col-8">
              <textarea class="form-control"></textarea>
          </div>
        </form>
      </div><!--24-->
  
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname20"> Color:</label>
          </div>
          <div class="col-8">
            <div class=" ">
              <div class="d-flex border form-control gap-5">
                <div id="flag"><i class="fa-solid fa-flag"></i></div>
                <input type="color" id="colorPicker" class="form-control">
                <p>Selected Color: <span id="colorHex">#ffffff</span></p>
              </div>   
          </div>
          </div>
        </form>
      </div><!--24-->
      <div class="text-center mt-3">
        <div class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</div>
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


  <section class=" mt-5">
    <div class="container-fluid">
      <div class="text-center  position-relative">
        <h2>Manage payment profile</h2>
      </div>

      <div class="row justify-content-end">
        <div class="col-auto">
          <div class="mt-5">
            <button class="btn btn-primary" onclick="showPaymentProfile()">
              <i class="fa-solid fa-plus"></i> payment profile
            </button>
          </div><!--end btn-->
        </div>
      </div><!--row-->
    </div><!--container-->
  </section>

  <section class="manage-i-info my-5">
    <div class="container-fluid">
      <div class="w-info">
        <div class="row">
          <div class="col-4 l-w-info">
            <p style="font-weight: bold; margin-left: 15px;">Payment profile</p>
          </div><!--left-->
          <div class="col-8 r-w-info">
            <p style="font-weight: bold; margin-left: 15px;"> Clients</p>
          </div><!--right-->
        </div><!--row-->
      </div><!--w-info-->
      <div style="background-color: #F6F6F6; border-top: solid 3px rgba(0, 0, 0, 0.25);">
        <div class="row">
          <div class="col-md-4 l-info my-5 ">
            <h5  class="mx-3"><span><i class="fa-solid fa-flag text-danger"></i></span> Très bon payeur / Very good payer</h5>
            <p style="background-color: #D9D9D9; border-radius: 20px; " class="mx-3 my-5  px-5 py-2">Average days beyond terms <= 0 days </p>
            <div class="d-flex  ">
              <div class="btn mx-3 mt-3" style=" background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-trash"></i></div>
              <div class="btn mt-3" style="background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-pen"></i></div>
            </div>
          </div><!--left-->
          <div class="col-md-8 r-info py-3">
            <ul class="list-stat">
              <li><a href="#">
                  <h6>1019080 / Interserve Technical Services </h6>
                </a> -63 days</li>
              <li><a href="#">
                  <h6>864413 / Langles </h6>
                </a>   -45 days</li>
              <li><a href="#">
                  <h6>1010597 / Sit Amet Foundation</h6>
                </a>-39 days</li>
              <li><a href="#">
                  <h6>1030094 / Sed Facilisis Corporation </h6>
                </a>   -35 days</li>
                <li><a href="#">
                  <h6>844333 / Datang Telecom</h6>
                </a>   -34 days</li>

            </ul><!--list-state-->
          </div><!--right-->
          <div style="background-color: white; ">
            <div class="row">
              <div class="col-md-4 l-info my-5 ">
                <h5  class="mx-3"><span><i class="fa-solid fa-flag text-success"></i></span>  Bon payeur / Good payer
                </h5>
                <p style="background-color: #D9D9D9; border-radius: 20px; " class="mx-3 my-5  px-5 py-2">1 days <= Average days beyond terms <= 10 days</p>
                <div class="d-flex  ">
                  <div class="btn mx-3 mt-3" style=" background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-trash"></i></div>
                  <div class="btn mt-3" style="background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-pen"></i></div>
                </div>
              </div><!--left-->
              <div class="col-md-8 r-info py-3">
                <ul class="list-stat">
                  <li><a href="#">
                      <h6>569054 / Meti  </h6>
                    </a> +10 days </li>
                  <li><a href="#">
                      <h6>1030439 / White Cube </h6>
                    </a> +10 days</li>
                  <li><a href="#">
                      <h6>1030429 / Blackrock Operations (Luxembourg) S.A.R.L</h6>
                    </a> +10 days</li>
                  <li><a href="#">
                      <h6>1080061 / Fhp Engineering Services Solutions</h6>
                    </a> +10 days</li>
                    <li><a href="#">
                      <h6>1240377 / Ashland Industries Europe Gmbh</h6>
                    </a> +10 days</li>

                </ul><!--list-state-->
              </div><!--right-->
              <div style="background-color: rgba(246, 246, 246, 1); border-top: solid 3px rgba(0, 0, 0, 0.25);">
                <div class="row">
                  <div class="col-md-4 l-info my-5 ">
                    <h5  class="mx-3"><span><i class="fa-solid fa-flag text-success"></i></span>  Payeur correct / Average payer</h5>
                      <p style="background-color: #D9D9D9; border-radius: 20px; " class="mx-3 my-5  px-5 py-2">1 days <= Average days beyond terms <= 10 days </p>
                      <div class="d-flex  ">
                        <div class="btn mx-3 mt-3" style=" background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-trash"></i></div>
                        <div class="btn mt-3" style="background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-pen"></i></div>
                      </div>
                  </div><!--left-->
                  <div class="col-md-8 r-info py-3">
                    <ul class="list-stat">
                      <li><a href="#">
                          <h6>1170069 / Ppd Global Limited </h6>
                        </a> +30 days</li>
                      <li><a href="#">
                          <h6>1030264 / Place2Be</h6>
                        </a>+29 days</li>
                      <li><a href="#">
                          <h6>1270065 / Gchq</h6>
                        </a> +28 days</li>
                      <li><a href="#">
                          <h6>1050010 / Gallaram Ltd</h6>
                        </a> +28 days</li>
                        <li><a href="#">
                          <h6>1010404 / Blackrock Investment Management () - Co...</h6>
                        </a> +28 days</li>

                    </ul><!--list-state-->
                  </div><!--right-->
                  <div style="background-color: white; ">
                    <div class="row">
                      <div class="col-md-4 l-info my-5 ">
                        <h5  class="mx-3"><span><i class="fa-solid fa-flag text-success"></i></span> Mauvais payeur / Bad payer</h5>
                          <p style="background-color: #D9D9D9; border-radius: 20px; " class="mx-3 my-5  px-5 py-2">30 days < Average days beyond terms < 60 days </p>
                          <div class="d-flex  ">
                            <div class="btn mx-3 mt-3" style=" background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-trash"></i></div>
                            <div class="btn mt-3" style="background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-pen"></i></div>
                          </div>
                      </div><!--left-->
                      <div class="col-md-8 r-info py-3">
                        <ul class="list-stat">
                          <li><a href="#">
                              <h6>1080280 / Diam SAS </h6>
                            </a> +56 days</li>
                          <li><a href="#">
                              <h6>654365 / Croivy </h6>
                            </a>+47 days</li>
                          <li><a href="#">
                              <h6>1010017 / Routeco Limited</h6>
                            </a>+47 days</li>
                          <li><a href="#">
                              <h6>534875 / Astrabal SAS </h6>
                            </a> +45 days</li>
                            <li><a href="#">
                              <h6>1270051 / Redstone Communications</h6>
                            </a> +45 days</li>

                        </ul><!--list-state-->
                      </div><!--right-->
                      <div style="background-color: rgba(246, 246, 246, 1); border-top: solid 3px rgba(0, 0, 0, 0.25);">
                        <div class="row">
                          <div class="col-md-4 l-info my-5 ">
                            <h5  class="mx-3"><span><i class="fa-solid fa-flag text-success"></i></span> Très mauvais payeur / Very bad payer</h5>
                              <p style="background-color: #D9D9D9; border-radius: 20px; " class="mx-3 my-5  px-5 py-2">60 days <= Average days beyond terms <= 90 days </p>
                              <div class="d-flex  ">
                                <div class="btn mx-3 mt-3" style=" background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-trash"></i></div>
                                <div class="btn mt-3" style="background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-pen"></i></div>
                              </div>
                          </div><!--left-->
                          <div class="col-md-8 r-info py-3">
                            <ul class="list-stat">
                              <li><a href="#">
                                  <h6>1080286 / Orange SA  </h6>
                                </a>+69 days</li>
                              <li><a href="#">
                                  <h6>1080011 / Nestle Incorporated</h6>
                                </a> +67 days</li>
                              <li><a href="#">
                                  <h6>1260096 / lfisprs</h6>
                                </a> +60 days</li>
                              <li><a href="#">
                                  <h6>1270016 / Ultricies Limited </h6>
                                </a> +60 days</li>

                            </ul><!--list-state-->
                          </div><!--right-->
                          <div style="background-color: white; ">
                            <div class="row">
                              <div class="col-md-4 l-info my-5 ">
                                <h5  class="mx-3"><span><i class="fa-solid fa-flag text-success"></i></span>Retards inadmissibles / Unacceptable delays</h5>
                                  <p style="background-color: #D9D9D9; border-radius: 20px; " class="mx-3 my-5  px-5 py-2">90 days < Average days beyond terms</p>
                                  <div class="d-flex  ">
                                    <div class="btn mx-3 mt-3" style=" background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-trash"></i></div>
                                    <div class="btn mt-3" style="background-color: #7D7D7D; color: white; border: solid 1px #777676;"><i class="fa-solid fa-pen"></i></div>
                                  </div>
                              </div><!--left-->
                              <div class="col-md-8 r-info py-3">
                                <ul class="list-stat">
                                  <li><a href="#">
                                      <h6>1270012 / Manstall Electrical Contractors </h6>
                                    </a>+318 days</li>
                                    <li><a href="#">
                                      <h6>1080060 / Hewlett-Packard International Bank Plc.</h6>
                                    </a>+152 days</li>
                                  <li><a href="#">
                                      <h6>1060278 / Ericsson Broadcast Services</h6>
                                    </a> +138 days</li>
                                  <li><a href="#">
                                      <h6>1080057 / Conemara Ltd</h6>
                                    </a> +97 days</li>
                                  <li><a href="#">
                                      <h6>1040148 / Carrs Hutchison Mill </h6>
                                    </a> +91 days</li>

                                </ul><!--list-state-->
                              </div><!--right-->
                              @endsection