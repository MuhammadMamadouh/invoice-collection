@extends('app')
@section('content')

<!--navbar-site-->
@include('layouts.navbar')
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