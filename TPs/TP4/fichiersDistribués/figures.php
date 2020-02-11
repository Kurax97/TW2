<?php
 require('lib/fonctionsSVG.php');
 $centreX= 70;
 $centreY= 90;
 $rayon = 50;
 $a = 60;
 $l = "200 50 250 100 200 100";
 if(isset($_GET['centrex']) &&  is_numeric($_GET['centrex']) && isset($_GET['centrey']) &&  is_numeric($_GET['centrey']) && isset($_GET['rayon']) &&  is_numeric($_GET['rayon']) && ($_GET['rayon'] > 0)){
   require('views/pageFigures.php');

 }else {
   require('views/pageErreur.html');
 }
 /* inclusion de la page */

?>
