{\rtf1\ansi\ansicpg1252\cocoartf1404\cocoasubrtf470
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.4.10\
-- http://www.phpmyadmin.net\
--\
-- Host: localhost:3306\
-- Generation Time: Jun 22, 2016 at 02:47 AM\
-- Server version: 5.5.42\
-- PHP Version: 7.0.0\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `zutura`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `usuarios`\
--\
\
CREATE TABLE `usuarios` (\
  `id` smallint(6) NOT NULL,\
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,\
  `apellido` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,\
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,\
  `clave` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,\
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL\
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;\
\
--\
-- Dumping data for table `usuarios`\
--\
\
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `clave`, `avatar`) VALUES\
(2, 'oe', 'oe', 'oe@oe.com', 'abcd', 'imagenes/turnaround A3 gris.jpg'),\
(4, 'alex', 'sepulveda', 'johnnyalexandersepulveda@gmail.com', 'abcd', 'imagenes/Captura de pantalla 2016-05-20 a las 1.03.02.png'),\
(10, 'carlos', 'castro', 'carlos@gmail.com', 'abcd', 'imagenes/Captura de pantalla 2016-06-12 a las 23.40.35.png'),\
(12, 'yeni', 'blandon', 'yeni94kiss@hotmail.com', 'yeni', 'imagenes/Captura de pantalla 2016-05-18 a las 17.05.56.png'),\
(16, 'sebas', 'holis', 'sebas@sebas.com', 'abcd', 'imagenes/Captura de pantalla 2016-05-20 a las 1.08.04.png'),\
(17, '', '', '', '', ''),\
(18, 'yeni', 'la brava', 'brava@gmail.com', 'abcd', 'imagenes/Captura de pantalla 2016-05-11 a las 0.49.07.png'),\
(19, '', '', '', '', ''),\
(20, 'caila', 'lopez', 'caila@caila.net', 'abcd', 'imagenes/Captura de pantalla 2016-05-11 a las 0.49.17.png'),\
(21, '', '', '', '', 'imagenes/'),\
(22, '', '', '', '', 'imagenes/'),\
(23, '', '', '', '', 'imagenes/'),\
(24, '', '', '', '', 'imagenes/'),\
(28, 'kjhgas', '', 'perez@gamil.com', 'abcd', 'imagenes/Captura de pantalla 2016-05-20 a las 1.03.02.png'),\
(29, '', '', '', '', ''),\
(30, '', '', '', '', ''),\
(31, 'brolin', 'lksajdf', 'jasr@gmail.com', 'abcd', 'imagenes/Captura de pantalla 2016-06-12 a las 23.40.35.png'),\
(32, '', '', '', '', ''),\
(33, '', '', '', '', ''),\
(34, 'camilo', 'castro', 'castro@castro.com', 'abcd', 'imagenes/1.png'),\
(35, '', '', '', '', ''),\
(36, '', '', '', '', ''),\
(37, 'andres', 'aristizabal', 'andrew78@misena.edu.co', '12345', 'imagenes/2.png');\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `usuarios`\
--\
ALTER TABLE `usuarios`\
  ADD PRIMARY KEY (`id`);\
\
--\
-- AUTO_INCREMENT for dumped tables\
--\
\
--\
-- AUTO_INCREMENT for table `usuarios`\
--\
ALTER TABLE `usuarios`\
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;}