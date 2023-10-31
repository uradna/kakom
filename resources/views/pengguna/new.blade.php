<x-app-layout>
    <style>
        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #E7EBF0;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
            padding: 8px 0;
            background-color: #fff;
        }

        .autocomplete-items div {
            padding: 3px 20px;
            line-height: 24px;
            cursor: pointer;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #727CF5;
            color: #fff;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

    </style>

    <x-slot name="title">
        {{ __('New User') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Buat Pengguna Baru') }}
    </x-slot>

    <x-slot name="breadcrumb">

    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        {{-- novalidate --}}
                        <form class="row needs-validation" method="POST" action="{{ route('storePengguna') }}">
                            @csrf

                            <div class="col-sm-6">
                                <div class="form-floating mb-3 card">
                                    <input type="text" name="name" class="form-control" id="name" placeholder=""
                                        required value="{{ old('name') }}" />
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-3 card">
                                    <input type="email" name="email" class="form-control" id="email" placeholder=""
                                        required value="{{ old('email') }}" />
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-floating mb-3 card">
                                    <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder=""
                                        required value="{{ old('jabatan') }}" />
                                    <label for="jabatan">Jabatan</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-floating mb-3 card">
                                    <select class="form-select" id="floatingSelectGrid"
                                        aria-label="Floating label select example" name="level">
                                        <option selected>Pilih level pengguna</option>
                                        <option value="0" @if (old('level') != null && old('level') == 0) selected @endif>Staff (tidak bisa membuat pengguna
                                            baru)</option>
                                        <option value="1" @if (old('level') != null && old('level') == 1) selected @endif>Admin (bisa membuat pengguna baru)
                                        </option>
                                        <option value="2" @if (old('level') != null && old('level') == 2) selected @endif>Kepala Dinas (hanya bisa mengakses
                                            Agenda Kepala Dinas)
                                        </option>
                                    </select>
                                    <label for="floatingSelectGrid">Level</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-floating mb-3 card">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="" required autocomplete="off" onfocus="this.type='text'"
                                        onfocusout="this.type='password'" />
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-3 card">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="" required autocomplete="off"
                                        onfocus="this.type='text'" onfocusout="this.type='password'" />
                                    <label for="password_confirmation">Ulangi Password</label>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded">
                                            <h6 class="card-sub mb-1">Password</h6>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password"
                                                    class="form-control p-0 border border-0 mb-1" style="height:22px;">
                                                <div class="input-group-text bg-white border border-0"
                                                    data-password="false" style="height:22px;">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded">
                                            <h6 class="card-sub mb-1">Ulangi Password</h6>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password"
                                                    class="form-control p-0 border border-0 mb-1" style="height:22px;">
                                                <div class="input-group-text bg-white border border-0"
                                                    data-password="false" style="height:22px;">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                            <div class="col-sm-12 text-end">
                                <button type="submit" class="btn btn-secondary"> Simpan </button>
                            </div>
                        </form>


                        <!-- end row-->

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->


</x-app-layout>
