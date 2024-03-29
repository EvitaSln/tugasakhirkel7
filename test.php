-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 03:51 AM
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
-- Database: `bless`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'katun', 'katun', 'katun Silungkang'),
(2, 'tiarma', 'tiarma', 'tiarma gurning');

-- --------------------------------------------------------

--
-- Table structure for table `datasensor`
--

CREATE TABLE `datasensor` (
  `id_sensor` int(11) NOT NULL,
  `ppm` varchar(255) NOT NULL,
  `ketinggian_air` varchar(255) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasensor`
--

INSERT INTO `datasensor` (`id_sensor`, `ppm`, `ketinggian_air`, `waktu`) VALUES
(1, '785', '16', '2022-04-01'),
(2, '890', '17', '2022-04-02'),
(3, '975', '19', '2022-04-03'),
(4, '1015', '19', '2022-04-04'),
(5, '1090', '20', '2022-04-05'),
(6, '1105', '22', '2022-04-06'),
(7, '1120', '24', '2022-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `rentangminggu`
--

CREATE TABLE `rentangminggu` (
  `id` int(11) NOT NULL,
  `Minggu` varchar(55) NOT NULL,
  `rentangppm` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentangminggu`
--

INSERT INTO `rentangminggu` (`id`, `Minggu`, `rentangppm`) VALUES
(1, 'Minggu 2', '500 - 700 PPM'),
(2, 'Minggu 3', '700 - 900 PPM '),
(3, 'Minggu 4', '900 - 1000 PPM');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama_tanaman` varchar(100) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `foto_tanaman` varchar(100) NOT NULL,
  `deskripsi_tanaman` text NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `masapanen` varchar(99) NOT NULL,
  `dosisnutrisi` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `mode`, `foto_tanaman`, `deskripsi_tanaman`, `keterangan`, `masapanen`, `dosisnutrisi`) VALUES
(4, 'Pakcoy', 'Manual', 'pakcoy.jpg', 'Pakcoy merupakan tanaman dari keluarga Cruciferae yang masih berada\r\ndalam satu genus dengan sawi putih/petsai dan sawi hijau/caisim. \r\n	', 'Menambahkan 100 PPM', '40-50 Hari', '1050 - 1400 PPM'),
(5, 'Selada', 'Otomatis', 'selada.jpg', 'Selada atau daun sla (Lactuca sativa) adalah tumbuhan sayur yang biasa ditanam di daerah beriklim sedang maupun daerah tropika.\r\n', 'Menambahkan 220 PPM', '30 - 45 Hari', '900 PPM'),
(6, 'Kangkung', 'Manual', 'kangkung.jpg', 'Kangkung, juga dikenal dengan istilah bayam air, adalah tanaman perairan di daerah rawa-rawa.', 'Menambahkan 150 PPM', '30-45 hari', '1200 PPM'),
(8, 'Bayam', 'Otomatis', 'bayam.jpg', 'Bayam (Amaranthus) adalah tumbuhan yang biasa ditanam untuk dikonsumsi daunnya sebagai sayuran hijau. Tumbuhan ini berasal dari Amerika tropik', 'Menambahkan 180 PPM', '4-6 Minggu', '800-1200 PPM'),
(9, 'Seledri', 'Otomatis', 'seledri.jpg', 'Seledri adalah terna kecil, kurang dari 1m tingginya. Daun tersusun gemuk dengan tangkai pendek.', 'Menambahkan 300 PPM', '1-3 Bulan', '1500 PPM'),
(10, 'Sawi', 'Manual', 'sawi.jpg', 'Sawi adalah sekelompok tumbuhan dari marga Brassica yang dimanfaatkan daun atau bunganya sebagai bahan pangan (sayuran), baik segar maupun diolah.', 'Menambahkan 298 PPM', '45 Hari', '1300 PPM'),
(11, 'Leek', 'Manual', 'leek.jpg', 'Leek adalah tanaman sejenis bawang dengan bentuk daun seperti silinder yang panjang dan ramping.', 'Menambahkan 320 PPM', '2 Bulan', '1250 PPM'),
(12, 'Kale', 'Otomatis', 'kale.jpg', 'kale adalah jenis sayuran berdaun hijau yang tergolong dalam keluarga kubis, seperti sayur brokoli. Tanaman ini bernama latin Brassica oleracea acephala.', 'Menambahkan 500 PPM', '45 Hari', '1050 -1400 PPM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontrol`
--

CREATE TABLE `tb_kontrol` (
  `id` int(11) NOT NULL,
  `relay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kontrol`
--

INSERT INTO `tb_kontrol` (`id`, `relay`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tugasakhir6`
--

CREATE TABLE `tugasakhir6` (
  `id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `topic` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL,
  `volume(liter)` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasakhir6`
--

INSERT INTO `tugasakhir6` (`id`, `timestamp`, `topic`, `data`, `volume(liter)`) VALUES
(1, '2022-05-21 08:21:44', 'topic/distance', '15.00', '150'),
(2, '2022-05-22 08:12:43', 'topic/distance', '16.00', '160'),
(3, '2022-05-23 08:21:47', 'topic/distance', '16.00', '160'),
(4, '2022-05-24 08:11:49', 'topic/distance', '15.00', '150'),
(5, '2022-05-25 08:31:51', 'topic/distance', '15.00', '150'),
(6, '2022-05-26 08:31:12', 'topic/distance', '15.00', '150'),
(7, '2022-05-27 08:00:55', 'topic/distance', '16.00', '160'),
(8, '2022-05-27 08:21:12', 'topic/distance', '19.00', '190'),
(9, '2022-05-28 08:15:21', 'topic/distance', '20.00', '200'),
(10, '2022-05-29 08:42:16', 'topic/distance', '20.00', '200'),
(11, '2022-05-30 08:34:03', 'topic/distance', '19.00', '190'),
(12, '2022-05-31 08:12:08', 'topic/distance', '19.00', '190'),
(13, '2022-06-01 08:34:07', 'topic/distance', '20.00', '200'),
(14, '2022-06-02 08:48:09', 'topic/distance', '20.00', '200'),
(15, '2022-06-03 08:19:12', 'topic/distance', '22.00', '220'),
(16, '2022-06-04 08:28:14', 'topic/distance', '24.00', '240'),
(17, '2022-06-05 08:12:31', 'topic/distance', '23.00', '230'),
(18, '2022-04-11 08:27:31', 'topic/distance', '25.00', '250'),
(19, '2022-04-12 08:18:31', 'topic/distance', '24.00', '240'),
(20, '2022-04-13 08:19:31', 'topic/distance', '22.00', '220'),
(21, '2022-04-14 08:26:31', 'topic/distance', '25.00', '250');

-- --------------------------------------------------------

--
-- Table structure for table `tugasakhir7`
--

CREATE TABLE `tugasakhir7` (
  `id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `topic` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugasakhir7`
--

INSERT INTO `tugasakhir7` (`id`, `timestamp`, `topic`, `data`) VALUES
(1, '2022-05-21 08:46:51', 'topic/ppm', '502.00'),
(2, '2022-05-22 08:00:53', 'topic/ppm', '528.00'),
(3, '2022-05-23 08:16:55', 'topic/ppm', '567.00'),
(4, '2022-05-24 08:21:57', 'topic/ppm', '589.00'),
(5, '2022-05-25 09:00:59', 'topic/ppm', '623.00'),
(6, '2022-06-26 08:47:01', 'topic/ppm', '664.00'),
(7, '2022-05-27 08:45:03', 'topic/ppm', '687.00'),
(8, '2022-06-28 08:34:05', 'topic/ppm', '706.00'),
(9, '2022-06-29 08:12:07', 'topic/ppm', '728.00'),
(10, '2022-06-30 08:47:09', 'topic/ppm', '780.00'),
(11, '2022-06-01 08:47:11', 'topic/ppm', '735.00'),
(12, '2022-06-02 08:01:13', 'topic/ppm', '828.00'),
(13, '2022-06-03 08:56:15', 'topic/ppm', '856.00'),
(14, '2022-06-04 08:21:17', 'topic/ppm', '867.00'),
(15, '2022-06-05 08:22:19', 'topic/ppm', '912.00'),
(16, '2022-06-06 08:47:21', 'topic/ppm', '934.00'),
(17, '2022-06-07 08:47:23', 'topic/ppm', '978.00'),
(18, '2022-06-08 08:45:25', 'topic/ppm', '982.00'),
(19, '2022-06-09 08:29:28', 'topic/ppm', '993.00'),
(20, '2022-06-10 08:21:31', 'topic/ppm', '1020.00'),
(21, '2022-06-11 08:47:31', 'topic/ppm', '1035.00'),
(22, '2022-07-09 09:22:49', 'topic/ppm', '212.00'),
(23, '2022-07-10 14:22:49', 'topic/ppm', '256.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `telepon_user` varchar(25) NOT NULL,
  `alamat_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `password_user`, `nama_user`, `telepon_user`, `alamat_user`) VALUES
(1, 'cepo@gmail.com', 'cepo123', 'cepo123', '082361647111', ''),
(5, 'nola@gmail.com', '', 'layla', '098765432', ''),
(7, 'fandi@gmail.com', 'fandi123', 'fandi', '098765432', 'medan'),
(8, 'naldo@gmail.com', 'naldo123', 'naldo', '09876543', 'medan'),
(9, 'joni@gmail.com', 'joni123', 'joni', '0987654321', 'siheang parsoburan'),
(10, 'mutiaramagdalena.simamora@yahoo.co.id', 'tia', 'Mutiara simamora', '5667790', 'kesehatan'),
(11, 'tiarmagurning810@gmail.com', 'tiarma123', 'Tiarma Elfrida Gurning', '085831312084', 'Desa Lumban Gurning'),
(12, 'daniel15@gmail.com', 'daniel123nd', 'daniel', '081200987542', 'balige'),
(14, 'evita@gmail.com', 'evita123', 'Evita', '081273663621', 'silaen'),
(15, 'tiarmael@gmail.com', 'gurning123', 'Tiarma Elfrida Gurning', '085831312084', 'Desa Lumban Gurning'),
(16, 'pijor12@gmail', '123', 'pijor', '324234', 'asd'),
(17, 'evita11@gmail.com', 'evita123', 'Evita', '0987654545', 'silaen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `datasensor`
--
ALTER TABLE `datasensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indexes for table `rentangminggu`
--
ALTER TABLE `rentangminggu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `tb_kontrol`
--
ALTER TABLE `tb_kontrol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugasakhir6`
--
ALTER TABLE `tugasakhir6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugasakhir7`
--
ALTER TABLE `tugasakhir7`
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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rentangminggu`
--
ALTER TABLE `rentangminggu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kontrol`
--
ALTER TABLE `tb_kontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tugasakhir6`
--
ALTER TABLE `tugasakhir6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3733;

--
-- AUTO_INCREMENT for table `tugasakhir7`
--
ALTER TABLE `tugasakhir7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2388;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
