<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table pendapatan
        //$pendapatan = DB::table('pendapatan')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(3);

        // mengirim data pegawai ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }
    // method untuk menampilkan view form tambah pendapatan
    public function tambah()
    {

        // memanggil view tambah
        return view('nilaikuliah.tambah');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pendapatan
        DB::table('nilaikuliah')->insert([
            'nrp' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'sks' => $request->SKS
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/nilaikuliah');
    }
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('nilaikuliah')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');
    }
}
