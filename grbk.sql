/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : grbk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-29 15:36:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for adminer
-- ----------------------------
DROP TABLE IF EXISTS `adminer`;
CREATE TABLE `adminer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(32) NOT NULL COMMENT '管理员账号',
  `pass` varchar(32) NOT NULL COMMENT '管理员密码',
  `addtime` timestamp NULL DEFAULT NULL COMMENT '管理员登陆时间',
  `status` tinyint(3) DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adminer
-- ----------------------------
INSERT INTO `adminer` VALUES ('1', 'admin', '', null, '0');
INSERT INTO `adminer` VALUES ('3', 'qwer', 'd8578edf8458ce06fbc5bb76a58c5ca4', null, null);
INSERT INTO `adminer` VALUES ('4', 'nihao', '02c75fb22c75b23dc963c7eb91a062cc', null, null);
INSERT INTO `adminer` VALUES ('6', 'aa', 'd8578edf8458ce06fbc5bb76a58c5ca4', null, null);
INSERT INTO `adminer` VALUES ('7', 'abusdha', 'fe4c5295f954ecc939a2a6900bbaaab1', null, null);

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `userid` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL COMMENT '文章详情的id',
  `articleType` varchar(16) NOT NULL COMMENT '栏目',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '发布时间',
  `status` tinyint(3) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '0', null, 'wqewqe', '2017-06-21 23:20:00', '0');

-- ----------------------------
-- Table structure for articletype
-- ----------------------------
DROP TABLE IF EXISTS `articletype`;
CREATE TABLE `articletype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '类别id',
  `title` varchar(64) NOT NULL COMMENT '类别名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articletype
-- ----------------------------
INSERT INTO `articletype` VALUES ('1', '编程语言');
INSERT INTO `articletype` VALUES ('2', '软件设计');
INSERT INTO `articletype` VALUES ('3', 'Web前端');

-- ----------------------------
-- Table structure for article_discusstab
-- ----------------------------
DROP TABLE IF EXISTS `article_discusstab`;
CREATE TABLE `article_discusstab` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `ArticleId` int(11) NOT NULL COMMENT '文章id',
  `discussID` int(11) NOT NULL COMMENT '评论id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_discusstab
-- ----------------------------

-- ----------------------------
-- Table structure for collection
-- ----------------------------
DROP TABLE IF EXISTS `collection`;
CREATE TABLE `collection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL COMMENT '收藏id',
  `ArticleId` int(11) NOT NULL COMMENT '文章id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collection
-- ----------------------------

-- ----------------------------
-- Table structure for contents
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(32) NOT NULL COMMENT '用户id',
  `picname` varchar(255) DEFAULT NULL,
  `author` char(30) DEFAULT NULL,
  `content` text NOT NULL COMMENT '文章内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contents
-- ----------------------------

-- ----------------------------
-- Table structure for discusstab
-- ----------------------------
DROP TABLE IF EXISTS `discusstab`;
CREATE TABLE `discusstab` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论人',
  `content` text NOT NULL COMMENT '评论内容',
  `disTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '评论时间',
  `status` tinyint(3) NOT NULL,
  `articleid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of discusstab
-- ----------------------------

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL COMMENT '用户id',
  `uname` varchar(255) NOT NULL COMMENT '用户名',
  `behaviour` char(255) DEFAULT NULL,
  `lastTime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '最后一次登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `uid` int(10) unsigned DEFAULT NULL COMMENT '用户详情表的id',
  `account` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `phone` bigint(20) NOT NULL COMMENT '电话',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `userid` int(11) NOT NULL,
  `uname` varchar(32) NOT NULL COMMENT '用户名',
  `age` int(11) DEFAULT NULL COMMENT '年龄',
  `sex` tinyint(4) DEFAULT NULL COMMENT '性别',
  `pic` varchar(255) DEFAULT NULL COMMENT '图片',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `enrolltime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
