
<?php
$configs = include(__DIR__ . '/../../../../config.php');

?>


<form action="<?=$configs['document_root']?>/projeto/editar/<?=$pessoa['ra']?>/<?=$projeto['nome']?>/<?=$projeto['papel']?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="projeto">Projeto: </label>
            <input type="text" class="form-control" id="projeto" aria-describedby="projeto"
                   placeholder="projeto" name="projeto" value="<?=$projeto['projeto']?>">
        </div>
        <div class="form-group col-md-2">
            <label for="projeto">Cliente: </label>
            <input type="text" class="form-control" id="cliente" aria-describedby="cliente"
                   placeholder="cliente" name="cliente" value="<?=$projeto['cliente']?>">
        </div>
        <div class="form-group col-md-2">
            <label for="projeto">Product Owner: </label>
            <input type="text" class="form-control" id="projectOwner" aria-describedby="projectOwner"
                   placeholder="projectOwner" name="projectOwner" value="<?=$projeto['projectOwner']?>">
        </div>
    </div>
    

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>