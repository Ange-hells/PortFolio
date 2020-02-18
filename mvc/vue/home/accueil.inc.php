<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/home/accueil.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: janvier 2020
 date de modification	: fevrier 2020
 rôle					: permet de générer le code html de la partie centrale de la page d'accueil du site
 ================================================================================================================= -->

<div id='content1'>
	<div id='blocDroite'>
		<span class='titre'>
			présentation du Port Folio
		</span>
		Ce port folio (porte-documents en francais) a ete tous specialement concus pour les besoin du BTS.
		Il contient toutes les fiche de competence detailler realiser 
	</div>

	<script type='text/javascript'>
		/*<![CDATA[*/  /* Pour que le validateur du W3C ne renvoie pas d'erreur */
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: './librairie/slidesjs/img/loading.gif',
				play: 6000,		//temps d'affichage de chaque diapo
				pause: 5000,	//temps d'affichage d'une diapo si on clique sur les boutons (prev, next et pagination)
				start: 1,		//valeur par défaut
				effect: 'slide, fade',
				crossfade: true,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
		/*]]>*/ /* Fin du commentaire pour que le validateur du W3C ne renvoie pas d'erreur */
	</script>

	<div id="container">
		<div id="example">
			<div id="slides">
				<div class="slides_container">
					<?php 
					foreach ($slidejs as $uneDiapo) {
						echo "<div class='slide'> \n <img alt='' src='" . $uneDiapo['image'] . "' /> \n
							  <div class='caption'> \n <p>" . $uneDiapo['caption'] . "</p> \n </div> \n </div> \n";
					}
					?>
				</div>
				<a href="#" class="prev">
					<img alt="Arrow Prev"
						 id="ArrowPrev"
						 src="./librairie/slidesjs/img/arrow-prev.png"
						 width="24"
						 height="43"
						 onmouseover="window.document.getElementById('ArrowPrev').src='./librairie/slidesjs/img/arrow-prev-hover.png'"
						 onmouseout="window.document.getElementById('ArrowPrev').src='./librairie/slidesjs/img/arrow-prev.png'" />
				</a>
				<a href="#" class="next">
					<img alt="Arrow Next"
						 id="ArrowNext"
						 src="./librairie/slidesjs/img/arrow-next.png"
						 width="24"
						 height="43"
						 onmouseover="window.document.getElementById('ArrowNext').src='./librairie/slidesjs/img/arrow-next-hover.png'"
						 onmouseout="window.document.getElementById('ArrowNext').src='./librairie/slidesjs/img/arrow-next.png'" />
				</a>
			</div>
		</div>
	</div>
</div><!-- content1 -->
<div id="content2">
</div><!-- content2 -->