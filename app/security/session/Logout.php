<?php
require_once("Session.php");

class Logout{

    public function logout()
    {
        (new Session())->logout();
        $_SESSION["success"] = "Deslogado com sucesso.";
        $configs = include(__DIR__ . '/../../../config.php');
        header("Location: ".$configs['document_root']);
        die();
    }
}