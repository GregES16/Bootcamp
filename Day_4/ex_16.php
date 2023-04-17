<?php

function print_double_array(array $my_array) {
    foreach ($my_array as $key => $value) {
        $my_array[$key] = "rain";
    }
    // var_dump($my_array);
}

print_double_array();

?>