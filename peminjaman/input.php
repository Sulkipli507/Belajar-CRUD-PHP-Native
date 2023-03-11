<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../database/simpan.php" method="post">
        <label>NIM</label><br>
        <input type="text" name="nim">
        <br><br>

        <label>Nama Peminjam</label><br>
        <input type="text" name="nama_peminjam">
        <br><br>
        
        <label>Prodi</label><br>
        <input type="text" name="prodi">
        <br><br>

        <label>Nomor Hp</label><br>
        <input type="number" name="no_hp">
        <br><br>

        <label>Alamat</label><br>
        <input type="text" name="alamat">
        <br><br>

        <label>Acara</label><br>
        <input type="text" name="acara">
        <br><br>

        <label>Tanggal Awal</label><br>
        <input type="date" name="tgl_awal">
        <br><br>

        <label>Tanggal Akhir</label><br>
        <input type="date" name="tgl_akhir">
        <br><br>

        <label>Pemberi izin</label><br>
        <input type="text" name="pemberi_izin">
        <br>

        <input type="submit" value="simpan">
        <!-- <button type="submit">Simpan</button> -->
    </form>
</body>
</html>