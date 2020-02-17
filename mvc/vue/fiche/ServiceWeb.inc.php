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
                    <h4>Competence :</h4>A1.3.3 A1.3.4</br>
                    <h4>Ressource fournies :</h4>TP</br>
                    <h4>Resultat attendus :</h4>Services Web Fonctionnelles</br>
                    <h4>Environement :</h4>Visual Studios 2015, SQL Management Studios</br>
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
                    <span class="onglet_0 onglet" id="onglet_Contexte" onclick="javascript:change_onglet('Contexte');">&nbsp;Définition&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_Realisation" onclick="javascript:change_onglet('Realisation');">&nbsp;Bibliothèque (DLL)&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_pourquoi" onclick="javascript:change_onglet('pourquoi');">Service Web</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Contexte">
                        <h1>&nbsp;Définition</h1>
                        <p>
                            Afin de faire fonctionner un service web, il faut utiliser un Modèle SAO, qui permet la communication entre 2 applications via Internet.</br>
                            Il a besoin du protocole HTML, comme moyen de transport. Cela va permettre les communications sur un support universel. </br>
                            Il utilise aussi la notation XML pour décrire les appels de fonctions distantes et les données échangées.</br>
                            Les Services Web emploient un ensemble de technologies, qui doivent respecter une structure de couches sans être dépendante les unes des autres. 
                            </br><img src="./image/fiche/serviceWeb/SW1.png" /></br></br>
                            L’accès au service web peut se faire de deux façons différentes :
                            <ul>
                                <li>Par l’intranet d’une entreprise,</li>
                                <li>Par internet.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Realisation">
                        <h1>&nbsp;Création d'une Bibliothèque&nbsp;</h1>
                        <p>
                            Toujours dans l’intention de créer un Service Web, il nous a fallu concevoir une Vue nommée VueRDV pour permettre d’avoir un visuel sur les différents rendez-vous  et les coordonnées des praticiens. </br>
                            </br><img src="./image/fiche/serviceweb/SW2.png" /></br></br>
                            Après, nous avons dû créer une bibliothèque de classe que l’on a nommé GSB_DAO.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_pourquoi">
                        <h1>&nbsp;Création du Service Web&nbsp;</h1>
                        <p>
                            Il est nécessaire de créer un projet de type Application du service WCF auquel il faut ajouter un élément WCF Data Services.</br>
                            Ensuite une clause using est à renseigner, celle qui fait référence à la bibliothèque Entity_Data ici « using GSB_DAO ; ».
                        </p>
                        <p>
                            La référence qui correspond au fichier .dll de notre bibliothèque doit être ajoutée. Dans notre cas il s’agit de « GSB_DAO.dll ».</br>
                            Ensuite la modification du fichier Web.Config afin d’y ajouter la chaine de connexion à la base de données. Pour cela il suffit de copier cette chaine située dans le fichier App.Config de la bibliothèque DAO (GSB_DAO). 
                        </p>
                        <p>
                        Enfin, vérifier que notre service Web est en marche. Lors du lancement de celui-ci, le navigateur web choisi devrait s’ouvrir afin d’afficher le contenu de notre base de données.
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

