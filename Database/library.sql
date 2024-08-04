-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 02:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `username` varchar(126) NOT NULL,
  `password` varchar(126) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addedby` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`, `email`, `addedby`) VALUES
(1, 'admin', 'admin', '', 'admin'),
(2, 'testadmin', 'testadmin', 'testadmin@gmail.com', 'admin'),
(3, 'test2', 'test2', 'test@gmail.com', 'testadmin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `bookname` varchar(256) NOT NULL,
  `image` varchar(300) NOT NULL,
  `bookauthor` varchar(200) NOT NULL,
  `bookpublication` varchar(200) NOT NULL,
  `bookyear` varchar(4) NOT NULL,
  `link` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category`, `bookname`, `image`, `bookauthor`, `bookpublication`, `bookyear`, `link`) VALUES
(1, 'Science fiction', 'Dune', 'dune.jpg', 'Frank Herbert ', 'Mass Market Paperback', '1990', 'https://www.amazon.in/Dune-Frank-Herbert/dp/0441172717'),
(2, 'Military', 'The Art of War', 'art of warr.webp', ' Sun Tzu ', 'Paperback', '2006', 'https://www.amazon.in/Art-War-Sun-Tzu/dp/8129140438'),
(3, 'Horror', 'Dracula', 'dracula.jpeg', 'Bram Stoker', 'Archibald Constable and Company', '1897', 'https://www.amazon.in/Dracula-Bram-Stoker/dp/8172344775/ref=asc_df_8172344775/?tag=googleshopdes-21&linkCode=df0&hvadid=397009306051&hvpos=&hvnetw=g&hvrand=15734640200698893916&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1007785&hvtargid=pla-404766234879&psc=1&ext_vrnc=hi'),
(4, 'Horror', 'The Haunting of Hill House', 'hauntingofhillhouse.jpg', 'Shirley Jackson', 'Penguin Modern Classics', '1959', 'https://www.amazon.in/Haunting-House-Penguin-Modern-Classics/dp/0141191449/ref=asc_df_0141191449/?tag=googleshopdes-21&linkCode=df0&hvadid=397080696371&hvpos=&hvnetw=g&hvrand=15375733138441243813&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1007785&hvtargid=pla-351057868019&psc=1&ext_vrnc=hi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'sarapapa', 'asda@gmail.com', 'asdasd'),
(2, 'user', 'user', 'user@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookname` (`bookname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
