<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 19:50
 */
require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
//Session::redirectIfNotLogged();
require_once(__DIR__ . "/../../component/table/sprintFiltro.php");

require_once(__DIR__ . "/../../component/table/sprint.php");


require_once(__DIR__ . "/../../template/footer.php");
