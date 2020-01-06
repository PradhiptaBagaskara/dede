-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2020 at 07:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12139827_emading`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'nama admin', 'admin@admin.com', 'admin', '$2y$12$LUpvwCrntLu0CmALkb9d7uLs6fFaOPXoL9SiffP4j7RjQlY1.EJPa');

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `id_cerita` int(11) NOT NULL,
  `id_kategori` varchar(200) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `img` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `diskripsi` longtext NOT NULL,
  `isi` longtext NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'MAHIPA'),
(2, 'TAPAK SUCI'),
(3, 'REOG'),
(4, 'Umum'),
(5, 'administrator'),
(6, 'Paduan Suara (GSM)');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE `masukan` (
  `id_masukan` int(11) NOT NULL,
  `id_user` varchar(200) NOT NULL,
  `isi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masukan`
--

INSERT INTO `masukan` (`id_masukan`, `id_user`, `isi`) VALUES
(1, '3', 'masukan saya adalah');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id_admin` int(11) NOT NULL,
  `status` enum('true','false','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`id`, `id_kategori`, `id_user`) VALUES
(1, 1, 2),
(3, 3, 3),
(5, 4, 1),
(6, 2, 3),
(7, 3, 1),
(8, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `foto_user` varchar(200) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `auth_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `is_admin`, `foto_user`, `username`, `email`, `password`, `auth_key`) VALUES
(1, 'Agus Setiawan', 0, 'IMG_20191120_183930_HDR.jpg', 'agus', 'agus@gmail.com ', '$2y$12$wZ2i//PpM4zzMckuizh5HO8hkEODHfb/VM/EBN4HuUO5LrS4QSNkO', '6a890056c6a1e14213c996e58eedad60'),
(2, 'santi budiman', 0, 'pakan.jpg', 'santi', 'santi@gmail.com', '$2y$12$YTyUnYOtfo5NY0mTSuNCjuAorpeDZXIamQXozy1C9AZibwp6u/7pS', 'ff97ecc1c48db2e4a513e37ca13eed5e'),
(3, 'Pradhipta Bagaskara', 0, '', 'pradhipta', 'pradhipta@mail.com', '$2y$12$FOW3GDpVbp/gYkHFpvP.mObkcD6hAGPO0cETcNx7dp9ha2l1MzPpG', 'c99415f08edec508bbf34f8307f22b7d'),
(8, 'senja saputra', 0, '', 'senja', 'senja@mail.com', '$2y$12$9dLVhED04ZG4f6PA23Cb0OOBcjg6FIw52WAM3qD6zgzkkpuTx5owe', '54b1abcec74c1173f96c398d15da933d'),
(9, 'Administrator', 1, '', 'admin', 'admin@admin.com', '$2y$12$LUpvwCrntLu0CmALkb9d7uLs6fFaOPXoL9SiffP4j7RjQlY1.EJPa', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'mahipa', 0, NULL, 'mahipa', 'mahipa@mail.com', '$2y$12$p6p9fhjaqUPuVOdyZyUk6OB30/m2QSPSHBlMNkt0nXgj7ILkCQNAG', 'ea7599a5ed25491f43ad0c57c4d21e68');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id_cerita`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
