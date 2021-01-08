-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 03:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hisID` int(11) NOT NULL,
  `hisSummary` varchar(10000) NOT NULL,
  `hisSumOne` varchar(10000) NOT NULL,
  `hisSumTwo` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hisID`, `hisSummary`, `hisSumOne`, `hisSumTwo`) VALUES
(1, 'The town was named after the saint and martyr, Saint Fabian, the twentieth Pope of the Roman Catholic Church. The town\'s history dated as far back as March 23, 1572 a little over 5 decades after the supposed discovery of the Philippines by Ferdinand Magellan. It started as small and lowly settlement call \"Pueblo\" by the Spaniards, one of the may little pueblos, which dotted the Lingayen Gulf.', 'For some people, San Fabian mean White Beach referring to the calm, clear and safe beach resorts found along its shorelines, more famous that the blue beach of Dagupan City or the Red beach of Lingayen. It is also known as the town of flowing wells. It is used to be known for its abundant fish and the famous homemade \'bagoong\' which was then a byword in household throughout Pangasinan and other nearby provinces. San Fabian has its rightful place in the pages of historical books found in the libraries and archives of the Vatican and the United States.', 'The first \"municipio or presidencia\" was made of bricks and concrete. It was built in 1941 and almost demolished during World War II. It was used as a classroom for intermediate classes of the San Fabian Elementary School. <br><br>\r\n					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Historian Torres made a detailed account in his researches of American naval landings-one Japanese and two American occupation. The frst military landing occurred in November 7, 1899 with the army of Gen. Lloyd Wheaton. The second is during World War II, December 22, 1941 with Gen. Vaughan occupied the San Fabian from December 22, 1942. Gen. Douglas MacArthur made the third historical landing on January 9, 1945.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hisID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
