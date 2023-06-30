-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 15:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_no` int(11) NOT NULL,
  `bill_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `bill_date`, `email`) VALUES
(5, '2022-12-27 15:42:12', 'user@locahost.com'),
(6, '2022-12-27 15:49:57', 'user@locahost.com'),
(7, '2022-12-27 15:50:27', 'user@locahost.com'),
(8, '2022-12-28 10:22:12', 'user@locahost.com'),
(9, '2022-12-28 10:23:17', 'user@locahost.com'),
(10, '2022-12-28 10:27:16', 'user@locahost.com'),
(11, '2022-12-28 10:28:03', 'user@locahost.com'),
(12, '2022-12-28 13:03:56', 'user@locahost.com'),
(13, '2022-12-28 13:06:28', 'user@locahost.com');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_no` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `itemqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`bill_no`, `itemid`, `itemqty`) VALUES
(7, 1, 1),
(7, 2, 1),
(8, 6, 1),
(9, 1, 2),
(10, 1, 1),
(11, 1, 1),
(11, 2, 1),
(11, 3, 1),
(11, 4, 1),
(11, 5, 1),
(12, 1, 2),
(13, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Persian', 'Kucing persia adalah ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek.', 3599900, 'kucing1.png'),
(2, 'Himalayan', 'Kucing himalaya adalah salah satu ras kucing domestik yang merupakan hasil persilangan antara kucing persia dengan kucing siam.', 3199900, 'kucing2.png'),
(3, 'Ragdoll', 'Ragdoll adalah kucing berbadan besar, dada yang lebar, dan panggul yang besar. Bulu Ragdoll panjangnya sedang, dengan tekstur seperti bulu pada kelinci.', 3899900, 'kucing3.png'),
(4, 'British shorthair', 'British shorthair memiliki ukuran tubuh sedang sampai dengan cukup besar dengan berat badan sekitar 4–8 kg.', 5399900, 'kucing4.png'),
(5, 'American shorthair', 'American shorthair adalah kucing yang memiliki bulu yang pendek, tebal, padat, dan sedikit kaku, serta memiliki kaki dan cakar yang kuat.', 4399900, 'kucing5.png'),
(6, 'Whiskas 1kg', 'Kamu harus memilih sesuai dengan ras, umur, dan juga kondisi kucing. Salah satu merek cat food yang jadi pilihan tepat adalah makanan kucing Whiskas.', 62900, 'whiskas.png'),
(7, 'Royal canin 1kg', 'Kalau untuk kucing kesayangan, pastinya kamu harus memberikan makanan bernutrisi terbaik! Royal Canin Persian Adult bisa jadi pilihan!', 154900, 'royalcanin.png'),
(8, 'Whiskas wet 80g', 'Whiskas wet food merupakan pilihan terbaik untuk jenis makanan bernutrisi yang bisa di berikan untuk peliharaan kucing kesayangan.', 9900, 'whiskaswetfood.png'),
(9, 'Meo creamy treats', 'Me-o creamy treats adalah makanan kucing yang berbentuk cair dalam kemasan sachet. merupakan snack atau camilan buat kucing kesayangan anda.', 24900, 'meo.png'),
(10, 'Cat cage', 'Rumah bagi Anabul kesayangan anda.', 159900, 'kandangkucing.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `notelp` varchar(200) NOT NULL,
  `komen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `notelp`, `komen`) VALUES
('user', 'user@localhost.com', '+1234567890', 'Kenapa harga kandang kucing mahal?');

-- --------------------------------------------------------

--
-- Table structure for table `temp_order`
--

CREATE TABLE `temp_order` (
  `email` varchar(30) NOT NULL,
  `itemid` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `mobile`, `address`) VALUES
(1, 'user', 'user@localhost.com', '12345678', 'user', '+1234567890', 'Jl. Cempaka Putih Barat, Jakarta Pusat, DKI Jakarta.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
