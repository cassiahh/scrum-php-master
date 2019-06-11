
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="jumbotron">
    <h1>Bem vindo!</h1>
</div>
<?php
$configs = include(__DIR__ . '/../../../../config.php');
if (Session::isLogged()) { ?>
    <p class="text-success">Você está logado como <?= Session::getSessionRa() ?>. <a
            href="<?=$configs['document_root']?>/logout">Deslogar</a></p>
<?php } else { ?>
    <div class="login">
    <h2>Login</h2>
    <form action="<?=$configs['document_root']?>/login" method="post">
        <table class="table">
            <tr>
                <td>RA</td>
                <td><input class="form-control" type="text" name="ra"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php } ?>