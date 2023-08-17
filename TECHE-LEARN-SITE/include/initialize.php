<?php
//define the core paths
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'caiwl');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once("config.php");
require_once("function.php");
require_once("session.php");
require_once("accounts.php"); 
require_once("lessons.php");
require_once("pastpaper.php");
require_once("exercises.php"); 
require_once("autonumbers.php"); 
include_once("students.php"); 
//load the database connection
require_once("database.php");
?>
