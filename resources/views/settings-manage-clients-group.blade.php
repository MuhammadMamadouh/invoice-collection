<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Setting</title>
  <link rel="shortcut icon" href="images/Logo.png" type="image/x-icon">
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/search-bar.css">
  <link rel="stylesheet" href="css/update.css">
  <style>
    @media (max-width:992px) {
      .create-group-div{
      width: 60%;
    }
    }
    @media (max-width:767px) {
      .create-group-div{
      width: 80%;
    }
    }
    @media (max-width:550px) {
      .create-group-div{
      width: 95%;
    }
    }
  </style>
</head>

<body class="cairo-uniquifier position-relative">
  <div class="overlay d-none" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;"></div>
  <!-- store form -->
  <div class="position-fixed create-group-div d-none" style="top:10% ;left: 50%;transform: translate(-50%);z-index: 10;">
  <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
    <span class="btn btn-secondary position-absolute" onclick="hideCreateGroupDiv()" style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
    <div class="my-2">
      <h3 class="text-center mb-3">{{_("Create a group")}}</h3>
      <form class="d-flex flex-column align-items-start mb-3" method="post" action="{{ route('store-client-group') }}" id="create-group-form">
        @csrf
        <div class="col-12 mb-3">
          <label for="inputname18">{{_(" Name:")}}</label>
          <div class="input-group">
            <input type="text" class="form-control" id="inputname18" name="name" value="{{old('name')}}">
          </div>
          @error('name')
           <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </form>
      <div class="d-flex gap-3 mb-3">
        <div>
          <label>{{_("Clients:")}}</label>
          <textarea class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="text-center m-auto">
          <i class="fa-solid fa-circle-arrow-right text-primary" style="font-size:40px ;cursor: pointer;"></i>
          <i class="fa-solid fa-circle-arrow-left text-primary mt-3" style="font-size:40px ;cursor: pointer;"></i>
        </div>
        <div>
          <label>{{_("Associated with the group :")}}</label>
          <textarea class="form-control" cols="30" rows="10"></textarea>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
      <button type="submit" class="btn btn-success" form="create-group-form"><i class="fa-solid fa-plus"></i> {{_("Add")}}</button>
    </div>
  </div>
</div>

 <!-- Update form -->
<div class="position-fixed edit-group-div d-none" style="top:10%; left: 50%; transform: translate(-50%); z-index: 10;">
    <div class="bg-white m-auto p-3 shadow-sm position-relative" style="border-radius: 10px;">
        <span class="btn btn-secondary position-absolute" onclick="hideEditGroupDiv()" style="border-radius:50%; top: -20px; right: -20px;"><i class="fa-solid fa-close"></i></span>
        <div class="my-2">
            <form id="editGroupForm" class="d-flex flex-column" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" id="editGroupId" name="id">
                <div class="mb-3">
                    <label for="name">{{_("Name:")}}</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="d-flex gap-3">
                    <div class="flex-grow-1">
                        <label>{{_("Clients:")}}</label>
                        <textarea id="editClients" class="form-control" cols="30" rows="10" name="clients"></textarea>
                    </div>
                    <div class="text-center m-auto">
                        <i class="fa-solid fa-circle-arrow-right text-primary" style="font-size:40px; cursor: pointer;"></i>
                        <i class="fa-solid fa-circle-arrow-left text-primary mt-3" style="font-size:40px; cursor: pointer;"></i>
                    </div>
                    <div class="flex-grow-1">
                        <label>{{_("Associated with the group:")}}</label>
                        <textarea id="editAssociated" class="form-control" cols="30" rows="10" name="associated"></textarea>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i> {{_("Modify")}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript Code -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Form submission handler
    $('#editGroupForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize(); // Serialize form data
        var id = $('#editGroupId').val(); // Get the ID value

        $.ajax({
            url: '/update-client-group/' + id, // Append the ID to the URL
            type: 'POST', // Use POST for update
            data: formData,
            success: function(response) {
                alert('Data updated successfully!');
                $('.edit-group-div').hide(); // Hide the edit form
            },
            error: function(xhr) {
                alert('An error occurred: ' + xhr.responseText);
            }
        });
    });

    function showEditGroupDiv(id) {
    $.ajax({
        url: '/get-client-group/' + id, // Adjust the URL as needed
        type: 'GET',
        success: function(response) {
            // Populate the form fields with the data from the response
            $('#editGroupId').val(response.id);
            $('#name').val(response.name);
            // $('#editClients').val(response.clients);
            // $('#editAssociated').val(response.associated);
            
            // Show the edit form
            $('.edit-group-div').removeClass('d-none');
        },
        error: function(xhr) {
            alert('An error occurred: ' + xhr.responseText);
        }
    });
}

