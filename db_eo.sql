-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 06:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_eo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `isi`) VALUES
(1, 'About Event Organize', 'Weblog Event Organizer Sukabumi merupakan media informasi sekaligus media komunikasi terlengkap mengenai pelaksanaan Event yang diadakan di Kota dan Kabupaten Sukabumi.\r\nDengan adanya weblog ini diharapkan dapat memberikan informasi lengkap pelaksanaan event di Kota dan  Kabupaten Sukabumi baik dari segi pelaksananya (event organizer), sponsorship event, rangkaian event, agenda event, prepare event serta kondisi pelaksanaan event itu sendiri.\r\nSehingga dengan demikian dapat pula dijadikan bahan diskusi dan sharing informasi antara para pelaksana event , sponsor, pemerhati maupun penikmat event di Kota/Kabupaten Sukabumi.\r\nMudah-mudahan hal ini dapat memberikan sumbangsih yang maksimal bagi peningkatan kualitas dan kuantitas event yang dilaksanakan di Kota dan Kabupaten Sukabumi.');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `slug_blog` varchar(2000) NOT NULL,
  `date` varchar(50) NOT NULL,
  `gambar` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`id` int(11) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `poto` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `instansi`, `url`, `poto`) VALUES
(11, 'pemerintah', 'https://google.com', '2315875fe8a1065fe6399b1dd9cc64e3.jpg'),
(12, 'pemerintah', 'https://google.com', 'f146d21cf89d8e81d5427d420c890a2b.jpg'),
(13, 'pemerintah', 'https://google.com', 'a71bfdef4a6d7664adb2ab3379024649.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `alamat`, `telepon`, `email`) VALUES
(1, 'jl.kenangan dengan dia selaman', '085817836592', 'galehdotid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `banner` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul`, `isi`, `banner`) VALUES
(1, 'Event Organizer', 'Weblog Event Organizer Sukabumi merupakan media informasi sekaligus media komunikasi terlengkap mengenai pelaksanaan Event yang diadakan di Kota dan Kabupaten Sukabumi.', 'galery01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
`id` int(11) NOT NULL,
  `project` varchar(100) NOT NULL,
  `poto` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `project`, `poto`) VALUES
(8, 'sekolah', 'ccf30f3fdc46793031cc6fdf7d9e661d.jpg'),
(10, 'pemerintah', 'f2a9188cb29ace209423a9664fbb56fa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twit` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `facebook`, `twit`, `instagram`, `foto`) VALUES
(9, 'Galeh rizky', 'Web Development', 'https://facebook.com', 'https://google./com', 'https://facebook.com', '4befde3bfb09e993eaf4fd3687ccfcdc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `no_telp`, `email`, `foto`) VALUES
(6, 'galehgans', '402887e059ad82801640e27e415b431a', 1, '085817836592', 'galehdotid@gmail.com', '2d191bb4d6174e6bd68b64bd44b6090f.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
