<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?= $configs['document_root'] ?>/cronograma/editar/<?= $tarefa['idHistoria'] ?>/<?= $tarefa['idFuncionalidade'] ?>/<?= $tarefa['idTarefa'] ?>"
      method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputIdHistoria">idHistoria: </label>
            <input type="text" class="form-control" id="inputIdHistoria" aria-describedby="inputIdHistoria"
                   placeholder="idHistoria" name="idHistoria" value="<?= $tarefa['idHistoria'] ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputIdFuncionalidade">idFuncionalidade: </label>
            <input type="text" class="form-control" id="inputIdFuncionalidade" aria-describedby="inputIdFuncionalidade"
                   placeholder="idFuncionalidade" name="idFuncionalidade" value="<?= $tarefa['idFuncionalidade'] ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputIdTarefa">idTarefa: </label>
            <input type="text" class="form-control" id="inputIdTarefa" aria-describedby="inputIdTarefa"
                   placeholder="idTarefa" name="idTarefa" value="<?= $tarefa['idTarefa'] ?>">
        </div>
    </div>

    <div class="form-group">

        <!--<input type="text" class="form-control" id="inputSprint" aria-describedby="text">
        <small id="text" class="form-text text-muted"></small>-->
    </div>
    <div class="form-group">

        <!--<input type="text" class="form-control" id="inputSprint" aria-describedby="text">
        <small id="text" class="form-text text-muted"></small>-->
    </div>
    <div class="form-group">

        <!--<input type="text" class="form-control" id="inputSprint" aria-describedby="text">
        <small id="text" class="form-text text-muted"></small>-->
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputInicio">Início</label>
                <input type="text" class="form-control" id="inputInicio" aria-describedby="inputInicio"
                       placeholder="Inicio" name="inicio" value="<?= $tarefa['inicio'] ?>">
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputTermino">Término</label>
                <input type="text" class="form-control" id="inputTermino" aria-describedby="inputTermino"
                       placeholder="Termino" name="termino" value="<?= $tarefa['termino'] ?>">
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputTempo">Tempo</label>
                <input type="text" class="form-control" id="inputTempo" aria-describedby="inputTempo"
                       placeholder="Tempo" name="tempo" value="<?= $tarefa['tempo'] ?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputStatus">Status</label>
        <input type="text" class="form-control" id="inputStatus" aria-describedby="inputStatus"
               placeholder="Status" name="status" value="<?= $tarefa['status'] ?>">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect02">Status</label>
        </div>
        <select class="custom-select" id="inputGroupSelect02" name="status">
            <option value="A fazer" <?= ($tarefa['status'] == "A fazer") ? "A fazer" : '' ?>>A fazer</option>
            <option value="Fazendo" <?= ($tarefa['status'] == "Fazendo") ? "Fazendo" : '' ?>>Fazendo</option>
            <option value="Aguardando" <?= ($tarefa['status'] == "Aguardando") ? "Aguardando" : '' ?>>Aguardando
            </option>
            <option value="Feito" <?= ($tarefa['status'] == "Feito") ? "Feito" : '' ?>>Feito</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>