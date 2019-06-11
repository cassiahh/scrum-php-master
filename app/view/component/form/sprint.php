
<?php
$configs = include(__DIR__ . '/../../../../config.php');

?>


<form action="<?=$configs['document_root']?>/sprint/editar/<?=$tarefa['idHistoria']?>/<?=$tarefa['idFuncionalidade']?>/<?=$tarefa['idTarefa']?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputidTarefa">Cód Tarefa: </label>
            <input type="text" class="form-control" id="inputidTarefa" aria-describedby="inputidTarefa"
                   placeholder="idTarefa" name="idTarefa" value="<?=$tarefa['idTarefa']?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputTarefa">Tarefa: </label>
            <input type="text" class="form-control" id="inputTarefa" aria-describedby="inputTarefa"
                   placeholder="tarefa" name="tarefa" value="<?=$tarefa['tarefa']?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputDuracao">Duração: </label>
            <input type="text" class="form-control" id="inputDuracao" aria-describedby="inputDuracao"
                   placeholder="duracao" name="duracao" value="<?=$tarefa['duracao']?>">
        </div>
    </div>
    <div class="form-group">
        <label for="idSprint">Núm Sprints: </label>
        <input type="text" class="form-control" id="idSprint" aria-describedby="idSprint"
               placeholder="idSprint" name="idSprint" value="<?=$tarefa['idSprint']?>">
    </div>
    <div class="form-group">
        <label for="inputResponsavel">Responsavel: </label>
        <input type="text" class="form-control" id="ra" aria-describedby="inputnome"
               placeholder="ra" name="ra" value="<?=$tarefa['ra']?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputStatus">Status: </label>
            <input type="text" class="form-control" id="inputStatus" aria-describedby="inputStatus"
                   placeholder="Status" name="status" value="<?=$tarefa['status']?>">
        </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputDependencia">Dependência: </label>
            <input type="text" class="form-control" id="inputDependencia" aria-describedby="inputDependencia"
                   placeholder="Dependencia" name="dependencia" value="<?=$tarefa['dependencia']?>">
        </div>
    

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>