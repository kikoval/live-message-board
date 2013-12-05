<?php

mb_internal_encoding("UTF-8");
setlocale(LC_ALL, 'sk_SK.UTF-8');
date_default_timezone_set('Europe/Bratislava');

session_start();

require 'vendor/autoload.php';
require 'config.php';
require 'entity/Message.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$entity_path = array(__DIR__ .'/entity');
$isDevMode = FALSE;

$connectionParams = array(
    'host' => DB_SERVER,
    'driver' => DB_DRIVER,
    'user' => DB_USER,
    'password' => DB_PASSWORD, 
    'dbname' => DB_NAME,

    'path' => DB_PATH,
    'charset' => 'utf8'
);

$db_config = new \Doctrine\DBAL\Configuration();
$db = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $db_config);

$config = Setup::createAnnotationMetadataConfiguration($entity_path, $isDevMode);
$entityManager = EntityManager::create($connectionParams, $config);

//$db->execute("set names 'utf8'");

$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c/';

?>
