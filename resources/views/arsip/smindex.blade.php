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
            <li class="breadcrumb-item"><a href="{{ route('arsip') }}">Arsip</a></li>
            <li class="breadcrumb-item active">Surat Masuk</li>
        </ol>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="row">

                        <div class="col-lg-8slot" style="max-width:50% !important;">
                            <div class="card" id="tooltip-container">
                                <a href="{{ route('arsipSMAll') }}" class="link-secondary"
                                    data-bs-container="#tooltip-container" data-bs-toggle="tooltip"
                                    title="Lihat semua surat masuk tahun {{ $tahun[0]->tahun }} - {{ $tahun[array_key_last($tahun)]->tahun }}">
                                    <div class="card-body text-center pb-2">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        ARSIP SEMUA
                                    </div>
                                </a>
                            </div>
                        </div>

                        @foreach ($tahun as $t)
                            <div class="col-lg-8slot" style="max-width:50% !important;">
                                <div class="card" id="tooltip-container{{ $t->tahun }}">
                                    <a href="{{ route('arsipSMTahun', $t->tahun) }}" class="link-secondary"
                                        data-bs-container="#tooltip-container{{ $t->tahun }}"
                                        data-bs-toggle="tooltip" title="Arsip tahun {{ $t->tahun }}">
                                        <div class="card-body text-center pb-2">
                                            <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                            {{ $t->tahun }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body text-center pb-2">
                                    <a href="#" class="link-secondary">
                                        <img src="{{ asset('img/folder4.png') }}" class="img-responsive mb-2">
                                        {{ $i->tahun }}
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
