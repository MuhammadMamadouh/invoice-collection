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
    <section class="p-4">
        <h4>What is the DSO report?</h4>
        <p class="m-1">The <a href="reportsDSO.html">DSO</a> is a key performance indicator of receivables management. It represents the number of days of sales invoiced and not paid yet, and has a direct effect on cash flow of your business.</p>
        <div class="alert alert-info mt-3 d-flex"><i class="fa-solid fa-circle-exclamation mt-2"></i> <p class="m-1">Lower is the DSO, the better it is because that means you have less cash « out » of your company.</p></div>
        <p class="m-1">The report tracks the DSO of your business and splits it into current DSO (due to the payment term granted to customers) and overdue DSO (due to overdue receivable).</p>
        <div class="alert alert-success mt-3 d-flex"><i class="fa-solid fa-check mt-2"></i> <p class="m-1">The report also shows overdue %, another key indicator of debt collection that shows what is the percentage of overdue in total outstanding receivable.</p></div>
        <p class="m-1">You can track these indicators for all the receivables of your company, by groups of customers, by customer, by analytical field (profit center, business line), ... . This allows you to quickly identify the business line or customers that need actions to be taken to improve your cash flow.</p>
        <p class="m-1">The report is presented with a graph showing the evolution of the DSO and the overdue rate:</p>
        <img src="./img/DSO-graph.png" class="img-fluid my-5 px-4" alt="">
        <p>It then details the DSO per customer by integrating the annual cost of a day of DSO per client. This cost is calculated based on the internal rate of your company defined in your preferences:</p>
        <img src="./img/DSO-table.png" class="img-fluid my-5 px-4" alt="">
        <div class="alert alert-danger d-flex"><i class="fa-solid fa-triangle-exclamation mt-2 text-danger"></i> <p class="m-1"> The DSO needs history of sales to be well calculated. Therefore it requires several weeks of data upload in My DSO Manager to be well calculated. It is also possible to upload an historic of sales.</p></div>
        <div class="d-flex flex-wrap justify-content-between">
          <p class="m-1">My DSO Manager may also calculate the DSO in accordance with US GAAP rules and US GAAP calendar. To activate the US GAAP DSO</p>
          <div class="btn btn-primary mt-1" onclick="showContact()"><i class="fa-solid fa-envelope"></i>contact us</div>
        </div>
        <h6><a href="various-definitions-tips.html"><i class="fa-solid fa-arrow-left"></i> Back</a>: Online help » Various questions</h6>
    </section>







     <!--scirpt Files-->
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/help.js"></script>
   <script src="js/wow.min.js"></script>
   <script>new WOW().init();</script>
   <script src="js/all.min.js"></script>
   <!-- <script src="js/main.js" ></script> -->
   <!--scirpt Files-->
</body>
</html>