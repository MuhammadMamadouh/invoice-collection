<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help</title>
    <!--bootstrap-file-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="css/all.min.css" />
    <!--fontawesome-file-->
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/seedemo.css" />
    <link rel="stylesheet" href="css/help.css" />
    <link rel="stylesheet" href="css/search-bar.css">
    <!--icons-site-->
    <link rel="icon" type="png" href="img/logo.png" />
    <!--icons-site-->
    <!--google-font-->
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="css/all.min.css" /> 
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
      rel="stylesheet" />
    <!--google-font-->
  </head>
  <body>
  @include('dashboard.include.navbar') 
  <div class="container-fluid px-lg-5">
  @yield('content')
</div>  

<!--scirpt Files-->


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels"></script>

    <!-- <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script> -->
    <script src="js/all.min.js"></script>
    <script src="js/help.js"></script>
    <script src="js/chart-5.js"></script>
    <script src="js/chart-11.js"></script>
    <script src="js/chart-3.js"></script>
    <script src="js/chart-8.js"></script>
    <script src="js/chart-6.js"></script>
    <script src="js/searchBar.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
   
    @stack('scripts')
    <!-- <script src="js/main.js" ></script> -->
    <!--scirpt Files-->
</body> 
</html>
 