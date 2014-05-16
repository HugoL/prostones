-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2014 a las 12:53:13
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ehprostones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_clientes`
--

CREATE TABLE IF NOT EXISTS `ehp_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_materiales`
--

CREATE TABLE IF NOT EXISTS `ehp_materiales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ehp_materiales`
--

INSERT INTO `ehp_materiales` (`id`, `nombre`, `imagen`) VALUES
(2, 'Marmol', 'marmol.jpg'),
(3, 'Travertino', ''),
(4, 'Granito', 'granito.jpg'),
(5, 'Piedra Caliza', ''),
(6, 'Piedra Arenisca', ''),
(7, 'Basalto', ''),
(8, 'Pizarra', ''),
(9, 'Cuarcita', ''),
(10, 'Superficie compacta', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_pedido`
--

CREATE TABLE IF NOT EXISTS `ehp_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_provincia` (`id_provincia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_piezas`
--

CREATE TABLE IF NOT EXISTS `ehp_piezas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `id_tamano` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tamano` (`id_tamano`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `ehp_piezas`
--

INSERT INTO `ehp_piezas` (`id`, `nombre`, `descripcion`, `id_tamano`) VALUES
(1, 'Baldosa', '', 0),
(2, 'Rodapie', '', 0),
(3, 'Huella', '', 0),
(4, 'Tabica', '', 0),
(5, 'Zanquin', '', 0),
(6, 'Recercado ventana', '', 0),
(7, 'Vierteaguas', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_profiles`
--

CREATE TABLE IF NOT EXISTS `ehp_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ehp_profiles`
--

INSERT INTO `ehp_profiles` (`user_id`, `lastname`, `firstname`, `birthday`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00'),
(2, 'Demo', 'Demo', '0000-00-00'),
(3, 'Langa', 'Hugo', '1986-05-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `ehp_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ehp_profiles_fields`
--

INSERT INTO `ehp_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 2, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_provincias`
--

CREATE TABLE IF NOT EXISTS `ehp_provincias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_tamano`
--

CREATE TABLE IF NOT EXISTS `ehp_tamano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `ehp_tamano`
--

INSERT INTO `ehp_tamano` (`id`, `nombre`) VALUES
(0, '1'),
(1, '40x35x1''5'),
(2, '40x40x1''5'),
(3, '60x30x1''5'),
(4, '60x40x1''5'),
(5, '40x30x2'),
(6, '40x40x2'),
(7, '60x30x2'),
(8, '60x40x2'),
(10, '7x1''5'),
(11, '10x1''5'),
(12, '18x1''5'),
(13, '7x2'),
(14, '10x2'),
(15, '18x2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_terminaciones`
--

CREATE TABLE IF NOT EXISTS `ehp_terminaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ehp_terminaciones`
--

INSERT INTO `ehp_terminaciones` (`id`, `nombre`) VALUES
(1, 'En Bruto'),
(2, 'Apomazado'),
(3, 'Apomazado + Biselado'),
(4, 'Pulido'),
(5, 'Pulido + Biselado'),
(6, 'Envejecido'),
(7, 'Abujardado'),
(8, 'Arenado'),
(9, 'Granallado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_tipos`
--

CREATE TABLE IF NOT EXISTS `ehp_tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `textura` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  `id_material` int(11) NOT NULL,
  `id_tono` int(11) NOT NULL,
  `imagen` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_material` (`id_material`),
  KEY `id_tono` (`id_tono`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `ehp_tipos`
--

INSERT INTO `ehp_tipos` (`id`, `nombre`, `textura`, `id_material`, `id_tono`, `imagen`) VALUES
(12, 'Blanco Macael', '', 2, 0, ''),
(13, 'Blanco Ibiza', '', 2, 0, ''),
(14, 'Crema Marfil', '', 2, 0, ''),
(15, 'Crema Levante', '', 2, 0, ''),
(16, 'Beige Levante', '', 2, 0, ''),
(17, 'Emperador Claro', '', 2, 0, ''),
(18, 'Emperador Oscuro', '', 2, 0, ''),
(19, 'Rosa Zarci', '', 2, 0, ''),
(20, 'Rojo Alicate', '', 2, 0, ''),
(21, 'Romano', '', 3, 0, ''),
(22, 'Turco', '', 3, 0, ''),
(23, 'Teruel', '', 3, 0, ''),
(24, 'Amarillo', '', 3, 0, ''),
(25, 'Rojo', '', 3, 0, ''),
(26, 'Gris Atlanta', '', 4, 0, ''),
(27, 'Marron Gran Cañon', '', 4, 0, ''),
(28, 'Rosado Tunez', '', 4, 0, ''),
(29, 'Blanco Fonte', '', 4, 0, ''),
(30, 'Rosa Porriño', '', 4, 0, ''),
(31, 'Mondariz', '', 4, 0, ''),
(32, 'Gran Perla', '', 4, 0, ''),
(33, 'Gris Quintana', '', 4, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_tonos`
--

CREATE TABLE IF NOT EXISTS `ehp_tonos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `ehp_tonos`
--

INSERT INTO `ehp_tonos` (`id`, `nombre`) VALUES
(0, 'Rojo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_users`
--

CREATE TABLE IF NOT EXISTS `ehp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit_at` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ehp_users`
--

INSERT INTO `ehp_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1399463586, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 0, 0, 1),
(3, 'hlanga', '9f3b66241bafdb3e7d3190394029368b', 'hlanga@hlanga.es', 'aacede64e77075372830ae79a3e801bb', 1399368092, 1400063145, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_valorpiezas`
--

CREATE TABLE IF NOT EXISTS `ehp_valorpiezas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `id_pieza` int(11) NOT NULL,
  `id_tamano` int(11) NOT NULL,
  `id_terminacion` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo` (`id_tipo`),
  KEY `id_pieza` (`id_pieza`),
  KEY `id_tamano` (`id_tamano`),
  KEY `id_terminacion` (`id_terminacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_valorpieza_pedido`
--

CREATE TABLE IF NOT EXISTS `ehp_valorpieza_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_valorpiezas` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pedido` (`id_pedido`),
  KEY `id_valorpiezas` (`id_valorpiezas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ehp_pedido`
--
ALTER TABLE `ehp_pedido`
  ADD CONSTRAINT `ehp_pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `ehp_clientes` (`id`),
  ADD CONSTRAINT `ehp_pedido_ibfk_2` FOREIGN KEY (`id_provincia`) REFERENCES `ehp_provincias` (`id`);

--
-- Filtros para la tabla `ehp_piezas`
--
ALTER TABLE `ehp_piezas`
  ADD CONSTRAINT `ehp_piezas_ibfk_1` FOREIGN KEY (`id_tamano`) REFERENCES `ehp_tamano` (`id`);

--
-- Filtros para la tabla `ehp_tipos`
--
ALTER TABLE `ehp_tipos`
  ADD CONSTRAINT `ehp_tipos_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `ehp_materiales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_tipos_ibfk_2` FOREIGN KEY (`id_tono`) REFERENCES `ehp_tonos` (`id`);

--
-- Filtros para la tabla `ehp_valorpiezas`
--
ALTER TABLE `ehp_valorpiezas`
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_2` FOREIGN KEY (`id_terminacion`) REFERENCES `ehp_terminaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_3` FOREIGN KEY (`id_tamano`) REFERENCES `ehp_tamano` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_4` FOREIGN KEY (`id_tipo`) REFERENCES `ehp_tipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_5` FOREIGN KEY (`id_pieza`) REFERENCES `ehp_piezas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ehp_valorpieza_pedido`
--
ALTER TABLE `ehp_valorpieza_pedido`
  ADD CONSTRAINT `ehp_valorpieza_pedido_ibfk_5` FOREIGN KEY (`id_pedido`) REFERENCES `ehp_pedido` (`id`),
  ADD CONSTRAINT `ehp_valorpieza_pedido_ibfk_6` FOREIGN KEY (`id_valorpiezas`) REFERENCES `ehp_valorpiezas` (`id`);

--
-- Filtros para la tabla `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
