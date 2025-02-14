<?php

const BASE_PATH = __DIR__.'/../';

require(BASE_PATH.'core/functions.php');



require base_path('partials/head.php');

spl_autoload_register(function($class){
   $class=str_replace('\\',DIRECTORY_SEPARATOR,$class); 
  
  require base_path($class . '.php');
});

$routes = require base_path('core/routes.php');
$url = $_SERVER['PATH_INFO'] ?? "";
routeToController($url,$routes);


?>
