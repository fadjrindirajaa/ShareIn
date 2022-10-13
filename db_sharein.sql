-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2021 pada 14.04
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sharein`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barangada`
--

CREATE TABLE `tb_barangada` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barangada`
--

INSERT INTO `tb_barangada` (`id`, `nama`, `nama_barang`, `kota_asal`, `no_hp`, `foto`) VALUES
(13, 'Fadjrin Diraja Muhammad', 'Beras', 'Purwakarta', '08123748213', 'beras.jpeg'),
(14, 'M Dzikri Alfarisyi', 'Minyak', 'Pandeglang', '0874214234', 'minyak.jpg'),
(15, 'Ayesha Aprilia Sundawati', 'Kompor', 'Bandung', '08472124473', 'kompor.jpg'),
(16, 'hsgsdfs', 'sdfsdfds', 'sdfsd', '6234234', 'Pas Foto Dzikri.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barangbutuh`
--

CREATE TABLE `tb_barangbutuh` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kota_asal` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barangbutuh`
--

INSERT INTO `tb_barangbutuh` (`id`, `nama`, `nama_barang`, `kota_asal`, `no_hp`, `foto`) VALUES
(6, 'M Dzikri Alfarisyi', 'Beras', 'Pandeglang', '08472124473', 'beras_1.jpeg'),
(7, 'Fadjrin Diraja Muhammad', 'Kompor', 'Purwakarta', '08282462412', 'kompor.jpg'),
(8, 'Ayesha Aprilia Sundawati', 'Minyak', 'Bandung', '085156934917', 'minyak.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barangada`
--
ALTER TABLE `tb_barangada`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barangbutuh`
--
ALTER TABLE `tb_barangbutuh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barangada`
--
ALTER TABLE `tb_barangada`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_barangbutuh`
--
ALTER TABLE `tb_barangbutuh`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
