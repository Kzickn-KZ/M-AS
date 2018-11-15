-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-11-2018 a las 15:50:17
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mass`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citacion`
--

DROP TABLE IF EXISTS `citacion`;
CREATE TABLE IF NOT EXISTS `citacion` (
  `id_citacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `citador` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_sede` int(11) NOT NULL,
  `ambiente` varchar(20) NOT NULL,
  PRIMARY KEY (`id_citacion`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citacion`
--

INSERT INTO `citacion` (`id_citacion`, `id_usuario`, `citador`, `fecha`, `hora`, `id_sede`, `ambiente`) VALUES
(12, 27, '0', '2018-11-17', '12:30:00', 5, '2054');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre`) VALUES
(1, 'activo'),
(2, 'inactivo'),
(3, 'Aceptado'),
(4, 'Rechazado'),
(5, 'En confirmacion'),
(6, 'proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

DROP TABLE IF EXISTS `ficha`;
CREATE TABLE IF NOT EXISTS `ficha` (
  `id_ficha` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` int(20) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_ficha`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id_ficha`, `nombre`, `id_estado`) VALUES
(1, 1320652, 1),
(2, 6263526, 1),
(7, 1366239, 1),
(8, 1438299, 1),
(9, 1503687, 1),
(10, 1578575, 1),
(11, 1578550, 1),
(13, 1578571, 1),
(14, 1593502, 1),
(15, 1621527, 1),
(16, 1621531, 1),
(17, 1621536, 1),
(18, 1621551, 1),
(19, 1621560, 1),
(20, 1621561, 1),
(21, 1621562, 1),
(22, 1724862, 1),
(23, 1738490, 1),
(24, 1694146, 1),
(25, 1694118, 1),
(26, 1694118, 1),
(27, 1694141, 1),
(28, 1694142, 1),
(29, 1694136, 1),
(30, 1694161, 1),
(31, 1694151, 1),
(32, 1753598, 1),
(33, 1753611, 1),
(34, 1753615, 1),
(35, 1753620, 1),
(36, 1753627, 1),
(37, 1753636, 1),
(38, 1753929, 1),
(39, 1753960, 1),
(40, 1753997, 1),
(41, 1366241, 1),
(42, 1438303, 1),
(43, 1438303, 1),
(44, 1438318, 1),
(45, 1503794, 1),
(46, 1503794, 1),
(47, 1503794, 1),
(48, 1566598, 1),
(49, 1566620, 1),
(50, 1488683, 1),
(51, 1621415, 1),
(52, 1621427, 1),
(53, 1621656, 1),
(54, 1694167, 1),
(55, 1694165, 1),
(56, 1738484, 1),
(57, 1694164, 1),
(58, 1739202, 1),
(59, 1503799, 1),
(60, 1566614, 1),
(61, 1593501, 1),
(62, 1694086, 1),
(63, 1694085, 1),
(64, 1694085, 1),
(65, 1753416, 1),
(66, 1753422, 1),
(67, 1753429, 1),
(68, 1753546, 1),
(69, 1753540, 1),
(70, 1753543, 1),
(71, 1753563, 1),
(72, 1753566, 1),
(73, 1754011, 1),
(74, 1754015, 1),
(75, 1754022, 1),
(76, 1754011, 1),
(77, 1754015, 1),
(78, 1754022, 1),
(79, 1753396, 1),
(80, 1753407, 1),
(81, 1753407, 1),
(82, 1724913, 1),
(83, 1565394, 1),
(84, 1667824, 1),
(85, 1749943, 1),
(86, 1578666, 1),
(87, 1506195, 1),
(88, 1551628, 1),
(89, 1438310, 1),
(90, 1438308, 1),
(91, 1438308, 1),
(92, 1488534, 1),
(93, 1539819, 1),
(94, 1503616, 1),
(95, 1503616, 1),
(96, 1503606, 1),
(97, 1566615, 1),
(98, 1566621, 1),
(99, 1566613, 1),
(100, 1578687, 1),
(101, 1578632, 1),
(102, 1593506, 1),
(103, 1621453, 1),
(104, 1621465, 1),
(105, 1621476, 1),
(106, 1621462, 1),
(107, 1621462, 1),
(108, 1621651, 1),
(109, 1694090, 1),
(110, 1694087, 1),
(111, 1694089, 1),
(112, 1694088, 1),
(113, 1694089, 1),
(114, 1694088, 1),
(115, 1694103, 1),
(116, 1694104, 1),
(117, 1694105, 1),
(118, 1694106, 1),
(119, 1694110, 1),
(120, 1694109, 1),
(121, 1694108, 1),
(122, 1694107, 1),
(123, 1694102, 1),
(124, 1694101, 1),
(125, 1753351, 1),
(126, 1753373, 1),
(127, 1753376, 1),
(128, 1753379, 1),
(129, 1753392, 1),
(130, 1753363, 1),
(131, 1753367, 1),
(132, 1753926, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas`
--

DROP TABLE IF EXISTS `horas`;
CREATE TABLE IF NOT EXISTS `horas` (
  `id_horas` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `horas_realizadas` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `tok` int(11) NOT NULL,
  PRIMARY KEY (`id_horas`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horas`
--

INSERT INTO `horas` (`id_horas`, `documento`, `fecha`, `horas_realizadas`, `descripcion`, `id_usuario`, `id_estado`, `tok`) VALUES
(141, '123', '2018-11-13', 5, 'asdasd', 9, 3, 1),
(142, '123', '2018-11-13', 7, 'asdasd', 9, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

DROP TABLE IF EXISTS `novedades`;
CREATE TABLE IF NOT EXISTS `novedades` (
  `id_novedades` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipoNovedad` int(11) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_novedades`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

DROP TABLE IF EXISTS `programa`;
CREATE TABLE IF NOT EXISTS `programa` (
  `id_programa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_programa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `nombre`, `id_estado`) VALUES
(1, 'ADSI', 1),
(2, 'TPS', 1),
(3, 'DIM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `documento` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafinal` date NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_proyecto`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'aprendiz'),
(2, 'supervisor'),
(3, 'directivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

DROP TABLE IF EXISTS `sede`;
CREATE TABLE IF NOT EXISTS `sede` (
  `id_sede` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `nombre`) VALUES
(1, 'alamos'),
(2, 'colombia'),
(3, 'complejo sur'),
(4, 'restrepo'),
(5, 'ricaurte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

DROP TABLE IF EXISTS `tipodocumento`;
CREATE TABLE IF NOT EXISTS `tipodocumento` (
  `id_tipoDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipoDocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id_tipoDocumento`, `nombre`) VALUES
(1, 'cédula de ciudadanía'),
(2, 'tarjeta de identidad'),
(3, 'cédula de extranjería'),
(4, 'documento nacional de identificacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiponovedad`
--

DROP TABLE IF EXISTS `tiponovedad`;
CREATE TABLE IF NOT EXISTS `tiponovedad` (
  `id_tipoNovedad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipoNovedad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiponovedad`
--

INSERT INTO `tiponovedad` (`id_tipoNovedad`, `nombre`) VALUES
(1, 'Sugerencia'),
(2, 'Solicitud'),
(3, 'reclamo'),
(4, 'error');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id_tipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_tipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id_tipoUsuario`, `nombre`, `id_estado`) VALUES
(1, 'Monitorias', 1),
(2, 'Apoyo sostenimiento', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `documento` int(12) NOT NULL,
  `id_tipoDocumento` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `passadmin` varchar(20) NOT NULL,
  `passsuper` varchar(20) NOT NULL,
  `id_sede` varchar(20) NOT NULL,
  `id_programa` varchar(20) NOT NULL,
  `id_ficha` varchar(20) NOT NULL,
  `id_tipoUsuario` varchar(20) NOT NULL,
  `id_rol` varchar(20) NOT NULL,
  `id_estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `documento`, `id_tipoDocumento`, `nombre`, `apellido`, `correo`, `telefono`, `contrasena`, `passadmin`, `passsuper`, `id_sede`, `id_programa`, `id_ficha`, `id_tipoUsuario`, `id_rol`, `id_estado`) VALUES
(1, 0, '2', 'ADMINnnnnn', 'ADMINnnnnn', 'admin@gmail.com', '0', '', 'adminpost', '', '3', '1', '1', '1', '3', '1'),
(9, 555, '2', 'supervisor', 'supervisor', 'supp@gmail.com', '123', '', '', '555', '2', '1', '1', '1', '2', '1'),
(27, 123, '1', 'usuario', 'usuario', 'user@gailc.c', '1233', '123', '', '', '2', '3', '117', '2', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
