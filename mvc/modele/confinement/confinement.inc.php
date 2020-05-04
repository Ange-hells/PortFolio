<!-- ========= M O D E L E ============================================================================================
 fichier				: ./mvc/modele/fiche/accueil.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: contient les fonction d'execution sql pour le controller accueil
<================================================================================================================== -->
<?php

class modeleConfinementConfinement extends modele{
    /**
     * Renvoie le numéro du film à partir de son titre
     * @param string $titreFilm : le titre du film
     * @return integer : le numéro du film
     */
    // public function getReaConfinement() {
    //     $sql = "SELECT count(*) AS nbFiches FROM situation";
    //     $pdoStat = $this->executerRequete($sql);
    //     $nbfiche = $pdoStat->fetchObject();
    //     return $nbfiche->nbFiches;
    // }
        
    public function getReaConfinement(){
        $collection = new collection();
            $sql = "SELECT *
                    FROM reaConfinement";

            $pdoStat = $this->executerRequete($sql);
            while(($uneRea = $pdoStat->fetchObject()) !== false){
                $collection->ajouter($uneRea); 
            }
        return $collection;
    }

}

?>
