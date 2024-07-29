@extends('app')
@section('content')
    <div class="overlay d-none"></div>
    <div class="company-details d-none">
      <div class="bg-light holap-first">
        <div class="row text-center m-0 p-3 w-100" style="background-color: #006bff">
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex w-25 gap-3">
              <i class="fa-solid fa-flag text-warning" style="font-size: 25px"></i>
              <p class="text-light">Payeurs correct / Average payer</p>
              <div class="mb-3 alert-icon-container">
                <i class="fa-solid fa-bell text-danger" style="font-size: 25px"></i>
                <span class="alert-counter">5</span>
                <div class="alert-list">
                  <!-- List of alerts -->
                  <div class="alert-item">
                    <a href="#">Alert:</a> Customer receivable above cridit
                    limit
                  </div>
                  <div class="alert-item">
                    <a href="#">Alert:</a> Customer receivable above cridit
                    limit
                  </div>
                  <div class="alert-item">
                    <a href="#">Alert:</a> Customer receivable above cridit
                    limit
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-light w-50">Holap</h2>
            <div class="d-flex justify-content-end gap-3 w-25">
             <div class="icon-holab  ">
              <i class="fa-solid fa-pen text-primary p-2 bg-light" onclick="EditHolap()" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
              <a href="holapDetails.html" target="_blank" ><i class="fa-solid fa-maximize text-primary p-2 bg-light"style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i></a>
              <i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeHolap()" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
            </div>
            </div>
          </div>
        </div>
        <div class="row m-0 p-3">
          <div class="col-lg-4 col-sm-6 text-start">
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Copmany code:</p>
              <p class="">1240116</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Legal ID:</p>
              <p class="">1240116</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">VAT Number:</p>
              <p class="">1240116</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Address:</p>
              <p class="">
                <a href="">Fairgrounds road, 1234 <br />
                  2892 West Kingston <br />
                  RI <br />
                  United States</a>
              </p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Group:</p>
              <p class=""><a href="">Us client</a></p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Collector:</p>
              <p class=""><a href="">Noculas jermain</a></p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Collection senario:</p>
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
          </div>
          <div class="col-lg-4 col-sm-6 text-start">
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Payment term:</p>
              <p class="">30 jours nets</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Payment mean:</p>
              <p class="">1240116</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Guarantee World Insurer:</p>
              <p class="">0 €</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Other guarantees:</p>
              <p class="">5,000 €</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Credit Limit:</p>
              <div class="form-group">
                <input type="text" value="20,000 €" class="form-control" />
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold"><a href="">Late payment penalties</a>:</p>
              <p class="">No</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold"><a href="">Recovery cost</a>:</p>
              <p class="">No</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold"><a href="">Interactive emails</a>:</p>
              <p class="">Yes</p>
            </div>
          </div>
          <div class="col-lg-4 text-start">
            <div class="d-flex align-items-center justify-content-between">
              <select class="form-select m-auto w-50" aria-label="Default select example">
                <option selected disabled>Contact:</option>
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
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Role:</p>
              <p class="">Other</p>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <p class="fw-bold">Last name:</p>
              <p class="">Accountant name</p>
            </div>
            <div class="d-flex align-items-center justify-content-center">
              @<a href="">training@mydsomanager.com</a>
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-phone"></i> &nbsp; &nbsp;
              <a href=""> +33 01 01 01 01 01</a> &nbsp; (Phone)
            </div>
            <div class="d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-star"></i> &nbsp; Contact for collection
            </div>
          </div>
        </div>
        <div class="row p-4 m-0">
          <div class="col-lg-4 col-sm-6">
            <div class="m-1 w-100 btn btn-primary disputeButton" onclick="disputeFun()">
              <i class="fa-solid fa-clock"></i> collection& dispute management
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="m-1 w-100 btn btn-outline-primary riskButton"  onclick="riskFun()">
              <i class="fa-solid fa-bolt"></i> Risk Report
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="m-1 w-100 btn btn-outline-primary indicatorsButton" onclick="indicatorsFun()">
              <i class="fa-solid fa-chart-simple"></i> Reports & Indicators
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="m-1 w-100 btn btn-outline-primary historyButton" onclick="historyFun()">
              <i class="fa-solid fa-bars-staggered"></i> History
            </div>
          </div>
        </div>
      </div>
      <div class="create-c-i holap-second bg-light d-none">
        <div class="d-flex gap-3 justify-content-end text-center m-0 mb-3 p-3 w-100" style="background-color: #006bff">
          <span class="btn text-light p-1 px-2 btn-danger"  onclick="closeHolap()"><i class="fa-solid fa-trash" style="  font-size: 15px;"></i></span>
          <span class="btn px-4 text-light p-1 btn-success" onclick="closeEditHolap()"><i class="fa-solid fa-floppy-disk"  style="  font-size: 15px;"></i> Save</span>
          <span class="btn px-4 text-light p-1 btn-warning" onclick="closeEditHolap()"><i class="fa-solid fa-reply" style="  font-size: 15px;"></i> Cancel</span>
          <a href="editHolapDetails.html" class="btn px-2 text-primary p-1 btn-light" target="_blank" ><i class="fa-solid fa-maximize "style="  font-size: 15px;"></i></a>
        </div>
        <div class="row container-fluid">
          <div class="col-md-4  my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname0">Company / Business
                   name * : </label>
  
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname0">
              </div>
            </form>
  
          </div><!--1-->
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
            <div class="d-flex align-items-center justify-content-between">
              <select class="form-select m-auto w-75" aria-label="Default select example">
                <option selected disabled>Contact:</option>
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
          </div><!--2-->
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
                <label for="inputname60"> Role * :</label>
  
              </div>
              <div class="col-7 ">
                <select class="form-select w-100" id="inputname60" aria-label="Default select example">
                  <option value="1">Accountant</option>
                  <option value="1">Client</option>
                  <option value="1">Company</option>
                  <option value="1">Executive Officer</option>
                  <option selected>Other</option>
                </select>
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
                <label for="inputname50"> Insurer reference :</label>
  
              </div>
              <div class="col-7">
                <div class="input-group">
                  <input type="text" class="form-control" id="inputname50">
                </div>
              </div>
            </form>
          </div><!--9-->
  
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname9"> Title <span class="text-black-50">(Mr, Mrs ...)</span> :</label>
  
              </div>
              <div class="col-7">
                <div class="input-group">
                  <input type="text" class="form-control" id="inputname9">
                </div>
              </div>
            </form>
          </div><!--9-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname5"> Ultimate Parent Code :</label>
        
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname5">
              </div>
            </form>
        
          </div><!--5-->
  
  
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
                <label for="inputname100"> Last Name * :</label>
  
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname100">
              </div>
            </form>
          </div><!--10-->
  
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
                <label for="inputname91"> Temporary guarantee :</label>
  
              </div>
              <div class="col-7">
                <div class="input-group">
                  <input type="text" class="form-control" id="inputname91">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
            </form>
          </div><!--9-->
  
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname101"> First Name * :</label>
  
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname101">
              </div>
            </form>
          </div><!--10-->
  
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
                <label for="inputname222">Start date :</label>
  
              </div>
              <div class="input-group">
                <input type="text" class="form-control" id="inputname222">
                <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
              </div>
            </form>
          </div><!--2-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname555"> Email :</label>
        
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname555">
              </div>
            </form>
        
          </div><!--5-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname2">Address :</label>
        
              </div>
              <div class="col-7 ">
                <textarea class="form-control" rows="3" id="inputname2"></textarea>
              </div>
            </form>
          </div><!--2-->
  
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname2222">End date :</label>
  
              </div>
              <div class="input-group">
                <input type="text" class="form-control" id="inputname2222">
                <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
              </div>
            </form>
            <div class=" my-2">
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
          </div><!--2-->
  
  
  
          <div class="col-md-4 my-2">
            <form class="d-flex justify-content-center my-2">
              <div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="email">
                  <label class="form-check-label" for="email">Email in copy in the automatic emails</label>
                </div>
              </div>
            </form>
            <div class=" my-2">
              <form class="d-flex">
                <div class="col-5 ">
                  <label for="inputname502"> Phone :</label>
          
                </div>
                <div class="col-7 ">
                  <input type="text" class="form-control" id="inputname502">
                </div>
              </form>
            </div><!--5-->
          </div><!--5-->
  
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
                <label for="inputname504">Mobile Phone :</label>
        
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname504">
              </div>
            </form>
          </div><!--5-->
  
  
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
                <label for="inputname505"> Score :</label>
        
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname505">
              </div>
            </form>
        
          </div><!--5-->
        
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname506"> Fax :</label>
        
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname506">
              </div>
            </form>
        
          </div><!--5-->
        
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname11"> City :</label>
  
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname11">
              </div>
            </form>
            <div class=" my-2">
              <form class="d-flex">
                <div class="col-5 ">
                  <label for="inputname14"> State / Province :</label>
    
                </div>
                <div class="col-7 ">
                  <input type="text" class="form-control" id="inputname14">
                </div>
              </form>
            </div><!--14-->
            <div class=" my-2">
              <form class="d-flex">
                <div class="col-5 ">
                  <label for="inputname17"> Country :  </label>
    
                </div>
                <div class="col-7 ">
                  <input type="text" class="form-control" id="inputname17">
                </div>
              </form>
            </div><!--17-->
          </div><!--11-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname18"> <a href="">Late payment penalties?</a></label>
  
              </div>
              <div class="col-7 d-flex justify-content-between align-items-center ">
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="exampleCheckbox1">
                  <label class="form-check-label" for="exampleCheckbox1">Yes</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="exampleCheckbox2">
                  <label class="form-check-label" for="exampleCheckbox2">No</label>
                </div>
              </div>
  
            </form>
            <div class=" my-2">
              <form class="d-flex">
                <div class="col-5 ">
                  <label for="inputname21"> <a href="">Recovery cost?</a></label>
    
                </div>
                <div class="col-7 d-flex justify-content-between ">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="exampleCheckbox1">
                    <label class="form-check-label" for="exampleCheckbox1">Yes</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" id="exampleCheckbox2">
                    <label class="form-check-label" for="exampleCheckbox2">No</label>
                  </div>
                </div>
              </form>
    
            </div><!--21-->
            <div class=" my-2">
              <form class="d-flex">
                <div class="col-5 ">
                  <label for="inputname24"><a href="">Interactive emails?</a></label>
    
                </div>
                <div class="col-7 d-flex justify-content-between  ">
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" id="exampleCheckbox1">
                    <label class="form-check-label" for="exampleCheckbox1">Yes</label>
                  </div>
                  <div class="form-check d-flex">
                    <input class="form-check-input" type="radio" id="exampleCheckbox2">
                    <label class="form-check-label " for="exampleCheckbox2">No</label>
                  </div>
                </div>
              </form>
            </div><!--24-->
          </div><!--18-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 mt-2">
                <label for="inputname2">Comments :</label>
        
              </div>
              <div class="col-7 ">
                <textarea class="form-control" rows="3" id="inputname2"></textarea>
                <p class="text-black-50 m-0">Comments should be factual, objective and non offensive</p>
              </div>
            </form>
          </div><!--2-->
  
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
                <label for="inputname27">Customer custom field #1:</label>
  
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname27">
              </div>
            </form>
  
          </div><!--27-->
  
  
          <div class="col-md-4 my-2">
            <form class="d-flex justify-content-center my-2">
              <div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="contact">
                  <label class="form-check-label" for="contact">Contact for collection?</label>
                </div>
              </div>
            </form>
          </div><!--5-->
  
  
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
                <label for="inputname30">Customer custom field #2:</label>
  
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname30">
              </div>
            </form>
          </div><!--30-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex justify-content-center">
              <div>
                <div class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete this contact</div>
              </div>
            </form>
          </div><!--5-->
  
  
  
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
                <label for="inputname24">Block this account?</label>
              </div>
              <div class="col-7 d-flex justify-content-between  ">
                <div class="form-check ">
                  <input class="form-check-input" type="radio" id="block">
                  <label class="form-check-label" for="block">Yes</label>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input" type="radio" id="block">
                  <label class="form-check-label " for="block">No</label>
                </div>
              </div>
            </form>
          </div><!--24-->
  
          <div class="my-4 d-flex justify-content-center gap-3">
            <p class="text-black-50">Creation date in MY DSO MANAGER : 2020-03-02 11:00:15 (G.M.T. +1)</p>
            <p class="text-black-50">•    Modification date : 2020-03-11 16:59:24 (G.M.T. +1)</p>
          </div>
  
        </div><!--row-->
        <div class="row p-4 m-0 container-fluid">
          <div class="col-lg-4 col-sm-6">
            <div class="m-1 w-100 btn btn-primary disputeButton" onclick="disputeFun()">
              <i class="fa-solid fa-clock"></i> collection& dispute management
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="m-1 w-100 btn btn-outline-primary riskButton"  onclick="riskFun()">
              <i class="fa-solid fa-bolt"></i> Risk Report
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="m-1 w-100 btn btn-outline-primary indicatorsButton" onclick="indicatorsFun()">
              <i class="fa-solid fa-chart-simple"></i> Reports & Indicators
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="m-1 w-100 btn btn-outline-primary historyButton" onclick="historyFun()">
              <i class="fa-solid fa-bars-staggered"></i> History
            </div>
          </div>
        </div>
      </div><!--create-c-i-->
  
      <div class="bg-white" id="disputeDiv">
        <div class="bg-white position-relative">
          <div class="d-flex small-icons-big-container justify-content-between p-4 px-5 m-0">
            <div class="text-center my-auto small-icons-container">
              Key accounts scenario (EN) :
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>-10d</span>
              <div class="btn-warning small-icons text-light px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+5d</span>
              <div class="btn-success small-icons text-light px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+12d</span>
              <div class="btn-success small-icons text-light px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+20d</span>
              <div class="btn-secondary small-icons text-light px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+28d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+38d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+45d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+60d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">
                <i class="fa-solid fa-envelope"></i>
              </div>
            </div>
          </div>
          <div class="arrow-right"></div>
          <div class="line-through-icons"></div>
        </div>
        <div class="d-flex justify-content-between flex-wrap p-4 m-0">
          <h3>Action to do:</h3>
          <select class="form-select w-auto" aria-label="Default select example">
            <option selected disabled>New action:</option>
            <option value="1">Send email</option>
            <option value="1">Send internal interactive email</option>
            <option value="1">Send a SMS</option>
            <option value="1">Write a dunning letter</option>
            <option value="1">Create a specific action</option>
          </select>
        </div>
        <div class="p-4 m-0 actions-row">
          <div class="row align-items-center text-center">
            <div class="col fw-bold">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Action date</p>
              </div>
            </div>
            <div class="col fw-bold">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Action type</p>
              </div>
            </div>
            <div class="col fw-bold">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Action</p>
              </div>
            </div>
            <div class="col fw-bold">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Action amount inc. Tax</p>
              </div>
            </div>
            <div class="col"></div>
          </div>
          <div class="row mt-2 text-center p-2 align-items-center" style="background-color: #006bff14;">
            <div class="col fw-bold">13 - 5 - 2022</div>
            <div class="col fw-bold">
              <div class="btn openModalBtn btn-primary">@ Email</div>
            </div>
            <div class="col fw-bold">Reminder by email No .2</div>
            <div class="col fw-bold">100,000.00 €</div>
            <div class="col">
              <div class="btn btn-primary">
                <i class="fa-solid fa-check"></i>
              </div>
              <div class="btn btn-outline-primary">
                <i class="fa-solid fa-calendar"></i>
              </div>
              <div class="btn btn-outline-primary">
                <i class="fa-solid fa-trash"></i>
              </div>
            </div>
          </div>
          <div class="row bg-light p-2 mt-3">
            <div class="col-sm-4">
              Total Receivable:<span class="fw-bold">100,000.00 €</span>
            </div>
            <div class="col-sm-4">
              Overdue:<span class="fw-bold">100,000.00 €</span>
            </div>
            <div class="col-sm-4">
              Current Receivable:<span class="fw-bold">100,000.00 €</span>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-between mt-3">
            <div class="d-flex">
              <h4>Statement of account of open items</h4>
              <div class="btn bg-light ms-2">No .of items: 4</div>
            </div>
            <div class="form-group position-relative">
              <input type="text" class="form-control border-primary ps-5" aria-describedby="emailHelp"
                placeholder="Search" />
              <i class="fa-solid fa-search text-secondary position-absolute"
                style="top: 50%; transform: translateY(-50%); left: 10px"></i>
            </div>
          </div>
          <div class="row mt-3">
            <div class="form-group d-flex justify-content-end">
              <input type="text" class="form-control w-auto p-3" aria-describedby="emailHelp"
                placeholder="Multi-columns search" />
            </div>
          </div>
          <!--start-->
          <div class="row mt-3 p-2 px-md-4 align-items-center text-center">
            <div class="col-1" style="z-index: 999;">
              <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1" />
              </div>
            </div>
            <div class="col">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Trans.no</p>
              </div>
              
            </div>
            <div class="col hide">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Issue date</p>
              </div>
              
            </div>
            <div class="col">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Due date</p>
              </div>
              
            </div>
            <div class="col-1 hide">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Overdue</p>
              </div>
              
            </div>
            <div class="col hide">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Intial amount inc. Tax</p>
              </div>
              
            </div>
            <div class="col">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Remaining amount inc. Tax</p>
              </div>
              
            </div>
            <div class="col-3 hide">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Status</p>
              </div>
              
            </div>
            <div class="col-3 tavle-dropdown-icon"></div>
          </div>
          <div class="text-center mb-3 table-container-2 p-2 px-md-4  ">
            <div class="row align-items-center pt-3" style="background-color: #006bff14">
              <div class="col-1" style="z-index: 999;">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1" />
                </div>
              </div>
              <div class="col">
                <p class="fw-bold"><a href="#" onclick="showInvoice()"><img src="./img/pdficons.gif" class="mb-1" alt=""> 2401356</a></p>
               
              </div>
              <div class="col hide">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col-1 hide">
                <div class="badge bg-danger mb-2">46d</div>
              </div>
              <div class="col hide">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col-3 hide">
                Envoi de duplicata de facture 2-12-2023
              </div>
              <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
              <div class="hidden ms-2 d-none">
                <div class="d-flex bg-white">
                  <p class="fw-bold">Issue date:</p>
                  <p>13-5-2022</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Overdue:</p>
                  <div class="badge bg-danger mb-2">46d</div>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Intial amount inc. Tax:</p>
                  <p class="fw-bold">11,187.32 €</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Status:</p>
                  <p>Envoi de duplicata de facture 2-12-2023</p>
                </div>
              </div>
            </div>
            <div class="row align-items-center pt-3">
              <div class="col-1" style="z-index: 999;">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1" />
                </div>
              </div>
              <div class="col">
                <p class="fw-bold"><a href="#" onclick="showInvoice()"><img src="./img/pdficons.gif" class="mb-1" alt=""> 2401356</a></p>
              </div>
              <div class="col hide">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col-1 hide">
                <div class="badge bg-danger mb-2">46d</div>
              </div>
              <div class="col hide">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col-3 hide">
                Envoi de duplicata de facture 2-12-2023
              </div>
              <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
              <div class="hidden ms-2 d-none">
                <div class="d-flex bg-white">
                  <p class="fw-bold">Issue date:</p>
                  <p>13-5-2022</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Overdue:</p>
                  <div class="badge bg-danger mb-2">46d</div>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Intial amount inc. Tax:</p>
                  <p class="fw-bold">11,187.32 €</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Status:</p>
                  <p>Envoi de duplicata de facture 2-12-2023</p>
                </div>
              </div>
            </div>
            <div class="row align-items-center pt-3" style="background-color: #006bff14">
              <div class="col-1" style="z-index: 999;">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1" />
                </div>
              </div>
              <div class="col">
                <p class="fw-bold"><a href="#" onclick="showInvoice()"><img src="./img/pdficons.gif" class="mb-1" alt=""> 2401356</a></p>
              </div>
              <div class="col hide">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col-1 hide">
                <div class="badge bg-danger mb-2">46d</div>
              </div>
              <div class="col hide">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col-3 hide">
                Envoi de duplicata de facture 2-12-2023
              </div>
              <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
              <div class="hidden ms-2 d-none">
                <div class="d-flex bg-white">
                  <p class="fw-bold">Issue date:</p>
                  <p>13-5-2022</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Overdue:</p>
                  <div class="badge bg-danger mb-2">46d</div>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Intial amount inc. Tax:</p>
                  <p class="fw-bold">11,187.32 €</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Status:</p>
                  <p>Envoi de duplicata de facture 2-12-2023</p>
                </div>
              </div>
            </div>
            <div class="row align-items-center pt-3">
             
              <div class="col-1" style="z-index: 999;">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1" />
                </div>
              </div>
              <div class="col">
                <p class="fw-bold"><a href="#" onclick="showInvoice()"><img src="./img/pdficons.gif" class="mb-1" alt=""> 2401356</a></p>
              </div>
              <div class="col hide">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col-1 hide">
                <div class="badge bg-danger mb-2">46d</div>
              </div>
              <div class="col hide">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col-3 hide">
                Envoi de duplicata de facture 2-12-2023
              </div>
              <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
              <div class="hidden ms-2 d-none">
                <div class="d-flex bg-white">
                  <p class="fw-bold">Issue date:</p>
                  <p>13-5-2022</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Overdue:</p>
                  <div class="badge bg-danger mb-2">46d</div>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Intial amount inc. Tax:</p>
                  <p class="fw-bold">11,187.32 €</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Status:</p>
                  <p>Envoi de duplicata de facture 2-12-2023</p>
                </div>
              </div>
            </div>
            <div class="row align-items-center pt-3" style="background-color: #006bff14">
              <div class="col-1" style="z-index: 999;">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1" />
                </div>
              </div>
              <div class="col">
                <p class="fw-bold"><a href="#" onclick="showInvoice()"><img src="./img/pdficons.gif" class="mb-1" alt=""> 2401356</a></p>
              </div>
              <div class="col hide">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col">
                <p class="fw-bold">13-5-2022</p>
              </div>
              <div class="col-1 hide">
                <div class="badge bg-danger mb-2">46d</div>
              </div>
              <div class="col hide">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col">
                <p class="fw-bold">11,187.32 €</p>
              </div>
              <div class="col-3 hide">
                Envoi de duplicata de facture 2-12-2023
              </div>
              <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
              <div class="hidden ms-2 d-none">
                <div class="d-flex bg-white">
                  <p class="fw-bold">Issue date:</p>
                  <p>13-5-2022</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Overdue:</p>
                  <div class="badge bg-danger mb-2">46d</div>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Intial amount inc. Tax:</p>
                  <p class="fw-bold">11,187.32 €</p>
                </div>
                <div class="d-flex bg-white">
                  <p class="fw-bold">Status:</p>
                  <p>Envoi de duplicata de facture 2-12-2023</p>
                </div>
              </div>
            </div>
            <div class="arrow-bottom-2"></div>
            
          </div>
          <div class="d-flex justify-content-center gap-5">
            <p class="fw-bold">Total:</p>
            <p class="fw-bold">45,342.75 €</p>
            <p class="fw-bold">45,342.75 €</p>
          </div>
        </div>
        <div class="row px-4 align-items-center m-0">
          <div class="col-lg-4 col-sm-6 col-12 mb-2">
            <div class="btn text-light btn-secondary px-2" onclick="showInvioce2()">
              <i class="fa-solid fa-pen-to-square" ></i>&ensp;Change status >Add
              comment >Set next action
            </div>
          </div>
          <div class="col-lg-2 col-sm-3 col-6 mb-2">
            <div class="btn text-light btn-primary px-2" onclick="associateFiles()">
              <i class="fa-solid fa-link"></i>&ensp;Associate File
            </div>
          </div>
          <div class="col-lg-2 col-sm-3 col-6 mb-2" onclick="payViaDirectLink()">
            <div class="btn text-light btn-primary px-2">
              Pay via direct link
            </div>
          </div>
          <div class="col-lg-2 col-sm-3 col-6 mb-2">
            <div class="btn text-dark btn-light px-2">
              Clear the transaction
            </div>
          </div>
          <div class="col-lg-2 col-sm-3 col-6 mb-2">
            <select class="form-select bg-light" aria-label="Default select example">
              <option selected disabled>Ignore the transaction :</option>
              <option value="1">Yes</option>
              <option value="1">No</option>
              <option value="1" class="text-primary">
                <a href="#"> Read more</a>
              </option>
            </select>
          </div>
          <div class="text-center mb-2 mt-2">
            <div class="this-buttons">
              <div class="">
                <div class="btn-group">
                  <button type="button" class="btn text-light"><span><i
                        class="fa-solid fa-download"></i>&ensp;</span>Export this data to excel</button>
                  <button type="button" class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <p>file fromat:</p>
                    </li>
                    <div class="radios-inp d-flex  justify-content-around">
                      <li class="dropdown-item d-flex"><input type="radio" name="fils" id="csv"><label
                          for="fils">csv</label></li>
                      <li class="dropdown-item d-flex"><input type="radio" name="fils" id="xls"><label
                          for="fils">xls</label>
                      </li>
                    </div>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                      <p>encoding:</p>
                    </li>
                    <select name="" style="width: 100%; font-size: 12px;">
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
                    </select>
                    </li>
                    <li class="mt-3 "><button type="button" class="btn" style="width: 100%;"><span><iclass="fa-solid
                            fa-download"></i>&ensp;</span>download</button></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!--sec-1-->
      <div class="sec-1 pb-5 bg-white text-capitalize d-none " id="riskDiv">
        <div class="container">
          <div class="row">
            <div class="end-con d-flex justify-content-between">
              <h4 class="mt-2 mb-2"><span><i class="fa-regular fa-hand-point-right"></i></span> Actions to do: <span>?
                  readmore</span> </h4>
              <div class="">
                <select class="form-select m-2 text-capitalize " aria-label="Default select example">
                  <option selected>New action</option>
                  <option value="1">send email</option>
                  <option value="1">send international interactive email </option>
                  <option value="1"> manul action</option>
                </select>
              </div>
            </div>
            <div class="actions-row">
              <div class="row text-center p-2 align-items-center mt-2 mb-1">
                <div class="col-2">
                  <h6>action to do</h6>
                </div>
                <div class="col-4">
                  <h6>action type</h6>
                </div>
                <div class="col-4">
                  <h6 class="text-center">Description</h6>
                </div>
                <div class="col-2"></div>
              </div>
              <div class="row mt-2 text-center p-2 align-items-center" style="background-color: #006bff14;">
                <div class="col-2 fw-bold">13 - 5 - 2022</div>
                <div class="col-4 fw-bold">
                  <div><i class="fa-solid fa-clock"></i> Credit limit review</div>
                  <p class="text-black-50 m-0">Ignore this action until 2022-08-15</p>
                </div>
                <div class="col-4 fw-bold">
                  <p class="m-0">Credit Limit : 10 k€</p>
                  <small class=" text-black-50">(Last modification of the credit limit : 2016-02-02)</small>
                </div>
                <div class="col-2">
                  <div class="btn btn-outline-primary">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                  </div>
                </div>
              </div>
              <div class="row mt-1 text-center p-2 align-items-center" style="background-color: #006bff14;">
                <div class="col-2 fw-bold">13 - 5 - 2022</div>
                <div class="col-4 fw-bold">
                  <div><i class="fa-solid fa-building"></i>  Customer exceeding</div>
                </div>
                <div class="col-4 fw-bold">
                  <p class="m-0">Total receivable (19.5 k€) >= 100 % of the credit limit (10 k€)</p>
                </div>
                <div class="col-2">
                  <div class="btn btn-primary">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="btn btn-outline-primary">
                    <i class="fa-solid fa-calendar"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <h6 class="mt-2"><i class="fa-solid fa-comments" style="margin-right: 10px;"></i>Credit analysis :</h6>
              <div class="container">
                <div class="col-12">
                  <textarea
                    style="width:100%; outline: none; padding: 5px; border: 2px solid #efefef; border-radius: 5px; resize: both;"></textarea>
                </div>
                <div class="save-end">
                  <button class=""><span><i class="fa-regular fa-floppy-disk"></i></span>save</button>
                  <p class="bg-light">Comments should be factual, objective and non offensive</p>
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
              <div class="left-sec mt-2 mb-2">
                <div class="container">
                  <div class="col-6">
                    <h5>Credit insurance <span class="text-dark">World Insurer</span>:</h5>
                    <div class="three-cont mt-2 mb-2 d-flex justify-content-between">
                      <span>Insurer guarantee :</span>
                      <span>10 k€</span>
                      <span>Modification date : 2020-03-02</span>
                    </div>
                    <div class="two-cont mt-2 mb-2 d-flex">
                      <span class="">Temporary guarantee :</span>
                      <span class="col-3 text-center">10 k€</span>
                    </div>
                    <div class="three-cont mt-2 mb-2 d-flex">
                      <span class="">Guarantee World Insurer : </span>
                      <span class=" col-2 text-center">10 k€</span>
                    </div>
                  </div>
                </div>
                <div class="block-con mt-3 ">
                  <h6 class="container mt-2 mb-2">risk = <span>11.1k€</span></h6>
                  <h6 class="container mt-2 mb-2">Credit available = <span>0 €</span></h6>
                </div>
              </div>
              <div class="schedule-of-payment mt-2 mb-2">
                <h5 class="text-capitalize container mt-4 mb-2 "><span class="text-black-50"><i
                      class="fa-solid fa-calendar-days"></i></span> Schedule of payment:</h5>
              </div>
              <div class="tabel-payemnt">
                <div class="container-fluid mt-5">
                  <div class="table-responsive">
                    <table class="table table-hover ">
                      <thead class="text-center">
                        <tr class="">
                          <th scope="col"></th>
                          <th scope="col" class="bg-tables">Total collectable<p class="text-black-50"> July 2024</p></th>
                          <th scope="col" class="bg-tables">Remains to collect<p class="text-black-50"> July 2024</p></th>
                          <th scope="col" class="bg-tables">Collection efficiency<p class="text-black-50"> July 2024</p></th>
                          <th scope="col" class="top-elemnt">Total receivable</th>
                          <th scope="col" class="top-elemnt">Overdue</th>
                          <th scope="col">Current month<p class="text-black-50"> July 2024</p></th>
                          <th scope="col">Month M+1<p class="text-black-50">August 2024</p></th>
                          <th scope="col">Month M+2<p class="text-black-50">September 2024</p></th>
                          <th scope="col">Month M+3<p class="text-black-50">October 2024</p>
                          <th scope="col" class="top-elemnt">Month M>3</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        <tr class="bg-tabels-payemnt">
                          <td>Receivable</td>
                          <td class="bg-tables">21.5 M€</td>
                          <td class="bg-tables">9.7 M€</td>
                          <td class="bg-tables">
                            54.8 %
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20.8%;" aria-valuenow="54.8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>17.1 M€</td>
                          <td>6.9 M€</td>
                          <td>2.8 M€</td>
                          <td>7.1 M€</td>
                          <td>271 k€</td>
                          <td>18.7 k€</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>Unallocated payments</td>
                          <td class="bg-tables">-1.7 M€</td>
                          <td class="bg-tables">-1.7 M€</td>
                          <td class="bg-tables">
                            4 %
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>-1.7 M€</td>
                          <td>-1.7 M€</td>
                          <td>-1.4 k€</td>
                          <td>-16.1 k€</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr class="bg-tabels-payemnt">
                          <td>Items in transit (drafts)</td>
                          <td class="bg-tables">12.7 k€</td>
                          <td class="bg-tables">-</td>
                          <td class="bg-tables">
                            100 %
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100% ; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>1.5 k€</td>
                          <td>-</td>
                          <td>1.5 k€</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>Order backlog</td>
                          <td class="bg-tables">-</td>
                          <td class="bg-tables">-</td>
                          <td class="bg-tables">-</td>
                          <td>338 k€</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        </tr >
                        <tr class="highlight-cell bg-tabels-payemnt">
                          <td >Total :</td>
                          <td class="bg-tables">19.8 M€</td>
                          <td class="bg-tables">8 M€</td>
                          <td class="bg-tables">
                            59.3 %
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 59.3%;"  aria-valuenow="59.3" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>15.8 M€</td>
                          <td>5.3 M€</td>
                          <td>2.8 M€</td>
                          <td>7.1 M€</td>
                          <td>271 k€</td>
                          <td>18.7 k€</td>
                          <td>-</td>
                        </tr>
                        <tr>
                          <td>Promise to pay</td>
                          <td class="bg-tables">584 k€</td>
                          <td class="bg-tables">443 k€</td>
                          <td class="bg-tables">
                            24.2 %
                            <div class="progress">
                              <div class="progress-bar bg-secondary" role="progressbar" style="width: 24.2%;" aria-valuenow="24.2" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>443 k€</td>
                          <td>387 k€</td>
                          <td>55.2 k€</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  </div>
              
              </div>
            </div>
  
  
  
            <div class="new-score mt-3 mb-3 container">
              <h6>Credit notation:</h6>
              <button id="score-button"><span><i class="fa-solid fa-plus"></i></span>new score</button>
            </div>
            <div class="show-credit text-capitalize" id="show-score">
              <div class="container">
                <div class="d-flex justify-content-center gap-2">
                  <div class="btn btn-success">Notation crédit</div>
                  <div class="btn btn-outline-success">Scoring</div>
                </div>
                <div class="two-content-show mt-2 mb-2 d-flex justify-content-between">
                  <h4>Notation crédit</h4>
                  <a href="settings-manage-risk.html" class="text-black-50"><span><i class="fa-solid fa-gear"></i></span>Custom scoring models</a>
                </div>
                <span class="text-black-50">Scoring par défaut</span>
                <div class="row">
                  <div class="col-lg-4">
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Forme juridique <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">Nouvelle entreprise / pas d'infos <br>
                        Société Anonyme et associées <br>
                        Propriétaire individuel (EURL) <br>
                        Coopérative <br>
                        Entreprise publique et affiliées
                      </p>
                    </div>
                  </div>
  
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Age de l'entreprise <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class=" text-capitalize">Nouvelle entreprise <br>
                        <= 2 ans <br>
                          2 - 4 ans <br>
                          5 - 6 ans <br>
                          7 - 8 ans <br>
                          9 - 10 ans <br>
                          > 10 ans
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Comportement de paiement <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">> 30 jours de retard / nouveau client <br>
                        20 - 30 jours de retard <br>
                        10 - 20 jours de retard <br>
                        7 - 10 jours de retard <br>
                        < 7 jours de retard <br>
                          Paiement à l'échéance <br>
                          Paie avant l'échéance
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Délai de paiement accordé <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">> 120 jours <br>
                        91 - 120 jours <br>
                        61 - 90 jours <br>
                        31 - 60 jours <br>
                        10 - 30 jours <br>
                        < 10 jours <br>
                          Paiement à la commande
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Avis du Commercial <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">Négatif <br>
                        Moyen <br>
                        Bon <br>
                        Très bon
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Evolution des commandes <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class=" text-capitalize">Décline >50% ou nouveau client <br>
                        Décline 20% - 50% <br>
                        Décline 0% - 20% <br>
                        Stagnant <br>
                        Augmente 0% - 20% <br>
                        Augmente 20% - 50% <br>
                        Augmente > 50%
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Résultat d'exploitation <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">Négatif<br>
                        0% - 3% <br>
                        3% - 6% <br>
                        6% - 10% <br>
                        10% - 15% <br>
                        15% - 20% <br>
                        > 20%
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Evolution du chiffre d'affaires / n-1<span>?</span>
                    </h6>
                    <div class="scroll-bars">
                      <p class=" text-capitalize">Baisse > 20% <br>
                        Baisse 10% - 20% <br>
                        Baisse 2% - 10% <br>
                        Stagne entre -2% et +2% <br>
                        Croissance 2% - 10% <br>
                        Croissance 10% - 20% <br>
                        Croissance > 20% <br>
  
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Fonds propres / Total bilan<span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">0% - 10% <br>
                        10% - 15% <br>
                        15% - 20% <br>
                        20% - 25% <br>
                        25% - 30% <br>
                        > 30% <br>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Endettement MLT / Fonds propres <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">> 1,5 <br>
                        1 - 1,5 <br>
                        0,8 - 1 <br>
                        0,6 - 0,8 <br>
                        0,4 - 0,6 <br>
                        0,2 - 0,4 <br>
                        < 0,2 <br>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Fonds de roulement (FR)<span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">Négatif <br>
                        Positif
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-4">
  
                    <h6 class="text-capitalize mt-2 mb-2 text-center">Trésorerie (FR - BFR) <span>?</span></h6>
                    <div class="scroll-bars">
                      <p class="text-capitalize">Négatif <br>
                        Positif
                      </p>
                    </div>
                  </div>
                  <div class="calc-score text-center mt-3 mb-3">
                    <button onclick="document.querySelector('.credit-notation-calc').classList.remove('d-none')"><span class="fa-solid fa-check"></span> calc score</button>
                  </div>
                </div>
                <div class="row align-items-center d-none credit-notation-calc">
                  <div class="col-lg-3 bg-light py-2 p-1">
                    <div class="d-flex flex-column">
                      <label class="text-center">Model :</label>
                      <h4 class="text-dark text-center bg-white py-3">Notation crédit</h4>
                    </div>
                  </div>
                  <div class="col-lg-3 bg-light py-2 p-1">
                    <div class="d-flex flex-column">
                      <label class="text-center">Score out of 10 :</label>
                      <h4 class="text-dark text-center bg-info py-3">0.2</h4>
                    </div>
                  </div>
                  <div class="col-lg-3 bg-light py-2 p-1">
                    <div class="d-flex flex-column">
                      <label class="text-center">Risk category :</label>
                      <h4 class="text-dark text-center bg-danger py-3">D</h4>
                      <span class="onmouse position-absolute px-1" style="z-index: 10;transform: translate(160px,40px);">?</span>
                      <span class="conttt" style="display: none;">title="Risk category D → Defaulted account or default imminent: company whose financial situation is very deteriorated which cannot meet its commitments. The risk of default is very high. Require payment guarantees if you grant a credit or request a payment in advance (before the delivery)."</span>
                    </div>
                  </div>
                  <div class="col-lg-3 text-center py-2 p-1">
                    <div class="btn btn-success"><i class="fa-solid fa-floppy-disk"  style="  font-size: 15px;"></i> Save these results</div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="credit-limit-btn mt-3 ">
              <h5 class="text-capitalize mt-2 mb-2">credit limit</h5>
              <button id="score-button-2"><span><i class="fa-solid fa-plus"></i></span>new score</button>
            </div>
            <div class="container credit-limit-first-section">
              <div class="credit-limit mt-3 mb-2" id="show-score-2">
                <div class="container">
                  <div class="two-content-show mt-2 mb-2 d-flex align-items-center justify-content-between">
                    <p>Risk category ( A, B, C or D - View <span>Credit notation</span> ) :</p>
                    <a href="#" class="text-black-50" onclick="showSecondCreditLimit()"><span><i class="fa-solid fa-gear"></i></span>Custom scoring
                      models</a>
                  </div>
                  <div class="opis-limits col-2">
                    <select class="form-select m-2" aria-label="Default select example">
                      <option value="1" selected>A</option>
                      <option value="1">B</option>
                      <option value="1">C</option>
                      <option value="1">D</option>
                    </select>
                  </div>
                  <div class="row">
                    <h6 class="mt-3">Commercial information :</h6>
                    <div class="col-lg-3 col-md-7 text-center">
                      <div class="input-titles">
                        <p class="text-center mb-0">Sales forecast <span>?</span> </p>
                        <input type="text">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-7 text-center">
                      <div class="input-titles">
                        <p class="text-center mb-0">Duration in months of the period <span>?</span> </p>
                        <input type="text">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-7 text-center">
                      <div class="input-titles">
                        <p class="text-center mb-0">Payment term <span>?</span> </p>
                        <input type="text">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-7 text-center">
                      <div class="input-titles">
                        <p class="text-center mb-0">Tax rate <span>?</span> </p>
                        <input type="text">
                      </div>
                    </div>
                    <span class="mt-2">Financial informations :</span>
                    <div class="col-lg-3 col-md-7 text-center mt-3">
                      <div class="input-titles">
                        <p class="text-center mb-0">Tangible Net Worth <span>?</span> </p>
                        <input type="text">
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-7 text-center mt-3">
                      <div class="input-titles">
                        <p class="text-center mb-0">Sales <span>?</span> </p>
                        <input type="text">
                      </div>
                    </div>
                    <div class="clac-button-score mt-4 mb-4 text-center">
                      <button onclick="document.querySelector('.credit-lemit-calc').classList.remove('d-none')"><span><i class="fa-solid fa-check"></i></span> calculate</button>
                    </div>
                  </div>
                  <div class="row align-items-center d-none credit-lemit-calc">
                    <div class="col-lg-4">
                      <div class="d-flex flex-column gap-2">
                        <label class="text-center">Need of credit limit (Calculation of need ) :</label>
                        <h4 class="text-dark text-center bg-info py-2">2.10 €</h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="d-flex flex-column gap-2">
                        <label class="text-center">Acceptable credit limit :</label>
                        <h4 class="text-dark text-center bg-info py-2">2.10 €</h4>
                      </div>
                    </div>
                    <div class="col-lg-4 text-center">
                      <div class="d-flex flex-column gap-4">
                        <label class="text-center"></label>
                        <div class="btn btn-success "><i class="fa-solid fa-floppy-disk"  style="  font-size: 15px;"></i> Save these results</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--this click to show hide-scetions-->
            <section class="button-to-back credit-limit-second-section credit-limit mt-2 d-none" id="showTwo">
              <div class="back-button container">
                <button class="mt-3 mb-3" onclick="showFirstCreditLimit()" ><span><i class="fa-solid fa-arrow-left"></i></span> back</button>
              </div>
              <div class="three-cont-section  mt-2  ">
              <div class="container">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <div class="content-section-select">
                      <p class="text-center m-0">Criterion n°1</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="content-section-select">
                      <p class="text-center m-0">Criterion n°2</p>
                    </div>
                  </div>
                </div>
                <div class="row px-3 space-back">
                  <div class="col-md-4 m-0 p-0">
                    <p class="m-0 mt-2">Description</p>
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input type="text" class="form-control my-1" value="Tangible Net Worth">
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input type="text" class="form-control my-1" value="Sales">
                  </div>
                </div>
                <div class="row px-3 space-pading">
                  <div class="col-md-4 m-0 p-0">
                    <p class="m-0 mt-2">Detalied description</p>
                  </div>
                  <div class="col-md-4 m-0 pb-0 px-2">
                    <textarea class="form-control mt-1 mb-1" name="" id="" placeholder="The TNW is calculated with balance sheet information: equity - untangible assets"></textarea>
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <textarea class="form-control mt-1 mb-1" name="" id="" placeholder="The TNW is calculated with balance sheet information: equity - untangible assets"></textarea>
                  </div>
                </div>
                <div class="row px-3 space-back">
                  <div class="col-md-4 m-0 p-0">
                    <p class="m-0 mt-2">max 5% if credit notatins reuslt A</p>
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="50">
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="50">
                  </div>
                </div>
                <div class="row px-3 space-pading">
                  <div class="col-md-4 m-0 p-0">
                    <p class="m-0 mt-2">max 5% if credit notatins reuslt B</p>
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="37.5">
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="37.5">
                  </div>
                </div>
                <div class="row px-3 space-back">
                  <div class="col-md-4 m-0 p-0">
                    <p class="m-0 mt-2">max 5% if credit notatins reuslt C</p>
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="50">
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="50">
                  </div>
                </div>
                <div class="row px-3 space-pading">
                  <div class="col-md-4 m-0 p-0">
                    <p class="m-0 mt-2">max 5% if credit notatins reuslt D</p>
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="37.5">
                  </div>
                  <div class="col-md-4 m-0 px-2">
                    <input class="form-control my-1" type="text" value="37.5">
                  </div>
                </div>
                <div class="clac-button-score mt-4 mb-4 text-center">
                  <button onclick="showFirstCreditLimit()"><span><i class="fa-solid fa-check"></i></span> Modify</button>
                </div>
              </div>
              </div>
              
              <!--this click to show hide-scetions-->
              </section>
          </div>
        </div>
      </div>
      <!--sec-1-->
  
      <!--sec-2-->
  
      <div class="d-none" id="indicatorsDiv">
        <div class="sec-2 bg-white" >
          <div class="container">
            <div class="row align-items-center pb-5">
              <div class="col-lg-6" style="height:300px ;">
                <div class="pay-totals mt-3 mb-3 fw-bold">
                <p>Total receivable :<span>21.1 k€</span></p>
                <p>Overdue: <span>6.3 k€</span></p>
                <p>Overdue % :<span>30 %</span></p>
                <p>Current receivable :<span>14.8 k€</span></p>
                <p>Promise to pay :<span>0 €</span></p>
              </div>
              <hr>
              <div class="table-and-txt">
              <p>Average time of payment :<span >+8 </span>days</p>
              <p>Average days beyond terms <span> +7 </span>days</p>
            </div>
            <div class="three-titels d-flex text-center justify-content-between align-items-center">
              <span></span>
            <span>Today</span>
            <span>April 2024</span>
            <span>March 2024</span>
            </div>
            <div class="four-cont-sec-2 d-flex justify-content-around  mt-3">
              <span>?</span>
              <span>+7d. <i class="fa-solid fa-flag" style="color: green;"></i></span>
              <span class="text-black-50"><i class="fa-solid fa-flag"></i></span>
              <span class=" text-black-50 " ><i class="fa-solid fa-flag"></i></span>
            </div>
          </div>
          <div class="col-lg-6" style="height:300px ;">
              <h6 class="text-center text-black-50"> Aging balance</h6>
              <canvas  id="myChart-5"  width="200" height="200"></canvas>
          </div>
                </div>
          </div>
        </div>
  
      <div class="two-charts bg-white">
      <div class="container">
        <div class="row pb-3">
          <div class="col-lg-6" style="height:300px ;">
            <h6 class="text-black-50 text-center mt-3"> DSO trend</h6>
            <canvas id="myChart-8"  width="200" height="200"></canvas>
          </div>
          <div class="col-lg-6" style="height:300px ;">
            <h6 class="text-black-50 text-center mt-3">Overdue trend</h6>
            <canvas id="myChart-6"  width="200" height="200"></canvas>
          </div>
        </div>
      </div>
      </div>
  
      <div class="two-desc bg-white">
      <div class="container">
        <div class="row pb-5 align-items-center">
          <div class="col-lg-6 pt-5" style="height:500px ;">
            <div class="desc-and-cric mt-3 mb-3 text-center">
              <h5 class="text-capitalize mt-3 mb-3"> Pending disputes</h5>
              <p>No. of items in dispute:<span>0</span></p>
              <p>Disputed receivables amount :<span> 0 €</span></p>
              <p>Average time for dispute resolution : <span> ?</span></p>
            </div>
            <div class="circ">
              <span class="text-center text-capitalize" style="width: 100%; color: green;">nodata-update</span>
            </div>
          </div>
          <div class="col-lg-6 m-auto pt-5" style="height:500px ;">
            <h5 class="mt-5 mb-3 text-center">Disputes / Trend</h5>
            <div class="display-data">
              <h6 class="text-center">No data to display</h6>
            </div>
          </div>
        </div>
      </div>
      </div>
  
      <div class="two-charts-sales bg-white">
      <div class="container">
        <div class="row pb-5">
          <div class="col-lg-6" style="height:300px ;">
            <h6 class="text-black-50 text-center mt-3">Sales history</h6>
            <canvas id="myChart-1"  width="350" height="200"></canvas>
          </div>
          <div class="col-lg-6" style="height:300px ;">
            <h6 class="text-black-50 text-center mt-3">Cash receipts history</h6>
            <canvas id="myChart-2"  width="200" height="200"></canvas>
          </div>
        </div>
      </div>
      </div>
      <div class="one-charts  bg-white">
      <div class="container">
        <div class="row pb-5 align-items-center" style="height:500px ;">
          <div class="col-lg-12">
            <div class="head-titels text-black-50 pt-3 mt-3 mb-3">
              <p class="">total sales<span>39.8 k€</span></p>
              <p>total cash receipts<span>18.7 k€</span></p>
              <p>total forecast<span>0€</span>+ amount off forecast</p>
            </div>
          </div>
          <h5 class="text-dark text-center">Cash forecast</h5>
          <div style="height:300px ;">
            <canvas id="myChart-3" width="100" height="100"></canvas>
          </div>
        </div>
      </div>
      </div>
      </div>
  <!--sec-2-->
  <!--sec-3-->
      <div class="three-button-collections pb-5 bg-white d-none" id="historyDiv">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              
              <div class="three-button align-items-center gap-2 mt-3 d-flex text-center justify-content-around">
                <div class="btn btn-primary w-100" id="show-table-one" onclick="fun1()">collection history</div>
                <div class="btn btn-outline-primary w-100" id="show-table-one-2" onclick="fun2()">Actions history (Risk)</div>
                <div class="btn btn-outline-primary w-100" id="show-history" onclick="fun3()">Items history</div>
                
              </div>
              <div class="search mt-3 mb-3 justify-content-end d-flex">
                <form action="">
                <div class="form-group col-12">
                
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Multi-columns search">
                </form>
                </div>
            </div>
            
            <div class="collection-table ">
        <div class="container">
          <div class="row mt-3 px-4 align-items-center text-center">
            <div class="col ">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Action date</p>
              </div>
            </div>
            <div class="col ">
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">Action type</p>
          </div>
          </div>
            <div class="col hide">
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">trans no.</p>
          </div>
          </div>
            <div class="col hide">
                      <div class="d-flex align-items-center justify-content-center gap-1 ">
            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
            <p class="fw-bold">action amount inc. tax</p>
          </div>
          </div>
            <div class="col hide">
              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">action done by</p>
              </div>
          </div>
            <div class="col  tavle-dropdown-icon"></div>
          </div>
          <div>
              <div class="row pt-3 px-4 align-items-center text-center" style="background-color:#006BFF14;">
                  <div class="col"><p class="fw-bold">2024-05-08 15:55</p>
                  </div>
                  <div class="col "><p class="fw-bold"><i class="fa-solid fa-phone" style="font-size: 10px; margin-right: 5px;"></i>phone</p>
                  <p class="fw-bold">Telephone reminder No. 1</p>
                  </div>
                  <div class="col hide"><p class="fw-bold">?, 310510, 310511, 310572, 310636, ... [8]</p>
            
                  </div>
                  <div class="col hide"><p class="fw-bold">24,775.96 €</p>
                  </div>
                  <div class="col hide">
                  
                    <div class="img-s-2 d-flex">
                    <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span> Paul Mayer (Administrator)</span>
                  </div>
                </div>
                  <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
                  <div class="hidden d-none bg-light">
                      <div class="d-flex">
                          <p class="fw-bold">trans no:</p>
                          <p class="fw-bold">?, 310510, 310511, 310572, 310636, ... [8]</p>
                      </div>
                      <div class="d-flex">
                          <p class="fw-bold">action amount inc. tax:</p>
                          <p class="fw-bold">24,775.96 €</p>
                      </div>
                      <div class="d-flex">
                          <p class="fw-bold">action done by:</p>
                          <div class="img-s-2 d-flex justify-content-between">
                            <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%; margin: -3px auto -2px;" alt=""><span> Paul Mayer (Administrator)</span>
                          </div>
                      </div>
                
                  </div>
              </div>
          </div>
          <div>
            <div class="row pt-3 px-4 align-items-center text-center">
                <div class="col"><p class="fw-bold">2024-05-08 15:55</p>
                </div>
                <div class="col ">
                  <span class="btn btn btn-primary">@Email</span>
                  <p class="fw-bold">eminder by e-mail No. 1</p>
                </div>
                <div class="col hide"><p class="fw-bold">?, 310510, 310511, 310572, 310636,</p>
          
                </div>
                <div class="col hide"><p class="fw-bold">24,775.96 €</p>
                </div>
                <div class="col hide">
                
                  <div class="img-s-2 d-flex">
                  <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span> Paul Mayer (Administrator)</span>
                </div>
              </div>
                <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
                <div class="hidden d-none bg-light">
                    <div class="d-flex">
                        <p class="fw-bold">trans no:</p>
                        <p class="fw-bold">?, 310510, 310511, 310572, 310636,</p>
                    </div>
                    <div class="d-flex">
                        <p class="fw-bold">action amount inc. tax:</p>
                        <p class="fw-bold">24,775.96 €</p>
                    </div>
                    <div class="d-flex">
                        <p class="fw-bold">action done by:</p>
                        <div class="img-s-2 d-flex">
                          <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%; margin: -2px auto 2px; " alt=""><span> Paul Mayer (Administrator)</span>
                        </div>
                    </div>
              
                </div>
            </div>
          </div>
          <div>
              <div class="row pt-3 px-4 align-items-center text-center" style="background-color:#006BFF14;">
                  <div class="col"><p class="fw-bold">2024-05-08 15:55</p>
                  </div>
                  <div class="col "><p class="fw-bold"><i class="fa-solid fa-phone" style="font-size: 10px; margin-right: 5px;"></i>phone</p>
                  <p class="fw-bold">Telephone reminder No. 1</p>
                  </div>
                  <div class="col hide"><p class="fw-bold">?, 310510, 310511, 310572, 310636, ... [8]</p>
            
                  </div>
                  <div class="col hide"><p class="fw-bold">24,775.96 €</p>
                  </div>
                  <div class="col hide">
                  
                    <div class="img-s-2 d-flex">
                    <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span> Paul Mayer (Administrator)</span>
                  </div>
                </div>
                  <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
                  <div class="hidden d-none bg-light">
                      <div class="d-flex">
                          <p class="fw-bold">trans no:</p>
                          <p class="fw-bold">?, 310510, 310511, 310572, 310636, ... [8]</p>
                      </div>
                      <div class="d-flex">
                          <p class="fw-bold">action amount inc. tax:</p>
                          <p class="fw-bold">24,775.96 €</p>
                      </div>
                      <div class="d-flex">
                          <p class="fw-bold">action done by:</p>
                          <div class="img-s-2 d-flex justify-content-between">
                            <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%; margin: -3px auto -2px;" alt=""><span> Paul Mayer (Administrator)</span>
                          </div>
                      </div>
                
                  </div>
              </div>
          </div>
          <div>
            <div class="row pt-3 px-4 align-items-center text-center">
                <div class="col"><p class="fw-bold">2024-05-08 15:55</p>
                </div>
                <div class="col ">
                  <span class="btn btn btn-primary">@Email</span>
                  <p class="fw-bold">eminder by e-mail No. 1</p>
                </div>
                <div class="col hide"><p class="fw-bold">?, 310510, 310511, 310572, 310636,</p>
          
                </div>
                <div class="col hide"><p class="fw-bold">24,775.96 €</p>
                </div>
                <div class="col hide">
                
                  <div class="img-s-2 d-flex">
                  <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span> Paul Mayer (Administrator)</span>
                </div>
              </div>
                <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
                <div class="hidden d-none bg-light">
                    <div class="d-flex">
                        <p class="fw-bold">trans no:</p>
                        <p class="fw-bold">?, 310510, 310511, 310572, 310636,</p>
                    </div>
                    <div class="d-flex">
                        <p class="fw-bold">action amount inc. tax:</p>
                        <p class="fw-bold">24,775.96 €</p>
                    </div>
                    <div class="d-flex">
                        <p class="fw-bold">action done by:</p>
                        <div class="img-s-2 d-flex">
                          <img src="img/person2.jpg" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%; margin: -2px auto 2px; " alt=""><span> Paul Mayer (Administrator)</span>
                        </div>
                    </div>
              
                </div>
            </div>
          </div>
        </div>        
            </div>
  
            <div class="page-not-found mt-3 mb-3 d-none" id="page-not-found">
              <h5 class="text-center mt-3 mb-3 p-4">No history found</h5>
            </div>
  
            <div class="tale-2 mt-3 border-none d-none"  id="history-table">
              <div class="row mt-3 px-4 align-items-center text-center" >
                <div class="col ">
                              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Trans No</p>
              </div>
              </div>
                <div class="col ">
                              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Po No.</p>
              </div>
              </div>
                <div class="col ">
                              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Issue date</p>
              </div>
              </div>
                <div class="col hide">
                              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Due data</p>
              </div>
              </div>
                <div class="col hide">
                              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Payment date</p>
              </div>
              </div>
                <div class="col hide">
                              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Overdue</p>
              </div>
              </div>
                <div class="col hide">
                              <div class="d-flex align-items-center justify-content-center gap-1 ">
                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                <p class="fw-bold">Amountexc. Tax</p>
              </div>
              </div>
                <div class="col hide">
                    <div class="d-flex align-items-center justify-content-center gap-1 ">
                      <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                      <p class="fw-bold">Amountexc. Tax</p>
                    </div>
              </div>
                <div class="col  tavle-dropdown-icon"></div>
              </div>
              <div class="tables-backg ">
              <div class="row pt-3 px-4 align-items-center text-center" style="background: #006BFF14;">
                <div class="col"><p class="fw-bold">310712</p>
                </div>
                <div class="col ">
                <p class="fw-bold"></p>
                </div>
                <div class="col ">
                  <p class="fw-bold">	2024-05-15</p>
                  </div>
                <div class="col hide">
                  <p class="fw-bold">	2024-05-15</p>
                </div>
                <div class="col hide">
                  <p class="fw-bold">
                    2024-05-22
                  </p>
                </div>
                <div class="col hide">
                  <p class="fw-bold">7 d</p>
              </div>
              <div class="col hide">
                <p class="fw-bold">5,141.14 €	</p>
              </div>
              <div class="col hide">
                <p class="fw-bold">5,141.14 €	</p>
              </div>
                <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
              
              
                <div class="hidden d-none bg-light">
                    <div class="d-flex">
                        <p class="fw-bold">Due data:</p>
                        <p class="fw-bold">	2024-05-15</p>
                    </div>
                    <div class="d-flex">
                      <p class="fw-bold">Payment date :</p>
                      <p class="fw-bold">	2024-05-15</p>
                    </div>
                    <div class="d-flex">
                      <p class="fw-bold">Overdue :</p>
                      <p class="fw-bold">	2024-05-15</p>
                    </div>
                    <div class="d-flex">
                      <p class="fw-bold">Amountexc. Tax :</p>
                      <p class="fw-bold">5,141.14 €	</p>
                    
                  </div>
                  <div class="d-flex">
                    <p class="fw-bold">Amountexc. Tax :</p>
                    <p class="fw-bold">	5,141.14 €	</p>
                </div>
                </div>
                
            </div>
            <div class="row pt-3 px-4 align-items-center text-center" >
              <div class="col"><p class="fw-bold">310712</p>
              </div>
              <div class="col ">
              <p class="fw-bold"></p>
              </div>
              <div class="col ">
                <p class="fw-bold">	2024-05-15</p>
                </div>
              <div class="col hide">
                <p class="fw-bold">	2024-05-15</p>
              </div>
              <div class="col hide">
                <p class="fw-bold">
                  2024-05-22
                </p>
              </div>
              <div class="col hide">
                <p class="fw-bold">7 d</p>
            </div>
            <div class="col hide">
              <p class="fw-bold">5,141.14 €	</p>
            </div>
            <div class="col hide">
              <p class="fw-bold">5,141.14 €	</p>
            </div>
              <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
              <div class="hidden d-none bg-light">
                <div class="d-flex">
                    <p class="fw-bold">Due data:</p>
                    <p class="fw-bold">	2024-05-15</p>
                </div>
                <div class="d-flex">
                  <p class="fw-bold">Payment date :</p>
                  <p class="fw-bold">	2024-05-15</p>
                </div>
                <div class="d-flex">
                  <p class="fw-bold">Overdue :</p>
                  <p class="fw-bold">	2024-05-15</p>
                </div>
                <div class="d-flex">
                  <p class="fw-bold">Amountexc. Tax :</p>
                  <p class="fw-bold">5,141.14 €	</p>
                
              </div>
              <div class="d-flex">
                <p class="fw-bold">Amountexc. Tax :</p>
                <p class="fw-bold">	5,141.14 €	</p>
            </div>
            </div>
              
          </div>
          <div class="row pt-3 px-4 align-items-center text-center" style="background: #006BFF14;">
            <div class="col"><p class="fw-bold">310712</p>
            </div>
            <div class="col ">
            <p class="fw-bold"></p>
            </div>
            <div class="col ">
              <p class="fw-bold">	2024-05-15</p>
              </div>
            <div class="col hide">
              <p class="fw-bold">	2024-05-15</p>
            </div>
            <div class="col hide">
              <p class="fw-bold">
                2024-05-22
              </p>
            </div>
            <div class="col hide">
              <p class="fw-bold">7 d</p>
          </div>
          <div class="col hide">
            <p class="fw-bold">5,141.14 €	</p>
          </div>
          <div class="col hide">
            <p class="fw-bold">5,141.14 €	</p>
          </div>
            <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
            <div class="hidden d-none bg-light">
              <div class="d-flex">
                  <p class="fw-bold">Due data:</p>
                  <p class="fw-bold">	2024-05-15</p>
              </div>
              <div class="d-flex">
                <p class="fw-bold">Payment date :</p>
                <p class="fw-bold">	2024-05-15</p>
              </div>
              <div class="d-flex">
                <p class="fw-bold">Overdue :</p>
                <p class="fw-bold">	2024-05-15</p>
              </div>
              <div class="d-flex">
                <p class="fw-bold">Amountexc. Tax :</p>
                <p class="fw-bold">5,141.14 €	</p>
              
            </div>
            <div class="d-flex">
              <p class="fw-bold">Amountexc. Tax :</p>
              <p class="fw-bold">	5,141.14 €	</p>
          </div>
          </div>
            
        </div>
        <div class="row pt-3 px-4 align-items-center text-center" >
          <div class="col"><p class="fw-bold">310712</p>
          </div>
          <div class="col ">
          <p class="fw-bold"></p>
          </div>
          <div class="col ">
            <p class="fw-bold">	2024-05-15</p>
            </div>
          <div class="col hide">
            <p class="fw-bold">	2024-05-15</p>
          </div>
          <div class="col hide">
            <p class="fw-bold">
              2024-05-22
            </p>
          </div>
          <div class="col hide">
            <p class="fw-bold">7 d</p>
        </div>
        <div class="col hide">
          <p class="fw-bold">5,141.14 €	</p>
        </div>
        <div class="col hide">
          <p class="fw-bold">5,141.14 €	</p>
        </div>
          <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i class="fa-solid fa-chevron-down"></i></div>
          <div class="hidden d-none bg-light">
            <div class="d-flex">
                <p class="fw-bold">Due data:</p>
                <p class="fw-bold">	2024-05-15</p>
            </div>
            <div class="d-flex">
              <p class="fw-bold">Payment date :</p>
              <p class="fw-bold">	2024-05-15</p>
            </div>
            <div class="d-flex">
              <p class="fw-bold">Overdue :</p>
              <p class="fw-bold">	2024-05-15</p>
            </div>
            <div class="d-flex">
              <p class="fw-bold">Amountexc. Tax :</p>
              <p class="fw-bold">5,141.14 €	</p>
            
          </div>
          <div class="d-flex">
            <p class="fw-bold">Amountexc. Tax :</p>
            <p class="fw-bold">	5,141.14 €	</p>
        </div>
        </div>
      </div>
      </div>
      </div>
          </div>
          </div>
        </div>
      </div>
  <!--sec-3-->
  </div>
  </div>

  <div class="invoice d-none">
    <div class="bg-light invoice-first">
      <div class="row text-center m-0 p-1 w-100" style="background-color: #006bff">
        <div class="d-flex justify-content-between ">
          <div class="text-start">
            <h2 class="text-light">Invoice <span class="fw-bold ps-2">C35322</span></h2>
            <p><i class="fa-solid fa-building text-light"></i><a href="#" class="text-light ps-2">341111 / Octimum centre</a></p>
          </div>
          <div class="d-flex justify-content-end gap-3 mt-2">
           <div class="icon-holab  ">
            <i class="fa-solid fa-pen text-primary p-2 bg-light" onclick="EditInvoice()" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
            <a href="invoice.html" target="_blank" ><i class="fa-solid fa-maximize text-primary p-2 bg-light"style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i></a>
            <i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeInvoice()" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
           </div>
          </div>
        </div>
      </div>
      <div class="bg-info p-3 text-center">Overdue</div>
      <div class="row m-0 p-3">
        <div class="col-lg-5 col-sm-6 text-start">
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">PO No.</p>
            <p class="">9121</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">File No. :</p>
            <p class="">-</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">ERP item type :</p>
            <p class="">Facture</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Business case :</p>
            <p class="">-</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Sales manager :</p>
            <p class="">-</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Sales administrative :</p>
            <p class="">-</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Custom field #1 :</p>
            <p class="">-</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Custom field #2 :</p>
            <p class="">-</p>
          </div>
        </div>
        <div class="col-2"></div>
        <div class="col-lg-5 col-sm-6 text-start">
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Order date :</p>
            <p class="">-</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">issue date :</p>
            <p class="">2024-03-29</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Due date :</p>
            <p class="">2024-04-14</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Overdue :</p>
            <p class="">69 days</p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Remaining amount :</p>
            <p class=""></p>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold">Initial amount :</p>
            <p class="">7,573.05 € (6,310.88 € exc. Tax)</p>
          </div>
        </div>
        <div class="btn text-light btn-secondary px-2 w-auto m-auto" onclick="showInvioce2()">
          <i class="fa-solid fa-pen-to-square" ></i>&ensp;Change status > Add
          comment > Set next action
        </div>
      </div>
      <div class="row p-4 m-0">
        <div class="col-1"></div>
        <div class="col-lg-4 col-sm-6">
          <div class="m-1 w-100 btn btn-outline-primary statusButton" onclick="statusFun()">
            <i class="fa-solid fa-check"></i> Status history and Comments
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="m-1 w-100 btn btn-primary actionsButton"  onclick="actionsFun()">
            <i class="fa-solid fa-list"></i> Actions history
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="m-1 w-100 btn btn-outline-primary associatedButton" onclick="associatedFun()">
            <i class="fa-solid fa-link"></i> Associated files <span class="badge bg-danger ms-1" style="border-radius: 50%;">1</span>
          </div>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
    <div class="create-c-i invoice-second bg-light d-none">
      <div class="d-flex gap-3 justify-content-end text-center m-0 mb-3 p-3 w-100" style="background-color: #006bff">
        <span class="btn text-light p-1 px-2 btn-danger"  onclick="closeInvoice()"><i class="fa-solid fa-trash" style="  font-size: 15px;"></i></span>
        <span class="btn px-4 text-light p-1 btn-success" onclick="closeEditInvoice()"><i class="fa-solid fa-floppy-disk"  style="  font-size: 15px;"></i> Save</span>
        <span class="btn px-4 text-light p-1 btn-warning" onclick="closeEditInvoice()"><i class="fa-solid fa-reply" style="  font-size: 15px;"></i> Cancel</span>
        <a href="editInvoice.html" class="btn px-2 text-primary p-1 btn-light" target="_blank" ><i class="fa-solid fa-maximize "style="  font-size: 15px;"></i></a>
      </div>
      <div class="row container-fluid">
        <div class="col-md-6  my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname0">ltem type * :</label>
  
            </div>
            <div class="col-7 ">
              <select class="form-select" id="inputname0">
                <option value="" selected disabled>invoice</option>
                <option value="">Credit note</option>
                <option value="">Downpayment request</option>
                <option value="">Draft</option>
                <option value="">Invoice</option>
                <option value="">Miscellaneous transaction</option>
                <option value="">Payment</option>
              </select>
            </div>
          </form>
  
        </div><!--1-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname2">Order date :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname2">
              <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
            </div>
          </form>
  
        </div><!--2-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname1">Trans NO :</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname1">
            </div>
          </form>
  
        </div><!--3-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname4">Issue date * :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname4">
              <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
            </div>
          </form>
  
        </div><!--4-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname5">Company code / company :</label>
  
            </div>
            <div class="col-7 ">
              <select class="form-select" id="inputname5">
                <option value="" selected disabled></option>
                <option value="4084893">0Z60M / Hinchingbrooke Health Care Trust</option>
                <option value="11029939">100048 / IDEX ENERGIES</option>
                <option value="11030209">1000655 / RENE GRAF</option>
                <option value="11029880">100067 / M. LAGARRIGUE</option>
                <option value="11030063">100071 / AQUAPRO SERVICES</option>
                <option value="11030220">10015 / ERESILIENCE OCCITANI</option>
                <option value="11030221">10016 / MATELIER TRAVAUX ELECTROMECANIQUES</option>
                <option value="11029818">100206 / CHAUF. SANITAIRE MANOSQUIN</option>
                <option value="11030222">10025 / LBISCUITERIE VITA</option>
                <option value="11030223">10028 / SSYSCO FRANCE SA</option>
                <option value="11029819">100309 / POCHET DU COURVAL</option>
                <option value="11030000">100314 / CIE DES FROMAGES &amp; RICHEMONTS</option>
                <option value="11029820">100315 / DALKIA FROID SOLUTIONS</option>
                <option value="11029821">100356 / EHPAD LES COULEURS DU TEMPS</option>
                <option value="11030224">10036 / ECAMERON FRANC</option>
                <option value="11030225">10039 / LCARLTON INTER CONTINENTA</option>
                <option value="11030226">10057 / ECHAUDRONNERIE SERVIC</option>
                <option value="11030227">10062 / NCOMPAGNIE INTERNATIONALE DE MAINTE</option>
                <option value="11030228">10064 / MCITELU</option>
                <option value="11030064">100641 / CIE HOBART SAS</option>
                <option value="11029788">100748 / CLINIQUE SAINT ANTOINE</option>
                <option value="11029789">100750 / E I T P</option>
                <option value="11029790">100760 / LES PLAISIRS PATISSIERS</option>
                <option value="11029791">100761 / DISPAM</option>
                <option value="11029991">100767 / BOULANGERIE DE L EUROPE</option>
                <option value="11030105">100768 / CHEMETALL</option>
                <option value="11029797">100769 / IMED ST ANTOINE EPSA</option>
                <option value="11029803">100845 / DALKIA FRANCE</option>
                <option value="11029925">10096 / POMPAC</option>
                <option value="11030001">100991 / COLLEGE DE L'ALBE</option>
                <option value="4084807">1010012 / Digital Realty</option>
                <option value="4084180">1010017 / Routeco Limited</option>
                <option value="4085108">1010067 / Vee Bee Filtration</option>
                <option value="4084113">1010095 / Mitie Technical Facilities Management</option>
                <option value="4084229">1010096 / Management Interiors Limited</option>
                <option value="4084956">1010110 / Lancashire Insurance</option>
                <option value="4084510">1010208 / Blue Helix</option>
                <option value="4084737">1010217 / Bt Convergent Solutions</option>
                <option value="4084196">1010225 / Cbm Build &amp; Serv</option>
                <option value="4084554">1010262 / Babcock Communications (T&amp;S)</option>
                <option value="4084815">1010278 / Dwr Cymru Welsh Water</option>
                <option value="4084564">1010291 / Ms Society</option>
                <option value="4084215">1010320 / Gloster</option>
                <option value="4084424">1010329 / Nedbank Private Wealth Limited</option>
                <option value="4085112">1010333 / Vertech Projects</option>
                <option value="4084144">1010336 / Barclays Sharedealing</option>
                <option value="4084075">1010347 / Wcf</option>
                <option value="4084046">1010354 / Llw Repository Limited</option>
                <option value="4085118">1010357 / Vohkus</option>
                <option value="4085177">1010364 / Viverra Maecenas Incorporated</option>
                <option value="4084036">1010385 / Hm Prison East Sutton Park</option>
                <option value="4084689">1010386 / Pvf Soflog Warehouse</option>
                <option value="4084925">1010388 / Interserve (Defence)</option>
                <option value="4085023">1010390 / Passion Pictures Limited</option>
                <option value="4084088">1010396 / Devon County Council</option>
                <option value="4084666">1010397 / Novatech</option>
                <option value="4085128">1010398 / Xaar Jet</option>
                <option value="4085125">1010402 / Weymouth &amp; Portland Borough Council</option>
                <option value="4084615">1010404 / Blackrock Investment Management () - Copenhagen Branch</option>
                <option value="4084343">1010405 / N G Bailey</option>
                <option value="4084653">1010412 / Brett Communications</option>
                <option value="4084892">1010413 / Hewlett-Packard Caribe Bv</option>
                <option value="4085026">1010415 / Pharmaron</option>
                <option value="4085032">1010416 / Premier 1983 T/A Form It Solutions</option>
                <option value="4084572">1010418 / Allen &amp; Overy</option>
                <option value="4084372">1010422 / Suspendisse Dui Fusce Incorporated</option>
                <option value="4084733">1010426 / Axios Systems Plc</option>
                <option value="4084565">1010438 / Northamptonshire Healthcare Nhs Foundation Trust</option>
                <option value="4084682">1010440 / Vitae Odio Sagittis Foundation</option>
                <option value="4084731">1010442 / Axa Tech</option>
                <option value="4084821">1010446 / Ebuyer</option>
                <option value="4084988">1010449 / Mintel Group</option>
                <option value="4084087">1010453 / Vitae Sodales Inc.</option>
                <option value="4084706">1010455 / Aei Cables</option>
                <option value="4084066">1010463 / Rosemount Aerospace T/A Utc Aerospace Systems</option>
                <option value="4084933">1010468 / Iss Facility Services</option>
                <option value="4084232">1010469 / Nhk Cosmomedia (Europe) .</option>
                <option value="4084348">1010470 / Optimum Group Services Plc</option>
                <option value="4084794">1010474 / Cpcs Extended Warranty House A/C</option>
                <option value="4084224">1010485 / Ivi</option>
                <option value="4084642">1010487 / Netcetera</option>
                <option value="4084236">1010488 / Oxford University Hospitals Nhs Trust</option>
                <option value="4084793">1010492 / Covance Laboratories</option>
                <option value="4084532">1010495 / Tef Telford Manufacturing</option>
                <option value="4084435">1010499 / Boeing Training &amp; Flight Services Limited</option>
                <option value="4084022">1010500 / Cpcs Fsb Techical Risk House A/C</option>
                <option value="4084736">1010502 / Babcock Support Services</option>
                <option value="4084177">1010515 / Prf Bernard Warehouse</option>
                <option value="4084009">1010517 / Advantage Technology</option>
                <option value="4085094">1010522 / n Group Limited</option>
                <option value="4084767">1010535 / Calmac Ferries</option>
                <option value="4084099">1010541 / Daniel J Edelman</option>
                <option value="4085081">1010545 / Totalis Solutions (T/A Red Sky)</option>
                <option value="4084469">1010553 / Lintott Control Systems Limited</option>
                <option value="4084125">1010554 / Trayport Contigo Limited</option>
                <option value="4084360">1010556 / Sociis Natoque Associates (A)</option>
                <option value="4084822">1010558 / Eco Of London</option>
                <option value="4084283">1010562 / Pert Air Conditioning</option>
                <option value="4085029">1010563 / Pm Central Services Plc</option>
                <option value="4085010">1010571 / Norwood Ravenswood Schools</option>
                <option value="4085046">1010572 / Risby Air Conditioning Co</option>
                <option value="4084315">1010577 / Digital Realty (Redhill) Sarl</option>
                <option value="4084483">1010578 / Discovery Corporate Services Limited (Dcsl)</option>
                <option value="4084928">1010579 / Isdc Developments No 2 Limited</option>
                <option value="4085079">1010581 / Torbay &amp; South Devon Nhs Foundation Trust</option>
                <option value="4084482">1010583 / Ayrshire &amp; Arran Health Board</option>
                <option value="4084369">1010584 / Ldc Trust Management Limited</option>
                <option value="4084983">1010585 / Michael J Lonsdale</option>
                <option value="4084596">1010586 / Moorgate Consulting</option>
                <option value="4085084">1010587 / Trans European Technology</option>
                <option value="4084457">1010588 / Westerngeco Limited</option>
                <option value="4084730">1010589 / Avx</option>
                <option value="4084299">1010590 / Bailey Maintenance Services</option>
                <option value="4084791">1010591 / Cook Limited</option>
                <option value="4084169">1010592 / Kimberly Clark European Services</option>
                <option value="4084048">1010593 / Mardix Limited</option>
                <option value="4084641">1010594 / Nationwide International</option>
                <option value="4084445">1010595 / Pms International Group Plc</option>
                <option value="4084076">1010596 / Weil Gotshal &amp; Manges</option>
                <option value="4084549">1010597 / Sit Amet Foundation</option>
                <option value="4085146">1010598 / Sociis Natoque Penatibus Consulting</option>
                <option value="4084531">1010599 / Ut Lacus Incorporated</option>
                <option value="11030002">101093 / LYCEE DE COMBLOUX</option>
                <option value="4084017">1011001 / Cardinal Hume Catholic School</option>
                <option value="11029901">101121 / ORT</option>
                <option value="4084643">1011300 / Network Rail (High Speed)</option>
                <option value="11030090">101423 / ASSOCIATION OSLO</option>
                <option value="11029852">101424 / GRAIN DE CAFE</option>
                <option value="11029808">101629 / ASSOC° PARALYSES DE FRANCE</option>
                <option value="11029902">101903 / GERARD CASELLA</option>
                <option value="4084620">1019080 / Interserve Technical Services</option>
                <option value="11030037">101952 / MC DONALDS-SARL BILOBA</option>
                <option value="4084415">1019721 / Vivamus Nibh Foundation</option>
                <option value="4085004">1019724 / Nhs Bromley Ccg</option>
                <option value="4084742">1019726 / Bangor University</option>
                <option value="4084771">1019728 / Capita Secure Information Solutions</option>
                <option value="4084986">1019730 / Milton Keynes College</option>
                <option value="4085031">1019733 / Powermode Limited</option>
                <option value="4084725">1019735 / Arla Foods Plc</option>
                <option value="11030106">10220 / ETS TRILLES</option>
                <option value="11030174">102363 / I.P.M.C CNRS</option>
                <option value="11029807">102418 / MAISON MERE &amp; ENFANT</option>
                <option value="11029854">102705 / ENTREPRISE LORNAGE FRERES</option>
                <option value="4084806">1030004 / Digital Realty Trust</option>
                <option value="4085122">1030094 / Sed Facilisis Corporation</option>
                <option value="4084402">1030132 / Krome Technologies</option>
                <option value="4084109">1030135 / L&amp;M Engineering</option>
                <option value="4084190">1030136 / Babcock Flagship Limited</option>
                <option value="4084574">1030144 / Be Modern</option>
                <option value="4084924">1030160 / Interserve (Defence)</option>
                <option value="4085111">1030161 / Vernier</option>
                <option value="4084932">1030169 / Iss Facility Services</option>
                <option value="4084820">1030170 / Eaton Electric</option>
                <option value="4084987">1030173 / Minerva Asset Management C/O Lawson Daughters.Com</option>
                <option value="4084133">1030175 / 4 Front</option>
                <option value="4084732">1030176 / Axiom Building Services</option>
                <option value="4084934">1030179 / Iss Facility Services .</option>
                <option value="4084021">1030185 / Cpcs Fsb Non-Techical Risk House A/C</option>
                <option value="4084877">1030189 / Gazette Media Company (Gmc - Ncj Media)</option>
                <option value="4084105">1030190 / Hansard Administration Services Limited</option>
                <option value="4084033">1030191 / Hewlett-Packard</option>
                <option value="4084328">1030192 / Interserve Fs () -Technical Services</option>
                <option value="4084045">1030194 / Lloyds Tsb Bank Plc (Peterborough)</option>
                <option value="4084340">1030195 / Maintenance Management</option>
                <option value="4084989">1030197 / Mitie Engineering Maintenance Limited</option>
                <option value="4084067">1030199 / Rothamsted Research</option>
                <option value="4084527">1030201 / Valleys Foundation</option>
                <option value="4084489">1030204 / Trustees Of The London Clinic</option>
                <option value="4084429">1030208 / Vitae Nibh Donec Industries</option>
                <option value="4084690">1030209 / Babcock Civil Infrastructure</option>
                <option value="4084772">1030212 / Capital Property Maintenance ,</option>
                <option value="4084824">1030213 / Elit Consulting (A)</option>
                <option value="4084231">1030217 / Net-A-Porter Group</option>
                <option value="4084280">1030218 / Network Rail</option>
                <option value="4084126">1030221 / United Utilities Water Plc</option>
                <option value="4084476">1030222 / Baa Business Support Center</option>
                <option value="4084639">1030224 / Open Source Enterprise</option>
                <option value="4084619">1030251 / Globe Microsystems T/As Bonitas</option>
                <option value="4085021">1030254 / Oxford University Hospitals Nhs Trust</option>
                <option value="4085036">1030255 / Protean Electric Limited</option>
                <option value="4084035">1030260 / Highlands And Islands</option>
                <option value="4084119">1030264 / Place2Be</option>
                <option value="4085003">1030394 / Ng Bailey It Services</option>
                <option value="4084589">1030397 / Bae Systems Plc</option>
                <option value="4084015">1030399 / Brammer Limited</option>
                <option value="4084501">1030401 / Caterpillar</option>
                <option value="4084465">1030403 / Milliman</option>
                <option value="4084104">1030406 / Fm Insurance Company Limited</option>
                <option value="4084724">1030409 / Aliquam Company</option>
                <option value="4084770">1030414 / Capita It Services Limited (Ts)</option>
                <option value="4084292">1030416 / Ut Industries</option>
                <option value="4084333">1030417 / Jaguar Building Services</option>
                <option value="4084230">1030418 / Mycom ()</option>
                <option value="4085045">1030420 / Rigid Containers</option>
                <option value="4085145">1030424 / Aci Worldwide (Emea)</option>
                <option value="4084364">1030425 / Coventry University</option>
                <option value="4084092">1030428 / Aliquet Magna A Inc. (A)</option>
                <option value="4084760">1030429 / Blackrock Operations (Luxembourg) S.A.R.L</option>
                <option value="4084399">1030430 / Irwin Mitchell Llp</option>
                <option value="4084668">1030432 / Peugeot Motor Company Plc</option>
                <option value="4084143">1030434 / Aliquet Magna A Inc. (B)</option>
                <option value="4084741">1030435 / Bancroft</option>
                <option value="4084577">1030436 / Digital Realty (Redhill) Sarl</option>
                <option value="4084058">1030437 / Perkin Elmer</option>
                <option value="4085083">1030438 / Tottenham Hotspur</option>
                <option value="4084128">1030439 / White Cube</option>
                <option value="4084738">1030440 / Bailey Building Services</option>
                <option value="4084617">1030441 / Countrywide Surveyors</option>
                <option value="4084950">1030444 / Kier Facilities Services</option>
                <option value="4084341">1030445 / Manx Telecom Trading</option>
                <option value="4084447">1030446 / Robert M Donaldson</option>
                <option value="4085137">1030447 / Sit Amet Corp.</option>
                <option value="4084248">1030448 / Tristique Corp.</option>
                <option value="11029802">10324 / NVELLE STE DU MOULIN LABOTTE</option>
                <option value="11030038">103489 / LYCEE PLACIDE COURTOY</option>
                <option value="11029809">103509 / CENTER PARCS RESORTS FRANCE</option>
                <option value="11029810">103510 / CEMOI CHOCOLATIER</option>
                <option value="4084277">1040017 / Logicalis Inc</option>
                <option value="4084503">1040020 / Royal Mint</option>
                <option value="4084743">1040032 / Barclays Bank Plc - Core</option>
                <option value="4085129">1040071 / Xilinx</option>
                <option value="4084448">1040077 / Total E &amp; P</option>
                <option value="4084534">1040078 / Mercury Engineering &amp; Building Services</option>
                <option value="4084484">1040085 / Magna LLLC</option>
                <option value="4084954">1040103 / Klcnlwtbr</option>
                <option value="4085132">1040108 / Covance Laboratories</option>
                <option value="4084153">1040142 / Cis</option>
                <option value="4084184">1040147 / Sit Amet Risus Ltd</option>
                <option value="4084773">1040148 / Carrs Hutchison Mill</option>
                <option value="4084065">1040162 / Robert Half International</option>
                <option value="4085057">1040163 / Telstra Limited</option>
                <option value="4084384">1040212 / West Bromwich Building Society</option>
                <option value="4084584">1040216 / University Of East London</option>
                <option value="4084398">1040217 / Irl Ireland Sales</option>
                <option value="4085002">1040218 / New Zealand Trade And Enterprise</option>
                <option value="4084618">1040233 / Dawn Meats () Limited</option>
                <option value="4084658">1040236 / Eros Proin Ultrices Foundation (B)</option>
                <option value="11030055">10403 / FINANCIERE CAUDERAN</option>
                <option value="4084788">1040308 / Comtec Enterprises</option>
                <option value="4084436">1040310 / Direct Control Systems</option>
                <option value="4084443">1040332 / Magna Ltd</option>
                <option value="4084769">1040336 / Canary Wharf Facilities Management</option>
                <option value="4085139">1040363 / Ace Ina Services .</option>
                <option value="4084700">1040370 / Aci Worldwide (Emea)</option>
                <option value="4085087">1040388 / Trinity Mirror Printing Saltire</option>
                <option value="4085020">1040390 / Orange Information Systems</option>
                <option value="4084949">1040391 / Key Facilities Management</option>
                <option value="4085008">1040430 / Norfolk And Suffolk Nhs Foundation Trust</option>
                <option value="4084938">1040431 / Jd Cooling Systems</option>
                <option value="4084960">1040432 / Leeds &amp; Bradford Int Airport</option>
                <option value="4084823">1040441 / Econet Satelite Services</option>
                <option value="4084466">1040463 / North Bristol Nhs Trust</option>
                <option value="4084627">1040464 / Proven Legal Technologies</option>
                <option value="4084661">1040465 / Ark Continuity Limited</option>
                <option value="4085058">1040482 / Tesco - Welham Green</option>
                <option value="4084869">1040484 / Eu Metus Pc (A)</option>
                <option value="4084223">1040485 / Iss Facility Services - Integrated Solutions</option>
                <option value="4084712">1040486 / Aj Walter Aviation</option>
                <option value="4084147">1040488 / British Arab Commercial Bank</option>
                <option value="4084966">1040490 / Logicalis</option>
                <option value="4084981">1040491 / Mercury Engineering</option>
                <option value="4084585">1040494 / Suspendisse Sed Dolor Corporation</option>
                <option value="4084347">1040495 / Oakmount Control Systems</option>
                <option value="4084608">1040506 / University Of Greenwich</option>
                <option value="4084768">1040516 / Cambridge City Council</option>
                <option value="4084528">1040518 / The Magna Carta School</option>
                <option value="4084640">1040519 / Roche Products Limited</option>
                <option value="4084193">1040520 / Arcu Imperdiet Industries (B)</option>
                <option value="4084157">1040521 / Eaton Electric</option>
                <option value="4084234">1040528 / Ocado Innovation Limited</option>
                <option value="4085098">1040530 / Union Bancaire Privée - Ubp Sa</option>
                <option value="4084506">1040534 / Magna A Ltd</option>
                <option value="4084965">1040539 / Ljj Contractors</option>
                <option value="4084423">1040546 / Loot</option>
                <option value="4085164">1040547 / Ultrices Institute</option>
                <option value="4084381">1040548 / Cc Engineering</option>
                <option value="4084167">1040550 / Innovation Group</option>
                <option value="4084083">1040551 / A1 Comms</option>
                <option value="4084747">1040552 / Black Box Network Services</option>
                <option value="4084930">1040554 / Iss Facility Services</option>
                <option value="4084334">1040555 / Jaguar Land Rover</option>
                <option value="4085178">1040556 / Derbyshire County Council</option>
                <option value="4084746">1040558 / Bentley Motors Limited</option>
                <option value="4084194">1040559 / Blackrock Investment Management ()</option>
                <option value="4084816">1040560 / Dynatrace</option>
                <option value="4084605">1040562 / Newport Sscl - National Offender Management</option>
                <option value="4084117">1040563 / Nova Cm</option>
                <option value="4085065">1040564 / The Parthenon Group Llc</option>
                <option value="11030147">104434 / DEDIENNE SANTE</option>
                <option value="11029905">104597 / CAPEXHO MEUNG ETAP HOTEL</option>
                <option value="4084713">1050001 / Albany Internatonal</option>
                <option value="4084810">1050004 / Domicilium Iom</option>
                <option value="4084921">1050010 / Gallaram Ltd</option>
                <option value="4084303">1050023 / Callcredit</option>
                <option value="4084478">1050073 / Orbis Investment Advisory Limited</option>
                <option value="4085102">1050079 / Accelor</option>
                <option value="4084264">1050087 / Connect Plus Services</option>
                <option value="4084449">1050088 / Dedicated Servers</option>
                <option value="4084472">1050096 / International Power</option>
                <option value="4085076">1050109 / Tilda Limited</option>
                <option value="4084422">1050114 / London &amp; South Eastern Railway T/A Southeastern</option>
                <option value="4084867">1050115 / Fidessa Plc</option>
                <option value="4084601">1050116 / Financial Insurance Grp Svs</option>
                <option value="4085127">1050117 / Wwrd</option>
                <option value="11029926">10506 / ASSOCIATION ANAIS</option>
                <option value="11030204">105125 / GCS SIH47</option>
                <option value="11030205">105354 / CIE TRANSP. STRASBOURGEOIS</option>
                <option value="11030107">10539 / LEA ET LEO GRAND EST</option>
                <option value="11030175">105456 / CAFE BURDIGALA</option>
                <option value="11029855">105830 / ETS SCHUCH ET FILS SA</option>
                <option value="11029968">105908 / HÔTEL CHARBONNEL SARL BELTRAMI</option>
                <option value="4084500">1060023 / University Of West Of England</option>
                <option value="4085069">1060052 / The Workshop Technologies Limited</option>
                <option value="4085104">1060125 / University Of Oxford</option>
                <option value="4084561">1060130 / Howorth Air Technology</option>
                <option value="4084187">1060174 / Aqr Capital Management Europe Llp</option>
                <option value="4084270">1060176 / Fujitsu Services Limited</option>
                <option value="4084550">1060219 / Tortor Corporation</option>
                <option value="4084060">1060265 / Plymouth Hospital Nhs Trust</option>
                <option value="4084495">1060272 / Blackbourne Electrical</option>
                <option value="4084757">1060273 / Blackrock Investment Management () - Madrid Branch</option>
                <option value="4084859">1060278 / Ericsson Broadcast Services</option>
                <option value="4085070">1060288 / Thinkanalytics</option>
                <option value="4085106">1060289 / Ups Power Systems</option>
                <option value="4084134">1060291 / Cyxtera</option>
                <option value="4084172">1060293 / Miele Company Limited</option>
                <option value="4084241">1060294 / Purus Institute (B)</option>
                <option value="4084262">1060295 / Cascade ()</option>
                <option value="4084970">1060296 / M &amp; E Maintenance Solutions</option>
                <option value="4084868">1060298 / Fisher Investments Europe</option>
                <option value="4085011">1060299 / Nottingham Trams Limited</option>
                <option value="11030039">106330 / MEUBLES IKEA FRANCE SAS</option>
                <option value="11030181">10635 / FOYER DE VIE</option>
                <option value="11029856">106539 / ENERGIE GRAND LITTORAL (21165)</option>
                <option value="11029993">10665 / DISTRI-PAUSE</option>
                <option value="11030094">106658 / R E S E chorus</option>
                <option value="11029969">106697 / ALLFLEX</option>
                <option value="11029906">107050 / Pasquiou Distribution SAS</option>
                <option value="11029870">10731 / CHATEAU LEOVILLE LAS CASES</option>
                <option value="11030108">10739 / LEO RESTO</option>
                <option value="11029907">107691 / LYCEE GEORGES DE LA TOUR</option>
                <option value="11029923">1079 / BRETZEL BURGARD</option>
                <option value="11030040">107900 / HOTEL IBIS GARE</option>
                <option value="4084787">1080002 / Computerpower (Consultants)</option>
                <option value="4084345">1080011 / Nestle Incorporated</option>
                <option value="4084294">1080014 / Chartreuse Consulting</option>
                <option value="4085173">1080016 / Andros</option>
                <option value="4084335">1080026 / Kellogg'S Company Of Great Britain</option>
                <option value="4084685">1080051 / Imperdiet Nec Leo Corporation</option>
                <option value="4084462">1080057 / Conemara Ltd</option>
                <option value="4084819">1080060 / Hewlett-Packard International Bank Plc.</option>
                <option value="4084655">1080061 / Fhp Engineering Services Solutions</option>
                <option value="4084777">1080064 / Ceh Lancaster</option>
                <option value="4084023">1080065 / Cpcs Giveaways House Account</option>
                <option value="4084955">1080066 / Kohlberg Kravis Roberts Co Partners Llp</option>
                <option value="4084961">1080067 / Liberata</option>
                <option value="4085099">1080068 / University Of Bristol</option>
                <option value="4084290">1080069 / Tellus Corporation</option>
                <option value="4084952">1080260 / Kings Healthcare</option>
                <option value="4085082">1080280 / Diam SAS</option>
                <option value="4084723">1080281 / Arjohuntleigh</option>
                <option value="4084790">1080282 / Continu</option>
                <option value="4084344">1080284 / Neque Sem</option>
                <option value="4084138">1080286 / Orange SA</option>
                <option value="4084727">1080287 / Association For Project Management</option>
                <option value="4084748">1080289 / Arcu Corp. (Peru)</option>
                <option value="4084213">1080296 / Gallifordtry Communications</option>
                <option value="4084943">1080298 / Joules</option>
                <option value="4085161">1080300 / Act Teleconferencing Solutions</option>
                <option value="11029804">108032 / C S M</option>
                <option value="4084828">1080333 / Enim Associates</option>
                <option value="11030095">108057 / OTT MICKAEL</option>
                <option value="11029857">108127 / DANCUP</option>
                <option value="11029908">108136 / CHATEAU DE NAMPCEL</option>
                <option value="11030206">108335 / MAXITHERMIE PERIGNY</option>
                <option value="11030041">108424 / EPM CORBIERES</option>
                <option value="11030096">108530 / INSTITUT ETIENNE LECLERCQ</option>
                <option value="11029858">108564 / FRANK SA</option>
                <option value="11029859">108844 / CENTRE DE FORMATION BERRICHONN</option>
                <option value="11029860">108848 / C H G DE SAINT DIZIER</option>
                <option value="11029970">108911 / JEAN-LOUIS SEVERINI</option>
                <option value="11029909">109052 / C C A S</option>
                <option value="11029910">109053 / AROMANCE</option>
                <option value="11030207">109109 / GESTION REGENCY</option>
                <option value="11030097">109162 / ETS ZEFAL</option>
                <option value="11029861">109311 / IMMOBILIERE MARNE SARL</option>
                <option value="11029971">109363 / CAFE AU LAIT</option>
                <option value="11030152">109426 / FROID CUISSON</option>
                <option value="11030148">109477 / DELI PLANETE</option>
                <option value="11030176">109479 / INSTITUTION STE CAMILLE</option>
                <option value="11029927">10961 / ORKAN MANAGEMENT</option>
                <option value="11030098">109652 / I N R S</option>
                <option value="11029911">109702 / CAFETERIA CRESCENDO</option>
                <option value="11030042">109704 / HOPITAL PRIVE LES FRANCISCAINE</option>
                <option value="11029862">109722 / CHAUFFAGE SERVICE GESSIEN</option>
                <option value="11030043">109748 / EBCP</option>
                <option value="11030149">109820 / ANSAMBLE SAS</option>
                <option value="11029972">109830 / HOPITAL DE SARRALBE</option>
                <option value="11029912">109844 / MAP</option>
                <option value="11029973">109961 / BRUNET ERTIA</option>
                <option value="4084310">1100000 / Cpcs Swap Factory Warranty House A/C</option>
                <option value="11029913">110198 / COADRI DIFFUSION</option>
                <option value="11029974">110250 / POLYCLINIQUE SAINT ROCH</option>
                <option value="11029914">110357 / BETHEL</option>
                <option value="11029928">11041 / CLIMA COOL</option>
                <option value="11030099">110650 / COLLEGE LES SABLONS</option>
                <option value="11029863">110745 / MAIRIE</option>
                <option value="4084150">1110028 / Cbre Managed Services Limited</option>
                <option value="4084438">1110030 / Helmond Mfg</option>
                <option value="4084306">1110062 / Chugai Pharma Europe</option>
                <option value="4084962">1110081 / Linkedin Technology</option>
                <option value="4084944">1110086 / Kedington N.I.</option>
                <option value="4084592">1110107 / Ede &amp; Ravenscroft</option>
                <option value="4084967">1110138 / London Borough Of Ealing</option>
                <option value="4084964">1110174 / Liquid Capital</option>
                <option value="4084870">1110234 / Eu Metus Pc (B)</option>
                <option value="4085009">1110277 / North Lanarkshire Council</option>
                <option value="4084254">1110279 / G.A. Nicholas</option>
                <option value="4084492">1110283 / Sit Industries (Belgium)</option>
                <option value="4084752">1110299 / Blackrock Hungary Kft</option>
                <option value="4084758">1110300 / Blackrock Investment</option>
                <option value="4084357">1110304 / Trinity Mirror Printing (Oldham)</option>
                <option value="4084349">1110312 / Philips Electronics</option>
                <option value="4084691">1110313 / Ac Tellus Inc.</option>
                <option value="4084705">1110319 / Advantica Technologies</option>
                <option value="4084518">1110322 / Homeloan Management Limited</option>
                <option value="4084042">1110324 / Interoute Vtesse</option>
                <option value="4084052">1110325 / Modern Networks</option>
                <option value="4084295">1110329 / 7Tech</option>
                <option value="4084696">1110336 / Abb Limited</option>
                <option value="4084298">1110337 / Allfunds Bank S.A.</option>
                <option value="4084301">1110338 / Briggs And Forrester .</option>
                <option value="4084346">1110339 / Nps Barnsley C/O Barnsley Mbc</option>
                <option value="4084546">1110340 / Ralph Lauren .</option>
                <option value="4084267">1110343 / Dsg Defence Support Group</option>
                <option value="4084595">1110344 / Latham &amp; Watkins Llp</option>
                <option value="4084537">1110345 / Westminster School</option>
                <option value="4084715">1110346 / Allied International Credit ()</option>
                <option value="4084538">1110347 / Balfour Beatty Utility Solutions</option>
                <option value="4084019">1110348 / Control Components Anglia</option>
                <option value="4084222">1110351 / Iss Facilites Services</option>
                <option value="4085012">1110352 / Nrg Power Systems</option>
                <option value="4084178">1110353 / Ralph Lauren</option>
                <option value="4084129">1110354 / Wiremek</option>
                <option value="4084718">1110355 / Anadarko Algeria Company Llc</option>
                <option value="11029915">111237 / COLIN PALC</option>
                <option value="11030100">111321 / EURONEGOCE</option>
                <option value="11029975">111407 / BARGUES AGRO INDUSTRIE SA</option>
                <option value="11030044">111472 / BARRESI - AXION BOUTIQUE</option>
                <option value="11030045">111556 / MONTAGNE IMMOBILIER</option>
                <option value="11030046">111669 / DESJARDINS SA</option>
                <option value="11029864">111954 / CNTFE* CHORUS</option>
                <option value="4084544">1120004 / Sitomax Institute</option>
                <option value="4084244">1120009 / Whitehaven School</option>
                <option value="4084151">1120014 / Cellcare Technologies Limited</option>
                <option value="4084312">1120017 / Datalec Power Installations Limited</option>
                <option value="4084631">1120025 / Bank Of New York Mellon</option>
                <option value="4084586">1120033 / Kodak Alaris Limited</option>
                <option value="4084982">1120034 / Mgl2 Limited</option>
                <option value="4084579">1120037 / Iel Ireland Sales</option>
                <option value="4084016">1120060 / Capital Group Companies Global</option>
                <option value="4084486">1120068 / Ng Bailey Facilities Services</option>
                <option value="4085107">1120073 / Valusys</option>
                <option value="4084971">1120082 / M W High Tech Projects</option>
                <option value="4084281">1120095 / Origin Housing Limited</option>
                <option value="4084225">1120104 / Jones Lang Lasalle Services</option>
                <option value="4084390">1120108 / Charles Hurst</option>
                <option value="4084461">1120110 / Honeywell</option>
                <option value="4084417">1120116 / Astrazeneca</option>
                <option value="4084779">1120118 / Cheltenham Ladies College</option>
                <option value="4084704">1120122 / Advantage Technologies</option>
                <option value="4084056">1120124 / Oxford And Cherwell Valley College</option>
                <option value="4084257">1120125 / Berkeley Installations</option>
                <option value="4084881">1120127 / Great Ormond Street Hospital Nhs Foundation Trust</option>
                <option value="4084453">1120134 / Dong Energy Power</option>
                <option value="4084074">1120141 / W.L. Gore &amp; Associates ()</option>
                <option value="4084739">1120142 / Baillie Gifford &amp; Co</option>
                <option value="4084749">1120143 / Alpha</option>
                <option value="4085052">1120145 / Scc Plc</option>
                <option value="4084095">1120146 / Canon</option>
                <option value="4084680">1120148 / Derwent Living</option>
                <option value="4084985">1120150 / Microgaming</option>
                <option value="4084854">1120152 / Emea Eval</option>
                <option value="4084644">1120153 / Sodales Nisi Pc</option>
                <option value="11030177">112158 / CASTORAMA FRANCE SAS CAEN2 FLE</option>
                <option value="11029916">112160 / OVELIA RESIDENCE SENIORS</option>
                <option value="16">11223 / Astocrea</option>
                <option value="11029976">112434 / PROVENCE MATERIAUX</option>
                <option value="11029977">112640 / JMD</option>
                <option value="11029812">11267 / CASTORAMA FRANCE SAS CLAYES SO</option>
                <option value="317631">11283 / Bpbesancon</option>
                <option value="4084027">1130011 / Dimension Data Network Services</option>
                <option value="4084530">1130039 / Wildern School</option>
                <option value="4084149">1130102 / Cargill Plc</option>
                <option value="4084521">1130141 / Amet SAS</option>
                <option value="4084811">1130146 / Dow Corning</option>
                <option value="4084110">1130148 / Lancashire Teaching Hospitals</option>
                <option value="4084609">1130164 / Sit Industries (United Kingdom)</option>
                <option value="4084368">1130181 / Islamic Relief</option>
                <option value="4085007">1130203 / Norco Group Limited</option>
                <option value="4084085">1130205 / Vitae Erat Llp</option>
                <option value="4085158">1130218 / Turpis Nec Corporation</option>
                <option value="4084342">1130220 / Marine Logistics</option>
                <option value="4084802">1130242 / Data Centre</option>
                <option value="4084548">1130244 / Ridge</option>
                <option value="4084385">1130247 / Metricab Power Engineering</option>
                <option value="4084297">1130253 / Active International ,</option>
                <option value="4084237">1130259 / Paysafe Processing</option>
                <option value="4084282">1130267 / Pent Valley</option>
                <option value="4084507">1130269 / A Auctor Non Institute (Ireland)</option>
                <option value="4085151">1130275 / Suspendisse Llp</option>
                <option value="4084555">1130276 / Centric Solutions ()</option>
                <option value="4085055">1130280 / Telecity</option>
                <option value="4085068">1130281 / The University Of Manchester</option>
                <option value="4084253">1130283 / Advanced Solutions Ups Limited</option>
                <option value="4084582">1130288 / Pacific Infotech</option>
                <option value="4084376">1130293 / Ibex Interiors</option>
                <option value="4084170">1130295 / Lima Networks</option>
                <option value="4084878">1130298 / General Atlantic Partners</option>
                <option value="4085093">1130299 / ltntcrum</option>
                <option value="4084293">1130300 / Vitae Dolor Donec Corp.</option>
                <option value="4084122">1130302 / Sca Recycling</option>
                <option value="4084304">1130304 / Cancer Research</option>
                <option value="4084305">1130305 / Cbre Global Investors</option>
                <option value="4084317">1130306 / E H Smith (Building Merchants)</option>
                <option value="4084604">1130308 / Network Rail Account Payable</option>
                <option value="4084504">1130309 / Richemont International</option>
                <option value="4084781">1130312 / Citibank Na</option>
                <option value="4085066">1130314 / The Police &amp; Crime Commissioner For South Wales</option>
                <option value="4085100">1130315 / University Of Cambridge</option>
                <option value="4085175">1130316 / Vitae Sodales At Institute (Russian Federation)</option>
                <option value="4084796">1130317 / Critical Power Supplies Limited</option>
                <option value="4084663">1130318 / Departmental Account</option>
                <option value="4084044">1130319 / Keysource</option>
                <option value="4084984">1130320 / Michelmores Llp</option>
                <option value="4084352">1130321 / Plusnet Plc</option>
                <option value="4085142">1130322 / Sit Corp. (Italy)</option>
                <option value="11029994">11323 / GEORGES SIMON FOURS GSF</option>
                <option value="11029871">11330 / HOPITAL LOCAL LE LUDE</option>
                <option value="11029929">11335 / HABITATION MODERNE</option>
                <option value="317657">11343 / DoA SAS</option>
                <option value="11029865">113928 / AUTOMATIC 91</option>
                <option value="317683">11403 / Confobondy</option>
                <option value="11029978">114306 / EUGENE PERMA FRANCE</option>
                <option value="11029813">11481 / Polycenter Ltd</option>
                <option value="4084695">1150001 / Ab Hotels</option>
                <option value="4084197">1150003 / Citadel Investment Group</option>
                <option value="4084034">1150004 / Highbridge Capital Management () .</option>
                <option value="4085025">1150006 / Penningtons Manches Llp</option>
                <option value="4084613">1150009 / Jca Engineering</option>
                <option value="4085005">1150011 / Nhs Northamptonshire</option>
                <option value="4085024">1150012 / Payesafe Holdings</option>
                <option value="4084698">1150019 / Acacia Fm</option>
                <option value="4084780">1150020 / Cinelab London</option>
                <option value="4084865">1150021 / F W Thorpe Plc T/A Thorlux Lighting</option>
                <option value="4084674">1150027 / Dell Corporation</option>
                <option value="4084235">1150030 / Osc Finance Office</option>
                <option value="4085034">1150031 / Procter And Gamble Technical Centres</option>
                <option value="4085054">1150033 / Technique Network Services</option>
                <option value="4084077">1150035 / William Brookes School</option>
                <option value="4084339">1150046 / Longley Park 6Th Form College</option>
                <option value="4084525">1150049 / Progress Group</option>
                <option value="4085073">1150050 / Thompson Electrical Contracting</option>
                <option value="4084575">1150052 / Dac Beachcroft Services Limited</option>
                <option value="4084588">1150055 / Alpla</option>
                <option value="4084446">1150060 / Prospero Facilities Services Limited</option>
                <option value="4085121">1150061 / Walsall Mbc</option>
                <option value="4084192">1150063 / Bew Electrical Distributors</option>
                <option value="4084708">1150065 / Agis - Non Oracle</option>
                <option value="4084120">1150077 / Power Tecnique</option>
                <option value="4084358">1150079 / Unidentified Relational Payments</option>
                <option value="4084681">1150081 / Riello Ups</option>
                <option value="4085091">1150082 / ldunsprs</option>
                <option value="4084717">1150083 / Anabas (2)</option>
                <option value="4084573">1150084 / Arjohuntleigh</option>
                <option value="4084637">1150087 / Trinity Mirror Printing (Cardiff) Limited</option>
                <option value="4085097">1150088 / Uninterruptible Power Supplies</option>
                <option value="4084243">1150089 / Wellcome Trust Centre For Human Genetics</option>
                <option value="4084256">1150090 / Benenden School (Kent) Limited</option>
                <option value="4084212">1150091 / Fujitsu Services</option>
                <option value="4084973">1150092 / Mace Macro</option>
                <option value="4084997">1150093 / Nestlé Purina Petcare</option>
                <option value="4084114">1150094 / Newsquest (Yorkshire &amp; Ne)</option>
                <option value="4084452">1150095 / Prism Power</option>
                <option value="4085039">1150096 / Queen Mary'S College</option>
                <option value="4085101">1150097 / University Of Essex</option>
                <option value="11030178">115494 / HOTEL LA CHARTREUSE SARL</option>
                <option value="11030047">115545 / HOPITAL DES ESCARTONS</option>
                <option value="4084729">1160013 / Av Browne Advertising</option>
                <option value="11029930">11694 / HC FROID</option>
                <option value="4084433">1170001 / Ameon</option>
                <option value="4085162">1170002 / Ultrices Corp.</option>
                <option value="4084284">1170004 / Powerpro</option>
                <option value="4084309">1170006 / Cpcs On-Site Factory Warranty House A/C</option>
                <option value="4084471">1170007 / Arvato Public Sector Services</option>
                <option value="4084720">1170008 / Andros</option>
                <option value="4084699">1170012 / Ace Ina Services .</option>
                <option value="4084890">1170013 / Health &amp; Social Care Information Centre</option>
                <option value="4084378">1170023 / Apc Bv Cbf Ou</option>
                <option value="4085085">1170030 / Triac Air Conditioning</option>
                <option value="4084388">1170039 / Anchorage Capital Europe Llp</option>
                <option value="4084219">1170042 / Industrial Chemicals</option>
                <option value="4084062">1170051 / Police Mutual Assurance Society</option>
                <option value="4084665">1170054 / Muller Service</option>
                <option value="4085124">1170056 / West Midlands Police Hq</option>
                <option value="4084337">1170058 / Liquid Telecommunications</option>
                <option value="4084090">1170065 / Ads Securities London Limited</option>
                <option value="4085030">1170068 / Positive Steps Oldham</option>
                <option value="4084238">1170069 / Ppd Global Limited</option>
                <option value="4085088">1170070 / f Manufacturing</option>
                <option value="4085141">1170071 / Sit Amet Ultricies Llc</option>
                <option value="4084775">1170074 / Cdi Group Plc</option>
                <option value="4084776">1170081 / Cdw Limited</option>
                <option value="4084789">1170082 / Continu</option>
                <option value="4084664">1170085 / Kce Fm</option>
                <option value="4084061">1170088 / Police Mutual Assurance Society</option>
                <option value="4084124">1170090 / Tjames Electrical</option>
                <option value="4084191">1170091 / Barclays Bank Plc - Core</option>
                <option value="4085067">1170093 / The Random House Group</option>
                <option value="4084882">1170096 / Grf Services</option>
                <option value="4084367">1170097 / Grunenthal</option>
                <option value="4085167">1170099 / Ultricies Sem Ltd</option>
                <option value="4084632">1170100 / British Dental Association</option>
                <option value="4084519">1170102 / I T Network Solution</option>
                <option value="4084645">1170103 / Richard Irvin Energy Solutions</option>
                <option value="4084289">1170105 / Suspendisse Pc</option>
                <option value="4084541">1170106 / Vitae Diam Proin Corp.</option>
                <option value="11029979">117054 / CARINGA SUD OUEST</option>
                <option value="11030102">117087 / QUEVILLY HABITAT</option>
                <option value="11030109">11710 / FOYER D'ACCUEIL MEDICALISE</option>
                <option value="11030103">117287 / NOVANDIE</option>
                <option value="11030110">11734 / PREVOST</option>
                <option value="11029917">117508 / BRISSON CHARCUTIER DU TERROIR</option>
                <option value="4084808">1190026 / D-Mec Services</option>
                <option value="4084089">1190045 / Viverra Donec Company</option>
                <option value="4084014">1190188 / Bp Oil</option>
                <option value="4084657">1190238 / Eros Est Ac Llp</option>
                <option value="4084145">1190246 / Arcu Imperdiet Industries (A)</option>
                <option value="4084156">1190249 / E Christian &amp; Co (Trading As Ec Group)</option>
                <option value="4084379">1190251 / Area Squared</option>
                <option value="4084795">1190253 / Craigalan Controls</option>
                <option value="4085115">1190257 / Vinci Construction</option>
                <option value="4084186">1190261 / Sollicitudin Commodo Industries</option>
                <option value="4085140">1190266 / Sit Amet Nulla Llc</option>
                <option value="4084563">1190275 / Ingersoll-Rand</option>
                <option value="4084175">1190277 / Olayan Europe</option>
                <option value="4084805">1190279 / Dhl Exel</option>
                <option value="4084487">1190285 / On365</option>
                <option value="4084176">1190286 / Prestige Systems</option>
                <option value="4084598">1190287 / Rs Response</option>
                <option value="4084569">1190290 / Formula One Management</option>
                <option value="4084667">1190293 / Onyx Internet</option>
                <option value="4084359">1190298 / West Kingston Project Mfg</option>
                <option value="11030156">11903 / CLINIQUE ST GERMAIN</option>
                <option value="4084610">1190309 / Ab Hotels Limited</option>
                <option value="4085044">1190312 / Reynolds &amp; Reynolds Limited</option>
                <option value="4084316">1190313 / Dimension Data Advanced Infrastructure</option>
                <option value="4085050">1190315 / S A Brain &amp; Company</option>
                <option value="4085077">1190316 / Tm Telford Dairy</option>
                <option value="4084165">1190320 / Hellermann Tyton</option>
                <option value="4085041">1190324 / Rapid Electrical Distributors</option>
                <option value="4084522">1190325 / Oki Europe</option>
                <option value="11029931">11919 / MALPLANCHE</option>
                <option value="11029980">119371 / CMC MALONGO-HORECA SERVICE</option>
                <option value="11030182">11979 / OGEM</option>
                <option value="11029995">11987 / ARAHM - I.E.M. LES IRIS</option>
                <option value="11030048">119893 / EURL OUEST DEPANNAGE</option>
                <option value="11029981">119972 / FRANCE AROME</option>
                <option value="11029982">120026 / CONSEIL GENERAL</option>
                <option value="11029814">12079 / MAISON DE RETRAITE</option>
                <option value="11029983">121341 / DUFFAU SAS</option>
                <option value="11029866">121642 / QUALIDEA GROUPE</option>
                <option value="11029867">121791 / HPDA CLINIQUE GENERALE</option>
                <option value="4084697">1220013 / Abm&nbsp;Intelligence&nbsp;</option>
                <option value="4084377">1220014 / Pearson Jones Plc</option>
                <option value="4085086">1220022 / Trinity Mirror North West And North Wales</option>
                <option value="4084799">1220025 / Crowther &amp; Shaw</option>
                <option value="4084228">1220026 / Make</option>
                <option value="4084694">1220027 / A1 Comms</option>
                <option value="4084338">1220029 / Long Clawson Dairy</option>
                <option value="4084163">1220040 / Hampton School</option>
                <option value="4085033">1220042 / Procter And Gamble Technical Centres</option>
                <option value="4085110">1220060 / Verizon - Luxembourg</option>
                <option value="4084421">1220069 / High Wycombe Property Management</option>
                <option value="4084174">1220071 / Ntt Data Services Limited</option>
                <option value="4084693">1220073 / Bagden Wood Electrical</option>
                <option value="4084070">1220075 / Saffron Walden County High School</option>
                <option value="4085056">1220076 / Telegraph Media Group</option>
                <option value="4084801">1220078 / D C Thomson &amp; Co</option>
                <option value="4084633">1220094 / Pavers</option>
                <option value="4085120">1220095 / Walkers</option>
                <option value="4085064">1220097 / The Original Bowling Company Limited</option>
                <option value="4085090">1220100 / lbhxsprs</option>
                <option value="4084803">1220102 / Dcc Energy</option>
                <option value="4084012">1220108 / Allianz Management Services</option>
                <option value="4085053">1220112 / Technical Power &amp; Maintenance</option>
                <option value="4084069">1220116 / Royal Society Of Medicine</option>
                <option value="4084600">1220119 / Barclays Capital</option>
                <option value="4085165">1220120 / Ultrices Vivamus Consulting</option>
                <option value="4085072">1220123 / Thomas Rotherham College</option>
                <option value="4085150">1220125 / Suspendisse Inc.</option>
                <option value="4085035">1220135 / Profile Analysis Limited</option>
                <option value="4084721">1220138 / Arden &amp; Gem Csu</option>
                <option value="4084511">1220139 / Consulate General Of The Republic Of Poland</option>
                <option value="4084891">1220141 / Helmond Distribution</option>
                <option value="4084995">1220150 / Navigators Underwriting Agency</option>
                <option value="4084614">1220152 / R &amp; R Ice Cream</option>
                <option value="4085078">1220155 / Together</option>
                <option value="4084010">1220156 / Aggregate Industries</option>
                <option value="4084314">1220159 / Derbyshire County Council</option>
                <option value="4085095">1220162 / Ultra Electronics Pmes</option>
                <option value="4084968">1220165 / Lorne Stewart Plc</option>
                <option value="4084994">1220166 / Mtd Montbonnot Dc</option>
                <option value="4084102">1220169 / Eu Associates</option>
                <option value="4084818">1220172 / East Hertfordshire District County Council</option>
                <option value="4084323">1220174 / Essex Services Group Plc</option>
                <option value="4084494">1220178 / Adcock Refrigeration And Air Conditioning Limited</option>
                <option value="4084024">1220180 / Cpcs On Demand Service House A/C</option>
                <option value="4085022">1220184 / Partners Group</option>
                <option value="4085043">1220186 / Rexel</option>
                <option value="4085096">1220187 / Uniflair</option>
                <option value="4084139">1220189 / Amicus Its Limited</option>
                <option value="4084025">1220190 / Ctc Aviation Group</option>
                <option value="4084972">1220191 / Mace Limited</option>
                <option value="4084485">1220192 / Mardix Critical Power Services</option>
                <option value="4085038">1220193 / Quasar Computers T/A Dp Systems.</option>
                <option value="4084871">1220234 / Fortis Commercial Finance</option>
                <option value="11030049">122140 / BBGR</option>
                <option value="11030050">122202 / PEOPLE AND BABY</option>
                <option value="11030208">122687 / HYDRAUNOMIE SAS</option>
                <option value="4085155">123 / Castlebar</option>
                <option value="4084168">1230003 / Jersey Evening Post</option>
                <option value="4084130">1230033 / Wtms</option>
                <option value="4084395">1230040 / Hillside (Shared Services)</option>
                <option value="4084896">1230080 / Honeywell Controls Systems</option>
                <option value="4084839">1230083 / Kookle</option>
                <option value="4084127">1230110 / University Of Birmingham</option>
                <option value="4084371">1230121 / Astrazeneca</option>
                <option value="4084474">1230134 / True Potential Llp</option>
                <option value="4084155">1230135 / D &amp; S Electrical Limited</option>
                <option value="4084875">1230138 / G.A. Nicholas</option>
                <option value="4085131">1230139 / York Test Laboratories</option>
                <option value="4084809">1230147 / Dmg Media</option>
                <option value="4084327">1230149 / Ifs</option>
                <option value="4085114">1230152 / Viacom Camden Lock</option>
                <option value="4084106">1230156 / Harborne Academy</option>
                <option value="4084850">1230161 / Eliteco Managed Services</option>
                <option value="4085019">1230163 / Oracle Corporation .</option>
                <option value="4085113">1230168 / Vertiv Infrastructure Limited</option>
                <option value="4084728">1230170 / At&amp;T Global Network Services () Bv - Branch</option>
                <option value="4084055">1230177 / Ocean Computer Group</option>
                <option value="4084131">1230179 / Ultrices Mauris Ipsum Institute</option>
                <option value="4084107">1230182 / Haz Projects Limited</option>
                <option value="4084467">1230188 / Tellus Eu Llp</option>
                <option value="4084400">1230189 / Lorem Ltd</option>
                <option value="4084464">1230191 / Maersk Line</option>
                <option value="4084540">1230201 / Carter Sullivan</option>
                <option value="4084182">1230202 / Winterflood Securities</option>
                <option value="11029918">123450 / FONDATION EDITH SELTZER</option>
                <option value="11030150">123521 / ESSOR FOURNIL MAINTENANCE</option>
                <option value="4084880">1240063 / Gratte Brothers</option>
                <option value="4084692">1240076 / Pr Newswire Europe</option>
                <option value="4084032">1240078 / Guoman Hotels</option>
                <option value="4084900">1240079 / Hp Enterprise Services</option>
                <option value="4084669">1240084 / Rfmd ()</option>
                <option value="4085105">1240087 / University Of Southampton</option>
                <option value="4084450">1240088 / Valero Energy</option>
                <option value="4084081">1240094 / Advantage Technology</option>
                <option value="4084679">1240095 / Powertech Installations</option>
                <option value="4084873">1240096 / Future-Tech Sci</option>
                <option value="4084963">1240105 / Linnet Technology Limited</option>
                <option value="4084242">1240107 / Wade Atkins Llp</option>
                <option value="4084473">1240111 / Practical Law Company</option>
                <option value="4084354">1240113 / Royal Devon &amp; Exeter Foundation Trust</option>
                <option value="4084361">1240114 / Sociis Natoque Associates (B)</option>
                <option value="4085154">1240115 / Digital Realty (Redhill) Sarl</option>
                <option value="4085166">1240116 / Holap</option>
                <option value="4084115">1240123 / Next Generation Data</option>
                <option value="4085047">1240127 / Robert Woodhead</option>
                <option value="4084754">1240134 / Blackrock Investment Management () - Amsterdam Branch</option>
                <option value="4084535">1240144 / Conservative Campaign Headquarters</option>
                <option value="4085109">1240151 / Velux Company</option>
                <option value="4084455">1240155 / Samba Financial Group</option>
                <option value="4084922">1240159 / Integral</option>
                <option value="4085123">1240171 / Western Electrical</option>
                <option value="4084857">1240172 / Engineering Installations (Teesside)</option>
                <option value="4084063">1240175 / Procurri Europe Cirencester</option>
                <option value="4084759">1240177 / Blackrock Investment Management () - Stockholm Branch</option>
                <option value="4084899">1240178 / Hp Enterprise Services</option>
                <option value="4084470">1240179 / Engie Fm</option>
                <option value="4084716">1240236 / Allrig Bv</option>
                <option value="4085176">1240251 / Chugai Pharma Europe</option>
                <option value="4084291">1240261 / Ab Hotels</option>
                <option value="4084240">1240273 / Santia Consulting</option>
                <option value="4084239">1240279 / Prf Privas Factory</option>
                <option value="4084437">1240286 / Ecl-Ips</option>
                <option value="4084923">1240294 / Integral</option>
                <option value="4084774">1240304 / Castlebar</option>
                <option value="4085133">1240309 / Bt Accounts Payable Centre</option>
                <option value="4084580">1240315 / Isle Of Wight Council</option>
                <option value="4084287">1240317 / Epiq Systems</option>
                <option value="4084098">1240320 / Continent 8 Technologies Plc</option>
                <option value="4085014">1240323 / Nunner Logistics</option>
                <option value="4084140">1240330 / Apsu Solutions Limited</option>
                <option value="4084490">1240332 / West Dunbartonshire Council</option>
                <option value="4084509">1240333 / Bagden Wood Building Services Lt</option>
                <option value="4084851">1240346 / Eltek Power ()</option>
                <option value="4084332">1240349 / Isg Jackson (Isgj)</option>
                <option value="4084247">1240352 / Centerprise International</option>
                <option value="4084451">1240353 / Vivamus Nisi Mauris Inc.</option>
                <option value="4084607">1240359 / Pnc Financial Services</option>
                <option value="4085071">1240360 / Purus Institute (A)</option>
                <option value="4084567">1240365 / Emea Eval</option>
                <option value="4085179">1240368 / Bt Convergent Solutions</option>
                <option value="4084676">1240369 / Cpcs On Demand Service House A/C</option>
                <option value="4084650">1240370 / La Poste</option>
                <option value="4085037">1240374 / Pvf Bernard Warehouse</option>
                <option value="4084142">1240377 / Ashland Industries Europe Gmbh</option>
                <option value="4084581">1240379 / Nsg Environmental</option>
                <option value="4084141">1240380 / Arthur Mckay &amp; Co</option>
                <option value="4084804">1240383 / Deloitte Llp</option>
                <option value="4084053">1240386 / Mrc-Medical Research Council</option>
                <option value="4084670">1240387 / The Woodland Trust</option>
                <option value="4085163">1240388 / Dmg Media</option>
                <option value="4084866">1240389 / Fes Fm</option>
                <option value="4084860">1240396 / Esc Emea Service Center</option>
                <option value="4084861">1240397 / Etiam</option>
                <option value="4084947">1240401 / Kepler Cheuvreux</option>
                <option value="4084260">1240403 / Brew &amp; Corkill</option>
                <option value="4084073">1240409 / Ups Systems Plc</option>
                <option value="4084672">1240411 / Emcor Engineering Services</option>
                <option value="4084189">1240412 / Apollo Fire Detectors</option>
                <option value="4084673">1240413 / Casthand Limited</option>
                <option value="4084646">1240416 / Hewlett Packard Caribe Bv</option>
                <option value="4084703">1240419 / Advanced Power Technology</option>
                <option value="4084259">1240420 / Blackrock Investment Mgmt (Dublin)</option>
                <option value="4084148">1240421 / Capgemini Plc</option>
                <option value="4084649">1240422 / Holborn Projects</option>
                <option value="4084161">1240424 / Frf Frome Manufacturing</option>
                <option value="4084876">1240425 / G4S Facilities Management ()</option>
                <option value="4085000">1240426 / Netherlands Distribution</option>
                <option value="4084427">1240427 / River Island</option>
                <option value="4084942">1240428 / Johnson Controls Inc</option>
                <option value="11029984">124085 / Starbuck</option>
                <option value="11030157">12475 / MAN DIESEL &amp; TURBO FRANCE SAS</option>
                <option value="4084817">1250003 / E &amp; B Group</option>
                <option value="4084353">1250094 / Rb Power Solutions Limited</option>
                <option value="4084707">1250107 / Aero Engine Controls</option>
                <option value="4085160">1250113 / Arjohuntleigh</option>
                <option value="4084300">1250114 / Box Plus Network</option>
                <option value="4084325">1250117 / Eu Limited (B)</option>
                <option value="4084999">1250124 / Nestle .</option>
                <option value="4084394">1250127 / Global Switch Limited (London One)</option>
                <option value="4085143">1250128 / Fa Premier League</option>
                <option value="4084951">1250137 / Lorem Ltd</option>
                <option value="4084214">1250140 / Giffen Group</option>
                <option value="4084274">1250151 / Ielhysprs</option>
                <option value="4084211">1250153 / Finning ()</option>
                <option value="4084543">1250160 / Morningstar Europe</option>
                <option value="4084271">1250165 / Glass'S Information Services</option>
                <option value="4084517">1250171 / Heathrow Airport Limited</option>
                <option value="4084330">1250172 / Investec Wealth &amp; Investment Limited</option>
                <option value="4084958">1250183 / Spyke</option>
                <option value="4084374">1250187 / 4 Front</option>
                <option value="4084028">1250189 / Edmundson Electrical</option>
                <option value="4084041">1250194 / Ins Sudlows Limited</option>
                <option value="4084545">1250196 / Panasonic Manufacturing</option>
                <option value="4084475">1250198 / Workspace Technology</option>
                <option value="4084269">1250202 / Echo Sourcing</option>
                <option value="4084897">1250205 / Hospira Limited</option>
                <option value="4085135">1250209 / Semper Tellus Limited</option>
                <option value="4084566">1250210 / Cbre Gws Limited</option>
                <option value="4084217">1250213 / Hcr Legal Llp</option>
                <option value="4084710">1250215 / Airedale Nhs Foundation Trust</option>
                <option value="4084324">1250217 / Eu Limited (A)</option>
                <option value="4084216">1250218 / Gsc Service Center</option>
                <option value="4084047">1250219 / Mackays &amp; Co</option>
                <option value="4085080">1250220 / Toshiba Global Commerce Solutions</option>
                <option value="4084630">1250221 / Be Modern</option>
                <option value="4084086">1250222 / Doosan Power Systems</option>
                <option value="4084648">1250223 / Hatfield Colliery Partnership Limited</option>
                <option value="11029932">12513 / CORSE MATERIEL EQUIPEMENT-CME</option>
                <option value="11030151">125185 / RODEON SARL</option>
                <option value="11029815">12540 / PAPETERIE DU RHIN</option>
                <option value="11029996">12553 / ALAHMI</option>
                <option value="4084508">1260001 / Amet Company</option>
                <option value="4084755">1260003 / Blackrock Investment Management () - Athens Branch</option>
                <option value="4084529">1260014 / Wales And West Ha</option>
                <option value="4084948">1260033 / Kettering Borough Council</option>
                <option value="4084043">1260037 / Keltbray</option>
                <option value="4085168">1260038 / Ultricies Sem Pc</option>
                <option value="4084864">1260044 / Europa Facilities Management</option>
                <option value="4084560">1260045 / Hewlett Packard Enterprise Services Limited</option>
                <option value="4085144">1260047 / Balfour Beatty Utility Solutions</option>
                <option value="4084590">1260048 / Data Centre Response</option>
                <option value="4084392">1260053 / F5 Networks</option>
                <option value="4084901">1260055 / Hsbc Bank Plc</option>
                <option value="4084387">1260059 / Am Best</option>
                <option value="4084434">1260065 / Blackrock Investment Management () Limited</option>
                <option value="4084647">1260067 / Cbre Gws Limited</option>
                <option value="4084152">1260068 / Circle It Solutions</option>
                <option value="4084026">1260069 / Data Centre Response</option>
                <option value="4084591">1260071 / Ecg Facilities Services</option>
                <option value="4084895">1260077 / Homes &amp; Communities Agency</option>
                <option value="4084993">1260082 / Msc Cruise Management Limited</option>
                <option value="4084233">1260083 / Neque Sed Sem Institute (A)</option>
                <option value="4084852">1260091 / Emcor Engineering Services</option>
                <option value="4084862">1260093 / Etiam Foundation (B)</option>
                <option value="4085015">1260094 / Oaklands College</option>
                <option value="4085092">1260096 / lfisprs</option>
                <option value="4084136">1260098 / Act Teleconferencing Solutions</option>
                <option value="4084744">1260101 / Barclays Capital</option>
                <option value="4084363">1260102 / Vivamus Ltd</option>
                <option value="4085040">1260105 / Ralph Lauren</option>
                <option value="4085134">1260108 / Babcock Flagship Limited</option>
                <option value="4084171">1260109 / Lonza Biologics Porriño S.L.</option>
                <option value="4084635">1260112 / Forum Partners Europe Llp</option>
                <option value="4084959">1260116 / Laytons Computer Services</option>
                <option value="4084329">1260118 / Interxion Carrier Hotel .</option>
                <option value="4084278">1260131 / Lw Gbs Limited</option>
                <option value="4084524">1260140 / Processflows</option>
                <option value="4084407">1260145 / Method Investment &amp; Advisory</option>
                <option value="4084432">1260153 / Adville</option>
                <option value="4084734">1260155 / Baa Business Support Center</option>
                <option value="4084654">1260159 / lun7Sprs</option>
                <option value="4084745">1260163 / Bellcom</option>
                <option value="4084202">1260164 / Devon County Council</option>
                <option value="4084621">1260167 / Leadec Limited</option>
                <option value="4085159">1260168 / Blackrock Investment Management () Limited</option>
                <option value="4084825">1260172 / Elit Consulting (B)</option>
                <option value="4084173">1260175 / North West Anglia Nhs Foundation Trust</option>
                <option value="4084638">1260176 / W F Electrical</option>
                <option value="4084116">1260180 / Nhs Appointments Commission</option>
                <option value="4084428">1260181 / Westward Housing Association</option>
                <option value="4084659">1260182 / Eros Turpis Non Pc</option>
                <option value="4084634">1260183 / Telecom Plus Plc</option>
                <option value="4084493">1260185 / Efs</option>
                <option value="4084616">1260186 / Brighton &amp; Sussex University Hospitals Nhs Trust</option>
                <option value="4084496">1260187 / Döhle Iom</option>
                <option value="4084628">1260190 / Quinn Emanuel Urquhart &amp; Sullivan Llp</option>
                <option value="4085103">1260192 / University Of Liverpool</option>
                <option value="4085153">1260193 / Csc Computer Sciences</option>
                <option value="4084091">1260194 / Aircon Refrigeration</option>
                <option value="4084137">1260195 / Allpay</option>
                <option value="4084013">1260196 / Associated Newspapers</option>
                <option value="4084735">1260197 / Babcock Civil Infrastructure</option>
                <option value="4084740">1260198 / Banco Popolare Sc</option>
                <option value="4084020">1260199 / Coral Racing</option>
                <option value="4084812">1260200 / De Corporate Education</option>
                <option value="4084902">1260201 / Hugh Baird College</option>
                <option value="4084403">1260203 / Lund Roberts (Eng)</option>
                <option value="4084410">1260204 / Newsquest Herald &amp; Times</option>
                <option value="4084652">1260205 / Powerite Contracting Limited</option>
                <option value="4085117">1260206 / Vocalink</option>
                <option value="4085152">1260207 / Consulate General Of The Republic Of Poland</option>
                <option value="4084296">1260208 / Able</option>
                <option value="4084311">1260209 / Cummins (Cbs)</option>
                <option value="4084201">1260210 / Delta Air Lines</option>
                <option value="4084313">1260211 / Department Of Infrastructure</option>
                <option value="4084460">1260213 / Guardian Industries</option>
                <option value="4084037">1260214 / Homeloan Management Limited</option>
                <option value="4084227">1260217 / Leicester Royal Infirmary</option>
                <option value="4084444">1260218 / Mrs Emea Service Center</option>
                <option value="4084413">1260219 / Retail Technology Services</option>
                <option value="4084499">1260220 / The National Gallery</option>
                <option value="4084456">1260221 / University Of Southampton</option>
                <option value="4084629">1270006 / Ramboll Limited</option>
                <option value="4084162">1270008 / Give Away</option>
                <option value="4084408">1270010 / Mitie Technical Fm</option>
                <option value="4084502">1270012 / Manstall Electrical Contractors</option>
                <option value="4085149">1270015 / Agis - Non Oracle</option>
                <option value="4084250">1270016 / Ultricies Limited</option>
                <option value="4084258">1270023 / Arcu Sed Llc</option>
                <option value="4084057">1270032 / Oxford City Council</option>
                <option value="4084761">1270049 / Auctor Gmbh</option>
                <option value="4084146">1270050 / Bradgate Facility Management</option>
                <option value="4084064">1270051 / Redstone Communications</option>
                <option value="4084179">1270053 / Regus</option>
                <option value="4085116">1270054 / Vinci Construction</option>
                <option value="4084800">1270057 / Csc Computer Sciences</option>
                <option value="4084103">1270058 / Fm Capital Partners</option>
                <option value="4084602">1270059 / Gsk Services Unlimited</option>
                <option value="4084121">1270060 / Renault F1</option>
                <option value="4084477">1270061 / Vivamus Sit Amet Llc</option>
                <option value="4084683">1270063 / Csc Computer Sciences</option>
                <option value="4085051">1270064 / Sage</option>
                <option value="4084393">1270065 / Gchq</option>
                <option value="4084702">1270066 / Adobe Systems Software Ireland Limited</option>
                <option value="4084246">1270067 / Wpa Investments</option>
                <option value="4084926">1270069 / Intu Retail Services</option>
                <option value="4084386">1270074 / Acorn</option>
                <option value="4084308">1270075 / Covance Laboratories</option>
                <option value="4085001">1270077 / Netwise Hosting</option>
                <option value="4084370">1270078 / Pacific Computers,</option>
                <option value="4084714">1270080 / Aldi Stores</option>
                <option value="4084431">1270084 / Advantica Technologies</option>
                <option value="4084719">1270086 / Anchorage Capital Europe Llp</option>
                <option value="4084996">1270088 / Nerc - Natural Environment Research Council</option>
                <option value="4084252">1270089 / Blackrock Investment Management () - Copenhagen Branch</option>
                <option value="4085148">1270091 / Derwent Living</option>
                <option value="4084414">1270092 / University Of Cambridge</option>
                <option value="11029796">127135 / CCS FERREN</option>
                <option value="11029997">12763 / DENTALFIX</option>
                <option value="11030051">127642 / DISTILLERIE DE LA GROIE</option>
                <option value="11030052">127753 / LECOURTIER LOCATION</option>
                <option value="4084135">127854 / A&amp;N Media</option>
                <option value="4084587">127857 / Abm Technical Solutions Limited</option>
                <option value="4084701">127860 / Active Data Solutions</option>
                <option value="4084709">127863 / Agoda International Pte.</option>
                <option value="4084539">127866 / Fresh Food Centres</option>
                <option value="4084481">127871 / Aqr Capital Management Europe Llp</option>
                <option value="4084722">127872 / Aristrocrat Technologies Europe</option>
                <option value="4084255">127875 / Babcock Land (Comms)</option>
                <option value="4084380">127879 / Babcock Marine (Rosyth) Limited</option>
                <option value="4084751">127888 / Blackrock Asset Mangt Deutschland Ag</option>
                <option value="4084753">127890 / Blackrock Investment Management () Limited, Vienna Branch</option>
                <option value="4084662">127893 / Boots</option>
                <option value="4084261">127898 / Bristow Helicoptor Group</option>
                <option value="4084765">127903 / Bsi Nordale</option>
                <option value="4084766">127904 / Bt Account Payable Centre</option>
                <option value="4084302">127905 / Bt Accounts Payable Centre</option>
                <option value="4084418">127907 / Bt Wholesale</option>
                <option value="4084094">127909 / Btig Limited</option>
                <option value="4084018">127914 / Centerprise International</option>
                <option value="4084263">127915 / Chivas Brothers</option>
                <option value="4084154">127917 / Citibank (Channel Islands) Limited</option>
                <option value="4084551">127918 / Kent County Council</option>
                <option value="11029868">127929 / GOIFFON SA</option>
                <option value="4084459">127948 / Corporate Express Limited</option>
                <option value="4084782">127952 / City Electrical Factors</option>
                <option value="4084096">127954 / Cluttons</option>
                <option value="4084198">127956 / Colchester Institute</option>
                <option value="4084784">127957 / Commerce Decisions</option>
                <option value="4084307">127958 / Commercial</option>
                <option value="4084785">127960 / Communications Networking</option>
                <option value="4084199">127961 / Communications Networking Services</option>
                <option value="4084677">127963 / Companies House</option>
                <option value="4084200">127964 / Compound Photonics</option>
                <option value="4084786">127965 / Computacenter</option>
                <option value="4084097">127966 / Computer Power Protection (Sales) Limited</option>
                <option value="4084479">127967 / Computer Systems Intergration</option>
                <option value="4084265">127968 / Cpcs T+M House A/C</option>
                <option value="4084797">127969 / Crown Court Property London</option>
                <option value="4084798">127970 / Crown House Technologies</option>
                <option value="4084576">127974 / Digital Luxemburg Iii Sarl</option>
                <option value="4084512">127977 / Digital Realty (Cressex) Sarl</option>
                <option value="4084268">127986 / Dundee City Council</option>
                <option value="4084814">127988 / Dus Dubai Sc</option>
                <option value="4084375">127989 / Dynamo Motor Repairs</option>
                <option value="4084606">127990 / East Midlands Airport</option>
                <option value="4084318">127991 / East Of England Ambulance Service Nhs Trust</option>
                <option value="4084513">127992 / Electricite De France (Edf)</option>
                <option value="4084687">127994 / Edc</option>
                <option value="4084552">128012 / Energy Mechanical &amp; Cooling</option>
                <option value="4084558">128014 / Engie Fm Limited</option>
                <option value="4084845">128015 / Eros Proin Ultrices Foundation (A)</option>
                <option value="4084208">128016 / Engie Fm</option>
                <option value="4084101">128020 / Emirates Nbd</option>
                <option value="4084848">128021 / Electronic Power Systems</option>
                <option value="4084322">128022 / Effekta</option>
                <option value="4084941">128023 / Johnson Control Building Efficiency</option>
                <option value="4084856">128025 / Et Ltd (B)</option>
                <option value="4084883">128026 / Gsa Capital Services</option>
                <option value="4084593">128028 / Efs</option>
                <option value="4084557">128029 / Electric Center</option>
                <option value="4084206">128030 / Efficiency It</option>
                <option value="4084846">128033 / Electric Center</option>
                <option value="4084847">128034 / Electricity North West</option>
                <option value="4084849">128037 / Element Six</option>
                <option value="4084100">128038 / Elite Electrical Contracting</option>
                <option value="4084853">128040 / Emcor</option>
                <option value="4084678">128047 / Esec Lending</option>
                <option value="4084863">128050 / E-Tec Power Management</option>
                <option value="4084515">128055 / Executive Offices</option>
                <option value="4084468">128056 / Expedia.Com</option>
                <option value="4084516">128058 / Fa Premier League</option>
                <option value="4084160">128061 / Foxtons Procurement</option>
                <option value="4084553">128063 / Friends Provident International</option>
                <option value="4084872">128067 / Frs Emea Service Center</option>
                <option value="4084578">128068 / Fujitsu (Ireland) .</option>
                <option value="4084874">128069 / G. &amp; P. Batteries Limited</option>
                <option value="4084879">128071 / Gk Switchgear</option>
                <option value="4084031">128072 / Glasgow Caledonian University</option>
                <option value="4084884">128074 / Guardian Environmental Services</option>
                <option value="4084886">128075 / Halliburton Mfg &amp; Serv</option>
                <option value="4084887">128079 / Harris Systems</option>
                <option value="4084889">128082 / Hatfield Colliery .</option>
                <option value="4084894">128086 / Hinchingbrooke Healthcare Nhs</option>
                <option value="4084898">128090 / Hotfrost Limited</option>
                <option value="4084675">128103 / Imtech</option>
                <option value="4084331">128104 / Irish Branch Of Cbre Gws Limited</option>
                <option value="4084920">128105 / Imv Invertomatic Victron</option>
                <option value="4084397">128128 / Ing Lease</option>
                <option value="4084221">128129 / Ingram Micro ()</option>
                <option value="4084275">128130 / Innospec</option>
                <option value="4084750">128131 / Blackpool Council</option>
                <option value="4084927">128136 / Irlhysprs</option>
                <option value="4084935">128140 / J J Food Service Limited</option>
                <option value="4084463">128141 / J.Rothschild Capital M Mnt</option>
                <option value="4084936">128142 / J.N. Bentley</option>
                <option value="4084937">128145 / James Paget University Hospital Nhs Foundation Trust</option>
                <option value="4084940">128149 / Johnson &amp; Johnson Medical</option>
                <option value="4084945">128153 / Kelvin Hughes</option>
                <option value="4084442">128154 / King Street (Europe) Llp</option>
                <option value="4084226">128159 / Kew Electrical Distributors</option>
                <option value="4084953">128164 / Kk Controls &amp; Equipment</option>
                <option value="4084401">128165 / Kodak</option>
                <option value="4084336">128167 / Kpmg Llp</option>
                <option value="4084111">128169 / Las Finance Department</option>
                <option value="4084957">128174 / Latchways Plc</option>
                <option value="4084969">128176 / Luton Borough Council</option>
                <option value="4084974">128184 / Mars Information Services</option>
                <option value="4084622">128186 / Mars Petcare</option>
                <option value="4084533">128188 / Media Wales</option>
                <option value="4084050">128189 / Menzies Distribution</option>
                <option value="4084404">128190 / Mbd Montbonnot Dc</option>
                <option value="4084975">128192 / Mbd Transalliance Mdc</option>
                <option value="4084520">128193 / Mbda Limited</option>
                <option value="4084049">128194 / Mcdermott Will &amp; Emery Llp</option>
                <option value="4084976">128195 / Mci Electrotechnics</option>
                <option value="4084977">128196 / Medway Nhs Foundation Trust</option>
                <option value="4084978">128197 / Memery Crystal Llp</option>
                <option value="4084979">128198 / Men Media Limited</option>
                <option value="4084405">128199 / Mencap</option>
                <option value="4084051">128200 / Mercer &amp; Hole</option>
                <option value="4084623">128202 / Nissan Motor Manufacturing ()</option>
                <option value="4084406">128205 / Merlin Housing Society</option>
                <option value="4084112">128206 / Merseytravel</option>
                <option value="4084990">128207 / Mitie Technical Facility Management</option>
                <option value="4084279">128210 / Mitie Technical Fm</option>
                <option value="4084164">128212 / Hasbro ( )</option>
                <option value="4084651">128215 / Modus Fm</option>
                <option value="4084536">128216 / Moody'S Investors Services</option>
                <option value="4084992">128220 / Ms Maintenance Soutions</option>
                <option value="4084409">128221 / Mtv Networks Europe</option>
                <option value="4084998">128224 / Nestle Limited</option>
                <option value="4084288">128225 / Sodales Nisi Magna Corporation</option>
                <option value="4084636">128228 / Netherlands Mfg</option>
                <option value="4084425">128229 / New Linx Housing Trust</option>
                <option value="4084624">128235 / Norland Managed Services</option>
                <option value="4084054">128236 / North Staffordshire Combined Healthcare</option>
                <option value="4084411">128240 / Northern Regional College</option>
                <option value="4084625">128243 / Northern Ireland Electricity</option>
                <option value="4085016">128251 / Ocs Group</option>
                <option value="4085017">128252 / Octopus Publishing Group</option>
                <option value="4084412">128254 / Omicron Solutions</option>
                <option value="4085018">128258 / Office Depot</option>
                <option value="4084118">128270 / Papworth Hospital Nhs Foundation Trust</option>
                <option value="4084059">128274 / Phillips 66</option>
                <option value="4085028">128278 / Pip Electrics</option>
                <option value="4085027">128279 / Pinnacle Regeneratio Group</option>
                <option value="4084626">128286 / Powertechnix</option>
                <option value="4084583">128291 / Powerworks Maintenance Services</option>
                <option value="4084068">128302 / Royal Devon &amp; Exeter Nhs Foundation</option>
                <option value="4084599">128310 / Tesco Stores</option>
                <option value="4084355">128312 / Tetra Pak</option>
                <option value="4085059">128320 / The Banks Group</option>
                <option value="4084285">128322 / The Book Service Limited</option>
                <option value="4084181">128329 / The Creative Partnership</option>
                <option value="4085060">128333 / The Connaught Hotel Limited</option>
                <option value="4084356">128336 / The Bunker Secure Hosting</option>
                <option value="4085061">128337 / The Full Electrical Services Co</option>
                <option value="4084123">128339 / The Funding Corporation</option>
                <option value="4085062">128346 / The Haberdashers Aske'S Boys School</option>
                <option value="4085074">128351 / Thomson Directories</option>
                <option value="4084568">128359 / Thornton &amp; Ross</option>
                <option value="4084383">128363 / Trinity Mirror Printing (Midlands) Limited</option>
                <option value="4085119">128371 / W T Parker Elec. Cont.</option>
                <option value="4084245">128375 / Williams Lea</option>
                <option value="4085126">128377 / Wolseley</option>
                <option value="4084491">128389 / Semper Tellus Corp.</option>
                <option value="4084671">128391 / Sit Amet Ante Industries</option>
                <option value="4085147">128400 / Sodales Mauris Industries</option>
                <option value="4084416">128406 / Vivamus Non Foundation</option>
                <option value="4085156">128409 / Tristique Llp</option>
                <option value="4084132">128413 / Urna Llc</option>
                <option value="4085169">128414 / Urna Nec Incorporated</option>
                <option value="4085170">128416 / Urna Nullam Pc</option>
                <option value="4084084">128418 / Urna Nunc Quis Institute</option>
                <option value="4084251">128421 / Urna Suscipit Company</option>
                <option value="4084362">128427 / Ut Company</option>
                <option value="4085172">128428 / Ut Dolor Industries</option>
                <option value="11030158">12844 / EHPAD L'EDELWEISS</option>
                <option value="4084391">128495 / Cpcs Maintenance Contracts House A/C</option>
                <option value="4084158">128496 / Edmundsons Electrical</option>
                <option value="4084209">128498 / Erf Electrical Wholesalers</option>
                <option value="11029919">128611 / DARAMIC SA</option>
                <option value="4085006">128933 / Nhs West &amp; South Yorkshire Bassetlaw Csu</option>
                <option value="4084419">128936 / Cyxtera</option>
                <option value="11030104">129036 / LILLE DISTRIBUTION AUTOMATIQUE</option>
                <option value="4084946">129872 / Kent College Pembury</option>
                <option value="4084488">129957 / Thomson Litho</option>
                <option value="4084249">129965 / Tristique Neque Venenatis Incorporated</option>
                <option value="4084286">129990 / Sit Amet Incorporated</option>
                <option value="4085171">130113 / Ut Cursus Ltd</option>
                <option value="11029869">130631 / CENTRE HOSPITALIER</option>
                <option value="4085048">131202 / Roomfoss Control Systems</option>
                <option value="4084430">131244 / Kingsley Napley Llp</option>
                <option value="4085042">131276 / Renishaw Plc</option>
                <option value="4084072">132386 / Thomson Local</option>
                <option value="11030155">13250 / CGFQ</option>
                <option value="11030153">132953 / CENTRE HOSPITALIER</option>
                <option value="4084711">133190 / Aixtron</option>
                <option value="4084207">133551 / Endemol</option>
                <option value="4084093">133561 / Boeing Training And Flight Services</option>
                <option value="4084078">133568 / Wilmslow High School</option>
                <option value="11029998">13363 / MAISON DE RETRAITE</option>
                <option value="11029992">1341 / CROIX ROUGE FRANCAISE</option>
                <option value="4084011">134194 / Alfred J Hurst Limited</option>
                <option value="4084763">134203 / British American Shared Services (Gsd)</option>
                <option value="4084855">134230 / Et Ltd (A)</option>
                <option value="4084326">134232 / Eu Limited (C)</option>
                <option value="4084888">134234 / Harvey Group Plc</option>
                <option value="4084498">134238 / Imtech Inviron</option>
                <option value="4084931">134244 / Iss Facility Services</option>
                <option value="4084939">134251 / Jj Engineering Co.</option>
                <option value="4084597">134270 / Premier Parts</option>
                <option value="4084792">134287 / Costa</option>
                <option value="4085138">134291 / Sit Amet Ltd</option>
                <option value="4084373">134301 / Urna Vivamus Limited</option>
                <option value="4084441">134306 / Joh.Berenberg, Gossler &amp; Co. Kg T/A Berenberg</option>
                <option value="4084272">134360 / Hinxton Hall Limited</option>
                <option value="4084885">134361 / Halfords</option>
                <option value="4084762">134432 / Bristol International Airport</option>
                <option value="11029784">134492 / IMS - INGENIERIE MEDICALE &amp; SERVICES</option>
                <option value="4084382">134584 / Emtec Buildings Services</option>
                <option value="11029798">13467 / MAIRIE</option>
                <option value="11029799">13468 / LIEBHERR FRANCE</option>
                <option value="4084350">134729 / Phoenix Electrical Company</option>
                <option value="4084523">134734 / Phusion Im Ptd</option>
                <option value="4084778">134870 / Central Group</option>
                <option value="11029785">134871 / ASSOCIATION BOIS L ABESSE</option>
                <option value="11029985">136354 / ETS PIERRE ROLLAND</option>
                <option value="11029986">136381 / LA LOUISIANE SA</option>
                <option value="11030053">137071 / COLLEGE JEAN MERMOZ</option>
                <option value="4084603">137117 / Mars Chocolate</option>
                <option value="4085075">137119 / Thomson Reuters (Professional)</option>
                <option value="4084756">137638 / Blackrock Investment Management () - German Branch, Frankfurt Am Main
                </option>
                <option value="11030054">13774 / NEW BABE</option>
                <option value="11029872">13833 / FEV FRANCE</option>
                <option value="11029783">138375 / HOPITAL LOCAL</option>
                <option value="11029987">138911 / MISSENARD CLIMATIQUE</option>
                <option value="4085049">138960 / Royal College Of Physicians</option>
                <option value="4085089">139489 / lbasprs</option>
                <option value="4085013">139645 / Numatic International</option>
                <option value="4084426">139900 / Northamptonshire County Council</option>
                <option value="11030154">139933 / LA BRIGADE CULIN'AIR</option>
                <option value="4084562">139967 / Infosys Limited</option>
                <option value="4084220">139970 / Industrial Energy Services</option>
                <option value="4084929">140532 / Iss Facilities Services</option>
                <option value="11029988">140592 / CRECHES DE FRANCE</option>
                <option value="4084365">141104 / Eaton Electric</option>
                <option value="4084195">141339 / Blackrock Investment Mgmt () - Paris Branch</option>
                <option value="4084458">141341 / Blackrock Investment Mgmt () - Munich Branch</option>
                <option value="11029853">14230 / KLEIN WANNER</option>
                <option value="4084071">142317 / Sam Investment Holdings</option>
                <option value="4084571">142348 / Bostik</option>
                <option value="11029933">14249 / PRO CLIM ENERGIES</option>
                <option value="4084266">142935 / Doosan Power Systems</option>
                <option value="11029990">143471 / IDEX ENERGIES</option>
                <option value="11029921">144011 / DOLIS SA</option>
                <option value="4084203">144075 / Dst Output Limited</option>
                <option value="4084556">144441 / Computerland</option>
                <option value="11030179">144655 / DECINES DISTRIBUTION AUTOMATIQ</option>
                <option value="4084612">144815 / Imi Kynoch</option>
                <option value="11030180">144972 / OLIVIER GIRARD</option>
                <option value="4084351">145043 / Platinum Facilities &amp; Maint Serv</option>
                <option value="4084726">145123 / Artisan Partners Llp</option>
                <option value="4084082">145396 / Turpis In Incorporated</option>
                <option value="11029873">14549 / G3 CONCEPTS SAS</option>
                <option value="4084783">145661 / Clifton Packaging Group</option>
                <option value="4084991">145918 / Mj Ferguson Limited</option>
                <option value="4085130">145943 / Xma</option>
                <option value="4084764">146125 / Brittany Ferries</option>
                <option value="11029989">146137 / LES JARDINS DU PERRAY</option>
                <option value="4084389">146381 / Carpet Right Plc</option>
                <option value="4084276">146700 / J Barbour &amp; Sons</option>
                <option value="11029800">14676 / DOMITYS LA PLAGE DE NACRE</option>
                <option value="11029801">14677 / CH AIN VAL DE SAONE</option>
                <option value="4084454">146840 / Lv Tec Limited</option>
                <option value="4084570">146865 / World Flower</option>
                <option value="4084980">147030 / Merck Serono Limited</option>
                <option value="4084684">147155 / Et Industries (Russian Federation)</option>
                <option value="4084526">147205 / Saint Gobain Glass - G08</option>
                <option value="4084903">147380 / Hydratight</option>
                <option value="4085157">147485 / Tristique Pellentesque Tellus Industries</option>
                <option value="4085063">148045 / The Highland Council</option>
                <option value="11029922">148473 / FROMAGERIE DE LA DROME</option>
                <option value="11029787">149014 / CENTRE HOSPITALIER DE SECTEUR</option>
                <option value="11030111">14994 / PECHERIES OCCITANES SAS</option>
                <option value="11030112">15066 / NEPHROCARE MAUBEUGE</option>
                <option value="11030056">15099 / GERAUDEL SAS</option>
                <option value="11029874">15234 / CAFE +</option>
                <option value="11029904">15379 / AZUR DENTELEC</option>
                <option value="11029875">15380 / B3C</option>
                <option value="11029851">15473 / EHPAD GLORIANDE</option>
                <option value="11029876">15623 / EURL JVCF</option>
                <option value="11029816">15752 / LABO GERS</option>
                <option value="11030113">15754 / FROMAGERIE LA HAUTE COMBE</option>
                <option value="11029934">15756 / CENTRE BELLISSEN</option>
                <option value="11029999">15760 / ALPHADIS</option>
                <option value="11030159">15761 / CHATEAU MIRAVAL SA</option>
                <option value="11029935">15856 / ETS TEMPERE</option>
                <option value="11030093">15960 / CLINIQUE FONTVERT</option>
                <option value="11030057">15992 / CELSIO</option>
                <option value="11030114">16009 / I M T C</option>
                <option value="11029936">16015 / MJDA</option>
                <option value="11029877">16027 / FOUCHER DENTAIRE</option>
                <option value="11029937">16102 / ETS DUPRE</option>
                <option value="11029938">16109 / BSF COFFEE GROUP</option>
                <option value="11030115">16567 / HOTEL IBIS ROUEN SUD PARC EXPO</option>
                <option value="11029878">16581 / HOTEL DE L'EMBARCADERE</option>
                <option value="11029879">16756 / IDEX ENERGIES</option>
                <option value="11029786">170423 / CENTRE HOSPITALIER ST JUNIEN*</option>
                <option value="11030058">17486 / ETS JOSE DALMASSO</option>
                <option value="11030116">18623 / BASTIDE SAINT ANTOINE</option>
                <option value="11030059">18630 / MAISON DE RETRAITE</option>
                <option value="11030117">18701 / DELFINGEN FR ANTEUIL</option>
                <option value="11030060">18713 / AQUATECH SAS</option>
                <option value="11030061">1914181 / A FEUGIAT LIMITED</option>
                <option value="11029817">20739 / C P A M</option>
                <option value="11030062">21411 / BLISKO</option>
                <option value="11030118">21558 / COLLEGE VALERI</option>
                <option value="11030068">23058 / ENTREPRISE MICHEL GAIDDON</option>
                <option value="11029826">23557 / CROC LA PAUSE</option>
                <option value="11030190">23958 / OVENTI</option>
                <option value="11030069">23959 / FIVES MAINTENANCE</option>
                <option value="11030166">23960 / EHPAD RESIDENCE LE CLOS FLEURI</option>
                <option value="11030191">23961 / CREPERIE S&amp;B</option>
                <option value="11030192">24019 / CORA</option>
                <option value="11029944">24110 / LES HESPERIDES</option>
                <option value="11030126">24314 / BALL PACKAGING EUROPE FRANCE S</option>
                <option value="11030011">24414 / MC DONALDS-SARL</option>
                <option value="11030070">24464 / HYDROLINE</option>
                <option value="11030127">24468 / COURS FENELON</option>
                <option value="11030012">24521 / L ANCRE DE CHINE</option>
                <option value="11030071">24523 / COLLEGE JEAN MOULIN</option>
                <option value="11029827">24542 / Austin Ltd</option>
                <option value="11029828">24879 / CASTORAMA FRANCE CORMEILLE EN</option>
                <option value="11029829">24992 / LYCEE AGRICOLE TOUSCAYRAT</option>
                <option value="11029945">25361 / Salomon SAS</option>
                <option value="11030013">26398 / LONGWY MATERIAUX</option>
                <option value="11030193">27052 / CASTORAMA FRANCE SAS BEZIERS 2</option>
                <option value="11030194">27237 / LABORATOIRE CHAUVIN - BAUSCH+L</option>
                <option value="11029805">2800 / CHOUCROUTERIE RIEFFEL</option>
                <option value="11030003">2801 / AQUARI'HAM CC DE L'EST DE LA S</option>
                <option value="11030014">28155 / BABOLAT L'INDUSTRIE</option>
                <option value="11029794">28227 / MAIRIE DE MOIRANS</option>
                <option value="11029881">2823 / COPROGEST</option>
                <option value="11030004">2836 / FERRARI</option>
                <option value="11029940">2841 / LECAILLE DISTRIBUTION</option>
                <option value="11030005">2842 / AUTOMATIC NORD SERVICE</option>
                <option value="11030160">2844 / ASHLAND SPECIALITIES FRANCE</option>
                <option value="11030161">2863 / CAFE LAUNAY</option>
                <option value="11030065">2865 / HOWA TRAMICO</option>
                <option value="11030006">2886 / G T H</option>
                <option value="11030183">2888 / COMMUNE DE VOLSTROFF</option>
                <option value="11029900">2905 / CLINIQUE CHIRURG. PORTE OCEANE</option>
                <option value="11030184">2909 / CLINEA</option>
                <option value="11029882">2911 / DAC</option>
                <option value="11030119">2912 / CENTRE HOSPITALIER</option>
                <option value="11030185">2914 / PROSAIN</option>
                <option value="11030007">2916 / AVIA LA RESERVE</option>
                <option value="11030186">2918 / OLEANO</option>
                <option value="11030162">2919 / MAS- A.D.I.J</option>
                <option value="11030163">2923 / CASTORAMA FRANCE SAS NIORT</option>
                <option value="11030120">2927 / BNP PARIBAS SA</option>
                <option value="11029883">2930 / AXIMA CONCEPT</option>
                <option value="11029822">2936 / ALIMENTAR</option>
                <option value="11030164">2941 / ASTRABAN SAS</option>
                <option value="11029885">29469 / MERIMANN- MC DONALD'S</option>
                <option value="11030187">2961 / ENGIE SOLUTIONS CSP LYON FOURN</option>
                <option value="11030165">2962 / COM. COMMUNES SAONE BEAUJOLAIS</option>
                <option value="11030121">2978 / CABIA</option>
                <option value="11030122">2986 / FOYER ACCUEIL MEDICALISE</option>
                <option value="11030188">2996 / COURTOIS SARL</option>
                <option value="317645">300895 / Mabel</option>
                <option value="317671">300955 / Jeacri</option>
                <option value="317697">301015 / Magliber</option>
                <option value="11030066">3017 / Salomon services</option>
                <option value="11030008">3022 / DERICHEBOURG ENVIRONNEMENT</option>
                <option value="11030067">3033 / CASTORAMA FRANCE PORTET SUR GA</option>
                <option value="11030123">3067 / R.V.A</option>
                <option value="11030167">30703 / CENTRE D EDUCATION MOTRICE</option>
                <option value="11029924">30898 / CERCLE SAINT BARTHELEMY</option>
                <option value="11030168">30902 / ARKINE</option>
                <option value="11029823">3098 / ENTREPRISE VAUDAIN</option>
                <option value="11029806">3100 / DECAYZAC FOIES GRAS</option>
                <option value="11029884">3101 / Hudson SAS</option>
                <option value="11029941">3106 / MCP SERVICES</option>
                <option value="11029942">3116 / REXEL SAS</option>
                <option value="2">312864 / Realmad EURL</option>
                <option value="317649">312924 / Opcaim</option>
                <option value="317675">312984 / Maniber</option>
                <option value="317701">313044 / Sotar</option>
                <option value="11029943">3149 / Accelior SAS</option>
                <option value="11030189">3151 / FESTINS DE FRANCE</option>
                <option value="11030128">31658 / PENSIONNAT DU SACRE COEUR</option>
                <option value="11030009">3181 / ALEOS</option>
                <option value="11030124">3197 / BAISEN SAS</option>
                <option value="11030129">32201 / FRUITE SA</option>
                <option value="11030130">32285 / CLINIQUE DES TROIS FRONTIERES</option>
                <option value="11030072">32332 / ENGIE COFELY</option>
                <option value="11029824">3265 / IME</option>
                <option value="11030010">3285 / AOSTE SNC</option>
                <option value="11029825">3330 / CEGELEC TERTIAIRE IDF</option>
                <option value="18">341111 / Octimum centre</option>
                <option value="317647">341171 / Roualet</option>
                <option value="317673">341231 / Vivarte</option>
                <option value="317699">341291 / Hopital Necplus</option>
                <option value="15">349823 / Data Print</option>
                <option value="317636">349883 / Universal printing</option>
                <option value="317662">349943 / Molfirma</option>
                <option value="317688">350003 / Germa</option>
                <option value="3">35465 / Sotarel SA</option>
                <option value="317652">35525 / Vallesne</option>
                <option value="14">356435 / Cedelec Paris</option>
                <option value="317704">35645 / Smurfit</option>
                <option value="3777557">356487 / Aryola</option>
                <option value="317635">356495 / Electro SAS</option>
                <option value="317661">356555 / Rhodia</option>
                <option value="317687">356615 / Redia</option>
                <option value="9">357356 / Lloyds Tsb Bank Plc</option>
                <option value="317644">357416 / Syndobesan</option>
                <option value="317670">357476 / Servicim</option>
                <option value="317696">357536 / Matjac</option>
                <option value="7">359988 / Kentex Services</option>
                <option value="317643">360048 / Cadichel</option>
                <option value="317669">360108 / Dsmstlouis</option>
                <option value="317695">360168 / Booble Ltd</option>
                <option value="317653">365803 / Denir</option>
                <option value="317679">365863 / Basebrigno</option>
                <option value="317705">365923 / Giberto</option>
                <option value="11030125">3696 / IDEX ENERGIES</option>
                <option value="11030131">37181 / CEGELEC MISSENARD</option>
                <option value="10">383487 / Dupond SA</option>
                <option value="317639">383547 / Sedecrem</option>
                <option value="317665">383607 / Nexta</option>
                <option value="317691">383667 / Frero</option>
                <option value="11029886">38728 / COLLEGE AMIRAL DENIS DECRES</option>
                <option value="6">391235 / Thomason</option>
                <option value="317654">391295 / Sobaf</option>
                <option value="317680">391355 / Anatoly SA</option>
                <option value="317706">391415 / Bledis</option>
                <option value="11030132">39280 / DELIOT PRO OCCASIONS</option>
                <option value="11030195">39578 / BOURGEAT</option>
                <option value="11029792">39673 / HOTEL L ECRIN</option>
                <option value="11029834">39816 / GRAPHIC LABO</option>
                <option value="11030077">39849 / AFAEI FOYER DE CLAIRVIL</option>
                <option value="11030018">40232 / C H R DE BORDEAUX* CHORUS</option>
                <option value="11029949">40920 / EUROSTYLE SYSTEMS MOLINGES</option>
                <option value="11029950">41158 / Ets Clement</option>
                <option value="11030019">41543 / ESPACE D.A.</option>
                <option value="11029920">41678 / FMD</option>
                <option value="11029903">41757 / PAVILLON DES LETTRES</option>
                <option value="11030133">4185 / CAPRON PODOLOGIE</option>
                <option value="11030196">4260 / CAFE DISTRIB</option>
                <option value="11030135">42647 / DESRUES SAS</option>
                <option value="11029835">43089 / COLLEGE LA ROCHOTTE</option>
                <option value="11029951">43197 / MESTRE</option>
                <option value="11029836">43559 / HELGEDIS</option>
                <option value="11029952">43998 / CAMPANILLE HOTEL RESTAURANT</option>
                <option value="11030170">44132 / CASTORAMA FRANCE SAS TOURS</option>
                <option value="11030136">44155 / LEGRAND FRANCE LORRAINE</option>
                <option value="4084656">4421 / Verizon Limited</option>
                <option value="11029837">44247 / KEOLIS BORDEAUX METROPOLE</option>
                <option value="11029838">44474 / AGSM</option>
                <option value="11029830">4448 / Salomon Trek</option>
                <option value="11">468355 / Goelo</option>
                <option value="11029831">4684 / INRAE SBFC SRT 18007003901027</option>
                <option value="317641">468415 / Urgove</option>
                <option value="317667">468475 / Landis</option>
                <option value="317693">468535 / Vikase</option>
                <option value="11029953">47517 / JOEL DRAVET</option>
                <option value="11029954">48248 / AIR LIQUIDE GLOBAL E&amp;C SOLUTIO</option>
                <option value="11030171">48256 / ALEX ELEC</option>
                <option value="11030197">4839 / MAISON DE RETRAITE</option>
                <option value="11030079">48474 / ALJEPA</option>
                <option value="11029887">48663 / PRONUIT IBIS BUDGET</option>
                <option value="11030137">48864 / CLINIQUE TRENEL</option>
                <option value="11030073">4901 / IEM PEP 06</option>
                <option value="11030074">4972 / HOTEL KYRIAD</option>
                <option value="11030091">5161 / GALLOUX ENTREPRISE</option>
                <option value="11029832">5326 / ENT CHARMILLON</option>
                <option value="11029946">5327 / BALISTO SAS</option>
                <option value="4">534875 / Astrabal SAS</option>
                <option value="317632">534935 / Sudeco</option>
                <option value="317658">534995 / Casinne SA</option>
                <option value="317684">535055 / Octva</option>
                <option value="11029947">5420 / CCGPF</option>
                <option value="26">543764 / Volwaster GmbH</option>
                <option value="317655">543824 / Regain</option>
                <option value="317681">543884 / Soleyade</option>
                <option value="317707">543944 / Hopital Roa</option>
                <option value="11029955">54958 / EMA DIFFUSION</option>
                <option value="11029833">5541 / OPALINES AIX EN PROVENCE</option>
                <option value="11030015">5567 / PLANETE DA</option>
                <option value="11030101">55918 / DA SERVICES</option>
                <option value="11030020">56077 / CHARBONNEAUX ET BRABANT S A</option>
                <option value="11030016">5609 / APRODIA SAS</option>
                <option value="11030021">56416 / FROID 14</option>
                <option value="11029839">56710 / MAILLY MAINTENANCE</option>
                <option value="11029840">56734 / GROUPE LJ</option>
                <option value="11029888">56780 / EURL BENOIT SAMSON</option>
                <option value="13">568934 / Cedelec Marseille</option>
                <option value="317634">568994 / Peugeot</option>
                <option value="317660">569054 / Meti</option>
                <option value="317686">569114 / Energilec</option>
                <option value="1233153">56922 / Mapworld</option>
                <option value="11030075">5753 / MAIRIE DE BOUCHEMAINE</option>
                <option value="11030017">5760 / MAHLE BEHR FRANCE ROUFFACH</option>
                <option value="11030134">5808 / G C S SARL</option>
                <option value="11029841">58538 / EURL CROUZET</option>
                <option value="11029795">58592 / IDEAL'EXPRESSO</option>
                <option value="11029956">58947 / CORA DUNKERQUE</option>
                <option value="11029957">58963 / ECODIS</option>
                <option value="3476752">596487 / Everdata</option>
                <option value="11030078">59683 / CENTRE SAINT THYS</option>
                <option value="11029842">59806 / ASSOCIATION LE MARTOURET</option>
                <option value="4084813">600334 / Durata</option>
                <option value="4084080">601086 / Sit Amet Llp</option>
                <option value="11030198">6011 / BWT NORD OUEST</option>
                <option value="4085136">601278 / Sit Amet Consectetuer Llc</option>
                <option value="4084183">602056 / Semper Ltd</option>
                <option value="4084559">602314 / Geant Limited</option>
                <option value="4084210">602352 / Eric Wright Civil Engineering</option>
                <option value="4084159">602456 / Epiq Systems</option>
                <option value="4084858">602500 / Equinix</option>
                <option value="4084547">602572 / Resilient Power Solutions</option>
                <option value="11030169">6036 / CASTORAMA FRANCE SAS MELUN</option>
                <option value="11030080">60551 / BOLLIG &amp; KEMPER FRANCE</option>
                <option value="11030022">60914 / AKG FRANCE</option>
                <option value="11030023">61773 / E I T F</option>
                <option value="11029958">62673 / LIOT</option>
                <option value="11029948">6289 / HOTEL VILLA K</option>
                <option value="11030081">63353 / CHAUFFAGE SERVICES SARL</option>
                <option value="24">63432 / Austar East</option>
                <option value="11030199">6344 / ALCATEL SUBMARINE NETWORKS</option>
                <option value="317640">63484 / Elec Octop</option>
                <option value="317633">63492 / Allchem</option>
                <option value="317666">63544 / Bpquetigny</option>
                <option value="317659">63552 / Netlox</option>
                <option value="317786">6355589 / Aldoubert SA</option>
                <option value="11030024">63595 / CASTORAMA FRANCE</option>
                <option value="317692">63604 / Prefetpoli</option>
                <option value="11030138">63757 / AMADA EUROPE SA</option>
                <option value="11030200">63774 / BGS ROULEAUX SAUER FRANCE</option>
                <option value="11030139">63834 / COGECLIM INDUSTRIE</option>
                <option value="11029889">64233 / BADET SAS</option>
                <option value="11030076">6435 / EMMAUS</option>
                <option value="11030025">6465 / PAUS'DELICES</option>
                <option value="11029843">6497 / HOTEL AZUR</option>
                <option value="22">654245 / Ashor</option>
                <option value="317656">654365 / Croivy</option>
                <option value="317682">654425 / Livingston</option>
                <option value="1233154">65596 / Monreal distribution</option>
                <option value="11030172">65883 / ELECTRO SAS</option>
                <option value="11029793">6638 / COMAFRANC</option>
                <option value="11030201">6685 / CHALABI</option>
                <option value="11030026">6758 / HERVE THERMIQUE</option>
                <option value="11029890">6952 / GYSS GIUBILEI</option>
                <option value="29">697445 / University Of Swansea</option>
                <option value="317650">697505 / Rolotlemasson</option>
                <option value="317676">697565 / Keryann</option>
                <option value="317702">697625 / Lopam</option>
                <option value="11029959">6999 / MEUNIER G.C.</option>
                <option value="11030027">7455 / GCS CENTRE DE TRAITEMENT TEXTILE HOSPITALIER</option>
                <option value="11030140">7477 / MATOQUE SARL</option>
                <option value="23">74943 / Dennison</option>
                <option value="317638">75003 / Sofiparparay</option>
                <option value="317664">75063 / AuchanLA</option>
                <option value="317690">75123 / Sodifro</option>
                <option value="30">78566 / Hinckley &amp; Rugby B</option>
                <option value="317642">78626 / Geantvillenave</option>
                <option value="317668">78686 / Ancopi</option>
                <option value="317694">78746 / Shaingai Ltd</option>
                <option value="11029967">8222 / M.F.C.B.</option>
                <option value="17">837344 / Octimum</option>
                <option value="317646">837404 / Elarto</option>
                <option value="317698">837524 / Egetra</option>
                <option value="11030082">8440 / BIC ECRITURE 2000</option>
                <option value="11030141">8441 / LANSARD FLUIDES SARL</option>
                <option value="31">844333 / Datang Telecom</option>
                <option value="317637">844393 / Disinfo</option>
                <option value="317663">844453 / Afulmerignac</option>
                <option value="317689">844513 / Sovicar</option>
                <option value="25">864353 / Commerce Decisions</option>
                <option value="317651">864413 / Langles</option>
                <option value="317677">864473 / Sogepa</option>
                <option value="317703">864533 / Diasorin</option>
                <option value="11030202">86902 / DA EXPRESS</option>
                <option value="11029891">8798 / GAEC SCHMITT</option>
                <option value="11030028">8981 / CASTORAMA FRANCE SAS CHALON SA</option>
                <option value="11030083">9227 - Beton / GARNIER SA</option>
                <option value="11030029">9227 - Carrelage / GARNIER SA</option>
                <option value="11029811">9227 - Negoce / GARNIER SA</option>
                <option value="11030085">93010 / AIZENAY RESTAURATION</option>
                <option value="11030030">93099 / EHPAD LES OLIVIERS DE THALES</option>
                <option value="11029892">93869 / COLAV</option>
                <option value="11030031">94045 / FONCIA OBERNAI</option>
                <option value="11030142">94500 / MONTI WILLIAM</option>
                <option value="11030032">94617 / ETS RENARD</option>
                <option value="11029961">94636 / CENTRE PHARMA</option>
                <option value="11029960">9506 / HOTEL LE MAS CANDILLE</option>
                <option value="11030033">95162 / LYCEE LABROISE</option>
                <option value="32">953422 / Quebec Ltd</option>
                <option value="317648">953482 / AVL</option>
                <option value="317674">953542 / Condset</option>
                <option value="317700">953602 / Cetim</option>
                <option value="2239979">9536554 / Nodle SAS</option>
                <option value="11030084">9553 / CLINIQUE LE CASTELET</option>
                <option value="11029893">95703 / GEI ENERGIES SAS</option>
                <option value="11029844">96260 / CTL PACKAGING SAS</option>
                <option value="11029962">9657 / ELIPAS</option>
                <option value="11029845">96757 / ETS VONTHRON</option>
                <option value="11029895">96964 / HERVE THERMIQUE</option>
                <option value="11030173">9704 / IDEX ENERGIES</option>
                <option value="11030092">97256 / CIDEME</option>
                <option value="11029963">97367 / MAIRIE</option>
                <option value="11030034">97372 / HUTCHINSON POLYMERS</option>
                <option value="11029846">97379 / MIELE SAS</option>
                <option value="11029847">97401 / CTRE HOSPIT. CENTRE BRETAGNE</option>
                <option value="11030087">97504 / HOTEL RESTAURANT</option>
                <option value="11030088">97566 / RADISSON SAS</option>
                <option value="11030035">97864 / DEPAN'FOUR</option>
                <option value="11030203">9788 / MOUNIS DENIS</option>
                <option value="11030144">97908 / EURL CHATEAU CASTIGNO</option>
                <option value="11029896">97910 / MAISON DE RETRAITE</option>
                <option value="11030089">98031 / KUHN HUARD</option>
                <option value="11029848">98032 / ASSOCIATION DES PELERINS</option>
                <option value="11029964">98081 / MAILLARD</option>
                <option value="11029897">98091 / MHCS</option>
                <option value="11029965">98427 / ENGIE HOME SERVICES</option>
                <option value="11029966">98464 / MAIRIE DE JONQUIERES</option>
                <option value="11029894">9857 / QUARON</option>
                <option value="11030145">98712 / LABO. BOUCHARA RECORDATI</option>
                <option value="11030143">9892 / PONTIVY FROID</option>
                <option value="11030036">98952 / LE TEMPS D'UNE PAUSE</option>
                <option value="11029849">99072 / GFM PRODUCTION</option>
                <option value="11030086">9910 / L'ODYSSEE</option>
                <option value="11029898">99151 / ADIMC 74</option>
                <option value="11030146">99195 / PARIS SAINT LAMBERT</option>
                <option value="11029899">99670 / AZUR PRO CUISINE</option>
                <option value="11029850">99974 / JUS DE FRUIT D ALSACE JFA</option>
                <option value="11030229">prospect / ABCD</option>
  
              </select>
            </div>
          </form>
  
        </div><!--5-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname6">Due date * :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname6">
              <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
            </div>
          </form>
  
        </div><!--6-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname7"> PO NO :</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname7">
            </div>
          </form>
  
        </div><!--7-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname8"> Payment date :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname8">
              <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
            </div>
          </form>
  
        </div><!--8-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname9"> File NO :</label>
  
            </div>
            <div class="col-7">
  
              <input type="text" class="form-control" id="inputname9">
  
            </div>
  
          </form>
  
        </div><!--9-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname10">Currency * :</label>
  
            </div>
            <div class="col-7 ">
              <select class="form-select" id="inputname10">
                <option value="" selected disabled>EUR € </option>
                <option value="">EUR €</option>
                <option value="">AUD $A</option>
                <option value="">BRL</option>
                <option value="">CAD $C</option>
                <option value="">CHF</option>
                <option value="">GBP £</option>
                <option value="">USD $</option>
                <option value="">ZAR</option>
                <option value="">+ New currency</option>
              </select>
            </div>
          </form>
  
        </div><!--10-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname11">
                ERP item type :</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname11">
            </div>
          </form>
  
        </div><!--11-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname12"> Initial amount exc. Tax :</label>
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname12">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </form>
  
        </div><!--12-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname13">Business case :</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname13">
            </div>
          </form>
  
        </div><!--13-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname14"> Initial amount inc. Tax * :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname14">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </form>
  
        </div><!--14-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname15">
                Sales manager :</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname15">
            </div>
          </form>
  
        </div><!--15-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname16">Remaining amount exc. Tax :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname16">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </form>
  
        </div><!--16-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname17"> Sales adrninistative :</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname17">
            </div>
          </form>
  
        </div><!--17-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname18">Remaining amount inc. Tax :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname18">
              <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
            </div>
          </form>
  
        </div><!--18-->
  
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname27">Customer custom field #1:</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname27">
            </div>
          </form>
  
        </div><!--27-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname17"></label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control visually-hidden" id="inputname17">
            </div>
          </form>
  
        </div><!--17-->
        <div class="col-md-6 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname30">Customer custom field #2:</label>
  
            </div>
            <div class="col-7 ">
              <input type="text" class="form-control" id="inputname30">
            </div>
          </form>
          <div class="col-md-6 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname17"></label>
  
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control visually-hidden" id="inputname17">
              </div>
            </form>
  
          </div><!--17-->
  
  
        </div><!--30-->
        <div class="mt-4 d-flex justify-content-center gap-3">
          <p class="text-black-50">Creation date in MY DSO MANAGER : 2020-03-02 11:00:15 (G.M.T. +1)</p>
          <p class="text-black-50">•    Modification date : 2020-03-11 16:59:24 (G.M.T. +1)</p>
        </div>
        <div class="d-flex justify-content-center gap-3 mb-4">
          <div class="btn btn-outline-success"><i class="fa-solid fa-check"></i> Clear this transaction</div>
          <div class="btn btn-outline-success">Ignore this transaction in the collection</div>
        </div>
      </div><!--row-->
      <div class="row p-4 m-0">
        <div class="col-1"></div>
        <div class="col-lg-4 col-sm-6">
          <div class="m-1 w-100 btn btn-outline-primary statusButton" onclick="statusFun()">
            <i class="fa-solid fa-check"></i> Status history and Comments
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="m-1 w-100 btn btn-primary actionsButton"  onclick="actionsFun()">
            <i class="fa-solid fa-list"></i> Actions history
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="m-1 w-100 btn btn-outline-primary associatedButton" onclick="associatedFun()">
            <i class="fa-solid fa-link"></i> Associated files <span class="badge bg-danger ms-1" style="border-radius: 50%;">1</span>
          </div>
        </div>
        <div class="col-1"></div>
      </div>
    </div><!--create-c-i-->
  
  
  
  
    <!--sec-1-->
    <div class="sec-1 pb-5 bg-white text-capitalize d-none " id="statusDiv">
      <div class="table-responsive pt-3" id="table-scroll">
        <table class="table px-2 mb-0">
          <thead>
            <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
              <th>
                <p>Date</p>
              </th>
              <th>
                <p>Comments</p>
              </th>
              <th>
                <p>Author</p>
              </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
              <td>
                <p>2024-06-04 11:00</p>
              </td>
              <td>
                <p>Dispute resolved : Facture contestée à tort
                  Les factures sont dues, le contrat a bien été signé par le client et les PV de réception transmits</p>
                  <div class="edit-auther d-none">
                    <div class="d-flex align-items-center gap-3">
                      <i class="fa-solid fa-user mb-2" style="font-size: 20px;"></i>
                      <select class="form-select mb-2 w-100" aria-label="Default select example">
                        <option selected disabled>Resolver :</option>
                        <option value="1">Mike Anderson(Collector)</option>
                        <option value="1">Nicolas Grayson(Collector)</option>
                        <option value="1">Paul Mayer(Administrator)</option>
                        <option value="1">Veronique Miguet(Credit Manager)</option>
                        <option value="1">[None]</option>
                      </select>
                    </div>
                    <textarea class="form-control"  rows="4">Les factures sont dues, le contrat a bien été signé par le client et les PV de réception transmits</textarea>
                    <div class="text-start mb-2"><small class="text-black-50">Comments should be factual, objective and non offensive</small></div>
                    <div class="d-flex gap-2 justify-content-end">
                      <span class="btn px-4 text-light p-1 btn-success" onclick="closeEditAuther()"><i class="fa-solid fa-floppy-disk"  style="  font-size: 15px;"></i> Save</span>
                      <span class="btn px-4 text-light p-1 btn-warning" onclick="closeEditAuther()"><i class="fa-solid fa-reply" style="  font-size: 15px;"></i> Cancel</span>
                    </div>
                  </div>
              </td>
              <td>
                <div class="mb-2 d-flex align-items-center gap-2 justify-content-center">
                  <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                  <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
              </td>
              <td>
                <div class="d-flex gap-2">
                  <span class="btn text-light p-1 px-2 btn-success" onclick="editAuther()"><i class="fa-solid fa-pen"  style="  font-size: 15px;"></i></span>
                  <span class="btn text-light p-1 px-2 btn-danger"><i class="fa-solid fa-trash" style="  font-size: 15px;"></i></span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>  
      </div>
    </div>
    <!--sec-1-->
  
  
    <div class="bg-white p-4 " id="actionsDiv">
      <div class="row mt-2 px-4 text-center table-alerts-container">
        <div class=" col-md-2">
          <p class="fw-bold">Action date</p>
        </div>
        <div class=" col-md-2">
          <p class="fw-bold">Action type</p>
        </div>
        <div class="col-md-5 d-none d-md-block"></div>
        <div class="col-md-3">
          <p class="fw-bold">Action done by</p>
        </div>
      </div>
      <div class="text-center mb-3  p-2 p-md-4">
        <div class="row align-items-center"   style="background-color: #006bff14">
          <div class="col-md-2 pt-2">
            <div class="mouse-hovers d-flex justify-content-center">
            <p class="fw-bold">13-5-2022 17:18</p>
            </div>
          </div>
          <div class="col-md-2 pt-3">
            <div class="d-flex">
              <div class="btn openModalBtn btn-primary w-100" style="border-radius:5px 0 0 5px ">
                @ E-mail
              </div>
              <div class="btn btn-success" style="border-radius:0 5px 5px 0">
                <i class="fa-solid fa-download"></i>
              </div>
            </div>
            <p><a href="#">Relance par email n°1</a></p>
          </div>
          <div class="col-5"></div>
          <div class="col-md-3 mb-2 d-flex align-items-center gap-2 justify-content-center">
            <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
            <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-2 pt-2">
            <div class="mouse-hovers d-flex justify-content-center">
            <p class="fw-bold">13-5-2022 17:18</p>
            </div>
          </div>
          <div class="col-md-2 pt-3">
            <div class="d-flex justify-content-center gap-2">
              <div>
                <i class="fa-solid fa-phone"></i>
              </div>
              <div>
                phone
              </div>
            </div>
            <p><a href="#">Relance par email n°1</a></p>
          </div>
          <div class="col-5"></div>
          <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center">
            <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
            <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
          </div>
        </div>
        <div class="row align-items-center"   style="background-color: #006bff14">
          <div class="col-md-2 pt-2">
            <div class="mouse-hovers d-flex justify-content-center">
            <p class="fw-bold">13-5-2022 17:18</p>
            </div>
          </div>
          <div class="col-md-2 pt-3">
            <div class="d-flex">
              <div class="btn openModalBtn btn-primary w-100" style="border-radius:5px 0 0 5px ">
                @ E-mail
              </div>
              <div class="btn btn-success" style="border-radius:0 5px 5px 0">
                <i class="fa-solid fa-download"></i>
              </div>
            </div>
            <p><a href="#">Relance par email n°1</a></p>
          </div>
          <div class="col-5"></div>
          <div class="col-md-3 mb-2 d-flex align-items-center gap-2 justify-content-center">
            <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
            <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-2 pt-2">
            <div>
            <p class="fw-bold mb-2">13-5-2022 17:18</p>
            <div class="badge bg-light text-dark">COMPLETED ACTION</div>
            </div>
          </div>
          <div class="col-md-2 pt-3">
            <div class="d-flex justify-content-center gap-2">
              <div class="btn btn-light w-100" style="cursor:no-drop ;">
                @ E-mail
              </div>
            </div>
            <p class="text-black-50" style="font-size:12px !important; ">Dispute follow-up</p>
          </div>
          <div class="col-5"></div>
          <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center">
            <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
            <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
          </div>
        </div>
        <div class="row align-items-center"  style="background-color: #006bff14">
          <div class="col-md-2 pt-2">
            <div>
            <p class="fw-bold mb-2 text-decoration-line-through">13-5-2022 17:18</p>
            <div class="badge bg-light text-dark">DELETED ACTION</div>
            </div>
          </div>
          <div class="col-md-2 pt-3">
            <div class="d-flex justify-content-center gap-2">
              <div class="btn btn-light w-100" style="cursor:no-drop ;">
                @ E-mail
              </div>
            </div>
            <p class="text-black-50 text-decoration-line-through" style="font-size:12px !important; ">Promise to pay follow up</p>
          </div>
          <div class="col-5"></div>
          <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center text-decoration-line-through">
            <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
            <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-2 pt-2">
            <div>
            <p class="fw-bold mb-2 text-decoration-line-through">13-5-2022 17:18</p>
            <div class="badge bg-light text-dark">DELETED ACTION</div>
            </div>
          </div>
          <div class="col-md-2 pt-3">
            <div class="d-flex justify-content-center gap-2">
              <div class="btn btn-light w-100" style="cursor:no-drop ;">
                @ E-mail
              </div>
            </div>
            <p class="text-black-50 text-decoration-line-through" style="font-size:12px !important; ">Reminder by e-mail No. 1</p>
          </div>
          <div class="col-5"></div>
          <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center text-decoration-line-through">
            <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
            <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
          </div>
        </div>
  
      </div>
    </div>
  
  
  
    <!--sec-2-->
  
    <div class="bg-white d-none " id="associatedDiv">
      <div class="table-responsive pt-3" id="table-scroll">
        <table class="table px-2 mb-0">
          <thead>
            <tr class="text-center text-capitalize " style="border-bottom: 2px solid #ddd;">
              <th>
                <p>Associate file	</p>
              </th>
              <th>
                <p>Description</p>
              </th>
              <th>
                <p>Size</p>
              </th>
              <th>
                <p>Modification date	</p>
              </th>
              <th>
                <p>Author</p>
              </th>
            </tr>
          </thead>
        </table>
        <div class="bg-light text-center w-100 p-3 mt-0">No associated files</div>
      </div>
      <div class="p-4">
        <div class="d-flex">
          <p>Associate files to items</p>
          <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
        </div>
        <div class="addFileDiv">
  
        </div>
        <div class="btn text-primary" onclick="addFileFunction()"><i class="fa-solid fa-link"></i>&ensp;Add File</div><br>
        <div class="text-center myBtn d-none"><div class="btn btn-primary"><i class="fa-solid fa-check"></i> Submit</div></div>
      </div>
    </div>
  <!--sec-2-->
  </div>
  </div>
  <div class="invoice-2 d-none bg-white px-3">
    <div class=" py-2">
      <div class="d-flex justify-content-between">
        <div class="text-start">
        </div>
        <div class="d-flex justify-content-end gap-3 mt-2">
         <div class="icon-holab  ">
          <a href="invoice-2.html" target="_blank" ><i class="fa-solid fa-maximize text-primary p-2 bg-light"style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i></a>
          <i class="fa-solid fa-close text-light p-2 bg-danger" onclick="closeInvoice2()" style="  font-size: 15px; cursor: pointer; border-radius: 5px;"></i>
         </div>
        </div>
      </div>
      <div class="row p-2 align-items-center text-center">
        <div class="col">
          <p class="fw-bold">Trans.no</p>
        </div>
        <div class="col hide">
          <p class="fw-bold">Issue date</p>
        </div>
        <div class="col">
          <p class="fw-bold">Due date</p>
        </div>
        <div class="col-1 hide">
          <p class="fw-bold">Overdue</p>
        </div>
        <div class="col hide">
          <p class="fw-bold">Intial amount inc. Tax</p>
        </div>
        <div class="col">
          <p class="fw-bold">Remaining amount inc. Tax</p>
        </div>
        <div class="col-3 hide">
          <p class="fw-bold">Status</p>
        </div>
        <div class="col-3 tavle-dropdown-icon"></div>
      </div>
      <div class="row align-items-center text-center p-2 pt-3" style="background-color: #006bff14">
        <div class="col">
          <p class="fw-bold">2401356</p>
        </div>
        <div class="col hide">
          <p class="fw-bold">13-5-2022</p>
        </div>
        <div class="col">
          <p class="fw-bold">13-5-2022</p>
        </div>
        <div class="col-1 hide">
          <div class="badge bg-danger mb-2">46d</div>
        </div>
        <div class="col hide">
          <p class="fw-bold">11,187.32 €</p>
        </div>
        <div class="col">
          <p class="fw-bold">11,187.32 €</p>
        </div>
        <div class="col-3 hide">
          Envoi de duplicata de facture 2-12-2023
        </div>
        <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
          <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="hidden ms-2 d-none">
          <div class="d-flex bg-white">
            <p class="fw-bold">Issue date:</p>
            <p>13-5-2022</p>
          </div>
          <div class="d-flex bg-white">
            <p class="fw-bold">Overdue:</p>
            <div class="badge bg-danger mb-2">46d</div>
          </div>
          <div class="d-flex bg-white">
            <p class="fw-bold">Intial amount inc. Tax:</p>
            <p class="fw-bold">11,187.32 €</p>
          </div>
          <div class="d-flex bg-white">
            <p class="fw-bold">Status:</p>
            <p>Envoi de duplicata de facture 2-12-2023</p>
          </div>
        </div>
      </div>
    </div>
    <div class="step-1">
      <div class="mt-3 px-5 d-flex gap-3">
        <h5 class="text-black-50">Step 1/3</h5>
        <h5>New status :</h5>
      </div>
      <div class="px-5 mb-5">
        <select class="form-select" id="inputname205" aria-label="Default select example">
          <option value="1" selected></option>
          <option value="1">Dispute</option>
          <option value="1">Dispute Resolved</option>
          <option value="1">Litigation</option>
          <option value="1">On Going</option>
          <option value="1">Promise To Pay</option>
        </select>
      </div>
      <div class="px-5">
        <div class="d-flex">
          <p>Associate files to items</p>
          <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
        </div>
        <div class="addFileDiv-2">
    
        </div>
        <div class="btn text-primary" onclick="addFileFunction2()"><i class="fa-solid fa-link"></i>&ensp;Add File</div><br>
      </div>
      <div class="d-flex justify-content-end">
        <div class="btn btn-primary px-5 mx-5" onclick=" showStepTwo()">Next <i class="fa-solid fa-chevron-right ps-2"></i></div>
      </div>
    </div>
    <div class="step-2 d-none">
      <div class="mt-3 px-5 d-flex gap-3">
        <h5 class="text-black-50">Step 2/3</h5>
        <h5>Do you want to send an email to that client or to your colleagues?</h5>
      </div>
      <div class="px-5 mb-5">
        <select class="form-select" id="inputname205" aria-label="Default select example">
          <option value="1" selected>No</option>
          <option value="1">Yes, simple e-mail</option>
          <option value="1">Yes, internal interactive e-mail</option>
        </select>
      </div>
      <div class="d-flex justify-content-end">
        <div class="btn btn-danger px-5 mx-5" onclick=" showStepOne()"><i class="fa-solid fa-chevron-left pe-2"></i> Previus</div>
        <div class="btn btn-primary px-5 mx-5" onclick=" showStepThree()">Next <i class="fa-solid fa-chevron-right ps-2"></i></div>
      </div>
    </div>
    <div class="step-3 d-none">
      <div class="mt-3 px-5 d-flex gap-3">
        <h5 class="text-black-50">Step 3/3</h5>
        <h5>Next action :</h5>
      </div>
      <div class="px-5">            
        <input type="radio" id="go" checked name="checkbox">
        <label for="go" class="mb-3">Follow the collection scenario and the actions in progress :</label>
        <div class="bg-white position-relative">
          <div class="d-flex small-icons-big-container justify-content-between p-4 px-5 m-0">
            <div class="text-center my-auto small-icons-container">
              Key accounts scenario (EN) :
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>-10d</span>
              <div class="btn-warning small-icons text-light px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+5d</span>
              <div class="btn-success small-icons text-light px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+12d</span>
              <div class="btn-success small-icons text-light px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+20d</span>
              <div class="btn-secondary small-icons text-light px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+28d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+38d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">@</div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+45d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">
                <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="text-center small-icons-container" style="z-index: 2">
              <span>+60d</span>
              <div class="btn-light small-icons text-dark px-2 py-1">
                <i class="fa-solid fa-envelope"></i>
              </div>
            </div>
          </div>
          <div class="arrow-right"></div>
          <div class="line-through-icons"></div>
        </div>
        <div class="row align-items-center text-center">
          <div class="col fw-bold">Action date</div>
          <div class="col fw-bold">Action type</div>
          <div class="col fw-bold">Action</div>
          <div class="col fw-bold">Action amount inc. Tax</div>
        </div>
        <div class="row mt-2 text-center">
          <div class="col fw-bold">13 - 5 - 2022</div>
          <div class="col fw-bold">
            <div class="btn openModalBtn btn-primary">@ Email</div>
          </div>
          <div class="col fw-bold">Reminder by email No .2</div>
          <div class="col fw-bold">100,000.00 €</div>
        </div>
      </div>
      <div class="px-5 mt-3">
        <input type="radio" id="Create" name="Create">
        <label for="Create" class="mb-3">Create a specific action for selected items</label>
        
        <div class=" my-2">
          <form class="d-flex">
            <div class="col-3 ">
              <label for="inputname13"> Action name :</label>
            </div>
            <div class="col-9 ">
              <input type="text" class="form-control" placeholder="Name" id="inputname13">
            </div>
          </form>
        </div><!--13-->
  
        <div class=" my-2">
          <form class="d-flex">
            <div class="col-3 ">
              <label for="inputname222">Action date :</label>
  
            </div>
            <div class="input-group">
              <input type="text" class="form-control" id="inputname222">
              <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
            </div>
          </form>
        </div><!--2-->
        <div class=" my-2">
          <form class="d-flex">
            <div class="col-3 ">
              <label for="inputname222">Action Type :</label>
  
            </div>
            <div class="input-group">
              <select class="form-select" aria-label="Default select example">
                <option value="1">Litigation</option>
                <option value="2">Dunning letter</option>
                <option value="3">E-mail</option>
                <option value="3">SMS</option>
                <option value="3">Phone</option>
              </select>
            </div>
          </form>
        </div><!--2-->
      </div>
      <div class="d-flex justify-content-end my-5">
        <div class="btn btn-danger px-5 mx-5" onclick="showStepTwo()"><i class="fa-solid fa-chevron-left pe-2"></i> Previus</div>
        <div class="btn btn-success px-5 mx-5"> <i class="fa-solid fa-check pe-2"></i> Submit</div>
      </div>
    </div>
  </div>
  <div class="overlay-2 d-none" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 11;"></div>
