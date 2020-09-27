<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/projet/cinepassion38.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page cinepassion38 du module projet
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
            <nav id='lienProjet'>
                <?php
                    echo "&nbsp<a href='$pptx' >Presentation pptx</a></br>";
                    echo "&nbsp<a href='$docx' >fiche docx</a></br>";
                    echo "&nbsp<a href='$site' >CinePassion38</a></br>";
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
            <h1>CinePassion38</h1>
            <a href="index.php?module=fiche&page=cp38Lot1"><img src="./image/fiche/cp38/cp38_1.bmp" alt=""/></a>
            <a href="index.php?module=fiche&page=cp38Lot2"><img src="./image/fiche/cp38/cp38_2.bmp" alt=""/></a>
           
        </div>
    </div><!--flex-->
</div><!-- content2 -->