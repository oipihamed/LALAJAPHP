-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 08:14 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `nombre` varchar(100) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `imagen` mediumtext NOT NULL,
  `descuento` float NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `numLikes` int(11) DEFAULT NULL,
  `descripcion` varchar(500) NOT NULL,
  `idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`nombre`, `peso`, `precio`, `imagen`, `descuento`, `tipo`, `estado`, `numLikes`, `descripcion`, `idProducto`) VALUES
('Queso Oaxaca', '1 KG', 100, '', 0.1, 1, 1, 34, 'Queso tipo oaxaca hecho puro de vaca.', 1),
('Yoghurt Lari ', '4 KG', 150, 'img-2', 0.1, 2, 1, 36, 'Yoghurt hecho a base de leche de cabra en distintos sabores.', 2),
('Queso Panela la laja \r\n', '1.6 KG', 50, 'img-3', 0.2, 1, 1, 31, 'Queso panela bajo en calorias, hecho con leche pura de vaca.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idProducto_2` (`idProducto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
