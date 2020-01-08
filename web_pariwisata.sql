-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 10:55 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `keterangan`) VALUES
(1, 'destinasi', 'destinasi tempat wisata'),
(2, 'event', 'acara yang diselenggarakan'),
(3, 'kuliner', 'kuliner khas daerah'),
(4, 'penginapan', 'penginapan yang ada pada daerah tersebut');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(20) NOT NULL,
  `id_konten` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `isi_komentar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(20) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi_konten` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `id_kategori`, `id_user`, `judul`, `isi_konten`, `tanggal`, `foto`) VALUES
(4, 2, 4, 'agagagag', '<p>ciaaat</p>\r\n', '2019-11-05 06:24:36', ''),
(5, 2, 2, 'ada', '<p>disini</p>\r\n', '2020-01-06 15:40:47', ''),
(6, 4, 2, 'ini judul', '<p>asdasd sd afsf asdf asdf asdf dfasdfasdf<img alt=\"\" src=\"/assets/upload/files/3d%20text.jpg\" style=\"height:40px; width:70px\" /></p>\r\n', '2020-01-06 15:41:30', ''),
(7, 1, 1, 'Onsen Resort', '<h2 style=\"text-align:center\"><strong><span style=\"font-size:28px\">Liburan ke Jepang tanpa pakai paspor?: The Onsen Hot Spring Resort</span></strong></h2>\r\n\r\n<h3>Untuk apa jauh-jauh pergi ke Jepang kalau semua yang ingin Anda coba di Jepang sudah ada di resort ini.</h3>\r\n\r\n<h3>Apa saja kegiatan &ldquo;Jepang&rdquo; yang bisa dicoba di sini? Bergaya dengan yukata di depan gerbang torii khas Jepang, berendam di onsen alami, merasakan tidur di ryokan, belajar seni ikebana dan origami, atau menikmati sashimi segar bersama segelas teh hijau hangat. Baiklah, mungkin hanya tinggal salju Gunung Fuji saja karena yang satu itu sulit untuk diimpor.</h3>\r\n\r\n<p style=\"margin-left:320px\">&nbsp;&nbsp;<img alt=\"\" src=\"/assets/upload/files/onsen2.jpg\" style=\"height:246px; width:300px\" /></p>\r\n\r\n<h3>Tentu saja panorama gunung tetap ada, hanya tidak bersalju.</h3>\r\n\r\n<h3>Setiap bungalownya bergaya&nbsp;<em>ryokan</em>&nbsp;lengkap&nbsp;<em>tatami</em>&nbsp;dan kasur&nbsp;<em>futon</em>, persis tempat tidur Nobita di film kartun Doraemon. Dengan pilihan 2 atau 3 kamar tidur, pastinya cocok banget untuk liburan keluarga.</h3>\r\n\r\n<h3 style=\"margin-left:320px\"><img alt=\"\" src=\"/assets/upload/files/onsen1.jpg\" style=\"height:120px; width:300px\" /></h3>\r\n\r\n<h3>Bawa juga kamera Anda karena resort rasa Jepang ini penuh titik swafoto yang tidak kalah indahnya dengan aslinya. Pastinya Anda disangka sedang berada di Jepang, benar-benar Jepang KW super!</h3>\r\n', '2020-01-06 16:52:12', ''),
(11, 2, 2, '321', '<p>qwe</p>\r\n', '2020-01-07 07:37:06', '4-eea573e937.jpg'),
(12, 2, 2, 'agagagag', '<p>ciaaat</p>\r\n', '2020-01-07 08:05:21', '3928980_8bf47cbd-a70c-46a3-94e9-21d7cacc759f_458_458.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `contact` tinyint(4) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `contact`, `email`) VALUES
(1, 'dinova', '123', 'dinova', 127, 'din@din.com'),
(2, 'wan', '123', 'ichwan', 127, 'wan'),
(3, 'ooo', '123', 'kkk', 123, 'w@mail.com'),
(4, 'nurdin', 'nur', 'nurdin', 127, 'mnurdinwahyudi@gmail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_id_konten` (`id_konten`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`),
  ADD KEY `fk_id_kategori` (`id_kategori`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_id_konten` FOREIGN KEY (`id_konten`) REFERENCES `konten` (`id_konten`);

--
-- Constraints for table `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `fk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
