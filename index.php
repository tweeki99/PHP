<?php


/*$uri = $_SERVER['REQUEST_URI'];
$uri = ltrim($uri, '/');

$uri = explode('?', $uri)[0];
$uri = rtrim($uri, '/');
$uri = explode('/', $uri);

echo "<pre>";
var_export($uri);
echo "</pre>";*/

use Klein\Klein;

include_once "vendor/autoload.php";

/*$router = new Klein();

$router->get("/", function(){
   return "Hello, Index!";
});

$router->get("/say", function(){
    return "Meow";
});

$router->dispatch();*/

new App();
