<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">pts_story</th>
        <th scope="col">Quem</th>
        <th scope="col">O que</th>
        <th scope="col">cod_func</th>
        <th scope="col">Funcionalidades</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
	$aux1 = 0;
    $total_1 = 0;
//    $countIdHistorias = $tarefaDao->countIdHistoria();
//    $countIdHistoriaIdSprints = $tarefaDao->countIdHistoriaIdSprint();


    foreach ($funcionalidades as $funcionalidade) :	
 ?>	
        <tr>
		    <?php if ($aux1 != $funcionalidade['idHistoria']){?> 
            <td><?= $funcionalidade['idHistoria'] ?>
			<a class="btn btn-danger" href="<?=$configs['document_root']?>/funcionalidade/adicionar/<?= $funcionalidade['idHistoria'] ?>"><i class="fas fa-plus"></i></a>
			</td>
			<?php } else { ?><td style="border-top:0"></td> <?php };?>
			
			<td><?= $funcionalidade['nome'] ?></td>
			<td><?= $funcionalidade['oQue'] ?></td>
			<td><?= $funcionalidade['codFunc'] ?></td>
			<td><?= $funcionalidade['funcionalidade'] ?></td>
			<td></td>
			<td><a class="btn btn-primary" href="<?=$configs['document_root']?>/funcionalidade/editar/<?= $funcionalidade['idHistoria'] ?>/<?= $funcionalidade['idFuncionalidade'] ?>"><i class="fas fa-edit"></i></a></td>
			<td><a class="btn btn-danger" href="<?=$configs['document_root']?>/funcionalidade/remover/<?= $funcionalidade['idHistoria'] ?>/<?= $funcionalidade['idFuncionalidade'] ?>"><i class="fas fa-trash"></i></a></td>
		</tr>
        <?php
        $aux1 = $funcionalidade['idHistoria'];
    endforeach
    ?>
    </tbody>
</table>