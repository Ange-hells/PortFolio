<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/templates/layout.inc.php
 auteur					: Christophe Goidin (christophe.goidin@ac-grenoble.fr)
 date de création		: juin 2017
 date de modification	:
 rôle					: le layout permet de générer le code xhtml commun à TOUTES les pages du site
 						  le contenu principal de chaque page est généré par des vues qui dépendent de leurs contrôleurs respectifs
 ================================================================================================================= -->
<?php echo $doctype . PHP_EOL; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php echo $titreSiteWeb . PHP_EOL; ?>
	</title>
	<link rel="icon" type="image/png" href="./image/divers/favicon.png">

	<link rel='stylesheet' type='text/css' href='./css/structure.css' />
	<link rel='stylesheet' type='text/css' href='./css/menu.css' />
	<link rel='stylesheet' type='text/css' href='./css/tab.css' />
	<link rel='stylesheet' type='text/css' href='./css/onglet.css' />
	<!-- 	<link rel='stylesheet' href='./css/onglet.css' /> -->

	<script type='text/javascript' src='./librairie/jquery/js/jquery1.7.2.js'></script>
	<script type="text/javascript" src='./librairie/jquery/js/jquery-1.2.6.min.js'></script>
	<script type='text/javascript' src='./librairie/simpleslideshow/js/slideSwitch.js'></script>
	<script type='text/javascript' src='./librairie/lightbox2/js/lightbox.js'></script>
	<script type='text/javascript' src='./librairie/JsEncrypt/jsencrypt-master/bin/jsencrypt.js'></script>
	<script type='text/javascript' src='./librairie/GenesisJS/js/GenesisJs-0.1.js'></script>


	<?php 
		if (isset($texteDefilant)) {
			echo "<link rel='stylesheet' type='text/css' href='./librairie/liscroll/css/liscroll1.0.css' />
				  <script type='text/javascript' src='./librairie/liscroll/js/liscroll1.0.js'></script>" . PHP_EOL;
		}
		if (isset($enteteLien)) {
			echo $enteteLien . PHP_EOL;
		}
	?>
