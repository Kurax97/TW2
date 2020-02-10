<?php
// Produit le code SVG d'un cercle de centre ($cx,$cy) de rayon $r
function cercle($cx,$cy,$r){
    return "<circle cx=\"$cx\" cy=\"$cy\" r=\"$r\" />";
}
function rect($x,$y,$w,$h,$angle = 0){
    $dw = $w / 2;
    $dh = $h / 2;
    return "<rect x=\"$x\" y=\"$y\" width=\"$w\" height=\"$h\"/>";
}
function polygon($l){
    return "<polygon points=\"" . $l ."\" />";
}
function carreInscrit($cx, $cy, $r, $angle = 0){
    $long = $r * sqrt(2);
    $x = ($cx - ($long/2));
    $y = ($cy - ($long/2));
    return "<rect x=\"$x\" y=\"$y\" width=\"$long\" height=\"$long\" transform=\"rotate($angle,$x,$y)\"/>";

}
function triangleInscrit($cx, $cy, $r, $angle=0){
  $cote = $r * sqrt(3);
  $x0 = $cx;
  $y0 = $cy + $r;
  $x1 = $cx - $cote/2;
  $y1 = $cy - $r/2;
  $x2 = $cx + $cote/2;
  $y2 = $y1;
  return "<polygon points =\"$x0,$y0 $x1,$y1 $x2,$y2\" transform = \"rotate($angle,$cx,$cy)\">";
}


?>
