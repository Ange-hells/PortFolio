<?php
/*=========== M O D E L E ========================================================================================
	fichier				: class.modele.inc.php
	auteur				: Sio-Slam (contact.dev.Genesys@sio-slam.com)
	date de création	: decembre 2019
	date de modification: 
	rôle				: la classe générique d'accès aux données. Joue le rôle du modèle dans l'architecture MVC.
  ================================================================================================================*/

/**
 * Classe d'accès aux données utilisant l'API PDO (Php Data Object) et implémentant le design pattern Singleton
 * @author Sio-Slam <contact.dev.Genesys@sio-slam.com>
 * @version 2.0
 * @copyright Sio-Slam - decembre 2019
 */
abstract class modele {
	
	private static $bd = null;	// l'instance de la connexion à la base de données
	
	/**
	 * Renvoie l'instance de connexion à la base de données, en initialisant la connexion si nécessaire. Mise en oeuvre du patron de conception Singleton
	 * @param null
	 * @return L'instance de la connexion à la base de données
	 * @author Sio-Slam <contact.dev.Genesys@sio-slam.com>
	 * @version 2.0
	 * @copyright Sio-Slam - decembre 2019
	 */
	private static function getBd() {
		if (self::$bd === null) {
			// ===============================================================================================================
			// récupération des paramètres de configuration relatifs à la base de données
			// ===============================================================================================================
		    $serveur 	= configuration::get("BD_server");
		    $base 		= configuration::get("BD_base");
		    $login 		= configuration::get("BD_login");
		    $mdp 		= configuration::get("BD_mdp");
			
			// ===============================================================================================================
			// création de la connexion à la base de données. PDO émettra une exception en cas de problème de connexion
			// ===============================================================================================================
			self::$bd = new PDO("mysql:host=" . $serveur . ";dbname=" . $base . ";charset=utf8", $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		return self::$bd;
	}
	
	/**
	 * Exécute une requête SQL. La requête SQL sera préparée si le second paramètre ne vaut pas null.
	 * @param string $sql : la requête SQL à exécuter
	 * @param array $params : un tableau associatif contenant les valeurs des marqueurs (les marqueurs peuvent être nommés ou interrogatifs)
	 * @return PDOStatement : le résultat de l'exécution de la requête SQL sous forme d'un objet PDOStatement
	 * @author Sio-Slam <contact.dev.Genesys@sio-slam.com>
	 * @version 2.0
	 * @copyright Sio-Slam - decembre 2019
	 */
	protected function executerRequete($sql, $params = null) {
		if ($params == null) {
			// ===============================================================================================================
			// exécution directe
			// ===============================================================================================================
			$resultat = self::getBd()->query($sql);

		}else {
			// ===============================================================================================================
			// exécution d'une requête préparée
			// ===============================================================================================================
			$resultat = self::getBd()->prepare($sql);
			$resultat->execute($params);
		}
		return $resultat;
	}

} // class

?>
