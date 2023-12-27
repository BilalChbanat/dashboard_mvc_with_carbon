-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2023 at 02:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplemvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `age` int NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `age`, `email`, `password`, `created`) VALUES
(16, 'John', 'Doe', 25, 'john.doe@example.com', 'hashed_password', '2023-12-26 20:21:41'),
(17, 'Liverpool', 'Premier League', 129, 'English Premier League', '19', '2023-12-26 20:56:46'),
(18, 'Barcelona', 'La Liga', 122, 'La Liga', '26', '2023-12-26 20:56:46'),
(19, 'Bayern Munich', 'Bundesliga', 121, 'Bundesliga', '31', '2023-12-26 20:56:46'),
(20, 'Real Madrid', 'La Liga', 120, 'La Liga', '34', '2023-12-26 20:56:46'),
(21, 'Manchester United', 'Premier League', 145, 'English Premier League', '20', '2023-12-26 20:56:46'),
(22, 'Juventus', 'Serie A', 124, 'Serie A', '36', '2023-12-26 20:56:46'),
(23, 'Paris Saint-Germain', 'Ligue 1', 51, 'Ligue 1', '9', '2023-12-26 20:56:46'),
(24, 'AC Milan', 'Serie A', 122, 'Serie A', '18', '2023-12-26 20:56:46'),
(25, 'Ajax', 'Eredivisie', 121, 'Eredivisie', '34', '2023-12-26 20:56:46'),
(26, 'Borussia Dortmund', 'Bundesliga', 112, 'Bundesliga', '8', '2023-12-26 20:56:46'),
(27, 'Eva', 'Brown', 37, 'eva.brown@example.com', 'hashed_password', '2023-12-26 21:17:58'),
(31, 'Alice', 'Smith', 28, 'alice.smith@example.com', 'hashed_password', '2023-12-27 13:16:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
