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
        <p class="alert alert-success" role="alert">Cronograma adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="alert alert-danger" role="alert">Cronograma não foi adicionado: <?= $msg ?></p>
        <?php
        require_once(__DIR__ . "/../../component/form/cronograma.php");
    }
}else{
    require_once(__DIR__ . "/../../component/form/cronograma.php");
}


require_once(__DIR__ . "/../../template/footer.php");