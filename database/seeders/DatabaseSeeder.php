<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Andaru Krido Utomo',
            'email' => 'andaru.krido.utomo@gmail.com',
            'password' => Hash::make('password'),
            'level' => '1',
            'jabatan' => 'Pranata Komputer',
            'foto' => 'ndaru.png',
        ]);

        $dinas = array("Dinas Pendidikan","Dinas Kebudayaan, Pariwisata, Pemuda dan Olahraga","Dinas Kesehatan","Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak","Dinas Pengendalian Pendudukan dan Keluarga Berencana","Dinas Kependudukan dan Pencatatan Sipil","Dinas Pemberdayaan Masyarakat dan Desa","Dinas Penanaman  Modal dan Pelayanan Terpadu Satu Pintu","Dinas Perdagangan, Koperasi dan Usaha Mikro","Dinas Tenaga Kerja"
    );
        $hal = array("Undangan","Pemberitahuan","Permintaan","Laporan","Pernyataan","Daftar","Rapat","Koordinasi","Petunjuk","Aplikasi");
        $asal=array("Bidang Aplikasi dan Informatika","Kepala Dinas Kominfo Ponorogo","Bidang Pengelolaan Informasi dan Komunikasi Publik","Bidang Statistik dan Persandian");
        $n=15;
        $i=105;
        $j=601;
        $u=52;
        $t=9;
        while ($n>1) {
            $pengirim = $dinas[array_rand($dinas, 1)];
            $perihal1 = $hal[array_rand($hal, 1)];
            $perihal2 = $hal[array_rand($hal, 1)];
            $perihal3 = $hal[array_rand($hal, 1)];
            $dari = $asal[array_rand($asal, 1)];
            $i=$i+3;
            $j=$j+1;
            DB::table('surat_masuks')->insert([
            'user_id' => '1',
            'no_urut' => $u,
            'tanggal' => '2021-10-'.$t,
            'masuk' => '2021-10-'.$t,
            'no_surat' => $i.'/'.$j.'/405.27/2021',
            'pengirim' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'status_disposisi' => '0',
            'isi_disposisi' => null,
            'file_surat' => 'surat2.pdf',
            'file_disposisi' => null,
            'tahun' => '2021',
            'bulan' => '10',
            'aktif' => '1'
        ]);
            DB::table('surat_keluars')->insert([
            'user_id' => '1',
            'no_urut' => $u+3,
            'tanggal' => '2021-11-'.$t,
            'keluar' => '2021-11-'.$t,
            'no_surat' => $i.'/'.$j.'/405.27/2021',
            'dari' => $dari,
            'penerima' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'file_surat' => 'surat2.pdf',
            'tahun' => '2021',
            'bulan' => '11',
            'aktif' => '1'
        ]);
            $n--;
            $u++;
            $t++;
        }

        $n=15;
        $i=105;
        $j=601;
        $t=11;
        while ($n>1) {
            $pengirim = $dinas[array_rand($dinas, 1)];
            $perihal1 = $hal[array_rand($hal, 1)];
            $perihal2 = $hal[array_rand($hal, 1)];
            $i=$i+3;
            $j=$j+1;
            DB::table('surat_masuks')->insert([
            'user_id' => '1',
            'no_urut' => $u,
            'tanggal' => '2021-12-'.$t,
            'masuk' => '2021-12-'.$t,
            'no_surat' => $i.'/'.$j.'/405.27/2021',
            'pengirim' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'status_disposisi' => '0',
            'isi_disposisi' => null,
            'file_surat' => 'surat2.pdf',
            'file_disposisi' => null,
            'tahun' => '2021',
            'bulan' => '12',
            'aktif' => '1'
        ]);
            DB::table('surat_keluars')->insert([
            'user_id' => '1',
            'no_urut' => $u+3,
            'tanggal' => '2021-12-'.$t,
            'keluar' => '2021-12-'.$t,
            'no_surat' => $i.'/'.$j.'/405.609/2021',
            'dari' => $dari,
            'penerima' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'file_surat' => 'surat2.pdf',
            'tahun' => '2021',
            'bulan' => '12',
            'aktif' => '1'
        ]);
            $n--;
            $u++;
            $t++;
        }

    
        $n=10;
        $i=211;
        $j=601;
        $t=1;
        $u=1;
        while ($n>1) {
            $pengirim = $dinas[array_rand($dinas, 1)];
            $perihal1 = $hal[array_rand($hal, 1)];
            $perihal2 = $hal[array_rand($hal, 1)];
            $i=$i+3;
            $j=$j+1;
            DB::table('surat_masuks')->insert([
            'user_id' => '1',
            'no_urut' => $u,
            'tanggal' => '2022-01-'.$t,
            'masuk' => '2022-01-'.$t,
            'no_surat' => $i.'/'.$j.'/406.11/2022',
            'pengirim' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'status_disposisi' => '0',
            'isi_disposisi' => null,
            'file_surat' => 'surat2.pdf',
            'file_disposisi' => null,
            'tahun' => '2022',
            'bulan' => '1',
            'aktif' => '1'
        ]);
            DB::table('surat_keluars')->insert([
            'user_id' => '1',
            'no_urut' => $u+3,
            'tanggal' => '2022-01-'.$t,
            'keluar' => '2022-01-'.$t,
            'no_surat' => $i.'/'.$j.'/01.07/2022',
            'dari' => $dari,
            'penerima' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'file_surat' => 'surat2.pdf',
            'tahun' => '2022',
            'bulan' => '1',
            'aktif' => '1'
        ]);
            $n--;
            $u++;
            $t++;
        }

        $n=10;
        $i=101;
        $j=520;
        $t=4;
        while ($n>1) {
            $pengirim = $dinas[array_rand($dinas, 1)];
            $perihal1 = $hal[array_rand($hal, 1)];
            $perihal2 = $hal[array_rand($hal, 1)];
            $i=$i+3;
            $j=$j+1;
            DB::table('surat_masuks')->insert([
            'user_id' => '1',
            'no_urut' => $u,
            'tanggal' => '2022-02-'.$t,
            'masuk' => '2022-02-'.$t,
            'no_surat' => $i.'/'.$j.'/406.11/2022',
            'pengirim' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'status_disposisi' => '0',
            'isi_disposisi' => null,
            'file_surat' => 'surat2.pdf',
            'file_disposisi' => null,
            'tahun' => '2022',
            'bulan' => '2',
            'aktif' => '1'
        ]);
            DB::table('surat_keluars')->insert([
            'user_id' => '1',
            'no_urut' => $u+3,
            'tanggal' => '2022-03-'.$t,
            'keluar' => '2022-03-'.$t,
            'no_surat' => $i.'/'.$j.'/01.007/2022',
            'dari' => $dari,
            'penerima' => $pengirim,
            'perihal' => $perihal1.' '.$perihal2.' '.$perihal3,
            'file_surat' => 'surat2.pdf',
            'tahun' => '2022',
            'bulan' => '3',
            'aktif' => '1'
        ]);
            $n--;
            $u++;
            $t++;
        }

        // ----------------------------------------------------PENGIRIM
        DB::table('pengirim')->insert(['nama' => 'Badan Kepegawaian Dan Pengembangan Sumber Daya Manusia']);
        DB::table('pengirim')->insert(['nama' => 'Badan Kesatuan Bangsa Dan Politik']);
        DB::table('pengirim')->insert(['nama' => 'Badan Penanggulangan Bencana Daerah']);
        DB::table('pengirim')->insert(['nama' => 'Badan Pendapatan, Pengelolaan Keuangan Dan Asset Daerah']);
        DB::table('pengirim')->insert(['nama' => 'Badan Perencanaan Pembangunan Daerah, Penelitian Dan Pengembangan']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Kebudayaan, Pariwisata, Pemuda Dan Olahraga']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Kependudukan Dan Pencatatan Sipil']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Kesehatan']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Komunikasi, Informatika Dan Statistik']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Lingkungan Hidup']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Pekerjaan Umum, Perumahan Dan Kawasan Permukiman']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Pemberdayaan Masyarakat Dan Desa']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Pendidikan']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Pengendalian Penduduk Dan Kb']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Perdagangan, Koperasi Dan Usaha Mikro']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Perhubungan']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Perpustakaan Dan Kearsipan']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Pertanian, Ketahanan Pangan Dan Perikanan']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Sosial, Pemberdayaan Perempuan Dan Perlindungan Anak']);
        DB::table('pengirim')->insert(['nama' => 'Dinas Tenaga Kerja']);
        DB::table('pengirim')->insert(['nama' => 'Inspektorat']);
        DB::table('pengirim')->insert(['nama' => 'Rsud Dr. Harjono S']);
        DB::table('pengirim')->insert(['nama' => 'Satuan Polisi Pamong Praja']);
        DB::table('pengirim')->insert(['nama' => 'Sekretariat Daerah']);
        DB::table('pengirim')->insert(['nama' => 'Sekretariat Dprd']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Babadan']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Badegan']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Balong']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Bungkal']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Jambon']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Jenangan']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Jetis']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Kauman']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Mlarak']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Ngebel']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Ngrayun']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Ponorogo']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Pudak']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Pulung']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Sambit']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Sampung']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Sawoo']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Siman']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Slahung']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Sooko']);
        DB::table('pengirim')->insert(['nama' => 'Kecamatan Sukorejo']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Organisasi']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Perencanaan Dan Keuangan']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Protokol Dan Komunikasi Pimpinan']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Umum']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Hukum']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Kesejahteraan Rakyat']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Tata Pemerintahan Dan Kerjasama']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Administrasi Pembangunan']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Administrasi Perekonomian Dan Sumber Daya Alam']);
        DB::table('pengirim')->insert(['nama' => 'Bagian Pengadaan Barang Dan Jasa']);
        DB::table('pengirim')->insert(['nama' => 'Universitas Muhammadiah Ponorogo']);
        DB::table('pengirim')->insert(['nama' => 'Badan Pusat Statistik Ponorogo']);
        DB::table('pengirim')->insert(['nama' => 'Arsip Nasional Republik Indonesia']);
        DB::table('pengirim')->insert(['nama' => 'Kementerian Komunikasi dan Informatika']);
        // ------------------------------------------------------------------------------------------------------daftar_tahun
        DB::table('daftar_nomors')->insert(['tahun' => '2022','nomor_urut'=>'18','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2023','nomor_urut'=>'1','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2024','nomor_urut'=>'1','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2025','nomor_urut'=>'1','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2026','nomor_urut'=>'1','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2027','nomor_urut'=>'1','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2028','nomor_urut'=>'1','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2029','nomor_urut'=>'1','nomor_keluar'=>'1']);
        DB::table('daftar_nomors')->insert(['tahun' => '2030','nomor_urut'=>'1','nomor_keluar'=>'1']);
        // -------------------------------------------------------------------------------------------------------------PENERIMA DISPO
        DB::table('penerima_disposisis')->insert(['nama' => 'Kepala Dinas']);
        DB::table('penerima_disposisis')->insert(['nama' => 'Sekretaris']);
        DB::table('penerima_disposisis')->insert(['nama' => 'Kabid Aplikasi dan Informatika']);
        DB::table('penerima_disposisis')->insert(['nama' => 'Kabid Pengelolaan Informasi dan Komunikasi Publik']);
        DB::table('penerima_disposisis')->insert(['nama' => 'Kabid Statistik dan Persandian']);

        DB::table('bidangs')->insert(['nama' => 'Sekretariat']);
        DB::table('bidangs')->insert(['nama' => 'Dinas Komunikasi, Informatika dan Statistik Ponorogo']);
        DB::table('bidangs')->insert(['nama' => 'Bidang Aplikasi dan Informatika']);
        DB::table('bidangs')->insert(['nama' => 'Bidang Pengelolaan Informasi dan Komunikasi Publik']);
        DB::table('bidangs')->insert(['nama' => 'Bidang Statistik dan Persandian']);
    }
}
