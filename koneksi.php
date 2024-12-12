<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username database Anda
$password = "";      // Ganti dengan password database Anda
$dbname = "restaurant_management";

// Membuat koneksi
$db = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}
