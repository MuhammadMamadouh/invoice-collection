@extends('layouts.app')
@section('content')
  <div class="overlay d-none" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;"></div>
  <div class="position-fixed add-level-div d-none" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
      <span class="btn btn-secondary position-absolute" onclick="hideAddLevelDiv()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname18"> Credit Limit:</label>
          </div>
          <div class="col-8">
            <div class="input-group">
              <span class="input-group-text ">Until</span>
              <input type="text" class="form-control " id="inputname18">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </div>
        </form>
      </div><!--24-->
  
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname20"> Validated By:</label>
          </div>
          <div class="col-8">
              <select class="form-select" id="inputname20" aria-label="Default select example">
                <option value="1">Brad Jackson(Sales Manager)</option>
                <option value="1">Juse Durant(Sales Manager)</option>
                <option value="1">Paul Mayer(Sales Manager)</option>
                <option value="1">Thomas Smith(Executive Officer)</option>
                <option value="1">
                  Vironica Campbell(Sales Administration)
                </option>
              </select>
          </div>
        </form>
      </div><!--24-->
      <div class="text-center mt-3">
        <div class="btn btn-success"><i class="fa-solid fa-plus"></i> Add</div>
      </div>
    </div>
  </div>
  <div class="position-fixed edit-level-div d-none" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
      <span class="btn btn-secondary position-absolute" onclick="hideAddLevelDiv()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname24"> Credit Limit:</label>
          </div>
          <div class="col-8">
            <div class="input-group">
              <span class="input-group-text ">Until</span>
              <input type="text" class="form-control " id="inputname24">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </div>
        </form>
      </div><!--24-->
  
      <div class="my-2">
        <form class="d-flex align-items-center">
          <div class="col-4 ">
            <label for="inputname28"> Validated By:</label>
          </div>
          <div class="col-8">
              <select class="form-select" id="inputname28" aria-label="Default select example">
                <option value="1">Brad Jackson(Sales Manager)</option>
                <option value="1">Juse Durant(Sales Manager)</option>
                <option value="1">Paul Mayer(Sales Manager)</option>
                <option value="1">Thomas Smith(Executive Officer)</option>
                <option value="1">
                  Vironica Campbell(Sales Administration)
                </option>
              </select>
          </div>
        </form>
      </div><!--24-->
      <div class="text-center mt-3">
        <div class="btn btn-success"><i class="fa-solid fa-check"></i> Modify</div>
      </div>
    </div>
  </div>

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

  <div class="our-tiles mt-5">
    <div class="container">
      <h4 class="text-capitalize text-center">Manage Credit limits validation</h4>

    </div>
  </div>

  <div class="change-sec-with-button d-flex mb-2">
    <div class="container">
      <button class="scenarios-active p-2" onclick="tableOne()" id="activeOne"><span><i class="fa-solid fa-flag"></i></span> Validation
        levels</button>
      <button onclick="tableTwo()" class="p-2" id="activeTwo"><span><i class="fa-solid fa-building"></i></span> Requests history</button>
      <button onclick="tableThree()" class="p-2" id="activeThree"><span><i class="fa-solid fa-gear"></i></span> Settings</button>
    </div>
  </div>

 <!--three-buttons-->
  <!-- <div class="four-buttons text-capitalize mb-2">
  <div class="container">
      <a href="" class="text-capitalize validation">validation level</a>
      <a href="#" class="request-history">Request history</a>
    <a href="#"><span><i class="fa-solid fa-gear"></i></span>settings</a>
