@extends('layout.ceria')

@section('title', 'DATA BUS')

@section('isikonten')

    <h3>Data Bus</h3>

	<a href="/bus/tambah" class="btn btn-primary"> + Tambah Bus Baru</a>

	<br/>
	<br/>
    <div class="col-sm-8container" align='center'>
        <p>Cari Data Bus Berdasarkan Merk Bus :</p>
        <form action="/bus/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Bus .." value="{{ old('cari') }}">
            <input class="form-control btn-primary" type="submit" value="CARI">
        </form>
    </div>

	<table class="table table-success table-striped">
		<tr>
			<th>Merk Bus</th>
			<th>Jumlah Bus</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($bus as $b)
		<tr>
			<td>{{ $b->merkbus }}</td>
			<td>{{ $b->jumlahbus }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
                <a href="/bus/detail/{{ $b->kodebus }}" class="btn btn-info" >View Detail</a>
				<a href="/bus/edit/{{ $b->kodebus }}" class="btn btn-warning">Edit</a>
				|
				<a href="/bus/hapus/{{ $b->kodebus }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $bus->links() }}

@endsection
