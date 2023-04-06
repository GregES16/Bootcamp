<?php

function print_calls() {
    static $a = 0;
    echo $a, "\n";
    $a++;
}

print_calls();
print_calls();
print_calls();

?>