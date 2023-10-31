<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratKeluar;
use App\Models\DaftarNomor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArsipSuratKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -----------------------------------------------------------------------------------------------INDEX
    public function index()
    {
        $data=SuratKeluar::where("aktif", "1")->orderBy("id", "desc")->get()->all();

        return view('arsip.suratkeluar.index', compact('data'));
    }

    public function tahun($tahun)
    {
        $data=SuratKeluar::where("aktif", "1")->where("tahun", $tahun)->orderBy("id", "desc")->get()->all();

        return view('arsip.suratkeluar.tahunAll', compact('data', 'tahun'));
    }

    public function bulan($tahun, $bulan)
    {
        $data=SuratKeluar::where("aktif", "1")->where("tahun", $tahun)->where("bulan", $bulan)->orderBy("id", "desc")->get()->all();

        return view('arsip.suratkeluar.bulan', compact('data', 'tahun', 'bulan'));
    }
}
