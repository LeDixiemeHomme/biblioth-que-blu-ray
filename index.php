<?php
// Contr�leur frontal : instancie un routeur pour traiter la requ�te entrante

require 'Framework/Routeur.php';
$routeur = new Routeur();
$routeur->routerRequete();

