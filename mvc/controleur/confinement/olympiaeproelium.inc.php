<?php
/*======= C O N T R O L E U R ====================================================================================
	fichier				: ./mvc/controleur/confinement/confinement.inc.php
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
class controleurConfinementOlympiaeproelium extends controleur {

    private $modele;
    
    public function __construct(){
        require ("./mvc/modele/confinement/confinement.inc.php");
        $this->modele = new modeleConfinementConfinement();
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
		$this->titreHeader = "Olympiae Proelium";
		$this->titreMain = "";
				
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
		$this->Test = "Pres-Production du jeux Dungeon Arena jeux concus en Ruby avec le moteur RPG Maker VXace";
        $this->ReaConfinement = $this->modele->getReaConfinement();


		parent::genererVue();
	}
} // class

?>