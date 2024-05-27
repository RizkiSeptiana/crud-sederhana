<?php
  include_once ("./connect.php");

  $query = mysqli_query($db,"SELECT * FROM buku");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="body bg-secondary w-75 m-auto" style="height :800px;">
    <div class="container mm-2 p-5 text-white">
        <h1 class="mb-4">Daftar Buku</h1>
            <table class="table table-striped table-info table-hover table-bordered text-center  ">
            <thead>     
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">ISBN</th>
                <th scope="col">Unit</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php

            foreach ($query as $buku){ ?>
            <tr>
                <td class="text-start"><?php echo $buku["nama"]; ?></td>
                <td><?php echo $buku["isbn"]; ?></td>
                <td><?php echo $buku["unit"]; ?></td>
                <td>
                    <a href=<?php echo "editBuku.php?id=". $buku["id"]?>><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href=<?php echo "deleteBuku.php?id=". $buku["id"]?>><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php }?>
            </tbody>
            </table>

        <a href="./tambahBuku.php"><button type="button" class="btn btn-info my-1 me-2">Tambah Data Buku </button></a>
        <a href="./index.php"><button type="button" class="btn btn-info my-1">Kembali ke Halaman Utama</button></a>

    </div>
    </div>
</body>
</html>