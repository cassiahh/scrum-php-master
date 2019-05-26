
<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?=$configs['document_root']?>/historia/editar/<?=$historia['idHistoria']?>/<?=$historia['idHistoria']?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputIdHistoria">Código da Historia: </label>
            <input type="text" class="form-control" id="inputIdHistoria" aria-describedby="inputIdHistoria"
                   placeholder="idHistoria" name="idHistoria" value="<?=$historia['idHistoria']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="inputgostariaHistoria">Gostaria de: </label>
            <input type="text" class="form-control" id="inputgostariaHistoria" aria-describedby="inputgostariaHistoria"
                   placeholder="gostariaHistoria" name="gostariaHistoria" value="<?= $historia['gostariaHistoria']?>">
        </div>
    </div>
    <div class="form-group">
        <label for="inputFuncionalidade">Código do Épico: </label>
        <input type="text" class="form-control" id="inputidEpico" aria-describedby="inputidEpicolidade"
               placeholder="idEpico" name="idEpico" value="<?=$historia['idEpico']?>">
    </div>
    <div class="form-group">
        <label for="inputFuncionalidade">Objetivo Historia: </label>
        <input type="text" class="form-control" id="inputobjetivoHistoria" aria-describedby="inputobjetivoHistoria"
               placeholder="objetivoHistoria" name="objetivoHistoria" value="<?=$historia['objetivoHistoria']?>">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>