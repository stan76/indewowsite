/*
Structure MangosWeb
*/

DROP TABLE if exists `account_extend`;
DROP TABLE if exists `account_groups`;
DROP TABLE if exists `account_keys`;
DROP TABLE if exists `online`;
DROP TABLE if exists `pms`;
DROP TABLE if exists `world_entrys`;

-- ----------------------------
-- Table structure for account_extend
-- ----------------------------
CREATE TABLE `account_extend` (
  `account_id` int(11) unsigned NOT NULL,
  `character_id` int(11) unsigned DEFAULT NULL,
  `character_name` varchar(12) DEFAULT NULL,
  `g_id` smallint(5) unsigned NOT NULL DEFAULT '2',
  `avatar` varchar(60) DEFAULT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT '0',
  `homepage` varchar(100) DEFAULT NULL,
  `icq` varchar(12) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `signature` text,
  `hideemail` tinyint(1) NOT NULL DEFAULT '1',
  `hideprofile` tinyint(1) NOT NULL DEFAULT '0',
  `theme` smallint(5) unsigned NOT NULL DEFAULT '0',
  `forum_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `registration_ip` varchar(15) NOT NULL DEFAULT '0.0.0.0',
  `activation_code` varchar(40) DEFAULT NULL,
  `msn` varchar(255) DEFAULT NULL,
  `secretq1` varchar(300) NOT NULL DEFAULT '0',
  `secreta1` varchar(300) NOT NULL DEFAULT '0',
  `secretq2` varchar(300) NOT NULL DEFAULT '0',
  `secreta2` varchar(300) NOT NULL DEFAULT '0',
  `vip` int(1) NOT NULL DEFAULT '0',
  `donator` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for account_groups
-- ----------------------------
CREATE TABLE `account_groups` (
  `g_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `g_title` varchar(32) NOT NULL,
  `g_prefix` char(6) DEFAULT NULL,
  `g_is_admin` tinyint(1) DEFAULT '0',
  `g_is_supadmin` tinyint(1) DEFAULT '0',
  `g_use_search` tinyint(1) DEFAULT '0',
  `g_view_profile` tinyint(1) DEFAULT '0',
  `g_post_new_topics` tinyint(1) DEFAULT '0',
  `g_reply_other_topics` tinyint(1) DEFAULT '0',
  `g_use_attach` tinyint(1) DEFAULT '0',
  `g_edit_own_posts` tinyint(1) DEFAULT '0',
  `g_delete_own_posts` tinyint(1) DEFAULT '0',
  `g_delete_own_topics` tinyint(1) DEFAULT '0',
  `g_forum_moderate` tinyint(1) NOT NULL DEFAULT '0',
  `g_use_pm` tinyint(1) DEFAULT '0',
  `g_gal_view` tinyint(1) NOT NULL DEFAULT '0',
  `g_gal_upload` tinyint(1) DEFAULT '0',
  `g_gal_download` tinyint(1) DEFAULT '0',
  `g_gal_moderate` tinyint(1) DEFAULT '0',
  `g_gal_balanceon` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for account_keys
-- ----------------------------
CREATE TABLE `account_keys` (
  `id` int(11) unsigned NOT NULL,
  `key` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `assign_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Table structure for online
-- ----------------------------
CREATE TABLE `online` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `user_name` varchar(200) NOT NULL DEFAULT 'Guest',
  `user_ip` varchar(15) NOT NULL DEFAULT '0.0.0.0',
  `logged` int(10) NOT NULL DEFAULT '0',
  `currenturl` varchar(255) NOT NULL DEFAULT './',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for pms
-- ----------------------------
CREATE TABLE `pms` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(8) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL,
  `message` text,
  `sender_id` int(8) unsigned NOT NULL DEFAULT '0',
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `sender_ip` varchar(15) DEFAULT '0.0.0.0',
  `showed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for world_entrys
-- ----------------------------
CREATE TABLE `world_entrys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `db_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `last_inc` int(20) NOT NULL,
  `last_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `account_groups` VALUES ('1', 'Visteurs', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0');
INSERT INTO `account_groups` VALUES ('2', 'Membres', null, '0', '0', '1', '1', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '0', '1');
INSERT INTO `account_groups` VALUES ('3', 'Administrateurs', '+', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `account_groups` VALUES ('4', 'Administrateur système', '&#165;', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0');
INSERT INTO `account_groups` VALUES ('5', 'BAN', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `online` VALUES ('19', '0', 'Guest', '127.0.0.1', '1282008596', '/mangosweb/index.php');
INSERT INTO `world_entrys` VALUES ('1', 'character', '0', '0');
INSERT INTO `world_entrys` VALUES ('2', 'item_instance', '0', '0');
INSERT INTO `world_entrys` VALUES ('3', 'mail', '0', '0');

-- ----------------------------
-- Insert account data from "account" table
-- ----------------------------
INSERT INTO `account_extend` (`account_id`) SELECT account.id FROM account;

ALTER TABLE `realmlist` 
ADD `dbinfo` VARCHAR( 355 ) NOT NULL default 'root;mangos;3306;127.0.0.1;mangos;characters' COMMENT 'Database info to THIS row',
ADD `ra_address` VARCHAR( 25 ) NOT NULL default '127.0.0.1',
ADD `ra_port` int(5) NOT NULL default '3443',
ADD `ra_user` VARCHAR( 355 ) NOT NULL default 'root',
ADD `ra_pass` VARCHAR( 355 ) NOT NULL default 'mangos';
