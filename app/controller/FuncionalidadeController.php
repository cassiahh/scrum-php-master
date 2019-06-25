<?php
/**
 * Created by PhpStorm.
 * User: Camilli
 * Date: 23/05/19
 * Time: 06:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
//require_once(__DIR__ . "/../model/dao/TarefaDao.php");
require_once(__DIR__ . "/../model/builder/funcionalidadeBuilder.php");
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
        $conexao = Connection::getConnection();
        $projetoDao = new ProjetoDao($conexao);
        $projetos = $projetoDao->listaProjeto();
        $funcionalidadeDao = new FuncionalidadeDao($conexao);
        $funcionalidades = $funcionalidadeDao->listaFuncionalidades();
		$countFunc = $funcionalidadeDao->countFunc();
        include __DIR__ . '/../view/page/list/Funcionalidade.php'; 
    }
   public function edit($idHistoria, $idFuncionalidade, $post)
    {
        $funcionalidadeDao = new FuncionalidadeDao(Connection::getConnection());
        $funcionalidade = $funcionalidadeDao->buscaFuncionalidade($idHistoria, $idFuncionalidade);
        include __DIR__ . '/../view/page/edit/funcionalidade.php';
    }
   public function update($idHistoria, $idFuncionalidade, $post)
    {
        $conexao = Connection::getConnection();
        $funcionalidadeDao = new FuncionalidadeDao($conexao);
        $funcionalidade = $funcionalidadeDao->buscaFuncionalidade($idHistoria, $idFuncionalidade);
        $funcionalidadeModel = (new funcionalidadeBuilder($funcionalidade))->build();
        $funcionalidadeModel->setIdHistoria($post['idHistoria']);
        $funcionalidadeModel->setIdFuncionalidade($post['idFuncionalidade']);
        $funcionalidadeModel->setFuncionalidade($post['Funcionalidade']);
		
        $updated = $funcionalidadeDao->alteraFuncionalidade($idHistoria, $idFuncionalidade, $funcionalidadeModel);
        $funcionalidade = $funcionalidadeDao->buscaFuncionalidade($idHistoria, $idFuncionalidade);
		
        $funcionalidades = $funcionalidadeDao->listaFuncionalidades();
        $countFunc = $funcionalidadeDao->countFunc();
		
        include __DIR__ . '/../view/page/edit/funcionalidade.php';
    }
    public function remove($idHistoria, $idFuncionalidade)
    {
        $funcionalidadeDao = new FuncionalidadeDao(Connection::getConnection());
        $removed = $funcionalidadeDao->removeFuncionalidade($idHistoria, $idFuncionalidade);
		//if ($removed){
		//	$funcionalidade = $funcionalidadeDao->buscaIdFuncionalidade($idHistoria);
		//	while ($idFuncionalidade < $funcionalidade['idFuncionalidade']){				
		//	}
		//}
        include __DIR__ . '/../view/page/remove/funcionalidade.php';
    }
	public function insere($idHistoria, $post)
    {
        $funcionalidadeDao = new FuncionalidadeDao(Connection::getConnection());
        $funcionalidade = $funcionalidadeDao->buscaIdFuncionalidade($idHistoria);
		if($funcionalidade['idFuncionalidade'] == null){
			$funcionalidade = $funcionalidadeDao->buscaIdFuncionalidadeHist($idHistoria);
		}
        include __DIR__ . '/../view/page/insere/funcionalidade.php';
    }
	public function adicionar($idHistoria, $idFuncionalidade, $post)
    {
        $conexao = Connection::getConnection();
        $funcionalidadeDao = new FuncionalidadeDao($conexao);
        $funcionalidade = $funcionalidadeDao->buscaIdFuncionalidade($idHistoria);
		if($funcionalidade['idFuncionalidade'] == null){
			$funcionalidade = $funcionalidadeDao->buscaIdFuncionalidadeHist($idHistoria);
		}
        $funcionalidadeModel = (new funcionalidadeBuilder($funcionalidade))->build();
        $funcionalidadeModel->setIdHistoria($post['idHistoria']);
        $funcionalidadeModel->setIdFuncionalidade($post['idFuncionalidade']);
        $funcionalidadeModel->setFuncionalidade($post['Funcionalidade']);
		
        $updated = $funcionalidadeDao->insereFuncionalidade($idHistoria, $idFuncionalidade, $funcionalidadeModel);
        $funcionalidade = $funcionalidadeDao->buscaFuncionalidade($idHistoria, $idFuncionalidade);
		
        $funcionalidades = $funcionalidadeDao->listaFuncionalidades();
        $countFunc = $funcionalidadeDao->countFunc();
		
        include __DIR__ . '/../view/page/insere/funcionalidade.php';
    }
}