<?php
$configs = include(__DIR__ . '/../../../../config.php');
?>
<form id="sprintForm" action="<?= $configs['document_root'] ?>/sprint/editar/<?php $sprint['idSprint']?>" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="sprint">Sprint</label>
        </div>

        <select class="custom-select" id="sprint" name ="idSprint">


            <?php foreach ($sprints as $sprint) : ?>
                <option value="<?= $sprint['idSprint'] ?>"><?= $sprint['idSprint'] ?> - <?= $sprint['sprint'] ?> - <?= $sprint['semana'] ?></option>
            <?php

        endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" onclick="filtrar()">Filtrar</button>
    <button type="submit" class="btn btn-primary" onclick="adicionar()">Adicionar</button>
    <button type="submit" class="btn btn-primary" onclick="editar()">Editar</button>
    <button type="submit" class="btn btn-primary" onclick="deletar()">Deletar</button>
    <script>
        var form = document.getElementById('sprintForm');
        function filtrar() {
            event.preventDefault();
            form.action = '<?= $configs['document_root'] ?>/sprint-filtro/filtrar';
            form.submit();
        }
        function adicionar() {
            event.preventDefault();
            form.action = '<?= $configs['document_root'] ?>/sprint-filtro/adicionar';
            form.submit();
        }
        function editar() {
            event.preventDefault();
            form.action = '<?= $configs['document_root'] ?>/sprint-filtro/editar';
            form.submit();
        }
        function deletar() {
            event.preventDefault();
            form.action = '<?= $configs['document_root'] ?>/sprint-filtro/deletar';
            form.submit();
        }
    </script>
</form>