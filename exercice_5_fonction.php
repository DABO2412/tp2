<?php
function plusPetit (){
    $min;
    $x= readline ("saisir une valeur : ");
    $y= readline ("saisir une valeur : ");
    $z= readline ("saisir une valeur : ");
    if ($x<=$y && $y<=$z) {
        # code...
        $min=$x;
        echo"le plus petit nombre est $min";
    }
    else
   
    if ($x<=$z && $z<=$y) {
        # code...
        $min=$x;
        echo"le plus petit nombre est $min";
    }
    else
    if ($y<=$x&& $x<=$z) {
        # code...
        $min=$y;
        echo"le plus petit nombre est $min";
    }
    else
    if ($y<=$z && $z<=$x) {
        # code...
        $min=$y;
        echo"le plus petit nombre est $min";
    }
    else
    if ($z<=$y && $y<=$x) {
        # code...
        $min=$z;
        echo"le plus petit nombre est $min";
    }
    else
    if ($z<=$x && $x<=$y) {
        # code...
        $min=$z;
        echo"le plus petit nombre est $min";
    }

}
plusPetit();
?>