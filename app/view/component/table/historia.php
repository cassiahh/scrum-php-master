<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">ID da Historia</th>
        <th scope="col">Gostaria de:</th>
        <th scope="col">O que</th>
        <th scope="col">ID do Epico</th>
        <th scope="col">Objetivo da Historia</th>
        <th scope="col" colspan="2" class="d-print-none"><a class="btn btn-danger" href="<?=$configs['document_root']?>/historia/adicionar">Adicionar História <i class="fas fa-plus"></i></a></th>
    </tr>
    </thead>
    <tbody>
    <?php
	$aux1 = 0;
    $total_1 = 0;
//    $countIdHistorias = $tarefaDao->countIdHistoria();
//    $countIdHistoriaIdSprints = $tarefaDao->countIdHistoriaIdSprint();


    foreach ($historias as $historia) :	
 ?>	
        <tr>
		    <?php if ($aux1 != $historia['idHistoria']){?> 
            <td><?= $historia['idHistoria'] ?></td>
			<?php } else { ?><td style="border-top:0"></td> <?php };?>
			
			<td><?= $historia['idHistoria'] ?></td>
			<td><?= $historia['gostaria'] ?></td>
			<td><?= $historia['ra'] ?></td>
			<td><?= $historia['objetivo'] ?></td>
			<td><a class="btn btn-primary d-print-none" href="<?=$configs['document_root']?>/historia/editar/<?= $historia['idHistoria'] ?>"><i class="fas fa-edit"></i></a></td>
			<td><a class="btn btn-danger d-print-none" href="<?=$configs['document_root']?>/historia/remover/<?= $historia['idHistoria'] ?>"><i class="fas fa-trash"></i></a></td>
		</tr>
        <?php
        $aux1 = $historia['idHistoria'];
    endforeach
    ?>
    </tbody>
</table>