-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 10:19 PM
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
-- Database: `booksmart_bazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `qty` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('9VurWR9c7WGZSq7cxvnH', 'dRcHl7EQ86ZLRkG1yesh', '6oc4P299qio1yw7AZRj9', '120', '1'),
('7bFEgDIxNLIoXgLjXpu1', 'location:login.php', 'JEl6Rlvu6hUt7OCDiKNp', '100', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `subject`, `message`) VALUES
('sWFoVk04iewT6rsmdmqL', 'dRcHl7EQ86ZLRkG1yesh', 'Rohit kumar', 'rohit@gmail.com', 'class 8 science NCERT are not present in your store', 'rohit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_type` varchar(30) NOT NULL,
  `method` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `dates` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `seller_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `dates`, `status`, `payment_status`) VALUES
('66a9fa8ec42b7', 'dRcHl7EQ86ZLRkG1yesh', 'VCxD0UyUTWaCK0QyU3ga', 'Rohit kumar', '8840263950', 'rohit@gmail.com', 'sudamapur , khojawan , varanasi , india , 221010', 'home', 'cash on delivery', '6oc4P299qio1yw7AZRj9', 120, 1, 0, '', ''),
('66a9fa8ec85ca', 'dRcHl7EQ86ZLRkG1yesh', 'VCxD0UyUTWaCK0QyU3ga', 'Rohit kumar', '8840263950', 'rohit@gmail.com', 'sudamapur , khojawan , varanasi , india , 221010', 'home', 'cash on delivery', 'JEl6Rlvu6hUt7OCDiKNp', 100, 1, 0, '', ''),
('66a9fa8ed047b', 'dRcHl7EQ86ZLRkG1yesh', 'VCxD0UyUTWaCK0QyU3ga', 'Rohit kumar', '8840263950', 'rohit@gmail.com', 'sudamapur , khojawan , varanasi , india , 221010', 'home', 'cash on delivery', 'RGp7b7MUAkmkXo8L0s0D', 560, 1, 0, 'canceled', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(20) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `name`, `price`, `image`, `stock`, `product_detail`, `status`) VALUES
('JEl6Rlvu6hUt7OCDiKNp', 'VCxD0UyUTWaCK0QyU3ga', 'HoneyDew', 100, 'lit.jpg', 100, 'English NCERT class 9', 'active'),
('RGp7b7MUAkmkXo8L0s0D', 'VCxD0UyUTWaCK0QyU3ga', 'Biology Experimental', 560, 'bio.jpg', 50, 'Class 12 bio practical', 'active'),
('g7wtPwf94KUpULnUFPF0', 'VCxD0UyUTWaCK0QyU3ga', 'Maths Magic', 120, 'boy-read.jpg', 25, 'class 6 math book.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `password`, `image`) VALUES
('VCxD0UyUTWaCK0QyU3ga', 'Neha singh', 'neha@gmail.com', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'oDQgXtNMqdosncPxfQps.jpg'),
('Du2Gxc6HrmM2mHJMH45j', 'Rohit', 'rohit@gmail.com', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', 'ZnIdtkA8TuMKoNlcYio9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('dRcHl7EQ86ZLRkG1yesh', 'Rohit', 'rohit@gmail.com', '1111', 'jLOMn9ZPYqJtNVl1A24N.jpg'),
('cC2914Br3QJ6e12Rd2gx', 'rohit kumar', 'rohitkumar@gmail.com', '00000', 'rFN1lNtRFbBT6c6FxOiw.jpg'),
('AqmEpd31FfbdtAGNLyeY', 'Piyush Singh', 'piyush@gmail.com', '0000', 'BodU6hJCPwtDob8nS7Xd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `price`) VALUES
('6JDMECcsT0EYtczXPvYC', 'dRcHl7EQ86ZLRkG1yesh', '4bqDTDE3JgG32tzqeeAH', '100');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
