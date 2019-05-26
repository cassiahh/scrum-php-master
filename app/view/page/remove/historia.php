<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26/05/19
 * Time: 17:00
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
//Session::redirectIfNotLogged();

if($removed) { ?>
    <p class="alert alert-success" role="alert">Historia removida com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="alert alert-danger" role="alert">Historia não foi removida. <?= $msg ?></p>
    <?php
}


require_once(__DIR__ . "/../../template/footer.php");