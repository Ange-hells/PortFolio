<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/docker.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page docker du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <div id='info'>
                <p>
                    <h4>Realistation :</h4> </br>
                    <h4>Modaliter :</h4> </br>
                    <h4>Competence :</h4> </br>
                    <h4>Ressource fournies :</h4> </br>
                    <h4>Resultat attendus :</h4> </br>
                    <h4>Environement :</h4> </br>
                </p>
            </div>
        </div>
        <div id='center-block'>

            <script type="text/javascript">
                //<!--
                function change_onglet(name)
                {
                        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
                        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
                        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
                        document.getElementById('contenu_onglet_'+name).style.display = 'block';
                        anc_onglet = name;
                }
                //-->
            </script>
            <div class="systeme_onglets">
                <div class="onglets">
                    <span class="onglet_0 onglet" id="onglet_Contexte" onclick="javascript:change_onglet('Contexte');">&nbsp;Context&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_Realisation" onclick="javascript:change_onglet('Realisation');">&nbsp;Réalisation&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_pourquoi" onclick="javascript:change_onglet('pourquoi');">Pourquoi</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Contexte">
                        <h1>&nbsp;Contexte</h1>
                        <p>
                            
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Realisation">
                        <h1>&nbsp;Réalisation&nbsp;</h1>
                        <p>
                            
                        </p>
                        <p>
                            
                        </p>
                        <p>
                            
                        </p>

                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_pourquoi">
                        <h1>Pourquoi?</h1>
                        Pour simplifier la navigation et la diviser en parties
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                //<!--
                var anc_onglet = 'Contexte';
                    change_onglet(anc_onglet);
                //-->
            </script>

        </div>
        <div id='right-block'>
            
        </div>
    </div><!--flex-->
</div><!-- content2 -->

