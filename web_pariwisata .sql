-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2020 pada 09.16
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `keterangan`) VALUES
(1, 'destinasi', 'destinasi tempat wisata'),
(2, 'event', 'acara yang diselenggarakan'),
(3, 'kuliner', 'kuliner khas daerah'),
(4, 'penginapan', 'penginapan yang ada pada daerah tersebut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(20) NOT NULL,
  `id_konten` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `isi_komentar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(20) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi_konten` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `id_kategori`, `id_user`, `judul`, `isi_konten`, `tanggal`, `foto`) VALUES
(2, 4, 1, 'bermalam', '<p><img alt=\"\" src=\"/assets/upload/files/images.jpg\" style=\"height:61px; width:90px\" /><span style=\"font-size:18px\">&nbsp;<u><strong>Ini adalah penginapan paling murah dan paling bagus. </strong></u></span></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2020-01-06 18:06:54', ''),
(3, 1, 1, 'pariwisata baru', '<p>as</p>\r\n', '2020-01-06 11:49:06', ''),
(4, 2, 1, 'alah tai njing', '<p>asjdbajsbdjkkj dnaskdasd</p>\r\n', '2020-01-06 06:42:38', ''),
(5, 2, 1, 'bermain', '<p>ayo kita main<img alt=\"\" src=\"/assets/upload/files/Screenshot%20(21).png\" style=\"height:51px; width:90px\" />safdhhhhhhzzzgfdfsdhgfchjdgscjhsagdjvhgsdjvg sdgvjhshvgsgvd gsdjhvghj</p>\r\n', '2020-01-06 08:57:22', ''),
(6, 4, 1, 'istirahat', '<p><img alt=\"\" src=\"/assets/upload/files/images%20(1).jpg\" style=\"height:67px; width:100px\" />&nbsp;<span style=\"font-size:28px\"><strong>Promo!!!</strong></span></p>\r\n\r\n<p><strong>Terletak di Malang</strong>, sejauh 400 meter dari Alun-alun Tugu, Griyo Sultan Agung menyediakan akomodasi dengan lounge bersama, parkir pribadi gratis, taman, dan teras. Selain kamar keluarga, akomodasi ini juga menyediakan taman bermain anak-anak. Menampilkan pemandangan taman, kamar-kamar yang ber-AC dilengkapi dengan lemari pakaian dan WiFi gratis.</p>\r\n\r\n<p>Kamar-kamar di hotel ini memiliki area tempat duduk. Di Griyo Sultan Agung, setiap kamar menawarkan meja, TV layar datar, dan kamar mandi pribadi.</p>\r\n\r\n<p>Anda dapat bermain tenis meja di akomodasi, dan tersedia layanan rental mobil.</p>\r\n\r\n<p>Atraksi wisata yang populer di dekat Griyo Sultan Agung mencakup Taman Rekreasi Kota, Taman Rekreasi Senaputra, dan Sarinah Malang. Bandara terdekat adalah Bandara Abdul Rachman Saleh, 19 km dari hotel.</p>\r\n\r\n<p>Pasangan paling suka lokasinya &mdash; mereka memberi nilai&nbsp;<strong>9,7</strong>&nbsp;untuk perjalanan dua orang.</p>\r\n', '2020-01-06 18:34:03', ''),
(7, 1, 5, 'nuhina', '<p>s</p>\r\n', '2020-01-06 19:58:47', 'images_(1).jpg'),
(8, 4, 1, 'berdua', '<p><img alt=\"\" src=\"/assets/upload/files/Screenshot%20(4).png\" style=\"height:51px; width:90px\" /><br />\r\n<br />\r\nHasilnya, CW dan keempat anak lainnya ditemukan di sebuah kamar hotel. Berdasarkan informasi, CW dan kelima anak adopsinya 10 tahun berpindah-pindah hotel. CW menghabiskan Rp 3 juta per hari untuk sewa kamar hotel.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"http://kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Seorang Pria Pernah Mendatangi Panti untuk Menemui 5 Anak Adopsi CW&quot;,&nbsp;<a href=\"https://megapolitan.kompas.com/read/2018/03/14/17450001/seorang-pria-pernah-mendatangi-panti-untuk-menemui-5-anak-adopsi-cw\">https://megapolitan.kompas.com/read/2018/03/14/17450001/seorang-pria-pernah-mendatangi-panti-untuk-menemui-5-anak-adopsi-cw</a>.<br />\r\nPenulis : Kontributor Jakarta, David Oliver Purba<br />\r\nEditor : Kurnia Sari Aziza</p>\r\n', '2020-01-07 08:03:15', 'Screenshot_(21).png'),
(9, 2, 1, 'bermain', '<p>ayo kita main<img alt=\"\" src=\"/assets/upload/files/Screenshot%20(21).png\" style=\"height:51px; width:90px\" />safdhhhhhhzzzgfdfsdhgfchjdgscjhsagdjvhgsdjvg sdgvjhshvgsgvd gsdjhvghj</p>\r\n', '2020-01-07 08:46:25', 'Screenshot_(20).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `contact`, `email`) VALUES
(1, 'dinova', '123', 'dinova', 127, 'din@din.com'),
(2, 'nino123', '021198', 'ninoo', 127, 'nino@ninno.com'),
(3, 'nova', 'nova', 'nova', 123, 'q@q.com'),
(4, 'eman', '123', 'eman', 127, 'e@e.co'),
(5, 'wan', '123', 'ichwan', 123, 'mail@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_id_konten` (`id_konten`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`),
  ADD KEY `fk_id_kategori` (`id_kategori`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_id_konten` FOREIGN KEY (`id_konten`) REFERENCES `konten` (`id_konten`);

--
-- Ketidakleluasaan untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `fk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
