<?php

function my_add_to_cookie(string $key = "pseudo", string $value = "Max_") {
    setcookie($key, $value."toto");
}

// my_add_to_cookie();

?>