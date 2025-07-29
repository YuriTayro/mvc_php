<?php 
require_once '../app/core/Router.php';


//echo 'Hello World from public ';

$url = $_GET['url'] ?? '';

// echo '<pre>';
// var_dump($url);

$router = new Router();
$router->dispatch($url);

