<?php

$environment = require dirname(__FILE__) . '/config/environment.php';
$autoload = require 'vendor/autoload.php';
$app = new \App\Controllers\SiteController($environment);
$app->inicializar();
