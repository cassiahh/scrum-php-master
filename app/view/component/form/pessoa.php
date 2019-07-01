<html>
    <?php
$configs = include(__DIR__ . '/../../../../config.php');
//var_dump($pessoa['ra']);
?>

<form action = "<?=$configs['document_root']?>/pessoa/editar/<?= $pessoas['ra']?>" method = "post">
    <div class="form-row">
     <div class="form-group col-md-2">         
    <label for="inputPapel">Papel: </label>
    <input type="inputText" class="form-control" name="inputPapel" value="" id="inputPapel" aria-describedby="inputPapel" placeholder="Papel">
    <small id="papelHelp" class="form-text text-muted">Coloque seu papel no scrum.</small>   
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-2">
    <label for="inputNome">Nome: </label>
    <input type="inputText" class="form-control" id="inputNome" name="inputNome" value="" aria-describedby="inputNome" placeholder="Nome">
    <small id="nomeHelp" class="form-text text-muted">Coloque seu nome.</small>   
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-2">
    <label for="inputRa">Ra: </label>
    <input type="inputText" class="form-control" id="inputRa" name="inputRa" value="" aria-describedby="inputRa" placeholder="Ra">
    <small id="raHelp" class="form-text text-muted">Coloque seu ra.</small>   
    </div>
    
        
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
    
</form>
    </html>