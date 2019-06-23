-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 08:59 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_name` varchar(100) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `no_stud` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `start_date`, `end_date`, `no_stud`) VALUES
('python', '14-04-2019', '14-05-2019', 6);

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `email` varchar(100) NOT NULL,
  `mob_no` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `mot_course` varchar(200) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`email`, `mob_no`, `qualification`, `mot_course`, `course_name`) VALUES
('monisha@gmail.com', '747451484', 'BE', 'GOOd scope', ''),
('sanjana@gmail.com', '7474522588', 'BE', 'Good one', 'Python'),
('indira@gmail.com', '9988841122', 'BE CSE', 'Good', 'Python'),
('nsnov23@gmail.com', '9840965772', 'bsc', 'Awesome one', 'Python'),
('harini@gmail.com', '7778465414', 'BE', 'Nice one', 'Python'),
('sam@gamil.com', '5174414151', 'BE CSE', 'i like it', 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `regdb`
--

CREATE TABLE `regdb` (
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdb`
--

INSERT INTO `regdb` (`email`, `course`) VALUES
('monisha@gmail.com', 'python'),
('indira@gmail.com', 'Python'),
('nsnov23@gmail.com', 'Python'),
('harini@gmail.com', 'Python'),
('sam@gamil.com', 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mob_no` text NOT NULL,
  `age` int(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`f_name`, `l_name`, `gender`, `mob_no`, `age`, `dob`, `email`, `uname`, `password`) VALUES
('monisha', 'A', 'female', '94414147', 19, '23-11-1998', 'monisha@gmail.com', 'mona', 'mona1998'),
('sanjana', 'P', 'female', '7474522588', 19, '2018-09-26', 'sanjana@gmail.com', 'sanju99', '12345'),
('Indira', 'Narayanan', 'female', '9988841122', 19, '2018-01-09', 'indira@gmail.com', 'indira18', 'indira123'),
('shreya', 'Narayanan', 'female', '9840965772', 20, '1998-11-23', 'nsnov23@gmail.com', 'shre98', 'dhar'),
('Harini', 'Venkat', 'female', '7778465414', 19, '1998-05-02', 'harini@gmail.com', 'harr', 'har123'),
('sam', 'K', 'female', '5174414151', 19, '2018-09-05', 'sam@gamil.com', 'samu', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
