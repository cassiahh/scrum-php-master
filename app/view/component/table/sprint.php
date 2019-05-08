<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>


<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Cod_tar</th>
        <th scope="col">Tarefa</th>
        <th scope="col">Duração</th>
        <th scope="col">Nº Sprints</th>
        <th scope="col">Responsável</th>
        <th scope="col">Status</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    
    foreach ($tarefas as $sprint) :
        ?>
        <tr>
            <td><?= $sprint['cod_tar'] ?></td>
            <td><?= $sprint['tarefa'] ?></td>
            <td><?= $sprint['duracao'] ?></td>
            <td><?= $sprint['idSprint'] ?></td>
            <td><?= $sprint['nome'] ?></td>
            <td><?= $sprint['status'] ?></td>
            <td><a class="btn btn-primary" href="<?=$configs['document_root']?>/sprint/editar/<?= $sprint['cod_tar'] ?>/<?= $sprint['tarefa'] ?>/<?= $sprint['duracao'] ?>/<?= $sprint['num_sprints'] ?>/<?= $sprint['respons'] ?>/<?= $sprint['status'] ?>"><i class="fas fa-edit"></i></a></td>
            <td><a class="btn btn-danger" href="<?=$configs['document_root']?>/sprint/remover/<?= $sprint['cod_tar'] ?>/<?= $sprint['tarefa'] ?>/<?= $sprint['duracao'] ?>/<?= $sprint['num_Sprints'] ?>/<?= $sprint['respons'] ?>/<?= $sprint['status'] ?>"><i class="fas fa-trash"></i></a></td>
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>