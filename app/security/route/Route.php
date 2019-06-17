<?php
require __DIR__ . '/vendor/AltoRouter.php';
require_once(__DIR__ . '/../../controller/IndexController.php');
require_once(__DIR__ . '/../../controller/ProductBacklogController.php');
require_once(__DIR__ . '/../../controller/CronogramaController.php');
require_once(__DIR__ . '/../../controller/FuncionalidadeController.php');
require_once(__DIR__ . '/../../controller/ProjetoController.php');
require_once(__DIR__ . '/../../controller/SprintController.php');
require_once(__DIR__ . '/../../controller/HistoriaController.php');
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

$router->map('GET','/projeto/editar/[i:projeto]', function($projeto){
    return (new ProjetoController())->editProjeto($projeto,null);
});

$router->map('POST','/projeto/editar/[i:projeto]', function($projeto){
    return (new ProjetoController())->update($projeto,$post);
});

$router->map('GET','/pessoa/editar/[i:ra]', function($ra){
    return (new ProjetoController())->editPessoa($ra,null);
});

$router->map('POST','/pessoa/editar/[i:ra]', function($ra){
    return (new ProjetoController())->updatePessoa($ra,$_POST);
});

$router->map('GET','/pessoa/remove/[i:ra]',
             function($ra){
    return (new ProjetoController())->removePessoas($ra);
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
    return (new ProductBacklogController())->edit($idHistoria, $idFuncionalidade, $idTarefa);
});
$router->map('GET','/product-backlog/adicionar/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria,$idFuncionalidade, $idTarefa){
    return (new ProductBacklogController())->insere($idHistoria, $idFuncionalidade, $idTarefa);
});
$router->map('POST','/product-backlog/adicionar', function(){
    return (new ProductBacklogController())->adicionar($_POST);
});
$router->map('POST','/product-backlog/editar', function(){
    return (new ProductBacklogController())->update($_POST);
});
$router->map('GET','/product-backlog/remover/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new ProductBacklogController())->remove($idHistoria, $idFuncionalidade, $idTarefa);
});


$router->map('GET','/cronograma',function(){
    return(new CronogramaController())->list();
});
$router->map('GET','/cronograma/remover/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new CronogramaController())->remove($idHistoria, $idFuncionalidade, $idTarefa, null);
});
$router->map('POST','/cronograma/editar/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new CronogramaController())->update($idHistoria, $idFuncionalidade, $idTarefa, $_POST);
});
$router->map('GET','/cronograma/editar/[i:idHistoria]/[i:idFuncionalidade]/[i:idTarefa]', function($idHistoria, $idFuncionalidade, $idTarefa){
    return (new CronogramaController())->edit($idHistoria, $idFuncionalidade, $idTarefa, null);
});


$router->map('GET','/funcionalidade',function(){
    return(new FuncionalidadeController())->listaFuncionalidades();
});
$router->map('GET','/funcionalidade/editar/[i:idHistoria]/[i:idFuncionalidade]', function($idHistoria, $idFuncionalidade){
    return (new FuncionalidadeController())->edit($idHistoria, $idFuncionalidade, null);
});
$router->map('GET','/funcionalidade/adicionar/[i:idHistoria]', function($idHistoria){
    return (new FuncionalidadeController())->insere($idHistoria, null);
});
$router->map('POST','/funcionalidade/adicionar/[i:idHistoria]/[i:idFuncionalidade]', function($idHistoria, $idFuncionalidade){
    return (new FuncionalidadeController())->adicionar($idHistoria, $idFuncionalidade, $_POST);
});
$router->map('POST','/funcionalidade/editar/[i:idHistoria]/[i:idFuncionalidade]', function($idHistoria, $idFuncionalidade){
    return (new FuncionalidadeController())->update($idHistoria, $idFuncionalidade, $_POST);
});
$router->map('GET','/funcionalidade/remover/[i:idHistoria]/[i:idFuncionalidade]', function($idHistoria, $idFuncionalidade){
    return (new FuncionalidadeController())->remove($idHistoria, $idFuncionalidade);
});


$router->map('GET','/historia',function(){
    return(new HistoriaController())->listaHistoria();
});
$router->map('GET','/historia/editar/[i:idHistoria]', function($idHistoria){
    return (new HistoriaController())->edit($idHistoria, null);
});
$router->map('POST','/historia/editar/[i:idHistoria]', function($idHistoria){
    return (new HistoriaController())->update($idHistoria, $_POST);
});
$router->map('GET','/historia/remover/[i:idHistoria]', function($idHistoria){
    return (new HistoriaController())->remove($idHistoria);
});
$router->map('GET','/historia/adicionar', function(){
    return (new HistoriaController())->insere();
});
$router->map('POST','/historia/adicionarhistoria/', function(){
    return (new historiaController())->adicionar($_POST);
});  
// $router->map('POST','/historia/adicionarhistoria/[i:idHistoria]/[i:gostariaHistoria]/[i:idEpico]/[i:objetivoHistoria]', function($idHistoria, $gostariaHistoria, $idEpico, $objetivoHistoria){
//     return (new HistoriaController())->adicionar($idHistoria, $gostariaHistoria, $idEpico, $objetivoHistoria, $_POST);
// });
// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}