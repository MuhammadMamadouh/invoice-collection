@extends('layouts.app')
@section('content')
  <div class="overlay d-none"></div>
  <div class="position-fixed edit-assignment d-none w-75 " style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
      <span class="btn btn-secondary position-absolute" onclick="hideEditAssignment()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
      <h2 class="text-center mb-3">Assignment type: Collection scenarios</h2>
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname18"> Assignment:</label>
          </div>
          <div class="col-8">
            <select class="form-select m-2 w-100" aria-label="Default select example">
              <option selected>Clients publics (FR)</option>
              <option value="1">Clients risqués (FR)</option>
              <option value="1">Key accounts scenario (EN)</option>
              <option value="1">Modeles actions specifiques</option>
              <option value="1">Risky clients (En)</option>
              <option value="1">
                Scenario de relance standard (by default)
              </option>
              <option value="1">Standard collection scenario</option>
              <option value="1">Templates specific actions</option>
            </select>
          </div>
        </form>
      </div><!--24-->
  
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname20"> Selection criteria:</label>
          </div>
          <div class="col-8">
              <p>By default for new customers</p>
          </div>
        </form>
      </div><!--24-->
      <div class="text-center mt-3">
        <div class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Save</div>
      </div>
    </div>
  </div>
  <div class="position-fixed add-assignment d-none w-75 " style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
      <span class="btn btn-secondary position-absolute" onclick="hideEditAssignment()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
      <h2 class="text-center mb-3">Assignment type: Collection scenarios</h2>
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname18"> Action:</label>
          </div>
          <div class="col-8">
            <select class="form-select m-2 w-100" aria-label="Default select example">
              <option selected disabled></option>
              <option value="1">Associate</option>
              <option value="1">Disassociate</option>
            </select>
          </div>
        </form>
      </div><!--24-->
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname19"> Assignment:</label>
          </div>
          <div class="col-8">
            <select class="form-select m-2" onfocus="this.size=9;" onblur="this.size=1;"
            onchange="this.size=1; this.blur();" aria-label=" Default select example">
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
        </form>
      </div><!--24-->
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname190"> Search to use:</label>
          </div>
          <div class="col-8">
            <select class="form-select m-2" onfocus="this.size=9;" onblur="this.size=1;"
            onchange="this.size=1; this.blur();" aria-label=" Default select example">
            <option value="" selected disabled></option>
            <option value="1">Clients France</option>
            <option value="2">Tres bon payeur</option>
            <option value="3">Clients Fr scenario En</option>
          </select>
          </div>
        </form>
      </div><!--24-->
  
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname20"> Autorun:</label>
          </div>
          <div class="col-8">
              <input type="checkbox" class="m-2">
          </div>
        </form>
      </div><!--24-->
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname200"> Restrict assignment to new customers:</label>
          </div>
          <div class="col-8">
              <input type="checkbox" class="m-2">
          </div>
        </form>
      </div><!--24-->
      <div class="text-center mt-3">
        <div class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Save</div>
      </div>
    </div>
  </div>
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
  <section class="m-groups mt-5 ">
    <div class="container-fluid">
      <div class="t-manage text-center text-capitalize">
        <h4 class="text-capitalize">Manage search & assign</h4>
      </div><!--t-manage-->
      <div class="s-not my-5 ">
        <div class="row">
          <div class="col-md-3 ">
            <button class="btn d-flex justify-content-between ser-button  ">
              Groups
              <span class="white-c">1</span>
            </button>
          </div><!--1-->

          <div class="col-md-3 col-sm-12">
            <button class="btn d-flex justify-content-between ser-button ">Collection scenarios
              <span class="white-c">1</span>
              <span class="red-c">1</span>
            </button>
          </div><!--2-->
          <div class="col-md-3 col-sm-12">
            <button class="btn d-flex justify-content-between ser-button ">
              collector
              <span class="red-c">1</span>
            </button>
          </div><!--3-->
          <div class="col-md-3 ">
            <button class="btn d-flex ser-button ">
              Associate a colleague
            </button>
          </div><!--4-->
          <div class="col-md-3">
            <button class="btn d-flex justify-content-between ser-button ">
              lnteractive emails
              <span class="red-c">1</span>
            </button>
          </div><!--5-->
          <div class="col-md-3">
            <button class="btn  d-flex justify-content-between ser-button ">
              Recovery cost
              <span class="red-c">1</span>
            </button>
          </div><!--6-->
          <div class="col-md-3">
            <button class="btn  d-flex justify-content-between ser-button ">
              Late payment penalties
              <span class="red-c">1</span>
            </button>
          </div><!--7-->
          <div class="col-md-3">
            <button class="btn  d-flex justify-content-between ser-button ">
              By default
            </button>
          </div><!--8-->
        </div><!--row-->
