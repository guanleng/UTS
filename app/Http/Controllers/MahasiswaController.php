<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\Models\Mahasiswa::all();
        return view('mahasiswa.index', ['data_mahasiswa' => $data_mahasiswa]);
    }
    
    public function create(Request $request)
    {
        \App\Models\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses','Berhasil Input Data!');
    }
    
    public function edit($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        return view('mahasiswa/edit',['mahasiswa'=>$mahasiswa]);
    }
    
    public function update(Request $request,$id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses','Berhasil Update Data');
    }
    
    public function delete($id)
    {
        $mahasiswa = \App\Models\Mahasiswa::find($id);
        $mahasiswa ->delete($mahasiswa);
        return redirect ('/mahasiswa')->with('sukses','Berhasil Hapus Data');
    }

    public function output()
    {
        $data_mahasiswa = \App\Models\Mahasiswa::all();
        return view('datamhs.index', ['data_mahasiswa' => $data_mahasiswa]);
    }

}


