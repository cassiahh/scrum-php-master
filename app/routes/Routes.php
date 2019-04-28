<?php

include_once 'Request.php';
include_once 'Router.php';
require_once (__DIR__.'/../controller/IndexController.php');
require_once (__DIR__.'/../controller/ProductBacklogController.php');


$router = new Router(new Request);

$configs = include(__DIR__.'/../../config.php');
$router->setUrlBase($configs['url_base']);

$router->get('/', function(){
    return (new IndexController())->index();
});
$router->get('/index', function(){
    return (new IndexController())->index();
});
$router->post('/login', function($request) {
    return (new IndexController())->login($request);
});
$router->get('/logout', function(){
    return (new IndexController())->logout();
});
$router->get('/product-backlog', function(){
    return (new ProductBacklogController())->list();
});

//Exemplos
//$router->get('/profile', function($request) {
//  return <<<HTML
//  <h1>Profile</h1>
//HTML;
//});
//$router->post('/data', function($request) {
//    return json_encode($request->getBody());
//});