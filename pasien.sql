-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 07:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tl` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `nama`, `tempat`, `tl`, `gender`, `email`, `telp`) VALUES
(7, '320349xxxx', 'Elsa', 'Afrika', '2003-07-08', 'Perempuan', 'elsanabiilah08@upi.edu.', '081515700334x'),
(8, '8478347011', 'Jeno kim', 'Incheon', '2000-12-23', 'Laki-laki', 'jeno@gmail.com', '08138746239'),
(9, '8795642002', 'Mark', 'Canada', '1999-08-20', 'Laki-laki', 'mark@upi.edu', '08237218473'),
(16, '320429', 'SEOK MATTHEW', 'Canada', '2002-07-14', 'Laki-laki', 'mattchu@gmail.com', '08664xxxxxx'),
(33, '320429', 'PARK GUNWOOK', 'korea', '2005-01-10', 'Laki-laki', 'gunug@gmail.com', '08664xxxxxx'),
(34, '320429480', 'KIM TAERAE', 'Korea Utara', '2002-07-14', 'Laki-laki', 'taeraesmile722@gmail.com', '0866455XXXX'),
(39, '320429', 'Elsa Nabiilahh', 'Bandung', '2023-06-17', 'Perempuan', 'hanbeen@gmail.com', '0866455XXXX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
