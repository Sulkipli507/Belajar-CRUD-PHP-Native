<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Data mahasiswa</h1>
    <a href="index.php">Beranda</a>
    <br>
    <a href="input.php">+ tambah mahasiswa</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama Peminjam</th>
            <th>Prodi</th>
            <th>Nomor Handphone</th>
            <th>Alamat</th>
            <th>Acara</th>
            <th>Tanggal Awal</th>
            <th>Tanggal Akhir</th>
            <th>Status</th>
            <th>Pemberi Izin</th>
            <th>ACTION</th>
        </tr>

    <?php 
        include '../database/koneksi.php';
        $query = "SELECT * FROM peminjaman";
        $result = mysqli_query($koneksi, $query);
        if(mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $data["nim"] ?></td>
                    <td><?php echo $data["nama_peminjam"] ?></td>
                    <td><?php echo $data["prodi"] ?></td>
                    <td><?php echo $data["no_hp"] ?></td>
                    <td><?php echo $data["alamat"] ?></td>
                    <td><?php echo $data["acara"] ?></td>
                    <td><?php echo $data["tgl_awal"] ?></td>
                    <td><?php echo $data["tgl_akhir"] ?></td>
                    <td><?php echo $data["status"] ?></td>
                    <td><?php echo $data["pemberi_izin"] ?></td>
                    <td>
                        <a href="delete.php?id_pinjaman=<?php echo $data["id_pinjaman"] ?>">Hapus</a>
                        <a href="edit.php?id_pinjaman=<?php echo $data["id_pinjaman"] ?>">Edit</a>
                    </td>
                </tr>
                <?php }
            } else { ?>
                <tr>
                    <td>Tidak ada data</td>
                </tr>
            <?php
            } 
            ?>
    </table>
</body>
</html>