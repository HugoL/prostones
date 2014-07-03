-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2014 a las 23:33:39
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.3.10-1ubuntu3.12

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `ehp_presupuestos`
--

INSERT INTO `ehp_presupuestos` (`id`, `nombre`, `id_cliente`, `id_provincia`, `fecha`, `email`, `total`) VALUES
(1, '', 0, 0, '2014-07-03 15:13:20', '', 0),
(2, '', 0, 0, '2014-07-03 15:13:59', '', 0),
(3, '', 0, 0, '2014-07-03 15:14:24', '', 0),
(4, '', 0, 0, '2014-07-03 16:49:06', '', 0),
(5, '', 0, 0, '2014-07-03 16:49:49', '', 0),
(6, '', 0, 0, '2014-07-03 16:52:56', '', 0),
(7, '', 0, 0, '2014-07-03 16:53:56', '', 0),
(8, '', 0, 0, '2014-07-03 16:54:12', '', 0),
(9, '', 0, 0, '2014-07-03 16:54:43', '', 0),
(10, '', 0, 0, '2014-07-03 16:55:33', '', 0),
(11, '', 0, 0, '2014-07-03 16:55:54', '', 0),
(12, '', 0, 0, '2014-07-03 16:56:20', '', 0),
(13, '', 0, 0, '2014-07-03 17:48:41', '', 0),
(14, '', 0, 0, '2014-07-03 21:29:24', '', 0),
(15, '', 0, 0, '2014-07-03 21:30:41', '', 0);

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
(5, '40x30x2', 1),
(6, '40x40x2', 1),
(7, '60x30x2', 1),
(8, '60x40x2', 1),
(10, '60x7x2', 2),
(12, '60x18x2', 2),
(14, '40x10x2', 2),
(15, '40x18x2', 2);

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
  `masa_volumica` decimal(10,2) DEFAULT NULL,
  `absorcion` decimal(10,2) DEFAULT NULL,
  `compresion` decimal(10,2) DEFAULT NULL,
  `flexion` decimal(10,2) DEFAULT NULL,
  `desgaste` decimal(10,2) DEFAULT NULL,
  `impacto` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_material` (`id_material`),
  KEY `id_tono` (`id_tono`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `ehp_tipos`
--

INSERT INTO `ehp_tipos` (`id`, `nombre`, `textura`, `id_material`, `id_tono`, `imagen`, `descripcion`, `procedencia`, `masa_volumica`, `absorcion`, `compresion`, `flexion`, `desgaste`, `impacto`) VALUES
(12, 'Blanco Macael', 'render/marmol/macael.jpg', 2, 0, 'marmol/blanco_macael.jpg', 'Marmól Blanco Macael con trazados grises. Procedencia de las canteras de Macael (Almería). Utilizacion encimeras baño, escaleras, losas, fachada, repisas Marmól Blanco Macael con trazados grises. Procedencia de las canteras de Macael (Almería). Utilizacion encimeras baño, escaleras, losas, fachada, repisas Marmól Blanco Macael con trazados grises. Procedencia de las canteras de Macael (Almería). Utilizacion encimeras baño, escaleras, losas, fachada, repisas', 'Ameria', 2.72, 0.07, 87.40, 13.20, 22.00, 42.00),
(13, 'Blanco Ibiza', 'render/marmol/ibiza.jpg', 2, 0, 'marmol/blanco_ibiza.jpg', 'Mármol Blanco Ibiza con tono en Gris nublado. Se utiliza para escaleras, Suelos, paredes, encimeras Baño.  Mármol Blanco Ibiza con tono en Gris nublado. Se utiliza para escaleras, Suelos, paredes, encimeras Baño.  Mármol Blanco Ibiza con tono en Gris nublado. Se utiliza para escaleras, Suelos, paredes, encimeras Baño. ', 'Murcia', 2.67, 0.20, 58.82, 6.80, 0.32, 50.00),
(14, 'Crema Marfil', 'render/marmol/marfil.jpg', 2, 0, 'marmol/crema_marfil.jpg', 'El mármol Crema Marfil Coto es un material de color crema, compacto de grano fino, con fondo uniforme que puede presentar pequeñas vetas ligeramente más oscuras repartidas irregularmente. Se extrae de una de nuestras canteras, la Cantera Monte Coto, localizada en Pinoso (Alicante).\n\nNuestros productos son de la más alta calidad, consistencia y belleza, adecuados para todo tipo de proyectos ornamentales, tanto para interiores como para exteriores. Se sirven en distintos formatos y acabados, contacte con nosotros para conocer disponibilidad, acabados, medidas y precios finales.', 'Alicante', 2.68, 0.16, 112.80, 7.90, 20.80, 30.00),
(15, 'Crema Levante', 'render/marmol/levante.jpg', 2, 0, 'marmol/crema_levante.jpg', 'beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Murcia', 2.66, 0.20, 131.60, 13.20, 22.00, 42.00),
(16, 'Beige Levante', 'render/marmol/b_levante.jpg', 2, 0, 'marmol/beige_levante.jpg', 'Crema levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Murcia', 2.66, 0.20, 131.60, 14.60, 22.00, 30.00),
(17, 'Emperador Claro', 'render/marmol/emperador.jpg', 2, 0, 'marmol/emperador_claro.jpg', 'Emperador claroantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Murcia', 2.79, 0.10, 154.90, 21.10, 0.50, 35.00),
(18, 'Marrón Emperador', 'render/marmol/marron_emperador.jpg', 2, 0, 'marmol/emperador_oscuro.jpg', 'marrón emperador es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Murcia', 2.79, 0.10, 154.90, 21.10, 0.50, 35.00),
(19, 'Rosa Zarci', 'render/marmol/zarci.jpg', 2, 0, 'marmol/rosa_zarci.jpg', 'Rosa Zarci es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Murcia', 2.66, 0.20, 131.60, 14.60, 22.00, 30.00),
(20, 'Rojo Alicante', 'render/marmol/alicante.jpg', 2, 0, 'marmol/rojo_alicate.jpg', 'Rojo Alicante es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Alicante', 2.74, 0.17, 90.10, 9.00, 19.50, 22.00),
(26, 'Gris Atlanta', 'render/granito/G603.jpg', 4, 0, 'granito/G603.jpg', 'G603 es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Murcia', 2.65, 0.33, 132.70, 11.50, NULL, NULL),
(27, 'Marron Gran Cañon', 'render/granito/G664.jpg', 4, 0, 'granito/G664.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Rosado Tunez', 'render/granito/G687.jpg', 4, 0, 'granito/G687.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Gris parga', 'render/granito/parga.jpg', 4, 0, 'granito/gris_parga.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Rosa Porriño', 'render/granito/porriño.jpg', 4, 0, 'granito/rosa_porriño.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Mondariz', 'render/granito/mondariz.jpg', 4, 0, 'granito/mondariz.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Gran Perla', 'render/granito/gran_perla.jpg', 4, 0, 'granito/gran_perla.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Gris Quintana', 'render/granito/quintana.jpg', 4, 0, 'granito/gris_quintana.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Negro Marquina', 'render/marmol/marquina.jpg', 2, 0, 'marmol/negro_marquina.jpg', 'Negro Marquina es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Alicante', 2.69, 0.17, 61.60, 13.40, 0.45, 30.00),
(35, 'Rojo coralito', 'render/marmol/coralito.jpg', 2, 0, 'marmol/rojo_coralito.jpg', 'Rojo Coralito es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .beig levantee es s asda sdas  af asf s fa sfa sf aslfasml dsamlass. f asfasl fas. sf as.afafasfjoqwjqw q f sf e qq .', 'Murcia', 2.66, 0.20, 131.60, 14.60, 22.00, 30.00),
(36, 'Blanco Lugo', 'render/granito/blanco_lugo.jpg', 4, 0, 'granito/blanco_lugo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Pedras Salgadas', 'render/granito/pedras_salgadas.jpg', 4, 0, 'granito/pedras_salgadas.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Azul Extremadura', 'render/granito/azul_extremadura.jpg', 4, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Negro Ochavo', 'render/granito/ochavo.jpg', 4, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Negro Santa Olalla', 'render/granito/negro_santa_olalla.jpg', 4, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `ehp_valorpiezas`
--

INSERT INTO `ehp_valorpiezas` (`id`, `id_tipo`, `id_pieza`, `id_tamano`, `id_terminacion`, `cantidad`, `precio`, `id_presupuesto`) VALUES
(1, 12, 3, 5, 2, 6, 100, 1),
(2, 12, 3, 5, 2, 6, 100, 2),
(3, 12, 3, 5, 2, 6, 100, 3),
(4, 12, 4, 5, 4, 1, 100, 4),
(5, 26, 7, 5, 8, 8, 100, 5),
(6, 26, 7, 5, 8, 8, 100, 6),
(7, 26, 7, 5, 8, 8, 100, 7),
(8, 26, 7, 5, 8, 8, 100, 8),
(9, 26, 7, 5, 8, 8, 100, 9),
(10, 26, 7, 5, 8, 8, 100, 10),
(11, 26, 7, 5, 8, 8, 100, 11),
(12, 26, 7, 5, 8, 8, 100, 12),
(13, 37, 5, 10, 4, 2, 100, 12),
(14, 37, 5, 10, 4, 2, 100, 12),
(15, 37, 5, 10, 4, 2, 100, 12),
(16, 37, 5, 10, 4, 2, 100, 12),
(17, 37, 5, 10, 4, 2, 100, 12),
(18, 26, 5, 5, 4, 2, 100, 13),
(19, 17, 7, 5, 4, 2, 100, 14),
(20, 12, 4, 5, 2, 5, 100, 14),
(21, 17, 7, 5, 4, 2, 100, 15);

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
