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
            <li class="nav-item active">
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
    <section class="mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="collectionManualActions.html" class="m-1 w-100 btn btn-outline-primary  p-3">
              <i class="fa-solid fa-hand-point-right" ></i> Manual actions
              <span class="badge bg-danger">200</span>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="collection.html" class="m-1 w-100 btn btn-outline-primary p-3"><i
                class="fa-solid fa-arrows-rotate" ></i> Automatic actions
              <i class="fa-solid fa-triangle-exclamation"></i>
              <span class="badge bg-primary">184</span></a>
          </div>
          <!--btns-->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="collectionActionsHistoy.html" class="m-1 w-100 btn btn-outline-primary p-3"><i class="fa-solid fa-bars-staggered"></i>
              Actions history</a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="collectionAlerts.html" class="m-1 w-100 btn btn-primary p-3"><i
                class="fa-solid fa-bell" ></i> My Alerts
              <span class="badge bg-danger">200</span></a>
          </div>
        </div>
        <hr />
        <div>
          <div class="row text-center" style="background-color: #006bff14">
            <p class="p-1 mt-3">
              <i class="fa-solid fa-circle-info text-primary"></i> Setup here
              custom alerts to identify accounts in anomaly.<a href="#"
                > Read more</a
              >
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-4">
      <div class="container-fluid">
        <div class="row table-alerts-container">
          <div class="col-sm-4 mb-3">
            <div
              class="d-flex all-alerts-container justify-content-between align-items-center p-2 bg-primary">
              <h6 class="text-light ms-2">All Alerts</h6>
              <h6 class="badge bg-danger me-2 mt-1">200</h6>
            </div>
            <div
              class="d-flex all-alerts-child-red mb-1 justify-content-between align-items-center p-2"
              style="background-color: #006bff14">
              <p class="ms-2 w-50" style="color: #777676">
                Customer receivable above cridit limit
              </p>
              <h6 class="badge bg-danger me-2 mt-1">200</h6>
            </div>
            <div
              class="d-flex all-alerts-child-blue mb-1 justify-content-between align-items-center p-2"
              style="background-color: #006bff14">
              <p class="ms-2 w-50" style="color: #777676">
                Customer receivable above cridit limit
              </p>
              <h6 class="badge bg-danger me-2 mt-1">200</h6>
            </div>
            <div
              class="d-flex all-alerts-child-blue mb-1 justify-content-between align-items-center p-2"
              style="background-color: #006bff14">
              <p class="ms-2 w-50" style="color: #777676">
                Customer receivable above cridit limit
              </p>
              <h6 class="badge bg-danger me-2 mt-1">200</h6>
            </div>
            <div
              class="d-flex all-alerts-child-red mb-1 justify-content-between align-items-center p-2"
              style="background-color: #006bff14">
              <p class="ms-2 w-50" style="color: #777676">
                Customer receivable above cridit limit
              </p>
              <h6 class="badge bg-danger me-2 mt-1">200</h6>
            </div>
            <div
              class="d-flex all-alerts-child-blue mb-1 justify-content-between align-items-center p-2"
              style="background-color: #006bff14">
              <p class="ms-2 w-50" style="color: #777676">
                Customer receivable above cridit limit
              </p>
              <h6 class="badge bg-danger me-2 mt-1">200</h6>
            </div>
            <div class="all-alerts-end p-2 bg-primary">
              <h6 class="text-light text-center">
                <i class="fa-solid fa-plus"></i> New alert
              </h6>
            </div>
          </div>
          <div class="col-sm-8 px-4">
            <div class="row mb-3">
              <div class="col-3">
                <p>Alert Name</p>
              </div>
              <div class="col-9">
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-3">
                <p>Alert visible for all user?</p>
              </div>
              <div class="col-9 d-flex gap-5 align-items-center">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="visible"
                    id="visibleYes"
                    checked />
                  <label class="form-check-label" for="visibleYes"> Yes </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="visible"
                    id="visibleNo" />
                  <label class="form-check-label" for="visibleNo"> No </label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-3">
                <p>Alert Type:</p>
              </div>
              <div class="col-9 d-flex gap-5 align-items-center">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="alertType"
                    id="alertTypeCollection" />
                  <label class="form-check-label" for="alertTypeCollection">
                    Collection
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="alertType"
                    id="alertTypeRisk"
                    checked />
                  <label class="form-check-label" for="alertTypeRisk">
                    Risk
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="alertType"
                    id="alertTypeNone" />
                  <label class="form-check-label" for="alertTypeNone">
                    None
                  </label>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-3">
                <p>Alert Level:</p>
              </div>
              <div class="col-9">
                <div class="form-group">
                  <select
                    class="form-select "
                    aria-label="Default select example">
                    <option value="0" selected>Not defined</option>
                    <option value="1">Very weak</option>
                    <option value="2">weak</option>
                    <option value="3">Medium</option>
                    <option value="3">Important</option>
                    <option value="3">Critical</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-3" id="filterSection">
              <div class="col-3">
                <div class="form-group">
                  <select
                    class="form-select"
                    aria-label="Default select example">
                    <option value="0" disabled selected>Filter by:</option>
                    <option value="bloque" class="type-company">
                      Account blocked?
                    </option>
                    <option value="adresse" class="type-company">
                      Address
                    </option>
                    <option value="onlyContact" class="type-company">
                      Associated with client
                    </option>
                    <option value="depassement" class="type-company">
                      Authorized credit exceeded
                    </option>
                    <option value="marche" class="type-company">
                      Business line
                    </option>
                    <option value="ville" class="type-company">City</option>
                    <option value="grouper_relance" class="type-company">
                      Collection grouped?
                    </option>
                    <option value="onlyScenario" class="type-company">
                      Collection scenario
                    </option>
                    <option value="onlyGestionnaire" class="type-company">
                      Collector
                    </option>
                    <option value="raison_sociale" class="type-company">
                      Company / Business name
                    </option>
                    <option value="numero_acheteur" class="type-company">
                      Company code
                    </option>
                    <option
                      value="contactRecouvrementDefined"
                      class="type-company">
                      Contact for collection?
                    </option>
                    <option value="id_pays" class="type-company">
                      Country
                    </option>
                    <option value="client_date_creation" class="type-company">
                      Creation date
                    </option>
                    <option value="limite_credit" class="type-company">
                      Credit Limit
                    </option>
                    <option
                      value="notation_credit_category"
                      class="type-company">
                      Credit notation - Risk category
                    </option>
                    <option value="notation_credit_note" class="type-company">
                      Credit notation - Score out of 10
                    </option>
                    <option value="encours_non_echu" class="type-company">
                      Current receivable
                    </option>
                    <option value="client_field_perso1" class="type-company">
                      Customer custom field #1
                    </option>
                    <option value="client_field_perso2" class="type-company">
                      Customer custom field #2
                    </option>
                    <option
                      value="ellisphere_legalProceeding"
                      class="type-company">
                      Ellisphere - Legal proceeding
                    </option>
                    <option
                      value="ellisphere_date_modification"
                      class="type-company">
                      Ellisphere - Modification date
                    </option>
                    <option value="ellisphere_payrank" class="type-company">
                      Ellisphere - PayRANK
                    </option>
                    <option
                      value="ellisphere_delaiReglementFournisseur"
                      class="type-company">
                      Ellisphere - Payment deadline
                    </option>
                    <option
                      value="ellisphere_recommended_credit"
                      class="type-company">
                      Ellisphere - Recommended Credit
                    </option>
                    <option value="ellisphere_riskclass" class="type-company">
                      Ellisphere - Risk class
                    </option>
                    <option value="ellisphere_score" class="type-company">
                      Ellisphere - Score
                    </option>
                    <option value="emailContactDefined" class="type-company">
                      Email to collect?
                    </option>
                    <option value="groupe" class="type-company">Group</option>
                    <option value="garantie_assureur" class="type-company">
                      Insurer guarantee
                    </option>
                    <option value="reference_assureur" class="type-company">
                      Insurer reference
                    </option>
                    <option value="emailInteractif" class="type-company">
                      Interactive emails?
                    </option>
                    <option value="derniere_relance" class="type-company">
                      Last action
                    </option>
                    <option value="penalites_retard" class="type-company">
                      Late payment penalties?
                    </option>
                    <option value="identifiant_legal" class="type-company">
                      Legal ID
                    </option>
                    <option
                      value="mobilePhoneContactDefined"
                      class="type-company">
                      Mobile phone to collect?
                    </option>
                    <option
                      value="client_date_modification"
                      class="type-company">
                      Modification date
                    </option>
                    <option
                      value="montant_portefeuille_commandes"
                      class="type-company">
                      Order backlog
                    </option>
                    <option value="autre_garantie" class="type-company">
                      Other guarantees
                    </option>
                    <option value="retard" class="type-company">Overdue</option>
                    <option value="retard_periode" class="type-company">
                      Overdue +120&nbsp;d
                    </option>
                    <option value="methode_paiement" class="type-company">
                      Payment mean
                    </option>
                    <option value="profilpayeur" class="type-company">
                      Payment profile
                    </option>
                    <option value="delai_paiement" class="type-company">
                      Payment term
                    </option>
                    <option value="boite_postale" class="type-company">
                      Post Office Box
                    </option>
                    <option value="encours" class="type-company">
                      Receivable
                    </option>
                    <option value="indemnite_forfaitaire" class="type-company">
                      Recovery cost?
                    </option>
                    <option value="score" class="type-company">Score</option>
                    <option value="state" class="type-company">
                      State / Province
                    </option>
                    <option value="garantie_temporaire" class="type-company">
                      Temporary guarantee
                    </option>
                    <option
                      value="garantie_temporaire_date_fin"
                      class="type-company">
                      Temporary guarantee - End date
                    </option>
                    <option
                      value="garantie_temporaire_date_deb"
                      class="type-company">
                      Temporary guarantee - Start date
                    </option>
                    <option value="encours_total" class="type-company">
                      Total receivable
                    </option>
                    <option value="nom_commercial" class="type-company">
                      Trading name
                    </option>
                    <option value="code_groupement" class="type-company">
                      Ultimate parent code
                    </option>
                    <option value="client_unique_key" class="type-company">
                      Unique client identifier
                    </option>
                    <option value="numero_tva" class="type-company">
                      VAT Number
                    </option>
                    <option value="url" class="type-company">Website</option>
                    <option value="code_postal" class="type-company">
                      ZIP (or Postal) Code
                    </option>
                    <option value=""></option>
                    <option value="item_associated_filename" class="type-item">
                      Associate file - Name
                    </option>
                    <option
                      value="item_associated_file_external"
                      class="type-item">
                      Associate file - Visible in external emails?
                    </option>
                    <option
                      value="item_associated_file_internal"
                      class="type-item">
                      Associate file - Visible in internal emails?
                    </option>
                    <option value="item_associated_file" class="type-item">
                      Associate file?
                    </option>
                    <option value="nom_affaire" class="type-item">
                      Business case
                    </option>
                    <option value="item_date_creation" class="type-item">
                      Creation date
                    </option>
                    <option value="devise" class="type-item">Currency</option>
                    <option value="item_field_perso1" class="type-item">
                      Custom field #1
                    </option>
                    <option value="item_field_perso2" class="type-item">
                      Custom field #2
                    </option>
                    <option
                      value="item_commentaire_client_auteur"
                      class="type-item">
                      Customer comments - Author
                    </option>
                    <option value="item_commentaire_client" class="type-item">
                      Customer comments - Comments
                    </option>
                    <option
                      value="item_commentaire_client_date"
                      class="type-item">
                      Customer comments - Date
                    </option>
                    <option
                      value="item_commentaire_client_email"
                      class="type-item">
                      Customer comments - E-mail
                    </option>
                    <option value="date_promesse_reglement" class="type-item">
                      Date of promise of payment
                    </option>
                    <option value="date_echeance" class="type-item">
                      Due date
                    </option>
                    <option value="erp_type_piece" class="type-item">
                      ERP item type
                    </option>
                    <option value="numero_dossier" class="type-item">
                      File No.
                    </option>
                    <option value="montant_ht" class="type-item">
                      Initial amount exc. Tax
                    </option>
                    <option value="montant_ttc" class="type-item">
                      Initial amount inc. Tax
                    </option>
                    <option
                      value="item_reponse_interne_auteur"
                      class="type-item">
                      Internal reply - Author
                    </option>
                    <option value="item_reponse_interne" class="type-item">
                      Internal reply - Comments
                    </option>
                    <option value="item_reponse_interne_date" class="type-item">
                      Internal reply - Date
                    </option>
                    <option
                      value="item_reponse_interne_email"
                      class="type-item">
                      Internal reply - E-mail
                    </option>
                    <option value="date_piece" class="type-item">
                      Issue date
                    </option>
                    <option value="perso_type_piece" class="type-item">
                      Item type
                    </option>
                    <option value="type_piece" class="type-item">
                      Item type My DSO Manager
                    </option>
                    <option value="item_date_modification" class="type-item">
                      Modification date
                    </option>
                    <option value="date_commande" class="type-item">
                      Order date
                    </option>
                    <option value="retard_compared_today" class="type-item">
                      Overdue (No. of days)
                    </option>
                    <option value="numero_commande" class="type-item">
                      PO No.
                    </option>
                    <option value="date_solde" class="type-item">
                      Payment date
                    </option>
                    <option value="montant_restant_ht" class="type-item">
                      Remaining amount exc. Tax
                    </option>
                    <option value="montant_restant_ttc" class="type-item">
                      Remaining amount inc. Tax
                    </option>
                    <option value="onlyResolver" class="type-item">
                      Resolver
                    </option>
                    <option value="acteur_adv" class="type-item">
                      Sales administrative
                    </option>
                    <option value="commercial" class="type-item">
                      Sales manager
                    </option>
                    <option value="id_statut" class="type-item">Status</option>
                    <option value="auteur_statut" class="type-item">
                      Status - Author
                    </option>
                    <option value="commentaire_statut" class="type-item">
                      Status - Comments
                    </option>
                    <option value="date_statut" class="type-item">
                      Status date
                    </option>
                    <option value="numero_piece" class="type-item">
                      Trans No.
                    </option>
                    <option value="ignore_collection" class="type-item">
                      Transaction ignored in the collection?
                    </option>
                    <option value="type_statut" class="type-item">
                      Type of status
                    </option>
                    <option value="item_unique_key" class="type-item">
                      Unique item identifier
                    </option>
                  </select>
                </div>
              </div>
              <div class="col-9">
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="form-group">
                            <select
                              class="form-select"
                              aria-label="Default select example">
                              <option value="0" selected>like</option>
                              <option value="1">not like</option>
                              <option value="2">is</option>
                              <option value="3">is not</option>
                              <option value="3">starts with</option>
                              <option value="3">ends with</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-center gap-3">
                        <i class="fa-solid fa-plus btn-primary p-2" onclick="AddFilter()" style="border-radius: 5px;cursor: pointer;"></i>
                        <i class="fa-solid fa-minus btn-primary p-2" onclick="RemoveFilter()" style="border-radius: 5px;cursor: pointer;"></i>
                    </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-4">
                <a href="collectionAlerts.html" class="btn text-light btn-secondary px-5 m-1" > <i class="fa-solid fa-check"></i>&ensp;Submit</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