<div class="position-fixed w-75 d-none associate-files " style="top:10% ;left: 50%;transform: translate(-50%);z-index: 12;">
  <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
    <span class="btn btn-secondary position-absolute" onclick="hideAssociateFiles()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
    <div class="p-4">
      <div class=" d-flex text-start">
        <h4>Associate files to items</h4>
        <a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a>
    </div><!--24-->
    <p class=" mb-2" style="font-size: 14px;">(.pdf or .docx or .xlsx or .txt or .jpg or .png ...) <span style="font-size: 10px;">•Maxsize: 15 MB</span></p>
    <div class="addFileDiv">

    </div>
    <div class="btn text-primary" onclick="addFileFunction()"><i class="fa-solid fa-link"></i>&ensp;Add File</div><br>
    <div class="text-center myBtn d-none"><div class="btn btn-primary"><i class="fa-solid fa-check"></i> Submit</div></div> 
    </div>
  </div>
</div>
<div class="position-fixed w-50 d-none pay-via-direct-link " style="top:10% ;left: 50%;transform: translate(-50%);z-index: 12;">
  <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
    <span class="btn btn-secondary position-absolute" onclick="hideAssociateFiles()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
    <h4 class="text-center">Pay via Direct link</h4>
    <div class="p-3 bg-light" style="border-radius:5px ;">
      <div class="d-flex gap-1">
        <p>Items list :</p>
        <p class="fw-normal">3794</p>
      </div>
      <p class="text-center">Link to access payment :</p>
      <input type="text" class="form-control">
    </div>
  </div>
