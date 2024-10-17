<div class="navbar-all-site cairo-uniquifier">
    <div class="mb-0 top-navbar ">
        @include('dashboard.include.translationDropdown')
        <div class="container">
            <span class="inputicons">
                <i class="fa-solid fa-book"></i></span><input type="text" class="mt-2 "
                placeholder="Contact Us For Personalized Demo">
            <a href="settings.html" class="mt-4 "><i class="fa-solid fa-house"></i> </a><a href="#">
                {{ __('My account') }}</a>
            <a href="#"><img src="{{ asset('img/person2.jpg') }}" class="img-fluid" alt=""></a>
            <span class="mt-4 "><i class="fa-solid fa-power-off"></i><a href="#"> {{ __('sign out') }}</a></span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="text-light"><i class="fa-solid fa-bars p-1"></i></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
                    <li class="nav-item active d-flex align-items-center">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}"><span><i
                                    class="fa-solid fa-eye"></i></span>
                            global view</a>
                        <i class="fa-solid fa-gear nav-link bg-dark" onclick="showSetts()"
                            style="cursor:pointer ;padding: 12px;"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('collection.manual.actions') }}"><span><i
                                    class="fa-solid fa-clock"></i></span>
                            collection</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            <span><i class="fa-solid fa-bolt "></i></span>risk
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clients.index') }}"><span><i
                                    class="fa-solid fa-globe"></i></span>
                            clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="fa-solid fa-magnifying-glass"></i></span>
                            search</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="reportsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" href="#"><span>
                                <i class="fa-solid fa-chart-simple"></i></span>
                            reports</a>
                        <ul class="dropdown-menu" aria-labelledby="reportsDropdown">
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-chart-simple "></i>
                                    Aging balance</a></li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-clock-rotate-left"></i>
                                    Overdue trend</a></li>
                            <li><a class="dropdown-item text-primary" href="#"> <i
                                        class="fa-solid fa-chart-line"></i>
                                    DSO</a></li>
                            <li><a class="dropdown-item text-primary" href="#"> <i
                                        class="fa-solid fa-chart-pie"></i>
                                    Items status</a></li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-handshake-simple"></i>
                                    Disputes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-primary" href="#"> <i class="fa-solid fa-signal"></i>
                                    Sales</a></li>
                            <li><a class="dropdown-item text-primary" href="#"> <i
                                        class="fa-solid fa-money-bill-1-wave"></i>
                                    Cash receipts</a></li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-wand-magic-sparkles"></i>
                                    Cash Forecast</a></li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-table-cells"></i>
                                    Payment Schedule</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-bolt me-2"></i></a>
                            </li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-flag me-2"></i>
                                    profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><span><i
                                    class="fa-solid fa-gear"></i></span>
                            setting
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
                            <li><a class="dropdown-item text-primary" href="{{ route('users.index') }}"><i
                                        class="fa-solid fa-users"></i>
                                    Manage
                                    users account</a></li>
                            <li><a class="dropdown-item text-primary" href="#"> <i
                                        class="fa-solid fa-lock"></i> Secure
                                    my account and user accounts</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-primary" href="#"> <i
                                        class="fa-solid fa-rotate"></i>
                                    Import / Export your data</a></li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-solid fa-robot"></i>
                                    Manage
                                    search assign</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ route('clients.create') }}"><i
                                        class="fa-solid fa-plus"></i>Create
                                    a client</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ route('items.create') }}"><i
                                        class="fa-solid fa-plus"></i>Create
                                    an item(invoice, credit note,...)</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-primary" href="{{ route('clients-group.index') }}"><i
                                        class="fa-regular fa-folder-open"></i>
                                    Manage clients group</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ route('collection_scenarios.index') }}"> <i
                                        class="fa-regular fa-clock"></i>
                                    Manage collection scenario</a></li>
                            <li><a class="dropdown-item text-primary" href="#"><i
                                        class="fa-regular fa-square-check"></i>
                                    Manage item status</a></li>
                            <li><a class="dropdown-item text-primary" href="#"> <i
                                        class="fa-regular fa-flag"></i>
                                    Manage payment profiles</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ route('item-status.index') }}"> <i
                                        class="fa-regular fa-square-check"></i>
                                    Manage item status</a></li>
                            <li><a class="dropdown-item text-primary" href="#">- <i
                                        class="fa-regular fa-flag"></i>
                                    Manage payment profiles</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ route('manage_risk.index') }}"> <i
                                        class="fa-solid fa-bolt"></i>
                                    {{ __('Manage risk') }}</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ route('credit-managment.index') }}">
                                    <i class="fa-solid fa-computer"></i>{{ __('Manage credit limits validation') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="fa-solid fa-circle-info"></i></span>
                            helps</a>
                    </li>
                    <div class="icons-nav">
                        <a href="#"><i class="fa-solid fa-book"></i></a>
                        <a class="position-relative" href="#" id="search-icon"> <i
                                class="fa-solid fa-magnifying-glass"></i></a>
                        <div class="search-container px-4 py-2 rounded" id="search-container">
                            <p>Quick search :</p>
                            <div class="input-group w-100 ">
                                <input type="text" class="search-input form-control"
                                    placeholder="Search for a client / Search for an item (invoice, credit note, ...)...">
                                <span class="input-group-text bg-primary"><a href="#"> <i
                                            class="fa-solid fa-search text-white"></i></a></span>
                            </div>
                            <div class="d-flex "><input type="checkbox" class="mb-3 me-1 chec bg-body-tertiary">
                                <p class="name-d">Include cleared items</p>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</div>
