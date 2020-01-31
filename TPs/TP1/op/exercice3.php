<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<title>Exercice 3</title>
	<link rel="stylesheet" type="text/css" media="screen" href="cstyle.css" />
</head>
<body>
	<?php
		$file = fopen('terrain.txt', 'r');
		$ligne = fgets($file);
		$longLigne = strlen($ligne)-2;
		echo "<table>";
		while ($ligne !== FALSE) {
			$chaine = "";
			echo "<tr>";
			for ($i = 0; $i < $longLigne; $i++){
				if ($ligne[$i] === "B"){
					$chaine = $chaine . "<td class = 'blanc'><span></span></td>";
				}elseif ($ligne[$i] === "N") {
					$chaine = $chaine . "<td class = 'noir'><span></span></td>";
				}else{
					$chaine = $chaine .  "<td><span></span></td>";
				}
			}
			echo "</tr>";
			echo "$chaine";
			$ligne = fgets($file);
		}
		echo "</table>";

		function verification(){

		}
	 ?>
	 <script src="sscript.js"></script>
</body>
</html>