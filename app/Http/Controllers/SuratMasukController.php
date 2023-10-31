<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratMasuk;
use App\Models\DaftarNomor;
use App\Models\PenerimaDisposisi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuratMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -----------------------------------------------------------------------------------------------INDEX
    public function index()
    {
        $pengirim = DB::select('select * from pengirim');
        return view('masuk.index', compact('pengirim'));
        // return view('masuk.index');
    }
    // -----------------------------------------------------------------------------------------------CREATE
    public function create(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();
        if (SuratMasuk::where('no_surat', $input['no_surat'])->count()!=0) {
            return redirect()->back()->with('error', 'Nomor surat sudah ada di daftar surat masuk!');
        }
        // cek pengirim
        cekPengirim($input['pengirim']);

        $tahun = date('Y', strtotime($input['masuk']));
        $bulan = date('m', strtotime($input['masuk']));

        $nomor_urut = DaftarNomor::where('tahun', $tahun)->get()->first();
        $nomor_urut->nomor_urut = ($nomor_urut->nomor_urut)+1;

        if ($request->file_surat!=null) {
            $file = $request->file('file_surat');
            $input['file_surat'] = 'suratMasuk_'.$nomor_urut->nomor_urut.'-'.$input['masuk'].'-'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_surat']);
        }

        $input['user_id'] = $user->id;
        $input['no_urut'] = $nomor_urut->nomor_urut;
        $input['status_disposisi'] = '0';
        $input['tahun'] = $tahun;
        $input['bulan'] = $bulan;
        $input['aktif'] = '1';

        $last = SuratMasuk::create($input);
        $nomor_urut->save();
        return redirect()->route('suratMasukRead', $last->id);
    }
    // ----------------------------------------------------------------------------------------------- READ
    public function read($id)
    {
        $data = SuratMasuk::where('id', $id)->first();
        $penerima = DB::select('select * from penerima_disposisis');
        if ($data==null) {
            abort(404);
        }
        return view('masuk.detail', compact('data', 'penerima'));
    }
    public function edit($id)
    {
        $data = SuratMasuk::where('id', $id)->first();
        $penerima = DB::select('select * from penerima_disposisis');
        if ($data==null) {
            abort(404);
        }
        $pengirim = DB::select('select * from pengirim');
        return view('masuk.edit', compact('data', 'pengirim', 'penerima'));
    }
    // ----------------------------------------------------------------------------------------------- UPDATE
    public function update(Request $request)
    {
        $input=SuratMasuk::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        $cek = SuratMasuk::where([
            ['no_surat', '=', $request->no_surat],
            ['id', '<>', $request->id]
        ])->count();
        // dd($cek);
        if ($cek!=0) {
            return redirect()->back()->with('error', 'Duplikasi nomor surat. Pastikan nomor surat sudah benar.');
        }

        cekPengirim($request->pengirim);
        cekPenerimaDisposisi($request->penerima_disposisi);

        $input['no_surat'] = $request->no_surat;
        $input['tanggal'] = $request->tanggal;
        $input['masuk'] = $request->masuk;
        $input['pengirim'] = $request->pengirim;
        $input['perihal'] = $request->perihal;
        $input['isi_disposisi'] = $request->isi_disposisi;
        $input['penerima_disposisi'] = $request->penerima_disposisi;
        $input['tahun'] = date('Y', strtotime($request->masuk));
        $input['bulan'] = date('m', strtotime($request->masuk));
        if ($request->isi_disposisi!=null) {
            $input['status_disposisi'] = "1";
        }
        
        if ($request->file_surat!=null) {
            $file = $request->file('file_surat');
            $input['file_surat'] = 'suratMasuk_'.$input['no_urut'].'_'.$input['masuk'].'_'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_surat']);
        }
        if ($request->file_disposisi!=null) {
            $file = $request->file('file_disposisi');
            $input['file_disposisi'] = 'disposisi_'.$input['no_urut'].'_'.$input['masuk'].'_'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_disposisi']);
        }
        $input->save();
        return redirect()->route('suratMasukRead', $request->id);
    }

    public function update_dispo(Request $request)
    {
        $surat = SuratMasuk::where('id', $request->id)->get()->first();
        if ($surat==null) {
            abort(404);
        }
        $surat->isi_disposisi = $request->isi_disposisi;
        $surat->status_disposisi = '1';
        $surat->save();
        return redirect()->route('suratMasukRead', $request->id);
    }

    public function update_penerima(Request $request)
    {
        $surat = SuratMasuk::where('id', $request->id)->get()->first();
        if ($surat==null) {
            abort(404);
        }
        $surat->penerima_disposisi = $request->penerima_disposisi;
        $surat->status_disposisi = '1';
        $surat->save();
        return redirect()->route('suratMasukRead', $request->id);
    }

    public function update_fsurat(Request $request)
    {
        $input = SuratMasuk::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        if ($request->file_surat!=null) {
            $file = $request->file('file_surat');
            $input['file_surat'] = 'suratMasuk_'.$input['no_urut'].'_'.$input['masuk'].'_'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_surat']);
        }
        $input->save();
        return redirect()->route('suratMasukRead', $request->id);
    }

    public function update_fdispo(Request $request)
    {
        $input = SuratMasuk::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        if ($request->file_disposisi!=null) {
            $file = $request->file('file_disposisi');
            $input['file_disposisi'] = 'disposisi_'.$input['no_urut'].'_'.$input['masuk'].'_'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_disposisi']);
        }
        $input->save();
        // dd($input);
        return redirect()->route('suratMasukRead', $request->id);
    }

    // ----------------------------------------------------------------------------------------------- DELETE
    public function delete(Request $request)
    {
        $input = SuratMasuk::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        $input['aktif']=0;
        $input->save();
        // dd($input);
        return redirect()->route('suratMasukRead', $request->id);
    }

    // ------------------------------------------------------------------------------------------------RESTRORE
    public function restore(Request $request)
    {
        $input = SuratMasuk::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        $input['aktif']=1;
        $input->save();
        // dd($input);
        return redirect()->route('suratMasukRead', $request->id);
    }

    // ----------------------------------------------------------------------------------------------- PRINT
    public function print($id)
    {
        $data=SuratMasuk::where("id", $id)->get()->first();
        if ($data==null) {
            abort(404);
        }
        $data->status_disposisi = 1;
        $data->save();
        return view('masuk.print', compact('data'));
    }
}
