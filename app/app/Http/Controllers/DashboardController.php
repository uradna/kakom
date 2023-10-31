<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data=SuratMasuk::where("aktif", "1")->orderBy("id", "desc")->get()->take(5);
        $masuk=DB::select('SELECT COUNT(id) AS total FROM surat_masuks WHERE aktif = 1');
        $keluar=DB::select('SELECT COUNT(id) AS total FROM surat_keluars WHERE aktif = 1');
        $dispo=DB::select('SELECT COUNT(id) AS total FROM surat_masuks WHERE status_disposisi = 1 AND aktif = 1');
        $masuk = $masuk[0]->total;
        $keluar = $keluar[0]->total;
        $dispo = $dispo[0]->total;

        return view('dashboard', compact('data', 'masuk', 'keluar', 'dispo'));
    }
}
