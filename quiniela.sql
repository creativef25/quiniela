-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2019 a las 23:43:52
-- Versión del servidor: 5.7.25-0ubuntu0.16.04.2
-- Versión de PHP: 7.1.26-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quiniela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(255) NOT NULL,
  `apePaterno` varchar(255) NOT NULL,
  `apeMaterno` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `alcaldia` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `CP` int(11) NOT NULL,
  `telefono` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `apePaterno`, `apeMaterno`, `edad`, `calle`, `alcaldia`, `ciudad`, `CP`, `telefono`, `id_user`, `updated_at`, `created_at`) VALUES
('Israel', 'Hernandez', 'Olvera', 25, 'Junta de Zitacuaro Remanente 2 24 e', 'Iztapalapa', 'CDMX', 9180, '57327915', 1, '2019-11-11', '2019-11-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `ganados` int(11) NOT NULL,
  `empatados` int(11) NOT NULL,
  `perdidos` int(11) NOT NULL,
  `diferencia_goles` int(11) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `imagen`, `ganados`, `empatados`, `perdidos`, `diferencia_goles`, `puntos`) VALUES
(1, 'America', 'america.png', 4, 2, 0, 6, 14),
(2, 'Atlas', 'atlas.png', 3, 0, 3, -2, 9),
(3, 'Atletico de San Luis', 'atlesanluis.png', 2, 1, 2, -3, 7),
(4, 'Cruz Azul', 'cruzazul.png', 2, 3, 1, 1, 9),
(5, 'Guadalajara', 'guadalajara.png', 2, 1, 3, 0, 7),
(6, 'Juerez', 'juares.png', 1, 0, 4, -6, 3),
(7, 'Leon', 'leon.png', 3, 1, 1, 6, 10),
(8, 'Monterrey', 'monterrey.png', 3, 0, 3, 0, 9),
(9, 'Morelia', 'morelia.png', 2, 0, 4, -2, 6),
(10, 'Necaxa', 'necaxa.png', 3, 1, 2, 7, 10),
(11, 'Pachuca', 'pachuca.png', 2, 1, 3, 2, 7),
(12, 'Puebla', 'puebla.png', 0, 2, 3, -9, 2),
(13, 'Pumas', 'pumas.png', 3, 0, 3, 2, 9),
(14, 'Queretaro', 'queretaro.png', 4, 1, 1, 4, 13),
(15, 'Santos', 'santos.png', 5, 0, 1, 8, 15),
(16, 'Tigres', 'tigres.png', 3, 2, 1, 3, 11),
(17, 'Tijuana', 'tijuana.png', 2, 1, 1, -1, 7),
(18, 'Toluca', 'toluca.png', 1, 1, 4, -5, 4),
(19, 'Veracruz', 'veracruz.png', 0, 1, 4, -11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE `jornadas` (
  `id` int(11) NOT NULL,
  `jornada` int(11) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_termino` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornadas`
--

INSERT INTO `jornadas` (`id`, `jornada`, `fecha_inicio`, `fecha_termino`) VALUES
(1, 7, '2019-08-27 19:00:00', '2019-08-29 21:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_09_07_211335_create_roles_table', 1),
(7, '2019_09_07_211936_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id` int(11) NOT NULL,
  `local` int(255) NOT NULL,
  `visitante` int(255) NOT NULL,
  `estadio` varchar(255) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `id_jornada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id`, `local`, `visitante`, `estadio`, `fecha_hora`, `id_jornada`) VALUES
(1, 2, 16, 'Estadio Jalisco', '2019-08-27 19:00:00', 1),
(2, 4, 6, 'Estadio Nemesio Diez', '2019-09-06 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiniela`
--

CREATE TABLE `quiniela` (
  `id` int(11) NOT NULL,
  `resultado1` varchar(255) NOT NULL,
  `resultado2` varchar(255) NOT NULL,
  `resultado3` varchar(255) NOT NULL,
  `resultado4` varchar(255) NOT NULL,
  `resultado5` varchar(255) NOT NULL,
  `resultado6` varchar(255) NOT NULL,
  `resultado7` varchar(255) NOT NULL,
  `resultado8` varchar(255) NOT NULL,
  `resultado9` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quiniela`
--

INSERT INTO `quiniela` (`id`, `resultado1`, `resultado2`, `resultado3`, `resultado4`, `resultado5`, `resultado6`, `resultado7`, `resultado8`, `resultado9`, `id_user`, `updated_at`, `created_at`) VALUES
(1, 'L', 'L', '0', '0', '0', '0', '0', '0', '0', 1, '2019-09-06 00:00:00', '2019-09-06 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-09-08 02:26:15', '2019-09-08 02:26:15'),
(2, 'user', 'User', '2019-09-08 02:26:15', '2019-09-08 02:26:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-09-08 02:26:15', '2019-09-08 02:26:15'),
(2, 1, 2, '2019-09-08 02:26:15', '2019-09-08 02:26:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@example.com', NULL, '$2y$10$fxHvziQWrh5JTUw6UnRsCe9LznaCO7ftiPWGNgtRYs3yHZ.vSWqx2', 'w0lmF6sbeOYBfYsb7o6bFyBCln3o76FBydjuDhqZcbLxM8ljDXAqEkrZ5RFV', '2019-09-08 02:26:15', '2019-09-08 02:26:15'),
(2, 'Admin', 'admin@example.com', NULL, '$2y$10$SnP0b./kg72AmmgZYsuFrOo/hjURJ5tEQY3/rmZR.vsjjRlMCm7M.', NULL, '2019-09-08 02:26:15', '2019-09-08 02:26:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `quiniela`
--
ALTER TABLE `quiniela`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `quiniela`
--
ALTER TABLE `quiniela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
