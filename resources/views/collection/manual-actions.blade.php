@extends('layouts.dashboard.app')
@section('content')
<div id="myModal" class="modal">
    <div class="modal-content">
      <div class="new-holab-1" id="hide-hoalp-1">
        <div class="d-flex justify-content-end me-4 ">
          <a href="email.html" target="_blank"><svg class="svg-inline--fa fa-maximize text-primary p-2 bg-light" style="
          font-size: 15px;
          cursor: pointer;
          border-radius: 5px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="maximize" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M447.1 319.1v135.1c0 13.26-10.75 23.1-23.1 23.1h-135.1c-12.94 0-24.61-7.781-29.56-19.75c-4.906-11.1-2.203-25.72 6.937-34.87l30.06-30.06L224 323.9l-71.43 71.44l30.06 30.06c9.156 9.156 11.91 22.91 6.937 34.87C184.6 472.2 172.9 479.1 160 479.1H24c-13.25 0-23.1-10.74-23.1-23.1v-135.1c0-12.94 7.781-24.61 19.75-29.56C23.72 288.8 27.88 288 32 288c8.312 0 16.5 3.242 22.63 9.367l30.06 30.06l71.44-71.44L84.69 184.6L54.63 214.6c-9.156 9.156-22.91 11.91-34.87 6.937C7.798 216.6 .0013 204.9 .0013 191.1v-135.1c0-13.26 10.75-23.1 23.1-23.1h135.1c12.94 0 24.61 7.781 29.56 19.75C191.2 55.72 191.1 59.87 191.1 63.1c0 8.312-3.237 16.5-9.362 22.63L152.6 116.7l71.44 71.44l71.43-71.44l-30.06-30.06c-9.156-9.156-11.91-22.91-6.937-34.87c4.937-11.95 16.62-19.75 29.56-19.75h135.1c13.26 0 23.1 10.75 23.1 23.1v135.1c0 12.94-7.781 24.61-19.75 29.56c-11.1 4.906-25.72 2.203-34.87-6.937l-30.06-30.06l-71.43 71.43l71.44 71.44l30.06-30.06c9.156-9.156 22.91-11.91 34.87-6.937C440.2 295.4 447.1 307.1 447.1 319.1z"></path></svg><!-- <i class="fa-solid fa-maximize text-primary p-2 bg-light" style="
          font-size: 15px;
          cursor: pointer;
          border-radius: 5px;
        "></i> Font Awesome fontawesome.com --></a>
        </div>
        <span class="closeBtn">×</span>
        <div class="row mt-3">
          <div class="col-md-2">
            <h4>From :</h4>
          </div><!--l-1-->
          <div class="col-md-10">
            <a href="#" style="text-decoration: none; font-weight: bold;" class="text-primary">
              Paul Mayer &lt; mohamed@gmail.com&gt; </a>
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
              <option value="" selected="" disabled=""> to :</option>
              <option value="option1">1</option>
              <option value="option1">2</option>
              <option value="option1">3</option>
            </select>
          </div><!--l-2-->
          <div class="col-md-10 mt-2">
            <select class="form-select" id="">
              <option value="" selected="" disabled=""> </option>
              <option value="option1">1</option>
              <option value="option1">2</option>
              <option value="option1">3</option>
            </select>
            <div style=" display: flex; flex-wrap: wrap;" class="my-2">
              <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span class="mx-1"><svg class="svg-inline--fa fa-plus text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <i class="fa-solid fa-plus text-dark"></i> Font Awesome fontawesome.com --></span>Add anoter acount</a>
              <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span class="mx-1"><svg class="svg-inline--fa fa-plus text-dark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <i class="fa-solid fa-plus text-dark"></i> Font Awesome fontawesome.com --></span>Add an anoter acount</a>
            </div>
          </div><!--r-2-->
          <div class="col-md-2 mt-2">
            <h4 for="">Supject :</h4>
          </div><!--l-3-->
          <div class="col-md-10 mt-2">
            <input type="text" class="form-control " id="" value="  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consectetur!">
          </div><!--r-3-->
          <div class="col-md-2 mt-2">
            <h4 class="mb-5">Message :</h4>
            <p style="color: rgb(172, 169, 169); text-align: center;"><svg class="svg-inline--fa fa-hashtag hash mb-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hashtag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 127.1h-58.23l9.789-58.74c2.906-17.44-8.875-33.92-26.3-36.83c-17.53-2.875-33.92 8.891-36.83 26.3L292.9 127.1H197.8l9.789-58.74c2.906-17.44-8.875-33.92-26.3-36.83c-17.53-2.875-33.92 8.891-36.83 26.3L132.9 127.1H64c-17.67 0-32 14.33-32 32C32 177.7 46.33 191.1 64 191.1h58.23l-21.33 128H32c-17.67 0-32 14.33-32 32c0 17.67 14.33 31.1 32 31.1h58.23l-9.789 58.74c-2.906 17.44 8.875 33.92 26.3 36.83C108.5 479.9 110.3 480 112 480c15.36 0 28.92-11.09 31.53-26.73l11.54-69.27h95.12l-9.789 58.74c-2.906 17.44 8.875 33.92 26.3 36.83C268.5 479.9 270.3 480 272 480c15.36 0 28.92-11.09 31.53-26.73l11.54-69.27H384c17.67 0 32-14.33 32-31.1c0-17.67-14.33-32-32-32h-58.23l21.33-128H416c17.67 0 32-14.32 32-31.1C448 142.3 433.7 127.1 416 127.1zM260.9 319.1H165.8L187.1 191.1h95.12L260.9 319.1z"></path></svg><!-- <i class="fa-solid fa-hashtag hash mb-5"></i> Font Awesome fontawesome.com --><br>
              Lorem ipsum dolor sit amet.</p>
          </div><!--l-4-->
          <div class="col-md-10 mt-2">
            <div class="editor-container mb-1">
              <div class="toolbar">
                <button onclick="execCmd('bold')"><svg class="svg-inline--fa fa-bold" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bold" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M321.1 242.4C340.1 220.1 352 191.6 352 160c0-70.59-57.42-128-128-128L32 32.01c-17.67 0-32 14.31-32 32s14.33 32 32 32h16v320H32c-17.67 0-32 14.31-32 32s14.33 32 32 32h224c70.58 0 128-57.41 128-128C384 305.3 358.6 264.8 321.1 242.4zM112 96.01H224c35.3 0 64 28.72 64 64s-28.7 64-64 64H112V96.01zM256 416H112v-128H256c35.3 0 64 28.71 64 63.1S291.3 416 256 416z"></path></svg><!-- <i class="fas fa-bold"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('italic')"><svg class="svg-inline--fa fa-italic" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="italic" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64.01c0 17.69-14.31 32-32 32h-58.67l-133.3 320H224c17.69 0 32 14.31 32 32s-14.31 32-32 32H32c-17.69 0-32-14.31-32-32s14.31-32 32-32h58.67l133.3-320H160c-17.69 0-32-14.31-32-32s14.31-32 32-32h192C369.7 32.01 384 46.33 384 64.01z"></path></svg><!-- <i class="fas fa-italic"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('underline')"><svg class="svg-inline--fa fa-underline" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="underline" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 448H32c-17.69 0-32 14.31-32 32s14.31 32 32 32h384c17.69 0 32-14.31 32-32S433.7 448 416 448zM48 64.01H64v160c0 88.22 71.78 159.1 160 159.1s160-71.78 160-159.1v-160h16c17.69 0 32-14.32 32-32s-14.31-31.1-32-31.1l-96-.0049c-17.69 0-32 14.32-32 32s14.31 32 32 32H320v160c0 52.94-43.06 95.1-96 95.1S128 276.1 128 224v-160h16c17.69 0 32-14.31 32-32s-14.31-32-32-32l-96 .0049c-17.69 0-32 14.31-32 31.1S30.31 64.01 48 64.01z"></path></svg><!-- <i class="fas fa-underline"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('strikeThrough')"><svg class="svg-inline--fa fa-strikethrough" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="strikethrough" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M332.2 319.9c17.22 12.17 22.33 26.51 18.61 48.21c-3.031 17.59-10.88 29.34-24.72 36.99c-35.44 19.75-108.5 11.96-186-19.68c-16.34-6.686-35.03 1.156-41.72 17.53s1.188 35.05 17.53 41.71c31.75 12.93 95.69 35.37 157.6 35.37c29.62 0 58.81-5.156 83.72-18.96c30.81-17.09 50.44-45.46 56.72-82.11c3.998-23.27 2.168-42.58-3.488-59.05H332.2zM488 239.9l-176.5-.0309c-15.85-5.613-31.83-10.34-46.7-14.62c-85.47-24.62-110.9-39.05-103.7-81.33c2.5-14.53 10.16-25.96 22.72-34.03c20.47-13.15 64.06-23.84 155.4 .3438c17.09 4.531 34.59-5.654 39.13-22.74c4.531-17.09-5.656-34.59-22.75-39.12c-91.31-24.18-160.7-21.62-206.3 7.654C121.8 73.72 103.6 101.1 98.09 133.1C89.26 184.5 107.9 217.3 137.2 239.9L24 239.9c-13.25 0-24 10.75-24 23.1c0 13.25 10.75 23.1 24 23.1h464c13.25 0 24-10.75 24-23.1C512 250.7 501.3 239.9 488 239.9z"></path></svg><!-- <i class="fas fa-strikethrough"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('justifyLeft')"><svg class="svg-inline--fa fa-align-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H256C273.7 32 288 46.33 288 64C288 81.67 273.7 96 256 96zM256 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H256C273.7 288 288 302.3 288 320C288 337.7 273.7 352 256 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z"></path></svg><!-- <i class="fas fa-align-left"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('justifyCenter')"><svg class="svg-inline--fa fa-align-center" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-center" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M320 96H128C110.3 96 96 81.67 96 64C96 46.33 110.3 32 128 32H320C337.7 32 352 46.33 352 64C352 81.67 337.7 96 320 96zM416 224H32C14.33 224 0 209.7 0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224zM0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480H32C14.33 480 0 465.7 0 448zM320 352H128C110.3 352 96 337.7 96 320C96 302.3 110.3 288 128 288H320C337.7 288 352 302.3 352 320C352 337.7 337.7 352 320 352z"></path></svg><!-- <i class="fas fa-align-center"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('justifyRight')"><svg class="svg-inline--fa fa-align-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 96H192C174.3 96 160 81.67 160 64C160 46.33 174.3 32 192 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96zM416 352H192C174.3 352 160 337.7 160 320C160 302.3 174.3 288 192 288H416C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z"></path></svg><!-- <i class="fas fa-align-right"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('justifyFull')"><svg class="svg-inline--fa fa-align-justify" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-justify" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96zM416 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H416C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z"></path></svg><!-- <i class="fas fa-align-justify"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('insertUnorderedList')"><svg class="svg-inline--fa fa-list-ul" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-ul" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M16 96C16 69.49 37.49 48 64 48C90.51 48 112 69.49 112 96C112 122.5 90.51 144 64 144C37.49 144 16 122.5 16 96zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128 160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7 384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3 384 192 384H480zM16 416C16 389.5 37.49 368 64 368C90.51 368 112 389.5 112 416C112 442.5 90.51 464 64 464C37.49 464 16 442.5 16 416zM112 256C112 282.5 90.51 304 64 304C37.49 304 16 282.5 16 256C16 229.5 37.49 208 64 208C90.51 208 112 229.5 112 256z"></path></svg><!-- <i class="fas fa-list-ul"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('insertOrderedList')"><svg class="svg-inline--fa fa-list-ol" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list-ol" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M55.1 56.04C55.1 42.78 66.74 32.04 79.1 32.04H111.1C125.3 32.04 135.1 42.78 135.1 56.04V176H151.1C165.3 176 175.1 186.8 175.1 200C175.1 213.3 165.3 224 151.1 224H71.1C58.74 224 47.1 213.3 47.1 200C47.1 186.8 58.74 176 71.1 176H87.1V80.04H79.1C66.74 80.04 55.1 69.29 55.1 56.04V56.04zM118.7 341.2C112.1 333.8 100.4 334.3 94.65 342.4L83.53 357.9C75.83 368.7 60.84 371.2 50.05 363.5C39.26 355.8 36.77 340.8 44.47 330.1L55.59 314.5C79.33 281.2 127.9 278.8 154.8 309.6C176.1 333.1 175.6 370.5 153.7 394.3L118.8 432H152C165.3 432 176 442.7 176 456C176 469.3 165.3 480 152 480H64C54.47 480 45.84 474.4 42.02 465.6C38.19 456.9 39.9 446.7 46.36 439.7L118.4 361.7C123.7 355.9 123.8 347.1 118.7 341.2L118.7 341.2zM512 64C529.7 64 544 78.33 544 96C544 113.7 529.7 128 512 128H256C238.3 128 224 113.7 224 96C224 78.33 238.3 64 256 64H512zM512 224C529.7 224 544 238.3 544 256C544 273.7 529.7 288 512 288H256C238.3 288 224 273.7 224 256C224 238.3 238.3 224 256 224H512zM512 384C529.7 384 544 398.3 544 416C544 433.7 529.7 448 512 448H256C238.3 448 224 433.7 224 416C224 398.3 238.3 384 256 384H512z"></path></svg><!-- <i class="fas fa-list-ol"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('createLink', prompt('Enter the URL:', 'http://'))"><svg class="svg-inline--fa fa-link" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z"></path></svg><!-- <i class="fas fa-link"></i> Font Awesome fontawesome.com --></button>
                <button onclick="execCmd('unlink')"><svg class="svg-inline--fa fa-link-slash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link-slash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M185.7 120.3C242.5 75.82 324.7 79.73 376.1 131.1C420.1 175.1 430.9 239.6 406.7 293.5L438.6 318.4L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.1 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.732 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L489.3 358.2L630.8 469.1C641.2 477.3 643.1 492.4 634.9 502.8C626.7 513.2 611.6 515.1 601.2 506.9L9.196 42.89C-1.236 34.71-3.065 19.63 5.112 9.196C13.29-1.236 28.37-3.065 38.81 5.112L185.7 120.3zM238.1 161.1L353.4 251.7C359.3 225.5 351.7 197.2 331.7 177.2C306.6 152.1 269.1 147 238.1 161.1V161.1zM263 380C233.1 350.1 218.7 309.8 220.9 270L406.6 416.4C357.4 431 301.9 418.9 263 380V380zM116.6 187.9L167.2 227.8L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L116.6 187.9z"></path></svg><!-- <i class="fas fa-unlink"></i> Font Awesome fontawesome.com --></button>
                <button onclick="insertImage()"><svg class="svg-inline--fa fa-image" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M447.1 32h-384C28.64 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1 64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM111.1 96c26.51 0 48 21.49 48 48S138.5 192 111.1 192s-48-21.49-48-48S85.48 96 111.1 96zM446.1 407.6C443.3 412.8 437.9 416 432 416H82.01c-6.021 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.334-16.68l70-96C142.1 290.4 146.9 288 152 288s9.916 2.441 12.93 6.574l32.46 44.51l93.3-139.1C293.7 194.7 298.7 192 304 192s10.35 2.672 13.31 7.125l128 192C448.6 396 448.9 402.3 446.1 407.6z"></path></svg><!-- <i class="fas fa-image"></i> Font Awesome fontawesome.com --></button>
                <button onclick="insertTable()"><svg class="svg-inline--fa fa-table" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM224 256V160H64V256H224zM64 320V416H224V320H64zM288 416H448V320H288V416zM448 256V160H288V256H448z"></path></svg><!-- <i class="fas fa-table"></i> Font Awesome fontawesome.com --></button>
                <button onclick="toggleHTML()">Toggle HTML</button>
              </div>
              <div id="editor" class="form-control" contenteditable="true">
                Start typing here...
              </div>
            </div>
            <a href="#" style="text-decoration: none; color: rgb(155, 152, 152);"><span class="mx-1"><svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <i class="fa-solid fa-plus"></i> Font Awesome fontawesome.com --></span>Add an item</a>
          </div><!--r-4-->
          <div class="col-md-4 mt-2">
  
          </div><!--l-5-->
          <div class="tw-btn-holab d-flex justify-content-end">
  
            <div class="col-md-8 mt-2">
              <div class="row">
                <div class="col-lg-6">
                  <button class="btn btn-primary w-100 mt-3" id="hollabTwoShow" onclick="showHollabTwo()"><svg class="svg-inline--fa fa-eye" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path></svg><!-- <i class="fa-solid fa-eye"></i> Font Awesome fontawesome.com --> Email preview</button>
                </div>
                <div class="col-lg-6">
                  <button class="btn btn-success w-100 mt-3"><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com --> Send the email <svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <i class="fa-solid fa-plus"></i> Font Awesome fontawesome.com --> complete the action</button>
                </div>
              </div>
            </div>
          </div><!--r-5-->
        </div><!--row-->
      
      </div>
       <!--new-Holap-->
 <div class="new-holap-2 d-none " id="hide-hoalp-2">
  <div class="container">
    <div class="row">
      <div class="close-btn-span d-flex justify-content-end me-3">
        <a href="email-preview.html" target="_blank"><svg class="svg-inline--fa fa-maximize text-primary p-2 bg-light" style="
          font-size: 15px;
          cursor: pointer;
          border-radius: 5px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="maximize" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M447.1 319.1v135.1c0 13.26-10.75 23.1-23.1 23.1h-135.1c-12.94 0-24.61-7.781-29.56-19.75c-4.906-11.1-2.203-25.72 6.937-34.87l30.06-30.06L224 323.9l-71.43 71.44l30.06 30.06c9.156 9.156 11.91 22.91 6.937 34.87C184.6 472.2 172.9 479.1 160 479.1H24c-13.25 0-23.1-10.74-23.1-23.1v-135.1c0-12.94 7.781-24.61 19.75-29.56C23.72 288.8 27.88 288 32 288c8.312 0 16.5 3.242 22.63 9.367l30.06 30.06l71.44-71.44L84.69 184.6L54.63 214.6c-9.156 9.156-22.91 11.91-34.87 6.937C7.798 216.6 .0013 204.9 .0013 191.1v-135.1c0-13.26 10.75-23.1 23.1-23.1h135.1c12.94 0 24.61 7.781 29.56 19.75C191.2 55.72 191.1 59.87 191.1 63.1c0 8.312-3.237 16.5-9.362 22.63L152.6 116.7l71.44 71.44l71.43-71.44l-30.06-30.06c-9.156-9.156-11.91-22.91-6.937-34.87c4.937-11.95 16.62-19.75 29.56-19.75h135.1c13.26 0 23.1 10.75 23.1 23.1v135.1c0 12.94-7.781 24.61-19.75 29.56c-11.1 4.906-25.72 2.203-34.87-6.937l-30.06-30.06l-71.43 71.43l71.44 71.44l30.06-30.06c9.156-9.156 22.91-11.91 34.87-6.937C440.2 295.4 447.1 307.1 447.1 319.1z"></path></svg><!-- <i class="fa-solid fa-maximize text-primary p-2 bg-light" style="
          font-size: 15px;
          cursor: pointer;
          border-radius: 5px;
        "></i> Font Awesome fontawesome.com --></a>
        <span class="closeBtn" onclick="closeBtnHolabs()">×</span>
      </div>
      <div class="email-from d-flex mt-3 ">
        <span class="mx-3">From:</span>
        <a href="#">Paul Mayer demo@mydsomanager.com&gt;</a>
        <span class="mx-3">(Role : Collector)</span>
      </div>
      <div class="email-send d-flex justify-content-center ">
        <div class="col-lg-2 mt-2 mt-2 mb-2">
          <select class="form-select" aria-label="Default select example">
            <option selected="">To:</option>
            <option value="1">Cc:</option>
            <option value="2">Bb:</option>
          </select>
        </div>
        <div class="col-lg-10 mt-2 mb-2">
          <select class="form-select" aria-label="Default select example">
            <option selected=""></option>
            <option value="0"></option>
            <option class="blue-colors-value" value="1">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>
            <option class="blue-colors-value" value="2">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>
            <option class="gren-colors-value" value="3">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>
            <option class="gren-colors-value" value="4">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>
            <option class="gren-colors-value" value="5">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>
            <option class="gren-colors-value" value="6">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>
            <option class="gren-colors-value" value="7">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>
            <option class="gren-colors-value" value="8">vero Migust&lt; veronique.miguest@demossoultions.com&gt;
                (Role:credit Manger ) </option>

          </select>
        </div>
      </div>
      <div class="container">
        <div id="recipientContainer">
        </div>
      </div>
      <div class="container">
        <div id="recipientContainer-2">
        </div>
      </div>
      <div class="add-input mt-3 mb-3 d-flx">
        <span><i class="fa-soid fa-plus"></i></span>
        <button id="addinputs">Add another recipient</button>
        <span><i class="fa-soid fa-plus"></i></span>
        <button id="addinputs-2"> Add an external recipient</button>
      </div>
      <div class="emil-para-2 mt-3 mb-3">
        <p class="text-capitalize mt-3 mb-3">Facture(s) Business Solutions en attente de paiement - Hopital
          Necplus - 341291</p>
      </div>
      <div class="email-prev">
        onjour, <br>

        Je vous prie de bien vouloir trouver ci-dessous le relevé détaillé de votre compte présentant à ce jour un
        solde dû de 12 956,16 €. <br>

        Nous sommes sûrs que vous avez simplement omis de nous envoyer votre paiement et vous serions
        reconnaissants de régulariser cette situation dès que possible. <br>

        N'hésitez pas à cliquer sur le bouton suivant pour nous faire part de vos commentaires :
        <div class="view-button mt-3 mb-3">
          <a href="account-statement.html" class="btn btn-success"><span><svg class="svg-inline--fa fa-comments" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M416 176C416 78.8 322.9 0 208 0S0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176zM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160c-.3145 0-.6191 .041-.9336 .043C447.5 165.3 448 170.6 448 176c0 98.62-79.68 181.2-186.1 202.5C282.7 455.1 357.1 512 448 512c33.69 0 65.32-8.008 92.85-21.98C565.2 502 596.1 512 632.3 512c3.059 0 5.76-1.725 7.02-4.605c1.229-2.879 .6582-6.148-1.441-8.354C637.6 498.7 615.9 475.3 599.6 443.7z"></path></svg><!-- <i class="fa-solid fa-comments"></i> Font Awesome fontawesome.com --></span> Consulter mon état
            de compte</a>
        </div>
        <div class="descri">
          <p> Dans l'attente de votre règlement rapide, nous restons à votre disposition pour toute information
            complémentaire. <br>

            Cordialement,</p>
        </div>
        <div class="the-cloumn  d-flex align-items-center mb-3">
          <img src="img/person2.jpg" class="img-fluid" alt="">
          <div class="name text-center">
            <h6 class="mt-3 mb-3">Paul Mayer</h6>
            <p class="mt-3 mb-3">Credit manager <br>
              +33 4 12 34 56 78 <br>
              +33 6 06 06 06 00 <br>
              Business Solutions</p>
            <a href="#">http://www.demo-solutions.com </a>
          </div>
          <div class="logo-mail">
            <img src="img/logo.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="client-code">
          <h6>Code client: 341291</h6>
          <div class="client-codes d-flex justify-content-between align-items-center">
            <p><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> Cliquez sur le N° de pièce pour avoir plus
              d'informations et laisser un commentaire:</p>
            <div class="this-buttons">
              <button type="button" class="btn text-light"><span><svg class="svg-inline--fa fa-download" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"></path></svg><!-- <i class="fa-solid fa-download"></i> Font Awesome fontawesome.com --> </span>Export this data to excel</button>
            </div>
          </div>
          <div class="tabels-emails">
            <div class="container-fluid">
              <div class="table-responsive mt-3 mb-3">
                <table class="table table-bordered">
                  <thead class="thead-dark ">
                    <tr class="text-center">
                      <th>#</th>
                      <th>N° pièce </th>
                      <th>Société</th>
                      <th>N° commande</th>
                      <th>Date émission</th>
                      <th>Date échéance</th>
                      <th>Retard</th>
                      <th>Montant
                        initial TTC</th>
                      <th>Montant
                        restant TTC</th>
                      <th>Statut</th>
                      <th>Champ personnalisé
                        #2</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td style="background: #f0f0f0;">1</td>
                      <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href=""> 3794</a></td>
                      <td>Hopital Necplus</td>
                      <td>227107 </td>
                      <td>21-03-2024</td>
                      <td>14-04-2024</td>
                      <td>69 j </td>
                      <td>5 544,00 $</td>
                      <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                      <td>5 544,00 $</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="background: #f0f0f0;">2</td>
                      <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href=""> 3794</a></td>
                      <td>Hopital Necplus</td>
                      <td>227107 </td>
                      <td>21-03-2024</td>
                      <td>14-04-2024</td>
                      <td>69 j </td>
                      <td>5 544,00 $</td>
                      <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                      <td>5 544,00 $</td>
                      <td></td>

                    </tr>
                    <tr>
                      <td colspan="8" class="text-end">April 2024 - Total </td>
                      <td>7,112.64 € </td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="tabels-emails">
            <div class="container-fluid">
              <div class="table-responsive mt-3 mb-3">
                <table class="table table-bordered">
                  <tbody class="text-center">
                    <tr>
                      <td style="background: #f0f0f0;">3</td>
                      <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href=""> 3794</a></td>
                      <td>Hopital Necplus</td>
                      <td>181403</td>
                      <td>08-03-2024</td>
                      <td>23-06-2024</td>
                      <td>-1 j</td>
                      <td>3 050,81 € </td>
                      <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td colspan="8" class="text-end">Juin 2024 - Total </td>
                      <td>7,112.64 € </td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="end-of-total">
              <p> <strong>Encours total</strong> : 16 006,97 €</p>
            </div>
          </div>
        </div>
      </div>
      <div class="add-itemes mt-3 mb-3">
        <div class="container">
          <div class="col-12">
            <button class="mt-3" id="show-items-button"><span class="text-black-50"><svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"></path></svg><!-- <i class="fa-solid fa-pen"></i> Font Awesome fontawesome.com --></span> add an item</button>
            <div class="show-items  d-block bg-light" style="font-size: 6px;">
              <div id="item-contents">
                <div class="addimg">
                  <img src="" alt="" id="changeimgs">
                </div>
                <input id="inpchange" class="mt-3" type="file">
                <p class=" mb-2" style="font-size: 14px;">(.pdf or .docx or .xlsx or .txt or .jpg or .png ...)•Max
                  size: 15 MB</p>
                <textarea style="width:100%; outline: none; padding: 5px; border: 2px solid #efefef; border-radius: 5px; resize: both;"></textarea>
                <button class=""><svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <i class="fa-solid fa-plus"></i> Font Awesome fontawesome.com --> add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tw-btn-holab d-flex justify-content-end">
        <div class="col-md-8 mt-2">
          <div class="row ">
            <div class="col-lg-6">
              <button class="btn btn-primary mt-3 w-100" id="hollabTwoShow" onclick="showHollab()"><svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"></path></svg><!-- <i class="fa-solid fa-pen"></i> Font Awesome fontawesome.com -->Modify</button>
            </div>
            <div class="col-lg-6">
              <button class="btn btn-success mt-3 w-100"><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path></svg><!-- <i class="fa-solid fa-check"></i> Font Awesome fontawesome.com -->send the email +
                complete the action</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--new-Holap-->
    </div><!--modal-content-->

  </div>


  <div class="new-holap d-none " id="hide-hoalp">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="max-mize">
          <a href="email-preview.html" target="_blank" style="border-radius: 50%;" class="btn btn-primary text-end"><svg class="svg-inline--fa fa-maximize" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="maximize" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M447.1 319.1v135.1c0 13.26-10.75 23.1-23.1 23.1h-135.1c-12.94 0-24.61-7.781-29.56-19.75c-4.906-11.1-2.203-25.72 6.937-34.87l30.06-30.06L224 323.9l-71.43 71.44l30.06 30.06c9.156 9.156 11.91 22.91 6.937 34.87C184.6 472.2 172.9 479.1 160 479.1H24c-13.25 0-23.1-10.74-23.1-23.1v-135.1c0-12.94 7.781-24.61 19.75-29.56C23.72 288.8 27.88 288 32 288c8.312 0 16.5 3.242 22.63 9.367l30.06 30.06l71.44-71.44L84.69 184.6L54.63 214.6c-9.156 9.156-22.91 11.91-34.87 6.937C7.798 216.6 .0013 204.9 .0013 191.1v-135.1c0-13.26 10.75-23.1 23.1-23.1h135.1c12.94 0 24.61 7.781 29.56 19.75C191.2 55.72 191.1 59.87 191.1 63.1c0 8.312-3.237 16.5-9.362 22.63L152.6 116.7l71.44 71.44l71.43-71.44l-30.06-30.06c-9.156-9.156-11.91-22.91-6.937-34.87c4.937-11.95 16.62-19.75 29.56-19.75h135.1c13.26 0 23.1 10.75 23.1 23.1v135.1c0 12.94-7.781 24.61-19.75 29.56c-11.1 4.906-25.72 2.203-34.87-6.937l-30.06-30.06l-71.43 71.43l71.44 71.44l30.06-30.06c9.156-9.156 22.91-11.91 34.87-6.937C440.2 295.4 447.1 307.1 447.1 319.1z"></path></svg><!-- <i class="fa-solid fa-maximize"></i> Font Awesome fontawesome.com --></a>
        </div>
      <h2 class="text-capitalize text-center mt-3 mb-3">Email preview</h2>
      <button class="close-hollab btn btn-danger" onclick="show_popup()" id="popup"><span><svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <i class="fa-solid fa-close"></i> Font Awesome fontawesome.com --></span></button>
      <div class="emil-para">
        <p class="text-capitalize mt-3 mb-3 text-center">This automatic action will be sent in a few minutes between
          8:00 and 19:00</p>
      </div>
      <div class="email-from d-flex mt-3">
        <span class="mx-3">From:</span>
        <a href="#">Nicolas Grayson nicolas.durant@demosolutions.com nicolas.durant&gt;</a>
        <span class="mx-3">(Role : Collector)</span>
      </div>
      <div class="email-to d-flex  mt-3">
        <span class="mx-3">to:</span>
        <a href="#">Nicolas Grayson nicolas.durant@demosolutions.com nicolas.durant&gt;</a>
        <span class="mx-3">(Role : Other)</span>
      </div>
      <div class="emil-para-2 mt-3 mb-3">
        <p class="text-capitalize mt-3 mb-3">Pending invoice(s) Business Solutions - Eros Proin Ultrices Foundation (B)
          - 1040236</p>
      </div>
      <div class="email-prev">
        <p>
        Dear Client, <br>
        Please find below a statement of account showing a total outstanding of: 8,836.20 €. <br>
        We are sure that you simply forgot to send us your payment and we would be grateful if you could rectify this
        situation as soon as possible. <br>
        Don't hesitate to click on the following button to share your comments with us:</p>
        <div class="view-button mt-3 mb-3">
          <a href="account-statement.html" class="btn btn-success"><span><svg class="svg-inline--fa fa-comments" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M416 176C416 78.8 322.9 0 208 0S0 78.8 0 176c0 39.57 15.62 75.96 41.67 105.4c-16.39 32.76-39.23 57.32-39.59 57.68c-2.1 2.205-2.67 5.475-1.441 8.354C1.9 350.3 4.602 352 7.66 352c38.35 0 70.76-11.12 95.74-24.04C134.2 343.1 169.8 352 208 352C322.9 352 416 273.2 416 176zM599.6 443.7C624.8 413.9 640 376.6 640 336C640 238.8 554 160 448 160c-.3145 0-.6191 .041-.9336 .043C447.5 165.3 448 170.6 448 176c0 98.62-79.68 181.2-186.1 202.5C282.7 455.1 357.1 512 448 512c33.69 0 65.32-8.008 92.85-21.98C565.2 502 596.1 512 632.3 512c3.059 0 5.76-1.725 7.02-4.605c1.229-2.879 .6582-6.148-1.441-8.354C637.6 498.7 615.9 475.3 599.6 443.7z"></path></svg><!-- <i class="fa-solid fa-comments"></i> Font Awesome fontawesome.com --></span> View my account
            statement</a>
        </div>
        <div class="descri">
          <p>In anticipation of your payment, we remain at your disposal for any information you may need. <br>
            Best regards,</p>
        </div>
        <div class="the-cloumn  d-flex align-items-center mb-3">
          <img src="img/person2.jpg" class="img-fluid" alt="">
          <div class="name text-center">
            <h6 class="mt-3 mb-3">Nicolas Grayson</h6>
            <p class="mt-3 mb-3">0476459834 <br>
              0745296836 <br>
              Business Solutions</p>
            <a href="#">http://www.demo-solutions.com </a>
          </div>
          <div class="logo-mail">
            <img src="img/logo.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="client-code">
          <h6>Client code: 1040236</h6>
          <div class="client-codes d-flex justify-content-between align-items-center">
            <p><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> Click the Trans No. for more information and write a comment:</p>
            <div class="this-buttons">
            <button type="button" class="btn text-light"><span><svg class="svg-inline--fa fa-download" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"></path></svg><!-- <i class="fa-solid fa-download"></i> Font Awesome fontawesome.com --> </span>Export this data to excel</button>
              </div>
            </div>
            <div class="tabels-emails">
              <div class="container-fluid">
                <div class="table-responsive mt-3 mb-3">
                    <table class="table table-bordered">
                        <thead class="thead-dark ">
                            <tr class="text-center">
                                <th>#</th>
                                <th>Trans No.	</th>
                                <th>Company</th>
                                <th>Issue date</th>
                                <th>Due date	</th>
                                <th>	Overdue</th>
                                <th>Initial amount
                                  inc. Tax</th>
                                <th>Remaining
                                  amount inc. Tax</th>
                                <th>Custom
                                  field #2</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td style="background: #f0f0f0;">1</td>
                                <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href=""> 414472</a></td>
                                <td>Eros Proin Ultrices Foundation (B)</td>
                                <td>2024-04-05</td>
                                <td>2024-04-05</td>
                                <td>77 d</td>
                                <td>7,112.64 €	</td>
                                <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                                <td></td>
                            </tr>
                            <tr>
                              <td colspan="7" class="text-end">April 2024 - Total	</td>
                              <td>7,112.64 €	</td>
                              <td></td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <div class="tabels-emails">
              <div class="container-fluid">
                <div class="table-responsive mt-3 mb-3">
                    <table class="table table-bordered">
                        <tbody class="text-center">
                            <tr>
                                <td style="background: #f0f0f0;">2</td>
                                <td style="display: flex; "><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href="">_</a></td>
                                <td>Eros Proin Ultrices Foundation (B)</td>
                                <td>2024-04-05</td>
                                <td>2024-04-05</td>
                                <td>77 d</td>
                                <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                                <td>7,112.64 €	</td>
                            </tr>
                            <tr>
                              <td style="background: #f0f0f0;">3</td>
                              <td style="display: flex;"><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href="">414472</a></td>
                              <td>Eros Proin Ultrices Foundation (B)</td>
                              <td>2024-04-05</td>
                              <td>2024-04-05</td>
                              <td>77 d</td>
                              <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                              <td>7,112.64 €	</td>
                              <td></td>
                          </tr>
                          <tr>
                            <td style="background: #f0f0f0;">4</td>
                            <td style="display: flex; "><img src="img/pdficons.gif" style="width: 17px;" alt="" class="img-fluid"><a href="">_</a></td>
                            <td>Eros Proin Ultrices Foundation (B)</td>
                            <td>2024-04-05</td>
                            <td>2024-04-05</td>
                            <td>77 d</td>
                            <td style="display: flex; justify-content: space-between;">7,112.64 € <img src="img/card.png" style="width: 17px;" alt="" class="img-fluid"></td>
                            <td>7,112.64 €	</td>
                            <td></td>
                        </tr>
                        <tr>
                          <td colspan="7" class="text-end">April 2024 - Total	</td>
                          <td>7,112.64 €	</td>
                          <td></td>
                      </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
          </div>          
        </div>
