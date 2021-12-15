@extends('layout.ceria')

@section('title', 'DATA NILAI')

@section('isikonten')

    <h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Mahasiswa</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            <td>{{ $n->NilaiAngka }}

                //if($n->NilaiAngka>=81){
                    //echo "A";
                 //elsesif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80){
                    //echo "B";
                 //elsesif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60){
                    //echo "C";
                //else {
                     //echo "D";



            </td>
            <td>{{($n->NilaiAngka * $n->SKS)}}</td>
            <td>
                <a href="/nilaikuliah/hapus/{{ $n->ID }}" class="btn btn-danger">Hapus</a>
            </td>

		</tr>
		@endforeach
	</table>
    {{ $nilaikuliah->links() }}

@endsection
