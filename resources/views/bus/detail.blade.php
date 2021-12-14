@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')


<h3>Edit Bus</h3>
<a href="/bus" class="btn btn-primary"> Kembali</a>

	@foreach($bus as $b)
	<form action="/bus/update" method="post">
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="merkbus">Merk Bus :</label>
            <div class="col-sm-10">
              <label type="text" class="form-control" id="merkbus"  name="merkbus"
              required="required">{{ $b->merkbus }}</label>
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="jumlahbus">Jumlah Bus:</label>
            <div class="col-sm-10">
              <label type="number" class="form-control" id="jumlahbus"  name="jumlahbus"
              required="required">{{ $b->jumlahbus }}</label>
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="tersedia">Ketersediaan:</label>
            <div class="col-sm-10">
                <label type="text" class="form-control" id="tersedia"  name="tersedia"
                required="required">{{ $b->tersedia }}</label>
            </div>
            <div>
                <p> A = Tersedia T= Tidak Tersedia </p>
            </div>

        </div>
	</form>
	@endforeach


    @endsection
