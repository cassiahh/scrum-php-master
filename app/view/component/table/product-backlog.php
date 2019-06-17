<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">h</th>
        <th scope="col">func</th>
        <th scope="col">Funcionalidade</th>
        <th scope="col">tar</th>
        <th scope="col">Tarefa</th>
        <th scope="col">Dependência</th>
        <th scope="col">Prioridade</th>
        <th scope="col">d</th>
        <th scope="col">q/s</th>
        <th scope="col">t/h</th>
        <th scope="col" class="d-print-none"></th>
        <th scope="col" class="d-print-none"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $ultimoIdHistoria = 0;
    $ultimoIdHistoriaIdFuncionalidade = 0;
    foreach ($tarefas as $tarefa) :
        $total_1 = 0;
        $total_2 = 0;?>
        <tr>

            <?php if ($ultimoIdHistoria != $tarefa['idHistoria']){?>
                <td><?= $tarefa['idHistoria'] ?></td>
            <?php } else { ?><td style="border-top:0"></td> <?php };?>
            <?php if ($ultimoIdHistoriaIdFuncionalidade != (float)($tarefa['idHistoria'].'.'.$tarefa['idFuncionalidade'])){?>
                <td><?= $tarefa['idHistoria'] ?>.<?= $tarefa['idFuncionalidade'] ?>
                    <a class="btn btn-danger d-print-none" href="<?=$configs['document_root']?>/product-backlog/adicionar/<?php
                    echo $tarefa['idHistoria'].'/'.$tarefa['idFuncionalidade'].'/';
                    $qtdDeFuncionalidadesValidadas =0;
                    foreach ($funcionalidadeAttributes as $funcionalidadeAttribute) {
                        if ($funcionalidadeAttribute['cod_func'] == ($tarefa['idHistoria'] . '.' . $tarefa['idFuncionalidade'])) {
                            echo ($funcionalidadeAttribute['maxIdTarefa']+1);
                        }else{
                            $qtdDeFuncionalidadesValidadas+=1;
                        }
                    }
                    if($qtdDeFuncionalidadesValidadas==sizeof($funcionalidadeAttributes)){
                        echo 1;
                    }
                    ?>"><i class="fas fa-plus"></i></a>
                </td>
            <?php } else { ?><td style="border-top:0"></td> <?php };?>
            <?php if ($ultimoIdHistoriaIdFuncionalidade != (float)($tarefa['idHistoria'].'.'.$tarefa['idFuncionalidade'])){?>
                <td><?= $tarefa['funcionalidade'] ?></td>
            <?php } else { ?><td style="border-top:0"></td> <?php };?>
            <td><?= $tarefa['idHistoria'] ?>.<?= $tarefa['idFuncionalidade'] ?>.<?= $tarefa['idTarefa'] ?></td>
            <td><?= $tarefa['tarefa'] ?></td>
            <td><?= $tarefa['dependencia'] ?></td>
            <td><?= $tarefa['prioridade'] ?></td>
            <td><?= $tarefa['duracao'] ?></td>
            <?php if ($ultimoIdHistoriaIdFuncionalidade != (float)($tarefa['idHistoria'].'.'.$tarefa['idFuncionalidade'])){?>
                <td><?php
                    foreach ($funcionalidadeAttributes as $funcionalidadeAttribute) {
                        if ($funcionalidadeAttribute['cod_func'] == ($tarefa['idHistoria'] . '.' . $tarefa['idFuncionalidade'])) {
                            echo $funcionalidadeAttribute['qtdSprints'];
                        }
                    }
                    ?></td>
            <?php } else { ?><td style="border-top:0"></td> <?php };?>
            <?php if ($ultimoIdHistoriaIdFuncionalidade != (float)($tarefa['idHistoria'].'.'.$tarefa['idFuncionalidade'])){?>
                <td><?php
                    foreach ($funcionalidadeAttributes as $funcionalidadeAttribute) {
                        if ($funcionalidadeAttribute['cod_func'] == ($tarefa['idHistoria'] . '.' . $tarefa['idFuncionalidade'])) {
                            echo $funcionalidadeAttribute['somaDuracao'];
                        }
                    }
                    ?></td>
            <?php } else { ?><td style="border-top:0"></td> <?php };?>
            <td class="d-print-none"><a class="btn btn-primary" href="<?=$configs['document_root']?>/product-backlog/editar/<?= $tarefa['idHistoria'] ?>/<?= $tarefa['idFuncionalidade'] ?>/<?= $tarefa['idTarefa'] ?>"><i class="fas fa-edit"></i></a></td>
            <td class="d-print-none"><a class="btn btn-danger" href="<?=$configs['document_root']?>/product-backlog/remover/<?= $tarefa['idHistoria'] ?>/<?= $tarefa['idFuncionalidade'] ?>/<?= $tarefa['idTarefa'] ?>"><i class="fas fa-trash"></i></a></td>
        </tr>
        <?php
        $ultimoIdHistoria = $tarefa['idHistoria'];
        $ultimoIdHistoriaIdFuncionalidade = (float)($tarefa['idHistoria'].'.'.$tarefa['idFuncionalidade']);
    endforeach;
    ?>
    </tbody>
</table>