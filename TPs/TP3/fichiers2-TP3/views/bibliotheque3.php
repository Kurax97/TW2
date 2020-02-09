<?php 
   global $htmlBiblio;
   global $biblio;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Bibliothèque</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <h1>Bibliothèque</h1>
        </header>
        <?php
            if ($_GET['ordre'] === 'titres'){
                $htmlBiblio = biblioToHTML($biblio, "titles");
                echo $htmlBiblio;
            }elseif ($_GET['ordre'] === 'categories') {
                $htmlBiblio = biblioToHTML($biblio, "categories");
                echo $htmlBiblio;
            }
            elseif ($_GET['ordre'] === 'aucun' || $_GET['ordre'] === NULL){
                $htmlBiblio = biblioToHTML($biblio);
                echo $htmlBiblio;
            }else{
                $htmlBiblio = biblioToHTML($biblio);
            }
            
        ?>
    </body>
    
</html>