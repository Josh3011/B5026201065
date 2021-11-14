<html>

<head>
    <style>
    body {
        margin: 50px;
        background-color: rgb(224, 243, 236);
    }
    </style>

</head>

<body>
    <div class="container">
        <form action="hasil" method="POST">
            @csrf
            <h1>Mencari Fibonacci</h1>
            Masukkan Nilai : <input type="number" name="angka" required>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>

</html>
