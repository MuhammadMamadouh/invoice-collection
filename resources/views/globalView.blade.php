@extends('app')
@section('content')
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="closeBtn" onclick="closeSetts()">&times;</span>
        <div class="row my-5">
          <div class="col-md-6 my-3">
            <h4>Ddgets To Show</h4>
            <div class="mt-3 ">
              <div class="flex-container w-100">
                <div class="number">1</div>
                <input type="checkbox" class="form-check-input mx-2" id="key-figures">
                <label for="key-figures" class="text">Key figures</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-2-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">2</div>
                <input type="checkbox" class="form-check-input mx-2" id="aging-balance">
                <label for="aging-balance" class="text">Aging balance</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">3</div>
                <input type="checkbox" class="form-check-input mx-2" id="items-status">
                <label for="items-status" class="text">Items status</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">4</div>
                <input type="checkbox" class="form-check-input mx-2" id="cash-forecast">
                <label for="cash-forecast" class="text">Cash forecast</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">5</div>
                <input type="checkbox" class="form-check-input mx-2" id="receivable">
                <label for="receivable" class="text">Receivable and overdue per client</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">6</div>
                <input type="checkbox" class="form-check-input mx-2" id="DSO">
                <label for="DSO" class="text">DSO trend</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
  
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">7</div>
                <input type="checkbox" class="form-check-input mx-2" id="Overdue">
                <label for="Overdue" class="text">Overdue trend</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">8</div>
                <input type="checkbox" class="form-check-input mx-2" id="Pending">
                <label for="Pending" class="text">Pending disputes	</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class="number">9</div>
                <input type="checkbox" class="form-check-input mx-2" id="Payment">
                <label for="Payment" class="text">Payment profile</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class=" mins">10</div>
                <input type="checkbox" class="form-check-input mx-2" id="cash-receipts">
                <label for="cash-receipts" class="text">Cash receipts history</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class=" mins">11</div>
                <input type="checkbox" class="form-check-input mx-2" id="Sales">
                <label for="Sales" class="text">Sales	</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class=" mins">12</div>
                <input type="checkbox" class="form-check-input mx-2" id="actions-done">
                <label for="actions-done" class="text"> Actions done	</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
            <div class="  mt-2 ">
              <div class="flex-container w-100">
                <div class=" mins">13</div>
                <input type="checkbox" class="form-check-input mx-2" id="actions-to-do">
                <label for="actions-to-do" class="text">Actions to do</label>
                <div class="icon"><a href="#" class="text-decoration-none text-dark"><i
                      class="fa-solid fa-bars  p-1"></i></a></div>
              </div>
            </div><!--l-3-->
  
  
          </div><!--l-1-->
          <div class="col-md-6 my-3">
            <h4 class="">Options</h4>
            <div class="d-flex align-items-center w-100">
              
              <div class="row">
                <div class="col-md-6">
                  <p class="mb-0 me-3  mt-3">View :</p>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <div class="form-check ms-5 mt-3">
                    <input class="form-check-input " name="view" type="radio" id="full">
                    <label class="form-check-label fw-bold" for="full">Full Width</label>
                  </div>
                  <div class="form-check ms-5 mt-3">
                    <input class="form-check-input" name="view" type="radio" id="center">
                    <label class="form-check-label fw-bold" for="center">Center</label>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="d-flex align-items-center w-100 mt-3">
              <div class="row">
                <div class="col-md-6">
                  <p class="mb-0 me-3">Numper of columns :</p>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <div class="form-check me-5">
                    <input class="form-check-input" name="no-of-col" type="radio" id="2-columns">
                    <label class="form-check-label fw-bold" for="2-columns">2 columns</label>
                  </div>
                  <div class="form-check me-5">
                    <input class="form-check-input" name="no-of-col" type="radio" id="3-columns">
                    <label class="form-check-label fw-bold" for="3-columns"> 3 columns</label>
                  </div>
                </div>
              </div><!--row-->
            </div>
            <div class="filter mt-5">
              <p>Filter by :</p>
            </div> 
            <div class="form-group w-75 m-auto mb-3">
              <select class="form-select  m-2" onfocus='this.size=9;' onblur='this.size=1;' onchange='this.size=1; this.blur();' aria-label=" Default select example">
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
            <div class="form-group w-75 m-auto mb-3">
              <select class="form-select  m-2 w-100" aria-label="Default select example">
                <option selected disabled>Collector :</option>
                <option value="1">Mike Anderson(Collector)</option>
                <option value="1">Nicolas Grayson(Collector)</option>
                <option value="1">Paul Mayer(Administrator)</option>
                <option value="1">Veronique Miguet(Credit Manager)</option>
                <option value="1">[None]</option>
              </select>
            </div>
            <div class="form-group w-75 m-auto mb-3">
              <select class="form-select  m-2" aria-label="Default select example">
                <option value="" selected disabled>Customers Custom Field #1 :</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">[None]</option>
                <option value="3">[Not Empty]</option>
              </select>
            </div>
            <div class="form-group w-75 m-auto mb-3  ">
              <select class="form-select  m-2 w-100" aria-label="Default select example">
                <option selected disabled>Customers Custom Field #2 :</option>
                <option value="1">AZ</option>
                <option value="2">BI</option>
                <option value="3">[None]</option>
                <option value="3">[Not Empty]</option>
              </select>
            </div>
            <div class="button-setting-global-view mt-3 text-center">
              <div class="text-capitalize btn btn-success"><span><i class="fa-solid fa-check"></i></span> save (widgets to show & options)</div>
            </div>
          </div><!--main-->
          
        </div><!--row-->
      </div><!--modal-content-->
    </div><!--modal-->
    <!--navbar-site-->
    <div class="navbar-all-site cairo-uniquifier">
      <div class="top-navbar mb-0 ">
       <div class="container">
           <span class="inputicons"><i class="fa-solid fa-book"></i></span><input type="text" class="mt-2 " placeholder="Contact Us For Personalized Demo">
           <a href="settings.html" class="mt-4 "> <i class="fa-solid fa-house"></i><a href="settings.html"> My account</a></a>
           <a href="settings.html"><img src="img/person2.jpg" class="img-fluid" alt=""></a>
          <span class="mt-4 "><i class="fa-solid fa-power-off"></i><a href="#"> sign out</a></span>
       
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
            <li class="nav-item active d-flex align-items-center">
              <a class="nav-link" aria-current="page" href="globalView.html"><span><i class="fa-solid fa-eye"></i></span> global view</a>
              <i class="fa-solid fa-gear nav-link bg-dark" onclick="showSetts()" style="cursor:pointer ;padding: 12px;"></i>
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
    <div class=" p-2 text-center">
        <p class=" d-flex flex-wrap justify-content-center align-items-center">DEMO → You navigate as
            <select class="form-select mx-2  border-primary w-auto" aria-label="Default select example">
            <option value="1" selected>Sales Administration</option>
            <option value="2">Credit manager</option>
            <option value="2">Collector</option>
            <option value="2">Sales manager</option>
            <option value="1">Administrator</option>
            <option value="2">Financial controller</option>
            <option value="2">Executive Officer</option>
            <option value="2">Guest</option>
          </select>
           and you can access to all features</p>
    </div>
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="change-pages">
              <a href="reportsSales.html" class="d-flex justify-content-between bg-success px-2 text-light"><i class="fa-solid fa-signal text-light" style="font-size: 35px;"></i>
              <div class="block-txt">
                <span class="text-end" style="font-size: 25px;">3.3M€</span>
                <span>Sales May 2024</span>
              </div>  
              </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="change-pages">
                <a href="collection.html" class="d-flex justify-content-between bg-secondary px-2 text-light"><i class="fa-solid fa-clock text-light" style="font-size: 35px;"></i>
                <div class="block-txt">
                  <span class="text-end" style="font-size: 25px;">614</span>
                  <span>Actions to do</span>
                </div>  
                </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="change-pages">
                <a href="reportsAgingBalance.html" class="d-flex justify-content-between bg-primary  px-2 text-light"><i class="fa-solid fa-euro text-light" style="font-size: 35px;"></i>
                <div class="block-txt">
                  <span class="text-end" style="font-size: 25px;">5M€</span>
                  <span>Late payment</span>
                </div>  
                </a>
                </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsAgingBalance.html" class="text-decoration-none"><h5 class="text-dark text-center" id="aning-mouse" >Aging balance</h5></a>
              <div class="show-txt" id="show">
                <span class="aging-show mt-5 mb-5">The aging balance helps to <br>
                   monitor the situation of accounts <br>
                    receivable based on their seniority <br>
                   compared to their due date. It is <br>
                    divided into several tranches. For <br>
                     example, non-overdue receivables <br>
                      and receivables due between 1 <br>
                       and 30 days and between 31 and <br>
                        60 days ... etc. It can be applied to <br>
                         the entire accounts receivable or <br>
                          can be set by customer or group <br>
                           of customers.</span>
              </div>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsAgingBalance.html">
                      <canvas  id="myChart-5"  width="200" height="250"></canvas>
                    </a>
                    <div class="row text-center mt-3" style="font-size:10px ;">
                      <div class="col-6 d-flex align-items-center "><p>Current receivable : <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 151k &nbsp; 42%</div></p></div>
                      <div class="col-6 d-flex align-items-center "><p>Overdue : <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 209k &nbsp; 58%</div></p></div>
                      <div class="col-6 d-flex align-items-center "><p>Total receivable : <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 359k &nbsp; 100%</div></p></div>
                      <div class=" col-6 d-flex align-items-center "><p>Overdue % :</p>                 
                        <div class="badge bg-light text-dark mb-3 ms-2">5%</div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsItemsStatus.html" class="text-decoration-none"><h5 class="text-dark text-center" id="aning-mouse-2" >Items status</h5></a>
              <div class="show-txt-2" id="show-2">
                <span>The status allows to qualify items <br>
                   and assign them temporarily in a <br>
                    category. For example, if a <br>
                     customer confirms a payment, the <br>
                      relevant invoices will be qualified <br>
                       with a status of Promise to pay <br> . Status - Name : Name of status <br>
                        defined on My DSO <br> ManagerStatus - Comment : <br>
                         Explanatory comment linked to <br>
                          debt status.Status - Date : Date <br>
                           on which last item status was <br>
                            indicated. Status - Author : Author <br>
                             of item status, having qualified it. <br>
                              How to manage statuses?"</span>
              </div>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsItemsStatus.html">
                        <canvas id="myChart-11"  width="200" height="250"></canvas>
                    </a>
                    <div class="mt-3 text-center" style="font-size:10px ;">
                      <div class="d-inline-flex">Overdue items with a status : <div class="fw-bold"> 849 K€</div></div>
                      <br>
                      <div class="d-inline-flex">% Qualified overdue : <div class="fw-bold"> 13 % </div></div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsCashForecast.html" class="text-decoration-none"><h5 class="text-dark text-center">Cash forecast</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsCashForecast.html">
                        <canvas id="myChart-3" width="200" height="250"></canvas>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsAgingBalance.html" class="text-decoration-none"><h5 class="text-dark text-center">Receivable and overdue per client</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-group d-flex align-items-center">
                              <select
                                class="form-select w-auto m-2" style="font-size:13px ;"
                                aria-label="Default select example">
                                <option selected value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="134">134</option>
                              </select>
                              <div style="font-size:10px ; ">actions display on 134</div>
                            </div>
                            <form>
                              <div class="form-group">
                                <input
                                  type="text"
                                  style="font-size:10px ;"
                                  class="form-control"
                                  aria-describedby="emailHelp"
                                  placeholder="Multi-columns search" />
                              </div>
                            </form>
                          </div>
                          <a href="reportsAgingBalance.html" class="text-decoration-none text-dark">
                            <div class="row p-0 align-items-center text-center" style="font-size: 10px;">
                              <div class="col-1">
                                <div class="d-flex align-items-center justify-content-center gap-1 ">
              <i class="fa-solid fa-sort " style="cursor:pointer"></i>
              <p class="fw-bold p-1 m-0">Flag</p>
            </div>
            </div>
                              <div class="col-2">
                                <div class="d-flex align-items-center justify-content-center gap-1 ">
              <i class="fa-solid fa-sort " style="cursor:pointer"></i>
              <p class="fw-bold p-1 m-0">Client name</p>
            </div>
            </div>
                              <div class="col-3">
                                <div class="d-flex align-items-center justify-content-center gap-1 ">
              <i class="fa-solid fa-sort " style="cursor:pointer"></i>
              <p class="fw-bold p-1 m-0">Receivable</p>
            </div>
            </div>
                              <div class="col-3">
                                <div class="d-flex align-items-center justify-content-center gap-1 ">
              <i class="fa-solid fa-sort " style="cursor:pointer"></i>
              <p class="fw-bold p-1 m-0">Overdue</p>
            </div>
            </div>
                              <div class="col-3">
                                <div class="d-flex align-items-center justify-content-center gap-1 ">
              <i class="fa-solid fa-sort " style="cursor:pointer"></i>
              <p class="fw-bold p-1 m-0">Overdue +15d</p>
            </div>
            </div>
                          </div>
                          <div class="row align-items-center  p-0 my-0 text-center" style="background-color: #006bff14;font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="background-color: #006bff14;font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="background-color: #006bff14;font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                              <div class="col-3"><div class="bg-secondary text-light mb-1" style="border-radius: 20px;">No. of clients : 924</div></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          </a>
                  </div>
                 <div class="t-button-on-global d-flex justify-content-end  mb-2">
                  <a href="#" class="prev text-black-50  text-capitalize">previous</a>
                  <a href="" class="next text-capitalize">next</a>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-3">
              <a href="reportsDSO.html" class="text-decoration-none"><h5 class="text-dark text-center">DSO trend</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsDSO.html">
                        <canvas id="myChart-8"  width="250" height="250"></canvas>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-3">
              <a href="reportsOverdueTrend.html" class="text-decoration-none"><h5 class="text-dark text-center">Overdue trend</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsOverdueTrend.html">
                        <canvas id="myChart-6" width="250" height="250"></canvas>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--scirpt Files-->
    @endsection