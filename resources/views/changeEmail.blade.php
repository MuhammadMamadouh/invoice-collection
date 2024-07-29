@extends('app')
@section('content')
@include('layouts.navbar')
<!--navbar-site-->

<!-- <div class="message mt-5 mb-5" id="meesage">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span id="close" class="text-end"><i class="fa-solid fa-xmark"></i></span>
        <p class="text-dark text-center mt-5 mb-5">Would You Like To Learn Morre About My DSO Manager And <br> Have A Personalized Demo?
        </p>
      </div>
      <div class="button-click d-flex justify-content-around text-dark">
        <button><i class="fa-solid fa-check"></i> YES</button>
        <button> no,thank you</button>
      </div>
    </div>
  </div>
</div> -->

<!--start-2two-inputs-->
<div class="titles-ourchange text-center mt-5 mb-5 text-capitalize">
  <div class="container">
    <h3>change email address </h3>
  </div>
</div>
<form>
<div class="three-inputs">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> E-mail: <span>*</span></p>
        <input type="password" id="password-1" class="mt-3 mb-3" required>
      <span class="s-passwword" id="togglepassword-1" ><i class="fa-regular fa-eye"></i></span>
      </div>
      
      <div class="change change-2 text-capitalize d-flex">
        <p class="mt-3 mb-3">your account password: <span>*</span></p>
        <input type="password" id="password-2" class="mt-3 mb-3" required>
       <span class="s-passwword" id="togglepassword-2"><i class="fa-regular fa-eye"></i></span>
      </div>
    </div>
  </div>
  <div class="modify text-center mt-5 mb-5 ">
   <button value="submit"><span> <i class="fa-solid fa-check"></i></span> modify</button>
  </div>
  </div>
</div>
</form>

<!--start-3three-inputs-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/searchBar.js"></script>
    <script src="js/script-2.js"></script>
  </body>
</html>
