<?php


$router->get("/","controller/home.php");
$router->get("/contact","controller/contact.php");
$router->get("/about","controller/about.php");

$router->get("/note/create","controller/notes/create.php");

$router->post('/note', 'controller/notes/store.php');  
$router->get("/note","controller/notes/show.php");
$router->delete("/note","controller/notes/destroy.php"); 
$router->get("/notes","controller/notes/index.php")->only('auth');

$router->get('/note/edit', 'controller/notes/edit.php');
$router->patch('/note', 'controller/notes/update.php');

$router->get("/register","controller/registration/create.php")->only('guest');
$router->post("/register","controller/registration/store.php");

$router->get("/login","controller/sessions/create.php")->only('guest');
$router->post("/sessions","controller/sessions/store.php")->only('guest');

$router->delete("/sessions","controller/sessions/destroy.php")->only('auth');


