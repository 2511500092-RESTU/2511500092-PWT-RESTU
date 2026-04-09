-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2026 at 06:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_guru`
--

CREATE TABLE `tabel_guru` (
  `Kd_guru` varchar(5) NOT NULL,
  `Id_user` int NOT NULL,
  `Nm_guru` varchar(50) NOT NULL,
  `Jenkel` varchar(10) NOT NULL,
  `Pend_terakhir` varchar(20) NOT NULL,
  `Hp` varchar(13) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_guru`
--

INSERT INTO `tabel_guru` (`Kd_guru`, `Id_user`, `Nm_guru`, `Jenkel`, `Pend_terakhir`, `Hp`, `Alamat`) VALUES
('ga23', 123, 'dras', 'ada', 's2', '08362621', 'pkp');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `Id_kelas` int NOT NULL,
  `Nm_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_kelas`
--

INSERT INTO `tabel_kelas` (`Id_kelas`, `Nm_kelas`) VALUES
(1001, 'mtks'),
(1002, 'mha');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mapel`
--

CREATE TABLE `tabel_mapel` (
  `Kd_mapel` varchar(5) NOT NULL,
  `Nm_mapel` varchar(35) NOT NULL,
  `Kkm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_mapel`
--

INSERT INTO `tabel_mapel` (`Kd_mapel`, `Nm_mapel`, `Kkm`) VALUES
('M-001', 'MTU', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `Nis` varchar(10) NOT NULL,
  `Id_user` int NOT NULL,
  `Nm_siswa` varchar(50) NOT NULL,
  `Jenkel` varchar(10) NOT NULL,
  `Hp` varchar(13) NOT NULL,
  `Id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`Nis`, `Id_user`, `Nm_siswa`, `Jenkel`, `Hp`, `Id_kelas`) VALUES
('2511500077', 123, 'afdal', 'ada', '0845634535', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_users`
--

CREATE TABLE `tabel_users` (
  `Id_user` int NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` enum('admin','siswa','guru','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_users`
--

INSERT INTO `tabel_users` (`Id_user`, `Username`, `Password`, `Role`) VALUES
(1, 'RESTU', 'RESTU123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
  ADD PRIMARY KEY (`Kd_guru`);

--
-- Indexes for table `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD PRIMARY KEY (`Id_kelas`);

--
-- Indexes for table `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  ADD PRIMARY KEY (`Kd_mapel`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`Nis`);

--
-- Indexes for table `tabel_users`
--
ALTER TABLE `tabel_users`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_users`
--
ALTER TABLE `tabel_users`
  MODIFY `Id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
