<?php

/*
Version 1 : Exercice 1 

function readBook($file){
  $bookTable = array();
  $line = fgets ($file);
  while ($line && trim($line) !== ''){
      $newLine = explode(":", $line);
      if ($newLine === FALSE){
        throw new Exception("Absence de : ");
      }
      $bookTable[trim($newLine[0])] = trim($newLine[1]);
      $line = fgets ($file);
  }
  return $bookTable;
}

*/


/*

function readBook($file){
  
  $bookTable = array();
  $line = fgets ($file);
  while ($line){
      if(trim($line) == ''){
        $line = fgets ($file);
      }else{
        $newLine = explode(":", $line);
        if ($newLine === FALSE){
          throw new Exception("Absence de : ");
        }
        $bookTable[trim($newLine[0])] = trim($newLine[1]);
        $line = fgets ($file);
      }
  }
  if (empty($bookTable)){
    return FALSE;
  }
  return $bookTable;
}
*/


function readBook($file){
  /*
  This function returns an array that represent a book.
  */
  $libraryTable = array();
  $bookTable = array();
  $line = fgets ($file);
  while ($line){
      if(trim($line) === ''){
        array_push($libraryTable, $bookTable);
        $bookTable = array();
        $line = fgets ($file);
      }else{
        $newLine = explode(":", $line);
        if ($newLine === FALSE){
          throw new Exception("Absence de : ");
        }
        $bookTable[trim($newLine[0])] = trim($newLine[1]);
        $line = fgets ($file);
      }
  }
  if (empty($libraryTable)){
    return FALSE;
  }
  return $libraryTable;
}

function elementBuilder($elementType, $content, $elementClass){
  /*
  This function returns an HTML syntax
  */
  $chaine = "";
  if ($elementType === "img"){
    if ($elementClass !== ""){
      $chaine = "<img " . "class = '" ."$elementClass" ."' $content" . ">";
    }else {
      $chaine = "<img " . "$content" . ">";
    }
  }else{
    if ($elementClass !== ""){
      $chaine = "<" . "$elementType " . "class = '". "$elementClass" . "'>" . "$content". "</" . "$elementType" . ">";
    }else{
      $chaine = "<" . "$elementType " . ">" . "$content". "</" . "$elementType" . ">";
    }
  }
  return $chaine;
}

function authorsToHTML($authors){
  /*
  This function returns an HTML syntax from a list of authors
  */
  $arrayAuthors = explode(" - ", $authors);
  $lenArrayAuthors = sizeof($arrayAuthors);
  $HTMLArray = array();
  for ($i = 0; $i < $lenArrayAuthors; $i++){
    $chaine = "<span>" . $arrayAuthors[$i] . "</span>";
    array_push($HTMLArray, $chaine);
  }
  $finalChaine = implode(" ", $HTMLArray);
  return $finalChaine;
}

function coverToHTML($fileName){
  /*
  This function returns an HTML syntex for an image
  */
  $chaine = "<img src='couvertures/" . "$fileName" . "' alt='image de couverture'/>";
  return $chaine;
}

function propertyToHTML($propName, $propValue){
  if ($propName === "titre"){
    return elementBuilder("h2", $propValue, $propName);
  }
  elseif ($propName === "annee"){
    return elementBuilder("time", $propValue, $propName);
  }
  elseif ($propName === "couverture") {
    $content = coverToHTML($propValue);
    return elementBuilder("div", $content, $propName);
  }
  elseif ($propName === "auteurs") {
    $content = authorsToHTML($propValue);
    return elementBuilder("div", $content, $propName);
  }
  else{
    return elementBuilder("div", $propValue, $propName);
  }
}

function bookToHTML($book){
  $chaine = "<article class='livre'>\n";
  $couv = "";
  $bookArray = array();
  foreach ($book as $key => $value) {
    if ($key === "couverture"){
      $couv .= propertyToHTML($key, $value);
    }else{
      $element = propertyToHTML($key, $value);
      array_push($bookArray, $element);
    }
  }
  $fin = implode("\n", $bookArray);
  $res = "<div class='description'>\n" . $fin . "\n" . "</div>";
  if ($couv !== ""){
    return $chaine . $couv ."\n" . $res . "\n" . "</article>";
  }else{
    return $chaine . $res . "\n" ."</article>";
  }
}


/*function libraryToHTML($file){
  $suiteArticle = "";
  $libraryArray = readBook($file);
  $lengthLibrary = sizeof($libraryArray);
  for ($i = 0; $i < $lengthLibrary; $i++){
    $suiteArticle .= bookToHTML($libraryArray[$i]);
  }
  return $suiteArticle;

}
*/

function loadBiblio($file){
  $suiteArticle = "";
  $libraryArray = readBook($file);
  return $libraryArray;
}

function biblioToHTML($liste){
  $suiteArticle = "";
  $lengthLibrary = sizeof($liste);
  for ($i = 0; $i < $lengthLibrary; $i++){
    $suiteArticle .= bookToHTML($liste[$i]);
  }
  return $suiteArticle;
}



?>


















