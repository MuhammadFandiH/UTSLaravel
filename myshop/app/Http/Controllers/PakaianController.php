<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PakaianController extends Controller
{
    public function index()
    {
        //Mengambil data dari table pakaian
        $pakaian = DB::table('pakaian')->get();

        //mengirim data pakaian ke view index
        return view('index',['pakaian' => $pakaian]);
    }

    // method untuk menampilkan view form tambah pakaian
    public function tambah()
    {
	    // memanggil view tambah
	    return view('tambah');
    }

    // method untuk insert data ke table pakaian
    public function store(Request $request)
    {
	    // insert data ke table pakaian
	    DB::table('pakaian')->insert([
	    	'NamaBarang' => $request->nama,
		    'Deskripsi' => $request->deskripsi,
		    'Harga' => $request->harga
	    ]);
	    // alihkan halaman ke halaman pakaian
	    return redirect('/pakaian');
    }

    // method untuk edit data pakaian
    public function edit($id)
    {
	    // mengambil data pakaian berdasarkan id yang dipilih
	    $pakaian = DB::table('pakaian')->where('No',$id)->get();
	    // passing data pakaian yang didapat ke view edit.blade.php
	    return view('edit',['pakaian' => $pakaian]);
    }
    // update data pakaian
    public function update(Request $request)
    {
	    // update data pakaian
	    DB::table('pakaian')->where('No',$request->id)->update([
		    'NamaBarang' => $request->nama,
		    'Deskripsi' => $request->deskripsi,
		    'Harga' => $request->harga
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/pakaian');
    }

    // method untuk hapus data pakaian
    public function hapus($id)
    {
	    // menghapus data pakaian berdasarkan id yang dipilih
	    DB::table('pakaian')->where('No',$id)->delete();
		
	    // alihkan halaman ke halaman pakaian
	    return redirect('/pakaian');
    }
}
