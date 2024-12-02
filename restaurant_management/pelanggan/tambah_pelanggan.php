<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH PELANGGAN</title>
</head>
<body>
    <h3>Tambah Data Pelanggan</h3>
    <form action="../pelanggan/proses_tambah.php" method ="POST">
        <table border="0">
       <tr>
        <td>Nama Pelanggan</td>
        <td><input type= "text" name="nama_pelanggan" required></td>
       </tr>
       <tr>
        <td>Kontak</td>
        <td><input type= "text" name="kontak" required></td>
       </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>