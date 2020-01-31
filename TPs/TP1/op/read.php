<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<title>Exercice 2 & Exercice 3</title>
</head>
<body>
	<?php
		$file = fopen('liste_noms.txt','r');
		$name = fgets($file);
		$namesArray = [];
		while ($name !== FALSE) { 
			array_push($namesArray, $name);
			$name = fgets($file); 
		}
	?>
</body>
</html>