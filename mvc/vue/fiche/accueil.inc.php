<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/projet/agenda.inc.php
 auteur				: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création	: septembre 2019
 date de modification:
 rôle					: permet de générer le code xhtml de la partie centrale de la page d'accueil du module cinepassion38
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            
        </div>
        <div id='center-block'>
            <h1>Liste des fiche de competence</h1>
            <table id="tab">	  
                <thead>
                    <tr>
                        <th class="totab">Liste des <?php echo $nbFiches; ?> Fiche de competence disponible</th>
                        <th class="totab"> </th>
                        <th class="totab"> </th>
                        <th class="totab"> </th>
                    </tr>
                    <tr>
                        <th class="totab">Titre Fiche</th>
                        <th class="totab">type fiche</th>
                        <th class="totab">Disponible</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        if (isset($listeFilm)){
                            while (!$listeFilm->estVide()){
                                    $uneFiche = $listeFilm-> getUnElement();
                        ?>
                    <tr class="ligne">
                        <td class="titre"><abbr title='film realisé par <?php echo $uneFiche->prenomReal . " " . $unFilm->nomReal; ?>'><?php echo $unFilm->titreFilm; ?></abbr></td>
                        <td class="genre"><?php echo $uneFiche->libelleGenre; ?></td>
                        <td class="annee"><?php echo $uneFiche->annee; ?></td>
                        <td class="duree"><?php echo $uneFiche->duree; ?></td>
                    </tr>
                    
                    <?php }}?>
                </tbody>
    	    </table>
        </div>
    </div><!--flex-->
</div><!-- content2 -->

