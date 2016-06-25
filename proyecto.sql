-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2016 a las 23:04:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Compatible con la inspeccion de automoviles'),
(2, 'T/M×Tren de engranajes'),
(3, 'Repuestos con referencia de Direccion'),
(4, 'Acondicionador de aire y calefaccion'),
(5, 'Accesorio interior'),
(6, 'Extremo delantero'),
(7, 'Parte trasera final'),
(8, 'Repuestos con referencia de Motor'),
(9, 'Repuestos con referencia de Suspension'),
(10, 'Repuestos con referencia de Frenos'),
(11, 'Audio'),
(12, 'Componente electrico'),
(13, 'Audio'),
(14, 'Parte lateral'),
(15, 'Parte de vidrio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario2`
--

CREATE TABLE IF NOT EXISTS `inventario2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `precio` float NOT NULL,
  `vendedor1` varchar(30) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `imagen1` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `marca` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `inventario2`
--

INSERT INTO `inventario2` (`ID`, `precio`, `vendedor1`, `nombre_producto`, `imagen1`, `descripcion`, `categoria`, `year`, `modelo`, `marca`) VALUES
(1, 185, 'absdjab', 'motor', 'imagenes/imagenesmotor.jpg', 'bhjbhbj', '8', '879', 'nknk', 'njkn'),
(2, 182.98, 'jhvgv', 'halo', 'imagenes/imagenesHalo.jpg', 'mbhjbjhb', '1', '8768', 'jhbhjbjbj', 'bhjjbhj'),
(3, 878.435, 'zol', 'lk', 'imagenes/imagenesmotor.jpg', 'jbhbhhb', '3', '8979879', 'knknkn', 'jkjjkn'),
(4, 40, 'alvin', 'mofle', 'imagenes/imagenesejemplo.png', 'nuevo', '1', '1999', 'erff', 'sdsds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE IF NOT EXISTS `registro_usuario` (
  `nombres` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `cuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`nombres`, `apellido`, `direccion`, `pass`, `cedula`, `correo`, `cuenta`) VALUES
('a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', '', 1),
('alvin', 'gil', 'changuinola', '827ccb0eea8a706c4c34a16891f84e7b', '1-717-144', '', 34),
('azary', 'gil', 'changuinola', '827ccb0eea8a706c4c34a16891f84e7b', '1-717-144', '', 34),
('azary', 'gil', 'changuinola', '827ccb0eea8a706c4c34a16891f84e7b', '1-717-144', '', 34),
('d', 'd', 'd', '8277e0910d750195b448797616e091ad', 'd', '', 1),
('alvin', 'gil', 'changuinola', '25f9e794323b453885f5181f1b624d0b', '1-717-14', 'alvin@hotmail.com', 45),
('alvin', 'gil', 'changuinola', '25f9e794323b453885f5181f1b624d0b', '1-717-14', 'alvin@hotmail.com', 45),
('f', 'f', 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'f', 'f', 9),
('f', 'f', 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'f', 'f', 9),
('f', 'f', 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'f', 'f', 9),
('hHh', 'h', 'h', '2510c39011c5be704182423e3a695e91', 'h', 'h', 1),
('h', 'h', 'h', '2510c39011c5be704182423e3a695e91', 'h', 'h', 3),
('o', 'o', 'o', 'd95679752134a2d9eb61dbd7b91c4bcc', 'o', 'o', 6),
('p', 'p', 'p', '83878c91171338902e0fe0fb97a8c47a', 'p', 'p', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
