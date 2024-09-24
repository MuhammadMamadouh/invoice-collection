<section class="sections-2 d-none" id="sec-2">
    <div class="four-inputs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="firt d-flex justify-content-around mt-3 mb-3">
                        <label>Minimum amount for collection :</label>
                        <input type="text" placeholder="50">
                        <span>€</span>
                    </div>
                    <div class="firt d-flex justify-content-around mt-3 mb-3">
                        <label>Ignore transactions whose amount is less than :</label>
                        <input type="text" placeholder="50">
                        <span>€</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mt-3 mb-3">
                        <div class="automatic-between d-flex align-items-center">
                            <h6>Automatic action between </h6>
                            <select name="relance_auto_horaire_min" style="font-size: 12px;" class="">
                                <option value="1">1:00</option>
                                <option value="2">2:00</option>
                                <option value="3">3:00</option>
                                <option value="4">4:00</option>
                                <option value="5">5:00</option>
                                <option value="6">6:00</option>
                                <option value="7">7:00</option>
                                <option value="8" selected="">8:00</option>
                                <option value="9">9:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                                <option value="20">20:00</option>
                                <option value="21">21:00</option>
                                <option value="22">22:00</option>
                                <option value="23">23:00</option>
                                <option value="24">24:00</option>
                            </select>
                            <h6 style="margin: 5px;">and</h6>
                            <select name="relance_auto_horaire_min" style="font-size: 12px;" class="">
                                <option value="1">1:00</option>
                                <option value="2">2:00</option>
                                <option value="3">3:00</option>
                                <option value="4">4:00</option>
                                <option value="5">5:00</option>
                                <option value="6">6:00</option>
                                <option value="7">7:00</option>
                                <option value="8" selected="">8:00</option>
                                <option value="9">9:00</option>
                                <option value="10">10:00</option>
                                <option value="11">11:00</option>
                                <option value="12">12:00</option>
                                <option value="13">13:00</option>
                                <option value="14">14:00</option>
                                <option value="15">15:00</option>
                                <option value="16">16:00</option>
                                <option value="17">17:00</option>
                                <option value="18">18:00</option>
                                <option value="19">19:00</option>
                                <option value="20">20:00</option>
                                <option value="21">21:00</option>
                                <option value="22">22:00</option>
                                <option value="23">23:00</option>
                                <option value="24">24:00</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6   mt-3 mb-3 d-flex align-items-center justify-content-center">
                        <div class="radi-inputs d-flex">
                            <input type="checkbox" name="inputs-group" id="Sun">
                            <label for="Sun">Sun</label>
                        </div>
                        <div class="radi-inputs d-flex">
                            <input type="checkbox" name="inputs-group" id="Mon">
                            <label for="Mon">Mon</label>
                        </div>
                        <div class="radi-inputs d-flex">
                            <input type="checkbox" name="inputs-group" id="Tue">
                            <label for="Tue">Tue</label>
                        </div>
                        <div class="radi-inputs d-flex">
                            <input type="checkbox" name="inputs-group" id="Wed">
                            <label for="Wed">Wed</label>
                        </div>
                        <div class="radi-inputs d-flex">
                            <input type="checkbox" name="inputs-group" id="Thu">
                            <label for="Thu">Thu</label>
                        </div>
                        <div class="radi-inputs d-flex">
                            <input type="checkbox" name="inputs-group" id="Fri">
                            <label for="Fri">Fri</label>
                        </div>
                        <div class="radi-inputs d-flex">
                            <input type="checkbox" name="inputs-group" id="Sat">
                            <label for="Sat">Sat</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="editor mt-3 mb-3 ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="my-3">Common signature ( #my_company_signature ):</p>
                    <a href="#" class="mt-3 mb-2">Incorporate dynamic content in your emails with
                        #Hashtag</a>
                </div>
                <div class="col-lg-6">
                    <div class="editor-container mb-1">
                        {{-- <div class="toolbar">
                                <button type="button" onclick="execCmd('bold')"><svg class="svg-inline--fa fa-bold"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bold"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor" d="M321.1 242.4C340.1 220.1 352 191.6 352 160c0-70.59-57.42-128-128-128L32
                                                            32.01c-17.67 0-32 14.31-32 32s14.33 32 32 32h16v320H32c-17.67 0-32 14.31-32
                                                            32s14.33 32 32 32h224c70.58 0 128-57.41 128-128C384 305.3 358.6 264.8 321.1
                                                            242.4zM112 96.01H224c35.3 0 64 28.72 64 64s-28.7 64-64 64H112V96.01zM256
                                                            416H112v-128H256c35.3 0 64 28.71 64 63.1S291.3 416 256 416z">
                                        </path>
                                    </svg><!-- <i class="fas fa-bold"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('italic')"><svg
                                        class="svg-inline--fa fa-italic" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="italic" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M384 64.01c0 17.69-14.31 32-32 32h-58.67l-133.3 320H224c17.69 0 32 14.31 32
                                                            32s-14.31 32-32 32H32c-17.69 0-32-14.31-32-32s14.31-32 32-32h58.67l133.3-320H160c-17.69
                                                            0-32-14.31-32-32s14.31-32 32-32h192C369.7 32.01 384 46.33 384 64.01z">
                                        </path>
                                    </svg><!-- <i class="fas fa-italic"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('underline')"><svg
                                        class="svg-inline--fa fa-underline" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="underline" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M416 448H32c-17.69 0-32 14.31-32 32s14.31 32 32 32h384c17.69 0 32-14.31 32-32S433.7
                                                            448 416 448zM48 64.01H64v160c0 88.22 71.78 159.1 160 159.1s160-71.78 160-159.1v-160h16c17.69
                                                            0 32-14.32 32-32s-14.31-31.1-32-31.1l-96-.0049c-17.69 0-32 14.32-32 32s14.31 32 32 32H320v160c0
                                                            52.94-43.06 95.1-96 95.1S128 276.1 128 224v-160h16c17.69 0 32-14.31 32-32s-14.31-32-32-32l-96
                                                            .0049c-17.69 0-32 14.31-32 31.1S30.31 64.01 48 64.01z">
                                        </path>
                                    </svg><!-- <i class="fas fa-underline"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('strikeThrough')"><svg
                                        class="svg-inline--fa fa-strikethrough" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="strikethrough" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M332.2 319.9c17.22 12.17 22.33 26.51 18.61 48.21c-3.031 17.59-10.88 29.34-24.72
                                                            36.99c-35.44 19.75-108.5 11.96-186-19.68c-16.34-6.686-35.03 1.156-41.72 17.53s1.188
                                                            35.05 17.53 41.71c31.75 12.93 95.69 35.37 157.6 35.37c29.62 0 58.81-5.156 83.72-18.96c30.81-17.09
                                                            50.44-45.46 56.72-82.11c3.998-23.27 2.168-42.58-3.488-59.05H332.2zM488 239.9l-176.5-
                                                            .0309c-15.85-5.613-31.83-10.34-46.7-14.62c-85.47-24.62-110.9-39.05-103.7-81.33c2.5-14.53
                                                            10.16-25.96 22.72-34.03c20.47-13.15 64.06-23.84 155.4 .3438c17.09 4.531 34.59-5.
                                                            654 39.13-22.74c4.531-17.09-5.656-34.59-22.75-39.12c-91.31-24.18-160.7-21.62-206.3
                                                            7.654C121.8 73.72 103.6 101.1 98.09 133.1C89.26 184.5 107.9 217.3 137.2 239.9L24
                                                            239.9c-13.25 0-24 10.75-24 23.1c0 13.25 10.75 23.1 24 23.1h464c13.25 0 24-10.75
                                                            24-23.1C512 250.7 501.3 239.9 488 239.9z">
                                        </path>
                                    </svg><!-- <i class="fas fa-strikethrough"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('justifyLeft')"><svg
                                        class="svg-inline--fa fa-align-left" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="align-left" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M256 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H256C273.7 32 288 46.33 288
                                                            64C288 81.67 273.7 96 256 96zM256 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32
                                                            288H256C273.7 288 288 302.3 288 320C288 337.7 273.7 352 256 352zM0 192C0 174.3 14.33
                                                            160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0
                                                            209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416
                                                            448 430.3 448 448C448 465.7 433.7 480 416 480z">
                                        </path>
                                    </svg><!-- <i class="fas fa-align-left"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('justifyCenter')"><svg
                                        class="svg-inline--fa fa-align-center" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="align-center" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M320 96H128C110.3 96 96 81.67 96 64C96 46.33 110.3 32 128 32H320C337.7 32 352
                                                            46.33 352 64C352 81.67 337.7 96 320 96zM416 224H32C14.33 224 0 209.7 0 192C0 174.3
                                                            14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224zM0 448C0
                                                            430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480H32C14.33
                                                            480 0 465.7 0 448zM320 352H128C110.3 352 96 337.7 96 320C96 302.3 110.3 288 128 288H320C337.7
                                                            288 352 302.3 352 320C352 337.7 337.7 352 320 352z">
                                        </path>
                                    </svg><!-- <i class="fas fa-align-center"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('justifyRight')"><svg
                                        class="svg-inline--fa fa-align-right" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="align-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M416 96H192C174.3 96 160 81.67 160 64C160 46.33 174.3 32 192 32H416C433.7 32 448 46.33
                                                            448 64C448 81.67 433.7 96 416 96zM416 352H192C174.3 352 160 337.7 160 320C160 302.3 174.3
                                                            288 192 288H416C433.7 288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33
                                                            160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0
                                                            192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3
                                                            448 448C448 465.7 433.7 480 416 480z">
                                        </path>
                                    </svg><!-- <i class="fas fa-align-right"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('justifyFull')"><svg
                                        class="svg-inline--fa fa-align-justify" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="align-justify" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H416C433.7 32 448 46.33 448 64C448
                                                            81.67 433.7 96 416 96zM416 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H416C433.7
                                                            288 448 302.3 448 320C448 337.7 433.7 352 416 352zM0 192C0 174.3 14.33 160 32 160H416C433.7
                                                            160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33
                                                            480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z">
                                        </path>
                                    </svg><!-- <i class="fas fa-align-justify"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('insertUnorderedList')"><svg
                                        class="svg-inline--fa fa-list-ul" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="list-ul" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M16 96C16 69.49 37.49 48 64 48C90.51 48 112 69.49 112 96C112 122.5 90.51 144 64 144C37.49
                                                            144 16 122.5 16 96zM480 64C497.7 64 512 78.33 512 96C512 113.7 497.7 128 480 128H192C174.3 128
                                                            160 113.7 160 96C160 78.33 174.3 64 192 64H480zM480 224C497.7 224 512 238.3 512 256C512 273.7
                                                            497.7 288 480 288H192C174.3 288 160 273.7 160 256C160 238.3 174.3 224 192 224H480zM480 384C497.7
                                                            384 512 398.3 512 416C512 433.7 497.7 448 480 448H192C174.3 448 160 433.7 160 416C160 398.3 174.3
                                                            384 192 384H480zM16 416C16 389.5 37.49 368 64 368C90.51 368 112 389.5 112 416C112 442.5 90.51 464
                                                            64 464C37.49 464 16 442.5 16 416zM112 256C112 282.5 90.51 304 64 304C37.49 304 16 282.5 16 256C16
                                                            229.5 37.49 208 64 208C90.51 208 112 229.5 112 256z">
                                        </path>
                                    </svg><!-- <i class="fas fa-list-ul"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('insertOrderedList')"><svg
                                        class="svg-inline--fa fa-list-ol" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="list-ol" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M55.1 56.04C55.1 42.78 66.74 32.04 79.1 32.04H111.1C125.3 32.04 135.1 42.78 135.1
                                                            56.04V176H151.1C165.3 176 175.1 186.8 175.1 200C175.1 213.3 165.3 224 151.1 224H71.1C58.74
                                                            224 47.1 213.3 47.1 200C47.1 186.8 58.74 176 71.1 176H87.1V80.04H79.1C66.74 80.04 55.1 69.29
                                                            55.1 56.04V56.04zM118.7 341.2C112.1 333.8 100.4 334.3 94.65 342.4L83.53 357.9C75.83 368.7
                                                            60.84 371.2 50.05 363.5C39.26 355.8 36.77 340.8 44.47 330.1L55.59 314.5C79.33 281.2 127.9
                                                            278.8 154.8 309.6C176.1 333.1 175.6 370.5 153.7 394.3L118.8 432H152C165.3 432 176 442.7 176
                                                            456C176 469.3 165.3 480 152 480H64C54.47 480 45.84 474.4 42.02 465.6C38.19 456.9 39.9 446.7
                                                            46.36 439.7L118.4 361.7C123.7 355.9 123.8 347.1 118.7 341.2L118.7 341.2zM512 64C529.7 64 544
                                                            78.33 544 96C544 113.7 529.7 128 512 128H256C238.3 128 224 113.7 224 96C224 78.33 238.3 64 256
                                                            64H512zM512 224C529.7 224 544 238.3 544 256C544 273.7 529.7 288 512 288H256C238.3 288 224 273.7
                                                            224 256C224 238.3 238.3 224 256 224H512zM512 384C529.7 384 544 398.3 544 416C544 433.7 529.7 448
                                                            512 448H256C238.3 448 224 433.7 224 416C224 398.3 238.3 384 256 384H512z">
                                        </path>
                                    </svg><!-- <i class="fas fa-list-ol"></i> Font Awesome fontawesome.com --></button>
                                <button type="button"
                                    onclick="execCmd('createLink', prompt('Enter the URL:', 'http://'))"><svg
                                        class="svg-inline--fa fa-link" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="link" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4
                                                            318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3
                                                            281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99
                                                            320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404
                                                            255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741
                                                            392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2
                                                            247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7
                                                            230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566
                                                            139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2
                                                            79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3
                                                            579.8 267.7L467.5 380z">
                                        </path>
                                    </svg><!-- <i class="fas fa-link"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="execCmd('unlink')"><svg
                                        class="svg-inline--fa fa-link-slash" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="link-slash" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M185.7 120.3C242.5 75.82 324.7 79.73 376.1 131.1C420.1 175.1 430.9 239.6 406.7
                                                            293.5L438.6 318.4L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.1
                                                            430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9
                                                            48.94L393.5 47.82C451 6.732 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8
                                                            267.7L489.3 358.2L630.8 469.1C641.2 477.3 643.1 492.4 634.9 502.8C626.7 513.2 611.6 515.1
                                                            601.2 506.9L9.196 42.89C-1.236 34.71-3.065 19.63 5.112 9.196C13.29-1.236 28.37-3.065 38.81
                                                            5.112L185.7 120.3zM238.1 161.1L353.4 251.7C359.3 225.5 351.7 197.2 331.7 177.2C306.6 152.1
                                                            269.1 147 238.1 161.1V161.1zM263 380C233.1 350.1 218.7 309.8 220.9 270L406.6 416.4C357.4 431
                                                            301.9 418.9 263 380V380zM116.6 187.9L167.2 227.8L105.5 289.5C73.99 320.1 73.99 372 105.5
                                                            403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8
                                                            432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741
                                                            300.7 60.21 244.3L116.6 187.9z">
                                        </path>
                                    </svg><!-- <i class="fas fa-unlink"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="insertImage()"><svg class="svg-inline--fa fa-image"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M447.1 32h-384C28.64 32-.0091 60.65-.0091 96v320c0 35.35 28.65 64 63.1
                                                            64h384c35.35 0 64-28.65 64-64V96C511.1 60.65 483.3 32 447.1 32zM111.1 96c26.51
                                                            0 48 21.49 48 48S138.5 192 111.1 192s-48-21.49-48-48S85.48 96 111.1 96zM446.1
                                                            407.6C443.3 412.8 437.9 416 432 416H82.01c-6.021 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81
                                                            1.334-16.68l70-96C142.1 290.4 146.9 288 152 288s9.916 2.441 12.93 6.574l32.46 44.51l93.3-139.1C293.7
                                                            194.7 298.7 192 304 192s10.35 2.672 13.31 7.125l128 192C448.6 396 448.9 402.3 446.1 407.6z">
                                        </path>
                                    </svg><!-- <i class="fas fa-image"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="insertTable()"><svg class="svg-inline--fa fa-table"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor" d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0
                                                            451.3 0 416V96C0 60.65 28.65 32 64 32H448zM224 256V160H64V256H224zM64 320V416H224V320H64zM288
                                                            416H448V320H288V416zM448 256V160H288V256H448z">
                                        </path>
                                    </svg><!-- <i class="fas fa-table"></i> Font Awesome fontawesome.com --></button>
                                <button type="button" onclick="toggleHTML()">Toggle HTML</button>
                            </div> --}}
                        <div id="editor" style="height:150px ;" class="form-control" contenteditable="true">
                            Start typing here...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
