<x-app-layout>
    <x-slot name="title">
        {{ __('Profil Pengguna') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">

        </ol>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @if (Session::has('error'))
                            <div class="col-sm-12">
                                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                    role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                    <strong>Error - </strong> {!! Session::get('error') !!}
                                </div>
                            </div>
                        @endif

                        <div class="col-sm-3 mb-2 mb-sm-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link @if (!Session::has('error')) active show @endif" id="v-pills-home-tab"
                                    data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home">
                                    <span class="mdi mdi-account-edit d-md-none d-block">&nbsp;&nbsp;&nbsp;Data
                                        akun</span>
                                    <span class="d-none d-md-block">Data akun</span>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile">
                                    <span class="mdi mdi-image-edit d-md-none d-block">&nbsp;&nbsp;&nbsp;Foto
                                        profil</span>
                                    <span class="d-none d-md-block">Foto profil</span>
                                </a>
                                <a class="nav-link @if (Session::has('error')) active show @endif" id="v-pills-settings-tab"
                                    data-bs-toggle="pill" href="#v-pills-settings" role="tab"
                                    aria-controls="v-pills-settings">
                                    <span class="mdi mdi-key-variant d-md-none d-block">&nbsp;&nbsp;&nbsp;Password
                                        akun</span>
                                    <span class="d-none d-md-block">Password akun</span>
                                </a>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-sm-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade @if (!Session::has('error')) active show @endif" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <p class="mb-0">
                                    <h4 class="header-title mb-3 mt-2">Ubah nama dan email</h4>
                                    <form class="row needs-validation" method="POST"
                                        action="{{ route('updateAkun') }}">
                                        @csrf

                                        <div class="col-sm-12">
                                            <div class="form-floating mb-3 card">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="" required value="{{ Auth::user()->name }}" />
                                                <label for="name">Nama</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-floating mb-3 card">
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="" required value="{{ Auth::user()->email }}" />
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" class="btn btn-secondary"> Simpan </button>
                                        </div>
                                    </form>

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <p class="mb-0">
                                    <h4 class="header-title mb-3 mt-2">Upload foto profil</h4>
                                    <form class="row needs-validation" method="POST"
                                        action="{{ route('updateAkun') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-2" style="max-width: 30% !important">
                                            <div class="form-floating mb-3 card">
                                                <img src="{{ asset('img/' . Auth::user()->foto . '') }}"
                                                    alt="user-image {{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="max-width: 18% !important">
                                            <div class="form-floating mb-3 card">
                                                <img src="{{ asset('img/' . Auth::user()->foto . '') }}"
                                                    alt="user-image {{ Auth::user()->name }}" class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <div class="card">
                                                    <div class="card-body card-custom rounded">
                                                        <h6 class="card-sub mb-1">Upload foto baru</h6>
                                                        <input type="file" name="foto" class="form-control file-custom"
                                                            accept="image/png, image/jpeg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" class="btn btn-secondary"> Simpan </button>
                                        </div>
                                    </form>

                                    </p>
                                </div>
                                <div class="tab-pane fade @if (Session::has('error')) active show @endif" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab">
                                    <p class="mb-0">
                                    <h4 class="header-title mb-3 mt-2">Ubah password</h4>
                                    <form class="row needs-validation" method="POST"
                                        action="{{ route('updateAkun') }}">
                                        @csrf

                                        <div class="col-sm-12">
                                            <div class="form-floating mb-3 card">
                                                <input type="password" name="old_password" class="form-control"
                                                    id="old_password" placeholder="" required onfocus="this.type='text'"
                                                    onfocusout="this.type='password'" />
                                                <label for="old_password">Password Lama</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-floating mb-3 card">
                                                <input type="password" name="password" class="form-control"
                                                    id="password" placeholder="" required onfocus="this.type='text'"
                                                    onfocusout="this.type='password'" />
                                                <label for="password">Password Baru</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-floating mb-3 card">
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    id="password_confirmation" placeholder="" required
                                                    onfocus="this.type='text'" onfocusout="this.type='password'" />
                                                <label for="password_confirmation">Ulangi Password Baru</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-end">
                                            <button type="submit" class="btn btn-secondary"> Simpan </button>
                                        </div>
                                    </form>
                                    </p>
                                </div>
                            </div> <!-- end tab-content-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
