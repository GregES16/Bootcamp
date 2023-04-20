<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
$string = stream_get_line(STDIN, 10 + 1, "\n");


if($N !== 0) {
    for($i = 0; $i <$N; $i++) { 
        echo $string;
    }
}
else echo "empty";
?>