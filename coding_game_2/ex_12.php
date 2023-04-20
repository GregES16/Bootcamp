<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $ROW = stream_get_line(STDIN, 32 + 1, "\n");
    echo str_replace( "0", "-", $ROW)."\n";
}


?>