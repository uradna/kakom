<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('pengguna.akun');
    }

    public function update(Request $request)
    {
        $akun=Auth::user();
        $input=$request->all();
        $input['id']=$akun->id;

        if ($request->foto!=null) {
            $file = $request->file('foto');
            $input['foto'] = date("Y-m-d-h-i-s").'_'.$akun->id.'_'.$akun->name.'.'.$file->getClientOriginalExtension();
            $upload_folder='img';
            $file->move($upload_folder, $input['foto']);
        }
        if ($request->password != null) {
            if (Hash::check($request->old_password, $akun->password)) {
                if ($request->password == $request->password_confirmation) {
                    $input['password'] = Hash::make($request->password);
                } else {
                    return redirect()->back()->with('error', 'Update password gagal. Password baru tidak sama.');
                }
            } else {
                return redirect()->back()->with('error', 'Update password gagal. Password salah.');
            }
        }

        $akun->update($input);
        return redirect()->route('akun');
    }
    
    public function cal()
    {
        return view('cal');
    }
}
