-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-07-2014 a las 20:03:49
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.3.10-1ubuntu3.13

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
-- Estructura de tabla para la tabla `ehp_biselados`
--

CREATE TABLE IF NOT EXISTS `ehp_biselados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tamano` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ehp_biselados`
--

INSERT INTO `ehp_biselados` (`id`, `tamano`) VALUES
(0, 0),
(1, 2),
(2, 3);

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
-- Estructura de tabla para la tabla `ehp_pales`
--

CREATE TABLE IF NOT EXISTS `ehp_pales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `pesomaximo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ehp_pales`
--

INSERT INTO `ehp_pales` (`id`, `nombre`, `pesomaximo`) VALUES
(0, 'da igual', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_piezas`
--

CREATE TABLE IF NOT EXISTS `ehp_piezas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ehp_piezas`
--

INSERT INTO `ehp_piezas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Baldosa', ''),
(2, 'Rodapie', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_preciostransportes`
--

CREATE TABLE IF NOT EXISTS `ehp_preciostransportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_zona_destino` int(11) NOT NULL,
  `id_zona_procedencia` int(11) NOT NULL,
  `precio` float NOT NULL,
  `id_pale` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_zona_destino` (`id_zona_destino`,`id_zona_procedencia`),
  KEY `id_zona_procedencia` (`id_zona_procedencia`),
  KEY `id_pale` (`id_pale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_preciosunitarios`
--

CREATE TABLE IF NOT EXISTS `ehp_preciosunitarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL DEFAULT '1',
  `id_tamano` int(11) NOT NULL DEFAULT '1',
  `precio` float(10,3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo` (`id_tipo`,`id_tamano`),
  KEY `id_tamano` (`id_tamano`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=85 ;

--
-- Volcado de datos para la tabla `ehp_preciosunitarios`
--

INSERT INTO `ehp_preciosunitarios` (`id`, `id_tipo`, `id_tamano`, `precio`) VALUES
(1, 12, 5, 17.240),
(2, 12, 6, 21.900),
(3, 12, 7, 18.950),
(4, 12, 8, 21.900),
(5, 16, 5, 12.860),
(6, 16, 6, 14.520),
(7, 16, 7, 13.900),
(8, 16, 8, 15.860),
(9, 13, 7, 19.050),
(10, 13, 8, 19.050),
(11, 15, 5, 12.860),
(12, 15, 6, 14.520),
(13, 15, 7, 13.900),
(14, 15, 8, 15.860),
(15, 14, 5, 15.710),
(16, 14, 6, 20.000),
(17, 14, 7, 19.330),
(18, 14, 8, 21.330),
(19, 17, 5, 10.480),
(20, 17, 6, 13.620),
(21, 17, 7, 14.950),
(22, 17, 8, 15.430),
(23, 18, 5, 14.760),
(24, 18, 6, 20.000),
(25, 18, 7, 19.330),
(26, 18, 8, 21.330),
(27, 34, 5, 26.020),
(28, 34, 6, 23.330),
(29, 34, 7, 25.150),
(30, 34, 8, 27.490),
(31, 20, 5, 18.860),
(32, 20, 6, 20.480),
(33, 20, 7, 19.810),
(34, 20, 8, 21.810),
(35, 35, 5, 11.900),
(36, 35, 6, 14.290),
(37, 35, 7, 13.620),
(38, 35, 8, 15.520),
(39, 19, 5, 13.810),
(40, 19, 6, 15.810),
(41, 19, 7, 14.860),
(42, 19, 8, 16.760),
(43, 16, 14, 1.710),
(44, 16, 10, 2.760),
(45, 16, 15, 3.900),
(46, 16, 12, 7.500),
(47, 13, 14, 1.760),
(48, 13, 10, 3.100),
(49, 13, 15, 4.480),
(50, 13, 12, 7.950),
(51, 12, 14, 1.950),
(52, 12, 10, 3.330),
(53, 12, 15, 5.000),
(54, 12, 12, 8.570),
(55, 15, 14, 1.710),
(56, 15, 10, 2.760),
(57, 15, 15, 3.900),
(58, 15, 12, 7.050),
(59, 14, 14, 1.900),
(60, 14, 10, 3.190),
(61, 14, 15, 4.900),
(62, 14, 12, 8.140),
(63, 17, 15, 3.760),
(64, 17, 12, 6.000),
(65, 18, 14, 1.900),
(66, 18, 10, 3.190),
(67, 18, 15, 4.900),
(68, 18, 12, 8.140),
(69, 34, 14, 2.330),
(70, 34, 10, 4.100),
(71, 34, 15, 6.000),
(72, 34, 12, 10.480),
(73, 20, 14, 1.950),
(74, 20, 10, 3.330),
(75, 20, 15, 5.000),
(76, 20, 12, 8.570),
(77, 35, 14, 1.710),
(78, 35, 10, 2.760),
(79, 35, 15, 3.900),
(80, 35, 12, 7.050),
(81, 19, 14, 1.710),
(82, 19, 10, 2.760),
(83, 19, 15, 3.900),
(84, 19, 12, 7.050);

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
  `email` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_provincia` (`id_provincia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=96 ;

--
-- Volcado de datos para la tabla `ehp_presupuestos`
--

INSERT INTO `ehp_presupuestos` (`id`, `nombre`, `id_cliente`, `id_provincia`, `fecha`, `email`, `total`) VALUES
(71, '', 0, 0, '2014-07-10 23:36:15', '', 0),
(72, '', 0, 0, '2014-07-10 23:45:07', '', 0),
(73, '', 0, 0, '2014-07-10 23:46:21', '', 0),
(74, '', 0, 0, '2014-07-12 22:26:09', '', 0),
(75, '', 0, 0, '2014-07-12 22:26:55', '', 0),
(76, '', 0, 0, '2014-07-13 01:48:58', '', 0),
(77, '', 0, 0, '2014-07-13 02:41:53', '', 0),
(78, '', 0, 0, '2014-07-13 23:18:33', '', 0),
(79, '', 0, 0, '2014-07-13 23:24:07', '', 0),
(80, 'Hugo', 0, 5, '2014-07-13 23:26:50', 'hugoepila@gmail.com', 0),
(81, 'Hugo', 0, 5, '2014-07-14 00:00:01', 'hugoepila@gmail.com', 0),
(82, '', 0, 0, '2014-07-14 15:18:27', '', 0),
(83, 'Hugo', 0, 7, '2014-07-14 15:25:16', 'hugoepila@gmail.com', 0),
(84, '', 0, 0, '2014-07-14 15:30:50', '', 0),
(85, '', 0, 0, '2014-07-14 15:34:10', '', 0),
(86, 'Jingles', 0, 4, '2014-07-14 15:34:46', 'misterjingles@hotmail.com', 0),
(87, 'Ballenato ballenato', 0, 21, '2014-07-14 15:42:06', 'ballenato@hotmail.com', 0),
(88, 'Puta', 0, 2, '2014-07-14 15:46:10', 'puta@mierda', 0),
(89, 'Se cagan pa ti', 0, 4, '2014-07-14 15:49:35', 'mierda@patuboca.com', 0),
(90, 'adjasdf', 0, 4, '2014-07-14 15:53:32', 'fafa@fas.com', 16.5504),
(91, '', 0, 0, '2014-07-14 16:02:22', '', 0),
(92, '', 0, 0, '2014-07-14 16:05:14', '', 0),
(93, '', 0, 0, '2014-07-14 16:05:56', '', 0),
(94, '', 0, 0, '2014-07-14 16:08:01', '', 0),
(95, '', 0, 0, '2014-07-14 16:44:35', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_provincias`
--

CREATE TABLE IF NOT EXISTS `ehp_provincias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `id_zona` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_zona` (`id_zona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ehp_provincias`
--

INSERT INTO `ehp_provincias` (`id`, `nombre`, `id_zona`) VALUES
(0, 'Zaragoza', 1),
(2, 'Huesca', 1),
(3, 'Teruel', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ehp_tamano`
--

CREATE TABLE IF NOT EXISTS `ehp_tamano` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `id_pieza` int(11) NOT NULL DEFAULT '1',
  `tamanopieza` float NOT NULL,
  `tamanocubico` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pieza` (`id_pieza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `ehp_tamano`
--

INSERT INTO `ehp_tamano` (`id`, `nombre`, `id_pieza`, `tamanopieza`, `tamanocubico`) VALUES
(5, '40x30x2', 1, 0.12, 0.0024),
(6, '40x40x2', 1, 0.16, 0.0032),
(7, '60x30x2', 1, 0.18, 0.0036),
(8, '60x40x2', 1, 0.24, 0.0048),
(10, '60x7x2', 2, 0.042, 0.00084),
(12, '60x18x2', 2, 0.108, 0.00216),
(14, '40x10x2', 2, 0.04, 0.0008),
(15, '40x18x2', 2, 0.072, 0.00148);

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
  `procedencia` int(11) NOT NULL,
  `masa_volumica` decimal(10,2) DEFAULT NULL,
  `absorcion` decimal(10,2) DEFAULT NULL,
  `compresion` decimal(10,2) DEFAULT NULL,
  `flexion` decimal(10,2) DEFAULT NULL,
  `desgaste` decimal(10,2) DEFAULT NULL,
  `impacto` decimal(10,2) DEFAULT NULL,
  `acabado1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `acabado2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `acabado3` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_material` (`id_material`),
  KEY `id_tono` (`id_tono`),
  KEY `procedencia` (`procedencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `ehp_tipos`
--

INSERT INTO `ehp_tipos` (`id`, `nombre`, `textura`, `id_material`, `id_tono`, `imagen`, `descripcion`, `procedencia`, `masa_volumica`, `absorcion`, `compresion`, `flexion`, `desgaste`, `impacto`, `acabado1`, `acabado2`, `acabado3`) VALUES
(12, 'Blanco Macael', 'render/marmol/macael.jpg', 2, 0, 'marmol/blanco_macael.jpg', 'Marmól Blanco Macael con trazados grises. Procedencia de las canteras de Macael (Almería). Utilizacion encimeras baño, escaleras, losas, fachada, repisas Marmól Blanco Macael con trazados grises. Procedencia de las canteras de Macael (Almería). Utilizacion encimeras baño, escaleras, losas, fachada, repisas Marmól Blanco Macael con trazados grises. Procedencia de las canteras de Macael (Almería). Utilizacion encimeras baño, escaleras, losas, fachada, repisas', 0, 2.72, 0.07, 87.40, 13.20, 22.00, 42.00, '', '', ''),
(13, 'Blanco Ibiza', 'render/marmol/ibiza.jpg', 2, 0, 'marmol/blanco_ibiza.jpg', 'Mármol Blanco Ibiza con tono en Gris nublado. Se utiliza para escaleras, Suelos, paredes, encimeras Baño.  Mármol Blanco Ibiza con tono en Gris nublado. Se utiliza para escaleras, Suelos, paredes, encimeras Baño.  Mármol Blanco Ibiza con tono en Gris nublado. Se utiliza para escaleras, Suelos, paredes, encimeras Baño. ', 0, 2.67, 0.20, 58.82, 6.80, 0.32, 50.00, '', '', ''),
(14, 'Crema Marfil', 'render/marmol/marfil.jpg', 2, 0, 'marmol/crema_marfil.jpg', 'El mármol Crema Marfil Coto es un material de color crema, compacto de grano fino, con fondo uniforme que puede presentar pequeñas vetas ligeramente más oscuras repartidas irregularmente. Se extrae de una de nuestras canteras, la Cantera Monte Coto, localizada en Pinoso (Alicante).\n\nNuestros productos son de la más alta calidad, consistencia y belleza, adecuados para todo tipo de proyectos ornamentales, tanto para interiores como para exteriores. Se sirven en distintos formatos y acabados, contacte con nosotros para conocer disponibilidad, acabados, medidas y precios finales.', 0, 2.68, 0.16, 112.80, 7.90, 20.80, 30.00, '', '', ''),
(15, 'Crema Levante', 'render/marmol/levante.jpg', 2, 0, 'marmol/crema_levante.jpg', 'beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.66, 0.20, 131.60, 13.20, 22.00, 42.00, '', '', ''),
(16, 'Beige Levante', 'render/marmol/b_levante.jpg', 2, 0, 'marmol/beige_levante.jpg', 'Crema levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.66, 0.20, 131.60, 14.60, 22.00, 30.00, '', '', ''),
(17, 'Emperador Claro', 'render/marmol/emperador.jpg', 2, 0, 'marmol/emperador_claro.jpg', 'Emperador claroantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.79, 0.10, 154.90, 21.10, 0.50, 35.00, '', '', ''),
(18, 'Marrón Emperador', 'render/marmol/marron_emperador.jpg', 2, 0, 'marmol/emperador_oscuro.jpg', 'marrón emperador es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.79, 0.10, 154.90, 21.10, 0.50, 35.00, '', '', ''),
(19, 'Rosa Zarci', 'render/marmol/zarci.jpg', 2, 0, 'marmol/rosa_zarci.jpg', 'Rosa Zarci es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.66, 0.20, 131.60, 14.60, 22.00, 30.00, '', '', ''),
(20, 'Rojo Alicante', 'render/marmol/alicante.jpg', 2, 0, 'marmol/rojo_alicate.jpg', 'Rojo Alicante es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.74, 0.17, 90.10, 9.00, 19.50, 22.00, '', '', ''),
(26, 'Gris Atlanta', 'render/granito/G603.jpg', 4, 0, 'granito/G603.jpg', 'G603 es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.65, 0.33, 132.70, 11.50, NULL, NULL, '', '', ''),
(27, 'Marron Gran Cañon', 'render/granito/G664.jpg', 4, 0, 'granito/G664.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(28, 'Rosado Tunez', 'render/granito/G687.jpg', 4, 0, 'granito/G687.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(29, 'Gris parga', 'render/granito/parga.jpg', 4, 0, 'granito/gris_parga.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(30, 'Rosa Porriño', 'render/granito/porriño.jpg', 4, 0, 'granito/rosa_porriño.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(31, 'Mondariz', 'render/granito/mondariz.jpg', 4, 0, 'granito/mondariz.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(32, 'Gran Perla', 'render/granito/gran_perla.jpg', 4, 0, 'granito/gran_perla.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(33, 'Gris Quintana', 'render/granito/quintana.jpg', 4, 0, 'granito/gris_quintana.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(34, 'Negro Marquina', 'render/marmol/marquina.jpg', 2, 0, 'marmol/negro_marquina.jpg', 'Negro Marquina es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.69, 0.17, 61.60, 13.40, 0.45, 30.00, '', '', ''),
(35, 'Rojo coralito', 'render/marmol/coralito.jpg', 2, 0, 'marmol/rojo_coralito.jpg', 'Rojo Coralito es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 0, 2.66, 0.20, 131.60, 14.60, 22.00, 30.00, '', '', ''),
(36, 'Blanco Lugo', 'render/granito/blanco_lugo.jpg', 4, 0, 'granito/blanco_lugo.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(37, 'Pedras Salgadas', 'render/granito/pedras_salgadas.jpg', 4, 0, 'granito/pedras_salgadas.jpg', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(39, 'Azul Extremadura', 'render/granito/azul_extremadura.jpg', 4, 0, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(40, 'Negro Ochavo', 'render/granito/ochavo.jpg', 4, 0, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(41, 'Negro Santa Olalla', 'render/granito/negro_santa_olalla.jpg', 4, 0, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '');

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
  `id_biselado` int(11) NOT NULL,
  `id_pale` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL COMMENT 'Cuantas piezas con esta configuración',
  `numeropiezas` int(11) NOT NULL COMMENT 'Número de baldosas, o rodapies o lo que sea que corresponden a los metros que necesita',
  `tamanoreal` float NOT NULL COMMENT 'Tamaño en metros real del número de baldosas final',
  `peso` float NOT NULL COMMENT 'Peso equivalente del tipo de material y los metros necesarios',
  `destino` int(11) NOT NULL,
  `precio` float NOT NULL,
  `id_presupuesto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo` (`id_tipo`),
  KEY `id_pieza` (`id_pieza`),
  KEY `id_tamano` (`id_tamano`),
  KEY `id_terminacion` (`id_terminacion`),
  KEY `id_pedido` (`id_presupuesto`),
  KEY `destino` (`destino`),
  KEY `id_biselado` (`id_biselado`),
  KEY `id_pale` (`id_pale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=111 ;

--
-- Volcado de datos para la tabla `ehp_valorpiezas`
--

INSERT INTO `ehp_valorpiezas` (`id`, `id_tipo`, `id_pieza`, `id_tamano`, `id_terminacion`, `id_biselado`, `id_pale`, `cantidad`, `numeropiezas`, `tamanoreal`, `peso`, `destino`, `precio`, `id_presupuesto`) VALUES
(86, 12, 2, 5, 1, 0, 0, 12, 0, 0, 0, 0, 206.88, 71),
(87, 12, 1, 5, 1, 0, 0, 31, 0, 0, 0, 0, 533.75, 72),
(88, 12, 1, 5, 1, 0, 0, 31, 0, 0, 0, 0, 533.75, 73),
(89, 26, 2, 5, 1, 0, 0, 13, 0, 0, 0, 0, 0, 74),
(90, 12, 1, 5, 1, 0, 0, 17, 0, 0, 0, 0, 293.77, 75),
(91, 12, 1, 5, 4, 0, 0, 12, 0, 0, 0, 0, 206.88, 76),
(92, 12, 1, 5, 1, 0, 0, 21, 0, 0, 0, 0, 362.04, 77),
(93, 12, 2, 5, 1, 0, 0, 11, 0, 0, 0, 0, 190.33, 78),
(94, 12, 2, 5, 1, 0, 0, 43, 0, 0, 0, 0, 740.63, 79),
(95, 12, 1, 5, 1, 0, 0, 44, 0, 0, 0, 0, 759.25, 82),
(96, 12, 1, 5, 1, 0, 0, 44, 0, 0, 0, 0, 759.25, 83),
(97, 12, 1, 5, 1, 0, 0, 12, 0, 0, 0, 0, 206.88, 84),
(98, 12, 2, 5, 1, 0, 0, 21, 0, 0, 0, 0, 362.04, 84),
(99, 12, 1, 5, 1, 0, 0, 11, 0, 0, 0, 0, 190.33, 86),
(100, 12, 1, 5, 1, 0, 0, 64, 0, 0, 0, 0, 1102.67, 87),
(101, 12, 1, 5, 1, 0, 0, 33, 0, 0, 0, 0, 568.92, 88),
(102, 12, 1, 5, 1, 0, 0, 22, 0, 0, 0, 0, 378.59, 89),
(103, 12, 2, 7, 1, 0, 0, 42, 0, 0, 0, 0, 794.763, 89),
(104, 12, 2, 7, 1, 0, 0, 42, 0, 0, 0, 0, 794.763, 89),
(105, 12, 2, 5, 1, 0, 0, 1, 0, 0, 0, 0, 16.5504, 90),
(106, 12, 1, 8, 1, 0, 0, 10, 0, 0, 0, 0, 220.752, 91),
(107, 12, 2, 5, 1, 0, 0, 1, 0, 0, 0, 0, 18.6192, 92),
(108, 12, 1, 5, 1, 0, 0, 10, 0, 0, 0, 0, 173.779, 93),
(109, 12, 1, 5, 1, 0, 0, 10, 0, 0, 0, 0, 173.779, 94),
(110, 12, 1, 5, 1, 0, 0, 10, 84, 10.08, 548.352, 0, 173.779, 95);

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
-- Estructura de tabla para la tabla `ehp_zonas`
--

CREATE TABLE IF NOT EXISTS `ehp_zonas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ehp_zonas`
--

INSERT INTO `ehp_zonas` (`id`, `zona`) VALUES
(1, 1),
(2, 2);

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
-- Filtros para la tabla `ehp_preciostransportes`
--
ALTER TABLE `ehp_preciostransportes`
  ADD CONSTRAINT `ehp_preciostransportes_ibfk_3` FOREIGN KEY (`id_pale`) REFERENCES `ehp_pales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_preciostransportes_ibfk_1` FOREIGN KEY (`id_zona_destino`) REFERENCES `ehp_zonas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ehp_preciostransportes_ibfk_2` FOREIGN KEY (`id_zona_procedencia`) REFERENCES `ehp_zonas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ehp_preciosunitarios`
--
ALTER TABLE `ehp_preciosunitarios`
  ADD CONSTRAINT `ehp_preciosunitarios_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `ehp_tipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_preciosunitarios_ibfk_2` FOREIGN KEY (`id_tamano`) REFERENCES `ehp_tamano` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ehp_provincias`
--
ALTER TABLE `ehp_provincias`
  ADD CONSTRAINT `ehp_provincias_ibfk_1` FOREIGN KEY (`id_zona`) REFERENCES `ehp_zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ehp_tamano`
--
ALTER TABLE `ehp_tamano`
  ADD CONSTRAINT `ehp_tamano_ibfk_1` FOREIGN KEY (`id_pieza`) REFERENCES `ehp_piezas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ehp_tipos`
--
ALTER TABLE `ehp_tipos`
  ADD CONSTRAINT `ehp_tipos_ibfk_3` FOREIGN KEY (`procedencia`) REFERENCES `ehp_provincias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ehp_tipos_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `ehp_materiales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_tipos_ibfk_2` FOREIGN KEY (`id_tono`) REFERENCES `ehp_tonos` (`id`);

--
-- Filtros para la tabla `ehp_valorpiezas`
--
ALTER TABLE `ehp_valorpiezas`
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_9` FOREIGN KEY (`id_pale`) REFERENCES `ehp_pales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_2` FOREIGN KEY (`id_terminacion`) REFERENCES `ehp_terminaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_3` FOREIGN KEY (`id_tamano`) REFERENCES `ehp_tamano` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_4` FOREIGN KEY (`id_tipo`) REFERENCES `ehp_tipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_5` FOREIGN KEY (`id_pieza`) REFERENCES `ehp_piezas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_6` FOREIGN KEY (`id_presupuesto`) REFERENCES `ehp_presupuestos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_7` FOREIGN KEY (`destino`) REFERENCES `ehp_provincias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ehp_valorpiezas_ibfk_8` FOREIGN KEY (`id_biselado`) REFERENCES `ehp_biselados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
