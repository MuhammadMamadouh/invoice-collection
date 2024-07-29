@extends('app')
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
        <h4>What is the aging balance report?</h4>
        <p class="m-1">The <a href="reportsAgingBalance.html">aging balance</a> is an key tool for collection management and performance evaluation. It shows what is the breakdown of receivable according to their age relative to their due date.</p>
        <p class="m-1">It highlights if the situation of accounts receivable is healthy (few late payments and especially no old overdue) or bad (high overdue with some of them very old).</p>
        <div class="alert alert-danger d-flex"><i class="fa-solid fa-triangle-exclamation mt-2 text-danger"></i> <p class="m-1"> The collection probability decreases rapidly with seniority of invoices. For example, invoices 90 days late are paid in only 70% of cases. And only 50% after 6 months.</p></div>
        <h5>The graph</h5>
        <p class="m-1">It represents the aging brackets [Current | 0-30D | 31-60D | 61-90D | More 90D] for all your customers.</p>
        <img src="./img/aging-balance.png" class="img-fluid my-5 px-4" alt="">
        <div class="alert alert-info">
            <div class=" d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="fa-solid fa-circle-exclamation mt-2"></i> <p class="m-1"> The aging balance bracket can be customized: up to 7 brackets and time slot can be changed.</p>
                </div>
                <div>
                    <div class="btn btn-primary mt-1" onclick="showContact()"><i class="fa-solid fa-envelope"></i> If you have any question, contact us</div>
                </div>
            </div>
        </div>
        <p>The aging balance can be filtered by:</p>
        <ul>
            <li>Clients groups </li>
            <li>Internal actor (collector for example) </li>
            <li>Items status </li>
            <li>Item type </li>
            <li>Any custom field set as analytical </li>
        </ul>
        <p>It's possible to set the overdue %, in order to concentrate your efforts from a certain bracket:</p>
        <img src="./img/aging-dropdown.png" class="img-fluid my-5 px-4" alt="">
        <p class="m-1">The change done here is valid on the whole platform (global view, customer file indicators, etc.).</p>
        <p class="m-1">The Aging balance can be displayed at an earlier date with the « Situation on ... » button. This approach is particularly relevant to review the evolution of overdue from one day to the next and to observe developments on previous dates (for example, at the end of each month, or from one year to the next).</p>
        <h6>The table</h6>
        <p class="m-1">By default this list highlights the aging balance per customer that can be sorted and filtered in many ways to target clients on which you want to act.</p>
        <p class="m-1">For example, a descending sort on overdue more than 90 days will show customers who have unpaid bills for a long time with as consequences a high risk for the cash and the profitability of your business.</p>
        <img src="./img/aging-table.png" class="img-fluid my-5 px-4" alt="">
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