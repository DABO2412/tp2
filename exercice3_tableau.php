<?php
    $eleve = readline("Entrer le nom de l'étudiant: ");
    $tabs = array();
    while($eleve != 'fin'){
        $note = readline("Entrer la note de ".$eleve.": ");
        $tabs[$eleve] = $note;
        $eleve = readline("Entrer le nom de l'étudiant: ");
    }
    foreach($tabs as $indice => $val){
        echo $indice ." => ". $val ."\r\n";
    }

    echo "La note maximale est: ". max($tabs) ."\r\n";
    echo "La note minimale est: ". min($tabs) ."\r\n";
    echo "\r\n";

    //Affichage du tableau trié par orde alphabétique
    echo "Affichage par orde alphabétique \r\n";
    ksort($tabs);
    foreach($tabs as $indice => $val){
        echo $indice ." => ". $val ."\r\n";
    }

    //Affichage du tableau trié par orde de mérite et Calcul moyenne de la classe
    echo "Affichage par orde de mérite \r\n";
    arsort($tabs);
    $note = 0;
    foreach($tabs as $indice => $val){
        echo $indice ." => ". $val ."\r\n";
        $note += $val;
    }
    $moyenne = $note/count($tabs);
    echo "La moyenne de la classe est: ". $moyenne;