</div>
</div> -->
  <!--three-buttons-->
  <!--the-table-->

  <!--table-Two-->
  <section class="removtabels"  id="tabOne">
    <div class="removetabelstwo container-fluid mt-2">
      <div class="end-button text-end">
        <div class="container mt-3 mb-3">
          <button class="text-capitalize btn btn-primary" onclick="showAddLevelDiv()"><i class="fa-solid fa-plus px-1"></i></span> Add A Validation Level</button>
        </div>
      </div>
      <div class="the-table-title text-capitalize">
        <div class="row mb-2">
          <div class="col-md-2 col-4 text-center">
            <h6>credit limit</h6>
          </div>
          <div class="col-md-8 col-6 text-center">
            <h6>validation by</h6>
          </div>
        </div>
        <div class="the-table text-capitalize ">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div class="units mt-2 mb-2">
                  <p class="mt-2 mb-2  text-light">1 until <span class="dark"><strong>7.500€</strong></span></p>
                  <div class="desc-units mt-2 mb-2">
                    <span class="fw-bold "><img src="images/per.png" class="img-fluid" alt=""> Nicolas Grayson
                      (Collector)</span>
                    <a href="#" class="">nicolas.durant@demosolutions.com</a>
                  </div>
                  <div class="delete-and-edit mt-2 mb-2 ">
                    <button onclick="showEditLevelDiv()"><span><i class="fa-solid fa-pen"></i></span></button>
                    <button class=""><span><i class="fa-solid fa-trash"></i></span></button>
                  </div>
                </div>
                <hr>
                <div class="units mt-2 mb-2">
                  <p class="mt-2 mb-2  text-light">2 until <span class="dark"><strong>7.500€</strong></span></p>
                  <div class="desc-units mt-2 mb-2">
                    <span class="fw-bold "><img src="images/per.png" class="img-fluid" alt=""> Nicolas Grayson
                      (Collector)</span>
                    <a href="#" class="">nicolas.durant@demosolutions.com</a>
                  </div>
                  <div class="delete-and-edit mt-2 mb-2 ">
                    <button onclick="showEditLevelDiv()"><span><i class="fa-solid fa-pen"></i></span></button>
                    <button class=""><span><i class="fa-solid fa-trash"></i></span></button>
                  </div>
                </div>
              </div>
              <hr>
              <div class="units mt-2 mb-2">
                <p class="mt-2 mb-2  text-light">3 until <span class="dark"><strong>7.500€</strong></span></p>
                <div class="desc-units mt-2 mb-2">
                  <span class="fw-bold "><img src="images/per.png" class="img-fluid" alt=""> Nicolas Grayson
                    (Collector)</span>
                  <a href="#" class="">nicolas.durant@demosolutions.com</a>
                </div>
                <div class="delete-and-edit mt-2 mb-2 ">
                  <button onclick="showEditLevelDiv()"><span><i class="fa-solid fa-pen"></i></span></button>
                  <button class=""><span><i class="fa-solid fa-trash"></i></span></button>
                </div>
              </div>
            </div>
            <hr>
            <div class="units mt-2 mb-2">
              <p class="mt-2 mb-2  text-light">4 until <span class="dark"><strong>7.500€</strong></span></p>
              <div class="desc-units mt-2 mb-2">
                <span class="fw-bold "><img src="images/per.png" class="img-fluid" alt=""> Nicolas Grayson
                  (Collector)</span>
                <a href="#" class="">nicolas.durant@demosolutions.com</a>
              </div>
              <div class="delete-and-edit mt-2 mb-2 ">
                <button onclick="showEditLevelDiv()"><span><i class="fa-solid fa-pen"></i></span></button>
                <button class=""><span><i class="fa-solid fa-trash"></i></span></button>
              </div>
            </div>
            <hr>
            <div class="units mt-2 mb-2">
              <p class="mt-2 mb-2  text-light">5 until <span class="dark"><strong>7.500€</strong></span></p>
              <div class="desc-units mt-2 mb-2">
                <span class="fw-bold "><img src="images/per.png" class="img-fluid" alt=""> Nicolas Grayson
                  (Collector)</span>
                <a href="#" class="">nicolas.durant@demosolutions.com</a>
              </div>
              <div class="delete-and-edit mt-2 mb-2 ">
                <button onclick="showEditLevelDiv()"><span><i class="fa-solid fa-pen"></i></span></button>
                <button class=""><span><i class="fa-solid fa-trash"></i></span></button>
              </div>
            </div>
            <hr>

          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!--the-table-->
  <div class="tables-two-validations d-none " id="tabTwo">
    <div class="d-flex justify-content-end container-fluid">
      <div class="form-group col-md-4 col-sm-6">
        <select class="form-select m-2" aria-label="Default select example">
          <option value="" selected disabled>
            Credit limit validation request :
          </option>
          <option value="1">Validated</option>
          <option value="2">Refused / the credit limit is not validated</option>
          <option value="3">Waiting for validation</option>
        </select>
      </div>
    </div>
    <div class="two-sec-start-and-end mt-3 mb-3 d-flex justify-content-between container">
      <div class="form-group d-flex align-items-center">
        <select class="form-select w-auto m-2" aria-label="Default select example">
          <option selected value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
          <option value="134">134</option>
        </select>
        <div>actions display on 134</div>
      </div>
      <form>
        <div class="form-group">
          <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Multi-columns search" />
        </div>
      </form>
    </div>
    <div class="table-responsive" id="table-scroll">
      <table class="table  px-2">
        <thead>
          <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
            <th>
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Request date</h6>
              </div>
              
            </th>
            <th>
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>request status</h6>
              </div>
              
            </th>
            <th>
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>credit limit</h6>
              </div>
              
            </th>
            <th>
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>Request Made By</h6>
              </div>
              
            </th>
            <th>
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>validators</h6>
              </div>
              
            </th>
            <th>
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>company code</h6>
              </div>
              
            </th>
            <th>
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <h6>company / Business name</h6>
              </div>
              
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center gray-colors-validations">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span> Canceled</p>
            </td>
            <td>
              <p> 100,000 €</p>
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a></p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>
          </tr>

          <tr class="text-center ">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span> Canceled</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>
          <tr class="text-center gray-colors-validations">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span>Canceled</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a></p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>
          <tr class="text-center">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p class="text-black-50"><span><i class="fa-solid fa-x"></i></span> Canceled</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a></p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>
          <tr class="text-center green-colors-red">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p class="text-danger"><span><i class="fa-solid fa-x"></i></span> Refused</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p class=""><i class="fa-solid fa-x text-danger"></i> Mike Anderson</p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>
          <tr class="text-center green-colors-validations">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a></p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>
          <tr class="text-center green-colors-validations">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a></p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>
          <tr class="text-center green-colors-validations">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a></p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>
          <tr class="text-center green-colors-validations">

            <td>
              <p>2024-06-07</p>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span> validate</p>
            </td>
            <td>
              <p> 100,000 €
            </td>
            <td class="d-flex">
              <p><img src="img/person2.jpg" alt=""></p> <a href="#"> Paul Mayer</a>
            </td>
            <td>
              <p><span><i class="fa-solid fa-check text-success"></i></span><a href="">My DSO Manager</a></p>
            </td>
            <td><a href="#">360108</a></td>
            <td><a href="#">Dsmstlouis</a></td>


          </tr>

        </tbody>
      </table>
    </div>
  </div>
  <div class="settings-tables-show d-none" id="tabThree">
    <div class="container-fluid">
      <div class="setingone mt-3 mb-3 d-flex justify-content-between">
        <h6>If no validation took place </h6>
        <div class="col-lg-6" style="font-size: 13.7px;">If no validation took place
           <select name="nbJoursExpiration">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30" selected="selected">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
            <option value="60">60</option>
            <option value="61">61</option>
            <option value="62">62</option>
            <option value="63">63</option>
            <option value="64">64</option>
            <option value="65">65</option>
            <option value="66">66</option>
            <option value="67">67</option>
            <option value="68">68</option>
            <option value="69">69</option>
            <option value="70">70</option>
            <option value="71">71</option>
            <option value="72">72</option>
            <option value="73">73</option>
            <option value="74">74</option>
            <option value="75">75</option>
            <option value="76">76</option>
            <option value="77">77</option>
            <option value="78">78</option>
            <option value="79">79</option>
            <option value="80">80</option>
            <option value="81">81</option>
            <option value="82">82</option>
            <option value="83">83</option>
            <option value="84">84</option>
            <option value="85">85</option>
            <option value="86">86</option>
            <option value="87">87</option>
            <option value="88">88</option>
            <option value="89">89</option>
            <option value="90">90</option>
            <option value="91">91</option>
            <option value="92">92</option>
            <option value="93">93</option>
            <option value="94">94</option>
            <option value="95">95</option>
            <option value="96">96</option>
            <option value="97">97</option>
            <option value="98">98</option>
            <option value="99">99</option>
            <option value="100">100</option>
            <option value="101">101</option>
            <option value="102">102</option>
            <option value="103">103</option>
            <option value="104">104</option>
            <option value="105">105</option>
            <option value="106">106</option>
            <option value="107">107</option>
            <option value="108">108</option>
            <option value="109">109</option>
            <option value="110">110</option>
            <option value="111">111</option>
            <option value="112">112</option>
            <option value="113">113</option>
            <option value="114">114</option>
            <option value="115">115</option>
            <option value="116">116</option>
            <option value="117">117</option>
            <option value="118">118</option>
            <option value="119">119</option>
            <option value="120">120</option>
            <option value="121">121</option>
            <option value="122">122</option>
            <option value="123">123</option>
            <option value="124">124</option>
            <option value="125">125</option>
            <option value="126">126</option>
            <option value="127">127</option>
            <option value="128">128</option>
            <option value="129">129</option>
            <option value="130">130</option>
            <option value="131">131</option>
            <option value="132">132</option>
            <option value="133">133</option>
            <option value="134">134</option>
            <option value="135">135</option>
            <option value="136">136</option>
            <option value="137">137</option>
            <option value="138">138</option>
            <option value="139">139</option>
            <option value="140">140</option>
            <option value="141">141</option>
            <option value="142">142</option>
            <option value="143">143</option>
            <option value="144">144</option>
            <option value="145">145</option>
            <option value="146">146</option>
            <option value="147">147</option>
            <option value="148">148</option>
            <option value="149">149</option>
            <option value="150">150</option>
            <option value="151">151</option>
            <option value="152">152</option>
            <option value="153">153</option>
            <option value="154">154</option>
            <option value="155">155</option>
            <option value="156">156</option>
            <option value="157">157</option>
            <option value="158">158</option>
            <option value="159">159</option>
            <option value="160">160</option>
            <option value="161">161</option>
            <option value="162">162</option>
            <option value="163">163</option>
            <option value="164">164</option>
            <option value="165">165</option>
            <option value="166">166</option>
            <option value="167">167</option>
            <option value="168">168</option>
            <option value="169">169</option>
            <option value="170">170</option>
            <option value="171">171</option>
            <option value="172">172</option>
            <option value="173">173</option>
            <option value="174">174</option>
            <option value="175">175</option>
            <option value="176">176</option>
            <option value="177">177</option>
            <option value="178">178</option>
            <option value="179">179</option>
            <option value="180">180</option>
            <option value="181">181</option>
            <option value="182">182</option>
            <option value="183">183</option>
            <option value="184">184</option>
            <option value="185">185</option>
            <option value="186">186</option>
            <option value="187">187</option>
            <option value="188">188</option>
            <option value="189">189</option>
            <option value="190">190</option>
            <option value="191">191</option>
            <option value="192">192</option>
            <option value="193">193</option>
            <option value="194">194</option>
            <option value="195">195</option>
            <option value="196">196</option>
            <option value="197">197</option>
            <option value="198">198</option>
            <option value="199">199</option>
            <option value="200">200</option>
            <option value="201">201</option>
            <option value="202">202</option>
            <option value="203">203</option>
            <option value="204">204</option>
            <option value="205">205</option>
            <option value="206">206</option>
            <option value="207">207</option>
            <option value="208">208</option>
            <option value="209">209</option>
            <option value="210">210</option>
            <option value="211">211</option>
            <option value="212">212</option>
            <option value="213">213</option>
            <option value="214">214</option>
            <option value="215">215</option>
            <option value="216">216</option>
            <option value="217">217</option>
            <option value="218">218</option>
            <option value="219">219</option>
            <option value="220">220</option>
            <option value="221">221</option>
            <option value="222">222</option>
            <option value="223">223</option>
            <option value="224">224</option>
            <option value="225">225</option>
            <option value="226">226</option>
            <option value="227">227</option>
            <option value="228">228</option>
            <option value="229">229</option>
            <option value="230">230</option>
            <option value="231">231</option>
            <option value="232">232</option>
            <option value="233">233</option>
            <option value="234">234</option>
            <option value="235">235</option>
            <option value="236">236</option>
            <option value="237">237</option>
            <option value="238">238</option>
            <option value="239">239</option>
            <option value="240">240</option>
            <option value="241">241</option>
            <option value="242">242</option>
            <option value="243">243</option>
            <option value="244">244</option>
            <option value="245">245</option>
            <option value="246">246</option>
            <option value="247">247</option>
            <option value="248">248</option>
            <option value="249">249</option>
            <option value="250">250</option>
            <option value="251">251</option>
            <option value="252">252</option>
            <option value="253">253</option>
            <option value="254">254</option>
            <option value="255">255</option>
            <option value="256">256</option>
            <option value="257">257</option>
            <option value="258">258</option>
            <option value="259">259</option>
            <option value="260">260</option>
            <option value="261">261</option>
            <option value="262">262</option>
            <option value="263">263</option>
            <option value="264">264</option>
            <option value="265">265</option>
            <option value="266">266</option>
            <option value="267">267</option>
            <option value="268">268</option>
            <option value="269">269</option>
            <option value="270">270</option>
            <option value="271">271</option>
            <option value="272">272</option>
            <option value="273">273</option>
            <option value="274">274</option>
            <option value="275">275</option>
            <option value="276">276</option>
            <option value="277">277</option>
            <option value="278">278</option>
            <option value="279">279</option>
            <option value="280">280</option>
            <option value="281">281</option>
            <option value="282">282</option>
            <option value="283">283</option>
            <option value="284">284</option>
            <option value="285">285</option>
            <option value="286">286</option>
            <option value="287">287</option>
            <option value="288">288</option>
            <option value="289">289</option>
            <option value="290">290</option>
            <option value="291">291</option>
            <option value="292">292</option>
            <option value="293">293</option>
            <option value="294">294</option>
            <option value="295">295</option>
            <option value="296">296</option>
            <option value="297">297</option>
            <option value="298">298</option>
            <option value="299">299</option>
            <option value="300">300</option>
            <option value="301">301</option>
            <option value="302">302</option>
            <option value="303">303</option>
            <option value="304">304</option>
            <option value="305">305</option>
            <option value="306">306</option>
            <option value="307">307</option>
            <option value="308">308</option>
            <option value="309">309</option>
            <option value="310">310</option>
            <option value="311">311</option>
            <option value="312">312</option>
            <option value="313">313</option>
            <option value="314">314</option>
            <option value="315">315</option>
            <option value="316">316</option>
            <option value="317">317</option>
            <option value="318">318</option>
            <option value="319">319</option>
            <option value="320">320</option>
            <option value="321">321</option>
            <option value="322">322</option>
            <option value="323">323</option>
            <option value="324">324</option>
            <option value="325">325</option>
            <option value="326">326</option>
            <option value="327">327</option>
            <option value="328">328</option>
            <option value="329">329</option>
            <option value="330">330</option>
            <option value="331">331</option>
            <option value="332">332</option>
            <option value="333">333</option>
            <option value="334">334</option>
            <option value="335">335</option>
            <option value="336">336</option>
            <option value="337">337</option>
            <option value="338">338</option>
            <option value="339">339</option>
            <option value="340">340</option>
            <option value="341">341</option>
            <option value="342">342</option>
            <option value="343">343</option>
            <option value="344">344</option>
            <option value="345">345</option>
            <option value="346">346</option>
            <option value="347">347</option>
            <option value="348">348</option>
            <option value="349">349</option>
            <option value="350">350</option>
            <option value="351">351</option>
            <option value="352">352</option>
            <option value="353">353</option>
            <option value="354">354</option>
            <option value="355">355</option>
            <option value="356">356</option>
            <option value="357">357</option>
            <option value="358">358</option>
            <option value="359">359</option>
            <option value="360">360</option>
            <option value="361">361</option>
            <option value="362">362</option>
            <option value="363">363</option>
            <option value="364">364</option>
            <option value="365">365</option>
          </select> 
          days after the request then <select name="actionExpiration">
            <option value="cancel" selected="selected">Cancel</option>
            <option value="valid">Validate</option>
          </select> it</div>
      </div>
      <div class="setingone mt-3 mb-3 d-flex justify-content-between">
        <p>Request validation of lower levels?</p>
        <div class="col-lg-6">
          <div class=" checks-bx d-flex ">
            <input type="radio" name="yes" id="yes">
            <label for="yes">yes</label>
            <input type="radio" name="yes" id="no">
            <label for="no">no</label>
          </div>
        </div>
      </div>
      <div class="valid-buttons text-center mt-3 mb-3">
        <a href="#" class="btn btn-success"><span><i class="fa-solid fa-check"></i></span> submit</a>
      </div>
    </div>
  </div>
  <!--table-Two-->
  <!--scirpt Files-->

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>new WOW().init();</script>
  <script src="js/all.min.js"></script>
  <script src="js/searchBar.js"></script>
  <script src="js/validation.js"></script>
  <script src="./js/risk.js"></script>
  <!-- <script src="js/main.js" ></script> -->
  <!--scirpt Files-->
</body>

</html>