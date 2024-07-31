@extends('layouts.dashboard.app')
@section('content')
    <div class="overlay d-none"
        style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.418);z-index: 9;">
    </div>
    @include('users.create')
    {{-- ////////////////////////// --}}
    <div class="position-fixed edit-user-div w-75 pop-up d-none pt-4 pe-4"
        style="top:5% ;left: 50%;transform: translate(-50%);z-index: 10;height: 90vh; overflow-y: scroll;overflow-x: hidden;">
        <div class="bg-white m-auto p-4 shadow-sm position-relative" style="border-radius: 10px;">
            <span class="btn btn-secondary position-absolute" onclick="hideAddUserDiv()"
                style="border-radius:50%;top: -20px;right: -20px;"><i class="fa-solid fa-close"></i></span>
            <div class="row align-items-center">
                <div class="col-md-3 mb-3">
                    <small class="">{{ __('E-Mail *:') }}</small>
                </div>
                <div class="col-md-9 mb-3">
                    <input required type="email" class="form-control" />
                </div>


                <div class="col-md-3 mb-3">
                    <small class="">{{ __('Username *:') }}</small>
                </div>

                <div class="col-md-9 mb-3">
                    <input required type="text" class="form-control" />
                </div>

                <div class="col-md-3 mb-3">
                    <small class="">{{ __('Full Name *:') }}</small>
                </div>

                <div class="col-md-9 mb-3">
                    <input required type="text" class="form-control" />
                </div>


                <div class="col-md-3 mb-3">
                    <small class="">{{ __('Images Of Account:') }}</small>
                </div>

                <div class="col-md-9 mb-3 mb-3">
                    <div class="change-img text-center ">
                        <img src="img/download.png" id="changeimg" class="img-fluid" alt="">
                        <div class="upload" id="uploads">
                            <label for="upload" class="text-center">{{ __('Upload') }}</label>
                            <input type="file" id="upload">
                        </div>
                    </div>
                </div>



                <div class="col-md-3 mb-3">
                    <small class="">{{ __('Phone:') }}</small>
                </div>

                <div class="col-md-9 mb-3">
                    <input type="text" class="form-control" />
                </div>

                <div class="col-md-3 mb-3">
                    <small class="">{{ __('Fax:') }}</small>
                </div>

                <div class="col-md-9 mb-3">
                    <input type="text" class="form-control" />
                </div>


                <div class="col-md-3 mb-3">
                    <small class="">{{ __('Function:') }}</small>
                </div>

                <div class="col-md-9 mb-3">
                    <input type="text" class="form-control" />
                </div>

                <div class="col-md-3 mb-3">
                    <small class="">{{ __('ID number:') }}</small>
                </div>

                <div class="col-md-9 mb-3">
                    <input type="text" class="form-control" />
                </div>

                <div class="col-md-3 mb-3">
                    <small class="">{{ __('Active account:') }}</small>
                </div>

                <div class="col-md-9 mb-3">
                    <div class="checks-bx d-flex gap-3">
                        <div>
                            <input type="radio" name="active" id="yes">
                            <label for="yes">{{ __('Yes') }}</label>
                        </div>
                        <div>
                            <input type="radio" name="active" id="no">
                            <label for="no">{{ __('No') }}</label>
                        </div>
                    </div>
                </div>

                <div class="px-4">
                    <div class="bg-light p-4">
                        <div class="row align-items-center">
                            <div class="col-md-3 mb-3">
                                <small class="">{{ __('Username:') }}</small>
                            </div>

                            <div class="col-md-9 mb-3">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-md-3 mb-3">
                                <small class="">{{ __('Role:') }}</small>
                            </div>
                            <div class="col-md-9 mb-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1" selected>{{ __('Sales Administration') }}</option>
                                    <option value="2">{{ __('Credit manager') }}</option>
                                    <option value="2">{{ __('Collector') }}</option>
                                    <option value="2">{{ __('Sales manager') }}</option>
                                    <option value="1">{{ __('Administrator') }}</option>
                                    <option value="2">{{ __('Financial controller') }}</option>
                                    <option value="2">{{ __('Executive Officer') }}</option>
                                    <option value="2">{{ __('Guest') }}</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="text-center mt-3">
                <div class="btn btn-success"><i class="fa-solid fa-check"></i> {{ __('Modify') }}</div>
            </div>
        </div>
    </div>

    <section class="ring-info text-center">

        <p class="mt-3 py-5"><i class="fa-regular fa-star px-3"></i>{{ __('Allow other people to use your account MY DSO MANAGER for your company') }} <span class="fw-bold">{{ __('Business Solutions') }}</span></p>
    </section><!--reing-info-->
    <section class="m-groups my-5">
        <div class="container-fluid">
            <div class="t-manage text-center text-capitalize">
                <h4 class="">{{ __('Manage users account') }}</h4>
            </div><!--t-manage-->
            <div class="row justify-content-end">
                <div class="col-auto">
                    <div class="new-s mt-5">
                        <button class="btn btn-primary py-3" onclick="showAddUserDiv()">
                            <i class="fa-solid fa-plus"></i> {{ __('Add a user') }}
                        </button>
                    </div><!--row-->
                </div><!--new-st-->


            </div><!--container-->
            <div class="row justify-content-end">
                <div class="col-auto">
                    <div class="f-searsh d-flex my-3 ">
                        <select class="form-select" id="inputname0">
                            <option value="" selected disabled>{{ __('Role') }}</option>
                            <option value="">{{ __('Role:') }}</option>
                            <option value="">{{ __('Collector') }}</option>
                            <option value="">{{ __('Credit Manager') }}</option>
                            <option value="">{{ __('Executive officer') }}</option>
                            <option value="">{{ __('Sales administration') }}</option>
                            <option value="">{{ __('Sales manager') }}</option>
                        </select>
                        <div class="d-flex ms-2">
                            <input type="text" placeholder="{{ __('Search') }}" style="border-radius:5px 0 0  5px;"
                                class="form-control">
                            <div class="btn btn-secondary p-2 px-3" style="border-radius: 0 5px 5px 0 ;"><i
                                    class="fas pt-1 fa-search"></i></div>
                        </div>

                    </div><!--f-searsh-->
                    <div class="row mt-3">
                        <div class="form-group d-flex justify-content-end">
                            <input type="text" class="form-control w-auto p-3" aria-describedby="emailHelp"
                                placeholder="{{ __('Multi-columns search') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-auto">

                    <div class="search-container">
                        <input type="text" placeholder="{{ __('Multi-column search') }}" class="search-input">

                    </div>

                </div><!--f-searsh-->
            </div>
        </div>

        <div class="table-responsive" id="table-scroll">
            <table class="table rounded px-2" id="my-table">
                <thead>
                    <tr class="text-center" style="border-bottom:solid 3px #9b9a9a;">
                        <th><input type="checkbox" class="form-check-input" id="exampleChe"></th>
                        @foreach (['First name', 'Last name', 'Active', 'E-mail', 'Phone', 'Function', 'Role', 'Actions'] as $column)
                            <th>
                                <div class="d-flex align-items-center justify-content-center gap-1">
                                    <i class="fa-solid fa-sort mb-2" style="cursor:pointer"></i>
                                    <h6>{{ __($column) }}</h6>
                                </div>
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr class="text-center main-colr">
                            <td><input type="checkbox" class="form-check-input mt-3" id="exampleChe"></td>
                            <td>
                                <p><img src="{{ asset('storage/' . $user->picture) }}"
                                        style="width:60px;height:60px;border-radius:50%" alt="">
                                    {{ $user->first_name }}</p>
                            </td>
                            <td>
                                <p class="mt-3">{{ $user->last_name }}</p>
                            </td>
                            <td>
                                <p class="mt-3"><i
                                        class="fa-solid {{ $user->active ? 'fa-check text-success' : 'fa-times text-danger' }}"></i>
                                </p>
                            </td>
                            <td><a href="mailto:{{ $user->email }}">
                                    <p class="mt-3">{{ $user->email }}</p>
                                </a></td>
                            <td>
                                <p class="mt-3">{{ $user->phone ?? __('None') }}</p>
                            </td>
                            <td>
                                <p class="mt-3">{{ $user->function ?? __('None') }}</p>
                            </td>
                            <td>
                                <p class="mt-3">{{ $user->role->name }}</p>
                            </td>
                            <td>
                                <button class="lock-btn rounded mt-3"><i class="fa-solid fa-lock"></i></button>
                                <button class="edt-btn rounded mt-3" onclick="showEditUserDiv({{ $user->id }})"><i
                                        class="fa-solid fa-pen"></i></button>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="del-btn rounded mt-3">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">{{ __('No users found.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>


        <div class="tab-btm my-3 container d-flex">
            <div class="my-5 px-3">
                <button id="dropbtn" class="btn btn-primary dropbtn" id="roleDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-pen px-3"></i>{{ __('Role') }}<i class="fas fa-arrow-down px-3"></i>
                </button>
                <ul class="dropdown-menu p-3" aria-labelledby="roleDropdown">
                    <li><a class="text-decoration-none text-dark" href="">{{ __('Credit Manager') }}</a></li>
                    <li><a class="text-decoration-none text-dark" href="">{{ __('Collector') }}</a></li>
                    <li><a class="text-decoration-none text-dark" href="">{{ __('Sales manager') }}</a></li>
                    <li><a class="text-decoration-none text-dark" href="">{{ __('Sales administration') }}</a></li>
                    <li><a class="text-decoration-none text-dark" href="">{{ __('Financial controller') }}</a></li>
                    <li><a class="text-decoration-none text-dark" href="">{{ __('Executive officer') }}</a></li>
                    <li><a class="text-decoration-none text-dark" href="">{{ __('Guest') }}</a></li>
                </ul>
            </div><!--create-->
            <div class="delete-g my-5">
                <button class="btn btn-danger text-light">
                    <i class="fas fa-trash"></i> {{ __('Delete All') }}
                </button>
            </div><!--create-->
        </div><!--tab-btm-->
        <div class="container text-center my-5">
            <button class="btn btn-success my-1 btn-add-i" onclick="exportTableToPDF()">{{ __('Export these data to Excel') }} <i
                    class="fa-solid fa-arrow-up-from-bracket"></i></button>
        </div>


    </section><!--m-groups-->

    <style>
        .table-responsive {
            overflow: hidden;
            position: relative;
            margin-bottom: 1rem;

        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;

        }

        .table th {
            background-color: white;
            font-weight: bold;
        }

        .btn-add-i {
            width: auto;
            display: inline-block;
        }

        @media (max-width: 768px) {
            .table td {
                font-size: 10px;
                padding: 0.5rem;
            }

            .table img {
                width: 30px;
                height: auto;
            }
        }

        @media (max-width:560px) {
            .ring-info p {
                font-size: 14px;
            }

            .t-manage p {
                font-size: 13px;
            }
        }
    </style>
@endsection
