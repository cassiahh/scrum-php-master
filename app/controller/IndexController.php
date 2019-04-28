<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 28/04/19
 * Time: 05:48
 */

require_once(__DIR__ . "/../model/database/Connection.php");
require_once (__DIR__.'/../security/Login.php');
require_once (__DIR__.'/../security/Logout.php');

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
        include_once __DIR__.'/../../public/index.php';
    }

    public function login($request)
    {
        $param = $request->getBody();
        $connection = require_once(__DIR__ . "/../model/database/Connection.php");
        $pessoaDao = new PessoaDao(Connection::getConnection());
//        $this->usuario = $this->pessoaDao->buscaUsuario($param["ra"], $param["senha"]);
        $usuario = $pessoaDao->buscaUsuario('111111','123456');
        (new Login($usuario))->login();
    }

    public function logout()
    {
        (new Logout())->logout();
    }
}