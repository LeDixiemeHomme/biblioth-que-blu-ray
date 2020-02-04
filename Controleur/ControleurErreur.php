<?php
require_once 'Framework/Controleur.php';

class ControleurErreur extends Controleur {
    public function index()
    {
        $this->genererVue();
    }
}