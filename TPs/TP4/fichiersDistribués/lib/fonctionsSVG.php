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



?>
