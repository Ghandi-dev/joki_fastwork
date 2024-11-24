-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 04, 2024 at 12:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joki_ml`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'admin', '$2y$10$HxQR.6ARYDFEsTY4JbRTe.zatBM7L6HWCCizrB9S9MjwY8KJR7oCm', 'Andhika Syarif Nataatmaja', '3ff7138788609fb0acfc7c00ad0ba2e5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Joki Rank / Star'),
(3, 'Joki Rank / Paket');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama_layanan`, `kategori_id`, `harga`, `foto`) VALUES
(1, 'Master', 1, 3000, '5bbd07f5f962562d1c8724fbd3e765cf.png'),
(2, 'Grand Master', 1, 5000, '320f9ea6e190c8d9ee82644eb53bea99.png'),
(3, 'Epic', 1, 7000, '88259095d86dff074415f06450567c0c.png'),
(4, 'Legend V - Mythic ', 3, 200000, '0e0efdaad9e3bbcf24667b818e28ee74.png'),
(5, 'Legend', 1, 10000, '663e8859317df35bb35885d338fb3db3.png'),
(6, 'Mythic', 1, 15000, '1667db9946e0f7ec54b6d77d14eb5582.png'),
(7, 'Mythic Honor', 1, 25000, '127582cb60d856930df96104fff17ee5.png'),
(8, 'Mythic Glory', 1, 30000, 'c28a5caaab9206d1784d7c48886fcfc8.png'),
(9, 'Mytich Immortal', 1, 35000, '1460cccf28d41900c46e3520a55b2087.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `login_via` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hero` varchar(50) NOT NULL,
  `nick_name` varchar(50) NOT NULL,
  `jumlah_star` int(11) NOT NULL,
  `catatan` varchar(150) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `login_via`, `email`, `password`, `hero`, `nick_name`, `jumlah_star`, `catatan`, `nama`, `no_wa`, `created_at`) VALUES
(28, 'Montoon', 'sasaaaa12@gmail.com', '1234sqw', 'chou', '1221375 (OLA)', 5, 'klasdhodq', 'Asepr', '08124782243', '2024-01-02'),
(29, 'Montoon', 'assaklfk@gmail.com', '1234qeq', 'Dada', '121212 (onti)', 0, 'sohfwlf', 'sadjbfhjfw', '088192465', '2024-01-03'),
(30, 'Montoon', '131', '13', '113', '123', 10, '31', 'amdla', '02809353563', '2024-01-03'),
(31, 'Montoon', '123', '141', '123', '224', 10, '1231', 'nlwhf', '088935831', '2024-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori` (`kategori_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
