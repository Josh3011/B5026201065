<!DOCTYPE html>
<html>
<head>
	<title>Josha Adrista Harianto (5026201065)</title>
</head>
<body>


	<h3>Data pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

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

</body>
</html>
