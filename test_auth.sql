-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2019 at 02:57 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `hn_user`
--

CREATE TABLE `hn_user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hn_user`
--

INSERT INTO `hn_user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Agus Novian', 'agus@admin.com', 'agus.jpg', '$2y$10$fNXzYzv3IHbucqliPjeeXOQFytPwmmI/SKxk4AG6Z1n/LVtChEq3W', 1, 1, 1553952787),
(5, 'Chyntia Sefiantri', 'chyntia@member.com', 'bontot.jpg', '$2y$10$9s2blNWrdR.WO9SZD8uR3.Km5vddIhwOWlMHuPRi2A7l2ZF78dW6e', 2, 1, 1554037243);

-- --------------------------------------------------------

--
-- Table structure for table `hn_user_access_menu`
--

CREATE TABLE `hn_user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hn_user_access_menu`
--

INSERT INTO `hn_user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(15, 1, 3),
(18, 2, 2),
(24, 1, 6),
(25, 1, 7),
(27, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hn_user_menu`
--

CREATE TABLE `hn_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hn_user_menu`
--

INSERT INTO `hn_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `hn_user_role`
--

CREATE TABLE `hn_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hn_user_role`
--

INSERT INTO `hn_user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Vendor');

-- --------------------------------------------------------

--
-- Table structure for table `hn_user_sub_menu`
--

CREATE TABLE `hn_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hn_user_sub_menu`
--

INSERT INTO `hn_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-home', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hn_user_token`
--

CREATE TABLE `hn_user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hn_user_token`
--

INSERT INTO `hn_user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'agusn995@gmail.com', '5UsgbRZtgrWj4b1avYuHLsiLZUjvQvyW4Lq5wMqGOg8=', 1554191882),
(2, 'agusn995@gmail.com', 'kySI+aaH1NEEgImgBodusJw3pdGO9Qm7PF0CjcH9HDc=', 1554191995),
(3, 'agusn995@gmail.com', 'yKeTm3+GOXVRDZPUANvJsrr+xWo4vxN5mqVDtYVN3GU=', 1554194303),
(4, 'agusn995@gmail.com', '+HTHhOHuuKaF09Ccv+Pwtyw95rgTg2yK0E3Dwlpq8jQ=', 1554197086);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hn_user`
--
ALTER TABLE `hn_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hn_user_access_menu`
--
ALTER TABLE `hn_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hn_user_menu`
--
ALTER TABLE `hn_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hn_user_role`
--
ALTER TABLE `hn_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hn_user_sub_menu`
--
ALTER TABLE `hn_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hn_user_token`
--
ALTER TABLE `hn_user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hn_user`
--
ALTER TABLE `hn_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hn_user_access_menu`
--
ALTER TABLE `hn_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hn_user_menu`
--
ALTER TABLE `hn_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hn_user_role`
--
ALTER TABLE `hn_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hn_user_sub_menu`
--
ALTER TABLE `hn_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hn_user_token`
--
ALTER TABLE `hn_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
