/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : rifan

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 04/07/2022 12:45:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sensor_pembibitan
-- ----------------------------
DROP TABLE IF EXISTS `sensor_pembibitan`;
CREATE TABLE `sensor_pembibitan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL DEFAULT current_timestamp,
  `temp_udr` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hum_udr` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temp_tnh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hum_tnh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `light` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `relay` int NOT NULL,
  `date` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2023 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sensor_pembibitan
-- ----------------------------
INSERT INTO `sensor_pembibitan` VALUES (1, '10:50:14', '30.2', '77', '28.2', '88', '1300', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (2, '10:50:18', '32.1', '74', '29.1', '86', '1400', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (3, '10:50:19', '31.2', '73', '28.2', '87', '1300', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (4, '10:50:19', '33.3', '70', '28.3', '88', '1600', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (5, '10:50:20', '34.1', '70', '30.1', '85', '1800', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (7, '10:50:31', '31.3', '73', '28.3', '87', '1300', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (8, '10:50:32', '33.1', '70', '28.1', '88', '1600', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (9, '10:50:33', '34.3', '70', '30.2', '85', '1800', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (10, '10:50:34', '31.2', '73', '28.2', '87', '1300', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (11, '10:50:35', '31.2', '73', '28.2', '87', '1300', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (12, '10:50:35', '33.1', '70', '28.3', '88', '1600', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (13, '10:50:36', '34.1', '70', '30.1', '85', '1800', 0, '2022-06-12');
INSERT INTO `sensor_pembibitan` VALUES (14, '10:50:43', '31.2', '73', '28.2', '87', '1300', 0, '2022-06-12');

-- ----------------------------
-- Table structure for sensor_pertumbuhan
-- ----------------------------
DROP TABLE IF EXISTS `sensor_pertumbuhan`;
CREATE TABLE `sensor_pertumbuhan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL DEFAULT current_timestamp,
  `temp_udr` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hum_udr` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temp_tnh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hum_tnh` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ph` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `light` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `relay` int NOT NULL,
  `time` time NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sensor_pertumbuhan
-- ----------------------------
INSERT INTO `sensor_pertumbuhan` VALUES (1, '2022-06-12', '30.2', '77', '28.2', '88', '6.2', '1300', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (2, '2022-06-12', '32.1', '74', '29.2', '86', '6.2', '1400', 0, '12:16:42');
INSERT INTO `sensor_pertumbuhan` VALUES (3, '2022-06-03', '30.5', '77', '28.6', '88', '6.3', '1300', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (4, '2022-06-04', '32.2', '74', '29.3', '86', '6.7', '1400', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (5, '2022-06-05', '33.2', '73', '29.9', '85', '5.6', '1700', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (6, '2022-06-06', '31.2', '76', '28.3', '86', '6.4', '1450', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (7, '2022-06-07', '30.8', '78', '28.8', '88', '6.4', '1300', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (8, '2022-06-08', '34.2', '73', '30.3', '82', '6.1', '1600', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (9, '2022-06-09', '30.5', '77', '28.6', '88', '6.3', '1300', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (10, '2022-06-10', '32.2', '74', '29.3', '86', '6.7', '1400', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (11, '2022-06-11', '33.2', '73', '29.9', '85', '5.6', '1700', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (12, '2022-06-12', '31.2', '76', '28.3', '86', '6.4', '1450', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (13, '2022-06-13', '30.8', '78', '28.8', '88', '6.4', '1300', 0, '12:16:39');
INSERT INTO `sensor_pertumbuhan` VALUES (14, '2022-06-14', '34.2', '73', '30.3', '82', '6.1', '1600', 0, '12:16:39');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('rifan', '$2y$10$FepqGunkP/t0C/rfH9x.CuAos6sxjgkElW2vL4lz30QdN5PXUu3b2');

SET FOREIGN_KEY_CHECKS = 1;
