<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/projet/evasion.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page evasion du module projet
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <nav id='lienProjet'>
                <?php
                    echo "&nbsp<a href='$pptx' >Presentation pptx</a></br>";
                    echo "&nbsp<a href='$docx' >fiche docx</a></br>";
                    echo "&nbsp<a href='$site' >Evasion</a></br>";
                    echo "&nbsp<a href='$git'  >gitHub</a>";
                ?>
            </nav>
            <div id='logo'>
                <?php
                    echo "<img src='$logo' alt=''/>"
                ?>
            </div>
        </div>
        <div id='center-block'>
            <h1>Evasion</h1>
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
                    <span class="onglet_0 onglet" id="onglet_Projet" onclick="javascript:change_onglet('Projet');">&nbsp;Projet&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_V1" onclick="javascript:change_onglet('V1');">&nbsp;V1&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_V2" onclick="javascript:change_onglet('V2');">&nbsp;V2&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_V3/V3se" onclick="javascript:change_onglet('V3/V3se');">&nbsp;V3/V3se&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_V4/V4#" onclick="javascript:change_onglet('V4/V4#');">&nbsp;V4/V4#&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_V5" onclick="javascript:change_onglet('V5');">&nbsp;V5&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_V6" onclick="javascript:change_onglet('V6');">&nbsp;V6&nbsp;</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Projet">
                        <p>
                            Le projet Evasion a pour but la creation d'un tout nouveau moteur de recherche, Evasion.</br>
                            Ce projet a vue le jour durent l'été 2014 avec la realisation des premieres maquettes papier du navigateur, 
                            mais les essée de realisation ne sont pas tres concluent, faute de metrise et d'apsence de reel ligne directrice.</br>
                            </br>
                            C'est fin 2018 que le projet renee et voi le jour avec EvasionV1 (1.0.0) ecrit en vb.Net et inplenter directeument au sein de MDI.</br>
                            Il sera toutefoi rapidement renplacer par EvasionV2 (2.0.0) interne a la meme application (MDI).</br>
                            </br>
                            Desireux d'en faire une application autonome a part entiere il est decider pour la V3 de le desolidariser de MDI, EvasionV3SE (Solitary Edition) voie le jour
                            en parallel de quoi une Version d'EvasionV3 est developer en vb.net WPF (Windows Presentation Foundation) mais qui sera vite geler avent de mourir faute de temp</br>
                            </br>
                            Et cest en juillet 2019 lors d'une formation au language C# que germe les debut d'EvasionV4, d'abort par sa toute nouvelle implementaion C# (EvasionV4#) puis par sa version 
                            'clasique' il gardera toutefoi sont design malgrer une refonte XML de sont affichage utilisateur. Bien que tres avencer il conserve toutefoi le plus gros soucie d'Evasion
                            sa non prise en charge de JavaScript se qui l'endicape grandement. </br>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_V1">
                        <p>
                            <a href='./image/fiche/Evasion/EvasionV1.png'> <img class='capture' alt='' src='./image/fiche/Evasion/EvasionV1.PNG'/> </a>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_V2">
                        <p>
                            <a href='./image/fiche/Evasion/EvasionV2.png'> <img class='capture' alt='' src='./image/fiche/Evasion/EvasionV2.PNG'/> </a>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_V3/V3se">
                        <p>
                            <a href='./image/fiche/Evasion/EvasionV3.png'> <img class='capture' alt='' src='./image/fiche/Evasion/EvasionV3.PNG'/> </a>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_V4/V4#">
                        <p>
                            <a href='./image/fiche/Evasion/EvasionV4.png'> <img class='capture' alt='' src='./image/fiche/Evasion/EvasionV4.PNG'/> </a>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_V5">
                        <p>
                            <a href='./image/fiche/Evasion/EvasionV5.png'> <img class='capture' alt='' src='./image/fiche/Evasion/EvasionV5.PNG'/> </a>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_V6">
                        <p>
                            <img class='capture' alt='' src='./image/divers/construction.png'/>
                        </p>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                //<!--
                var anc_onglet = 'Projet';
                    change_onglet(anc_onglet);
                //-->
            </script>
           
        </div>
    </div><!--flex-->
</div><!-- content2 -->

