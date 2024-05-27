<?php
  include_once ("./connect.php");

  $query = mysqli_query($db,"SELECT * FROM staff");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="body bg-secondary w-75 m-auto" style="height :800px;">
    <div class="container mm-2 p-5 text-white">
        <h1 class="mb-4">Daftar Staff</h1>
            <table class="table table-striped table-info table-hover table-bordered text-center  ">
            <thead class=>     
            <tr>
                <td>Nama</td>
                <td>Telepon</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            <?php

                foreach ($query as $staff){ ?>
                <tr>
                    <td class="text-start"><?php echo $staff["nama"]; ?></td>
                    <td><?php echo $staff["telp"]; ?></td>
                    <td><?php echo $staff["email"]; ?></td>
                    <td>
                        <a href=<?php echo "editStaff.php?id=". $staff["id"]?>><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href=<?php echo "deleteStaff.php?id=". $staff["id"]?>><button type="button" class="btn btn-danger">Hapus</button></a>
                        
                    </td>
                </tr>
            <?php }?>
            </table>

        <a href="./tambahStaff.php"><button type="button" class="btn btn-info my-1 me-2">Tambah Data Staff </button></a>
        <a href="./index.php"><button type="button" class="btn btn-info my-1">Kembali ke Halaman Utama</button></a>

    </div>
    </div>
    
</body>
</html>