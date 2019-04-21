<?php
session_start();

function isLogged() {
    return isset($_SESSION["ra"]);
}

function redirectIfNotLogged() {
    if(!isLogged()) {
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
        header("Location: index.php");
        die();
    }
}

function getSessionRa() {
    return $_SESSION["ra"];
}

function setSessionRa($ra) {
    $_SESSION["ra"] = $ra;
}

function logout() {
    session_destroy();
    session_start();
}
