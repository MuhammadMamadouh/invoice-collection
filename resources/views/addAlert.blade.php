@extends('app')
@section('content')
    <!--navbar-site-->
    @include('layouts.navbar')
    <!--navbar-site-->
    <section class="mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6"><a href="reportsRisk.html" class="m-1 w-100 btn btn-outline-primary p-3"><i class="fa-solid fa-chart-simple "></i> Report Risk</a></div>
          <div class="col-lg-3 col-md-4 col-sm-6"><a href="actionsToDo.html" class="m-1 w-100 btn btn-outline-primary p-3" id="actionButton"><i class="fa-solid fa-hand-point-right"></i> Action to do <span class="badge bg-danger">184</span></a></div>
          <div class="col-lg-3 col-md-4 col-sm-6"><a href="actionsHistory.html" class="m-1 w-100 btn btn-outline-primary p-3"><i class="fa-solid fa-bars-staggered"></i> Actions history</a></div>
          <div class="col-lg-3 col-md-4 col-sm-6"><a href="alerts.html" class="m-1 w-100 btn btn-primary p-3"><i class="fa-solid fa-bell"></i> My Alerts <span class="badge bg-danger">200</span></a></div>
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
                <a href="alerts.html" class="btn text-light btn-secondary px-5 m-1" > <i class="fa-solid fa-check"></i>&ensp;Submit</a>
            </div>
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
    <script src="js/searchBar.js"></script>
    <script src="./js/risk.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
    <!-- <script src="js/main.js" ></script> -->
    <!--scirpt Files-->
  </body>
</html>
