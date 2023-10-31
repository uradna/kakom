<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratMasuk;
use App\Models\DaftarNomor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArsipSuratMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -----------------------------------------------------------------------------------------------INDEX
    public function index()
    {
        $data=SuratMasuk::where("aktif", "1")->orderBy("id", "desc")->get()->all();

        return view('arsip.suratmasuk.index', compact('data'));
    }

    public function tahun($tahun)
    {
        $data=SuratMasuk::where("aktif", "1")->where("tahun", $tahun)->orderBy("id", "desc")->get()->all();

        return view('arsip.suratmasuk.tahunAll', compact('data', 'tahun'));
    }

    public function bulan($tahun, $bulan)
    {
        $data=SuratMasuk::where("aktif", "1")->where("tahun", $tahun)->where("bulan", $bulan)->orderBy("id", "desc")->get()->all();

        return view('arsip.suratmasuk.bulan', compact('data', 'tahun', 'bulan'));
    }
}
