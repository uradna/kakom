<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }
    public function index()
    {
        $data=User::all();
        return view('pengguna.index', compact('data'));
    }
    public function new()
    {
        return view('pengguna.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'jabatan' => ['required'],
            'level' => ['required']
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'jabatan' => $request->jabatan,
            'foto' => 'default.png',
        ]);
        // dd($user);
        return redirect()->route('pengguna');
    }

    public function delete(Request $request)
    {
        $user = User::where('id', $request->id)->firstorfail()->delete();
        return redirect()->route('pengguna');
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->get()->first();
        if ($user==null) {
            abort(404);
        }
        return view('pengguna.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user=User::where('id', $request->id)->get()->first();
        if ($user==null) {
            abort(404);
        }

        if ($request->password == null) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'jabatan' => ['required'],
                'level' => ['required']
            ]);
        } else {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'confirmed'],
                'jabatan' => ['required'],
                'level' => ['required']
            ]);
            $user['password'] = Hash::make($request->password);
        }


        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['jabatan'] = $request->jabatan;
        $user['level'] = $request->level;
        $user->save();
        return redirect()->route('pengguna');
    }
}
