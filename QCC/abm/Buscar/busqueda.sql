-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 11-08-2014 a las 01:04:35
-- Versión del servidor: 5.5.36
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `busqueda`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `ejemplo`
-- 

CREATE TABLE `ejemplo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Volcar la base de datos para la tabla `ejemplo`
-- 

INSERT INTO `ejemplo` VALUES (1, 'cuaderno', 'cuaderno A4 100 hojas');
INSERT INTO `ejemplo` VALUES (2, 'libro', 'libro A4 100 hojas');
INSERT INTO `ejemplo` VALUES (3, 'diccionario', 'diccionario A4 100 hojas');
INSERT INTO `ejemplo` VALUES (4, 'lapiz', 'lapiz 2b');
INSERT INTO `ejemplo` VALUES (5, 'lapicero', 'lapicero color azul');
INSERT INTO `ejemplo` VALUES (6, 'lapicero', 'lapicero color rojo');
INSERT INTO `ejemplo` VALUES (7, 'lapicero', 'lapicero color amarillo');
INSERT INTO `ejemplo` VALUES (8, 'borrador', 'borrador chico color blanco');
INSERT INTO `ejemplo` VALUES (9, 'borrador', 'borrador chico color rojo y azul');
INSERT INTO `ejemplo` VALUES (10, 'borrador', 'borrador grane color rojo y azul');
INSERT INTO `ejemplo` VALUES (11, 'borrador', 'borrador grane color blanco');
INSERT INTO `ejemplo` VALUES (12, 'tajador', 'tajador grande color blanco');
INSERT INTO `ejemplo` VALUES (13, 'tajador', 'tajador grande color azul');
INSERT INTO `ejemplo` VALUES (14, 'tajador', 'tajador grande color verde');
INSERT INTO `ejemplo` VALUES (15, 'tajador', 'tajador grande color amarillo');
INSERT INTO `ejemplo` VALUES (16, 'regla', 'regla grande');
INSERT INTO `ejemplo` VALUES (17, 'regla', 'regla pequeña');
INSERT INTO `ejemplo` VALUES (18, 'corrector', 'corrector faber castell');
INSERT INTO `ejemplo` VALUES (19, 'resaltador', 'resaltador color azul');
INSERT INTO `ejemplo` VALUES (20, 'resaltador', 'resaltador color amarillo');
