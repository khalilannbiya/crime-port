-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2022 pada 11.27
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `ttl` int(11) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kerja` varchar(50) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(64) NOT NULL,
  `noHp` varchar(16) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `time` int(11) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jk` enum('Pencurian Dengan Pemberatan (curat)','Pencurian Dengan Kekerasan (Curas)','Penganiayaan Berat (Anirat)','Pembunuhan','Pencurian Kendaraan Bermotor (Curanmor)','Judi','Pemerasan/Ancaman','Pemerkosaan','Narkotika','Kenakalan Remaja','Lainnya') NOT NULL,
  `nopti` varchar(128) NOT NULL,
  `nkor` varchar(128) NOT NULL,
  `kronologi` varchar(500) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `ttl`, `agama`, `kerja`, `negara`, `address`, `email`, `noHp`, `nik`, `time`, `alamat`, `jk`, `nopti`, `nkor`, `kronologi`, `date_created`) VALUES
(39, 'Khalil Annbiya', 993834000, 'Islam', 'Pelajar/Mahasiswa', 'Indonesia', 'Perum Gading Mas', 'khalilannbiya@gmail.com', '08999966624', '3215025554656656', 1643302800, 'Jl baru Karawang', 'Penganiayaan Berat (Anirat)', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1646734892);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `ttl` int(15) NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Buddha','Konghucu','Lainnya') NOT NULL,
  `kerja` enum('Belum/Tidak Bekerja','Mengurus Rumah Tangga','Pelajar/Mahasiswa','Pensiunan','PNS','TNI','Polri','Perdagangan','Petani/Pekebun','Peternak','Nelayan/Perikanan','Konstruksi','Transportasi','Karyawan Swasta','Buruh Harian Lepas','Perancang Busana','Peterjemah','Imam Masjid','Pendeta','Pastor','Jurnalis','Chef','Penjabat','Pilot','Guru','Pengacara','Dokter','Bidan','Apoteker','Wiraswata','Psikolog','Lainnya') NOT NULL,
  `negara` varchar(50) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `noHp` varchar(15) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `ttl`, `agama`, `kerja`, `negara`, `address`, `email`, `noHp`, `nik`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(33, 'Syeich Khalil Annbiya', 993834000, 'Islam', 'Belum/Tidak Bekerja', 'Indonesia', 'Perum Gading Mas blok Larissa 1 No 19, RT 002/RW 028', 'syeichkhalil@gmail.com', '08999161805', '3215013002302155', 'default.jpg', '$2y$10$dKSIVdIkRD5MXmK0UU95xeRuZOSRqLEiAtlhmVLpt4csAbDAr7vxe', 1, 1, 1623880686),
(40, 'Khalil Annbiya', 993834000, 'Islam', 'Pelajar/Mahasiswa', 'Indonesia', 'Perum Gading Mas', 'khalilannbiya@gmail.com', '08999966624', '3215025554656656', 'default.jpg', '$2y$10$y0tp3caHQ4Guzs.QfFHHIe2/JyiLLD7D9zVfQHOiuCUBV1eiASpsK', 2, 1, 1646734456);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
