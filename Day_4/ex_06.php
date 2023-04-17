<?php

function piou(int $p) {
    $result = "";
    for($i = 0; $i < $p; $i++) {
        $result.= "piou ";
    }
    return $result."\n";
}

$nom = piou(2);
echo "Voici le nombre de piou : ";
echo $nom;


?>