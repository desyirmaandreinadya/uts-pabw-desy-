<?php
    include 'connect.php';

    $id_donasi= $_GET['id_donasi'];

    $sql = 'DELETE FROM donasi WHERE id_donasi= "'.$id_donasi.'"';

    $result = mysqli_query($conn,  $sql);

    if ($result) {
        header('Location: tables.php');
    } else {
        echo 'Delete Failed';
    }
?>