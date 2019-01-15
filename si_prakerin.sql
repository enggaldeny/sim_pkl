-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 11:18 AM
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
  `KTG_ID` int(2) NOT NULL,
  `DK_NAMA` varchar(100) NOT NULL,
  `BOBOT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_detail_kategori`
--

INSERT INTO `prk_detail_kategori` (`DK_ID`, `KTG_ID`, `DK_NAMA`, `BOBOT`) VALUES
(1, 1, 'Menyampaikan sesuatu berdasarkan keadaan yang sebenarnya', 25),
(2, 1, 'Tidak menutupi ksalahan yang terjadi', 25),
(3, 1, 'Tidak mecontek atau melihat data/pekerjaan orang lain', 25),
(4, 1, 'Mencantumkan sumber belajar dari yang dikutip/dipelajari', 25),
(5, 2, 'Pelaksanaan tugas piket secara teratur', 25),
(6, 2, 'Peran serta aktif dalam kegiatan diskusi kelompok', 25),
(7, 2, 'Mengajukan usul pemecahan masalah', 25),
(8, 2, 'Mengerjakan tugas sesuai yag ditugaskan', 25),
(9, 3, 'Tertib mengikuti instruksi', 25),
(10, 3, 'Mengerjakan tugas tepat waktu', 25),
(11, 3, 'Tidak melakukan kegiatan yang diminta', 25),
(12, 3, 'Tidak membuat kondisi kelas menjadi tidak kondusif', 25),
(13, 4, 'Berinteraksi degan teman secara ramah', 25),
(14, 4, 'Berkomunikasi dengan bahasa yang tidak menyinggung perasaan', 25),
(15, 4, 'Menggunakan bahasa tubuh yang bersahabatt', 25),
(16, 4, 'Berperilaku sopan', 25);

-- --------------------------------------------------------

--
-- Table structure for table `prk_det_nilai`
--

