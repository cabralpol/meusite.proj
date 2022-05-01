<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/themes', 'HomeController@themes');

$router->post('/sendMessage', 'EmailController@sendMessage');

// $router->get('/sobre/{nome}', 'HomeController@sobreP');
// $router->get('/sobre', 'HomeController@sobre');