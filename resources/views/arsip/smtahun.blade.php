<x-app-layout>
    <x-slot name="title">
        {{ __('Surat Masuk') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Arsip Surat Masuk - ' . $tahun) }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsip') }}">Arsip</a></li>
            <li class="breadcrumb-item "><a href="{{ route('arsipSMIndex') }}"">Surat Masuk</a></li>
            <li class=" breadcrumb-item active">{{ $tahun }}</li>
        </ol>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="row">

                        <div class="col-lg-8slot" style="max-width:50% !important;">
                            <div class="card" id="tooltip-container">
                                <a href="{{ route('arsipSMT', $tahun) }}" class="link-secondary"
                                    data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                    title="Lihat semua surat masuk tahun 2022">
                                    <div class="card-body text-center pb-2">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        ARSIP {{ $tahun }}
                                    </div>
                                </a>
                            </div>
                        </div>
                        @foreach ($data as $t)
                            <div class="col-lg-8slot" style="max-width:50% !important;">
                                <div class="card" id="tooltip-container{{ $t->bulan }}">
                                    <a href="{{ route('arsipSMB', [$tahun, $t->bulan]) }}" class="link-secondary"
                                        data-bs-container="#tooltip-container{{ $t->bulan }}"
                                        data-bs-toggle="tooltip" title="Arsip bulan {{ konversiBulan($t->bulan) }}">
                                        <div class="card-body text-center pb-2">
                                            <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                            {{ konversiBulan($t->bulan) }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
