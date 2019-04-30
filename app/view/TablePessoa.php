

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">papel</th>
        <th scope="col">nome</th>
        <th scope="col">ra</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    
    foreach ($pessoas as $pessoa) :
        ?>
        <tr>
            <td><?= $pessoa['papel'] ?></td>
            <td><?= $pessoa['nome'] ?></td>
            <td><?= $pessoa['ra'] ?></td>
            <td><a class="btn btn-primary" href="edit-pessoa.php?id=<?= $pessoa['ra'] ?>"><i class="fas fa-edit"></i></a></td>
            <td>
                <form action="remove-pessoa.php" method="post">
                    <input type="hidden" name="id" value="<?= $pessoa['ra'] ?>"/>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>
        <?php
    endforeach
    ?>
    </tbody>
</table>