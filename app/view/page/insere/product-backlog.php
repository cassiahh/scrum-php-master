<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 15/06/19
 * Time: 13:04
 */

require_once(__DIR__ . "/../../template/header.php");

require_once(__DIR__ . "/../../../security/session/Session.php");
Session::redirectIfNotLogged();

if($post != null) {
    if($updated) { ?>
        <p class="alert alert-success d-print-none" role="alert">Tarefa adicionada com sucesso!</p>
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
     } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="alert alert-danger" role="alert">Tarefa não foi adicionada: <?= $msg ?></p>
        <?php
        require_once(__DIR__ . "/../../component/form/product-backlogAdd.php");
    }
}else{
    require_once(__DIR__ . "/../../component/form/product-backlogAdd.php");
}



require_once(__DIR__ . "/../../template/footer.php");