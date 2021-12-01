<?php 
echo "\n";
echo"affichage de la structure du tableau"."\n";
echo "\n";
$gt =array("Dabo"=>array("Coumba","Maristes",21),
"Gning"=>array("Amadou","Golf",5),
"Mane"=>array("Lamine","Foire",15));
print_r ($gt);
//a noter que la ligne du dessus sert a afficher la structure du tableau 
echo "\n";
echo"affichage du tableau"."\n";
echo "\n";

//affichage du tableau
foreach($gt as $cle=>$valeur)
{
echo "nom : $cle 
";
foreach($valeur as $cle2=>$val)
{
echo " $cle2 : ", $val, "
";
}
}
?>