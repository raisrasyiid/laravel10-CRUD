<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index',[
            'karyawan'=>Karyawan::latest()->get()
        ]);
    }

    public function add()
    {
        return view('karyawan.insert');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'alamat'=>'required',
            'no_tlpn'=>'required'
        ]);

        Karyawan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn
        ]);

        return redirect()->route('karyawan')->with('message','Data Berhasil Ditambahkan!');
    }

    public function edit()
    {
        return view('karyawan.edit');
    }

    public function update(Request $request)
    {
        
    }

    public function delete($id)
    {
        session_destroy();

        return redirect()->route('karyawan')->with('message','Data Berhasil Dihapus!');
    }
}
