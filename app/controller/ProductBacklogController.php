<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

require_once __DIR__ . "/../model/database/Connection.php";
require_once __DIR__ . "/../model/dao/TarefaDao.php";
require_once __DIR__ . "/../model/dao/ProjetoDao.php";
require_once __DIR__ . "/../model/dao/PessoaDao.php";
require_once __DIR__ . "/../model/domain/Tarefa.php";
require_once __DIR__ . "/../model/builder/TarefaBuilder.php";
require_once __DIR__ . "/../model/helper/TarefaHelper.php";

class ProductBacklogController {

	/**
	 * ProductBacklogController constructor.
	 */
	public function __construct() {
		return $this;
	}

	public function list() {
		$conexao = Connection::getConnection();
		$projetoDao = new ProjetoDao($conexao);
		$projetos = $projetoDao->listaProjeto();
		$tarefaDao = new TarefaDao($conexao);
		$tarefas = $tarefaDao->listaProductBacklog();
		$funcionalidadeAttributes = $tarefaDao->funcionalidadeAttributes();
		include __DIR__ . '/../view/page/list/product-backlog.php';
	}
	public function edit($idHistoria, $idFuncionalidade, $idTarefa, $post = null) {
		$conexao = Connection::getConnection();
		$pessoaDao = new PessoaDao($conexao);
		$pessoas = $pessoaDao->listaPessoas();
		$tarefaDao = new TarefaDao($conexao);
		$tarefa = $tarefaDao->buscaTarefa($idHistoria, $idFuncionalidade, $idTarefa);
		include __DIR__ . '/../view/page/edit/product-backlog.php';
	}
	public function update($post) {
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
		$tarefa = (new TarefaHelper($tarefaModel))->convertToArray();

		$projetoDao = new ProjetoDao($conexao);
		$projetos = $projetoDao->listaProjeto();
		$tarefaDao = new TarefaDao($conexao);
		$tarefas = $tarefaDao->listaProductBacklog();
		$funcionalidadeAttributes = $tarefaDao->funcionalidadeAttributes();
		include __DIR__ . '/../view/page/edit/product-backlog.php';
	}
	public function remove($idHistoria, $idFuncionalidade, $idTarefa) {
		$tarefaDao = new TarefaDao(Connection::getConnection());
		$removed = $tarefaDao->removeTarefa($idHistoria, $idFuncionalidade, $idTarefa);
		include __DIR__ . '/../view/page/remove/product-backlog.php';
	}
	public function insere($idHistoria, $idFuncionalidade, $idTarefa, $post = null) {
		$tarefa = [
			'idHistoria' => $idHistoria,
			'idFuncionalidade' => $idFuncionalidade,
			'idTarefa' => $idTarefa];
		$conexao = Connection::getConnection();
		$pessoaDao = new PessoaDao($conexao);
		$pessoas = $pessoaDao->listaPessoas();
		include __DIR__ . '/../view/page/insere/product-backlog.php';
	}
	public function adicionar($post) {
		$conexao = Connection::getConnection();
		$tarefaDao = new TarefaDao($conexao);
		$post['inicio'] = '';
		$post['tempo'] = '';
		$post['termino'] = '';
		if ($post['idSprint'] == '') {$post['idSprint'] == null;};
		$tarefaModel = (new TarefaBuilder($post))->build();
		$updated = $tarefaDao->insereTarefa($tarefaModel);
		$tarefa = (new TarefaHelper($tarefaModel))->convertToArray();
		$tarefaDao = new TarefaDao($conexao);
		$tarefas = $tarefaDao->listaProductBacklog();
		$funcionalidadeAttributes = $tarefaDao->funcionalidadeAttributes();
		$projetoDao = new ProjetoDao($conexao);
		$projetos = $projetoDao->listaProjeto();
		$pessoaDao = new PessoaDao($conexao);
		$pessoas = $pessoaDao->listaPessoas();

		include __DIR__ . '/../view/page/insere/product-backlog.php';
	}
}