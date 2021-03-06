CREATE DATABASE  IF NOT EXISTS `shopImooc`;
USE `shopImooc`;

DROP TABLE IF EXISTS `imooc_admin`;
CREATE TABLE `imooc_admin`(
`id` tinyint unsigned auto_increment key,
`username` varchar(20) not null unique,
`password` char(32) not null,
`email` varchar(50) not null
);

DROP TABLE IF EXISTS`imooc_cate`;
CREATE TABLE `imooc_cate`
(`id` smallint unsigned auto_increment key,
  `cName` varchar(50) unique
);


/*DROP TABLE IF EXISTS `imooc_pro`;
CREATE TABLE `imooc_pro`(
`id` int unsigned auto_incrememt key,
`pName` varchar(50) not null unique,
`pSn`  varchar(50) not null,
`pNum`  int unsigned default 1,
`mprice` decimal(10,2) not null,
`iprice` decimal(10,2) not null,
`pDesc` text,
`pImg` varchar(50) not null,
`pubTime` int unsigned not null,
`isShow` tinyint(1) default 1,
`ishot` tinyint(1) default 0,
`cId` smallint unsigned not null
);
*/
DROP TABLE IF EXISTS `imooc_user`;
CREATE TABLE `imooc_user`(
`id` int unsigned auto_increment key,
`username` varchar(20) not null unique,
`password` char(32)not null,
`sex` enum("man","woman")not null default"woman",
`face`varchar(50)not null,
`regTime` int unsigned not null
);

DROP TABLE IF EXISTS `imooc_album`;
CREATE TABLE `imooc_album`(
`id` int unsigned auto_increment key,
`pid` int unsigned not null,
`albumPath` varchar(50) not null
);