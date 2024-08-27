<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Help</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <script src="/js/chart-6.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/searchBar.js"></script>

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
    <script>
//         document.addEventListener('DOMContentLoaded', function () {
//   // Select all buttons with the class 'dynamic-button'
//   const buttons = document.querySelectorAll('.dynamic-button');

//   buttons.forEach(button => {
//     button.addEventListener('click', function () {
//       // Remove .btn-primary from all buttons
//       buttons.forEach(btn => btn.classList.remove('btn-primary'));

//       // Add .btn-primary to the clicked button
//       this.classList.add('btn-primary');
//     });
//   });
// });

document.addEventListener('DOMContentLoaded', function () {
  // Select the button by ID
  const button1 = document.getElementById('button1');
  const button2 = document.getElementById('button2');
  const button3 = document.getElementById('button3');
  const button4 = document.getElementById('button4');

  // Add the .btn-primary class to the selected button
  if (button1) {
    button1.addEventListener('click', function (event) {
      // Prevent the default action if needed (e.g., navigation)
      event.preventDefault();
      // Store button ID in local storage
      localStorage.setItem('highlightButton', 'button1');
      window.location.href = '/collection-manual-actions';
    });
  }
  if (button2) {
    button2.addEventListener('click', function (event) {
      // Prevent the default action if needed (e.g., navigation)
      event.preventDefault();
      localStorage.setItem('highlightButton2', 'button2');
      window.location.href = '/collection';
    });
  }
  if (button3) {
    button3.addEventListener('click', function (event) {
      // Prevent the default action if needed (e.g., navigation)
      event.preventDefault();
      // Example action: toggle the .btn-primary class
      button1.classList.toggle('btn-primary');
    });
  }
  if (button4) {
    button4.addEventListener('click', function (event) {
      // Prevent the default action if needed (e.g., navigation)
      event.preventDefault();
      // Example action: toggle the .btn-primary class
      button1.classList.toggle('btn-primary');
    });
    //button4.classList.add('btn-primary');
  }
});
document.addEventListener('DOMContentLoaded', function () {
  // Retrieve the stored button ID from local storage
  const highlightButton = localStorage.getItem('highlightButton');
  const highlightButton2 = localStorage.getItem('highlightButton2');

  if (highlightButton) {
    const button = document.getElementById(highlightButton);
    if (button) {
      button.classList.add('btn-primary');
    }

    // Clear the local storage item after applying the class
    localStorage.removeItem('highlightButton');
  }
  if (highlightButton2) {
    const button = document.getElementById(highlightButton2);
    if (button) {
      button.classList.add('btn-primary');
    }

    // Clear the local storage item after applying the class
    localStorage.removeItem('highlightButton2');
  }
});


        </script>
    <!-- @yield('scripts') -->
    @stack('scripts')
    <!-- <script src="js/main.js"></script> -->
    <!--scirpt Files-->
</body>

</html>
