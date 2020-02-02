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
        
    function getListFiche(){
        $sql = "SELECT LibelleSituation as TitreFiche, LibelleTypeFiche as TypeFiche
                FROM situation s, typefiche t
                WHERE s.TypeFiche = t.IdTypeFiche";

        $collection = new collection();
        $pdoStat = $this->executerRequete($sql);
        while(($uneFiche = $pdoStat->fetchObject()) !== false){
            $collection->ajouter($uneFiche);
            
        }
        return $collection;

    }

}

?>
