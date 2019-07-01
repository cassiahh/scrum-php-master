<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/TarefaDao.php");
require_once(__DIR__ . "/../model/builder/TarefaBuilder.php");
require_once(__DIR__ . "/../model/dao/SprintDao.php");
require_once(__DIR__ . "/../model/builder/SprintBuilder.php");
class SprintController
{
    /**
     * SprintController constructor.
     */
    public function __construct()
    {
        return $this;
    }
    public function list()
    {
        $conexao = Connection::getConnection();
        $projetoDao = new ProjetoDao($conexao);
        $projetos = $projetoDao->listaProjeto();
        $tarefaDao = new TarefaDao($conexao);
        $tarefas = $tarefaDao->listaTarefas();
        $sprintDao = new SprintDao($conexao);
        $sprints = $sprintDao->listaSprints();
        include __DIR__ . '/../view/page/list/sprint.php';
    }
    public function edit($idHistoria,$idfuncionalidade,$idtarefa)
    { 
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $tarefa = $tarefaDao->buscaTarefa($idHistoria,$idfuncionalidade,$idtarefa);
        include __DIR__ . '/../view/page/edit/sprint.php';
    }
    public function update($idHistoria,$idfuncionalidade,$idtarefa,$post)
    {
        $conexao = Connection::getConnection();
        $tarefaDao = new TarefaDao($conexao);
        $tarefa = $tarefaDao->buscaTarefa($idHistoria,$idfuncionalidade,$idtarefa);
        $tarefaModel = (new TarefaBuilder($tarefa))->build();
        $tarefaModel->setIdSprint($post['idSprint']);
        $tarefaModel->setIdTarefa($post['idTarefa']);
        $tarefaModel->setRa($post['ra']);
        $tarefaModel->setDuracao($post['duracao']);
        $tarefaModel->setDependencia($post['dependencia']);
        $tarefaModel->setDuracao($post['duracao']);
        $tarefaModel->setStatus($post['status']);
        $updated = $tarefaDao->alteraTarefa($idHistoria,$idfuncionalidade,$idtarefa,$tarefaModel);
        $tarefa = $tarefaDao->buscaTarefa($idHistoria,$idfuncionalidade,$idtarefa);
        include __DIR__ . '/../view/page/edit/sprint.php';
    }
    public function remove($cod_tar,$idSprint,$ra)
    {
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $removed = $tarefaDao->removeTarefa($cod_tar,$idSprint,$ra);
        include __DIR__ . '/../view/page/remove/sprint.php';
    }
    public function insere()
    {
        $conexao = Connection::getConnection();
        $sprintDao = new SprintDao($conexao);
        include __DIR__ . '/../view/page/insere/sprintForm.php';
    }    
    public function adicionar($post)
    {
        $conexao = Connection::getConnection();
        $sprintDao = new SprintDao($conexao);
        $sprintModel = (new SprintBuilder($post))->build();

        $updated = $sprintDao->insereSprint($sprintModel);
        include __DIR__ . '/../view/page/insere/sprint.php';
    }
    public function filtroFiltrar($post)
    {
        $conexao = Connection::getConnection();
        $tarefaDao = new TarefaDao($conexao);
        $tarefas = $tarefaDao->listaTarefasFiltro($post['idSprint']);
        $sprintDao = new SprintDao($conexao);
        $sprints = $sprintDao->listaSprints();
        include __DIR__ . '/../view/page/list/sprint.php';
    }
    public function filtroAdicionar()
    {
        $conexao = Connection::getConnection();
        $sprintDao = new SprintDao($conexao);
        include __DIR__ . '/../view/page/insere/sprintForm.php'; 
    }
    public function filtroEditar($post)
    {
        
    }
    public function filtroDeletar($post)
    {
        $conexao = Connection::getConnection();
        $sprintDao = new SprintDao($conexao);
        $removed = $sprintDao->removeSprint($post['idSprint']);
        include __DIR__ . '/../view/page/remove/sprint.php';
    }
}
