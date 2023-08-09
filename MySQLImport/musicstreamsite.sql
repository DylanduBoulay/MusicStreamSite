-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 04:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicstreamsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `artworkPath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist`, `genre`, `artworkPath`) VALUES
(1, 'Egg shells', 2, 4, 'assets/images/artwork/clearday.jpg'),
(2, 'Dog eggs', 5, 10, 'assets/images/artwork/energy.jpg'),
(3, 'Ronald McDonalds swag', 3, 1, 'assets/images/artwork/goinghigher.jpg'),
(4, 'THe ghostBusters mashmallow man', 2, 9, 'assets/images/artwork/funkyelement.jpg'),
(5, 'Gunshots', 1, 3, 'assets/images/artwork/popdance.jpg'),
(6, 'Big beats', 3, 6, 'assets/images/artwork/ukulele.jpg'),
(7, '$$Swaglords$$', 4, 7, 'assets/images/artwork/sweet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Scrooge McDuck'),
(2, 'Harry Dunn from Dumb & Dumber'),
(3, 'Beanz'),
(4, 'Goat ate my cheese'),
(5, 'Big boy swag');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Hip-hop'),
(4, 'Rap'),
(5, 'R & B'),
(6, 'Classical'),
(7, 'Techno'),
(8, 'Jazz'),
(9, 'Folk'),
(10, 'Country');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `owner`, `dateCreated`) VALUES
(0, 'Playlist Test', 'swaga', '2022-10-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `playlistsongs`
--

CREATE TABLE `playlistsongs` (
  `id` int(11) NOT NULL,
  `songId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `playlistOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlistsongs`
--

INSERT INTO `playlistsongs` (`id`, `songId`, `playlistId`, `playlistOrder`) VALUES
(0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` int(8) NOT NULL,
  `path` varchar(250) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(11) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`, `dateAdded`) VALUES
(1, 'Acoustic Breeze', 1, 5, 8, 2, 'assets/music/bensound-acousticbreeze.mp3', 1, 6, '2022-10-29 18:39:15'),
(2, 'A new beginning', 1, 5, 1, 2, 'assets/music/bensound-anewbeginning.mp3', 2, 1, '2022-10-29 18:39:15'),
(3, 'Better Days', 1, 5, 2, 2, 'assets/music/bensound-betterdays.mp3', 3, 0, '2022-10-29 18:39:15'),
(4, 'Buddy', 1, 5, 3, 2, 'assets/music/bensound-buddy.mp3', 4, 0, '2022-10-29 18:39:15'),
(5, 'Clear Day', 1, 5, 4, 1, 'assets/music/bensound-clearday.mp3', 5, 0, '2022-10-29 18:39:15'),
(6, 'Going Higher', 2, 1, 1, 4, 'assets/music/bensound-goinghigher.mp3', 1, 4, '2022-10-29 18:39:15'),
(7, 'Funny Song', 2, 4, 2, 3, 'assets/music/bensound-funnysong.mp3', 2, 0, '2022-10-29 18:39:15'),
(8, 'Funky Element', 2, 1, 3, 3, 'assets/music/bensound-funkyelement.mp3', 2, 2, '2022-10-29 18:39:15'),
(9, 'Extreme Action', 2, 1, 4, 8, 'assets/music/bensound-extremeaction.mp3', 3, 0, '2022-10-29 18:39:15'),
(10, 'Epic', 2, 4, 5, 2, 'assets/music/bensound-epic.mp3', 3, 0, '2022-10-29 18:39:15'),
(11, 'Energy', 2, 1, 6, 2, 'assets/music/bensound-energy.mp3', 4, 1, '2022-10-29 18:39:15'),
(12, 'Dubstep', 2, 1, 7, 2, 'assets/music/bensound-dubstep.mp3', 5, 0, '2022-10-29 18:39:15'),
(13, 'Happiness', 3, 6, 8, 4, 'assets/music/bensound-happiness.mp3', 5, 0, '2022-10-29 18:39:15'),
(14, 'Happy Rock', 3, 6, 9, 1, 'assets/music/bensound-happyrock.mp3', 4, 0, '2022-10-29 18:39:15'),
(15, 'Jazzy Frenchy', 3, 6, 10, 1, 'assets/music/bensound-jazzyfrenchy.mp3', 3, 0, '2022-10-29 18:39:15'),
(16, 'Little Idea', 3, 6, 1, 2, 'assets/music/bensound-littleidea.mp3', 2, 0, '2022-10-29 18:39:15'),
(17, 'Memories', 3, 6, 2, 3, 'assets/music/bensound-memories.mp3', 1, 0, '2022-10-29 18:39:15'),
(18, 'Moose', 4, 7, 1, 2, 'assets/music/bensound-moose.mp3', 5, 0, '2022-10-29 18:39:15'),
(19, 'November', 4, 7, 2, 3, 'assets/music/bensound-november.mp3', 4, 0, '2022-10-29 18:39:15'),
(20, 'Of Elias Dream', 4, 7, 3, 4, 'assets/music/bensound-ofeliasdream.mp3', 3, 1, '2022-10-29 18:39:15'),
(21, 'Pop Dance', 4, 7, 2, 2, 'assets/music/bensound-popdance.mp3', 2, 0, '2022-10-29 18:39:15'),
(22, 'Retro Soul', 4, 7, 5, 3, 'assets/music/bensound-retrosoul.mp3', 1, 0, '2022-10-29 18:39:15'),
(23, 'Sad Day', 5, 2, 1, 2, 'assets/music/bensound-sadday.mp3', 1, 1, '2022-10-29 18:39:15'),
(24, 'Sci-fi', 5, 2, 2, 4, 'assets/music/bensound-scifi.mp3', 2, 3, '2022-10-29 18:39:15'),
(25, 'Slow Motion', 5, 2, 3, 3, 'assets/music/bensound-slowmotion.mp3', 3, 0, '2022-10-29 18:39:15'),
(26, 'Sunny', 5, 2, 4, 2, 'assets/music/bensound-sunny.mp3', 4, 1, '2022-10-29 18:39:15'),
(27, 'Sweet', 5, 2, 5, 5, 'assets/music/bensound-sweet.mp3', 5, 2, '2022-10-29 18:39:15'),
(28, 'Tenderness ', 3, 3, 7, 2, 'assets/music/bensound-tenderness.mp3', 4, 0, '2022-10-29 18:39:15'),
(29, 'The Lounge', 3, 3, 8, 4, 'assets/music/bensound-thelounge.mp3 ', 3, 0, '2022-10-29 18:39:15'),
(30, 'Ukulele', 3, 3, 9, 2, 'assets/music/bensound-ukulele.mp3 ', 2, 0, '2022-10-29 18:39:15'),
(31, 'Tomorrow', 3, 3, 1, 4, 'assets/music/bensound-tomorrow.mp3 ', 1, 1, '2022-10-29 18:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(1, 'swaga', 'Big', 'Chungus', 'Egg@eggs.com', '040b7cf4a55014e185813e0644502ea9', '2022-10-29 00:00:00', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
