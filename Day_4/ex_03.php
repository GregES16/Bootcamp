<?php

function site($age) {
    if($age <= 0) {
        echo "Enfantillage...\n";
    }
    elseif($age == 42) {
        echo "The answer\n";
    }
    else {
        echo "Je peux aller en boite\n";
    }
}

site(-42);


?>