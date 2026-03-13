-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2026 at 08:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `broker.com_parth`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact us`
--

CREATE TABLE `contact us` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `price`, `image`) VALUES
(1, 'Refrigerator', 'LG', 10000, 'https://via.placeholder.com/180x120'),
(2, 'Washing Machine', 'Samsung', 32000, 'https://via.placeholder.com/180x120'),
(3, 'Microwave Oven', 'IFB', 14500, 'https://via.placeholder.com/180x120'),
(4, 'Air Conditioner', 'Daikin', 45000, 'https://via.placeholder.com/180x120'),
(5, 'LED TV', 'Sony', 55000, 'https://via.placeholder.com/180x120'),
(6, 'Laptop', 'HP', 62000, 'https://via.placeholder.com/180x120'),
(7, 'Mobile Phone', 'OnePlus', 30000, 'https://via.placeholder.com/180x120'),
(8, 'Tablet', 'Apple', 45000, 'https://via.placeholder.com/180x120'),
(9, 'Smart Watch', 'Boat', 5000, 'https://via.placeholder.com/180x120'),
(10, 'Headphones', 'JBL', 3500, 'https://via.placeholder.com/180x120'),
(12, 'ac', 'samsung', 24000, 'images/1772448626_ac1.jpg'),
(13, 'ac', 'LG', 12000, 'images/1772779668_ac1.jpg'),
(14, 'ac', 'LG', 12000, 'images/1772780161_ac1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `username`, `email`, `password`) VALUES
(4, 'kiran_raval12345', 'kiran_raval@gmail.com', 'qwer'),
(5, 'anil_raval', 'anil_raval@gmail.com', 'trhrth'),
(6, 'dhruv_solanki_krashnanagar', 'dhruv_solanki@gmail.com', '123456789'),
(7, 'parth_parmar', 'p@gmail.com', '123456789'),
(8, 'parth_parmar_lekavada', 'parth_parmar456@gmail.com', '12345'),
(30, 'dipak_thakor', 'dipak_thakor123@gmail.com', '123123456'),
(86, 'gfnsfgnsfg', 'papa@gmail.com', '1'),
(87, 'csC', 'papa@gmail.com', '1'),
(88, 'hmssdf', 'parth@gmail.com', '1'),
(89, 'dfgsnfda', 'papa@gmail.com', '1'),
(90, 'fbas', 'papa@gmail.com', 'sd'),
(91, 'RHG', 'papa@gmail.com', 'W'),
(92, 'erer', 'papa@gmail.com', 'q'),
(93, 'dfbd', 'papa@gmail.com', '1'),
(94, 'sgdndfbdfb', 'papa@gmail.com', '1'),
(95, 'JANU123', 'JANU123@GMAIL.COM', '$2y$10$al1glfHJ'),
(96, 'srthsrt', 'papa@gmail.com', '111'),
(97, 'bsdfbd', 'dala_123@gmail.com', '111'),
(98, 'zdfzdfzfs', 'papa@gmail.com', '1111'),
(99, 'anil', 'parth@gmail.com', '111'),
(102, 'test11', 'test11@gail.com', '$2y$10$x.Fw5auN'),
(103, 'test13', 'test13@gmail.com', '$2y$10$BNfA/rDN'),
(104, 'test15', 'test15@gmail.com', '$2y$10$8DWZ.vbV'),
(105, 'test16', 'test16@gmail.com', '$2y$10$SevVPh1W'),
(106, 'test17', 'test17@gmail.com', '$2y$10$P2MTcVh9'),
(107, 'test18', 'test18@gmail.com', '$2y$10$/gte68lj'),
(108, 'test19', 'test19@gmail.com', '$2y$10$o8dmwmUB'),
(109, 'parth123', 'parth123@gmail.com', '$2y$10$CZGSCZrt'),
(110, 'janvi420', 'janvibhoraniya@gmail.com', '12345'),
(111, 'parth2341', 'parth243@gmail.com', '12345'),
(112, 'paramar parth', 'gyansafar17@gmail.com', '$2y$10$67dbh3dQS/2dgne9rlDiougV35PeFZtvZW/5Q13K5LPQFIAp.K3pm'),
(113, 'uttarasutariya', 'uttara123@gmail.com', '$2y$10$6pZmjXo19inDPvzE2IgdvukF/pZGKtuK7TMybLK05AqMB2u.zDm5W'),
(114, 'parmarparth00000', 'anil0000@gmail.com', '$2y$10$fVgfOQcTqgAKGphSMK30neFFzoKEFhaFXKgl4vJwsEODjQLVCVMWG'),
(115, 'parmarnayan1099', 'mahesh@gmail.com', '$2y$10$aLuUNhXuPhz.aEK.BxVcDONuGqkctmF/JX5emVby2yslY54ODXlSq'),
(116, 'rajanpatel', 'rajaa420@gmail.com', '$2y$10$cm5D8U3JqoALDiJFb12xJ.5sFS.3uwDZfbB4fUHI1cIk1MM05Upku'),
(117, 'parmarparth1234', 'mahes1111h@gmail.com', '$2y$10$D/NA9KO9UroEr9LacD0SN.qN/YEveyTvCCUmlyK1PRyFym1lJpjna'),
(118, 'dhruv420', 'Dhruv420@gmail.com', '$2y$10$Sb0rK3GbGsumapX2g68qReQqyIiwvGVC/KR4SXYAC0GOE6UKUPGyG'),
(119, 'rajanpatel222', 'g2222@gmail.com', '$2y$10$lhsWEEiy8I83CX8MHhKQpeozoOEcg0WD4a/6W1UnSyCGNo42dXSN6'),
(120, 'rajanpatel222', 'g222222@gmail.com', '$2y$10$s5ObkKD.rPVQPecdVkAUOekYBxreh/NRp6cBCSFIUbQxPCQ5URENO'),
(121, 'rajanpatel333', 'mahesh333@gmail.com', '$2y$10$IVQ2M9TIfFRtdcVjLUX88./7947mp55SsUgRE0QLEMSnoPIHGsMA.'),
(122, 'uttarasutariya23456', 'd123111112@gmail.com', '$2y$10$s.QcORp4ZRUBlmIzKt20Pux09PT.DrVxrVO68M9fQAvqTU7T2qBSa'),
(123, 'eqweqwregsdgs', 'maheshgsgfsdfgds@gmail.com', '$2y$10$pAP3X1GaSNAADLrTsifNp.k0JKzCQspc6gVhOloOX43lJg438MQRW'),
(124, 'parmarnayan2016', 'parthparmar2016@gmail.com', '$2y$10$bKbDCX43YwF9WUlZWQHWZ.WVqaYzBRI7DP5ZXF0xFyACoiLVsOxMW'),
(125, 'parmarparth1234ffgjghjkh', 'cvvfsgsgsg@gmail.com', '$2y$10$KeGhJf9Sr7vc/sajZ1.QQuAEA22g5AFj.TJ/GJwRKhBmHNdrgYU3u'),
(126, 'parmarparth1234ffgjghjkh', 'cvvfsgsgsg@gmail.com', '$2y$10$xYFH9Goju8SmjpW4tQExxOxBp3bwEMEROJWFs2dWU5O/fFI1rMOYe'),
(127, 'parmarparth1234ddsfds', 'mahevscssh@gmail.com', '$2y$10$HkKmupZPkXL6VbrFwi054eKpN8saksyGjLalTJHfT5JRAX6dOjAw2'),
(128, 'parmarparth1234ddsfds', 'mahevscssh@gmail.com', '$2y$10$iiKNkpgg17kjuxFbCmuDhOJQRP7NMQIyzU75pv3lr2g43DKcSlPia'),
(129, 'parmarparth1234ddsfds', 'mahevscssdsfdsfssh@gmail.com', '$2y$10$VzcxH5//3gCo9gRW0eHiXu06D5ui7ro8t0ZZYyMO9hS8qCMqvP4RO'),
(130, 'parmarparth1234ddsfds', 'mahevscssdsfdsfssh@gmail.com', '$2y$10$UNq1E1qGDpPCiKoIa/jFsOfjJnGTm6xIY9yVQCriwUJJzA03zNaKm'),
(131, 'parmarnayan1099grhgh', 'gsdsfdsf@gmail.com', '$2y$10$kmxwvqEDTAOIYD41YNXh0OK/LnKsKGDgNkcxc4UURPKbKWA11P76i'),
(132, 'parmarnaran111', 'gsdsfrewfdgfdghbdsf@gmail.com', '$2y$10$QjXoKGXfJn9Yp1iK7UomXOvu/F7Dn7Ko7THR5SJtzqY.nRkGl.8/q'),
(133, 'parmarnaran111', 'sss@gmail.com', '$2y$10$GdhmEE6Gl/qB4nfTsv1hP.C3hqTTttGRD2jBTP4yneRC8yGHwUzYe'),
(134, 'ddd', 'ssdds@gmail.com', '$2y$10$gB5K51gS04kt4ybcp43A.OM2OiKMAFv1B25NSxOIe1lVCCa5InJFi'),
(135, 'ddd', 'd@gmail.com', '$2y$10$g/xqP5VbnTytH5bWpAEkueH1cYT.CTS1f2W.okFlK7Kf7Y5q9K7xC'),
(136, 'parmarparth1234', 'wwg@gmail.com', '$2y$10$T.nz10Ca0sYP1nu3xW9JBeUx6NeVWS4kGHQLvjVNXXsCh4DB9Ft2i'),
(137, 'parmarnayan1099', 'g11@gmail.com', '$2y$10$8pilsNMH3mSsmsyMN5Ty4OWWQT94vaetuSV5KfNZ8bD0ejVwYiCBu'),
(138, 'shrutipatel', 'shruuu23@gmail.com', '$2y$10$xzYhsZIlHxAUNcSV3akruujU2c75nc4.KLOdk/4yXw9WtHN61NQrW'),
(139, 'parmarparth1234', 'mahqwqeqeesh@gmail.com', '$2y$10$MKhXBhRPHjnW.fak1pD0..FJn9r.852jE0kOzaP5XetDI.p5T3nPa'),
(140, 'janvi', 'janviparmar123@gmail.com', '$2y$10$V.lICeGUfKdSDfTk05affOM0hw5tvyxX4zs/KXH6IBBTKN/wfQBHK'),
(141, 'Dhruv Prajapati', 'Dhruv1805@gmail.com', '$2y$10$Wo1VnCWI3Xt3eZqgiaenu.5dT1wILn1fFi5Wp5jRJ1RztcMsiK.NW'),
(142, 'parmarparthkumar', 'parth2001@gmail.com', '$2y$10$EmfuIvovztJPMkm3gAsAWOuWMaobiRYjAwTBlQ0jh5ykSUqaN6P.e'),
(143, 'parmarparth1234', 'd123@gmail.com', '$2y$10$WsbI461jCK1qjK4PjMP8ZeRSsg2Oim4WisB0YN8isEbNt3wRUU.vy');

-- --------------------------------------------------------

--
-- Table structure for table `seller_data`
--

CREATE TABLE `seller_data` (
  `Seller_id` int(11) NOT NULL,
  `Seller_name` text NOT NULL,
  `Seller_ email` varchar(55) NOT NULL,
  `Seller_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_data`
--

INSERT INTO `seller_data` (`Seller_id`, `Seller_name`, `Seller_ email`, `Seller_password`) VALUES
(1, 'test1', 'test1@gmail.com', '$2y$10$XnrLkPBXGv9kK'),
(2, 'test2', 'test2@gmail.com', '$2y$10$FQ13AbYNGsQhu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact us`
--
ALTER TABLE `contact us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `seller_data`
--
ALTER TABLE `seller_data`
  ADD PRIMARY KEY (`Seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact us`
--
ALTER TABLE `contact us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `seller_data`
--
ALTER TABLE `seller_data`
  MODIFY `Seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
