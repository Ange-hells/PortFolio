<!-- ========= V U E =============================================================================================
 fichier				: ./mvc/vue/fiche/accueil.inc.php
 auteur					: Nathan Thomasset (nathan.thomasset2@gmail.com)
 date de création		: fevrier 2020
 date de modification	:
 rôle					: permet de générer le code html de la partie centrale de la page accueil du module fiche
<================================================================================================================== -->
<div id='content2'>
    <div id='flex'>
        <div id='left-block'>
           
        </div>
        <div id='center-block'>
            <div id='Confinement'>
                <?php
                    while (!$ReaConfinement->estVide()){
                        $uneRea = $ReaConfinement-> getUnElement();

                        echo "<div class='reaConfinement'>";
                            echo "<a href='./index.php?module=confinement&amp;page=$uneRea->lienPageRea'>";
                                echo "<div class='uneRea'>";
                                    echo "<h2> $uneRea->libelleRea </h2>";
                                    echo "<image class='imgRea' src='./image/logo/$uneRea->libelleRea' >";
                                    echo "<span> $uneRea->descriRea </span>";
                                echo "</div>";
                            echo "</a>";
                            // echo "</div>";
                            //     echo "<span> $Test </span>";
                            // echo "</div>";
                        echo "</div>";

                        // if ($unActeur->sexe == 'M'){
                        //     echo "<img class='sexe' src='./././image/divers/homme.png'>";
                        // }else{
                        //     echo "<img class='sexe' src='./././image/divers/femme.png'>";
                        // };
                        // if (file_exists("./././image/personne/acteur/$unActeur->prenomPersonne $unActeur->nomPersonne.jpg")){
                        //     echo " <img class='element1' src='./././image/personne/acteur/$unActeur->prenomPersonne $unActeur->nomPersonne.jpg'>";
                        // }else{
                        //     echo" <img class='element1' src='./././image/personne/Aucune personne.jpg'>";
                        // };
                        // echo "<p class='element2'> $unActeur->prenomPersonne $unActeur->nomPersonne </br> $unActeur->age ans </br> né le $unActeur->dateNaissance </br> a $unActeur->villeNaissance </br> $unActeur->paysNaissance </p>";        
                        // echo "<p class='element3'>"; if ($unActeur->sexe == 'M'){
                        //                                 echo "Dans ce film, $unActeur->prenomPersonne $unActeur->nomPersonne joue le role de $unActeur->role il etais agé de $unActeur->ageDansFilm ans lors de la sortie du film en France.</p>";
                        //                             }else{
                        //                                 echo "Dans ce film, $unActeur->prenomPersonne $unActeur->nomPersonne joue le role de $unActeur->role elle etais agée de $unActeur->ageDansFilm ans lors de la sortie du film en France.</p>";       
                        //                             };
                    };  
                ?>
            </div>
        </div>
        <div id='right-block'>
            
        </div>
    </div><!--flex-->
</div><!-- content2 -->

