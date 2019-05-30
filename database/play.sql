/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : play

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 21/10/2017 22:08:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin_home_menus
-- ----------------------------
DROP TABLE IF EXISTS `admin_home_menus`;
CREATE TABLE `admin_home_menus`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_home_menus
-- ----------------------------
INSERT INTO `admin_home_menus` VALUES (1, 'Session', 'session');
INSERT INTO `admin_home_menus` VALUES (2, '照片', 'pictures');
INSERT INTO `admin_home_menus` VALUES (3, 'calendar', 'calendar');

-- ----------------------------
-- Table structure for admin_menus
-- ----------------------------
DROP TABLE IF EXISTS `admin_menus`;
CREATE TABLE `admin_menus`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin_menus
-- ----------------------------
INSERT INTO `admin_menus` VALUES (1, 0, '菜单', NULL);
INSERT INTO `admin_menus` VALUES (2, 1, '菜单', 'menus');
INSERT INTO `admin_menus` VALUES (3, 0, '相册', '');
INSERT INTO `admin_menus` VALUES (4, 3, '照片', 'pictures');

-- ----------------------------
-- Table structure for pictures
-- ----------------------------
DROP TABLE IF EXISTS `pictures`;
CREATE TABLE `pictures`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(11) NULL DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `source_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 52 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pictures
-- ----------------------------
INSERT INTO `pictures` VALUES (1, 1, 'Other', NULL, '001 (1).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (2, 1, 'Other', NULL, '001 (2).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (3, 1, 'Other', NULL, '001 (4).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (4, 1, 'Other', NULL, '005 (1).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (5, 1, 'Other', NULL, '005.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (6, 1, 'Other', NULL, '029.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (7, 1, 'Other', NULL, '1 (134).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (8, 1, 'Other', NULL, '1 (139).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (9, 1, 'Other', NULL, '1 (141).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (10, 1, 'Other', NULL, '1 (20).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (11, 1, 'Other', NULL, '1 (2d) (29).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (12, 1, 'Other', NULL, '1 (2d) (3).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (13, 1, 'Other', NULL, '1 (2d) (7).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (14, 1, 'Other', NULL, '1 (4).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (15, 1, 'Other', NULL, '1 (40).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (16, 1, 'Other', NULL, '1 (42).jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (17, 1, 'Other', NULL, '263c141c6a.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (18, 1, 'Other', NULL, '3Q8xlBAbelIDuR2dahYrQoMaYeOpa1DEgiv0EdSv.jpeg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (19, 1, 'Captain America', NULL, 'black_widow_in_captain_america_the_winter_soldier-wallpaper-2880x1620.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (20, 1, 'Captain America', NULL, 'captain_america_2-wallpaper-2560x1440.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (21, 1, 'Captain America', NULL, 'captain_america_3_civil_war_iron_man-wallpaper-1920x1080.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (22, 1, 'Captain America', NULL, 'captain_america_civil_war_6-wallpaper-1920x1080.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (23, 1, 'Captain America', NULL, 'captain_america_the_winter_soldier_2-wallpaper-2560x1440.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (24, 1, 'Captain America', NULL, 'civil_war_captain_america_team-wallpaper-1920x1080.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (25, 1, 'Iron Man', NULL, 'iron_man_13-wallpaper-1920x1080.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (26, 1, 'Iron Man', NULL, 'iron_man_3_2013_movie-wallpaper-3554x1999.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (27, 1, 'Iron Man', NULL, 'iron_man_3_iron_man_vs_mandarin-wallpaper-2560x1440.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (28, 1, 'Iron Man', NULL, 'ironman-wallpaper-1920x1080.jpg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (29, 1, 'Action', NULL, 'N0MFLp8uOVuYIzWJt7wehCWqLnXkE5e9B2xW65kz.jpeg', NULL, '2017-09-23 20:05:54');
INSERT INTO `pictures` VALUES (34, 1, 'Action', NULL, '8KpoB0brzZHhEMItwnppoYWXGSMMYVE2LbtsMv8s.jpeg', '2017-09-23 21:33:23', '2017-09-23 21:33:23');
INSERT INTO `pictures` VALUES (35, 1, 'Action', NULL, '0NH5BOFx9NHAqbsNxMXe9ziUb8ax01YOxAGjsRxv.jpeg', '2017-09-23 21:33:28', '2017-09-23 21:33:28');
INSERT INTO `pictures` VALUES (51, 1, 'Action', NULL, 'mV3g4Pz0XiD3giW7ivEUy8ps6B5mOhpdY6qXThoz.jpeg', '2017-10-01 23:18:19', '2017-10-01 23:18:19');
INSERT INTO `pictures` VALUES (50, 1, 'Action', NULL, '8Uc9jXsnQzvq45PtvVFonMrmp6i8LqEs3kub7fAg.jpeg', '2017-09-27 23:23:04', '2017-09-27 23:23:04');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` int(11) NULL DEFAULT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'yo', 1760654101, '756623526@qq.com', '$2y$10$NkNxsJY0bil62JoxDfCA6u3ecBGOktQ5bvy5gpeCUz1zGXG9OTEwO', 'drMgFXG9BffPdzedPZ7JDdsyCJUozjyNTQmtE62bJooiOFGt4MQ8Av1RACFX', '2017-09-02 15:36:12', '2017-09-02 15:36:14');

SET FOREIGN_KEY_CHECKS = 1;
