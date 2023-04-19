<?php

// $a = 12;
// $b = "Baptiste";
// $c = true;
// $d = "Emre";

function my_aff_global() {
    foreach ($GLOBALS as $key => $value) {
        if(gettype($value) === "string") {
            echo "$key => $value\n";
        }
    }
}

// my_aff_global();

?>