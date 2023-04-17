<?php

function multiples(int $nb) {
    for ($i=0; $i <= 200000; $i += $nb) { 
        echo $i."\n";  
    }
}

// multiples(3000);

?>