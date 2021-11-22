<!DOCTYPE html>
<html>
<head>
	<title>Josha Adrista Harianto (5026201065)</title>
</head>
<body>

	<h2>Josha Adrista Harianto (5026201065)</h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah tabel pendapatan</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>idpegawai</th>
			<th>bulan</th>
			<th>tahun</th>
			<th>gaji</th>
            <th>tunjangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pendapatan_idpegawai }}</td>
			<td>{{ $p->pendapatan_bulan }}</td>
			<td>{{ $p->pendapatan_tahun }}</td>
			<td>{{ $p->pendapatan_gaji }}</td>
            <td>{{ $p->pendapatan_tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->pendapatan_id }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->pendapatan_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
