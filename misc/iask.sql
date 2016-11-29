-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2016 a las 02:04:36
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `iask`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia`
--

CREATE TABLE IF NOT EXISTS `guia` (
  `Idguia` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Desc` text NOT NULL,
  `Calificacion` int(11) NOT NULL,
  `Npreguntas` int(11) NOT NULL,
  `creador` varchar(32) NOT NULL,
  PRIMARY KEY (`Idguia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregres`
--

CREATE TABLE IF NOT EXISTS `pregres` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Pregunta` text NOT NULL,
  `tipo` varchar(32) NOT NULL,
  `Respuesta` text NOT NULL,
  `RespMala1` text NOT NULL,
  `RespMala2` text NOT NULL,
  `Idguia` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(32) NOT NULL,
  `foto` text NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `apellido` varchar(32) NOT NULL,
  `correo` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2' COMMENT '2 = pendiente, 1 = activo, 0 = inactivo',
  `token` text NOT NULL,
  `calificacion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
