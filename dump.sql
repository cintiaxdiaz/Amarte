-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 02:14 AM
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
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `subtotal` int(50) NOT NULL,
  `costo_envio` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'CREADO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compra`
--

INSERT INTO `compra` (`id`, `nombre`, `rut`, `direccion`, `telefono`, `correo`, `subtotal`, `costo_envio`, `total`, `estado`) VALUES
(1, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 15990, 10000, 25990, 'Creando'),
(2, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 15990, 10000, 25990, 'Creando'),
(3, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 15990, 10000, 25990, 'Creando'),
(4, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 15990, 10000, 25990, 'Creando'),
(5, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 12000, 10000, 22000, 'Creando'),
(6, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 12000, 10000, 22000, 'Creando'),
(7, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 12000, 10000, 22000, 'Creando'),
(8, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 12000, 10000, 22000, 'Creando'),
(9, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 24000, 10000, 34000, 'Creando'),
(10, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 24000, 10000, 34000, 'Creando'),
(11, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 24000, 10000, 34000, 'Creando'),
(12, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 48000, 10000, 58000, 'Creando'),
(13, 'cintia', '265688578', 'santiago', '+56987015736', 'cin@gmail.com', 60000, 10000, 70000, 'CREADO');

-- --------------------------------------------------------

--
-- Table structure for table `compra_producto`
--

CREATE TABLE `compra_producto` (
  `id` int(11) NOT NULL,
  `compra_id` int(100) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `precio` int(25) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compra_producto`
--

INSERT INTO `compra_producto` (`id`, `compra_id`, `producto_id`, `precio`, `sku`, `cantidad`) VALUES
(1, 4, 2, 25000, 'ctr', 0),
(2, 4, 3, 25020, 'ctr1', 0),
(3, 5, 1, 12000, 'ct01', 0),
(4, 6, 1, 12000, 'ct01', 0),
(5, 7, 1, 12000, 'ct01', 0),
(6, 8, 1, 12000, 'ct01', 0),
(7, 9, 1, 12000, 'ct01', 0),
(8, 9, 3, 12000, 'crf01', 0),
(9, 10, 1, 12000, 'ct01', 0),
(10, 10, 3, 12000, 'crf01', 0),
(11, 11, 1, 12000, 'ct01', 0),
(12, 11, 3, 12000, 'crf01', 0),
(13, 12, 1, 12000, 'ct01', 2),
(14, 12, 3, 12000, 'crf01', 2),
(15, 13, 1, 12000, 'ct01', 2),
(16, 13, 3, 12000, 'crf01', 3);

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
(10, 'Bikini', 28000, 'Hermosos bikinis para disfrutar en la playa.', 5, 'Lana antialergica', 'tdb01', 'Variedad de colores y tallas.'),
(11, 'Cartera burdeo', 25000, 'Hermosa cartera tejida a ganchiilo.', 5, 'Trapillo', 'crt02', 'Tejida con trapillo, grosor medio.'),
(12, 'Conjunto blue', 55000, 'Conjunto tejido playero', 5, 'lana', 'cjto01', 'Este hermoso conjunto en talla S-M bajo pedido.'),
(13, 'Top-Crazy', 26900, 'Crazy top, de copas en color blanco', 5, 'Lana', 'ct05', 'Tallas S-M');

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
(9, 'trajedebano.jpg', 10),
(10, 'cartera-burdeo.png', 11),
(11, 'conjuntotejido.png', 12),
(12, 'top-crazy.jpg', 13);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `compra_producto`
--
ALTER TABLE `compra_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `producto_foto`
--
ALTER TABLE `producto_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