</div>
<div class="position-fixed w-75 d-none group-collection " style="top:10% ;left: 50%;transform: translate(-50%);z-index: 12;">
  <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
    <span class="btn btn-secondary position-absolute" onclick="hideGroupCollection()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
    <h2 class="text-center">Group collection<a href="DSOInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 ms-1" style="border-radius: 50%;width: 15px;height: 18px;font-size: 12px !important;"></i></a></h2>
    <div class="p-3 " style="border-radius:5px;">
      <div class="d-flex">
        <div class="d-flex w-50 align-items-center justify-content-center gap-1 ">
          <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
          <p class="fw-bold">Company code</p>
        </div>
        <div class="d-flex w-50 align-items-center justify-content-center gap-1 ">
          <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
          <p class="fw-bold">Company / Bussiness name</p>
        </div>
      </div>
      <div class="d-flex pt-2" style="background-color: #006BFF14;">
        <div class="d-flex w-100 align-items-center justify-content-center gap-1 ">
          <p class="fw-bold"><a href="holapDetails.html">837404</a></p>
        </div>
        <div class="d-flex w-100 align-items-center justify-content-center gap-1 ">
          <p class="fw-bold"><a href="holapDetails.html">Elarto</a></p>
        </div>
      </div>
      <p class="mt-4 text-center">Collection will be made in the account           
        <select id="">
        <option value="" selected disabled></option>
        <option value="option1">837404/Elarto</option>
      </select>
      </p>
      <div class="text-center myBtn"><div class="btn btn-primary"><i class="fa-solid fa-check"></i> Submit</div></div>
    </div>
  </div>
