-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 08:58 PM
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
(25, 'CHIDO', '2021-11-20', 4, 'Omar'),
(26, 'PAREEEEEEEECE, SIIIIII PAAAAREEEECE NOOO NO NOOOOOOO, QUE LO MUCHO QUE OFREZCOOOOO NO OFRECEEEEE TANTO Y POR ESO POOOOOOOOOOOOR ESO\n', '2021-11-20', 3, 'Pepe'),
(27, 'NUNCA ENTENDI LA MANERA', '2021-11-20', 3, 'MADERO');

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `CP` int(5) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `fechapedido` datetime NOT NULL DEFAULT current_timestamp(),
  `fechaentrega` datetime NOT NULL DEFAULT current_timestamp(),
  `cantidad` int(11) NOT NULL DEFAULT 1,
  `producto` varchar(50) NOT NULL DEFAULT 'Queso Oaxaca La Laja 1kg',
  `CodigoDescuento` varchar(10) NOT NULL DEFAULT 'N/A',
  `total` decimal(10,0) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compra`
--

INSERT INTO `compra` (`id_compra`, `email`, `name`, `domicilio`, `CP`, `City`, `State`, `Country`, `telefono`, `fechapedido`, `fechaentrega`, `cantidad`, `producto`, `CodigoDescuento`, `total`) VALUES
(1, 'sebedrz1600@gmail.com', 'Sebastian Ramirez', 'Minerva #17', 37736, 'San Miguel de Allende', 'Guanajuato', 'México', 0, '2021-10-29 00:00:00', '2021-10-29 01:51:15', 1, 'Queso Oaxaca La Laja 1kg', 'N/A', '0'),
(2, 'sebedrz1600@gmail.com', 'Sebastian Ramirez', 'Minerva #17', 37736, 'San Miguel de Allende', 'Guanajuato', 'México', 2147483647, '2021-10-29 00:00:00', '2021-10-29 01:51:15', 1, 'Queso Oaxaca La Laja 1kg', 'N/A', '0'),
(3, 'sebedrz1600@gmail.com', 'Sebastian Ramirez', 'Minerva #17', 37736, 'San Miguel de Allende', 'Guanajuato', 'México', 2147483647, '2021-10-29 00:00:00', '2021-10-29 01:51:15', 1, 'Queso Oaxaca La Laja 1kg', 'N/A', '0'),
(4, 'sebedrz1600@gmail.com', 'Sebastian Ramirez', 'Minerva #17', 37736, 'San Miguel de Allende', 'Guanajuato', 'México', 2147483647, '2021-10-29 00:00:00', '2021-10-29 01:51:15', 1, 'Queso Oaxaca La Laja 1kg', 'N/A', '0'),
(5, 'ardillas.122@gmail.com', 'Luis perez', 'Minerva #17', 37736, 'San Miguel de Allende', 'Guanajuato', 'México', 2147483647, '2021-10-29 16:37:10', '2021-10-30 16:37:10', 2, 'Queso Oaxaca La Laja 1kg', '', '435'),
(6, 'Luisperez@gmail.com', 'luis perez', 'Minerva #17', 37736, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-10-29 19:11:00', '2021-10-30 19:11:00', 3, 'Queso Oaxaca La Laja 1kg', '', '653'),
(7, 'Luisperez@gmail.com', 'luis perez', 'Minerva #17', 37736, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-10-29 19:13:31', '2021-10-30 19:13:31', 3, 'Queso Oaxaca La Laja 1kg', '', '653'),
(8, 'Luisperez@gmail.com', 'luis perez', 'Minerva #17', 37736, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-10-29 19:17:33', '2021-10-30 19:17:33', 3, 'Queso Oaxaca La Laja 1kg', '', '653'),
(9, 'Luisperez@gmail.com', 'luis perez', 'Minerva #17', 37736, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-10-29 19:43:10', '2021-10-30 19:43:10', 3, 'Queso Oaxaca La Laja 1kg', '', '653'),
(10, 'Luisperez@gmail.com', 'luis perez', 'Minerva #17', 37736, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-10-29 19:44:08', '2021-10-30 19:44:08', 3, 'Queso Oaxaca La Laja 1kg', '', '653'),
(11, 'Luisperez@gmail.com', 'luis perez', 'Minerva #17', 37736, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-10-29 19:44:59', '2021-10-30 19:44:59', 3, 'Queso Oaxaca La Laja 1kg', '', '653'),
(12, 'benjaramirez2501@gmail.com', 'Benjasmin Ramirez', '14', 37800, 'Dolores Hidalgo', 'Campeche', 'México', 19929292, '2021-10-29 23:48:49', '2021-10-30 23:48:49', 1, 'Queso Oaxaca La Laja 1kg', '', '218'),
(13, 'icidomar15@gmail.com', 'Oms Ma', '13', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 1111112233, '2021-10-30 00:37:07', '2021-10-31 00:37:07', 2, 'Queso Oaxaca La Laja 1kg', '', '435'),
(14, 'icidomar15@hotmail.com', 'Omar Arturo Moctezuma', '13', 37800, 'Dolores Hidalgo', 'Campeche', 'México', 19929292, '2021-11-09 22:39:31', '2021-11-10 22:39:31', 2, 'Queso Oaxaca La Laja 1kg', '1231231', '435'),
(15, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-10 02:24:29', '2021-11-11 02:24:29', 2, 'Queso Oaxaca La Laja 1kg', '', '435'),
(16, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:56', '2021-11-20 23:51:56', 1, 'Queso panela 1kg ', '', '149'),
(17, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:57', '2021-11-20 23:51:57', 1, 'Queso panela 1kg ', '', '149'),
(18, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:58', '2021-11-20 23:51:58', 1, 'Queso panela 1kg ', '', '149'),
(19, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:58', '2021-11-20 23:51:58', 1, 'Queso panela 1kg ', '', '149'),
(20, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:58', '2021-11-20 23:51:58', 1, 'Queso panela 1kg ', '', '149'),
(21, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:58', '2021-11-20 23:51:58', 1, 'Queso panela 1kg ', '', '149'),
(22, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:59', '2021-11-20 23:51:59', 1, 'Queso panela 1kg ', '', '149'),
(23, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:59', '2021-11-20 23:51:59', 1, 'Queso panela 1kg ', '', '149'),
(24, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:59', '2021-11-20 23:51:59', 1, 'Queso panela 1kg ', '', '149'),
(25, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:51:59', '2021-11-20 23:51:59', 1, 'Queso panela 1kg ', '', '149'),
(26, 'icidomar15@gmail.com', 'Omar Arturo', 'Laguna de teminos 14', 37800, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-11-19 23:52:00', '2021-11-20 23:52:00', 1, 'Queso panela 1kg ', '', '149');

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
('Queso Oaxaca', '1 KG', 100, 'img-1', 0.1, 1, 1, 57, 'Queso tipo oaxaca hecho puro de vaca.', 1),
('Yoghurt Lari ', '4 KG', 150, 'img-2', 0.1, 2, 1, 58, 'Yoghurt hecho a base de leche de cabra en distintos sabores.', 2),
('Queso Panela la laja \r\n', '1.6 KG', 50, 'img-3', 0.2, 1, 1, 39, 'Queso panela bajo en calorias, hecho con leche pura de vaca.', 3),
('Boli Lari ', '1 Kg', 40, 'img-4', 0.05, 4, 1, 12, 'Boli Lari', 4);

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
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`);

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
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
