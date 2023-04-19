<?php

function print_array_with_key(array $my_array) {
    foreach ($my_array as $key => $value) {
        echo "$value : $key\n";
    }
}

// print_array_with_key(["a" => "15", "b" => "3", "c" => "9"]);


?>