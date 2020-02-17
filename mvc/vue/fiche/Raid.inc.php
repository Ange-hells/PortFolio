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
                    <h4>Competence :</h4>A1.3.2 A1.3.3 A2.3.2 A3.2.1</br>
                    <h4>Ressource fournies :</h4>Logiciel VirtualBox un os serveur(win Serveur 2016), et nos 3 machines virtuelles).</br>
                    <h4>Resultat attendus :</h4>Disque configuré prêt pour la sauvegarde, configuration de RAID</br>
                    <h4>Environement :</h4>VirtualBox (host : windows 10, gest : windows, ubuntu, mint)</br>
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
                    <span class="onglet_0 onglet" id="onglet_Définition" onclick="javascript:change_onglet('Définition');">&nbsp;Context&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_LesRaid" onclick="javascript:change_onglet('LesRaid');">&nbsp;Réalisation&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_ConfigurationW" onclick="javascript:change_onglet('ConfigurationW');">Configuration Windows</span>
                    <span class="onglet_0 onglet" id="onglet_ConfigurationL" onclick="javascript:change_onglet('ConfigurationL');">Configuration Linux</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Définition">
                        <h1>&nbsp;Définition</h1>
                        <p>
                            Tout d'abord, RAID signifie  "Redundant Array of Independent Disks", ce qui veut dire "regroupement redondant de disques indépendants".</br>
                            Le RAID est un ensemble de techniques de virtualisation du stockage permettant de répartir des données sur plusieurs disques durs afin d'améliorer 
                            soit les performances, soit la sécurité ou la tolérance aux pannes de l'ensemble du ou des systèmes.</br>
                            Ensuite,  les RAID sont souvent utilisés sur les serveurs, mais on en trouve aujourd’hui un peu partout comme sur les ordinateurs portables. </br>
                            Il existe deux types de RAID : 
                            <ul>
                                <li>le RAID matériel (géré par un contrôleur RAID)</li>
                                <li>le RAID logiciel (gérer par un logiciel). </li>
                            </ul></br>
                            Enfin, il existe différents types de RAID que l'on peut utiliser selon le  souhait de l’utilisateur ou de l’entreprise.</br>
                            Ici, nous allons voir à quoi sert un RAID puis comment configurer du RAID Logiciel sur Windows Server et Linux Ubuntu.</br>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_LesRaid">
                        <h1>&nbsp;Les Differents RAID et leus spécificités&nbsp;</h1>
                        <p>
                        Le type de RAID à choisir dépend de ses avantages et de l'utilisation des données que contiendront les disques, nous allons ici parcourir les plus connues.
                        </p>
                        <p>
                            <h2>RAID 0 :</h2>
                            Le RAID 0 se constitue au minimum de 2 disques durs. Son principe repose sur le fait d'utiliser les disques simultanément en parallèle, et permet d'obtenir 
                            de bonnes performances en lecture et écriture. </br>
                            Un même fichier va être réparti sur l'ensemble des disques, son enregistrement et son accès seront bien plus rapides.</br>
                            La capacité totale est égale à celle du disque le plus petit, il est donc conseillé d'utiliser des disques de même capacité.</br>
                            <img src="./image/fiche/raid/Raid0-0.PNG"/></br>
                            Mais il n’y a pas de duplication des données (répartition de parité). Il n'y a par conséquent aucune tolérance aux pannes car si un disque ne fonctionne 
                            plus, les fichiers seront incomplets et inutilisables. Il ne doit donc pas être utilisé dans les cas d’un stockage d’informations délicates.</br>
                        </p>
                        <p>
                            <h2>RAID 1 :</h2>
                            Le RAID 1 repose sur deux disques durs et sur un simple système de mirroring. Le contenu d’un disque est recopié entièrement sur le second, ce qui assure une copie complète de ses données en cas de panne du premier disque. Il n’y a en revanche aucunes performances supplémentaires grâce à ce système puisque c’est une simple sauvegarde. Bien entendu il faut que le second disque ait une capacité au minimum équivalente à celle du premier disque.</br>
                            <img src="./image/fiche/raid/Raid1-0.PNG"/>
                        </p>
                        <p>
                            <h2>RAID 5 :</h2>
                            Le RAID 5 se conçoit sur au minimum trois disques durs. Ce système est le système RAID le plus utilisé car il combine l’utilisation simultanée des disques, profitant donc de performances améliorées en lecture / écriture, et d’une tolérance aux pannes. Ce système de parité permet de prévenir la panne d’un des disques durs présents. La capacité totale de ce type de RAID est égale au total moins la capacité d’un disque (dû à la parité).</br>
                            <img src="./image/fiche/raid/Raid5-0.PNG"/>
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_ConfigurationW">
                        <h1>Configuration d'un RAID 0, 1, 5 sous windows</h1>
                        <p>
                            <h2> Le RAID 0 : </h2>
                            La première étape consiste à initialiser les disques que vous voulez réunir afin de les mettre en ligne dans la gestion des disques.</br>
                            <img src="./image/fiche/raid/Raid0-1.PNG"/></br>
                            Ensuite, il reste à créer le RAID 0 pour cela clic droit sur le disque 0 et sélectionner nouveau volume fractionné.</br>
                            <img src="./image/fiche/raid/Raid0-2.PNG"/></br>
                            Grâce au RAID 0 on peut créer à partir de deux disques durs de 10Go un seul disque de 20Go.</br>
                        </p>
                        <p>
                            <h2> Le RAID 1 : </h2>
                            Comme pour le RAID 0, il faut commencer par initialiser les disques</br>
                            <img src="./image/fiche/raid/Raid1-1.PNG"/></br>
                            Ensuite, il faut choisir l’option « Nouveau volume en miroir ».</br>
                            <img src="./image/fiche/raid/Raid1-2.PNG"/></br>
                            Désormais, on peut retrouver le contenu du disque A sur le disque B, évitant les pertes de données lorsque l’un des deux disques est désactivé ou endommagé.</br>
                        </p>
                        <p>
                            <h2> Le RAID 5 : </h2>
                            Il faut commencer par formater les disques choisis pour faire du RAID 5 (Nouveau volume RAID-5).</br>
                            <img src="./image/fiche/raid/Raid5-1.PNG"/></br>
                            Ensuite, il faut ajouter les disques dans un ensemble afin de mettre en place le RAID.</br>
                            <img src="./image/fiche/raid/Raid5-2.PNG"/></br>
                            Le RAID 5 est maintenant fonctionnel et regroupe plusieurs disques physiques en un disque logique, et est tolérant à la panne d’un disque à la fois.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_ConfigurationL">
                        <h1>Configuration d'un RAID 0, 1, 5 sous Linux ubuntu</h1>
                        <p>
                            
                        </p>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                //<!--
                var anc_onglet = 'Définition';
                    change_onglet(anc_onglet);
                //-->
            </script>

        </div>
        <div id='right-block'>
            
        </div>
    </div><!--flex-->
</div><!-- content2 -->

