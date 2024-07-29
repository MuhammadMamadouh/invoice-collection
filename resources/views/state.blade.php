@extends('app')
@section('content')
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="collection.html"><span><i class="fa-solid fa-clock"></i></span> collection</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="actionsToDo.html">
              <span><i class="fa-solid fa-bolt "></i></span>risk
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="allClients.html"><span><i class="fa-solid fa-globe"></i></span> clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="searchForAClient.html"><span><i class="fa-solid fa-magnifying-glass"></i></span>
              search</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="reportsDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" href="#"><span><i class="fa-solid fa-chart-simple"></i></span> reports</a>
            <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
              <li><a class="dropdown-item text-primary" href="reportsAgingBalance.html"><i
                    class="fa-solid fa-chart-simple "></i> Aging balance</a></li>
              <li><a class="dropdown-item text-primary" href="reportsOverdueTrend.html"><i
                    class="fa-solid fa-clock-rotate-left"></i> Overdue trend</a></li>
              <li><a class="dropdown-item text-primary" href="reportsDSO.html"><i class="fa-solid fa-chart-line"></i>
                  DSO</a></li>
              <li><a class="dropdown-item text-primary" href="reportsItemsStatus.html"><i
                    class="fa-solid fa-chart-pie"></i> Items status</a></li>
              <li><a class="dropdown-item text-primary" href="reportsDisputes.html"><i
                    class="fa-solid fa-handshake-simple"></i> Disputes</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-primary" href="reportsSales.html"><i class="fa-solid fa-signal"></i>
                  Sales</a></li>
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
            <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"><span><i class="fa-solid fa-gear"></i></span> setting
            </a>
            <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
              <li><a class="dropdown-item text-primary" href="settings-manage-users-account.html"><i
                    class="fa-solid fa-users"></i> Manage users account</a></li>
              <li><a class="dropdown-item text-primary" href="settings-secure.html"><i class="fa-solid fa-lock"></i>
                  Secure my account and user accounts</a></li>
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
                    class="fa-solid fa-plus"></i> Create an item(invoice, credit note,...)</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-primary" href="settings-manage-clients-group.html"><i
                    class="fa-regular fa-folder-open"></i> Manage clients group</a></li>
              <li><a class="dropdown-item text-primary" href="settings-manage-collection-scenario.html"><i
                    class="fa-regular fa-clock"></i> Manage collection scenario</a></li>
              <li><a class="dropdown-item text-primary" href="settings-manage-item-status.html"><i
                    class="fa-regular fa-square-check"></i> Manage item status</a></li>
              <li><a class="dropdown-item text-primary" href="settings-manage-payment-profile.html"><i
                    class="fa-regular fa-flag"></i> Manage payment profiles</a></li>
              <li><a class="dropdown-item text-primary" href="settings-manage-risk-settings.html"><i
                    class="fa-solid fa-bolt"></i> Manage risk</a></li>
              <li><a class="dropdown-item text-primary" href="settings-manage-validation.html"><i
                    class="fa-solid fa-computer"></i>Manage credit limits validation</a></li>
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
 <div class="start-3-buttons-and-box mt-3 mb-3">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
          <div class="button-red m-2">
            <a href="" class="">
              <div class="row align-items-center">
                <div class="col-md-6 text-lg-start">
              <div class="flex-btns">
              <span><i class="fa-solid fa-clock"></i></span>
            </div>
           </div>
          <div class="col-md-6 text-lg-end">
            <div class="flex-txts text-end">
              <h2>12.9 k€</h2>
              <p>late payment</p>
            </div>
          </div>
           </div>
            </a>
          </div>
        
        <div class="col-md-3 d-none">
        <div class="row p-3 shadow-sm m-2">
          <div class="col-md-6 text-lg-start">
            <div class="flex-btns-1">
              <a href="#">Business <br> Solutions</a>
              <p class="text-black-50  mt-2">your contact:</p>  
          </div>
          </div>
          
          <div class="col-md-6 text-lg-end">
            <div class="flex-txts ">
             <img src="img/logo.png" class="img-fluid" alt="">
          </div>
          </div>
          <div class="col-lg-12">
            <div class="show-more" id="showMore">
            <div class="img-sec-raud mt-2 mb-2">
              <img src="img/person2.jpg" class="img-fluid" alt="">
            </div>
            <h6>Mohamed Adel</h6>
            <div class="con-p mt-2 mb-2 d-flex">
              <span class="text-black-50 mx-1" >@</span>
              <a href="#"> nicolas.durant@demosolutions.com</a>
            </div>
            <div class="con-p mt-2 mb-2 d-flex">
              <span class="text-black-50 mx-1" ><i class="fa-solid fa-phone"></i></span>
              <a href="#">22299490</a>
              <span class="text-black-50 mx-1">(phone)</span>
            </div>
            <div class="con-p mt-2 mb-2 d-flex">
              <div class="see-more">
              <span class="text-black-50 mx-1" ><i class="fa-solid fa-phone"></i></span>
              <a href="#">22299490</a>
              <span class="text-black-50 mx-1">(Mobile Phone)</span>
             <div class="s-b">
              <button class="mx-1" onclick="showMore()" id="showMoreButton"><span class="mx-1"><i class="fa-solid fa-angle-down"></i></span> see more</button>
            </div>
            </div>
            </div>
          </div>
            <div class="show-less" id="showless">
            <h6 class="text-black-50 mt-3 mb-2">Bank Detils:</h6>
            <div class="con-p-2 mt-2 mb-2 d-flex">
             <p class="mb-2 mx-1 ">IBAN: FR 40003 4760 4200 4300 <br> BIC: BCSQLFQ </p>
            </div>
            <div class="adress">
             <p class="text-black-50">Address :</p>
             <a href="">10 boulevard de la République
              38000 Grenoble
              FranceLink</a>
            </div>
            <div class="phone mt-3 mb-2">
              <p class="text-black-50 text-capitalize">phone:</p>
              <span>+33 4 76 00 00 00</span>
            </div>
            <div class="phone mt-3 mb-2">
              <p class="text-black-50 text-capitalize">Fax:</p>
              <span>+33 4 76 00 00 00</span>
            </div>
            <div class="phone mt-3 mb-2">
              <p class="text-black-50 text-capitalize">Legal iD:</p>
              <span>666555888</span>
            </div>
            <div class="phone mt-3 mb-2">
              <p class="text-black-50 text-capitalize">var number:</p>
              <span>FR666555888</span>
              <button onclick="showLessFun()" id="showLessButton"><span class="mx-1"><i class="fa-solid fa-angle-up"></i></span> see less</button>
            </div>
          </div>
        </div>
        </div>
      </div>
  </div>
  <div class="col-md-3">
    <div class="button-color-2 m-2">
      <a href="" class="">
        <div class="row align-items-center">
          <div class="col-md-6 text-lg-start">
        <div class="flex-btns">
        <span><i class="fa-solid fa-clock"></i></span>
      </div>
     </div>
    <div class="col-md-6 text-lg-end">
      <div class="flex-txts text-end">
        <h2>12.9 k€</h2>
        <p>late payment</p>
      </div>
    </div>
     </div>
      </a>
    </div>
  
 
  </div>  
    <div class="col-md-3">
    <div class="button-color-3 m-2">
      <a href="" class="">
        <div class="row align-items-center">
          <div class="col-md-6 text-lg-start">
        <div class="flex-btns">
        <span><i class="fa-solid fa-clock"></i></span>
      </div>
     </div>
    <div class="col-md-6 text-lg-end">
      <div class="flex-txts text-end">
        <h2>12.9 k€</h2>
        <p>late payment</p>
      </div>
    </div>
     </div>
      </a>
    </div>
  
 
  </div>
  <div class="col-md-3 ">
    <div class="row p-3 shadow-sm m-2">
      <div class="col-md-6 text-lg-start">
        <div class="flex-btns-1">
          <a href="#">Business <br> Solutions</a>
          <p class="text-black-50  mt-2">your contact:</p>  
      </div>
      </div> 
      <div class="col-md-6 text-lg-end">
        <div class="flex-txts ">
         <img src="img/logo.png" class="img-fluid" alt="">
      </div>
      </div>
      <div class="col-lg-12">
        <div class="show-more" id="showMore">
        <div class="img-sec-raud mt-2 mb-2">
          <img src="img/person2.jpg" class="img-fluid" alt="">
        </div>
        <h6>Mohamed Adel</h6>
        <div class="con-p mt-2 mb-2 d-flex">
          <span class="text-black-50 mx-1" >@</span>
          <a href="#"> nicolas.durant@demosolutions.com</a>
        </div>
        <div class="con-p mt-2 mb-2 d-flex">
          <span class="text-black-50 mx-1" ><i class="fa-solid fa-phone"></i></span>
          <a href="#">22299490</a>
          <span class="text-black-50 mx-1">(phone)</span>
        </div>
        <div class="con-p mt-2 mb-2 d-flex">
          <div class="see-more">
          <span class="text-black-50 mx-1" ><i class="fa-solid fa-phone"></i></span>
          <a href="#">22299490</a>
          <span class="text-black-50 mx-1">(Mobile Phone)</span>
         <div class="s-b">
          <button class="" onclick="showMoreFun()"  id="showMoreButton"><span class="mx-1"><i class="fa-solid fa-angle-down"></i></span> see more</button>
        </div>
        </div>
        </div>
      </div>
        <div class="show-less d-none" id="showless">
        <h6 class="text-black-50 mt-3 mb-2">Bank Detils:</h6>
        <div class="con-p-2 mt-2 mb-2 d-flex">
         <p class="mb-2 mx-1 ">IBAN: FR 40003 4760 4200 4300 <br> BIC: BCSQLFQ </p>
        </div>
        <div class="adress">
         <p class="text-black-50">Address :</p>
         <a href="">10 boulevard de la République
          38000 Grenoble
          FranceLink</a>
        </div>
        <div class="phone mt-3 mb-2">
          <p class="text-black-50 text-capitalize">phone:</p>
          <span>+33 4 76 00 00 00</span>
        </div>
        <div class="phone mt-3 mb-2">
          <p class="text-black-50 text-capitalize">Fax:</p>
          <span>+33 4 76 00 00 00</span>
        </div>
        <div class="phone mt-3 mb-2">
          <p class="text-black-50 text-capitalize">Legal iD:</p>
          <span>666555888</span>
        </div>
        <div class="phone mt-3 mb-2">
          <p class="text-black-50 text-capitalize">var number:</p>
          <span>FR666555888</span>
          <button id="showLessButton"><span class="mx-1"><i class="fa-solid fa-angle-up"></i></span> see less</button>
        </div>
      </div>
    </div>
</div>
</div>

 <div class="state-content mt-5 mb-3">
  <div class="container-fluid">
  <h4 class="text-center mx-2" ><strong>hospital necplus </strong> <span><i class="fa-solid fa-caret-right"></i></span>  Your statement of account with <strong>Business Solutions
  </strong> </h4>
 </div>
</div>
<div class="container-fulid">
 <div class="titles-state mt-5 d-flex">
  <p class="text-black-50 mx-4 ">You can send a promise of payment or a comment to <strong>Business Solutions</strong> for each invoice :</p>
  <input type="email" class="form-control mx-3" id="exampleFormControlInput1" placeholder="Multi Column">
</div>
</div>

@endsection