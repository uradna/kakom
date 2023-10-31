<x-app-layout>
    <x-slot name="title">
        {{ __('Surat Masuk - ') . konversiBulan($bulan) . ' ' . $tahun }}
    </x-slot>

    <x-slot name="header">
        {{ __('Arsip Surat Masuk - ') . konversiBulan($bulan) . ' ' . $tahun }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsip') }}">Arsip </a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsipSMIndex') }}">Surat Masuk</a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsipSMTahun', $tahun) }}">{{ $tahun }}</a></li>
            <li class="breadcrumb-item active">{{ konversiBulan($bulan) }}</li>
        </ol>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table id="data" class="table table-bordered table-sm" style="width: 100%">
                            <thead class="table-secondary">
                                <tr>

                                    <th width="10%">Tgl. Terima</th>
                                    <th width="10%">No. Agenda</th>
                                    <th width="16%">No. Surat</th>
                                    <th width="10%">Tgl. Surat</th>
                                    <th>Pengirim</th>
                                    <th>Perihal</th>
                                    <th>Isi Disposisi</th>
                                    <th width="10%">Disposisi Ke</th>
                                    <th width="5%">Disposisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $n => $i)
                                    <tr>
                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratMasukRead', $i->id) }}" class="text-dark">
                                                {{ $i->masuk }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark text-center">
                                            <a href="{{ route('suratMasukRead', $i->id) }}" class="text-dark">
                                                {{ $i->no_urut }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratMasukRead', $i->id) }}" class="text-dark">
                                                {{ $i->no_surat }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratMasukRead', $i->id) }}" class="text-dark">
                                                {{ $i->tanggal }}
                                            </a>
                                        </td>

                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratMasukRead', $i->id) }}" class="text-dark">
                                                {{ $i->pengirim }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratMasukRead', $i->id) }}" class="text-dark">
                                                {{ $i->perihal }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark">{{ $i->isi_disposisi }}</td>
                                        <td class="fs-7 text-dark">{{ $i->penerima_disposisi }}</td>
                                        <td class="fs-7 text-dark text-center">
                                            <a href="{{ route('suratMasukRead', $i->id) }}">
                                                @if ($i->status_disposisi == 1)
                                                    <span class="badge badge-success-lighten fs-6 text-black-50">
                                                        <i class="uil-check"></i>
                                                    @elseif ($i->status_disposisi==0)
                                                        <span class="badge badge-warning-lighten fs-6 text-black-50">
                                                            <i class="uil-times"></i>
                                                @endif
                                                {{ statusDispo($i->status_disposisi) }}
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(function() {
            $("#data").DataTable({
                "pageLength": 10,
                "responsive": false,
                "lengthChange": false,
                "autoWidth": true,
                "order": [
                    [0, "desc"]
                ],
                "columnDefs": [{
                    "targets": [1],
                    "visible": false,
                    "searchable": false
                }, {
                    "targets": [3],
                    "visible": false,
                    "searchable": true
                }, {
                    "targets": [6],
                    "visible": false,
                    "searchable": true
                }, {
                    "targets": [7],
                    "visible": false,
                    "searchable": false
                }],
                "buttons": [{
                    extend: 'excel'
                }, {
                    extend: 'pdf',
                    orientation: 'landscape'
                }, {
                    extend: 'print'
                }, {
                    extend: 'colvis',
                    text: 'Kolom'
                }],
            }).buttons().container().appendTo('#data_wrapper .col-md-6:eq(0)');
        });

        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

    </script>

</x-app-layout>
