-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2016 a las 04:19:51
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `constructorasaas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `unidad` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisisitem`
--

CREATE TABLE IF NOT EXISTS `analisisitem` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `unidad` varchar(200) NOT NULL,
  `rendimiento` float NOT NULL,
  `precioUnitario` float NOT NULL,
  `precioParcial` float NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `idItem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
  `user` varchar(50) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `subtitulo` varchar(30) NOT NULL,
  `titulo2` varchar(30) NOT NULL,
  `contenido2` varchar(200) NOT NULL,
  `titulo3` varchar(30) NOT NULL,
  `contenido3` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `twiter` varchar(30) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`user`, `titulo`, `subtitulo`, `titulo2`, `contenido2`, `titulo3`, `contenido3`, `telefono`, `direccion`, `twiter`, `facebook`, `gmail`, `imagen`) VALUES
('123', 'titulo de la pagina', 'subtitulo', 'titulo2', 'contenido2', 'titulo3', 'contenido3', 'telefono', 'direccion', '#', '#', '#', '../configurar/imagen/image.jpg'),
('1234', 'titulo de la pagina', 'subtitulo', 'titulo2', 'contenido2', 'titulo3', 'contenido3', 'telefono', 'direccion', '#', '#', '#', '../configurar/imagen/image.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagrama`
--

CREATE TABLE IF NOT EXISTS `diagrama` (
  `id` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `predecesor` int(11) NOT NULL,
  `fechaIni` varchar(30) NOT NULL,
  `fechaFin` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL,
  `idProyecto` int(11) NOT NULL,
  `idActividad` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `PParcial` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombrePropietario` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `responsable` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `nombrePropietario`, `direccion`, `responsable`, `total`, `user`) VALUES
(10, 'proyecto1', 'asd', 'asd', 'asd', 0, '123'),
(11, 'proyecto1 de 1234', 'asd', 'asd', 'asd', 0, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptor`
--

CREATE TABLE IF NOT EXISTS `suscriptor` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suscriptor`
--

INSERT INTO `suscriptor` (`id`, `usuario`, `pass`, `nombre`) VALUES
(16, '123', '123', '123'),
(17, '1234', '1234', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoa`
--

CREATE TABLE IF NOT EXISTS `tipoa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoa`
--

INSERT INTO `tipoa` (`id`, `nombre`) VALUES
(1, 'tipo1'),
(2, 'tipo2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `analisisitem`
--
ALTER TABLE `analisisitem`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagrama`
--
ALTER TABLE `diagrama`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoa`
--
ALTER TABLE `tipoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `analisisitem`
--
ALTER TABLE `analisisitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `diagrama`
--
ALTER TABLE `diagrama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `suscriptor`
--
ALTER TABLE `suscriptor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tipoa`
--
ALTER TABLE `tipoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
