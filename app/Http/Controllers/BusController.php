<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    public function index()
    {
        // mengambil data dari table pendapatan
        //$pendapatan = DB::table('pendapatan')->get();
        $bus = DB::table('bus')->paginate(3) ;

        // mengirim data pegawai ke view index
        return view('bus.index', ['bus' => $bus]);
    }
    // method untuk menampilkan view form tambah pendapatan
    public function tambah()
    {

        // memanggil view tambah
        return view('bus.tambah');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pendapatan
        DB::table('bus')->insert([
            'merkbus' => $request->merkbus,
            'jumlahbus' => $request->jumlahbus,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/bus');
    }
    // method untuk edit data pendapatan
    public function edit($id)
    {
        // mengambil data pendapatan berdasarkan id yang dipilih
        $bus = DB::table('bus')->where('kodebus', $id)->get();
        // passing data pendapatan yang didapat ke view edit1.blade.php
        return view('bus.edit', ['bus' => $bus]);
    }
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bus = DB::table('bus')->where('kodebus', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('bus.detail', ['bus' => $bus]);
    }
    // update data pendapatan
    public function update(Request $request)
    {
        // update data pendapatan
        DB::table('bus')->where('kodebus', $request->id)->update([
            'merkbus' => $request->merkbus,
            'jumlahbus' => $request->jumlahbus,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/bus');
    }
    // method untuk hapus data pendapatan
    public function hapus($id)
    {
        // menghapus data pendapatan berdasarkan id yang dipilih
        DB::table('bus')->where('kodebus', $id)->delete();

        // alihkan halaman ke halaman pendapatan
        return redirect('/bus');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bus = DB::table('bus')
		->where('merkbus','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('bus.index',['bus' => $bus]);

	}
}
