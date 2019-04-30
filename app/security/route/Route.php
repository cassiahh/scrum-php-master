<?php

require __DIR__ . '/vendor/AltoRouter.php';
require_once(__DIR__ . '/../../controller/IndexController.php');
require_once(__DIR__ . '/../../controller/ProductBacklogController.php');
require_once(__DIR__ . '/../../controller/CronogramaController.php');
require_once(__DIR__ . '/../../controller/ProjetoController.php');

$router = new AltoRouter();

$configs = include(__DIR__ . '/../../../config.php');
$router->setBasePath($configs['document_root']);

$router->map('GET','/', function(){
    return (new IndexController())->index();
});
$router->map('GET','/index', function(){
    return (new IndexController())->index();
});
$router->map('POST','/login', function() {
    return (new IndexController())->login($_POST['ra'],$_POST['senha']);
});
$router->map('GET','/logout', function(){
    return (new IndexController())->logout();
});
$router->map('GET','/product-backlog', function(){
    return (new ProductBacklogController())->list();
});
$router->map('GET','/cronograma',function(){
    return(new CronogramaController())->list();
});
$router->map('POST','/editar-cronograma', function() {
    return (new CronogramaController())->edit();
});
$router->map('GET','/projeto',function(){
    return (new ProjetoController())->list();
});


// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
