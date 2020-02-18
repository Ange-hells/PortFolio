<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/polymorphisme.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page polymorphisme du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <div id='info'>
                <p>
                    <h4>Realistation :</h4>En cours de formation</br>
                    <h4>Modaliter :</h4>Individuelle</br>
                    <h4>Competence :</h4>A1.1.1, A4.1.5, A4.1.6, A4.1.7, A5.2.3, A5.2.4</br>
                    <h4>Ressource fournies :</h4>TP</br>
                    <h4>Resultat attendus :</h4>Gérer une classe d’élèves avec leur spécialité (SLAM ou SISR). 
                        Gérer un évènement pour avertir des souscripteurs lorsqu’une note est trop basse. 
                        Implémenter une interface pour comparer le nom et le prénom de deux élèves.</br>
                    <h4>Environement :</h4>Visual studio 2015</br>
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
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Contexte">
                        <h1>&nbsp;Contexte</h1>
                        <p>
                            Tout d'abord, l'application que nous devions créer, devait permettre de gérer une classe de SISR et SLAM. Pour les élèves, 
                            nous avions retenu les informations importantes, c'est à dire, le nom, le prénom, le numéro et les notes de chacun. 
                            La classe section contient l'ensemble des élèves, les SLAM et les SISR.L’interface sert à comparer et à trier les élèves 
                            en fonction de leur nom, prénom ou de leur spécialité. L’ajout d’un délégué a permis de créer une alerte, prévenant des 
                            responsables prédéfinis (Proviseur ou encore CPE) lorsque l’élève reçoit une note inférieure au seuil fixé.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Realisation">
                        <h1>&nbsp;Réalisation&nbsp;</h1>
                        <p>
                            Dans un premier temps, nous avons étudié un modèle UML afin de créer les classes appropriés (Annexe 1.) Ensuite, nous avons 
                            mis en place une interface qui permet d’inscrire un élève dans la classe en lui donnant les caractéristiques nécessaires 
                            à sa création. C’est-à-dire un nom, un prénom et une option et grâce à cela, chaque élève SLAM ou SISR est créé et entré 
                            dans la section 2TSIO. (Annexe 2)
                        </p>
                        <p>
                            Dans une seconde partie du projet, nous avons mis en place une Interface (ICompare) qui consistait à comparer le nom des 
                            deux élèves. Nous devions faire attention car si deux élèves avaient le même nom de famille la comparaison devait se faire 
                            sur leur prénom. Grace au résultat obtenu, nous voyons dans quelle option se trouve l’élève et à quelle place il se situe. 
                            Un bouton et sa méthode « Trier » sont ajoutés pour permettre le tri selon la spécialité (Slam, Sisr ou sans tri) pour 
                            l’affichage dans le tableau.
                        </p>
                        <p>
                            Dans une troisième partie, on a représenté l’ajout d’un délégué. Son objectif, est de déclencher une procédure lorsqu’un 
                            évènement se produit.
                            Cette procédure (GestionNoteTropBasse) se déclenche dès qu’un élève  obtient une note inférieure à la moyenne. 
                            A  cet instant, on va alerter des souscripteurs  comme  le proviseur ou le CPE. L’alerte se constitue ainsi : «Monsieur le 
                            Proviseur : la source ‘Nom de l’élève’ a signalé une note trop basse : 9».
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

