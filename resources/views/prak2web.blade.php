<html>
  <head>
    <title>praktikum3registrationform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
        $("form").submit(function(){
        alert("Kirim Form");
        });
  });
  </script>
  <script>
    function myFunction() {
      // Get the value of the input field with id="numb"
      let x = document.getElementById("numb").value;
      // If x is Not a Number or less than one or greater than 10
      let text;
      if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
      } else {
        text = "Input OK";
      }
      document.getElementById("demo").innerHTML = text;
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
  <h2><center><b>Registration Form</b></center></h2>
  <form class="form-horizontal needs-validation" action="https://www.google.com/?hl=id">
    <div class="form-group">
      <label class="control-label col-sm-2" for="UserId">User ID:</label>
      <div class="col-sm-10">
        <input type="UserId" class="form-control" id="UserId" placeholder="Masukkan User ID (5-12 karakter)" pattern=".{5,12}" title="5-12 karakter (Required)" name="UserId" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Masukkan password (7-12 karakter)" pattern=".{7,12}" title="7-12 karakter (Required)" name="pwd" required>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Nama">Nama:</label>
        <div class="col-sm-10">
          <input type="Name" class="form-control" id="Nama" placeholder="Masukkan Nama (Alphabet only)" pattern="[A-Za-z].{1,}" title="Alphabet only (Required)"
          name="Nama" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="adr">Alamat:</label>
        <div class="col-sm-10">
          <input type="Address" class="form-control" id="adr" placeholder="Masukkan Alamat" name="adr">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="ctr">Country:</label>
        <div class="col-sm-10">
            <select name="country" class="custom-select mb-3">
                <option selected>Please select a country</option>
                <option value="Amerika">Amerika</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Brunei">Brunei</option>
                <option value="Indonesia">Indonesia</option>
                <option value="India">India</option>
                <option value="Malaysia">Malaysia</option>
              </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="zip">ZIP Code:</label>
        <div class="col-sm-10">
          <input type="ZipCode" class="form-control" id="zip" placeholder="Masukkan Zip Code (Numeric Only)" pattern="[0-9].{1,}" title="Numeric Only (Required)"
           name="zip" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Masukkan Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          title="Must be a valid email (Required)" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="sex">Sex:</label>
        <div class="col-sm-10 custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="customRadio1" name="example1" required>
            <label class="custom-control-label" for="customRadio1">Male</label>
            <input type="radio" class="custom-control-input" id="customRadio1" name="example1" required>
            <label class="custom-control-label" for="customRadio1">Female</label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="lng">Language:</label>
        <div class="col-sm-10 checkbox-group ">
          <input type="checkbox" id="bahasa-1" name="bahasa" value="Language" required/>
          <label for="bahasa1"> English</label>
          <input type="checkbox" id="bahasa-2" name="bahasa" value="Language" required/>
          <label for="bahasa2"> Non-English</label>
        </div>
    </div>
    <div>
        <label class="control-label col-sm-2" for="about">About:</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="about" placeholder="Masukkan Deskripsi singkat mengenai dirimu"></textarea>

        </div>
    </div>

    <br>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>


  </form>
</div>

</body>

</html>
