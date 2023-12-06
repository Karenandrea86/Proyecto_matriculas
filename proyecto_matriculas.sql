-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2023 a las 16:53:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_matriculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acu_info`
--

CREATE TABLE `acu_info` (
  `id` int(11) NOT NULL,
  `identification_number` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pcontact` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `acu_info`
--

INSERT INTO `acu_info` (`id`, `identification_number`, `name`, `surname`, `city`, `pcontact`, `datetime`) VALUES
(1, 52496896, 'Evelyn', 'Velasquez', 'Calle 87', 2147483647, '2023-09-30 12:32:16'),
(9, 123456789, 'Cristian', 'Buitrago', 'Calle 20', 1234567890, '2023-09-30 12:42:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `roll` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pcontact` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `acudiente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `level`, `city`, `pcontact`, `photo`, `datetime`, `acudiente_id`) VALUES
(48, 'Emiliano Zapata', 234109, 'Párvulos', 'Carrera 54 N 12', 2147483647, '2341092020-08-14-08-34.png', '2020-08-15 01:23:34', 0),
(49, 'Rafael Castro', 234110, 'Pre - jardín', 'Calle 78 N 19 1', 2147483647, '2341102020-08-14-08-13.png', '2020-08-15 01:38:13', 0),
(50, 'Julia Barón', 234111, 'Jardín', 'Calle 20 N 17 8', 2147483647, '2341112020-08-14-08-27.jpg', '2020-08-15 03:19:16', 0),
(51, 'Natalia Cardona', 234112, 'Transición', 'Carrera 54 N 12', 2147483647, '2341122020-08-14-08-22.png', '2020-08-15 05:54:22', 0),
(52, 'Sofia Tamayo', 234113, 'Párvulos', 'Carrera 55 N 97', 2147483647, '2341132020-08-14-08-22.png', '2020-08-15 07:51:22', 0),
(55, 'Mawy Antonella', 234114, 'Pre - jardín', 'Avenida 39', 2147483647, '2341142023-09-30-09-44.png', '2023-09-30 10:12:18', 0),
(56, 'Valentina', 234567, 'Jardín', 'Calle87', 2345678, '2345672023-09-30-09-02.png', '2023-09-30 12:44:02', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`) VALUES
(23, 'Karen Andrea', 'karenandrea@gmail.com', 'karenavh', '43f43ab25b84ddc400f4635a4e96a2e34cf24e62', 'karenavh.png', 'Activo', '2023-09-29 21:12:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acu_info`
--
ALTER TABLE `acu_info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acudiente_id` (`acudiente_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acu_info`
--
ALTER TABLE `acu_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
