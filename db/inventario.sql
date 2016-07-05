-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2016 a las 00:46:47
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(15) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_rif_cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `usuario`, `clave`, `direccion`, `id_telefono`, `id_rif_cedula`) VALUES
(1, 'Pedro', 'Perez', 'administrador', 'administrador', 'Guárico', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigo_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(70) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `direccion_entrega` varchar(200) DEFAULT NULL,
  `id_ubicacion` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_rif_cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(11) NOT NULL,
  `fecha_envio` varchar(10) DEFAULT NULL,
  `cantidad_enviada` varchar(50) DEFAULT NULL,
  `codigo_cliente` int(11) DEFAULT NULL,
  `codigo_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `codigo_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`codigo_grupo`, `nombre_grupo`) VALUES
(1, 'Cremas'),
(2, 'Grasas'),
(3, 'Harinas y Feculas'),
(4, 'Granos y Semillas'),
(5, 'Especias y Condimentos'),
(6, 'Polvos y Quimicos'),
(7, 'Levaduras'),
(8, 'Esencias y Colorantes'),
(9, 'Glucosas y Caramelinas'),
(10, 'Chocolates'),
(11, 'Confites y Mani'),
(12, 'Frutos'),
(13, 'Brillos y Siropes'),
(14, 'Conservas'),
(15, 'Salsas'),
(16, 'Azucar y Derivados'),
(17, 'Leche y Derivados'),
(18, 'Pastas'),
(19, 'Des. Carton'),
(20, 'Des. Plastico'),
(21, 'Des. Anime'),
(22, 'Des. Papel'),
(23, 'Des. Aluminio'),
(24, 'Utensilios'),
(25, 'Prod. Limpieza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo_producto` int(11) NOT NULL,
  `nombre_producto` varchar(70) DEFAULT NULL,
  `marca` varchar(60) DEFAULT NULL,
  `fecha_ingreso` varchar(10) DEFAULT NULL,
  `fecha_vencimiento` varchar(10) DEFAULT NULL,
  `cantidad` varchar(8) NOT NULL,
  `presentacion` varchar(60) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `codigo_grupo` int(11) DEFAULT NULL,
  `codigo_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codigo_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(80) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `nombre_contacto` varchar(70) DEFAULT NULL,
  `id_ubicacion` int(11) DEFAULT NULL,
  `id_telefono` int(11) DEFAULT NULL,
  `id_rif_cedula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rif_cedula`
--

CREATE TABLE `rif_cedula` (
  `id_rif_cedula` int(11) NOT NULL,
  `tipo_documento` char(1) DEFAULT NULL,
  `numero_documento` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rif_cedula`
--

INSERT INTO `rif_cedula` (`id_rif_cedula`, `tipo_documento`, `numero_documento`) VALUES
(1, 'V', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id_telefono` int(11) NOT NULL,
  `codigo_telefono` varchar(6) DEFAULT NULL,
  `numero_telefono` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`id_telefono`, `codigo_telefono`, `numero_telefono`) VALUES
(1, '0212', '1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` int(2) NOT NULL,
  `estado` varchar(40) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `estado`) VALUES
(1, 'Amazonas'),
(2, 'Anzoátegui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bolívar'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Falcón'),
(11, 'Guárico'),
(12, 'Lara'),
(13, 'Mérida'),
(14, 'Miranda'),
(15, 'Monagas'),
(16, 'Nueva Esparta'),
(17, 'Portuguesa'),
(18, 'Sucre'),
(19, 'Táchira'),
(20, 'Trujillo'),
(21, 'Vargas'),
(22, 'Yaracuy'),
(23, 'Zulia'),
(24, 'Distrito Capital');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `id_administrador` (`id_administrador`),
  ADD KEY `id_telefono` (`id_telefono`),
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo_cliente`),
  ADD KEY `codigo_cliente` (`codigo_cliente`),
  ADD KEY `id_ubicacion` (`id_ubicacion`),
  ADD KEY `id_telefono` (`id_telefono`),
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `id_envio` (`id_envio`),
  ADD KEY `codigo_cliente` (`codigo_cliente`),
  ADD KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codigo_grupo`),
  ADD KEY `codigo_grupo` (`codigo_grupo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo_producto`),
  ADD KEY `codigo_producto` (`codigo_producto`),
  ADD KEY `codigo_grupo` (`codigo_grupo`),
  ADD KEY `codigo_proveedor` (`codigo_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codigo_proveedor`),
  ADD KEY `codigo_proveedor` (`codigo_proveedor`),
  ADD KEY `id_ubicacion` (`id_ubicacion`),
  ADD KEY `id_telefono` (`id_telefono`),
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);

--
-- Indices de la tabla `rif_cedula`
--
ALTER TABLE `rif_cedula`
  ADD PRIMARY KEY (`id_rif_cedula`),
  ADD KEY `id_rif_cedula` (`id_rif_cedula`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id_telefono`),
  ADD KEY `id_telefono` (`id_telefono`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`),
  ADD KEY `id_ubicacion` (`id_ubicacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `codigo_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rif_cedula`
--
ALTER TABLE `rif_cedula`
  MODIFY `id_rif_cedula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `adiministrador_rif_cedula` FOREIGN KEY (`id_rif_cedula`) REFERENCES `rif_cedula` (`id_rif_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administrador_telefono` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_rif_cedula` FOREIGN KEY (`id_rif_cedula`) REFERENCES `rif_cedula` (`id_rif_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_telefono` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_cliente` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_clientes` FOREIGN KEY (`codigo_cliente`) REFERENCES `cliente` (`codigo_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_producto` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_productos` FOREIGN KEY (`codigo_producto`) REFERENCES `producto` (`codigo_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_grupo` FOREIGN KEY (`codigo_grupo`) REFERENCES `grupo` (`codigo_grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_proveedor` FOREIGN KEY (`codigo_proveedor`) REFERENCES `proveedor` (`codigo_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_rif_cedula` FOREIGN KEY (`id_rif_cedula`) REFERENCES `rif_cedula` (`id_rif_cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor_telefono` FOREIGN KEY (`id_telefono`) REFERENCES `telefono` (`id_telefono`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
