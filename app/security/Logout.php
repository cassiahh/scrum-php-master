<?php
require_once("Session.php");

class Logout{

    public function logout()
    {
        Session::logout();
        $_SESSION["success"] = "Deslogado com sucesso.";
        $configs = include(__DIR__.'/../../config.php');
        header("Location: ".$configs['url_base']);
        die();
    }
}