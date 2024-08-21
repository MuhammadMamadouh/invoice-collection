<div>
    <form wire:submit.prevent="submit">
        <select class="form-select" id="inputname205" wire:model.live="selectedOption" aria-label="Default select example">
            <option value="" selected>{{ __('Select One') }}</option>
            <option value="option0">{{ __('No') }}</option>
            <option value="simple_e-mail">{{ __('Yes, simple e-mail') }}</option>
            <option value="internal_interactive_e-mail">{{ __('Yes, internal interactive e-mail') }}</option>
        </select>
        @if (in_array($selectedOption, ['simple_e-mail']))
            <div class="new-holab-1" id="hide-hoalp-1">
                <div class="row mt-3">
                    <div class="col-md-2">
                        <h4>From :</h4>
                    </div><!--l-1-->
                    <div class="col-md-10">
                        <input type="text" wire:model="from" value="form1">
                        <a href="#" style="text-decoration: none; font-weight: bold;" class="text-primary">
                            Paul Mayer < mohamed@gmail.com></a>
                        <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                            <p> <input type="checkbox" wire:model="get_a_copy" class="form-check-input mx-2"
                                    id="exampleChe">
                                Get a copy of this email.
                            </p>
                            <p> <input type="checkbox" wire:model="request_an_acknowledgment"
                                    class="form-check-input mx-2" id="exampleChe">
                                Request an acknowledgment of receipt.
                            </p>
                        </div>
                    </div><!--r-1-->

                    <div class="col-md-2 mt-2">
                        <select class="form-select" wire:model='type_to' id="">
                            <option value="" selected disabled>Select One:</option>
                            <option value="to">to</option>
                            <option value="cc">cc</option>
                            <option value="bcc">bcc</option>
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
                            <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span
                                    class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add another
                                recipient</a>
                            <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span
                                    class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add an external
                                recipient</a>
                        </div>
                    </div><!--r-2-->
                    <div class="col-md-2 mt-2">
                        <h4 for="">Subject :</h4>
                    </div><!--l-3-->
                    <div class="col-md-10 mt-2">
                        <input type="text" class="form-control" wire:model="subject" id=""
                            value="#client_code - #client_name">
                    </div><!--r-3-->
                    <div class="col-md-2 mt-2">
                        <h4 class="mb-5">Message :</h4>
                        <p style="color: rgb(172, 169, 169); text-align: center;"><i
                                class="fa-solid fa-hashtag hash mb-5"></i><br>
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
                                <button onclick="execCmd('createLink', prompt('Enter the URL:', 'http: '))"><i
                                        class="fas fa-link"></i></button>
                                <button onclick="execCmd('unlink')"><i class="fas fa-unlink"></i></button>
                                <button onclick="insertImage()"><i class="fas fa-image"></i></button>
                                <button onclick="insertTable()"><i class="fas fa-table"></i></button>
                                <button onclick="toggleHTML()">Toggle HTML</button>
                            </div>
                            <div id="editor" class="form-control" contenteditable="true"
                                oninput="updateEditorContent(this)">
                                Start typing here...
                            </div>
                            <input type="hidden" wire:model="editorContent">
                        </div>
                        <a href="#" style="text-decoration: none; color: rgb(155, 152, 152);"><span
                                class="mx-1"><i class="fa-solid fa-plus"></i></span>Add an item</a>
                    </div><!--r-4-->
                    <div class="col-md-4 mt-2">

                    </div><!--l-5-->
                    <div class="tw-btn-holab d-flex justify-content-end">

                        <div class="col-md-8 mt-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn btn-primary w-100 mt-3" id="hollabTwoShow"
                                        onclick="showHollabTwo()"><i class="fa-solid fa-eye"></i> Email
                                        preview</button>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success w-100 mt-3"><i
                                            class="fa-solid fa-check"></i> Send
                                        the
                                        email <i class="fa-solid fa-plus"></i> complete the action</button>
                                </div>
                            </div>
                        </div>
                    </div><!--r-5-->
                </div>
            </div>
        @endif
        {{-- @if (in_array($selectedOption, ['internal_interactive_e-mail']))
            <div class="new-holab-1" id="hide-hoalp-1">
                <div class="row mt-3">
                    <div class="col-md-2">
                        <h4>From :</h4>
                    </div><!--l-1-->
                    <div class="col-md-10">
                        <input type="hidden" name="from" value="form1">
                        <a href="#" style="text-decoration: none; font-weight: bold;" class="text-primary">
                            Paul Mayer < mohamed@gmail.com></a>
                        <div style=" display: flex; flex-wrap: wrap;" class="my-2">
                            <p> <input type="checkbox" name="get_a_copy" class="form-check-input mx-2"
                                    id="exampleChe">
                                Get a copy of this email.
                            </p>
                            <p> <input type="checkbox" name="request_an_acknowledgment" class="form-check-input mx-2"
                                    id="exampleChe">
                                Request an acknowledgment of receipt.
                            </p>
                        </div>
                    </div><!--r-1-->

                    <div class="col-md-2 mt-2">
                        <select class="form-select" id="">
                            <option value="" selected disabled>to :</option>
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
                            <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span
                                    class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add another
                                recipient</a>
                            <a href="#" class="text-primary mx-3" style="text-decoration: none;"><span
                                    class="mx-1"><i class="fa-solid fa-plus text-dark"></i></span>Add an external
                                recipient</a>
                        </div>
                    </div><!--r-2-->
                    <div class="col-md-2 mt-2">
                        <h4 for="">Supject :</h4>
                    </div><!--l-3-->
                    <div class="col-md-10 mt-2">
                        <input type="text" class="form-control" name="supject" id=""
                            value="#client_code - #client_name">
                    </div><!--r-3-->
                    <div class="col-md-2 mt-2">
                        <h4 class="mb-5">Message :</h4>
                        <p style="color: rgb(172, 169, 169); text-align: center;"><i
                                class="fa-solid fa-hashtag hash mb-5"></i><br>
                            Lorem ipsum dolor sit amet.</p>
                    </div><!--l-4-->
                    <div class="col-md-10 mt-2">
                        <div class="editor-container mb-1">
                            <div class="toolbar">
                                <button onclick="execCmd('bold')"><i class="fas fa-bold"></i></button>
                                <button onclick="execCmd('italic')"><i class="fas fa-italic"></i></button>
                                <button onclick="execCmd('underline')"><i class="fas fa-underline"></i></button>
                                <button onclick="execCmd('strikeThrough')"><i
                                        class="fas fa-strikethrough"></i></button>
                                <button onclick="execCmd('justifyLeft')"><i class="fas fa-align-left"></i></button>
                                <button onclick="execCmd('justifyCenter')"><i
                                        class="fas fa-align-center"></i></button>
                                <button onclick="execCmd('justifyRight')"><i class="fas fa-align-right"></i></button>
                                <button onclick="execCmd('justifyFull')"><i class="fas fa-align-justify"></i></button>
                                <button onclick="execCmd('insertUnorderedList')"><i
                                        class="fas fa-list-ul"></i></button>
                                <button onclick="execCmd('insertOrderedList')"><i class="fas fa-list-ol"></i></button>
                                <button onclick="execCmd('createLink', prompt('Enter the URL:', 'http: '))"><i
                                        class="fas fa-link"></i></button>
                                <button onclick="execCmd('unlink')"><i class="fas fa-unlink"></i></button>
                                <button onclick="insertImage()"><i class="fas fa-image"></i></button>
                                <button onclick="insertTable()"><i class="fas fa-table"></i></button>
                                <button onclick="toggleHTML()">Toggle HTML</button>
                            </div>
                            <div id="editor" class="form-control" contenteditable="true" 
                                wire:ignore
                                oninput="updateEditorContent(this)">
                                Start typing here...
                            </div>
                        </div>
                        <a href="#"
                                style="text-decoration: none; color: rgb(155, 152, 152);"><span class="mx-1"><i
                                        class="fa-solid fa-plus"></i></span>Add an item</a>
                            </div><!--r-4-->
                            <div class="col-md-4 mt-2">
                            </div><!--l-5-->
                            <div class="tw-btn-holab d-flex justify-content-end">
                                <div class="col-md-8 mt-2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary w-100 mt-3" id="hollabTwoShow"
                                                onclick="showHollabTwo()"><i class="fa-solid fa-eye"></i> Email
                                                preview</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-success w-100 mt-3"><i
                                                    class="fa-solid fa-check"></i> Send
                                                the
                                                email <i class="fa-solid fa-plus"></i> complete the action</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!--r-5-->
                        </div>
                    </div>
        @endif --}}
    </form>
    <script>
        document.getElementById('editor').addEventListener('input', function() {
            @this.set('editorContent', this.innerHTML);
        });
    </script>
</div>
