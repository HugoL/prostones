-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2014 a las 21:04:41
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ehp_materiales`
--

INSERT INTO `ehp_materiales` (`id`, `nombre`, `imagen`) VALUES
(2, 'Marmol', 'marmol.jpg'),
(4, 'Granito', 'granito.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_piezas`
--

CREATE TABLE IF NOT EXISTS `ehp_piezas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `ehp_piezas`
--

INSERT INTO `ehp_piezas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Baldosa', ''),
(2, 'Rodapie', ''),
(3, 'Huella', ''),
(4, 'Tabica', ''),
(5, 'Zanquin', ''),
(6, 'Recercado ventana', ''),
(7, 'Vierteaguas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_preciosunitarios`
--

CREATE TABLE IF NOT EXISTS `ehp_preciosunitarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL DEFAULT '1',
  `id_tamano` int(11) NOT NULL DEFAULT '1',
  `precio` float(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo` (`id_tipo`,`id_tamano`),
  KEY `id_tamano` (`id_tamano`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_presupuestos`
--

CREATE TABLE IF NOT EXISTS `ehp_presupuestos` (
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
  `id_pieza` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_pieza` (`id_pieza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `ehp_tamano`
--

INSERT INTO `ehp_tamano` (`id`, `nombre`, `id_pieza`) VALUES
(0, '50x50x2', 1),
(1, '40x35x1''5', 1),
(2, '40x40x1''5', 1),
(3, '60x30x1''5', 1),
(4, '60x40x1''5', 1),
(5, '40x30x2', 1),
(6, '40x40x2', 1),
(7, '60x30x2', 1),
(8, '60x40x2', 1),
(10, '7x1''5', 1),
(11, '10x1''5', 1),
(12, '18x1''5', 1),
(13, '7x2', 1),
(14, '10x2', 1),
(15, '18x2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_terminaciones`
--

CREATE TABLE IF NOT EXISTS `ehp_terminaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` tinyint(1) NOT NULL COMMENT '1-> cara. 2-> canto',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ehp_terminaciones`
--

INSERT INTO `ehp_terminaciones` (`id`, `nombre`, `tipo`) VALUES
(1, 'En Bruto', 0),
(2, 'Apomazado', 0),
(3, 'Apomazado + Biselado', 0),
(4, 'Pulido', 0),
(5, 'Pulido + Biselado', 0),
(6, 'Envejecido', 0),
(7, 'Abujardado', 0),
(8, 'Arenado', 0),
(9, 'Granallado', 0);

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
  `descripcion` text COLLATE utf8_spanish_ci,
  `procedencia` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_material` (`id_material`),
  KEY `id_tono` (`id_tono`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `ehp_tipos`
--

INSERT INTO `ehp_tipos` (`id`, `nombre`, `textura`, `id_material`, `id_tono`, `imagen`, `descripcion`, `procedencia`) VALUES
(12, 'Blanco Macael', '', 2, 0, 'marmol/blanco_macael.jpg', NULL, NULL),
(13, 'Blanco Ibiza', '', 2, 0, 'marmol/blanco_ibiza.jpg', NULL, NULL),
(14, 'Crema Marfil', '', 2, 0, 'marmol/crema_marfil.jpg', NULL, NULL),
(15, 'Crema Levante', '', 2, 0, 'marmol/crema_levante.jpg', NULL, NULL),
(16, 'Beige Levante', '', 2, 0, 'marmol/beige_levante.jpg', NULL, NULL),
(17, 'Emperador Claro', '', 2, 0, 'marmol/emperador_claro.jpg', NULL, NULL),
(18, 'Emperador Oscuro', '', 2, 0, 'marmol/emperador_oscuro.jpg', NULL, NULL),
(19, 'Rosa Zarci', '', 2, 0, 'marmol/rosa_zarci.jpg', NULL, NULL),
(20, 'Rojo Alicate', '', 2, 0, 'marmol/rojo_alicate.jpg', NULL, NULL),
(26, 'Gris Atlanta', '', 4, 0, 'granito/G603.jpg', NULL, NULL),
(27, 'Marron Gran Cañon', '', 4, 0, 'granito/G664.jpg', NULL, NULL),
(28, 'Rosado Tunez', '', 4, 0, 'granito/G687.jpg', NULL, NULL),
(29, 'Gris parga', '', 4, 0, 'granito/gris_parga.jpg', NULL, NULL),
(30, 'Rosa Porriño', '', 4, 0, 'granito/rosa_porriño.jpg', NULL, NULL),
(31, 'Mondariz', '', 4, 0, 'granito/mondariz.jpg', NULL, NULL),
(32, 'Gran Perla', '', 4, 0, 'granito/gran_perla.jpg', NULL, NULL),
(33, 'Gris Quintana', '', 4, 0, 'granito/gris_quintana.jpg', NULL, NULL);

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
-- Estructura de tabla para la tabla `ehp_valorpiezas`
--

CREATE TABLE IF NOT EXISTS `ehp_valorpiezas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `id_pieza` int(11) NOT NULL,
  `id_tamano` int(11) NOT NULL,
  `id_terminacion` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL COMMENT 'Cuantas piezas con esta configuración',
  `precio` float NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo` (`id_tipo`),
  KEY `id_pieza` (`id_pieza`),
  KEY `id_tamano` (`id_tamano`),
  KEY `id_terminacion` (`id_terminacion`),
  KEY `id_pedido` (`id_presupuesto`)
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
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `message` text,
  `message_read` tinyint(1) NOT NULL,
  `draft` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_messages_users` (`from_user_id`),
  KEY `fk_messages_users1` (`to_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `about` text,
  `street` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `fk_profiles_users` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `lastname`, `firstname`, `about`, `street`) VALUES
(1, 1, 'admin', 'admin', NULL, NULL),
(2, 2, 'demo', 'demo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile_fields`
--

CREATE TABLE IF NOT EXISTS `profile_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL,
  `range` varchar(255) NOT NULL,
  `error_message` varchar(255) NOT NULL,
  `other_validator` varchar(255) NOT NULL,
  `default` varchar(255) NOT NULL,
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '', 0, 1266571424, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '', 0, 1266543330, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_has_role`
--

CREATE TABLE IF NOT EXISTS `user_has_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ehp_preciosunitarios`
--
ALTER TABLE `ehp_preciosunitarios`
  ADD CONSTRAINT `ehp_preciosunitarios_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `ehp_tipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_preciosunitarios_ibfk_2` FOREIGN KEY (`id_tamano`) REFERENCES `ehp_tamano` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ehp_tamano`
--
ALTER TABLE `ehp_tamano`
  ADD CONSTRAINT `ehp_tamano_ibfk_1` FOREIGN KEY (`id_pieza`) REFERENCES `ehp_piezas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_5` FOREIGN KEY (`id_pieza`) REFERENCES `ehp_piezas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_6` FOREIGN KEY (`id_presupuesto`) REFERENCES `ehp_presupuestos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
