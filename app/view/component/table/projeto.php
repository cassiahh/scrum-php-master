<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Projeto</th>
        <th scope="col">Cliente</th>
        <th scope="col">Product Owner</th>
        <th scope="col" class="d-print-none"></th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $projetos['projeto'] ?></td>
            <td><?= $projetos['cliente'] ?></td>
            <td><?= $projetos['projectOwner'] ?></td>
        <td class="d-print-none"><a class="btn btn-primary" href="<?=$configs['document_root']?>/projeto/editar"><i class="fas fa-edit"></i></a></td>
        </tr>
    </tbody>
</table>