-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2016 at 03:37 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arcaprod`
--
CREATE DATABASE IF NOT EXISTS `arcaprod` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `arcaprod`;

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `idaudio` int(11) NOT NULL,
  `tituloaudio` varchar(45) DEFAULT NULL,
  `autoraudio` varchar(45) DEFAULT NULL,
  `audio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `subtitulo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(100) NOT NULL,
  `fechapub` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publicacion`
--

INSERT INTO `publicacion` (`id`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `fechapub`) VALUES
(1, 'Cursos de Teclado', '100% Práctico', 'Ofrecemos nuestro curso de teclado orientado a aquellas personas que quieren aprender a tocar en el estilo Folkrock como los ministerios de alabanza. Con este curso aprenderas todo lo necesario para que puedas tocar, programar tu teclado, creación de tus propios sonidos, componer tus propias alabanzas y asi sean verdaderos adoradores del Señor.', 'arca4.jpg', '2016-06-23 14:40:35'),
(2, 'Nuestras novedades', 'Muy pronto...', NULL, 'arca3.jpg', '2016-06-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `idvideo` int(11) NOT NULL,
  `titulovideo` varchar(45) DEFAULT NULL,
  `autorvideo` varchar(45) DEFAULT NULL,
  `video` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`idaudio`);

--
-- Indexes for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idvideo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `idaudio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `idvideo` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
