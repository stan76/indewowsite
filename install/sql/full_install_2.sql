/*
SQLyog Community- MySQL GUI v8.22 
MySQL - 5.1.38-community-log : Database - realmd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`realmd` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `realmd`;

/*Table structure for table `acc_creation_captcha` */

DROP TABLE IF EXISTS `acc_creation_captcha`;

CREATE TABLE `acc_creation_captcha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(200) NOT NULL DEFAULT '',
  `key` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `account_groups` */

DROP TABLE IF EXISTS `account_groups`;

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

/*Data for the table `account_groups` */

LOCK TABLES `account_groups` WRITE;

insert  into `account_groups`(`g_id`,`g_title`,`g_prefix`,`g_is_admin`,`g_is_supadmin`,`g_use_search`,`g_view_profile`,`g_post_new_topics`,`g_reply_other_topics`,`g_use_attach`,`g_edit_own_posts`,`g_delete_own_posts`,`g_delete_own_topics`,`g_forum_moderate`,`g_use_pm`,`g_gal_view`,`g_gal_upload`,`g_gal_download`,`g_gal_moderate`,`g_gal_balanceon`) values (1,'Visiteurs',NULL,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0),(2,'Membres',NULL,0,0,1,1,1,1,1,1,1,0,0,1,1,1,1,0,1),(3,'Administrateurs','+',1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0),(4,'Admins syst&egrave;me','&#165;',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0),(5,'BAN',NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

UNLOCK TABLES;

/*Table structure for table `account_keys` */

DROP TABLE IF EXISTS `account_keys`;

CREATE TABLE `account_keys` (
  `id` int(11) unsigned NOT NULL,
  `key` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `assign_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


/*Table structure for table `account_pass` */

DROP TABLE IF EXISTS `account_pass`;

CREATE TABLE `account_pass` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identifier',
  `username` varchar(16) NOT NULL DEFAULT '',
  `password` varchar(28) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='Account System';

/*Table structure for table `ajax_chat_bans` */

DROP TABLE IF EXISTS `ajax_chat_bans`;

CREATE TABLE `ajax_chat_bans` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Table structure for table `ajax_chat_invitations` */

DROP TABLE IF EXISTS `ajax_chat_invitations`;

