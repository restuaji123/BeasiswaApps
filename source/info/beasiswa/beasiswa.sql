-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 06:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarans`
--

CREATE TABLE IF NOT EXISTS `pendaftarans` (
`id` int(25) NOT NULL,
  `nm_peserta` varchar(100) NOT NULL,
  `j_kel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('islam','kristen','protestan','hindu','budha') NOT NULL,
  `alamat` text NOT NULL,
  `nm_ortu` varchar(100) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `nm_kk` varchar(50) NOT NULL,
  `hub_kel` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=1234 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `nm_peserta`, `j_kel`, `agama`, `alamat`, `nm_ortu`, `no_tlp`, `nm_kk`, `hub_kel`, `created_at`, `updated_at`) VALUES
(10, 'ds', 'Perempuan', 'protestan', 'skj', 'sknj', 'dkmjk`', 'skj', 'sk', '2015-02-25 01:31:57', '2015-02-25 01:31:57'),
(15, 'ra', 'Perempuan', 'kristen', 'skj', 'sdjks', 'sdk', 'sd', 'sdk', '2015-02-25 02:20:31', '2015-02-25 02:20:31'),
(22, 'kjskd', 'Perempuan', 'islam', 'hgh', 'gf', 'fx', 'gf', 'gf', '2015-02-25 00:56:31', '2015-02-25 00:56:31'),
(1233, 'sdjn', '', 'islam', 'skd', 'sdkj', 'sdk', 'sd', 'sdl', '2015-02-25 01:37:01', '2015-02-25 01:37:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1234;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
