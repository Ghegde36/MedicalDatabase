-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 05:23 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalrecord`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pm` (IN `pid` INT)  NO SQL
UPDATE patient p set p.Totalmed=P.Totalmed+1 WHERE Pa_no=pid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE `allergies` (
  `Pa_no` int(11) NOT NULL,
  `Allergy` varchar(30) NOT NULL,
  `Allergen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`Pa_no`, `Allergy`, `Allergen`) VALUES
(123456789, 'Rashes', 'Honey'),
(0, 'rashes', 'honey'),
(0, 'rashes', 'honey'),
(54543551, 'xakx', 'hhj'),
(2121321, 'hdgash', 'shgdh'),
(21213212, 'sdzjfsf', 'dfhs'),
(212132123, 'sadnbd', 'dbcns'),
(212132123, 'sadnbd', 'dbcns'),
(4313212, 'jshjadhf', 'hgadsg'),
(64354545, 'djksfhjs', 'dsfhjf'),
(45545543, 'sdjfks', 'fdhudsh'),
(12312312, 'sajshdj', 'djsfhj'),
(757575, 'efe', 'fc');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Da_no` bigint(11) NOT NULL,
  `Dname` varchar(20) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Da_no`, `Dname`, `Phone_no`, `Email`, `Password`) VALUES
(0, 'chethan', 2147483647, 'che@chakka.com', '12345678'),
(12, '', 12, 'a@hja.com', '12'),
(13, '1', 0, 'q', 'a'),
(123, 'sdba', 3351321, 'sdjsa', '121'),
(5135, 'qw', 5455, 'q@d.c', '12345656'),
(54545, 'bshdfh', 45, 'dfhsfj@shdg.com', '12345612'),
(5454542, 'ashdag', 2147483647, 'a@gamil.com', '12345689'),
(223232332, 'test', 545454354, 'gdfgafd@shagdh.com', '12'),
(1213231231, 'ga', 123, 'dsfsd', '123'),
(2147483647, 'chethan', 2147483647, 'imchet09@gmail.com', 'chethan18'),
(2535651353, 'hello', 2147483647, 'ga@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `econtacts`
--

CREATE TABLE `econtacts` (
  `Pa_no` int(11) NOT NULL,
  `E_name` varchar(20) NOT NULL,
  `Phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `econtacts`
--

INSERT INTO `econtacts` (`Pa_no`, `E_name`, `Phone_no`) VALUES
(212132123, 'nxbcnzxc ', 212112),
(64354545, '454543454', 0),
(45545543, 'jfdsjfjkshkf', 54554),
(12312312, 'hdsh', 54543434),
(12312312, 'hdsh', 54543434),
(757575, 'fgfhg', 5443454);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `Pa_no` int(11) NOT NULL,
  `R_no` int(11) NOT NULL,
  `Details` varchar(30) NOT NULL,
  `Dosage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`Pa_no`, `R_no`, `Details`, `Dosage`) VALUES
(12312312, 323223, 'dfkjsdhfghdf', 'dfdsf'),
(212132123, 2222121, 'dsahdahs', 'jdhj'),
(5131, 2222121, 'dsfsf', 'gdfgd'),
(12312312, 2123, 'dshhSSDHD', 'HFSAJ'),
(64354545, 43546, 'jsdfgds', 'fdhs'),
(45545543, 5434543, 'xnvcmnvmx', 'nvm,vsnmv,'),
(123456789, 2222121, 'shdghjs', 'dgjsad'),
(12345678, 323223, 'shdgh', 'sdg'),
(757575, 5545, 'hgedgdeh', 'hedghged'),
(12312312, 2222121, 'fgd', 'fd');

--
-- Triggers `medication`
--
DELIMITER $$
CREATE TRIGGER `medc` BEFORE INSERT ON `medication` FOR EACH ROW BEGIN
CALL pm(new.pa_no);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Pa_no` int(11) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Blood_group` varchar(3) NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `Dob` date NOT NULL,
  `Adress` varchar(20) NOT NULL,
  `Totalmed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Pa_no`, `Pname`, `Phone_no`, `Blood_group`, `Sex`, `Dob`, `Adress`, `Totalmed`) VALUES
(0, 'cjhgdf', 0, '', '', '0000-00-00', '', 1),
(5131, 'dhsj', 351, 'n', 'd', '2017-11-05', 'sdbhb', 3),
(56533, 'sdn', 1211, 'dh', 'Male', '0000-00-00', 'sdajdh', 0),
(757575, 'fdvf', 68628682, 'q', 'Male', '2017-06-01', 'fdfd', 1),
(2121321, 'dff', 51212, 'n', 'Male', '2012-12-01', '221', 1),
(4313212, 'asdhjhdjs', 23232323, 'd', 'Male', '0000-00-00', 'ajdkdjka', 1),
(12312312, 'Cheta', 45443545, 'l', 'Other', '2016-12-12', 'jshadjshdj', 3),
(12341324, '', 2653653, 'e', 'Male', '0000-00-00', 'sgdh', 1),
(12345678, 'Ram', 987654321, 'A', 'Male', '2016-03-01', 'Manglore', 2),
(21213212, 'dff', 51212, 'n', 'Male', '2012-12-01', '221', 1),
(45545543, 'dsf,ld,l', 0, 'f', 'Male', '0000-00-00', 'lfkdslfkf', 1),
(54543551, 'gfdjshf', 53543545, 'dfh', 'Male', '0000-00-00', 'sdfjhj', 1),
(64354545, 'sfdsdfj', 54543454, 'd', 'Male', '0000-00-00', 'dskfj,s', 1),
(123456789, 'Ram', 987654321, 'A', 'Male', '2016-03-01', 'Manglore', 2),
(212132123, 'dff', 51212, 'n', 'Male', '2012-12-01', '221', 1);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `Da_no` bigint(11) NOT NULL,
  `Pa_no` int(11) NOT NULL,
  `R_no` int(11) NOT NULL,
  `Details` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Remarks` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`Da_no`, `Pa_no`, `R_no`, `Details`, `Date`, `Remarks`) VALUES
