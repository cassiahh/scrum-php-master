<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 22:40
 */

require_once(__DIR__ . "/../model/dao/PessoaDao.php");
require_once("Session.php");
require_once(__DIR__ . "/../model/database/Connection.php");

$pessoaDao = new PessoaDao($connection);
$usuario = $pessoaDao->buscaUsuario($_POST["ra"], $_POST["senha"]);
//$usuario = $pessoaDao->buscaUsuario('111111','123456');

if($usuario == null) {
    $_SESSION["danger"] = "RA ou senha inválido.";
    header("Location: /../scrum-php/public/index.php");
} else {
    $_SESSION["success"] = "Usuário logado com sucesso.";
    setSessionRa($usuario["ra"]);
    header("Location: /../scrum-php/public/index.php");
}
die();
