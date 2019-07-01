
<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?=$configs['document_root']?>/historia/adicionarhistoria/" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputIdHistoria">Código da Historia: </label>
            <input type="text" class="form-control" id="inputIdHistoria" aria-describedby="inputIdHistoria"
                   placeholder="idHistoria" name="idHistoria">
        </div>
        <div class="form-group col-md-3">
            <label for="inputgostariaHistoria">Gostaria: </label>
            <input type="text" class="form-control" id="inputgostariaHistoria" aria-describedby="inputgostariaHistoria"
                   placeholder="RA de quem gostaria da Historia" name="gostaria">
        </div>
    </div>
    <div class="form-group">
        <label for="inputFuncionalidade">RA: </label>
        <input type="text" class="form-control" id="inputidEpico" aria-describedby="inputidEpicolidade"
               placeholder="RA" name="ra">
    </div>
    <div class="form-group">
        <label for="inputFuncionalidade">Objetivo Historia: </label>
        <input type="text" class="form-control" id="inputobjetivoHistoria" aria-describedby="inputobjetivoHistoria"
               placeholder="Objetivo da Historia" name="objetivo">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>