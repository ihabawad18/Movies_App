-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 01:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Movie_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Release_Date` date NOT NULL,
  `Director` varchar(30) NOT NULL,
  `cover_photo` varchar(80) DEFAULT 'https://ucarecdn.com/9634962f-8e65-4746-a1a5-e8e609b44dcf/image2.png',
  `Length` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_ID`, `Name`, `Genre`, `Release_Date`, `Director`, `cover_photo`, `Length`) VALUES
(10, 'ihab', 'aaaa', '2023-12-12', 'www', 'https://ucarecdn.com/49d7940b-fd10-4bc0-88a4-c00bc7258226/', 122),
(11, 'ihba', 'action', '2023-12-03', 'iha', 'https://ucarecdn.com/2fa3ef94-0741-4a3a-82bd-3bbb1b5d503c/', 122),
(12, 'kaka', 'action', '2023-12-12', 'iaha', 'https://ucarecdn.com/41ad75a8-3330-428d-9d7a-47cdc53911b2/', 122),
(13, 'CUn', 'action', '2023-12-04', 'tba', 'https://ucarecdn.com/1fd114c2-bd50-4875-8f13-14583632b404/', 122),
(14, 'LALA', 'action', '2023-12-06', 'ANy', 'https://ucarecdn.com/9634962f-8e65-4746-a1a5-e8e609b44dcf/image2.png', 122),
(15, 'Movie', 'fantasy', '2023-12-13', 'Director', 'https://ucarecdn.com/9634962f-8e65-4746-a1a5-e8e609b44dcf/image2.png', 140),
(17, 'Lala2', 'Fantasy', '2023-12-04', 'Lala', 'https://ucarecdn.com/9634962f-8e65-4746-a1a5-e8e609b44dcf/image2.png', 150),
(18, 'Tom', 'drama', '2023-12-06', 'Any', 'https://ucarecdn.com/af08f89c-5521-4b15-ba01-e29912247071/', 150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `Created_At` date NOT NULL DEFAULT current_timestamp(),
  `Updated_At` date NOT NULL DEFAULT current_timestamp(),
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `FirstName`, `LastName`, `DOB`, `Created_At`, `Updated_At`, `isAdmin`) VALUES
(11, 'ihab@gmail.com', '$2y$10$Bb/l7GlaZ.X9D3DrKdF7WOCsGUcq0FZt6EqAHEUGPdwRbwezDVP4y', 'ihab', 'ihab', '2023-12-21', '2023-12-20', '2023-12-20', 0),
(12, 'ihab2@gmail.com', '$2y$10$EYafwTcHh7E1qIsBwctituErNjiE/kMeofckGI.9uehEGhjc4A.Py', 'ihab', 'ihab', '2023-12-29', '2023-12-20', '2023-12-23', 1),
(13, 'ihab3@gmail.com', '$2y$10$vHLySRjtyGh9d9BCFD3DCu27QosulXr/0DNZ805FXpG07dwk/yWxi', 'ihab', 'awad', '2023-12-13', '2023-12-21', '2023-12-21', 0),
(25, 'ihab4@gmail.com', '$2y$10$22W24lXJuMqlzINf1vZBTe63go3o6crwNY4aw33TBV3QK1XSFLPfK', 'Ihab', 'Awad', '2023-12-06', '2023-12-21', '2023-12-21', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Movie_ID`),
  ADD UNIQUE KEY `unique_constraint_name` (`Name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `Movie_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
