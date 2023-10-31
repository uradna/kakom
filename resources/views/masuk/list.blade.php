<x-app-layout>
    <x-slot name="title">
        {{ __('Surat Masuk') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Arsip Surat Masuk') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Arsip Surat Masuk</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">2020</a></li>
            <li class="breadcrumb-item active">Maret</li>
        </ol>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card" id="tooltip-container">
                                <a href="#" class="link-secondary" data-bs-container="#tooltip-container"
                                    data-bs-toggle="tooltip" title="lihat semua surat masuk">
                                    <div class="card-body text-center pb-2">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        SEMUA DATA
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder2.png') }}" class="img-responsive mb-2">
                                        2021
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder3.png') }}" class="img-responsive mb-2">
                                        2021
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        2021
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder5.png') }}" class="img-responsive mb-2">
                                        2021
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        2021
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        Januari
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        Februari
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        Februari
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        April
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        Juni
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        Desember
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
