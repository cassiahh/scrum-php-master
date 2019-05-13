<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
//require_once(__DIR__ . "/../model/dao/TarefaDao.php");
//require_once(__DIR__ . "/../model/builder/TarefaBuilder.php");
//require_once(__DIR__ . "/../model/dao/HistoriaDao.php");
//require_once(__DIR__ . "/../model/builder/HistoriaBuilder.php");
require_once(__DIR__ . "/../model/dao/FuncionalidadeDao.php");
require_once(__DIR__ . "/../model/domain/Funcionalidade.php");


class FuncionalidadeController
{
    /**
     * FuncionalidadeController constructor.
     */
    public function __construct()
    {
        return $this;
    }

    public function listaFuncionalidades()
    {
        $funcionalidadeDao = new FuncionalidadeDao(Connection::getConnection());
        $funcionalidades = $funcionalidadeDao->listaFuncionalidades();
        include __DIR__ . '/../view/page/list/Funcionalidade.php'; 
    }
 /*   public function edit($idHistoria, $idFuncionalidade, $idTarefa, $post)
    {
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $tarefa = $tarefaDao->buscaTarefa($idHistoria, $idFuncionalidade, $idTarefa);
        include __DIR__ . '/../view/page/edit/product-backlog.php';
    }
    public function update($idHistoria, $idFuncionalidade, $idTarefa, $post)
    {
        $conexao = Connection::getConnection();
        $tarefaDao = new TarefaDao($conexao);
        $tarefa = $tarefaDao->buscaTarefa($idHistoria, $idFuncionalidade, $idTarefa);
        $tarefaModel = (new TarefaBuilder($tarefa))->build();
        $tarefaModel->setIdHistoria($post['idHistoria']);
        $tarefaModel->setIdFuncionalidade($post['idFuncionalidade']);
        $tarefaModel->setIdTarefa($post['idTarefa']);
        $tarefaModel->setTarefa($post['tarefa']);
        $tarefaModel->setDependencia($post['dependencia']);
        $tarefaModel->setDuracao($post['duracao']);

        $updated = $tarefaDao->alteraTarefa($idHistoria, $idFuncionalidade, $idTarefa, $tarefaModel);
        $tarefa = $tarefaDao->buscaTarefa($idHistoria, $idFuncionalidade, $idTarefa);

        include __DIR__ . '/../view/page/edit/product-backlog.php';
    }
    public function remove($idHistoria, $idFuncionalidade, $idTarefa)
    {
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $removed = $tarefaDao->removeTarefa($idHistoria, $idFuncionalidade, $idTarefa);
        include __DIR__ . '/../view/page/remove/product-backlog.php';
    }*/
}