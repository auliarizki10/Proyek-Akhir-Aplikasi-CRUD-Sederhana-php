<?php
session_start();
include "../koneksi.php";

// Menyimpan perubahan jika tombol 'simpan' ditekan
if (isset($_POST['simpan'])) {
    $menu_id = $_POST['menu_id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    // Query untuk memperbarui data menu
    $sql = "UPDATE table_menu SET nama='$nama', kategori='$kategori', harga='$harga' WHERE menu_id='$menu_id'";
    $query = mysqli_query($db, $sql);

    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query) {
        $_SESSION['notifikasi'] = "Data menu berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data menu gagal diperbarui!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
    exit;
} else {
    die("Akses ditolak...");
}
?>
