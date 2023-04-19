<?php

function my_sort_files(array &$tab) {
    sort($tab);
    foreach ($tab as $key => $value) {
        echo $value."\n";
    }
}
// $t = ["a" => "baptiste", "b" => "emre", "c" => "test", "d" => "lumos"];

// my_sort_files($t);

?>