<?php
session_start();
include "../koneksi.php";

// Periksa apakah ada ID yang dikirim melalui URL
if (isset($_GET['menu_id'])) {
    $id = $_GET['menu_id'];

    // Query untuk menghapus data menu berdasarkan menu_id
    $sql = "DELETE FROM table_menu WHERE menu_id = '$id'";
    $query = mysqli_query($db, $sql);

    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data menu berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data menu gagal dihapus!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
    exit;
} else {
    die("Akses ditolak...");
}
?>
