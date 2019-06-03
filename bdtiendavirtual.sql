-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2019 a las 16:25:49
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

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
(1, 'Virtual', 'Virtual', NULL, '2019-06-03 05:00:00', '2019-06-03 05:00:00'),
(70327395, '70327395', '$2y$10$TEoy4sjPDIs82.zCkWtYvuBEykJ6dhy/2XW6ZaH1D41QuGDSk5yv.', NULL, '2019-05-05 01:49:29', '2019-05-05 01:49:29'),
(70345671, '70345671', '$2y$10$4pdZj0.V8HVNJBQpKDjI5.v1lB92vZey0fngvwcwifEAxrEU7oRsW', NULL, '2019-05-05 07:33:08', '2019-05-05 07:33:08'),
(73666122, '73666122', '$2y$10$XYKnMUZOJJJDOOHv10OZFesjB2vMjlhJRxBlmzlc.ivEYkf4ryQ/C', NULL, '2019-05-05 01:43:56', '2019-05-05 01:43:56'),
(75200120, '75200120', '$2y$10$Aa3UVU7eNBy.A8zuFOgFCOz9R363ZHcZCdI34eSr82Kk4rBH2XaQ.', NULL, '2019-05-04 21:42:59', '2019-05-04 21:42:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
