-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-06-2016 a las 00:13:53
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `producto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
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

CREATE TABLE IF NOT EXISTS `inventario2` (
  `precio` int(11) NOT NULL,
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

INSERT INTO `inventario2` (`precio`, `vendedor1`, `codigo`, `nombre_producto`, `imagen1`, `descripcion`, `envio`) VALUES
(30, 'alvin', 'qwe', 'mofle', 'imagenes/imagenesmofle1.jpg', 'usado', 2),
(45, 'alvin', 'asd', 'plasma', 'imagenes/imagenesimac.jpg', 'nuevo', 3),
(34, 'alvin', 'qwe', 'mofle', 'imagenes/imagenesmofle.jpg', 'nuevo', 2),
(23, 'alvin', 'wer', 'impresora', 'imagenes/imagenesprinter.jpg', 'nuevo', 2),
(65, 'dsdsd', 'sdsds', 'dssdsd', 'imagenes/imagenesimac.jpg', 'sdsds2', 2),
(23, 'fdfdf', 'asa', 'aasa', 'imagenes/imagenesimac.jpg', 'sdsds', 2),
(23, 'dfdf', 'dfdf', 'dfdf', 'imagenes/imagenesimac.jpg', 'dada', 2),
(3323, 'sfsf', 'sdsds', 'sdsd', 'imagenes/imagenesimages.jpg', 'sdfd', 2),
(200, 'juan ', 'ppp', 'mofle', 'imagenes/imagenesmoflecarro.jp', 'nuevo de fabrica', 1),
(456, 'juan', 'rr', 'mofle', 'imagenes/imagenesmolfe2.jpg', 'nuevo de fabrica', 4),
(45, 'dfdfd', 'oudfed', 'ohfipadf', 'imagenes/imagenesejemplo.png', 'Ã±ouhfushfs', 1),
(23, 'alvin', 'addf', 'nose ', 'imagenes/imagenesejemplo.png', 'ssds3', 3),
(30, 'luis', 'wert', 'camiseta', 'imagenes/imagenesimagenmuestra', 'nueva de paqueta ', 3),
(8989, 'luis', 'rtry', 'mofle', 'imagenes/imagenesmofle.jpg', 'nuevo ', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
