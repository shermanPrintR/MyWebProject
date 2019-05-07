/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80013
 Source Host           : localhost:4880
 Source Schema         : productions

 Target Server Type    : MySQL
 Target Server Version : 80013
 File Encoding         : 65001

 Date: 07/05/2019 16:30:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `id` int(20) NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `authority` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES (4, '王五', 'wangwu', '123456', 1);
INSERT INTO `account` VALUES (7, '张三', 'zhang123', '456789', 2);
INSERT INTO `account` VALUES (12, '李四', 'abcd', '654321', 3);

-- ----------------------------
-- Table structure for authority
-- ----------------------------
DROP TABLE IF EXISTS `authority`;
CREATE TABLE `authority`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `department` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `authority` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `authority`(`authority`) USING BTREE,
  INDEX `department`(`department`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of authority
-- ----------------------------
INSERT INTO `authority` VALUES (1, '销售部', 1);
INSERT INTO `authority` VALUES (2, '人事部', 2);
INSERT INTO `authority` VALUES (3, '管理层', 3);

-- ----------------------------
-- Table structure for productions
-- ----------------------------
DROP TABLE IF EXISTS `productions`;
CREATE TABLE `productions`  (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `version` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `power` float(20, 2) NOT NULL,
  `num` int(255) NOT NULL,
  `cntrNo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productions
-- ----------------------------
INSERT INTO `productions` VALUES (1, '直插型', 'ZF3', 0.20, 300, 'A40105');
INSERT INTO `productions` VALUES (2, '蘑菇型', 'ZF4', 0.30, 310, 'A40106');
INSERT INTO `productions` VALUES (5, '大头型', 'ZF5', 0.40, 320, 'A40107');

-- ----------------------------
-- Table structure for staff
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff`  (
  `id` int(20) NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sex` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `department` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `authority` int(10) NULL DEFAULT NULL,
  `phoneNumber` int(20) NULL DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of staff
-- ----------------------------
INSERT INTO `staff` VALUES (4, '王五', '男', '', NULL, 246, '156');
INSERT INTO `staff` VALUES (7, '张三', '男', '', NULL, 46, '55');
INSERT INTO `staff` VALUES (12, '李四', '男', '', NULL, 44, '648');

-- ----------------------------
-- View structure for accountwithname
-- ----------------------------
DROP VIEW IF EXISTS `accountwithname`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `accountwithname` AS select `staff`.`id` AS `id`,`staff`.`name` AS `name`,`account`.`username` AS `username`,`account`.`password` AS `password`,`account`.`authority` AS `authority` from (`staff` join `account`) where (`staff`.`id` = `account`.`id`);

SET FOREIGN_KEY_CHECKS = 1;
