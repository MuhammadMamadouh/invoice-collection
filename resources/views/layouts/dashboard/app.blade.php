<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collection</title>
    <!--bootstrap-file-->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <!--bootstrap-file-->
    <!--fontawesome-file-->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!--fontawesome-file-->
    <link rel="stylesheet" href="/css/reports.css">
    <link rel="stylesheet" href="/css/style-2.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/update.css">
    <link rel="stylesheet" href="/css/risk.css" />
    <link rel="stylesheet" href="/css/navbar.css" />
    <link rel="stylesheet" href="/css/seedemo.css" />
    <link rel="stylesheet" href="/css/help.css" />
    <link rel="stylesheet" href="/css/search-bar.css">
    <!--icons-site-->
    <link rel="icon" type="png" href="/img/logo.png" />
    <!--icons-site-->
    <!--google-font-->
    <!--woow AnimateFiles Css-->
    <link rel="stylesheet" href="/css/all.min.css" />
    <!--woow AnimateFiles Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet" />
    <!--google-font-->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

    <script>
    // Define the function in global scope
    function showAddActionDiv(collectionId) {
        document.getElementById('collection_scenario_id').value = collectionId;
        document.querySelector(".add-action-div").classList.remove("d-none");
        document.querySelector(".overlay").classList.remove("d-none");
    }
    </script>
<style>
    .form-control
    {
        padding: .175rem .75rem;
    }
    .dropdown-row {
            display: flex;
            gap: 10px; /* Space between dropdowns */
        }
        .dropdown-container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap; /* Allows wrapping of items if necessary */
        }
        .file-input-container {
            margin-bottom: 10px;
        }
</style>
</head>

<body>
    @include('dashboard.include.navbar')
    <div class="container-fluid px-lg-5">
        @yield('content')
    </div>

    <!--scirpt Files-->
@yield('scripts')
@stack('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels"></script>

    <!-- <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script> -->
    <script src="/js/all.min.js"></script>
    <script src="/js/help.js"></script>
    <script src="/js/chart-5.js"></script>
    <script src="/js/chart-11.js"></script>
    <script src="/js/chart-3.js"></script>
    <script src="/js/chart-8.js"></script>
    <script src="/js/client.js"></script>
    <script src="/js/clientGroup.js"></script>
    <script src="/js/validation.js"></script>
    <script src="/js/invoice.js"></script>
    <script src="/js/credit_limits_validation.js"></script>
    <script src="/js/manage_risk.js"></script>
    <script src="/js/chart-6.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/searchBar.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Cache jQuery selectors
            var $clientsSelect = $('#clients-select');
            var $groupClientsSelect = $('#group-clients-select');

            // Move selected clients to the right list
            $(document).on('click', '.fa-circle-arrow-right', function() {
                $clientsSelect.find('option:selected').each(function() {
                    $(this).remove().appendTo($groupClientsSelect);
                });
            });

            // Move selected clients to the left list
            $(document).on('click', '.fa-circle-arrow-left', function() {
                $groupClientsSelect.find('option:selected').each(function() {
                    $(this).remove().appendTo($clientsSelect);
                });
            });
        });
    </script>

    <script src="js/main.js"></script>

</body>

</html>
