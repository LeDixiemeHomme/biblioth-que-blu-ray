<?php
require_once 'Framework/Controleur.php';
require_once 'Modele/Film.php';
require_once 'Modele/Realisateur.php';
require_once 'Modele/Genre.php';

class ControleurAccueil extends Controleur {
    private $film;


    public function __construct() {
        $this->film = new Film();

    }
    public function index()
    {
    	$films = $this->film->getFilms();
    	$listing = $this->film->getGoodListing();

        $this->genererVue(array('films' => $films, 'listing' => $listing));
    }
}