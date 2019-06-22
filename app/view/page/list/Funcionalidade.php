<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 21/04/19
 * Time: 03:16
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
Session::redirectIfNotLogged();

require_once(__DIR__ . "/../../component/table/funcionalidade.php");

require_once(__DIR__ . "/../../template/footer.php");