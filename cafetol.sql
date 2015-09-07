-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2015 a las 23:29:07
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cafetol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_producto`
--

CREATE TABLE IF NOT EXISTS `img_producto` (
`id_img_p` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `rut_img` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`id_p` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `nam_p` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rs_p` text COLLATE utf8_spanish_ci NOT NULL,
  `txt_p` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
`id_tipo` int(11) NOT NULL,
  `nam_tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rut_tp` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `mintx_tp` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `nam_tipo`, `rut_tp`, `mintx_tp`) VALUES
(1, 'CafÃ© Tostado', 'imagenes/tipos/cafe1.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(2, 'CafÃ© Molido', 'imagenes/tipos/cafe2.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(3, 'CafÃ© en grano', 'imagenes/tipos/cafe3.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. '),
(4, 'CafÃ© especial', 'imagenes/tipos/cafe4.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `img_producto`
--
ALTER TABLE `img_producto`
 ADD PRIMARY KEY (`id_img_p`), ADD KEY `p_id` (`p_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id_p`), ADD KEY `tipo_id` (`tipo_id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
 ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `img_producto`
--
ALTER TABLE `img_producto`
MODIFY `id_img_p` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `img_producto`
--
ALTER TABLE `img_producto`
ADD CONSTRAINT `img_producto_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `productos` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
