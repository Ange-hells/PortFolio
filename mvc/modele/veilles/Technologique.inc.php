<?php
class modeleVeillesTechnologique extends modele{
    
    /**
     * Renvoie le numéro du film à partir de son titre
     * @param string $titreFilm : le titre du film
     * @return integer : le numéro du film
     */
    public function getNbrFiches() {
        $sql = "";
        $pdoStat = $this->executerRequete($sql);
        $nbfiche = $pdoStat->fetchObject();
        return $nbfiche->nbFiches;
    }
        
    public function getListFiche(){
        $collection = new collection();
        $sql = "";

        $pdoStat = $this->executerRequete($sql);
        while(($uneFiche = $pdoStat->fetchObject()) !== false){
            $collection->ajouter($uneFiche); 
        }
        return $collection;
    }

}

?>
