-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2015 pada 09.04
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
  `id_jam` int(10) NOT NULL AUTO_INCREMENT,
  `jam` varchar(100) DEFAULT NULL,
  `tarif` int(100) DEFAULT NULL,
  `id_lap` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_jam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`, `tarif`, `id_lap`) VALUES
(1, 'pagi', 100000, 2),
(2, 'siang', 110000, 2),
(3, 'malam', 1200000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `id_lap` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lap` varchar(100) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `pagi` int(100) NOT NULL,
  `siang` int(100) NOT NULL,
  `malam` int(100) NOT NULL,
  `id_futsal` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_lap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`id_lap`, `nama_lap`, `deskripsi`, `pagi`, `siang`, `malam`, `id_futsal`) VALUES
(3, 'lapangan 1', 'rumput sintetis', 60000, 70000, 90000, 16);

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
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `first_name`, `last_name`, `id_card`, `ttl`, `team_name`, `address`, `phone`, `id_user`) VALUES
(1, 'aziz', 'aziz', 'aziz', '1993-08-15', 'aziz', 'aziz', 'aziz', 2),
(2, 'aziz', 'aziz', 'aziz', '1993-08-15', 'aziz', 'aziz', 'aziz', 2),
(3, 'mail', 'mail', 'mail', '1993-08-15', 'mail', 'mail', 'mail', 3);

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
  `id_user` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_futsal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_futsal`, `nama_futsal`, `alamat`, `deskripsi`, `gambar`, `id_user`) VALUES
(15, 'Troll Warlord', 'Jahrakal', 'Jahrakal', 'Jahrakal1.jpg', 16),
(16, 'Balanar', 'Balanar', 'Balanar', 'Balanar.jpg', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `group` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `group`) VALUES
(1, 'yuda', 'ac9053a8bd7632586c3eb663a6cf15e4', 'user'),
(15, 'troll', '9aeaed51f2b0f6680c4ed4b07fb1a83c', 'operator'),
(16, 'troll', '9aeaed51f2b0f6680c4ed4b07fb1a83c', 'operator'),
(17, 'balanar', '17f7d41fd66bc790cd25ebbb855b9620', 'operator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
