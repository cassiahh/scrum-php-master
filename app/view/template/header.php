<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 19:59
 */
header("Content-type: text/html; charset=utf-8");
require_once(__DIR__ . "/../component/alert/SessionAlert.php");
$configs = include(__DIR__ . '/../../../config.php');
?>
<html>
<head>
    <title>Scrum</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="<?=$configs['document_root']?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$configs['document_root']?>/public/css/all.min.css">
    <link rel="stylesheet" href="<?=$configs['document_root']?>/public/css/style.css">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top bg-light">
        <div class="container">
            <div class="navbar-header">
                <a href="../page/index.php" class="navbar-brand"><img src="<?=$configs['document_root']?>/public/img/ifsp_icon.png" /> Scrum</a>
            </div>
            <div>
                <nav class="nav">
                    <a class="nav-link" href="<?=$configs['document_root']?>/projeto">Projeto</a>
                    <a class="nav-link" href="<?=$configs['document_root']?>/historia">Histórias</a>
                    <a class="nav-link" href="<?=$configs['document_root']?>/funcionalidade">Funcionalidades</a>
                    <a class="nav-link" href="<?=$configs['document_root']?>/product-backlog">Product Backlog</a>
                    <a class="nav-link" href="<?=$configs['document_root']?>/sprint">Sprint</a>
                    <a class="nav-link" href="<?=$configs['document_root']?>/cronograma">Cronograma</a>
                </nav>
            </div>
        </div>
    </div>
<br>
    <div class="container">

    <div class="principal">

        <?php
        Alert::session("success");
        Alert::session("danger");
        ?>
