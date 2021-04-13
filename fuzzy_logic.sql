-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2021 pada 16.13
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzy_logic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rule`
--

CREATE TABLE `tbl_rule` (
  `id_rule` varchar(11) NOT NULL,
  `param1_name` varchar(20) NOT NULL,
  `param1_value` varchar(20) NOT NULL,
  `param2_name` varchar(20) NOT NULL,
  `param2_value` varchar(20) NOT NULL,
  `param3_name` varchar(20) NOT NULL,
  `output` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rule`
--

INSERT INTO `tbl_rule` (`id_rule`, `param1_name`, `param1_value`, `param2_name`, `param2_value`, `param3_name`, `output`) VALUES
('R1', 'Permintaan', 'TURUN', 'Persediaan Barang', 'BANYAK', 'Produksi', 'BERKURANG'),
('R2', 'Permintaan', 'TURUN', 'Persediaan Barang', 'SEDIKIT', 'Produksi', 'BERKURANG'),
('R3', 'Permintaan', 'NAIK', 'Persediaan Barang', 'BANYAK', 'Produksi', 'BERTAMBAH'),
('R4', 'Permintaan', 'NAIK', 'Persediaan Barang', 'SEDIKIT', 'Produksi', 'BERTAMBAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_variabel`
--

CREATE TABLE `tbl_variabel` (
  `nama_variabel` varchar(20) NOT NULL,
  `tipe_variabel` varchar(20) NOT NULL,
  `bbv` varchar(40) NOT NULL,
  `bbn` int(40) NOT NULL,
  `bav` varchar(40) NOT NULL,
  `ban` int(40) NOT NULL,
  `satuan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_variabel`
--

INSERT INTO `tbl_variabel` (`nama_variabel`, `tipe_variabel`, `bbv`, `bbn`, `bav`, `ban`, `satuan`) VALUES
('Permintaan', 'Input', 'Turun', 1000, 'Naik', 5000, 'Kemasan / hari'),
('Persediaan', 'Input', 'Sedikit', 100, 'Banyak', 600, 'Kemasan / hari'),
('Produksi', 'Output', 'Berkurang', 2000, 'Bertambah', 7000, 'Kemasan / hari');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_rule`
--
ALTER TABLE `tbl_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indeks untuk tabel `tbl_variabel`
--
ALTER TABLE `tbl_variabel`
  ADD PRIMARY KEY (`nama_variabel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
