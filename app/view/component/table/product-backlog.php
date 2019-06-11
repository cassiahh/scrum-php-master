<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
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
        <th scope="col" class="d-print-none"></th>
        <th scope="col" class="d-print-none"></th>
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
            <td class="d-print-none"><a class="btn btn-primary" href="<?=$configs['document_root']?>/product-backlog/editar/<?= $tarefa['idHistoria'] ?>/<?= $tarefa['idFuncionalidade'] ?>/<?= $tarefa['idTarefa'] ?>"><i class="fas fa-edit"></i></a></td>
            <td class="d-print-none"><a class="btn btn-danger" href="<?=$configs['document_root']?>/product-backlog/remover/<?= $tarefa['idHistoria'] ?>/<?= $tarefa['idFuncionalidade'] ?>/<?= $tarefa['idTarefa'] ?>"><i class="fas fa-trash"></i></a></td>
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>