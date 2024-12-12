<?php
// menghubungkan file koneksi dengan index
include "../koneksi.php" ;
session_start(); // Mulai sesi
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
  <style>
        /* membuat styling pada table */
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding:10px;
}
  </style>
</head>
<body>
<ul>
        <li><a href="../pelanggan/index.php">data pelanggan</a></li>
        <li><a href="../menu/index.php">data menu</a></li>
    </ul>
    <h2>Data pelanggan</h2>
    <!-- tampilkan notifikasi jika ada -->
     <?php if (isset($_SESSION['notifikasi'])): ?>
   <p><?php echo $_SESSION['notifikasi'];?></p>
   <!--Hapus Notifikasi setelah ditampilkan-->
<?php unset($_SESSION ['notifikasi']); ?> 
<?php endif; ?>
<table>
    <thead>
        <tr align="center">
            <th>#</th>
            <th>Nama Pelanggan</th>
            <th>Kontak</th>
            <th><a href="tambah_pelanggan.php">Tambah Data</a></th>
        </tr>
    </thead>
<tbody>
<?php
$ni = 1; // membuat penomoran data dari 1
//membuat variable untuk menjalankan query SQL
$query = $db ->query (query:"SELECT * FROM table_pelanggan");
$no = 1;
/*perulangan while akan terus berjalan (manampilkan data)
selama kondisi $query bernilai true (adanya data pada
table tb_siswa)*/
while($pelanggan = $query->fetch_assoc()){
/* fungsi fetch_assoc digunakan untuk mengambil
data perulangan dalam bentuk array */
?> <!-- kode php ditutup untuk menyisipkan kode html
yang akan di looping menggunakan while loop -->
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $pelanggan['nama_pelanggan'] ?></td>
    <td><?php echo $pelanggan['kontak'] ?></td>
    <td align="center">

        <!-- url ke halaman edit data dengan menggunakan
         parameter id pada kolom table dan alert confirmasi hapus data -->
         <a href="edit_pelanggan.php?pelanggan_id=<?php echo $pelanggan['pelanggan_id'] ?>">Edit</a>
         
         <!-- url untuk menghapus data dengan menggunakan parameter id
          pada kolom table dan alert confirmasi hapus data -->
        <a onclick="return confirm ('anda yakin ingin menghapus data?') "
        href="hapus_pelanggan.php?pelanggan_id=<?php echo $pelanggan['pelanggan_id'] ?>">Hapus</a>        
    </td>
</tr>
<?php
} /* mengakhiri proses perulangan while yang dimulai pada bari 50 */
?>
</tbody>
</table>
<!-- menghitung jumlah baris yang ada pada table (calon_siswa)-->
 <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>