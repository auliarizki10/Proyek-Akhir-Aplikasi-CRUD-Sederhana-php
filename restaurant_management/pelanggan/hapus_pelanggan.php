<?php
session_start(); // mulai sesi
include "../koneksi.php";

// periksa apakah ada ID yang dikrim melalui URL
if(isset($_GET['pelanggan_id'])){
    // ambil apakah ada yang dikirim melalui url
    $id = $_GET['pelanggan_id'];

    // buat query untuk menghapus data siswa brdasarkan id
    $sql ="DELETE FROM table_pelanggan WHERE pelanggan_id=$id";
    $query = mysqli_query($db, $sql);

    //simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query){
        $_SESSION['notifikasi'] = "Data pelanggan berhasil dihapus!";
    } else{
        $_SESSION['notifikasi'] = "Data pelanggan gagal dihapus!";
    }

    //alihkan ke halaman index.php
    header('Location: index.php');
}else {
    //jika akses langsung 1d, tampilkan pesan error
    die("Akses ditolak...");
}
?>