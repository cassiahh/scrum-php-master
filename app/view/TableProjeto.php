<?php

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/ProjetoDao.php");

$projetoDao = new ProjetoDao($connection);
$projetos = $projetoDao->listaProjeto();

?>

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Projeto</th>
        <th scope="col">Cliente</th>
        <th scope="col">Product Owner</th>
        
    </tr>
    </thead>
    <tbody>
    <?php
    
    foreach ($projetos as $projeto) :
        //var_dump($projeto);
        ?>
        <tr>
            <td><?= $projeto->getProjeto() ?></td>
            <td><?= $projeto->getCliente() ?></td>
            <td><?= $projeto->getProductOwner() ?></td>
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>