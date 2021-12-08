@extends('layout.ceria')

@section('title', 'DETAI DAFTAR PEGAWAI')

@section('isikonten')

<h3> Edit Pegawai </h3>
<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		Nama <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_nama }}</label>
		Jabatan <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_jabatan }}</label>
		Umur <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_umur }}</label>
		Alamat <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_alamat }}</label>
	</form>
	@endforeach
@endsection
