<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26/05/19
 * Time: 17:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
//require_once(__DIR__ . "/../model/dao/TarefaDao.php");
// require_once(__DIR__ . "/../model/builder/historiaBuilder.php");
require_once(__DIR__ . "/../model/builder/HistoriaBuilder.php");
require_once(__DIR__ . "/../model/dao/HistoriaDao.php");
// require_once(__DIR__ . "/../model/builder/HistoriaBuilder.php");
// require_once(__DIR__ . "/../model/dao/HistoriaDao.php");
// require_once(__DIR__ . "/../model/domain/Funcionalidade.php");


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
        $historiaModel = (new historiaBuilder($historia))->build();
        $historiaModel->setIdHistoria($post['idHistoria']);
        $historiaModel->setGostariaHistoria($post['gostariaHistoria']);
        $historiaModel->setIdEpico($post['idEpico']);
        $historiaModel->setObjetivoHistoria($post['objetivoHistoria']);
		
        $updated = $historiaDao->alteraHistoria($idHistoria, $historiaModel);
        $historia = $historiaDao->buscaHistoria($idHistoria);

        include __DIR__ . '/../view/page/edit/historia.php';
    }
  /*    public function remove($idHistoria, $idFuncionalidade, $idTarefa)
    {
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $removed = $tarefaDao->removeTarefa($idHistoria, $idFuncionalidade, $idTarefa);
        include __DIR__ . '/../view/page/remove/product-backlog.php';
    }*/
}