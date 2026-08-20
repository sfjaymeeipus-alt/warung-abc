<?php include 'cek_session.php'; ?>
<html>
    <head><title>Tambah Pelanggan - Warung ABC</title></head>
    <link rel="stylesheet" href="assets/css/style.css">
    <body>
        <h1>tambah Pelanggan</h1>
        <form action="proses_tambah_pelanggan.php" method="POST">
            <table>
                <tr><td>Nama Pelanggan</td><td>:</td>
                    <td><input type="text" name="nama_pelanggan" required></td></tr>
                <tr><td>No.HP</td><td>:</td>
                    <td><input type="text" name="no_hp" required></td></tr>
                <tr><td>Alamat</td><td>:</td>
                    <td><input type="text" name="alamat" required></required></td></tr>
                <tr><td colspan="3"><input type="submit" value="Simpan"></td></tr>
            </table>
        </form>
        <p><a href="data_pelanggan.php">Kembali</a></p>
    </body>
</html>