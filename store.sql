/*
Navicat MySQL Data Transfer

Source Server         : mysql Local
Source Server Version : 100406
Source Host           : localhost:3306
Source Database       : store

Target Server Type    : MYSQL
Target Server Version : 100406
File Encoding         : 65001

Date: 2019-12-03 16:52:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('6', 'Herramientas');
INSERT INTO `categorias` VALUES ('8', 'Carburadores');
INSERT INTO `categorias` VALUES ('9', 'Inyectores');

-- ----------------------------
-- Table structure for monedas
-- ----------------------------
DROP TABLE IF EXISTS `monedas`;
CREATE TABLE `monedas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `moneda` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of monedas
-- ----------------------------
INSERT INTO `monedas` VALUES ('1', '$');
INSERT INTO `monedas` VALUES ('2', 'USD');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT '',
  `id_moneda` int(11) DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pathimage` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('3', 'Juego de HomocinÃ©tica', '6', '', '1', '2200', 'junta-homocinetica.jpg');
INSERT INTO `productos` VALUES ('4', 'Hidrolavadora', '6', '2300w\r\n2 aÃ±os de garantÃ­a', '2', '100', 'hidrolavadora.jpg');
INSERT INTO `productos` VALUES ('5', 'Juego de dados', '6', 'Juego de 24 dados', '1', '599', 'juego-dados.webp');
INSERT INTO `productos` VALUES ('6', 'Carburador Fiat Uno', '8', '', '1', '2500', 'carburador.jpg');
INSERT INTO `productos` VALUES ('9', 'Inyectores', '9', '', '1', '3900', 'inyectores.jpg');
