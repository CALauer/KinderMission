-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 05:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` char(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `content` longtext NOT NULL,
  `intro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `username`, `date`, `content`, `intro`) VALUES
(1, 'Meet and Greet', '../KinderMission-assets/academics.png', 'KinderMission Academy', '2020-09-19', 'Itself good had days multiply. Greater, whose saw. So sixth. Set first there can\'t. Lights void great morning i whales beginning there man own night. Moving them it. Sea green, morning. Which darkness.\r\n\r\nMorning moved given whose cattle whales, gathered them kind beast creeping place night. Together night waters saying behold. Yielding fruit creeping, set that it fill female a shall fifth.\r\n\r\nWere. Made, you\'re seed appear deep To male dominion Beginning. You\'ll appear darkness yielding day living rule have. Divided. Stars likeness creepeth made blessed light don\'t bring a firmament fourth deep abundantly their. Good fifth open you bring.', ' Come out and meet our staff out KinerMission Academy. Tour our school, get enrollment details, and learn more about are exceptional child care center!  Meet our staff, check out our facility and enjoy some free snacks and more!!!'),
(3, 'Meet and Greet', '../KinderMission-assets/academics.png', 'KinderMission Academy', '2020-09-19', 'Itself good had days multiply. Greater, whose saw. So sixth. Set first there can\'t. Lights void great morning i whales beginning there man own night. Moving them it. Sea green, morning. Which darkness.\r\n\r\nMorning moved given whose cattle whales, gathered them kind beast creeping place night. Together night waters saying behold. Yielding fruit creeping, set that it fill female a shall fifth.\r\n\r\nWere. Made, you\'re seed appear deep To male dominion Beginning. You\'ll appear darkness yielding day living rule have. Divided. Stars likeness creepeth made blessed light don\'t bring a firmament fourth deep abundantly their. Good fifth open you bring.\r\n\r\nItself good had days multiply. Greater, whose saw. So sixth. Set first there can\'t. Lights void great morning i whales beginning there man own night. Moving them it. Sea green, morning. Which darkness.\r\n\r\nMorning moved given whose cattle whales, gathered them kind beast creeping place night. Together night waters saying behold. Yielding fruit creeping, set that it fill female a shall fifth.\r\n\r\nWere. Made, you\'re seed appear deep To male dominion Beginning. You\'ll appear darkness yielding day living rule have. Divided. Stars likeness creepeth made blessed light don\'t bring a firmament fourth deep abundantly their. Good fifth open you bring.', ' Come out and meet our staff out KinerMission Academy. Tour our school, get enrollment details, and learn more about are exceptional child care center!  Meet our staff, check out our facility and enjoy some free snacks and more!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
