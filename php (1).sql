-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 04.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab`
--

CREATE TABLE `lab` (
  `ID` int(11) NOT NULL,
  `PEMESAN` varchar(50) NOT NULL,
  `PRODI` varchar(50) NOT NULL,
  `RUANG` char(6) NOT NULL,
  `HARI` varchar(8) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM MULAI` time(6) NOT NULL,
  `JAM AKHIR` time(6) NOT NULL,
  `KETERANGAN` varchar(200) NOT NULL,
  `PENANGGUNG JAWAB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lab`
--

INSERT INTO `lab` (`ID`, `PEMESAN`, `PRODI`, `RUANG`, `HARI`, `TANGGAL`, `JAM MULAI`, `JAM AKHIR`, `KETERANGAN`, `PENANGGUNG JAWAB`) VALUES
(6, 'afriza', 'matematika', 'Lab 2', 'Selasa', '2023-10-28', '13:44:00.000000', '14:44:00.000000', 'minjam duluu', 'adifa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `passwords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `logins`
--

INSERT INTO `logins` (`id`, `username`, `passwords`) VALUES
(1, 'dimas', '$2y$10$CtzTkM1VNNjJ37Ksu77b3enIDGT98WszBZbFjPNLL7/djHZL/fKVC'),
(2, 'papok', '$2y$10$Phy7RArYXIHaCWdvdCZKGe1VQibY5B3cfSFidYKmkqd1Uf5fj31Yy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lab`
--
ALTER TABLE `lab`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
