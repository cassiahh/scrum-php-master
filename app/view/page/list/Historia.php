<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26/05/19
 * Time: 17:00
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
Session::redirectIfNotLogged();
require_once(__DIR__ . "/../../component/table/cabecalho.php");

require_once(__DIR__ . "/../../component/table/historia.php");

require_once(__DIR__ . "/../../template/footer.php");