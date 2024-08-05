
    <nav>
        <!-- Other navigation links -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ __('language') }}
            </button>
            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="{{ route('switch.language', ['locale' => 'en']) }}">English</a>
                <a class="dropdown-item" href="{{ route('switch.language', ['locale' => 'ar']) }}">العربية</a>
            </div>
        </div>
    </nav>


