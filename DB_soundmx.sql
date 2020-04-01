-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 09:19 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundmx`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacto_soundmx`
--

CREATE TABLE `contacto_soundmx` (
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `email` text COLLATE latin1_spanish_ci NOT NULL,
  `cel` char(10) COLLATE latin1_spanish_ci NOT NULL,
  `texto` longtext COLLATE latin1_spanish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `contacto_soundmx`
--

INSERT INTO `contacto_soundmx` (`nombre`, `email`, `cel`, `texto`, `id`, `date`) VALUES
('Mar', 'marina@gmail.com', '2147483647', 'otro mensaje', 4, '0000-00-00 00:00:00'),
('Mar', 'marina@gmail.com', '2147483647', 'otro mensaje', 5, '0000-00-00 00:00:00'),
('Itza', 'itza@gmail.com', '2147483647', 'Esta es la ultima prueba', 11, '0000-00-00 00:00:00'),
('Marina', 'kljda@gmail.com', '2147483647', 'Con esta prueba, validamos que sirve el dataTime value', 13, '2020-03-31 06:33:58'),
('Marina', 'kljda@gmail.com', '3310001774', 'Con esta prueba, validamos que sirve el cel !', 14, '2020-03-31 06:39:17'),
('Luis', 'luis@soundmx.com', '5523231532', 'seguimos haciendo pruebas', 17, '2020-04-01 06:01:23'),
('', '', '', '', 20, '2020-04-01 06:58:35'),
('', '', '', '', 21, '2020-04-01 07:00:17'),
('Rodrigo', 'rodnunez23@gmail.com', '331001774', 'esta es una prueba blah blah blah', 22, '2020-04-01 07:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `equipo_soundmx`
--

CREATE TABLE `equipo_soundmx` (
  `id` int(255) NOT NULL,
  `nombre` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `texto` text COLLATE latin1_spanish_ci NOT NULL,
  `sexo` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacto_soundmx`
--
ALTER TABLE `contacto_soundmx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipo_soundmx`
--
ALTER TABLE `equipo_soundmx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacto_soundmx`
--
ALTER TABLE `contacto_soundmx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `equipo_soundmx`
--
ALTER TABLE `equipo_soundmx`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
