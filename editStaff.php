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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="body body bg-secondary w-75 m-auto" style="height :800px;">
      <div class="container mm-2 p-5 text-white">
          <h1>Form Edit Data Staff</h1>
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input value="<?php echo $staff["nama"]?>" type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                </div>
                <div class="mb-3">
                  <label for="telp" class="form-label">Telepon</label>
                  <input value="<?php echo $staff["telp"]?>" type="text" class="form-control" id="telp" aria-describedby="emailHelp" name="telp">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input value="<?php echo $staff["email"]?>" type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <button type="submit" name="submit" class="btn btn-primary my-2">SUBMIT</button>
        </form>
        <a href="./staff.php"><button type="submit" name="submit" class=" my-2 btn btn-info">Kembali Ke Halaman Staff</button></a>
        
      </div>
    </div>
    
</body>
</html>