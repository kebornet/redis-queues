<?php

require __DIR__ . '/vendor/autoload.php';

use App\Router;
use App\Controllers\IndexController;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    Router::get(IndexController::class, 'index');
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Router::post(IndexController::class, 'store', $_POST);
} else {
    throw new \Exception;
}
