<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 05/05/19
 * Time: 01:00
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
//Session::redirectIfNotLogged();

if($post != null) {
    if($updated) { ?>
        <p class="alert alert-success d-print-none" role="alert">Product-backlog adicionado com sucesso!</p>
        <?php
        require_once(__DIR__ . "/../../component/table/product-backlog.php");
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="alert alert-danger" role="alert">Product-backlog não foi adicionado: <?= $msg ?></p>
        <?php
        require_once(__DIR__ . "/../../component/form/product-backlog.php");
    }
}else{
    require_once(__DIR__ . "/../../component/form/product-backlog.php");
}


require_once(__DIR__ . "/../../template/footer.php");