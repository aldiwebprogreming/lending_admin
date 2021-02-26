-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 05:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_lending`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri_product`
--

CREATE TABLE `tbl_galeri_product` (
  `id` int(11) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_galeri_product`
--

INSERT INTO `tbl_galeri_product` (`id`, `nama_product`, `kategori_produk`, `keterangan`, `gambar`) VALUES
(4, 'Parcel', 'Parcel', 'Parcel Jakarta', 'parcel11.jpg'),
(5, 'Buket make-up', 'Parcel', 'Buket Make-up Bandung', 'parcel2.jpg'),
(6, 'Buket snack', 'Parcel', 'Buket Snack Surabaya', 'parcel1.jpg'),
(7, 'Bunga berdiri', 'Bunga', 'Bunga Berdiri Medan', 'bunga2.jpg'),
(8, 'Bunga meja', 'Bunga', 'Bunga Meja Jakarta', 'bunga.jpg'),
(9, 'Papan bunga gandeng', 'Papan Bunga', 'Papan Bunga  Yogyakarta', 'papan_bunga_gandeng1.jpg'),
(10, 'Cake Ulang tahun', 'Cake', 'Cake Ultah Bekasi', 'cake2.jpg'),
(11, 'Cake kering', 'Cake', 'Cake Kering Palembang', 'cake_kering.jpg'),
(13, 'Papan Bunga', 'Papan Bunga', 'Papan Bunga Medan', 'papan_ebunga1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE `tbl_operator` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_operator`
--

INSERT INTO `tbl_operator` (`id`, `username`, `pass`) VALUES
(4, 'aldi', '$2y$10$LGop4hGGJIm7I/BwStXw0un/OjQEfHYod6.MHZrzz.sihrDK5WjqK'),
(6, 'ebunga', '$2y$10$XIB0O.8TWCxVZEVb0BmNFe8SrDvOQFXwnU.CWqn.8NHrsen2MWLh6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `pesan` text NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id`, `nama`, `phone`, `email`, `date`, `pesan`, `date_post`, `status`) VALUES
(36, 'ebunga', '083138184143', 'alldii1956@gmail.com', '2021-02-23', 'hay', '2021-02-23 07:09:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `id` int(11) NOT NULL,
  `kd_promo` varchar(50) NOT NULL,
  `nama_promo` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sub_judul` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `start_promo` varchar(25) NOT NULL,
  `end_promo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `ket_testimonial` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `nama_user`, `ket_testimonial`, `foto`, `date_post`) VALUES
(7, 'Ridho', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'Testimoni.jpg', '2021-02-18 07:54:29'),
(10, 'hery', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'baru.png', '2021-02-18 08:09:17'),
(11, 'aldi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'cake.jpg', '2021-02-26 02:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video_review`
--

CREATE TABLE `tbl_video_review` (
  `id` int(11) NOT NULL,
  `nama_video_review` varchar(100) NOT NULL,
  `frame` text NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video_review`
--

INSERT INTO `tbl_video_review` (`id`, `nama_video_review`, `frame`, `section`) VALUES
(13, 'Section 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1O5rUs20Iz0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'section 1'),
(14, 'Section 2', '                      <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/e8bW6DKXPmI\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>                    ', 'section 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(200) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`id`, `ip`, `date`, `hits`, `online`, `time`) VALUES
(1, '::1', '2021-02-16', 31, '1613469331', '2021-02-16 05:44:01'),
(3, '127.0.0.1', '2021-02-16', 4, '1613464983', '2021-02-16 09:19:08'),
(4, '::1', '2021-02-17', 48, '1613555510', '2021-02-17 03:18:04'),
(5, '127.0.0.1', '2021-02-17', 1, '1613528852', '2021-02-17 03:27:32'),
(6, '::1', '2021-02-18', 95, '1613642082', '2021-02-18 03:13:34'),
(7, '127.0.0.1', '2021-02-18', 60, '1613641355', '2021-02-18 09:48:29'),
(8, '::1', '2021-02-19', 201, '1613729182', '2021-02-19 03:14:01'),
(9, '127.0.0.1', '2021-02-19', 13, '1613704654', '2021-02-19 03:22:22'),
(10, '::1', '2021-02-20', 77, '1613796233', '2021-02-20 03:18:42'),
(11, '::1', '2021-02-22', 329, '1613988070', '2021-02-22 03:14:37'),
(12, '127.0.0.1', '2021-02-22', 3, '1613978941', '2021-02-22 04:01:49'),
(13, '::1', '2021-02-23', 127, '1614071562', '2021-02-23 03:08:01'),
(14, '::1', '2021-02-24', 91, '1614156318', '2021-02-24 03:56:42'),
(15, '::1', '2021-02-26', 29, '1614312606', '2021-02-26 03:41:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_galeri_product`
--
ALTER TABLE `tbl_galeri_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video_review`
--
ALTER TABLE `tbl_video_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galeri_product`
--
ALTER TABLE `tbl_galeri_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_video_review`
--
ALTER TABLE `tbl_video_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
