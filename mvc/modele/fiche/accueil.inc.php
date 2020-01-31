<?php
class modeleFicheAccueil extends modele{
    
    /**
     * Renvoie le numéro du film à partir de son titre
     * @param string $titreFilm : le titre du film
     * @return integer : le numéro du film
     */
    public function getNbrFiches() {
        $sql = "SELECT count(*) AS nbFiches FROM situation";
        $pdoStat = $this->executerRequete($sql);
        $nbfiche = $pdoStat->fetchObject();
        return $nbfiche->nbFiches;
    }
        
    function kqhgjklfh(){
        $sql = "SELECT film.numFilm, film.titreFilm, genre.libelleGenre, YEAR(film.dateSortieFilm) as annee, TIME_FORMAT(film.dureeFilm, '%H:%i') as duree, p.nomPersonne as nomReal, p.prenomPersonne as prenomReal                      
				FROM film , genre , personne p
      			WHERE genre.numGenre = film.numGenreFilm
				AND film.numRealisateurFilm = p.numPersonne
  				ORDER BY titreFilm ASC
                LIMIT $debut, $nb;";

        $collection = new collection();
        $pdoStat = $this->executerRequete($sql);
        while(($unFilm = $pdoStat->fetchObject()) !== false){
            $collection->ajouter($unFilm);
            
        }
        return $collection;

    }

}

?>
