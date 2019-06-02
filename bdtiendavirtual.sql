-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2019 a las 18:15:28
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtiendavirtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(255) NOT NULL,
  `cat_slug` varchar(255) NOT NULL,
  `cat_descripcion` text NOT NULL,
  `cat_color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nombre`, `cat_slug`, `cat_descripcion`, `cat_color`) VALUES
(1, 'Abarrotes', 'No se', 'Productos para el hogar.', 'Varios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_dni` varchar(8) NOT NULL,
  `cli_apellidos` varchar(100) NOT NULL,
  `cli_nombres` varchar(100) NOT NULL,
  `cli_email` varchar(100) NOT NULL,
  `cli_user` varchar(20) NOT NULL,
  `cli_password` varchar(30) NOT NULL,
  `cli_tipo` varchar(20) NOT NULL,
  `cli_activo` int(11) NOT NULL,
  `cli_direccion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cli_id`, `cli_dni`, `cli_apellidos`, `cli_nombres`, `cli_email`, `cli_user`, `cli_password`, `cli_tipo`, `cli_activo`, `cli_direccion`) VALUES
(1, '45207860', 'MENDOZA QUISPE', 'PERCY JULIO', '', '', '', '', 0, ''),
(2, '45076456', 'CAMA CORREA', 'KELVIN', '', '', '', '', 0, ''),
(3, '25416070', 'CEPEDA BURGOS', 'REBECA LEONOR', '', '', '', '', 0, ''),
(4, '45076845', 'RAMIREZ SALDAÑA', 'MONICA', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `dv_idventa` int(11) NOT NULL,
  `dv_idproducto` int(11) NOT NULL,
  `dv_cantidad` int(11) NOT NULL,
  `dv_total` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`dv_idventa`, `dv_idproducto`, `dv_cantidad`, `dv_total`) VALUES
(4, 3, 2, '11.00'),
(8, 2, 3, '18.00'),
(8, 4, 2, '7.00');

--
-- Disparadores `detalleventas`
--
DELIMITER $$
CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `detalleventas` FOR EACH ROW BEGIN
	UPDATE productos SET prod_stock = prod_stock -
NEW.dv_cantidad
	WHERE productos.prod_id = NEW.dV_idproducto;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `prod_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_nombre` varchar(100) NOT NULL,
  `prod_slug` varchar(255) NOT NULL,
  `prod_descripcion` text NOT NULL,
  `prod_extract` varchar(255) NOT NULL,
  `prod_precio` decimal(6,2) NOT NULL,
  `prod_imagen` varchar(255) NOT NULL,
  `prod_visible` int(11) NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`prod_id`, `cat_id`, `prod_nombre`, `prod_slug`, `prod_descripcion`, `prod_extract`, `prod_precio`, `prod_imagen`, `prod_visible`, `prod_stock`, `created_at`, `updated_at`) VALUES
