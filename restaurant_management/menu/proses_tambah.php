<?php
session_start(); // Mulai sesi
// Menghubungkan file ini dengan file konfigurasi database
include "../koneksi.php";

// Mengecek apakah tombol 'simpan' telah ditekan
if (isset($_POST['simpan'])) {
    /* Mengambil nilai dari form input dan menyimpannya ke dalam variabel */
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    // Menyusun query SQL untuk menambahkan data ke tabel 'table_menu'
    $sql = "INSERT INTO table_menu (nama, kategori, harga) VALUES ('$nama', '$kategori', '$harga')";

    // Menjalankan query dan menyimpan hasil dalam variabel $query
    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if ($query) {
        $_SESSION['notifikasi'] = "Data menu berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data menu gagal ditambahkan: " . mysqli_error($db); // Menampilkan error jika ada
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
    exit;
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>
