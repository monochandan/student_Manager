-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 08:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `information system`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_course`
--

CREATE TABLE `com_course` (
  `id` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `final` varchar(50) NOT NULL,
  `thirty` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL,
  `chk` varchar(10) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_course`
--

INSERT INTO `com_course` (`id`, `semister`, `code`, `title`, `credit`, `mid`, `final`, `thirty`, `total`, `grade`, `point`, `chk`) VALUES
('14152103157', 'summer,2018', 'CSE100', 'Software Development I', '', '', '', '', '', '', '', '1'),
('14152103157', '', 'CSE205', 'Digital Logic Design', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dep_routine`
--

CREATE TABLE `dep_routine` (
  `dept` varchar(50) NOT NULL,
  `intake` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `class1` varchar(50) NOT NULL,
  `class2` varchar(50) NOT NULL,
  `class3` varchar(50) NOT NULL,
  `class4` varchar(50) NOT NULL,
  `class5` varchar(50) NOT NULL,
  `class6` varchar(50) NOT NULL,
  `class7` varchar(50) NOT NULL,
  `class8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_routine`
--

INSERT INTO `dep_routine` (`dept`, `intake`, `section`, `day`, `class1`, `class2`, `class3`, `class4`, `class5`, `class6`, `class7`, `class8`) VALUES
('cse', 29, 4, 'sat', 'fgfdg', 'fgdf', 'fgfd', 'dggfg', 'fgdfgdg', 'dfgdfgdf', 'fgdfg', 'fdgdfgdfg'),
('bba', 29, 5, 'sat', 'fgfdg', 'fgdf', 'fgfd', 'dggfg', 'fgdfgdg', 'dfgdfgdf', 'fgdfg', 'fdgdfgdfg'),
('cse', 29, 5, 'sat', 'fgfdg', 'fgdf', 'fgfd', 'dggfg', 'fgdfgdg', 'dfgdfgdf', 'fgdfg', 'fdgdfgdfg'),
('cse', 35, 3, 'sat', 'fgfdg', 'fgdf', 'fgfd', 'dggfg', 'fgdfgdg', 'dfgdfgdf', 'fgdfg', 'fdgdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `rnumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `code`, `pnumber`, `Email`, `rnumber`, `password`) VALUES
('abc', 'AAG', '123', 'abc', '200', '123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_routine`
--

CREATE TABLE `faculty_routine` (
  `faculty` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `class1` varchar(50) NOT NULL,
  `class2` varchar(50) NOT NULL,
  `class3` varchar(50) NOT NULL,
  `class4` varchar(50) NOT NULL,
  `class5` varchar(50) NOT NULL,
  `class6` varchar(50) NOT NULL,
  `class7` varchar(50) NOT NULL,
  `class8` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_routine`
--

INSERT INTO `faculty_routine` (`faculty`, `day`, `class1`, `class2`, `class3`, `class4`, `class5`, `class6`, `class7`, `class8`) VALUES
('afm', 'sat', 'dfvdg', 'dgfdgdf', 'dfgf', 'dggfg', 'fgdfgdg', 'dfgdfgdf', 'fgdfg', 'fdgdfgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `ID` varchar(50) NOT NULL,
  `book` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `issue` varchar(50) NOT NULL,
  `return` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`ID`, `book`, `author`, `issue`, `return`) VALUES
('f', 'f', 'f', 'f', 'f'),
('f', 'f', 'f', 'f', 'f'),
('13143103093', 'Theory of Computation', '', '14-05-17', '14-05-17'),
('13143103093', 'Theory of Computation', '', '14-05-17', '14-05-17'),
('14152103157', 'System Analysis', '', '14-05-17', '18-05-17'),
('14152103157', 'System Analysis', '', '14-05-17', '18-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `pre`
--

CREATE TABLE `pre` (
  `sub` varchar(50) NOT NULL,
  `pre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre`
--

INSERT INTO `pre` (`sub`, `pre`) VALUES
('CSE200', 'CSE100'),
('CSE411', 'CSE205');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `intake` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `final` varchar(50) NOT NULL,
  `thirty` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `point` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `semister`, `code`, `title`, `credit`, `faculty`, `intake`, `section`, `mid`, `final`, `thirty`, `total`, `grade`, `point`) VALUES
('', 'summer,2018', '', '', '', 'AAG', '29', '4', '', '', '', '', '', ''),
('', 'Summer,2018', '', '', '', 'AAKA', '30', '2', '', '', '', '', '', ''),
('14152103185', 'summer,2018', 'CSE205', 'Digital Logic Design', '', 'SAD', '35', '3', '', '', '', '', 'a', ''),
('14152103185', 'summer,2018', 'CSE457', 'Web Database Programming', '', 'AAG', '29', '4', '5', '15', '22', '42', 'd', ''),
('14152103157', '', 'CSE411', 'Digital Electronics and Pulse', '', '', '30', '', '', '', '', '', '', ''),
('14152103157', '', '10', 'abc', '', '', '15', '1', '', '', '', '', '', ''),
('14152103157', '', 'bfgvb', 'dfg', '', '', 'dfg', 'dfgdfg', '', '', '', '', '', ''),
('14152103157', '', 'rfgfdfgdf', 'Digital Electronics and Pulse', '', '', '30', '20', '', '', '', '', '', ''),
('14152103157', '', 'CNDN', 'dfg', '', '', '32', '22', '', '', '', '', '', ''),
('CSE100', '', 'CSE200', 'rabbi', '', '', '123', '12', '', '', '', '', '', ''),
('CSE205', '', 'CSE411', 'rabbi', '', '', '123', '2', '', '', '', '', '', ''),
('Resource id #8', '', 'CSE200', 'dfg', '', '', '15', '20', '', '', '', '', '', ''),
('Resource id #8', '', 'CSE200', 'uykyu', '', '', 'jhkjhkhjkj', '2', '', '', '', '', '', ''),
('Resource id #7', '', 'CSE200', 'ccccccccccccc', '', '', 'xxxxxxxxxxxxx', 'vvv', '', '', '', '', '', ''),
('Array', '', 'CSE200', 'dfg', '', '', '30', '22', '', '', '', '', '', ''),
('Array', '', 'CSE200', 'dfg', '', '', '30', '20', '', '', '', '', '', ''),
('1', '', 'CSE200', '123', '', '', '123', '123', '', '', '', '', '', ''),
('', '', 'CSE457', 'dfg', '', '', '30', '20', '', '', '', '', '', ''),
('', '', 'CSE457', 'rabbi', '', '', '30', '123', '', '', '', '', '', ''),
('', '', 'CSE457', 'dfg', '', '', '30', '20', '', '', '', '', '', ''),
('1', '', 'CSE200', 'Digital Electronics and Pulse', '', '', '15', '20', '', '', '', '', '', ''),
('1', '', 'CSE411', 'dfg', '', '', '123', '123', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `sgpa` varchar(50) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(500) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `semester`, `cgpa`, `sgpa`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`) VALUES
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('', 'summer,2018', '', '0.00', '  ', '  ', 'CSE457  ', 'CSE457  ', 'CSE457  ', '', '', ''),
('1', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', 'CSE411  ', '', '', '', '', ''),
('14152103157', 'summer,2018', '', '0.00', 'CSE411  ', '10  ', 'bfgvb  ', 'rfgfdfgdf  ', 'CNDN  ', '', '', ''),
('14152103185', 'summer,2018', '', '0.00', 'CSE205  a', 'CSE457  d', '', '', '', '', '', ''),
('Array', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', ''),
('Resource id #8', 'summer,2018', '', '0.00', 'CSE200  ', 'CSE200  ', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_routine`
--

CREATE TABLE `student_routine` (
  `ID` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `class1` varchar(50) NOT NULL,
  `class2` varchar(50) NOT NULL,
  `class3` varchar(50) NOT NULL,
  `class4` varchar(50) NOT NULL,
  `class5` varchar(50) NOT NULL,
  `class6` varchar(50) NOT NULL,
  `class7` varchar(50) NOT NULL,
  `class8` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_routine`
--

INSERT INTO `student_routine` (`ID`, `day`, `class1`, `class2`, `class3`, `class4`, `class5`, `class6`, `class7`, `class8`) VALUES
('1', 'a', 'a', 'a', 'afm', 'xcvcxvcx', 'cxvvcx', 'cxcxvcxv', 'cxvcx', 'vcxvvc'),
('1', 'a', 'a', 'a', 'afm', 'xcvcxvcx', 'cxvvcx', 'cxcxvcxv', 'cxvcx', 'vcxvvc'),
('14152103157', 'sat', 'rfgfdfgdf', 'gdfgdfg', 'dfgfd', 'dfgf', 'dfgdfgfd', 'dfgfdg', '', ''),
('14152103185', 'sat', 'CNDN', 'gdfgdfg', '', '', '', 'dfgfdg', '', ''),
('14152103157', 'sun', 'edfewf', 'sdfdssdf', 'sdfsdf', 'sdfsdfs', '', 'sdsdsd', '', 'sdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `type` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `intake` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`type`, `dept`, `intake`, `section`, `course`, `topic`, `date`, `faculty`) VALUES
('sadfsf', 'cse', '29', '4', 'abcfd', 'dfdfdf', 'dfgfdgdfg', 'dfgfdgfdg'),
('sadfsf', 'cse', '29', '5', 'abcfd', 'fdgf', 'sdf', 'dfgfdgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `credit` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `title` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`credit`, `point`, `grade`, `title`) VALUES
(2, 2, 157, 0),
(2, 3, 157, 0),
(2, 1, 0, 0),
(2, 2, 185, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Intake` varchar(50) NOT NULL,
  `Section` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL DEFAULT '',
  `Password` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Department`, `Intake`, `Section`, `Email`, `Password`) VALUES
('14152103157', 'Golam Rabbi', 'CSE', '29', '4', 'rabbi29157@gmail.com', '12345'),
('123', '', '', '', '', 'rabbi', '123'),
('123', '', '', '', '', 'rabbi', '123'),
('12345', '', '', '', '', 'rabbi', '12345'),
('13143103093', '', '', '', '', 'pushporani67@gmail.com', '1234'),
('13143103093', '', '', '', '', 'pushporani67@gmail.com', '1234'),
('14152103157', 'Golam Rabbi', 'CSE', '29', '4', 'rabbi29157@gmail.com', '12345'),
('123', '', '', '', '', 'rabbi', '123'),
('123', '', '', '', '', 'rabbi', '123'),
('12345', '', '', '', '', 'rabbi', '12345'),
('13143103093', '', '', '', '', 'pushporani67@gmail.com', '123456'),
('12345', '', '', '', '', 'asfv', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
