<section class='d-none sections-1' id="sec-3">
    <div class="flag-dropdown  mt-3 mb-3">
        <div class="container-fluid d-flex justify-content-end ">
            <button type="button" class="btn btn-secondary " onclick="showCreateGroupDiv2()"><i
                    class="fa-solid fa-plus"></i> {{ __('New collection scenario') }}</button>
            {{-- ------------------------------------------------------------------------------- --}}
            @include('collection_scenarios.create_predefined_collection_scenarios')
            {{-- ------------------------------------------------------------------------------- --}}
        </div>
    </div>
    <div class="two-contents mt-2 mb-4">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-2 col-3 text-center d-flex">
                    <h6>{{ __('collection scenarios') }}</h6>
                </div>
                <div class="col-md-8 col-6 text-center">
                    <h6>{{ __('action of collection scenarios') }}</h6>
                </div>
            </div>
            <div class="">
                @forelse ($preCollections as $key => $collection)
                    <div class="row"
                        style=" {{ $key % 2 == 0 ? 'background-color:#f2f2f2; border: 1px solid #cfcbcb;' : 'background-color:#ffffff' }}">
                        <div class="col-lg-4">
                            <div class="content-2-desc">
                                <h6 class="mt-3 mb-3">{{ $collection->en_name }}</h6>
                                {{-- <div class="open-serch">
                                    <a href="" class="text-black-50 text-center">
                                        {{ $collection->client->count() }} {{ __('clients use this collection') }}
                                        {{ __('scenarioLink') }}
                                        <span><i class="fa-regular fa-share-from-square"></i></span>
                                    </a>
                                </div> --}}
                                <div class="three-icons-in-action mt-3 mb-3" style="display: inline-flex;">
                                    <button class="text-black-50" onclick="showEditGroupDiv2({{ $collection->id }})">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    {{-- ------------------------------------------------------------------------------- --}}
                                    @include('collection_scenarios.edit_predefined_collection_scenarios')
                                    {{-- ------------------------------------------------------------------------------- --}}
                                    <form
                                        action="{{ route('pre-defined_collection_scenarios.destroy', $collection->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="text-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    {{-- <form action="{{ route('collection.duplicateScenario', $collection->id) }}"
                                        method="POST">
                                        @csrf
                                        <button class="text-success"><i class="fa-solid fa-copy"></i></button>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-md-12">
                            <div class="end-buttons text-end container">
                                <button class="btn btn-secondary text-capitalize mt-2"
                                    onclick="showAddActionDiv2({{ $collection->id }})">
                                    <span><i class="fa-solid fa-plus"></i></span>{{ __('Add An Action') }}
                                </button>
                            </div>
                            {{-- <div class="overlay d-none"
                                    style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;">
                                </div> --}}

                            {{-- ------------------------------------------------------------------------------- --}}
                            @include('collection_scenarios.create_predefined_collection_scenarios_actions')
                            {{-- ------------------------------------------------------------------------------- --}}

                            @foreach ($collection->scenarioActions as $ActionScenario)
                                <div class="content-text-2">
                                    <ul class="d-flex">
                                        <span>@</span>
                                        <li><a href="#"
                                                onclick="showEditActionDiv2({{ $ActionScenario->id }})">{{ $ActionScenario->action_name }}</a>
                                        </li>
                                        <span>{{ $ActionScenario->action_date }} day(s)
                                            {{-- <img src="img/france.png"alt=""> --}}
                                        </span>
                                    </ul>
                                </div>

                            {{-- ------------------------------------------------------------------------------- --}}
                            @include('collection_scenarios.edit_predefined_collection_scenarios_actions')
                            {{-- ------------------------------------------------------------------------------- --}}
                                {{-- <div id="dunning-letter" class="clearr">
                                                <div class="modal-content w-100"
                                                    style="margin:auto;overflow-x: hidden;overflow-y: scroll;height: 400px;">
                                                    <select class="form-select" id="inputname19">
                                                        <option value="" selected="">Do you want to copy the
                                                            content of an existing action?</option>
                                                        <option value=""></option>
                                                        <option value="">Clients publics (FR) / Courrier avec
                                                            accusé réception (Dunning letter - Français)</option>
                                                        <option value="">Clients risqués (FR) / Courrier avec
                                                            accusé réception (Dunning letter - Français)</option>
                                                        <option value="">Key accounts scenario (EN) / Reminder by
                                                            post mail with acknowledge of receipt (Dunning letter)
                                                        </option>
                                                        <option value="">Risky clients (EN) / Formal notice
                                                            (Dunning letter)
                                                        </option>
                                                        <option value="">Risky clients (EN) / Reminder by post
                                                            mail with acknowledge of receipt (Dunning letter)</option>
                                                        <option value="">Clients risqués (FR) / Courrier de mise
                                                            en demeure (Dunning letter via ERM - Français)</option>
                                                        <option value="">Scénario de relance standard / Courrier
                                                            de mise en demeure (Dunning letter via ERM - Français)
                                                        </option>
                                                        <option value="">Standard Collection Scenario / Letter of
                                                            formal notice (Dunning letter via ERM)</option>
                                                    </select>
                                                    <div class="row">
                                                        <div class="col-md-2 mt-2" id="sub_lb">
                                                            <h4 for="">Supject :</h4>
                                                        </div><!--l-3-->
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control clear-1"
                                                                id="mail_subject" name="mail_subject"
                                                                value="{{ $ActionScenario->mail_subject }}">
                                                        </div><!--r-3-->
                                                        <div class="col-md-2">
                                                            <h4>Message :</h4>
                                                            <p style="color: rgb(172, 169, 169); text-align: center;">
                                                                <svg class="svg-inline--fa fa-hashtag hash"
                                                                    style="height:30px;font-size:none;"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="hashtag"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M416 127.1h-58.23l9.789-58.74c2.906-17.44-8.875-33.92-26.3-36.83c-17.53-2.875-33.92 8.891-36.83 26.3L292.9 127.1H197.8l9.789-58.74c2.906-17.44-8.875-33.92-26.3-36.83c-17.53-2.875-33.92 8.891-36.83 26.3L132.9 127.1H64c-17.67 0-32 14.33-32 32C32 177.7 46.33 191.1 64 191.1h58.23l-21.33 128H32c-17.67 0-32 14.33-32 32c0 17.67 14.33 31.1 32 31.1h58.23l-9.789 58.74c-2.906 17.44 8.875 33.92 26.3 36.83C108.5 479.9 110.3 480 112 480c15.36 0 28.92-11.09 31.53-26.73l11.54-69.27h95.12l-9.789 58.74c-2.906 17.44 8.875 33.92 26.3 36.83C268.5 479.9 270.3 480 272 480c15.36 0 28.92-11.09 31.53-26.73l11.54-69.27H384c17.67 0 32-14.33 32-31.1c0-17.67-14.33-32-32-32h-58.23l21.33-128H416c17.67 0 32-14.32 32-31.1C448 142.3 433.7 127.1 416 127.1zM260.9 319.1H165.8L187.1 191.1h95.12L260.9 319.1z">
                                                                    </path>
                                                                </svg><!-- <i class="fa-solid fa-hashtag hash mb-4"></i> Font Awesome fontawesome.com --><br>
                                                                <a href="#" style="font-size:10px;">Incorporate
                                                                    dynamic content in your letters with #Hashtag</a>
                                                            </p>
                                                        </div><!--l-4-->
                                                        <div class="col-md-10">
                                                            <div class="editor-container">
                                                                <textarea id="editor" name="mail_content" class="form-control clear-2" contenteditable="true">{{ $ActionScenario->mail_content }}</textarea>
                                                            </div>
                                                        </div><!--r-4-->
                                                        <div class="col-md-2">
                                                            <p>Languages</p>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <select id="language" name="language"
                                                                class="form-select"
                                                                aria-label="Default select example">
                                                                <option value="br"
                                                                    @if ($ActionScenario->language == 'br') selected @endif>
                                                                    Brazilian</option>
                                                                <option value="ar"
                                                                    @if ($ActionScenario->language == 'ar') selected @endif>
                                                                    Arabic</option>
                                                                <option value="ch"
                                                                    @if ($ActionScenario->language == 'ch') selected @endif>
                                                                    Chinese (Simplified)</option>
                                                                <option value="de"
                                                                    @if ($ActionScenario->language == 'de') selected @endif>
                                                                    Deutsch</option>
                                                                <option value="du"
                                                                    @if ($ActionScenario->language == 'du') selected @endif>
                                                                    Dutch</option>
                                                                <option value="en"
                                                                    @if ($ActionScenario->language == 'en') selected @endif>
                                                                    English</option>
                                                                <option value="es"
                                                                    @if ($ActionScenario->language == 'es') selected @endif>
                                                                    Español</option>
                                                                <option value="fr"
                                                                    @if ($ActionScenario->language == 'fr') selected @endif>
                                                                    Français</option>
                                                                <option value="it"
                                                                    @if ($ActionScenario->language == 'it') selected @endif>
                                                                    Italiano</option>
                                                                <option value="ja"
                                                                    @if ($ActionScenario->language == 'ja') selected @endif>
                                                                    Japanese</option>
                                                                <option value="po"
                                                                    @if ($ActionScenario->language == 'po') selected @endif>
                                                                    Polski</option>
                                                                <option value="por"
                                                                    @if ($ActionScenario->language == 'por') selected @endif>
                                                                    Português</option>
                                                                <option value="ro"
                                                                    @if ($ActionScenario->language == 'ro') selected @endif>
                                                                    Romanian</option>
                                                                <option value="tu"
                                                                    @if ($ActionScenario->language == 'tu') selected @endif>
                                                                    Turkish</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-10">
                                                            @if ($ActionScenario->action_type == 5 || $ActionScenario->action_type == 7)
                                                                <div class="form-check"
                                                                    id="is_automatic_action_check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="is_automatic_action"
                                                                        name="is_automatic_action" value="1"
                                                                        @if ($ActionScenario->is_automatic_action == 1) checked @endif>
                                                                    <label class="form-check-label"
                                                                        for="exampleCheckbox1">Automatic action <svg
                                                                            class="svg-inline--fa fa-retweet"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="retweet"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 640 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M614.2 334.8C610.5 325.8 601.7 319.1 592 319.1H544V176C544 131.9 508.1 96 464 96h-128c-17.67 0-32 14.31-32 32s14.33 32 32 32h128C472.8 160 480 167.2 480 176v143.1h-48c-9.703 0-18.45 5.844-22.17 14.82s-1.656 19.29 5.203 26.16l80 80.02C499.7 445.7 505.9 448 512 448s12.28-2.344 16.97-7.031l80-80.02C615.8 354.1 617.9 343.8 614.2 334.8zM304 352h-128C167.2 352 160 344.8 160 336V192h48c9.703 0 18.45-5.844 22.17-14.82s1.656-19.29-5.203-26.16l-80-80.02C140.3 66.34 134.1 64 128 64S115.7 66.34 111 71.03l-80 80.02C24.17 157.9 22.11 168.2 25.83 177.2S38.3 192 48 192H96V336C96 380.1 131.9 416 176 416h128c17.67 0 32-14.31 32-32S321.7 352 304 352z">
                                                                            </path>
                                                                        </svg><!-- <i class="fa-solid fa-retweet"></i> Font Awesome fontawesome.com --></label>
                                                                </div>
                                                            @endif
                                                            <div class="form-check" style="display:none;">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="exampleCheckbox2">
                                                                <label class="form-check-label"
                                                                    for="exampleCheckbox2">Internal interactive email
                                                                    <svg class="svg-inline--fa fa-up-right-from-square"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas"
                                                                        data-icon="up-right-from-square"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z">
                                                                        </path>
                                                                    </svg><!-- <i class="fa-solid fa-up-right-from-square"></i> Font Awesome fontawesome.com --></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="row justify-content-end">
                                                                <div class="col-md-4">
                                                                    <button class="btn btn-secondary w-100"><svg
                                                                            class="svg-inline--fa fa-eye"
                                                                            aria-hidden="true" focusable="false"
                                                                            data-prefix="fas" data-icon="eye"
                                                                            role="img"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 576 512" data-fa-i2svg="">
                                                                            <path fill="currentColor"
                                                                                d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z">
                                                                            </path>
                                                                        </svg><!-- <i class="fa-solid fa-eye"></i> Font Awesome fontawesome.com -->
                                                                        Dunning letter preview</button>
                                                                </div>
                                                            </div>
                                                        </div><!--r-5-->
                                                    </div><!--row-->
                                                </div><!--modal-content-->
                                            </div><!--modal--> --}}
                            @endforeach
                        </div>
                    </div>
                @empty
                    <p>No scenarios Yet....</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        function showAddActionDiv2(collectionId) {
            document.getElementById(`add-action-div2-${collectionId}`).classList.remove("d-none")
            document.querySelector(".overlay").classList.remove("d-none")
        }

        function showEditActionDiv2(collectionId) {
            document.querySelector(`.edit-action-div2-${collectionId}`).classList.remove("d-none");
            document.querySelector(".overlay").classList.remove("d-none");
        }

        function hideAddActionDiv2(collectionId) {
            document.getElementById(`add-action-div2-${collectionId}`).classList.add("d-none")
            document.querySelector(".overlay").classList.add("d-none")
            document.querySelector(".new-collection-scenario").classList.add("d-none")
        }

        function hideEditActionDiv2(collectionId) {
            document.querySelector(`.edit-action-div2-${collectionId}`).classList.add("d-none")
            document.querySelector(".overlay").classList.add("d-none")
            document.querySelector(".new-collection-scenario").classList.add("d-none")
        }
    </script>
@endpush