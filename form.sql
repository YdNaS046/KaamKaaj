-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 04:09 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaamkaaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `ID` int(11) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `Uname` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Repassword` varchar(256) NOT NULL,
  `Job` varchar(256) NOT NULL,
  `Pnumber` bigint(255) NOT NULL,
  `Citizenship` bigint(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`ID`, `Fname`, `Lname`, `Uname`, `Password`, `Repassword`, `Job`, `Pnumber`, `Citizenship`, `Email`, `Location`) VALUES
(4, 'Sandesh', 'Shrestha', 'YdNaS', 'sanday', 'sanday', 'Plumber', 96687456, 9845621, 'sanday.sanday.com', 'Kuleswor'),
(5, 'Ruksha', 'Shrestha', 'rukmurphy', 'asdasd', 'asdasd', 'Plumber', 2147483647, 789654123, 'murphy@ruksha.com', 'Banepa'),
(6, 'Prakshyan', 'Shrestha', 'Elijang', 'sasuke', 'sauke', 'Plumber', 2147483647, 12346789, 'elijang@prakshyan.com', 'Pepsicola'),
(7, 'Prayatna', 'lama', 'lemog', 'lemo123', 'lemo123', 'Plumber', 2147483647, 789123456, 'lemog@prayatna.com', 'Hadigaun'),
(8, 'Rishav', 'Bhattarai', 'Shankara', 'shanka123', 'shanka123', 'Plumber', 2147483647, 789654123, 'henderson@liv.com', 'Koteswor'),
(9, 'asd', 'asd', 'asd', 'asd', 'asd', 'Plumber', 2147483647, 7854123, 'sasaas', 'sasaa'),
(10, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'Plumber', 789654, 123123123, 'qwe123`', 'qwe'),
(16, 'Roxanne', 'Shrestha', 'Roxxane', 'ROx123', 'Rox123', 'Gardener', 9841460338, 5504, 'roxanne@email.com', 'Kavre'),
(17, 'Quick', 'Aryal', 'QAryal', 'qwerty', 'qwerty', 'Painter', 4521786, 5505, 'aryal.quick@gmail.com', 'basantapur'),
(18, 'Ambassador', 'Rolex', 'Arolex', 'arolex', 'Arolex', 'Electrician', 123456789, 7789, 'ambassador.rolex@gmail.com', 'Pharping'),
(38, 'Sumesh', 'Khoju', 'khoju', 'qwerty', 'qwerty', 'Electrician', 789456123, 2136, 'khoju.sumesh@gmail.com', 'jiri'),
(39, 'Rusha', 'Thapa', 'Rthapa', 'rthapa', 'rthapa', 'Helper', 9845784512, 8306, 'rusha.thapa@gmail.com', 'Boudha'),
(40, 'Shiva', 'Maharjan', 'Shiva', 'shiva123', 'shiva123', 'Mechanic', 9845127846, 8960, 'shiva.mhz@gmail.com', 'Thahity'),
(41, 'Ram Bahadur', 'Kunwar', 'Ram', 'ram123', 'ram123', 'Electrician', 984613256, 1234, 'ramesh@gmail.com', 'Jawalakhel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
