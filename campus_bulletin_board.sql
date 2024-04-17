-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 05:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_bulletin_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$scqErzYGnr5Er5xX7Y5r1.eEKJSeRL9EsXLn3GeHognwOrHbEtxIW'),
(2, 'admin', '$2y$10$g4sx8yn4eWrUSLwouckPJe8CsIqA12YU0qBnWazvvRuegkIzxWH7i'),
(3, 'admin', '$2y$10$CDWjmVE7bFql1MKy1fStaOW0TRXx5Qq1RFxMkvvc572YQHK6hv8xK'),
(4, 'admin', '$2y$10$CNyJvc6E2tvD/.dM.1IrOOt4sn7uEZWv7PCHVKPRiChbHY87sWdvW'),
(5, 'admin', '$2y$10$qceP05rCysTHW1MyQTdI8.GOj2fmkQh59kxY1JCj9kRwXLQ/TVoxC'),
(6, 'admin', '$2y$10$f78IrTaNHQOHWO18EmihKecYYlhqJdMoZ17Tn31ztbh.70e19nzJG'),
(7, 'ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Narasha Mepukori', 'Narashamepukori@gmail.com', 'hi', '2024-03-18 21:57:57'),
(2, 'Narasha Mepukori', 'Narashamepukori@gmail.com', 'hi', '2024-03-18 21:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `file_path`) VALUES
(1, 'General news', 'Welcome to the Campus Digital Bulletin Board. Stay tuned for the latest updates!', 'https://zetech.ac.ke/index.php/news-and-events'),
(2, 'Academics', 'New courses introduced for the upcoming semester.', NULL),
(3, 'Events', 'Join us for the annual university festival next week.', 'https://elearning.zetech.ac.ke/login/index.php'),
(4, 'Sports', 'The university soccer team won the championship!', NULL),
(5, 'Upcoming Workshop', 'Don\'t miss our workshop on digital marketing strategies.', NULL),
(6, 'Guest Lecture', 'Renowned author John Doe will deliver a guest lecture on literature.', NULL),
(7, 'Research Symposium', 'Submit your research abstracts for our upcoming symposium.', NULL),
(8, 'New Student Orientation', 'Welcome to all new students! Orientation sessions will be held next week.', NULL),
(9, 'Career Fair', 'Participate in our annual career fair to explore job opportunities.', NULL),
(10, 'Student Art Exhibition', 'Visit our gallery to view impressive artworks created by students.', NULL),
(11, 'Community Service Day', 'Join us in giving back to the community through various service activities.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `logo`) VALUES
(1, 'werfgh', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '1234'),
(3, 'ann@admin.com', 'ann');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
