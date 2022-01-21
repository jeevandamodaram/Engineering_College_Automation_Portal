-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2019 at 12:20 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kmmcse`
--

-- --------------------------------------------------------

--
-- Table structure for table `bati`
--

CREATE TABLE IF NOT EXISTS `bati` (
  `stid` varchar(50) DEFAULT NULL,
  `rno` varchar(15) NOT NULL,
  `m` int(4) NOT NULL DEFAULT '1',
  `sname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `pyear` varchar(1) NOT NULL,
  `edu` varchar(1) NOT NULL,
  `cyear` varchar(4) NOT NULL,
  `l3` int(2) NOT NULL,
  `l4` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bati`
--

INSERT INTO `bati` (`stid`, `rno`, `m`, `sname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`, `m1`, `m2`, `m3`, `pyear`, `edu`, `cyear`, `l3`, `l4`) VALUES
('5b77b989a0e46', '20', 1, 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1', 'b', ' 201', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bfaculty`
--

CREATE TABLE IF NOT EXISTS `bfaculty` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `fid` varchar(40) DEFAULT NULL,
  `ufid` varchar(10) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `edet` varchar(20) DEFAULT NULL,
  `deg` varchar(20) DEFAULT NULL,
  `qsi` varchar(50) DEFAULT NULL,
  `qli` varchar(50) DEFAULT NULL,
  `wsi` varchar(50) DEFAULT NULL,
  `wli` varchar(50) DEFAULT NULL,
  `esi` varchar(50) DEFAULT NULL,
  `eli` varchar(50) DEFAULT NULL,
  `rsi` varchar(50) DEFAULT NULL,
  `rli` varchar(50) DEFAULT NULL,
  `sem1` int(1) DEFAULT '1',
  `sem2` int(1) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `bfaculty`
--

