<?php
require 'vendor/autoload.php';
require 'bootstrap.php';

$app = new \Slim\Slim();

$app->get("/", function(){
    echo "You haven't arrived, but you're here";
    });

$app->run();
