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

if($_POST != null) {
    if($updated) { ?>
        <p class="alert alert-success d-print-none" role="alert">Pessoa alterado com sucesso!</p>
    <?php
        require_once(__DIR__ . "/../../component/table/projeto.php");
        require_once(__DIR__ . "/../../component/table/pessoa.php");
     } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="alert alert-danger" role="alert">Pessoa não foi alterado: <?= $msg ?></p>
        <?php
        require_once(__DIR__ . "/../../component/form/pessoa.php");
        
    }
}else{
   
    require_once(__DIR__ . "/../../component/form/pessoa.php");
}


require_once(__DIR__ . "/../../template/footer.php");
?>