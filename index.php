<?php
require('Response.php');
require('./partials/head.php');
$routes = require('./routes.php');
$url = $_SERVER['PATH_INFO'] ?? "";



routeToController($url,$routes);

function routeToController($url,$routes){
   
   
    if(array_key_exists($url,$routes)){
        return require $routes[$url];
    }else{
        abort();
    }

}
function abort($statusCode =404){
    require("./view/{$statusCode}.php");
    die();
}
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function authorize($condition,$statustCode = Response::HTTP_FORBIDDEN){
    if(!$condition){
        abort($statustCode);
    }
}
?>
