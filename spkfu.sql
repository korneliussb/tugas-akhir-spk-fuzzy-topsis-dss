-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 05.51
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkfu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(3) NOT NULL,
  `nama_alternatif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(11, 'Dadapayam'),
(12, 'Mluweh'),
(13, 'Lebak'),
(14, 'Pakis'),
(15, 'Jatikurung'),
(16, 'Gogodalem'),
(17, 'Kandangan'),
(18, 'Ngrawan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek_teknik`
--

CREATE TABLE `aspek_teknik` (
  `id_aspek_teknik` int(3) NOT NULL,
  `id_alternatif` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nilai_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aspek_teknik`
--

INSERT INTO `aspek_teknik` (`id_aspek_teknik`, `id_alternatif`, `id_kriteria`, `nilai_kriteria`) VALUES
(106, 11, 1, '4'),
(107, 11, 2, '5'),
(108, 11, 3, '4'),
(109, 11, 4, '3'),
(110, 11, 5, '4'),
(111, 11, 6, '2'),
(112, 11, 7, '3'),
(113, 12, 1, '1'),
(114, 12, 2, '1'),
(115, 12, 3, '5'),
(116, 12, 4, '1'),
(117, 12, 5, '1'),
(118, 12, 6, '5'),
(119, 12, 7, '2'),
(120, 13, 1, '4'),
(121, 13, 2, '3'),
(122, 13, 3, '5'),
(123, 13, 4, '2'),
(124, 13, 5, '4'),
(125, 13, 6, '5'),
(126, 13, 7, '3'),
(127, 14, 1, '4'),
(128, 14, 2, '5'),
(129, 14, 3, '4'),
(130, 14, 4, '2'),
(131, 14, 5, '4'),
(132, 14, 6, '4'),
(133, 14, 7, '3'),
(134, 15, 1, '1'),
(135, 15, 2, '5'),
(136, 15, 3, '3'),
(137, 15, 4, '5'),
(138, 15, 5, '5'),
(139, 15, 6, '1'),
(140, 15, 7, '3'),
(141, 16, 1, '1'),
(142, 16, 2, '4'),
(143, 16, 3, '2'),
(144, 16, 4, '4'),
(145, 16, 5, '3'),
(146, 16, 6, '1'),
(147, 16, 7, '3'),
(148, 17, 1, '3'),
(149, 17, 2, '4'),
(150, 17, 3, '5'),
(151, 17, 4, '5'),
(152, 17, 5, '5'),
(153, 17, 6, '1'),
(154, 17, 7, '3'),
(155, 18, 1, '3'),
(156, 18, 2, '5'),
(157, 18, 3, '4'),
(158, 18, 4, '5'),
(159, 18, 5, '5'),
(160, 18, 6, '1'),
(161, 18, 7, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `intervals`
--

CREATE TABLE `intervals` (
  `id_interval` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nilai_kriteria` varchar(2) NOT NULL,
  `nilai_interval` varchar(50) NOT NULL,
  `fuzzy_number1` float(3,2) NOT NULL,
  `fuzzy_number2` float(3,2) NOT NULL,
  `fuzzy_number3` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `intervals`
--

INSERT INTO `intervals` (`id_interval`, `id_kriteria`, `nilai_kriteria`, `nilai_interval`, `fuzzy_number1`, `fuzzy_number2`, `fuzzy_number3`) VALUES
(1, 1, '1', 'Hutan (forest)', 0.75, 1.00, 1.00),
(2, 1, '2', 'Semak belukar (shrubs)', 0.50, 0.75, 1.00),
(3, 1, '3', 'Ladang/tegalan (field)', 0.25, 0.50, 0.75),
(4, 1, '4', 'Sawah tadah hujan (rainfed)', 0.00, 0.25, 0.50),
(5, 1, '5', 'Perkampungan (rural area)', 0.00, 0.00, 0.25),
(6, 2, '1', '160.000 &le; &Chi; &lt; 200.000 m&sup3;', 0.75, 1.00, 1.00),
(7, 2, '2', '120.000 &le; &Chi; &lt; 160.000 m&sup3;', 0.50, 0.75, 1.00),
(8, 2, '3', '80.000 &le; &Chi; &lt; 120.000 m&sup3;', 0.25, 0.50, 0.75),
(9, 2, '4', '40.000 &le; &Chi; &lt; 80.000 m&sup3;', 0.00, 0.25, 0.50),
(10, 2, '5', '&Chi; &lt; 40.000 m&sup3;', 0.00, 0.00, 0.25),
(11, 3, '1', '&Chi; &ge; 7,5 ha', 0.75, 1.00, 1.00),
(12, 3, '2', '6,0 &le; &Chi; &lt; 7,5 ha', 0.50, 0.75, 1.00),
(13, 3, '3', '4,5 &le; &Chi; &lt; 6,0 ha', 0.25, 0.50, 0.75),
(14, 3, '4', '3,0 &le; &Chi; &lt; 4,5 ha', 0.00, 0.25, 0.50),
(15, 3, '5', '1,5 &le; &Chi; &lt; 3,0 ha', 0.00, 0.00, 0.25),
(16, 4, '1', '&Chi; &ge; 1.500.000 m&sup3;', 0.75, 1.00, 1.00),
(17, 4, '2', '750.000 &le; &Chi; &lt; 1.500.000 m&sup3;', 0.50, 0.75, 1.00),
(18, 4, '3', '500.000 &le; &Chi; &lt; 750.000 m&sup3;', 0.25, 0.50, 0.75),
(19, 4, '4', '250.000 &le; &Chi; &lt; 500.000 m&sup3;', 0.00, 0.25, 0.50),
(20, 4, '5', '&Chi; &lt; 250.000 m&sup3;', 0.00, 0.00, 0.25),
(21, 5, '1', '&Chi; &ge; 100 hari', 0.75, 1.00, 1.00),
(22, 5, '2', '80 &le; &Chi; &lt; 100 hari', 0.50, 0.75, 1.00),
(23, 5, '3', '60 &le; &Chi; &lt; 80 hari', 0.25, 0.50, 0.75),
(24, 5, '4', '40 &le; &Chi; &lt; 60 hari', 0.00, 0.25, 0.50),
(25, 5, '5', '&Chi; &lt; 40 hari', 0.00, 0.00, 0.25),
(26, 6, '1', '&Chi; &ge; Rp40.000', 0.75, 1.00, 1.00),
(27, 6, '2', 'Rp30.000 &le; &Chi; &lt; Rp40.000', 0.50, 0.75, 1.00),
(28, 6, '3', 'Rp20.000 &le; &Chi; &lt; Rp30.000', 0.25, 0.50, 0.75),
(29, 6, '4', 'Rp10.000 &le; &Chi; &lt; Rp20.000', 0.00, 0.25, 0.50),
(30, 6, '5', '&Chi; &lt; Rp10.000', 0.00, 0.00, 0.25),
(31, 7, '1', 'Tersedia jalan aspal menuju lokasi (pavement road)', 0.67, 1.00, 1.00),
(32, 7, '2', 'Jalan makadam/tanah sampai lokasi (Ground road)', 0.33, 0.67, 1.00),
(33, 7, '3', 'Jalan setapak (Footpath)', 0.00, 0.33, 0.67),
(34, 7, '4', 'Tidak tersedia jalan (No road)', 0.00, 0.00, 0.33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `nilai_bobot1` float(3,2) NOT NULL,
  `nilai_bobot2` float(3,2) NOT NULL,
  `nilai_bobot3` float(3,2) NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `nilai_bobot1`, `nilai_bobot2`, `nilai_bobot3`, `user_id`) VALUES
(1, 'Vegetasi Area Genangan Embung (Benefit)', 0.10, 0.34, 0.70, 1),
(2, 'Volume Material Timbunan (Cost)', 0.00, 0.08, 0.40, 1),
(3, 'Luas daerah yang akan dibebaskan (Cost)', 0.10, 0.37, 0.60, 1),
(4, 'Volume Tampungan Efektif (Benefit)', 0.00, 0.27, 0.50, 1),
(5, 'Lama Operasi (Benefit)', 0.10, 0.31, 0.50, 1),
(6, 'Harga air per m<sup>3</sup> (Cost)', 0.00, 0.30, 0.60, 1),
(7, 'Akses jalan menuju lokasi embung (Benefit)', 0.10, 0.38, 0.70, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `instansi` varchar(60) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama_user`, `username`, `password`, `hak_akses`, `email`, `jenis_kelamin`, `instansi`, `last_login`) VALUES
(1, 'Kornelius Satria B', 'ksatria', '$2y$10$z3fVYUKI3xgJ8/Y99CycXOuIXZmbpG4nXi.8BT5k0/NvNPnOlvugi', 1, 'kor1@gmail.com', 1, 'UNDIP', '2020-03-18 11:05:14'),
(2, 'Yayaya', 'yayaya', '$2y$10$ddcn0R/hlT.H2LWWMqVEXeXYG.xUQA9xAs44Iwfg4XqMpEHc14tTO', 1, 'yaya1@gmail.com', 1, 'UND', '2020-03-16 10:13:53'),
(3, 'yoi', 'yoi', '$2y$10$c86M8dvwlOMnaHBImQoZ9el50sSqXVJJJ.LLQiezZ8AYMKU.vf9.6', 1, 'yoi@gmail.com', 1, 'UUU', '2020-03-16 11:07:53'),
(4, 'admin', 'admin', '$2y$10$kERgbEqW4hND5fddsPWod.jkmhxQPLn28FtkRIFKfffIfKA6Rz48q', 1, 'admin@gmail.com', 1, 'admin', '2020-03-16 13:00:05'),
(5, 'admin2', 'admin2', '$2y$10$ycJvmULY11iABLCSOczBwORofTo1m2iIFlJbRg9whVkdiV7R0cYCO', 1, 'admin2@gmail.com', 1, 'admin2', '2020-03-17 07:24:12'),
(6, 'password2', 'password', '$2y$10$JZjfXEUoEk/OcL1D/GW3PuTJ5ktMdtUIz9JsvIE5kHJiiU4i5IRLe', 1, 'password@gmail.com', 2, 'password', '2020-03-21 06:51:39'),
(7, 'pengguna', 'pengguna', '$2y$10$kzOUTNKYjn/fWr34LGFA2e3pD0.o5mH0szCMF3zmsYEmqiLc/u672', 1, 'pengguna@gmail.com', 2, 'INstansi', '2020-03-21 05:13:54'),
(15, 'admin1', 'admin1', '$2y$10$6roQT0qh1vH8rJ.xXEgFU.duq0rk4.ivn1ci2Y0Zwrz8kFIEFmLw.', 1, 'admin1@gmail.com', 1, 'Admin1', '2020-04-08 09:13:18');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_anegk1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anegk1` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dneg1` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_anegk2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anegk2` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dneg2` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_anegk3`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anegk3` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dneg3` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_anegk4`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anegk4` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dneg4` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_anegk5`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anegk5` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dneg5` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_anegk6`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anegk6` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dneg6` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_anegk7`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_anegk7` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dneg7` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_aplusk1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_aplusk1` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dplus1` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_aplusk2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_aplusk2` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dplus2` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_aplusk3`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_aplusk3` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dplus3` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_aplusk4`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_aplusk4` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dplus4` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_aplusk5`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_aplusk5` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dplus5` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_aplusk6`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_aplusk6` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dplus6` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_aplusk7`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_aplusk7` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`dplus7` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_datanilaikriteria`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_datanilaikriteria` (
`id_alternatif` int(3)
,`id_kriteria` int(3)
,`nilai_kriteria` varchar(2)
,`fuzzy_number1` float(3,2)
,`fuzzy_number2` float(3,2)
,`fuzzy_number3` float(3,2)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_dneg`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_dneg` (
`id_alternatif` int(11)
,`id_kriteria` int(11)
,`dneg` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_dplus`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_dplus` (
`id_alternatif` int(11)
,`id_kriteria` int(11)
,`dplus` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fnisk1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fnisk1` (
`field_bobot1` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fnisk2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fnisk2` (
`field_bobot2` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fnisk3`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fnisk3` (
`field_bobot3` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fnisk4`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fnisk4` (
`field_bobot4` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fnisk5`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fnisk5` (
`field_bobot5` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fnisk6`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fnisk6` (
`field_bobot6` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fnisk7`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fnisk7` (
`field_bobot7` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fpisk1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fpisk1` (
`field_bobot1` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fpisk2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fpisk2` (
`field_bobot2` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fpisk3`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fpisk3` (
`field_bobot3` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fpisk4`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fpisk4` (
`field_bobot4` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fpisk5`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fpisk5` (
`field_bobot5` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fpisk6`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fpisk6` (
`field_bobot6` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_fpisk7`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_fpisk7` (
`field_bobot7` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_normalisasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_normalisasi` (
`field_bobot1` double(19,2)
,`field_bobot2` double(19,2)
,`field_bobot3` double(19,2)
,`id_alternatif` int(3)
,`id_kriteria` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_sum`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_sum` (
`id_alternatif` int(11)
,`dneg` double
,`dplus` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_sumneg`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_sumneg` (
`id_alternatif` int(11)
,`dneg` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_sumplus`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_sumplus` (
`id_alternatif` int(11)
,`dplus` double
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anegk1`
--
DROP TABLE IF EXISTS `v_anegk1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anegk1`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fnisk1`.`field_bobot1` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fnisk1`.`field_bobot1` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fnisk1`.`field_bobot1` - `v_normalisasi`.`field_bobot3`,2))) AS `dneg1` from (`v_normalisasi` join `v_fnisk1`) where `v_normalisasi`.`id_kriteria` = `v_fnisk1`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anegk2`
--
DROP TABLE IF EXISTS `v_anegk2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anegk2`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fnisk2`.`field_bobot2` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fnisk2`.`field_bobot2` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fnisk2`.`field_bobot2` - `v_normalisasi`.`field_bobot3`,2))) AS `dneg2` from (`v_normalisasi` join `v_fnisk2`) where `v_normalisasi`.`id_kriteria` = `v_fnisk2`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anegk3`
--
DROP TABLE IF EXISTS `v_anegk3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anegk3`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fnisk3`.`field_bobot3` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fnisk3`.`field_bobot3` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fnisk3`.`field_bobot3` - `v_normalisasi`.`field_bobot3`,2))) AS `dneg3` from (`v_normalisasi` join `v_fnisk3`) where `v_normalisasi`.`id_kriteria` = `v_fnisk3`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anegk4`
--
DROP TABLE IF EXISTS `v_anegk4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anegk4`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fnisk4`.`field_bobot4` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fnisk4`.`field_bobot4` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fnisk4`.`field_bobot4` - `v_normalisasi`.`field_bobot3`,2))) AS `dneg4` from (`v_normalisasi` join `v_fnisk4`) where `v_normalisasi`.`id_kriteria` = `v_fnisk4`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anegk5`
--
DROP TABLE IF EXISTS `v_anegk5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anegk5`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fnisk5`.`field_bobot5` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fnisk5`.`field_bobot5` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fnisk5`.`field_bobot5` - `v_normalisasi`.`field_bobot3`,2))) AS `dneg5` from (`v_normalisasi` join `v_fnisk5`) where `v_normalisasi`.`id_kriteria` = `v_fnisk5`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anegk6`
--
DROP TABLE IF EXISTS `v_anegk6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anegk6`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fnisk6`.`field_bobot6` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fnisk6`.`field_bobot6` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fnisk6`.`field_bobot6` - `v_normalisasi`.`field_bobot3`,2))) AS `dneg6` from (`v_normalisasi` join `v_fnisk6`) where `v_normalisasi`.`id_kriteria` = `v_fnisk6`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_anegk7`
--
DROP TABLE IF EXISTS `v_anegk7`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_anegk7`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fnisk7`.`field_bobot7` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fnisk7`.`field_bobot7` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fnisk7`.`field_bobot7` - `v_normalisasi`.`field_bobot3`,2))) AS `dneg7` from (`v_normalisasi` join `v_fnisk7`) where `v_normalisasi`.`id_kriteria` = `v_fnisk7`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_aplusk1`
--
DROP TABLE IF EXISTS `v_aplusk1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aplusk1`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fpisk1`.`field_bobot1` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fpisk1`.`field_bobot1` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fpisk1`.`field_bobot1` - `v_normalisasi`.`field_bobot3`,2))) AS `dplus1` from (`v_normalisasi` join `v_fpisk1`) where `v_normalisasi`.`id_kriteria` = `v_fpisk1`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_aplusk2`
--
DROP TABLE IF EXISTS `v_aplusk2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aplusk2`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fpisk2`.`field_bobot2` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fpisk2`.`field_bobot2` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fpisk2`.`field_bobot2` - `v_normalisasi`.`field_bobot3`,2))) AS `dplus2` from (`v_normalisasi` join `v_fpisk2`) where `v_normalisasi`.`id_kriteria` = `v_fpisk2`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_aplusk3`
--
DROP TABLE IF EXISTS `v_aplusk3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aplusk3`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fpisk3`.`field_bobot3` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fpisk3`.`field_bobot3` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fpisk3`.`field_bobot3` - `v_normalisasi`.`field_bobot3`,2))) AS `dplus3` from (`v_normalisasi` join `v_fpisk3`) where `v_normalisasi`.`id_kriteria` = `v_fpisk3`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_aplusk4`
--
DROP TABLE IF EXISTS `v_aplusk4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aplusk4`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fpisk4`.`field_bobot4` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fpisk4`.`field_bobot4` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fpisk4`.`field_bobot4` - `v_normalisasi`.`field_bobot3`,2))) AS `dplus4` from (`v_normalisasi` join `v_fpisk4`) where `v_normalisasi`.`id_kriteria` = `v_fpisk4`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_aplusk5`
--
DROP TABLE IF EXISTS `v_aplusk5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aplusk5`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fpisk5`.`field_bobot5` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fpisk5`.`field_bobot5` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fpisk5`.`field_bobot5` - `v_normalisasi`.`field_bobot3`,2))) AS `dplus5` from (`v_normalisasi` join `v_fpisk5`) where `v_normalisasi`.`id_kriteria` = `v_fpisk5`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_aplusk6`
--
DROP TABLE IF EXISTS `v_aplusk6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aplusk6`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fpisk6`.`field_bobot6` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fpisk6`.`field_bobot6` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fpisk6`.`field_bobot6` - `v_normalisasi`.`field_bobot3`,2))) AS `dplus6` from (`v_normalisasi` join `v_fpisk6`) where `v_normalisasi`.`id_kriteria` = `v_fpisk6`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_aplusk7`
--
DROP TABLE IF EXISTS `v_aplusk7`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aplusk7`  AS  select `v_normalisasi`.`id_alternatif` AS `id_alternatif`,`v_normalisasi`.`id_kriteria` AS `id_kriteria`,sqrt(1 / 3 * (pow(`v_fpisk7`.`field_bobot7` - `v_normalisasi`.`field_bobot1`,2) + pow(`v_fpisk7`.`field_bobot7` - `v_normalisasi`.`field_bobot2`,2) + pow(`v_fpisk7`.`field_bobot7` - `v_normalisasi`.`field_bobot3`,2))) AS `dplus7` from (`v_normalisasi` join `v_fpisk7`) where `v_normalisasi`.`id_kriteria` = `v_fpisk7`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_datanilaikriteria`
--
DROP TABLE IF EXISTS `v_datanilaikriteria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_datanilaikriteria`  AS  select `alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria`,`aspek_teknik`.`nilai_kriteria` AS `nilai_kriteria`,`intervals`.`fuzzy_number1` AS `fuzzy_number1`,`intervals`.`fuzzy_number2` AS `fuzzy_number2`,`intervals`.`fuzzy_number3` AS `fuzzy_number3` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_dneg`
--
DROP TABLE IF EXISTS `v_dneg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dneg`  AS  select `v_anegk1`.`id_alternatif` AS `id_alternatif`,`v_anegk1`.`id_kriteria` AS `id_kriteria`,`v_anegk1`.`dneg1` AS `dneg` from `v_anegk1` union select `v_anegk2`.`id_alternatif` AS `id_alternatif`,`v_anegk2`.`id_kriteria` AS `id_kriteria`,`v_anegk2`.`dneg2` AS `dneg2` from `v_anegk2` union select `v_anegk3`.`id_alternatif` AS `id_alternatif`,`v_anegk3`.`id_kriteria` AS `id_kriteria`,`v_anegk3`.`dneg3` AS `dneg3` from `v_anegk3` union select `v_anegk4`.`id_alternatif` AS `id_alternatif`,`v_anegk4`.`id_kriteria` AS `id_kriteria`,`v_anegk4`.`dneg4` AS `dneg4` from `v_anegk4` union select `v_anegk5`.`id_alternatif` AS `id_alternatif`,`v_anegk5`.`id_kriteria` AS `id_kriteria`,`v_anegk5`.`dneg5` AS `dneg5` from `v_anegk5` union select `v_anegk6`.`id_alternatif` AS `id_alternatif`,`v_anegk6`.`id_kriteria` AS `id_kriteria`,`v_anegk6`.`dneg6` AS `dneg6` from `v_anegk6` union select `v_anegk7`.`id_alternatif` AS `id_alternatif`,`v_anegk7`.`id_kriteria` AS `id_kriteria`,`v_anegk7`.`dneg7` AS `dneg7` from `v_anegk7` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_dplus`
--
DROP TABLE IF EXISTS `v_dplus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dplus`  AS  select `v_aplusk1`.`id_alternatif` AS `id_alternatif`,`v_aplusk1`.`id_kriteria` AS `id_kriteria`,`v_aplusk1`.`dplus1` AS `dplus` from `v_aplusk1` union select `v_aplusk2`.`id_alternatif` AS `id_alternatif`,`v_aplusk2`.`id_kriteria` AS `id_kriteria`,`v_aplusk2`.`dplus2` AS `dplus2` from `v_aplusk2` union select `v_aplusk3`.`id_alternatif` AS `id_alternatif`,`v_aplusk3`.`id_kriteria` AS `id_kriteria`,`v_aplusk3`.`dplus3` AS `dplus3` from `v_aplusk3` union select `v_aplusk4`.`id_alternatif` AS `id_alternatif`,`v_aplusk4`.`id_kriteria` AS `id_kriteria`,`v_aplusk4`.`dplus4` AS `dplus4` from `v_aplusk4` union select `v_aplusk5`.`id_alternatif` AS `id_alternatif`,`v_aplusk5`.`id_kriteria` AS `id_kriteria`,`v_aplusk5`.`dplus5` AS `dplus5` from `v_aplusk5` union select `v_aplusk6`.`id_alternatif` AS `id_alternatif`,`v_aplusk6`.`id_kriteria` AS `id_kriteria`,`v_aplusk6`.`dplus6` AS `dplus6` from `v_aplusk6` union select `v_aplusk7`.`id_alternatif` AS `id_alternatif`,`v_aplusk7`.`id_kriteria` AS `id_kriteria`,`v_aplusk7`.`dplus7` AS `dplus7` from `v_aplusk7` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fnisk1`
--
DROP TABLE IF EXISTS `v_fnisk1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fnisk1`  AS  select min(`intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1`) AS `field_bobot1`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '1' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fnisk2`
--
DROP TABLE IF EXISTS `v_fnisk2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fnisk2`  AS  select max(`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3`) AS `field_bobot2`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '2' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fnisk3`
--
DROP TABLE IF EXISTS `v_fnisk3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fnisk3`  AS  select max(`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3`) AS `field_bobot3`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '3' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fnisk4`
--
DROP TABLE IF EXISTS `v_fnisk4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fnisk4`  AS  select min(`intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1`) AS `field_bobot4`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '4' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fnisk5`
--
DROP TABLE IF EXISTS `v_fnisk5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fnisk5`  AS  select min(`intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1`) AS `field_bobot5`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '5' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fnisk6`
--
DROP TABLE IF EXISTS `v_fnisk6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fnisk6`  AS  select max(`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3`) AS `field_bobot6`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '6' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fnisk7`
--
DROP TABLE IF EXISTS `v_fnisk7`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fnisk7`  AS  select min(`intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1`) AS `field_bobot7`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '7' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fpisk1`
--
DROP TABLE IF EXISTS `v_fpisk1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fpisk1`  AS  select max(`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3`) AS `field_bobot1`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '1' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fpisk2`
--
DROP TABLE IF EXISTS `v_fpisk2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fpisk2`  AS  select min(`intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1`) AS `field_bobot2`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '2' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fpisk3`
--
DROP TABLE IF EXISTS `v_fpisk3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fpisk3`  AS  select min(`intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1`) AS `field_bobot3`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '3' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fpisk4`
--
DROP TABLE IF EXISTS `v_fpisk4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fpisk4`  AS  select max(`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3`) AS `field_bobot4`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '4' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fpisk5`
--
DROP TABLE IF EXISTS `v_fpisk5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fpisk5`  AS  select max(`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3`) AS `field_bobot5`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '5' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fpisk6`
--
DROP TABLE IF EXISTS `v_fpisk6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fpisk6`  AS  select min(`intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1`) AS `field_bobot6`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '6' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_fpisk7`
--
DROP TABLE IF EXISTS `v_fpisk7`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_fpisk7`  AS  select max(`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3`) AS `field_bobot7`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) where `kriteria`.`id_kriteria` = '7' ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_normalisasi`
--
DROP TABLE IF EXISTS `v_normalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_normalisasi`  AS  select `intervals`.`fuzzy_number1` * `kriteria`.`nilai_bobot1` AS `field_bobot1`,`intervals`.`fuzzy_number2` * `kriteria`.`nilai_bobot2` AS `field_bobot2`,`intervals`.`fuzzy_number3` * `kriteria`.`nilai_bobot3` AS `field_bobot3`,`alternatif`.`id_alternatif` AS `id_alternatif`,`kriteria`.`id_kriteria` AS `id_kriteria` from (((`aspek_teknik` join `alternatif` on(`alternatif`.`id_alternatif` = `aspek_teknik`.`id_alternatif`)) join `kriteria` on(`kriteria`.`id_kriteria` = `aspek_teknik`.`id_kriteria`)) join `intervals` on(`intervals`.`id_kriteria` = `aspek_teknik`.`id_kriteria` and `intervals`.`nilai_kriteria` = `aspek_teknik`.`nilai_kriteria`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_sum`
--
DROP TABLE IF EXISTS `v_sum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sum`  AS  select `v_sumneg`.`id_alternatif` AS `id_alternatif`,`v_sumneg`.`dneg` AS `dneg`,`v_sumplus`.`dplus` AS `dplus` from (`v_sumneg` join `v_sumplus`) where `v_sumplus`.`id_alternatif` = `v_sumneg`.`id_alternatif` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_sumneg`
--
DROP TABLE IF EXISTS `v_sumneg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sumneg`  AS  select `v_dneg`.`id_alternatif` AS `id_alternatif`,sum(`v_dneg`.`dneg`) AS `dneg` from `v_dneg` group by `v_dneg`.`id_alternatif` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_sumplus`
--
DROP TABLE IF EXISTS `v_sumplus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sumplus`  AS  select `v_dplus`.`id_alternatif` AS `id_alternatif`,sum(`v_dplus`.`dplus`) AS `dplus` from `v_dplus` group by `v_dplus`.`id_alternatif` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `aspek_teknik`
--
ALTER TABLE `aspek_teknik`
  ADD PRIMARY KEY (`id_aspek_teknik`);

--
-- Indeks untuk tabel `intervals`
--
ALTER TABLE `intervals`
  ADD PRIMARY KEY (`id_interval`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `aspek_teknik`
--
ALTER TABLE `aspek_teknik`
  MODIFY `id_aspek_teknik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT untuk tabel `intervals`
--
ALTER TABLE `intervals`
  MODIFY `id_interval` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