<div class="row justify-content-end mt-5 ">
  <div class="col-auto">
    <div class="new-s d-flex mt-5">
      <button class="btn btn-primary mb-2 fw-bold">
        Run automatic sequence
      </button>
      <button class="btn btn-primary mb-2 fw-bold" onclick="showAddAssignment()">
        <i class="fa-solid fa-plus"></i>Add
      </button>
    </div><!--new-st-->
  </div>
</div><!--row-->


<div class=" mt-3 mb-0 text-capitalize" style="border-bottom: #000 1px solid;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="my-text fw-blod">
        <p>sequence</p>
        <p>name of the search</p>
        <p>selection criteria</p>
        <p>assigment</p>
        <p>run manually</p>
        <p>autorun</p>
        <p>view-edit</p>
        <p>delete</p>
      </div>
    </div>
  </div>
</div>
</div>
          </div><!--1-->
          <div class=" row my-3 px-4 py-2 text-center align-items-center" style="border: 1px solid blue;">
            <div class="col col-md-1 main-tab">
              <p class="fw-bold">∞ </p>
            </div>
            <div class="col col-md-3 ">
              <p class=" "> By default for new customers </p>
            </div>
            <div class="col col-md-1 hide">
              <p class=""> </p>
            </div>
            <div class="col col-md-3 hide">
              <p class=""> Nicolas Grayson(Collector)</p>
            </div>
            <div class="col col-md-1 ">
              <p class=""> <input type="checkbox" class="form-check-inpu" id="exampleChe"></p>
            </div>
            <div class="col col-2 d-flex align-items-center justify-content-center gap-2 ">
              <a href="searchForAClient.html" id="searchClientBtn" onclick="setFlag()" class="edt-btn rounded "><i class="fa-solid fa-eye"></i></a>
              <div class="edt-btn rounded "  onclick="showEditAssignment()" style="cursor: pointer;"><i class="fa-solid fa-pen"></i></div>
            </div>
            <div class="col col-md-1">
              <p class="fw-bold"> <button class="del-btn rounded"><i class="fa-solid fa-trash"></i></button> </p>
            </div>
            <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i>
            </div>
            <div class="hidden bg-white d-none">
              <div class="col col-md-2 ">
                <p class=""> </p>
              </div>
              <div class="col col-md-1 ">
                <p class=""> </p>
              </div>
              <div class="col col-md-2 ">
                <p class=""> Nicolas Grayson(Collector)</p>
              </div>
            </div>
          </div><!--1-->
      </div><!--row-->
    </div><!--s-c-notation-->

  </div>
    </div><!--container-->
  </section><!--m-groups-->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <!-- <script src="../js/main.js"></script> -->
  <script src="js/searchBar.js"></script>
  <script src="js/collection.js"></script>
  <script src="../js/risk.js"></script>
  <script>
      function setFlag() {
    localStorage.setItem('triggerButtonClick', 'true');
}
  </script>
  <script>
    new WOW().init();
  </script>
</body>

</html>