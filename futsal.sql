-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2015 pada 05.56
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_futsal`, `nama_futsal`, `alamat`, `deskripsi`, `gambar`, `status`, `id_user`) VALUES
(10, 'Balanar', 'Balanar', 'Balanar', 'Balanar3.jpg', 'confirmed', 7),
(11, 'Akasha', 'Akasha', 'Akasha', 'Akasha1.jpg', 'confirmed', 8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'superadmin', '37a5b2d8e26b07f0aca7fe5bff9eec01', 'admin'),
(2, 'balanar', '17f7d41fd66bc790cd25ebbb855b9620', 'operator'),
(3, 'centaur', '47aeba35bb9d1ad72adfd802fab8a7c0', 'operator'),
(4, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'operator'),
(5, 'a', '0cc175b9c0f1b6a831c399e269772661', 'operator'),
(6, 'balanar', '17f7d41fd66bc790cd25ebbb855b9620', 'operator'),
(7, 'balanar', '17f7d41fd66bc790cd25ebbb855b9620', 'operator'),
(8, 'akasha', '5d7a2ce0e837d6dc0382520a0f0c4f2d', 'operator');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
