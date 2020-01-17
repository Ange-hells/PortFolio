<?php
class modeleFilm extends modele{
    /**
     * Donne le nombre de film total present dans la base
     * @param null
     * @return int : le nombre de films
     * @author Thomasset nathan <nathan.thomasset2@gmail.com>
     * @version 1.1
     * @copyright Thomasset Nathan - octobre 2019
     */
    public function getNbrFilm(){
        $sql = "SELECT count(*) AS nbFilms FROM film";
        $pdoStat = $this->executerRequete($sql);
        $nbfilm = $pdoStat->fetchObject();
        return $nbfilm->nbFilms;
    }
}
    