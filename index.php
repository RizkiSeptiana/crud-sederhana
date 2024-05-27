<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location:login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75 p-5 mb-2 bg-secondary text-white" style="height: 150%;">
    <h1>Aplikasi Perpustakaan</h1>
    <a href="./buku.php" ><button type="button" class="btn btn-primary my-4 me-2 border border-white" >Daftar Buku</button></a>
    <a href="./staff.php"><button type="button" class="btn btn-success my-4 border border-white">Lihat Daftar Staff</button></a>
    <br>
    <form action="logout_process.php" method="POST">
        <button type="submit" class="btn btn-danger border border-white">LOGOUT</button>
    </form>
    </div>
</body>
</html>