<?php
class modeleFicheCompetence extends modele{
    
    /**
     * Renvoie le numéro du film à partir de son titre
     * @param string $titreFilm : le titre du film
     * @return integer : le numéro du film
     */
    public function getNbrCompetence() {
        $sql = "SELECT count(codeCoumpetence)
                FROM competence;";
        $pdoStat = $this->executerRequete($sql);
        $nbcompetence = $pdoStat->fetchObject();
        return $nbcompetence->nbCompetence;
    }
        
    public static function getListCompetence(){
        $collection = new collection();
        $sql = "SELECT codeCompetence, libelleCompetence
                FROM competence;";

        $pdoStat = $this->executerRequete($sql);
        while(($uneCompetence = $pdoStat->fetchObject()) !== false){
            $collection->ajouter($uneCompetence); 
        }
        return $collection;
    }

}

?>
