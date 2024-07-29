@extends('app')
@section('content')
  <div class="overlay d-none" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;"></div>
  <div class="position-fixed add-user-div w-75 pop-up d-none pt-4 pe-4" style="top:5% ;left: 50%;transform: translate(-50%);z-index: 10;height: 90vh; overflow-y: scroll;overflow-x: hidden;">
    <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
      <span class="btn btn-secondary position-absolute" onclick="hideAddUserDiv()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
      <h3 class="text-center mb-4">Add a user</h3>
      <div class="row align-items-center">
        <div class="col-md-3 mb-3">
          <small class="">E-Mail *:</small>
        </div>
        <div class="col-md-9 mb-3">
          <input required type="email" class="form-control" />
        </div>


        <div class="col-md-3 mb-3">
          <small class="">Username *:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input required type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class="">Full Name *:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input required type="text" class="form-control" />
        </div>

 
        <div class="col-md-3 mb-3">
          <small class="">Images Of Account:</small>
        </div>

        <div class="col-md-9 mb-3 mb-3">
          <div class="change-img text-center ">
            <img src="img/download.png" id="changeimg" class="img-fluid" alt="">
          <div class="upload" id="uploads">
           <label for="upload" class="text-center">Upload</label>
           <input type="file" id="upload">
         </div>
        </div>
        </div>

 

        <div class="col-md-3 mb-3">
          <small class="">phone:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input type="text" class="form-control" />
        </div>

 

        <div class="col-md-3 mb-3">
          <small class="">phone:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input  type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class="">Fax:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input type="text" class="form-control" />
        </div>

    
        <div class="col-md-3 mb-3">
          <small class="">Function:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input  type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class="">ID number:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input  type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class=""><a href="">Role</a> <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px;"></i></a> :</small>
        </div>

        <div class="col-md-9 mb-3">
          <select class="form-select" aria-label="Default select example">
            <option value="1" selected>Brazilian</option>
            <option value="2">Chinese (Simplified)</option>
            <option value="2">Deutsch</option>
            <option value="2">Dutch</option>
            <option value="1">English</option>
            <option value="2">Español</option>
            <option value="2">Français</option>
            <option value="2">Italiano</option>
            <option value="2">Japanese</option>
            <option value="2">Polski</option>
            <option value="2">Português</option>
            <option value="2">Romanian</option>
            <option value="2">Turkish</option>
          </select>
        </div>
        <div class="col-md-3 mb-3">
          <small class="">Active account :</small>
        </div>

        <div class="col-md-9 mb-3">
          <div class=" checks-bx d-flex gap-3">
            <div>
              <input type="radio" name="active" id="yes">
              <label for="yes">Yes</label>
            </div>
            <div>
              <input type="radio" name="active" id="no">
              <label for="no">No</label>
            </div>
          </div>
        </div>

        <div class=" px-4">
          <div class="bg-light p-4">
              <div class="row align-items-center">
                <div class="col-md-3 mb-3">
                  <small class="">Username :</small>
                </div>
        
                <div class="col-md-9 mb-3">
                  <input  type="text" class="form-control" />
                </div>

                <div class="col-md-3 mb-3">
                  <small class="">Import data in My DSO Manager?</small>
                </div>
        
                <div class="col-md-9 mb-3">
                  <div class=" checks-bx d-flex gap-3">
                    <div>
                      <input type="radio" name="active" id="yes">
                      <label for="yes">Yes</label>
                    </div>
                    <div>
                      <input type="radio" name="active" id="no">
                      <label for="no">No</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <small class="">Language :</small>
                </div>
                <div class="col-md-9 mb-3">
                  <select class="form-select" aria-label="Default select example">
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

              </div>
          </div>
        </div>


      </div>
      <div class="text-center mt-3">
        <div class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</div>
      </div>
    </div>
  </div>
  <div class="position-fixed edit-user-div w-75 pop-up d-none pt-4 pe-4" style="top:5% ;left: 50%;transform: translate(-50%);z-index: 10;height: 90vh; overflow-y: scroll;overflow-x: hidden;">
    <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
      <span class="btn btn-secondary position-absolute" onclick="hideAddUserDiv()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
      <div class="row align-items-center">
        <div class="col-md-3 mb-3">
          <small class="">E-Mail *:</small>
        </div>
        <div class="col-md-9 mb-3">
          <input required type="email" class="form-control" />
        </div>


        <div class="col-md-3 mb-3">
          <small class="">Username *:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input required type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class="">Full Name *:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input required type="text" class="form-control" />
        </div>

 
        <div class="col-md-3 mb-3">
          <small class="">Images Of Account:</small>
        </div>

        <div class="col-md-9 mb-3 mb-3">
          <div class="change-img text-center ">
            <img src="img/download.png" id="changeimg" class="img-fluid" alt="">
          <div class="upload" id="uploads">
           <label for="upload" class="text-center">Upload</label>
           <input type="file" id="upload">
         </div>
        </div>
        </div>

 

        <div class="col-md-3 mb-3">
          <small class="">phone:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input type="text" class="form-control" />
        </div>

 

        <div class="col-md-3 mb-3">
          <small class="">phone:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input  type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class="">Fax:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input type="text" class="form-control" />
        </div>

    
        <div class="col-md-3 mb-3">
          <small class="">Function:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input  type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class="">ID number:</small>
        </div>

        <div class="col-md-9 mb-3">
          <input  type="text" class="form-control" />
        </div>

        <div class="col-md-3 mb-3">
          <small class=""><a href="">Role</a> <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px;"></i></a> :</small>
        </div>

        <div class="col-md-9 mb-3">
          <select class="form-select" aria-label="Default select example">
            <option value="1" selected>Brazilian</option>
            <option value="2">Chinese (Simplified)</option>
            <option value="2">Deutsch</option>
            <option value="2">Dutch</option>
            <option value="1">English</option>
            <option value="2">Español</option>
            <option value="2">Français</option>
            <option value="2">Italiano</option>
            <option value="2">Japanese</option>
            <option value="2">Polski</option>
            <option value="2">Português</option>
            <option value="2">Romanian</option>
            <option value="2">Turkish</option>
          </select>
        </div>
        <div class="col-md-3 mb-3">
          <small class="">Active account :</small>
        </div>

        <div class="col-md-9 mb-3">
          <div class=" checks-bx d-flex gap-3">
            <div>
              <input type="radio" name="active" id="yes">
              <label for="yes">Yes</label>
            </div>
            <div>
              <input type="radio" name="active" id="no">
              <label for="no">No</label>
            </div>
          </div>
        </div>

        <div class=" px-4">
          <div class="bg-light p-4">
              <div class="row align-items-center">
                <div class="col-md-3 mb-3">
                  <small class="">Username :</small>
                </div>
        
                <div class="col-md-9 mb-3">
                  <input  type="text" class="form-control" />
                </div>
                <div class="col-12 ">
                  <div class="my-1 d-flex gap-2 text-black-50">
                  <input class="form-check" type="checkbox" id="password">
                  <label class="form-check-label" for="password">Force password change on next login</label>
                  <i class="fa-solid fa-lock mt-1"></i>
                </div></div>
                <div class="col-md-3 mb-3">
                  <small class="">Import data in My DSO Manager?</small>
                </div>
        
                <div class="col-md-9 mb-3">
                  <div class=" checks-bx d-flex gap-3">
                    <div>
                      <input type="radio" name="active" id="yes">
                      <label for="yes">Yes</label>
                    </div>
                    <div>
                      <input type="radio" name="active" id="no">
                      <label for="no">No</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <small class="">Language :</small>
                </div>
                <div class="col-md-9 mb-3">
                  <select class="form-select" aria-label="Default select example">
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

              </div>
          </div>
        </div>


      </div>
      <div class="text-center mt-3">
        <div class="btn btn-success"><i class="fa-solid fa-check"></i> Modify</div>
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

  <section class="ring-info text-center">

    <p class="mt-3 py-5"><i class="fa-regular fa-star px-3"></i>Allow other people to use your account MY DSO
      MANAGER for your company <span class="fw-bold">Business Solutions</span></p>
  </section><!--reing-info-->
  <section class="m-groups my-5">
    <div class="container-fluid">
      <div class="t-manage text-center text-capitalize">
        <h4 class="">Manage users account</h4>
      </div><!--t-manage-->
      <div class="row justify-content-end">
        <div class="col-auto">
          <div class="new-s mt-5">
            <button class="btn btn-primary py-3" onclick="showAddUserDiv()">
              <i class="fa-solid fa-plus"></i> Add a user
            </button>
          </div><!--row-->
        </div><!--new-st-->


      </div><!--container-->
      <div class="row justify-content-end">
        <div class="col-auto">
          <div class="f-searsh d-flex my-3 ">
            <select class="form-select  " id="inputname0">
              <option value="" selected disabled>Role</option>
              <option value="">Role :</option>
              <option value="">Collector</option>
              <option value="">Credit Manager</option>
              <option value="">Executive officer</option>
              <option value="">Sales administration</option>
              <option value="">Sales manager</option>
            </select>
            <div class="d-flex ms-2">
              <input type="text" placeholder="search" style="border-radius:5px 0 0  5px;" class="form-control">
              <div class="btn btn-secondary p-2 px-3" style="border-radius: 0 5px 5px 0 ;"><i class="fas pt-1 fa-search"></i></div>
            </div>
            
          </div><!--f-searsh-->
          <div class="row mt-3">
            <div class="form-group d-flex justify-content-end">
              <input type="text" class="form-control w-auto p-3" aria-describedby="emailHelp"
                placeholder="Multi-columns search" />
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-auto">

          <div class="search-container">
            <input type="text" placeholder="multi colmn search" class="search-input">

          </div>

        </div><!--f-searsh-->
      </div>
    </div>
    
    <div class="table-responsive" id="table-scroll">
        <table class="table  rounded px-2" id="my-table">
            <thead>
                <tr class="text-center" style="border-bottom:solid 3px #9b9a9a;">
                    <th><input type="checkbox" class="form-check-input" id="exampleChe"></th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>First name</h6>
              </div>
                     
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Last name</h6>
              </div>
                      
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Active</h6>
              </div>
                      
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>E-mail</h6>
              </div>
                      
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Phone</h6>
              </div>
                      
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Function</h6>
              </div>
                      
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Role</h6>
              </div>
                      
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6><i class="fa-solid fa-arrow-up-from-bracket"></i></h6>
              </div>
                      
                    </th>
                    <th>
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Actions</h6>
              </div>
                      
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center main-colr">
                    <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                    <td><p><img src="./img/person2.jpg" style="width:60px;height:60px;border-radius:50%" alt=""> Veronica</p></td>
                    <td><p class="mt-3">Campbell</p></td>
                    <td><p class="mt-3"><i class="fa-solid fa-check text-success"></i></p></td>
                    <td><a href=""><p class="mt-3">fjgdd232@gmail.com</p></a></td>
                    <td><p class="mt-3">None ...</p></td>
                    <td><p class="mt-3"></p></td>
                    <td><a href=""><p class="mt-3">sales administration</p></a></td>
                    <td><p class="mt-3">yes</p></td>
                    <td>
                        <button class="lock-btn rounded mt-3"><i class="fa-solid fa-lock"></i></button>
                        <button class="edt-btn rounded mt-3" onclick="showEditUserDiv()"><i class="fa-solid fa-pen"></i></button>
                        <button class="del-btn rounded mt-3"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
              
                <tr class="text-center ">
                    <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                    <td><p><img src="./img/person2.jpg" style="width: 60px;height:60px;border-radius:50%" alt=""> Veronica</p></td>
                    <td><p class="mt-3">Campbell</p></td>
                    <td><p class="mt-3"><i class="fa-solid fa-xmark text-dark"></i></td>
                    <td><a href=""><p class="mt-3">fjgdd232@gmail.com</p></a></td>
                    <td><a href=""><p class="mt-3"><span><i class="fa-solid fa-phone px-1"></i></span>01009830457</p></a></td>
                    <td><p class="mt-3">Responsable 
                        commercial</p></td>
                    <td><a href=""><p class="mt-3">sales administration</p></a></td>
                    <td><p class="mt-3">yes</p></td>
                    <td>
                        <button class="mt-3 lock-btn rounded"><i class="fa-solid fa-lock"></i></button>
                        <button class="mt-3 edt-btn rounded" onclick="showEditUserDiv()"><i class="fa-solid fa-pen"></i></button>
                        <button class="mt-3 del-btn rounded"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="text-center main-colr" >
                    <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                    <td><p><img src="./img/person2.jpg" style="width: 60px;height:60px;border-radius:50%" alt=""> Veronica</p></td>
                    <td><p class="mt-3">Campbell</p></td>
                    <td><p class="mt-3"><i class="fa-solid fa-check text-success"></i></td>
                    <td><a href=""><p class="mt-3">fjgdd232@gmail.com</p></a></td>
                    <td><a href=""><p class="mt-3"><span><i class="fa-solid fa-phone px-1"></i></span>01009830457</p></a></td>
                    <td><p class="mt-3">Sales manager</p></td>
                    <td><a href=""><p class="mt-3">sales administration</p></a></td>
                    <td><p class="mt-3">yes</p></td>
                    <td>
                        <button class="mt-3 lock-btn rounded"><i class="fa-solid fa-lock"></i></button>
                        <button class="mt-3 edt-btn rounded" onclick="showEditUserDiv()"><i class="fa-solid fa-pen"></i></button>
                        <button class="mt-3 del-btn rounded"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="text-center" >
                    <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                    <td><p><img src="./img/person2.jpg" style="width: 60px;height:60px;border-radius:50%" alt=""> Veronica</p></td>
                    <td><p class="mt-3">Campbell</p></td>
                    <td><p class="mt-3"><i class="fa-solid fa-check text-success"></i></td>
                    <td><a href=""><p class="mt-3">fjgdd232@gmail.com</p></a></td>
                    <td><a href=""><p class="mt-3"><span><i class="fa-solid fa-phone px-1"></i></span>01009830457</p></a></td>
                    <td><p class="mt-3">Sales manager</p></td>
                    <td><a href=""><p class="mt-3">sales administration</p></a></td>
                    <td><p class="mt-3">yes</p></td>
                    <td>
                        <button class="mt-3 lock-btn rounded"><i class="fa-solid fa-lock"></i></button>
                        <button class="mt-3 edt-btn rounded" onclick="showEditUserDiv()"><i class="fa-solid fa-pen"></i></button>
                        <button class="mt-3 del-btn rounded"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="text-center main-colr" >
                    <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                    <td><p><img src="./img/person2.jpg" style="width: 60px;height:60px;border-radius:50%" alt=""> Veronica</p></td>
                    <td><p class="mt-3">Campbell</p></td>
                    <td><p class="mt-3"><i class="fa-solid fa-check text-success"></i></td>
                    <td><a href=""><p class="mt-3">fjgdd232@gmail.com</p></a></td>
                    <td><a href=""><p class="mt-3"><span><i class="fa-solid fa-phone px-1"></i></span>01009830457</p></a></td>
                    <td><p class="mt-3">Sales manager</p></td>
                    <td><a href=""><p class="mt-3">sales administration</p></a></td>
                    <td><p class="mt-3">yes</p></td>
                    <td>
                        <button class="mt-3 lock-btn rounded"><i class="fa-solid fa-lock"></i></button>
                        <button class="mt-3 edt-btn rounded" onclick="showEditUserDiv()"><i class="fa-solid fa-pen"></i></button>
                        <button class="mt-3 del-btn rounded"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="text-center" >
                    <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                    <td><p><img src="./img/person2.jpg" style="width: 60px;height:60px;border-radius:50%" alt=""> Veronica</p></td>
                    <td><p class="mt-3">Campbell</p></td>
                    <td><p class="mt-3"><i class="fa-solid fa-check text-success"></i></td>
                    <td><a href=""><p class="mt-3">fjgdd232@gmail.com</p></a></td>
                    <td><a href=""><p class="mt-3"><span><i class="fa-solid fa-phone px-1"></i></span>01009830457</p></a></td>
                    <td><p class="mt-3">Sales manager</p></td>
                    <td><a href=""><p class="mt-3">sales administration</p></a></td>
                    <td><p class="mt-3">yes</p></td>
                    <td>
                        <button class="mt-3 lock-btn rounded"><i class="fa-solid fa-lock"></i></button>
                        <button class="mt-3 edt-btn rounded" onclick="showEditUserDiv()"><i class="fa-solid fa-pen"></i></button>
                        <button class="mt-3 del-btn rounded"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="text-center main-colr" >
                    <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                    <td><p><img src="./img/person2.jpg" style="width: 60px;height:60px;border-radius:50%" alt=""> Veronica</p></td>
                    <td><p class="mt-3">Campbell</p></td>
                    <td><p class="mt-3"><i class="fa-solid fa-check text-success"></i></td>
                    <td><a href=""><p class="mt-3">fjgdd232@gmail.com</p></a></td>
                    <td><a href=""><p class="mt-3"><span><i class="fa-solid fa-phone px-1"></i></span>01009830457</p></a></td>
                    <td><p class="mt-3">Sales manager</p></td>
                    <td><a href=""><p class="mt-3">sales administration</p></a></td>
                    <td><p class="mt-3">yes</p></td>
                    <td>
                        <button class="mt-3 lock-btn rounded"><i class="fa-solid fa-lock"></i></button>
                        <button class="mt-3 edt-btn rounded" onclick="showEditUserDiv()"><i class="fa-solid fa-pen"></i></button>
                        <button class="mt-3 del-btn rounded"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <div class="tab-btm my-3 container d-flex">
      <div class=" my-5 px-3">
        <button id="dropbtn" class="btn btn-primary dropbtn" id="roleDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-pen px-3"></i>Role<i class="fas fa-arrow-down px-3"></i>
        </button>
        <ul class="dropdown-menu p-3" aria-labelledby="roleDropdown">
          <li><a class="text-decoration-none text-dark" href="">Credit Manager</a></li>
          <li><a class="text-decoration-none text-dark" href="">Collector</a></li>
          <li><a class="text-decoration-none text-dark" href="">Sales manager</a></li>
          <li><a class="text-decoration-none text-dark" href="">Sales administration</a></li>
          <li><a class="text-decoration-none text-dark" href="">Financial controller</a></li>
          <li><a class="text-decoration-none text-dark" href="">Executive officer</a></li>
          <li><a class="text-decoration-none text-dark" href="">Guest</a></li>
        </ul>
      </div><!--create-->
      <div class="delete-g my-5">
        <button class="btn btn-danger text-light">
          <i class="fas fa-trash"></i> Delete All
        </button>
      </div><!--create-->
    </div><!--tab-btm-->
    <div class="container text-center my-5 ">
      <div class="btn btn-success my-1 btn-add-i" onclick="exportTableToPDF()">  Export these data to Excel     <i
          class="fa-solid fa-arrow-up-from-bracket"></i></div>
    </div>

   
  </section><!--m-groups-->

  <style>
    .table-responsive {
        overflow: hidden;
        position: relative;
        margin-bottom: 1rem;
        
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
        .table img {
            width: 30px;
            height: auto;
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
@endsection