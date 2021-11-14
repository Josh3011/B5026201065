<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>
</h2>
  <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h3>Hasil dari perhitungan:</h3>
    <div class="row mt-3">
                <div class="col-5">
                    <label>Input anda :</label>
                </div>
                <div class="col-5">
                    <?php echo $_POST["angka"] ; ?>
                </div>
            </div>
            <div class="col-5">
                    <label>Hasil :</label>
                </div>
                <div class="col-5">
                <?php
                if (isset($_POST['submit'])){
                    $num = $_POST['angka'];
                    $pertama = 0;
                    $kedua = 1;
                    $i = 0;
                    echo "Deret fibonacci $num adalah :<br> " .$pertama."<br>" .$kedua;
                    while ($i<$num-2){
                        $setelah = $pertama + $kedua;
                        $pertama = $kedua;
                        $kedua = $setelah;
                        echo "<br>$setelah";
                        $i++;
                    }
                }
                   ?>
                </div>
            </div>

  </div>

</div>

</body>
</html>
