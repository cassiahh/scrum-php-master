<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26/05/19
 * Time: 17:30
 */

require_once __DIR__ . "/../model/database/Connection.php";
require_once __DIR__ . "/../model/builder/HistoriaBuilder.php";
require_once __DIR__ . "/../model/dao/HistoriaDao.php";

class HistoriaController {
	/**
	 * HistoriaController constructor.
	 */
	public function __construct() {
		return $this;
	}

	public function listaHistoria() {
		$conexao = Connection::getConnection();
		$projetoDao = new ProjetoDao($conexao);
		$projetos = $projetoDao->listaProjeto();
		$historiaDao = new HistoriaDao($conexao);
		$historias = $historiaDao->listaHistoria();
		$countHistoria = $historiaDao->countHistoria();
		include __DIR__ . '/../view/page/list/Historia.php';
	}
	public function edit($idHistoria, $post) {
		$conexao = Connection::getConnection();
		$historiaDao = new HistoriaDao($conexao);
		$historia = $historiaDao->buscaHistoria($idHistoria);

		$pessoaDao = new PessoaDao($conexao);
		$pessoas = $pessoaDao->listaPessoas();
		include __DIR__ . '/../view/page/edit/historia.php';
	}
	public function update($idHistoria, $post) {
		$conexao = Connection::getConnection();
		$historiaDao = new HistoriaDao($conexao);
		$historia = $historiaDao->buscaHistoria($idHistoria);
		$historiaModel = (new HistoriaBuilder($historia))->build();
		$historiaModel->setIdHistoria($post['idHistoria']);
		$historiaModel->setGostariaHistoria($post['gostariaHistoria']);
		$historiaModel->setIdEpico($post['ra']);
		$historiaModel->setObjetivoHistoria($post['objetivoHistoria']);

		$updated = $historiaDao->alteraHistoria($idHistoria, $historiaModel);
		$historia = $historiaDao->buscaHistoria($idHistoria);

		include __DIR__ . '/../view/page/edit/historia.php';
	}
	public function remove($idHistoria) {
		$conexao = Connection::getConnection();
		$historiaDao = new HistoriaDao($conexao);
		$removed = $historiaDao->removeHistoria($idHistoria);
		include __DIR__ . '/../view/page/remove/historia.php';
	}

	public function insere() {
		$conexao = Connection::getConnection();
		$historiaDao = new HistoriaDao($conexao);
		$pessoaDao = new PessoaDao($conexao);
		$pessoas = $pessoaDao->listaPessoas();
		include __DIR__ . '/../view/page/insere/historiaForm.php';
	}
	public function adicionar($post) {
		$conexao = Connection::getConnection();
		$historiaDao = new HistoriaDao($conexao);
		$historia = $post;
		$historiaModel = (new HistoriaBuilder($historia))->build();
		$historiaModel->setIdHistoria($post['idHistoria']);
		$historiaModel->setgostariaHistoria($post['gostaria']);
		$historiaModel->setidEpico($post['ra']);
		$historiaModel->setObjetivoHistoria($post['objetivo']);

		$updated = $historiaDao->insereHistoria($historiaModel);
		include __DIR__ . '/../view/page/insere/historia.php';
	}
}