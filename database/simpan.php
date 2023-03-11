<?php 

    include 'koneksi.php';

    $nim = $_POST['nim'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $prodi = $_POST['prodi'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $acara = $_POST['acara'];
    $tgl_awal = $_POST['tgl_awal'];
    $tgl_akhir = $_POST['tgl_akhir'];
    $pemberi_izin = $_POST['pemberi_izin'];

    $sql = "INSERT INTO peminjaman (nim, nama_peminjam, prodi, no_hp, alamat, acara, tgl_awal, tgl_akhir, pemberi_izin) VALUES ('$nim','$nama_peminjam', '$prodi', '$no_hp', '$alamat', '$acara', '$tgl_awal', '$tgl_akhir', '$pemberi_izin')";

    if (mysqli_query($koneksi, $sql)){
        echo "Data berhasil disimpan";
        echo "<br>";
        echo "<a href = '../peminjaman/index.php'>Beranda</a>";
        echo "<br>";
        echo "<br>";
        echo "<a href = '../peminjaman/input.php'>Isi data lagi</a>";
        
    } else {
        echo "Error : ". $sql. "<br>". mysqli_error($koneksi);
    }
?>