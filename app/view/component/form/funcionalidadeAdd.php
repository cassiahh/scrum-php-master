
<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?=$configs['document_root']?>/funcionalidade/adicionar/<?=$funcionalidade['idHistoria']?>/<?=$funcionalidade['idFuncionalidade']?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputIdHistoria">Código da Historia: </label>
            <input type="text" class="form-control" id="inputIdHistoria" aria-describedby="inputIdHistoria"
                   placeholder="idHistoria" name="idHistoria" value="<?=$funcionalidade['idHistoria']?>" readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="inputIdFuncionalidade">Código da Funcionalidade: </label>
            <input type="text" class="form-control" id="inputIdFuncionalidade" aria-describedby="inputIdFuncionalidade"
                   placeholder="idFuncionalidade" name="idFuncionalidade" value="<?= $funcionalidade['idFuncionalidade']?>" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="inputFuncionalidade">Funcionalidade: </label>
        <input type="text" class="form-control" id="inputFuncionalidade" aria-describedby="inputFuncionalidade"
               placeholder="Funcionalidade" name="Funcionalidade">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>