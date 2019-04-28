
<div class="jumbotron">
    <h1>Bem vindo!</h1>
</div>
<?php
$configs = include(__DIR__.'/../../config.php');
if (Session::isLogged()) { ?>
    <p class="text-success">Você está logado como <?= Session::getSessionRa() ?>. <a
            href="<?=$configs['url_base']?>/logout">Deslogar</a></p>
<?php } else { ?>
    <h2>Login</h2>
    <form action="<?=$configs['url_base']?>/login" method="post">
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
<?php } ?>