<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data_pegawai = \App\Pegawai::all();
        return view('pegawai.index',['data_pegawai' => $data_pegawai]);
    }
    public function create(Request $req)
    {
        \App\Pegawai::create($req->all());
        return redirect('/pegawai')->with('sukses','Data Berhasil diinput');
    }

    public function edit($id)
    {
        $pegawai = \App\Pegawai::find($id);
        return view('pegawai/edit',['pegawai' => $pegawai]);
    }

    public function update(Request $req,$id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->update($req->all());
        return redirect('/pegawai')->with('sukses','Data Berhasil Diupdate');
         
    }
    public function delete($id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->delete($pegawai);
        return redirect('/pegawai')->with('sukses','Data Berhasil Dihapus');
         
    }
    //
}
