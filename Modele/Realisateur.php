<?php

require_once 'Framework/Modele.php';

class Realisateur extends Modele {

    public function getRealisateurs() {
        $sql = 'select * from realisateur';
        $films = $this->executerRequete($sql);
        return $films->fetchAll();
    }
}