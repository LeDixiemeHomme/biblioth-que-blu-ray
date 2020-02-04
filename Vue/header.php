<?php
/**
 * Created by PhpStorm.
 * User: benoi
 * Date: 05/05/2019
 * Time: 23:59
 */

?>
<!doctype html>
<html lang="fr">
    <head>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="UTF-8" />
        <base href="<?= $racineWeb ?>" >
        <link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
</head>
<body>
<div class="container-fluid">
<div id="global">
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="accueil">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php
                    if(isset($_SESSION['connecte']))
                    {
                        echo '<li class="nav-item"><a class="nav-link" href="admin">Compte Admin</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="connexion/deconnecter">Se déconnecter</a></li>';
                    }
                    else
                    {
                        echo '
                        <li class="nav-item"><a class="nav-link" href="connexion">Se connecter</a></li>
                        '; } ?>
                </div>
            </nav>

            <a href=""><h1 class="h1-header">Liste des Blu-ray dans la bibliothèque</h1></a>
            <br>
    </header>