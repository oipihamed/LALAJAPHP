-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 08:15 PM
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
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`idComentario`, `contenido`, `fecha`, `idProducto`, `nombre`) VALUES
(1, 'Excelente queso', '2021-10-29', 1, 'Omar'),
(2, 'Muy buena calidad', '2021-10-18', 1, 'Omar'),
(3, 'Estoy enamorado de este queso', '2021-10-27', 1, 'Luis'),
(4, 'Exelente yoghurt.', '2021-10-29', 2, 'Juan'),
(5, 'Buen queso\n', '2021-10-29', 1, 'Omar'),
(6, 'Mal queso', '2021-10-29', 1, 'Jorge'),
(7, 'momo', '2021-10-29', 1, 'omar'),
(8, 'Extr;o queso', '2021-10-29', 1, 'Pedro'),
(9, 'Que erfecto par la ensalada.', '2021-10-29', 1, 'Rosa'),
(11, 'Me encanta.', '2021-10-29', 1, 'Daniel'),
(17, 'Muy buen producto', '2021-10-29', 2, 'Omar Arturo Moctezuma Padron');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idProducto` (`idProducto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
