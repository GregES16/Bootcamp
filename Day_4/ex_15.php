<?php

function make_it_rain(array $my_array) {
    foreach ($my_array as $key => $value) {
        $my_array[$key] = "rain";
    }
    // var_dump($my_array);
}

make_it_rain([8, 9, 6, 7, 9, 3, 1])

?>