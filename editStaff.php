<?php
  include_once ("./connect.php");

  $id = $_GET["id"];

  $query_get_data = mysqli_query($db,"SELECT * FROM staff WHERE id=$id");
  $staff = mysqli_fetch_assoc($query_get_data);

  if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db,"UPDATE staff SET nama='$nama', telp='$telp',email='$email' WHERE id=$id");
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
</head>
<body>
    <h1>Form Edit Data Buku</h1>
    <form action="" method="POST">
        <div>
        <label for="nama">Nama</label>
        <input value="<?php echo $staff["nama"]?>" type="text" id="nama" name="nama">
        </div>
        <br>
        <div>
        <label for="telp">Telepon</label>
        <input value="<?php echo $staff["telp"]?>" type="text" id="telp" name="telp">
        </div>
        <br>
        <div>
        <label for="email">Email</label>
        <input value="<?php echo $staff["email"]?>"  type="email" id="email" name="email">
        </div>
        <br>
        <button type="submit" name="submit">SUBMIT</button>

    </form>

    <br>
    <a href="./staff.php">Kembali Ke Halaman Staff</a>
    
</body>
</html>