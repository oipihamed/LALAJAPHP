-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 10:44 PM
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
('Boli Lari ', '1 Kg', 40, 'img-4', 0.05, 2, 1, 12, 'Boli Lari', 4),
('Queso Oaxaca', '200 GR', 30, 'img-5', 0, 1, 1, 0, 'Queso tipo oaxaca hehco puro de vaca. El queso Oaxaca es el queso más internacional de México y el más apreciado por su textura elástica única y su sabor delicado y suave. Este queso resulta ideal para fundir o deshebrar, por el que también se le llama queso de hebra. Por esta razón, es el queso óptimo para la preparación de algunas de las especialidades gastronómicas mexicanas.', 5),
('Queso Oaxaca Rallado La Laja ', '1 KG', 80, 'img-6', 0, 1, 1, 0, 'Queso oaxaca rayado hecho puro de vaca, ideal para antojitos mexicanos. El queso rallado es un indispensable en nuestras cocinas. Es una de las formas más habituales de consumirlo. Su amplia utilidad en recetas lo convierten en uno de los reyes de las neveras. Se obtiene mediante el proceso de rallar o trocear en virutas el queso, facilitando su manipulación. El queso rallado se puede obtener casi de cualquier tipo de queso, siendo el de mozzarella uno de los más famosos.', 6),
('Queso Panela La La Laja', '800 GR', 20, 'img-7', 0, 1, 1, 0, 'Que panela, hecho puro de vaca, presentacion de 800 gramos. EL queso Panela es ideal para platillos bajos en calorias, puedo conmbinarlo con ensaldas y disfrutar el fresco sabor del queso de granja.', 7),
('Queso Asadero Gudchis', '1 KG', 110, 'img-8', 0.1, 1, 1, 0, 'Queso asadero gudchis, puro de vaca. El queso asadero es ideal para platillos o antojitos mexicanos, disfrute de un suave y delicioso queso con sus platillos favoritos, excelente para derretir y servir sobre cualquier platillo.', 8),
('Queso Asadero Gudchis Rayado', '1 KG', 120, 'img-9', 0.2, 1, 1, 0, 'Queso rayado Gudchis puro de vaca, presentacion de un kilogramo. ', 9),
('Queso Doblecrema La Laja', '1 KG', 80, 'img-10', 0.1, 1, 1, 0, 'Queso doble crema la laja, presentacion de un kilogramo. El queso doble crema es una variedad de queso fresco de pasta hilada originario de Colombia. Tiene un color blanco crema, casi amarillo, es brillante a la vista y no está cubierto por ningún tipo de corteza.', 10),
('Queso Doblecrema La Laja', '2.5 KG', 160, 'img-11', 0.1, 1, 1, 0, 'Queso doble crema La Laja, presentacion 2.5 kilogramos. El queso doble crema es una variedad de queso fresco de pasta hilada originario de Colombia. Tiene un color blanco crema, casi amarillo, es brillante a la vista y no está cubierto por ningún tipo de corteza.', 11),
('Liquesco', '1 KG', 120, 'img-12', 0, 1, 1, 0, 'Queso liquesco, presentacion de un kilograo. Queso ideal para pizza.', 12),
('Queso frecal rayado', '1 KG', 140, 'img-13', 0, 1, 1, 0, 'Queso rayado, presentacion de un kilogramo. Ideal para pizza.', 13),
('Crema', '1 L', 80, 'img-14', 0, 3, 1, 0, 'Crema natural la laja. Disfruta del sabor puro de la crema pura de vaca, para acompañar con tus platillos favoritos.', 14),
('Yoghurt Lari\r\n', '1 L', 38, 'img-15', 0, 2, 1, 0, 'Yoghurt de un litro, puro de vaca, sabor. Sabor piña, perfecto para beber y acompañar tus desayunos.', 15),
('Yoghurt Lari', '1 G', 130, 'img-16', 0.1, 2, 1, 0, 'Yoghurt lari, puro de vaca. Presentacion de un galon.', 16);

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
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
