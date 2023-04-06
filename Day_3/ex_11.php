<?php

$nb_a = "10";
$nb_b = "4";

function my_sub() {
   return $GLOBALS["nb_a"] = $GLOBALS["nb_a"] - $GLOBALS["nb_b"];
}

?>