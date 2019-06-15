
<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?=$configs['document_root']?>/product-backlog/adicionar" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputIdHistoria">idHistoria: </label>
            <input type="text" class="form-control" id="inputIdHistoria" aria-describedby="inputIdHistoria"
                   placeholder="idHistoria" name="idHistoria" value="<?=$idHistoria?>" disabled>
        </div>
        <div class="form-group col-md-2">
            <label for="inputIdFuncionalidade">idFuncionalidade: </label>
            <input type="text" class="form-control" id="inputIdFuncionalidade" aria-describedby="inputIdFuncionalidade"
                   placeholder="idFuncionalidade" name="idFuncionalidade" value="<?=$idFuncionalidade?>" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="inputTarefa">Tarefa: </label>
        <input type="text" class="form-control" id="inputTarefa" aria-describedby="inputTarefa"
               placeholder="Tarefa" name="tarefa">
    </div>
    <div class="form-group">
        <label for="inputDependencia">Dependencia: </label>
        <input type="text" class="form-control" id="inputDependencia" aria-describedby="inputDependencia"
               placeholder="Dependencia" name="dependencia">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputPrioridade">Prioridade: </label>
            <input type="text" class="form-control" id="inputPrioridade" aria-describedby="inputPrioridade"
                   placeholder="Prioridade" name="prioridade">
        </div>
        <div class="form-group col-md-6">
            <label for="inputDuracao">Duracao: </label>
            <input type="text" class="form-control" id="inputDuracao" aria-describedby="inputDuracao"
                   placeholder="Duracao" name="duracao">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>