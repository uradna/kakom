<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="{{ asset('img/' . Auth::user()->foto . '') }}" alt="user-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">
                        {{-- DIAN INDRIASARI KUSUMA DEWI, S.T. --}}
                        {{ Auth::user()->name }}
                    </span>
                    <span class="account-position">
                        {{-- Kasubag Umum dan Kepegawaian --}}
                        {{ Auth::user()->jabatan }}
                    </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <a href="{{ route('akun') }}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>My Account</span>
                </a>
                <!-- item-->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="#" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout me-1"></i>
                        <span>Logout</span>
                    </a>
                </form>
            </div>
        </li>
    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
</div>
