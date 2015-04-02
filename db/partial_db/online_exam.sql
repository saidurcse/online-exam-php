-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2015 at 05:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES
(1, 'admin', 'kiit'),
(2, 'admin1', 'kiit1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_edit_questions`
--

CREATE TABLE IF NOT EXISTS `admin_edit_questions` (
  `question_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

CREATE TABLE IF NOT EXISTS `examdetails` (
  `examdetails_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `epassword` varchar(15) NOT NULL,
  PRIMARY KEY (`examdetails_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`examdetails_id`, `admin_id`, `epassword`) VALUES
(1, 1, '761048');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `level_id` int(10) NOT NULL,
  `level_no` int(10) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `answer1` varchar(30) NOT NULL,
  `answer2` varchar(30) NOT NULL,
  `answer3` varchar(30) NOT NULL,
  `answer4` varchar(30) NOT NULL,
  `correct_option` int(10) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `correct_option`) VALUES
(1, 'When applied to a variable, what does the unary "&" operator yield? ', 'The variable''s value ', 'The variable''s binary form ', 'The variable''s address ', 'The variable''s format ', 3),
(2, 'Which one of the following variable names is NOT valid? ', 'go_cart ', 'go4it', '4season', 'run4', 3),
(3, 'char txt [20] = "Hello world!\\0";  How many bytes are allocated by the definition above? ', '11 bytes ', '12 bytes ', '13 bytes ', '20 bytes', 4),
(4, 'Which one of the following C operators is right associative? ', '=', ', ', '[] ', '^', 1),
(5, 'Which one of the following will read a character from the keyboard and will store it in the varia', 'c = getc(); ', 'getc( &c ); ', 'getchar( &c ) ', 'c = getchar(); ', 4),
(6, 'In a C expression, how is a logical AND represented? ', '@@ ', '||', '.AND.', '&&', 4),
(7, 'char ** array [12][12][12];  Consider array, defined above. Which one of the following definition', 'char ** (* p) [12][12] = array', 'char ***** p = array; ', 'char * (* p) [12][12][12] = ar', 'const char ** p [12][12][12] =', 1),
(8, 'C is which kind of language? ', 'Machine', 'Procedural', 'Assembly', 'Object-oriented ', 2),
(9, 'int x = 2 * 3 + 4 * 5;  What value will x contain in the sample code above? ', '22', '26', '46', '50', 2),
(10, '11 ^ 5  What does the operation shown above produce? ', '8', '1', '6', '14', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `test_id`, `admin_id`, `student_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(30) NOT NULL,
  `name` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `sadd` varchar(60) NOT NULL,
  `e-mail` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `result` int(15) NOT NULL,
  `appeared` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `name`, `age`, `sadd`, `e-mail`, `password`, `result`, `appeared`) VALUES
(2, 'Pune', 'pune', 22, 'addsaa', 'sadsafsd', '1000', 1, 1),
(1, 'KKR', 'kkr', 23, 'dsad', 'asdsad', '1000', 0, 1),
(3, 'MI', 'mi', 25, 'asdaefr', 'asdasd', '1000', 0, 0),
(4, 'csk', 'csk', 23, 'chennai', 'cheanni@gmail.com', '1000', 0, 0),
(5, 'royal', 'royal', 25, 'royal ', 'royal@gmail.com', '5351', 0, 0),
(6, 'test', 'test', 12, 'test', 'test@gmail.com', '9247', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_admin`
--

CREATE TABLE IF NOT EXISTS `student_admin` (
  `student_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_admin`
--

INSERT INTO `student_admin` (`student_id`, `admin_id`, `name`, `password`) VALUES
(1, 1, 'student', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(10) NOT NULL,
  `test_no` int(10) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_has_examdetails`
--

CREATE TABLE IF NOT EXISTS `test_has_examdetails` (
  `test_id` int(10) NOT NULL,
  `examdetails_id` int(10) NOT NULL,
  PRIMARY KEY (`examdetails_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_level`
--

CREATE TABLE IF NOT EXISTS `test_level` (
  `test_id` int(10) NOT NULL,
  `level_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
