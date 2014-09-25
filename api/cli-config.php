<?php
/**
 * Created by PhpStorm.
 * User: kayladnls
 * Date: 9/22/14
 * Time: 3:14 PM
 */

// cli-config.php
use Doctrine\ORM\EntityManager;

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);