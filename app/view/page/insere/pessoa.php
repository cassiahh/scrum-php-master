<?php
/**
 * Created by PhpStorm.
 * User: Camilli
 * Date: 24/05/19
 * Time: 01:00
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
//Session::redirectIfNotLogged();

if($post != null) {
    if($updated) { ?>
        <p class="alert alert-success" role="alert">Pessoa adicionada com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="alert alert-danger" role="alert">Pessoa não foi adicionada: <?= $msg ?></p>
        <?php
        require_once(__DIR__ . "/../../component/form/pessoaAdd.php");
    }
}else{
    require_once(__DIR__ . "/../../component/form/pessoaAdd.php");
}


require_once(__DIR__ . "/../../template/footer.php");