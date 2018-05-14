-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2015 a las 18:03:49
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica6`
--
CREATE DATABASE practica6;

USE practica6;

-- --------------------------------------------------------

-- EJERCICIO UNO

--
-- Estructura para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `status_id` int(11) REFERENCES status(id),
  `user_type_id`int(11) REFERENCES user_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estructura para la tabla `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estructura para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estructura para la tabla `user_logs`
--

CREATE TABLE `user_logs` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `date_logged` date NOT NULL,
  `user_id` int(11) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`email`, `password`, `status_id`, `user_type_id`) VALUES
('bernardo@correo.com','berna', '1', '1'),
('luis@correo.com.mx','lui', '1', '2'),
('crush@hotmail.com','berna', '2', '1'),
('yazmin@correo.com','yazz', '2', '1'),
('carlos@upv.com.mx','carl', '1', '2');

--
-- Volcado de datos para la tabla `user_types`
--

INSERT INTO `user_types` (`nombre`) VALUES
('Administrador'),
('Normal');

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`nombre`) VALUES
('Inactivo'),
('Activo');

--
-- Volcado de datos para la tabla `user_logs`
--

INSERT INTO `user_logs` (`date_logged`,`user_id`) VALUES
('2017/12/02','2'),
('2017/10/21','1'),
('2017/10/13','2'),
('2017/06/30','1'),
('2017/04/28','3'),
('2017/12/11','4'),
('2017/02/27','5'),
('2017/11/01','3');

-- --------------------------------------------------------
-- --------------------------------------------------------

-- EJERCICIO DOS

--
-- Estructura para la tabla `basquetbolistas`
--

CREATE TABLE `basquetbolistas` (
  `id` int(11) PRIMARY KEY,
  `nombre` varchar(100) NOT NULL,
  `posicion` varchar(10) NOT NULL,
  `carrera` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Estructura para la tabla `futbolistas`
--

CREATE TABLE `futbolistas` (
  `id` int(11) PRIMARY KEY,
  `nombre` varchar(100) NOT NULL,
  `posicion` varchar(10) NOT NULL,
  `carrera` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `futbolistas`
--

INSERT INTO `futbolistas` (`id`, `nombre`, `posicion`, `carrera`, `email`) VALUES
('31', 'Luis Gomez','Delantero','ITI','luis@correo.com'),
('17', 'Yazmin Roque','Defensa','MECA','yazmin@correo.com.mx');

--
-- Volcado de datos para la tabla `basquetbolistas`
--

INSERT INTO `basquetbolistas` (`id`, `nombre`, `posicion`, `carrera`, `email`) VALUES
('27', 'Yesenia Castillo','Delantera','ITI','yesenia@correo.com'),
('09', 'Francisco Gomez','Ataque','MECA','frank@correo.com.mx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