function hideEditGroupDiv() {
    $('.edit-group-div').addClass('d-none'); // Hide the edit form
}

    
</script>


    <!--navbar-site-->
    <div class="navbar-all-site cairo-uniquifier">
      <div class="top-navbar ">
       <div class="container">
           <span class="inputicons"><i class="fa-solid fa-book"></i></span><input type="text" class="mt-2 mb-2" placeholder="Contact Us For Personalized Demo">
           <a href="settings.html" class="mt-4 mb-4"> <i class="fa-solid fa-house"></i><a href="settings.html">My account</a></a>
           <a href="settings.html"><img src="img/person2.jpg" class="img-fluid" alt=""></a>
          <span class="mt-4 mb-3"><i class="fa-solid fa-power-off"></i><a href="#">sign out</a></span>
       
      </div>
     </div>
    <nav class="navbar navbar-expand-lg">
       <div class="container">
         <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt=""></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon">
           <span class="text-light"><i class="fa-solid fa-bars p-1"></i></span>
           </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="globalView.html"><span><i class="fa-solid fa-eye"></i></span> global view</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="collection.html"><span><i class="fa-solid fa-clock"></i></span> collection</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="actionsToDo.html" >
                <span><i class="fa-solid fa-bolt "></i></span>risk
              </a>
            </li>
           
             <li class="nav-item">
               <a class="nav-link" href="allClients.html"><span><i class="fa-solid fa-globe"></i></span>clients</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="searchForAClient.html"><span><i class="fa-solid fa-magnifying-glass"></i></span> search</a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="reportsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><span><i class="fa-solid fa-chart-simple"></i></span> reports</a>
               <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
                <li><a class="dropdown-item text-primary" href="reportsAgingBalance.html"><i class="fa-solid fa-chart-simple "></i> Aging balance</a></li>
                <li><a class="dropdown-item text-primary" href="reportsOverdueTrend.html"><i class="fa-solid fa-clock-rotate-left"></i> Overdue trend</a></li>
                <li><a class="dropdown-item text-primary" href="reportsDSO.html"><i class="fa-solid fa-chart-line"></i> DSO</a></li>
                <li><a class="dropdown-item text-primary" href="reportsItemsStatus.html"><i class="fa-solid fa-chart-pie"></i> Items status</a></li>
                <li><a class="dropdown-item text-primary" href="reportsDisputes.html"><i class="fa-solid fa-handshake-simple"></i> Disputes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-primary" href="reportsSales.html"><i class="fa-solid fa-signal"></i> Sales</a></li>
                <li><a class="dropdown-item text-primary" href="reportsCashReciepts.html"><i class="fa-solid fa-money-bill-1-wave"></i> Cash receipts</a></li>
                <li><a class="dropdown-item text-primary" href="reportsCashForecast.html"><i class="fa-solid fa-wand-magic-sparkles"></i> Cash Forecast</a></li>
                <li><a class="dropdown-item text-primary" href="reportsPaymentSchedule.html"><i class="fa-solid fa-table-cells"></i> Payment Schedule</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-primary" href="reportsRisk.html"><i class="fa-solid fa-bolt me-2"></i>Risk</a></li>
                <li><a class="dropdown-item text-primary" href="reportsPaymentProfile.html"><i class="fa-solid fa-flag me-2"></i>Payment profile</a></li>
              </ul>
             </li>
             <li class="nav-item dropdown active">
               <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fa-solid fa-gear"></i></span> setting
               </a>
               <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                <li><a class="dropdown-item text-primary" href="settings-manage-users-account.html"><i class="fa-solid fa-users"></i> Manage users account</a></li>
                <li><a class="dropdown-item text-primary" href="settings-secure.html"><i class="fa-solid fa-lock"></i> Secure my account and user accounts</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-primary" href="settings-import-export-data.html"><i class="fa-solid fa-rotate"></i> Import / Export your data</a></li>
                <li><a class="dropdown-item text-primary" href="settings-manage-search.html"><i class="fa-solid fa-robot"></i> Manage search assign</a></li>
                <li><a class="dropdown-item text-primary" href="settings-create-client.html"><i class="fa-solid fa-plus"></i> Create a client</a></li>
                <li><a class="dropdown-item text-primary" href="settings-create-item.html"><i class="fa-solid fa-plus"></i> Create an item(invoice, credit note,...)</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-primary" href="settings-manage-clients-group.html"><i class="fa-regular fa-folder-open"></i> Manage clients group</a></li>
                <li><a class="dropdown-item text-primary" href="settings-manage-collection-scenario.html"><i class="fa-regular fa-clock"></i> Manage collection scenario</a></li>
                <li><a class="dropdown-item text-primary" href="settings-manage-item-status.html"><i class="fa-regular fa-square-check"></i> Manage item status</a></li>
                <li><a class="dropdown-item text-primary" href="settings-manage-payment-profile.html"><i class="fa-regular fa-flag"></i> Manage payment profiles</a></li>
                <li><a class="dropdown-item text-primary" href="settings-manage-risk-settings.html"><i class="fa-solid fa-bolt"></i> Manage risk</a></li>
                <li><a class="dropdown-item text-primary" href="settings-manage-validation.html"><i class="fa-solid fa-computer"></i>Manage credit limits validation</a></li>
              </ul>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="help.html"><span><i class="fa-solid fa-circle-info"></i></span> helps</a>
             </li>
             <div class="icons-nav">
               <a href="insights.html"><i class="fa-solid fa-book"></i></a>
               <a class="position-relative" href="#" id="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
               <div class="search-container px-4 py-2 rounded" id="search-container">
                <p>{{_("")}}Quick search :</p>
                <div class="input-group w-100 ">
                    <input type="text" class="search-input form-control" placeholder="Search for a client / Search for an item (invoice, credit note, ...)...">
                    <span class="input-group-text bg-primary"><a href="#"><i class="fa-solid fa-search text-white"></i></a></span>
                  </div>
                  <div class="d-flex "><input type="checkbox" class="mb-3 me-1 chec bg-body-tertiary">
                    <p class="name-d">Include cleared items</p></div>
              </div>
             </div>
             </ul>
         </div>
       </div>
     </nav>
    </div>
    <!--navbar-site-->


    <section class="m-groups my-2">
    <div class="container-fluid">
      <div class="t-manage text-center text-capitalize">
        <h4>{{_("Manage clients groups")}}</h4>
      </div><!--t-manage-->
      <div class="create my-3">
        <button class="btn btn-m" onclick="showCreateGroupDiv()">
          <i class="fa-solid fa-plus"></i> {{_("Create a group")}}
        </button>
      </div><!--create-->

    <!-- pagination -->

    <div class="d-flex justify-content-between align-items-center mb-4">
    <div class="form-group d-flex align-items-center">
        {{ __("display") }}
        <form action="{{ route('clients-group') }}" method="GET">
            <select name="per_page" class="form-select w-auto m-2" onchange="this.form.submit()">              
                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                <option value="{{ $clientsGroups->total() }}" {{ request('per_page') == $clientsGroups->total() ? 'selected' : '' }}>{{ $clientsGroups->total() }}</option>
            </select>
        </form>
        <div>{{ $clientsGroups->total() }} items</div>
    </div>
    <form>
        <div class="form-group">
            <input
                type="text"
                class="form-control"
                aria-describedby="emailHelp"
                placeholder="Multi-columns search"
            />
        </div>
    </form>
