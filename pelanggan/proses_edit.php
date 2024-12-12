<?php
session_start(); // mulai sesi
include "../koneksi.php";

// periksa apkaah tombol "simpan" pada form edit ditekan
if(isset($_POST['simpan'])) {
    // ambil data dari form
    $id= $_POST['pelanggan_id'];
    $nama_pelanggan= $_POST['nama_pelanggan'];
    $kontak= $_POST['kontak'];


  // buat query untuk memperbaruhu data siswa
    $sql = "UPDATE table_pelanggan SET
    nama_pelanggan='$nama_pelanggan',
    kontak='$kontak'
    WHERE pelanggan_id =$id";

// 
$query = mysqli_query($db,$sql);
 
// simpan pesan notifikasi dalam sesi berdesarkan hasil query
if ($query){
    $_SESSION['notifikasi'] = "Data berhasil diperbarui!";
}else{
    $_SESSION['notifikasi'] = "Data gagal diperbaruhi!";
}
// Alihkan ke halaman index.php
header('Location: index.php');

// jika akses langsung tampa form, tampilkan pesan error
}else{
// jika akses tanpa form, tampilkan pesan error
die("Akses ditolak...");
}
?>