-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2015 pada 08.52
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id_konfirmasi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `lapangan` varchar(100) DEFAULT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_transaksi` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_konfirmasi`),
  KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `nama_member`, `lokasi`, `lapangan`, `jam`, `harga`, `gambar`, `id_transaksi`) VALUES
(9, 'Ismail Adima', 'Centaur', 'lapangan 1', '7 AM', '0', '3D_4.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `id_lap` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lap` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `pagi` int(100) DEFAULT NULL,
  `siang` int(100) DEFAULT NULL,
  `malam` int(100) DEFAULT NULL,
  `id_futsal` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_lap`),
  KEY `id_futsal` (`id_futsal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`id_lap`, `nama_lap`, `deskripsi`, `pagi`, `siang`, `malam`, `id_futsal`) VALUES
(1, 'lapangan 1', 'rumput sintetis', 80000, 90000, 100000, 11),
(2, 'lapangan 2', 'rumput sintetis', 80000, 90000, 100000, 11),
(3, 'lapangan 1', 'rumput sintetis', 75000, 80000, 90000, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `id_card` varchar(100) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `team_name` varchar(100) DEFAULT NULL,
  `address` text,
  `phone` varchar(20) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_member`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `first_name`, `last_name`, `id_card`, `ttl`, `team_name`, `address`, `phone`, `id_user`) VALUES
(1, 'yuda', 'yuda', 'yuad', '1993-08-15', 'yuda', 'yuda', 'yuda', 10),
(2, 'Ismail', 'Adima', '1231312', '1994-05-15', 'Ismail', 'Ismail', '0123901391', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `id_futsal` int(10) NOT NULL AUTO_INCREMENT,
  `nama_futsal` varchar(100) DEFAULT NULL,
  `alamat` text,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('unconfirmed','confirmed') NOT NULL DEFAULT 'unconfirmed',
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_futsal`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_futsal`, `nama_futsal`, `alamat`, `deskripsi`, `gambar`, `status`, `id_user`) VALUES
(11, 'Akasha', 'Akasha', 'Akasha', 'Akasha1.jpg', 'confirmed', 8),
(12, 'Centaur', 'Centaur', 'Centaur', 'Centaur1.jpg', 'confirmed', 9),
(13, 'soccer', 'soccer', 'soccer', 'Ancient_Apparition.jpg', 'unconfirmed', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `id_futsal` int(10) DEFAULT NULL,
  `id_lapangan` int(10) DEFAULT NULL,
  `id_member` int(10) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `harga` int(10) NOT NULL,
  `status` enum('waiting','booked') NOT NULL DEFAULT 'waiting',
  `nama_team` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_futsal` (`id_futsal`),
  KEY `id_lapangan` (`id_lapangan`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_futsal`, `id_lapangan`, `id_member`, `tgl_booking`, `jam`, `harga`, `status`, `nama_team`) VALUES
(2, 12, 3, 2, NULL, '7 AM', 0, 'booked', 'Ismail');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','operator','user') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'superadmin', '37a5b2d8e26b07f0aca7fe5bff9eec01', 'admin'),
(8, 'akasha', '5d7a2ce0e837d6dc0382520a0f0c4f2d', 'operator'),
(9, 'centaur', '47aeba35bb9d1ad72adfd802fab8a7c0', 'operator'),
(10, 'yuda', 'ac9053a8bd7632586c3eb663a6cf15e4', 'user'),
(11, 'soccer', 'da443a0ad979d5530df38ca1a74e4f80', 'operator'),
(12, 'ismail', 'f3b32717d5322d7ba7c505c230785468', 'user');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_ibfk_1` FOREIGN KEY (`id_futsal`) REFERENCES `operator` (`id_futsal`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_futsal`) REFERENCES `operator` (`id_futsal`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_lapangan`) REFERENCES `lapangan` (`id_lap`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
