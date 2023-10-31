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
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table id="data" class="table table-bordered table-sm" style="width: 100%">
                            <thead class="table-secondary">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nomor Surat</th>
                                    <th>Pengirim</th>
                                    <th>Perihal</th>
                                    <th>Arsip Surat</th>
                                    <th>Disposisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12 Agustus 2022</td>
                                    <td><a href="{{ route('suratMasukRead', 12) }}">a.12/444/0.001/2022</a></td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>12 Agustus 2022</td>
                                    <td>a.12/444/0.001/2022</td>
                                    <td>Badan Pusat Statistik Kabupaten Ponorogo</td>
                                    <td>Undangan Pelatihan Big Data</td>
                                    <td>Ada</td>
                                    <td>Dicetak</td>
                                </tr>

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
                    [0, "asc"]
                ],
                "columnDefs": [{
                    "targets": [0],
                    "visible": true,
                    "searchable": false
                }],
                "buttons": [{
                    extend: 'excel',
                    title: 'REKAP DATA PENGISIAN PERNYATAAN SEMUA SKPD'
                }, {
                    extend: 'pdf',
                    title: 'REKAP DATA PENGISIAN PERNYATAAN SEMUA SKPD'
                }, {
                    extend: 'print',
                    title: 'REKAP DATA PENGISIAN PERNYATAAN SEMUA SKPD'
                }],
            }).buttons().container().appendTo('#data_wrapper .col-md-6:eq(0)');
        });

        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

    </script>

</x-app-layout>
