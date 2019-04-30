<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/PessoaDao.php");
require_once(__DIR__ . "/../model/dao/ProjetoDao.php");


class ProjetoController
{

    /**
     * ProjetoController constructor.
     */
    public function __construct()
    {
        return $this;
    }

    public function list()
    {
        $projetoDao = new ProjetoDao(Connection::getConnection());
        $projetos = $projetoDao->listaProjeto();

        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->listaPessoas();

        include __DIR__ . '/../view/page/list-projeto.php';
    }
}