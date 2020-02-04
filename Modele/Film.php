<?php

require_once 'Framework/Modele.php';

class Film extends Modele {

    public function getFilms() {
        $sql = 'select * from film';
        $films = $this->executerRequete($sql);
        return $films->fetchAll();
    }

    public function getGoodListing() {
        $sql = 'select distinct
					    titre_film, 
					    date_sortie, 
					    nom_realisateur,
					    GROUP_CONCAT(nom_genre SEPARATOR " ; ") as nom_genre 
					from 
					    film f, 
					    genre g, 
					    categorise c, 
					    realisateur rr, 
					    realise re
					where 
					    f.id_film = c.id_film and 
					    c.id_genre = g.id_genre and 
					    re.id_realisateur = rr.id_realisateur and 
					    re.id_film = f.id_film
					group by 
					    f.id_film, rr.id_realisateur
					order by
					    titre_film';
        $films = $this->executerRequete($sql);
        return $films->fetchAll();
    }

    public function addFilm($titre_film, $date_sortie, $commentaire_film) {
    	$sql = 'insert into film (titre_film, date_sortie, commentaire_film) values (?,?,?)';
        $this->executerRequete($sql, array($titre_film, $date_sortie, $commentaire_film));
    }

}