<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Projeto</th>
        <th scope="col">Cliente</th>
        <th scope="col">Product Owner</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($projetos as $projeto) :
        ?>
        <tr>
            <td><?= $projeto->getProjeto() ?></td>
            <td><?= $projeto->getCliente() ?></td>
            <td><?= $projeto->getProductOwner() ?></td>
        <td><a class="btn btn-primary" href="<?=$configs['document_root']?>/projeto/editar/<?= $projeto->getProjeto() ?>"><i class="fas fa-edit"></i></a></td>
       
        
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>