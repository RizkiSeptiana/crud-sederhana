<?php
  include_once ("./connect.php");

  if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db,"INSERT INTO staff VALUES(
        Null,
        '$nama',
        '$telp',
        '$email'
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
    <h1>Form Tambah Data Staff</h1>
    <form action="" method="POST">
        <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        </div>
        <br>
        <div>
        <label for="telp">Telepon</label>
        <input type="text" id="telp" name="telp">
        </div>
        <br>
        <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        </div>
        <br>
        <button type="submit" name="submit">SUBMIT</button>

    </form>
    
</body>
</html>