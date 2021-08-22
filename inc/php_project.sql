-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 08:24 AM
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
(37, 'Ferdinand reveals he once wanted to play for Arsenal but was denied by Wenger', 'Former Rio Ferdinand defender Rio Ferdinand Presents FIVE said in a video posted on his YouTube channel recently After leaving Manchester United in 2014, he wanted to continue playing for Arsenal, but was Arsene Wenger. The manager of the club at the time refused.', '2021-08-20 23:45:56', '611e6a326998c_1629383160_medium.jpg', 1, 2),
(38, 'Preah Vihear Province quietly identifies these areas as red areas to prevent the spread of Kovid-19 ', 'On August 20, 2021, the Preah Vihear Provincial Administration decided to continue to block and demarcate the red zone in \"Choam Ksan District\" to prevent the spread of Kovid-19 virus Delta.', '2021-08-20 23:51:46', '611f3eb4eda00_1629437580_medium.jpg', 1, 3),
(40, 'Elon Musk wants Tesla Bots to replace dangerous places', 'Elon Musk said the purpose of Tesla Electric to develop a new robot called the Tesla Bot was to enable the robots to replace humans in difficult or dangerous places.', '2021-08-21 00:08:40', '611f6a80c559d_1629448800_medium.jpg', 1, 4),
(41, 'Wan-Bissaka could face up to six months in prison for driving a Lamborghini.', 'Manchester United defender Aaron Wan-Bissaka has been indicted by a British court. Drove a Lamborghini Urus in Greater Manchester, England on June 23, 2021, during which time the player Self-driving cars are not allowed. According to the Daily Mail today.', '2021-08-21 00:10:08', '611fa9d407045_1629465000_medium.jpg', 1, 2),
(42, 'After the Duke announced the story \"Mien\" yesterday.', 'Pailin and Tangen fruits of Tycoon Leng Navatra, who announced the purchase of 1,000 tons from farmers to sell at Leng Navatra Natural Agricultural Market, have now arrived gradually,', '2021-08-21 00:14:59', '611f63cca98e1_1629447060_medium.jpg', 1, 1),
(43, 'These 8 celebrities are clear proof that age is not a problems', 'Every year passes so fast, do not remember us! However, Midfielder James Rodriguez said on his Twitter account today that it is unknown whether Everton will play. Any club tomorrow.Manchester United defender Aaron Wan-Bissaka has been indicted by a British court. Drove a Lamborghini Urus in Greater Manchester, England on June 23, 2021, during which time the player Self-driving cars are not allowed. According to the Daily Mail today.', '2021-08-21 00:19:51', '611f23ab328b5_1629430680_medium.png', 1, 1),
(50, 'Just came out! Da Phleng hooks a lot of young people through a romantic MV', 'The song was just posted on YouTube and immediately exploded in popularity because in addition to the music and lyrics that appeal to young people, there is also a story in the MV that looks like a live movie video. A song that has attracted the attention of many young people and said that the work of this song is really unusual youth, while this song is both the title and the lyrics are in love with most young people.', '2021-08-22 12:54:46', '6120a671198e9_1629529680_medium.jpg', 1, 1),
(51, '7 Khmer short films selected in CSFF 2021', 'The Chaktomuk Short Film Festival (CSFF) has been open from the beginning of March 2021. This 10th year CSFF will include short films from 2020 that were missed by the 19 19 Kovid Crisis.', '2021-08-22 12:57:14', '611f1f2b8b701_1629429540_medium.jpg', 1, 1),
(52, 'Official! Benzema extends new contract with Real Madrid until 2023', 'He has agreed a contract and will wear the number nine shirt at the Santiago Bernabeu until 2023. .  According to the old contract, which will expire in 2022, Benzema will receive more than $ 20 million a year in wages While the wages in the new contract have not been disclosed by any source yet.', '2021-08-22 13:11:24', '611fa87b9a28c_1629464640_medium.jpg', 1, 2),
(53, 'Messi and Neymar still can not play for PSG tonight until the 29th to play', 'Despite appearing to train with the team, PSG manager Mauricio Pochettino has yet to make a decision on the sport. ', '2021-08-22 13:13:50', '3d72fa8318936f7d7f430d3aa9181eb2b9b6b7ea.jpg', 1, 2),
(54, ' Chom Chao flyover and subway will be completed by the end of March 2022', 'As of August 20, 2021, the construction of the Choam Chao flyover and subway has achieved 80% of the project. During the construction, there was a traffic jam due to the fact that this road has a lot of people traveling and the traffic is always busy every day.', '2021-08-22 13:15:55', '611f6fcddf4dc_1629450180_medium.jpg', 1, 3),
(56, 'US Airlines will not serve alcohol on flights until 2022', 'US Airlines will not serve alcohol in the main cabin of its flights until January 18, 2022. This is according to information from CNN on August 20, 2021.', '2021-08-22 13:17:30', '611f2ed66d37f_1629433500_medium.jpg', 1, 3),
(57, 'End campaign to strengthen measures to prevent and prevent the spread of Kovid 19 but continue to tighten these rules', 'The Royal Government of Cambodia today issued a decision to close the \"Campaign to Strengthen Measures to Prevent and Prevent the Spread of Kovid-19\" on August 20, 2021. Given the opportunity for each provincial and municipal authority to continue to tighten measures based on the actual situation of the disease in their respective geographies and jurisdictions.', '2021-08-22 13:18:39', '611f171f1d6b5_1629427440_medium.jpg', 1, 3),
(58, 'Solve the question! Frequent charging causes iPhone battery to run faster', 'It has been said that if iPhone owners frequently charge the battery, even if it is not fully charged, it will soon cause battery problems. Extremely perishable. Is this statement true?', '2021-08-22 13:19:47', '5d6d00cda1967_1567424700_medium.jpg', 1, 4),
(59, 'Toyota Corolla Altis 2020 is on sale', 'The Corolla is a car that is very popular among consumers in terms of quality and economy after its first appearance in Cambodia in 2014.', '2021-08-22 13:20:53', '611f240850bdb_1629430740_medium.jpg', 1, 4),
(60, 'Buried! Honda CBR150R, the new SUPER SPORT series, is not inferior to the MotoGP racing motorcycles officially released', 'NCX, the only company licensed to manufacture and assemble Honda motorcycles and the leading motorcycle sales company in Cambodia, has officially launched the new HONDA CBR150R gearbox. Completely new under the concept of REAL RACER SPIRIT from August 19, 2021 onwards.', '2021-08-22 13:22:24', '611dd06dae610_1629343800_medium.jpg', 1, 4);

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
(12, 'Sothoun', 'Client', 'sothoun@gmai.com', '123', 'Thoun.jpg'),
(13, 'Cat', 'Client', 'tom@cat.com', 'c123', '224229759_1001791383930843_4849389710919660489_n.jpg');

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
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
