<?php

/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 22:40
 */

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
            $configs = include(__DIR__ . '/../../../config.php');
            header("Location: ".$configs['document_root']);
        } else {
            $_SESSION["success"] = "Usuário logado com sucesso.";
            (new Session())->setSessionRa($this->usuario["ra"]);
            $configs = include(__DIR__ . '/../../../config.php');
            header("Location: ".$configs['document_root']);
        }

    }

}