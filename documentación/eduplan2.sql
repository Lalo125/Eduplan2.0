-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 03:54:55
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eduplan2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `ASIGNATURA_ID` int(11) NOT NULL,
  `PROFESOR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`ASIGNATURA_ID`, `PROFESOR_ID`) VALUES
(2, 1),
(3, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `CURSO_ID` int(11) NOT NULL,
  `NOMBRE_CURS` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`CURSO_ID`, `NOMBRE_CURS`) VALUES
(2, '1A'),
(3, '4C'),
(4, '2B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ESTUDIANTE_ID` int(11) NOT NULL,
  `CURSO_ID` int(11) NOT NULL,
  `NOMBRE_EST` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO1_EST` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO2_EST` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `RUT_EST` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `CORREO_EST` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `CONTRASENA_EST` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TIPO_EST` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_asig`
--

CREATE TABLE `est_asig` (
  `EST_ASIG_ID` int(11) NOT NULL,
  `ASIGNATURA_ID` int(11) NOT NULL,
  `ESTUDIANTE_ID` int(11) NOT NULL,
  `NOTAS` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `OBSERVACIONES_ID` int(11) NOT NULL,
  `ESTUDIANTE_ID` int(11) NOT NULL,
  `PROFESOR_ID` int(11) NOT NULL,
  `FECHA_OBS` date NOT NULL,
  `INDICADOR` varchar(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `PROFESOR_ID` int(11) NOT NULL,
  `NOMBRE_PROF` char(30) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO1_PROF` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO2_PROF` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `RUT_PROF` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `CORREO_PROF` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `CONTRASENA_PROF` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `TIPO_PROF` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`PROFESOR_ID`, `NOMBRE_PROF`, `APELLIDO1_PROF`, `APELLIDO2_PROF`, `RUT_PROF`, `CORREO_PROF`, `CONTRASENA_PROF`, `TIPO_PROF`) VALUES
(1, 'maria', 'zambrano', 'zapata', '21.320.555-2', 'maria@lenguajegmail.cl', '12345', 'lenguaje'),
(2, 'felipe', 'maldonado', 'novoa', '21.270.444-k', 'felipe@matematicagmail.cl', '12345', 'matematicas'),
(3, 'mariana', 'garcia', 'alvarez', '21.444.730-k', 'mariana@religiongmail.cl', '12345', 'religion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`ASIGNATURA_ID`),
  ADD UNIQUE KEY `ASIGNATURAS_PK` (`ASIGNATURA_ID`),
  ADD KEY `EJERCER_FK` (`PROFESOR_ID`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`CURSO_ID`),
  ADD UNIQUE KEY `CURSOS_PK` (`CURSO_ID`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ESTUDIANTE_ID`),
  ADD UNIQUE KEY `ESTUDIANTES_PK` (`ESTUDIANTE_ID`),
  ADD KEY `PERTENECER_FK` (`CURSO_ID`);

--
-- Indices de la tabla `est_asig`
--
ALTER TABLE `est_asig`
  ADD PRIMARY KEY (`EST_ASIG_ID`),
  ADD UNIQUE KEY `EST_ASIG_PK` (`EST_ASIG_ID`),
  ADD KEY `ESTUDIAR2_FK` (`ESTUDIANTE_ID`),
  ADD KEY `ESTUDIAR1_FK` (`ASIGNATURA_ID`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`OBSERVACIONES_ID`),
  ADD UNIQUE KEY `OBSERVACIONES_PK` (`OBSERVACIONES_ID`),
  ADD KEY `RECIBE_FK` (`ESTUDIANTE_ID`),
  ADD KEY `ANOTAR_FK` (`PROFESOR_ID`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`PROFESOR_ID`),
  ADD UNIQUE KEY `PROFESORES_PK` (`PROFESOR_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `ASIGNATURA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `CURSO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `ESTUDIANTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `est_asig`
--
ALTER TABLE `est_asig`
  MODIFY `EST_ASIG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `OBSERVACIONES_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `PROFESOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
