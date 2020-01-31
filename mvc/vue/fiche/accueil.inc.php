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
                    </tr>
                    <tr>
                        <th class="totab">Titre Fiche</th>
                        <th class="totab">type fiche</th>
                        <th class="totab">Disponible</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                        if (isset($listFiches)){
                            while (!$listFiches->estVide()){
                                    $uneFiche = $listFiches-> getUnElement();
                        ?>
                    <tr class="ligne">
                        <td class="titre"><?php echo $uneFiche->TitreFiche; ?></td>
                        <td class="genre"><?php echo $uneFiche->TypeFiche; ?></td>
                        <!-- <td class="annee"><?php echo $uneFiche->annee; ?></td> -->
                    </tr>
                    
                    <?php }}?>
                </tbody>
    	    </table>
        </div>
    </div><!--flex-->
</div><!-- content2 -->

