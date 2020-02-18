<?php
/*======= C O N T R O L E U R ====================================================================================
	fichier				: ./mvc/controleur/contact/contact.inc.php
	auteur				: Nathan Thomsset (nathan.thomasset2@gmail.com)
	date de création	: fevrier 2020
	date de modification:
	rôle				: le contrôleur de la page contact
  ================================================================================================================*/

/**
 * Classe contrôleur de la page accueil du domaine cinepassion38
 * @author Sio-Slam <contact.dev@sio-slam.com>
 * @version 1.0
 * @copyright Sio-Slam - fevrier 2020
 */
class controleurContactContact extends controleur {
	
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
		$this->titreHeader = "Contact";
		$this->titreMain = "Contact";
				
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


		parent::genererVue();
	}
} // class

?>