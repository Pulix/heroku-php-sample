<?php

require_once __DIR__ . '/../vendor/autoload.php';

$logger = new \Project\Logger();
$controller = new \Project\Controller();

$app = new Project\App($controller, $logger);
$app->run();
