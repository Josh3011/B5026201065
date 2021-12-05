@extends('layout.ceria')

@section('title', 'DATA PENDAPATAN')

@section('isikonten')
	<h3>Data pendapatan</h3>

	<a href="/pendapatan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		idpegawai <input type="number" name="idpegawai" required="required"> <br/>
		bulan <input type="number" name="bulan" required="required"> <br/>
		tahun <input type="number" name="tahun" required="required"> <br/>
        gaji <input type="number" name="gaji" required="required"> <br/>
        tunjangan <input type="number" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
