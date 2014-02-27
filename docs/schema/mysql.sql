-- admins
DROP TABLE IF EXISTS `ci_admins`;

-- DELETE FROM `ci_admins`

DROP TABLE IF EXISTS `ci_attachments`;
CREATE TABLE IF NOT EXISTS `ci_attachments` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` smallint(10) NOT NULL DEFAULT '0',
  `model` mediumint(10) DEFAULT '0',
  `from` tinyint(1) DEFAULT '0' COMMENT '0:content model,1:cate model',
  `content` int(10) DEFAULT '0',
  `name` varchar(30) DEFAULT NULL,
  `folder` varchar(15) DEFAULT NULL,
  `realname` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `image` tinyint(1) DEFAULT '0',
  `posttime` int(11) DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=innoDB DEFAULT CHARSET=utf8;
-- DELETE FROM `ci_attachments`


DROP TABLE IF EXISTS `ci_backend_settings`;
CREATE TABLE IF NOT EXISTS `ci_backend_settings` (
  `backend_theme` varchar(15) DEFAULT NULL,
  `backend_lang` varchar(10) DEFAULT NULL,
  `backend_root_access` tinyint(1) unsigned DEFAULT '1',
  `backend_access_point` varchar(20) DEFAULT 'admin',
  `backend_title` varchar(100) DEFAULT 'DiliCMS后台管理',
  `backend_logo` varchar(100) DEFAULT 'images/logo.gif',
  `plugin_dev_mode` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0'
) ENGINE=innoDB DEFAULT CHARSET=utf8;
-- DELETE FROM `ci_backend_settings`;
INSERT INTO `ci_backend_settings` (`backend_theme`, `backend_lang`, `backend_root_access`, `backend_access_point`, `backend_title`, `backend_logo`) VALUES ('default', 'zh-cn', 1, '', 'DiliCMS', 'images/logo.gif')