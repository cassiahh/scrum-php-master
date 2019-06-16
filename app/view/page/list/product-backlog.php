<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 21/04/19
 * Time: 03:16
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
//Session::redirectIfNotLogged();

?>
<div class="row" >
<?php
require_once(__DIR__ . "/../../component/table/cabecalho.php");
?>
<div class="col-md-4 float-right" >
    <ul >
        <li > h = História </li >
        <li > d = Duração </li >
        <li > q / s = quantidade de sprints </li >
        <li > t / h = tempo de historia </li >
    </ul >
</div >
</div >
<?php
require_once(__DIR__ . "/../../component/table/product-backlog.php");

require_once(__DIR__ . "/../../template/footer.php");