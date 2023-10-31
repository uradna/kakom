<div class="h-100 show" id="leftside-menu-container" data-simplebar="init">
    <div class="simplebar-wrapper" style="margin: 0px;">
        <div class="simplebar-mask">
            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                    style="height: 100%; overflow: hidden scroll;">
                    <div class="simplebar-content" style="padding: 0px;">

                        <!--- Sidemenu -->
                        <ul class="side-nav">

                            <li class="side-nav-title side-nav-item">Navigasi</li>

                            <li class="side-nav-item">
                                <a href="{{ route('dashboard') }}" class="side-nav-link">
                                    <i class="uil-home-alt"></i>
                                    <span> Dashboard</span>
                                </a>
                            </li>

                            <li class="side-nav-item">
                                <a href="{{ route('suratMasuk') }}" class="side-nav-link">
                                    <i class="uil-folder-download"></i>
                                    <span> Surat Masuk</span>
                                </a>
                            </li>

                            {{-- <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarMasuk" aria-expanded="false"
                                    aria-controls="sidebarDashboards" class="side-nav-link">
                                    <i class="uil-folder-download"></i>
                                    <span> Surat Masuk </span>
                                </a>
                                <div class="collapse" id="sidebarMasuk">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('suratMasuk') }}"> Catat </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('arsipSMIndex') }}"> Arsip Surat Masuk </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('listSuratMasuk') }}"> Arsip Surat Masuk List</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('detailSuratMasuk') }}"> Detail Surat Masuk</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}

                            <li class="side-nav-item">
                                <a href="{{ route('suratKeluar') }}" class="side-nav-link">
                                    <i class="uil-folder-upload"></i>
                                    <span> Surat Keluar</span>
                                </a>
                            </li>

                            {{-- <li class="side-nav-item">
                                <a href="{{ route('arsip') }}" class="side-nav-link">
                                    <i class="uil-archive "></i>
                                    <span>Arsip</span>
                                </a>
                            </li> --}}

                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarKeluar" aria-expanded="false"
                                    aria-controls="sidebarDashboards" class="side-nav-link">
                                    <i class="uil-archive"></i>
                                    <span> Arsip </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarKeluar">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="{{ route('arsipSMIndex') }}"> Surat Masuk </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('arsipSKIndex') }}"> Surat Keluar </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebarDispo" aria-expanded="false"
                                    aria-controls="sidebarDashboards" class="side-nav-link">
                                    <i class="uil-clipboard"></i>
                                    <span> Disposisi </span>
                                </a>
                                <div class="collapse" id="sidebarDispo">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a href="#"> Cetak Disposisi </a>
                                        </li>
                                        <li>
                                            <a href="#"> Arsip Disposisi </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}
                           

                                <li class="side-nav-item">
                                    <a href="{{ route('cal') }}" class="side-nav-link">
                                        <i class="uil-calendar-alt"></i>
                                        <span> Agenda Kepala Dinas </span>
                                    </a>
                                </li>

                

                            @if (Auth::user()->level == 1)

                                <li class="side-nav-item">
                                    <a href="{{ route('pengguna') }}" class="side-nav-link">
                                        <i class="uil-users-alt"></i>
                                        <span> Pengguna </span>
                                    </a>
                                </li>

                            @endif
                            <li class="side-nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="#" onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="side-nav-link">
                                        <i class="uil-exit"></i>
                                        <span>Logout</span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
