<?php

function helix_post_finder() {
    if ($_POST["phelix"]) {
        return $_POST["phelix"];
    } else {
        return NULL;
    }
}

?>