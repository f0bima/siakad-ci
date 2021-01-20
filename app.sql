-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jan 2021 pada 02.06
-- Versi Server: 10.5.4-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(10) NOT NULL,
  `namadsn` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `namadsn`, `tgl`, `alamat`, `jk`) VALUES
('A123', 'Bambang C', '1987-02-01', 'Solo', 'Laki-Laki'),
('A124', 'Cahyo', '1978-08-10', 'Klaten', 'Perempuan'),
('A125', 'Dedi', '1978-07-03', 'Sukoharjo', 'Laki-Laki'),
('A126', 'Edi', '1967-03-10', 'Sragen', 'Perempuan'),
('A127', 'Fuad', '1977-05-10', 'Ngawi', 'Perempuan'),
('AAA', 'Dosen AA', '1998-08-10', 'Alamat A', 'Perempuan'),
('CBA', 'CBAA', '2018-01-01', 'qq', 'Laki-Laki'),
('CCC', 'C', '1977-11-01', 'C', 'Perempuan'),
('DDD', 'Dosen D', '1966-12-12', 'Sukoharjo', 'Perempuan'),
('F123', 'Dosen F', '2019-07-22', 'Alamat F', 'Perempuan'),
('GG123', 'Dosen G', '2000-07-09', 'Alamat G', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`nama`, `foto`, `id`) VALUES
('foto3_baru', 'close.png', 3),
('foto4', '5.jpg', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `kodemk` varchar(10) NOT NULL,
  `matkul` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `smt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`kodemk`, `matkul`, `sks`, `smt`) VALUES
('ABCD', 'ABC', 5, 4),
('BBB', 'BB', 5, 7),
('CCC', 'CCC', 2, 1),
('DDD', 'DDD', 3, 4),
('EEE', 'EE', 3, 4),
('FFF', 'FF', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nim` varchar(10) NOT NULL,
  `namamhs` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nim`, `namamhs`, `tgl`, `alamat`, `jk`) VALUES
('3', 'nama3', '2018-11-30', 'alamat 2', 'Perempuan'),
('a', 'a', '2018-01-01', 'alamt1', 'LakiLaki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `role` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`email`, `pass`, `fullname`, `role`) VALUES
('a@user.com', 'e10adc3949ba59abbe56e057f20f883e', 'user a', NULL),
('admin@admin.com', '0192023a7bbd73250516f069df18b500', 'admin', 1),
('bambang@gmail.com', '357c5eaefeda3bf103d525b58d3fef73', 'Bambang', 0),
('cek@cek.com', 'e139edfaf434232a8b91891baa736bf6', 'cekcek', 0),
('cek@cek.id', 'd94b3fc388ef9231425a7c1096fe8596', 'Cek', 0),
('k@k', '8ce4b16b22b58894aa86c421e8759df3', 'k', NULL),
('pk@pk.com', '69c77b9e052c7b24792e9e2eea76ba29', 'pk', NULL),
('qw@qw.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'qw', 0),
('violete@bhan', '202cb962ac59075b964b07152d234b70', 'Violete Burhan', NULL),
('z@z', 'fbade9e36a3f36d3d676c1b808451dd7', 'z', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kodemk`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
