<?php

include_once 'Request.php';
include_once 'Router.php';
require_once (__DIR__.'/../controller/IndexController.php');
require_once (__DIR__.'/../controller/ProductBacklogController.php');
<<<<<<< HEAD
require_once (__DIR__.'/../controller/CronogramaController.php');


=======
require_once (__DIR__.'/../controller/ProjetoController.php');
>>>>>>> 8b2a7158592409a8467550d4428f51b37f54ee64

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
$router->get('/cronograma',function(){
    return(new CronogramaController())->list();
});
$router->post('/editar-cronograma', function($request) {
    return (new CronogramaController())->edit($request);
});
$router->get('/projeto',function(){
    return (new ProjetoController())->list();
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