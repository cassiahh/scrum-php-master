<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/TarefaDao.php");
require_once(__DIR__ . "/../model/dao/ProjetoDao.php");
require_once(__DIR__ . "/../model/dao/PessoaDao.php");
require_once(__DIR__ . "/../model/builder/TarefaBuilder.php");


class ProductBacklogController
{

    /**
     * ProductBacklogController constructor.
     */
    public function __construct()
    {
        return $this;
    }

    public function list()
    {
        $projetoDao = new ProjetoDao(Connection::getConnection());
        $projetos = $projetoDao->listaProjeto();
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $tarefas = $tarefaDao->listaProductBacklog();
        $qtdSprintsESomaDuracaos = $tarefaDao->qtdSprintsESomaDuracao();
        include __DIR__ . '/../view/page/list/product-backlog.php';
    }
    public function edit($idHistoria, $idFuncionalidade, $idTarefa, $post=null)
    {
        $conexao = Connection::getConnection();
        $pessoaDao = new PessoaDao($conexao);
        $pessoas = $pessoaDao->listaPessoas();
        $tarefaDao = new TarefaDao($conexao);
        $tarefa = $tarefaDao->buscaTarefa($idHistoria, $idFuncionalidade, $idTarefa);
        include __DIR__ . '/../view/page/edit/product-backlog.php';
    }
    public function update($post)
    {
        $conexao = Connection::getConnection();
        $tarefaDao = new TarefaDao($conexao);
        $tarefa = $tarefaDao->buscaTarefa($post['idHistoria'], $post['idFuncionalidade'], $post['idTarefa']);
        $tarefaModel = (new TarefaBuilder($tarefa))->build();
        $tarefaModel->setTarefa($post['tarefa']);
        $tarefaModel->setIdSprint($post['idSprint']);
        $tarefaModel->setRa($post['ra']);
        $tarefaModel->setStatus($post['status']);
        $tarefaModel->setInicio($post['inicio']);
        $tarefaModel->setTempo($post['tempo']);
        $tarefaModel->setTermino($post['termino']);
        $tarefaModel->setDuracao($post['duracao']);
        $tarefaModel->setDependencia($post['dependencia']);
        $tarefaModel->setPrioridade($post['prioridade']);

        $updated = $tarefaDao->alteraTarefa($post['idHistoria'], $post['idFuncionalidade'], $post['idTarefa'], $tarefaModel);
        $tarefa = $tarefaModel;

        $projetoDao = new ProjetoDao($conexao);
        $projetos = $projetoDao->listaProjeto();
        $tarefaDao = new TarefaDao($conexao);
        $tarefas = $tarefaDao->listaProductBacklog();
        include __DIR__ . '/../view/page/edit/product-backlog.php';
    }
    public function remove($idHistoria, $idFuncionalidade, $idTarefa)
    {
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $removed = $tarefaDao->removeTarefa($idHistoria, $idFuncionalidade, $idTarefa);
        include __DIR__ . '/../view/page/remove/product-backlog.php';
    }
    public function insere($idHistoria, $idFuncionalidade)
    {
        include __DIR__ . '/../view/page/insere/product-backlog.php';
    }
    public function adicionar($post)
    {
        $conexao = Connection::getConnection();
        $tarefaDao = new TarefaDao($conexao);
        $tarefaModel = (new tarefaBuilder($post))->build();
        var_dump($tarefaModel);
        $updated = $tarefaDao->insereTarefa($tarefaModel);
        echo mysqli_insert_id();
//        $tarefa = $tarefaDao->buscaTarefa($idHistoria, $idTarefa);

//        include __DIR__ . '/../view/page/insere/product-backlog.php';
    }
}