<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Sprint</th>
        <th scope="col">Código Tarefa</th>
        <th scope="col">Tarefa</th>
        <th scope="col">Duração</th>
        <th scope="col">Início</th>
        <th scope="col">Término</th>
        <th scope="col">Tempo</th>
        <th scope="col">Status</th>
        <th scope="col" class="d-print-none"></th>
        <th scope="col" class="d-print-none"></th>
        
        
    </tr>
    </thead>
    <tbody>
    <?php
    

    foreach ($tarefas as $tarefa) :
        //var_dump($tarefa);
        ?>
        <tr>
            <td><?= $tarefa['idSprint'] ?></td>
            <td><?= $tarefa['cod_tar'] ?></td>
            <td><?= $tarefa['tarefa'] ?></td>
            <td><?= $tarefa['duracao'] ?></td>
            <td><?= $tarefa['inicio'] ?></td>
            <td><?= $tarefa['termino'] ?></td>
            <td><?= $tarefa['tempo'] ?></td>
            <td><?= $tarefa['status'] ?></td>

            <td class="d-print-none"><a class="btn btn-primary" href="<?=$configs['document_root']?>/cronograma/editar/<?= $tarefa['idHistoria'] ?>/<?= $tarefa['idFuncionalidade'] ?>/<?= $tarefa['idTarefa'] ?>"><i class="fas fa-edit"></i></a></td>
            <td class="d-print-none"><a class="btn btn-danger" href="<?=$configs['document_root']?>/cronograma/remover/<?= $tarefa['idHistoria'] ?>/<?= $tarefa['idFuncionalidade'] ?>/<?= $tarefa['idTarefa'] ?>"><i class="fas fa-trash"></i></a></td>
        
            <!--<td>
                <form action="remove-cronograma.php" method="post">
                    <input type="hidden" name="id" value="<?= cronograma['idTarefa'] ?>"/>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>-->
            
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>