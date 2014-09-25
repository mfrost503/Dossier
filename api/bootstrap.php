<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 9/22/14
 * Time: 4:27 PM
 */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/Entities"), $isDevMode);

// database configuration parameters
$conn = array(
    'dbname' => 'dossier',
    'user' => 'root',
    'password' => 'Dayn5wt0',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);