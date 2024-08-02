@extends('layouts.dashboard.app')
@section('content')
    @include('dashboard.include.home_modal')
    <div class=" p-2 text-center">
        <p class=" d-flex flex-wrap justify-content-center align-items-center">DEMO → You navigate as
            <select class="form-select mx-2  border-primary w-auto" aria-label="Default select example">
                <option value="1" selected="">Sales Administration</option>
                <option value="2">Credit manager</option>
                <option value="2">Collector</option>
                <option value="2">Sales manager</option>
                <option value="1">Administrator</option>
                <option value="2">Financial controller</option>
                <option value="2">Executive Officer</option>
                <option value="2">Guest</option>
            </select>
            and you can access to all features
        </p>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="change-pages">
                <a href="reportsSales.html" class="d-flex justify-content-between bg-success px-2 text-light"><svg
                        class="svg-inline--fa fa-signal text-light" style="font-size: 35px;" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="signal" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M544 0c-17.67 0-32 14.33-32 31.1V480C512 497.7 526.3 512 544 512s32-14.33 32-31.1V31.1C576 14.33 561.7 0 544 0zM160 288C142.3 288 128 302.3 128 319.1v160C128 497.7 142.3 512 160 512s32-14.33 32-31.1V319.1C192 302.3 177.7 288 160 288zM32 384C14.33 384 0 398.3 0 415.1v64C0 497.7 14.33 512 31.1 512S64 497.7 64 480V415.1C64 398.3 49.67 384 32 384zM416 96c-17.67 0-32 14.33-32 31.1V480C384 497.7 398.3 512 416 512s32-14.33 32-31.1V127.1C448 110.3 433.7 96 416 96zM288 192C270.3 192 256 206.3 256 223.1v256C256 497.7 270.3 512 288 512s32-14.33 32-31.1V223.1C320 206.3 305.7 192 288 192z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-signal text-light" style="font-size: 35px;"></i> Font Awesome fontawesome.com -->
                    <div class="block-txt">
                        <span class="text-end" style="font-size: 25px;">3.3M€</span>
                        <span>Sales May 2024</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="change-pages">
                <a href="collection.html" class="d-flex justify-content-between bg-secondary px-2 text-light"><svg
                        class="svg-inline--fa fa-clock text-light" style="font-size: 35px;" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="clock" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-clock text-light" style="font-size: 35px;"></i> Font Awesome fontawesome.com -->
                    <div class="block-txt">
                        <span class="text-end" style="font-size: 25px;">614</span>
                        <span>Actions to do</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="change-pages">
                <a href="reportsAgingBalance.html" class="d-flex justify-content-between bg-primary  px-2 text-light"><svg
                        class="svg-inline--fa fa-euro-sign text-light" style="font-size: 35px;" aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="euro-sign" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M64 240C46.33 240 32 225.7 32 208C32 190.3 46.33 176 64 176H92.29C121.9 92.11 201.1 32 296 32H320C337.7 32 352 46.33 352 64C352 81.67 337.7 96 320 96H296C238.1 96 187.8 128.4 162.1 176H288C305.7 176 320 190.3 320 208C320 225.7 305.7 240 288 240H144.2C144.1 242.6 144 245.3 144 248V264C144 266.7 144.1 269.4 144.2 272H288C305.7 272 320 286.3 320 304C320 321.7 305.7 336 288 336H162.1C187.8 383.6 238.1 416 296 416H320C337.7 416 352 430.3 352 448C352 465.7 337.7 480 320 480H296C201.1 480 121.9 419.9 92.29 336H64C46.33 336 32 321.7 32 304C32 286.3 46.33 272 64 272H80.15C80.05 269.3 80 266.7 80 264V248C80 245.3 80.05 242.7 80.15 240H64z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-euro text-light" style="font-size: 35px;"></i> Font Awesome fontawesome.com -->
                    <div class="block-txt">
                        <span class="text-end" style="font-size: 25px;">5M€</span>
                        <span>Late payment</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 mb-3">
                <a href="reportsAgingBalance.html" class="text-decoration-none">
                    <h5 class="text-dark text-center" id="aning-mouse">Aging balance</h5>
                </a>
                <div class="show-txt" id="show" style="display: none;">
                    <span class="aging-show mt-5 mb-5">The aging balance helps to <br>
                        monitor the situation of accounts <br>
                        receivable based on their seniority <br>
                        compared to their due date. It is <br>
                        divided into several tranches. For <br>
                        example, non-overdue receivables <br>
                        and receivables due between 1 <br>
                        and 30 days and between 31 and <br>
                        60 days ... etc. It can be applied to <br>
                        the entire accounts receivable or <br>
                        can be set by customer or group <br>
                        of customers.</span>
                </div>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsAgingBalance.html">
                        <canvas id="myChart-5" width="362" height="250"
                            style="display: block; box-sizing: border-box; height: 250px; width: 362px;"></canvas>
                    </a>
                    <div class="row text-center mt-3" style="font-size:10px ;">
                        <div class="col-6 d-flex align-items-center ">
                            <p>Current&nbsp;receivable&nbsp;: </p>
                            <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 151k &nbsp; 42%</div>
                            <p></p>
                        </div>
                        <div class="col-6 d-flex align-items-center ">
                            <p>Overdue&nbsp;: </p>
                            <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 209k &nbsp; 58%</div>
                            <p></p>
                        </div>
                        <div class="col-6 d-flex align-items-center ">
                            <p>Total receivable&nbsp;: </p>
                            <div class="badge bg-light text-dark mb-3 ms-2">€ &nbsp; 359k &nbsp; 100%</div>
                            <p></p>
                        </div>
                        <div class=" col-6 d-flex align-items-center ">
                            <p>Overdue %&nbsp;:</p>
                            <div class="badge bg-light text-dark mb-3 ms-2">5%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <a href="reportsItemsStatus.html" class="text-decoration-none">
                    <h5 class="text-dark text-center" id="aning-mouse-2">Items status</h5>
                </a>
                <div class="show-txt-2" id="show-2" style="display: none;">
                    <span>The status allows to qualify items <br>
                        and assign them temporarily in a <br>
                        category. For example, if a <br>
                        customer confirms a payment, the <br>
                        relevant invoices will be qualified <br>
                        with a status of Promise to pay <br> . Status - Name : Name of status <br>
                        defined on My DSO <br> ManagerStatus - Comment : <br>
                        Explanatory comment linked to <br>
                        debt status.Status - Date : Date <br>
                        on which last item status was <br>
                        indicated. Status - Author : Author <br>
                        of item status, having qualified it. <br>
                        How to manage statuses?"</span>
                </div>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsItemsStatus.html">
                        <canvas id="myChart-11" width="362" height="250"
                            style="display: block; box-sizing: border-box; height: 250px; width: 362px;"></canvas>
                    </a>
                    <div class="mt-3 text-center" style="font-size:10px ;">
                        <div class="d-inline-flex">Overdue items with a status : <div class="fw-bold"> 849 K€</div>
                        </div>
                        <br>
                        <div class="d-inline-flex">% Qualified overdue : <div class="fw-bold"> 13 % </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <a href="reportsCashForecast.html" class="text-decoration-none">
                    <h5 class="text-dark text-center">Cash forecast</h5>
                </a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsCashForecast.html">
                        <canvas id="myChart-3" width="362" height="250"
                            style="display: block; box-sizing: border-box; height: 250px; width: 362px;"></canvas>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
                <a href="reportsAgingBalance.html" class="text-decoration-none">
                    <h5 class="text-dark text-center">Receivable and overdue per client</h5>
                </a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-group d-flex align-items-center">
                                <select class="form-select w-auto m-2" style="font-size:13px ;"
                                    aria-label="Default select example">
                                    <option selected="" value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="134">134</option>
                                </select>
                                <div style="font-size:10px ; ">actions display on 134</div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="text" style="font-size:10px ;" class="form-control"
                                        aria-describedby="emailHelp" placeholder="Multi-columns search">
                                </div>
                            </form>
                        </div>
                                            @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif
                        <a href="reportsAgingBalance.html" class="text-decoration-none text-dark">
                            <div class="row p-0 text-center" style="font-size: 10px;">
                                <div class="col-1">
                                    <p class="fw-bold p-1 m-0">Flag</p>
                                </div>
                                <div class="col-2">
                                    <p class="fw-bold p-1 m-0">Client name</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">Receivable</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">Overdue</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">Overdue +15d</p>
                                </div>
                            </div>
                            <div class="row align-items-center  p-0 my-0 text-center"
                                style="background-color: #006bff14;font-size: 10px;">
                                <div class="col-1"><svg class="svg-inline--fa fa-flag text-primary" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="flag" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-flag text-primary "></i> Font Awesome fontawesome.com -->
                                </div>
                                <div class="col-2">
                                    <p class="fw-bold p-1 m-0">Kokel</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">424 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">205 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">27 k€</p>
                                </div>
                            </div>
                            <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                                <div class="col-1"><svg class="svg-inline--fa fa-flag text-primary" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="flag" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-flag text-primary "></i> Font Awesome fontawesome.com -->
                                </div>
                                <div class="col-2">
                                    <p class="fw-bold p-1 m-0">Kokel</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">424 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">205 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">27 k€</p>
                                </div>
                            </div>
                            <div class="row align-items-center p-0  text-center"
                                style="background-color: #006bff14;font-size: 10px;">
                                <div class="col-1"><svg class="svg-inline--fa fa-flag text-primary" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="flag" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-flag text-primary "></i> Font Awesome fontawesome.com -->
                                </div>
                                <div class="col-2">
                                    <p class="fw-bold p-1 m-0">Kokel</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">424 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">205 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">27 k€</p>
                                </div>
                            </div>
                            <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                                <div class="col-1"><svg class="svg-inline--fa fa-flag text-primary" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="flag" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-flag text-primary "></i> Font Awesome fontawesome.com -->
                                </div>
                                <div class="col-2">
                                    <p class="fw-bold p-1 m-0">Kokel</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">424 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">205 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">27 k€</p>
                                </div>
                            </div>
                            <div class="row align-items-center p-0  text-center"
                                style="background-color: #006bff14;font-size: 10px;">
                                <div class="col-1"><svg class="svg-inline--fa fa-flag text-primary" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="flag" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M64 496C64 504.8 56.75 512 48 512h-32C7.25 512 0 504.8 0 496V32c0-17.75 14.25-32 32-32s32 14.25 32 32V496zM476.3 0c-6.365 0-13.01 1.35-19.34 4.233c-45.69 20.86-79.56 27.94-107.8 27.94c-59.96 0-94.81-31.86-163.9-31.87C160.9 .3055 131.6 4.867 96 15.75v350.5c32-9.984 59.87-14.1 84.85-14.1c73.63 0 124.9 31.78 198.6 31.78c31.91 0 68.02-5.971 111.1-23.09C504.1 355.9 512 344.4 512 332.1V30.73C512 11.1 495.3 0 476.3 0z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-flag text-primary "></i> Font Awesome fontawesome.com -->
                                </div>
                                <div class="col-2">
                                    <p class="fw-bold p-1 m-0">Kokel</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">424 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">205 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">27 k€</p>
                                </div>
                            </div>
                            <div class="row align-items-center p-0  text-center" style="font-size: 10px;">
                                <div class="col-3">
                                    <div class="bg-secondary text-light mb-1" style="border-radius: 20px;">No. of clients
                                        : 924</div>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">424 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">205 k€</p>
                                </div>
                                <div class="col-3">
                                    <p class="fw-bold p-1 m-0">27 k€</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="t-button-on-global d-flex justify-content-end  mb-2">
                        <a href="#" class="prev text-black-50  text-capitalize">previous</a>
                        <a href="" class="next text-capitalize">next</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-3">
                <a href="reportsDSO.html" class="text-decoration-none">
                    <h5 class="text-dark text-center">DSO trend</h5>
                </a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsDSO.html">
                        <canvas id="myChart-8" width="362" height="250"
                            style="display: block; box-sizing: border-box; height: 250px; width: 362px;"></canvas>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5 mb-3">
                <a href="reportsOverdueTrend.html" class="text-decoration-none">
                    <h5 class="text-dark text-center">Overdue trend</h5>
                </a>
                <div class="mt-3 mx-2" style="height:320px ;">
                    <a href="reportsOverdueTrend.html">
                        <canvas id="myChart-6" width="362" height="250"
                            style="display: block; box-sizing: border-box; height: 250px; width: 362px;"></canvas>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
