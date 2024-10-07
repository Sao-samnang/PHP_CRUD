/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : db_comemp

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 07/10/2024 07:53:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tblemp
-- ----------------------------
DROP TABLE IF EXISTS `tblemp`;
CREATE TABLE `tblemp`  (
  `emp_ID` int NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `City` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`emp_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tblemp
-- ----------------------------
INSERT INTO `tblemp` VALUES (4, 'nov', 'Cambodia', 'svay rieng', 'science ', 'Software Dev');
INSERT INTO `tblemp` VALUES (5, 'seth', 'Cambodia', 'svay rieng', 'Science ', 'SS');
INSERT INTO `tblemp` VALUES (6, 'long', 'Cambodia', 'svay rieng', 'science ', 'ss');
INSERT INTO `tblemp` VALUES (7, 'thara', 'Cambodia', 'svay rieng', 'Science ', 'System checking');
INSERT INTO `tblemp` VALUES (8, 'sal', 'Cambodia', 'svay rieng', 'Science ', 'Web Dev');
INSERT INTO `tblemp` VALUES (9, 'nang', 'Cambodia', 'svay rieng', 'Science ', 'web Dev');

SET FOREIGN_KEY_CHECKS = 1;
