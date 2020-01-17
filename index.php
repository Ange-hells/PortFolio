<?php
/*=============================================================================================================
	fichier				: index.php
	auteur				: Christophe Goidin (christophe.goidin@ac-grenoble.fr)
	date de création	: juin 2017
	date de modification:  
	rôle				: le front contrôleur. C'est le point d'entrée de l'application 
===============================================================================================================*/

/**
 * Permet d'inclure le fichier définissant la classe $classe dont le nom est passé en paramètre
 * @param string $classe : le nom de la classe qui n'a pas été trouvée et dont il faut inclure le fichier la définissant
 * @return null
 * @author Christophe Goidin <christophe.goidin@ac-grenoble.fr>
 * @version 1.2
 * @copyright Christophe Goidin - juin 2017
 */
 function chargerClasse($classe) {
	// ===============================================================================================================
	// inclusion du fichier définissant la classe $classe s'il fait partie de notre framework
	// ===============================================================================================================
	if (file_exists("./framework/class." . $classe . ".inc.php")) {
		require_once "./framework/class." . $classe . ".inc.php";
	}
}

// ===============================================================================================================
// la fonction spl_autoload_register permet d'exécuter automatiquement la fonction passée en paramètre (ici la fonction "chargerClasse")
// dès qu'on essaie d'instancier une classe si le fichier qui la défini n'a pas été inclus.
// Le nom de la classe est passé automatiquement en paramètre à la fonction "chargerClasse".
// ===============================================================================================================
spl_autoload_register('chargerClasse');

// ===============================================================================================================
// démarrage d'une session + positionnement de divers paramètres
// ===============================================================================================================
session_start();						// démarrage d'une session. A positionner APRES autoload
setlocale(LC_TIME, "fra");				// pour que les dates/heures s'affichent en français

// ===============================================================================================================
// routage de la requête http entrante
// ===============================================================================================================
$routeur = new routeur();
$routeur->routerRequete();
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
