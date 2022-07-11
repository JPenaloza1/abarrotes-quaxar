-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2022 a las 16:20:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abarrotes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caducidad` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `caducidad`, `cantidad`, `precio`, `created_at`, `updated_at`) VALUES
(7, 'Boing Uva 550ml', '2022-12-23', 5, 16.5, '2022-07-10 05:07:38', '2022-07-11 10:39:28'),
(8, 'Sabritas Adobadas 80gr', '2023-04-10', 0, 16, '2022-07-10 05:16:54', '2022-07-10 11:01:52'),
(11, 'Barritas piña 35gr', '2022-07-21', 8, 10, '2022-07-10 05:28:15', NULL),
(12, 'Canelitas', '2022-07-29', 3, 14.5, '2022-07-10 05:46:43', NULL),
(14, 'Sopa Nissin', '2022-07-13', 4, 8.5, '2022-07-10 05:48:24', NULL),
(15, 'Coca-Cola 600ml', '2024-05-01', 32, 15, '2022-07-10 05:49:55', NULL),
(17, 'Crackets', '2022-10-10', 9, 14.5, '2022-07-10 05:52:58', NULL),
(18, 'Bimbo', '2022-07-19', 6, 35, '2022-07-10 23:21:43', NULL),
(20, 'Salmas 80gr', '2022-09-23', 6, 12.5, '2022-07-11 02:03:25', NULL),
(21, 'Doradas', '2022-05-21', 12, 19, '2022-07-11 05:03:56', NULL),
(22, 'Pepsi 3L', '2025-12-12', 7, 34, '2022-07-11 05:16:47', NULL),
(23, 'Doritos Pizzerola', '2022-12-31', 4, 15, '2022-07-11 05:20:05', NULL),
(24, 'Doritos Nacho', '2022-10-14', 3, 14, '2022-07-11 05:21:40', NULL),
(26, 'Chetos Bolitas', '2022-09-12', 4, 10, '2022-07-11 05:29:33', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
