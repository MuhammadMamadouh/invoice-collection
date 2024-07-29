@extends('app')
@section('content')

<div class="create-c-i holap-second bg-light">
    <div class="d-flex gap-3 justify-content-end text-center m-0 mb-3 p-3 w-100" style="background-color: #006bff">
      <span class="btn text-light p-1 px-2 btn-danger"  onclick="closeHolap()"><i class="fa-solid fa-trash" style="  font-size: 15px;"></i></span>
      <span class="btn px-4 text-light p-1 btn-success" onclick="closeEditHolap()"><i class="fa-solid fa-floppy-disk"  style="  font-size: 15px;"></i> Save</span>
      <span class="btn px-4 text-light p-1 btn-warning" onclick="closeEditHolap()"><i class="fa-solid fa-reply" style="  font-size: 15px;"></i> Cancel</span>
      <a href="holapDetails.html" class="btn px-2 text-primary p-1 btn-light" target="_blank" ><i class="fa-solid fa-maximize "style="  font-size: 15px;"></i></a>
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
        <div class="row mt-2 mb-1">
          <div class="col-2">
            <h6>action to do</h6>
          </div>
          <div class="col-2">
            <h6>action type</h6>
          </div>

          <div class="col-4">
            <h6 class="text-center">Description</h6>
          </div>
        </div>
        <div class="container">
          <div class="check-desc text-center mt-1"
            style="background-color: #e2dddd; padding: 10px; border-top: #000; border: 2px solid #efefef;">
            <div class="col-12">
              <h6><span style="font-size: 15px; margin-right: 10px;"><i class="fa-solid fa-check"></i></span>No action
                is to be performed</h6>
            </div>
          </div>
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
            <div class="two-content-show mt-2 mb-2 d-flex justify-content-between">
              <h4>Notation crédit</h4>
              <a href="#" class="text-black-50"><span><i class="fa-solid fa-gear"></i></span>Custom scoring models</a>
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
                <button><span class="fa-solid fa-check"></span> calc score</button>
              </div>
            </div>
          </div>
        </div>

        <div class="credit-limit-btn mt-3 ">
          <h5 class="text-capitalize mt-2 mb-2">credit limit</h5>
          <button id="score-button-2"><span><i class="fa-solid fa-plus"></i></span>new score</button>
        </div>
        <div class="container">
          <div class="credit-limit mt-3 mb-2" id="show-score-2">
            <div class="container">
              <div class="two-content-show mt-2 mb-2 d-flex align-items-center justify-content-between">
                <p>Risk category ( A, B, C or D - View <span>Credit notation</span> ) :</p>
                <a href="#" class="text-black-50"><span><i class="fa-solid fa-gear"></i></span>Custom scoring
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
                  <button><span><i class="fa-solid fa-check"></i></span> calculate</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--sec-1-->

  <!--sec-2-->

  <div class="d-none" id="indicatorsDiv">
    <div class="sec-2 bg-white" >
      <div class="container-fluid">
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
        <div class="head-titels pt-3 text-black-50 mt-3 mb-3">
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


@endsection