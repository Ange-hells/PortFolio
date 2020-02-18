<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/exelstema.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page exelstema du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <div id='info'>
                <p>
                    <h4>Realistation :</h4>Cours de formation</br>
                    <h4>Modaliter :</h4>Individuelle</br>
                    <h4>Competence :</h4>A1.1.1 A1.1.3 A2.3.2 A4.1.2 A5.2.4</br>
                    <h4>Ressource fournies :</h4>Document donné par la bijouterie Stema </br>
                    <h4>Resultat attendus :</h4>Feuille de calcul Excel qui permet de réaliser les factures de la bijouterie.</br>
                    <h4>Environement :</h4>Excel 2007</br>
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
                            L’entreprise STEMA est une entreprise de création et de vente de bijoux. Suite à la demande qu’elle a effectuée, elle nous a fait appel  
                            en tant que stagiaire.</br>
                            Elle nous a demandé de créer une application qui permettrait de pouvoir gérer automatiquement les facturations des clients.</br>
                            Elle nous demande de réaliser plusieurs feuilles avec différentes fonctions pour effectuer à la fin un publipostage,  où l’on verra apparaitre 
                            automatiquement le nom, le prénom du client, les produits commandés, le pourcentage de réduction et le détail du calcul sur les différents 
                            bijoux avec le pourcentage de réduction.</br>
                            Pour effectuer cette mission, la société STEMA ne nous impose pas le logiciel de tableur à utiliser. Nous avons donc choisi (pour des resons logiques) d’effectuer 
                            ce travail avec Microsoft Excel.</br>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Realisation">
                        <h1>&nbsp;Réalisation&nbsp;</h1>
                        <h2>Les différentes feuilles créées</h2>
                        <p>
                            <h3>Première feuille</h3>
                            L’entreprise nous demande de mettre en place une feuille qui permettrait de faire des calculs de cellule automatiquement, en fonction de ce que l’on saisit.</br>
                            Sur cette feuille nous avons différentes cellules à saisir manuellement, à savoir :
                            <ul>
                                <li>le nom du bijou ;</li>
                                <li>son prix ;</li>
                                <li>le taux de réduction à appliquer.</li>
                            </ul>
                            Suite à ces saisies manuelles, ils ont exigé de nous faire effectuer plusieurs calculs :
                            <ul>
                                <li>l’addition et la soustraction des 2 premiers bijoux ;</li>
                                <li>la multiplication du premier bijou 1 par 3 ;</li>
                                <li>la division du bijou 1 par 4 ;</li>
                                <li>le prix du premier bijou avec le taux de réduction appliqué.</li>
                            </ul>
                            Enfin, l’entreprise souhaitait une cellule qui donnerait automatiquement la date du jour.
                        </p>
                        <p>
                            <h3>Deuxieme feuille</h3>
                            Tout d’abord, sur cette deuxième seconde feuille, l’entreprise nous a demandé de faire en sorte que l’on puisse entrer deux bijoux, leur prix, leur taux de 
                            réduction et leur code secret à la main.</br>
                            Suite à cela, elle nous a fait effectuer les différents traitements ci- dessous :
                            <ul>
                                <li>La comparaison des deux bijoux pour savoir lequel est le plus cher ;</li>
                                <li>Renseigner si les bijoux ont le même prix ;</li>
                                <li>Si le taux de réduction est inscrit ;</li>
                                <li>De combien de caractère est constitué le premier bijou, sans compter les espaces ;</li>
                                <li>Classer les bijoux par type Retourner un type de bijou (« standard », « luxe » ou « camelote ») en fonction du prix ;</li>
                                <li>Afficher le code secret sous forme de points.</li>
                            </ul>
                            Ensuite, dans un tableau sous forme de cellule où sont renseignés des clients avec leur code  client, leur nom et prénom, STEMA, nous a demandé de prévoir une cellule 
                            qui permettrait grâce à la saisie du code client de faire apparaitre  par concaténation le prénom et le nom du client.</br>
                            Enfin, elle voulait que l’on montre l’évolution de leur chiffre d’affaires sous forme de graphe. Nous avons dû renseigner le chiffre d’affaires de la société STEMA 
                            pour les six premiers mois puis sélectionner la plage de cellules, cliquer sur « insertion  » et enfin choisir le model de graphique.
                        </p>
                        <p>
                            <h3>Troisieme feuille</h3>
                            Afin de pouvoir créer cette dernière feuille, il nous a fallu d’abord créer  trois autres feuilles :
                            <ul>
                                <li>Une avec des données sur les clients (nom, adresse, etc…) ;</li>
                                <li>Une autre pour savoir le type de client ; </li>
                                <li>Une avec les bijoux (leur nom, leur type et leur prix).</li>
                            </ul>
                            L’entreprise nous propose tout d’abord, de créer sur la feuille  une cellule qui permettra grâce au code client de ramener les informations sur ce client 
                            (son nom, son prénom, son adresse, son code postal, sa ville et son taux de remise applicable).</br>
                            Ensuite en dessous, il faudra renseigner le code du bijou. Après cela, le tableur ira chercher le nom et le prix du bijou et il ne restera plus qu’à renseigner la 
                            quantité souhaitée. Les calculs opéreront automatiquement par  la suite.

                            Au niveau du prix final, le tableur calculera le total hors taxe, la remise, le total hors taxe avec la remise, la tva et le total en incluant la tva puis enfin la date limite de paiement pour le client.
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

