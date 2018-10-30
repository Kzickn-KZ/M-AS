-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-10-2018 a las 14:57:51
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citacion`
--

INSERT INTO `citacion` (`id_citacion`, `id_usuario`, `citador`, `fecha`, `hora`, `id_sede`, `ambiente`) VALUES
(3, 12, '0', '2018-10-12', '06:45:00', 2, '205'),
(4, 10, '0', '2018-10-25', '01:50:00', 2, '205'),
(5, 10, '0', '2018-10-27', '12:30:00', 2, '205'),
(6, 10, '0', '2018-10-19', '12:30:00', 3, '205');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`id_ficha`, `nombre`, `id_estado`) VALUES
(1, 1320652, 1),
(2, 6263526, 1),
(3, 3123, 2),
(4, 2, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horas`
--

INSERT INTO `horas` (`id_horas`, `documento`, `fecha`, `horas_realizadas`, `descripcion`, `id_usuario`, `id_estado`, `tok`) VALUES
(117, '123', '2018-10-30', 8, 'prueba1', 9, 3, 0),
(118, '123', '2018-10-30', 8, 'prueba2', 9, 4, 0),
(119, '123', '2018-10-30', 3, 'prueba3', 9, 3, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `nombre`, `id_estado`) VALUES
(1, 'ADSI', 0),
(2, 'TPS', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `documento`, `id_tipoDocumento`, `nombre`, `apellido`, `correo`, `telefono`, `contrasena`, `passadmin`, `passsuper`, `id_sede`, `id_programa`, `id_ficha`, `id_tipoUsuario`, `id_rol`, `id_estado`) VALUES
(1, 0, '2', 'ADMINnnnnn', 'ADMINnnnnn', 'admin@gmail.com', '0', '', 'adminpost', '', '3', '1', '1', '1', '3', '1'),
(9, 555, '2', 'supervisor', 'supervisor', 'supp@gmail.com', '123', '', '', '555', '2', '1', '1', '1', '2', '1'),
(27, 123, '1', 'usuario', 'usuario', 'user@gailc.c', '1233', '123', '', '', '2', '1', '4', '2', '1', '1'),
(29, 1233511946, '1', 'edw', 'edew', 'ea@gmail.com', '123123', '123', '', '', '2', '1', '1', '1', '1', '5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
