<?php
function compareAbs($x, $y){
  $cmp = abs($x)-abs($y);
  if ($cmp != 0)
    return $cmp;
  else
  return $x - $y;
}
  ?>
