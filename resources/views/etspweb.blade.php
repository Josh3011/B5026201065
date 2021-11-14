<html>
    <head>
        <title>UTS PWEB</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("form").submit(function(){
            alert("Kirim Form");
            });
        });
    </script>
    <script>
        function validateForm() {
          let x = document.forms["form"]["nama"].value;
          if (x == "") {
            alert("Name must be filled out");
            return false;
          }
        }
    </script>
    </head>
    <style>
        .batas{
            margin-top: 50px;
            margin-bottom: 50px;
            margin-right: 40px;
            margin-left: 30px;
            padding: 10px;
            outline-style: solid;
            outline-color: rgb(0, 0, 0);
            outline-width: 5px;
          }
          body {
            background-color:#f2f2f2;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
          }

    </style>
    <body class="batas">
    <div class="container">
        <h5>Josha Adrista Harianto</h5>
        <h5>Josha</h5>
        <h5>5026201065</h5>
        <br>
        <br>
        <h1><center>Form Input Data Barang</center></h1>
        <form name="form" class="form-horizontal" action="https://www.google.com/?hl=id" onsubmit="return validateForm()" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama Barang:</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" id="nama" placeholder="Masukkan Nama Barang (minimal 10 karakter)" pattern=".{10,}" title="minimal 10 karakter (Required)"
                  name="nama" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="hrg">Harga:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="hrg" placeholder="Masukkan Harga (Numeric Only)" min="5000" pattern="[0-9].{4,}" title="Numeric Only (Required)"
                   name="hrg" required>
                   <p id="test"></p>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="jenis">Jenis Barang:</label>
                <div class="col-sm-10">
                    <select name="jenis" class="custom-select-lg" required>
                        <option selected>Pilih Jenis Barang</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="non-mamin">Non-mamin</option>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="kode">Kode Barang:</label>
                <div class="col-sm-10">
                  <input type="kode" class="form-control" id="kode" placeholder="Masukkan kode barang miniaml 10 digit (Numeric Only)" pattern="[0-9].{10,}" title="minimal 10 digit Numeric Only (Required)"
                   name="kode" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <br><br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
        </form>
    </div>
    </body>
</html>
