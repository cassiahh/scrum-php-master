<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/TarefaDao.php");


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
        $tarefaDao = new TarefaDao(Connection::getConnection());
        $tarefas = $tarefaDao->listaTarefas();
        include __DIR__.'/../../public/list-product-backlog.php';
    }
}