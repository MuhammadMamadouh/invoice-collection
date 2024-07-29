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



    <!-- star setting -->
    <section class="mt-5 text-capitalize">

      <div class="container-fluid mx-auto">
        <!-- <div><p class="title">My Company</p></div> -->
      <i class="bi bi-0-circle-fill"></i>
      <div class="row container-fluid ">
      

        <div class="col-lg-6 section-one ">
          <p class="title">My account</p>
          <div class="account mb-5">
            <a href="changeEmail.html" class="text-decoration-none">  <i class="fas fa-envelope"></i>
              <small> change email address?</small></a>
              <a href="change-password.html" class="text-decoration-none"> <i class="fas fa-lock"></i>
                <small>change Password?</small></a>
      
            <a href="deleteMyAccount.html" class="text-decoration-none">        <i class="fas fa-trash-alt"></i>
              <small>Delete my account?</small> 
</a>
        

          </div>
          <form class="mb-3">
          <div class="row ">
            <div class="col-md-3">
              <small class="star">E-Mail:</small>
            </div>

            <div class="col-md-9">
              <input required type="email" class="number" />
            </div>
            <br />
            <br />
            <br />
    
            <div class="col-md-3">
              <small class="star">Username:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="star">Full Name:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
     
            <div class="col-md-3">
              <small class="">Images Of Account:</small>
            </div>

            <div class="col-md-9 mb-3">
              <div class="change-img text-center ">
                <img src="img/download.png" id="changeimg" class="img-fluid" alt="">
              <div class="upload" id="uploads">
               <label for="upload" class="text-center">Upload</label>
               <input type="file" id="upload">
             </div>
            </div>
            </div>
            <br />
            <br />
            <br />
     
   
            <div class="col-md-3">
              <small class="">phone:</small>
            </div>

            <div class="col-md-9">
              <input type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
     

            <div class="col-md-3">
              <small class="">Mobile phone:</small>
            </div>

            <div class="col-md-9">
              <input  type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Fax:</small>
            </div>

            <div class="col-md-9">
              <input type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
        
            <div class="col-md-3">
              <small class="">Function:</small>
            </div>

            <div class="col-md-9">
              <input  type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">ID number:</small>
            </div>

            <div class="col-md-9">
              <input  type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class=""><a href="">Role</a> <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;font-size: 12px;"></i></a> :</small>
            </div>
    
            <div class="col-md-9">
              <select class="form-select" style="width:80% ;" aria-label="Default select example">
                <option value="1" selected>Sales Administration</option>
                <option value="2">Credit manager</option>
                <option value="2">Collector</option>
                <option value="2">Sales manager</option>
                <option value="1">Administrator</option>
                <option value="2">Financial controller</option>
                <option value="2">Executive Officer</option>
                <option value="2">Guest</option>
              </select>
            </div>
            <br />
            <br />
            <br />
     
            <div class="checkbox-title">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckChecked"
                  checked
                />
                <label class="form-check-label fs-6 fw-bold" for="flexCheckChecked">
                  &nbsp;Receive The New Features Of MY DSO MANAGER By Email
                </label>
              </div>
            </div>
            <div class="checkbox-title">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckChecked"
                  checked
                />
                <label class="form-check-label fs-6 fw-bold" for="flexCheckChecked">
                  &nbsp;Show New Tips
                </label>
              </div>
            </div>
          </div>
        </form>
          <div class="title mt-4">
            <button class="login">&check; Modify</button>
          </div>
        </div>
    
      <br/>
        <div class="col-lg-6 section-two container">
          <p class="title">Settings</p>
      
          <form>
          <div class="row">
        
            <div class="col-md-3">
              <small class="">Languages:</small>
            </div>
            <div class="col-md-9">
              <select name="languages"class="country">
              <option value="english">English</option>
              <option value="frence">frence</option>

            </select>
            </div>
         
            <br />
            <br />
            <br />
            <!-- بدي اعمل التاريخ -->
            <div class="col-md-3">
              <small class="star">Date Formate:</small>
            </div>
            <div class="col-md-9">
              <select name="date-formate"class="country">
              <option value="frc">France</option>
              <option value="cnd">Canada</option>

            </select>
            </div>
         
            <br />
            <br />
            <br />
        
     
            <div class="col-md-3">
              <small class="">Name Display</small>
            </div>

            <div class="col-md-9">
              <input  type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
        
        
            <div class="col-md-3">
              <small class="star">Internal Interst Rate:</small>

           </div>
            <div class="col-md-9">
              <div class="input-group mb-3">
                <input
                  type="number"
                  class="eye"
                  aria-label="Recipient's username"
                  aria-describedby="basic-addon2"
                />
                <span class="input-group-text" id="basic-addon2">
              %
                </span>
              </div>
            </div>
            <br />
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="star">Late Payment Rate:</small>

           </div>
            <div class="col-md-9">
              <div class="input-group mb-3">
                <input
                  type="number"
                  class="eye"
                  aria-label="Recipient's username"
                  aria-describedby="basic-addon2"
                />
                <span class="input-group-text" id="basic-addon2">
              %
                </span>
              </div>
            </div>
            <br />
            <br />
            <br />
          
            <div class="col-md-3">
              <small class="star">Recovery Cost Amount:</small>

           </div>
            <div class="col-md-9">
              <div class="input-group mb-3">
                <input
                  type="number"
                  class="eye"
                  aria-label="Recipient's username"
                  aria-describedby="basic-addon2"
                />
                <span class="input-group-text" id="basic-addon2">
             $
                </span>
              </div>
            </div>
            <br />
            <br />
            <br />
        
            <div class="col-md-3">
              <small class="star">Main Currency:</small>
            </div>
            <div class="col-md-9">
              <select required name="main-currency"class="country">
              <option value="usa">USA $</option>
              <option value="cnd">CANADA $</option>

            </select>
            </div>
         
            <br />
            <br />
            <br />
            <!-- 00$ -->   
             <div class="col-md-3">
              <small class="">Currencies rates:</small>
            </div>
            <div class="col-md-6">
            <div class="input-group mb-3">
              <span class="input-group-text">1&pound;=</span>
              <input type="text" class="form-control" placeholder="1.660461"
              aria-label="Amount (to the nearest dollar)">
              <span class="input-group-text">$A</span>
            </div>
          </div>
          <div class="col-md-3 mt-2">      
                <div class="checkbox-title">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckChecked"
                checked
              />
              <label class="form-check-label fs-6 fw-bold " for="flexCheckChecked">
                &nbsp;Auto
              </label>
            </div>
          </div></div>
            <br />
            <br />
            <br />
                       <!-- 00$ -->   
                       <div class="col-md-3">
                      
                      </div>
                      <div class="col-md-6">
                      <div class="input-group mb-3">
                        <span class="input-group-text">1&pound;=</span>
                        <input type="text" class="form-control" placeholder="5.386376"
                        aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">BRL</span>
                      </div>
                    </div>
                    <div class="col-md-3 mt-2">      
                          <div class="checkbox-title">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                          checked
                        />
                        <label class="form-check-label fs-6 fw-bold " for="flexCheckChecked">
                          &nbsp;Auto
                        </label>
                      </div>
                    </div></div>
                      <br />
                      <br />
                      <br />
                         <!-- 00$ -->   
             <div class="col-md-3">
        
            </div>
            <div class="col-md-6">
            <div class="input-group mb-3">
              <span class="input-group-text">1&pound;=</span>
              <input type="text" class="form-control" placeholder="1.471545"
              aria-label="Amount (to the nearest dollar)">
              <span class="input-group-text">$C</span>
            </div>
          </div>
          <div class="col-md-3 mt-2">      
                <div class="checkbox-title">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckChecked"
                checked
              />
              <label class="form-check-label fs-6 fw-bold" for="flexCheckChecked">
                &nbsp;Auto
              </label>
            </div>
          </div></div>
            <br />
            <br />
            <br />
               <!-- 00$ -->   
               <div class="col-md-3">
            
              </div>
              <div class="col-md-6">
              <div class="input-group mb-3">
                <span class="input-group-text">1&pound;=</span>
                <input type="text" class="form-control" placeholder="0.978188"
                aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">CHF</span>
              </div>
            </div>
            <div class="col-md-3 mt-2">      
                  <div class="checkbox-title">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckChecked"
                  checked
                />
                <label class="form-check-label fs-6 fw-bold" for="flexCheckChecked">
                  &nbsp;Auto
                </label>
              </div>
            </div></div>
              <br />
              <br />
              <br />
                 <!-- 00$ -->   
             <div class="col-md-3">
           
            </div>
            <div class="col-md-6">
            <div class="input-group mb-3">
              <span class="input-group-text">1&pound;=</span>
              <input type="text" class="form-control" placeholder="1.082215"
              aria-label="Amount (to the nearest dollar)">
              <span class="input-group-text">$</span>
            </div>
          </div>
          <div class="col-md-3 mt-2">      
                <div class="checkbox-title">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckChecked"
                checked
              />
              <label class="form-check-label fs-6 fw-bold" for="flexCheckChecked">
                &nbsp;Auto
              </label>
            </div>
          </div></div>
            <br />
            <br />
            <br />
               <!-- 00$ -->   
               <div class="col-md-3">
            
              </div>
              <div class="col-md-6">
              <div class="input-group mb-3">
                <span class="input-group-text">1&pound;=</span>
                <input type="text" class="form-control" placeholder="1.082215"
                aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">$</span>
              </div>
            </div>
            <div class="col-md-3 mt-2">      
                  <div class="checkbox-title">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckChecked"
                  checked
                />
                <label class="form-check-label fs-6 fw-bold" for="flexCheckChecked">
                  &nbsp;Auto
                </label>
              </div>
            </div></div>
              <br />
              <br />
              <br />
          <div class="title mt-4">
            <button class="login">&check; Modify</button>
            <span class="color-svg"></span>
      

          </div>     
        
        </div>
    
      </form>
      <br/>
            <!-- row -->
          </div>
     
      </div>
    </section>

    <section class=" ">
      <div class="container-fluid">
        <!-- <div><p class="title">My Company</p></div> -->

      <div class="row container-fluid ">

        <div class="col-lg-6 section-two text-center  container-fluid">
          <p class="title text-center mt-3">My Company</p>
          <form>
          <div class="row align-items-center">
        
            <div class="col-md-3">
              <small class="star">Bussiness Name:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Tarding Name:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Legal ID:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">EU VAT Number:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Images Of Account:</small>
            </div>

            <div class="col-md-9 ">
              <div class="change-img text-center">
               <img src="img/userImg.png" id="changeimg" class="img-fluid" alt="">
             <div class="upload" id="uploads">
              <label for="upload">Upload</label>
              <input type="file" id="upload">
            </div>
           </div>
          </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Address:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Post office Box:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
        
            <div class="col-md-3">
              <p class="">ZIP:</p>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">city:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">State:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Country:</small>
            </div>
            <div class="col-md-9">
              <select name="country"class="country">
              <option value="frc">France</option>
              <option value="cnd">Canada</option>

            </select>
            </div>
         
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">phone:</small>
            </div>

            <div class="col-md-9">
              <input required type="number" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Fax:</small>
            </div>

            <div class="col-md-9">
              <input required type="number" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Website:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Bak Details-IBAN:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
            <div class="col-md-3">
              <small class="">Bank Details-BIC:</small>
            </div>

            <div class="col-md-9">
              <input required type="text" class="number" />
            </div>
            <br />
            <br />
            <br />
          </div>
          <div class="title mt-4 mb-3">
            <button class="login">&check; Modify</button>
            <span class="color-svg"></span>
      

          </div> 
        </div>
    
      </form>
        <div class="col-lg-6 two mt-3 mb-5 text-center">
    <div class="title mt-2">          <span>Version&nbsp;
      <span class="fw-bold">ASI-MAL</span></span> 
   
            </div>
            <p class="title fw-bold sec-two mt-5 mb-5" style="color: blue;">All Offers Affordable To All Companies</p>  
            <br />
            <br />
            <br />
            <!-- row -->
          </div>
        <!-- </div>
      </div> -->
      </div>
    </section>
    @endsection