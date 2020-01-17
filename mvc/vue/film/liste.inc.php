<!-- ========= V U E =============================================================================================
fichier				: ./mvc/vue/film/accueil.inc.php
auteur				: Nathan Thomasset (nathan.thomasset2@gmail.com)
date de création	: septembre 2019
date de modification:
rôle					: permet de générer le code xhtml de la partie centrale de la page d'accueil du module cinepassion38
 ================================================================================================================= -->
    
<div id='content2'>
	<span>
		Le tableu ci-dessous presente l'integralité des films référencés dans notre cinémathèque (<?php echo $nbFilms; ?> actuellement). Les films sont triés selon l'ordre alphanumerique.
		en survolant le titre d'un film, le réalisateur correspondant s'affiche dans une note. En cliquant sur une ligne du tableau, la page présentant les informations détaillées du 
		film sera affichée.
	</span>
	<span class='contentInfos'>
		<table id="tab">	  
            <thead>
            	<tr>
            		<th class="totab">Liste des <?php echo $nbFilms; ?> Films de notre cinémathèque</th>
                    <th class="totab">Section n&deg;<?php echo $section; ?>/<?php echo $nbSections; ?></th>
                    <th class="totab">Film n&deg;<?php echo $numPremierFilm; ?>/<?php echo $numDernierFilm; ?></th>
                    <th class="totab"></th>
            	</tr>
                <tr>
                    <th class="totab">Titre</th>
                    <th class="totab">Genre</th>
                    <th class="totab">Année</th>
                    <th class="totab">Durée</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                    if (isset($listeFilm)){
                        while (!$listeFilm->estVide()){
                                $unFilm= $listeFilm-> getUnElement();
                    ?>
                <tr class="ligne">
                    <td class="titre"><abbr title='film realisé par <?php echo $unFilm->prenomReal . " " . $unFilm->nomReal; ?>'><?php echo $unFilm->titreFilm; ?></abbr></td>
                    <td class="genre"><?php echo $unFilm->libelleGenre; ?></td>
                    <td class="annee"><?php echo $unFilm->annee; ?></td>
                    <td class="duree"><?php echo $unFilm->duree; ?></td>
                </tr>
                
            <?php }}?>
            </tbody>
    	</table>
	</span>
	<span class='contentInfos'>
		<div class='navigation'>
			<div id="boutons"> 
    			<?php echo $nav->getBoutons(); ?>
    			<?php echo $nav->getNumeros(); ?>
    		</div>
    	</div>

	</span>
            
	<span class='contentInfos'>
		
	</span>
</div><!-- content2 -->
		    
