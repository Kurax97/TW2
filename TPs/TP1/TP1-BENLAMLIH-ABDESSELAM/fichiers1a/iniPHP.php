<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Premier exercice PHP</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="iniPHP.css" />
    </head>
    <body>
        <header>
            <h1>Premier exercice PHP</h1>
            <h2>Réalisé par <span class="nom">Mohammed Benlamlih</span></h2>
        </header>
        <section>
            <h2>Question 1</h2>
                <?php 
                    date_default_timezone_set("Europe/Paris");
                    $date = date('d / m / Y'); 
                    echo "Nous sommes le $date"; 
                 ?>
        </section>
        <section>
            <h2>Question 2</h2>
                <?php
                    echo "La version de PHP utilisée est: ". PHP_VERSION . " et la version du système d’exploitation du serveur est: " .PHP_OS;
                ?> 
        </section>
        <section>
            <h2>Question 3</h2>
                <?php
                    $n = 7;
                    $texte = "Living my best life!";
                    echo "\$n vaut $n et \$texte vaut $texte";
                ?> 
        </section>
        <section>
            <h2>Question 4</h2>
                <?php
                    for ($n; $n > 0; $n--)
                        echo '<p>'.$texte.'</p>';
                ?> 
        </section>
        <section>
            <h2>Question 5</h2>
                <?php
                    function paragrapheTronque($chaine,$i){
                        $ourChaine = substr($chaine, 0, $i);
                        return "<p>$ourChaine</p>";
                    }

                    //Teste de la fonction paragrapheTronque : 
                    //echo paragrapheTronque("$texte",6);

                    $longeurTexte = strlen($texte);
                    for ($longeurTexte; $longeurTexte > 0; $longeurTexte--){
                        $smallString = substr($texte, 0, $longeurTexte);
                        echo "<p>$smallString</p>";
                    }
                ?> 
        </section>
        <section>
            <h2>Question 6</h2>
                <?php
                    function listeParagrapheTronque($chaine){
                        echo "<ul>";
                        $longeurTexte = strlen($chaine);
                        for ($longeurTexte; $longeurTexte > 0; $longeurTexte--){
                            $smallString = substr($chaine, 0, $longeurTexte);
                            echo "<li>$smallString</li>";
                        }
                        echo "</ul>";
                    }
                    listeParagrapheTronque($texte);
                ?> 
        </section>
        <section>
            <h2>Question 7</h2>
                <?php
                    function multiplication($x, $y){
                        return $x * $y;
                    }

                    function tableMultiplications($a){
                        echo "<ul>";
                        for ($i = 1; $i <= 9; $i++){
                            echo "<li>";
                            $res = multiplication($a, $i);
                            echo $a." * ".$i." = ".$res;
                            echo "</li>";
                        }
                        echo "</ul>";
                    }

                    //Teste de la fonction tableMultiplications : 
                    tableMultiplications(2);
                ?> 
        </section>
        <section>
            <h2>Question 8</h2>
                <?php
                    function tablesMultiplications(){
                        echo "<ul>";
                        for ($i = 1; $i <= 9; $i++){
                            echo "<li>";
                            tableMultiplications($i);
                            echo "</li>";
                        }
                        echo "</ul>"; 
                    }
                    echo tablesMultiplications();
                ?> 
        </section>
        <section>
            <h2>Question 9</h2>
                <?php
                    echo "<table class = 'multiplications'>";
                    echo "<tr>";
                    echo "<td id = special3> * </td>";
                    for ($i = 1; $i <= 9; $i++){
                        echo "<td id = special2>";
                        echo $i;
                        echo "</td>";
                    }
                    echo "</tr>";
                    for ($i = 1; $i <= 9; $i++){
                        echo "<tr>";
                        echo "<td id = 'special'>$i</td>";
                        for ($a = 1; $a <= 9; $a++){
                            echo "<td>";
                            echo multiplication($a,$i);
                            echo "</td>";
                        }
                        echo "</tr>";
                    } 
                    echo "</table>";
                ?> 
        </section>

    </body>
    
</html>