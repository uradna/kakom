<x-app-layout>
    <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">

        </ol>
    </x-slot>
    {{-- @desktop --}}
    <div class="row">
        <div class="col-12">
            <div class="card widget-inline">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-sm-6 col-lg-3" style="max-width: 50%">
                            <div class="card shadow-none m-0">
                                <a href="{{route('suratMasuk')}}" class="link-secondary">
                                <div class="card-body text-center">
                                    
                                    <i class="uil-folder-download" style="font-size: 30px;"></i>
                                    <h3><span>{{ $masuk }}</span></h3>
                                    <p class="text-muted font-15 mb-0"> Surat Masuk</p>
                                    
                                </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3" style="max-width: 50%">
                            <div class="card shadow-none m-0 border-start">
                                 <a href="{{route('suratKeluar')}}" class="link-secondary">
                                <div class="card-body text-center">
                                   
                                    <i class="uil-folder-upload" style="font-size: 30px;"></i>
                                    <h3><span>{{ $keluar }}</span></h3>
                                    <p class="text-muted font-15 mb-0"> Surat Keluar </p>
                                   
                                </div>
                                 </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3" style="max-width: 50%">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="uil-clipboard" style="font-size: 30px;"></i>
                                    <h3><span>{{ $dispo }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Disposisi</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3" style="max-width: 50%">
                            <div class="card shadow-none m-0 border-start">
                                <a href="{{route('cal')}}" class="link-secondary">
                                <div class="card-body text-center">
                                    <i class="uil-calendar-alt" style="font-size: 30px;"></i>
                                    <h3><span> &nbsp; </span>
                                    </h3>
                                    <p class="text-muted font-15 mb-0">Agenda Kepala Dinas</p>
                                </div>
                                </a>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    {{-- @enddesktop --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-1">Surat masuk terakhir</h4>
                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead class=" bg-white">
                                <tr>
                                    <td>
                                        <span class="text-muted font-14">Pengirim</span>

                                    </td>
                                    <td>
                                        <span class="text-muted font-14">Perihal</span>

                                    </td>
                                    <td>
                                        <span class="text-muted font-14">Disposisi</span> <br />

                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>
                                            <h5 class="font-14 mt-1">
                                                <a href="{{ route('suratMasukRead', $d->id) }}" class="text-body">
                                                    {{ $d->pengirim }}
                                                </a>
                                            </h5>
                                            <a href="{{ route('suratMasukRead', $d->id) }}" class="text-body">
                                                <span
                                                    class="text-muted font-13">{{ konversiTanggal($d->masuk) }}</span>
                                            </a>
                                        </td>
                                        <td>
                                            <h5 class="font-14 mt-1 fw-normal">
                                                <a href="{{ route('suratMasukRead', $d->id) }}" class="text-body">
                                                    {{ $d->perihal }}
                                                </a>
                                            </h5>
                                        </td>
                                        <td>
                                            @if ($d->status_disposisi == 1)
                                                <span class="badge badge-success-lighten">
                                                    <i class="uil-check"></i> Sudah
                                                </span>
                                            @elseif ($d->status_disposisi==0)
                                                <span class="badge badge-warning-lighten">
                                                    <i class="uil-times"></i> Belum
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach


                                {{-- <tr>
                                    <td>
                                        <h5 class="font-14 mt-1"><a href="#" class="text-body">Sekretariat Daerah</a>
                                        </h5>
                                        <span class="text-muted font-13">12 Agustus 2022</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 mt-1 fw-normal"><a href="#" class="text-body">Penyusunan
                                                standar pelayanan
                                                publik</h5></a>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning-lighten">Belum</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="font-14 mt-1"><a href="#" class="text-body">Inspektorat</a></h5>
                                        <span class="text-muted font-13">11 Agustus 2022</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 mt-1 fw-normal"><a href="#" class="text-body">Undangan rapat
                                                pencegahan
                                                gratifikasi</a></h5>
                                    </td>
                                    <td>
                                        <span class="badge badge-success-lighten">Sudah</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="font-14 mt-1"><a href="#" class="text-body">Koprs Pegawai Republik
                                                Indonesia Dewan Pengurus Kab. Ponorogo</a></h5>
                                        <span class="text-muted font-13">9 Agustus 2022</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 mt-1 fw-normal"><a href="#" class="text-body">
                                                Undangan upacara korpri tanggal 17 Agustus 2022 di Pendopo</a></h5>
                                    </td>
                                    <td>
                                        <span class="badge badge-success-lighten">Sudah</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="font-14 mt-1"><a href="#" class="text-body">Universitas Muhammadiah
                                                Ponorogo</a></h5>
                                        <span class="text-muted font-13">9 Agustus 2022</span>
                                    </td>
                                    <td>
                                        <h5 class="font-14 mt-1 fw-normal"><a href="#" class="text-body">
                                                Permintaan ijin prakter kerja langsung mahasiswa</a></h5>
                                    </td>
                                    <td>
                                        <span class="badge badge-success-lighten">Sudah</span>
                                    </td>
                                </tr> --}}



                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</x-app-layout>
