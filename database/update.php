<?php 

    include 'koneksi.php';

    $id_pinjaman = $_POST['id_pinjaman'];
    $nim = $_POST['nim'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $prodi = $_POST['prodi'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $acara = $_POST['acara'];
    $tgl_awal = $_POST['tgl_awal'];
    $tgl_akhir = $_POST['tgl_akhir'];
    $status = $_POST['status'];
    $pemberi_izin = $_POST['pemberi_pinjaman'];
            
    $sql = " UPDATE peminjaman SET nim='$nim',nama_peminjam='$nama_peminjam',prodi='$prodi', no_hp='$no_hp', alamat='$alamat', acara='$acara', tgl_awal='$tgl_awal', tgl_akhir='$tgl_akhir', status='$status', pemberi_pinjaman='$pemberi_izin' WHERE id_pinjaman='$id_pinjaman' ";
    if (mysqli_query($koneksi, $sql)){
        // echo "Data berhasil diupdate";
        header("Location: ../peminjaman/index.php");
    }else {
        echo "Error : ". $sql. "<br>". mysqli_error($koneksi);
    }
    
?>