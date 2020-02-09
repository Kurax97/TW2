<?php
 // Inclusion de la bibliothèque de fonctions :
 require('lib/fonctionsLivre.php');
 
 // Lecture  du fichier et mémorisation dans des variables PHP :
 $file = fopen('data/livres.txt','r');
 $biblio = loadBiblio($file);
 
 // inclusion de la page template :
 require('views/bibliotheque3.php');
?>