<?php
/*======= C O N T R O L E U R ====================================================================================
	fichier				: ./mvc/controleur/projet/owa.inc.php
	auteur				: Nathan Thomsset (nathan.thomasset2@gmail.com)
	date de création	: fevrier 2020
	date de modification:
	rôle				: le contrôleur de la page du projet owa
  ================================================================================================================*/

/**
 * Classe contrôleur de la page accueil du domaine cinepassion38
 * @author Sio-Slam <contact.dev@sio-slam.com>
 * @version 1.0
 * @copyright Sio-Slam - fevrier 2020
 */
class controleurProjetOwa extends controleur {
	
	/**
	 * Met à jour le tableau $donnees de la classe mère avec les informations spécifiques de la page
	 * @param null
	 * @return null
	 * @author Sio-Slam <contact.dev@sio-slam.com>
	 * @version 1.1
	 * @copyright Sio-Slam - fevrier 2020
	 */
	public function setDonnees() {
		// ===============================================================================================================
		// titres de la page
		// ===============================================================================================================
		$this->titreHeader = "Agenda";
		$this->titreMain = "présentation du projet Agenda";
				
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
	 * @copyright Sio-Slam - fevrier 2020
	 */
	public function defaut() {
		$this->pptx = "https://1drv.ms/p/s!Agp_UlKVcoB4gRX-Tk2wh5RPjEuR?e=wUunbK";
		$this->docx = "https://1drv.ms/w/s!Agp_UlKVcoB4gRFIVo9ImicBv1JI?e=C9UKnN";
		$this->site = "./index.php?module=page&amp;page=Owa";
		$this->git = "https://github.com/Ange-hells/Owa";
		$this->logo = "./image/logo/Owa-100.png";
        
		parent::genererVue();
	}

} // class

?>
