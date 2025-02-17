<?php
namespace core;
class Router{
    protected $routes =   [];
    
    public function route($url ,$method){
        foreach($this->routes as $route){
            if($route['url'] == $url && $route['method'] == strtoupper($method)){
                
                return require base_path($route['controller']);
            }
        }
       abort();
    }
    public function add($method,$url,$controller){
        $this->routes[] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method
        ];
    }
    public function get($url,$controller){
        $this->add('GET',$url,$controller);
       
    }
    public function post($url,$controller){
        $this->add('POST',$url,$controller);
       
    }
    public function delete($url,$controller){
        $this->add('DELETE',$url,$controller);
       
    }

    public function put($url,$controller){
        $this->add('PUT',$url,$controller);
       
    }
    public function patch($url,$controller){
        $this->add('PATCH',$url,$controller);
    }
    
} 
?>