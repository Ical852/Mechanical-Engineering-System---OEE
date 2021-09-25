-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 05:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oee_csas`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mesin`
--

CREATE TABLE `data_mesin` (
  `id_mesin` int(11) NOT NULL,
  `kode_mesin` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `nama_mesin` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mesin`
--

INSERT INTO `data_mesin` (`id_mesin`, `kode_mesin`, `nama_mesin`, `keterangan`, `status`) VALUES
(1, '11', 'Mixer TS I', 'Beli dimana gitu lupa gua', 'Masi Bagus'),
(2, '22', 'Mixer TS II', '', ''),
(3, '33', 'Vacuum Mixer 20 kg', '', ''),
(4, '44', 'Vacuum Mixer 250 kg', '', ''),
(5, '55', 'Tanki Mixer Shampo', '', ''),
(6, '66', 'Cutting A', '', ''),
(7, '77', 'Cutting B', '', ''),
(8, '88', 'Cutting Semi Otomatis', '', ''),
(9, '99', 'Stamping A', '', ''),
(10, '111', 'Stamping B', '', ''),
(11, '222', 'Stamping C', '', ''),
(12, '333', 'Stamping D (Foot Stamping)', '', ''),
(13, '444', 'Filling A', '', ''),
(14, '555', 'Filling B', '', ''),
(15, '666', 'Shrink Tunnel A', '', ''),
(16, '777', 'Shrink Tunnel B', '', ''),
(17, '888', 'Hand Shrink A', '', ''),
(18, '999', 'Hand Shrink B', '', ''),
(19, '121', 'Hand Shrink C', '', ''),
(20, '122', 'Hand Shrink D', '', ''),
(21, '123', 'Hand Shrink E', '', ''),
(22, '124', 'Hand Shrink F', '', ''),
(23, '125', 'Hand Shrink G', '', ''),
(24, '126', 'Hand Shrink H', '', ''),
(25, '127', 'Hand Shrink I', '', ''),
(26, '128', 'Coding Manual', '', ''),
(27, '129', 'Inklet Printer', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `evaluasisup`
--

CREATE TABLE `evaluasisup` (
  `id_eval` int(11) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `pengiriman` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `pelayanan_pumajual` int(11) NOT NULL,
  `pelayanan_keluhan` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `rata2` float NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluasisup`
--

INSERT INTO `evaluasisup` (`id_eval`, `supplier`, `date`, `nama_barang`, `pengiriman`, `kualitas`, `pelayanan_pumajual`, `pelayanan_keluhan`, `total_nilai`, `rata2`, `keterangan`) VALUES
(3, 'CV. ANEKA MOTOR PRESISI', '2021-03-31', 'mberr', 70, 90, 80, 70, 310, 77.5, 'kurenggggggg'),
(4, 'PT CSAS', '2021-04-08', 'Mesin Gilingan', 80, 90, 80, 80, 330, 82.5, 'Baik aja si'),
(5, 'CV. ANEKA MOTOR PRESISI', '2021-04-09', 'tes', 90, 90, 90, 90, 360, 90, 'dawdasd');

-- --------------------------------------------------------

--
-- Table structure for table `oee_data`
--

CREATE TABLE `oee_data` (
  `id_oee` int(11) NOT NULL,
  `date` date NOT NULL,
  `shift` int(11) NOT NULL,
  `nama_mesin` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `WaktuYgTer` float NOT NULL,
  `WaktuKerMes` float NOT NULL,
  `PlannedDt` float NOT NULL,
  `UnplannedDt` float NOT NULL,
  `SetupTime` float NOT NULL,
  `LoadingTime` float NOT NULL,
  `OperationTime` float NOT NULL,
  `AvailRatio` float NOT NULL,
  `JumlahOutput` float NOT NULL,
  `RejectUnit` float NOT NULL,
  `IdealCycleTime` float NOT NULL,
  `ActualCycleTime` float NOT NULL,
  `Performance` float NOT NULL,
  `Quality` float NOT NULL,
  `OEE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oee_data`
--

INSERT INTO `oee_data` (`id_oee`, `date`, `shift`, `nama_mesin`, `WaktuYgTer`, `WaktuKerMes`, `PlannedDt`, `UnplannedDt`, `SetupTime`, `LoadingTime`, `OperationTime`, `AvailRatio`, `JumlahOutput`, `RejectUnit`, `IdealCycleTime`, `ActualCycleTime`, `Performance`, `Quality`, `OEE`) VALUES
(20, '2021-02-26', 1, 'Coding Manual', 160, 32.43, 0.25, 0, 0.6, 32.18, 31.58, 98.1355, 45, 3, 0.4, 0.701778, 56.9981, 93.3333, 52.2063),
(21, '2021-02-26', 2, 'Coding Manual', 160, 33, 0.5, 0, 0.5, 32.5, 32, 98.4615, 50, 5, 0.5, 0.64, 78.125, 90, 69.2308),
(22, '2021-02-26', 3, 'Coding Manual', 160, 40, 0.4, 0, 0.4, 39.6, 39.2, 98.9899, 34, 4, 0.4, 1.15294, 34.6939, 88.2353, 30.303),
(23, '2021-02-27', 1, 'Coding Manual', 160, 32.43, 0.25, 0, 0.6, 32.18, 31.58, 98.1355, 45, 3, 0.4, 0.701778, 56.9981, 93.3333, 52.2063),
(24, '2021-02-27', 2, 'Coding Manual', 160, 33, 0.5, 0, 0.5, 32.5, 32, 98.4615, 50, 5, 0.5, 0.64, 78.125, 90, 69.2308),
(25, '2021-02-27', 3, 'Coding Manual', 160, 40, 0.4, 0, 0.4, 39.6, 39.2, 98.9899, 34, 4, 0.4, 1.15294, 34.6939, 88.2353, 30.303),
(29, '2021-02-26', 1, 'Cutting Semi Otomatis', 160, 46, 0.4, 0, 0.25, 45.6, 45.35, 99.4518, 70, 11, 0.6, 0.647857, 92.613, 84.2857, 77.6316),
(30, '2021-02-26', 2, 'Cutting Semi Otomatis', 160, 34, 0.5, 0, 0.6, 33.5, 32.9, 98.209, 60, 17, 0.4, 0.548333, 72.9483, 71.6667, 51.3433),
(31, '2021-02-26', 3, 'Cutting Semi Otomatis', 160, 54, 0.9, 0, 0.7, 53.1, 52.4, 98.6817, 89, 25, 0.7, 0.588764, 118.893, 71.9101, 84.3691),
(32, '2021-02-27', 1, 'Filling A', 160, 45, 0.6, 0, 0.35, 44.4, 44.05, 99.2117, 56, 6, 0.7, 0.786607, 88.9898, 89.2857, 78.8288),
(33, '2021-02-27', 2, 'Filling A', 160, 54, 0.5, 0, 0.6, 53.5, 52.9, 98.8785, 70, 1, 0.7, 0.755714, 92.6276, 98.5714, 90.2804),
(34, '2021-02-27', 3, 'Filling A', 160, 65, 0.7, 0, 0.5, 64.3, 63.8, 99.2224, 79, 24, 0.5, 0.807595, 61.9122, 69.6203, 42.7683),
(35, '2021-02-27', 1, 'Hand Shrink A', 160, 65, 0.7, 0, 0.4, 64.3, 63.9, 99.3779, 79, 11, 0.7, 0.808861, 86.5415, 86.076, 74.028),
(36, '2021-02-27', 2, 'Hand Shrink A', 160, 56, 0.6, 0, 0.7, 55.4, 54.7, 98.7365, 78, 3, 0.7, 0.701282, 99.8172, 96.1538, 94.7653),
(37, '2021-02-27', 3, 'Hand Shrink A', 160, 45, 0.4, 0, 0.5, 44.6, 44.1, 98.8789, 60, 3, 0.5, 0.735, 68.0272, 95, 63.9013),
(41, '2021-02-26', 1, 'Cutting A', 160, 54, 0.5, 0, 0.5, 53.5, 53, 99.0654, 78, 2, 0.5, 0.679487, 73.5849, 97.4359, 71.028),
(42, '2021-02-26', 2, 'Cutting A', 160, 45, 0.4, 0, 0.3, 44.6, 44.3, 99.3274, 67, 5, 0.7, 0.661194, 105.869, 92.5373, 97.3094),
(43, '2021-02-26', 3, 'Cutting A', 160, 50, 0.3, 0, 0.4, 49.7, 49.3, 99.1952, 56, 9, 0.2, 0.880357, 22.7181, 83.9286, 18.9135),
(44, '2021-02-26', 1, 'Cutting B', 160, 56, 0.5, 0, 0.5, 55.5, 55, 99.0991, 55, 2, 0.5, 1, 50, 96.3636, 47.7477),
(45, '2021-02-26', 2, 'Cutting B', 160, 67, 0.6, 0, 0.3, 66.4, 66.1, 99.5482, 80, 5, 0.5, 0.82625, 60.5144, 93.75, 56.4759),
(46, '2021-02-26', 3, 'Cutting B', 160, 60, 0.6, 0, 0.3, 59.4, 59.1, 99.4949, 80, 10, 0.7, 0.73875, 94.7546, 87.5, 82.4916),
(47, '2021-02-26', 1, 'Stamping A', 160, 67, 0.4, 0, 0.7, 66.6, 65.9, 98.949, 80, 7, 0.4, 0.82375, 48.5584, 91.25, 43.8438),
(48, '2021-02-26', 2, 'Stamping A', 160, 76, 0.6, 0, 0.4, 75.4, 75, 99.4695, 90, 12, 0.8, 0.833333, 96, 86.6667, 82.7586),
(49, '2021-02-26', 3, 'Stamping A', 160, 86, 0.6, 0, 0.8, 85.4, 84.6, 99.0632, 90, 2, 0.7, 0.94, 74.4681, 97.7778, 72.1311),
(50, '2021-02-27', 1, 'Filling B', 160, 78, 0.6, 0, 0.5, 77.4, 76.9, 99.354, 60, 4, 0.7, 1.28167, 54.6164, 93.3333, 50.646),
(51, '2021-02-27', 2, 'Filling B', 160, 89, 0.7, 0, 0.5, 88.3, 87.8, 99.4337, 40, 1, 0.8, 2.195, 36.4465, 97.5, 35.3341),
(52, '2021-02-27', 3, 'Filling B', 160, 67, 0.6, 0, 0.4, 66.4, 66, 99.3976, 70, 7, 0.7, 0.942857, 74.2424, 90, 66.4157),
(53, '2021-02-27', 1, 'Hand Shrink B', 160, 76, 0.8, 0, 0.4, 75.2, 74.8, 99.4681, 56, 3, 0.7, 1.33571, 52.4064, 94.6429, 49.3351),
(54, '2021-02-27', 2, 'Hand Shrink B', 160, 70, 0.7, 0, 0.7, 69.3, 68.6, 98.9899, 70, 7, 0.7, 0.98, 71.4286, 90, 63.6364),
(55, '2021-02-27', 3, 'Hand Shrink B', 160, 60, 0.6, 0, 0.6, 59.4, 58.8, 98.9899, 60, 6, 0.6, 0.98, 61.2245, 90, 54.5455),
(56, '2021-02-28', 1, 'Inklet Printer', 160, 60, 0.3, 0, 0.3, 59.7, 59.4, 99.4975, 60, 3, 0.6, 0.99, 60.6061, 95, 57.2864),
(57, '2021-02-28', 2, 'Inklet Printer', 160, 56, 0.5, 0, 0.6, 55.5, 54.9, 98.9189, 68, 8, 0.8, 0.807353, 99.0892, 88.2353, 86.4865),
(58, '2021-02-28', 3, 'Inklet Printer', 160, 45, 0.5, 0, 0.4, 44.5, 44.1, 99.1011, 56, 9, 0.9, 0.7875, 114.286, 83.9286, 95.0562),
(59, '2021-02-28', 1, 'Mixer TS I', 160, 58, 0.3, 0, 0.5, 57.7, 57.2, 99.1334, 80, 8, 0.5, 0.715, 69.9301, 90, 62.3917),
(60, '2021-02-28', 2, 'Mixer TS I', 160, 76, 0.7, 0, 0.6, 75.3, 74.7, 99.2032, 59, 2, 0.5, 1.2661, 39.4913, 96.6102, 37.8486),
(61, '2021-02-28', 3, 'Mixer TS I', 160, 60, 0.8, 0, 0.6, 59.2, 58.6, 98.9865, 80, 8, 0.8, 0.7325, 109.215, 90, 97.2973),
(62, '2021-02-28', 1, 'Mixer TS II', 160, 80, 0.8, 0, 0.8, 79.2, 78.4, 98.9899, 80, 8, 0.8, 0.98, 81.6327, 90, 72.7273),
(63, '2021-02-28', 2, 'Mixer TS II', 160, 70, 0.7, 0, 0.7, 69.3, 68.6, 98.9899, 70, 7, 0.7, 0.98, 71.4286, 90, 63.6364),
(64, '2021-02-28', 3, 'Mixer TS II', 160, 60, 0.6, 0, 0.6, 59.4, 58.8, 98.9899, 60, 6, 0.6, 0.98, 61.2245, 90, 54.5455),
(65, '2021-02-28', 1, 'Shrink Tunnel A', 160, 50, 0.5, 0, 0.5, 49.5, 49, 98.9899, 50, 5, 0.5, 0.98, 51.0204, 90, 45.4545),
(66, '2021-02-28', 2, 'Shrink Tunnel A', 160, 40, 0.4, 0, 0.4, 39.6, 39.2, 98.9899, 40, 4, 0.4, 0.98, 40.8163, 90, 36.3636),
(67, '2021-02-28', 3, 'Shrink Tunnel A', 160, 90, 0.9, 0, 0.9, 89.1, 88.2, 98.9899, 90, 9, 0.9, 0.98, 91.8367, 90, 81.8182),
(68, '2021-02-28', 1, 'Shrink Tunnel B', 160, 86, 0.86, 0, 0.86, 85.14, 84.28, 98.9899, 86, 8, 0.8, 0.98, 81.6327, 90.6977, 73.2911),
(69, '2021-02-28', 2, 'Shrink Tunnel B', 160, 96, 0.5, 0, 0.6, 95.5, 94.9, 99.3717, 90, 2, 0.7, 1.05444, 66.3857, 97.7778, 64.5026),
(70, '2021-02-28', 3, 'Shrink Tunnel B', 160, 76, 0.76, 0, 0.76, 75.24, 74.48, 98.9899, 76, 7, 0.7, 0.98, 71.4286, 90.7895, 64.1946),
(71, '2021-03-18', 1, 'Cutting A', 160, 50, 1, 0, 0.5, 49, 48.5, 98.9796, 70, 1, 0.7, 0.692857, 101.031, 98.5714, 98.5714);

-- --------------------------------------------------------

--
-- Table structure for table `oee_data_daily`
--

CREATE TABLE `oee_data_daily` (
  `id_oee_daily` int(11) NOT NULL,
  `date` date NOT NULL,
  `nama_mesin` varchar(50) NOT NULL,
  `WaktuYgTer` float NOT NULL,
  `WaktuKerMes` float NOT NULL,
  `PlannedDt` float NOT NULL,
  `UnplannedDt` float NOT NULL,
  `SetupTime` float NOT NULL,
  `LoadingTime` float NOT NULL,
  `OperationTime` float NOT NULL,
  `AvailRatio` float NOT NULL,
  `JumlahOutput` float NOT NULL,
  `RejectUnit` float NOT NULL,
  `IdealCycleTime` float NOT NULL,
  `ActualCycleTime` float NOT NULL,
  `Performance` float NOT NULL,
  `Quality` float NOT NULL,
  `OEE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oee_data_daily`
--

INSERT INTO `oee_data_daily` (`id_oee_daily`, `date`, `nama_mesin`, `WaktuYgTer`, `WaktuKerMes`, `PlannedDt`, `UnplannedDt`, `SetupTime`, `LoadingTime`, `OperationTime`, `AvailRatio`, `JumlahOutput`, `RejectUnit`, `IdealCycleTime`, `ActualCycleTime`, `Performance`, `Quality`, `OEE`) VALUES
(36, '2021-02-27', 'Coding Manual', 480, 105.43, 1.15, 0, 1.5, 104.28, 102.78, 98.529, 129, 12, 0.433333, 0.831573, 56.6057, 90.5229, 50.58),
(38, '2021-02-26', 'Cutting Semi Otomatis', 480, 134, 1.8, 0, 1.55, 132.2, 130.65, 98.7808, 219, 53, 0.566667, 0.594985, 94.8181, 75.9542, 71.1147),
(39, '2021-02-26', 'Cutting A', 480, 149, 1.2, 0, 1.2, 147.8, 146.6, 99.196, 201, 16, 0.466667, 0.740346, 67.3907, 91.3006, 62.417),
(40, '2021-02-26', 'Cutting B', 480, 183, 1.7, 0, 1.1, 181.3, 180.2, 99.3807, 215, 17, 0.566667, 0.855, 68.423, 92.5379, 62.2384),
(43, '2021-02-27', 'Filling A', 480, 164, 1.8, 0, 1.45, 162.2, 160.75, 99.1042, 205, 31, 0.633333, 0.783305, 81.1765, 85.8258, 70.6258),
(44, '2021-02-27', 'Filling B', 480, 234, 1.9, 0, 1.4, 232.1, 230.7, 99.3951, 170, 12, 0.733333, 1.47318, 55.1018, 93.6111, 50.7986),
(45, '2021-02-27', 'Hand Shrink A', 480, 166, 1.7, 0, 1.6, 164.3, 162.7, 98.9978, 217, 17, 0.633333, 0.748381, 84.7953, 92.4099, 77.5649),
(46, '2021-02-27', 'Hand Shrink B', 480, 206, 2.1, 0, 1.7, 203.9, 202.2, 99.1493, 186, 16, 0.666667, 1.09857, 61.6865, 91.5476, 55.839),
(47, '2021-02-28', 'Inklet Printer', 480, 161, 1.3, 0, 1.3, 159.7, 158.4, 99.1725, 184, 20, 0.766667, 0.861618, 91.3271, 89.0546, 79.6097),
(48, '2021-02-28', 'Mixer TS I', 480, 194, 1.8, 0, 1.7, 192.2, 190.5, 99.1077, 219, 18, 0.6, 0.904533, 72.8788, 92.2034, 65.8459),
(49, '2021-02-28', 'Mixer TS II', 480, 210, 2.1, 0, 2.1, 207.9, 205.8, 98.9899, 210, 21, 0.7, 0.98, 71.4286, 90, 63.6364),
(50, '2021-02-28', 'Shrink Tunnel A', 480, 180, 1.8, 0, 1.8, 178.2, 176.4, 98.9899, 180, 18, 0.6, 0.98, 61.2245, 90, 54.5454),
(51, '2021-02-28', 'Shrink Tunnel B', 480, 258, 2.12, 0, 2.22, 255.88, 253.66, 99.1172, 252, 17, 0.733333, 1.00481, 73.149, 93.0883, 67.3294),
(57, '2021-04-08', 'Coding Manual', 160, 55, 0.3, 0, 0.4, 54.7, 54.3, 99.2687, 50, 5, 0.6, 1.086, 55.2486, 90, 49.3601),
(58, '2021-02-26', 'Stamping A', 480, 229, 1.6, 0, 1.9, 227.4, 225.5, 99.1606, 260, 21, 0.633333, 0.865694, 73.0088, 91.8982, 66.2445);

-- --------------------------------------------------------

--
-- Table structure for table `oee_data_monthly`
--

CREATE TABLE `oee_data_monthly` (
  `id_oee_monthly` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `nama_mesin` varchar(50) NOT NULL,
  `WaktuYgTer` float NOT NULL,
  `WaktuKerMes` float NOT NULL,
  `PlannedDt` float NOT NULL,
  `UnplannedDt` float NOT NULL,
  `SetupTime` float NOT NULL,
  `LoadingTime` float NOT NULL,
  `OperationTime` float NOT NULL,
  `AvailRatio` float NOT NULL,
  `JumlahOutput` float NOT NULL,
  `RejectUnit` float NOT NULL,
  `IdealCycleTime` float NOT NULL,
  `ActualCycleTime` float NOT NULL,
  `Performance` float NOT NULL,
  `Quality` float NOT NULL,
  `OEE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oee_data_monthly`
--

INSERT INTO `oee_data_monthly` (`id_oee_monthly`, `bulan`, `nama_mesin`, `WaktuYgTer`, `WaktuKerMes`, `PlannedDt`, `UnplannedDt`, `SetupTime`, `LoadingTime`, `OperationTime`, `AvailRatio`, `JumlahOutput`, `RejectUnit`, `IdealCycleTime`, `ActualCycleTime`, `Performance`, `Quality`, `OEE`) VALUES
(1, '2021-03', 'Cutting Semi Otomatis', 160, 78, 0.6, 0, 0.7, 77.4, 76.7, 99.0956, 98, 12, 0.7, 0.782653, 89.4394, 87.7551, 77.7778),
(3, '2021-02', 'Coding Manual', 960, 210.86, 2.3, 0, 3, 208.56, 205.56, 97, 258, 24, 0.433333, 0.831573, 60, 92, 60),
(4, '2021-03', 'Coding Manual', 1440, 316.29, 3.45, 0, 4.5, 312.84, 308.34, 98.529, 387, 36, 0.433333, 0.831573, 56.6057, 90.5229, 50.58);

-- --------------------------------------------------------

--
-- Table structure for table `oee_data_yearly`
--

CREATE TABLE `oee_data_yearly` (
  `id_oee_yearly` int(11) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nama_mesin` varchar(50) NOT NULL,
  `WaktuYgTer` float NOT NULL,
  `WaktuKerMes` float NOT NULL,
  `PlannedDt` float NOT NULL,
  `UnplannedDt` float NOT NULL,
  `SetupTime` float NOT NULL,
  `LoadingTime` float NOT NULL,
  `OperationTime` float NOT NULL,
  `AvailRatio` float NOT NULL,
  `JumlahOutput` float NOT NULL,
  `RejectUnit` float NOT NULL,
  `IdealCycleTime` float NOT NULL,
  `ActualCycleTime` float NOT NULL,
  `Performance` float NOT NULL,
  `Quality` float NOT NULL,
  `OEE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oee_data_yearly`
--

INSERT INTO `oee_data_yearly` (`id_oee_yearly`, `tahun`, `nama_mesin`, `WaktuYgTer`, `WaktuKerMes`, `PlannedDt`, `UnplannedDt`, `SetupTime`, `LoadingTime`, `OperationTime`, `AvailRatio`, `JumlahOutput`, `RejectUnit`, `IdealCycleTime`, `ActualCycleTime`, `Performance`, `Quality`, `OEE`) VALUES
(15, '2021', 'Cutting Semi Otomatis', 160, 78, 0.6, 0, 0.7, 77.4, 76.7, 99.0956, 98, 12, 0.7, 0.782653, 89.4394, 87.7551, 77.7778),
(18, '2020', 'Cutting Semi Otomatis', 160, 78, 0.6, 0, 0.7, 77.4, 76.7, 95, 98, 12, 0.7, 0.782653, 89.4394, 87.7551, 50),
(19, '2021', 'Coding Manual', 2400, 527.15, 5.75, 0, 7.5, 521.4, 513.9, 97.7645, 645, 60, 0.433333, 0.831573, 58.3028, 91.2615, 55.29),
(20, '2020', 'Coding Manual', 2400, 527.15, 5.75, 0, 7.5, 521.4, 513.9, 96, 645, 60, 0.433333, 0.831573, 58.3028, 91.2615, 70);

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `kode_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `date` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`kode_barang`, `nama_barang`, `merek`, `tipe`, `stok`, `date`, `keterangan`) VALUES
('A-202', 'Murrr', 'Murxx', 'AZero0212', 18, '2021-03-11', 'Beli dari mur jago'),
('A-205', 'Baut', 'Baut Panasonic', 'Bautpone', 19, '2021-03-25', 'Beli dari kang baut'),
('A-207', 'Obeng', 'Obengxmax', 'AOM08', 15, '2021-04-08', 'Beli di kang obeng master');

-- --------------------------------------------------------

--
-- Table structure for table `spkeluar`
--

CREATE TABLE `spkeluar` (
  `id_spk` int(11) NOT NULL,
  `date` date NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `tipe` varchar(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `spkeluar`
--
DELIMITER $$
CREATE TRIGGER `batal_pengeluaran` AFTER DELETE ON `spkeluar` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok + old.jumlah_keluar WHERE sparepart.kode_barang = old.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pengeluaran` AFTER INSERT ON `spkeluar` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok - new.jumlah_keluar WHERE sparepart.kode_barang = new.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_pengeluaran` AFTER UPDATE ON `spkeluar` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok + old.jumlah_keluar WHERE sparepart.kode_barang = old.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_pengeluaran2` BEFORE UPDATE ON `spkeluar` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok - new.jumlah_keluar WHERE sparepart.kode_barang = new.kode_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `spmasuk`
--

CREATE TABLE `spmasuk` (
  `id_spm` int(11) NOT NULL,
  `date` date NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `tipe` varchar(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `spmasuk`
--
DELIMITER $$
CREATE TRIGGER `batal_pemasukkan` AFTER DELETE ON `spmasuk` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok - old.jumlah_masuk WHERE sparepart.kode_barang = old.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pemasukkan` AFTER INSERT ON `spmasuk` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok + new.jumlah_masuk WHERE sparepart.kode_barang = new.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_pemasukkan` AFTER UPDATE ON `spmasuk` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok - old.jumlah_masuk WHERE sparepart.kode_barang = old.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_pemasukkan2` BEFORE UPDATE ON `spmasuk` FOR EACH ROW UPDATE sparepart SET sparepart.stok = sparepart.stok + new.jumlah_masuk WHERE sparepart.kode_barang = new.kode_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `supplieravl`
--

CREATE TABLE `supplieravl` (
  `id_sup` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telpon` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplieravl`
--

INSERT INTO `supplieravl` (`id_sup`, `nama_supplier`, `contact`, `alamat`, `no_telpon`, `fax`, `keterangan`) VALUES
(1, 'CV. ANEKA MOTOR PRESISI', 'Ahmad Rizal', 'Jl. Raya Serpong - Puspitek No 94. Serpong Tangsel', '(021) 7560977', '(021) 75875515', 'Bengkel Bubut'),
(2, 'PT CSAS', 'Asal', 'Taman Tekno BSD', '093812301', 'Faqadqwd', 'Baru diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(11) NOT NULL,
  `is_active` varchar(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Ical', 'taylor.lautnerpattinson@gmail.com', 'ical.jpg', '123456789', 'Admin', 'Active', 1586079430),
(2, 'Tony stark', 'tonystark@gmail.com', 'tony.jpg', '123456789', 'Admin', 'Active', 1614837467),
(3, 'Thor', 'thor@gmail.com', 'thor.jpg', '123456789', 'User', 'Active', 1614838035),
(4, 'Steve Roger', 'captainamerica@gmail.com', 'cap.jpg', '123456789', 'User', 'Active', 1614838082),
(6, 'test', 'tester@gmail.com', 'default.png', 'tester123', 'User', 'Active', 1618448515);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mesin`
--
ALTER TABLE `data_mesin`
  ADD PRIMARY KEY (`id_mesin`);

--
-- Indexes for table `evaluasisup`
--
ALTER TABLE `evaluasisup`
  ADD PRIMARY KEY (`id_eval`);

--
-- Indexes for table `oee_data`
--
ALTER TABLE `oee_data`
  ADD PRIMARY KEY (`id_oee`);

--
-- Indexes for table `oee_data_daily`
--
ALTER TABLE `oee_data_daily`
  ADD PRIMARY KEY (`id_oee_daily`);

--
-- Indexes for table `oee_data_monthly`
--
ALTER TABLE `oee_data_monthly`
  ADD PRIMARY KEY (`id_oee_monthly`);

--
-- Indexes for table `oee_data_yearly`
--
ALTER TABLE `oee_data_yearly`
  ADD PRIMARY KEY (`id_oee_yearly`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `spkeluar`
--
ALTER TABLE `spkeluar`
  ADD PRIMARY KEY (`id_spk`);

--
-- Indexes for table `spmasuk`
--
ALTER TABLE `spmasuk`
  ADD PRIMARY KEY (`id_spm`);

--
-- Indexes for table `supplieravl`
--
ALTER TABLE `supplieravl`
  ADD PRIMARY KEY (`id_sup`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mesin`
--
ALTER TABLE `data_mesin`
  MODIFY `id_mesin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `evaluasisup`
--
ALTER TABLE `evaluasisup`
  MODIFY `id_eval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oee_data`
--
ALTER TABLE `oee_data`
  MODIFY `id_oee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `oee_data_daily`
--
ALTER TABLE `oee_data_daily`
  MODIFY `id_oee_daily` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `oee_data_monthly`
--
ALTER TABLE `oee_data_monthly`
  MODIFY `id_oee_monthly` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oee_data_yearly`
--
ALTER TABLE `oee_data_yearly`
  MODIFY `id_oee_yearly` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `spkeluar`
--
ALTER TABLE `spkeluar`
  MODIFY `id_spk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spmasuk`
--
ALTER TABLE `spmasuk`
  MODIFY `id_spm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplieravl`
--
ALTER TABLE `supplieravl`
  MODIFY `id_sup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spkeluar`
--
ALTER TABLE `spkeluar`
  ADD CONSTRAINT `spkeluar_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `sparepart` (`kode_barang`);

--
-- Constraints for table `spmasuk`
--
ALTER TABLE `spmasuk`
  ADD CONSTRAINT `spmasuk_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `sparepart` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
