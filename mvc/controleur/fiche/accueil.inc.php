<?php
/*======= C O N T R O L E U R ====================================================================================
	fichier				: ./mvc/controleur/fiche/accueil.inc.php
	auteur				: Nathan Thomsset (nathan.thomasset2@gmail.com)
	date de création	: janvier 2020
	date de modification:
	rôle				: le contrôleur de la page d'accueil des fiches
  ================================================================================================================*/

/**
 * Classe contrôleur de la page accueil du domaine cinepassion38
 * @author Sio-Slam <contact.dev@sio-slam.com>
 * @version 1.0
 * @copyright Sio-Slam - janvier 2020
 */
class controleurFicheAccueil extends controleur {

    private $modele;
    
    public function __construct(){
        require ("./mvc/modele/fiche/accueil.inc.php");
        $this->modele = new modeleFicheAccueil();
    }
	
	/**
	 * Met à jour le tableau $donnees de la classe mère avec les informations spécifiques de la page
	 * @param null
	 * @return null
	 * @author Sio-Slam <contact.dev@sio-slam.com>
	 * @version 1.1
	 * @copyright Sio-Slam - janvier 2020
	 */
	public function setDonnees() {
		// ===============================================================================================================
		// titres de la page
		// ===============================================================================================================
		$this->titreHeader = "Liste des fiches de competence";
		$this->titreMain = "Accueil des fiches";
				
		// ===============================================================================================================
		// encarts
		// ===============================================================================================================
		// $this->encartsGauche = "partenaires.txt";
	 	// $this->encartsDroite = "partenaires.txt";
				
		// ===============================================================================================================
		// texte défilant
		// ===============================================================================================================
		// rien
		
		// ===============================================================================================================
		// alimentation des données COMMUNES à toutes les pages
		// ===============================================================================================================
		parent::setDonnees();
	}
	
	/**
	 * Génère l'affichage de la vue pour l'action par défaut de la page 
	 * @param null
	 * @return null
	 * @author Sio-Slam <contact.dev@sio-slam.com>
	 * @version 1.0
	 * @copyright Sio-Slam - janvier 2020
	 */
	public function defaut() {
        $this->nbFiches = $this->modele->getNbrFiches();
        $this->ListFiches = $this->modele->getListFiche(1);


		parent::genererVue();
	}
} // class

?>