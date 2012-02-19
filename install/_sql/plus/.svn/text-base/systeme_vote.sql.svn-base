/*
Structure Système de vote
*/

DROP TABLE if exists `voting`;
DROP TABLE if exists `voting_points`;

--
-- Definition of table `voting`
--

DROP TABLE IF EXISTS `voting`;
CREATE TABLE `voting` (
  `user_ip` varchar(30) NOT NULL,
  `sites` int(10) unsigned NOT NULL default '0',
  `time` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`user_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Definition of table `voting_points`
--

DROP TABLE IF EXISTS `voting_points`;
CREATE TABLE `voting_points` (
  `id` bigint(20) unsigned NOT NULL,
  `points` smallint(5) unsigned NOT NULL default '0',
  `date` varchar(8) NOT NULL default '20081214',
  `date_points` tinyint(2) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;