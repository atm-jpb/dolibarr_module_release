<?php
/*
 * Script créant et vérifiant que les champs requis s'ajoutent bien
 */

if(!defined('INC_FROM_DOLIBARR')) {
	define('INC_FROM_CRON_SCRIPT', true);

	require('../config.php');

}




dol_include_once('/release/class/release.class.php');

$PDOdb=new TPDOdb;

$o=new TRelease;
$o->init_db_by_vars($PDOdb);

$o=new TReleaseLineLink;
$o->init_db_by_vars($PDOdb);

