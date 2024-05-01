-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.infinityfree.com
-- Generation Time: May 01, 2024 at 04:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_34080974_pawfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `found_request`
--

CREATE TABLE `found_request` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pet_type` varchar(20) NOT NULL,
  `pet_breed` varchar(50) NOT NULL,
  `pet_size` varchar(15) NOT NULL,
  `pet_name` varchar(20) NOT NULL,
  `pet_color` varchar(20) NOT NULL,
  `pet_description` varchar(400) NOT NULL,
  `found_date` date NOT NULL,
  `found_time` time NOT NULL,
  `found_address` varchar(100) NOT NULL,
  `found_images_url` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found_request`
--

INSERT INTO `found_request` (`id`, `name`, `email`, `phno`, `address`, `pet_type`, `pet_breed`, `pet_size`, `pet_name`, `pet_color`, `pet_description`, `found_date`, `found_time`, `found_address`, `found_images_url`) VALUES
(29, 'Manan Kanani', 'kanani.manan5@gmail.com', '8657231186', 'Manan Kanani, 2/15 housing board colony ', 'dog', 'Golden Retriever', 'medium', 'tommy', 'golden', 'a charismatic and loyal companion, boasts a stunning golden coat that complements its friendly disposition. Known for their intelligence and versatility, these dogs excel as both family pets and working dogs, often thriving in roles such as therapy, assistance, and search and rescue.', '2023-11-17', '18:46:00', '42 Rainbow Lane,Serenity City, Palm State, PIN: 560001, India.', '655fbe72480d0_golden retriver 2.jpeg,655fbe724840e_golden_retreiver.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `happy_found_pets`
--

CREATE TABLE `happy_found_pets` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pet_type` varchar(20) NOT NULL,
  `pet_breed` varchar(50) NOT NULL,
  `pet_size` varchar(15) NOT NULL,
  `pet_name` varchar(20) NOT NULL,
  `pet_color` varchar(20) NOT NULL,
  `pet_description` varchar(400) NOT NULL,
  `found_date` date NOT NULL,
  `found_time` time NOT NULL,
  `found_address` varchar(100) NOT NULL,
  `found_images_url` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `happy_found_pets`
--

INSERT INTO `happy_found_pets` (`id`, `name`, `email`, `phno`, `address`, `pet_type`, `pet_breed`, `pet_size`, `pet_name`, `pet_color`, `pet_description`, `found_date`, `found_time`, `found_address`, `found_images_url`) VALUES
(25, 'Aishwarya Verma', 'aishwarya.verma@example.com', '777-555-4444', '987 Magnolia Road, Hyderabad, India', 'cow', 'Holstein Friesian', 'large', 'Daisy', 'Black & white', 'Daisy is a gentle and friendly Holstein Friesian cow found in a quiet neighborhood. She is a large, black-and-white cow known for her docile nature. Daisy enjoys grazing in the meadows and providing fresh milk.', '2023-10-24', '16:54:00', '987 Magnolia Road, Hyderabad, India (Quiet Neighborhood)', '653f84d929f6c_Holstein_Friesian_1.jpg'),
(28, 'Aishwarya Verma', 'aishwarya.verma@example.com', '777-555-4444', '987 Magnolia Road, Hyderabad, India', 'cow', 'Holstein Friesian', 'large', 'Daisy', 'Black & white', 'Daisy is a gentle and friendly Holstein Friesian cow found in a quiet neighborhood. She is a large, black-and-white cow known for her docile nature. Daisy enjoys grazing in the meadows and providing fresh milk.', '2023-10-24', '16:54:00', '987 Magnolia Road, Hyderabad, India (Quiet Neighborhood)', '655fbd887f9c9_Holstein_Friesian_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `happy_lost_pets`
--

CREATE TABLE `happy_lost_pets` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pet_type` varchar(20) NOT NULL,
  `pet_breed` varchar(50) NOT NULL,
  `pet_size` varchar(15) NOT NULL,
  `pet_name` varchar(20) NOT NULL,
  `pet_color` varchar(20) NOT NULL,
  `pet_description` varchar(400) NOT NULL,
  `lost_date` date NOT NULL,
  `lost_time` time NOT NULL,
  `lost_address` varchar(100) NOT NULL,
  `lost_images_url` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `happy_lost_pets`
--

INSERT INTO `happy_lost_pets` (`id`, `name`, `email`, `phno`, `address`, `pet_type`, `pet_breed`, `pet_size`, `pet_name`, `pet_color`, `pet_description`, `lost_date`, `lost_time`, `lost_address`, `lost_images_url`) VALUES
(26, 'Manan Kanani', 'kanani.manan5@gmail.com', '8657231186', '2,15 housing board colony Behind M.E.M. ', 'cat', 'Siamese', 'small', 'Billi', 'black', 'The sleek black cat moved with silent grace, its luminous yellow eyes piercing the darkness. A mysterious guardian of the night, it embodied both elegance and a touch of enigmatic magic in its velvety fur.', '2023-11-23', '16:36:00', '2,15 housing board colony Behind M.E.M. School, near kamla nehru park, porbandar', '655fb06f5622e_Cat siamese.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `lost_request`
--

CREATE TABLE `lost_request` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pet_type` varchar(20) NOT NULL,
  `pet_breed` varchar(50) NOT NULL,
  `pet_size` varchar(15) NOT NULL,
  `pet_name` varchar(20) NOT NULL,
  `pet_color` varchar(20) NOT NULL,
  `pet_description` varchar(400) NOT NULL,
  `lost_date` date NOT NULL,
  `lost_time` time NOT NULL,
  `lost_address` varchar(100) NOT NULL,
  `lost_images_url` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lost_request`
--

INSERT INTO `lost_request` (`id`, `name`, `email`, `phno`, `address`, `pet_type`, `pet_breed`, `pet_size`, `pet_name`, `pet_color`, `pet_description`, `lost_date`, `lost_time`, `lost_address`, `lost_images_url`) VALUES
(27, 'Manan Kanani', 'kanani.manan5@gmail.com', '8657231186', '2,15 housing board colony Behind M.E.M. ', 'cat', 'Siamese', 'small', 'Billi', 'black', 'The sleek black cat moved with silent grace, its luminous yellow eyes piercing the darkness. A mysterious guardian of the night, it embodied both elegance and a touch of enigmatic magic in its velvety fur.', '2023-11-22', '16:36:00', '2,15 housing board colony Behind M.E.M. School, near kamla nehru park, porbandar', '655fb06f5622e_Cat siamese.jpeg'),
(34, 'ÐÑ€Ñƒ ÐšÐ°Ð¹Ñ‹', 'aru.kayirzhanova@mail.ru', '+77752364921', 'jvjhgjkk', 'dog', 'Golden Retriever', 'large', 'liza', 'black', 'dfsdghhfdfgfs', '2024-01-23', '00:00:00', 'SMDSANFSDFJSD', '6603ca846781a_maxresdefault-60.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '2023-09-21 13:20:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `found_request`
--
ALTER TABLE `found_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happy_found_pets`
--
ALTER TABLE `happy_found_pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happy_lost_pets`
--
ALTER TABLE `happy_lost_pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost_request`
--
ALTER TABLE `lost_request`
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
-- AUTO_INCREMENT for table `found_request`
--
ALTER TABLE `found_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `happy_found_pets`
--
ALTER TABLE `happy_found_pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `happy_lost_pets`
--
ALTER TABLE `happy_lost_pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lost_request`
--
ALTER TABLE `lost_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