INSERT INTO `bfaculty` (`sno`, `fid`, `ufid`, `fname`, `edet`, `deg`, `qsi`, `qli`, `wsi`, `wli`, `esi`, `eli`, `rsi`, `rli`, `sem1`, `sem2`) VALUES
(11, 'fs1', '589d704f3f', 'Kalyan Srinivas', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(12, 'fs2', '589d704f45', 'Govardhan', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(13, 'fs3', '589d704f49', 'Getha', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(14, 'fs4', '589d704f4c', 'Chengamma', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(15, 'fs5', '589d704f4f', 'Naveen', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(16, 'fs6', '589d704f5e', 'Mahesh', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(19, 'fs7', '589d704f62', 'Tharun', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(20, 'fs8', '5b72aae62f', 'jeevan', 'm.tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(21, 'fs9', NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2),
(22, 'fs10', NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bsi`
--

CREATE TABLE IF NOT EXISTS `bsi` (
  `sem` int(1) DEFAULT NULL,
  `s1` varchar(20) DEFAULT NULL,
  `s2` varchar(20) DEFAULT NULL,
  `s3` varchar(20) DEFAULT NULL,
  `s4` varchar(20) DEFAULT NULL,
  `s5` varchar(20) DEFAULT NULL,
  `s6` varchar(20) DEFAULT NULL,
  `l1` varchar(20) DEFAULT NULL,
  `l2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsi`
--

INSERT INTO `bsi` (`sem`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`) VALUES
(1, 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'SW1', 'SW2'),
(2, 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'SW1', 'SW2');

-- --------------------------------------------------------

--
-- Table structure for table `bsii`
--

CREATE TABLE IF NOT EXISTS `bsii` (
  `sem` int(1) DEFAULT NULL,
  `s1` varchar(20) DEFAULT NULL,
  `s2` varchar(20) DEFAULT NULL,
  `s3` varchar(20) DEFAULT NULL,
  `s4` varchar(20) DEFAULT NULL,
  `s5` varchar(20) DEFAULT NULL,
  `s6` varchar(20) DEFAULT NULL,
  `l1` varchar(20) DEFAULT NULL,
  `l2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsii`
--

INSERT INTO `bsii` (`sem`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`) VALUES
(1, 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'SW1', 'SW2'),
(2, 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'SW1', 'SW2');

-- --------------------------------------------------------

--
-- Table structure for table `bsiii`
--

CREATE TABLE IF NOT EXISTS `bsiii` (
  `sem` int(1) DEFAULT NULL,
  `s1` varchar(20) DEFAULT NULL,
  `s2` varchar(20) DEFAULT NULL,
  `s3` varchar(20) DEFAULT NULL,
  `s4` varchar(20) DEFAULT NULL,
  `s5` varchar(20) DEFAULT NULL,
  `s6` varchar(20) DEFAULT NULL,
  `l1` varchar(20) DEFAULT NULL,
  `l2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsiii`
--

INSERT INTO `bsiii` (`sem`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`) VALUES
(1, 'e1', 'e2', 'e3', 'e4', 'e5', 'e6', 'SW1', 'SW2'),
(2, 'f1', 'f2', 'f3', 'f4', 'f5', 'f6', 'SW1', 'SW2');

-- --------------------------------------------------------

--
-- Table structure for table `bsiiii`
--

CREATE TABLE IF NOT EXISTS `bsiiii` (
  `sem` int(1) DEFAULT NULL,
  `s1` varchar(20) DEFAULT NULL,
  `s2` varchar(20) DEFAULT NULL,
  `s3` varchar(20) DEFAULT NULL,
  `s4` varchar(20) DEFAULT NULL,
  `s5` varchar(20) DEFAULT NULL,
  `s6` varchar(20) DEFAULT NULL,
  `l1` varchar(20) DEFAULT NULL,
  `l2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsiiii`
--

INSERT INTO `bsiiii` (`sem`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`) VALUES
(1, 'g1', 'g2', 'g3', 'g4', 'g5', 'g6', 'SW1', 'SW2'),
(2, 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'SW1', 'SW2');

-- --------------------------------------------------------

--
-- Table structure for table `del`
--

CREATE TABLE IF NOT EXISTS `del` (
  `did` varchar(5) DEFAULT NULL,
  `b1` int(1) DEFAULT NULL,
  `b2` int(1) DEFAULT NULL,
  `b3` int(1) DEFAULT NULL,
  `b4` int(1) DEFAULT NULL,
  `m1` int(1) DEFAULT NULL,
  `m2` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `del`
--

INSERT INTO `del` (`did`, `b1`, `b2`, `b3`, `b4`, `m1`, `m2`) VALUES
('d12', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `facclear`
--

CREATE TABLE IF NOT EXISTS `facclear` (
  `a` int(1) NOT NULL DEFAULT '1',
  `b` int(1) NOT NULL DEFAULT '1',
  `sem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facclear`
--

INSERT INTO `facclear` (`a`, `b`, `sem`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fbati`
--

CREATE TABLE IF NOT EXISTS `fbati` (
  `fid` varchar(50) NOT NULL,
  `ufid` varchar(20) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `m` int(3) NOT NULL,
  `sem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fbati`
--

INSERT INTO `fbati` (`fid`, `ufid`, `fname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`, `m1`, `m2`, `m3`, `m`, `sem`) VALUES
('fs1', '589d704f3fb47', 'Kalyan Srinivas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs2', '589d704f45e17', 'Govardhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs4', '589d704f4c3de', 'Chengamma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs3', '589d704f49304', 'Getha', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs5', '589d704f4fd50', 'Naveen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs6', '589d704f5e060', 'Mahesh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs7', '589d704f6282e', 'Tharun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs8', '5b72aae62f032', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs9', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs10', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fbatii`
--

CREATE TABLE IF NOT EXISTS `fbatii` (
  `fid` varchar(50) NOT NULL,
  `ufid` varchar(20) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `m` int(3) NOT NULL,
  `sem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fbatii`
--

INSERT INTO `fbatii` (`fid`, `ufid`, `fname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`, `m1`, `m2`, `m3`, `m`, `sem`) VALUES
('fs1', '589d704f3fb47', 'Kalyan Srinivas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs2', '589d704f45e17', 'Govardhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs3', '589d704f49304', 'Getha', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs4', '589d704f4c3de', 'Chengamma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs5', '589d704f4fd50', 'Naveen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs6', '589d704f5e060', 'Mahesh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs7', '589d704f6282e', 'Tharun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs8', '5b72aae62f032', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs9', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs10', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fbatiii`
--

CREATE TABLE IF NOT EXISTS `fbatiii` (
  `fid` varchar(50) NOT NULL,
  `ufid` varchar(20) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `m` int(3) NOT NULL,
  `sem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fbatiii`
--

INSERT INTO `fbatiii` (`fid`, `ufid`, `fname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`, `m1`, `m2`, `m3`, `m`, `sem`) VALUES
('fs1', '589d704f3fb47', 'Kalyan Srinivas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs2', '589d704f45e17', 'Govardhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs3', '589d704f49304', 'Getha', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs4', '589d704f4c3de', 'Chengamma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs5', '589d704f4fd50', 'Naveen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs6', '589d704f5e060', 'Mahesh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs7', '589d704f6282e', 'Tharun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs8', '5b72aae62f032', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs9', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs10', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fbatiiii`
--

CREATE TABLE IF NOT EXISTS `fbatiiii` (
  `fid` varchar(50) NOT NULL,
  `ufid` varchar(20) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `m` int(3) NOT NULL,
  `sem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fbatiiii`
--

INSERT INTO `fbatiiii` (`fid`, `ufid`, `fname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`, `m1`, `m2`, `m3`, `m`, `sem`) VALUES
('fs1', '589d704f3fb47', 'Kalyan Srinivas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs2', '589d704f45e17', 'Govardhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs3', '589d704f49304', 'Getha', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs4', '589d704f4c3de', 'Chengamma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs5', '589d704f4fd50', 'Naveen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs6', '589d704f5e060', 'Mahesh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs7', '589d704f6282e', 'Tharun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs8', '5b72aae62f032', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs9', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('fs10', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fid`
--

CREATE TABLE IF NOT EXISTS `fid` (
  `fid1` varchar(20) DEFAULT NULL,
  `fid2` varchar(20) DEFAULT NULL,
  `fid3` varchar(20) DEFAULT NULL,
  `fid4` varchar(20) DEFAULT NULL,
  `fid5` varchar(20) DEFAULT NULL,
  `fid6` varchar(20) DEFAULT NULL,
  `fid7` varchar(20) DEFAULT NULL,
  `fid8` varchar(20) DEFAULT NULL,
  `fid9` varchar(20) DEFAULT NULL,
  `fid10` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fmati`
--

CREATE TABLE IF NOT EXISTS `fmati` (
  `mfid` varchar(50) NOT NULL,
  `ufid` varchar(20) DEFAULT NULL,
  `mfname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `m` int(3) NOT NULL DEFAULT '0',
  `sem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fmati`
--

INSERT INTO `fmati` (`mfid`, `ufid`, `mfname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`, `m1`, `m2`, `m3`, `m`, `sem`) VALUES
('mfs1', '589d704f3fb47', 'Kalyan Srinivas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs2', '589d704f45e17', 'Govardhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs3', '589d704f49304', 'Getha', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs4', '589d704f4c3de', 'Chengamma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs5', '589d704f4fd50', 'Naveen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs6', '589d704f5e060', 'Mahesh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs7', '589d704f6282e', 'Tharun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs8', '5b72aae62f032', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs9', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs10', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fmatii`
--

CREATE TABLE IF NOT EXISTS `fmatii` (
  `mfid` varchar(50) NOT NULL,
  `ufid` varchar(20) DEFAULT NULL,
  `mfname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `m` int(3) NOT NULL DEFAULT '0',
  `sem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fmatii`
--

INSERT INTO `fmatii` (`mfid`, `ufid`, `mfname`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `l2`, `m1`, `m2`, `m3`, `m`, `sem`) VALUES
('mfs1', '589d704f3fb47', 'Kalyan Srinivas', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs2', '589d704f45e17', 'Govardhan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs3', '589d704f49304', 'Getha', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs4', '589d704f4c3de', 'Chengamma', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs5', '589d704f4fd50', 'Naveen', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs6', '589d704f5e060', 'Mahesh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs7', '589d704f6282e', 'Tharun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs8', '5b72aae62f032', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs9', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
('mfs10', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mati`
--

CREATE TABLE IF NOT EXISTS `mati` (
  `stid` varchar(100) DEFAULT NULL,
  `rno` varchar(15) NOT NULL,
  `m` int(4) NOT NULL DEFAULT '1',
  `sname` varchar(100) NOT NULL,
  `s1` int(3) NOT NULL,
  `s2` int(3) NOT NULL,
  `s3` int(3) NOT NULL,
  `s4` int(3) NOT NULL,
  `s5` int(3) NOT NULL,
  `s6` int(3) NOT NULL,
  `l1` int(3) NOT NULL,
  `l2` int(3) NOT NULL,
  `m1` int(3) NOT NULL,
  `m2` int(3) NOT NULL,
  `m3` int(3) NOT NULL,
  `pyear` varchar(1) NOT NULL,
  `edu` varchar(1) NOT NULL,
  `cyear` varchar(4) NOT NULL,
  `l3` int(2) NOT NULL,
  `l4` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mfaculty`
--

CREATE TABLE IF NOT EXISTS `mfaculty` (
  `mfid` varchar(50) DEFAULT NULL,
  `ufid` varchar(10) DEFAULT NULL,
  `mfname` varchar(50) DEFAULT NULL,
  `edet` varchar(20) DEFAULT NULL,
  `deg` varchar(20) DEFAULT NULL,
  `mqsi` varchar(50) DEFAULT NULL,
  `mqli` varchar(50) DEFAULT NULL,
  `mwsi` varchar(50) DEFAULT NULL,
  `mwli` varchar(50) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mfaculty`
--

INSERT INTO `mfaculty` (`mfid`, `ufid`, `mfname`, `edet`, `deg`, `mqsi`, `mqli`, `mwsi`, `mwli`, `sem`) VALUES
('mfs1', '589d704f3f', 'Kalyan Srinivas', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs2', '589d704f45', 'Govardhan', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs3', '589d704f49', 'Getha', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs4', '589d704f4c', 'Chengamma', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs5', '589d704f4f', 'Naveen', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs6', '589d704f5e', 'Mahesh', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs7', '589d704f62', 'Tharun', 'M.Tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs8', '5b72aae62f', 'jeevan', 'm.tech', 'ASST PROFESSOR', 'N', 'N', 'N', 'N', 1),
('mfs9', NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 1),
('mfs10', NULL, NULL, NULL, NULL, 'N', 'N', 'N', 'N', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mid`
--

CREATE TABLE IF NOT EXISTS `mid` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `m` int(4) NOT NULL DEFAULT '1',
  `stid` varchar(20) DEFAULT NULL,
  `rno` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `s1` int(2) DEFAULT '0',
  `s2` int(2) DEFAULT '0',
  `s3` int(2) DEFAULT '0',
  `s4` int(2) DEFAULT '0',
  `s5` int(2) DEFAULT '0',
  `s6` int(2) DEFAULT '0',
  `L1` int(2) DEFAULT '0',
  `L2` int(2) DEFAULT '0',
  `pyear` int(1) DEFAULT NULL,
  `cyear` int(4) DEFAULT NULL,
  `edu` varchar(1) DEFAULT NULL,
  `atd` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mid`
--

INSERT INTO `mid` (`sno`, `m`, `stid`, `rno`, `name`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `L1`, `L2`, `pyear`, `cyear`, `edu`, `atd`) VALUES
(2, 1, '5b77b989a0e46', '20', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 1, 2018, 'b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `midi`
--

CREATE TABLE IF NOT EXISTS `midi` (
  `stid` varchar(20) DEFAULT NULL,
  `rno` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `s1` int(2) DEFAULT '0',
  `s2` int(2) DEFAULT '0',
  `s3` int(2) DEFAULT '0',
  `s4` int(2) DEFAULT '0',
  `s5` int(2) DEFAULT '0',
  `s6` int(2) DEFAULT '0',
  `L1` int(2) DEFAULT '0',
  `L2` int(2) DEFAULT '0',
  `pyear` int(1) DEFAULT NULL,
  `cyear` int(4) DEFAULT NULL,
  `edu` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `midi`
--

INSERT INTO `midi` (`stid`, `rno`, `name`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `L1`, `L2`, `pyear`, `cyear`, `edu`) VALUES
('5b77b989a0e46', '20', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 1, 2018, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `midii`
--

CREATE TABLE IF NOT EXISTS `midii` (
  `stid` varchar(20) DEFAULT NULL,
  `rno` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `s1` int(2) DEFAULT '0',
  `s2` int(2) DEFAULT '0',
  `s3` int(2) NOT NULL DEFAULT '0',
  `s4` int(2) DEFAULT '0',
  `s5` int(2) DEFAULT '0',
  `s6` int(2) DEFAULT '0',
  `L1` int(2) DEFAULT '0',
  `L2` int(2) DEFAULT '0',
  `pyear` int(1) DEFAULT NULL,
  `cyear` int(4) DEFAULT NULL,
  `edu` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `midii`
--

INSERT INTO `midii` (`stid`, `rno`, `name`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `L1`, `L2`, `pyear`, `cyear`, `edu`) VALUES
('5b77b989a0e46', '20', 'jeevan', 0, 0, 0, 0, 0, 0, 0, 0, 1, 2018, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `msi`
--

CREATE TABLE IF NOT EXISTS `msi` (
  `sem` int(1) DEFAULT NULL,
  `s1` varchar(20) DEFAULT NULL,
  `s2` varchar(20) DEFAULT NULL,
  `s3` varchar(20) DEFAULT NULL,
  `s4` varchar(20) DEFAULT NULL,
  `s5` varchar(20) DEFAULT NULL,
  `s6` varchar(20) DEFAULT NULL,
  `l1` varchar(20) DEFAULT NULL,
  `sema` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msi`
--

INSERT INTO `msi` (`sem`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `l1`, `sema`) VALUES
(1, 'ADSA', 'DS', 'CSD', 'JWT', 'SE', 'DDB', 'SW1', 0),
(2, 'SQAT', 'OOAD', 'ACN', 'DS', 'DWDM', 'DP', 'SW2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `msii`
--

CREATE TABLE IF NOT EXISTS `msii` (
  `sem` int(1) DEFAULT NULL,
  `pr1` varchar(100) DEFAULT NULL,
  `pr2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msii`
--

INSERT INTO `msii` (`sem`, `pr1`, `pr2`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stuclear`
--

CREATE TABLE IF NOT EXISTS `stuclear` (
  `a` int(1) NOT NULL DEFAULT '1',
  `b` int(1) NOT NULL DEFAULT '1',
  `c` int(1) NOT NULL DEFAULT '1',
  `d` int(1) NOT NULL DEFAULT '1',
  `e` int(1) NOT NULL DEFAULT '1',
  `sem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuclear`
--

INSERT INTO `stuclear` (`a`, `b`, `c`, `d`, `e`, `sem`) VALUES
(2, 2, 2, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studet`
--

CREATE TABLE IF NOT EXISTS `studet` (
  `stid` varchar(20) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `rnumber` varchar(15) DEFAULT NULL,
  `byear` varchar(30) DEFAULT NULL,
  `cyear` varchar(30) DEFAULT NULL,
  `pyear` int(4) DEFAULT NULL,
  `edu` varchar(1) DEFAULT NULL,
  `mstatus` int(1) DEFAULT '1',
  `astatus` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studet`
--

INSERT INTO `studet` (`stid`, `sname`, `rnumber`, `byear`, `cyear`, `pyear`, `edu`, `mstatus`, `astatus`) VALUES
('5b77b989a0e46', 'jeevan', '20', '2018 to 2022', ' 2018 ', 1, 'b', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
