<?php
  include_once ("./connect.php");

  if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db,"INSERT INTO buku VALUES(
        Null,
        '$nama',
        '$isbn',
        '$unit'
    )");
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="body body bg-secondary w-75 m-auto" style="height :800px;">
      <div class="container mm-2 p-5 text-white">
        <h1>Form Tambah Data Buku</h1>
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                </div>
                <div class="mb-3">
                  <label for="isbn" class="form-label">ISBN</label>
                  <input type="text" class="form-control" id="isbn" aria-describedby="emailHelp" name="isbn">
                </div>
                <div class="mb-3">
                  <label for="unit" class="form-label">Unit</label>
                  <input type="number" class="form-control" id="unit" aria-describedby="emailHelp" name="unit">
                </div>
                <button type="submit" name="submit" class="btn btn-primary my-2">SUBMIT</button>
        </form>
        <a href="./buku.php"><button type="submit" name="submit" class=" my-2 btn btn-info">Kembali Ke Halaman Buku</button></a>
        
      </div>
    </div>

</body>
</html>