-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 07:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `id` int(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'useradmin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adoptiontbl`
--

CREATE TABLE `adoptiontbl` (
  `adoptionid` int(11) NOT NULL,
  `adoption_pet_name` varchar(50) NOT NULL,
  `adoption_pet_color` varchar(50) NOT NULL,
  `adoption_pet_breed` varchar(50) NOT NULL,
  `adoption_pet_age` varchar(50) NOT NULL,
  `adoption_pet_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoptiontbl`
--

INSERT INTO `adoptiontbl` (`adoptionid`, `adoption_pet_name`, `adoption_pet_color`, `adoption_pet_breed`, `adoption_pet_age`, `adoption_pet_img`) VALUES
(1, 'chiwawa', 'brown', 'labrador', '12', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `animal_shelter_tbl`
--

CREATE TABLE `animal_shelter_tbl` (
  `id` int(11) NOT NULL,
  `animal_boarding_name` varchar(50) NOT NULL,
  `animal_boarding_contact_number` varchar(50) NOT NULL,
  `animal_boarding_email` varchar(50) NOT NULL,
  `animal_boarding_location` varchar(50) NOT NULL,
  `animal_boarding_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drop_in_center`
--

CREATE TABLE `drop_in_center` (
  `id` int(11) NOT NULL,
  `org_details` varchar(255) NOT NULL,
  `org_location` varchar(50) NOT NULL,
  `organization_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groomingcentertbl`
--

CREATE TABLE `groomingcentertbl` (
  `id` int(11) NOT NULL,
  `grooming_center` varchar(255) NOT NULL,
  `grooming_center_email` varchar(50) NOT NULL,
  `grooming_center_contact_number` varchar(50) NOT NULL,
  `grooming_center_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_quantity` varchar(50) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_brand`, `product_category`, `product_name`, `product_price`, `product_quantity`, `product_img`) VALUES
(2, 'pedigree', 'dog food', 'lutino', '12.50', '72', '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(11) NOT NULL,
  `session_userid` varchar(10) NOT NULL,
  `session_token` varchar(32) NOT NULL,
  `session_serial` varchar(32) NOT NULL,
  `session_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transferpet`
--

CREATE TABLE `transferpet` (
  `petId` int(50) NOT NULL,
  `petName` varchar(50) NOT NULL,
  `petBreed` varchar(50) NOT NULL,
  `petColor` varchar(50) NOT NULL,
  `petImg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contactnumber` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_profilephoto` varchar(50) NOT NULL,
  `user_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `user_username`, `user_email`, `user_contactnumber`, `user_password`, `user_profilephoto`, `user_status`) VALUES
(6, 'ianjohn', 'ianjohn0101@gmail.com', '23523523', '123456', '', ''),
(9, 'idolo', 'idolo@gmail.com', '342421312', '123456', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `veterinarian`
--

CREATE TABLE `veterinarian` (
  `id` int(11) NOT NULL,
  `vet_contact_number` varchar(50) NOT NULL,
  `vet_email` varchar(50) NOT NULL,
  `vet_location` varchar(50) NOT NULL,
  `vet_name` varchar(50) NOT NULL,
  `vet_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adoptiontbl`
--
ALTER TABLE `adoptiontbl`
  ADD PRIMARY KEY (`adoptionid`);

--
-- Indexes for table `animal_shelter_tbl`
--
ALTER TABLE `animal_shelter_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drop_in_center`
--
ALTER TABLE `drop_in_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groomingcentertbl`
--
ALTER TABLE `groomingcentertbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `transferpet`
--
ALTER TABLE `transferpet`
  ADD PRIMARY KEY (`petId`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `veterinarian`
--
ALTER TABLE `veterinarian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoptiontbl`
--
ALTER TABLE `adoptiontbl`
  MODIFY `adoptionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `animal_shelter_tbl`
--
ALTER TABLE `animal_shelter_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drop_in_center`
--
ALTER TABLE `drop_in_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groomingcentertbl`
--
ALTER TABLE `groomingcentertbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transferpet`
--
ALTER TABLE `transferpet`
  MODIFY `petId` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `veterinarian`
--
ALTER TABLE `veterinarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
