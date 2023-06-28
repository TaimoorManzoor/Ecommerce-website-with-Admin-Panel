-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 02:04 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_table`
--

CREATE TABLE `checkout_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `apartment` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` int(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_table`
--

INSERT INTO `checkout_table` (`id`, `first_name`, `last_name`, `company_name`, `country`, `street_address`, `apartment`, `city`, `state`, `zip`, `phone`, `email`, `rate`, `payment`) VALUES
(1, 'Taimoor', 'Manzoor', 'TMM', 'United State(US)', 'Home Number And Street Number', 'Apartment.suit.unit.etc(optional)', 'Karachi', 'Sindh', 998, '03001213501', 'taimoormanzoor2001@gmail.com', '', ''),
(2, 'Taimoor', 'Manzoor', 'TMM', 'United State(US)', 'Home Number And Street Number', 'Apartment.suit.unit.etc(optional)', 'Karachi', 'Sindh', 998, '03001213501', 'taimoormanzoor2001@gmail.com', '', ''),
(3, 'Taimoor', 'Manzoor', 'TMM', 'United State(US)', 'Home Number And Street Number', 'Apartment.suit.unit.etc(optional)', 'Karachi', 'Sindh', 998, '03001213501', 'taimoormanzoor2001@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `on_created` int(11) NOT NULL DEFAULT current_timestamp(),
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `address`, `email`, `on_created`, `type`) VALUES
(1, 'admin', 'shanti', 'sp20bscs0028@maju.edu.pk', 2147483647, 'a'),
(2, 'TAIMOOR', 'SHANTI', 'SP20BSCS0021@GMAL.COM', 2147483647, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_table`
--

CREATE TABLE `contact_us_table` (
  `id` int(11) NOT NULL,
  `main_title` text NOT NULL,
  `short_description` text NOT NULL,
  `on_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us_table`
--

INSERT INTO `contact_us_table` (`id`, `main_title`, `short_description`, `on_created`) VALUES
(3, 'GET IN TOUCH', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae veniam tempora nihil eveniet at enim iusto dolorum nemo sequi', 2147483647),
(12, 'Email', 'info@mail.com', 2147483647),
(13, 'Phone:', '+123456789', 2147483647),
(14, 'Address', 'Lorem Ipsum :1234', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `home_table`
--

CREATE TABLE `home_table` (
  `id` int(11) NOT NULL,
  `main_title` text NOT NULL,
  `sub_title` text NOT NULL,
  `short_description` text NOT NULL,
  `images` text NOT NULL,
  `on_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_table`
--

INSERT INTO `home_table` (`id`, `main_title`, `sub_title`, `short_description`, `images`, `on_created`) VALUES
(1, 'CANANDA S 1', 'PREMIUM QUALITY CBD OIL', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum suscipit fugit laboriosam', '', 2147483647),
(2, 'What CAN WE HELP YOU WITH?', '', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium possimus odioratione dignissimos veniam natus.Ad delectus repellat enim ratione dignissimos ratione dignissimos ', '', 2147483647),
(3, '', 'Lorem Ipsum', '', 'images/help-1.jpg', 2147483647),
(4, '', 'Lorem Ipsum', '', 'images/help-2.jpg', 2147483647),
(5, '', 'Lorem Ipsum', '', 'images/help-3.jpg', 2147483647),
(6, '', 'Lorem Ipsum', '', 'images/help-4.jpg', 2147483647),
(7, '', 'Lorem Ipsum', '', 'images/help-5.jpg', 2147483647),
(8, '', 'Lorem Ipsum', '', 'images/help-6.jpg', 2147483647),
(9, 'CUSTOMER REVIEW', 'Jane DOE', 'Lorem ipsum dolor sit amet,consectetur <br>adipisicing, consectetur adipisicing', '', 2147483647),
(10, 'FIND YOUR PRODUCT', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, consectetur blanditiis. Voluptatum molestias minima voluptas nesciunt.', '', 2147483647),
(11, 'Learn Everything About CBD', '', '', '', 2147483647),
(12, 'WHAT IS CBD', '', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda earum cumque odio! Vero, nam nisi. Magnam, cumque eum! Dicta                           aspernatur nostrum, fuga perferendis facere odit earum officiis vero quo eligendi? aspernatur nostrum, fuga perferendis facere odit                          earum officiis vero quo eligendi?', '', 2147483647),
(13, 'WHAT IS CBD', '', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda earum cumque odio! Vero, nam nisi. Magnam, cumque eum! Dicta                           aspernatur nostrum, fuga perferendis facere odit earum officiis vero quo eligendi? aspernatur nostrum, fuga perferendis facere odit                          earum officiis vero quo eligendi?', '', 2147483647),
(14, 'Subscribe to get special discounts<br>on our CBD products', '', 'Enter your Email Address', '', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `title` text NOT NULL,
  `price` text NOT NULL,
  `short_description` text NOT NULL,
  `images` text NOT NULL,
  `id` int(11) NOT NULL,
  `on_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`title`, `price`, `short_description`, `images`, `id`, `on_created`) VALUES
('LOREM IPSUM', '$123.00$', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam eum aspernatur necessitatibus dignissimos veniam ad alias officiis libero non esse, asperiores consequatur sequi minus quaerat vitae fugiat in distinctio doloremque?', 'images/Product-Details.jpg', 7, 2147483647),
('', '', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam eum aspernatur necessitatibus dignissimos veniam ad alias officiis libero non esse, asperiores consequatur sequi minus quaerat vitae fugiat in distinctio doloremque', 'images/pngegg (82) copy 2.png', 8, 2147483647);

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
(2, 'product-detail.php', 'images/prod-2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(3, 'product-detail.php', 'images/prod-3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(4, 'product-detail.php', 'images/prod-1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(5, 'product-detail.php', 'images/prod-2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(6, 'product-detail.php', 'images/prod-3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(7, 'product-detail.php', 'images/prod-1.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(8, 'product-detail.php', 'images/prod-2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(9, 'product-detail.php', 'images/prod-3.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647),
(18, 'product-detail.php', 'images/prod-2.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Lorem ipsum dolor sit, amet consectetur adipisicing elit.', '$123.00 CAD', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `retype_password` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `on_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`first_name`, `last_name`, `email`, `password`, `retype_password`, `id`, `on_created`) VALUES
('Taimoor', 'Manzoor', 'taimoormanzoor2001@gmail.com', 'taimoor', 'taimoor', 1, 2147483647),
('Hasan', 'Ali', 'hasan2001@gmail.com', 'adsd', 'adsd', 2, 2147483647),
('HAQEEQAT', 'Ali', 'haqeetat2001@gmail.com', 'haqeeqat', 'haqeeqat', 3, 2147483647),
('Hasan', 'Ali', 'taimoormanzoor2001@gmail.com', 'taimoor', 'taimoor', 4, 2147483647),
('HAQEEQAT', 'WAQAR', 'taimoormanzoor2001@gmail.com', 'taimoor', 'taimoor', 5, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_table`
--
ALTER TABLE `about_us_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_table`
--
ALTER TABLE `checkout_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_table`
--
ALTER TABLE `contact_us_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_table`
--
ALTER TABLE `home_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_table`
--
ALTER TABLE `about_us_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `checkout_table`
--
ALTER TABLE `checkout_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us_table`
--
ALTER TABLE `contact_us_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `home_table`
--
ALTER TABLE `home_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
