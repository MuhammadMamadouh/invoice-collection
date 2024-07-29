@extends('layouts.app')
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
          <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-">
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
  <section class="m-group mt-3 mb-3">
    <div class="container">
      <div class="t-manage text-center text-capitalize">
        <p>Import and export your billing information</p>
      </div>
      <div class="router-pages text-center mt-3 mb-2">
        <a href="settings-import-export-data.html" class="scenarios-active p-2"><span><i
              class="fa-solid fa-download"></i></span> Manual upload « Smart Upload »</a>
        <a href=""><span><i class="fa-solid fa-rotate"></i></span> Automatic upload </a>
        <a href="settingHistory.html"><span><i class="fa-solid fa-building"></i></span> History of imports</a>
        <a href="settingUsers.html"><span><i class="fa-solid fa-download"></i></span> Export your data</a>
      </div>
    </div>

  </section>

  <!--select the-file-->

  <div class="s-file text-capitalize">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <p class="text-capitalize mt-3 mb-3 text-center"><strong>Select the file to import</strong> <span>(.csv or
              .txt or .xls):</span></hp>
          <form>
            <div class="c-files mt-3 mb-3 text-center">
              <input type="file">
            </div>

            <div class="files-cotians mt-3 mb-3 ">
              <h5 class="mt-3 mb-3 text-center">The file contains :</h5>
              <div class="labels d-flex">
                <div class="checks-1 d-flex">
                  <input type="radio" class="my-3 me-1" name="item" id="Items" required ng-model="notification.checked">
                  <label for="Items" class="my-3 "> <strong>Items (Invoices, ...)</strong></label>
                </div>
                <div class="checks ">
                  <input type="radio" class="my-3 me-1" name="item" id="Clients" required
                    ng-model="notification.checked">
                  <label for="Clients" class="my-3 "> <strong>Clients</strong></label>
                </div>
                <div class="checks ">
                  <input type="radio" class="my-3 me-1" name="item" id="Contacts" required
                    ng-model="notification.checked">
                  <label for="Contacts" class="my-3 "> <strong>Contacts</strong></label>
                </div>
                <div class="checks ">
                  <input type="radio" class="my-3 me-1" name="item" id="Users" required ng-model="notification.checked">
                  <label for="Users" class="my-3 "> <strong>Users (Associate)</strong></label>
                </div>
              </div>
            </div>
            <div class="after-check mt-5 mb-">
              <p class="text-center">After clicking on Submit, you can set up the import of these data.</p>
            </div>
            <div class="submit-button text-center mt-3 mb-3">
              <div class=" btn btn-primary " onclick="showTable()"><i class="fa-solid fa-check"></i> Submit</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="links-but text-center mt-5 mb-5 ">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <a href="#" class="">How to import your data manually?  </a>
        </div>
        <div class="col-6">
          <a href="#"> How to create your import files with Excel?</a>
        </div>
      </div>
    </div>
  </div>
  <div class="this-tabels d-none">
    <div class="container-fluid">
      <div class="table-import mt-3 mb-3 d-flex justify-content-around gap-5">
        <div class="import-value" style="font-size: 13.7px;">import opiton:
           <select class="select-import mx-3 " name="nbJoursExpiration">
          <option value="" selected>UTF-8 (Unicode / US format)</option>
          <option value="ISO-8859-1">ISO-8859-1 (Western European format)</option>
          <option value="ISO-8859-2">ISO-8859-2 (Central European format)</option>
          <option value="ISO-8859-3">ISO-8859-3 (South European format)</option>
          <option value="ISO-8859-4">ISO-8859-4 (North European format)</option>
          <option value="ISO-8859-5">ISO-8859-5 (Cyrillic format)</option>
          <option value="ISO-8859-6">ISO-8859-6 (Arabic format)</option>
          <option value="ISO-8859-7">ISO-8859-7 (Greek format)</option>
          <option value="ISO-8859-8">ISO-8859-8 (Hebrew format)</option>
          <option value="ISO-8859-9">ISO-8859-9 (Turkish format)</option>
          <option value="ISO-8859-10">ISO-8859-10 (Nordic format)</option>
          <option value="ISO-8859-13">ISO-8859-13 (Baltic format)</option>
          <option value="ISO-8859-14">ISO-8859-14 (Celtic format)</option>
          <option value="ISO-8859-15">ISO-8859-15 (NEW Western European format)</option>
          <option value="ISO-8859-16">ISO-8859-16 (Romanian format)</option>
          <option value="ISO-2022-JP">ISO-2022-JP</option>
          <option value="UTF-7">UTF-7</option>
          <option value="ASCII">ASCII</option>
          <option value="EUC-JP">EUC-JP</option>
          <option value="EUC-KR">EUC-KR</option>
          <option value="SJIS">SJIS</option>
          <option value="EUCJP-WIN">EUCJP-WIN</option>
          <option value="SJIS-WIN">SJIS-WIN</option>
          <option value="JIS">JIS</option>
          <option value="WINDOWS-1252">WINDOWS-1252</option>
          <option value="WINDOWS-1251">WINDOWS-1251</option>
          <option value="BIG-5">BIG-5</option>
          <option value="KOI8-R">KOI8-R</option>
          </select>  clear automatically items:
          <input class="ms-3" type="radio" for="" name="yes" id="yes">
          <label>yes</label>
          <input class="ms-3" type="radio" for="" name="yes" id="yes">
          <label for="" >no</label>
          </div>
      </div>
      <div class="check-imports text-center">
        <h5>check the association of column and click on: <a href="#">import</a></h5>
      </div>
      <div class="titles-tables d-flex justify-content-center align-items-center text-capitalize flex-wrap mt-3 mb-3 ">
        <p class=""><span class="span-tab">?</span>required column</p>
        <h6>item type</h6>
        <span>+</span>
        <h6>trans no.</h6>
        <span>+</span>
        <h6>company / company code</h6>
        <span>+</span>
        <h6>iuess data</h6>
        <span>+</span>
        <h6>due data</h6>
        <span>+</span>
        <h6>intial amount inc.tax</h6>
      </div>

      <div class="start-tabel">
        <div class="container-fluid mt-5">
          <table class="table  table-bordered">
              <thead class=" text-center">
                <tr style="color: #fff; background:#0d6efd; border: 2px solid#0d6efd; border-bottom: 2px solid #aaa1a1;">
                    <th>#</th>
                    <th>soruce name </th>
                    <th class="wide-column">no</th>
                    <th>name</th>
                    <th>reponsibility center</th>
                    <th>loaction code</th>
                    <th>payment terms </th>
                    <th>credit limit  (lcy)</th>
                    <th>blocked</th>
                    <th>phone no.</th>
                    <th>salesperson code</th>
              </thead>
              <tbody>
                  <tr style=" color: #fff; background: #0d6efd; border: 2px solid #0d6efd;">
                      <td></td>
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>   
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                      <td><select name="?" id="" style="width: 100%;">
                        <option value="">?</option>
                        <option value="">2</option>
                      </select></td>  
                    </div>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>deewan</td>
                      <td>c000001</td>
                      <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                      <td>other</td>
                      <td></td>
                      <td>cash</td>
                      <td>0</td>
                      <td>all</td>
                      <td></td>
                      <td>113</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>deewan</td>
                    <td>c000001</td>
                    <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                    <td>Enterprise</td>
                    <td></td>
                    <td>cash</td>
                    <td>0</td>
                    <td>all</td>
                    <td></td>
                    <td>113</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>deewan</td>
                  <td>c000001</td>
                  <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                  <td>Enterprise</td>
                  <td></td>
                  <td>cash</td>
                  <td>0</td>
                  <td>all</td>
                  <td></td>
                  <td>113</td>
              </tr>
              <tr>
                <td>5</td>
                <td>deewan</td>
                <td>c000001</td>
                <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
                <td>Enterprise</td>
                <td></td>
                <td>cash</td>
                <td>0</td>
                <td>all</td>
                <td></td>
                <td>113</td>
            </tr>
            <tr>
              <td>6</td>
              <td>deewan</td>
              <td>c000001</td>
              <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
              <td>Enterprise</td>
              <td></td>
              <td>cash</td>
              <td>0</td>
              <td>all</td>
              <td></td>
              <td>113</td>
          </tr>

          <tr>
            <td>7</td>
            <td>deewan</td>
            <td>c000001</td>
            <td style="width: 25%;">Mohamed Adel محمد عادل</td>
            <td>Enterprise</td>
            <td></td>
            <td>cash</td>
            <td>0</td>
            <td>all</td>
            <td></td>
            <td>113</td>
        </tr>
        <tr>
          <td>8</td>
          <td>deewan</td>
          <td>c000001</td>
          <td style="width: 25%;">Mohamed Adel محمد عادل</td>
          <td>Enterprise</td>
          <td></td>
          <td>cash</td>
          <td>0</td>
          <td>all</td>
          <td></td>
          <td>113</td>
      </tr>
      <tr>
        <td>9</td>
        <td>deewan</td>
        <td>c000001</td>
        <td style="width: 25%;">Mohamed Adel محمد عادل</td>
        <td>Enterprise</td>
        <td></td>
        <td>cash</td>
        <td>0</td>
        <td>all</td>
        <td></td>
        <td>113</td>
    </tr>

    <tr>
      <td>10</td>
      <td>deewan</td>
      <td>c000001</td>
      <td style="width: 25%;">Mohamed Adel محمد عادل</td>
      <td>Enterprise</td>
      <td></td>
      <td>cash</td>
      <td>0</td>
      <td>all</td>
      <td></td>
      <td>113</td>
  </tr>
  <tr>
    <td>11</td>
    <td>deewan</td>
    <td>c000001</td>
    <td style="width: 25%;">Mohamed Adel محمد عادل</td>
    <td>Enterprise</td>
    <td></td>
    <td>cash</td>
    <td>0</td>
    <td>all</td>
    <td></td>
    <td>113</td>
</tr>

<tr>
  <td>12</td>
  <td>deewan</td>
  <td>c000001</td>
  <td style="width: 25%;">Mohamed Adel محمد عادل</td>
  <td>Enterprise</td>
  <td></td>
  <td></td>
  <td>0</td>
  <td>all</td>
  <td></td>
  <td>113</td>
</tr>

<tr>
  <td>13</td>
  <td>deewan</td>
  <td>c000001</td>
  <td style="width: 25%">grand chairty جمعية الوفد الخيرية للخدمات الاجتماعية</td>
  <td>Enterprise</td>
  <td></td>
  <td>cash</td>
  <td>0</td>
  <td>all</td>
  <td></td>
  <td>113</td>
</tr>
              </tbody>
          </table>
      </div>
  
    </div>


  </div>
  <!--select the-file-->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <!-- <script src="../js/main.js"></script> -->
  <script src="js/searchBar.js"></script>
  <script>
    new WOW().init();
  </script>
</body>

</html>