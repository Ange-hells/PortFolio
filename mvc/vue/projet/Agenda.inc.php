<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/projet/agenda.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page  du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <nav id='lienProjet'>
                <?php
                    echo "&nbsp<a href='$pptx' >Presentation pptx</a></br>";
                    echo "&nbsp<a href='$docx' >fiche docx</a></br>";
                    echo "&nbsp<a href='$site' >Agenda</a></br>";
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
            <h1>Agenda</h1>

           
        </div>
    </div><!--flex-->
</div><!-- content2 -->

