<?php
require('Response.php');
$url = $_SERVER['PATH_INFO'] ?? "";
//echo $url . "*";


routeToController($url);

function routeToController($url){
    $routes = [
        ""=>"controller/home.php",
        "/contact"=>"controller/contact.php",
        "/notes"=>"controller/notes.php",
        "/note"=>"controller/note.php",
        "/about"=>"controller/about.php"
    ];
   
    if(array_key_exists($url,$routes)){
        return require $routes[$url];
    }else{
        abort();
    }

}
function abort($statusCode =404){
    require("./controller/view/{$statusCode}.php");
    die();
}
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
?>
