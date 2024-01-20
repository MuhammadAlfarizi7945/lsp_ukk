-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2024 pada 04.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbapotek_alfarizi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_distributor`
--

CREATE TABLE `tbl_distributor` (
  `id_dist` int(11) NOT NULL,
  `nama_dist` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_distributor`
--

INSERT INTO `tbl_distributor` (`id_dist`, `nama_dist`, `alamat`, `no_telp`) VALUES
(2, 'Kimia Farnma', 'jambi', '074182712839'),
(3, 'Kimia Farnma', 'jambi', '074182712839'),
(4, 'Kimia Farma', 'Jalan Gelatik Pasir Putih', '074182712839'),
(5, 'Apotik Sehat Sejahtera', 'Kota Jambi', '089515018098');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Obat Batuk'),
(2, 'Promaag');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode_obat` varchar(255) NOT NULL,
  `id_dist` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `masa_exfire` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode_obat`, `id_dist`, `id_kat`, `nama_obat`, `masa_exfire`, `harga`, `jumlah`) VALUES
('BRG001', 1, 1, 'Obat Batuk', '2024', '120000', '12 pc'),
('2', 2, 2, 'Obat Maag', '2024', '20000', '150 butir'),
('OBAT001', 5, 1, 'OBAT001', '2029', '150000', '12 butir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  ADD PRIMARY KEY (`id_dist`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  MODIFY `id_dist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
