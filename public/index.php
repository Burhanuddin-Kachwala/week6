<?php

const BASE_PATH = __DIR__.'/../';

require(BASE_PATH.'functions.php');



require base_path('partials/head.php');

spl_autoload_register(function($class){
  require base_path('core/'.$class . '.php');
});

$routes = require base_path('routes.php');
$url = $_SERVER['PATH_INFO'] ?? "";
routeToController($url,$routes);


?>
