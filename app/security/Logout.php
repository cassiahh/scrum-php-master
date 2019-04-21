<?php
require_once("Session.php");

logout();
$_SESSION["success"] = "Deslogado com sucesso.";
header("Location: /../scrum-php/public/index.php");
die();
