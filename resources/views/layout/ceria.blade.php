<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
	<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-color: #f2f2f2
    }
    .header{
        background-color: #e6e6e6;
        border-bottom: 5px solid black;

    }
    .footer{
        background-color: #e6e6e6;
        border-top: 2px solid black;
    }
    .navbar{
        background-color: #e0ebeb;
        margin-top: 20px;
        border-color: 3px solid black;
    }
</style>
<body>
<div class="header">
    <center><img src="{{ asset('fotocsshtml/fotodiriku.jpg')}}" width="200px" height="250px" class="rounded-circle">
            <h4> 5026201065/ Josha Adrista Harianto </h4>
    </center>

</div>
<div class="container">
    <div class="navbar col-sm-4">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="/pegawai">Daftar Pegawai</a></li>
          <li><a href="/absen">Menu Absen</a></li>
          <li><a href="/pendapatan">Data Pendapatan</a></li>
          <li><a href="/bus">Praktikum3</a></li>
          <li><a href="/nilaikuliah">UAS</a></li>
        </ul>
    </div>
    <div class="col-sm-8">
    @section('isikonten')
    @show
    </div>
</div>
<footer>
<div class="footer">
    <center>
    <h5> Dibuat oleh Josha Adrista Harianto-5026201065 </h5>
    <h5> Versi 1.0 </h5>
    </center>
</footer>
</div>
</body>
</html>
