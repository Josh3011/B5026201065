@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id"> <br/>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="NRP">NRP:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="NRP"  name="NRP" pattern="[0-9].{1,6}"
              required="required">
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="NilaiAngka">Nilai Angka:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="NilaiAngka"  name="NilaiAngka"
              required="required">
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="SKS">SKS:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="SKS"  name="SKS"
              required="required">
            </div>
        </div>

		<input class='btn btn-success' type="submit" value="Simpan Data">
	</form>
@endsection
