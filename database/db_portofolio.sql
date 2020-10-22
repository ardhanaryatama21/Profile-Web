-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 01:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`nama`, `deskripsi`, `notelp`, `email`, `alamat`, `kota`, `negara`) VALUES
('Ardhan Aryatama', 'Hi, call me Ardhan. I\'m from Indonesia, I am a UI / UX Design and Front-end developer. I have been working as a Web designer for more than 1 years and still love to do it every day. Now I look forward to working same with you!', '(+62) 898 6174 553', 'Contact@ardhanaryatama.com', 'Perum. Bumi Lestari Jl. Nuri 1 Blok H45 No.12 RW 17 RT 01', 'Bekasi, Jawa Barat', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'HTML', 'Standard markup language for documents designed to be displayed in a web browser', 'html.svg'),
(2, 'CSS', 'style sheet language used for describing the presentation of a document written in a markup language like HTML', 'css.svg'),
(3, 'Javascript', 'Programming language that conforms to the ECMAScript specification', 'js.svg'),
(4, 'Bootstrap', 'free and open-source CSS framework directed at responsive, mobile-first front-end web development', 'bootstrap.svg'),
(5, 'PHP', 'general-purpose scripting language that is especially suited to web development', 'php.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
