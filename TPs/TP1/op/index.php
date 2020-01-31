<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<title>Partie s1b</title>
</head>
<body>
	<?php 
		//Question 1 : 

		function divisePlus($s){
			$exp = explode("+", $s);
			$longeurArray = sizeof($exp);
			$newArray = [];
			for ($i = 0; $i < $longeurArray; $i++){
				array_push($newArray, trim($exp[$i]));
			}
			$newCom = "<p>" . implode("</p><p>", $newArray) . "</p>";
			echo $newCom;
			
		}

		// Teste de la fonction divisePlus : 
		// divisePlus("Et qu'on sorte+ Vistement : +Car Clément + Le vous mande.");


		//Question 2:

		function enSpan($s){
			$exp = explode(" - ", $s);
			$longeurArray = sizeof($exp);
			$newArray = [];
			for ($i = 0; $i < $longeurArray; $i++){
				array_push($newArray, trim($exp[$i]));
			}
			$newCom = "<span>" . implode("</span><span>", $newArray) . "</span>";
			echo $newCom;
		}

		// Teste de la fonction enSpan : 
		// enSpan("Dupont - Durand");

	 ?>
</body>
</html>