<?php

require_once 'Framework/Controleur.php';

abstract class ControleurAdminSecurise extends Controleur
{

    public function executerAction($action)
    {
        // Vérifie si les informations utilisateur sont présents dans la session
        // Si oui, l'utilisateur s'est déjà authentifié : l'exécution de l'action continue normalement
        // Si non, l'utilisateur est renvoyé vers le contrôleur de connexion
        if ((isset($_SESSION['connecte'])) && $_SESSION['niveau'] == 3) {
            parent::executerAction($action);
        }
        else {
            $this->requete->getSession()->detruire();
            $this->rediriger("connexion");
        }
    }

}