<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 22:40
 */

require_once(__DIR__ . "/../model/dao/PessoaDao.php");
require_once("Session.php");

class Login{
    private $usuario;
    public function __construct($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    public function login()
    {
        if($this->usuario == null) {
            $_SESSION["danger"] = "RA ou senha inválido.";
            $configs = include(__DIR__.'/../../config.php');
            header("Location: ".$configs['url_base']);
        } else {
            $_SESSION["success"] = "Usuário logado com sucesso.";
            Session::setSessionRa($this->usuario["ra"]);
            $configs = include(__DIR__.'/../../config.php');
            var_dump('logado');
            header("Location: ".$configs['url_base']);
        }

    }

}