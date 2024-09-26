<div class="position-fixed add-action-div pop-up d-none w-75 pt-4 pe-4" id="add-action-div-{{ $collection->id }}"
    style="position: fixed; top: 0; left: 50%; transform: translateX(-50%);z-index: 99999; width: 100%;height: 100%; overflow: auto;">
    <form action="{{ route('collection.storeAction') }}" method="POST">
        @csrf
        <input type="hidden" id="collection_scenario_id" name="collection_scenario_id"value="{{ $collection->id }}"
            class="form-control" style="width: 355px;">
        <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideAddActionDiv({{ $collection->id }})"
                style="border-radius:50%;top: -20px;right: -20px;"><svg class="svg-inline--fa fa-xmark"
                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 
                        301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 
                        150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 
                        0 45.25l-105.4 105.4L310.6 361.4z">
                    </path>
                </svg><!-- <i class="fa-solid fa-close"></i> Font Awesome fontawesome.com --></span>
            <div class="my-1">
                <input type="hidden" name="created_by" value='1'>
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname18"> Action name:</label>
                        <input type="text" name="action_name" class="form-control " id="inputname18"
                            placeholder="Action Name">
                        @error('action_name')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div class="my-1">
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname20">No. Of Days Follow-Up Action <a href="#"><svg
                                    class="svg-inline--fa fa-question bg-primary text-light p-1"
                                    style="border-radius: 50%;width: 18px;height: 22px;" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="question" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M204.3 32.01H96c-52.94 0-96 43.06-96 96c0 17.67 14.31 31.1 
                                        32 31.1s32-14.32 32-31.1c0-17.64 14.34-32 32-32h108.3C232.8 96.01 
                                        256 119.2 256 147.8c0 19.72-10.97 37.47-30.5 47.33L127.8 252.4C117.1 
                                        258.2 112 268.7 112 280v40c0 17.67 14.31 31.99 32 31.99s32-14.32 
                                        32-31.99V298.3L256 251.3c39.47-19.75 64-59.42 64-103.5C320 83.95 
                                        268.1 32.01 204.3 32.01zM144 400c-22.09 0-40 17.91-40 40s17.91 39.1 
                                        40 39.1s40-17.9 40-39.1S166.1 400 144 400z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-question bg-primary text-light p-1" style="border-radius: 50%;width: 18px;height: 22px;"></i> Font Awesome fontawesome.com --></a>:</label>
                        {{-- <select name="action_date" class="form-select" id="inputname19">
                            <option value="" selected disabled>
                                {{ __('select one') }}</option>
                            @foreach ($days as $day)
                                <option value="{{ $day }}">{{ $day }}
                                    days</option>
                            @endforeach
                        </select> --}}
                        <input type="date" name="action_date" class="form-control " id="inputname18"
                            placeholder="Action Date">
                        @error('action_date')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div class="my-1">
                <div class="col-12">
                    <div class="input-group">
                        <label for="inputname205"> {{ __('Action Type') }}*:</label>
                        <select name="action_type" class="form-select" id="inputname205">
                            <option value="" selected>
                                {{ __('Select One') }}</option>
                            @foreach ($actionTypes as $actionType)
                                <option value="{{ $actionType->id }}">
                                    {{ $actionType->en_name }}</option>
                            @endforeach
                        </select>
                        @error('action_type')
                            <div class="alert text-danger" style="font-weight: bold;">
                                {{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div><!--24-->
            <div class="d-none" id="dunning-letter">
                <div
                    class="modal-content w-100"style="overflow-x: hidden;margin:0 !important;overflow-y: scroll;height: 400px;">
                    <select class="form-select" id="inputname19">
                        <option value="" selected="">Do you want to copy the
                            content of an existing action?
                        </option>
                        <option value=""></option>
                        <option value="">Clients publics (FR) / Courrier avec accusé
                            réception (Dunning letter
                            -
                            Français)</option>
                        <option value="">Clients risqués (FR) / Courrier avec accusé
                            réception (Dunning letter
                            -
                            Français)</option>
                        <option value="">Key accounts scenario (EN) / Reminder by
                            post mail with acknowledge
                            of
                            receipt (Dunning letter)</option>
                        <option value="">Risky clients (EN) / Formal notice (Dunning
                            letter)</option>
                        <option value="">Risky clients (EN) / Reminder by post mail
                            with acknowledge of
                            receipt
                            (Dunning letter)
                        </option>
                        <option value="">Clients risqués (FR) / Courrier de mise en
                            demeure (Dunning letter
                            via
                            ERM - Français)</option>
                        <option value="">Scénario de relance standard / Courrier de
                            mise en demeure (Dunning
                            letter via ERM - Français)</option>
                        <option value="">Standard Collection Scenario / Letter of
                            formal notice (Dunning
                            letter
                            via ERM)</option>
                    </select>
                    <div class="row">
                        <div class="col-md-2 mt-1" id="sub_lb">
                            <h4 for="">Supject :</h4>
                        </div><!--l-3-->
                        <div class="col-md-10 mt-1">
                            <input type="text" class="form-control " id="mail_subject" name="mail_subject"
                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, consectetur!">
                        </div><!--r-3-->
                        <div class="col-md-2 mt-1">
                            <h4 class="mb-3">Message :</h4>
                            <p style="color: rgb(172, 169, 169); text-align: center;"><svg
                                    class="svg-inline--fa fa-hashtag hash mb-3" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="hashtag" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""
                                    style="height:30px;font-size: 2rem;">
                                    <path fill="currentColor"
                                        d="M416 127.1h-58.23l9.789-58.74c2.906-17.44-8.875-33.92-26.3-36.83c-17.53-2.875-33.92
                                        8.891-36.83 26.3L292.9 127.1H197.8l9.789-58.74c2.906-17.44-8.875-33.92-26.3-36.83c-17.53-2.875-33.92 
                                        8.891-36.83 26.3L132.9 127.1H64c-17.67 0-32 14.33-32 32C32 177.7 46.33 191.1 64 191.1h58.23l-21.33 
                                        128H32c-17.67 0-32 14.33-32 32c0 17.67 14.33 31.1 32 31.1h58.23l-9.789 58.74c-2.906 17.44 8.875 33.92 
                                        26.3 36.83C108.5 479.9 110.3 480 112 480c15.36 0 28.92-11.09 31.53-26.73l11.54-69.27h95.12l-9.789 
                                        58.74c-2.906 17.44 8.875 33.92 26.3 36.83C268.5 479.9 270.3 480 272 480c15.36 0 28.92-11.09 
                                        31.53-26.73l11.54-69.27H384c17.67 0 32-14.33 32-31.1c0-17.67-14.33-32-32-32h-58.23l21.33-128H416c17.67 0 
                                        32-14.32 32-31.1C448 142.3 433.7 127.1 416 127.1zM260.9 319.1H165.8L187.1 191.1h95.12L260.9 319.1z">
                                    </path>
                                </svg><!-- <i class="fa-solid fa-hashtag hash mb-4"></i> Font Awesome fontawesome.com --><br>
                                <a href="#" style="font-size:10px;">Incorporate
                                    dynamic content in your
                                    letters
                                    with #Hashtag</a>
                            </p>
                        </div><!--l-4-->
                        <div class="col-md-10 mt-1">
                            <div class="editor-container mb-1">
                                <textarea id="editor" name="mail_content" class="form-control" contenteditable="true" style="height:160px;"></textarea>
                            </div>
                        </div><!--r-4-->
                        <div class="col-md-2 mt-1">
                            <p>Languages</p>
                        </div>
                        <div class="col-md-10">
                            <select id="language" name="language" class="form-select"
                                aria-label="Default select example">
                                <option value="br" selected="">Brazilian</option>
                                <option value="ar">Arabic</option>
                                <option value="ch">Chinese (Simplified)</option>
                                <option value="de">Deutsch</option>
                                <option value="du">Dutch</option>
                                <option value="en">English</option>
                                <option value="es">Español</option>
                                <option value="fr">Français</option>
                                <option value="it">Italiano</option>
                                <option value="ja">Japanese</option>
                                <option value="po">Polski</option>
                                <option value="por">Português</option>
                                <option value="ro">Romanian</option>
                                <option value="tu">Turkish</option>
                            </select>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="form-check" id="is_automatic_action_check" style="display:none;">
                                <input class="form-check-input" type="checkbox" id="is_automatic_action"
                                    name="is_automatic_action" value="1">
                                <label class="form-check-label" for="exampleCheckbox1">Automatic action <svg
                                        class="svg-inline--fa fa-retweet" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="retweet" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M614.2 334.8C610.5 325.8 601.7 319.1 592 319.1H544V176C544 131.9 508.1 96 464 96h-128c-17.67 0-32 
                                            14.31-32 32s14.33 32 32 32h128C472.8 160 480 167.2 480 176v143.1h-48c-9.703 0-18.45 5.844-22.17 14.82s-1.656 
                                            19.29 5.203 26.16l80 80.02C499.7 445.7 505.9 448 512 448s12.28-2.344 16.97-7.031l80-80.02C615.8 354.1 617.9 
                                            343.8 614.2 334.8zM304 352h-128C167.2 352 160 344.8 160 336V192h48c9.703 0 18.45-5.844 22.17-14.82s1.656-19.29-5.
                                            203-26.16l-80-80.02C140.3 66.34 134.1 64 128 64S115.7 66.34 111 71.03l-80 80.02C24.17 157.9 22.11 168.2 25.83 
                                            177.2S38.3 192 48 192H96V336C96 380.1 131.9 416 176 416h128c17.67 0 32-14.31 32-32S321.7 352 304 352z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-retweet"></i> Font Awesome fontawesome.com --></label>
                            </div>
                            <div class="form-check" style="display:none;">
                                <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                                <label class="form-check-label" for="exampleCheckbox2">Internal interactive email
                                    <svg class="svg-inline--fa fa-up-right-from-square" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="up-right-from-square"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 
                                            28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 
                                            0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 
                                            12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 
                                            9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z">
                                        </path>
                                    </svg><!-- <i class="fa-solid fa-up-right-from-square"></i> Font Awesome fontawesome.com --></label>
                            </div>
                        </div>

                        <div class="col-md-12 mt-1">
                            <div class="row justify-content-end">
                                <div class="col-md-4">
                                    <button class="btn btn-secondary w-100"><svg class="svg-inline--fa fa-eye"
                                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 
                                                352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3
                                                256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 
                                                243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 
                                                288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 
                                                2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 
                                                112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 
                                                256C432 176.5 367.5 112 288 112z">
                                            </path>
                                        </svg><!-- <i class="fa-solid fa-eye"></i> Font Awesome fontawesome.com -->
                                        Dunning letter preview</button>
                                </div>
                            </div>
                        </div><!--r-5-->
                    </div><!--row-->
                </div><!--modal-content-->
            </div><!--modal-->
            <div class="text-center mt-1">
                <button type="submit" class="btn btn-success"><svg class="svg-inline--fa fa-plus"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.
                            67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 
                            32.01v144h144C417.7 224 432 238.3 432 256z">
                        </path>
                    </svg><!-- <i class="fa-solid fa-plus"></i> Font Awesome fontawesome.com -->
                    {{__("Add")}}
                </button>
            </div>
        </div>
    </form>
</div>
