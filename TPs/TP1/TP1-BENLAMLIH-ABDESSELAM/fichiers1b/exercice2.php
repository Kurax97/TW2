<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<title>Exercice 2</title>
</head>
<body>
	<?php 
			$file= fopen("liste_noms.txt","r+");
			$line = fgets ($file);
			echo "<ul>";
			while ($line){
				echo "<li>".$line."</li>";
				$line = fgets ($file);
			}
			fclose($file);
			echo "</ul>";
			?>
</body>
</html>