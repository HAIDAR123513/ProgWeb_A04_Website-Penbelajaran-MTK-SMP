-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 07.59
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id` int(3) NOT NULL,
  `kritik` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kritiksaran`
--

INSERT INTO `kritiksaran` (`id`, `kritik`, `saran`) VALUES
(1, 'Tolong tambahkan modul lagi', 'Sudah bagus, hanya saja modul kurang lengkap'),
(2, 'Harga untuk siswa SMP termasuk mahal', 'Mohon turunkan harga '),
(3, 'Sangat menyenangkan sekali belajar bersama E-Math', 'Tingkatkan terus fitur-fitur E-Math!'),
(4, 'Saya dan teman saya mudah memahami di E-Math karena modulnya sangat seru untuk dipelajari', 'Sudah bagus, semangat E-Math!'),
(5, 'Adek saya mudah memahami modul-modul E-Math', 'Terima kasih E-Math, terus kembangkan fitur-fitur menarik ya!'),
(6, 'Sudah bagus, saya senang belajar di E-Math', 'E-Math tolong tambahkan fitur soal-soal latihan ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id`, `judul`, `kelas`) VALUES
(3, 'Aljabar', ' SMP-7'),
(4, 'Aritmatika', ' SMP-7'),
(5, 'Sempoa', ' SMP-8'),
(6, 'Integral', ' SMP-9'),
(7, 'Bangun datar', ' SMP-8'),
(8, 'Vektor', ' SMP-8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomortelegram` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelajar`
--

INSERT INTO `pelajar` (`id`, `username`, `password`, `nomortelegram`) VALUES
(44, 'pelajar', '$2y$10$XFKNeYhfacboN0myYMYg3eS/Bykbcq2KSceGGRZKxFyRwEqIyiq0C', '089536630000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nomortelegram` varchar(15) NOT NULL,
  `buktitransfer` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `username`, `password`, `nomortelegram`, `buktitransfer`) VALUES
(25, 'pendaftar', '$2y$10$IdK84UK8W3CwgTGhG30O8O3tTKnlkeiLaiwAjTMOEV./1h/9Y.k5y', '087617265123', 'Screenshot (941).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `username`, `pesan`) VALUES
(4, 'pendaftar', 'admin, saya belum dikonfirmasi padahal sudah tranasfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiladmin`
--

CREATE TABLE `profiladmin` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgllahir` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `pendidikanterakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profiladmin`
--

INSERT INTO `profiladmin` (`id`, `username`, `password`, `tgllahir`, `jeniskelamin`, `pendidikanterakhir`) VALUES
(1, 'admin', '$2y$10$XFKNeYhfacboN0myYMYg3eS/Bykbcq2KSceGGRZKxFyRwEqIyiq0C', 'Sidoarjo, 09 Juli 2001', 'Perempuan', 'Sekolah Menengah Umum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiladmin`
--
ALTER TABLE `profiladmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profiladmin`
--
ALTER TABLE `profiladmin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
