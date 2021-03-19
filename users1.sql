-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 06:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `usernamee` varchar(100) NOT NULL,
  `emails` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `usernamee`, `emails`, `telephone`, `address`, `pass`) VALUES
(5, 'danushka ', 'ravihansa.ranasinghe@gmail.com', 0, '', 'bec18f4ce9dbdcb755b124dd6a785134'),
(7, 'kanthi', 'magul@gmail.com', 0, '', '41e12cae680f41795c3b5dc76ddfbc1d'),
(8, 'jagath', 'jagathsliit', 0, '', 'bf088266a6683957e6c1a06ec022ef8b'),
(9, 'asel', 'asel@gmail.com', 0, '', 'bf088266a6683957e6c1a06ec022ef8b'),
(10, 'doglas', 'bimalnandana6@gmail.com', 0, '', 'bf088266a6683957e6c1a06ec022ef8b'),
(11, 'lihini', 'lihini', 0, '', 'bf088266a6683957e6c1a06ec022ef8b'),
(12, 'danu', 'cfvgbhnjmk,', 0, '', 'bf088266a6683957e6c1a06ec022ef8b'),
(13, 'dog', 'dog@gmai.com', 0, '', '26db55e513fbddd0202a63237f4a2862'),
(14, 'qwedfewessdfs', 'werfdsedf', 0, '', 'singersmart99'),
(15, 'fgvbhjnmk,lkjhg', 'cfvgbhjnmkl,mkjnhbgvf', 0, '', 'sdxfcvgbhjnmkjnhbgvfcdxsxdcfgvbhn'),
(16, 'qwedfewessdfs', 'werfdsedf', 0, '', 'bf088266a6683957e6c1a06ec022ef8b'),
(17, 'awsedrfgthyujiytrs', 'werty67uytrgefasgrtyui', 0, '', 'bec18f4ce9dbdcb755b124dd6a785134'),
(18, 'pushpa', 'pushpag', 713984711, '', 'bec18f4ce9dbdcb755b124dd6a785134'),
(19, 'wsedrftgyhujikol', 'edrftgyhujik', 713984711, 'wsfdrgtyhujikkujyhgtrfds', 'bf088266a6683957e6c1a06ec022ef8b'),
(20, 'sxdcfvgbhnjmk', 'sxdcfvgbhnjmk,l;.', 0, 'sxdcfvgbhnjmk,l.;', '26db55e513fbddd0202a63237f4a2862'),
(22, 'swertywer', 'wertyuyh', 458962147, 'wertrewerf', 'bec18f4ce9dbdcb755b124dd6a785134'),
(23, 'jodh', 'ccdfvgbhnjm', 0, 'singersmart99#', '26db55e513fbddd0202a63237f4a2862'),
(24, 'jodh', 'ccdfvgbhnjm', 0, 'singersmart99#', 'bec18f4ce9dbdcb755b124dd6a785134'),
(25, 'sdfghj', 'hjk874523', 2147483647, 'xcvbnm', '26db55e513fbddd0202a63237f4a2862'),
(26, 'sdfcgvhbjnkm', 'xcvbnm', 0, 'sdf', 'bf088266a6683957e6c1a06ec022ef8b'),
(27, 'danushkamalinga', 'danushka@gmail.com', 713984711, 'kotikawatta angoda', 'bec18f4ce9dbdcb755b124dd6a785134'),
(29, 'chamod Harshana', 'chamodr@gmail.com', 773908426, 'kotikawatta angoda', 'bec18f4ce9dbdcb755b124dd6a785134'),
(31, 'nawariyan', 'bimalnandana6@gmail.com', 774020028, 'matara', '427cfcf3ec4976e13e28f977fb791473'),
(33, 'kasun', 'sdf', 852, 'sdf', 'bf088266a6683957e6c1a06ec022ef8b'),
(34, 'zsdfgh', 'ddfg', 52, 'galle', 'bf088266a6683957e6c1a06ec022ef8b'),
(36, 'mia kasthuri', 'mia@gmail.com', 774020028, 'kotikawatte', 'bec18f4ce9dbdcb755b124dd6a785134');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
