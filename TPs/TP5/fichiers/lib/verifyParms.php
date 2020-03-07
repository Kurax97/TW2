<?php
	// script invoqué par le script principal
  
	// création de la classe Exception spécifique
	class ParmsException extends Exception{};
	
	// quelques constantes utiles
	const METHOD = INPUT_GET;
	
 	const CIVILITE_VALUES = ['Mr','Mme']; // valeurs autorisées pour 'civilite'
 	const ADHESION_VALUES = ['oui', 'non', 'dejaMembre']; // valeurs autorisées pour 'adhesion'
	
	const CP_REGEXP ='/^([02][1-9]|[13-8][0-9]|9[0-5]|2A|2B|97[1-6])[0-9]{3}$/';
	// regexp définissant les valeurs autorisées pour 'cp'

	const FIG_VALUES = [ // valeurs autorisées pour 'fig'
        "Maître Yoda",
        "Luke Skywalker",
        "Anakin Skywalker",
        "Dark Vador",
        "Obi-Wan Kenobi",
        "Han Solo",
        "Princesse Leia",
        "Padmée Amidala",
        "Empereur Palpatine",
        "R2D2",
        "C3PO",
        "Chewbacca",
        "Rey",
        "Finn",
        "Poe Dameron",
        "Kylo Ren"
        ];
	
	// Check civilite
    $civilite = filter_input(METHOD, 'civilite', FILTER_SANITIZE_STRING);
	if ($civilite === NULL || $civilite === '')
		throw new ParmsException("param 'civilite' : valeur absente");
	else if (! in_array($civilite, CIVILITE_VALUES))
		throw new ParmsException("param 'civilite' : valeur incorrecte");

	// Check nom
	$nom = filter_input(METHOD, 'nom', FILTER_SANITIZE_STRING);
	if ($nom === NULL || $nom === '')
		throw new ParmsException("param 'nom' : valeur absente");
	
	// Check prenom
	$prenom = filter_input(METHOD, 'prenom', FILTER_SANITIZE_STRING);
	if ($prenom === NULL || $prenom === '')
		throw new ParmsException("param 'prenom' : valeur absente");

	// Check voie
	$voie = filter_input(METHOD, 'voie', FILTER_SANITIZE_STRING);
	if ($voie === NULL || $voie === '')
		throw new ParmsException("param 'voie' : valeur absente");

	// Check ville
	$ville = filter_input(METHOD, 'ville', FILTER_SANITIZE_STRING);
	if ($ville === NULL || $ville === '')
		throw new ParmsException("param 'ville' : valeur absente");

	// Check complAd
	$complAd = filter_input(METHOD, 'complAd', FILTER_SANITIZE_STRING, ['options'=>['default'=>'']]);

	// Check cp
	$cp = filter_input(METHOD, 'cp', FILTER_VALIDATE_REGEXP ,array("options" => array("regexp"=> CP_REGEXP)));
	if ($cp === NULL)
		throw new ParmsException("param 'cp' : valeur absente");
	else if ($cp === FALSE)
		throw new ParmsException("param 'cp' : valeur incorrecte");

	//  Check adhesion
	$adhesion = filter_input(METHOD, 'adhesion', FILTER_SANITIZE_STRING, ['options'=>['default'=>'non']]);
	if (isset($adhesion))
		if (! in_array($adhesion, ADHESION_VALUES))
			throw new ParmsException("param 'adhesion' : valeur incorrecte");

	// Check fig
	$res = filter_input(METHOD, 'fig', FILTER_UNSAFE_RAW, ['flags'=>FILTER_REQUIRE_ARRAY]);
	if ($res === NULL)
		throw new ParmsException("param 'fig' : valeur absente");
	foreach ($res as $k=>$v){
		if (! in_array($v, FIG_VALUES))
			throw new ParmsException("param 'fig' : valeur incorrecte");
	}

	/*
	 * à compléter, pour chaque paramètre :
	 * - tester sa présence et sa validité
	 * - initialiser une variable globale de même nom avec la valeur retenue
	 * - en cas d'erreur ou d'absence (d'un paramètre requis) : déclencher une ParmsException avec un message d'erreur
	 */
    

?>