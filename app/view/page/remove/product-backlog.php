<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 05/05/19
 * Time: 03:26
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
Session::redirectIfNotLogged();

if($removed) { ?>
    <p class="alert alert-success" role="alert">Product-backlog removido com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="alert alert-danger" role="alert">Product-backlog não foi removido: <?= $msg ?></p>
    <?php
}


require_once(__DIR__ . "/../../template/footer.php");