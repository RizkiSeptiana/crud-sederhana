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
</head>
<body>
    <h1>Form Tambah Data Buku</h1>
    <form action="" method="POST">
        <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        </div>
        <br>
        <div>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        </div>
        <br>
        <div>
        <label for="unit">Unit</label>
        <input type="number" id="unit" name="unit">
        </div>
        <br>
        <button type="submit" name="submit">SUBMIT</button>

    </form>
    
</body>
</html>