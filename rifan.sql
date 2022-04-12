/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : rifan

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 12/04/2022 23:46:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sensor
-- ----------------------------
DROP TABLE IF EXISTS `sensor`;
CREATE TABLE `sensor`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `hum` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `temp` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bh1750` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ph` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sensor
-- ----------------------------
INSERT INTO `sensor` VALUES (1, '1', '1', '1', '1', '2022-01-28 22:52:00');
INSERT INTO `sensor` VALUES (2, '1', '1', '1', '1', '2022-01-28 22:52:00');
INSERT INTO `sensor` VALUES (3, '27', '29', '24', '28', '2022-01-28 22:55:00');
INSERT INTO `sensor` VALUES (4, '27', '29', '24', '28', '2022-01-28 22:55:00');
INSERT INTO `sensor` VALUES (5, '25', '14', '13', '38', '2022-01-28 22:55:00');
INSERT INTO `sensor` VALUES (6, '22', '93', '73', '26', '2022-01-28 22:56:00');
INSERT INTO `sensor` VALUES (7, '68', '20', '15000', '6.5', '2022-04-02 00:18:31');
INSERT INTO `sensor` VALUES (8, '75', '27', '12500', '5.7', '2022-04-02 00:26:19');

-- ----------------------------
-- Table structure for trash
-- ----------------------------
DROP TABLE IF EXISTS `trash`;
CREATE TABLE `trash`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `hum` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `temp` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bh1750` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ph` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of trash
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
