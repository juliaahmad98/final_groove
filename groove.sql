-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2023 at 05:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groove`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `first_name`, `last_name`) VALUES
(1, 'Ethan', 'West'),
(2, 'THEOS', ''),
(3, 'DJacuzzi', ''),
(4, 'Julío', 'Cruz'),
(5, 'Bootie', 'Grove'),
(6, 'Leo', 'Pol'),
(7, 'Moise', 'Keane'),
(8, 'DJibouti', ''),
(9, 'Sweely', ''),
(10, 'Men From The Nile', ''),
(11, 'DATSKO', ''),
(12, 'Mara', 'Lakour'),
(13, 'Kid ', 'Only'),
(14, 'Baccus', ''),
(15, 'Martinez', 'Brothers'),
(16, 'Ben', 'Murphy'),
(17, 'Kolter', ''),
(18, 'Deborah Aime', 'La Bagarre'),
(19, 'Oden & Fatzo', ''),
(20, 'Ruze', ''),
(21, 'Lo', 'Malo'),
(22, 'Ben', 'Rau'),
(23, 'Dj', 'Cinéma'),
(24, 'Marc', 'Brauner'),
(25, 'Nu', 'Genea'),
(26, 'Piero', 'Pirupa'),
(27, 'Eddy', 'M'),
(28, 'Vanilla ', 'Ace'),
(29, 'Kevin', 'McKay'),
(30, 'Jeff', 'The Fool'),
(31, 'Vincent', 'Caira');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `description`, `title`, `name`) VALUES
(1, 'Test', 'Hello, this is ', 'Test', 'julia'),
(2, 'Hello', 'Test message', 'Hello', 'Julia Ahmad'),
(3, 'Juliazeinab@outlook.com', 'Test test', 'Hello', 'Julia Ahmad'),
(4, 's', 's', 's', 's'),
(5, 's@outlook.com', 's', 's', 's'),
(6, 'ss@outlook.com', 'j', 'j', 'x'),
(7, 'sd@outlook.com', 'J', 'jj', 's'),
(8, 'sarah@outlook.com', 'Test\r\n', 'Hello', 'Sarah Kojok'),
(9, 'juju@outlook.com', '', 'hello', 'Julia A'),
(10, 'tna@info.com', 'Test this.', 'TNA', 'Tina Fayad');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_type`) VALUES
(1, 'House'),
(2, 'Nu-Disco'),
(3, 'Chicago House'),
(4, 'Funky'),
(5, 'Groove House\r\n'),
(6, 'Minimal/Deep Tech');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `track_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `track_id`) VALUES
(14, 3, 5),
(15, 3, 6),
(16, 3, 7),
(17, 3, 8),
(18, 3, 9),
(19, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `record_label`
--

CREATE TABLE `record_label` (
  `label_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record_label`
--

INSERT INTO `record_label` (`label_id`, `name`) VALUES
(1, 'Earth Agency'),
(2, 'Underground Sound'),
(3, 'Critique'),
(4, 'Shall Not Fade'),
(5, 'ad Sol'),
(6, 'IILE'),
(7, 'Limousine Dream '),
(8, 'Record Union');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `track_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` int(11) NOT NULL,
  `track_name` varchar(100) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `duration` varchar(220) NOT NULL,
  `year` text NOT NULL,
  `label_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `bpm` text NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_name`, `artist_id`, `duration`, `year`, `label_id`, `genre_id`, `bpm`, `image`) VALUES
(5, 'Questa Sera Sono', 8, '6:32', '2022', 2, 1, '129', 'uploads/questa_sera88139.jpg'),
(6, 'Lie Machine', 2, '6:32', '2021', 4, 6, '127', 'uploads/liemachine54259.jpg'),
(7, 'Cantona', 8, '6:52', '2021', 3, 1, '129', 'uploads/cantona21738.jpg'),
(8, 'Miami 1985', 8, '5:42', '2023', 5, 4, '127', 'uploads/miami198565523.jpg'),
(9, 'CANDY', 1, '3:56', '2022', 2, 1, '125', 'uploads/candy53629.jpg'),
(11, 'Don\'t Push It Too Far', 9, '5:42', '2022', 7, 6, '30', 'uploads/garage14221.jpg'),
(13, 'Cerca De Mi', 8, '4:01', '2021', 8, 1, '127', 'uploads/cerca93473.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `address`) VALUES
(3, 'juliaahmad', 'b9ca096369539ff6e79b3a27f3fb2028', 'julia', 'ahmad', 'jahmad11@pratt.edu', 'New York'),
(4, 'juliaahmad_', '576888f756d7706dca200c4b9f3c8fac', 'Julia', 'Ahmad', 'jahmad1@pratt.edu', 'New York'),
(5, 'jadmatta', '8b669d9ef4574489f1814a7a8bf735a0', 'Jad', 'Matta', 'jad@outlook.com', 'Lebanon'),
(6, 'juliaahmad98', '203ad5ffa1d7c650ad681fdff3965cd2', 'Julia', 'Ahmad', 'jahmad111@pratt.edu', 'New York'),
(7, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'Julia', 'Ahmad', 'jahmad2@pratt.edu', 'New York'),
(8, 'sarahkojok', 'cd2ecb9d61c448e1776b9f347c94c4b2', 'Sarah', 'Kojok', 'sarahkoj@outlook.com', 'Netherlands'),
(9, 'darinekojok', 'c4ca4238a0b923820dcc509a6f75849b', 'Darine ', 'Kojok', 'darine@outlook.com', 'Lebanon'),
(10, 'marinakojok', 'c4ca4238a0b923820dcc509a6f75849b', 'Marina', 'Kojok', 'marina@outlook.com', 'Lebanon'),
(12, 'henri', 'c4ca4238a0b923820dcc509a6f75849b', 'Henri', 'Castillo', 'h@outlook.com', 'New York'),
(13, 'marimar_ahmad', '819d40a8ee41d72bcb410dd725b283ff', 'Mariana', 'Ahmad', 'marimar_ahmad@outlook.com', 'Lebanon'),
(14, 'amaniabd', 'c9beb2e4ad1a910371006eaf05176e5f', 'Amani', 'Elali', 'amaniabd@outlook.com', 'France'),
(15, 'juliaahmad10', '8f4328fe4b2058518a51739fc1d2edc5', 'Julia', 'Ahmad', 'juliazeinab.ahmad@outlook.com', 'New York'),
(16, 'zeinabajami', '34301470915837d5e30508a9f59013e1', 'Zeinab', 'Ajami', 'zajami@outlook.com', 'United Kingdom'),
(17, 'fadiaahmad', '8f4328fe4b2058518a51739fc1d2edc5', 'Fadia', 'Ahmad', 'fadia123@outlook.com', 'France'),
(18, 'ayasaf', 'd4a77fb5b19450dc534f1cefe56587ec', 'Aya', 'Saf', 'ayasaf@pratt.edu', 'United Arab Emirates'),
(19, 'zoabel', '07bc5279da369d7becd5e8c8b7b7680c', 'Zoa', 'Bel', 'zoab@outlook.com', 'Spain'),
(20, 'natalialadki', '8f4328fe4b2058518a51739fc1d2edc5', 'Natalia', 'Ladki', 'natlad@outlook.com', 'United Arab Emirates'),
(21, 'cactusjay', '104565b7ea7db0c67e907e80cb8b2369', 'Mo', 'Hijazi', 'momo@outlook.com', 'New Jersey'),
(22, 'j', '363b122c528f54df4a0446b6bab05515', 'j', 'j', 'j@outlook.com', 'New York'),
(23, 'insafday', 'c4ca4238a0b923820dcc509a6f75849b', 'Insaf', 'Dayekh', 'insafo@outlook.com', 'London'),
(24, 'jaya', 'c4ca4238a0b923820dcc509a6f75849b', 'Jaya', 'Aya', 'jaya@outlook.com', 'New York'),
(25, 'juliaahmad__', '992c5ae71de2df132b7f0b2f6c020fa1', 'Julia', 'A', 'juliahmad@outlook.com', 'New York'),
(26, 'testest', '8f4328fe4b2058518a51739fc1d2edc5', 'Test', 'Test', 'testets@outlook.com', 'New York'),
(27, 'anthonyle', '8f4328fe4b2058518a51739fc1d2edc5', 'Anthony', 'Baradi', 'anthony@outlook.com', 'New York'),
(28, 'lifeinmars', 'e807f1fcf82d132f9bb018ca6738a19f', 'Marina', 'Kojok', 'lifeinmars@outlook.com', 'New York');

-- --------------------------------------------------------

--
-- Table structure for table `users_track`
--

CREATE TABLE `users_track` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `track_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `track_id` (`track_id`);

--
-- Indexes for table `record_label`
--
ALTER TABLE `record_label`
  ADD PRIMARY KEY (`label_id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `track_id` (`track_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `label_id` (`label_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_track`
--
ALTER TABLE `users_track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `track_id` (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `record_label`
--
ALTER TABLE `record_label`
  MODIFY `label_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users_track`
--
ALTER TABLE `users_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`track_id`) REFERENCES `track` (`track_id`);

--
-- Constraints for table `shares`
--
ALTER TABLE `shares`
  ADD CONSTRAINT `shares_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `shares_ibfk_2` FOREIGN KEY (`track_id`) REFERENCES `track` (`track_id`);

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `track_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `track_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `track_ibfk_3` FOREIGN KEY (`label_id`) REFERENCES `record_label` (`label_id`);

--
-- Constraints for table `users_track`
--
ALTER TABLE `users_track`
  ADD CONSTRAINT `users_track_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `users_track_ibfk_2` FOREIGN KEY (`track_id`) REFERENCES `track` (`track_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
