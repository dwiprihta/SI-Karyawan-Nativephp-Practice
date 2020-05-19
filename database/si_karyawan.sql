-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2019 pada 09.58
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id_grade` int(2) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `gaji` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id_grade`, `grade`, `gaji`) VALUES
(1, 'A', 1000000),
(2, 'B', 2000000),
(3, 'C', 3000000),
(4, 'D', 4000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `nip` int(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_masuk` date NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`nip`, `nama`, `gender`, `tgl_lahir`, `tgl_masuk`, `grade`) VALUES
(12121, 'ALFAT QUMARA', 'laki-laki', '2019-07-05', '2019-07-03', 'B'),
(19091, 'TUTUT PRASETYO', 'laki-laki', '2019-07-05', '2019-07-04', 'C'),
(33333, 'BUDI', 'laki-laki', '2019-07-02', '2019-08-03', 'C'),
(78787, 'DWI ESTERINA', 'perempuan', '2019-07-04', '2019-07-11', 'C'),
(89898, 'REZA GUNAWAN', 'laki-laki', '2019-07-06', '2019-07-06', 'D'),
(98898, 'MUH IMAM NASUHA', 'laki-laki', '2019-07-04', '2019-07-05', 'D'),
(909099, 'DWI PRIHTAPAMBUDI', 'laki-laki', '2019-07-02', '2019-07-01', 'B');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_gajii`
--
CREATE TABLE `v_gajii` (
`nip` int(20)
,`nama` varchar(60)
,`gender` varchar(20)
,`tgl_lahir` date
,`tgl_masuk` date
,`grade` varchar(2)
,`gaji` int(60)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_gajii`
--
DROP TABLE IF EXISTS `v_gajii`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_gajii`  AS  select `a`.`nip` AS `nip`,`a`.`nama` AS `nama`,`a`.`gender` AS `gender`,`a`.`tgl_lahir` AS `tgl_lahir`,`a`.`tgl_masuk` AS `tgl_masuk`,`a`.`grade` AS `grade`,`g`.`gaji` AS `gaji` from (`tbl_karyawan` `a` join `tbl_gaji` `g` on((`g`.`grade` = `a`.`grade`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_grade` (`grade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id_grade` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
