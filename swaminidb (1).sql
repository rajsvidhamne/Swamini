
--
-- Database: `swaminidb`
--
CREATE DATABASE IF NOT EXISTS `swaminidb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `swaminidb`;

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE IF NOT EXISTS `achievement` (
  `image` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`image`, `description`, `ID`) VALUES
('a1.jpg', 'The Excel Bright Awards', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `email` varchar(30) NOT NULL,
  `courcename` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `addid` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL DEFAULT 'Not Approve',
  PRIMARY KEY (`addid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`email`, `courcename`, `address`, `joindate`, `addid`, `status`) VALUES
('tina@gmail.com', 'Advance Class', 'satara', '2021-12-10', 1, 'Approved'),
('riya@gmail.com', '3D Make-up', 'pune', '2022-01-01', 2, 'Not Approve'),
('komaldixit1510@gmail.com', 'HD Make-up', 'Satara', '2022-01-03', 3, 'Not Approve'),
('kajalk13@gmail.com', 'HD Make-up', 'satara', '2022-01-26', 4, 'Not Approve');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookid` int(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `timeslot` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `description` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not confirm',
  PRIMARY KEY (`bookid`)
) ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `address`, `timeslot`, `bdate`, `description`, `email`, `status`) VALUES
(1, 'satara', 'Morning', '2021-12-21', 'Engagement Makeup', 'tina@gmail.com', 'confirm'),
(2, 'satara', 'Afternoon', '2022-01-05', 'Maharatrian Bridal Makeup', 'tina@gmail.com', ''),
(3, 'satara', 'Evening', '2022-01-04', 'Destination Photoshoot', 'komaldixit1510@gmail.com', ''),
(4, 'mumbai', 'Morning', '2022-08-10', 'facial', 'alfiya@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `cource`
--

CREATE TABLE IF NOT EXISTS `cource` (
  `courceid` int(30) NOT NULL,
  `courcename` varchar(30) NOT NULL,
  `rates` double NOT NULL,
  `duration` varchar(30) NOT NULL,
  `des` varchar(300) NOT NULL,
  PRIMARY KEY (`courceid`)
) ;

--
-- Dumping data for table `cource`
--

INSERT INTO `cource` (`courceid`, `courcename`, `rates`, `duration`, `des`) VALUES
(101, 'Advance Class', 1001, '3 months', 'Advance class of makeup with live sessions'),
(102, 'HD Make-up', 5000, '1 month', 'HD-Makeup with live sessions'),
(103, '3D Make-up', 1800, '3 months', '3D-Makeup with live sessions'),
(104, 'Airbrush', 1800, '1 month', 'Airbrush Makeup with live sessions'),
(105, 'party makeup', 1000, '1 month', 'Party appropriate Makeup with live sessions');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `msg` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `name`, `msg`) VALUES
('tina@gmail.com', 'tina', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
)  ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`pid`, `img`) VALUES
(1, 'm4.jpg'),
(2, 'm6.jpg'),
(3, 'm1.jpg'),
(4, 'm14.jpg'),
(5, 'm16.jpg'),
(6, 'o7.jpg'),
(7, 'm2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `picname` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `rates` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `picid` int(11) NOT NULL,
  PRIMARY KEY (`picid`)
) ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`picname`, `description`, `rates`, `image`, `type`, `picid`) VALUES
('Engagement Look', 'Engagement Look', 5000, 'o2.jpg', 'Engagement', 1),
('Engagement Look ', 'Engagement Look ', 3000, 'm5.jpg', 'Engagement', 2),
('Maharashtrian Bride', 'Beautiful Bride', 5000, 'm7.jpg', 'Maharashtrian', 3),
('Model Make-up', 'Model Make-up', 5000, 'o3.jpg', 'Photoshoot', 4),
('Party Make-up', 'Party Make-up', 5000, 'w1.jpg', 'Party', 5),
('Model HD amkeup', 'Model HD amkeup', 2000, 'o7.jpg', 'Photoshoot', 6),
('Bridal Make-up', 'Bridal Make-up', 3000, 'm16.jpg', 'Bridal', 7),
('Party Look', 'Party Make-up ', 5001, 'p2.jpg', 'Party', 8),
('Maharashtrian Bride', 'Bride Wearing Nauvari Sarri \r\nMakeup and Hair by Swamini', 5000, 'm14.jpg', 'Maharashtrian', 9),
('Model Photoshoot ', 'Model Photoshoot at satara', 3000, 'o4.jpg', 'Photoshoot', 10);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sdate` date DEFAULT NULL,
  PRIMARY KEY (`email`)
) ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `contactno`, `password`, `sdate`) VALUES
('alfiya', 'alfiya@gmail.com', '8989898989', '12345', '2022-08-09'),
('asha', 'asha@gmail.com', '9874563210', 'asha', '2021-12-27'),
('Bhumika ', 'bwaghmale99@gmail.com', '9874563210', 'Bhmi', '2022-01-19'),
('dipali', 'dipali@gmail.om', '8989898989', '12345', '2022-08-09'),
('Kajal', 'kajalk13@gmail.com', '7896541230', 'kajal', '2022-01-19'),
('Komal Dixit', 'komaldixit1510@gmail.com', '9874563210', 'Komal', '2022-01-13'),
('riya', 'riya@gmail.com', '9876543212', 'riya', '2022-01-11');

