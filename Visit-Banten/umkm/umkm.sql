-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2023 at 05:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jam_buka` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `maps` varchar(500) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content_satu` varchar(255) NOT NULL,
  `content_dua` varchar(255) NOT NULL,
  `content_tiga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`id`, `nama`, `kategori`, `alamat`, `jam_buka`, `telepon`, `deskripsi`, `website`, `maps`, `thumbnail`, `content_satu`, `content_dua`, `content_tiga`) VALUES
(1, 'Rumah Makan Langganan Anda', 'Kuliner', 'Jl. Raya Serang KM. 10, Cikupa, Kec. Cikupa, Tangerang, Banten 15710', '08.00 - 21.00', '0812-1234-5678', 'khas sunda yang berspesialisasi di bidang sate bandeng', 'https://www.langganananda.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0703727153586!2d106.15312667512858!3d-6.121230593865439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418ad4a4982271%3A0xf57a42421e2b8bef!2sRM%20Langganan%20Anda!5e0!3m2!1sid!2sid!4v1685875007871!5m2!1sid!2sid', 'Langganan_anda.png', 'c1-LA.png', 'c2-LA.png ', 'c3-LA.png'),
(2, 'Durian Jatuhan Haji Arif', 'UMKM', 'Jl. Raya Serang Km. 10, Cikeusal, Serang, Banten', '08.00 - 17.00', '0812-8888-8888', 'menjual berbagai macam jenis durian dan berspesialisasi di buah durian, mulai dari runtuh sampe montong.', 'https://www.durianjatuhan.com/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9888791393237!2d106.00115547861428!3d-6.132195778009158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41896438051ab5%3A0x1a41d155e40a6f88!2sDURIAN%20JATOHAN%20HAJI%20ARIF%201970%20DAN%20UMKM!5e0!3m2!1sen!2sid!4v1685958142435!5m2!1sen!2sid', 'DJHA.png', 'c1-DJA.png', 'c2-DJA.png', 'c3-DJA.png'),
(3, 'Pasar Lama', 'UMKM', 'Jl. Kisamaun No.32, RT.002/RW.004, Sukasari, Kec. Tangerang, Kota Tangerang, Banten 15118', '24 Jam', '089876543210', 'Di pasar ini Anda dapat dengan mudah menemukan beraneka macam jajanan dan makanan tradisional Tangerang.', 'https://pasarlamatangerang.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.640894178814!2d106.62760921031672!3d-6.178799993782803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8d4b8bb1f09%3A0x122fb3c547a07bfe!2sPasar%20Lama%2C%20Jl.%20Kisamaun%20No.32%2C%20RT.002%2FRW.004%2C%20Sukasari%2C%20Tangerang%2C%20Tangerang%20City%2C%20Banten%2015118!5e0!3m2!1sen!2sid!4v1685976787239!5m2!1sen!2sid', 'Pasar_Lama_Tangerang.jpg\r\n', '-', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
