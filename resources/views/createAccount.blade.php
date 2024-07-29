@extends('layouts.app')
@section('content')
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
<!--navbar-site-->

  <!--login-->
  <form action="">
    <div class="container-fluid">
      <div class="login-page" id="log-page">
        <div class="container-fluid">
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

 <!--six-inmputs-->
<div class="titles-ourchange text-center mt-5 mb-5 text-capitalize">
  <div class="container">
    <h3>create account </h3>
  </div>
</div>
<form>
<div class="three-inputs">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> full name: <span>*</span></p>
        <input type="text"class="mt-3 mb-3" required>
      </div>
      <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> company name: <span>*</span></p>
        <input type="text"class="mt-3 mb-3" required>
      </div>
      <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> e-email: <span>*</span></p>
        <input type="text" class="mt-3 mb-3" required>
      </div>
      <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> username: <span>*</span></p>
        <input type="text"class="mt-3 mb-3" required>
      </div>
      <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> New Password:: <span>*</span></p>
        <input type="password" id="password-1" class="mt-3 mb-3" required>
      <span class="s-passwword" id="togglepassword-1" ><i class="fa-regular fa-eye"></i></span>
      </div>
      <div class="change text-capitalize d-flex">
        <p class="mt-3 mb-3"> Confirm Password: <span>*</span></p>
        <input type="password" id="password-2" class="mt-3 mb-3" required>
      <span class="s-passwword" id="togglepassword-2" ><i class="fa-regular fa-eye"></i></span>
      </div>
    </div>
  </div>
  </div>
</div>

<div class="agre text-capitalize mt-3 mb-0">
  <div class="container d-flex justify-content-center">
    <input type="checkbox" required>
    <label class="mt-2 mb-2">i accept <span>the ganeral teams and conditons</span></label>
   
  </div>
</div>
<div class="agre mt-0 mb-3">
  <div class="container d-flex  justify-content-center">
    <input type="checkbox" required  class="d-flex">
    <label class="mt-2 mb-2">receive the new features of my dso manager by email </label>
  </div>
</div>

<div class="modify text-center mt-5 mb-5 ">
  <button value="submit"><span> <i class="fa-solid fa-check"></i></span> modify</button>
 </div>
</form>
 <!--six-inmputs-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/script-3.js"></script>
    <script src="js/demo.js"></script>
  </body>
</html>
