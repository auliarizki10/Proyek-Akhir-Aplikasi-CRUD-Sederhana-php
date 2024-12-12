-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2024 pada 06.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_management`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_menu`
--

CREATE TABLE `table_menu` (
  `menu_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(8) DEFAULT NULL,
  `kategori` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `table_menu`
--

INSERT INTO `table_menu` (`menu_id`, `nama`, `harga`, `kategori`) VALUES
(14, 'ice cream', 5000, 'Dessert'),
(15, 'mie goreng', 10000, 'Makanan'),
(19, 'pisang goreng', 5000, 'Makanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pelanggan`
--

CREATE TABLE `table_pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `nama_pelanggan` varchar(64) DEFAULT NULL,
  `kontak` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `table_pelanggan`
--

INSERT INTO `table_pelanggan` (`pelanggan_id`, `nama_pelanggan`, `kontak`) VALUES
(6, 'intan aini', '738163');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_menu`
--
ALTER TABLE `table_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indeks untuk tabel `table_pelanggan`
--
ALTER TABLE `table_pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_menu`
--
ALTER TABLE `table_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `table_pelanggan`
--
ALTER TABLE `table_pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
