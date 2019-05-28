<?php
require __DIR__ . '/vendor/AltoRouter.php';
require_once(__DIR__ . '/../../controller/IndexController.php');
require_once(__DIR__ . '/../../controller/ProductBacklogController.php');
require_once(__DIR__ . '/../../controller/CronogramaController.php');
require_once(__DIR__ . '/../../controller/FuncionalidadeController.php');
require_once(__DIR__ . '/../../controller/ProjetoController.php');
require_once(__DIR__ . '/../../controller/SprintController.php');
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

$router->map('GET','/projeto', function(){
    return (new ProjetoController())->list();
});

$router->map('GET','/projeto/editar/[i:projeto]/[i:cliente]/[i:productOwner]', function($projeto){
    return (new ProjetoController())->edit($projeto);
});

$router->map('GET','/sprint', function(){
    return (new SprintController())->list();
});

$router->map('GET','/sprint/remover/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new SprintController())->remove($idHistoria, $idFuncionalidade, $idTarefa);
});

$router->map('GET','/sprint/editar/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new SprintController())->edit($idHistoria, $idFuncionalidade, $idTarefa, null);
});
$router->map('POST','/sprint/editar/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new SprintController())->update($idHistoria, $idFuncionalidade, $idTarefa, $_POST);
});

$router->map('GET','/product-backlog', function(){
    return (new ProductBacklogController())->list();
});
$router->map('GET','/product-backlog/editar/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new ProductBacklogController())->edit($idHistoria, $idFuncionalidade, $idTarefa, null);
});
$router->map('POST','/product-backlog/editar/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new ProductBacklogController())->update($idHistoria, $idFuncionalidade, $idTarefa, $_POST);
});
$router->map('GET','/product-backlog/remover/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new ProductBacklogController())->remove($idHistoria, $idFuncionalidade, $idTarefa);
});
$router->map('GET','/cronograma',function(){
    return(new CronogramaController())->list();
});
$router->map('POST','/editar-cronograma', function() {
    return (new CronogramaController())->edit();
});
$router->map('GET','/funcionalidade',function(){
    return(new FuncionalidadeController())->listaFuncionalidades();
});
$router->map('GET','/funcionalidade/editar/[i:idHistoria]/[i:idFuncionalidade]', function($idHistoria, $idFuncionalidade){
    return (new FuncionalidadeController())->edit($idHistoria, $idFuncionalidade, null);
});
$router->map('POST','/funcionalidade/editar/[i:idHistoria]/[i:idFuncionalidade]', function($idHistoria, $idFuncionalidade){
    return (new FuncionalidadeController())->update($idHistoria, $idFuncionalidade, $_POST);
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