CREATE TABLE `ajax_chat_invitations` (
  `userID` int(11) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Table structure for table `ajax_chat_messages` */

DROP TABLE IF EXISTS `ajax_chat_messages`;

CREATE TABLE `ajax_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `text` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Table structure for table `ajax_chat_online` */

DROP TABLE IF EXISTS `ajax_chat_online`;

CREATE TABLE `ajax_chat_online` (
  `userID` int(11) NOT NULL,
  `userName` varchar(64) COLLATE utf8_bin NOT NULL,
  `userRole` int(1) NOT NULL,
  `channel` int(11) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ip` varbinary(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Table structure for table `donations_template` */

DROP TABLE IF EXISTS `donations_template`;

CREATE TABLE `donations_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donation` varchar(255) NOT NULL,
  `items` varchar(4000) NOT NULL,
  `currency` varchar(3) NOT NULL,
  `description` varchar(255) NOT NULL,
  `itemset` varchar(1000) NOT NULL,
  `realm` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `f_attachs` */

DROP TABLE IF EXISTS `f_attachs`;

CREATE TABLE `f_attachs` (
  `attach_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attach_file` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `attach_location` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `attach_hits` int(10) NOT NULL DEFAULT '0',
  `attach_date` int(10) NOT NULL,
  `attach_tid` int(10) unsigned NOT NULL DEFAULT '0',
  `attach_member_id` int(8) unsigned NOT NULL,
  `attach_filesize` int(10) unsigned NOT NULL,
  PRIMARY KEY (`attach_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `f_categories` */

DROP TABLE IF EXISTS `f_categories`;

CREATE TABLE `f_categories` (
  `cat_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT 'New Category',
  `cat_disp_position` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `f_categories` */

LOCK TABLES `f_categories` WRITE;

insert  into `f_categories`(`cat_id`,`cat_name`,`cat_disp_position`) values (1,'News',1),(2,'BugTracker',2),(3,'F.A.Q.s',3),(7,'Discussion générale',4),(10,'Support forums',5);

UNLOCK TABLES;

/*Table structure for table `f_forums` */

DROP TABLE IF EXISTS `f_forums`;

CREATE TABLE `f_forums` (
  `forum_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(255) NOT NULL DEFAULT 'New forum',
  `forum_desc` varchar(255) DEFAULT NULL,
  `redirect_url` varchar(200) DEFAULT NULL,
  `moderators` varchar(255) DEFAULT NULL,
  `num_topics` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `last_topic_id` int(10) unsigned DEFAULT NULL,
  `disp_position` smallint(6) NOT NULL DEFAULT '0',
  `quick_reply` tinyint(1) NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`forum_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `f_forums` */

LOCK TABLES `f_forums` WRITE;

insert  into `f_forums`(`forum_id`,`forum_name`,`forum_desc`,`redirect_url`,`moderators`,`num_topics`,`num_posts`,`last_topic_id`,`disp_position`,`quick_reply`,`closed`,`hidden`,`cat_id`) values (1,'News','',NULL,NULL,1,1,1,1,0,0,0,1),(2,'BugTracker','',NULL,NULL,0,0,NULL,1,0,0,0,2),(3,'F.A.Q.s','',NULL,NULL,0,0,NULL,1,0,0,0,3),(7,'Discussion générale','',NULL,NULL,0,0,NULL,1,0,0,0,4),(10,'Support forums','',NULL,NULL,0,0,NULL,1,0,0,0,5);

UNLOCK TABLES;

/*Table structure for table `f_markread` */

DROP TABLE IF EXISTS `f_markread`;

CREATE TABLE `f_markread` (
  `marker_member_id` int(8) unsigned NOT NULL DEFAULT '0',
  `marker_forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  `marker_last_update` int(10) unsigned NOT NULL DEFAULT '0',
  `marker_unread` smallint(5) NOT NULL DEFAULT '0',
  `marker_topics_read` text NOT NULL,
  `marker_last_cleared` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `marker_forum_id` (`marker_forum_id`,`marker_member_id`),
  KEY `marker_member_id` (`marker_member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `f_posts` */

DROP TABLE IF EXISTS `f_posts`;

CREATE TABLE `f_posts` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(12) NOT NULL,
  `poster_id` int(8) unsigned NOT NULL DEFAULT '0',
  `poster_ip` varchar(15) DEFAULT NULL,
  `poster_character_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `edited` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(30) DEFAULT NULL,
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `f_posts` */

LOCK TABLES `f_posts` WRITE;

insert  into `f_posts`(`post_id`,`poster`,`poster_id`,`poster_ip`,`poster_character_id`,`message`,`posted`,`edited`,`edited_by`,`topic_id`) values (1,'Admin',5,'127.0.0.1',1,'<font color=\"green\"><b>-Le site est maintenant traduit à 100% !<br />\r\n-Tout les scripts sont maintenant fonctionnels avec la version &quot;3.3.3a&quot; de World of Warcraft.<br />\r\n-Le site à été nettoyé à 100%, il ne pèse plus que 11mo décompressé !<br />\r\n-La racine du site a été réorganisée et améliorée.<br />\r\n-Le site comporte maintenant deux nouveaux modules citez ci-dessous.<br />\r\n-L\'interface du site à grandement changé (Panneau d\'admin; Gestion de compte; etc)<br />\r\n-La création de compte pour l\'Alpha Cataclysm est disponible !<br />\r\n-Pour la suite, je vous laisserais découvrir et donné votre avis !</b></font>',1275098207,NULL,NULL,1);

UNLOCK TABLES;

/*Table structure for table `f_topics` */

DROP TABLE IF EXISTS `f_topics`;

CREATE TABLE `f_topics` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_poster` varchar(12) NOT NULL,
  `topic_poster_id` int(8) unsigned NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `topic_posted` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_poster` varchar(200) DEFAULT NULL,
  `num_views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_replies` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `redirect_url` varchar(200) DEFAULT NULL,
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `f_topics` */

LOCK TABLES `f_topics` WRITE;

insert  into `f_topics`(`topic_id`,`topic_poster`,`topic_poster_id`,`topic_name`,`topic_posted`,`last_post`,`last_post_id`,`last_poster`,`num_views`,`num_replies`,`closed`,`sticky`,`redirect_url`,`forum_id`) values (1,'Admin',5,'MangosWeb révision 3.0',1275098207,1275098207,1,'Admin',1,1,0,0,NULL,1);

UNLOCK TABLES;

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `comment` text NOT NULL,
  `autor` text NOT NULL,
  `date` date NOT NULL,
  `cat` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=cp1251 ROW_FORMAT=DYNAMIC;

/*Data for the table `gallery` */

LOCK TABLES `gallery` WRITE;

insert  into `gallery`(`id`,`img`,`comment`,`autor`,`date`,`cat`) values (1,'easy_mangos.jpg','Easy-MaNGOS','MangosWeb','2010-05-29','screenshot');

UNLOCK TABLES;

/*Table structure for table `gallery_ssotd` */

DROP TABLE IF EXISTS `gallery_ssotd`;

CREATE TABLE `gallery_ssotd` (
  `image` varchar(50) NOT NULL,
  `date` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `gallery_ssotd` */

LOCK TABLES `gallery_ssotd` WRITE;

insert  into `gallery_ssotd`(`image`,`date`) values ('easy_mangos.jpg','10.05.29');

UNLOCK TABLES;

/*Table structure for table `online` */

DROP TABLE IF EXISTS `online`;

CREATE TABLE `online` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `user_name` varchar(200) NOT NULL DEFAULT 'Guest',
  `user_ip` varchar(15) NOT NULL DEFAULT '0.0.0.0',
  `logged` int(10) NOT NULL DEFAULT '0',
  `currenturl` varchar(255) NOT NULL DEFAULT './',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Table structure for table `paypal_cart_info` */

DROP TABLE IF EXISTS `paypal_cart_info`;

CREATE TABLE `paypal_cart_info` (
  `txnid` varchar(30) NOT NULL DEFAULT '',
  `itemname` varchar(255) NOT NULL DEFAULT '',
  `itemnumber` varchar(50) DEFAULT NULL,
  `os0` varchar(20) DEFAULT NULL,
  `on0` varchar(50) DEFAULT NULL,
  `os1` varchar(20) DEFAULT NULL,
  `on1` varchar(50) DEFAULT NULL,
  `quantity` char(3) NOT NULL DEFAULT '',
  `invoice` varchar(255) NOT NULL DEFAULT '',
  `custom` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `paypal_payment_info` */

DROP TABLE IF EXISTS `paypal_payment_info`;

CREATE TABLE `paypal_payment_info` (
  `firstname` varchar(100) NOT NULL DEFAULT '',
  `lastname` varchar(100) NOT NULL DEFAULT '',
  `buyer_email` varchar(100) NOT NULL DEFAULT '',
  `street` varchar(100) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `state` char(3) NOT NULL DEFAULT '',
  `zipcode` varchar(11) NOT NULL DEFAULT '',
  `memo` varchar(255) DEFAULT NULL,
  `itemname` varchar(255) DEFAULT NULL,
  `itemnumber` varchar(50) DEFAULT NULL,
  `os0` varchar(20) DEFAULT NULL,
  `on0` varchar(50) DEFAULT NULL,
  `os1` varchar(20) DEFAULT NULL,
  `on1` varchar(50) DEFAULT NULL,
  `quantity` char(3) DEFAULT NULL,
  `paymentdate` varchar(50) NOT NULL DEFAULT '',
  `paymenttype` varchar(10) NOT NULL DEFAULT '',
  `txnid` varchar(30) NOT NULL DEFAULT '',
  `mc_gross` varchar(6) NOT NULL DEFAULT '',
  `mc_fee` varchar(5) NOT NULL DEFAULT '',
  `paymentstatus` varchar(15) NOT NULL DEFAULT '',
  `pendingreason` varchar(10) DEFAULT NULL,
  `txntype` varchar(10) NOT NULL DEFAULT '',
  `tax` varchar(10) DEFAULT NULL,
  `mc_currency` varchar(5) NOT NULL DEFAULT '',
  `reasoncode` varchar(20) NOT NULL DEFAULT '',
  `custom` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(20) NOT NULL DEFAULT '',
  `datecreation` date NOT NULL DEFAULT '0000-00-00',
  `item_given` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `paypal_subscription_info` */

DROP TABLE IF EXISTS `paypal_subscription_info`;

CREATE TABLE `paypal_subscription_info` (
  `subscr_id` varchar(255) NOT NULL DEFAULT '',
  `sub_event` varchar(50) NOT NULL DEFAULT '',
  `subscr_date` varchar(255) NOT NULL DEFAULT '',
  `subscr_effective` varchar(255) NOT NULL DEFAULT '',
  `period1` varchar(255) NOT NULL DEFAULT '',
  `period2` varchar(255) NOT NULL DEFAULT '',
  `period3` varchar(255) NOT NULL DEFAULT '',
  `amount1` varchar(255) NOT NULL DEFAULT '',
  `amount2` varchar(255) NOT NULL DEFAULT '',
  `amount3` varchar(255) NOT NULL DEFAULT '',
  `mc_amount1` varchar(255) NOT NULL DEFAULT '',
  `mc_amount2` varchar(255) NOT NULL DEFAULT '',
  `mc_amount3` varchar(255) NOT NULL DEFAULT '',
  `recurring` varchar(255) NOT NULL DEFAULT '',
  `reattempt` varchar(255) NOT NULL DEFAULT '',
  `retry_at` varchar(255) NOT NULL DEFAULT '',
  `recur_times` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `payment_txn_id` varchar(50) NOT NULL DEFAULT '',
  `subscriber_emailaddress` varchar(255) NOT NULL DEFAULT '',
  `datecreation` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `pms` */

DROP TABLE IF EXISTS `pms`;

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

/*Table structure for table `site_regkeys` */

DROP TABLE IF EXISTS `site_regkeys`;

CREATE TABLE `site_regkeys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL,
  `used` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `voting` */

DROP TABLE IF EXISTS `voting`;

CREATE TABLE `voting` (
  `user_ip` varchar(30) NOT NULL,
  `sites` int(10) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `voting_points` */

DROP TABLE IF EXISTS `voting_points`;

CREATE TABLE `voting_points` (
  `id` bigint(20) unsigned NOT NULL,
  `points` smallint(5) unsigned NOT NULL DEFAULT '0',
  `date` varchar(8) NOT NULL DEFAULT '20081214',
  `date_points` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `world_entrys` */

DROP TABLE IF EXISTS `world_entrys`;

CREATE TABLE `world_entrys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `db_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `last_inc` int(20) NOT NULL,
  `last_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `world_entrys` */

LOCK TABLES `world_entrys` WRITE;

insert  into `world_entrys`(`id`,`db_name`,`last_inc`,`last_id`) values (1,'character',0,0),(2,'item_instance',0,0),(3,'mail',0,0);

UNLOCK TABLES;

ALTER TABLE `realmlist` ADD `dbinfo` VARCHAR( 355 ) NOT NULL default 'root;mangos;3306;127.0.0.1;mangos;characters' COMMENT 'Database info to THIS row';

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;