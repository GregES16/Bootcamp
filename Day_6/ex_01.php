<?php

function my_generate_file(string $name) {
    if(fopen($name.".txt", "x")) {
        return true;
    }
    return false;
}

my_generate_file("emre");

?>