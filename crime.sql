-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2022 pada 03.46
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
(24, 'Zinadine Zidane', 78685200, 'Kristen', 'Konstruksi', 'France', 'Mr. SHEN Li locality Naritu Town, sub-province 2 Zengxianglan County, sub-province Xilinguole Zone, postcode + province 027212 NEIMENGGU, country P.R. CHINA', 'zinadinezidane@gmail.com', '+650665690595', '321501000333265', 1623171600, 'Depan Jalan Kereta Api Tuparev', 'Pencurian Dengan Pemberatan (curat)', 'Tidak Tahu', 'Bayu', 'Mr. SHEN Li locality Naritu Town, sub-province 2 Zengxianglan County, sub-province Xilinguole Zone, postcode + province 027212 NEIMENGGU, country P.R. CHINA', 1623759964),
(28, 'David Degea', 488134800, 'Kristen', 'Dokter', 'Indonesia', 'Perumahan Jayakarta Abadi', 'daviddegea@gmail.com', '0812365421', '321006332326', 1623690000, 'Depan Jalan Baru', 'Pemerasan/Ancaman', 'Uncle Mutu', 'David Degea', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1623842573),
(29, 'Bruno Fernandes', 778957200, 'Kristen', 'TNI', 'Indonesia', 'Perumahan jaya abdi', 'fernandes@gmail.com', '082106632121', '321501263659956', 1623603600, 'Depan Monas', 'Judi', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1623843034),
(30, 'Paul Pogba', 833907600, 'Islam', 'TNI', 'Indonesia', 'Perumahan Kalilega', 'paulpogba@gmail.com', '08996656236', '3210552255546', 1623517200, 'Depan Masjid Al Jihad', 'Kenakalan Remaja', '', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi temp', 1623844879),
(32, 'Khalil Annbiya', 993834000, 'Islam', 'PNS', 'Indonesia', 'Perumahan Nasional Telukjambe Timur jalan sudirman', 'khalilannbiya@gmail.com', '08999161806', '3215013006010006', 1623603600, 'Stadion Singaperbangsa', 'Judi', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1623881882),
(33, 'Marc Marquez', 793299600, 'Islam', 'Perdagangan', 'Indonesia', 'Perumahan Mantap Jiwa', 'marcmarq@gmail.com', '0332122566213', '32165002566232', 1623603600, 'Depan Pemda', 'Penganiayaan Berat (Anirat)', '', 'Susanti', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1623882416),
(34, 'Ismail Bin Mail', 990723600, 'Islam', 'Pelajar/Mahasiswa', 'Indonesia', 'Kampung Durian Runtuh', 'ismailmail@gmail.com', '082106655651', '32150100256642', 1623690000, 'Jalan Kertabumi', 'Kenakalan Remaja', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1623883050),
(35, 'Squidward Tentacles', 929898000, 'Kristen', 'Nelayan/Perikanan', 'Indonesia', 'Bikini Bottom', 'squidward@gmail.com', '08210056623', '321501223022456', 1623690000, 'Galuhmas', 'Kenakalan Remaja', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1623883431),
(36, 'Khalil Annbiya', 993834000, 'Islam', 'PNS', 'Indonesia', 'Perumahan Nasional Telukjambe Timur jalan sudirman', 'khalilannbiya@gmail.com', '08999161806', '3215013006010006', 1623085200, 'Depan Pemda', 'Judi', '', '', 'Lorem Ipsum', 1624025601);

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
(25, 'Khalil Annbiya', 993834000, 'Islam', 'PNS', 'Indonesia', 'Perumahan Nasional Telukjambe Timur jalan sudirman', 'khalilannbiya@gmail.com', '08999161806', '3215013006010006', 'default.jpg', '$2y$10$6UO3rSTl5CX3hfht7SNBWeyWRL5jhsXTZHxbsl4ZuiAyOfvx4L20u', 2, 1, 1623759327),
(31, 'Bruno Fernandes', 778957200, 'Kristen', 'TNI', 'Indonesia', 'Perumahan jaya abdi', 'fernandes@gmail.com', '082106632121', '321501263659956', 'default.jpg', '$2y$10$lTRseAPcJri93LUif3Xk2.jEZ8iHMnP3LNHQHnfdcoY.RfW7UEdDq', 2, 1, 1623842931),
(32, 'Paul Pogba', 833907600, 'Islam', 'TNI', 'Indonesia', 'Perumahan Kalilega', 'paulpogba@gmail.com', '08996656236', '3210552255546', 'default.jpg', '$2y$10$xlvnQy5lWAskjBa9Mj6Gf.KThUwsS0Jj03vralq5wcF8dLMCPd9sy', 2, 1, 1623844754),
(33, 'Syeich Khalil Annbiya', 993834000, 'Islam', 'Belum/Tidak Bekerja', 'Indonesia', 'Perum Gading Mas blok Larissa 1 No 19, RT 002/RW 028', 'syeichkhalil@gmail.com', '08999161805', '3215013002302155', 'default.jpg', '$2y$10$dKSIVdIkRD5MXmK0UU95xeRuZOSRqLEiAtlhmVLpt4csAbDAr7vxe', 1, 1, 1623880686),
(34, 'Marc Marquez', 793299600, 'Islam', 'Perdagangan', 'Indonesia', 'Perumahan Mantap Jiwa', 'marcmarq@gmail.com', '0332122566213', '32165002566232', 'default.jpg', '$2y$10$MbPrSjZPz1gxytDAsveMWOsf//j1bqsTUPpAKfF.eQACYckWks4WW', 2, 1, 1623882128),
(35, 'Ismail Bin Mail', 990723600, 'Islam', 'Pelajar/Mahasiswa', 'Indonesia', 'Kampung Durian Runtuh', 'ismailmail@gmail.com', '082106655651', '32150100256642', 'default.jpg', '$2y$10$TgOPCyTKbzmByvKZRg5LC.kwkT6MJ4631bvqLAsKD6QnDs5krKuOC', 2, 1, 1623882981),
(36, 'Squidward Tentacles', 929898000, 'Kristen', 'Nelayan/Perikanan', 'Indonesia', 'Bikini Bottom', 'squidward@gmail.com', '08210056623', '321501223022456', 'default.jpg', '$2y$10$fsQRVlFbiE/.EiN.NSc0XuR/2MYsBX4P7NDwXN2CeRUFt/4xx7U/.', 2, 1, 1623883386),
(38, 'Syeich Khalil Annbiya', 993834000, 'Islam', 'Pelajar/Mahasiswa', 'Indonesia', 'Perum Gading MAs', 'cobakhalil@gmail.com', '0588066666226', '323230656206065', 'default.jpg', '$2y$10$xZAi0qoo0I0T654cMfiJRe8YvxWbnq8fFJwvNOzl4TS2/SacLrSTa', 2, 1, 1635079452);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
