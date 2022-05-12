-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 02:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `IDCamp` int(5) NOT NULL,
  `NamaCamp` varchar(30) DEFAULT NULL,
  `Lokasi` text DEFAULT NULL,
  `MapsLocation` text DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`IDCamp`, `NamaCamp`, `Lokasi`, `MapsLocation`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 'Camp 1', 'Melati putih', NULL, '2022-05-08 22:38:44', '2022-05-09 04:57:29'),
(2, 'Camp 2', 'kaktus', NULL, '2022-05-08 22:44:52', '2022-05-09 04:57:45'),
(3, 'Camp 3', 'bebas', NULL, '2022-05-09 12:01:38', '2022-05-09 04:57:54'),
(4, 'Camp 4', 'karang', NULL, '2022-05-09 12:01:57', '2022-05-09 04:58:09'),
(5, 'Camp 5', 'kolam buaya', NULL, '2022-05-09 12:02:37', '2022-05-09 04:58:21'),
(6, 'Camp 6', 'lesehan', NULL, '2022-05-09 12:58:53', '2022-05-09 04:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `item_paket`
--

CREATE TABLE `item_paket` (
  `IDItemPaket` int(5) NOT NULL,
  `IDPaket` int(5) DEFAULT NULL,
  `NamaItem` varchar(50) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_paket`
--

INSERT INTO `item_paket` (`IDItemPaket`, `IDPaket`, `NamaItem`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 1, 'All Facilities OF Camp And 3 Reguler Classes', '2022-05-08 20:55:38', '2022-05-08 13:00:17'),
(2, 2, 'All Facilities OF Camp And 2 Reguler Classes', '2022-05-08 20:56:35', '2022-05-08 13:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_05_10_110618_create_camp_table', 0),
(2, '2022_05_10_110618_create_item_paket_table', 0),
(3, '2022_05_10_110618_create_paket_table', 0),
(4, '2022_05_10_110618_create_pelajar_table', 0),
(5, '2022_05_10_110618_create_pengguna_table', 0),
(6, '2022_05_10_110618_create_program_table', 0),
(7, '2022_05_10_110618_create_riwayat_program_table', 0),
(8, '2022_05_10_110618_create_ruangan_camp_table', 0),
(9, '2022_05_10_110618_create_tutor_table', 0),
(10, '2022_05_10_110619_add_foreign_keys_to_item_paket_table', 0),
(11, '2022_05_10_110619_add_foreign_keys_to_pelajar_table', 0),
(12, '2022_05_10_110619_add_foreign_keys_to_riwayat_program_table', 0),
(13, '2022_05_10_110619_add_foreign_keys_to_ruangan_camp_table', 0),
(14, '2022_05_10_110619_add_foreign_keys_to_tutor_table', 0),
(15, '2022_05_12_112151_create_camp_table', 0),
(16, '2022_05_12_112151_create_item_paket_table', 0),
(17, '2022_05_12_112151_create_paket_table', 0),
(18, '2022_05_12_112151_create_pelajar_table', 0),
(19, '2022_05_12_112151_create_pengguna_table', 0),
(20, '2022_05_12_112151_create_program_table', 0),
(21, '2022_05_12_112151_create_riwayat_program_table', 0),
(22, '2022_05_12_112151_create_ruangan_camp_table', 0),
(23, '2022_05_12_112151_create_tutor_table', 0),
(24, '2022_05_12_112152_add_foreign_keys_to_item_paket_table', 0),
(25, '2022_05_12_112152_add_foreign_keys_to_pelajar_table', 0),
(26, '2022_05_12_112152_add_foreign_keys_to_riwayat_program_table', 0),
(27, '2022_05_12_112152_add_foreign_keys_to_ruangan_camp_table', 0),
(28, '2022_05_12_112152_add_foreign_keys_to_tutor_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `IDPaket` int(5) NOT NULL,
  `NamaPaket` varchar(50) DEFAULT NULL,
  `Harga` int(5) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`IDPaket`, `NamaPaket`, `Harga`, `created_at`, `updated_at`) VALUES
(1, 'Paket Complete 1 Bulan', 999000, '2022-05-08 20:52:17', '2022-05-08 12:52:39'),
(2, 'Paket Complete 2 Minggu', 700000, '2022-05-08 20:52:17', '2022-05-08 12:53:04'),
(10, 'Paket Complete 1 Bulan', NULL, '2022-05-11 09:20:10', '2022-05-11 01:20:10'),
(11, 'Paket Complete 1 Bulan', NULL, '2022-05-11 09:21:54', '2022-05-11 01:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `ID` int(5) NOT NULL,
  `KodePelajar` varchar(20) DEFAULT NULL,
  `NamaPelajar` varchar(100) DEFAULT NULL,
  `JenisKelamin` enum('L','P') DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `TempatLahir` varchar(50) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `NoTelpon` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PendidikanTerakhir` varchar(20) DEFAULT NULL,
  `NamaAyah` varchar(50) DEFAULT NULL,
  `NamaIbu` varchar(50) DEFAULT NULL,
  `KontakDarurat` varchar(20) DEFAULT NULL,
  `HubunganDenganKontak` varchar(20) DEFAULT NULL,
  `RencanaDatang` date DEFAULT NULL,
  `IDPaketDiambil` int(5) DEFAULT NULL,
  `IDRuanganCamp` int(5) DEFAULT NULL,
  `IDCamp` int(5) NOT NULL,
  `DurasiProgram` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`ID`, `KodePelajar`, `NamaPelajar`, `JenisKelamin`, `Alamat`, `TempatLahir`, `TanggalLahir`, `NoTelpon`, `Email`, `PendidikanTerakhir`, `NamaAyah`, `NamaIbu`, `KontakDarurat`, `HubunganDenganKontak`, `RencanaDatang`, `IDPaketDiambil`, `IDRuanganCamp`, `IDCamp`, `DurasiProgram`, `created_at`, `updated_at`) VALUES
(15, '15', 'Izan', 'L', 'Pringgasela', 'Pringgasela', NULL, '081993270246', 'ijan@gmail.com', NULL, NULL, NULL, NULL, NULL, '2022-05-18', 2, 1, 1, '2', '2022-05-12 11:41:20', '2022-05-12 03:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IDPengguna` int(5) NOT NULL,
  `NamaLengkap` varchar(100) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Level` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`IDPengguna`, `NamaLengkap`, `Username`, `Password`, `Level`, `created_at`, `updated_at`) VALUES
(1, 'suyatna hafiz', 'hafiz77', '1234567890', NULL, '2022-05-09 12:16:27', '2022-05-09 04:16:27'),
(15, 'Izan', 'ijancok', '$2y$10$AFuC9YxJ2wsZpEZ8POxAh.Zc2dmm7P2vMrmdRH2j3PhsqR5osYKhS', 'Officer', '2022-05-12 11:41:20', '2022-05-12 03:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `IDProgram` int(5) NOT NULL,
  `NamaProgram` varchar(100) DEFAULT NULL,
  `Durasi` varchar(20) DEFAULT NULL,
  `Harga` int(5) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`IDProgram`, `NamaProgram`, `Durasi`, `Harga`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 'Basic Grammar For Speaking', '2 Minggu', 300000, '2022-05-08 00:00:00', '2022-05-08 12:03:42'),
(2, 'Speaking 1', '2 Minggu', 300000, '2022-05-08 20:09:02', '2022-05-08 12:09:02'),
(3, 'Speaking 2', '2 Minggu', 300000, '2022-05-08 20:14:31', '2022-05-08 12:14:31'),
(4, 'Listen & Talk', '2 Minggu', 300000, '2022-05-08 20:14:31', '2022-05-08 12:16:16'),
(5, 'Step One', '1 Bulan', 300000, '2022-05-08 20:14:31', '2022-05-08 12:14:31'),
(6, 'Step Two', '1 Bulan', 300000, '2022-05-08 20:14:31', '2022-05-08 12:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_program`
--

CREATE TABLE `riwayat_program` (
  `IDRiwayat` int(5) NOT NULL,
  `KodePelajar` varchar(10) DEFAULT NULL,
  `Periode` varchar(20) DEFAULT NULL,
  `IDProgram` int(5) DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `Sertifikat` enum('online','offline') DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IDPengguna` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_program`
--

INSERT INTO `riwayat_program` (`IDRiwayat`, `KodePelajar`, `Periode`, `IDProgram`, `Status`, `Sertifikat`, `CreatedAt`, `UpdatedAt`, `IDPengguna`) VALUES
(1, '01', NULL, 1, NULL, 'online', '2022-05-08 22:42:46', '2022-05-08 14:42:46', NULL),
(2, '01', NULL, 2, NULL, 'offline', '2022-05-09 12:14:26', '2022-05-09 04:14:26', NULL),
(3, '02', NULL, 3, NULL, 'offline', '2022-05-09 12:14:44', '2022-05-09 04:14:44', NULL),
(4, '03', NULL, 4, NULL, 'online', '2022-05-09 12:14:58', '2022-05-09 04:14:58', NULL),
(5, '04', NULL, 5, NULL, 'online', '2022-05-09 12:15:14', '2022-05-09 04:15:14', NULL),
(6, '05', NULL, 6, NULL, 'offline', '2022-05-09 12:15:30', '2022-05-09 04:15:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan_camp`
--

CREATE TABLE `ruangan_camp` (
  `IDRuanganCamp` int(5) NOT NULL,
  `NamaRuangan` varchar(50) DEFAULT NULL,
  `IDCamp` int(5) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan_camp`
--

INSERT INTO `ruangan_camp` (`IDRuanganCamp`, `NamaRuangan`, `IDCamp`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 'HARUM 1', 1, '2022-05-08 22:43:18', '2022-05-12 10:07:03'),
(2, 'HARUM 2', 2, '2022-05-09 12:06:00', '2022-05-12 10:07:09'),
(3, 'HARUM 3', 3, '2022-05-09 12:06:08', '2022-05-12 10:07:15'),
(4, 'HARUM 4', 4, '2022-05-09 12:06:16', '2022-05-12 10:07:20'),
(5, 'HARUM 5', 5, '2022-05-09 12:06:24', '2022-05-12 10:07:25'),
(6, 'HARUM 6', 6, '2022-05-09 12:59:37', '2022-05-12 10:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `IDTutor` int(5) NOT NULL,
  `NamaTutor` varchar(100) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `Photo` text DEFAULT NULL,
  `NoWA` varchar(20) DEFAULT NULL,
  `Email` text NOT NULL,
  `IDCamp` int(5) NOT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp(),
  `UpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`IDTutor`, `NamaTutor`, `Alamat`, `Photo`, `NoWA`, `Email`, `IDCamp`, `CreatedAt`, `UpdatedAt`) VALUES
(1, 'Ijeng', 'Cengok', NULL, '87659876554', 'ijeng@gmail.com', 1, '2022-05-08 20:43:08', '2022-05-09 05:17:46'),
(2, 'Erwin', 'Pandu', NULL, '87659876554', 'Erwin@gmail.com', 2, '2022-05-08 20:43:08', '2022-05-09 05:17:46'),
(3, 'Wibu', 'Javanes', NULL, '87659876554', 'Wibu@gmail.com', 3, '2022-05-08 20:43:08', '2022-05-09 05:17:46'),
(4, 'Wibu2', 'Javan', NULL, '87659876554', 'Wibu2@gmail.com', 4, '2022-05-08 20:43:08', '2022-05-09 05:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`IDCamp`);

--
-- Indexes for table `item_paket`
--
ALTER TABLE `item_paket`
  ADD PRIMARY KEY (`IDItemPaket`),
  ADD KEY `IDPaket` (`IDPaket`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`IDPaket`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `KodePelajar` (`KodePelajar`),
  ADD KEY `IDRuanganCamp` (`IDRuanganCamp`),
  ADD KEY `IDPaketDiambil` (`IDPaketDiambil`),
  ADD KEY `IDCamp` (`IDCamp`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IDPengguna`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`IDProgram`);

--
-- Indexes for table `riwayat_program`
--
ALTER TABLE `riwayat_program`
  ADD PRIMARY KEY (`IDRiwayat`),
  ADD KEY `KodePelajar` (`KodePelajar`),
  ADD KEY `IDProgram` (`IDProgram`),
  ADD KEY `IDPengguna` (`IDPengguna`);

--
-- Indexes for table `ruangan_camp`
--
ALTER TABLE `ruangan_camp`
  ADD PRIMARY KEY (`IDRuanganCamp`),
  ADD KEY `IDCamp` (`IDCamp`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`IDTutor`),
  ADD KEY `IDCamp` (`IDCamp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `IDCamp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item_paket`
--
ALTER TABLE `item_paket`
  MODIFY `IDItemPaket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `IDPaket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IDPengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `IDProgram` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `riwayat_program`
--
ALTER TABLE `riwayat_program`
  MODIFY `IDRiwayat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ruangan_camp`
--
ALTER TABLE `ruangan_camp`
  MODIFY `IDRuanganCamp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `IDTutor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_paket`
--
ALTER TABLE `item_paket`
  ADD CONSTRAINT `item_paket_ibfk_1` FOREIGN KEY (`IDPaket`) REFERENCES `paket` (`IDPaket`) ON DELETE CASCADE;

--
-- Constraints for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_ibfk_2` FOREIGN KEY (`IDRuanganCamp`) REFERENCES `ruangan_camp` (`IDRuanganCamp`),
  ADD CONSTRAINT `pelajar_ibfk_3` FOREIGN KEY (`IDPaketDiambil`) REFERENCES `paket` (`IDPaket`) ON DELETE CASCADE,
  ADD CONSTRAINT `pelajar_ibfk_4` FOREIGN KEY (`IDCamp`) REFERENCES `camp` (`IDCamp`);

--
-- Constraints for table `riwayat_program`
--
ALTER TABLE `riwayat_program`
  ADD CONSTRAINT `riwayat_program_ibfk_2` FOREIGN KEY (`IDProgram`) REFERENCES `program` (`IDProgram`),
  ADD CONSTRAINT `riwayat_program_ibfk_3` FOREIGN KEY (`IDPengguna`) REFERENCES `pengguna` (`IDPengguna`);

--
-- Constraints for table `ruangan_camp`
--
ALTER TABLE `ruangan_camp`
  ADD CONSTRAINT `ruangan_camp_ibfk_1` FOREIGN KEY (`IDCamp`) REFERENCES `camp` (`IDCamp`) ON DELETE CASCADE;

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`IDCamp`) REFERENCES `camp` (`IDCamp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
