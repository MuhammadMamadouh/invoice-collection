@extends('layouts.app')
@section('content')  
<body class="cairo-uniquifier position-relative">
    <section class="p-4">
        <h4>What is the overdue trend report?</h4>
        <p class="m-1">The report<a href="reportsOverdueTrend.html"> Overdue trend</a> allows to visualize the evolution over time of the performance in debt collection.</p>
        <p class="m-1">It is particularly relevant because beyond the gross evolution of overdue amount per week or per month, it allows to filter them by customer groups, analytical fields, by type of status and status.</p>
        <p class="m-1">This approach highlights the causes of the improvement or deterioration of performance (more or less disputes, typology of customers in financial difficulties, etc.) and thus to treat them.</p>
        <h5>The graph</h5>
        <img src="./img/overdue-graph.png" class="img-fluid my-5 px-4" alt="">
        <p class="m-1">The overdue rate is displayed, as well as the total receivable that is displayed if the corresponding check box is selected. Both indicators can be adjusted according to the bracket you want to focus on: Total, +30d, +60d or +90d.</p>
        <p class="m-1">Like all other reports, it is also filterable by collector, by sales manager (or other actor associated with the customers) and by the client customized fields set as analytical.</p>
        <h6>The table</h6>
        <p class="m-1">The table shows the overdue trend by customers per week or month depending on the selected option. It can be sorted and filtered in many ways to target clients on which you want to act.</p>
        <p class="m-1">For example, a descending sort on overdue more than 90 days will show customers who have unpaid bills for a long time with as consequences a high risk for the cash and the profitability of your business.</p>
        <img src="./img/overdue-table.png" class="img-fluid my-5 px-4" alt="">
        <div class="alert alert-info">

                <div class="d-flex">
                    <i class="fa-solid fa-circle-exclamation mt-2"></i> <p class="m-1"> View the aging balance on a given date by clicking on « Situation on ... » (top right of the screen).</p>
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