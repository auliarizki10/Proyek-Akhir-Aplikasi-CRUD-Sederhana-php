<?php
session_start(); // Mulai sesi
// Menghubungkan file ini dengan file konfigurasi database
include "../koneksi.php"; 

// Mengecek apakah tombol 'simpan' telah ditekan
if(isset($_POST['simpan'])){
    /* Mengambil nilai dari form input
    dan menyimpannya ke dalam variabel */
    $nama_pelanggan = $_POST['nama_pelanggan']; // Menambahkan pengecekan
    $kontak = $_POST['kontak']; // Menambahkan pengecekan
    $id = $_POST['pelanggan_id'];

    // Menyusun query SQL untuk menambahkan data 
    // ke tabel 'table_pelanggan'
    $sql = "INSERT INTO table_pelanggan (nama_pelanggan, kontak)
            VALUES ('$nama_pelanggan', '$kontak')";

    // Menjalankan query dan menyimpan hasil dalam variabel $query
    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if($query) {
        $_SESSION['notifikasi'] = "Data pelanggan berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data pelanggan gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan error
    die("Akses ditolak...");
}
?>
