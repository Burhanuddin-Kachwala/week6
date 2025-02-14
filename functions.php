<?php
function routeToController($url,$routes){   
   
    if(array_key_exists($url,$routes)){        
        require $routes[$url];
    }else{
        abort();
    }

}
function abort($statusCode =404){
    require base_path("view/{$statusCode}.php");
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
function base_path($path){
    //  just for reference BASE_PATH = __DIR__.'/../';
    return BASE_PATH . $path;
}
function views($path , $data = []){
    extract($data);
    require base_path("view/{$path}");
}
?>