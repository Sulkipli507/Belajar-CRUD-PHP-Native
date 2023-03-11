<?php
    include '../database/koneksi.php';

    $id_pinjaman = $_GET['id_pinjaman'];
    $result = mysqli_query($koneksi, "DELETE from peminjaman Where id_pinjaman='$id_pinjaman'");
    
    header("Location: index.php");
?>