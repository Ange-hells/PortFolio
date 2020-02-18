<?php
/*================================================================================================================
	fichier				: class.fs.inc.php
	auteur				: Sio-Slam (contact.dev.Genesys@sio-slam.com)
	date de création	: decembre 2019
	date de modification:  
	rôle				: la classe fs gère toutes les fonctionnalités relatives aux fichiers
  ================================================================================================================*/

/**
 * La classe fs gère toutes les fonctionnalités relatives aux fichiers
 * @author Sio-Slam <contact.dev.Genesys@sio-slam.com>
 * @version 1.0
 * @copyright Sio-Slam - decembre 2019
 */

class fs {
	/**
	 * Renvoie le contenu du bloc <div id='$id'> du fichier $fichier
	 * @param string $fichier : le fichier dont on veut récupérer une partie du contenu
	 * @param string $id : l'identifiant du bloc <div> dont on veut récupérer le contenu
	 * @return string : le contenu du bloc <div id='$id'> du fichier $fichier. Renvoie une chaîne vide si l'id $id n'est pas trouvé
	 * @throws l'exception est levée si on arrive pas à lire le contenu du fichier
	 * @author Sio-Slam <contact.dev.Genesys@sio-slam.com>
	 * @version 1.1
	 * @copyright Sio-Slam - decembre 2019
	 */
	public static function getContenuFichier($fichier, $id) {
		try {
			if (($refFichier = fopen($fichier, "r")) !== false) {
				while (!feof($refFichier)) {
					$ligne = preg_replace("/(\r\n|\n|\r|\t)/", "", fgets($refFichier));
					if (($ligne == "<div id='$id'>") || ($ligne == "<div id=\"$id\">")) {
						$res = $ligne . "\r\n";
						while (($ligne = preg_replace("/(\r\n|\n|\r|\t)/", "", fgets($refFichier))) != "</div><!-- $id -->") {
							$res .= $ligne  . "\r\n";
						}
						$res .= $ligne  . "\r\n";	// \r\n est le symbole de fin de ligne sous windows
						break;
					}
				}
				fclose($refFichier);
				return (!isset($res) ? "" : $res);
			}else {
				throw new Exception();
			}
		}catch (Exception $e) {
			throw new Exception("[fichier] : " . __FILE__ . "<br/>[classe] : " . __CLASS__ . "<br/>[méthode] : " . __METHOD__ . "<br/>[message] : Impossible de lire le contenu du fichier '$fichier'.");
		}
	}
	
} // class

?>
