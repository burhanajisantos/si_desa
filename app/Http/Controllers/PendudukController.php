<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    public function index()
    {
        $data_penduduk = \App\Penduduk::all();
        return view('penduduk.index',['data_penduduk' => $data_penduduk]);
    }

    public function create(Request $req)
    {
        \App\Penduduk::create($req->all());
        return redirect('/penduduk')->with('sukses','Data Berhasil diinput');
    }

    public function edit($id)
    {
        $penduduk = \App\Penduduk::find($id);
        return view('penduduk/edit',['penduduk' => $penduduk]);
    }

    public function update(Request $req,$id)
    {
        $penduduk = \App\Penduduk::find($id);
        $penduduk->update($req->all());
        return redirect('/penduduk')->with('sukses','Data Berhasil Diupdate');
         
    }
    public function delete($id)
    {
        $penduduk = \App\Penduduk::find($id);
        $penduduk->delete($penduduk);
        return redirect('/penduduk')->with('sukses','Data Berhasil Dihapus');
         
    }
}
