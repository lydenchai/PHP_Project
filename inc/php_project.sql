-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 05:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'entertainment'),
(2, 'sport'),
(3, 'sociaty\r\n'),
(4, 'technology');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(500) NOT NULL,
  `userID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `title`, `description`, `date`, `image`, `userID`, `categoryID`) VALUES
(37, 'Ferdinand reveals he once wanted to play for Arsenal but was denied by Wenger', 'Former Rio Ferdinand defender Rio Ferdinand Presents FIVE said in a video posted on his YouTube channel recently After leaving Manchester United in 2014, he wanted to continue playing for Arsenal, but was Arsene Wenger. The manager of the club at the time refused.', '2021-08-20 23:45:56', '611e6a326998c_1629383160_medium.jpg', 0, 2),
(38, 'Preah Vihear Province quietly identifies these areas as red areas to prevent the spread of Kovid-19 ', 'On August 20, 2021, the Preah Vihear Provincial Administration decided to continue to block and demarcate the red zone in \"Choam Ksan District\" to prevent the spread of Kovid-19 virus Delta.', '2021-08-20 23:51:46', '611f3eb4eda00_1629437580_medium.jpg', 0, 3),
(40, 'Elon Musk wants Tesla Bots to replace dangerous places', 'Elon Musk said the purpose of Tesla Electric to develop a new robot called the Tesla Bot was to enable the robots to replace humans in difficult or dangerous places.', '2021-08-21 00:08:40', '611f6a80c559d_1629448800_medium.jpg', 0, 4),
(41, 'Wan-Bissaka could face up to six months in prison for driving a Lamborghini', 'Manchester United defender Aaron Wan-Bissaka has been indicted by a British court. Drove a Lamborghini Urus in Greater Manchester, England on June 23, 2021, during which time the player Self-driving cars are not allowed. According to the Daily Mail today.', '2021-08-21 00:10:08', '611fa9d407045_1629465000_medium.jpg', 0, 2),
(42, 'After the Duke announced the story \"Mien\" yesterday.', 'Pailin and Tangen fruits of Tycoon Leng Navatra, who announced the purchase of 1,000 tons from farmers to sell at Leng Navatra Natural Agricultural Market, have now arrived gradually,', '2021-08-21 00:14:59', '611f63cca98e1_1629447060_medium.jpg', 0, 1),
(43, 'These 8 celebrities are clear proof that age is not a problem', 'Every year passes so fast, do not remember us! However, Midfielder James Rodriguez said on his Twitter account today that it is unknown whether Everton will play. Any club tomorrow.Manchester United defender Aaron Wan-Bissaka has been indicted by a British court. Drove a Lamborghini Urus in Greater Manchester, England on June 23, 2021, during which time the player Self-driving cars are not allowed. According to the Daily Mail today.', '2021-08-21 00:19:51', '611f23ab328b5_1629430680_medium.png', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `role`, `email`, `password`, `profile`) VALUES
(1, 'Lyden', 'Admin', 'lyden@gmail.com', 'L@den009', '203063479_789137698637512_2975936449375344321_n.jpg'),
(10, 'Kunthy Sen', 'Client', 'kuthysen@gmail.com', 's@nkunthy', 'IMG_1360.jpg'),
(11, 'Cat', 'Client', 'tom@cat.com', 'c123', 'cat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`,`categoryID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
