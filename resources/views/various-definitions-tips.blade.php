@extends('app')
@section('content')

<body class="position-relative cairo-uniquifier">
    <div class="overlay d-none"></div>
    <div class="contact-details d-none">
        <div class="row w-100" style="height: 100%">
            <div class="col-md-4 p-0 contact-responsive">
                <img src="./img/coding-1.jpg" style="height: 100%" class="img-fluid" alt="" />
            </div>
            <div class="col-md-8 p-3">
                <div class="d-flex justify-content-end"><i class="fa-solid fa-close text-light p-2 bg-danger"
                        onclick="closeContact()" style="font-size: 15px;cursor: pointer;border-radius: 5px;"></i></div>
                <h2 class="text-center">Contact us</h2>
                <div class="row p-3">
                    <div class="col-md-6">
                        <input type="text" class="mt-3 mb-3 form-control" placeholder="Name *" />
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="mt-3 mb-3 form-control" placeholder="Company *" />
                    </div>
                    <div class="col-12">
                        <input type="text" class="mt-3 mb-3 form-control" placeholder="E-mail *" />
                    </div>
                    <div class="col-12">
                        <input type="text" class="mt-3 mb-3 form-control" placeholder="Phone *" />
                    </div>
                    <div class="col-12">
                        <input type="text" class="mt-3 mb-3 form-control" placeholder="Subject *" />
                    </div>
                    <div class="col-12">
                        <textarea class="form-control mt-3 mb-3" placeholder="Message *"
                            id="exampleFormControlTextarea1" rows="3"></textarea>
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
                        <li class="nav-item dropdown">
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
                                            <li><a class="dropdown-item text-primary" href="settings-manage-collection-scenario.html"><i class="fa-regular fa-clock"></i> Manage collection scenario</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-item-status.html"><i
                                            class="fa-regular fa-square-check"></i> Manage item status</a></li>
                                            <li><a class="dropdown-item text-primary" href="settings-manage-payment-profile.html"><i class="fa-regular fa-flag"></i> Manage payment profiles</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-risk-settings.html"><i
                                            class="fa-solid fa-bolt"></i> Manage risk</a></li>
                                <li><a class="dropdown-item text-primary" href="settings-manage-validation.html"><i
                                            class="fa-solid fa-computer"></i>Manage credit limits validation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item active">
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
    <section>
        <div class="container-fluid">
            <div class="mt-5 flex-buttons d-flex">
                <div class="btn my-btns btn-light border border-bottom-0"
                    onclick="toggleActive(this, 'various-section')"><i class="fa-solid fa-question"></i>&nbsp; Various
                    Suggestions</div>
                <div class="btn my-btns" onclick="toggleActive(this, 'definitions-section')"><i
                        class="fa-solid fa-circle-dot"></i>&nbsp; Definitions</div>
                <div class="btn my-btns" onclick="toggleActive(this, 'tips-section')"><i
                        class="fa-regular fa-lightbulb"></i>&nbsp; Tips</div>
                <hr class="mt-0">
            </div>
            <section class="my-sections" id="various-section">
                <div class="d-flex justify-content-end">
                    <div class="btn btn-primary mt-1" onclick="showContact()"><i class="fa-solid fa-envelope"></i> If
                        you have any question, contact us</div>
                </div>
                <div>
                    <ul>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Start using MY DSO MANAGER :</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to start in My DSO
                                        Manager?</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Collection & dunning :</a></h4>
                            <ul>
                                <li>
                                    <h5><a href="#" class="text-dark text-decoration-none">How to start in My DSO
                                            Manager?</a></h5>
                                    <ul>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to apply late
                                                payment penalties?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to apply recovery
                                                cost?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to assign a
                                                collection scenario to a client?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to assign a
                                                collector to a client?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to associate a
                                                colleague to your clients?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to attach files with
                                                items ?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to automate the
                                                collection actions? </a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to create a dunning
                                                action with only selected items of customer account?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to create a specific
                                                action?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to group the
                                                collection?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to ignore a
                                                transaction during the collection ?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to make live a
                                                specific action?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to manage a payment
                                                plan?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to manage payment
                                                centers?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to manage your
                                                customer contacts?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to use actions
                                                graphs? </a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> How to use the
                                                multi-criteria advanced search</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> What are the interactive
                                                emails and how to activate them? </a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> What are the internal
                                                interactive emails? </a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> What is a collection
                                                scenario?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> What is a Group and how
                                                to assign it to your customers?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> What is the action out
                                                of collection scenario?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> What is the contact for
                                                collection?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none"> Why and how to qualify
                                                items (invoices, credit notes...)?</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h5><a href="#" class="text-dark text-decoration-none">Disputes management</a></h5>
                                    <ul>
                                        <li><a href="#" class="text-dark text-decoration-none">How to create and close a
                                                dispute case?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none">How to manage disputes
                                                types?</a></li>
                                        <li><a href="#" class="text-dark text-decoration-none">What is the dispute
                                                resolution duration?</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Reports :</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">What is the cash forecast
                                        report? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the cash receipts
                                        report? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the Disputes report? </a>
                                </li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the DSO report? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the items status
                                        report? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the aging balance
                                        report? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the payment schedule
                                        report? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the KMI report ?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the overdue trend
                                        report </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the payment profile
                                        report? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the sales reporting? </a>
                                </li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the risk reporting? </a>
                                </li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the Insights report? </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Credit risk management :</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage credit limit?</a>
                                </li>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage your credit
                                        insurance?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to use risk agenda?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to validate credit limits
                                        requests?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the credit limit
                                        calculation tool?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the credit notation?</a>
                                </li>
                                <li><a href="#" class="text-dark text-decoration-none">What is the Ultimate Parent
                                        Number?</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Settings :</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">Account deletion</a></li>
                                <ul>
                                    <li><a href="#" class="text-dark text-decoration-none">How to delete your data?</a>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Automatic import </a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to import your data
                                        automatically? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Atradius data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Coface data in My DSO
                                        Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Allianz Trade data
                                        in My DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Creditsafe data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Dun & Bradstreet data
                                        in My DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Ellisphere data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Infolegale data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Intuiz+ by
                                        Altares data in My DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  EBP itool data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Odoo ERP data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  QuickBooks Intuit data
                                        in My DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Salesforce CRM data
                                        in My DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your Sellsy CRM data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your  Chorus Pro data in My
                                        DSO Manager</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Sync your data in My DSO
                                        Manager</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Customize</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to create alerts</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to customize the Global
                                        view?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">Customize My DSO Manager
                                        according to your needs</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Manage collection scenarios</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to create or modify a
                                        collection scenario action? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to create or modify a
                                        collection scenario? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage templates of emails
                                        and SMS?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage your letters
                                        templates?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to use multiple logos?</a>
                                </li>
                                <li><a href="#" class="text-dark text-decoration-none">List of tags #Hashtag</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Manage credit limits validation</a>
                            </h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to create or modify credit
                                        limit validation levels?</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Manage payment profiles</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage customers payment
                                        profiles?</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Manage status</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage statuses?</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Management of users</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to add images (photos,
                                        signatures ...) to your profile?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage users of your
                                        Multi-Entities accounts? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to manage users?  </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to reset your password?</a>
                                </li>
                                <li><a href="#" class="text-dark text-decoration-none">What are the users roles?</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Manual import </a></h4>
                            <ul style="list-style-type:lower-alpha;">
                                <li><a href="#" class="text-dark text-decoration-none">How to create your CSV files
                                        with Excel?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to create your import files
                                        with Excel?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to import your customers
                                        contacts details ?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to import your customers
                                        master data?</a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to import your data (clients,
                                        receivable, ...) with a file (CSV, TXT, or XLS) via our « Smart Upload »
                                        module  </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to import your receivable
                                        data?</a></li>
                            </ul>
                        </li>
                        <li>
                            <h4><a href="#" class="text-dark text-decoration-none">Security settings</a></h4>
                            <ul>
                                <li><a href="#" class="text-dark text-decoration-none">How to maximize the security of
                                        your account? </a></li>
                                <li><a href="#" class="text-dark text-decoration-none">How to restrict access for some
                                        users roles?</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="my-sections" id="definitions-section" style="display: none;">
                <div class="d-flex justify-content-end">
                    <div class="btn btn-primary mt-1" onclick="showContact()"><i class="fa-solid fa-envelope"></i> If
                        you have any question, contact us</div>
                </div>
                <ul>
                    <li><a href="#" class="text-dark text-decoration-none">Active user</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Address</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Aging balance </a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Associated with the client</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Average delay of payment</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Average overdue of payment</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Blocked account</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Business case</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Business line</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Business name</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Cash collection</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Cleared ?</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Client code</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Client creation date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Client custom fields</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Client modification date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Client unique key</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Collection grouped</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Collection mail</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Collection scenario </a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Collector</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Contact for collection</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Contractual DSO </a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Cost of a day of DSO</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Country</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Credit available</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Credit cost</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Credit insurance guarantee</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Credit limit</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Credit notation</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Credit risk </a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Currency</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Current receivable</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Customer comments</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Customers groups </a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Date of promise of payment</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Dispute</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">DSO</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Due date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Equivalent of a day of DSO</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">ERP item type</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">File No.</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Financial connector</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Inactive users</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Initial amount excl. Tax</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Initial amount incl. Tax</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Insurer connector</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Insurer reference</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Interactive emails</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Internal interactive email</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Internal interest rate</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Internal reply</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Issue date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Item creation date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Item custom fields</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Item modification date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Item type</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Item type My DSO Manager</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Item unique identifier</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Late payment penalties</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Leader item</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Legal ID</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Minimum amount for collection</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Mobile phone to collect ?</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Open items</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Order backlog</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Order date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Other guarantees</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Overdue</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Overdue %</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Overdue (No. of days)</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Overdue DSO </a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Overdue off forecast</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Payment center</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Payment date</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Payment mean</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Payment profile</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Post box</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Recovery cost</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Remaining amount excl. Tax</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Remaining amount incl. Tax</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Resolver</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Role</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Sales administrative</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Sales Manager</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Score</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">SIRET</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Specific action</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">State</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Statement of account</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Status</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Status type</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Temporary guarantee</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">To do list </a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Total receivable</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Trading name</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Transaction ignored in the colle</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">Ultimate Parent Number</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">URL</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">VAT number</a></li>
                    <li><a href="#" class="text-dark text-decoration-none">ZIP code</a></li>
                </ul>
            </section>
            <section class="my-sections" id="tips-section" style="display: none;">
                <div class="d-flex justify-content-end">
                    <div class="btn btn-primary mt-1" onclick="showContact()"><i class="fa-solid fa-envelope"></i> If
                        you have any question, contact us</div>
                </div>
                <ul>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Administration :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Automatically
                                    assign your colleagues to customers accounts</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">How to assign
                                    automatically collection scenarios?</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Link your CRM - ERP
                                    to My DSO Manager to access to customers accounts in 1 click</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Alerts :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Create a
                                    credit-insurer claim alert</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> Create an alert
                                    "Late customers without action done last xx days"</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Create an alert to
                                    display payment promises not met</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Customer reminders :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Activate the SMS
                                    reminder</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> Confirm the
                                    promises to pay</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> Create templates
                                    for specific actions</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Display your custom
                                    fields in your reminders with #client_custom_field1 tags</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Find out about the
                                    interest of a collection scenario without any action</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> Grouped
                                    collection: use the dedicated #Hashtag</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">How to collect past
                                    due and non-due items at once?</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">How to edit a mail
                                    coming from the scenario?</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Involve your sales
                                    manager in customer relationship management</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Quickly select a
                                    list of clients or items using a copy-paste</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Use the Hashtag
                                    #interactive_page_button</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Why associate a
                                    Collector to your clients?</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Customization :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">How to export data
                                    from My DSO Manager ?</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Use the right
                                    internet browser</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Dispute management :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Everyone on their
                                    agenda</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Update your
                                    resolver to any situation</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Reports and performances :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> "Empty" criteria
                                    during a search</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">New functionality
                                    for your Aging Balance</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Visualize your
                                    disputes in real time</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> What is your
                                    collection goal for the current month?</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Risk management :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> Display key
                                    comments from credit analysis on customer file</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><a href="#" class="text-dark text-decoration-none">Status and comments :</a></h4>
                        <ul>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Add a global
                                    comment to your customer file or to a contact</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Edit or delete
                                    comments without creating new status</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Focus on your
                                    unqualified customers</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt="">Quickly filters
                                    items of a customer account</a></li>
                            <li><a href="#" class="text-dark text-decoration-none"><img src="./img/news20230111.jpg"
                                        style="width:50px ;height:30px" class="img-fluid m-1" alt=""> Save your search
                                    criteria and reuse them quickly</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </div>
    </section>

    <section class="bg-light p-5" style="margin-top:100px">
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
                <p>Automatic import of your data
                    (with our connectors, FTPs, SFTP, API, ...)</p>
                <p>Your data are secured</p>
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="fw-bold mb-3">Follow us</p>
                <div class="d-flex gap-4">
                    <a href=""><i class="fa-brands fa-linkedin" style="font-size: 25px;"></i></a>
                    <a href=""><i class="fa-brands fa-facebook" style="font-size: 25px;"></i></a>
                    <a href=""><i class="fa-brands fa-twitter" style="font-size: 25px;"></i></a>
                    <a href=""><i class="fa-brands fa-youtube" style="font-size: 25px;"></i></a>
                </div>
            </div>
        </div>
    </section>


@endsection