<?php

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Mvc\Controllers\HomeControllers;



$app = AppFactory::create();

// Define app routes
$app->get('/', HomeControllers::class.":home");

// Run app
$app->run();