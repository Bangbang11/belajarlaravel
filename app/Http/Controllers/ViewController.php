<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content1 = "Ini JUDUL";
        $content2 = "ini KONTEN";
        return view('belajar1')->with('showContent', compact('content1', 'content2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = new mahasiswa;
        $mahasiswa -> nama = "Resdi";
        $mahasiswa -> nim = "12111012";
        $mahasiswa -> alamat = "Garut";
        $mahasiswa -> save();
        $pesan = "berhasil";
        return view('belajar2')->with('showContent', $pesan);
    }

    public function update()
    {
        $mahasiswa = mahasiswa::find(1);
        $mahasiswa -> nama =  "Bangbang";
        $mahasiswa -> nim = "1211001";
        $mahasiswa -> alamat = "Bandung";
        $mahasiswa -> save();
        $pesan = "terubah";
        return view('belajar1')->with('showContent', $pesan);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() 
    {
        $mahasiswa = mahasiswa::all();
        foreach ($mahasiswa as $mhs ) {
            echo "<b>Nama</b> :";
            echo $mhs->nama;
            echo "<br> <b>NIM</b> : ";
            echo $mhs->nim;
            echo "<br> <b>Alamat</b> : ";
            echo $mhs->alamat;
        }
    }

    public function delete() 
    {
        $mahasiswa = mahasiswa::find(1);
        $mahasiswa -> delete();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