(2, 1, 'Atún Florida Filete', '', '', '', '6.00', '', 0, 47, '2019-05-27 03:24:23', '0000-00-00 00:00:00'),
(3, 1, 'Atún Fanny Trozos', '', '', '', '5.50', '', 0, 78, '2019-05-27 03:24:23', '0000-00-00 00:00:00'),
(4, 1, 'Arroz Costeño 1kg', '', '', '', '3.50', '', 0, 73, '2019-05-27 03:24:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(25457065, '25457065', '$2y$10$eF0Uwwd7tkWF7.HBYnQm3.rpOSEwrk9PDxDOVlYl50p4S9jkXPJGG', NULL, '2019-05-05 01:53:28', '2019-05-05 01:53:28'),
(25754054, '25754054', '$2y$10$16xY.Jo1zYYj0iaY7j57RecAXWSAWR5YqQRtcfm/vwiBtxkKDNdVq', NULL, '2019-05-07 18:23:06', '2019-05-07 18:23:06'),
(25774850, '25774850', '$2y$10$qo1nacRUROS6UoaNtw2XP.vMo.lK6L6WRrn23El..JeN7TSPwfvBe', NULL, '2019-05-05 06:18:01', '2019-05-05 06:18:01'),
(25840824, '25840824', '$2y$10$ROcGXcrdawx6wK56w3OudOXXBmIjGy2V75ioiQJWHdQ4KY0EtScHi', NULL, '2019-05-12 15:22:31', '2019-05-12 15:22:31'),
(45070560, '45070560', '$2y$10$9Ta5.Odv4qCJkBIZaJSFJuZKthgc8VsbebRsSUuItulQX9IkILpwe', NULL, '2019-05-05 06:22:31', '2019-05-05 06:22:31'),
(45070645, '45070645', '$2y$10$NeXBXdeQRRCfcqMJJrmQvurgV0wFN5MZ0GmwDo7RlPBIb4H6HZ4kq', NULL, '2019-05-04 23:49:23', '2019-05-04 23:49:23'),
(45086045, '45086045', '$2y$10$oOa3jZPkWcecjA5bei4PxuLus/L/ZKBqC/mLt4sE3qVhvQMmJ0Blm', NULL, '2019-05-06 01:07:07', '2019-05-06 01:07:07'),
(48509790, '48509790', '$2y$10$ToWNaOcHfFcgq4KQju5eau64YFScN4FwtPdCOmD.MSQGI5eURWATi', NULL, '2019-05-05 03:08:42', '2019-05-05 03:08:42'),
(70327292, '70327292', '$2y$10$DtXHwxFGI5wNKMD6YLFV9ex8hJXeLN9zVpKkeIwuRiHcxYL8UNAY6', NULL, '2019-05-20 22:34:39', '2019-05-20 22:34:39'),
(70327395, '70327395', '$2y$10$TEoy4sjPDIs82.zCkWtYvuBEykJ6dhy/2XW6ZaH1D41QuGDSk5yv.', NULL, '2019-05-05 01:49:29', '2019-05-05 01:49:29'),
(70345671, '70345671', '$2y$10$4pdZj0.V8HVNJBQpKDjI5.v1lB92vZey0fngvwcwifEAxrEU7oRsW', NULL, '2019-05-05 07:33:08', '2019-05-05 07:33:08'),
(73666122, '73666122', '$2y$10$XYKnMUZOJJJDOOHv10OZFesjB2vMjlhJRxBlmzlc.ivEYkf4ryQ/C', NULL, '2019-05-05 01:43:56', '2019-05-05 01:43:56'),
(74078065, '74078065', '$2y$10$jQov4472WLvc8g16PzW7lObvwtMJjNuEZnNjvr8zbd2al3OxZ4wYe', NULL, '2019-05-05 06:43:47', '2019-05-05 06:43:47'),
(75054046, '75054046', '$2y$10$fl90zumdcThZa6MyhYhQQOg6sysJnvI.y2zz7blYjVNlOG1xMsCQy', NULL, '2019-05-04 23:44:13', '2019-05-04 23:44:13'),
(75200120, '75200120', '$2y$10$Aa3UVU7eNBy.A8zuFOgFCOz9R363ZHcZCdI34eSr82Kk4rBH2XaQ.', NULL, '2019-05-04 21:42:59', '2019-05-04 21:42:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ven_id` int(11) NOT NULL,
  `ven_idcliente` int(11) NOT NULL,
  `ven_fecha` date NOT NULL,
  `ven_envio` decimal(6,2) NOT NULL,
  `ven_total` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ven_id`, `ven_idcliente`, `ven_fecha`, `ven_envio`, `ven_total`) VALUES
(4, 2, '2019-05-26', '0.00', '11.00'),
(8, 1, '2019-05-26', '0.00', '25.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`dv_idventa`,`dv_idproducto`),
  ADD KEY `dv_idventa` (`dv_idventa`),
  ADD KEY `dv_idproducto` (`dv_idproducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `ven_idcliente` (`ven_idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD CONSTRAINT `detalleventas_ibfk_1` FOREIGN KEY (`dv_idproducto`) REFERENCES `productos` (`prod_id`),
  ADD CONSTRAINT `detalleventas_ibfk_2` FOREIGN KEY (`dv_idventa`) REFERENCES `ventas` (`ven_id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorias` (`cat_id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ven_idcliente`) REFERENCES `clientes` (`cli_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
