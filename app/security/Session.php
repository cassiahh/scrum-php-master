<?php

abstract class Session{
    public function __construct()
    {
            session_start();
    }
    public function isLogged() {
        return isset($_SESSION["ra"]);
    }

    public function redirectIfNotLogged() {
        if(!self::isLogged()) {
            $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
            header("Location: index");
            die();
        }
    }
    public function getSessionRa() {
        return $_SESSION["ra"];
    }

    public function setSessionRa($ra) {
        $_SESSION["ra"] = $ra;
    }

    public function logout() {
        session_destroy();
        session_start();
    }
}