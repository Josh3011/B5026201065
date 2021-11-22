<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pendapatan
        $pendapatan = DB::table('pendapatan')->get();

        // mengirim data pendapatan ke view index
        return view('pendapatan.awal', ['pendapatan' => $pendapatan]);
    }
    // method untuk menampilkan view form tambah pendapatan
    public function tambah()
    {

        // memanggil view tambah
        return view('pendapatan.tambah1');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pendapatan
        DB::table('pendapatan')->insert([
            'pendapatan_idpegawai' => $request->idpegawai,
            'pendapatan_bulan' => $request->bulan,
            'pendapatan_tahun' => $request->tahun,
            'pendapatan_gaji' => $request->gaji,
            'pendapatan_tunjangan' => $request->tunjangan,
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }
    // method untuk edit data pendapatan
    public function edit($id)
    {
        // mengambil data pendapatan berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')->where('pendapatan_id', $id)->get();
        // passing data pendapatan yang didapat ke view edit1.blade.php
        return view('pendapatan.edit1', ['pendapatan' => $pendapatan]);
    }
    // update data pendapatan
    public function update(Request $request)
    {
        // update data pendapatan
        DB::table('pendapatan')->where('pendapatan_id', $request->id)->update([
            'pendapatan_idpegawai' => $request->idpegawai,
            'pendapatan_bulan' => $request->bulan,
            'pendapatan_tahun' => $request->tahun,
            'pendapatan_gaji' => $request->gaji,
            'pendapatan_tunjangan' => $request->tunjangan,
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pendapatan berdasarkan id yang dipilih
        DB::table('pendapatan')->where('pendapatan_id', $id)->delete();

        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }
}
