
<?php
$configs = include(__DIR__ . '/../../../../config.php');

?>


<form action="<?=$configs['document_root']?>/projeto/editar/<?=$projetos['projeto']?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputProjeto">Projeto: </label>
            <input type="text" class="form-control" id="inputProjeto" aria-describedby="inputProjeto"
                   placeholder="inputProjeto" name="inputProjeto" value="<?=$projetos['projeto']?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputProjeto">Cliente: </label>
            <input type="text" class="form-control" id="inputCliente" aria-describedby="inputCliente"
                   placeholder="inputCliente" name="inputCliente" value="<?=$projetos['cliente']?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputProjeto">Product Owner: </label>
            <input type="text" class="form-control" id="inputProjectowner" aria-describedby="inputProjectowner"
                   placeholder="inputProjectowner" name="inputProjectowner" value="<?=$projetos['projectOwner']?>">
        </div>
    </div>
    
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>