CREATE TABLE `prk_det_nilai` (
  `NL_ID` int(11) NOT NULL,
  `DK_ID` int(2) NOT NULL,
  `NILAI` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_det_nilai`
--

INSERT INTO `prk_det_nilai` (`NL_ID`, `DK_ID`, `NILAI`) VALUES
(1, 1, 25),
(1, 2, 25),
(1, 3, 25),
(1, 4, 0),
(1, 5, 25),
(1, 6, 25),
(1, 7, 25),
(1, 8, 25),
(1, 9, 25),
(1, 10, 25),
(1, 11, 25),
(1, 12, 0),
(1, 13, 25),
(1, 14, 0),
(1, 15, 0),
(1, 16, 25),
(2, 1, 25),
(2, 2, 25),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 25),
(2, 7, 25),
(2, 8, 0),
(2, 9, 25),
(2, 10, 0),
(2, 11, 0),
(2, 12, 0),
(2, 13, 0),
(2, 14, 0),
(2, 15, 25),
(2, 16, 25),
(3, 1, 25),
(3, 2, 25),
(3, 3, 25),
(3, 4, 0),
(3, 5, 0),
(3, 6, 25),
(3, 7, 25),
(3, 8, 25),
(3, 9, 25),
(3, 10, 0),
(3, 11, 0),
(3, 12, 25),
(3, 13, 25),
(3, 14, 25),
(3, 15, 25),
(3, 16, 0),
(3, 1, 25),
(3, 2, 25),
(3, 3, 25),
(3, 4, 0),
(3, 5, 25),
(3, 6, 25),
(3, 7, 25),
(3, 8, 0),
(3, 9, 0),
(3, 10, 25),
(3, 11, 25),
(3, 12, 0),
(3, 13, 25),
(3, 14, 25),
(3, 15, 25),
(3, 16, 0),
(4, 1, 25),
(4, 2, 25),
(4, 3, 25),
(4, 4, 0),
(4, 5, 0),
(4, 6, 25),
(4, 7, 25),
(4, 8, 25),
(4, 9, 0),
(4, 10, 0),
(4, 11, 25),
(4, 12, 25),
(4, 13, 25),
(4, 14, 25),
(4, 15, 25),
(4, 16, 0),
(5, 1, 25),
(5, 2, 25),
(5, 3, 0),
(5, 4, 0),
(5, 5, 0),
(5, 6, 25),
(5, 7, 25),
(5, 8, 0),
(5, 9, 0),
(5, 10, 0),
(5, 11, 25),
(5, 12, 25),
(5, 13, 0),
(5, 14, 0),
(5, 15, 25),
(5, 16, 25),
(6, 1, 25),
(6, 2, 25),
(6, 3, 0),
(6, 4, 0),
(6, 5, 0),
(6, 6, 0),
(6, 7, 25),
(6, 8, 25),
(6, 9, 25),
(6, 10, 25),
(6, 11, 0),
(6, 12, 0),
(6, 13, 25),
(6, 14, 25),
(6, 15, 25),
(6, 16, 0),
(7, 1, 25),
(7, 2, 25),
(7, 3, 25),
(7, 4, 0),
(7, 5, 0),
(7, 6, 25),
(7, 7, 25),
(7, 8, 25),
(7, 9, 25),
(7, 10, 25),
(7, 11, 25),
(7, 12, 0),
(7, 13, 25),
(7, 14, 25),
(7, 15, 0),
(7, 16, 0),
(8, 1, 25),
(8, 2, 25),
(8, 3, 25),
(8, 4, 0),
(8, 5, 25),
(8, 6, 25),
(8, 7, 25),
(8, 8, 25),
(8, 9, 25),
(8, 10, 25),
(8, 11, 25),
(8, 12, 25),
(8, 13, 25),
(8, 14, 25),
(8, 15, 0),
(8, 16, 0),
(9, 1, 25),
(9, 2, 25),
(9, 3, 25),
(9, 4, 0),
(9, 5, 25),
(9, 6, 25),
(9, 7, 0),
(9, 8, 25),
(9, 9, 25),
(9, 10, 25),
(9, 11, 25),
(9, 12, 0),
(9, 13, 0),
(9, 14, 0),
(9, 15, 0),
(9, 16, 25),
(10, 1, 25),
(10, 2, 25),
(10, 3, 25),
(10, 4, 25),
(10, 5, 25),
(10, 6, 25),
(10, 7, 25),
(10, 8, 25),
(10, 9, 25),
(10, 10, 25),
(10, 11, 25),
(10, 12, 25),
(10, 13, 25),
(10, 14, 25),
(10, 15, 0),
(10, 16, 25),
(11, 1, 25),
(11, 2, 25),
(11, 3, 25),
(11, 4, 0),
(11, 5, 25),
(11, 6, 25),
(11, 7, 25),
(11, 8, 0),
(11, 9, 25),
(11, 10, 0),
(11, 11, 25),
(11, 12, 25),
(11, 13, 0),
(11, 14, 25),
(11, 15, 25),
(11, 16, 0),
(12, 1, 25),
(12, 2, 25),
(12, 3, 25),
(12, 4, 25),
(12, 5, 25),
(12, 6, 25),
(12, 7, 0),
(12, 8, 25),
(12, 9, 25),
(12, 10, 25),
(12, 11, 25),
(12, 12, 25),
(12, 13, 25),
(12, 14, 25),
(12, 15, 25),
(12, 16, 25),
(13, 1, 25),
(13, 2, 0),
(13, 3, 0),
(13, 4, 25),
(13, 5, 0),
(13, 6, 0),
(13, 7, 0),
(13, 8, 0),
(13, 9, 0),
(13, 10, 25),
(13, 11, 25),
(13, 12, 25),
(13, 13, 0),
(13, 14, 0),
(13, 15, 25),
(13, 16, 0),
(14, 1, 25),
(14, 2, 25),
(14, 3, 25),
(14, 4, 0),
(14, 5, 0),
(14, 6, 25),
(14, 7, 25),
(14, 8, 25),
(14, 9, 0),
(14, 10, 0),
(14, 11, 25),
(14, 12, 25),
(14, 13, 0),
(14, 14, 0),
(14, 15, 25),
(14, 16, 25),
(15, 1, 25),
(15, 2, 0),
(15, 3, 0),
(15, 4, 0),
(15, 5, 25),
(15, 6, 0),
(15, 7, 0),
(15, 8, 0),
(15, 9, 25),
(15, 10, 0),
(15, 11, 0),
(15, 12, 0),
(15, 13, 25),
(15, 14, 0),
(15, 15, 0),
(15, 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prk_dudi`
--

CREATE TABLE `prk_dudi` (
  `DUDI_ID` int(5) NOT NULL,
  `DUDI_NAMA` varchar(30) NOT NULL,
  `DUDI_PIMPINAN` varchar(30) NOT NULL,
  `DUDI_WILAYAH` varchar(40) NOT NULL,
  `DUDI_ALAMAT` varchar(50) NOT NULL,
  `DUDI_TELEPON` varchar(12) NOT NULL,
  `DUDI_EMAIL` varchar(30) NOT NULL,
  `DUDI_USERNAME` varchar(12) NOT NULL,
  `DUDI_PASSWORD` varchar(100) NOT NULL,
  `PGW_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_dudi`
--

INSERT INTO `prk_dudi` (`DUDI_ID`, `DUDI_NAMA`, `DUDI_PIMPINAN`, `DUDI_WILAYAH`, `DUDI_ALAMAT`, `DUDI_TELEPON`, `DUDI_EMAIL`, `DUDI_USERNAME`, `DUDI_PASSWORD`, `PGW_ID`) VALUES
(1, 'KPTR Semboro', '-', 'Semboro', 'Semboro', '-', 'kptr@gmail.com', 'KPTR', '4deaf32950d5dd59e010118e6abe3731', 1),
(2, 'Semboro Mini Market', '-', 'Semboro', 'Jl.Yos Sudarso 127 Semboro', '-', '-', 'minimarket', 'e1cd5ae25688adcd2a20ab9c924199ac', 3),
(3, 'KSP Mitra Usaha Mandiri', '-', 'Semboro', 'Jl. Kamardikan Ds. Sidomekar Semboro', '-', '-', 'ksp', 'a3d65f2e6273b9874a9d045b31ba1845', 4),
(4, 'PDPM Kec.Semboro', '-', 'Semboro', 'Jl. Kamardikan G.VI Kec Semboro', '-', '-', 'pdpm', '9fe02326b51727dd907ce4d47f121f01', 2),
(5, 'Hypermart Lippo Plaza', '-', 'Jember', 'Jl.Gajah Mada No 175 Jember', '-', '-', 'lippo', '4daf4685fcb1a8a07cb0b65b3d7e99b0', 3),
(18, 'CV Dafidea Technocraft', 'Misbahul Hasan', 'Jember', 'Perum Mastrip Blok P 11 Sumbersari Jember', '0871819919', 'dafidea@gmail.com', 'dafidea', '82e409107c6a6eb8c17fa14d426b3954', 6),
(19, 'Mascitra.com', 'Mas Citra', 'Jember', 'Jember', '089191999999', 'awa@gmail.com', 'mascitra', '0238be674042aa7f625be4206615c497', NULL);

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
(1, 'KEJUJURAN'),
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
('11 AKL 1', 'AKL'),
('11 AKL 2', 'AKL'),
('11 AKL 3', 'AKL'),
('11 BDP 1', 'BDP'),
('11 BDP 2', 'BDP'),
('11 BDP 3', 'BDP'),
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
  `NL_TGL` datetime NOT NULL,
  `NL_NIS` varchar(20) NOT NULL,
  `NL_TAHUN` int(4) NOT NULL,
  `NL_JUJUR` int(1) NOT NULL,
  `NL_TGGJAWAB` int(11) NOT NULL,
  `NL_DISIPLIN` int(11) NOT NULL,
  `NL_SANTUN` int(11) NOT NULL,
  `NL_HASIL` int(11) NOT NULL,
  `NL_KETERANGAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_nilai`
--

INSERT INTO `prk_nilai` (`NL_ID`, `NL_TGL`, `NL_NIS`, `NL_TAHUN`, `NL_JUJUR`, `NL_TGGJAWAB`, `NL_DISIPLIN`, `NL_SANTUN`, `NL_HASIL`, `NL_KETERANGAN`) VALUES
(1, '2018-12-21 10:25:27', '1', 2018, 75, 100, 75, 50, 75, 'Abdul Qodir memiliki potensi yang sangat besar menjadi programmer karena memiliki logika yang tajam.'),
(2, '2018-12-26 13:38:19', '990201308211002', 2018, 50, 50, 25, 50, 50, ''),
(3, '2018-12-26 14:13:56', '990201308211003', 2018, 75, 75, 50, 75, 75, ''),
(4, '2018-12-29 10:02:28', '12345677890023', 2018, 75, 75, 50, 75, 75, ''),
(5, '2018-12-29 10:02:43', '12345677890024', 2018, 50, 50, 50, 50, 50, ''),
(6, '2018-12-29 10:04:31', '12345677890020', 2018, 50, 50, 50, 75, 50, ''),
(7, '2018-12-29 10:04:50', '12345677890021', 2018, 75, 75, 75, 50, 75, ''),
(8, '2018-12-29 10:05:35', '12345677890026', 2018, 75, 100, 100, 50, 100, ''),
(9, '2018-12-29 13:16:48', '12345677890028', 2018, 75, 75, 75, 25, 75, ''),
(10, '2018-12-30 14:50:44', '990201308211001', 2018, 100, 100, 100, 75, 100, ''),
(11, '2018-12-30 14:51:34', '12345677890027', 2018, 75, 75, 75, 50, 75, ''),
(12, '2018-12-30 14:51:57', '12345677890030', 2018, 100, 75, 100, 100, 100, ''),
(13, '2019-01-11 05:11:51', '12345677890040', 2018, 50, 0, 75, 25, 75, ''),
(14, '2019-01-13 17:13:30', '12345677890041', 2018, 75, 75, 50, 50, 75, 'hashahah'),
(15, '2019-01-13 22:39:51', '12345677890042', 2018, 25, 25, 25, 25, 25, 'mANTAP');

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
(1, '19234500100103998712', 'Dewi Qurotul A''yun', 'Semboro, Jember', '081098211005', 'dewi_qur', '202cb962ac59075b964b07152d234b70', 1, 1),
(2, '-', 'Surita, S.Pd', 'Pondok Jeruk, Tanggul', '-', '-', '-', 0, 1),
(3, '-', 'Siti Musyarofah, Sn', 'Kebonsari - Jember', '-', '-', '-', 0, 1),
(4, '-', 'Novita Elok Permatasari, S.Pd', 'Tanggul Kulon - Tanggul', '-', '-', '-', 0, 1),
(5, '-', 'M. Nur Hamid, S.Kom', 'Klatakaan - Tanggul Wetan', '-', '-', '-', 0, 1),
(6, '-', 'Ike Indriyani, S.Pd', 'Tanggul Kulon - Tanggul', '-', '-', '-', 0, 0);

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
  `DUDI_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prk_siswa`
--

INSERT INTO `prk_siswa` (`SW_NIS`, `SW_NAMA`, `SW_JK`, `SW_ALAMAT`, `SW_HP`, `SW_HP_ORTU`, `JURKEL_ID`, `DUDI_ID`) VALUES
('1', 'ABDUL QODIR', 'L', '-', '-', '-', '11 MM 1', 1),
('12345677890020', 'Ade Aprilia', 'L', 'Bangsalsari', '-', '-', '11 MM 1', NULL),
('12345677890021', 'Adib Nabhan Musyaffa`', 'L', 'Semboro', '-', '-', '11 MM 1', NULL),
('12345677890022', 'Achmad Ricky', 'L', 'Umbulsari', '-', '-', '11 BDP 1', 3),
('12345677890023', 'Devita Agustin', 'P', 'Sumberbaru', '-', '-', '11 BDP 1', 5),
('12345677890024', 'Elsa Ainur Rofiqoh', 'P', 'Tanggul', '-', '-', '11 BDP 1', 5),
('12345677890025', 'Lingga Bagas Kara', 'L', 'Tanggul', '-', '-', '11 OTKP ', 3),
('12345677890026', 'Ilmi Rizki Faizati', 'P', 'Sumberbaru', '-', '-', '11 OTKP ', NULL),
('12345677890027', 'Khoiril Mala', 'P', 'Umbulsari', '-', '-', '11 OTKP ', 4),
('12345677890028', 'Ira Puspita Sari', 'P', 'Semboro', '-', '-', '11 AK 1', 3),
('12345677890029', 'Lia Sifa`ul  Ahada', 'P', 'Tanggul', '-', '-', '11 AK 1', NULL),
('12345677890030', 'M. Yongki Pramana', 'L', 'Bangsalsari', '-', '-', '11 AK 1', 4),
('12345677890040', 'Ahmad Saifur Rohman', 'L', 'Sukorejo - Bangsalsari', '-', '-', '11 RPL 1', 18),
('12345677890041', 'Ahmad Faisal', 'L', 'Gambirono - Bangsalsari', '-', '-', '11 RPL 1', 18),
('12345677890042', 'Edi Supriyono', 'L', 'Sumberbaru', '-', '-', '11 MM 1', 18),
('12345677890088191', 'Siswa BDP', 'P', 'SBGAJJ', '0878919', '01999010', '11 BDP 2', NULL),
('990201308211001', 'ABDILLAH ARIFIN', 'L', '-', '-', '', '11 RPL 1', 1),
('990201308211002', 'ACHMAD ROFIQ HAMDANI', 'L', '-', '-', '', '11 RPL 1', 1),
('990201308211003', 'ADAM KUSUMA WARDANA', 'L', '-', '-', '', '11 RPL 1', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kategori`
--
CREATE TABLE `v_kategori` (
`KTG_ID` int(1)
,`KTG_NAMA` varchar(20)
,`DK_ID` int(2)
,`DK_NAMA` varchar(100)
,`BOBOT` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_nilai`
--
CREATE TABLE `v_nilai` (
`DUDI_ID` int(5)
,`DUDI_NAMA` varchar(30)
,`DUDI_ALAMAT` varchar(50)
,`PGW_NAMA` varchar(30)
,`NL_ID` int(11)
,`NL_TAHUN` int(4)
,`NL_JUJUR` int(1)
,`NL_TGGJAWAB` int(11)
,`NL_DISIPLIN` int(11)
,`NL_SANTUN` int(11)
,`NL_HASIL` int(11)
,`NL_KETERANGAN` varchar(100)
,`SW_NIS` varchar(20)
,`SW_NAMA` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `v_kategori`
--
DROP TABLE IF EXISTS `v_kategori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kategori`  AS  select `prk_kategori`.`KTG_ID` AS `KTG_ID`,`prk_kategori`.`KTG_NAMA` AS `KTG_NAMA`,`prk_detail_kategori`.`DK_ID` AS `DK_ID`,`prk_detail_kategori`.`DK_NAMA` AS `DK_NAMA`,`prk_detail_kategori`.`BOBOT` AS `BOBOT` from (`prk_kategori` join `prk_detail_kategori` on((`prk_kategori`.`KTG_ID` = `prk_detail_kategori`.`KTG_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_nilai`
--
DROP TABLE IF EXISTS `v_nilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_nilai`  AS  select `prk_dudi`.`DUDI_ID` AS `DUDI_ID`,`prk_dudi`.`DUDI_NAMA` AS `DUDI_NAMA`,`prk_dudi`.`DUDI_ALAMAT` AS `DUDI_ALAMAT`,`prk_pegawai`.`PGW_NAMA` AS `PGW_NAMA`,`prk_nilai`.`NL_ID` AS `NL_ID`,`prk_nilai`.`NL_TAHUN` AS `NL_TAHUN`,`prk_nilai`.`NL_JUJUR` AS `NL_JUJUR`,`prk_nilai`.`NL_TGGJAWAB` AS `NL_TGGJAWAB`,`prk_nilai`.`NL_DISIPLIN` AS `NL_DISIPLIN`,`prk_nilai`.`NL_SANTUN` AS `NL_SANTUN`,`prk_nilai`.`NL_HASIL` AS `NL_HASIL`,`prk_nilai`.`NL_KETERANGAN` AS `NL_KETERANGAN`,`prk_siswa`.`SW_NIS` AS `SW_NIS`,`prk_siswa`.`SW_NAMA` AS `SW_NAMA` from (((`prk_nilai` join `prk_siswa` on((`prk_nilai`.`NL_NIS` = `prk_siswa`.`SW_NIS`))) join `prk_dudi` on((`prk_siswa`.`DUDI_ID` = `prk_dudi`.`DUDI_ID`))) join `prk_pegawai` on((`prk_dudi`.`PGW_ID` = `prk_dudi`.`PGW_ID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prk_detail_kategori`
--
ALTER TABLE `prk_detail_kategori`
  ADD PRIMARY KEY (`DK_ID`),
  ADD KEY `FK_KTG` (`KTG_ID`);

--
-- Indexes for table `prk_det_nilai`
--
ALTER TABLE `prk_det_nilai`
  ADD KEY `FK_NL` (`NL_ID`),
  ADD KEY `FK_DK` (`DK_ID`);

--
-- Indexes for table `prk_dudi`
--
ALTER TABLE `prk_dudi`
  ADD PRIMARY KEY (`DUDI_ID`),
  ADD KEY `FK_PGW` (`PGW_ID`) USING BTREE;

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
  ADD PRIMARY KEY (`JURKEL_ID`),
  ADD KEY `FK_JUR` (`JUR_ID`);

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
  ADD PRIMARY KEY (`SW_NIS`),
  ADD KEY `FK_DUDI` (`DUDI_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prk_detail_kategori`
--
ALTER TABLE `prk_detail_kategori`
  MODIFY `DK_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `prk_dudi`
--
ALTER TABLE `prk_dudi`
  MODIFY `DUDI_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `prk_kategori`
--
ALTER TABLE `prk_kategori`
  MODIFY `KTG_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `prk_nilai`
--
ALTER TABLE `prk_nilai`
  MODIFY `NL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `prk_pegawai`
--
ALTER TABLE `prk_pegawai`
  MODIFY `PGW_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `prk_detail_kategori`
--
ALTER TABLE `prk_detail_kategori`
  ADD CONSTRAINT `prk_detail_kategori_ibfk_1` FOREIGN KEY (`KTG_ID`) REFERENCES `prk_kategori` (`KTG_ID`);

--
-- Constraints for table `prk_det_nilai`
--
ALTER TABLE `prk_det_nilai`
  ADD CONSTRAINT `FK_DK` FOREIGN KEY (`DK_ID`) REFERENCES `prk_detail_kategori` (`DK_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NL` FOREIGN KEY (`NL_ID`) REFERENCES `prk_nilai` (`NL_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `prk_dudi`
--
ALTER TABLE `prk_dudi`
  ADD CONSTRAINT `FK_PGW` FOREIGN KEY (`PGW_ID`) REFERENCES `prk_pegawai` (`PGW_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `prk_kelas_jurusan`
--
ALTER TABLE `prk_kelas_jurusan`
  ADD CONSTRAINT `FK_JUR` FOREIGN KEY (`JUR_ID`) REFERENCES `prk_jurusan` (`JUR_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `prk_siswa`
--
ALTER TABLE `prk_siswa`
  ADD CONSTRAINT `FK_DUDI` FOREIGN KEY (`DUDI_ID`) REFERENCES `prk_dudi` (`DUDI_ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
