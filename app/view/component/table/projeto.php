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
            <td><?= $projeto->getProjeto('projeto') ?></td>
            <td><?= $projeto->getCliente('cliente') ?></td>
            <td><?= $projeto->getProductOwner('projectOwner') ?></td>
        <td><a class="btn btn-primary" href="<?=$configs['document_root']?>/projeto/editar"><i class="fas fa-edit"></i></a></td>
       
        
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>