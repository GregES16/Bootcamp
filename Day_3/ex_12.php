<?php

function my_increment(&$a) {
    $a++;
}
// & permet de récuperer la variable elle même et non sa valeur,
// au lieu de recréer une variable local
?>