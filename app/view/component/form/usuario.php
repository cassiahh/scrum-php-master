
<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?=$configs['document_root']?>/alteraSenha/<?=$usuario['ra']?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputNome">Nome: </label>
            <input type="text" class="form-control" id="inputNome" aria-describedby="inputNome"
                   placeholder="nome" name="nome" value="<?=$usuario['nome']?>" readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="inputRA">RA: </label>
            <input type="text" class="form-control" id="inputRA" aria-describedby="inputRA"
                   placeholder="ra" name="ra" value="<?= $usuario['ra']?>" readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="inputSenha">Senha: </label>
        <input type="text" class="form-control" id="inputSenha" aria-describedby="inputSenha"
               placeholder="Senha" name="Senha" value="Digite sua nova senha">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>