-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2021 a las 20:39:36
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lalaja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
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
-- Volcado de datos para la tabla `compra`
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
(11, 'Luisperez@gmail.com', 'luis perez', 'Minerva #17', 37736, 'Dolores Hidalgo', 'Guanajuato', 'México', 2147483647, '2021-10-29 19:44:59', '2021-10-30 19:44:59', 3, 'Queso Oaxaca La Laja 1kg', '', '653');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