</div>
</div>
</div>
</div>

<section class="mt-5">
          <div class="container-fluid ">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{route('collection.manual.actions')}}" class="m-1 w-100 btn btn-outline-light text-dark p-3">
                  <svg class="svg-inline--fa fa-hand-point-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hand-point-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"></path></svg><!-- <i class="fa-solid fa-hand-point-right"></i> Font Awesome fontawesome.com --> Manual actions
                  <span class="badge bg-danger">200</span>
                </a>
              </div> 
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{route('collection.automatic.actions')}}" class="m-1 w-100 btn btn-primary text-light p-3"><svg class="svg-inline--fa fa-arrows-rotate" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrows-rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 16c-17.67 0-32 14.31-32 32v74.09C392.1 66.52 327.4 32 256 32C161.5 32 78.59 92.34 49.58 182.2c-5.438 16.81 3.797 34.88 20.61 40.28c16.89 5.5 34.88-3.812 40.3-20.59C130.9 138.5 189.4 96 256 96c50.5 0 96.26 24.55 124.4 64H336c-17.67 0-32 14.31-32 32s14.33 32 32 32h128c17.67 0 32-14.31 32-32V48C496 30.31 481.7 16 464 16zM441.8 289.6c-16.92-5.438-34.88 3.812-40.3 20.59C381.1 373.5 322.6 416 256 416c-50.5 0-96.25-24.55-124.4-64H176c17.67 0 32-14.31 32-32s-14.33-32-32-32h-128c-17.67 0-32 14.31-32 32v144c0 17.69 14.33 32 32 32s32-14.31 32-32v-74.09C119.9 445.5 184.6 480 255.1 480c94.45 0 177.4-60.34 206.4-150.2C467.9 313 458.6 294.1 441.8 289.6z"></path></svg><!-- <i class="fa-solid fa-arrows-rotate"></i> Font Awesome fontawesome.com --> Automatic actions
                  <svg class="svg-inline--fa fa-triangle-exclamation" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="triangle-exclamation" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M506.3 417l-213.3-364c-16.33-28-57.54-28-73.98 0l-213.2 364C-10.59 444.9 9.849 480 42.74 480h426.6C502.1 480 522.6 445 506.3 417zM232 168c0-13.25 10.75-24 24-24S280 154.8 280 168v128c0 13.25-10.75 24-23.1 24S232 309.3 232 296V168zM256 416c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 401.9 273.4 416 256 416z"></path></svg><!-- <i class="fa-solid fa-triangle-exclamation"></i> Font Awesome fontawesome.com -->
                  <span class="badge bg-danger">184</span></a>
              </div>
              <!--btns-->
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="collectionActionsHistoy.html" class="m-1 w-100 btn btn-outline-light text-dark p-3"><svg class="svg-inline--fa fa-bars-staggered" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars-staggered" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM64 256C64 238.3 78.33 224 96 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H96C78.33 288 64 273.7 64 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path></svg><!-- <i class="fa-solid fa-bars-staggered"></i> Font Awesome fontawesome.com -->
                  Actions history</a>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="collectionAlerts.html" class="m-1 w-100 btn btn-outline-light text-dark p-3"><svg class="svg-inline--fa fa-bell" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z"></path></svg><!-- <i class="fa-solid fa-bell"></i> Font Awesome fontawesome.com -->
                  My Alerts
                  <span class="badge bg-danger">200</span></a>
              </div>
            </div>
            <hr>
            <div>
              <form class="row justify-content-center">
                <div class="col-lg-1 col-md-2 col-sm-3 dropdown">
                  <a class="dropdown-toggle text-primary form-control m-2" href="#" id="reportsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="svg-inline--fa fa-signal" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="signal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M544 0c-17.67 0-32 14.33-32 31.1V480C512 497.7 526.3 512 544 512s32-14.33 32-31.1V31.1C576 14.33 561.7 0 544 0zM160 288C142.3 288 128 302.3 128 319.1v160C128 497.7 142.3 512 160 512s32-14.33 32-31.1V319.1C192 302.3 177.7 288 160 288zM32 384C14.33 384 0 398.3 0 415.1v64C0 497.7 14.33 512 31.1 512S64 497.7 64 480V415.1C64 398.3 49.67 384 32 384zM416 96c-17.67 0-32 14.33-32 31.1V480C384 497.7 398.3 512 416 512s32-14.33 32-31.1V127.1C448 110.3 433.7 96 416 96zM288 192C270.3 192 256 206.3 256 223.1v256C256 497.7 270.3 512 288 512s32-14.33 32-31.1V223.1C320 206.3 305.7 192 288 192z"></path></svg><!-- <i class="fa-solid fa-signal"></i> Font Awesome fontawesome.com -->
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
                    <li><a class="dropdown-item text-primary" href="#" onclick="showCharts1()"><svg class="svg-inline--fa fa-hand-point-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hand-point-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"></path></svg><!-- <i class="fa-solid fa-hand-point-right"></i> Font Awesome fontawesome.com -->Actions to do</a></li>
                    <li><a class="dropdown-item text-primary" href="#" onclick="showCharts2()"><svg class="svg-inline--fa fa-thumbs-up" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="thumbs-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M128 447.1V223.1c0-17.67-14.33-31.1-32-31.1H32c-17.67 0-32 14.33-32 31.1v223.1c0 17.67 14.33 31.1 32 31.1h64C113.7 479.1 128 465.6 128 447.1zM512 224.1c0-26.5-21.48-47.98-48-47.98h-146.5c22.77-37.91 34.52-80.88 34.52-96.02C352 56.52 333.5 32 302.5 32c-63.13 0-26.36 76.15-108.2 141.6L178 186.6C166.2 196.1 160.2 210 160.1 224c-.0234 .0234 0 0 0 0L160 384c0 15.1 7.113 29.33 19.2 38.39l34.14 25.59C241 468.8 274.7 480 309.3 480H368c26.52 0 48-21.47 48-47.98c0-3.635-.4805-7.143-1.246-10.55C434 415.2 448 397.4 448 376c0-9.148-2.697-17.61-7.139-24.88C463.1 347 480 327.5 480 304.1c0-12.5-4.893-23.78-12.72-32.32C492.2 270.1 512 249.5 512 224.1z"></path></svg><!-- <i class="fa-solid fa-thumbs-up"></i> Font Awesome fontawesome.com --> Actions done</a>
                    </li>
                    <li><a class="dropdown-item text-primary" href="#" onclick="showCharts3()"><svg class="svg-inline--fa fa-clock-rotate-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock-rotate-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C201.7 512 151.2 495 109.7 466.1C95.2 455.1 91.64 436 101.8 421.5C111.9 407 131.8 403.5 146.3 413.6C177.4 435.3 215.2 448 256 448C362 448 448 362 448 256C448 149.1 362 64 256 64C202.1 64 155 85.46 120.2 120.2L151 151C166.1 166.1 155.4 192 134.1 192H24C10.75 192 0 181.3 0 168V57.94C0 36.56 25.85 25.85 40.97 40.97L74.98 74.98C121.3 28.69 185.3 0 255.1 0L256 0zM256 128C269.3 128 280 138.7 280 152V246.1L344.1 311C354.3 320.4 354.3 335.6 344.1 344.1C335.6 354.3 320.4 354.3 311 344.1L239 272.1C234.5 268.5 232 262.4 232 256V152C232 138.7 242.7 128 256 128V128z"></path></svg><!-- <i class="fa-solid fa-clock-rotate-left"></i> Font Awesome fontawesome.com --> Actions
                        Forecast</a></li>
                  </ul>
                </div>
                <div class="form-group col-lg-3 col-md-4 col-sm-6">
                  <select class="form-select m-2" aria-label="Default select example">
                    <option selected="" disabled="">Action Type :</option>
                    <option value="1">Litigation</option>
                    <option value="2">Dunning letter</option>
                    <option value="3">E-mail</option>
                    <option value="3">SMS</option>
                    <option value="3">Phone</option>
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-4 col-sm-6">
                  <select class="form-select m-2" aria-label="Default select example">
                    <option selected="" disabled="">Specific Action :</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-4 col-sm-6">
                  <select class="form-select m-2" onfocus="this.size=9;" onblur="this.size=1;" onchange="this.size=1; this.blur();" aria-label=" Default select example">
                    <option value="" selected="" disabled="">Clients Group :</option>
                    <option value="1">ATLANTIQue</option>
                    <option value="2">Central</option>
                    <option value="3">Clients douteux</option>
                    <option value="3">Clients France</option>
                    <option value="3">Clients Grands Comptes</option>
                    <option value="3">Clients Mass market</option>
                    <option value="3">Clients OSP</option>
                    <option value="3">Clients PME</option>
                    <option value="3">Clients Publics</option>
                    <option value="3">Clients Risques</option>
                    <option value="3">Clients Speciaux</option>
                    <option value="3">Clients VIP</option>
                    <option value="3">ClIENT_MEDIPREMA</option>
                    <option value="3">France Contentieux</option>
                    <option value="3">Group Alias</option>
                    <option value="3">Group Elec</option>
                    <option value="3">Group Imprimeurs</option>
                    <option value="3">Group Industrie</option>
                    <option value="3">Magasins de villa</option>
                    <option value="3">Market Place</option>
                    <option value="3">Public</option>
                    <option value="3">Relance team back office</option>
                    <option value="3">Retail</option>
                    <option value="3">Salomon</option>
                    <option value="3">Test 2</option>
                    <option value="3">US Clients</option>
                  </select>
                </div>
                <div class="col-md-2 col-sm-3 text-center">
                  <button type="button" class="btn btn-primary m-2" onclick="toggleRows(this)">
                    <svg class="svg-inline--fa fa-chevron-down" id="toggleIconDown" style="transition: all 0.6s;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path></svg><!-- <i class="fa-solid fa-chevron-down" id="toggleIconDown" style="transition: all 0.6s"></i> Font Awesome fontawesome.com -->
                  </button>
                </div>
              </form>
              <form class="row d-none toggle-row">
                <div class="form-group col-lg-3 col-md-4 col-sm-6">
                  <select class="form-select m-2 w-100" aria-label="Default select example">
                    <option selected="" disabled="">Collector :</option>
                    <option value="1">Mike Anderson(Collector)</option>
                    <option value="1">Nicolas Grayson(Collector)</option>
                    <option value="1">Paul Mayer(Administrator)</option>
                    <option value="1">Veronique Miguet(Credit Manager)</option>
                    <option value="1">[None]</option>
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-4 col-sm-6">
                  <select class="form-select m-2" aria-label="Default select example">
                    <option selected="" disabled="">Resolver :</option>
                    <option value="1">Brad Jackson(Sales Manager)</option>
                    <option value="1">Juse Durant(Sales Manager)</option>
                    <option value="1">Paul Mayer(Sales Manager)</option>
                    <option value="1">Thomas Smith(Executive Officer)</option>
                    <option value="1">
                      Vironica Campbell(Sales Administration)
                    </option>
                  </select>
                </div>
                <div class="form-group col-lg-3 col-md-4 col-sm-6">
                  <select class="form-select m-2" aria-label="Default select example">
                    <option selected="" disabled="">Associated With Client :</option>
                    <option value="1">Brad Jackson(Sales Manager)</option>
                    <option value="1">Juse Durant(Sales Manager)</option>
                    <option value="1">Paul Mayer(Sales Manager)</option>
                    <option value="1">Thomas Smith(Executive Officer)</option>
                    <option value="1">
                      Vironica Campbell(Sales Administration)
                    </option>
                  </select>
                </div>
              </form>
              <form class="row col-lg-9 d-none justify-content-center toggle-row">
                <div class="form-group col-md-4 col-sm-6">
                  <select class="form-select m-2" aria-label="Default select example">
                    <option value="" selected="" disabled="">
                      Customers Custom Field #1 :
                    </option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">[None]</option>
                    <option value="3">[Not Empty]</option>
                  </select>
                </div>
                <div class="form-group col-md-4 col-sm-6">
                  <select class="form-select m-2 w-100" aria-label="Default select example">
                    <option selected="" disabled="">Customers Custom Field #2 :</option>
                    <option value="1">AZ</option>
                    <option value="2">BI</option>
                    <option value="3">[None]</option>
                    <option value="3">[Not Empty]</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="row p-3 bg-light d-none collection-charts-1">
              <div class="col-lg-3">
                <h6><svg class="svg-inline--fa fa-hand-point-right me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hand-point-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"></path></svg><!-- <i class="fa-solid fa-hand-point-right me-2"></i> Font Awesome fontawesome.com -->Actions to do</h6>
                <div class="my-3">
                  <span class="mb-5">By : </span>
                  <input type="radio" id="Number1" name="num-1">
                  <label for="Number1">Number</label>
                  <input type="radio" id="Amount1" name="num-1">
                  <label for="Amount1">Amount</label>
                </div>
                <p class="fw-bold d-inline">Total :
                </p><div class="badge bg-secondary">564</div>
                <p></p>
                <ul class="list-unstyled text-secondary">
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#0080A9;"></div> @ E-mail : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#34D2D9;"></div> @ E-mail (Automatic
                    action) : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#FF8F00;"></div> <svg class="svg-inline--fa fa-phone mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path></svg><!-- <i class="fa-solid fa-phone mt-1"></i> Font Awesome fontawesome.com --> Phone : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#95C11B;"></div> <svg class="svg-inline--fa fa-envelope mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path></svg><!-- <i class="fa-solid fa-envelope mt-1"></i> Font Awesome fontawesome.com --> SMS : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#F7EE00;"></div> <svg class="svg-inline--fa fa-mobile mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1z"></path></svg><!-- <i class="fa-solid fa-mobile mt-1"></i> Font Awesome fontawesome.com --> Dunning letters : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#FF0081;"></div> <svg class="svg-inline--fa fa-mobile mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1z"></path></svg><!-- <i class="fa-solid fa-mobile mt-1"></i> Font Awesome fontawesome.com --> Litigation : <span class="fw-bold">442</span>
                  </li>
                </ul>
              </div>
              <div class="col-lg-9 bg-white" style="height:400px ;">
                <canvas id="myChart-10" width="0" height="0" style="display: block; box-sizing: border-box; height: 0px; width: 0px;"></canvas>
              </div>
      
            </div>
            <div class="row p-3 bg-light d-none collection-charts-2">
              <div class="col-lg-3">
                <h6><svg class="svg-inline--fa fa-hand-point-right me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hand-point-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M224 320c0 17.69 14.33 32 32 32h64c17.67 0 32-14.31 32-32s-14.33-32-32-32h-64C238.3 288 224 302.3 224 320zM267.6 256H352c17.67 0 32-14.31 32-32s-14.33-32-32-32h-80v40C272 240.5 270.3 248.5 267.6 256zM272 160H480c17.67 0 32-14.31 32-32s-14.33-32-32-32h-208.8C271.5 98.66 272 101.3 272 104V160zM320 416c0-17.69-14.33-32-32-32H224c-17.67 0-32 14.31-32 32s14.33 32 32 32h64C305.7 448 320 433.7 320 416zM202.1 355.8C196 345.6 192 333.3 192 320c0-5.766 1.08-11.24 2.51-16.55C157.4 300.6 128 269.9 128 232V159.1C128 151.2 135.2 144 143.1 144S160 151.2 159.1 159.1l0 69.72C159.1 245.2 171.3 271.1 200 271.1C222.1 271.1 240 254.1 240 232v-128C240 81.91 222.1 64 200 64H136.6C103.5 64 72.03 80 52.47 106.8L26.02 143.2C9.107 166.5 0 194.5 0 223.3V312C0 387.1 60.89 448 136 448h32.88C163.4 438.6 160 427.7 160 416C160 388.1 178 364.6 202.1 355.8z"></path></svg><!-- <i class="fa-solid fa-hand-point-right me-2"></i> Font Awesome fontawesome.com -->Action Done</h6>
                <div class="my-3">
                  <span class="mb-5">By : </span>
                  <input type="radio" id="Number2" name="num-2">
                  <label for="Number2">Number</label>
                  <input type="radio" id="Amount2" name="num-2">
                  <label for="Amount2">Amount</label>
                </div>
                <p class="fw-bold d-inline">Total :
                </p><div class="badge bg-secondary">564</div>
                <p></p>
                <ul class="list-unstyled text-secondary">
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#0080A9;"></div> @ E-mail : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#34D2D9;"></div> @ E-mail (Automatic
                    action) : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#FF8F00;"></div> <svg class="svg-inline--fa fa-phone mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path></svg><!-- <i class="fa-solid fa-phone mt-1"></i> Font Awesome fontawesome.com --> Phone : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#95C11B;"></div> <svg class="svg-inline--fa fa-envelope mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path></svg><!-- <i class="fa-solid fa-envelope mt-1"></i> Font Awesome fontawesome.com --> SMS : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#F7EE00;"></div> <svg class="svg-inline--fa fa-mobile mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1z"></path></svg><!-- <i class="fa-solid fa-mobile mt-1"></i> Font Awesome fontawesome.com --> Dunning letters : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#FF0081;"></div> <svg class="svg-inline--fa fa-mobile mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1z"></path></svg><!-- <i class="fa-solid fa-mobile mt-1"></i> Font Awesome fontawesome.com --> Litigation : <span class="fw-bold">442</span>
                  </li>
                </ul>
                <div class="my-3 text-center">
                  <span class="mb-5">By : </span>
                  <input type="radio" id="Day1" name="day-1">
                  <label for="Day1">Day</label>
                  <input type="radio" id="Week1" name="day-1">
                  <label for="Week1">Week</label>
                  <input type="radio" id="Month1" name="day-1">
                  <label for="Month1">Month</label>
                </div>
                <div class="d-flex justify-content-center">
                  <span class="p-1">period:</span>
                  <select class="form-select border-primary w-auto" aria-label="Default select example">
                    <option value="1" selected="">1 month</option>
                    <option value="2">2 month</option>
                    <option value="2">3 month</option>
                    <option value="2">6 month</option>
                    <option value="1">1 year</option>
                    <option value="2">2 year</option>
                    <option value="2">3 year</option>
                    <option value="2">4 year</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-9 bg-white" style="height:400px ;">
                <canvas id="myChart-101" width="0" height="0" style="display: block; box-sizing: border-box; height: 0px; width: 0px;"></canvas>
              </div>
      
            </div>
            <div class="row p-3 bg-light d-none collection-charts-3">
              <div class="col-lg-3">
                <h6><svg class="svg-inline--fa fa-clock me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z"></path></svg><!-- <i class="fa-solid fa-clock me-2"></i> Font Awesome fontawesome.com --> Actions forecast</h6>
                <div class="my-3">
                  <span class="mb-5">By : </span>
                  <input type="radio" id="Number3" name="num-3">
                  <label for="Number3">Number</label>
                  <input type="radio" id="Amount3" name="num-3">
                  <label for="Amount3">Amount</label>
                </div>
                <p class="fw-bold d-inline">Total :
                </p><div class="badge bg-secondary">564</div>
                <p></p>
                <ul class="list-unstyled text-secondary">
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#0080A9;"></div> @ E-mail : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#34D2D9;"></div> @ E-mail (Automatic
                    action) : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#FF8F00;"></div> <svg class="svg-inline--fa fa-phone mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path></svg><!-- <i class="fa-solid fa-phone mt-1"></i> Font Awesome fontawesome.com --> Phone : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#95C11B;"></div> <svg class="svg-inline--fa fa-envelope mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path></svg><!-- <i class="fa-solid fa-envelope mt-1"></i> Font Awesome fontawesome.com --> SMS : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#F7EE00;"></div> <svg class="svg-inline--fa fa-mobile mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1z"></path></svg><!-- <i class="fa-solid fa-mobile mt-1"></i> Font Awesome fontawesome.com --> Dunning letters : <span class="fw-bold">442</span>
                  </li>
                  <li class="d-flex flex-wrap gap-2">
                    <div class="mt-1" style="width:15px ;height:15px;background-color:#FF0081;"></div> <svg class="svg-inline--fa fa-mobile mt-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1z"></path></svg><!-- <i class="fa-solid fa-mobile mt-1"></i> Font Awesome fontawesome.com --> Litigation : <span class="fw-bold">442</span>
                  </li>
                </ul>
                <div class="my-3 text-center">
                  <span class="mb-5">By : </span>
                  <input type="radio" id="Day2" name="day-2">
                  <label for="Day2">Day</label>
                  <input type="radio" id="Week2" name="day-2">
                  <label for="Week2">Week</label>
                  <input type="radio" id="Month2" name="day-2">
                  <label for="Month2">Month</label>
                </div>
                <div class="d-flex justify-content-center">
                  <span class="p-1">period:</span>
                  <select class="form-select border-primary w-auto" aria-label="Default select example">
                    <option value="1" selected="">1 month</option>
                    <option value="2">2 month</option>
                    <option value="2">3 month</option>
                    <option value="2">6 month</option>
                    <option value="1">1 year</option>
                    <option value="2">2 year</option>
                    <option value="2">3 year</option>
                    <option value="2">4 year</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-9 bg-white" style="height:400px ;">
                <canvas id="myChart-102" width="0" height="0" style="display: block; box-sizing: border-box; height: 0px; width: 0px;"></canvas>
              </div>
      
            </div>
          </div>
        </section>
        <section class="mt-2">
          <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
              <div class="form-group d-flex align-items-center">
                <select class="form-select w-auto m-2" aria-label="Default select example">
                  <option selected="" value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                  <option value="134">134</option>
                </select>
                <div>actions display on 134</div>
              </div>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Multi-columns search">
                </div>
              </form>
            </div>
            <div class="row mt-2 px-4 text-center table-alerts-container">
              <div class="col-1">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input mb-3" id="exampleCheck1">
                </div>
              </div>
              <div class="col">
                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <svg class="svg-inline--fa fa-sort mb-3" style="cursor: pointer;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg><!-- <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i> Font Awesome fontawesome.com -->
                    <p class="fw-bold">Action date</p>
                  </div>
                
              </div>
              <div class="col-md-2 col-5">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <svg class="svg-inline--fa fa-sort mb-3" style="cursor: pointer;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg><!-- <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i> Font Awesome fontawesome.com -->
                    <p class="fw-bold">Action type</p>
                  </div>
                
              </div>
              <div class="col-2 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <svg class="svg-inline--fa fa-sort mb-3" style="cursor: pointer;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg><!-- <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i> Font Awesome fontawesome.com -->
                    <p class="fw-bold">Action</p>
                  </div>
               
              </div>
              <div class="col-2 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <svg class="svg-inline--fa fa-sort mb-3" style="cursor: pointer;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg><!-- <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i> Font Awesome fontawesome.com -->
                    <p class="fw-bold">Action amount</p>
                  </div>
                
              </div>
              <div class="col-1 hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <svg class="svg-inline--fa fa-sort mb-3" style="cursor: pointer;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg><!-- <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i> Font Awesome fontawesome.com -->
                    <p class="fw-bold">Flag</p>
                  </div>
                
              </div>
              <div class="col hide">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <svg class="svg-inline--fa fa-sort mb-3" style="cursor: pointer;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg><!-- <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i> Font Awesome fontawesome.com -->
                    <p class="fw-bold">Company code</p>
                  </div>
                
              </div>
              <div class="col">
                                  <div class="d-flex align-items-center justify-content-center gap-1 ">
                    <svg class="svg-inline--fa fa-sort mb-3" style="cursor: pointer;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg><!-- <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i> Font Awesome fontawesome.com -->
                    <p class="fw-bold">Business name</p>
                  </div>
                
              </div>
              <div class="col tavle-dropdown-icon"></div>
            </div>
            <div class="text-center mb-3 table-container p-2 p-md-4">
              <?php use Carbon\Carbon; ?>
              @php
              $dates = [];
              $total_amount = 0;
              $actionDate = null;
               $actionType = null;
               $action = null;
               $isDueDateGreaterThanCurrentDate = null;
              @endphp
              @foreach($items as $item) 
              @php
              $client = $item->client; 
              $collectionScenario = $client->collectionScenario;
              $collectionScenarioActions = $collectionScenario->actionScenarios->where('is_automatic_action',0)->toArray();
              usort($collectionScenarioActions, function($a, $b) {     
                // Custom sorting function based on number_of_days
                $a_sign = ($a->number_of_days < 0) ? '-' : '+';
                $b_sign = ($b->number_of_days < 0) ? '-' : '+';
                // Compare signs first
                if ($a_sign !== $b_sign) {
                    return strcmp($a_sign, $b_sign);
                } 
                // If signs are the same, compare absolute values
                return $a->number_of_days - $b->number_of_days;
               });
               // After sorting, $collectionScenarioActions[0] will be the smallest one
               //$smallestAction = $collectionScenarioActions[0];
              
               $currentDate = Carbon::now()->toDateString();
               $dueDate = $item->due_date;
               foreach($collectionScenarioActions as $collectionScenarioAction)
               {  
                $numberOfDays = $collectionScenarioAction['number_of_days'];
                // Convert $numberOfDays to an integer (just to ensure it's treated as a number)
                $numberOfDays = (int) $numberOfDays;
                // Adjust the due date based on whether $numberOfDays is positive or negative
                if ($numberOfDays > 0) {
                    // Add days to $dueDate
                    $dueDate = Carbon::parse($dueDate)->addDays($numberOfDays)->toDateString();
                } elseif ($numberOfDays < 0) {
                    // Subtract days from $dueDate
                    $dueDate = Carbon::parse($dueDate)->subDays(abs($numberOfDays))->toDateString();
                } 
                $currentDate = Carbon::today(); // Get current date without time
                $dates[]=$dueDate;
                $isDueDateGreaterThanCurrentDate = Carbon::parse($dueDate)->gt($currentDate);
                
                if($isDueDateGreaterThanCurrentDate)  
                {
                  $actionDate = $dueDate;
                  $actionType ="" ;
                  $action = $collectionScenarioAction['action_name'];
                  $total_amount +=$item->initial_amount_inc_tax;  
                  //break;
                }
               }
              @endphp
              @if($isDueDateGreaterThanCurrentDate)
              <div class="row align-items-center pt-3" style="background-color: #006bff14">
                <div class="col-1">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input mb-3" id="exampleCheck1">
                  </div>
                </div>
                <div class="col">
                  <div class="mouse-hovers d-flex justify-content-center">
                    <p class="fw-bold">{{$actionDate}}</p>
                    <span class="onmouse">?</span>
                    <span class="conttt">due date: sunday, may 2022 <br> / action 4 days after due date of <br> oldest
                      invoice
                    </span>
                  </div>
                </div>
                <div class="col-md-2 col-5">
                  <div class="btn openModalBtn text-light text-decoration-none btn-primary w-100 mb-3">
                    @ E-mail
                  </div>
                </div>
                <div class="col-2 hide">
                  <p><a href="#" class="openModalBtn">{{$action}}</a></p>
                </div>
                <div class="col-2 hide">
                  <p>{{$item->initial_amount_inc_tax}}</p>
                </div>
                <div class="col-1 hide">
                  <span class="onmouse-2"><svg class="svg-inline--fa fa-flag mb-2 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z"></path></svg><!-- <i class="fa-solid fa-flag mb-2 text-primary"></i> Font Awesome fontawesome.com --></span>
                  <span class="conttt-2">payment profile &lt; payeur correct / average payeur&gt; <br> average days beyond
                      items
                      +28days (&lt; 10days) </span>   
                </div>
                <div class="col hide">
                  <p class="fw-bold">{{$client->company_code}}</p>
                </div>
                <div class="col"> 
                  <p class="fw-bold"><a href="#" onclick="showHolap()">{{$client->company_name}}</a></p>
                </div>
                <div class="col tavle-dropdown-icon" onclick="toggleFunction(this)">
                  <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path></svg><!-- <i class="fa-solid fa-chevron-down"></i> Font Awesome fontawesome.com -->
                </div>
                <div class="hidden ms-2 d-none">
                  <div class="d-flex bg-white">
                    <p class="fw-bold">Action:</p>
                    <p class="openModalBtn">Relance par email n°1</p>
                  </div>
                  <div class="d-flex bg-white">
                    <p class="fw-bold">Action amount:</p>
                    <p>12,916.00 €</p>
                  </div>
                  <div class="d-flex bg-white">
                    <p class="fw-bold">Flag:</p>
                    <span class="onmouse-2 "><svg class="svg-inline--fa fa-flag text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z"></path></svg><!-- <i class="fa-solid fa-flag text-primary"></i> Font Awesome fontawesome.com --></span>
                    <span class="conttt-2">payment profile &lt; payeur correct / average payeur&gt; <br> average days beyond
                        items
                        +28days (&lt; 10days) </span>
                  </div>
                  <div class="d-flex bg-white">
                    <p class="fw-bold">Company code:</p>
                    <p class="fw-bold">1230504</p>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
              <div class="d-flex justify-content-center gap-5">
                <p class="fw-bold">Total:</p>
                <p>{{$total_amount}} €</p>
              </div>
              <div class="arrow-bottom"></div>
            </div>
            <div class="text-md-start mx-md-5 text-center px-4 mb-2">
              <div class=" thebtn-3 btn  btn-primary text-light px-2 m-1">
                <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path></svg><!-- <i class=" fa-solid fa-check"></i> Font Awesome fontawesome.com -->  Confirm the automatic action
              </div>
              <div class="thebtn-1 position-relative btn btn-primary px-2 m-1" onclick="showCalender()">
                <svg class="svg-inline--fa fa-calendar" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32zM448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464z"></path></svg><!-- <i class="fa-solid fa-calendar"></i> Font Awesome fontawesome.com --> Update the action date
                <div class="calender-div shadow-sm d-none">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="calendar calendar-first" id="calendar_first">
                        <div class="calendar_header">
                            <button class="switch-month switch-left"> <svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path></svg><!-- <i class="fa fa-chevron-left"></i> Font Awesome fontawesome.com --></button>
                             <h2>August 2024</h2>
                            <button class="switch-month switch-right"> <svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path></svg><!-- <i class="fa fa-chevron-right"></i> Font Awesome fontawesome.com --></button>
                        </div>
                        <div class="calendar_weekdays"><div style="color: rgb(68, 68, 68);">Sun</div><div style="color: rgb(68, 68, 68);">Mon</div><div style="color: rgb(68, 68, 68);">Tue</div><div style="color: rgb(68, 68, 68);">Wed</div><div style="color: rgb(68, 68, 68);">Thu</div><div style="color: rgb(68, 68, 68);">Fri</div><div style="color: rgb(68, 68, 68);">Sat</div></div>
                        <div class="calendar_content"><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="past-date">1</div><div class="past-date">2</div><div class="past-date">3</div><div class="past-date">4</div><div class="past-date">5</div><div class="past-date">6</div><div class="today" style="color: rgb(0, 189, 170);">7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div><div>15</div><div>16</div><div>17</div><div>18</div><div>19</div><div>20</div><div>21</div><div>22</div><div>23</div><div>24</div><div>25</div><div>26</div><div>27</div><div>28</div><div>29</div><div>30</div><div>31</div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div><div class="blank"></div></div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class=" thebtn-2 btn text-light btn-danger px-2 m-1">
                <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg><!-- <i class="fa-solid fa-trash"></i> Font Awesome fontawesome.com --> Delete
              </div>
            </div>
            <div class="justify-content-end gap-1 d-flex mb-2">
              <div class="btn btn-outline-primary">Previus</div>
              <div class="btn btn-primary">1</div>
              <div class="btn btn-outline-primary">2</div>
              <div class="btn btn-outline-primary">3</div>
              <div class="btn btn-outline-primary">4</div>
              <div class="btn btn-outline-primary">5</div>
              <div class="btn btn-outline-primary">6</div>
              <div class="btn btn-outline-primary">Next</div>
            </div>
            <div class="text-center mb-4">
              <a href="searchForAnItem.html" class="btn btn-primary" style="border-radius: 20px;">Number of open items : 4505</a>
            </div>
            <div class="text-center mb-2">
              <div class="this-buttons">
                <div class="">
                  <div class="btn-group">
                    <button type="button" class="btn text-light"><span><svg class="svg-inline--fa fa-download" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z"></path></svg><!-- <i class="fa-solid fa-download"></i> Font Awesome fontawesome.com --> </span>Export
                      this data to excel</button>
                    <button type="button" class="button-2 text-light btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <p>file fromat:</p>
                      </li>
                      <div class="radios-inp d-flex  justify-content-around">
                        <li class="dropdown-item d-flex"><input type="radio" name="fils" id="csv"><label for="fils">csv</label></li>
                        <li class="dropdown-item d-flex"><input type="radio" name="fils" id="xls"><label for="fils">xls</label>
                        </li>
                      </div>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <p>encoding:</p>
                      </li>
                      <select name="" style="width: 100%; font-size: 12px;">
                        <option value="" selected="">UTF-8 (Unicode / US format)</option>
                        <option value="ISO-8859-1">ISO-8859-1 (Western European format)</option>
                        <option value="ISO-8859-2">ISO-8859-2 (Central European format)</option>
                        <option value="ISO-8859-3">ISO-8859-3 (South European format)</option>
                        <option value="ISO-8859-4">ISO-8859-4 (North European format)</option>
                        <option value="ISO-8859-5">ISO-8859-5 (Cyrillic format)</option>
                        <option value="ISO-8859-6">ISO-8859-6 (Arabic format)</option>
                        <option value="ISO-8859-7">ISO-8859-7 (Greek format)</option>
                        <option value="ISO-8859-8">ISO-8859-8 (Hebrew format)</option>
                        <option value="ISO-8859-9">ISO-8859-9 (Turkish format)</option>
                        <option value="ISO-8859-10">ISO-8859-10 (Nordic format)</option>
                        <option value="ISO-8859-13">ISO-8859-13 (Baltic format)</option>
                        <option value="ISO-8859-14">ISO-8859-14 (Celtic format)</option>
                        <option value="ISO-8859-15">ISO-8859-15 (NEW Western European format)</option>
                        <option value="ISO-8859-16">ISO-8859-16 (Romanian format)</option>
                        <option value="ISO-2022-JP">ISO-2022-JP</option>
                        <option value="UTF-7">UTF-7</option>
                        <option value="ASCII">ASCII</option>
                        <option value="EUC-JP">EUC-JP</option>
                        <option value="EUC-KR">EUC-KR</option>
                        <option value="SJIS">SJIS</option>
                        <option value="EUCJP-WIN">EUCJP-WIN</option>
                        <option value="SJIS-WIN">SJIS-WIN</option>
                        <option value="JIS">JIS</option>
                        <option value="WINDOWS-1252">WINDOWS-1252</option>
                        <option value="WINDOWS-1251">WINDOWS-1251</option>
                        <option value="BIG-5">BIG-5</option>
                        <option value="KOI8-R">KOI8-R</option>
                      </select>
                      
                      <li class="mt-3 "><button type="button" class="btn" style="width: 100%;"><span><iclass="fa-solid fa-download"=""> </iclass="fa-solid></span>download</button></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>         
@endsection
@push('scripts') 
<script src="/js/collection.js"></script>
    <script src="/js/risk.js"></script>
    <script src="/js/mange.js" ></script>
    <script src="/js/email.js"></script>
@endpush
