<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/cp38lot2.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page cp38lot2 du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <div id='info'>
                <p>
                    <h4>Realistation :</h4>PPE</br>
                    <h4>Modaliter :</h4><s>En equipe</s>Individuelle</br>
                    <h4>Competence :</h4>A1.1.1 A1.1.2 A1.1.3 A1.2.4 A1.3.2 A1.3.3 A1.4.1 A4.1.1 A4.1.3 &nbsp;&nbsp;&nbsp;A4.1.6 &nbsp;&nbsp;&nbsp;&nbsp;A5.1.1 &nbsp;&nbsp;&nbsp;A5.2.1</br>
                    <h4>Ressource fournies :</h4>Fonctionnalité a développer et Cahier des charges  </br>
                    <h4>Resultat attendus :</h4>Gérer les authentifications sur le site </br>
                    <h4>Environement :</h4><s>Eclipse</s>, VScode, Toad et <s>SVN</s> GitHub (GitHub Desktop) </br>
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
                    <span class="onglet_0 onglet" id="onglet_Outil" onclick="javascript:change_onglet('Outil');">&nbsp;Outil&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_Explication" onclick="javascript:change_onglet('Explication');">Projet</span>
                    <span class="onglet_0 onglet" id="onglet_Annexe" onclick="javascript:change_onglet('Annexe');">Annexe</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Contexte">
                        <h1>&nbsp;Contexte</h1>
                        <p>
                            Pour rappel le site internet « CinéPassion38 », est un site qui permet de mettre en avant une multitude de film et leur description.</br>
                            Il est déjà fonctionnel et le Lot 1 est fini. Désormais, nous allons devoir gérer l’authentification des utilisateurs au site web CinéPassion38.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Outil">
                        <h1>&nbsp;Les outils utiliser&nbsp;</h1>
                        <p>
                            <h2>Les logiciels : </h2>
                            <ul>
                                <li><s>Eclipse, environnement de développement utilisé pour débugger la partie PHP du projet.</s></li>
                                <li>VSC (Visual Studio Code) environnement de développement utilisé pour l'ecriture et le déboguage du code du projet</li>
                                <li>Toad, logiciel de gestion de base de données.</li>
                                <li><s>Extension SVN sous Eclipse pour partager le projet avec l’autre partie du groupe.</s></li>
                                <li>GitHub, GitHub Desktop pour realiser les commit et pouvoir avencer le projet en dehors des heur de cours</li>

                            </ul>
                        </p>
                        <p>
                            <h2>Les langages :</h2>
                            <ul>
                                <li>L’HTML, le langage de base pour construire les pages web nécessaires à la création de l’application.</li>
                                <li>Le CSS, indispensable pour la mise en forme des pages web et pour rendre le site plus agréable à utiliser.</li>
                                <li>Bibliothèques jQuery, pour dynamiser l’affichage des produits.</li>
                                <li>Le PHP, pour dynamiser le contenu du site.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Explication">
                        <h1>Explication du projet</h1>
                        <p>
                            Afin de pouvoir gérer les authentifications, il nous a fallu ajouter des tables à la base de données, la table <b>(Annexe 1)</b> :
                            <ul> 
                                <li>Rsa, </li>
                                <li>User, </li>
                                <li>Typeuser.</li>
                            </ul></br>
                            Suite a cela nous avons du créer différente pages :
                            <ul>
                                <li>Le formulaire d'inscription. Permet d'inscrire une personne et de la référencer dans la base de données <b>(Annexe 2)</b>.</br>
                                <li>Le formulaire de connexion qui comporte deux zones de texte et 2 boutons <b>(Annexe 3)</b>. Les zones de textes sont utilisé 
                                    pour entrer le login et le mot de passe, et les boutons servent à s'enregistrer ou a envoyer vers le formulaire d'inscription. 
                                    Grâce à du JavaScript, nous avons rendu impossible l'utilisation de certains caractères au niveau du mot de passe et du login. 
                                    Les données d’authentification sont cryptées avec une clé RSA publique et une privée (Chiffrement asymétrique)pour éviter tout 
                                    vol d’informations de connexion pendant le trajet des données du client vers la base et dans le sens inverse.</br>
                                <li>Après authentification, on fait disparaitre le formulaire pour faie apparaitre le nom de la personne et son type de compte, 
                                    ainsi qu’un lien de déconnexion dans le haut du formulaire <b>(Annexe 4)</b>.</br>
                                <li>Une fonction de déconnexion automatique au bout de x seconde <b>(Annexe 5)</b>.</br>
                            </ul>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Annexe">
                        <h1>&nbsp;Annexe</h1>
                        <p>
                            <h2>Annexe 1 : Première Page « Présentation du module Film »</h2>
                            <img src="./image/fiche/cp38/ALot2-1.png" />
                            <h2>Annexe 2 : Seconde Page « Liste des Films »</h2>
                            <img src="./image/fiche/cp38/ALot2-2.png" />
                            <h2>Annexe 3 : Troisième Page Exemple</h2>
                            <img src="./image/fiche/cp38/ALot2-3.png" />
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

