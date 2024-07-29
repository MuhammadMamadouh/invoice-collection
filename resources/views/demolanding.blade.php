@extends('layouts.app')
@section('content')
<!--nav-demo-->
  <div class="nav-demo cairo-uniquifier">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa-solid fa-bars p-1"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item1 mt-2 mb-2">
              <a class="nav-link active" aria-current="page" href="createAccount.html"><span><i class="fa-solid fa-pen"></i></span>subscripion</a>
            </li>
            <li class="nav-item2 mt-2 mb-2">
              <a class="nav-link" id="login" onclick="showPage" href="#"><span><i class="fa-solid fa-user"></i></span>login</a>
            </li>
            <div class="line"></div>
            <li class="nav-item3 mt-2 mb-2">
              <a class="nav-link" href="#">demo</a>
            </li>
            <li class="nav-item4 mt-2 mb-2">
              <a class="nav-link" href="#"><img src="img/icon-flag.png" class="img-fluid" alt=""> en</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

<!--nav-demo-->

  <!--login-->
  <form action="">
    <div class="container">
      <div class="login-page" id="log-page">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="title-and-close d-flex justify-content-center ">
                <h6 class="text-uppercase text-start mt-3 m-3">login my dso manager <span><i class="fa-solid fa-lock"></i></span></h6>
                  <span id="close" class="text-end"><i class="fa-solid fa-xmark"></i></span>
                </div>
              <div class="input-log d-flex  justify-content-center mt-5 mb-5">
                <p class="text-capitalize">username:</p>
                <input type="name"  required>
              </div>
              <div class="input-log d-flex justify-content-center">
                <p class="text-capitalize">password:</p>
                <input type="password" id="password" required>
                <span id="togglepassword" class=""><i class="fa-regular fa-eye"></i></span>
            </div>
            </div>
            <div class="sign-in-button text-center mt-4 mb-4">
              <button value="submit">sign in</button>
            </div>
    </div>
    <div class="forger-password-and-sub text-capitalize text-center">
      <a href="#" id="addpagepassword">forgetpassword</a>
      <span>|</span>
      <a href="createAccount.html">subscribe</a>
    </div>
      </div>
      </div>
    </div>
    </form>

<!--forget-passwword-->
<form >
    <div class="container">
      <div class="forget-page" id="forgetpassword">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="title-and-close d-flex justify-content-between ">
                <h6 class="text-uppercase  mt-3 m-3">forgten password</h6>
                  <span id="close-2" class="text-end"><i class="fa-solid fa-xmark"></i></span>
                </div>
              <div class="input-log d-flex  justify-content-center mt-5 mb-5">
                <p class="text-capitalize">E-mail:</p>
                <input type="text"   required>
              </div>
              <div class="input-log d-flex  justify-content-center ">
                <p class="text-capitalize">username :</p>
                <input type="text"  required>
              </div>
            </div>
            <div class="submit-button text-center mt-4 mb-4">
              <button value="submit"><span><i class="fa-solid fa-check"></i></span> submit</button>
            </div>
    </div>
      </div>
      </div>
    </div>
    </form>


      <!--forget password-->

<!--content deemo page-->

<div class="content mt-5 mb-5 text-center">
  <div class="container">
    <h4 class="mt-3 mb-3 text-center">you must be logged in to acess this page</h4>
    <div class="row">
      <div class="col-12">       
        <a href="#">sign in</a>
        <a href="risk-1.html">see the demo</a>
      </div>
      </div>
      <div class="message text-end">
        <a href="#"><i class="fa-regular fa-envelope"></i></a>
      </div>
    </div>
  </div>
</div>


   <!--scirpt Files-->

   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script>new WOW().init();</script>
   <script src="js/all.min.js"></script>
   <!-- <script src="js/main.js" ></script> -->
   <script src="js/demo.js"></script>
   <!--scirpt Files-->
</body>
</html>