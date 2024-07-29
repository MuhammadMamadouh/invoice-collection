@extends('app')
@section('content')
@include('layouts.navbar')

<!--start-3three-inputs-->
<div class="titles-ourchange text-center mt-5 mb-5 text-capitalize">
  <div class="container">
    <h3>change password </h3>
  </div>
</div>
<form>
<div class="three-inputs">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> your account password: <span>*</span></p>
        <input type="password" id="password-1" class="mt-3 mb-3" required>
      <span class="s-passwword" id="togglepassword-1" ><i class="fa-regular fa-eye"></i></span>
      </div>
      
      <div class="change change-2 text-capitalize d-flex">
        <p class="mt-3 mb-3">new password: <span>*</span></p>
        <input type="password" id="password-2" class="mt-3 mb-3" required>
       <span class="s-passwword" id="togglepassword-2"><i class="fa-regular fa-eye"></i></span>
      </div>
      <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> confirm password: <span>*</span></p>
        <input type="password" id="password-3"  class="mt-3 mb-3" required>
       <span class="s-passwword" id="togglepassword-3"><i class="fa-regular fa-eye"></i></span>
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
    <script src="js/script-2.js"></script>
    <script src="js/searchBar.js"></script>
  </body>
</html>
