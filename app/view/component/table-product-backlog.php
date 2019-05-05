<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Funcionalidade</th>
        <th scope="col">cod_tar</th>
        <th scope="col">Tarefa</th>
        <th scope="col">Dependência</th>
        <th scope="col">Prioridade</th>
        <th scope="col">Duração</th>
        <th scope="col">Qtd Sprints</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $countIdHistorias = $tarefaDao->countIdHistoria();
    $countIdHistoriaIdSprints = $tarefaDao->countIdHistoriaIdSprint();

    foreach ($tarefas as $tarefa) :
        $total_1 = 0;
        $total_2 = 0;?>
        <tr>
            <td><?= $tarefa['funcionalidade'] ?></td>
            <td><?= $tarefa['idHistoria'] ?>.<?= $tarefa['idFuncionalidade'] ?>.<?= $tarefa['idTarefa'] ?></td>
            <td><?= $tarefa['tarefa'] ?></td>
            <td><?= $tarefa['dependencia'] ?></td>
            <td><?= $tarefa['prioridade'] ?></td>
            <td><?= $tarefa['duracao'] ?></td>
            <td><?php
                foreach($countIdHistoriaIdSprints as $countIdHistoriaIdSprint)
                    if($countIdHistoriaIdSprint['idHistoria'] == $tarefa['idHistoria'] && $countIdHistoriaIdSprint['idSprint'] == $tarefa['idSprint']){
                        echo $countIdHistoriaIdSprint['total'];
                        $total_1 += $countIdHistoriaIdSprint['total'];
                    }?></td>

<!--            <td>--><?php
//            foreach($countIdHistorias as $countIdHistoria)
//            if($countIdHistoria['idHistoria'] == $tarefa['idHistoria']){
//                echo $countIdHistoria['total'];
//                $total_2 += $countIdHistoria['total'];
//            }?><!--</td>-->
<!--            <td>--><?//=($total_1*$total_2)?><!--</td>-->
            <td><a class="btn btn-primary" href="edit-tarefa.php?id=<?= $tarefa['idTarefa'] ?>"><i class="fas fa-edit"></i></a></td>
            <td>
                <form action="remove-tarefa.php" method="post">
                    <input type="hidden" name="id" value="<?= $tarefa['idTarefa'] ?>"/>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>