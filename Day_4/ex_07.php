<?php

function aff_array(array $tab) {
    foreach ($tab as $value) {
        echo $value."\n";
    }
    return count($tab);
}

// aff_array([1, 6, 8, 7, 2, 3]);

?>