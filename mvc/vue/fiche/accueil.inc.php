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
            <img src='./image/feuille.bmp' alt='' />
        </div>
        <div id='center-block'>
            <h1>Liste des fiches de competence</h1>
            <table id="tab">	  
                <thead>
                    <tr>
                        <!-- <th class="totab"> </th> -->
                        <th class="totab" colspan=5>Liste des <?php echo $nbFiches; ?> Fiches de competence disponible</th>
                    </tr>
                    <tr>
                        <th class="totab">Titre Fiche</th>
                        <th class="totab">Type Fiche&nbsp;&nbsp;</th>
                        <th class="totab">Disponible&nbsp;</th>
                        <th class="totab">Nombre de competences&nbsp;</th>
                        <th class="totab">Situation obligatoire&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($ListFiches)){
                        while (!$ListFiches->estVide()){
                                $uneFiche= $ListFiches->getUnElement();
                                // var_dump($uneFiche)
                    ?>
                    <tr class="ligne">
                        <td class="Titre"><?php echo ($uneFiche->Disponible==0) ? '' : "<a href='./index.php?module=projet&amp;page=$uneFiche->TitreFiche'>";  echo $uneFiche->TitreFiche; "</a>"?></td>
                        <td class="Type"><?php echo $uneFiche->TypeFiche; ?></td>
                        <td class="Dispo"><?php echo ($uneFiche->Disponible==1) ? '&#x2713;': '&#x2717;'; ?></td>
                        <td class="nbCompetence"><?php echo $uneFiche->nbCompetence; ?></td>
                        <td class="S.Obligatoire"><?php echo ($uneFiche->LibelleSituation=="") ? '/':$uneFiche->LibelleSituation; ?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
    	    </table>
        </div>
        <div id='right-block'>
            
        </div>
    </div><!--flex-->
</div><!-- content2 -->

