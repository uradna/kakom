<x-app-layout>
    <x-slot name="title">
        {{ __('Arsip') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Arsip') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Arsip</li>
        </ol>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="row">

                        <div class="col-lg-8slot" style="max-width:50% !important;">
                            <div class="card" id="tooltip-container">
                                <a href="{{ route('arsipSMIndex') }}" class="link-secondary"
                                    data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                    title="Lihat arsip surat masuk">
                                    <div class="card-body text-center pb-2">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        SURAT MASUK
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8slot" style="max-width:50% !important;">
                            <div class="card" id="tooltip-container2">
                                <a href="{{ route('arsipSKIndex') }}" class="link-secondary"
                                    data-bs-container="#tooltip-container2" data-bs-toggle="tooltip"
                                    title="Lihat arsip surat keluar">
                                    <div class="card-body text-center pb-2">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        SURAT KELUAR
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8slot" style="max-width:50% !important;">
                            <div class="card" id="tooltip-container2">
                                <a href="{{ route('sampahIndex') }}" class="link-secondary"
                                    data-bs-container="#tooltip-container2" data-bs-toggle="tooltip"
                                    title="Folder berisi data yang dihapus dari daftar">
                                    <div class="card-body text-center pb-2">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        FOLDER SAMPAH
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-med" style="max-width:50% !important;">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        folder
                                    </a>
                                </div>
                            </div>
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
