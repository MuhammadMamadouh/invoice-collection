    <div class="bg-white p-4 " id="actionsDiv-{{ $item->id }}">
        <div class="row mt-2 px-4 text-center table-alerts-container">
            <div class=" col-md-2">
                <p class="fw-bold">{{ __('Action date') }}</p>
            </div>
            <div class=" col-md-2">
                <p class="fw-bold">{{ __('Action type') }}</p>
            </div>
            <div class="col-md-5 d-none d-md-block"></div>
            <div class="col-md-3">
                <p class="fw-bold">{{ __('Action done by') }}</p>
            </div>
        </div>
        <div class="text-center mb-3  p-2 p-md-4">
            {{-- dd($item->itemActions) --}}
            @forelse($item->itemActions as $key => $tempAction)
                <div class="row align-items-center"
                    style="{{ $key % 2 == 0 ? 'background-color:#ffffff;' : 'background-color:#006bff14' }}">
                    <div class="col-md-2 pt-2">
                        <div class="mouse-hovers d-flex justify-content-center">
                            <p class="fw-bold">{{ $tempAction->action_date }}</p>
                        </div>
                    </div>
                    <div class="col-md-2 pt-3">
                        <div class="d-flex">
                            <div class="btn openModalBtn btn-secondary w-100" style="border-radius:5px 0 0 5px ">
                                <i class="fa-solid {{ $tempAction->actionTypes->icon }}"></i>
                                {{ $tempAction->actionTypes->name }}
                            </div>
                            <div class="btn btn-success" style="border-radius:0 5px 5px 0">
                                <i class="fa-solid fa-download"></i>
                            </div>
                        </div>
                        <p><a href="#">Relance par {{ $tempAction->actionTypes->name }} n°1</a></p>
                    </div>
                    <div class="col-5"></div>
                    <div class="col-md-3 mb-2 d-flex align-items-center gap-2 justify-content-center">
                        <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                        <p class="fw-bold"><a href="#">{{ $tempAction->createdBy->first_name }}</a> (Administrator
                            {{-- $tempAction->createdBy->role->name --}})</p>
                    </div>
                </div>
            @empty
                <p> No Actions Yet.... </p>
            @endforelse
            {{-- <div class="row align-items-center">
                <div class="col-md-2 pt-2">
                    <div class="mouse-hovers d-flex justify-content-center">
                        <p class="fw-bold">13-5-2022 17:18</p>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            phone
                        </div>
                    </div>
                    <p><a href="#">Relance par email n°1</a></p>
                </div>
                <div class="col-5"></div>
                <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center" style="background-color: #006bff14">
                <div class="col-md-2 pt-2">
                    <div class="mouse-hovers d-flex justify-content-center">
                        <p class="fw-bold">13-5-2022 17:18</p>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex">
                        <div class="btn openModalBtn btn-primary w-100" style="border-radius:5px 0 0 5px ">
                            @ E-mail
                        </div>
                        <div class="btn btn-success" style="border-radius:0 5px 5px 0">
                            <i class="fa-solid fa-download"></i>
                        </div>
                    </div>
                    <p><a href="#">Relance par email n°1</a></p>
                </div>
                <div class="col-5"></div>
                <div class="col-md-3 mb-2 d-flex align-items-center gap-2 justify-content-center">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div> --}}
            {{-- <div class="row align-items-center">
                <div class="col-md-2 pt-2">
                    <div>
                        <p class="fw-bold mb-2">13-5-2022 17:18</p>
                        <div class="badge bg-light text-dark">COMPLETED ACTION</div>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div class="btn btn-light w-100" style="cursor:no-drop ;">
                            @ E-mail
                        </div>
                    </div>
                    <p class="text-black-50" style="font-size:12px !important; ">Dispute follow-up</p>
                </div>
                <div class="col-5"></div>
                <div class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center" style="background-color: #006bff14">
                <div class="col-md-2 pt-2">
                    <div>
                        <p class="fw-bold mb-2 text-decoration-line-through">13-5-2022 17:18</p>
                        <div class="badge bg-light text-dark">DELETED ACTION</div>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div class="btn btn-light w-100" style="cursor:no-drop ;">
                            @ E-mail
                        </div>
                    </div>
                    <p class="text-black-50 text-decoration-line-through" style="font-size:12px !important; ">
                        Promise to pay follow up</p>
                </div>
                <div class="col-5"></div>
                <div
                    class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center text-decoration-line-through">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 pt-2">
                    <div>
                        <p class="fw-bold mb-2 text-decoration-line-through">13-5-2022 17:18</p>
                        <div class="badge bg-light text-dark">DELETED ACTION</div>
                    </div>
                </div>
                <div class="col-md-2 pt-3">
                    <div class="d-flex justify-content-center gap-2">
                        <div class="btn btn-light w-100" style="cursor:no-drop ;">
                            @ E-mail
                        </div>
                    </div>
                    <p class="text-black-50 text-decoration-line-through" style="font-size:12px !important; ">
                        Reminder by e-mail No. 1</p>
                </div>
                <div class="col-5"></div>
                <div
                    class="col-md-3 d-flex mb-2 align-items-center gap-2 justify-content-center text-decoration-line-through">
                    <img src="./img/person2.jpg" style="width:50px;height:50px;border-radius: 50%;" alt="">
                    <p class="fw-bold"><a href="#">Pual Mayer</a> (Administrator)</p>
                </div>
            </div> --}}
        </div>
    </div>
