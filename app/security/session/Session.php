<?php

class Session{
    public function __construct()
    {
            session_start();
    }
    public static function isLogged() {
        return isset($_SESSION["ra"]);
    }

    public static function redirectIfNotLogged() {
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

    public static function logout() {
        session_destroy();
        session_start();
    }
}