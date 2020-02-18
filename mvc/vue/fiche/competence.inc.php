<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/competence.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page competence du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            
        </div><!--left-->
        <div id='center-block'>
            <h1>Liste des competences</h1>
            <table id="tab">	  
                <thead>
                    <tr>
                        <!-- <th class="totab"> </th> -->
                        <th class="totab" colspan=3>Liste des <?ph echo $nbCompetences;?> Competences disponible</th>
                    </tr>
                    <tr>
                        <th class="totab">Code</th>
                        <th class="totab">Libeller&nbsp;&nbsp;</th>
                        <th class="totab">Présent&nbsp;</th>
                        <!-- <th class="totab">Nombre de competence&nbsp;</th>
                        <th class="totab">Situation obligatoire&nbsp;</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($ListCompetence)){
                        while (!$ListCompetence->estVide()){
                                $uneCompetence= $ListCompetence->getUnElement();
                                // var_dump($uneFiche)
                    ?>
                    <tr class="ligne">
                        <td class="Code"><?php echo $uneCompetence->codeCompetence;?></td>
                        <td class="Libeller"><?php echo $uneCompetence->libelleCompetence;?></td>
                        <td class="Present"><?php echo $uneCompetence->present, "&nbsp;" , ($uneCompetence->present==1) ? 'foi':'fois';?></td>
                        <!-- <td class="nbCompetence">?php echo $uneCompetence->nbCompetence; ?></td>
                        <td class="S.Obligatoire">?php echo ($uneCompetence->LibelleSituation=="") ? '/':$uneFiche->LibelleSituation; ?></td> -->
                    </tr>
                    <?php }} ?>
                </tbody>
    	    </table>
        </div><!--center-->
        <div id='right-block'>
            
        </div><!--right-->
    </div><!--flex-->
</div><!-- content2 -->

