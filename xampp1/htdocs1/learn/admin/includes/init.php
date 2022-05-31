<?php


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', DS . 'xampp1' . DS .'htdocs1' . DS . 'learn' . DS . 'test1-student-app.herokuapp.com');

//defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS .'includes');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS .'admin' . DS .'includes');

require_once("config.php");
require_once("database.php");
require_once("db_extension.php");
require_once("students.php");
require_once("session.php");
require_once("score.php");


?>