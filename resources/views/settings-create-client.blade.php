@extends('app')
@section('content')

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
  </section>
  <section class="ring-info">
    <button class=" btn my-4 px-5 ">Use rather the import module to create your customers and invoices</button>
  </section><!--reing-info-->
  <section class="m-groups my-2">
    <div class="container-fluid">
      <div class="t-manage text-center text-capitalize">
        <h4 class="mt-3 mb-3">Create a client</h4>
      </div><!--t-manage-->
    </div><!--container-->
    <div class="create-c-i my-2">
      <div class="row">
        <div class="col-md-4  my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname0">Company / Business name * : </label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname0">
            </div>
          </form>

        </div><!--1-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname2">Address :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname2">
            </div>
          </form>

        </div><!--2-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname1">Payment term :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname1">
            </div>
          </form>

        </div><!--3-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname4">Trading name :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname4">
            </div>
          </form>

        </div><!--4-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname5"> ZIP (or Postal) Code :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname5">
            </div>
          </form>

        </div><!--5-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname6"> Payment mean :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname6">
            </div>
          </form>

        </div><!--6-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname7"> Company code * :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname7">
            </div>
          </form>

        </div><!--7-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname8"> Post Office Box :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname8">
            </div>
          </form>

        </div><!--8-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname9"> Insurer guarantee :</label>

            </div>
            <div class="col-7">
              <div class="input-group">
                <input type="text" class="form-control" id="inputname9">
                <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
              </div>
            </div>

          </form>

        </div><!--9-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname10"> Legal ID :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname10">
            </div>
          </form>

        </div><!--10-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname11"> City :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname11">
            </div>
          </form>

        </div><!--11-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname12"> Other guarantees :</label>

            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname12">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </form>

        </div><!--12-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname13"> VAT Number :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname13">
            </div>
          </form>

        </div><!--13-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname14"> State / Province :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname14">
            </div>
          </form>

        </div><!--14-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname15">
                Credit Limit :</label>

            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname15">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </form>

        </div><!--15-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname16"> Business line :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname16">
            </div>
          </form>

        </div><!--16-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname17"> Country :  </label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname17">
            </div>
          </form>

        </div><!--17-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname18"> Late payment penalties?</label>

            </div>
            <div class="col-7 d-flex justify-content-between align-items-center ">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="exampleCheckbox1">
                <label class="form-check-label" for="exampleCheckbox1">Yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                <label class="form-check-label" for="exampleCheckbox2">No</label>
              </div>
            </div>

          </form>

        </div><!--18-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname19"> Collector :</label>

            </div>
            <div class="col-7 ">
              <select class="form-select" id="inputname19">
                <option value="" selected disabled>Nicolas Grayson (collestor)</option>
                <option value="option1">Mike Anderson (Collector)</option>
                <option value="option1">Nicolas Grayson (Collector)</option>
                <option value="option1">Paul Mayer (Administrator)</option>
                <option value="">Véronique Miguet (Credit Manager)</option>
              </select>
            </div>
          </form>

        </div><!--19-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname20"> Website :</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname20">
            </div>
          </form>

        </div><!--20-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname21"> Recovery cost?</label>

            </div>
            <div class="col-7 d-flex justify-content-between ">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="exampleCheckbox1">
                <label class="form-check-label" for="exampleCheckbox1">Yes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                <label class="form-check-label" for="exampleCheckbox2">No</label>
              </div>
            </div>
          </form>

        </div><!--21-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname22"> Collection scenario :</label>

            </div>
            <div class="col-7 ">
              <select class="form-select" id="inputname19">
                <option value="" selected disabled>scenario do relance standare</option>
                <option value="">Clients publics (FR)</option>
                <option value="">Clients risqués (FR)</option>
                <option value="">Key accounts scenario (EN)</option>
                <option value="">Modèles actions spécifiques</option>
                <option value="">Risky clients (EN)</option>
                <option value="">Scénario de relance standard (by default)</option>
                <option value="">Standard Collection Scenario</option>
                <option value="">Templates specific actions</option>
              </select>
            </div>
          </form>

        </div><!--22-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname23"></label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control visually-hidden" id="inputname23">
            </div>
          </form>

        </div><!--23-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname24">Interactive emails?</label>

            </div>
            <div class="col-7 d-flex justify-content-between  ">
              <div class="form-check ">
                <input class="form-check-input" type="checkbox" id="exampleCheckbox1">
                <label class="form-check-label" for="exampleCheckbox1">Yes</label>
              </div>
              <div class="form-check d-flex">
                <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                <label class="form-check-label " for="exampleCheckbox2">No</label>
              </div>
            </div>
          </form>

        </div><!--24-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname25"> </label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control visually-hidden" id="inputname25">
            </div>
          </form>

        </div><!--25-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname25"> </label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control visually-hidden" id="inputname25">
            </div>
          </form>

        </div><!--26-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname27">Customer custom field #1:</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname27">
            </div>
          </form>

        </div><!--27-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname25"> </label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control visually-hidden" id="inputname25">
            </div>
          </form>

        </div><!--25-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname25"> </label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control visually-hidden" id="inputname25">
            </div>
          </form>

        </div><!--26-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname30">Customer custom field #2:</label>

            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname30">
            </div>
          </form>


        </div><!--30-->
      </div><!--row-->
      <div class="container text-center">
        <button class="btn btn-primary my-5 btn-add-i">+ ADD</button>
      </div>
    </div><!--create-c-i-->


  </section><!--m-groups-->
  @endsection