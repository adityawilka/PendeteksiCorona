-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2021 pada 05.49
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `covid_19`
--

CREATE TABLE `covid_19` (
  `kode` int(60) NOT NULL,
  `kelelahan` varchar(20) NOT NULL,
  `suhu` varchar(20) NOT NULL,
  `meler` varchar(20) NOT NULL,
  `bersin` varchar(20) NOT NULL,
  `tenggorokan` varchar(20) NOT NULL,
  `otot` varchar(20) NOT NULL,
  `nafas` varchar(20) NOT NULL,
  `dahak` varchar(20) NOT NULL,
  `muntah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `covid_19`
--

INSERT INTO `covid_19` (`kode`, `kelelahan`, `suhu`, `meler`, `bersin`, `tenggorokan`, `otot`, `nafas`, `dahak`, `muntah`) VALUES
(1, 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'tidak', 'ya', 'ya'),
(16, 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'tidak', 'tidak'),
(17, 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'tidak', 'ya', 'ya'),
(18, 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'tidak', 'ya', 'ya'),
(19, 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'tidak', 'ya', 'ya'),
(20, 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'tidak', 'tidak'),
(21, 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(22, 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(23, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
(24, 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(25, 'ya', 'ya', '', 'ya', '', '', 'ya', 'ya', ''),
(26, 'ya', 'ya', '', 'ya', '', '', '', '', ''),
(27, 'ya', 'ya', '', 'ya', '', '', 'ya', 'ya', ''),
(28, 'ya', 'ya', 'tidak', 'ya', 'tidak', 'tidak', 'ya', 'tidak', 'ya'),
(29, 'ya', 'tidak', 'ya', 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'ya'),
(30, 'ya', 'tidak', 'ya', 'tidak', 'ya', 'ya', 'tidak', 'tidak', 'ya'),
(31, 'ya', 'tidak', 'ya', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya'),
(32, 'ya', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
(33, 'ya', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'ya'),
(34, 'tidak', 'ya', 'ya', 'ya', 'tidak', 'ya', 'ya', 'tidak', 'tidak'),
(35, 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(36, 'ya', 'ya', 'tidak', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'tidak'),
(37, 'ya', 'ya', 'tidak', 'ya', 'tidak', 'tidak', 'ya', 'ya', 'tidak'),
(38, 'ya', 'ya', 'ya', 'ya', 'tidak', 'ya', 'ya', 'tidak', 'tidak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `covid_19`
--
ALTER TABLE `covid_19`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `kode` (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `covid_19`
--
ALTER TABLE `covid_19`
  MODIFY `kode` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
