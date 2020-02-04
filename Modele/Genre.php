<?php

require_once 'Framework/Modele.php';

class Genre extends Modele {

    public function getGenres() {
        $sql = 'select * from genre';
        $films = $this->executerRequete($sql);
        return $films->fetchAll();
    }
}