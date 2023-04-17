<?php

function entier($e) {
    $i = $e;

    do {
        echo $i++." ";
        echo "\n";
    } while ($i <= 42);
    return $e == 42;
}

entier(48);
?>