-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 02:50 AM
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
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `replies` varchar(500) NOT NULL,
  `queries` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`replies`, `queries`) VALUES
('Hola', 'Hola'),
('<a href=\"paginas/mockupcompra.php?id_p=1\">AQUI PUEDES COMPRAR QUESO OAXACA 4 KG</a>', '¿Donde compro el queso oaxaca de 4 kilos?'),
('Si claro, tenemos una gran variedad.Puede intentar preguntando de la siguiente forma: <strong>Busco (nombreproducto)<strong>', 'Quiero un queso.'),
('<a href=\"paginas/mockupcompra.php?id_p=2\">YOGHURT 4 KILOS</a>', 'Busco Yoghurt'),
('<a href=\"/LaLaja/paginas/mockupcompra.php?id_p=1\">DA CLICK EN ESTE MENSAJE PARA COMPRAR QUESO OAXACA 1 KG<a>', 'Busco Queso');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
