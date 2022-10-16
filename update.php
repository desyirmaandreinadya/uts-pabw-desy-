<?php
include 'connect.php';

$id_donasi = @$_GET['id_donasi'];
//var_dump($id_donasi);
$sqlGet = "SELECT * FROM `donasi` WHERE id_donasi='$id_donasi'";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);
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
        <a href="tables.php">Back</a>
        <form action="update.php" method="post">
           
            <label for="id_donasi">Nama</label>
            <input type="text" id="id_donasi" name="id_donasi" value="<?php echo "$data[id_donasi]";  ?>" class="form-control" required> <br>

            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo "$data[tanggal]";  ?>" class="form-control" required> <br>

            <label for="nama_donatur">Nama Donatur</label>
            <input type="text" id="nama_donatur" name="nama_donatur" value="<?php echo "$data[nama_donatur]";  ?>" class="form-control" required> <br>

            <label for="nama_barang">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" value="<?php echo "$data[nama_barang]";  ?>" class="form-control" required> <br>

            <input class="btn btn-success mt-3" type="submit" name="tambah" value="Submit">

        </form>
    </div>

    <?php

    if (isset($_POST['tambah'])) {
        $id_donasi = $_POST['id_donasi'];
        $tanggal = $_POST['tanggal'];
        $nama_donatur = $_POST['nama_donatur'];
        $nama_barang = $_POST['nama_barang'];

        $sqlUpdate = "UPDATE donasi SET id_donasi='$id_donasi', tanggal='$tanggal', nama_donatur='$nama_donatur', nama_barang='$nama_barang' WHERE id_donasi='$id_donasi'";

        $queryUpdate = mysqli_query($conn, $sqlUpdate);

        header("location: tables.php");
    }
    ?>

</body>

</html>