<?php

function swap(&$a, &$b) {
    $sw = $a;
    $a = $b;
    $b = $sw;
}

?>