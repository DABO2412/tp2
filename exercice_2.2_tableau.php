<?php
for($i=11;$i<=36;$i++)
{
$tab[$i]=chr(54+$i);
}
//lecture avec foreach
foreach($tab as $cle=>$valeur)
{
echo "Elément d'indice $cle : $valeur 
";
}
?>