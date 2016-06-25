-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2016 a las 09:30:29
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `inventario2` (
  `ID` int(11) NOT NULL,
  `precio` float NOT NULL,
  `vendedor1` varchar(30) NOT NULL,
  `nombre_producto` varchar(30) NOT NULL,
  `imagen1` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario2`
--

INSERT INTO `inventario2` (`ID`, `precio`, `vendedor1`, `nombre_producto`, `imagen1`, `descripcion`, `categoria`, `year`, `modelo`, `marca`) VALUES
(1, 185, 'absdjab', 'motor', 'imagenes/imagenesmotor.jpg', 'bhjbhbj', '8', '879', 'nknk', 'njkn'),
(2, 182.98, 'jhvgv', 'halo', 'imagenes/imagenesHalo.jpg', 'mbhjbjhb', '1', '8768', 'jhbhjbjbj', 'bhjjbhj'),
(3, 878.435, 'zol', 'lk', 'imagenes/imagenesmotor.jpg', 'jbhbhhb', '3', '8979879', 'knknkn', 'jkjjkn');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario2`
--
ALTER TABLE `inventario2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `inventario2`
--
ALTER TABLE `inventario2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
