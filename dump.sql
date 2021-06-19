-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 02:25 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd-amarte`
--

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `telefono` int(15) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `sub-total` int(50) NOT NULL,
  `costo_envio` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `compra_producto`
--

CREATE TABLE `compra_producto` (
  `id` int(11) NOT NULL,
  `compra_id` int(100) NOT NULL,
  `producto_talla_id` int(11) NOT NULL,
  `precio` int(25) NOT NULL,
  `sku` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `reviews` int(11) NOT NULL DEFAULT 5,
  `material` varchar(50) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `informacion_adicional` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `reviews`, `material`, `sku`, `informacion_adicional`) VALUES
(1, 'Crop-top', 12000, 'Crop, básico glamuroso.', 5, 'Lana', 'ct01', 'Varios colores, consulta por el tuyo.'),
(3, 'Cartera redonda con flecos', 12000, 'Cartera de color naranja, con una hermosa terminacion con flecos', 5, 'Lana', 'crf01', 'Solo disponible en anaranjado'),
(4, 'Crop lazo', 15000, 'Crop top en forma de lazo.', 5, 'Lana', 'ctl01', 'Disponible en verde, negro y beige.'),
(5, 'Crop sirena', 15000, 'Hermoso crop top de sirena, un modelo muy sexy y fresco para esos días de calor.', 5, 'Lana', 'cts01', 'Disponible en negro, gris, blanco y azul.'),
(6, 'Crop nudo', 20000, 'Quieres lucir cool, traemos este precioso modelo con nudo en el centro.', 5, 'Lana antialergica', 'ctn01', 'Color disponoble solo en negro.'),
(7, 'Crop sandia', 15900, 'Te gusta las sandias? Te traemos este crop top frutal de sandia para tus outfit...', 5, 'Lana', 'ctf01', 'Unico modelo'),
(8, 'Cartera medialuna', 19900, 'Cartera medialuna, perfecto para esos dias frescos.', 5, 'Trapillo', 'cm01', 'Unico color disponible.'),
(9, 'Crop ondas cortas', 23000, 'Crop ondas, con escote.', 5, 'Lana', 'cto01', 'Colores disponibles en gris, blanco y negro.'),
(10, 'Bikini', 28000, 'Hermosos bikinis para disfrutar en la playa.', 5, 'Lana antialergica', 'tdb01', 'Variedad de colores y tallas.');

-- --------------------------------------------------------

--
-- Table structure for table `producto_foto`
--

CREATE TABLE `producto_foto` (
  `id` int(11) NOT NULL,
  `url_foto` varchar(200) NOT NULL,
  `producto_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto_foto`
--

INSERT INTO `producto_foto` (`id`, `url_foto`, `producto_id`) VALUES
(1, 'crop-basic.jpg', 1),
(2, 'cartera-redonda-flecos.jpg', 3),
(3, 'crop-lazo.jpg\r\n', 4),
(4, 'croptop-sirenaB.jpg', 5),
(5, 'crop-nudo.jpg', 6),
(6, 'crop-patilla.jpg', 7),
(7, 'cartera-medialuna.jpg', 8),
(8, 'crop-ondas-corta.jpg', 9),
(9, 'trajedebano.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `producto_talla`
--

CREATE TABLE `producto_talla` (
  `id` int(11) NOT NULL,
  `stock` int(80) NOT NULL,
  `producto_id` int(100) NOT NULL,
  `talla_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto_talla`
--

INSERT INTO `producto_talla` (`id`, `stock`, `producto_id`, `talla_id`) VALUES
(1, 10, 1, 4),
(2, 10, 3, 4),
(3, 10, 4, 4),
(4, 10, 5, 4),
(5, 10, 6, 4),
(6, 10, 7, 4),
(7, 10, 8, 4),
(8, 10, 9, 4),
(9, 10, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tallas`
--

CREATE TABLE `tallas` (
  `id` int(11) NOT NULL,
  `talla` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tallas`
--

INSERT INTO `tallas` (`id`, `talla`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'Talla unica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto_foto`
--
ALTER TABLE `producto_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto_talla`
--
ALTER TABLE `producto_talla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compra_producto`
--
ALTER TABLE `compra_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `producto_foto`
--
ALTER TABLE `producto_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `producto_talla`
--
ALTER TABLE `producto_talla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tallas`
--
ALTER TABLE `tallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;