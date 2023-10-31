<?php

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratMasuk;
use App\Models\DaftarNomor;
use App\Models\Pengirim;
use App\Models\PenerimaDisposisi;
use App\Models\Bidang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

if (!function_exists('konversiBulan')) {
    function konversiBulan($data)
    {
        switch ($data) {
            case "1":
                $b="Januari";
            break;
            case "2":
                $b="Februari";
            break;
            case "3":
                $b="Maret";
            break;
            case "4":
                $b="April";
            break;
            case "5":
                $b="Mei";
            break;
            case "6":
                $b="Juni";
            break;
            case "7":
                $b="Juli";
            break;
            case "8":
                $b="Agustus";
            break;
            case "9":
                $b="September";
            break;
            case "10":
                $b="Oktober";
            break;
            case "11":
                $b="November";
            break;
            case "12":
                $b="Desember";
            break;
            default:
                $b="Not Defined";
            }

        return $b;
    }
}

if (!function_exists('konversiTanggal')) {
    function konversiTanggal($tanggal)
    {
        // 2021-11-09
        $data = explode('-', $tanggal);
        switch ($data[1]) {
            case "01":
                $b="Januari";
                break;
            case "02":
                $b="Februari";
                break;
            case "03":
                $b="Maret";
                break;
                    case "04":
                $b="April";
                break;
                    case "05":
                $b="Mei";
                break;
                    case "06":
                $b="Juni";
                break;
                    case "07":
                $b="Juli";
                break;
                    case "08":
                $b="Agustus";
                break;
                    case "09":
                $b="September";
                break;
                    case "10":
                $b="Oktober";
                break;
                    case "11":
                $b="November";
                break;
                    case "12":
                $b="Desember";
                break;
            default:
                $b="Not Defined";
            }

        return $data[2]." ".$b." ".$data[0];
    }
}

if (!function_exists('statusDispo')) {
    function statusDispo($d)
    {
        switch ($d) {
            case "0":
                $b="belum";
                break;
            case "1":
                $b="dicetak";
                break;
            }

        return $b;
    }
}

if (!function_exists('cekPengirim')) {
    function cekPengirim($nama)
    {
        $i=Pengirim::where('nama', $nama)->get()->first();
        if ($i==null) {
            $input['nama']=$nama;
            Pengirim::create($input);
        }
    }
}

if (!function_exists('cekPenerimaDisposisi')) {
    function cekPenerimaDisposisi($nama)
    {
        $i=PenerimaDisposisi::where('nama', $nama)->get()->first();
        if ($i==null) {
            $input['nama']=$nama;
            PenerimaDisposisi::create($input);
        }
    }
}

if (!function_exists('cekBidang')) {
    function cekBidang($nama)
    {
        $i=Bidang::where('nama', $nama)->get()->first();
        if ($i==null) {
            $input['nama']=$nama;
            Bidang::create($input);
        }
    }
}
