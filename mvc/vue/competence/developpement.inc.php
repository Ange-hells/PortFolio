<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/competence/markdown.inc.php
 auteur				    : Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création	    : fevrier 2020
 date de modification   :
 rôle					: permet de générer le code html de la partie centrale de la page markdown
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            
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
                <h1>Competence de developpement</h1>
                <div class="onglets">
                    <span class="onglet_0 onglet" id="onglet_Contexte" onclick="javascript:change_onglet('Contexte');">&nbsp;Languages&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_Realisation" onclick="javascript:change_onglet('Realisation');">&nbsp;Technologies&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_pourquoi" onclick="javascript:change_onglet('pourquoi');">Pourquoi</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Contexte">
                        <h1>&nbsp;Languages</h1>
                        <fieldset>
                            <legend>VB.net</legend>
                            <img src=""/>
                            <p>

                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>C#</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>Python</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>HTML</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>CSS</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>PHP</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>JS</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>Ruby</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                        <fieldset>
                            <legend>Xamarin</legend>
                            <img src=""/>
                            <p>
                                
                            </p>
                        </fieldset>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Realisation">
                        <h1>&nbsp;Technologies&nbsp;</h1>
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


