<?php

function post_levenshtein_score() {
    if($result = levenshtein($_POST["str_one"], $_POST["str_two"])) {
        return $result;
    }
    else { 
        return NULL;
    }
}

?>