<?php


function print_array_with_key(array $tab) {
    foreach ($tab as $key => $value) {
        echo $key." : ".$value."\n";
    }
}

// print_array_with_key([1, 6, 8, 7, 2, 3]);

?>

