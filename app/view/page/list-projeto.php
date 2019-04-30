<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 21/04/19
 * Time: 03:16
 */

require_once(__DIR__ . "/../template/header.php");

require_once(__DIR__ . "/../../security/session/Session.php");
//redirectIfNotLogged();


require_once(__DIR__ . "/../component/table-projeto.php");
require_once(__DIR__ . "/../component/table-pessoa.php");


require_once(__DIR__ . "/../template/footer.php");