</div>

<div class="d-flex justify-content-center">
    {{ $clientsGroups->appends(['per_page' => request('per_page')])->links('pagination::default') }}
</div>


      <div class="groups-t position-relative ">
        <table class="table table-striped rounded">
          <tr class="kall">
            <td class="check-name border-0">
              <input type="checkbox" class="chec bg-body-tertiary">
              <p class="name-d fw-bold">{{ __("Group Name") }}</p>
            </td>
            <td class="border-0">
              <div class="d-flex align-items-center justify-content-start gap-1 ">
                <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                <p class="pris-d name-d fw-bold">
                 {{_("No . of clients in the group")}} 
                </p>
              </div>

            </td>
            <td class="border-0">
              <p class="operate name-d ">

              </p>
            </td>

          </tr>
          
          <!--who-->
          @foreach($clientsGroups as $clientsGroup)
          <tr class="kall">
            <td class="check-name border-0">
              <input type="checkbox" class="chec bg-body-tertiary">
              <p class="name-d">{{ $clientsGroup->name }}</p>
            </td>
            <td class="border-0"> 
              <p class="pris-d name-d text-primary num-p">
              {{ $clientsGroup->clients }}
              </p>
            </td>
            <td class="border-0">
              <p class="operate name-d ">
              
                <a href="get-client-group/{{ $clientsGroup->id}}" onclick="showEditGroupDiv({{ $clientsGroup->id }})" class="text-decoration-none edite-groups rounded">
                <i class="fa-solid fa-pen"></i>
              
                <a href="delete-client-group/{{ $clientsGroup->id}}" class="text-decoration-none delete-groups rounded" onclick="return confirm('Are you sure you want to delete this client group?')"><i
                class="fa-solid fa-trash-can trash-d"></i></a> 
              </p>
            </td>

          </tr>
          
          @endforeach
        </table>

        <form id="delete-all-form" action="{{ route('clients-group.delete-all') }}" method="POST">
        @csrf
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all client groups?');">
           <i class="fa-solid fa-trash"></i> {{_("Delete All")}}
         </button>
       </form>

        
        
      </div><!--create-->
    </div><!--container-->

  </section><!--m-groups-->

  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/wow.min.js"></script>
  <!-- <script src="../js/main.js"></script> -->
  <script src="js/searchBar.js"></script>
  <script>
    new WOW().init();
  </script>
 
</body>

</html>