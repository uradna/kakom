<x-app-layout>
    <x-slot name="title">
        {{ __('Surat Keluar - ') . $tahun }}
    </x-slot>

    <x-slot name="header">
        {{ __('Arsip Surat Keluar - ') . $tahun }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsip') }}">Arsip </a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsipSKIndex') }}">Surat Masuk</a></li>
            <li class="breadcrumb-item"><a href="{{ route('arsipSKTahun', $tahun) }}">{{ $tahun }}</a></li>
            <li class="breadcrumb-item active">Semua</li>
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
                                    <th width="10%">No. Agenda</th>
                                    <th width="10%">Tgl. Masuk</th>
                                    <th width="10%">Tgl. Surat</th>
                                    <th width="16%">No. Surat</th>
                                    <th>Dari</th>
                                    <th>Kepada</th>
                                    <th>Perihal</th>
                                    <th width="5%">File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $n => $i)
                                    <tr>
                                        <td class="fs-7 text-dark text-center">
                                            <a href="{{ route('suratKeluarRead', $i->id) }}" class="text-dark">
                                                {{ $i->no_urut }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratKeluarRead', $i->id) }}" class="text-dark">
                                                {{ $i->keluar }}
                                            </a>
                                        </td>

                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratKeluarRead', $i->id) }}" class="text-dark">
                                                {{ $i->tanggal }}
                                            </a>
                                        </td>

                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratKeluarRead', $i->id) }}" class="text-dark">
                                                {{ $i->no_surat }}
                                            </a>
                                        </td>

                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratKeluarRead', $i->id) }}" class="text-dark">
                                                {{ $i->dari }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratKeluarRead', $i->id) }}" class="text-dark">
                                                {{ $i->penerima }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark">
                                            <a href="{{ route('suratKeluarRead', $i->id) }}" class="text-dark">
                                                {{ $i->perihal }}
                                            </a>
                                        </td>
                                        <td class="fs-7 text-dark text-center">
                                            @if ($i->file_surat == null)

                                                <span class="badge badge-warning-lighten fs-6 text-black-50">
                                                    <i class="uil-times"></i> Tidak Ada
                                                </span>

                                            @else
                                                <a href="{{ asset('storage/' . $i->file_surat) }}" target="_blank">
                                                    <span class="badge badge-success-lighten fs-6 text-black-50">
                                                        <i class="uil-check"></i> Ada
                                                    </span>
                                                </a>
                                            @endif
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
                    [2, "desc"]
                ],
                "columnDefs": [{
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }, {
                    "targets": [1],
                    "visible": false,
                    "searchable": true
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
