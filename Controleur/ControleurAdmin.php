<?php
require_once 'Securite/ControleurAdminSecurise.php';
require_once 'Modele/Utilisateur.php';
require_once 'Modele/Film.php';
require_once 'Modele/Realisateur.php';
require_once 'Modele/Genre.php';

class ControleurAdmin extends ControleurAdminSecurise
{
    private $users;
    private $film;

    public function __construct()
    {
        $this->users = new Utilisateur();
        $this->film = new Film();

    }
    public function index()
    {
        $films = $this->film->getFilms();
        $listing = $this->film->getGoodListing();

        $this->genererVue(array('films' => $films, 'listing' => $listing));
    }
}

