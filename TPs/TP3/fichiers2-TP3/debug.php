<?php
/**
 * Indique au navigateur qu'il doit afficher du texte ordinaire, sans l'interpréter comme de l'HTML :
*/
header("Content-Type: text/plain;charset=UTF-8");

/**
 * Inclusion du fichier de définitions de fonctions :
 */
require_once("lib/fonctionsLivre.php");    // inclusion de fichier

/* Test question 1.1
 */

/* fonction de test
 *  reçoit comme argument un nom de fichier et affiche le résultat de readBook sur ce fichier
 */
function testReadBook($fileName){
    $fd = fopen($fileName,'r');
    $book = readBook($fd);
    echo "Résultat pour $fileName \n";
    print_r($book);
}

/*
 * Lancement des tests :
 */
// une description corretce de livre suivie de la fin de fichier
// doit produire un résultat correct
testReadBook('data/exempleLivre.txt');

// une description de livre,(avec des espaces inutiles) suivie d'une ligne vide puis d'un autre texte à ignorer
// doit produire un résultat correct
testReadBook('data/exempleLivre2.txt');

// une description de livre incorrecte (manque ':' en ligne 2)
// doit déclencher une exception
testReadBook('data/exempleLivreErrone.txt');

// Teste de le fonction elementBuilder

echo "Teste de le fonction elementBuilder";
echo "\n";
echo elementBuilder('h2','La marque du diable','titre');
echo elementBuilder('img','src="couvertures/scorpion.jpg" alt="image de couverture','image');
echo "\n";

// Teste de le fonction authorsToHTML
echo "Teste de le fonction authorsToHTML";
echo "\n";
echo authorsToHTML('Marini - Desberg - Simo'); 
echo "\n";
// Teste de la fonction coverToHTML
echo "Teste de la fonction coverToHTML";
echo "\n";
echo coverToHTML('scorpion.jpg');
echo "\n";
// Teste de la fonction propertyToHTML
echo "Teste de la fonction propertyToHTML";
echo "\n";
echo propertyToHTML('titre', 'La marque du diable');
echo propertyToHTML('auteurs', 'Marini - Desberg');
echo propertyToHTML('couverture', 'scorpion.jpg');
echo "\n";
echo "\n";
echo "\n";


// teste de la fonction bookToHTML

$fd = fopen('data/exempleLivre.txt','r');
echo bookToHTML(readBook($fd));
echo "\n";
echo "\n";
echo "\n";
echo "\n";

testReadBook('data/livres.txt');

echo "\n";
echo "\n";
echo "\n";


echo "final test: ";

echo "\n";
echo "\n";
$fd = fopen('data/livres.txt','r');
echo libraryToHTML($fd);


/**
Voilà ce qui devrait s'afficher :
=================================

Résultat pour data/exempleLivre.txt 
Array
(
    [couverture] => scorpion.jpg
    [titre] => La marque du diable
    [serie] => Le Scorpion
    [auteurs] => Marini - Desberg
    [année] => 2000
    [catégorie] => bandes-dessinées
)
Résultat pour data/exempleLivre2.txt 
Array
(
    [couverture] => scorpion.jpg
    [titre] => La marque du diable
    [serie] => Le Scorpion
    [auteurs] => Marini - Desberg
    [année] => 2000
    [catégorie] => bandes-dessinées
)
<br />
<b>Fatal error</b>:  Uncaught Exception: .....etc ....
 

*/

?>