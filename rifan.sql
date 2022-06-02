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

 Date: 02/06/2022 20:30:04
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
  `light` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ph` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of sensor
-- ----------------------------
INSERT INTO `sensor` VALUES (1, '31', '65', '52050', '6', '2022-01-01', '20:30:22');
INSERT INTO `sensor` VALUES (2, '87', '88', '11294', '4', '2022-01-02', '21:30:22');
INSERT INTO `sensor` VALUES (3, '45', '35', '50020', '4', '2022-01-03', '22:30:22');
INSERT INTO `sensor` VALUES (4, '14', '50', '30342', '4', '2022-01-04', '23:30:22');
INSERT INTO `sensor` VALUES (5, '31', '35', '23175', '6', '2022-01-05', '00:30:22');
INSERT INTO `sensor` VALUES (6, '89', '22', '13035', '6', '2022-01-06', '01:30:22');
INSERT INTO `sensor` VALUES (7, '86', '98', '51152', '5', '2022-01-07', '02:30:22');
INSERT INTO `sensor` VALUES (8, '94', '56', '42513', '5', '2022-01-08', '03:30:22');
INSERT INTO `sensor` VALUES (9, '45', '51', '37154', '6', '2022-01-09', '04:30:22');
INSERT INTO `sensor` VALUES (10, '18', '58', '62579', '5', '2022-01-10', '05:30:22');
INSERT INTO `sensor` VALUES (11, '22', '90', '55873', '5', '2022-01-11', '06:30:22');
INSERT INTO `sensor` VALUES (12, '25', '71', '59313', '4', '2022-01-12', '07:30:22');
INSERT INTO `sensor` VALUES (13, '20', '55', '63137', '6', '2022-01-13', '08:30:22');
INSERT INTO `sensor` VALUES (14, '92', '21', '31992', '4', '2022-01-14', '09:30:22');
INSERT INTO `sensor` VALUES (15, '37', '13', '34387', '5', '2022-01-15', '10:30:22');
INSERT INTO `sensor` VALUES (16, '18', '53', '10687', '4', '2022-01-16', '11:30:22');
INSERT INTO `sensor` VALUES (17, '40', '8', '15555', '4', '2022-01-17', '12:30:22');
INSERT INTO `sensor` VALUES (18, '33', '74', '13530', '4', '2022-01-18', '13:30:22');
INSERT INTO `sensor` VALUES (19, '7', '94', '58359', '5', '2022-01-19', '14:30:22');
INSERT INTO `sensor` VALUES (20, '87', '1', '29957', '5', '2022-01-20', '15:30:22');
INSERT INTO `sensor` VALUES (21, '36', '44', '46068', '5', '2022-01-21', '16:30:22');
INSERT INTO `sensor` VALUES (22, '83', '59', '57400', '4', '2022-01-22', '17:30:22');
INSERT INTO `sensor` VALUES (23, '76', '49', '57159', '6', '2022-01-23', '18:30:22');
INSERT INTO `sensor` VALUES (24, '21', '69', '57627', '4', '2022-01-24', '19:30:22');
INSERT INTO `sensor` VALUES (25, '71', '71', '37415', '5', '2022-01-25', '20:30:22');
INSERT INTO `sensor` VALUES (26, '53', '71', '28375', '4', '2022-01-26', '21:30:22');
INSERT INTO `sensor` VALUES (27, '80', '59', '47227', '6', '2022-01-27', '22:30:22');
INSERT INTO `sensor` VALUES (28, '22', '49', '35473', '6', '2022-01-28', '23:30:22');
INSERT INTO `sensor` VALUES (29, '62', '59', '57525', '5', '2022-01-29', '00:30:22');
INSERT INTO `sensor` VALUES (30, '79', '7', '43445', '4', '2022-01-30', '01:30:22');
INSERT INTO `sensor` VALUES (31, '16', '82', '52332', '6', '2022-01-31', '02:30:22');
INSERT INTO `sensor` VALUES (32, '68', '92', '17395', '4', '2022-02-01', '03:30:22');
INSERT INTO `sensor` VALUES (33, '15', '47', '63126', '5', '2022-02-02', '04:30:22');
INSERT INTO `sensor` VALUES (34, '0', '73', '37212', '6', '2022-02-03', '05:30:22');
INSERT INTO `sensor` VALUES (35, '51', '50', '10693', '6', '2022-02-04', '06:30:22');
INSERT INTO `sensor` VALUES (36, '39', '59', '17718', '6', '2022-02-05', '07:30:22');
INSERT INTO `sensor` VALUES (37, '51', '75', '24528', '5', '2022-02-06', '08:30:22');
INSERT INTO `sensor` VALUES (38, '68', '60', '60683', '5', '2022-02-07', '09:30:22');
INSERT INTO `sensor` VALUES (39, '10', '16', '60333', '6', '2022-02-08', '10:30:22');
INSERT INTO `sensor` VALUES (40, '38', '52', '19707', '6', '2022-02-09', '11:30:22');
INSERT INTO `sensor` VALUES (41, '73', '65', '23750', '6', '2022-02-10', '12:30:22');
INSERT INTO `sensor` VALUES (42, '15', '49', '39599', '6', '2022-02-11', '13:30:22');
INSERT INTO `sensor` VALUES (43, '86', '10', '16579', '4', '2022-02-12', '14:30:22');
INSERT INTO `sensor` VALUES (44, '9', '73', '46207', '4', '2022-02-13', '15:30:22');
INSERT INTO `sensor` VALUES (45, '43', '5', '56231', '4', '2022-02-14', '16:30:22');
INSERT INTO `sensor` VALUES (46, '34', '9', '38722', '5', '2022-02-15', '17:30:22');
INSERT INTO `sensor` VALUES (47, '16', '45', '25285', '6', '2022-02-16', '18:30:22');
INSERT INTO `sensor` VALUES (48, '49', '66', '53859', '4', '2022-02-17', '19:30:22');
INSERT INTO `sensor` VALUES (49, '14', '25', '17508', '5', '2022-02-18', '20:30:22');
INSERT INTO `sensor` VALUES (50, '76', '27', '55567', '4', '2022-02-19', '21:30:22');
INSERT INTO `sensor` VALUES (51, '98', '70', '45394', '5', '2022-02-20', '22:30:22');
INSERT INTO `sensor` VALUES (52, '50', '34', '42379', '6', '2022-02-21', '23:30:22');
INSERT INTO `sensor` VALUES (53, '100', '100', '11285', '4', '2022-02-22', '00:30:22');
INSERT INTO `sensor` VALUES (54, '27', '79', '21651', '6', '2022-02-23', '01:30:22');
INSERT INTO `sensor` VALUES (55, '72', '3', '65302', '5', '2022-02-24', '02:30:22');
INSERT INTO `sensor` VALUES (56, '8', '13', '40520', '6', '2022-02-25', '03:30:22');
INSERT INTO `sensor` VALUES (57, '63', '38', '34054', '4', '2022-02-26', '04:30:22');
INSERT INTO `sensor` VALUES (58, '43', '9', '33612', '5', '2022-02-27', '05:30:22');
INSERT INTO `sensor` VALUES (59, '15', '40', '41907', '6', '2022-02-28', '06:30:22');
INSERT INTO `sensor` VALUES (60, '9', '60', '14804', '6', '2022-03-01', '07:30:22');
INSERT INTO `sensor` VALUES (61, '50', '79', '28698', '5', '2022-03-02', '08:30:22');
INSERT INTO `sensor` VALUES (62, '34', '89', '34380', '4', '2022-03-03', '09:30:22');
INSERT INTO `sensor` VALUES (63, '83', '8', '42893', '4', '2022-03-04', '10:30:22');
INSERT INTO `sensor` VALUES (64, '70', '78', '46021', '6', '2022-03-05', '11:30:22');
INSERT INTO `sensor` VALUES (65, '59', '3', '28444', '5', '2022-03-06', '12:30:22');
INSERT INTO `sensor` VALUES (66, '89', '68', '36470', '5', '2022-03-07', '13:30:22');
INSERT INTO `sensor` VALUES (67, '99', '7', '13143', '5', '2022-03-08', '14:30:22');
INSERT INTO `sensor` VALUES (68, '87', '31', '14205', '6', '2022-03-09', '15:30:22');
INSERT INTO `sensor` VALUES (69, '42', '96', '28209', '4', '2022-03-10', '16:30:22');
INSERT INTO `sensor` VALUES (70, '57', '32', '52142', '6', '2022-03-11', '17:30:22');
INSERT INTO `sensor` VALUES (71, '83', '1', '36847', '6', '2022-03-12', '18:30:22');
INSERT INTO `sensor` VALUES (72, '71', '69', '52358', '5', '2022-03-13', '19:30:22');
INSERT INTO `sensor` VALUES (73, '6', '100', '52867', '4', '2022-03-14', '20:30:22');
INSERT INTO `sensor` VALUES (74, '99', '97', '15612', '5', '2022-03-15', '21:30:22');
INSERT INTO `sensor` VALUES (75, '44', '33', '48062', '6', '2022-03-16', '22:30:22');
INSERT INTO `sensor` VALUES (76, '23', '34', '23888', '6', '2022-03-17', '23:30:22');
INSERT INTO `sensor` VALUES (77, '58', '88', '27306', '5', '2022-03-18', '00:30:22');
INSERT INTO `sensor` VALUES (78, '67', '3', '55136', '5', '2022-03-19', '01:30:22');
INSERT INTO `sensor` VALUES (79, '57', '76', '42041', '6', '2022-03-20', '02:30:22');
INSERT INTO `sensor` VALUES (80, '29', '19', '24135', '6', '2022-03-21', '03:30:22');
INSERT INTO `sensor` VALUES (81, '41', '61', '18676', '4', '2022-03-22', '04:30:22');
INSERT INTO `sensor` VALUES (82, '9', '73', '29963', '6', '2022-03-23', '05:30:22');
INSERT INTO `sensor` VALUES (83, '33', '50', '65442', '5', '2022-03-24', '06:30:22');
INSERT INTO `sensor` VALUES (84, '22', '19', '27371', '6', '2022-03-25', '07:30:22');
INSERT INTO `sensor` VALUES (85, '24', '14', '63773', '5', '2022-03-26', '08:30:22');
INSERT INTO `sensor` VALUES (86, '89', '5', '29679', '4', '2022-03-27', '09:30:22');
INSERT INTO `sensor` VALUES (87, '28', '84', '26401', '4', '2022-03-28', '10:30:22');
INSERT INTO `sensor` VALUES (88, '97', '80', '27806', '4', '2022-03-29', '11:30:22');
INSERT INTO `sensor` VALUES (89, '71', '16', '20121', '5', '2022-03-30', '12:30:22');
INSERT INTO `sensor` VALUES (90, '88', '39', '59132', '5', '2022-03-31', '13:30:22');

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of trash
-- ----------------------------

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
