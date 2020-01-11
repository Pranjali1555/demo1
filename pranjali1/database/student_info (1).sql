-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2017 at 04:09 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Fnm` text NOT NULL,
  `Lnm` text NOT NULL,
  `email` text NOT NULL,
  `mob` int(12) NOT NULL,
  `Txtemp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fnm`, `Lnm`, `email`, `mob`, `Txtemp`) VALUES
('tina', 'varma', 'tina@gmail.com', 2147483647, 'very good'),
('pranjali', 'satpute', 'pranju@gmail.com', 2147483647, 'nice'),
('', '', '', 0, ''),
('', '', '', 0, ''),
('neha', 'chavan', 'neha@gmail.com', 2147483647, 'very good'),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('Vaishali', 'patil', 'vaishu@gmail.com', 2147483647, 'nice'),
('rucha', 'patil', 'ruch@gmail.com', 2147483647, 'very  good'),
('neha', 'chavan', 'neha@gmail.com', 2147483647, 'VERY GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `admin` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin`, `pass`) VALUES
('', ''),
('', ''),
('', ''),
('pranjali', 'admin'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('pranjali', 'admin'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('pranjali', 'admin'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('pranjali', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studentrecord`
--

CREATE TABLE IF NOT EXISTS `studentrecord` (
  `Instnm` text NOT NULL,
  `Nm` text NOT NULL,
  `Pw` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentrecord`
--

INSERT INTO `studentrecord` (`Instnm`, `Nm`, `Pw`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('MGM', 'mahi', 'poiu'),
('DITMS', 'pihu', 'pihu'),
('MIT', 'rucha', 'neha'),
('', '', ''),
('', '', ''),
('', '', ''),
('deogiri', 'pranjali', 'pranju'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', '');
