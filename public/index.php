<?php
/**
 * Error php serve
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__DIR__));
require(ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

require (ROOT . DIRECTORY_SEPARATOR . 'router' . DIRECTORY_SEPARATOR . 'route.php');
