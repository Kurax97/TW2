<?php
function compareAbs($x, $y){
  $cmp = abs($x)-abs($y);
  if ($cmp != 0)
    return $cmp;
  else
  return $x - $y;
}

function comparerChainesParLongueur($ch1, $ch2){
  $cmp = strlen($ch1) - strlen($ch2);
  return $cmp;
}

function comparerChainesParLongueurPlus($ch1, $ch2){
  $c = comparerChainesParLongueur($ch1, $ch2);
  if ($c === 0){
    return strcmp($ch2,$ch1);
  }else
    return $c;
}

?>
