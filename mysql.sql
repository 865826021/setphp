/*
Navicat MySQL Data Transfer
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `set_menu`
-- ----------------------------
DROP TABLE IF EXISTS `set_menu`;
CREATE TABLE `set_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(64) NOT NULL DEFAULT '',
  `url` varchar(128) NOT NULL DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of set_menu
-- ----------------------------

-- ----------------------------
-- Table structure for `set_menucate`
-- ----------------------------
DROP TABLE IF EXISTS `set_menucate`;
CREATE TABLE `set_menucate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of set_menucate
-- ----------------------------

-- ----------------------------
-- Table structure for `set_options`
-- ----------------------------
DROP TABLE IF EXISTS `set_options`;
CREATE TABLE `set_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `val` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of set_options
-- ----------------------------
INSERT INTO `set_options` VALUES ('1', 'webtitle', 'title');
INSERT INTO `set_options` VALUES ('2', 'companyname', 'company');
INSERT INTO `set_options` VALUES ('3', 'siteurl', '');
INSERT INTO `set_options` VALUES ('4', 'keywords', 'keywords');
INSERT INTO `set_options` VALUES ('5', 'description', 'description');
INSERT INTO `set_options` VALUES ('6', 'admin_email', '');
INSERT INTO `set_options` VALUES ('7', 'language', '1');

-- ----------------------------
-- Table structure for `set_postcate`
-- ----------------------------
DROP TABLE IF EXISTS `set_postcate`;
CREATE TABLE `set_postcate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of set_postcate
-- ----------------------------

-- ----------------------------
-- Table structure for `set_posts`
-- ----------------------------
DROP TABLE IF EXISTS `set_posts`;
CREATE TABLE `set_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '1',
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `thumbnail` varchar(128) NOT NULL DEFAULT '',
  `description` varchar(521) NOT NULL DEFAULT '',
  `url2` varchar(256) NOT NULL DEFAULT '#',
  `author` int(11) NOT NULL DEFAULT '1',
  `time` varchar(16) NOT NULL DEFAULT '0',
  `ctime` varchar(16) NOT NULL DEFAULT '0',
  `empty` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of set_posts
-- ----------------------------

-- ----------------------------
-- Table structure for `set_users`
-- ----------------------------
DROP TABLE IF EXISTS `set_users`;
CREATE TABLE `set_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `login_ip` varchar(32) NOT NULL DEFAULT '',
  `register_time` int(11) NOT NULL DEFAULT '0',
  `login_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of set_users
-- ----------------------------
