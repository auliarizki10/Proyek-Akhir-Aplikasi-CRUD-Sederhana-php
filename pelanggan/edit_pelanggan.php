<?php 
// termasuk file konfigurasi
session_start();
include "../koneksi.php";

// Mengambil id siswa dari parameter URL
$id = $_GET['pelanggan_id'];

// Mengambil data siswa dari database berdasarkan id
$query = $db->query("SELECT * FROM table_pelanggan WHERE pelanggan_id = '$id'");
$pelanggan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
</head>
<body>
  <h3>Edit Data Pelanggan</h3>  
   <form action="proses_edit.php" method="POST">
    <!-- Menyimpan ID untuk proses selanjutnya -->
    <input type="hidden" name="pelanggan_id" value="<?php echo $pelanggan['pelanggan_id']; ?>">
    <table border="0">
        <tr>
            <td>Nama pelanggan</td>
            <td>
                <!-- Tambahkan value dengan data dari database -->
                <input type="text" name="nama_pelanggan" value="<?php echo $pelanggan['nama_pelanggan']; ?>" required>
            </td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td>
                <!-- Tambahkan value dengan data dari database -->
                <input type="text" name="kontak" value="<?php echo $pelanggan['kontak']; ?>">
            </td>
        </tr>
    </table>
    <button type="submit" name="simpan">Simpan</button>
</form>
