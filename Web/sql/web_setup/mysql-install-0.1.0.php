<?php
$installer = $this;
$installer->startSetup();

$installer->run("
--DROP TABLE IF EXIST {$this->getTable('web')};
CREATE TABLE {$this->getTable('web')}(
	'web_id' int(1) usigned NOT NULL auto_increment,
	'title' varchar(255) NOT NULL default '',
	'filename' varchar(255) NOT NULL default '',
	'content' text NOT NULL default '',
	'status' smallint(6) NOT NULL default '0',
	'created_time' datatime NULL,
	'update_time' datatime NULL,
	PRIMARY KEY ('web_id')
) ENGINE = InnoDB DEFAUT CHARSET=utf8;
");

$installer->endsetup();