<?php
$configs = include(__DIR__ . '/../../../../config.php');

?>
<form action="<?= $configs['document_root'] ?>/sprint/adicionar/sprint/" method="post">
    <div class="form-group">
        <label for="inputidSprint">Código Sprint: </label>
        <input name="idSprint" type="text" class="form-control" id="inputidsprint" aria-describedby="inputidsprint" placeholder="Id do Sprint" ?>
    </div>
    <div class="form-group">
        <label for="inputSprint">Descrição: </label>
        <input name="sprint" type="text" class="form-control" id="inputSprint" aria-describedby="inputSprint" placeholder="Sprint" ?>
    </div>
    <div class="form-group">
        <label for="inputSemana">Semana: </label>
        <input name="semana" type="text" class="form-control" id="inputSemana" aria-describedby="inputSemana" placeholder="Semana" ?>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>