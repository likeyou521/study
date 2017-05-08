/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-05-08 19:14:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `comment` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', 'm mark');
INSERT INTO `article` VALUES ('2', '2', 'm mike');
INSERT INTO `article` VALUES ('3', '4', 'm maike');
INSERT INTO `article` VALUES ('4', '5', 'm Nancy');
INSERT INTO `article` VALUES ('5', '6', 'm Bob');
INSERT INTO `article` VALUES ('6', '7', 'm christine');
