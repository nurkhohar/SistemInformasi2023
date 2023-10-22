-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 05:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_informasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nidn` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama`, `nidn`) VALUES
(1, 'Prof. Ir. Muhammad Nizam, S.T., M.T., Ph.D., IPM', '	0020077004'),
(2, 'Prof. Josaphat Tetuko Sri Sumantyo, B.Eng.,M.Eng., Ph.D.', '8909810021'),
(3, 'Dr. Ir. Miftahul Anwar, S.Si., M.Eng.', '0624038303'),
(4, 'Ir. Meiyanto Eko Sulistyo, S.T., M.Eng.', '	0013057705'),
(5, 'Ir. Chico Hermanu Brillianto Apribowo, S.T., M.Eng.', '0016048802'),
(6, 'Ir. Feri Adriyanto, S.Pd., M.Si., Ph.D., IPU, ASEAN. Eng.', '0016016804'),
(7, 'Ir. Muhammad Hamka Ibrahim, S.T., M.Eng., IPM, ASEAN.Eng.', '0029128804'),
(8, 'Ir. Subuh Pramono, S.T., M.T., IPM', '0009068101'),
(9, 'Ir. Hari Maghfiroh, S.T., M.Eng, M.Sc.', '0013049101'),
(10, 'Ir. Sutrisno, S.T., M.Sc., Ph.D.', '0006058705'),
(11, 'Agus Ramelan, S.Pd., M.T', '0015039201'),
(12, 'Ir. Joko Slamet Saputro, S.Pd., M.T.', '0024048904'),
(13, 'Dr. Eng. Ir. Faisal Rahutomo, S.T., M.Kom.', '0016117704'),
(14, 'Joko Hariyono, S.T., M.Eng., Ph.D.', '0023097609'),
(15, 'Dr. Warindi, S.T., M.Eng.', '0002027009'),
(16, 'Dr. Mufti Reza Aulia Putra, S.T., M.T.', '0016059702'),
(17, 'Dr. Ir. Augustinus Sujono, M.T.', '8819040017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pa` varchar(100) NOT NULL,
  `E301` float DEFAULT NULL,
  `E302` float DEFAULT NULL,
  `E303` float DEFAULT NULL,
  `E304` float DEFAULT NULL,
  `E305` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nim`, `nama`, `pa`, `E301`, `E302`, `E303`, `E304`, `E305`) VALUES
(1, 'I0721005', 'AMIN MA\'RUF', '', NULL, NULL, NULL, NULL, NULL),
(2, 'I0721011', 'AZRI NAZHIIF MUSYAFFA\'', '', NULL, NULL, NULL, NULL, NULL),
(3, 'I0721019', 'Fachrizal Ihsan Anugerah Akbar', '', NULL, NULL, NULL, NULL, NULL),
(4, 'I0721020', 'FADHIL YANUAR', '', NULL, NULL, NULL, NULL, NULL),
(5, 'I0721021', 'FAKHRI MUHAMMAD AZZAM', '', NULL, NULL, NULL, NULL, NULL),
(6, 'I0721024', 'GABRIELLA CARMEN WIBOWO', '', NULL, NULL, NULL, NULL, NULL),
(7, 'I0721026', 'GHAZY AMMAR FARRAS', '', NULL, NULL, NULL, NULL, NULL),
(8, 'I0721027', 'Gilang Fajar Ramadhan', '', NULL, NULL, NULL, NULL, NULL),
(9, 'I0721028', 'Guntur Naufal Razaqa', '', NULL, NULL, NULL, NULL, NULL),
(10, 'I0721031', 'IGNASIUS YORIS DONIARTO', '', NULL, NULL, NULL, NULL, NULL),
(11, 'I0721034', 'INSAN FADHIL MAULANA', '', NULL, NULL, NULL, NULL, NULL),
(12, 'I0721039', 'MAULIDA NABILAH BADRIAH', '', NULL, NULL, NULL, NULL, NULL),
(13, 'I0721040', 'MAURA SHELOMY ANDAJANI', '', NULL, NULL, NULL, NULL, NULL),
(14, 'I0721042', 'Muhamad Nur Khohar', '', NULL, NULL, NULL, NULL, NULL),
(15, 'I0721043', 'MUHAMMAD AL-HABIB HASAN', '', NULL, NULL, NULL, NULL, NULL),
(16, 'I0721044', 'MUHAMMAD ALIF RIZKY NAUFAL', '', NULL, NULL, NULL, NULL, NULL),
(17, 'I0721049', 'Muhammad Farid Hakim', '', NULL, NULL, NULL, NULL, NULL),
(18, 'I0721056', 'Nury Rachma Fitriani', '', NULL, NULL, NULL, NULL, NULL),
(19, 'I0721062', 'RAHMAT ROHMANI', '', NULL, NULL, NULL, NULL, NULL),
(20, 'I0721066', 'REIHAN DHIMAS PUTRA HENDA', '', NULL, NULL, NULL, NULL, NULL),
(21, 'I0721069', 'ROIHAN MAJID PITOYO', '', NULL, NULL, NULL, NULL, NULL),
(22, 'I0721072', 'SAID NOVDWI RAMADHAN', '', NULL, NULL, NULL, NULL, NULL),
(23, 'I0721073', 'SHOFFIN MUHAMMAD ZAKY', '', NULL, NULL, NULL, NULL, NULL),
(24, 'I0721077', 'WAHYU HERIYANTO', '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `kode_mk` char(25) NOT NULL,
  `nama_mk` char(100) DEFAULT NULL,
  `sks` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`kode_mk`, `nama_mk`, `sks`) VALUES
('EE3501-19', 'ANTENA DAN PROPAGASI', '3'),
('EE3502-19', 'SISTEM TERTANAM DAN PERIFERAL', '3'),
('EE3503-19', 'PENGOLAHAN ISYARAT DIGITAL', '3'),
('EE3504-19', 'ALGORITMA DAN STRUKTUR DATA', '2'),
('EE3505-19', 'SISTEM INFORMASI', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
