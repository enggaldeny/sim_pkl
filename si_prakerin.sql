-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 06:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `prk_detail_kategori`
--

CREATE TABLE `prk_detail_kategori` (
  `DK_ID` int(2) NOT NULL,
  `KTG_ID` varchar(2) NOT NULL,
  `DK_NAMA` varchar(100) NOT NULL,
  `BOBOT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_detail_kategori`
--

INSERT INTO `prk_detail_kategori` (`DK_ID`, `KTG_ID`, `DK_NAMA`, `BOBOT`) VALUES
(1, '1', 'Menyampaikan sesuatu berdasarkan keadaan yang sebenarnya', 0),
(2, '1', 'Tidak menutupi ksalahan yang terjadi', 0),
(3, '1', 'Tidak mecontek atau melihat data/pekerjaan orang lain', 0),
(4, '1', 'Mencantumkan sumber belajar dari yang dikutip/dipelajari', 0),
(5, '2', 'Pelaksanaan tugas piket secara teratur', 0),
(6, '2', 'Peran serta aktif dalam kegiatan diskusi kelompok', 0),
(7, '2', 'Mengajukan usul pemecahan masalah', 0),
(8, '2', 'Mengerjakan tugas sesuai yag ditugaskan', 0),
(9, '3', 'Tertib mengikuti instruksi', 25),
(10, '3', 'Mengerjakan tugas tepat waktu', 25),
(11, '3', 'Tidak melakukan kegiatan yang diminta', 0),
(12, '3', 'Tidak membuat kondisi kelas menjadi tidak kondusif', 0),
(13, '4', 'Berinteraksi degan teman secara ramah', 0),
(14, '4', 'Berkomunikasi dengan bahasa yang tidak menyinggung perasaan', 0),
(15, '4', 'Menggunakan bahasa tubuh yang bersahabat', 0),
(16, '4', 'Berperilaku sopan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prk_det_nilai`
--

CREATE TABLE `prk_det_nilai` (
  `NL_ID` int(11) NOT NULL,
  `DK_ID` varchar(4) NOT NULL,
  `NILAI` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_det_nilai`
--

INSERT INTO `prk_det_nilai` (`NL_ID`, `DK_ID`, `NILAI`) VALUES
(1, 'D1-1', 5),
(1, 'D1-2', 4),
(1, 'D1-3', 4),
(1, 'D1-4', 4),
(1, 'D2-1', 0),
(1, 'D2-2', 0),
(1, 'D2-3', 0),
(1, 'D2-4', 0),
(1, 'D2-5', 0),
(1, 'D3-1', 0),
(1, 'D3-2', 0),
(1, 'D3-3', 0),
(1, 'D3-4', 0),
(1, 'D3-5', 0),
(1, 'D4-1', 0),
(1, 'D4-2', 0),
(1, 'D4-3', 0),
(1, 'D4-4', 0),
(1, 'D4-5', 0),
(1, 'D5-1', 0),
(1, 'D5-2', 0),
(1, 'D5-3', 0),
(1, 'D5-4', 0),
(1, 'D5-5', 0),
(1, 'D6-1', 0),
(1, 'D6-2', 0),
(1, 'D6-3', 0),
(1, 'D6-4', 0),
(1, 'D6-5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prk_dudi`
--

CREATE TABLE `prk_dudi` (
  `DUDI_ID` int(5) NOT NULL,
  `DUDI_NAMA` varchar(30) NOT NULL,
  `DUDI_PIMPINAN` varchar(30) NOT NULL,
  `DUDI_ALAMAT` varchar(50) NOT NULL,
  `DUDI_TELEPON` varchar(12) NOT NULL,
  `DUDI_EMAIL` varchar(30) NOT NULL,
  `DUDI_USERNAME` varchar(12) NOT NULL,
  `DUDI_PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_dudi`
--

INSERT INTO `prk_dudi` (`DUDI_ID`, `DUDI_NAMA`, `DUDI_PIMPINAN`, `DUDI_ALAMAT`, `DUDI_TELEPON`, `DUDI_EMAIL`, `DUDI_USERNAME`, `DUDI_PASSWORD`) VALUES
(1, 'CV Mitra Maya Mandiri nET', 'Sudarko, S.Kom, M.Kom', 'Jl.Bangka 4 No.21 Sumbersari-Jember', '087654327198', 'm3net.admin@gmail.com', 'm3net', '59733b7875a62a9401da7204fbd1c4b7'),
(2, 'KPTR "MITRA USAHA" SEMBORO', '-', 'Jl.Kamardian No.1 Sidomekar Semboro', '-', '-', '', ''),
(3, 'Semboro Mini Market', '-', 'Jl.Yos Sudarso 127 Semboro', '-', '-', '', ''),
(4, 'KSP Mitra Usaha Mandiri', '-', 'Jl. Kamardikan Ds. Sidomekar Semboro', '-', '-', '', ''),
(5, 'PDPM Kec.Semboro', '-', 'Jl. Kamardikan G.VI Kec Semboro', '-', '-', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `prk_jurusan`
--

CREATE TABLE `prk_jurusan` (
  `JUR_ID` varchar(4) NOT NULL,
  `JUR_NAMA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_jurusan`
--

INSERT INTO `prk_jurusan` (`JUR_ID`, `JUR_NAMA`) VALUES
('AKL', 'AKUNTANSI KEUANGAN LEMBAGA'),
('BDP', 'BISNIS DARING DAN PEMASARAN'),
('MM', 'MULTIMEDIA'),
('OTKP', 'OTOMATISASI TATA KELOLA PERKATORAN'),
('RPL', 'REKAYASA PERANGKAT LUNAK');

-- --------------------------------------------------------

--
-- Table structure for table `prk_kategori`
--

CREATE TABLE `prk_kategori` (
  `KTG_ID` int(1) NOT NULL,
  `KTG_NAMA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_kategori`
--

INSERT INTO `prk_kategori` (`KTG_ID`, `KTG_NAMA`) VALUES
(1, 'JUJUR'),
(2, 'TANGGUNG JAWAB'),
(3, 'DISIPLIN'),
(4, 'SANTUN');

-- --------------------------------------------------------

--
-- Table structure for table `prk_kelas_jurusan`
--

CREATE TABLE `prk_kelas_jurusan` (
  `JURKEL_ID` varchar(10) NOT NULL,
  `JUR_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_kelas_jurusan`
--

INSERT INTO `prk_kelas_jurusan` (`JURKEL_ID`, `JUR_ID`) VALUES
('11 AK 1', 'AK'),
('11 AK 2', 'AK'),
('11 AK 3', 'AK'),
('11 BDP 1', 'PM'),
('11 BDP 2', 'PM'),
('11 BDP 3', 'PM'),
('11 MM 1', 'MM'),
('11 MM 2', 'MM'),
('11 OTKP 1', 'OTKP'),
('11 OTKP 2', 'OTKP'),
('11 RPL 1', 'RPL'),
('11 RPL 2', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `prk_nilai`
--

CREATE TABLE `prk_nilai` (
  `NL_ID` int(11) NOT NULL,
  `DUDI_ID` int(11) NOT NULL,
  `SW_NIS` varchar(20) NOT NULL,
  `NL_TAHUN` int(4) NOT NULL,
  `NL_GELOMBANG` int(1) NOT NULL,
  `NL_KETERANGAN` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_nilai`
--

INSERT INTO `prk_nilai` (`NL_ID`, `DUDI_ID`, `SW_NIS`, `NL_TAHUN`, `NL_GELOMBANG`, `NL_KETERANGAN`) VALUES
(1, 1, '990201308211001', 2017, 1, 'SELESAI PRAKERIN');

-- --------------------------------------------------------

--
-- Table structure for table `prk_pegawai`
--

CREATE TABLE `prk_pegawai` (
  `PGW_ID` int(11) NOT NULL,
  `PGW_NIP` varchar(20) NOT NULL,
  `PGW_NAMA` varchar(30) NOT NULL,
  `PGW_ALAMAT` varchar(50) NOT NULL,
  `PGW_TELEPON` varchar(12) NOT NULL,
  `PGW_USERNAME` varchar(12) NOT NULL,
  `PGW_PASSWORD` varchar(100) NOT NULL,
  `PGW_LEVEL` int(1) NOT NULL COMMENT '0=GURU;1=POKJA',
  `PGW_STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_pegawai`
--

INSERT INTO `prk_pegawai` (`PGW_ID`, `PGW_NIP`, `PGW_NAMA`, `PGW_ALAMAT`, `PGW_TELEPON`, `PGW_USERNAME`, `PGW_PASSWORD`, `PGW_LEVEL`, `PGW_STATUS`) VALUES
(1, '19234500100103998712', 'Dewi Qurotul A''yun', 'Semboro, Jember', '081098211005', 'dewiqu', 'ed1d859c50262701d92e5cbf39652792', 1, 1),
(2, '-', 'Surita, S.Pd', 'Pondok Jeruk, Tanggul', '-', '-', '-', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prk_siswa`
--

CREATE TABLE `prk_siswa` (
  `SW_NIS` varchar(20) NOT NULL,
  `SW_NAMA` varchar(30) NOT NULL,
  `SW_JK` varchar(1) NOT NULL,
  `SW_ALAMAT` varchar(50) NOT NULL,
  `SW_HP` varchar(12) NOT NULL,
  `SW_HP_ORTU` varchar(12) NOT NULL,
  `JURKEL_ID` varchar(8) NOT NULL,
  `DUDI_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_siswa`
--

INSERT INTO `prk_siswa` (`SW_NIS`, `SW_NAMA`, `SW_JK`, `SW_ALAMAT`, `SW_HP`, `SW_HP_ORTU`, `JURKEL_ID`, `DUDI_ID`) VALUES
('1', 'Abdul Qodir', 'L', '-', '-', '-', '11 MM 1', 0),
('990201308211001', 'ABDILLAH ARIFIN', 'L', '-', '-', '', '11 RPL 1', 1),
('990201308211002', 'ACHMAD ROFIQ HAMDANI', 'L', '-', '-', '', '11 RPL 1', 1),
('990201308211003', 'ADAM KUSUMA WARDANA', 'L', '-', '-', '', '11 RPL 1', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_nilai_siswa`
--
CREATE TABLE `v_nilai_siswa` (
`NL_ID` int(11)
,`SW_NIS` varchar(20)
,`DUDI_ID` int(11)
,`KTG_ID` int(1)
,`KTG_NAMA` varchar(20)
,`DK_ID` int(2)
,`DK_NAMA` varchar(100)
,`NILAI` int(1)
);

-- --------------------------------------------------------

--
-- Structure for view `v_nilai_siswa`
--
DROP TABLE IF EXISTS `v_nilai_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_nilai_siswa`  AS  select `prk_nilai`.`NL_ID` AS `NL_ID`,`prk_nilai`.`SW_NIS` AS `SW_NIS`,`prk_nilai`.`DUDI_ID` AS `DUDI_ID`,`prk_kategori`.`KTG_ID` AS `KTG_ID`,`prk_kategori`.`KTG_NAMA` AS `KTG_NAMA`,`prk_detail_kategori`.`DK_ID` AS `DK_ID`,`prk_detail_kategori`.`DK_NAMA` AS `DK_NAMA`,`prk_det_nilai`.`NILAI` AS `NILAI` from (((`prk_nilai` join `prk_det_nilai` on((`prk_nilai`.`NL_ID` = `prk_det_nilai`.`NL_ID`))) join `prk_detail_kategori` on((`prk_det_nilai`.`DK_ID` = `prk_detail_kategori`.`DK_ID`))) join `prk_kategori` on((`prk_detail_kategori`.`KTG_ID` = `prk_kategori`.`KTG_ID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prk_detail_kategori`
--
ALTER TABLE `prk_detail_kategori`
  ADD PRIMARY KEY (`DK_ID`);

--
-- Indexes for table `prk_dudi`
--
ALTER TABLE `prk_dudi`
  ADD PRIMARY KEY (`DUDI_ID`);

--
-- Indexes for table `prk_jurusan`
--
ALTER TABLE `prk_jurusan`
  ADD PRIMARY KEY (`JUR_ID`);

--
-- Indexes for table `prk_kategori`
--
ALTER TABLE `prk_kategori`
  ADD PRIMARY KEY (`KTG_ID`);

--
-- Indexes for table `prk_kelas_jurusan`
--
ALTER TABLE `prk_kelas_jurusan`
  ADD PRIMARY KEY (`JURKEL_ID`);

--
-- Indexes for table `prk_nilai`
--
ALTER TABLE `prk_nilai`
  ADD PRIMARY KEY (`NL_ID`);

--
-- Indexes for table `prk_pegawai`
--
ALTER TABLE `prk_pegawai`
  ADD PRIMARY KEY (`PGW_ID`);

--
-- Indexes for table `prk_siswa`
--
ALTER TABLE `prk_siswa`
  ADD PRIMARY KEY (`SW_NIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prk_detail_kategori`
--
ALTER TABLE `prk_detail_kategori`
  MODIFY `DK_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `prk_dudi`
--
ALTER TABLE `prk_dudi`
  MODIFY `DUDI_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prk_kategori`
--
ALTER TABLE `prk_kategori`
  MODIFY `KTG_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prk_nilai`
--
ALTER TABLE `prk_nilai`
  MODIFY `NL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prk_pegawai`
--
ALTER TABLE `prk_pegawai`
  MODIFY `PGW_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
