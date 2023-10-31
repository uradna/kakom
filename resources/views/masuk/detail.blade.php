<x-app-layout>
    <x-slot name="title">
        {{ __('Surat Masuk') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Detail Surat Masuk') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsip') }}">Arsip</a></li>
            @if ($data->aktif == 1)
                <li class="breadcrumb-item"><a href="{{ route('arsipSMIndex') }}">Surat Masuk</a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('arsipSMTahun', $data->tahun) }}">{{ $data->tahun }}</a>
                </li>
                <li class="breadcrumb-item"><a
                        href="{{ route('arsipSMB', [$data->tahun, $data->bulan]) }}">{{ konversiBulan($data->bulan) }}</a>
                </li>
                <li class="breadcrumb-item active">Detail Surat</li>
            @else
                <li class="breadcrumb-item"><a href="{{ route('sampahIndex') }}">Folder Sampah</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sampahMasuk') }}">Surat Masuk</a></li>
                <li class="breadcrumb-item active">Detail Surat</li>
            @endif

        </ol>
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded text-dark">
                                            <h6 class="card-sub mb-1">Nomor Surat</h6>
                                            {{ $data->no_surat }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded text-dark">
                                            <h6 class="card-sub mb-1">Tanggal Surat</h6>
                                            {{ konversiTanggal($data->tanggal) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded text-dark">
                                            <h6 class="card-sub mb-1">Tanggal Diterima</h6>
                                            {{ konversiTanggal($data->masuk) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-2">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded text-dark">
                                            <h6 class="card-sub mb-1">Nomor Agenda</h6>
                                            {{ $data->no_urut }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded text-dark">
                                            <h6 class="card-sub mb-1">Pengirim</h6>
                                            {{ $data->pengirim }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded text-dark">
                                            <h6 class="card-sub mb-1">Perihal</h6>
                                            {{ $data->perihal }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded ">
                                            <h6 class="card-sub mb-1">Disposisi</h6>
                                            @if ($data->status_disposisi == 0)
                                                Disposisi belum dicetak. Cetak disposisi dahulu.


                                            @elseif ($data->isi_disposisi == null)
                                                Belum ada, <a href="#" class="link-primary" data-bs-toggle="modal"
                                                    data-bs-target="#disposisi">
                                                    klik di sini untuk update
                                                </a>
                                            @else
                                                <span style="word-break: break-all;white-space: pre;"
                                                    class="text-dark">{{ $data->isi_disposisi }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ----------------------------modal disposisi--------------------------------------------------- --}}
                            <div class="modal fade" id="disposisi" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header mb-0"
                                            style="padding: 0.7rem 1rem 0 1rem;border-bottom: 0px;">
                                            <h5 class="modal-title" id="myCenterModalLabel">
                                                Disposisi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body mt-0" style="padding: 0.6rem 1rem 1rem 1rem">
                                            <form method="POST" action="{{ route('suratMasukUpdateDispo') }}"
                                                class="needs-validation">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                <textarea class="form-control" style="height: 150px;"
                                                    name="isi_disposisi" required></textarea>
                                                <div class="mt-2 text-end">
                                                    <button type="submit" class="btn btn-secondary">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded">
                                            <h6 class="card-sub mb-1">Penerima Disposisi</h6>
                                            @if ($data->status_disposisi == 0)
                                                Disposisi belum dicetak. Cetak disposisi dahulu.


                                            @elseif ($data->penerima_disposisi == null)
                                                Belum ada, <a href="#" class="link-primary" data-bs-toggle="modal"
                                                    data-bs-target="#penerima">
                                                    klik di sini untuk update
                                                </a>
                                            @else
                                                <span style="white-space: pre"
                                                    class=" text-dark">{{ $data->penerima_disposisi }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ----------------------------modal PENERIMA--------------------------------------------------- --}}
                            <div class="modal fade" id="penerima" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header mb-0"
                                            style="padding: 0.7rem 1rem 0 1rem;border-bottom: 0px;">
                                            <h5 class="modal-title" id="myCenterModalLabel">
                                                Penerima Disposisi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body mt-0" style="padding: 0.6rem 1rem 1rem 1rem">
                                            <form method="POST" action="{{ route('suratMasukUpdatePenerima') }}"
                                                class="needs-validation">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                <input type="text" name="penerima_disposisi" class="form-control"
                                                    required list="list" autocomplete="off" />
                                                <datalist id="list">
                                                    @foreach ($penerima as $p)
                                                        <option value="{{ $p->nama }}">
                                                    @endforeach
                                                </datalist>
                                                <div class="mt-2 text-end">
                                                    <button type="submit" class="btn btn-secondary">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ----------------------------modal PENERIMA--------------------------------------------------- --}}

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded">
                                            <h6 class="card-sub mb-1">File Surat</h6>
                                            @if ($data->file_surat == null)
                                                Belum ada, <a href="#" class="link-primary" data-bs-toggle="modal"
                                                    data-bs-target="#filesurat">
                                                    klik di sini untuk upload
                                                </a>
                                            @else
                                                <a href="{{ asset('storage/' . $data->file_surat) }}"
                                                    target="_blank">
                                                    {{ $data->file_surat }}</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ----------------------------modal file surat--------------------------------------------------- --}}
                            <div class="modal fade" id="filesurat" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header mb-0"
                                            style="padding: 0.7rem 1rem 0 1rem;border-bottom: 0px;">
                                            <h5 class="modal-title" id="myCenterModalLabel">Upload
                                                file surat</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body mt-0" style="padding: 0.6rem 1rem 1rem 1rem">
                                            <form class="needs-validation" method="POST"
                                                action="{{ route('suratMasukUpdateFSurat') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                <input type="file" name="file_surat" id="example-fileinput"
                                                    class="form-control" required>
                                                <div class="mt-2 text-end">
                                                    <button type="submit" class="btn btn-secondary">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ----------------------------modal filesurat--------------------------------------------------- --}}
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded">
                                            <h6 class="card-sub mb-1">File Disposisi</h6>

                                            @if ($data->status_disposisi == 0)
                                                Disposisi belum dicetak. Cetak disposisi dahulu.


                                            @elseif ($data->file_disposisi == null)
                                                Belum ada, <a href="#" class="link-primary" data-bs-toggle="modal"
                                                    data-bs-target="#filedispo">
                                                    klik di sini untuk upload
                                                </a>
                                            @else
                                                <a href="{{ asset('storage/' . $data->file_disposisi) }}"
                                                    target="_blank">
                                                    {{ $data->file_disposisi }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ----------------------------modal file disposisi--------------------------------------------------- --}}
                            <div class="modal fade" id="filedispo" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header mb-0"
                                            style="padding: 0.7rem 1rem 0 1rem;border-bottom: 0px;">
                                            <h5 class="modal-title" id="myCenterModalLabel">Upload
                                                file disposisi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body mt-0" style="padding: 0.6rem 1rem 1rem 1rem">
                                            <form class="needs-validation" method="POST"
                                                action="{{ route('suratMasukUpdateFDispo') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                <input type="file" name="file_disposisi" id="example-fileinput"
                                                    class="form-control" required>
                                                <div class="mt-2 text-end">
                                                    <button type="submit" class="btn btn-secondary">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ----------------------------modal file disposisi--------------------------------------------------- --}}

                            <div class="col-sm-12 text-end">
                                @if ($data->aktif == 1)
                                    <a href="{{ route('printDisposisi', $data->id) }}" class="btn btn-secondary"
                                        target=”_blank”
                                        onClick="setTimeout(function(){ window.location.reload()}, 3000);">
                                        Cetak Disposisi </a>
                                    <a href="{{ route('suratMasukEdit', $data->id) }}" class="btn btn-primary">
                                        Edit </a>
                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#danger-alert-modal">
                                        Hapus </a>
                                    <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content modal-filled bg-danger">
                                                <div class="modal-body p-4">
                                                    <div class="text-center">
                                                        <i class="mdi mdi-alert-circle h1"></i>
                                                        <p class="mt-3">Anda yakin ingin menghapus data ini dari daftar
                                                            surat masuk?<br><br>
                                                            Data yang dihapus akan dimasukkan ke dalam folder sampah di
                                                            arsip.</p>

                                                        <form method="POST" action="{{ route('suratMasukDelete') }}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                                            <button type="button" class="btn btn-light my-2 mx-2"
                                                                data-bs-dismiss="modal"
                                                                style="min-width: 80px">Tidak</button>
                                                            <button type="submit" class="btn btn-light my-2 mx-2"
                                                                style="min-width: 80px">Ya</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                @else

                                    <a href="#" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#danger-alert">
                                        Kembalikan </a>
                                    <div id="danger-alert" class="modal fade" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content modal-filled bg-info">
                                                <div class="modal-body p-4">
                                                    <div class="text-center">
                                                        <i class="mdi mdi-alert-circle h1"></i>
                                                        <p class="mt-3">Anda yakin ingin mengembalikan data ini dari
                                                            folder sampah?<br><br>
                                                        </p>

                                                        <form method="POST"
                                                            action="{{ route('suratMasukRestore') }}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                                            <button type="button" class="btn btn-light my-2 mx-2"
                                                                data-bs-dismiss="modal"
                                                                style="min-width: 80px">Tidak</button>
                                                            <button type="submit" class="btn btn-light my-2 mx-2"
                                                                style="min-width: 80px">Ya</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                @endif


                            </div>


                            {{-- <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Text area</label>
                                            <textarea class="form-control" id="example-textarea" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Perihal</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Perihal</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                        </div>

                        <!-- end row-->

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</x-app-layout>
