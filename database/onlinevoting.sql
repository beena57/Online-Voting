-- noinspection SqlNoDataSourceInspectionForFile

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 12:53 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Online Voting System`
--
-- --------------------------------------------------------
--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
     `user_id` int(10) NOT NULL,
     `first_name` varchar(100) NOT NULL,
     `last_name` varchar(100) NOT NULL,
     `email` varchar(300) NOT NULL,
     `password` varchar(300) NOT NULL,
     `mobile` varchar(10) NOT NULL,
     `address1` varchar(300) NOT NULL,
     `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'prashant', 'paddune', 'padadunep@gmail.com', 'prashant', '8689814619', '123456789', 'sdcjns,djc');

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
    MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

