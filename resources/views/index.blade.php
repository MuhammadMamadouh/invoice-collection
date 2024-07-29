@extends('app')
@section('content')
    <div id="myModal" class="modal">
      <div class="modal-content">
        <div class="new-holab-1" id="hide-hoalp-1">
          <div class="d-flex justify-content-end me-4 ">
            <a href="email.html" target="_blank"><i class="fa-solid fa-maximize text-primary p-2 bg-light" style="
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
          "></i></a>
          </div>
          <span class="closeBtn">&times;</span>
          <div class="row mt-3">
            <div class="col-md-2">
              <h4>From :</h4>
            </div><!--l-1-->
            <div class="col-md-10">
              <a href="#" style="text-decoration: none; font-weight: bold;" class="text-primary">
                Paul Mayer < mohamed@gmail.com> </a>
              <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                <p> <input type="checkbox" class="form-check-input mx-2" id="exampleChe">
                  Lorem ipsum dolor sit amet.
                </p>
                <p> <input type="checkbox" class="form-check-input mx-2" id="exampleChe">
                  Lorem ipsum dolor sit amet.
                </p>
              </div>
            </div><!--r-1-->
    
            <div class="col-md-2 mt-2">
              <select class="form-select" id="">
                <option value="" selected disabled> to :</option>
                <option value="option1">1</option>
                <option value="option1">2</option>
                <option value="option1">3</option>
              </select>
            </div><!--l-2-->
            <div class="col-md-10 mt-2">
              <select class="form-select" id="">
                <option value="" selected disabled> </option>
                <option value="option1">1</option>
                <option value="option1">2</option>
                <option value="option1">3</option>
              </select>
              <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span class="mx-1"><i
                      class="fa-solid fa-plus text-dark"></i></span>Add anoter acount</a>
                <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span class="mx-1"><i
                      class="fa-solid fa-plus text-dark"></i></span>Add an anoter acount</a>
              </div>
            </div><!--r-2-->
            <div class="col-md-2 mt-2">
              <h4 for="">Supject :</h4>
            </div><!--l-3-->
            <div class="col-md-10 mt-2">
              <input type="text" class="form-control " id=""
                value="  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consectetur!">
            </div><!--r-3-->
            <div class="col-md-2 mt-2">
              <h4 class="mb-5">Message :</h4>
              <p style="color: rgb(172, 169, 169); text-align: center;"><i class="fa-solid fa-hashtag hash mb-5"></i><br>
                Lorem ipsum dolor sit amet.</p>
            </div><!--l-4-->
            <div class="col-md-10 mt-2">
              <div class="editor-container mb-1">
                <div class="toolbar">
                  <button onclick="execCmd('bold')"><i class="fas fa-bold"></i></button>
                  <button onclick="execCmd('italic')"><i class="fas fa-italic"></i></button>
                  <button onclick="execCmd('underline')"><i class="fas fa-underline"></i></button>
                  <button onclick="execCmd('strikeThrough')"><i class="fas fa-strikethrough"></i></button>
                  <button onclick="execCmd('justifyLeft')"><i class="fas fa-align-left"></i></button>
                  <button onclick="execCmd('justifyCenter')"><i class="fas fa-align-center"></i></button>
                  <button onclick="execCmd('justifyRight')"><i class="fas fa-align-right"></i></button>
                  <button onclick="execCmd('justifyFull')"><i class="fas fa-align-justify"></i></button>
                  <button onclick="execCmd('insertUnorderedList')"><i class="fas fa-list-ul"></i></button>
                  <button onclick="execCmd('insertOrderedList')"><i class="fas fa-list-ol"></i></button>
                  <button onclick="execCmd('createLink', prompt('Enter the URL:', 'http://'))"><i
                      class="fas fa-link"></i></button>
                  <button onclick="execCmd('unlink')"><i class="fas fa-unlink"></i></button>
                  <button onclick="insertImage()"><i class="fas fa-image"></i></button>
                  <button onclick="insertTable()"><i class="fas fa-table"></i></button>
                  <button onclick="toggleHTML()">Toggle HTML</button>
                </div>
                <div id="editor" class="form-control" contenteditable="true">
                  Start typing here...
                </div>
              </div>
              <a href="#" style="text-decoration: none; color: rgb(155, 152, 152);"><span class="mx-1"><i
                    class="fa-solid fa-plus"></i></span>Add an item</a>
            </div><!--r-4-->
            <div class="col-md-4 mt-2">
    
            </div><!--l-5-->
            <div class="tw-btn-holab d-flex justify-content-end">
    
              <div class="col-md-8 mt-2">
                <div class="row">
                  <div class="col-lg-6">
                    <button class="btn btn-primary w-100 mt-3" id="hollabTwoShow" onclick="showHollabTwo()"><i
                        class="fa-solid fa-eye"></i> Email preview</button>
                  </div>
                  <div class="col-lg-6">
                    <button class="btn btn-success w-100 mt-3"><i class="fa-solid fa-check"></i> Send the email <i
                        class="fa-solid fa-plus"></i> complete the action</button>
                  </div>
                </div>
              </div>
            </div><!--r-5-->
          </div><!--row-->
        
        </div>
         <!--new-Holap-->
   <div class="new-holap-2 d-none " id="hide-hoalp-2">
    <div class="container">
      <div class="row">
        <div class="close-btn-span d-flex justify-content-end me-3">
          <a href="email-preview.html" target="_blank"><i class="fa-solid fa-maximize text-primary p-2 bg-light" style="
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
          "></i></a>
          <span class="closeBtn" onclick="closeBtnHolabs()">&times;</span>
        </div>
        <div class="email-from d-flex mt-3 ">
          <span class="mx-3">From:</span>
          <a href="#">Paul Mayer demo@mydsomanager.com></a>
          <span class="mx-3">(Role : Collector)</span>
        </div>
        <div class="email-send d-flex justify-content-center ">
          <div class="col-lg-2 mt-2 mt-2 mb-2">
            <select class="form-select" aria-label="Default select example">
              <option selected>To:</option>
              <option value="1">Cc:</option>
              <option value="2">Bb:</option>
            </select>
          </div>
          <div class="col-lg-10 mt-2 mb-2">
            <select class="form-select" aria-label="Default select example">
              <option selected></option>
              <option value="0"></option>
              <option class="blue-colors-value" value="1">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
              <option class="blue-colors-value" value="2">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
              <option class="gren-colors-value" value="3">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
              <option class="gren-colors-value" value="4">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
              <option class="gren-colors-value" value="5">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
              <option class="gren-colors-value" value="6">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
              <option class="gren-colors-value" value="7">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
              <option class="gren-colors-value" value="8">vero Migust< veronique.miguest@demossoultions.com>
                  (Role:credit Manger ) </option>
  
            </select>
          </div>
        </div>
        <div class="container">
          <div id="recipientContainer">
          </div>
        </div>
        <div class="container">
          <div id="recipientContainer-2">
          </div>
        </div>
        <div class="add-input mt-3 mb-3 d-flx">
          <span><i class="fa-soid fa-plus"></i></span>
          <button id="addinputs">Add another recipient</button>
          <span><i class="fa-soid fa-plus"></i></span>
          <button id="addinputs-2"> Add an external recipient</button>
        </div>
        <div class="emil-para-2 mt-3 mb-3">
          <p class="text-capitalize mt-3 mb-3">Facture(s) Business Solutions en attente de paiement - Hopital
            Necplus - 341291</p>
        </div>
        <div class="email-prev">
          onjour, <br>
  
          Je vous prie de bien vouloir trouver ci-dessous le relevé détaillé de votre compte présentant à ce jour un
          solde dû de 12 956,16 €. <br>
  
          Nous sommes sûrs que vous avez simplement omis de nous envoyer votre paiement et vous serions
          reconnaissants de régulariser cette situation dès que possible. <br>
  
          N'hésitez pas à cliquer sur le bouton suivant pour nous faire part de vos commentaires :
          <div class="view-button mt-3 mb-3">
            <a href="account-statement.html" class="btn btn-success"><span><i class="fa-solid fa-comments"></i></span> Consulter mon état
              de compte</a>
          </div>
          <div class="descri">
            <p> Dans l'attente de votre règlement rapide, nous restons à votre disposition pour toute information
              complémentaire. <br>
  
              Cordialement,</p>
          </div>
          <div class="the-cloumn  d-flex align-items-center mb-3">
            <img src="img/person2.jpg" class="img-fluid" alt="">
            <div class="name text-center">
              <h6 class="mt-3 mb-3">Paul Mayer</h6>
              <p class="mt-3 mb-3">Credit manager <br>
                +33 4 12 34 56 78 <br>
                +33 6 06 06 06 00 <br>
                Business Solutions</p>
              <a href="#">http://www.demo-solutions.com </a>
            </div>
            <div class="logo-mail">
              <img src="img/logo.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="client-code">
            <h6>Code client: 341291</h6>
            <div class="client-codes d-flex justify-content-between align-items-center">
              <p><span><i class="fa-solid fa-star"></i></span> Cliquez sur le N° de pièce pour avoir plus
                d'informations et laisser un commentaire:</p>
              <div class="this-buttons">
                <button type="button" class="btn text-light"><span><i
                      class="fa-solid fa-download"></i>&ensp;</span>Export this data to excel</button>
              </div>
            </div>
            <div class="tabels-emails">
              <div class="container-fluid">
                <div class="table-responsive mt-3 mb-3">
                  <table class="table table-bordered">
                    <thead class="thead-dark ">
                      <tr class="text-center">
                        <th>#</th>
                        <th>N° pièce </th>
                        <th>Société</th>
                        <th>N° commande</th>
                        <th>Date émission</th>
                        <th>Date échéance</th>
                        <th>Retard</th>
                        <th>Montant
                          initial TTC</th>
                        <th>Montant
                          restant TTC</th>
                        <th>Statut</th>
                        <th>Champ personnalisé
                          #2</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <td style="background: #f0f0f0;">1</td>
                        <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt=""
                            class="img-fluid" alt=""><a href=""> 3794</a></td>
                        <td>Hopital Necplus</td>
                        <td>227107 </td>
                        <td>21-03-2024</td>
                        <td>14-04-2024</td>
                        <td>69 j </td>
                        <td>5 544,00 $</td>
                        <td style="display: flex; justify-content: space-between;">7,112.64 € <img
                            src="img/card.png" style="width: 17px;" alt="" class="img-fluid" alt=""></td>
                        <td>5 544,00 $</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td style="background: #f0f0f0;">2</td>
                        <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt=""
                            class="img-fluid" alt=""><a href=""> 3794</a></td>
                        <td>Hopital Necplus</td>
                        <td>227107 </td>
                        <td>21-03-2024</td>
                        <td>14-04-2024</td>
                        <td>69 j </td>
                        <td>5 544,00 $</td>
                        <td style="display: flex; justify-content: space-between;">7,112.64 € <img
                            src="img/card.png" style="width: 17px;" alt="" class="img-fluid" alt=""></td>
                        <td>5 544,00 $</td>
                        <td></td>
  
                      </tr>
                      <tr>
                        <td colspan="8" class="text-end">April 2024 - Total </td>
                        <td>7,112.64 € </td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="tabels-emails">
              <div class="container-fluid">
                <div class="table-responsive mt-3 mb-3">
                  <table class="table table-bordered">
                    <tbody class="text-center">
                      <tr>
                        <td style="background: #f0f0f0;">3</td>
                        <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt=""
                            class="img-fluid" alt=""><a href=""> 3794</a></td>
                        <td>Hopital Necplus</td>
                        <td>181403</td>
                        <td>08-03-2024</td>
                        <td>23-06-2024</td>
                        <td>-1 j</td>
                        <td>3 050,81 € </td>
                        <td style="display: flex; justify-content: space-between;">7,112.64 € <img
                            src="img/card.png" style="width: 17px;" alt="" class="img-fluid" alt=""></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="8" class="text-end">Juin 2024 - Total </td>
                        <td>7,112.64 € </td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="end-of-total">
                <p> <strong>Encours total</strong> : 16 006,97 €</p>
              </div>
            </div>
          </div>
        </div>
        <div class="add-itemes mt-3 mb-3">
          <div class="container">
            <div class="col-12">
              <button class="mt-3" id="show-items-button"><span class="text-black-50"><i
                    class="fa-solid fa-pen"></i></span> add an item</button>
              <div class="show-items  d-block bg-light" style="font-size: 6px;">
                <div id="item-contents">
                  <div class="addimg">
                    <img src="" alt="" id="changeimgs">
                  </div>
                  <input id="inpchange" class="mt-3" type="file" />
                  <p class=" mb-2" style="font-size: 14px;">(.pdf or .docx or .xlsx or .txt or .jpg or .png ...)•Max
                    size: 15 MB</p>
                  <textarea
                    style="width:100%; outline: none; padding: 5px; border: 2px solid #efefef; border-radius: 5px; resize: both;"></textarea>
                  <button class=""><i class="fa-solid fa-plus"></i> add</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tw-btn-holab d-flex justify-content-end">
          <div class="col-md-8 mt-2">
            <div class="row ">
              <div class="col-lg-6">
                <button class="btn btn-primary mt-3 w-100"  id="hollabTwoShow" onclick="showHollab()"><i
                    class="fa-solid fa-pen"></i>Modify</button>
              </div>
              <div class="col-lg-6">
                <button class="btn btn-success mt-3 w-100"><i class="fa-solid fa-check"></i>send the email +
                  complete the action</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--new-Holap-->
      </div><!--modal-content-->
  
    </div>
    <!--navbar-site-->
    <div class="navbar-all-site cairo-uniquifier">
      <div class="top-navbar mb-0 ">
       <div class="container">
           <span class="inputicons"><i class="fa-solid fa-book"></i></span><input type="text" class="mt-2 " placeholder="Contact Us For Personalized Demo">
           <a href="settings.html" class="mt-4 "> <i class="fa-solid fa-house"></i><a href="settings.html"> My account</a></a>
           <a href="settings.html"><img src="img/person2.jpg" class="img-fluid" alt=""></a>
          <span class="mt-4 "><i class="fa-solid fa-power-off"></i><a href="#"> sign out</a></span>
       
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
            <li class="nav-item active d-flex align-items-center">
              <a class="nav-link" aria-current="page" href="globalView.html"><span><i class="fa-solid fa-eye"></i></span> global view</a>
              <i class="fa-solid fa-gear nav-link bg-dark" onclick="showSetts()" style="cursor:pointer ;padding: 12px;"></i>
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
    <div class=" p-2 text-center">
        <p class=" d-flex flex-wrap justify-content-center align-items-center">DEMO → You navigate as
            <select class="form-select mx-2  border-primary w-auto" aria-label="Default select example">
            <option value="1" selected>Sales Administration</option>
            <option value="2">Credit manager</option>
            <option value="2">Collector</option>
            <option value="2">Sales manager</option>
            <option value="1">Administrator</option>
            <option value="2">Financial controller</option>
            <option value="2">Executive Officer</option>
            <option value="2">Guest</option>
          </select>
           and you can access to all features</p>
    </div>
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="change-pages">
              <a href="reportsSales.html" class="d-flex justify-content-between bg-success px-2 text-light"><i class="fa-solid fa-signal text-light" style="font-size: 35px;"></i>
              <div class="block-txt">
                <span class="text-end" style="font-size: 25px;">3.3M€</span>
                <span>Sales May 2024</span>
              </div>  
              </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="change-pages">
                <a href="collection.html" class="d-flex justify-content-between bg-secondary px-2 text-light"><i class="fa-solid fa-clock text-light" style="font-size: 35px;"></i>
                <div class="block-txt">
                  <span class="text-end" style="font-size: 25px;">614</span>
                  <span>Actions to do</span>
                </div>  
                </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="change-pages">
                <a href="reportsAgingBalance.html" class="d-flex justify-content-between bg-primary  px-2 text-light"><i class="fa-solid fa-euro text-light" style="font-size: 35px;"></i>
                <div class="block-txt">
                  <span class="text-end" style="font-size: 25px;">5M€</span>
                  <span>Late payment</span>
                </div>  
                </a>
                </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsAgingBalance.html" class="text-decoration-none"><h5 class="text-dark text-center" id="aning-mouse" >Aging balance</h5></a>
              <div class="show-txt" id="show">
                <span class="aging-show mt-5 mb-5">The aging balance helps to <br>
                   monitor the situation of accounts <br>
                    receivable based on their seniority <br>
                   compared to their due date. It is <br>
                    divided into several tranches. For <br>
                     example, non-overdue receivables <br>
                      and receivables due between 1 <br>
                       and 30 days and between 31 and <br>
                        60 days ... etc. It can be applied to <br>
                         the entire accounts receivable or <br>
                          can be set by customer or group <br>
                           of customers.</span>
              </div>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsAgingBalance.html">
                      <canvas  id="myChart-5"  width="200" height="250"></canvas>
                    </a>
                    <div class="row text-center mt-3" style="font-size:10px ;">
                      <div class="col-6 d-flex align-items-center "><p>Current receivable : <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 151k &nbsp; 42%</div></p></div>
                      <div class="col-6 d-flex align-items-center "><p>Overdue : <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 209k &nbsp; 58%</div></p></div>
                      <div class="col-6 d-flex align-items-center "><p>Total receivable : <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 359k &nbsp; 100%</div></p></div>
                      <div class=" col-6 d-flex align-items-center "><p>Overdue % :</p>                 
                        <div class="badge bg-light text-dark mb-3 ms-2">5%</div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsItemsStatus.html" class="text-decoration-none"><h5 class="text-dark text-center" id="aning-mouse-2" >Items status</h5></a>
              <div class="show-txt-2" id="show-2">
                <span>The status allows to qualify items <br>
                   and assign them temporarily in a <br>
                    category. For example, if a <br>
                     customer confirms a payment, the <br>
                      relevant invoices will be qualified <br>
                       with a status of Promise to pay <br> . Status - Name : Name of status <br>
                        defined on My DSO <br> ManagerStatus - Comment : <br>
                         Explanatory comment linked to <br>
                          debt status.Status - Date : Date <br>
                           on which last item status was <br>
                            indicated. Status - Author : Author <br>
                             of item status, having qualified it. <br>
                              How to manage statuses?"</span>
              </div>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsItemsStatus.html">
                        <canvas id="myChart-11"  width="200" height="250"></canvas>
                    </a>
                    <div class="mt-3 text-center" style="font-size:10px ;">
                      <div class="d-inline-flex">Overdue items with a status : <div class="fw-bold"> 849 K€</div></div>
                      <br>
                      <div class="d-inline-flex">% Qualified overdue : <div class="fw-bold"> 13 % </div></div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsCashForecast.html" class="text-decoration-none"><h5 class="text-dark text-center">Cash forecast</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsCashForecast.html">
                        <canvas id="myChart-3" width="200" height="250"></canvas>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <a href="reportsAgingBalance.html" class="text-decoration-none"><h5 class="text-dark text-center">Receivable and overdue per client</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-group d-flex align-items-center">
                              <select
                                class="form-select w-auto m-2" style="font-size:13px ;"
                                aria-label="Default select example">
                                <option selected value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="134">134</option>
                              </select>
                              <div style="font-size:10px ; ">actions display on 134</div>
                            </div>
                            <form>
                              <div class="form-group">
                                <input
                                  type="text"
                                  style="font-size:10px ;"
                                  class="form-control"
                                  aria-describedby="emailHelp"
                                  placeholder="Multi-columns search" />
                              </div>
                            </form>
                          </div>
                          <a href="reportsAgingBalance.html" class="text-decoration-none text-dark">
                            <div class="row p-0 text-center" style="font-size: 10px;">
                              <div class="col-1"><p class="fw-bold p-1 m-0">Flag</p></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Client name</p></div>
                              <div class="col-3"><p class="fw-bold p-1 m-0">Receivable</p></div>
                              <div class="col-3"><p class="fw-bold p-1 m-0">Overdue</p></div>
                              <div class="col-3"><p class="fw-bold p-1 m-0">Overdue +15d</p></div>
                          </div>
                          <div class="row align-items-center  p-0 my-0 text-center" style="background-color: #006bff14;font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="background-color: #006bff14;font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="background-color: #006bff14;font-size: 10px;">
                              <div class="col-1"><i class="fa-solid fa-flag text-primary "></i></div>
                              <div class="col-2"><p class="fw-bold p-1 m-0">Kokel</p></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                              <div class="col-3"><div class="bg-secondary text-light mb-1" style="border-radius: 20px;">No. of clients : 924</div></div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">424 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">205 k€</p>
                              </div>
                              <div class="col-3">
                                <p class="fw-bold p-1 m-0">27 k€</p>
                              </div>
                          </div>
                          </a>
                  </div>
                 <div class="t-button-on-global d-flex justify-content-end  mb-2">
                  <a href="#" class="prev text-black-50  text-capitalize">previous</a>
                  <a href="" class="next text-capitalize">next</a>
                 </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-3">
              <a href="reportsDSO.html" class="text-decoration-none"><h5 class="text-dark text-center">DSO trend</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsDSO.html">
                        <canvas id="myChart-8"  width="250" height="250"></canvas>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-3">
              <a href="reportsOverdueTrend.html" class="text-decoration-none"><h5 class="text-dark text-center">Overdue trend</h5></a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsOverdueTrend.html">
                        <canvas id="myChart-6" width="250" height="250"></canvas>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--scirpt Files-->


    @endsection
