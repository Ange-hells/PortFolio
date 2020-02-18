<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/stema.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page stema du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <div id='info'>
                <p>
                    <h4>Realistation :</h4>PPE</br>
                    <h4>Modaliter :</h4><s>En Equipe</s> Individuelle</br>
                    <h4>Competence :</h4>A1.1.1 A1.1.3 A1.2.1 A1.2.2 A1.2.4 A1.4.1 A2.3.1 A4.1.1 A4.1.2 A4.1.4 A4.1.9 A5.1.6 A5.2.4</br>
                    <h4>Ressource fournies :</h4>Documentation et cahier des charges</br>
                    <h4>Resultat attendus :</h4>Site Web</br>
                    <h4>Environement :</h4>Notpad++, VSCode, photofiltre, paint.net, toad, GitHub (GitHub Desktop)</br>
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
            <div class="annexes">
                <h2>Titre</h2>
                <img />
                
            </div>
        </div>
        <div id='right-block'>
            
        </div>
    </div><!--flex-->
</div><!-- content2 -->

