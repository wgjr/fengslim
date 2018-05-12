<?php 
require 'vendor/autoload.php';
require 'app/config/app_autoload.php';

$config = new my_app();

echo $config->setDebug();
$config->setTimeZone();

$app = new \Slim\App;

require 'app/routes/quiz.php';

$app->run();