</head>
<body>
	<div> <!-- La flèche permettant de revenir en haut de la page -->
		<img alt = 'retour en haut de la page'
			 id = 'retourHautPage'
			 src = './image/divers/flecheHautPage.png'
			 onmouseover = "window.document.getElementById('retourHautPage').src='./image/divers/flecheHautPageSurvol.png'"
			 onmouseout = "window.document.getElementById('retourHautPage').src='./image/divers/flecheHautPage.png'"
			 onclick = "$('html, body').animate({scrollTop:$('body').offset().top}, 'slow');"
		/>
	</div>
	<!-- code permettant de figer le menu en haut de la page lors du défilement avec l'ascenseur vertical
		 Affichage dynamique de l'image (flèche) permettant de revenir en haut de la page -->
	<script type='text/javascript'>
		$(function () {
			$(window).scroll(function () {
				var vPositionMenuGauche = window.document.getElementById('header').offsetLeft + 11; // +11 car il y a 10 pixels de marge interne gauche + 1 pixel de bordure gauche
				if ($(window).scrollTop() > 200) { 	// on fait défiler l'ascenseur vertical de plus de 200 pixels vers le bas
					$('div#menu ul.nv1').css('position', 'fixed');
					$('div#menu ul.nv1').css('top', '0px');
					$('div#menu ul.nv1').css('left', vPositionMenuGauche + 'px');
					$('img#retourHautPage').css('visibility', 'visible');
				}else {
					$('div#menu ul.nv1').css('position', 'relative');
					$('div#menu ul.nv1').css('top', '0px');
			 		$('div#menu ul.nv1').css('left', '0px');
					$('img#retourHautPage').css('visibility', 'hidden');
			 	}
			});
		});
	</script>
	
	<div id='llm'>
		<a onclick='window.open(this.href); return false;' href='http://www.ac-grenoble.fr/lycee/louise.michel'>
			<img alt='' src='./image/partenaire/logoLLM.jpg'/>
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
			<?php echo $titreHeader . PHP_EOL; ?>
		</div>
		<div id='filAriane'>
			<?php echo $filAriane . PHP_EOL; ?>
		</div>
		<div id='version'>
			<?php echo $version. PHP_EOL; ?>
		</div>
		<div id='dateDuJour'>
			<?php echo $dateDuJour . PHP_EOL; ?>
		</div>
		<!-- Texte défilant -->
		<?php 
			if (isset($texteDefilant)) {
				echo "<ul id='texteDefilant'><li>" . $texteDefilant['titre'] . "</li>";
				foreach ($texteDefilant['contenu'] as $cle => $valeur) {
					echo "<li><span class='titre'>" . $cle . "</span>" . $valeur . "</li>";
				}
				echo "</ul>" . PHP_EOL;
			}
		?>
		<script type='text/javascript'>
			$(function(){
				$("ul#texteDefilant").liScroll({travelocity: 0.02});
			});
		</script>
	</div><!-- header -->
	
	<div id='menu'>
		<ul class='nv1'>
			<li id='accueil'><a href='./index.php?module=home&amp;page=accueil'>&nbsp;</a></li>
			<li class='plus'>Fiche de competence
				<ul class='nv2'>
					<li><a href='./index.php?module=cinepassion38&amp;page=accueil'><img src="https://img.icons8.com/metro/16/000000/purchase-order.png"> Liste des fiches <img src="https://img.icons8.com/metro/16/000000/purchase-order.png"></a></li>
					<li><a href='./index.php?module=cinepassion38&amp;page=partenaire'>nos partenaires</a></li>
					<li><a href='./index.php?module=cinepassion38&amp;page=plan'>plan</a></li>
				</ul>
			</li>
			<li class='plus'>Projet
				<ul class='nv2'>
					<li><a href='./index.php?module=film&amp;page=accueil'><img src='https://img.icons8.com/ios/16/000000/movie.png'> CinePassion38  <img src='https://img.icons8.com/ios/16/000000/movie.png'></a></li>
					<li><a href='./index.php?module=film&amp;page=liste'><img src="https://img.icons8.com/pastel-glyph/16/000000/checklist.png"> Keller2020 <img src="https://img.icons8.com/pastel-glyph/16/000000/checklist.png"></a></li>
					<li><a href='./index.php?module=film&amp;page=fiche'><img src="https://img.icons8.com/small/16/000000/address-book.png"> Agenda <img src="https://img.icons8.com/small/16/000000/address-book.png"></a></li>
					<li><a href='./index.php?module=film&amp;page=accueil'><img src='https://img.icons8.com/ios/16/000000/movie.png'> MDI  <img src='https://img.icons8.com/ios/16/000000/movie.png'></a></li>
					<li><a href='./index.php?module=film&amp;page=liste'><img src="https://img.icons8.com/small/16/000000/php.png"> Genesys <img src="https://img.icons8.com/small/16/000000/php.png"></a></li>
					<li><a href='./index.php?module=film&amp;page=fiche'><img src="https://img.icons8.com/android/16/000000/globe.png"> Evasion <img src="https://img.icons8.com/android/16/000000/globe.png"></a></li>
				</ul>
			</li>
		</ul>
	</div><!-- menu -->
	
	<div id='main'>
		<span id="titreMain">
			<?php echo $titreMain . PHP_EOL; ?>
		</span>
		<?php 
		echo (!isset($content1) ? "" : $content1 . "<hr class='marge' />");
		if (isset($lesEncartsGauche)) {
			echo "<div id='encartsGauche'>";
			while (!$lesEncartsGauche->estVide()) {
				$unEncart = $lesEncartsGauche->getUnElement();
				echo $unEncart->getXhtml();
			}
			echo "</div><!-- encartsGauche -->\n";
		}
		if (isset($lesEncartsDroite)) {
			echo "<div id='encartsDroite'>";
			while (!$lesEncartsDroite->estVide()) {
				echo $lesEncartsDroite->getUnElement()->getXhtml();
			}
			echo "</div><!-- encartsDroite -->\n";
		}
		echo $content2;
		?>
		<hr/>
	</div><!-- main -->
	
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
			<span class='centrer'>...</span>
		</div>
		<div class='blocDroite'>
			<span class='centrer'>...</span>
		</div>
		<div class='blocDroite'>
			<span class='centrer'>...</span>
		</div>
		<div class='blocCentre'>			
			<span class='centrer'>...</span>
		</div>	
		<hr/>
	</div><!-- planSite -->

	<div id='footer'>
		<img alt='' id='fondFooter' src='./image/divers/fondFooter.jpg' />
		<div id='w3c'>
			<img alt='' src='./image/divers/w3cXhtml1.0.png' />&nbsp;&nbsp;&nbsp;&nbsp;
			<img alt='' src='./image/divers/w3cCss.png' />
		</div>
	</div><!-- footer -->

	<div id='copyright'>
		Port Folio - le porte feuille de competence web  <br/> @Copyright 2020 SIO-SLAM whith Genesys php-framwork - Tous droits réservés
	</div>
</body>
</html>