(2535651353, 12345678, 2123, 'fcfaSF', '2012-10-10', '12'),
(54545, 757575, 5545, 'hedghd', '2017-06-01', 'hgedhgedh'),
(1213231231, 64354545, 43546, 'DFJHDSJFHJ', '0000-00-00', 'jfhddsfhjdh'),
(223232332, 12312312, 323223, 'sjkdhajkhdj', '0000-00-00', 'jdhfjskhfdj'),
(1213231231, 212132123, 2222121, 'jbdsbd', '0000-00-00', '0'),
(1213231231, 45545543, 5434543, 'nvmcxnvmx', '0000-00-00', 'cm,xm,vnxc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD KEY `Pa_no` (`Pa_no`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Da_no`);

--
-- Indexes for table `econtacts`
--
ALTER TABLE `econtacts`
  ADD KEY `Pa_no` (`Pa_no`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD KEY `R_no` (`R_no`),
  ADD KEY `Pa_no` (`Pa_no`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Pa_no`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD UNIQUE KEY `R_no` (`R_no`),
  ADD KEY `Pa_no` (`Pa_no`),
  ADD KEY `Da_no` (`Da_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allergies`
--
ALTER TABLE `allergies`
  ADD CONSTRAINT `allergies_ibfk_1` FOREIGN KEY (`Pa_no`) REFERENCES `patient` (`Pa_no`);

--
-- Constraints for table `econtacts`
--
ALTER TABLE `econtacts`
  ADD CONSTRAINT `econtacts_ibfk_1` FOREIGN KEY (`Pa_no`) REFERENCES `patient` (`Pa_no`);

--
-- Constraints for table `medication`
--
ALTER TABLE `medication`
  ADD CONSTRAINT `medication_ibfk_2` FOREIGN KEY (`R_no`) REFERENCES `records` (`R_no`),
  ADD CONSTRAINT `medication_ibfk_3` FOREIGN KEY (`Pa_no`) REFERENCES `patient` (`Pa_no`);

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`Pa_no`) REFERENCES `patient` (`Pa_no`),
  ADD CONSTRAINT `records_ibfk_2` FOREIGN KEY (`Da_no`) REFERENCES `doctor` (`Da_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
