<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 19:50
 */
require_once(__DIR__."/../app/view/Header.php");
require_once(__DIR__."/../app/dao/TarefaDao.php");

$tarefas = listaTarefas();

echo $tarefas;
?>

<!---->
<!--<table class="table table-striped table-bordered">-->
<!---->
<!--    --><?php
//        $produtos = listaProdutos($conexao);
//        foreach($produtos as $produto) :
//    ?>
<!--    <tr>-->
<!--        <td>--><?//= $produto['nome'] ?><!--</td>-->
<!--        <td>--><?//= $produto['preco'] ?><!--</td>-->
<!--        <td>--><?//= substr($produto['descricao'], 0, 40) ?><!--</td>-->
<!--        <td>--><?//= $produto['categoria_nome'] ?><!--</td>-->
<!--        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=--><?//=$produto['id']?><!--">alterar</a></td>-->
<!--        <td>-->
<!--            <form action="remove-produto.php" method="post">-->
<!--                <input type="hidden" name="id" value="--><?//=$produto['id']?><!--" />-->
<!--                <button class="btn btn-danger">remover</button>-->
<!--            </form>-->
<!--        </td>-->
<!--    </tr>-->
<!--    --><?php
//        endforeach
//    ?>
<!--</table>-->
<!---->
<?php require_once(__DIR__."/../app/view/Footer.php"); ?>
