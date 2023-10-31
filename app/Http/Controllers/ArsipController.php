<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use App\Models\DaftarNomor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArsipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -----------------------------------------------------------------------------------------------INDEX
    public function index()
    {
        return view('arsip.index');
    }

    public function arsipSMIndex()
    {
        $tahun = DB::select('SELECT tahun FROM surat_masuks WHERE aktif = 1 GROUP BY tahun ORDER BY tahun DESC');
        if (!$tahun) {
            return redirect()->route('arsip');
        }
        return view('arsip.smindex', compact('tahun'));
    }

    public function arsipSMTahun($tahun)
    {
        $data = DB::select('SELECT bulan FROM surat_masuks WHERE tahun = '.$tahun.' AND aktif = 1 GROUP BY bulan ORDER BY bulan DESC ');
        // dd($data);
        return view('arsip.smtahun', compact('data', 'tahun'));
    }

    public function arsipSKIndex()
    {
        $tahun = DB::select('SELECT tahun FROM surat_keluars WHERE aktif = 1 GROUP BY tahun ORDER BY tahun DESC');
        if (!$tahun) {
            return redirect()->route('arsip');
        }
        return view('arsip.skindex', compact('tahun'));
    }

    public function arsipSKTahun($tahun)
    {
        $data = DB::select('SELECT bulan FROM surat_keluars WHERE tahun = '.$tahun.'  AND aktif = 1 GROUP BY bulan ORDER BY bulan DESC ');
        // dd($data);
        return view('arsip.sktahun', compact('data', 'tahun'));
    }

    public function sampahIndex()
    {
        return view('arsip.sampah');
    }

    public function sampahMasuk()
    {
        $data=SuratMasuk::where("aktif", "0")->orderBy("id", "desc")->get()->all();

        return view('arsip.sampahmasuk', compact('data'));
    }

    public function sampahKeluar()
    {
        $data=SuratKeluar::where("aktif", "0")->orderBy("id", "desc")->get()->all();

        return view('arsip.sampahkeluar', compact('data'));
    }
}
