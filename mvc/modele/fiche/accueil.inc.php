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
        
    public function getListFiche($i){
        $collection = new collection();
        while($i<=modeleFicheAccueil::getNbrFiches()){
            $sql = "SELECT s.LibelleSituation as TitreFiche, t.LibelleTypeFiche as TypeFiche, s.Disponible, 
                        count(NumAsso) as nbCompetence, so.LibelleSituation
                    FROM situation s, typefiche t, competencesituation c, situationobligatoire so 
                    WHERE s.TypeFiche = t.IdTypeFiche
                    AND s.SituationObligatoire = so.IdSituation
                    AND c.NumSituation = s.NumSituation
                    AND s.NumSituation = '$i'";

            $pdoStat = $this->executerRequete($sql);
            while(($uneFiche = $pdoStat->fetchObject()) !== false){
                $collection->ajouter($uneFiche); 
            }
            $i += 1;
        }   
        return $collection;
    }

}

?>
