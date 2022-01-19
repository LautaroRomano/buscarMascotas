-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2022 a las 02:01:27
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buscarmascotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `histclinicos`
--

CREATE TABLE `histclinicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Mascota_id` int(11) NOT NULL,
  `veterinario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proxvisita` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `histclinicos`
--

INSERT INTO `histclinicos` (`id`, `Mascota_id`, `veterinario`, `detalle`, `proxvisita`, `created_at`, `updated_at`) VALUES
(2, 2, 'cocho', 'no tiene nike', '2022-01-30', '2022-01-19 03:08:18', '2022-01-19 03:08:18'),
(4, 2, 'lau', 'jajajaj', '2022-01-02', '2022-01-19 03:10:11', '2022-01-19 03:10:11'),
(5, 3, 'tandil', 'nada', '2022-01-29', '2022-01-19 03:53:30', '2022-01-19 03:53:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keys`
--

CREATE TABLE `keys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `keys`
--

INSERT INTO `keys` (`id`, `key`, `User_id`, `estado`, `created_at`, `updated_at`) VALUES
(2, '25', 1, 0, NULL, NULL),
(3, '12', 2, 0, NULL, NULL),
(4, '9999', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(5, '10000', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(6, '10001', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(7, '10002', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(8, '10003', 3, 0, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(9, '10004', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(10, '10005', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(11, '10006', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(12, '10007', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(13, '10008', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23'),
(14, '10009', NULL, 1, '2022-01-19 03:39:23', '2022-01-19 03:39:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` int(11) NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calleynum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enfermedades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicamentos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fec_nac` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `User_id`, `key`, `name`, `calleynum`, `enfermedades`, `medicamentos`, `fec_nac`, `created_at`, `updated_at`) VALUES
(1, 1, '25', 'chimu', 'crisostomo alvarez 805', 'ninguna', 'paracetamol', '2002-05-11', '2022-01-19 00:33:23', '2022-01-19 00:35:23'),
(2, 2, '12', 'isabel', 'mi casa 25', 'paravirus', 'paraceamol', '2022-01-28', '2022-01-19 00:37:57', '2022-01-19 00:37:57'),
(3, 3, '10003', 'emi', 'mi casa 25', 'ninguna', 'parecetamol', '2022-01-14', '2022-01-19 03:52:42', '2022-01-19 03:52:42');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2022_01_17_224529_mascotas', 1),
(30, '2022_01_18_201856_keys', 1),
(31, '2022_01_18_214752_histclinico', 2),
(32, '2022_01_18_214822_vacunas', 2);

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
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'lautaro', 'lautarooyt837@gmail.com', NULL, '$2y$10$Jh04GeauI0uWNgtcDv6CKe.0f4d1iE9X8yn9O4RB8Ot.8.YN9sqxW', NULL, '2022-01-19 00:16:42', '2022-01-19 00:16:42'),
(2, 'user', 'user@email.com', NULL, '$2y$10$d4hYEwV3VX2AhmczpzxkmepmCa4JiogaF96nEkgLt99aziKIAaAt6', NULL, '2022-01-19 00:36:26', '2022-01-19 00:36:26'),
(3, 'emiliano', 'emiliano@email.com', NULL, '$2y$10$oMrlG6Dah17FXtjZxtt6jeWHrpMPhepXsTZk7DkqcgvLwUqY3Eqsi', NULL, '2022-01-19 03:44:25', '2022-01-19 03:44:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Mascota_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proxvacuna` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`id`, `Mascota_id`, `name`, `detalle`, `proxvacuna`, `created_at`, `updated_at`) VALUES
(3, 2, 'para virusss', 'nading', '2021-12-03', '2022-01-19 03:22:32', '2022-01-19 03:28:33'),
(4, 3, 'para virus', 'nose', '2022-01-22', '2022-01-19 03:53:07', '2022-01-19 03:53:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `histclinicos`
--
ALTER TABLE `histclinicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `histclinicos`
--
ALTER TABLE `histclinicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `keys`
--
ALTER TABLE `keys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
