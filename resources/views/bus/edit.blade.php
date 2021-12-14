@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')


<h3>Edit Bus</h3>
<a href="/bus" class="btn btn-primary"> Kembali</a>

	@foreach($bus as $b)
	<form action="/bus/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodebus }}"> <br/>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="merkbus">Merk Bus:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="merkbus"  name="merkbus"
              required="required" value="{{ $b->merkbus }}">
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="jumlahbus">Jumlah Bus:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="jumlahbus"  name="jumlahbus"
              required="required" value="{{ $b->jumlahbus }}">
            </div>
        </div>
        <div class="row mt-2 form-group">
            <label class="control-label col-sm-2" for="tersedia">Ketersediaan:</label>
            <div class="col-sm-10 custom-control custom-radio custom-control-inline">
                <input type="radio" id="tersedia" name="tersedia" value="A" @if ($b->tersedia === "A") checked="checked" @endif>
                <label for="tersedia">Tersedia</label><br>
                <input type="radio" id="tidak" name="tersedia" value="T" @if ($b->tersedia === "T") checked="checked" @endif>
                <label for="tidak">Tidak Tersedia</label><br>
            </div>
        </div>

		<input type="submit" class='btn btn-success' value="Simpan Data">
	</form>
	@endforeach


    @endsection
