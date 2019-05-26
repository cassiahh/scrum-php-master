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


    foreach ($historia as $historia) :	
 ?>	
        <tr>
		    <?php if ($aux1 != $historia['idHistoria']){?> 
            <td><?= $historia['idHistoria'] ?></td>
			<?php } else { ?><td style="border-top:0"></td> <?php };?>
			
			<td><?= $historia['idHistorianome'] ?></td>
			<td><?= $historia['gostariaHistoria'] ?></td>
			<td><?= $historia['idEpico'] ?></td>
			<td><?= $historia['objetivoHistoria'] ?></td>
			<td></td>
			<td><a class="btn btn-primary" href="<?=$configs['document_root']?>/historia/editar/<?= $historia['idHistoria'] ?>/<?= $historia['idhistoria'] ?>"><i class="fas fa-edit"></i></a></td>
			<td><a class="btn btn-danger" href="<?=$configs['document_root']?>/historia/remover/<?= $historia['idHistoria'] ?>/<?= $historia['idhistoria'] ?>"><i class="fas fa-trash"></i></a></td>
		</tr>
        <?php
        $aux1 = $historia['idHistoria'];
    endforeach
    ?>
    </tbody>
</table>