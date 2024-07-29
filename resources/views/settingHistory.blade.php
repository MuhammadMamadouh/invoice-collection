@extends('app')
@section('content')
    <!--navbar-site-->

    <!--navbar-site-->
    <div class="navbar-all-site cairo-uniquifier">
        <div class="top-navbar ">
            <div class="container">
                <span class="inputicons"><i class="fa-solid fa-book"></i></span><input type="text" class="mt-2 mb-2"
                    placeholder="Contact Us For Personalized Demo">
                <a href="settings.html" class="mt-4 mb-4"> <i class="fa-solid fa-house"></i><a href="settings.html"> My
                        account</a></a>
                <a href="settings.html"><img src="img/person2.jpg" class="img-fluid" alt=""></a>
                <span class="mt-4 mb-3"><i class="fa-solid fa-power-off"></i><a href="#"> sign out</a></span>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span class="text-light"><i class="fa-solid fa-bars p-1"></i></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="globalView.html"><span><i
                                        class="fa-solid fa-eye"></i></span> global view</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="collection.html"><span><i class="fa-solid fa-clock"></i></span>
                                collection</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="actionsToDo.html">
                                <span><i class="fa-solid fa-bolt "></i></span>risk
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="allClients.html"><span><i class="fa-solid fa-globe"></i></span>
                                clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="searchForAClient.html"><span><i
                                        class="fa-solid fa-magnifying-glass"></i></span> search</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="reportsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" href="#"><span><i
                                        class="fa-solid fa-chart-simple"></i></span> reports</a>
                            <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
                                <li><a class="dropdown-item text-primary" href="reportsAgingBalance.html"><i
                                            class="fa-solid fa-chart-simple "></i> Aging balance</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsOverdueTrend.html"><i
                                            class="fa-solid fa-clock-rotate-left"></i> Overdue trend</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsDSO.html"><i
                                            class="fa-solid fa-chart-line"></i> DSO</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsItemsStatus.html"><i
                                            class="fa-solid fa-chart-pie"></i> Items status</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsDisputes.html"><i
                                            class="fa-solid fa-handshake-simple"></i> Disputes</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-primary" href="reportsSales.html"><i
                                            class="fa-solid fa-signal"></i> Sales</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsCashReciepts.html"><i
                                            class="fa-solid fa-money-bill-1-wave"></i> Cash receipts</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsCashForecast.html"><i
                                            class="fa-solid fa-wand-magic-sparkles"></i> Cash Forecast</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsPaymentSchedule.html"><i
                                            class="fa-solid fa-table-cells"></i> Payment Schedule</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-primary" href="reportsRisk.html"><i
                                            class="fa-solid fa-bolt me-2"></i>Risk</a></li>
                                <li><a class="dropdown-item text-primary" href="reportsPaymentProfile.html"><i
                                            class="fa-solid fa-flag me-2"></i>Payment profile</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><span><i
                                        class="fa-solid fa-gear"></i></span> setting
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                                <li><a class="dropdown-item text-primary" href="settings-manage-users-account.html"><i
                                            class="fa-solid fa-users"></i> Manage users account</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-secure.html"><i
                                            class="fa-solid fa-lock"></i> Secure my account and user accounts</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-primary" href="settings-import-export-data.html"><i
                                            class="fa-solid fa-rotate"></i> Import / Export your data</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-search.html"><i
                                            class="fa-solid fa-robot"></i> Manage search assign</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-create-client.html"><i
                                            class="fa-solid fa-plus"></i> Create a client</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-create-item.html"><i
                                            class="fa-solid fa-plus"></i> Create an item(invoice, credit note,...)</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-clients-group.html"><i
                                            class="fa-regular fa-folder-open"></i> Manage clients group</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-item-status.html"><i
                                            class="fa-regular fa-square-check"></i> Manage item status</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-risk-settings.html"><i
                                            class="fa-solid fa-bolt"></i> Manage risk</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-validation.html"><i
                                            class="fa-solid fa-computer"></i>Manage credit limits validation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="help.html"><span><i class="fa-solid fa-circle-info"></i></span>
                                helps</a>
                        </li>
                        <div class="icons-nav">
                            <a href="insights.html"><i class="fa-solid fa-book"></i></a>
                            <a class="position-relative" href="#" id="search-icon"><i
                                    class="fa-solid fa-magnifying-glass"></i></a>
                            <div class="search-container px-4 py-2 rounded" id="search-container">
                                <p>Quick search :</p>
                                <div class="input-group w-100 ">
                                    <input type="text" class="search-input form-control"
                                        placeholder="Search for a client / Search for an item (invoice, credit note, ...)...">
                                    <span class="input-group-text bg-primary"><a href="#"><i
                                                class="fa-solid fa-search text-white"></i></a></span>
                                </div>
                                <div class="d-flex "><input type="checkbox" class="mb-3 me-1 chec bg-body-tertiary">
                                    <p class="name-d">Include cleared items</p>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--navbar-site-->

    <section class="m-group mt-3">
        <div class="container">
          <div class="t-manage text-center text-capitalize">
            <p>Import and export your billing information</p>
          </div>
          <div class="router-pages text-center mt-3 mb-2">
            <a href="settings-import-export-data.html"><span><i class="fa-solid fa-download"></i></span> Manual upload « Smart Upload »</a>
            <a href=""><span><i class="fa-solid fa-rotate"></i></span> Automatic upload	</a>
            <a href="settingHistory.html" class="scenarios-active p-2"><span><i class="fa-solid fa-building"></i></span> History of imports</a>
            <a href="settingUsers.html"><span><i class="fa-solid fa-download"></i></span> Export your data</a>
          </div>
        </div>
       
      </section>
      <div class="form-group d-flex align-items-center">
        <div>Display</div>
        <select
          class="form-select w-auto m-2"
          aria-label="Default select example">
          <option selected value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          <option value="134">134</option>
        </select>
        <div>Items</div>
      </div>

    <div class="table-parent mb-3" id="table-scroll">
        <table class="table rounded text-center px-2" style="color:#6A6A6A ;">
            <thead>
                <tr>
                    <th><h6 class="text-start">Data</h6></th>
                    <th>
            <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>item <br> adedd</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>item <br> updated</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Customers <br> added</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Customers <br> updated</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Contacts <br> added</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Contacts <br> updated</h6>
              </div>
                        
                    </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Users <br> added</h6>
              </div>
                        </th>
                    <th>
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Users <br> updated</h6>
              </div>
                        
                    </th>
                        
                </tr>
            </thead>
            <tbody>
               
                
                  <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                </tr>
          
                <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
               
                <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                </tr>
               
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                
                  
                <tr style="background-color: #EAEAEA">
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td class="text-end pt-4"><a href="">contact us to cancel this import</a></td>
                </tr>
                <tr>
                    <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
                    <td><p class="pt-2 mt-1">0</p></td>
                    <td><p class="pt-2 mt-1">268</p></td>
    
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                    <td><p class="pt-2 mt-1"></p></td>
                </tr>
      
               
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
 
               
                
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
               
                
                  
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
               
                
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>       
                
                  
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>      
                
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>      
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>      
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
               
                
                  
        <tr style="background-color: #EAEAEA">
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
                  
        <tr>
            <td class="text-start"><p class="pt-2 mt-1"><i class="fa-solid fa-upload me-2 "></i>2024-06-10 00:00:00 (G.M.T. +1)</p></td>
            <td><p class="pt-2 mt-1">0</p></td>
            <td><p class="pt-2 mt-1">268</p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
            <td><p class="pt-2 mt-1"></p></td>
        </tr>
            </tbody>
        </table>
    </div>
    <div class="justify-content-end gap-1 d-flex mb-2">
        <div class="btn btn-outline-primary">Previus</div>
        <div class="btn btn-primary">1</div>
        <div class="btn btn-outline-primary">2</div>
        <div class="btn btn-outline-primary">3</div>
        <div class="btn btn-outline-primary">4</div>
        <div class="btn btn-outline-primary">5</div>
        <div class="btn btn-outline-primary">6</div>
        <div class="btn btn-outline-primary">Next</div>
      </div>
    
    <style>
        .table-responsive {
       
            position: relative;
            margin-bottom: 1rem;
            
        }
        td a {
        color: #000;
        background: #99999999;
        text-decoration: none;
        font-size: 10px;
        padding: 2px;
        border: 2px solid #99999999;
        border-radius: 2px;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }
    
        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            
        }
    
        .table th {
            background-color: white;
            font-weight: bold;
        }
    
        @media (max-width: 768px) {
            .table td {
                font-size: 10px;
                padding: 0.5rem;
            }
          
        }
        @media (max-width:560px) {
          .ring-info p {
            font-size: 14px;
          }
          .t-manage  p {
            font-size: 13px;
          }
        }
    </style>
    
@endsction