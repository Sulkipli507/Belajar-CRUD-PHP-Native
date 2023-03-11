<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include '../database/koneksi.php';

        $id_pinjaman = $_GET['id_pinjaman'];
        $query = "SELECT * FROM peminjaman WHERE id_pinjaman = '$id_pinjaman'";
        $result = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
        }

    ?>

    <form action="../database/update.php" method="post">
        <input type="text" name="id_pinjaman" value="<?php echo ($data['id_pinjaman']); ?>" hidden="True">

        <label>NIM</label><br>
        <input type="text" name="nim" value="<?php echo ($data['nim']); ?>">
        <br><br>

        <label>Nama Peminjam</label><br>
        <input type="text" name="nama_peminjam" value="<?php echo ($data['nama_peminjam']); ?>">
        <br><br>
        
        <label>Prodi</label><br>
        <input type="text" name="prodi" value="<?php echo ($data['prodi']); ?>">
        <br><br>

        <label>Nomor Hp</label><br>
        <input type="number" name="no_hp" value="<?php echo ($data['no_hp']); ?>">
        <br><br>

        <label>Alamat</label><br>
        <input type="text" name="alamat" value="<?php echo ($data['alamat']); ?>">
        <br><br>

        <label>Acara</label><br>
        <input type="text" name="acara" value="<?php echo ($data['acara']); ?>">
        <br><br>

        <label>Tanggal Awal</label><br>
        <input type="date" name="tgl_awal" value="<?php echo ($data['tgl_awal']); ?>">
        <br><br>

        <label>Tanggal Akhir</label><br>
        <input type="date" name="tgl_akhir" value="<?php echo ($data['tgl_akhir']); ?>">
        <br><br>

        <label for="status">Status</label><br>
        <select name="status">
            <option> <?php echo ($data['status']); ?></option>
            <option value="Disetujui">Belum disetujui</option>
            <option value="Tidak disetujui">Tidak disetujui</option>
            <option value="Disetujui">Disetujui</option>
        </select>
        <br>
        <br>

        <label>Pemberi izin</label><br>
        <input type="text" name="pemberi_pinjaman" value="<?php echo ($data['pemberi_izin']); ?>">


        <!-- <input type="submit" value="simpan"
        > -->
        <button type="submit">Simpan</button>

    </form>
</body>
</html>

