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
                        <!-- <th class="totab"> </th> -->
                        <th class="totab" colspan=3>Liste des <?ph echo $nbFiches; ?> Competence disponible</th>
                    </tr>
                    <tr>
                        <th class="totab">Code</th>
                        <th class="totab">Libeller&nbsp;&nbsp;</th>
                        <th class="totab">Presence&nbsp;</th>
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
                        <td class="Code"><?php echo $uneCompetence->codeCompetence; "</a>"?></td>
                        <td class="Libeller"><?php echo $uneCompetence->libelleCompetence; ?></td>
                        <td class="Presence"><?php echo $uneCompetence->Disponible; ?></td>
                        <!-- <td class="nbCompetence">?php echo $uneCompetence->nbCompetence; ?></td>
                        <td class="S.Obligatoire">?php echo ($uneCompetence->LibelleSituation=="") ? '/':$uneFiche->LibelleSituation; ?></td> -->
                    </tr>
                    <?php }} ?>
                </tbody>
    	    </table>
        </div>
        <div id='right-block'>
            
        </div>
    </div><!--flex-->
</div><!-- content2 -->

