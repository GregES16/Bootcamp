<?php

function my_sort_files(array &$tab) {
    foreach ($tab as $key => $value) {
        echo sort($tab)."\n";
    }
}
$t = ["a" => "baptiste", "b" => "emre", "c" => "test", "d" => "lumos"];

my_sort_files($t);

?>