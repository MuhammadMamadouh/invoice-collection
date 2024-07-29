@extends('layouts.app')
@section('content')
    <section class="p-4">
        <h4>What is the items status report?</h4>
        <p class="m-1">The report <a href="reportsItemsStatus.html">Items status</a> reflects graphically and in value the statuses applied to invoices and other items types.</p>
        <p class="m-1">The report also shows the qualification rate and amount of overdue items, which are keys indicators in determining whether the monitoring of overdue receivables is optimal.</p>
        <p class="m-1">Like other reports, you can define a date to display the status at an earlier date.</p>
        <h5>The graph</h5>
        <p class="m-1">It displays by default the breakdown of overdue receivable by type of status: litigation, ongoing, promise to pay, dispute, dispute resolved:</p>
        <img src="./img/item-status-graph.png" class="img-fluid my-5 px-4" alt="">
        <p class="m-1">And details of the statuses when a status type is selected:</p>
        <img src="./img/item-status-graph.png" class="img-fluid my-5 px-4" alt="">
        <p class="m-1">It's also possible to visualize the statuses trend.</p>
        <p class="m-1">This approch is particularly relevent to see improvements or deterioration of performance on multiple axes and to highlight the root causes of late payments and their trend :</p>
        <img src="./img/item-status-graph-2.png" class="img-fluid my-5 px-4" alt="">
        <h5>The table</h5>
        <p class="m-1">By default this list highlights the qualified amount and number of items per customer. It can be sorted and filtered in many ways to target clients on which you want to act.</p>
        <img src="./img/item-status-table.png" class="img-fluid my-5 px-4" alt="">
        <p class="m-1">It is possible to « Group results » by collector and by any customer analytical field:</p>
        <img src="./img/overdue-table.png" class="img-fluid my-5 px-4" alt="">
        <div class="alert alert-danger">

                <div class="d-flex">
                    <i class="fa-solid fa-lightbulb mt-2"></i> <p class="m-1">It is possible to « Group results » by collector and by any customer analytical field:</p>
                </div>
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