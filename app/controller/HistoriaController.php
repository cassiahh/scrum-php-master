<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26/05/19
 * Time: 17:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/builder/HistoriaBuilder.php");
require_once(__DIR__ . "/../model/dao/HistoriaDao.php");

class HistoriaController
{
    /**
     * HistoriaController constructor.
     */
    public function __construct()
    {
        return $this;
    }

    public function listaHistoria()
    {
        $historiaDao = new HistoriaDao(Connection::getConnection());
        $historias = $historiaDao->listaHistoria();
		$countHistoria = $historiaDao->countHistoria();
        include __DIR__ . '/../view/page/list/Historia.php'; 
    }
   public function edit($idHistoria, $post)
    {
        $historiaDao = new HistoriaDao(Connection::getConnection());
        $historia = $historiaDao->buscaHistoria($idHistoria);
        include __DIR__ . '/../view/page/edit/historia.php';
    }
   public function update($idHistoria, $post)
    {
        $conexao = Connection::getConnection();
        $historiaDao = new HistoriaDao($conexao);
        $historia = $historiaDao->buscaHistoria($idHistoria);
        $historiaModel = (new HistoriaBuilder($historia))->build();
        $historiaModel->setIdHistoria($post['idHistoria']);
        $historiaModel->setGostariaHistoria($post['gostariaHistoria']);
        $historiaModel->setIdEpico($post['idEpico']);
        $historiaModel->setObjetivoHistoria($post['objetivoHistoria']);
		
        $updated = $historiaDao->alteraHistoria($idHistoria, $historiaModel);
        $historia = $historiaDao->buscaHistoria($idHistoria);

        include __DIR__ . '/../view/page/edit/historia.php';
    }
      public function remove($idHistoria)
    {
        $conexao = Connection::getConnection();
        $historiaDao = new HistoriaDao($conexao);
        $removed = $historiaDao->removeHistoria($idHistoria);
        include __DIR__ . '/../view/page/remove/historia.php';
    }

    public function insere()
    {
        $conexao = Connection::getConnection();
        $historiaDao = new HistoriaDao($conexao);
        include __DIR__ . '/../view/component/form/historiaAdd.php';
    }
    public function adicionar($idHistoria, $post)
    {
        $conexao = Connection::getConnection();
        $historiaModel = (new historiaBuilder($historia))->build();
        $historiaModel->setIdHistoria($post['idHistoria']);
        $historiaModel->setIdFuncionalidade($post['idFuncionalidade']);
        $historiaModel->setFuncionalidade($post['Funcionalidade']);
        
        $updated = $historiaDao->insereHistoria($idHistoria, $idFuncionalidade, $funcionalidadeModel);
        $historia = $historiaDao->buscaHistoria($idHistoria, $idFuncionalidade);

        include __DIR__ . '/../view/page/insere/historia.php';
    }
}