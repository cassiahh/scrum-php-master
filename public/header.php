<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 20/04/19
 * Time: 19:59
 */
require_once(__DIR__."/../app/view/SessionAlert.php"); ?>

<html>
<head>
    <title>Scrum</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top bg-light">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Scrum</a>
            </div>
            <div>
                <nav class="nav">
                    <a class="nav-link" href="list-projeto.php">Projeto</a>
                    <a class="nav-link" href="#">Épicos</a>
                    <a class="nav-link" href="#">Histórias</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link" href="list-product-backlog.php">Product Backlog</a>
                    <a class="nav-link" href="#">Cronograma</a>
                </nav>
            </div>
        </div>
    </div>
<br>
    <div class="container">

    <div class="principal">

        <?php
        sessionAlert("success");
        sessionAlert("danger");
        ?>
