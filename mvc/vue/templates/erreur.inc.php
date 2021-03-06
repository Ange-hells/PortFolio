<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/templates/erreur.inc.php
 auteur					: Christophe Goidin (christophe.goidin@ac-grenoble.fr)
 date de création		: juin 2017
 date de modification	:
 rôle					: gestion des erreurs
 ================================================================================================================= -->
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		cinepassion38
	</title>
	<link rel='stylesheet' type='text/css' href='./css/structure.css' />
	<link rel='stylesheet' type='text/css' href='./css/menu.css' />
	<link rel="icon" type="image/png" href="./image/divers/favicon.png">
</head>
<body>
	<div id='llm'>
		<a onclick='window.open(this.href); return false;' href='http://www.ac-grenoble.fr/lycee/louise.michel'>
			<img alt='' src='./image/partenaire/logoLLM.jpg' />
		</a>
	</div>
	
	<div id='lien'>
		<a>
			<img alt='Nathan.THOMASSET' src='./image/partenaire/Sio-slam.ico' /> &nbsp; Nathan.THOMASSET
		</a>&nbsp;&nbsp;
		<a onclick='window.open(this.href); return false;' href='http://www.SIO-SLAM.fr'>
			<img alt='SIO-SLAM' src='./image/partenaire/logoSioSlam.png' />
		</a>&nbsp;&nbsp;
	</div>
	
	<div id='header'>
		<img alt='' id='fondHeader' src='./image/divers/fondHeader.jpg' />
		<img alt='' src='./image/divers/portFolioLogo.png' id='cinepassion38' />
		<div id='titre'>
			Erreur
		</div>
		<div id='filAriane'>
			<a href="./index.php">home</a>
		</div>
		<div id='version'>
			version : 2.0
		</div>
	</div>
	
	<div id='menu'>
		<ul class='nv1'>
			<li id='accueil'><a href='./index.php?module=home&amp;page=accueil'>&nbsp;</a></li>
			<li class='plus'>Fiche de competence
				<ul class='nv2'>
					<li><a href='./index.php?module=fiche&amp;page=accueil'><img src="./image/logo/liste-16.png"> Liste des fiches <img src="./image/logo/liste-16.png"></a></li>
					<li><a href='./index.php?module=fiche&amp;page=competence'><img src="./image/logo/competences-16.png">Competences<img src="./image/logo/competences-16.png"></a></li>
					<!-- <li><a href='./index.php?module=fiche&amp;page=plan'>plan</a></li> -->
				</ul>
			</li>
			<li class='plus'>Projet
				<ul class='nv2'>
					<li><a href='./index.php?module=projet&amp;page=cinepassion38'><img src='./image/logo/Cp38-16.png'> CinePassion38  <img src='./image/logo/Cp38-16.png'></a></li>
					<li><a href='./index.php?module=projet&amp;page=keller2020'><img src="./image/logo/Keller2020-16.png"> Keller2020 <img src="./image/logo/Keller2020-16.png"></a></li>
					<li><a href='./index.php?module=projet&amp;page=agenda'><img src="./image/logo/Agenda-16.png"> Agenda <img src="./image/logo/Agenda-16.png"></a></li>
					<li><a href='./index.php?module=projet&amp;page=mdi'><img src='./image/logo/mdi-16.png'> MDI  <img src='./image/logo/mdi-16.png'></a></li>
					<li><a href='./index.php?module=projet&amp;page=genesys'><img src="./image/logo/Genesys-16.png"> Genesys <img src="./image/logo/Genesys-16.png"></a></li>
					<li><a href='./index.php?module=projet&amp;page=evasion'><img src="./image/logo/Evasion-16.png"> Evasion <img src="./image/logo/Evasion-16.png"></a></li>
					<li><a href='./index.php?module=projet&amp;page=owa'><img src="./image/logo/Owa-16.png"> Owa <img src="./image/logo/Owa-16.png"></a></li>
				</ul>
			</li>
			<li class='plus'>Veilles
				<ul class='nv2'>
					<li><a href='./index.php?module=veilles&amp;page=juridique'><img src="./image/logo/justice-16.png"> Juridique <img src="./image/logo/justice-16.png"></a></li>
					<li><a href='./index.php?module=veilles&amp;page=technologique'><img src="./image/logo/coeursouris-16.png"> Technologique <img src="./image/logo/coeursouris-16.png"></a></li>
				</ul>
			</li>
			<li class='plus'>Contact
				<ul class='nv2'>
					<li><a href='./index.php?module=contact&amp;page=Contact'><img src="./image/logo/contact-16.png"> Contact <img src="./image/logo/contact-16.png"></a></li>
				</ul>
			</li>
		</ul>
	</div><!-- menu -->
	
	<div id='main'>
		<span id="titrePage">
			Une erreur est survenue dans le code l' application
		</span>

		<div id="content2">
			<span class='centrer'>
				<img alt='erreur' src='./image/divers/erreur.png' />
			</span>
			Une erreur est survenue dans le code de l'application :<br/> <?php echo $messageErreur; ?>
		</div>
		<hr/>
	</div>
	
	<div id='planSite'>
		<div class='blocGauche'>
			Fiche de competence
			<ul>
				<li><a href='./index.php?module=cinepassion38&amp;page=accueil'>accueil</a></li>
				<li><a href='./index.php?module=cinepassion38&amp;page=partenaire'>nos partenaires</a></li>
				<li><a href='./index.php?module=cinepassion38&amp;page=plan'>plan</a></li>
			</ul>
		</div>
		<div class='blocGauche'>
			Projet
			<ul>
				<li><a href='./index.php?module=projet&amp;page=cinepassion38'> CinePassion38</a></li>
				<li><a href='./index.php?module=projet&amp;page=keller2020'> Keller2020</a></li>
				<li><a href='./index.php?module=projet&amp;page=agenda'> Agenda</a></li>
				<li><a href='./index.php?module=projet&amp;page=mdi'> MDI</a></li>
				<li><a href='./index.php?module=projet&amp;page=genesys'> Genesys</a></li>
				<li><a href='./index.php?module=projet&amp;page=evasion'> Evasion</a></li>
			</ul>	
		</div>
		<div class='blocDroite'>
			<span class='centrer'>...</span>
		</div>
		<div class='blocDroite'>
			<span class='centrer'>...</span>
		</div>
		<div class='blocCentre'>			
			Veilles
			<ul>
				<li><a href='./index.php?module=veilles&amp;page=juridique'>Juridique</a></li>
				<li><a href='./index.php?module=veilles&amp;page=technologique'>Technologique</a></li>
			</ul>
		</div>	
		<hr/>
	</div><!-- planSite -->
	<div id='footer'>
		<img alt='' id='fondFooter' src='./image/divers/fondFooter.jpg' />
		<img alt='' src='./image/divers/cinepassion38LogoMini.png' id='cinepassion38LogoMini' />
		<div id='w3c'>
			<img alt='' src='./image/divers/w3cXhtml1.0.png' />&nbsp;&nbsp;&nbsp;&nbsp;
			<img alt='' src='./image/divers/w3cCss.png' />
		</div>
	</div>

	<div id='copyright'>
		cinepassion38 - l 'association grenobloise pour la promotion du cinéma<br/>@Copyright 2017 Genesys - Tous droits réservés
	</div>
</body>
</html>
