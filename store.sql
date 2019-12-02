/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100316
Source Host           : localhost:3306
Source Database       : store

Target Server Type    : MYSQL
Target Server Version : 100316
File Encoding         : 65001

Date: 2019-12-01 23:01:06
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('6', 'Herramientas');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', 'Juego de Dados', '6', '4 Juegos de dados', '1', '220', 'images.jpg');
INSERT INTO `productos` VALUES ('2', 'Hidrolavadora', '6', '2300w ', '2', '100', 'Screenshot_1.png');
