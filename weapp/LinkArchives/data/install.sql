/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : eyoucms_develop

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-13 14:30:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for #@__weapp_link_archives
-- ----------------------------
DROP TABLE IF EXISTS `#@__weapp_link_archives`;
CREATE TABLE `#@__weapp_link_archives` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '关联文档表',
  `aid` int(10) DEFAULT '0' COMMENT '文档id',
  `link_aid` int(10) DEFAULT '0' COMMENT '关联文档id',
  `add_time` int(11) DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;