-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2019 a las 20:05:36
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `Id` int(60) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Carrera` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Mat` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Id`, `Nombre`, `Carrera`, `Mat`, `Estado`) VALUES
(1, 'Oscar Feliz', 'Software', 'Diseño software', 'Activo'),
(2, 'Paola Ramirez', 'Multimeda', 'Diseño ', 'Activo'),
(3, 'Roberto Garcia', 'Mecatronica', 'Mecánica de Fluidos.', 'Inactivo'),
(4, 'Pamela Sosa', 'Redes', 'Base de Datos', 'Activo'),
(5, 'Ivan Colon', 'Seguridad Informatica', 'Hacking. Ethical Hacking.', 'Activo'),
(6, 'Cibelys Ramirez', 'Multimedia', 'Dibujo técnico', 'Inactivo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
