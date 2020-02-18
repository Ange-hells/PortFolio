<!-- ========= M O D E L E ============================================================================================
 fichier				: ./mvc/modele/fiche/competence.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: contient les fonction d'execution sql pour le controller competence
<================================================================================================================== -->
<?php
class modeleFicheCompetence extends modele{
    
    /**
     * Renvoie le numéro du film à partir de son titre
     * @param string $titreFilm : le titre du film
     * @return integer : le numéro du film
     */
    // public function getNbrCompetence() {
    //     $sql = "SELECT count(codeCoumpetence)
    //             FROM competence;";
    //     $pdoStat = $this->executerRequete($sql);
    //     $nbcompetence = $pdoStat->fetchObject();
    //     return $nbcompetence->nbCompetence;
    // }
        
    public function getListCompetence(){
        $collection = new collection();
        $sql = "SELECT c.codeCompetence, libelleCompetence, count(numSituation) as present
                FROM competence c
                inner join competencesituation
                    on competencesituation.CodeCompetence = c.CodeCompetence
                group by c.codeCompetence;";

        $pdoStat = $this->executerRequete($sql);
        while(($uneCompetence = $pdoStat->fetchObject()) !== false){
            $collection->ajouter($uneCompetence); 
        }
        return $collection;
    }

}

?>
