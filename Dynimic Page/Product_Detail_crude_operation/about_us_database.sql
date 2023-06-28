-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 10:05 PM
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
-- Database: `about_us_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_table`
--

CREATE TABLE `about_us_table` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `long_description` text NOT NULL,
  `short_description` text NOT NULL,
  `image` text NOT NULL,
  `on_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us_table`
--

INSERT INTO `about_us_table` (`id`, `title`, `sub_title`, `long_description`, `short_description`, `image`, `on_created`) VALUES
(10, 'About us', 'PRACTICAL MAGIC', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corru', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum placeat error quis corrupti eligendi facere facilis sequi voluptas,                          quisquam sint nam iusto quasi eos necessitatibus quas soluta quibusdam fuga unde.', 'images/AboutUs.jpg', 2147483647),
(12, 'CUSTOMER REVIEW', 'Lorem ipsum dolor sit amet,consectetur <br>adipisicing, consectetur adipisicing,<br> elit. Iusto ', 'Jane DOE', 'Verifited by CR', 'images', 2147483647),
(13, '30-DAY', 'Lorem ipsum dolor sit', '-', '-', '-', 2147483647),
(14, 'FREE', 'Lorem ipsum dolor sit', '-', '-', '-', 2147483647),
(15, '365', 'Lorem ipsum dolor sit', '-', '-', '-', 2147483647),
(16, 'FIND YOUR PRODUCT', '-', '-', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur blanditiis. Voluptatum molestias minima voluptas nesciunt', '-', 2147483647),
(17, 'Learn Everything About CBD', 'WHAT IS CBD', '-', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda earum cumque odio! Vero, nam nisi. Magnam, cumque eum! Dicta                           aspernatur nostrum, fuga perferendis facere odit earum officiis vero quo eligendi? aspernatur nostrum, fuga perferendis facere odit                          earum officiis vero quo eligendi?', '-', 2147483647),
(18, 'Subscribe to get special discounts<br>on our CBD products', '-', '-', '-', '-', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `images` text NOT NULL,
  `detail` text NOT NULL,
  `price` varchar(15) NOT NULL,
  `on_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `link`, `images`, `detail`, `price`, `on_created`) VALUES
(1, 'product-detail.html', 'images/prod-1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(2, 'product-detail.html', 'images/prod-2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(3, 'product-detail.html', 'images/prod-3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(4, 'product-detail.html', 'images/prod-1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(5, 'product-detail.html', 'images/prod-2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(6, 'product-detail.html', 'images/prod-3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(7, 'product-detail.html', 'images/prod-1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(8, 'product-detail.html', 'images/prod-2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(9, 'product-detail.html', 'images/prod-3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_table`
--
ALTER TABLE `about_us_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_table`
--
ALTER TABLE `about_us_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
