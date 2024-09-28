<div class="three-button-collections pb-5 bg-white d-none" id="historyDiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="three-button align-items-center gap-2 mt-3 d-flex text-center justify-content-around">
                    <div class="btn btn-primary w-100" id="show-table-one" onclick="fun1()">
                        collection
                        history</div>
                    <div class="btn btn-outline-primary w-100" id="show-table-one-2" onclick="fun2()">
                        Actions history (Risk)</div>
                    <div class="btn btn-outline-primary w-100" id="show-history" onclick="fun3()">
                        Items
                        history</div>
                </div>
                <div class="search mt-3 mb-3 justify-content-end d-flex">
                    <form action="">
                        <div class="form-group col-12">
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Multi-columns search">
                    </form>
                </div>
            </div>
            <div class="collection-table ">
                <div class="container">
                    <div class="row mt-3 px-4 align-items-center text-center">
                        <div class="col ">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">Action date</p>
                            </div>
                        </div>
                        <div class="col ">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">Action type</p>
                            </div>
                        </div>
                        <div class="col hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">trans no.</p>
                            </div>
                        </div>
                        <div class="col hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">action amount inc. tax</p>
                            </div>
                        </div>
                        <div class="col hide">
                            <div class="d-flex align-items-center justify-content-center gap-1 ">
                                <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                                <p class="fw-bold">action done by</p>
                            </div>
                        </div>
                        <div class="col  tavle-dropdown-icon"></div>
                    </div>
                    <div>
                        <div class="row pt-3 px-4 align-items-center text-center" style="background-color:#006BFF14;">
                            <div class="col">
                                <p class="fw-bold">2024-05-08 15:55</p>
                            </div>
                            <div class="col ">
                                <p class="fw-bold"><i class="fa-solid fa-phone"
                                        style="font-size: 10px; margin-right: 5px;"></i>phone
                                </p>
                                <p class="fw-bold">Telephone reminder No. 1</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">?, 310510, 310511, 310572,
                                    310636, ... [8]</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">24,775.96 €</p>
                            </div>
                            <div class="col hide">
                                <div class="img-s-2 d-flex">
                                    <img src="img/person2.jpg" class="img-fluid"
                                        style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span>
                                        Paul Mayer
                                        (Administrator)</span>
                                </div>
                            </div>
                            <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="hidden d-none bg-light">
                                <div class="d-flex">
                                    <p class="fw-bold">trans no:</p>
                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                        310636, ... [8]</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action amount inc. tax:</p>
                                    <p class="fw-bold">24,775.96 €</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action done by:</p>
                                    <div class="img-s-2 d-flex justify-content-between">
                                        <img src="img/person2.jpg" class="img-fluid"
                                            style="width: 30px; height: 30px; border-radius: 50%; margin: -3px auto -2px;"
                                            alt=""><span> Paul Mayer
                                            (Administrator)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row pt-3 px-4 align-items-center text-center">
                            <div class="col">
                                <p class="fw-bold">2024-05-08 15:55</p>
                            </div>
                            <div class="col ">
                                <span class="btn btn btn-primary">@Email</span>
                                <p class="fw-bold">eminder by e-mail No. 1</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">?, 310510, 310511, 310572,
                                    310636,</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">24,775.96 €</p>
                            </div>
                            <div class="col hide">
                                <div class="img-s-2 d-flex">
                                    <img src="img/person2.jpg" class="img-fluid"
                                        style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span>
                                        Paul Mayer
                                        (Administrator)</span>
                                </div>
                            </div>
                            <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="hidden d-none bg-light">
                                <div class="d-flex">
                                    <p class="fw-bold">trans no:</p>
                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                        310636,</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action amount inc. tax:</p>
                                    <p class="fw-bold">24,775.96 €</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action done by:</p>
                                    <div class="img-s-2 d-flex">
                                        <img src="img/person2.jpg" class="img-fluid"
                                            style="width: 30px; height: 30px; border-radius: 50%; margin: -2px auto 2px; "
                                            alt=""><span> Paul Mayer
                                            (Administrator)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row pt-3 px-4 align-items-center text-center" style="background-color:#006BFF14;">
                            <div class="col">
                                <p class="fw-bold">2024-05-08 15:55</p>
                            </div>
                            <div class="col ">
                                <p class="fw-bold"><i class="fa-solid fa-phone"
                                        style="font-size: 10px; margin-right: 5px;"></i>phone
                                </p>
                                <p class="fw-bold">Telephone reminder No. 1</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">?, 310510, 310511, 310572,
                                    310636, ... [8]</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">24,775.96 €</p>
                            </div>
                            <div class="col hide">
                                <div class="img-s-2 d-flex">
                                    <img src="img/person2.jpg" class="img-fluid"
                                        style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span>
                                        Paul Mayer
                                        (Administrator)</span>
                                </div>
                            </div>
                            <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="hidden d-none bg-light">
                                <div class="d-flex">
                                    <p class="fw-bold">trans no:</p>
                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                        310636, ... [8]</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action amount inc. tax:</p>
                                    <p class="fw-bold">24,775.96 €</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action done by:</p>
                                    <div class="img-s-2 d-flex justify-content-between">
                                        <img src="img/person2.jpg" class="img-fluid"
                                            style="width: 30px; height: 30px; border-radius: 50%; margin: -3px auto -2px;"
                                            alt=""><span> Paul Mayer
                                            (Administrator)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row pt-3 px-4 align-items-center text-center">
                            <div class="col">
                                <p class="fw-bold">2024-05-08 15:55</p>
                            </div>
                            <div class="col ">
                                <span class="btn btn btn-primary">@Email</span>
                                <p class="fw-bold">eminder by e-mail No. 1</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">?, 310510, 310511, 310572,
                                    310636,</p>
                            </div>
                            <div class="col hide">
                                <p class="fw-bold">24,775.96 €</p>
                            </div>
                            <div class="col hide">
                                <div class="img-s-2 d-flex">
                                    <img src="img/person2.jpg" class="img-fluid"
                                        style="width: 30px; height: 30px; border-radius: 50%;" alt=""><span>
                                        Paul Mayer
                                        (Administrator)</span>
                                </div>
                            </div>
                            <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                    class="fa-solid fa-chevron-down"></i></div>
                            <div class="hidden d-none bg-light">
                                <div class="d-flex">
                                    <p class="fw-bold">trans no:</p>
                                    <p class="fw-bold">?, 310510, 310511, 310572,
                                        310636,</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action amount inc. tax:</p>
                                    <p class="fw-bold">24,775.96 €</p>
                                </div>
                                <div class="d-flex">
                                    <p class="fw-bold">action done by:</p>
                                    <div class="img-s-2 d-flex">
                                        <img src="img/person2.jpg" class="img-fluid"
                                            style="width: 30px; height: 30px; border-radius: 50%; margin: -2px auto 2px; "
                                            alt=""><span> Paul Mayer
                                            (Administrator)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-not-found mt-3 mb-3 d-none" id="page-not-found">
                <h5 class="text-center mt-3 mb-3 p-4">{{ __('No history found') }}
                </h5>
            </div>
            <div class="tale-2 mt-3 border-none d-none" id="history-table">
                <div class="row mt-3 px-4 align-items-center text-center">
                    <div class="col ">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Trans No</p>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Po No.</p>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Issue date</p>
                        </div>
                    </div>
                    <div class="col hide">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Due data</p>
                        </div>
                    </div>
                    <div class="col hide">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Payment date</p>
                        </div>
                    </div>
                    <div class="col hide">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Overdue</p>
                        </div>
                    </div>
                    <div class="col hide">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Amountexc. Tax</p>
                        </div>
                    </div>
                    <div class="col hide">
                        <div class="d-flex align-items-center justify-content-center gap-1 ">
                            <i class="fa-solid fa-sort mb-3" style="cursor:pointer"></i>
                            <p class="fw-bold">Amountexc. Tax</p>
                        </div>
                    </div>
                    <div class="col  tavle-dropdown-icon"></div>
                </div>
                <div class="tables-backg ">
                    <div class="row pt-3 px-4 align-items-center text-center" style="background: #006BFF14;">
                        <div class="col">
                            <p class="fw-bold">310712</p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"></p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">
                                2024-05-22
                            </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">7 d</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                class="fa-solid fa-chevron-down"></i></div>
                        <div class="hidden d-none bg-light">
                            <div class="d-flex">
                                <p class="fw-bold">Due data:</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Payment date :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Overdue :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold">5,141.14 € </p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold"> 5,141.14 € </p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3 px-4 align-items-center text-center">
                        <div class="col">
                            <p class="fw-bold">310712</p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"></p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">
                                2024-05-22
                            </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">7 d</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                class="fa-solid fa-chevron-down"></i></div>
                        <div class="hidden d-none bg-light">
                            <div class="d-flex">
                                <p class="fw-bold">Due data:</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Payment date :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Overdue :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold">5,141.14 € </p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold"> 5,141.14 € </p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3 px-4 align-items-center text-center" style="background: #006BFF14;">
                        <div class="col">
                            <p class="fw-bold">310712</p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"></p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">
                                2024-05-22
                            </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">7 d</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                class="fa-solid fa-chevron-down"></i></div>
                        <div class="hidden d-none bg-light">
                            <div class="d-flex">
                                <p class="fw-bold">Due data:</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Payment date :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Overdue :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold">5,141.14 € </p>

                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold"> 5,141.14 € </p>
                            </div>
                        </div>

                    </div>
                    <div class="row pt-3 px-4 align-items-center text-center">
                        <div class="col">
                            <p class="fw-bold">310712</p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"></p>
                        </div>
                        <div class="col ">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold"> 2024-05-15</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">
                                2024-05-22
                            </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">7 d</p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col hide">
                            <p class="fw-bold">5,141.14 € </p>
                        </div>
                        <div class="col tavle-dropdown-icon mb-3" onclick="toggleFunction(this)"><i
                                class="fa-solid fa-chevron-down"></i></div>
                        <div class="hidden d-none bg-light">
                            <div class="d-flex">
                                <p class="fw-bold">Due data:</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Payment date :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Overdue :</p>
                                <p class="fw-bold"> 2024-05-15</p>
                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold">5,141.14 € </p>

                            </div>
                            <div class="d-flex">
                                <p class="fw-bold">Amountexc. Tax :</p>
                                <p class="fw-bold"> 5,141.14 € </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
