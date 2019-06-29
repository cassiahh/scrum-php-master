
<?php
$configs = include __DIR__ . '/../../../../config.php';
?>
<form action="<?=$configs['document_root']?>/historia/adicionarhistoria/" method="post">
        <div class="form-group col-md-2">
            <label for="inputIdHistoria">Código da Historia: </label>
            <input type="text" class="form-control" id="inputIdHistoria" aria-describedby="inputIdHistoria"
                   placeholder="idHistoria" name="idHistoria">
        </div>

        <div class="form-group col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Quem</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="ra">
                    <?php
foreach ($pessoas as $pessoa):
?>
                        <option value="<?=$pessoa['ra']?>"><?=$pessoa['nome']?></option>
                    <?php
endforeach
?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputgostariaHistoria">Gostaria: </label>
            <input type="text" class="form-control" id="inputgostariaHistoria" aria-describedby="inputgostariaHistoria"
                   placeholder="Gostaria" name="gostaria">
        </div>
    <div class="form-group">
        <label for="inputFuncionalidade">Objetivo Historia: </label>
        <input type="text" class="form-control" id="inputobjetivoHistoria" aria-describedby="inputobjetivoHistoria"
               placeholder="Objetivo" name="objetivo">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>