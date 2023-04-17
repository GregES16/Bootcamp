<?php

function entier($e) {
    $i = 1;
    if ($e == 0) {
        echo "Boulet !\n";
        return false;
    } else {
        while ($e >= $i) {
            echo $i++." ";
        }
        echo "\n";
    }
}

entier("7");
