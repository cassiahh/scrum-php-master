<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?= $configs['document_root'] ?>/product-backlog/editar"
      method="post">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputIdHistoria">idHistoria: </label>
            <input type="text" class="form-control" id="inputIdHistoria" aria-describedby="inputIdHistoria"
                   placeholder="idHistoria" name="idHistoria" value="<?= $tarefa['idHistoria'] ?>" readonly="readonly">
        </div>
        <div class="form-group col-md-2">
            <label for="inputIdFuncionalidade">idFuncionalidade: </label>
            <input type="text" class="form-control" id="inputIdFuncionalidade" aria-describedby="inputIdFuncionalidade"
                   placeholder="idFuncionalidade" name="idFuncionalidade" value="<?= $tarefa['idFuncionalidade'] ?>" readonly="readonly">
        </div>
        <div class="form-group col-md-2">
            <label for="inputIdTarefa">idTarefa: </label>
            <input type="text" class="form-control" id="inputIdTarefa" aria-describedby="inputIdTarefa"
                   placeholder="idTarefa" name="idTarefa" value="<?= $tarefa['idTarefa'] ?>" readonly="readonly">
        </div>
        <div class="form-group col-md-2">
            <label for="inputIdSprint">idSprint: </label>
            <input type="text" class="form-control" id="inputIdSprint" aria-describedby="inputIdSprint"
                   placeholder="idSprint" name="idSprint" value="<?= $tarefa['idSprint'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="inputTarefa">Tarefa: </label>
        <input type="text" class="form-control" id="inputTarefa" aria-describedby="inputTarefa"
               placeholder="Tarefa" name="tarefa" value="<?= $tarefa['tarefa'] ?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Responsável</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="ra">
                    <?php
                    foreach ($pessoas as $pessoa) :
                        ?>
                        <option value="<?= $pessoa['ra'] ?>" <?= ($pessoa['ra'] == $tarefa['ra']) ? 'selected' : '' ?>><?= $pessoa['nome'] ?></option>
                    <?php
                    endforeach
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect02">Status</label>
                </div>
                <select class="custom-select" id="inputGroupSelect02" name="status">
                    <option value="A fazer" <?= ($tarefa['status'] == "A fazer") ? "selected" : '' ?>>A fazer</option>
                    <option value="Fazendo" <?= ($tarefa['status'] == "Fazendo") ? "selected" : '' ?>>Fazendo</option>
                    <option value="Aguardando" <?= ($tarefa['status'] == "Aguardando") ? "selected" : '' ?>>
                        Aguardando
                    </option>
                    <option value="Feito" <?= ($tarefa['status'] == "Feito") ? "selected" : '' ?>>Feito</option>
                </select>
            </div>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputDependencia">Dependencia: </label>
                <input type="text" class="form-control" id="inputDependencia" aria-describedby="inputDependencia"
                       placeholder="Dependencia" name="dependencia" value="<?= $tarefa['dependencia'] ?>">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPrioridade">Prioridade: </label>
            <input type="text" class="form-control" id="inputPrioridade" aria-describedby="inputPrioridade"
                   placeholder="Prioridade" name="prioridade" value="<?= $tarefa['prioridade'] ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="inputDuracao">Duracao: </label>
            <input type="text" class="form-control" id="inputDuracao" aria-describedby="inputDuracao"
                   placeholder="Duracao" name="duracao" value="<?= $tarefa['duracao'] ?>">
        </div>
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
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>