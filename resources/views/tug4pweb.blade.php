<html>

<head>
    <style>
        .siblings * {
            display: block;
            border: 2px solid #a5a5a5;
            background-color: rgb(245, 237, 231);
            border-radius: 5px;
            color: rgb(0, 0, 0);
            padding: 5px;
            margin: 15px;
        }

        .judul {
            text-align: center;
            border: 3px solid rgb(187, 153, 108);
            border-radius: 10px;
            background-color: chartreuse;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $("#mobil").nextAll().css({ "color": "#ff6666", "border": "2px solid red" });
            });
        });


    </script>
</head>

<body>
    <h1 class="judul">Jenis-Jenis Mobil</h1>
    <div class="siblings">

        <ul> Tipe-Tipe Mobil Merk Toyota
            <li>Fortuner</li>
            <li>Agya</li>
            <li id="mobil">Raize</li>
            <li>Innova</li>
            <li>Alphard</li>
        </ul>
    </div>
    <button>Tipe mobil keluarga</button>
</body>

</html>
