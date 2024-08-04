<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help</title>
    <!--bootstrap-file-->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="/public/css/all.min.css" />
    <!--fontawesome-file-->
    <link rel="stylesheet" href="/public/css/reports.css">
    <link rel="stylesheet" href="/public/css/style-2.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/update.css">
    <link rel="stylesheet" href="/public/css/risk.css" />
    <link rel="stylesheet" href="/public/css/navbar.css" />
    <link rel="stylesheet" href="/public/css/seedemo.css" />
    <link rel="stylesheet" href="/public/css/help.css" />
    <link rel="stylesheet" href="/public/css/search-bar.css">
    <!--icons-site-->
    <link rel="icon" type="png" href="/public/img/logo.png" />
    <!--icons-site-->
    <!--google-font-->
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="/public/css/all.min.css" />
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet" />
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
    <script src="/public/js/all.min.js"></script>
    <script src="/public/js/help.js"></script>
    <script src="/public/js/chart-5.js"></script>
    <script src="/public/js/chart-11.js"></script>
    <script src="/public/js/chart-3.js"></script>
    <script src="/public/js/chart-8.js"></script>
    <script src="/public/js/chart-6.js"></script>
    <script src="/public/js/searchBar.js"></script>
    <script src="/public/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Move selected clients to the right list
        $('.fa-circle-arrow-right').click(function() {
            $('#clients-select option:selected').each(function() {
                $(this).remove().appendTo('#group-clients-select');
            });
        });

        // Move selected clients to the left list
        $('.fa-circle-arrow-left').click(function() {
            $('#group-clients-select option:selected').each(function() {
                $(this).remove().appendTo('#clients-select');
            });
        });
    });
    </script>
    @yield('scripts')
    {{-- @stack('scripts') --}}
    <!-- <script src="js/main.js"></script> -->
    <!--scirpt Files-->
</body>

</html>
