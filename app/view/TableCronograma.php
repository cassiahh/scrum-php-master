<?php

require_once(__DIR__ . "/../model/database/Connection.php");
require_once(__DIR__ . "/../model/dao/TarefaDao.php");

<<<<<<< HEAD
$tarefaDao = new TarefaDao(Connection::getConnection());
$tarefas = $tarefaDao->listaTarefas();

=======
$tarefaDao = new TarefaDao($connection);
$tarefas = $tarefaDao->listaTarefas();

var_dump($tarefas);
>>>>>>> 8b2a7158592409a8467550d4428f51b37f54ee64
?>

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Sprint</th>
<<<<<<< HEAD
        <th scope="col">Código Tarefa</th>
=======
        <th scope="col">Cod_Tar</th>
>>>>>>> 8b2a7158592409a8467550d4428f51b37f54ee64
        <th scope="col">Tarefa</th>
        <th scope="col">Duração</th>
        <th scope="col">Início</th>
        <th scope="col">Término</th>
        <th scope="col">Tempo</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
    

    foreach ($tarefas as $tarefa) :
        ?>
        <tr>
<<<<<<< HEAD
            <td><?= $tarefa['idSprint'] ?></td>
            <td><?= $tarefa['cod_tar'] ?></td>
            <td><?= $tarefa['tarefa'] ?></td>
            <td><?= $tarefa['duracao'] ?></td>
            <td><?= $tarefa['inicio'] ?></td>
            <td><?= $tarefa['termino'] ?></td>
            <td><?= $tarefa['tempo'] ?></td>
            <td><?= $tarefa['status'] ?></td>
                            
            
=======
            <td><?= tarefa['idSprint'] ?></td>
            <td><?= tarefa['cod_tar']?></td>
            <td><?= tarefa['tarefa'] ?></td>
                            
            <td><a class="btn btn-primary" href="edit-cronograma.php?id=<?= cronograma['idSprint'] ?>"><i class="fas fa-edit"></i></a></td>
>>>>>>> 8b2a7158592409a8467550d4428f51b37f54ee64
            <td><a class="btn btn-primary" href="edit-cronograma.php?id=<?= cronograma['idTarefa'] ?>"><i class="fas fa-edit"></i></a></td>
            <td>
                <form action="remove-cronograma.php" method="post">
                    <input type="hidden" name="id" value="<?= cronograma['idSprint'] ?>"/>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
<<<<<<< HEAD
=======
                    <input type="hidden" name="id" value="<?= cronograma['idTarefa'] ?>"/>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
>>>>>>> 8b2a7158592409a8467550d4428f51b37f54ee64
                </form>
            </td>
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>