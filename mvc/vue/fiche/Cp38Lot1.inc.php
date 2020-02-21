<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/cp38lot1.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page cp38lot1 du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <div id='info'>
                <p>
                    <h4>Realistation :</h4>PPE</br>
                    <h4>Modaliter :</h4><s>En equipe</s>Individuelle</br>
                    <h4>Competence :</h4>A1.1.1 A1.1.2 A1.1.3 A1.2.4 A1.3.2 A1.3.3 A1.4.1 A1.4.2 A1.4.3 A4.1.1 A4.1.3 A4.1.6 A5.1.1 &nbsp;&nbsp;&nbsp;A5.2.1</br>
                    <h4>Ressource fournies :</h4>Contexte présentant l’association CinePassion38, les fonctionnalités à développer et le cahier des charges.</br>
                    <h4>Resultat attendus :</h4>Un site dynamique qui gère l'affichage des films</br>
                    <h4>Environement :</h4>Eclipse (avec l'extension Toad pour les bases de données.), GitHub, Visual Studio Code</br>
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
                    <span class="onglet_0 onglet" id="onglet_Outil" onclick="javascript:change_onglet('Outil');">&nbsp;Réalisation&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_Explication" onclick="javascript:change_onglet('Explication');">Projet</span>
                    <span class="onglet_0 onglet" id="onglet_Annexe" onclick="javascript:change_onglet('Annexe');">Annexe</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Contexte">
                        <h1>&nbsp;Contexte</h1>
                        <p>
                            Un site web mettant en avant des films est déjà commencé, ils nous ont demandé de l’améliorer en y ajoutant 3 pages différentes :
                            <ul>
                                <li>Une première page, qui affiche des films qui défilent et un texte,</li>
                                <li>Une seconde page, qui présente les films sous la forme d’un tableau,</li> 
                                <li>Et une dernière page qui nous donne des informations sur un film sélectionné.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Outil">
                        <h1>&nbsp;Réalisation&nbsp;</h1>
                        <p>
                            <h2>Les logiciels : </h2>
                            <ul>
                                <li><s>Eclipse, environnement de développement utilisé pour déboguer la partie PHP du projet,</s></li>
                                <li>VSC (Visual Studio Code)environnement de développement utilisé pour l'ecriture et le déboguage du code du projet</li>
                                <li>Toad, logiciel de gestion de base de données,</li>
                                <li><s>Extension SVN sous Eclipse, pour partager le projet avec l’autre partie du groupe.</s></li>
                                <li>GitHub, GitHub Desktop pour realiser les commit et pouvoir avencer le projet en dehors des heur de cours</li>
                            </ul>
                        </p>
                        <p>
                            <h2>Les langages : </h2>

                                <li>L’HTML, le langage de base pour construire les pages web nécessaires à la création de l’application,</li>
                                <li>Le CSS, indispensable pour la mise en forme des pages web et pour rendre le site plus agréable à utiliser,</li>
                                <li>Bibliothèques jQuery, pour dynamiser l’affichage des produits,</li>
                                <li>Le PHP, pour dynamiser le contenu du site.</li>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Explication">
                        <h1>Eplication du Projet</h1>
                        <p>
                            La première page (Annexe 1) que nous devions réaliser  se nomme « Présentation du Module Film »,  elle est constituée de deux parties : 
                            <ul>
                                <li>Des affiches de film qui défilent une à une,</li>
                                <li>D’un texte qui présente le site avec le nombre de films en temps réel dans la base.</li>
                            </ul></br>
                            La seconde page (Annexe 2) que nous devions créer se nomme « Liste des Films ». Sur cette page, il y a un tableau qui affiche tous les 
                            films de l’association. Un certain nombre de film choisis volontairement par page. Les films sont triés dans l’ordre alphabétique et 
                            les informations telles que le nom, le genre, la date de sortie et la durée sont affichées. Ces données sont récupérées dans la base 
                            de données. Grâce à la pagination, il nous était possible de naviguer entre les pages avec des boutons, soit la première ou la dernière, 
                            la précédente ou la suivante en fonction de la page ou on se situait.</br></br>

                            La dernière page (Annexe 3) nous permet d’avoir différentes informations sur un film sélectionné sur la seconde page. 
                            Les informations qui s’affichaient sous forme de différents onglets sont : </br>
                            <ul>
                                <li>Les informations sur le film (date de sortie, auteur, durée, etc…),</li>
                                <li>L’histoire,</li>
                                <li>Les acteurs,</li>
                                <li>La notation,</li>
                                <li>Les commentaires.</li>
                            </ul>
                            Dans les onglets, toutes les informations proviennent de la base de données.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Annexe">
                        <h1>&nbsp;Annexe</h1>
                        <p>
                            <h2>Annexe 1 : Première Page « Présentation du module Film »</h2>
                            <img src="./image/fiche/cp38/ALot1-1.png" />
                            <h2>Annexe 2 : Seconde Page « Liste des Films »</h2>
                            <img src="./image/fiche/cp38/ALot1-2.png" />
                            <h2>Annexe 3 : Troisième Page Exemple</h2>
                            <img src="./image/fiche/cp38/ALot1-3.png" />
                        </p>
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

