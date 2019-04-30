<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 06:30
 */

    require_once(__DIR__ . "/../model/database/Connection.php");
    require_once(__DIR__ . "/../model/dao/PessoaDao.php");


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
        $pessoaDao = new PessoaDao(Connection::getConnection());
        $pessoas = $pessoaDao->listaPessoas();

        include __DIR__.'/../../public/list-projeto.php';
}
}