<?php
use core\Response;
function routeToController($url,$routes){   
   
    if(array_key_exists($url,$routes)){        
        require base_path($routes[$url]);
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
function login($user){
    $_SESSION['user'] = $user;
    session_regenerate_id(true);
}
function logout(){
    session_unset();
    session_destroy();
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 3600, $params['path'], $params['domain']);
   
}
?>