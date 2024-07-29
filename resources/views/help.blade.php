@extends('layouts.app')
@section('content')
    <div class="overlay d-none"></div>
    <div class="contact-details d-none">
      <div class="row w-100" style="height: 100%">
        <div class="col-md-4 p-0 contact-responsive">
          <img
            src="./img/coding-1.jpg"
            style="height: 100%"
            class="img-fluid"
            alt="" />
        </div>
        <div class="col-md-8 p-3">
            <div class="d-flex justify-content-end"><i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeContact()" style="font-size: 15px;cursor: pointer;border-radius: 5px;"></i></div>
          <h2 class="text-center">Contact us</h2>
          <div class="row p-3">
            <div class="col-md-6">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Name *" />
            </div>
            <div class="col-md-6">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Company *" />
            </div>
            <div class="col-12">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="E-mail *" />
            </div>
            <div class="col-12">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Phone *" />
            </div>
            <div class="col-12">
              <input
                type="text"
                class="mt-3 mb-3 form-control"
                placeholder="Subject *" />
            </div>
            <div class="col-12">
              <textarea
                class="form-control mt-3 mb-3"
                placeholder="Message *"
                id="exampleFormControlTextarea1"
                rows="3"></textarea>
            </div>
            <div class="col-12 text-center">
                <div class="btn btn-primary">Send</div>
            </div>
          </div>
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
             <li class="nav-item active">
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
    <section class="">
      <div class="container-fluid">
        <h4 class="text-center p-3">Find our tutorials by theme :</h4>
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-1">
            <a href="various-definitions-tips.html" class="btn btn-primary w-100 p-4">
              <i class="fa-solid fa-clock" style="font-size: 25px"></i>
              <p>Collection & duning</p>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 mb-1">
            <a href="various-definitions-tips.html" class="btn btn-outline-primary w-100 p-4">
              <i class="fa-solid fa-chart-simple" style="font-size: 25px"></i>
              <p>Reports</p>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 mb-1">
            <a href="various-definitions-tips.html" class="btn btn-outline-primary w-100 p-4">
              <i class="fa-solid fa-bolt" style="font-size: 25px"></i>
              <p>Risk Management</p>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6 mb-1">
            <a href="various-definitions-tips.html" class="btn btn-outline-primary w-100 p-4">
              <i class="fa-solid fa-gear" style="font-size: 25px"></i>
              <p>Administration</p>
            </a>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-8">
            <div
              class="m-2 d-flex justify-content-around align-items-center p-2 shadow-sm">
              <p class="mt-1">Are you searching something ?</p>
              <div class="form-group position-relative">
                <input
                  type="text"
                  class="form-control border-primary ps-5"
                  aria-describedby="emailHelp"
                  placeholder="type your search here..." />
                <i
                  class="fa-solid fa-search text-secondary position-absolute"
                  style="top: 50%; transform: translateY(-50%); left: 10px"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="m-2 p-2 shadow-sm text-center">
              <div class="btn btn-primary mt-1" onclick="showContact()">
                <i class="fa-solid fa-envelope"></i> If you have any question,
                contact us
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4" style="font-size: 12px">
          <div class="col-lg-6">
            <div class="d-flex justify-content-around align-items-center p-2">
              <h6 class="mt-1"> Tip of the day</h6>
              <div class="btn btn-primary mt-1">
                <a
                  href="various-definitions-tips.html"
                  class="text-light text-decoration-none"
                  >See all tips</a
                >
              </div>
            </div>
            <div
              class="m-2 d-flex gap-3 h-100 justify-content-around align-items-center p-2 shadow-sm">
              <div>
                <h5 class="mt-1 text-primary">
                  Save your search criteria and reuse them quickly!
                </h5>
                <p class="mt-1">
                  Do you regularly search using the same criteria? → add the
                  search page with the desired criteria to your bookmarks in
                  your web ...
                </p>
              </div>
              <div class="">
                <img
                  src="./img/coding-1.jpg"
                  style="width: 150px; height: 100px"
                  alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-6 help-responsive">
            <div class="d-flex justify-content-around align-items-center p-2">
              <h6 class="mt-1">
                <i
                  class="fa-solid fa-book text-secondary"
                  style="font-size: 35px"></i
                > Tutorials
              </h6>
              <div class="btn btn-primary mt-1">
                <a
                  href="various-definitions-tips.html"
                  class="text-light text-decoration-none">
                  See all tutorials</a
                >
              </div>
            </div>
            <div
              class="m-2 d-flex gap-3 h-100 justify-content-around align-items-center p-2 shadow-sm">
              <div class="">
                <img
                  src="./img/coding-1.jpg"
                  style="width: 150px; height: 100px"
                  alt="" />
              </div>
              <div>
                <h5 class="mt-1 text-primary">
                  How to create and close a dispute case?
                </h5>
                <p class="mt-1">
                  The creation of a dispute comes after an exchange with the
                  client indicating a valid reason for not paying certain
                  invoices. It is done on the client sheet / statement of
                  account of open items. Dispute creation You ...
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5 pt-5" style="font-size: 12px">
          <div class="col-lg-6">
            <div class="d-flex justify-content-around align-items-center p-2">
              <h6 class="mt-1"> News</h6>
              <div class="btn btn-primary mt-1">See all news</div>
            </div>
            <div class="m-md-4 h-100 shadow-sm bg-light">
              <div
                class="d-flex gap-3 justify-content-around align-items-center p-4"
                style="height: 33.33%">
                <div>
                  <h5 class="mt-1 text-primary">
                    Different payment methods of My DSO Manager
                  </h5>
                  <p class="mt-1">
                    Credit managers strategically leverage digital payment
                    portals or platforms during collection efforts to prompt
                    clients to settle outstanding invoices. Th...
                  </p>
                </div>
                <div class="">
                  <img
                    src="./img/coding-1.jpg"
                    style="width: 150px; height: 100px"
                    alt="" />
                </div>
              </div>
              <div
                class="d-flex gap-3 justify-content-around align-items-center p-4"
                style="height: 33.33%">
                <div>
                  <h5 class="mt-1 text-primary">
                    Customize and save your searches in My DSO Manager!
                  </h5>
                  <p class="mt-1">
                    As the first step in an evolution called «Search & Assign»,
                    it is now possible to save your searches and personalized
                    reports in your My DSO Manager platform. To do this, the
                    menu...
                  </p>
                </div>
                <div class="">
                  <img
                    src="./img/coding-1.jpg"
                    style="width: 150px; height: 100px"
                    alt="" />
                </div>
              </div>
              <div
                class="d-flex gap-3 justify-content-around align-items-center p-4"
                style="height: 33.33%">
                <div>
                  <h5 class="mt-1 text-primary">
                    Your DSO report based on US GAAP calendar and formula
                  </h5>
                  <p class="mt-1">
                    The US GAAP 4-4-5 calendar is a standardized accounting
                    calendar commonly used in the United States.It divides the
                    year into four quarters, ea...
                  </p>
                </div>
                <div class="">
                  <img
                    src="./img/coding-1.jpg"
                    style="width: 150px; height: 100px"
                    alt="" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 help-responsive">
            <div class="d-flex justify-content-around align-items-center p-2">
              <h6 class="mt-1">Tutorials and news of credit management</h6>
              <div class="btn btn-primary mt-1">See more</div>
            </div>
            <div class="m-md-4 h-100 shadow-sm bg-light">
              <div
                class="d-flex gap-3 justify-content-around align-items-center p-4"
                style="height: 33.33%">
                <div class="">
                  <img
                    src="./img/coding-1.jpg"
                    style="width: 150px; height: 100px"
                    alt="" />
                </div>
                <div>
                  <h5 class="mt-1 text-primary">Collect your invoices</h5>
                  <p class="mt-1">
                    Methods and best practices for cash collection between
                    professionals at a time of digitalization of the supplier -
                    customer relationship.
                  </p>
                </div>
              </div>
              <div
                class="d-flex gap-3 justify-content-around align-items-center p-4"
                style="height: 33.33%">
                <div class="">
                  <img
                    src="./img/coding-1.jpg"
                    style="width: 150px; height: 100px"
                    alt="" />
                </div>
                <div>
                  <h5 class="mt-1 text-primary">
                    The reminder e-mail, a marketing and strategic object.
                  </h5>
                  <p class="mt-1">
                    It is estimated that more than 270 billion e-mails are sent
                    worldwide every day. This is far more than the daily
                    volum...
                  </p>
                </div>
              </div>
              <div
                class="d-flex gap-3 justify-content-around align-items-center p-4"
                style="height: 33.33%">
                <div class="">
                  <img
                    src="./img/coding-1.jpg"
                    style="width: 150px; height: 100px"
                    alt="" />
                </div>
                <div>
                  <h5 class="mt-1 text-primary">
                    Maximizing Collection Efficiency with Online Invoice
                    Management
                  </h5>
                  <p class="mt-1">
                    One of the key terms in cash collection and AR Solution, is
                    without any doubt the term: Invoice. Who hasn't had to
                    interr...
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light p-5" style="margin-top: 200px">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <p class="fw-bold mb-3">My DSO Manager</p>
          <p>Setup</p>
          <p>Pricing</p>
          <p>Company</p>
          <p>References & Case studies</p>
          <p>News</p>
          <p>Credit Management Blog</p>
        </div>
        <div class="col-sm-6 col-lg-3">
          <p class="fw-bold mb-3">My account</p>
          <p>Create my account</p>
          <p>General terms and conditions</p>
          <p>Privacy Policy</p>
          <p>Sign In</p>
        </div>
        <div class="col-sm-6 col-lg-3">
          <p class="fw-bold mb-3">Resources</p>
          <p>Online help</p>
          <p>
            Automatic import of your data (with our connectors, FTPs, SFTP, API,
            ...)
          </p>
          <p>Your data are secured</p>
        </div>
        <div class="col-sm-6 col-lg-3">
          <p class="fw-bold mb-3">Follow us</p>
          <div class="d-flex gap-4">
            <a href=""
              ><i class="fa-brands fa-linkedin" style="font-size: 25px"></i
            ></a>
            <a href=""
              ><i class="fa-brands fa-facebook" style="font-size: 25px"></i
            ></a>
            <a href=""
              ><i class="fa-brands fa-twitter" style="font-size: 25px"></i
            ></a>
            <a href=""
              ><i class="fa-brands fa-youtube" style="font-size: 25px"></i
            ></a>
          </div>
        </div>
      </div>
    </section>

    <!--scirpt Files-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="js/all.min.js"></script>
    <script src="./js/help.js"></script>
    <script src="js/searchBar.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
    <!-- <script src="js/main.js" ></script> -->
    <!--scirpt Files-->
  </body>
</html>
