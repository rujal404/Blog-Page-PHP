-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2024 at 11:38 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(2, 'Wild Life', 'This is the discription'),
(5, 'Science &amp; Technology', 'This is the discription'),
(6, 'Uncategorised', 'This is the description'),
(7, 'Food', 'This is the discription'),
(8, 'Art', 'THis is the discription'),
(9, 'Music', 'This is the discription');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `thumbnail`, `date_time`, `category_id`, `author_id`, `is_featured`) VALUES
(1, 'fasdsda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac cursus augue. Praesent id suscipit tellus, at tincidunt enim. Integer sed arcu libero. Curabitur quis vestibulum tellus, in vestibulum velit. Integer lobortis lacus a arcu eleifend, vehicula consequat ligula condimentum. Pellentesque bibendum massa et odio aliquet fermentum. Sed rhoncus mi a suscipit vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis est ut est varius tristique. Donec vulputate metus lacus, eget dictum velit viverra ut. Phasellus fringilla convallis purus, vel vehicula eros. Fusce sollicitudin vel massa id vestibulum. Nulla ultrices maximus sem eget blandit. Sed vestibulum urna tortor, a interdum arcu cursus quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;\r\n\r\nNullam diam nulla, ullamcorper vitae porttitor vel, dignissim sollicitudin libero. Mauris non dui libero. Suspendisse ullamcorper non nisl sed accumsan. Nam sed ante dui. Etiam fringilla nisl vitae ex viverra, id interdum velit condimentum. Donec finibus dolor sit amet tortor dignissim, sit amet maximus nibh facilisis. Proin id ligula sodales, imperdiet velit sit amet, eleifend magna. Sed ornare volutpat diam. Nulla facilisi. Nam vitae mauris lectus. Suspendisse mauris justo, mollis ut tortor at, suscipit ullamcorper enim. Aenean volutpat metus id lectus pellentesque, ac dictum mauris gravida. Donec sed molestie arcu. Nam orci dui, finibus quis sem quis, viverra aliquet mi.', '1735105101blog48.jpg', '2024-12-25 05:38:21', 2, 11, 1),
(6, 'wwwwwwww', 'wwwwwwwwwwww', '1735125193blog6.jpg', '2024-12-25 11:13:13', 7, 4, 0),
(7, 'lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac cursus augue. Praesent id suscipit tellus, at tincidunt enim. Integer sed arcu libero. Curabitur quis vestibulum tellus, in vestibulum velit. Integer lobortis lacus a arcu eleifend, vehicula consequat ligula condimentum. Pellentesque bibendum massa et odio aliquet fermentum. Sed rhoncus mi a suscipit vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis est ut est varius tristique. Donec vulputate metus lacus, eget dictum velit viverra ut. Phasellus fringilla convallis purus, vel vehicula eros. Fusce sollicitudin vel massa id vestibulum. Nulla ultrices maximus sem eget blandit. Sed vestibulum urna tortor, a interdum arcu cursus quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;\r\n\r\nNullam diam nulla, ullamcorper vitae porttitor vel, dignissim sollicitudin libero. Mauris non dui libero. Suspendisse ullamcorper non nisl sed accumsan. Nam sed ante dui. Etiam fringilla nisl vitae ex viverra, id interdum velit condimentum. Donec finibus dolor sit amet tortor dignissim, sit amet maximus nibh facilisis. Proin id ligula sodales, imperdiet velit sit amet, eleifend magna. Sed ornare volutpat diam. Nulla facilisi. Nam vitae mauris lectus. Suspendisse mauris justo, mollis ut tortor at, suscipit ullamcorper enim. Aenean volutpat metus id lectus pellentesque, ac dictum mauris gravida. Donec sed molestie arcu. Nam orci dui, finibus quis sem quis, viverra aliquet mi.', '1735202834blog15.jpg', '2024-12-26 08:47:14', 5, 11, 0),
(8, 'lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac cursus augue. Praesent id suscipit tellus, at tincidunt enim. Integer sed arcu libero. Curabitur quis vestibulum tellus, in vestibulum velit. Integer lobortis lacus a arcu eleifend, vehicula consequat ligula condimentum. Pellentesque bibendum massa et odio aliquet fermentum. Sed rhoncus mi a suscipit vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis est ut est varius tristique. Donec vulputate metus lacus, eget dictum velit viverra ut. Phasellus fringilla convallis purus, vel vehicula eros. Fusce sollicitudin vel massa id vestibulum. Nulla ultrices maximus sem eget blandit. Sed vestibulum urna tortor, a interdum arcu cursus quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;\r\n\r\nNullam diam nulla, ullamcorper vitae porttitor vel, dignissim sollicitudin libero. Mauris non dui libero. Suspendisse ullamcorper non nisl sed accumsan. Nam sed ante dui. Etiam fringilla nisl vitae ex viverra, id interdum velit condimentum. Donec finibus dolor sit amet tortor dignissim, sit amet maximus nibh facilisis. Proin id ligula sodales, imperdiet velit sit amet, eleifend magna. Sed ornare volutpat diam. Nulla facilisi. Nam vitae mauris lectus. Suspendisse mauris justo, mollis ut tortor at, suscipit ullamcorper enim. Aenean volutpat metus id lectus pellentesque, ac dictum mauris gravida. Donec sed molestie arcu. Nam orci dui, finibus quis sem quis, viverra aliquet mi.', '1735203314blog2.jpg', '2024-12-26 08:55:14', 5, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`) VALUES
(4, 'Rujal', 'Tamrakar', 'rujal404', 'rujal.tamrakar@gmail.com', '$2y$10$XQ5rfclaHKQbJ/00lCwUSu1ObwxtG43ZdrjrA5i.EYtTo8YvbVq6C', '1734666037avatar2.jpg', 1),
(11, 'Edem', 'Quist', 'edem', 'edem@mail.com', '$2y$10$M3n97IJ7ab5s84ncF3WZyuqEhK2wVurVTyPcI7ZSgY7UAlG6NwgKK', '1734846135avatar2.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_blog_category` (`category_id`),
  ADD KEY `FK_blog_author` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_blog_author` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_blog_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
