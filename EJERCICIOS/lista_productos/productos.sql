-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2024 a las 01:37:11
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
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `descripcion` text NOT NULL,
  `valor` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `valor`, `cantidad`, `url`) VALUES
(1, 'sandia', 'es una de las frutas veraniegas por excelencia. Refresca y es altamente hidratante\r\n', 10000, 24, 'imagenes/sandia.jpg\r\n'),
(2, 'cereza', 'drupa de forma esférica, de color generalmente rojo intenso hasta casi negro', 5000, 15, 'imagenes/cerezas.jpg'),
(3, 'limon', 'Fruta cítrica pequeña y amarilla que es una fuente de ácido cítrico y ácido ascórbico', 3000, 7, 'imagenes/limones.jpg'),
(4, 'fresas', ' fruto de color rojo brillante, dulce y que tiene forma de corazón', 7000, 51, 'imagenes/fresas.jpg'),
(5, 'banana', 'La banana es dulce, rica en fibras, carbohidratos, potasio, vitamina A, vitamina C y triptofano, baja en sodio y en grasas', 4000, 25, 'imagenes/banana.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
