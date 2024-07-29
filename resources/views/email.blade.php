@extends('layouts.app')
@section('content')
    <div class="w-100 border-0 p-4">
      <div class="">
        <div class="row mt-3">
          <div class="col-md-2">
            <h4>From :</h4>
          </div><!--l-1-->
          <div class="col-md-10">
            <a href="#" style="text-decoration: none; font-weight: bold;" class="text-primary">
              Paul Mayer < mohamed@gmail.com> </a>
            <div style=" display: flex; flex-wrap: wrap;" class="my-2">
              <p> <input type="checkbox" class="form-check-input mx-2" id="exampleChe">
                Lorem ipsum dolor sit amet.
              </p>
              <p> <input type="checkbox" class="form-check-input mx-2" id="exampleChe">
                Lorem ipsum dolor sit amet.
              </p>
            </div>
          </div><!--r-1-->
  
          <div class="col-md-2 mt-2">
            <select class="form-select" id="">
              <option value="" selected disabled> to :</option>
              <option value="option1">1</option>
              <option value="option1">2</option>
              <option value="option1">3</option>
            </select>
          </div><!--l-2-->
          <div class="col-md-10 mt-2">
            <select class="form-select" id="">
              <option value="" selected disabled> </option>
              <option value="option1">1</option>
              <option value="option1">2</option>
              <option value="option1">3</option>
            </select>
            <div style=" display: flex; flex-wrap: wrap;" class="my-2">
              <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span class="mx-1"><i
                    class="fa-solid fa-plus text-dark"></i></span>Add anoter acount</a>
              <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span class="mx-1"><i
                    class="fa-solid fa-plus text-dark"></i></span>Add an anoter acount</a>
            </div>
          </div><!--r-2-->
          <div class="col-md-2 mt-2">
            <h4 for="">Supject :</h4>
          </div><!--l-3-->
          <div class="col-md-10 mt-2">
            <input type="text" class="form-control " id=""
              value="  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consectetur!">
          </div><!--r-3-->
          <div class="col-md-2 mt-2">
            <h4 class="mb-5">Message :</h4>
            <p style="color: rgb(172, 169, 169); text-align: center;"><i class="fa-solid fa-hashtag hash mb-5"></i><br>
              Lorem ipsum dolor sit amet.</p>
          </div><!--l-4-->
          <div class="col-md-10 mt-2">
            <div class="editor-container mb-1">
              <div class="toolbar">
                <button onclick="execCmd('bold')"><i class="fas fa-bold"></i></button>
                <button onclick="execCmd('italic')"><i class="fas fa-italic"></i></button>
                <button onclick="execCmd('underline')"><i class="fas fa-underline"></i></button>
                <button onclick="execCmd('strikeThrough')"><i class="fas fa-strikethrough"></i></button>
                <button onclick="execCmd('justifyLeft')"><i class="fas fa-align-left"></i></button>
                <button onclick="execCmd('justifyCenter')"><i class="fas fa-align-center"></i></button>
                <button onclick="execCmd('justifyRight')"><i class="fas fa-align-right"></i></button>
                <button onclick="execCmd('justifyFull')"><i class="fas fa-align-justify"></i></button>
                <button onclick="execCmd('insertUnorderedList')"><i class="fas fa-list-ul"></i></button>
                <button onclick="execCmd('insertOrderedList')"><i class="fas fa-list-ol"></i></button>
                <button onclick="execCmd('createLink', prompt('Enter the URL:', 'http://'))"><i
                    class="fas fa-link"></i></button>
                <button onclick="execCmd('unlink')"><i class="fas fa-unlink"></i></button>
                <button onclick="insertImage()"><i class="fas fa-image"></i></button>
                <button onclick="insertTable()"><i class="fas fa-table"></i></button>
                <button onclick="toggleHTML()">Toggle HTML</button>
              </div>
              <div id="editor" class="form-control" contenteditable="true">
                Start typing here...
              </div>
            </div>
            <a href="#" style="text-decoration: none; color: rgb(155, 152, 152);"><span class="mx-1"><i
                  class="fa-solid fa-plus"></i></span>Add an item</a>
          </div><!--r-4-->
          <div class="col-md-4 mt-2">
  
          </div><!--l-5-->
          <div class="col-md-8 mt-2">
            <div class="row justify-content-end">
              <div class="col-md-6">
                <button class="btn btn-primary w-100 mt-3"><i class="fa-solid fa-eye"></i> Email preview</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-success w-100 mt-3"><i class="fa-solid fa-check"></i> Send the email <i class="fa-solid fa-plus"></i> complete the action</button>
              </div>
            </div>
          </div><!--r-5-->
        </div><!--row-->
      </div><!--modal-content-->
    </div><!--modal-->



    <!--scirpt Files-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="js/all.min.js"></script>
    <script src="./js/risk.js"></script>
    <script src="js/searchBar.js"></script>
    <script src="./js/email.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="./js/chart-10.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/maxshuty/accessible-web-components@latest/dist/simpleRange.min.js"></script>
    <!-- <script src="js/main.js" ></script> -->
    <!--scirpt Files-->
  </body>
</html>
