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
            <nav id='lienProjet'>
                <?php
                    echo "&nbsp;<a href='$pptx' >Presentation pptx</a></br>";
                    echo "&nbsp;<a href='$docx' >Fiche docx</a></br>";
                    echo "&nbsp;<a href='$site' >Owa</a></br>";
                    echo "&nbsp;<a href='$git'  >gitHub</a>";
                ?>
            </nav>
            <div id='logo'>
                <?php
                    echo "<img src='$logo' alt=''/>";
                ?>
            </div>
        </div>
        <div id='center-block'>
            <h1>Owa</h1>
            <h2>&nbsp;Presentation</h2>
            <p>
                Owa (One Web App) a vue le jour lors du developpement de l'application <a href="./index.php?module=fiche&amp;page=gestionContact"> 
                "gestion contact"</a> realiser en stage de premiere année à la maire d'echirolle. </br>
                Le but d'Owa est de permetre l'utilisation d'une application web (client leger) comme s'il s'agisser d'une application installer sur 
                poste (client lourd). </br> 
            </p>
            <h2>&nbsp;Fonctionaliter</h2>
           <p>
                L'application ce presente comme suit : 
            </p>
        </div>
    </div><!--flex-->
</div><!-- content2 -->

