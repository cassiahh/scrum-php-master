<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 05:48
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once (__DIR__ . '/../security/session/Login.php');
require_once (__DIR__ . '/../security/session/Logout.php');

class IndexController
{


    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        return $this;
    }

    public function index()
    {
        include_once __DIR__ . '/../view/page/index.php';
    }

    public function login($ra, $senha)
    {
        $pessoaDao = new PessoaDao(Connection::getConnection());
//        $usuario = $pessoaDao->buscaUsuario($ra, $senha);
        $usuario = $pessoaDao->buscaUsuario('111111','123456');
        (new Login($usuario))->login();
    }

    public function logout()
    {
        (new Logout())->logout();
    }
}