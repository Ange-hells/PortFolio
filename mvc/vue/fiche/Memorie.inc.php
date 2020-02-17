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
            <div id='info'>
                <p>
                    <h4>Realistation :</h4>Cours de formation</br>
                    <h4>Modaliter :</h4>Individuelle</br>
                    <h4>Competence :</h4>A4.1.6 A4.1.7 A4.1.5 A5.2.2 A5.2.4</br>
                    <h4>Ressource fournies :</h4>Enoncés de TP</br>
                    <h4>Resultat attendus :</h4>Une application Windows Form contenant un jeu de cartes, un test de palindrome et deux fenêtres annexes. </br>
                    <h4>Environement :</h4>Microsoft Visual Studio 2015, 2017, 2019</br>
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
                    <span class="onglet_0 onglet" id="onglet_Memorie" onclick="javascript:change_onglet('Memorie');">&nbsp;Memorie&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_Palindrome" onclick="javascript:change_onglet('Palindrome');">&nbsp;Palindrome&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_A-propos" onclick="javascript:change_onglet('A-propos');">A propos</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Memorie">
                        <h1>&nbsp;Jeux de carte</h1>
                        <p>
                            Avant de parler du jeu de cartes, nous avions différents objectifs à atteindre.</br>
                            Tout d’abord, nous devions créer une application Windows Form qui comporte trois fonctions :
                            <ul>
                                <li>Un menu déroulant contenant plusieurs fonctionnalités (bouton pour ouvrir les fenêtres),</li>
                                <li>Ouvrir deux fenêtres filles différentes,</li>
                                <li>Créer une barre de menu.</li>
                            </ul>
                            La première étape consistait à créer la fenêtre parent de l’application. Elle sera le conteneur des fenêtres filles que l’on ouvre 
                            grâce au menu. Le menu est composé de menus déroulants ainsi que d’une barre de menu. Les menus déroulants permettent l’ouverture 
                            des fenêtres filles, leurs fermetures (fenêtre active ou toutes les fenêtres), leur disposition (En cascade, horizontale ou verticale) 
                            et une fenêtre « A propos », dite modale car on ne peut pas interagir avec l’application tant qu’elle n’est pas fermée.
                            Il y a aussi un bouton qui permet de quitter l’application sans avoir à cliquer sur la croix rouge du coin supérieur droit de la fenêtre parent.</br></br>

                            Ensuite, on nous a demandé de créer un jeu de cartes. Le fonctionnement est simple, dans un premier temps, on rentre une valeur dans une boite 
                            de texte et le nombre de cartes correspondant au nombre entré s’affiche dans la zone appropriée. Les cartes de la pioche comme les cartes du 
                            tapis sont identiques mais pas dans le même ordre. Les cartes sur le tapis sont visibles quelques secondes avant de se retourner. La première 
                            carte de la pioche est retournée, le but du jeu est de retrouver la carte équivalente sur le tapis. Pour cela, il faut double-cliquer sur une des 
                            cartes du tapis afin de la retourner. Si la carte retournée et la carte de la pioche sont identiques, les deux cartes sont retirées du jeu, 
                            sinon la carte du tapis se retourne de nouveau.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Palindrome">
                        <h1>&nbsp;Palindrome&nbsp;</h1>
                        <p>
                            Enfin, Le palindrome est un mot qui se lit dans les deux sens, par exemple « Kayak ». L’application intègre une fenêtre où l’on peut tester si un mot est un palindrome.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_A-propos">
                        <h1>A propos</h1>
                        <p>
                            Memorie et palindrome ayent etais realiser dans le cadre de l'application MDI vous aite fortement inviter a vous rendre sur sa page </br></br><a href="./index.php?module=projet&amp;page=MDI"> MDI </a>
                        </p>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                //<!--
                var anc_onglet = 'Memorie';
                    change_onglet(anc_onglet);
                //-->
            </script>

        </div>
        <div id='right-block'>
            
        </div>
    </div><!--flex-->
</div><!-- content2 -->

