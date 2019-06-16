<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form action="<?= $configs['document_root'] ?>/product-backlog/adicionar"
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
                   placeholder="idSprint" name="idSprint">
        </div>
    </div>
    <div class="form-group">
        <label for="inputTarefa">Tarefa: </label>
        <input type="text" class="form-control" id="inputTarefa" aria-describedby="inputTarefa"
               placeholder="Tarefa" name="tarefa" >
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
                        <option value="<?= $pessoa['ra'] ?>"><?= $pessoa['nome'] ?></option>
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
                    <option value="A fazer">A fazer</option>
                    <option value="Fazendo">Fazendo</option>
                    <option value="Aguardando">
                        Aguardando
                    </option>
                    <option value="Feito">Feito</option>
                </select>
            </div>
        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputDependencia">Dependencia: </label>
                <input type="text" class="form-control" id="inputDependencia" aria-describedby="inputDependencia"
                       placeholder="Dependencia" name="dependencia">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPrioridade">Prioridade: </label>
            <input type="text" class="form-control" id="inputPrioridade" aria-describedby="inputPrioridade"
                   placeholder="Prioridade" name="prioridade">
        </div>
        <div class="form-group col-md-4">
            <label for="inputDuracao">Duracao: </label>
            <input type="text" class="form-control" id="inputDuracao" aria-describedby="inputDuracao"
                   placeholder="Duracao" name="duracao">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputInicio">Início</label>
                <input type="text" class="form-control" id="inputInicio" aria-describedby="inputInicio"
                       placeholder="Inicio" name="inicio">
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputTermino">Término</label>
                <input type="text" class="form-control" id="inputTermino" aria-describedby="inputTermino"
                       placeholder="Termino" name="termino">
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="form-group">
                <label for="inputTempo">Tempo</label>
                <input type="text" class="form-control" id="inputTempo" aria-describedby="inputTempo"
                       placeholder="Tempo" name="tempo">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>