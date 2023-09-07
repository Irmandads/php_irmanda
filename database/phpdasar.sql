-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2023 pada 07.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_mahasiswa`
--

CREATE TABLE `daftar_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nomor` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_mahasiswa`
--

INSERT INTO `daftar_mahasiswa` (`id`, `nama`, `nomor`, `email`, `jurusan`, `gambar`) VALUES
(2, 'Kim Namjoon', '2773662', 'namjoon@gmail.com', 'Ilmu Politik', 'dino2.jpeg'),
(3, 'Min Yoongi', '82929', 'yoongi93@gmail.com', 'kedoteran', 'Shooky.png'),
(5, 'Min Yoongi', '64376', 'yoongi93@gmail.com', 'Teknik Sipil', 'dino4.jpeg'),
(9, 'Irmanda Dwi', '736', 'idwista@gmail.com', 'Akutansi', '64f956a57013a.png'),
(10, 'Jimin', '839', 'yoongi93@gmail.com', 'Akutansi', '64f95729c99c0.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'yoongi', '$2y$10$IS.JUBLeT0ZebdnL9p6f0OY4KAFeirZTmaJxQDnTdDQmlYyZchzBO'),
(2, 'irmanda', '$2y$10$VNK08GxJgcLBeKHswyflKuhD1utXpGf/VSUPFEp7XJe1g2/rR9.cy'),
(3, 'admin', '$2y$10$adxp4k4HXyOYRq59uKzxWetEBp0Vbwsg9B8b4LEN6IamtQLCm.V.6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_mahasiswa`
--
ALTER TABLE `daftar_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_mahasiswa`
--
ALTER TABLE `daftar_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