</div>
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
             <li class="nav-item active">
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

    <section class="my-sear my-2 container-fluid">
      <div class="s-c-notation  my-5" style="border-bottom:solid 1px #6b6565">
        <div class="row gajj text-center ">
          <div class="col-md-4 my-3">
            <a href="#" class=" text-decoration-none b-btm "><i class="fa-solid fa-search px-1"></i>search for a client</a>
          </div>
          <div class="col-md-5 my-3">
            <a href="searchForAnItem.html" class="text-dark text-decoration-none d-btm "><i class="fa-solid fa-search px-1"></i>search for an item(invoice,credit note,...)</a>
          </div>
          <div class="col-md-3 my-3">
            <a href="mySearches.html" class="text-dark text-decoration-none d-btm "><i class="fa-solid fa-star px-1"></i>My Searches
            </a>
          </div>
        </div>
      </div><!--s-c-notation-->
    </section><!--my-seer-->

    <section class="advanced-search d-none">
      <div class="container-fluid">
        <div class="d-flex justify-content-between">
          <a href="#" onclick="hideAdvancedSearch()"><i class="fa-solid fa-reply"></i> Back</a>
          <div class="d-flex align-items-center gap-1">
            <a href="agingBalanceInformation.html"><i class="fa-solid fa-question bg-primary text-light p-1 mt-2" style="border-radius: 50%;width: 10px;height: 12px; font-size: 12px;"></i></a>
            <a href="#">Read More</a>
          </div>
        </div>
        <div class="d-flex justify-content-center gap-4 mt-2">
          <div class="form-check">
            <input class="form-check-input" name="validate" type="radio" id="one">
            <label class="form-check-label" for="one">Validate all the following conditions</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="validate" type="radio" id="two">
            <label class="form-check-label" for="two">Validate at least one of the following conditions</label>
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
              <select id="firstSelect"  class="form-control" data-placeholder="Filter by" ><option value=""></option><option value="bloque" class="type-company">Account blocked?</option><option value="adresse" class="type-company">Address</option><option value="onlyContact" class="type-company">Associated with client</option><option value="marche" class="type-company">Business line</option><option value="ville" class="type-company">City</option><option value="grouper_relance" class="type-company">Collection grouped?</option><option value="onlyScenario" class="type-company">Collection scenario</option><option value="onlyGestionnaire" class="type-company">Collector</option><option value="raison_sociale" class="type-company">Company / Business name</option><option value="numero_acheteur" class="type-company">Company code</option><option value="contactRecouvrementDefined" class="type-company">Contact for collection?</option><option value="id_pays" class="type-company">Country</option><option value="client_date_creation" class="type-company">Creation date</option><option value="limite_credit" class="type-company">Credit Limit</option><option value="notation_credit_category" class="type-company">Credit notation - Risk category</option><option value="notation_credit_note" class="type-company">Credit notation - Score out of 10</option><option value="client_field_perso1" class="type-company">Customer custom field #1</option><option value="client_field_perso2" class="type-company">Customer custom field #2</option><option value="ellisphere_legalProceeding" class="type-company">Ellisphere -  Legal proceeding</option><option value="ellisphere_date_modification" class="type-company">Ellisphere -  Modification date</option><option value="ellisphere_payrank" class="type-company">Ellisphere -  PayRANK</option><option value="ellisphere_delaiReglementFournisseur" class="type-company">Ellisphere -  Payment deadline</option><option value="ellisphere_recommended_credit" class="type-company">Ellisphere -  Recommended Credit</option><option value="ellisphere_riskclass" class="type-company">Ellisphere -  Risk class</option><option value="ellisphere_score" class="type-company">Ellisphere -  Score</option><option value="emailContactDefined" class="type-company">Email to collect?</option><option value="groupe" class="type-company">Group</option><option value="garantie_assureur" class="type-company">Insurer guarantee</option><option value="reference_assureur" class="type-company">Insurer reference</option><option value="emailInteractif" class="type-company">Interactive emails?</option><option value="penalites_retard" class="type-company">Late payment penalties?</option><option value="identifiant_legal" class="type-company">Legal ID</option><option value="mobilePhoneContactDefined" class="type-company">Mobile phone to collect?</option><option value="client_date_modification" class="type-company">Modification date</option><option value="montant_portefeuille_commandes" class="type-company">Order backlog</option><option value="autre_garantie" class="type-company">Other guarantees</option><option value="retard" class="type-company">Overdue</option><option value="retard_periode" class="type-company">Overdue +60&nbsp;d</option><option value="methode_paiement" class="type-company">Payment mean</option><option value="profilpayeur" class="type-company">Payment profile</option><option value="delai_paiement" class="type-company">Payment term</option><option value="boite_postale" class="type-company">Post Office Box</option><option value="encours" class="type-company">Receivable</option><option value="indemnite_forfaitaire" class="type-company">Recovery cost?</option><option value="score" class="type-company">Score</option><option value="state" class="type-company">State / Province</option><option value="garantie_temporaire" class="type-company">Temporary guarantee</option><option value="garantie_temporaire_date_fin" class="type-company">Temporary guarantee - End date</option><option value="garantie_temporaire_date_deb" class="type-company">Temporary guarantee - Start date</option><option value="nom_commercial" class="type-company">Trading name</option><option value="code_groupement" class="type-company">Ultimate parent code</option><option value="client_unique_key" class="type-company">Unique client identifier</option><option value="numero_tva" class="type-company">VAT Number</option><option value="url" class="type-company">Website</option><option value="code_postal" class="type-company">ZIP (or Postal) Code</option><option value=""></option><option value="item_associated_filename" class="type-item">Associate file - Name</option><option value="item_associated_file_external" class="type-item">Associate file - Visible in external emails?</option><option value="item_associated_file_internal" class="type-item">Associate file - Visible in internal emails?</option><option value="item_associated_file" class="type-item">Associate file?</option><option value="nom_affaire" class="type-item">Business case</option><option value="solde" class="type-item">Cleared?</option><option value="item_date_creation" class="type-item">Creation date</option><option value="devise" class="type-item">Currency</option><option value="item_field_perso1" class="type-item">Custom field #1</option><option value="item_field_perso2" class="type-item">Custom field #2</option><option value="item_commentaire_client_auteur" class="type-item">Customer comments - Author</option><option value="item_commentaire_client" class="type-item">Customer comments - Comments</option><option value="item_commentaire_client_date" class="type-item">Customer comments - Date</option><option value="item_commentaire_client_email" class="type-item">Customer comments - E-mail</option><option value="date_promesse_reglement" class="type-item">Date of promise of payment</option><option value="date_echeance" class="type-item">Due date</option><option value="erp_type_piece" class="type-item">ERP item type</option><option value="numero_dossier" class="type-item">File No.</option><option value="montant_ht" class="type-item">Initial amount exc. Tax</option><option value="montant_ttc" class="type-item">Initial amount inc. Tax</option><option value="item_reponse_interne_auteur" class="type-item">Internal reply - Author</option><option value="item_reponse_interne" class="type-item">Internal reply - Comments</option><option value="item_reponse_interne_date" class="type-item">Internal reply - Date</option><option value="item_reponse_interne_email" class="type-item">Internal reply - E-mail</option><option value="date_piece" class="type-item">Issue date</option><option value="perso_type_piece" class="type-item">Item type</option><option value="type_piece" class="type-item">Item type My DSO Manager</option><option value="item_date_modification" class="type-item">Modification date</option><option value="date_commande" class="type-item">Order date</option><option value="retard_compared_today" class="type-item">Overdue (No. of days)</option><option value="numero_commande" class="type-item">PO No.</option><option value="date_solde" class="type-item">Payment date</option><option value="montant_restant_ht" class="type-item">Remaining amount exc. Tax</option><option value="montant_restant_ttc" class="type-item">Remaining amount inc. Tax</option><option value="onlyResolver" class="type-item">Resolver</option><option value="acteur_adv" class="type-item">Sales administrative</option><option value="commercial" class="type-item">Sales manager</option><option value="id_statut" class="type-item">Status</option><option value="auteur_statut" class="type-item">Status - Author</option><option value="commentaire_statut" class="type-item">Status - Comments</option><option value="date_statut" class="type-item">Status date</option><option value="numero_piece" class="type-item">Trans No.</option><option value="ignore_collection" class="type-item">Transaction ignored in the collection?</option><option value="type_statut" class="type-item">Type of status</option><option value="item_unique_key" class="type-item">Unique item identifier</option></select>
            </div>
            <div class="col-md-2">
              <select id="secondSelect" class="form-control " disabled>
                <option value="" selected disabled></option>
                <option value="option1">Is</option>
                <option value="option1">Is not</option>
              </select>
            </div>
            <div class="col-md-4">
              <select id="thirdSelect" class="form-control" disabled>
                <option value="" selected disabled></option>
                <option value="1">Mike Anderson(Collector)</option>
                <option value="1">Nicolas Grayson(Collector)</option>
                <option value="1">Paul Mayer(Administrator)</option>
                <option value="1">Veronique Miguet(Credit Manager)</option>
                <option value="1">--</option>
                <option value="1">[None]</option>
                <option value="1">[Not empty]</option>
              </select>
            </div>
            <div class="col-md-2 d-flex justify-content-center gap-3">
              <div class="btn btn-primary"><i class="fa-solid fa-plus"></i></div>
              <div class="btn btn-danger"><i class="fa-solid fa-minus"></i></div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <div class="btn btn-primary m-auto"><i class="fa-solid fa-search"></i> Search</div>
          </div>
      </div>
    </section>

    <section class="m-groups my-5">
      <div class="container-fluid">
       <a href="#" id="targetButton" class="dab d-flex justify-content-end align-items-center" onclick="showAdvancedSearch()"><i class="fa-solid fa-gear mx-2"></i>Advanced Seaarch<i class="fa-solid fa-arrow-right mx-2"></i></a>
       <div class="create-c-i my-5">
        <div class="row">
          <div class="col-md-4  my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname0"> Business name * : </label>
          
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
              <div class="col-md-5 col-4">
                <label for="inputname9"> Insurer guarantee :</label>
          
              </div>
              <div class="col-md-7 col-8">
                <div class="input-group ">
                  <span class="input-group-text">between</span>
                  <input type="text" class="form-control " id="inputname9">
                  <span class="input-group-text ">&</span>
                  <input type="text" class="form-control " id="inputname9">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
          
            </form>
          </div><!--9-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname10"> Ultimate Parent code:</label>
          
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
              <div class="col-md-5 col-4">
                <label for="inputname12"> Other guarantees:</label>
          
              </div>
              <div class="col-md-7 col-8">
                <div class="input-group ">
                  <span class="input-group-text">between</span>
                  <input type="text" class="form-control " id="inputname12">
                  <span class="input-group-text ">&</span>
                  <input type="text" class="form-control " id="inputname12">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
          
            </form>
          </div><!--12-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname13">Legal ID:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname13">
              </div>
            </form>
          
          </div><!--13-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname14">State / Province:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname14">
              </div>
            </form>
          
          </div><!--14-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-md-5 col-4 ">
                <label for="inputname15"> Credit Limit:</label>
          
              </div>
              <div class="col-md-7 col-8">
                <div class="input-group">
                  <span class="input-group-text">between</span>
                  <input type="text" class="form-control " id="inputname15">
                  <span class="input-group-text ">&</span>
                  <input type="text" class="form-control " id="inputname15">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
          
            </form>
          </div><!--15-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname16">VAT Number:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname16">
              </div>
            </form>
          
          </div><!--16-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname17">Country:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname17">
              </div>
            </form>
          
          </div><!--17-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-4 col-md-5 ">
                <label for="inputname18"> Receivable:</label>
          
              </div>
              <div class="col-8 col-md-7">
                <div class="input-group">
                  <span class="input-group-text">between</span>
                  <input type="text" class="form-control " id="inputname18">
                  <span class="input-group-text ">&</span>
                  <input type="text" class="form-control " id="inputname18">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
          
            </form>
          </div><!--18-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname19">Business line:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname19">
              </div>
            </form>
          
          </div><!--19-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname20">Website:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname20">
              </div>
            </form>
          
          </div><!--20-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-4 col-md-5 ">
                <label for="inputname18"> Overdue:</label>
          
              </div>
              <div class="col-8 col-md-7">
                <div class="input-group">
                  <span class="input-group-text">between</span>
                  <input type="text" class="form-control " id="inputname21">
                  <span class="input-group-text ">&</span>
                  <input type="text" class="form-control " id="inputname21">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
          
            </form>
          </div><!--21-->
          
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname22">Group:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname22">
              </div>
            </form>
          
          </div><!--22-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname23">Contact for collection?</label>
          
              </div>
              <div class="col-7 ">
                <select class="form-select" id="inputname19">
                  <option value="" selected disabled></option>
                  <option value="option1">Yes</option>
                  <option value="option1">NO</option>
                 
                </select>
              </div>
            </form>
          
          </div><!--23-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-4 col-md-5 ">
                <label for="inputname18"> Overdue +15 d:</label>
          
              </div>
              <div class="col-8 col-md-7">
                <div class="input-group">
                  <span class="input-group-text">between</span>
                  <input type="text" class="form-control " id="inputname24">
                  <span class="input-group-text ">&</span>
                  <input type="text" class="form-control " id="inputname24">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
          
            </form>
          </div><!--24-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname25">Associated with client:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname25">
              </div>
            </form>
          
          </div><!--25-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname26"> Email to collect?</label>
          
              </div>
              <div class="col-7 ">
                <select class="form-select" id="inputname26">
                  <option value="" selected disabled></option>
                  <option value="option1">Yes</option>
                  <option value="option1">NO</option>
                 
                </select>
              </div>
            </form>
          
          </div><!--26-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname27"> Late payment penalties?</label>
          
              </div>
              <div class="col-7 d-flex justify-content-start align-items-center ">
                <select class="form-select" id="inputname27">
                  <option value="" selected disabled></option>
                  <option value="option1">Yes</option>
                  <option value="option1">NO</option>
                 
                </select>
              </div>
          
            </form>
          
          </div><!--27-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname28">Collector:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname28">
              </div>
            </form>
          
          </div><!--28-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname29">Interactive emails?</label>
          
              </div>
              <div class="col-7 ">
                <select class="form-select" id="inputname29">
                  <option value="" selected disabled></option>
                  <option value="option1">Yes</option>
                  <option value="option1">NO</option>
                 
                </select>
              </div>
            </form>
          
          </div><!--29-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname30">Recovery cost?</label>
          
              </div>
              <div class="col-7 d-flex justify-content-start align-items-center ">
                <select class="form-select" id="inputname30">
                  <option value="" selected disabled></option>
                  <option value="option1">Yes</option>
                  <option value="option1">NO</option>
                 
                </select>
              </div>
          
            </form>
          
          </div><!--30-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname31">Collection scenario:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname31">
              </div>
            </form>
          
          </div><!--31-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname32">Account blocked?</label>
          
              </div>
              <div class="col-7 ">
                <select class="form-select" id="inputname32">
                  <option value="" selected disabled></option>
                  <option value="option1">Yes</option>
                  <option value="option1">NO</option>
                 
                </select>
              </div>
            </form>
          
          </div><!--32-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname33">Recovery cost?</label>
          
              </div>
              <div class="col-7 d-flex justify-content-start align-items-center ">
                <input type="text" class="form-control" id="inputname33">
              </div>
          
            </form>
          
          </div><!--33-->
  
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname34">Payment profile:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname34">
              </div>
            </form>
          
          </div><!--34-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname35">Customer custom field #2:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname35">
              </div>
            </form>
          
          </div><!--35-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname36">Insurer reference:</label>
          
              </div>
              <div class="col-7 d-flex justify-content-start align-items-center ">
                <input type="text" class="form-control" id="inputname36">
              </div>
          
            </form>
          
          </div><!--36-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname37">Customer custom field #1:</label>
          
              </div>
              <div class="col-7 ">
                <input type="text" class="form-control" id="inputname37">
              </div>
            </form>
          
          </div><!--37-->
          <div class="col-md-4 my-2">
            
            </form>
          
          </div><!--35-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname38"><img src="../images/ellisphere_48x48 2.png" class="mb-2 mx-2" alt="">Ellisphere Score:
                </label>
          
              </div>
              <div class="col-7 d-flex justify-content-start align-items-center ">
                <input type="text" class="form-control" id="inputname38">
              </div>
          
            </form>
          
          </div><!--38-->
          <div class="col-md-4 my-2">
          
          
          </div><!--37-->
          <div class="col-md-4 my-2">
            
            </form>
          
          </div><!--35-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-4 col-md-5 ">
                <label for="inputname39"><img src="../images/ellisphere_48x48 2.png" class="mb-2 mx-2" alt="">Recommended Credit:
                </label>
          
              </div>
              <div class="col-8 col-md-7 d-flex justify-content-start align-items-center ">
                <div class="input-group">
                  <span class="input-group-text">between</span>
                  <input type="text" class="form-control " id="inputname39">
                  <span class="input-group-text ">&</span>
                  <input type="text" class="form-control " id="inputname39">
                  <span class="input-group-text"><i class="fa-solid fa-euro-sign"></i></span>
                </div>
              </div>
          
            </form>
          
          </div><!--39-->
          <div class="col-md-4 my-2">
            
          
          </div><!--37-->
          <div class="col-md-4 my-2">
            
            </form>
          
          </div><!--35-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname40"><img src="../images/ellisphere_48x48 2.png" class="mb-2 mx-2" alt="">Risk class:
                </label>
          
              </div>
              <div class="col-7 d-flex justify-content-start align-items-center ">
                <input type="text" class="form-control" id="inputname40">
              </div>
          
            </form>
          
          </div><!--40-->
          <div class="col-md-4 my-2">
        </div><!--37-->
        <div class="col-md-4 my-2">
          
          </form>
        
        </div><!--35-->
        <div class="col-md-4 my-2">
          <form class="d-flex">
            <div class="col-5 ">
              <label for="inputname41"><img src="../images/ellisphere_48x48 2.png" class="mb-2 mx-2" alt="">PayRANK:
              </label>
        
            </div>
            <div class="col-7 d-flex justify-content-start align-items-center ">
              <input type="text" class="form-control" id="inputname41">
            </div>
        
          </form>
        
        </div><!--38-->
  
          <div class="col-md-4 my-2">
          
          
          </div><!--37-->
          <div class="col-md-4 my-2">
            
            </form>
          
          </div><!--35-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-4 col-md-5 ">
                <label for="inputname42"><img src="../images/ellisphere_48x48 2.png" class="mb-2 mx-2" alt=""> Payment deadline:
                </label>
          
              </div>
              <div class="col-8 col-md-7 d-flex justify-content-start align-items-center ">
                <input type="text" class="form-control" id="inputname42">
              </div>
          
            </form>
          
          </div><!--42-->
          <div class="col-md-4 my-2">
            
          
          </div><!--37-->
          <div class="col-md-4 my-2">
            
            </form>
          
          </div><!--35-->
          <div class="col-md-4 my-2">
            <form class="d-flex">
              <div class="col-5 ">
                <label for="inputname43"><img src="../images/ellisphere_48x48 2.png" class="mb-2 mx-2" alt="">Legal proceeding:
                </label>
          
              </div>
              <div class="col-7 d-flex justify-content-start align-items-center ">
                <input type="text" class="form-control" id="inputname43">
              </div>
          
            </form>
          
          </div><!--43-->
  
  
  
  
        </div><!--row-->
        <div class="container text-center my-3">
          <button onclick="showSearchResults()" class="btn btn-primary btn-lg" ><i class="fa-solid fa-search"></i> Search</button>
          <button class="btn btn-success mySaveBtn d-none btn-lg" ><i class="fa-solid fa-floppy-disk"></i> Save</button>
        </div>
      </div><!--create-c-i-->
      </div><!--container-->

  
  
    </section><!--m-groups-->


    <section class="mt-2 d-none search-results">
      <div class="container-fluid">
        <div class="row table-alerts-container">
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="form-group d-flex align-items-center">
                <select
                  class="form-select w-auto m-2"
                  aria-label="Default select example">
                  <option selected value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                  <option value="134">134</option>
                </select>
                <div>actions display on 134</div>
              </div>
              <form>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    aria-describedby="emailHelp"
                    placeholder="Multi-columns search" />
                </div>
              </form>
            </div>
            <div
              id="selectedAlert"
              class="d-flex d-none justify-content-between align-items-center mb-4">
              <p class="mt-1"></p>
              <a href="editAlert.html" class="btn btn-primary"
                ><i class="fa-solid fa-pen"></i> Edit</a
              >
            </div>
            <div class="row mt-2 align-items-center px-4 text-center">
              <div class="col-1 col-md-1">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1" />
                </div>
              </div>
              <div class="col-4 col-md-1">
                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Flag</p>
                  </div>
                  </div>
              <div class="col-4 col-md-1">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Company code</p>
                  </div>
                  </div>
              <div class="col-1 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Business name</p>
                  </div>
                  </div>
              <div class="col-3 hide">
                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Collection scenario</p>
                  </div>

                
              </div>
              <div class="col-2 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Group</p>
                  </div>
                  </div>
              <div class="col-1 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Receivable</p>
                  </div>

                
              </div>
              <div class="col-1 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Overdue</p>
                  </div>
                  </div>
              <div class="col-1 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                    <p class="fw-bold">Overdue +60d</p>
                  </div>
                  </div>
              <div class="col-3 tavle-dropdown-icon"></div>
            </div>
            <div
              class="text-center mb-3 p-2 p-md-4 table-container">
              <div class="row align-items-center pt-3" style="background-color: #006bff14">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                    <span class="onmouse-2"><i class="fa-solid fa-flag text-danger" style="font-size: 25px;"></i></span>
                    <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">4Front</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-secondary" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3" style="background-color: #006bff14">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-success" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-dark" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3" style="background-color: #006bff14">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-info" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-light" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3" style="background-color: #006bff14">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-warning" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-primary" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3" style="background-color: #006bff14">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-primary" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="row align-items-center pt-3">
                <div class="col-1">
                  <div class="form-check">
                    <input
                      type="checkbox"
                      class="form-check-input"
                      id="exampleCheck1" />
                  </div>
                </div>
                <div class="col-4 col-md-1 mb-3 position-relative">
                  <span class="onmouse-2"><i class="fa-solid fa-flag text-primary" style="font-size: 25px;"></i></span>
                  <span class="conttt-2">payment profile < payeur correct / average payeur >  <br> average days beyond items +28days (< 10days) </span>
                </div>
                <div class="col-4 col-md-1"><p class="fw-bold">1230504</p></div>
                <div class="col-1 hide"><p class="fw-bold"><a href="#" onclick="showHolap()">4Front</a></p></div>
                <div class="col-md-3 hide">
                  <div class="w-100 mb-3">
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
                </div>
                <div class="col-2 hide">
                  <p class="fw-bold">Group Industrie</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div class="col-1 hide">
                  <p class="fw-bold">39.6 k€</p>
                </div>
                <div
                  class="col-3 mb-3 tavle-dropdown-icon"
                  onclick="toggleFunction(this)">
                  <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Business name:</p>
                    <p class="fw-bold">4Front</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Collection scenario:</p>
                    <div>
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
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Group:</p>
                    <p class="fw-bold">Group Industrie</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Receivable:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                  <div class="d-flex bg-light">
                    <p class="fw-bold">Overdue +60d:</p>
                    <p class="fw-bold">39.6 k€</p>
                  </div>
                </div>
              </div>
              <div class="arrow-bottom"></div>
              <div class="row d-none text-center">
                <p class="p-1 mt-3">
                    No clients has been found
                </p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-md-2 col-4"></div>
                <div class="form-group col-md-4 col-8">
                  <select
                    class="form-select m-2"
                    onfocus="this.size=9;"
                    onblur="this.size=1;"
                    onchange="this.size=1; this.blur();"
                    aria-label=" Default select example">
                    <option value="" selected disabled>Add To Group :</option>
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
              <div class="form-group col-md-4 col-6">
                <select
                  name="onlyScenario"
                  class="m-2 form-select"
                  data-placeholder="Collection scenario:"
                  title="Collection scenario">
                  <option value="0" selected disabled>
                    Collection scenario :
                  </option>
                  <option value="3">Clients publics (FR)</option>
                  <option value="2">Clients risqués (FR)</option>
                  <option value="7">Key accounts scenario (EN)</option>
                  <option value="6580">Modèles actions spécifiques</option>
                  <option value="6">Risky clients (EN)</option>
                  <option value="24678">Scénario de relance standard</option>
                  <option value="24679">Standard Collection Scenario</option>
                  <option value="1405">Templates specific actions</option>
                </select>
              </div>
              <div class="form-group col-md-4 col-6">
                <select
                  class="form-select m-2"
                  aria-label="Default select example">
                  <option selected disabled>Collector :</option>
                  <option value="1">Mike Anderson(Collector)</option>
                  <option value="1">Nicolas Grayson(Collector)</option>
                  <option value="1">Paul Mayer(Administrator)</option>
                  <option value="1">Veronique Miguet(Credit Manager)</option>
                  <option value="1">[None]</option>
                </select>
              </div>
              <div class="form-group col-md-4 col-6">
                <select
                  class="form-select m-2"
                  aria-label="Default select example">
                  <option selected disabled>Associated a colleague :</option>
                  <option value="1">Brad Jackson(Sales Manager)</option>
                  <option value="1">Juse Durant(Sales Manager)</option>
                  <option value="1">Paul Mayer(Sales Manager)</option>
                  <option value="1">Thomas Smith(Executive Officer)</option>
                  <option value="1">
                    Vironica Campbell(Sales Administration)
                  </option>
                </select>
              </div>
              <div class="form-group col-md-4 col-6">
                <select
                  class="form-select m-2"
                  aria-label="Default select example">
                  <option selected disabled>Interactive emails :</option>
                  <option value="1">Yes</option>
                  <option value="1">No</option>
                  <option value="1" class="text-primary"><a href="#" > Read more</a></option>
                </select>
              </div>
              <div class="form-group col-md-4 col-5">
                <select
                  class="form-select m-2"
                  aria-label="Default select example">
                  <option selected disabled>Late payment penalties :</option>
                  <option value="1">Yes</option>
                  <option value="1">No</option>
                  <option value="1" class="text-primary"><a href="#" > Read more</a></option>
                </select>
              </div>
              <div class="form-group col-md-4 col-5">
                <select
                  class="form-select m-2"
                  aria-label="Default select example">
                  <option selected disabled>Recovery cost :</option>
                  <option value="1">Yes</option>
                  <option value="1">No</option>
                  <option value="1" class="text-primary"><a href="#" > Read more</a></option>
                </select>
              </div>
              <div class="col-3  ">
                <div class="btn btn-secondary text-center mt-2 w-100" onclick="showGroupCollection()"><i class="fa-solid fa-link " style="cursor: pointer;border-radius: 5px;"></i> Group collection</div>
              </div>
              <div class="col-1  ">
                <div class=" text-center m-auto align-items-center" ><i class="fa-solid fa-trash btn-danger mt-2 p-1 text-light" style="font-size: 25px;cursor: pointer;border-radius: 5px;"></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="justify-content-end gap-1 d-flex mb-2">
          <div class="btn btn-outline-primary">Previus</div>
          <div class="btn btn-primary">1</div>
          <div class="btn btn-outline-primary">2</div>
          <div class="btn btn-outline-primary">3</div>
          <div class="btn btn-outline-primary">4</div>
          <div class="btn btn-outline-primary">5</div>
          <div class="btn btn-outline-primary">6</div>
          <div class="btn btn-outline-primary">Next</div>
        </div>
        <div class="text-center mb-2">
          <div class="this-buttons">
            <div class="">
              <div class="btn-group">
                <button type="button" class="btn text-light"><span><i
                      class="fa-solid fa-download"></i>&ensp;</span>Export this data to excel</button>
                <button type="button" class="button-2 text-light btn dropdown-toggle dropdown-toggle-split"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <p>file fromat:</p>
                  </li>
                  <div class="radios-inp d-flex  justify-content-around">
                    <li class="dropdown-item d-flex"><input type="radio" name="fils" id="csv"><label
                        for="fils">csv</label></li>
                    <li class="dropdown-item d-flex"><input type="radio" name="fils" id="xls"><label
                        for="fils">xls</label>
                    </li>
                  </div>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <p>encoding:</p>
                  </li>
                  <select name="" style="width: 100%; font-size: 12px;">
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
                  </select>
                  </li>
                  <li class="mt-3 "><button type="button" class="btn" style="width: 100%;"><span><iclass="fa-solid
                          fa-download"></i>&ensp;</span>download</button></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--scirpt Files-->


    <script>
      function simulateButtonClick() {
  if (localStorage.getItem('triggerButtonClick') === 'true') {
      document.getElementById("targetButton").click();
      localStorage.removeItem('triggerButtonClick'); // Clean up
  }
}

// Check if the DOM is fully loaded before executing the script
if (document.readyState === 'complete' || document.readyState !== 'loading' && !document.documentElement.doScroll) {
  simulateButtonClick();
} else {
  document.addEventListener('DOMContentLoaded', simulateButtonClick);
}
    </script>
    <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
    @endsection