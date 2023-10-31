<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratKeluar;
use App\Models\DaftarNomor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuratKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // -----------------------------------------------------------------------------------------------INDEX
    public function index()
    {
        $pengirim = DB::select('select * from pengirim');
        $bidang = DB::select('select * from bidangs');
        return view('keluar.index', compact('pengirim', 'bidang'));
        // return view('masuk.index');
    }
    // -----------------------------------------------------------------------------------------------CREATE
    public function create(Request $request)
    {
        $user = Auth::user();
        $input = $request->all();

        cekPengirim($input['penerima']);
        cekBidang($input['dari']);

        $tahun = date('Y', strtotime($input['keluar']));
        $bulan = date('m', strtotime($input['keluar']));

        $nomor_urut = DaftarNomor::where('tahun', $tahun)->get()->first();
        $nomor_urut->nomor_keluar = ($nomor_urut->nomor_keluar)+1;
        // dd($nomor_urut);

        if ($request->file_surat!=null) {
            $file = $request->file('file_surat');
            $input['file_surat'] = 'suratKeluar_'.$nomor_urut->nomor_keluar.'-'.$input['keluar'].'-'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_surat']);
        }

        
        $input['user_id'] = $user->id;
        $input['no_urut'] = $nomor_urut->nomor_keluar;
        $input['tahun'] = $tahun;
        $input['bulan'] = $bulan;
        $input['aktif'] = '1';
        // dd($input);

        $last = SuratKeluar::create($input);
        $nomor_urut->save();
        return redirect()->route('suratKeluarRead', $last->id);
    }
    // -----------------------------------------------------------------------------------------------READ

    public function read($id)
    {
        $data = SuratKeluar::where('id', $id)->first();
        if ($data==null) {
            abort(404);
        }
        return view('keluar.detail', compact('data'));
    }
    
    public function edit($id)
    {
        $data = SuratKeluar::where('id', $id)->get()->first();
        if ($data==null) {
            abort(404);
        }
        $pengirim = DB::select('select * from pengirim');
        $bidang = DB::select('select * from bidangs');
        return view('keluar.edit', compact('data', 'pengirim', 'bidang'));
    }
    //------------------------------------------------------------------------------------------------UPDATE
    public function update(Request $request)
    {
        $input=SuratKeluar::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        cekPengirim($input['penerima']);
        cekBidang($input['dari']);

        $input['no_surat'] = $request->no_surat;
        $input['tanggal'] = $request->tanggal;
        $input['keluar'] = $request->keluar;
        $input['dari'] = $request->dari;
        $input['penerima'] = $request->penerima;
        $input['perihal'] = $request->perihal;
        $input['tahun'] = date('Y', strtotime($request->keluar));
        $input['bulan'] = date('m', strtotime($request->keluar));

        
        if ($request->file_surat!=null) {
            $file = $request->file('file_surat');
            $input['file_surat'] = 'suratKeluar_'.$input['no_urut'].'_'.$input['keluar'].'_'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_surat']);
        }

        $input->save();
        return redirect()->route('suratKeluarRead', $request->id);
    }

    public function update_fsurat(Request $request)
    {
        $input = SuratKeluar::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        if ($request->file_surat!=null) {
            $file = $request->file('file_surat');
            $input['file_surat'] = 'suratKeluar_'.$input['no_urut'].'_'.$input['keluar'].'_'.$file->getClientOriginalName();
            $upload_folder='storage';
            $file->move($upload_folder, $input['file_surat']);
        }
        $input->save();
        return redirect()->route('suratKeluarRead', $request->id);
    }
    // ----------------------------------------------------------------------------------------------DELETE
    public function delete(Request $request)
    {
        $input = SuratKeluar::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        $input['aktif']=0;
        $input->save();
        // dd($input);
        return redirect()->route('suratKeluarRead', $request->id);
    }
    // ------------------------------------------------------------------------------------------------RESTRORE
    public function restore(Request $request)
    {
        $input = SuratKeluar::where("id", $request->id)->get()->first();
        if ($input==null) {
            abort(404);
        }
        $input['aktif']=1;
        $input->save();
        // dd($input);
        return redirect()->route('suratKeluarRead', $request->id);
    }
}
