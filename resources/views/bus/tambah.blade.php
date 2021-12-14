@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

	<h3>Data Bus</h3>

	<a href="/bus" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form class="form-horizontal" action="/bus/store" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id"> <br/>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="merkbus">Merk Bus:</label>
            <div class="col-sm-10">
              <input type="merkbus" class="form-control" id="merkbus"  name="merkbus"
              required="required">
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="jumlahbus">Jumlah Bus:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="jumlahbus"  name="jumlahbus"
              required="required">
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="tersedia">Ketersediaan:</label>
            <div class="col-sm-10 custom-control custom-radio custom-control-inline">
                <input type="radio" id="tersedia" name="tersedia" value="A" checked="checked">
                <label for="tersedia">Tersedia</label><br>
                <input type="radio" id="tidak" name="tersedia" value="T">
                <label for="tidak">Tidak Tersedia</label><br>
            </div>
        </div>

		<input class='btn btn-success' type="submit" value="Simpan Data">
	</form>
@endsection
