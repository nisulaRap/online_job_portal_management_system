-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jan 31, 2023 at 05:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `Name with Initials` varchar(50) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Contact No` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CV File` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`Name with Initials`, `Full Name`, `Address`, `DOB`, `Gender`, `Contact No`, `Status`, `Email`, `CV File`) VALUES
('R.A.N.C. Premaratne', 'Ranasinghe Arachchige Nisula Chanthika Premaratne', 'No 19, Vidyalaya road, Walana, Panadura', '2023-01-08', 'male', 713347882, 'single', 'nisula.rap@gmail.com', 'SLCOT 1 Semester Results.pdf'),
('K. Perera', 'Kavindi Perera', 'No 34, Pituwala Road, Kalutara', '2023-01-20', 'female', 776529738, 'married', 'kavindi12@gmail.com', 'SLCOT 2 nd Semester Results.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Full Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Messages` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Full Name`, `Email`, `Messages`) VALUES
('Nisula', 'nisula.rap@gmail.com', 'hhhhh'),
('vhjv', 'ghhgc', 'hjgjh'),
('dsfsdsfd', 'dsfsdf', 'dsfdssd');

-- --------------------------------------------------------

--
-- Table structure for table `job_item`
--

CREATE TABLE `job_item` (
  `jobid` int(11) NOT NULL,
  `image` blob NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contactno` int(11) NOT NULL,
  `salary` double NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_item`
--

INSERT INTO `job_item` (`jobid`, `image`, `companyname`, `location`, `contactno`, `salary`, `qualification`, `gender`, `discription`, `type`) VALUES
(1, 0x4e432e6a7067, 'Network Communication (Pvt) Ltd', 'No 13/2, Tissa Road, Colombo 04.', 117856983, 80000, 'Two year experience', 'Male / Female', 'Mobile Network, Broadband', 'Full Time / Part Time'),
(2, 0x49542048617264776172652e6a7067, 'IT Hardware Solution', 'No 144, Wiyath Road, Colombo 01.', 118932514, 100000, 'Two year Experience.', 'Male / Female', 'Computer Hardware, Repair the printer', 'Full Time'),
(3, 0x697420737570706f72742e6a7067, 'IT Support Sri Lanka', 'No 254/2, Galle Road, Colombo 03.', 118793568, 150000, 'Must be BSc. Computer Science/ IT/ Software Engineering graduate.', 'Male', 'Software, IT Services', 'Full Time / Part Time'),
(4, 0x4e52532e6a7067, 'NRS Watch (Pvt) Ltd', 'No 22/1/A, Perera Mawatha, Panadura', 382258369, 50000, 'Two year Experience', 'Male / Female', 'Repair the watch', 'Full Time / Part Time'),
(5, 0x62616e6b2e6a7067, 'Galaxy Bank', 'No 34, kalawaana Road, Galle.', 912573681, 85000, 'Three year Experience', 'Male / Female', 'Banks', 'Full Time'),
(6, 0x7765622064657369676e2e6a7067, 'Web Design (Pvt) Ltd', 'No 46, Kandy Road, Malabe.', 118968532, 140000, 'Three year Experience and Must be BSc Interactive Media', 'Male / Female', 'Develop the web based portal System', 'Full Time / Part Time');

-- --------------------------------------------------------

--
-- Table structure for table `new_registration`
--

CREATE TABLE `new_registration` (
  `First Name` varchar(30) NOT NULL,
  `Last Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Confirm Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_registration`
--

INSERT INTO `new_registration` (`First Name`, `Last Name`, `Email`, `Username`, `Password`, `Confirm Password`) VALUES
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Nisula', 'Premaratne', 'nisula.rap@gmail.com', 'admin', 'admin@123', 'admin@123'),
('Kamal', 'Perera', 'kamal45@gmail.com', 'abc', 'abc@123', 'abc@123'),
('fg', 'gf', 'fgfgd', 'xyz', 'xyz@123', 'xyz@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_item`
--
ALTER TABLE `job_item`
  ADD PRIMARY KEY (`jobid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
