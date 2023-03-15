-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 07:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harmony`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_rating` decimal(10,1) NOT NULL,
  `email` varchar(128) NOT NULL,
  `review_comment` text NOT NULL,
  `review_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `product_id`, `review_rating`, `email`, `review_comment`, `review_date`) VALUES
(1, 1, '4.5', 'feiz@gmail.com', 'Nice idea.', 'January 14, 2023'),
(2, 1, '2.5', 'farhaan@gmail.com', 'Advertising 200 straws, got only 198.', 'January 04, 2023'),
(3, 4, '4.5', 'levyn@gmail.com', 'Kids love it.', 'January 21, 2023'),
(4, 4, '1.0', 'farhaan@gmail.com', 'Very nice for people having diabetes.', 'March 04, 2023'),
(5, 3, '0.5', 'geerish@gmail.com', 'Stayed in my drinks for just 2 minutes, almost completely disolved in it.', 'February 14, 2023'),
(6, 12, '4.0', 'sarwin@gmail.com', 'Overall good quality.', 'February 24, 2023'),
(7, 15, '0.5', 'farhaan@gmail.com', 'Hoped too get the food as in the picture, got empty plates.', 'March 09, 2023'),
(8, 11, '1.0', 'geerish@gmail.com', 'Good idea but bad product. Knife does not even cut well.', 'February 01, 2023'),
(9, 19, '0.5', 'sarwin@gmail.com', 'Utensils had a bad aftertaste.', 'March 02, 2022'),
(10, 17, '4.5', 'feiz@gmail.com', 'Satisfied of the quality of the product', 'March 14, 2023'),
(11, 17, '4.0', 'farhaan@gmail.com', 'Not the best thing you can use but does its job.', 'March 14, 2023'),
(12, 6, '5.0', 'levyn@gmail.com', 'Good quality products.', 'August 31, 2023'),
(13, 2, '2.5', 'levyn@gmail.com', 'Not as durable as advertised.', 'January 15, 2022'),
(14, 26, '0.5', 'farhaan@gmail.com', 'Smaller than advertised. Not enough even for a kid', 'March 15, 2023'),
(15, 29, '4.0', 'feiz@gmail.com', 'Have a premium feel to it. The only noticeable problem is that the cover is a little too loose.', 'September 28, 2023'),
(16, 25, '0.5', 'geerish@gmail.com', 'I don\'t know where they stored it but it had holes in all the bags. Unusable.', 'March 25, 2023'),
(17, 22, '4.5', 'sarwin@gmail.com', 'Been using it for a long time.', 'March 15, 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
