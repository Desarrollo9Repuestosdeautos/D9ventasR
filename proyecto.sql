-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2016 a las 02:53:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `precio` int(11) NOT NULL,
  `nombre_articulo` varchar(20) CHARACTER SET utf8 NOT NULL,
  `codigo_producto` varchar(20) CHARACTER SET utf8 NOT NULL,
  `vendedor` varchar(20) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 NOT NULL,
  `envio` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario2`
--

CREATE TABLE `inventario2` (
  `ID` int(11) NOT NULL,
  `precio` int(100) NOT NULL,
  `vendedor1` varchar(30) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `imagen1` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `envio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario2`
--

INSERT INTO `inventario2` (`ID`, `precio`, `vendedor1`, `codigo`, `nombre_producto`, `imagen1`, `descripcion`, `envio`) VALUES
(3, 34, 'alvin', 'qwe', 'mofle', 'imagenes/imagenesmofle.jpg', 'nuevo', 2),
(7, 23, 'dfdf', 'dfdf', 'dfdf', 'imagenes/imagenesimac.jpg', 'dada', 2),
(10, 456, 'juan', 'rr', 'mofle', 'imagenes/imagenesmolfe2.jpg', 'nuevo de fabrica', 4),
(11, 45, 'dfdfd', 'oudfed', 'ohfipadf', 'imagenes/imagenesejemplo.png', 'Ã±ouhfushfs', 1),
(14, 8989, 'luis', 'rtry', 'mofle', 'imagenes/imagenesmofle.jpg', 'nuevo ', 5),
(15, 180, 'juan', '1412', 'radiador', 'imagenes/imagenesradiador.jpeg', 'esta excelente 2 aÃ±os de uso', 65),
(16, 67, 'jh', '76', 'jkhk', 'imagenes/imagenesIMG_3687.JPG', 'hkjhk', 786);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario2`
--
ALTER TABLE `inventario2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario2`
--
ALTER TABLE `inventario2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
