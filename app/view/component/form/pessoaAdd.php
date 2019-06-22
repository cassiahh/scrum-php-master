
<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?=$configs['document_root']?>/pessoa/adicionar" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputpapel">Papel: </label>
            <input type="text" class="form-control" id="inputPapel" aria-describedby="inputPapel"
                   placeholder="papel" name="papel">
        </div>
        <div class="form-group col-md-3">
            <label for="inputNome">Nome: </label>
            <input type="text" class="form-control" id="inputNome" aria-describedby="inputNome"
                   placeholder="nome" name="nome">
        </div>
    
    <div class="form-group">
        <label for="inputRa">Ra: </label>
        <input type="text" class="form-control" id="inputRa" aria-describedby="inputRa"
               placeholder="Ra" name="ra">
    </div>
    
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
