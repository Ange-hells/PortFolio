<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/sauvegarde.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page sauvegarde du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <div id='info'>
                <p>
                    <h4>Realistation :</h4>Cours de formation</br>
                    <h4>Modaliter :</h4>Individuelle</br>
                    <h4>Competence :</h4>A1.1.2 A1.1.3 A1.2.3 A1.2.4 A5.2.3 A5.2.4</br>
                    <h4>Ressource fournies :</h4>Annexe et TP</br>
                    <h4>Resultat attendus :</h4>Sauvegarde planifiée</br>
                    <h4>Environement :</h4>Windows Backup Server Machine Virtuelle sous Windows serveur</br>
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
                    <span class="onglet_0 onglet" id="onglet_Contexte" onclick="javascript:change_onglet('Contexte');">&nbsp;Windows Backup&nbsp;</span>
                    <span class="onglet_0 onglet" id="onglet_Realisation" onclick="javascript:change_onglet('Realisation');">&nbsp;Sauvegarde PowerShell&nbsp;</span>
                </div>
                <div class="contenu_onglets">
                    <div class="contenu_onglet" id="contenu_onglet_Contexte">
                        <h1>&nbsp;La sauvegarde avec Windows Backup</h1>
                        <p>
                            Pour commencer, avant de pouvoir faire une sauvegarde globale du serveur, il faut installer Windows Backup. Ajouter la fonctionnalité « Sauvegarde 
                            de Windows Server » au Gestionnaire de serveur.</br></br>
                            La planification concernera le serveur entier mais il est possible de sauvegarder seulement certaines parties du serveur. La sauvegarde peut être 
                            effectuée plusieurs fois par jour.</br>
                            <img src="./image/fiche/save/save1.png"/></br>
                            Pour pouvoir effectuer la sauvegarde il faut choisir un disque dur, de préférence ce disque dur doit contenir que les sauvegardes du serveur
                            <img src="./image/fiche/save/save2.png"/></br>
                            Cependant, avec cette solution, il est impossible de planifier plusieurs sauvegardes tous les jours. Afin de pouvoir mettre en place des sauvegardes, 
                            il faut utiliser WBADMIN, pour pouvoir utiliser des scripts PowerShell.
                        </p>
                    </div>
                    <div class="contenu_onglet" id="contenu_onglet_Realisation">
                        <h1>&nbsp;La sauvegarde par script PowerShell&nbsp;</h1>
                        <p>
                            Il faut ajouter la fonctionnalité « Windows PowerShell » dans le Gestionnaire de serveur afin de pouvoir exécuter les scripts.
                        </p>
                        <p>
                            Grâce au script il est désormais possible de créer un répertoire pour chaque jour afin de séparer les sauvegardes quotidiennes 
                            stockées sur le disque. Il est possible de limiter l’accès à ces dossiers uniquement aux opérateurs de sauvegarde pour éviter 
                            toute erreur de manipulation pouvant entrainer la perte d’une sauvegarde.
                        </p>
                        <p>
                            Le PowerShell offre aussi la gestion des différents types de données à restaurer. La comparaison des fichiers à restaurer avec 
                            les fichiers actuels évite la restauration de données n’ayant pas été modifiées depuis la sauvegarde.
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

