

<table id="projeto" class="table table-sm col-4">
    <thead class="thead-light">
    <tr>
        <th scope="col">Projeto</th>
        <th scope="col">Cliente</th>
        <th scope="col">Product Owner</th>
        
    </tr>
    </thead>
    <tbody>
    <?php
    
    foreach ($projetos as $projeto) :
        ?>
        <tr>
            <td><?= $projeto->getProjeto() ?></td>
            <td><?= $projeto->getCliente() ?></td>
            <td><?= $projeto->getProductOwner() ?></td>
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>