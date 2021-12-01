<?php
function capital($pays){
	switch ($pays) {
    case "France":
        echo "Paris ";
        break;
    case "Allemagne":
        echo "Berlin";
        break;
    case "Mali":
        echo "Bamako";
        break;
    case "Maroc":
        echo "Rabat";
        break;
    case "Espagne":
        echo "Madrid";
        break;
    case "Portugal":
        echo "Lisbonne";
        break;
    case "Angleterre":
        echo "Londres";
        break;
    case "Senegal":
        echo "Dakar";
        break;
    default:
       echo  "Inconnu";}
}
    capital("Senegal");

?>
