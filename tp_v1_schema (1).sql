-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2021 a las 21:10:15
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp_v1_schema`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `codigo` int(11) NOT NULL,
  `nombre_restaurante` varchar(50) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `telefono_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`codigo`, `nombre_restaurante`, `dia`, `turno`, `nombre_cliente`, `apellido_cliente`, `email_cliente`, `telefono_cliente`) VALUES
(1, 'BURGUER KING', '2021-12-24', 'Noche', 'JUANCITO', 'PEREZ', '11 1234-5678', 'JUANCITO@GMAIL.COM'),
(3, 'GLORIETA DE QUIQUE', '2021-12-25', 'Manana', 'JUANCITO', 'PEREZ', '11 1234-5678', 'JUANCITO@GMAIL.COM'),
(5, 'Gula Burgers', '2021-12-31', 'Manana', 'JUAN', 'PEREZ', '11 1234-5678', 'hg@gma.com'),
(6, 'Organica Beiro', '2021-12-16', 'Noche', 'JUANCITO', 'dsa', '11 1234-5678', 'JUANCITO@GMAIL.COM'),
(8, 'Humo', '2021-12-31', 'Manana', 'JUANCITO', 'PEREZ', 'JUANCITO@GMAIL.COM', '11 1234-5678'),
(9, '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes_db`
--

CREATE TABLE `restaurantes_db` (
  `id` int(11) NOT NULL,
  `nombre_restaurante` varchar(45) NOT NULL,
  `comida` varchar(45) NOT NULL,
  `zona` varchar(45) NOT NULL,
  `email_restaurante` varchar(45) NOT NULL,
  `telefono_restaurante` varchar(45) NOT NULL,
  `autorizado` tinyint(4) DEFAULT NULL,
  `foto` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `restaurantes_db`
--

INSERT INTO `restaurantes_db` (`id`, `nombre_restaurante`, `comida`, `zona`, `email_restaurante`, `telefono_restaurante`, `autorizado`, `foto`) VALUES
(24, 'Alimentos y Armonia', 'Vegetariana', 'Villa del parque', 'aya@gmail.com', '011 3515-5688', 1, ''),
(25, 'Humo', 'Vegetariana', 'Caballito', 'Humo@gmail.com', '011 3840-2369', 1, ''),
(26, 'Mi parrilla', 'Parrilla', 'Caballito', 'Miparrilla@yahoo.com', '011 4983-6090', 1, ''),
(27, 'El Meson De Guadalupe', 'Parrilla', 'Agronomia', 'ElMesonDeGuadalupe@gmail.com', '011 15-3398-9615', 1, ''),
(28, 'Brothers Hamnurgueseria', 'Hamburguesas', 'Agronomia', 'BrothersHamnurgueseria@gmail.com', '011 2124-1638', 1, ''),
(29, 'Organica Beiro', 'Vegana', 'Agronomia', 'OrganicaBeiro@gmail.com', '011 2114-5978', 1, ''),
(30, 'La Glorieta de Quique', 'Sanguches', 'La boca', 'LaGlorietadeQuique@gmail.com', '011 3813-6125', 1, ''),
(31, 'Parrilla Rey de Reyes', 'Parrilla', 'La boca', 'ParrillaReydeReyes@gmail.com', '011 2132-2273', 1, ''),
(32, 'El Burladero', 'Espanola', 'Recoleta', 'ElBurladero@gmail.com', '011 4806-9247', 1, ''),
(34, 'Sudestada', 'Asiatica', 'Chacarita', 'Sudestada@gmail.com', '011 4776-3777', 1, ''),
(35, 'Koh Lanta', 'Asiatica', 'Palermo', 'KohLanta@gmail.com', '011 3855-4575', 1, ''),
(36, 'Gourmet de Shanghai', 'China', 'Mataderos', 'GourmetdeShanghai@gmail.com', '011 3229-3783', 1, ''),
(37, 'Gula Burgers', 'Hamburguesas', 'Belgrano', 'GulaBurgers@gmail.com', '011 5370-6929', 1, ''),
(38, 'El Fortin', 'Pizzeria', 'Versalles', 'ElFortin@gmail.com', '011 4566-8279', 1, ''),
(49, 'Guido', 'Parrilla', 'Agronomia', 'CORREO@PRUEBA1.COM', '11 4343', 1, ''),
(51, 'CARLOS', 'Parrilla', 'Villa del parque', 'CORREdsfO@PRUEBA1.COM', '123', 1, 'uploads/SSCwZ37QxQiIhCsUQ2SenCNtfUXRjMcq5Z3Qxa53.jpg'),
(53, 'CARLOS cafe', 'Hamburguesas', 'Agronomia', 'asdx123@gmail.com', '11 4343133333', 1, 'uploads/FHJSYYXxsJTTZBa5ZjiuckOfsAOgkhtxUHnDO43W.jpg');

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `restaurantes_db`
--
ALTER TABLE `restaurantes_db`
  ADD PRIMARY KEY (`id`,`nombre_restaurante`),
  ADD UNIQUE KEY `nombre_restaurante` (`nombre_restaurante`),
  ADD UNIQUE KEY `email_restaurante` (`email_restaurante`),
  ADD UNIQUE KEY `telefono_restaurante` (`telefono_restaurante`);

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
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `restaurantes_db`
--
ALTER TABLE `restaurantes_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
