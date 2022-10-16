<?php
    include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Digihelp </title>
</head>
<body>
 <div class="w-50 mx-auto border p-3 mt-5">
    <a href="tables.php">Kembali</a>
    <form action="add.php" method="post">
    <label for = "id_donasi">Id Donasi</label>
        <input type="text" id="id_donasi" name="id_donasi" class="form-control" required> <br>

        <label for = "tanggal">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" required> <br>

        <label for = "nama_donatur">Nama Donatur</label>
        <input type="text" id="nama_donatur" name="nama_donatur" class="form-control" required> <br>

        <label for = "nama_barang">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang" class="form-control" required> <br>

        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Submit">

    </form>
 </div>

 <?php

    if(isset($_POST['tambah'])) {
    $id_donasi = $_POST['id_donasi'];
    $tanggal = $_POST['tanggal'];
    $nama_donatur = $_POST['nama_donatur'];
    $nama_barang = $_POST['nama_barang'];
    

    $sqlInsert = "INSERT INTO donasi (id_donasi, tanggal, nama_donatur, nama_barang) VALUES ('$id_donasi', '$tanggal', '$nama_donatur', '$nama_barang')";

    mysqli_query($conn, $sqlInsert);

    header("location: tables.php");

    }
 ?>

</body>
</html>