<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 21:56
 */
require_once(__DIR__."/../app/view/Header.php");
require_once(__DIR__ . "/../app/security/Session.php"); ?>
    <div class="jumbotron">
        <h1>Bem vindo!</h1>
    </div>
<?php if (isLogged()) { ?>
    <p class="text-success">Você está logado como <?= getSessionRa() ?>. <a href="../app/security/Logout.php">Deslogar</a></p>
<?php } else { ?>
    <h2>Login</h2>
    <form action="../app/security/Login.php" method="post">
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

<?php require_once(__DIR__."/../app/view/Footer.php"); ?>